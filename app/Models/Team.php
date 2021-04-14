<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = ['team_name', 'member_one', 'member_two', 'wins'];

    public function table() {
        return $this->belongsTo(Table::class);
    }
}
