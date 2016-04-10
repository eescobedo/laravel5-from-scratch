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

        return view('cards.index', compact('cards'));
    }

//    public function show($id)
    public function show(Card $card)
    {
//        $card = Card::find($card); -- get information of card
//        $card = Card::with('notes')->get(); -- get card with information of note.
//        $card = Card::with('notes.user')->find(1); -- get card with note and user information
        $card->load('notes.user'); // get card with note and user information, simple
//        return $card;


        return view('cards.show', compact('card'));
    }
}
