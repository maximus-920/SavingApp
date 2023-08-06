<?php

namespace App\Http\Controllers;

use App\Models\Rank;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index(){
        return view('user.index');
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        User::create([
            'name'=>$request['name'],
            'gender' => $request['gender'],
            'age' => $request['age'],
            'occupation'=>$request['occupation'],
            'email'=>$request['email'],
            'password' => Hash::make($request['password'])
        ]);

        return redirect()->to('login');
    }

    public function myPage(){

        $user = \Auth::user();

        //        ユーザーのランクを取得
        $ranks = Rank::all();
        $user_rank_id = $ranks->where('required_streak_num','>=', $user->streakNum)->min('id');
        $rank = $ranks->where('id',$user_rank_id);
        $tests = collect($rank)->pluck('rank_name');
        $rankName = $tests->first();

        return view('myPage.mypage', compact('user', 'rankName'));
    }

    public function update(Request $request){

        $user = \Auth::user();

        $user->name = $request['name'];
        $user->age = $request['age'];
        $user->occupation = $request['occupation'];
        $user->fixed_income = $request['fixed_income'];
        $user->fixed_expense = $request['fixed_expense'];
        $user->goal_saving = $request['goal_saving'];
        $user->save();

        return redirect()-> route('user.myPage');
    }

    public function initial(){

        //        ユーザーのランクを取得
        $ranks = Rank::all();
        $user_rank_id = $ranks->where('required_streak_num','>=', $user->streakNum)->min('id');
        $rank = $ranks->where('id',$user_rank_id);
        $tests = collect($rank)->pluck('rank_name');
        $rankName = $tests->first();

        return view('myPage.initial', compact('rankName'));
    }

    public function initialUpdate(Request $request){
        $user = \Auth::user();

        $user->fixed_income = $request['fixed_income'];
        $user->fixed_expense = $request['fixed_expense'];
        $user->goal_saving = $request['goal_saving'];
        $user->is_initialized = true;
        $user->save();


        return redirect()->route('record.create');
    }

    public function deleteSelect(){
        $users = User::all();
        return view('delete',compact('users'));
    }

    public function delete(Request $request){
        $user = User::find($request['id']);
        $user->delete();

        return redirect()->route('user.select');
    }
}
