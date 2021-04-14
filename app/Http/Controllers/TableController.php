<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BeerPongTable;
use App\Models\Team;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    public function addRoom(Request $request){
        $table = new BeerPongTable;
        $table->cup_1 = false;
        $table->cup_2 = false;
        $table->cup_3 = false;
        $table->cup_4 = false;
        $table->cup_5 = false;
        $table->cup_6 = false;
        $table->cup_7 = false;
        $table->cup_8 = false;
        $table->cup_9 = false;
        $table->cup_10 = false;
        $table->cup_11 = false;
        $table->cup_12 = false;
        $table->cup_13 = false;
        $table->cup_14 = false;
        $table->cup_15 = false;
        $table->cup_16 = false;
        $table->cup_17 = false;
        $table->cup_18 = false;
        $table->cup_19 = false;
        $table->cup_20 = false;
        
        $table->save();

        return $table->toJson(JSON_PRETTY_PRINT);
    }

    public function delLastRoom(Request $request){
        $table = BeerPongTable::find(DB::table('beer_pong_tables')->latest()->first()->table_id);
        $table->delete();
    }

    public function randomStore(Request $request, $id){
        $bptable = BeerPongTable::find($id);
        $bptable->cup_1 = (bool)random_int(0, 1);
        $bptable->cup_2 = (bool)random_int(0, 1);
        $bptable->cup_3 = (bool)random_int(0, 1);
        $bptable->cup_4 = (bool)random_int(0, 1);
        $bptable->cup_5 = (bool)random_int(0, 1);
        $bptable->cup_6 = (bool)random_int(0, 1);
        $bptable->cup_7 = (bool)random_int(0, 1);
        $bptable->cup_8 = (bool)random_int(0, 1);
        $bptable->cup_9 = (bool)random_int(0, 1);
        $bptable->cup_10 = (bool)random_int(0, 1);
        $bptable->cup_11 = (bool)random_int(0, 1);
        $bptable->cup_12 = (bool)random_int(0, 1);
        $bptable->cup_13 = (bool)random_int(0, 1);
        $bptable->cup_14 = (bool)random_int(0, 1);
        $bptable->cup_15 = (bool)random_int(0, 1);
        $bptable->cup_16 = (bool)random_int(0, 1);
        $bptable->cup_17 = (bool)random_int(0, 1);
        $bptable->cup_18 = (bool)random_int(0, 1);
        $bptable->cup_19 = (bool)random_int(0, 1);
        $bptable->cup_20 = (bool)random_int(0, 1);
        $bptable->team_one = null;
        $bptable->team_two = null;


        $team_one = Team::find($request->team_one);
        $team_two = Team::find($request->team_two);

        $team_one->table_id = 'Random 1';
        $team_two->table_id = 'Random 2';

        $team_one->save();
        $team_two->save();


        $bptable->save();

        return $bptable->toJson(JSON_PRETTY_PRINT);
    }
    
    public function show(Request $request, $id){
        $bptable = BeerPongTable::findorFail($id);
        return $bptable->toJson(JSON_PRETTY_PRINT);
    }

    public function reset(Request $request, $id){
        $bptable = BeerPongTable::find($id);
        $bptable->cup_1 = false;
        $bptable->cup_2 = false;
        $bptable->cup_3 = false;
        $bptable->cup_4 = false;
        $bptable->cup_5 = false;
        $bptable->cup_6 = false;
        $bptable->cup_7 = false;
        $bptable->cup_8 = false;
        $bptable->cup_9 = false;
        $bptable->cup_10 = false;
        $bptable->cup_11 = false;
        $bptable->cup_12 = false;
        $bptable->cup_13 = false;
        $bptable->cup_14 = false;
        $bptable->cup_15 = false;
        $bptable->cup_16 = false;
        $bptable->cup_17 = false;
        $bptable->cup_18 = false;
        $bptable->cup_19 = false;
        $bptable->cup_20 = false;

        $bptable->team_one = null;
        $bptable->team_two = null;

        $team_one = Team::find($request->table['team_one']);
        $team_two = Team::find($request->table['team_two']);

        $team_one->table_id = null;
        $team_two->table_id = null;

        $team_one->save();
        $team_two->save();
        
        $bptable->save();

        return $bptable->toJson(JSON_PRETTY_PRINT);
    }

    public function fetchAllTables(){
        $bptables = BeerPongTable::all();
        return $bptables->toJson(JSON_PRETTY_PRINT);
    }

    public function setTeams(Request $request, $id){
        $bptable = BeerPongTable::find($id);
        $bptable->team_one = $request->team_one;
        $bptable->team_two = $request->team_two;

        $team_one = Team::find($request->team_one);
        $team_two = Team::find($request->team_two);

        $team_one->table_id = $bptable->table_id;
        $team_two->table_id = $bptable->table_id;

        $team_one->save();
        $team_two->save();
        
        $bptable->save();

        return $bptable->toJson(JSON_PRETTY_PRINT);
    }

    public function updateCup(Request $request){

        $bptable = BeerPongTable::find($request->table['table_id']);
        $cup = "cup_" . $request->ident;
        $bptable->$cup = !$bptable->$cup;

        $bptable->save();

        return $bptable->toJson(JSON_PRETTY_PRINT); 
    }
}
