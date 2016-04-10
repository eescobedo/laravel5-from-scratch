<?php namespace App\Http\Controllers;

use App\Card;
use App\Note;

use App\Http\Requests;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
//        $note = new Note;
//        $note->body = $request->body;
//        $card->notes()->save($note);

        $card->addNote(
            new Note($request->all())
        );

        return back();
    }

    public function edit(Note $note)
    {
        return view ('notes.edit', compact ('note'));
    }

    public function update(Request $request, Note $note)
    {
//        return $request->all();

        $note->update($request->all());
        
        return back();
    }
}
