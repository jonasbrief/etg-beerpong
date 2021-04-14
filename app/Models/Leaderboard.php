<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaderboard extends Model
{
    protected $fillable = ['team_name', 'team_id', 'wins', 'member_one', 'member_two'];
    public function teams()
    {
        return $this->hasMany(BeerPongTable::class);
    }
}
