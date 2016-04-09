<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CardsController extends Controller
{
    public function index()
    {
//        $cards = DB::table('cards')->get();
        $cards = Card::all();

        return view ('cards.index', compact('cards'));
    }

//    public function show($id)
    public function show(Card $card)
    {
//        $card = Card::find($card);
//        return $card; // return object with json format

        return view('cards.show', compact('card'));
    }
}
