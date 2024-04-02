<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\DB; 


class GameController extends Controller
{
    public function addScore(Request $request) {
        $incomingFields = $request->all();
        $incomingFields['user_id'] = auth()->id();
        $incomingFields['username'] = auth()->user()->username;
        Game::create($incomingFields);
    }

    public function rankPlayers() {

        $rankings = DB::table('games')
        ->select('user_id','username','bulls','cows','total_points')
        ->where('total_points','>' , 2)
        ->orderBy('created_at', 'DESC')
        ->limit(10)
        ->get();

        $rankings = $rankings->unique('user_id');

        return view('ranking',['rankings' => $rankings, 'index' => 0]);
    }
}
