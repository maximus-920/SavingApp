<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        "name",
        "gender",
        "age",
        "occupation",
        "email",
        "password",
        "fixed_income",
        "fixed_expense",
        "rank_id",
        "fixed_income",
        "fixed_expense",
        "goal_saving",
        "streakNum"
    ];

    public function records(){
        return $this->hasMany(Record::class);
    }
}
