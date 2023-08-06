<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Rank;
use App\Models\Record;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ChartController extends Controller
{
    public function index(){
        $user = \Auth::user();
        $user_id = \Auth::user()->id;
        $records = Record::where('user_id',$user_id)->latest('created_at')->limit(5)->get();
//       $dates = Carbon::createFromFormat('m-d', $records->created_at)->format('m-d');
        $categories = Category::all()->where('user_id',$user_id);

//        ユーザーのランクを取得
        $ranks = Rank::all();
        $user_rank_id = $ranks->where('required_streak_num','>=', $user->streakNum)->min('id');
        $rank = $ranks->where('id',$user_rank_id);
        $tests = collect($rank)->pluck('rank_name');
        $rankName = $tests->first();


        //月別支出を取得
        //$records2 = Record::where('user_id',$user_id)->whereMonth('create_at',$month)->sum('expense');
        $monthlyExpenses = [];
        $monthlyIncome = [];

        for ($month=1;$month<=12;$month++){
            $monthlyExpenses[]= Record::where('user_id',$user_id)->whereMonth('created_at',$month)->sum('expense');
            $monthlyIncome[] = Record::where('user_id',$user_id)->whereMonth('created_at',$month)->sum('income');
        }

        //今月文のデータ取得
        $today = Carbon::now()->format('Y-m');
        $start = $today.'-01 00:00:00';
        $end = $today.'-31 23:59:59';
        $expenses_thisMonth = Record::where('created_at','>',$start)
            ->where('created_at','<',$end)
            ->sum('expense');

        $income_thisMonth = Record::where('created_at','>',$start)
            ->where('created_at','<',$end)
            ->sum('income');

        $saving = ($user->fixed_income + $income_thisMonth) - ($user->fixed_expense + $expenses_thisMonth);
        $goal_saving = $user->goal_saving;




        return view('Analysis.charts',compact('user','records','rankName','monthlyExpenses','monthlyIncome','saving','goal_saving'));
    }
}
