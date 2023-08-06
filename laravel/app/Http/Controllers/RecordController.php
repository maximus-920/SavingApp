<?php

namespace App\Http\Controllers;

use App\Models\Rank;
use App\Models\Record;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class RecordController extends Controller
{
    public function index(){
//        $user = \Auth::user();

        $records = Record::all();
//        $username = Record::with('name')->find($user->user_id);
        return view('record.index', compact('records'));
    }

    public function create(){
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
        return view('record.create',compact('records','categories','user','rankName'));
    }

    public function store(Request $request){
        Record::create(
            [
//                ユーザーiDをログイン機能実装後に追加,
                'note' => $request['note'],
                'expense' => $request['expense'],
                'income' => $request['income'],
                'category_id' => $request['category_id'],
                'user_id' => Auth::user()->id
            ]
        );

        return redirect()->route('record.create');
    }

    public function show(){
        $user = Auth::user();
        $user_id = \Auth::user()->id;
        $records = Record::where('user_id',$user_id)->latest('created_at')->limit(5)->get();

        $ranks = Rank::all();
        $user_rank_id = $ranks->where('required_streak_num','>=', $user->streakNum)->min('id');
        $rank = $ranks->where('id',$user_rank_id);
        $tests = collect($rank)->pluck('rank_name');
        $rankName = $tests->first();
        return view('record.delete',compact('rankName','user','records'));
    }

    public function delete(Request $request){
        $record = Record::find($request['id']);
        $record->delete();

        return redirect()->route('record.show');
    }

    public function showCategory(){

        $user = \Auth::user();
        $categories = Category::all()->where('user_id',$user->id);

        //        ユーザーのランクを取得
        $ranks = Rank::all();
        $user_rank_id = $ranks->where('required_streak_num','>=', $user->streakNum)->min('id');
        $rank = $ranks->where('id',$user_rank_id);
        $tests = collect($rank)->pluck('rank_name');
        $rankName = $tests->first();

        return view('record.category', compact('rankName','user','categories'));
    }

    public function createCategory(Request $request){
        $user = \Auth::user();

        Category::create([
            'category_name'=>$request['name'],
            'user_id'=> Auth::user()->id

        ]);

        return redirect()->route('category.show');
    }

    public function rank(){

        $user = \Auth::user();
        $user_id = \Auth::user()->id;
        $streak_num = $user->streakNum;

        $goal1 = 3;
        $goal2 = 6;
        $goal3 = 9;
        $goal4 = 12;
        $goal5 = 15;
        $goal6 = 18;

        $goal1_archive = 0;
        $goal2_archive = 0;
        $goal3_archive = 0;
        $goal4_archive = 0;
        $goal5_archive = 0;
        $goal6_archive = 0;

        //各目標に対して目標達成度を％で表示するためのコード
        if($streak_num != 0){
            $goal1_archive = ($streak_num / $goal1) * 100;
            $goal2_archive = ($streak_num / $goal2) * 100;
            $goal3_archive = ($streak_num / $goal3) * 100;
            $goal4_archive = ($streak_num / $goal4) * 100;
            $goal5_archive = ($streak_num / $goal5) * 100;
            $goal6_archive = ($streak_num / $goal6) * 100;
        }

        //        ユーザーのランクを取得
        $ranks = Rank::all();
        $user_rank_id = $ranks->where('required_streak_num','>=', $user->streakNum)->min('id');
        $rank = $ranks->where('id',$user_rank_id);
        $tests = collect($rank)->pluck('rank_name');
        $rankName = $tests->first();

        return view('Rank.index',compact('user', 'goal1_archive','goal2_archive','goal3_archive','goal4_archive','goal5_archive','goal6_archive', 'rankName'));
    }
}
