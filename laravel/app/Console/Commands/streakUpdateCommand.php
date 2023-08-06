<?php

namespace App\Console\Commands;

use App\Models\Record;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;


class streakUpdateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'streak:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
//        info('streak update');
//        $users = DB::table('users);
//        $oneMonth = Carbon::today()->subDay(30);
////      $records = Record::whereDate('created_at', '>=', $oneMonth)->where('user_id','4')->get();
//
//        for($i=0;$i<$users->count();$i++){
//            $records = Record::whereDate('created_at', '>=', $oneMonth)->where('user_id',$i)->get();
//            $user = $users->where('id', $i)->first();
////            $goal_saving = $user->get('goal_saving');
////            $streakNum = $user->get('streakNum');
//
//            $fixed_expense = $user->get('fixed_expense');
//            $temp_expense = $records->sum('expense');
//            $total_expense = $fixed_expense + $temp_expense;
//            $fixed_income = $user->get('fixed_income');
//            $temp_income = $records->sum('income');
//            $total_income = $fixed_income + $temp_income;
//            $final_saving = $total_income - $total_expense;
//            $newStreakNum = $streakNum + 1;
//            $user->streakNum = $newStreakNum;
//            $user->save();
//            if ($goal_saving <= $final_saving){
//                $newStreakNum = $streakNum + 1;
//                User::where('id', $i)->update([
//                   'streakNum' => $newStreakNum
//                ]);
//            }
//        }


        $users = User::all();
        $records = Record::all();
        $oneMonth = Carbon::today()->subDay(30);

        foreach ($users as $user) {
            $user_id = $user->id;
            $records = Record::whereDate('created_at', '>=', $oneMonth)->where('user_id', $user_id)->get();
            $goal_saving = $user->goal_saving;
            $streakNum = $user->streakNum;
            $fixed_expense = $user->fixed_expense;
            $temp_expense = $records->where('user_id', $user_id)->sum('expense');
            $total_expense = $fixed_expense + $temp_expense;
            $fixed_income = $user->fixed_income;
            $temp_income = $records->where('user_id', $user_id)->sum('income');
            $total_income = $fixed_income + $temp_income;
            $final_saving = $total_income - $total_expense;
            if ($goal_saving <= $final_saving) {
                $newStreakNum = $streakNum + 1;
                User::where('id', $user_id)->update([
                    'streakNum' => $newStreakNum
                ]);
            }
            return 0;
        }
    }
}
