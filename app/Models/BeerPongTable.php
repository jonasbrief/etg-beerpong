<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeerPongTable extends Model
{
    use HasFactory;
    protected $fillable = ['team_one', 'team_two', 'cup_1', 'cup_2', 'cup_3', 'cup_4', 'cup_5', 'cup_6', 'cup_7', 'cup_8', 'cup_9', 'cup_10', 'cup_11', 'cup_12', 'cup_13', 'cup_14', 'cup_15', 'cup_16', 'cup_17', 'cup_18', 'cup_19', 'cup_20'];
    protected $primaryKey = 'table_id';

    public function teams() {
        return $this->hasMany(Team::class);
    }
}
