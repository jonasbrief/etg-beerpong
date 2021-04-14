<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leaderboard;
use App\Models\BeerPongTable;
use Illuminate\Support\Facades\DB;

class LeaderboardController extends Controller
{
    public function addWinner(Request $request){
        $leaderboard = Leaderboard::updateOrCreate(
            ['team_name' => $request->teamname, 'team_id' => $request->table['table_id'], 'member_one' => $request->member_one, 'member_two' => $request->member_two],
            ['wins' => DB::raw('wins+1')]
        );

        //$leaderboard = new Leaderboard;
        

        //$leaderboard->team_name = $request->teamname;
        //$leaderboard->team_id = $request->table['table_id'];
        //$leaderboard->wins = $leaderboard->wins + 1;

        $leaderboard->save();

        return $leaderboard->toJson(JSON_PRETTY_PRINT);
    }

    public function index(){
        $leaderboard = Leaderboard::all();
        return $leaderboard->toArray();
    }
}
