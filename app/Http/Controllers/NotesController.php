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

        $this->validate($request, [
            'body' => 'required|min:10'
        ]);


        $note = new Note($request->all());
//        $note->user_id = 1; // hardcoded, correctly is under this line
//        $note->user_id = Auth::id();

        $card->addNote($note, 1); // hardcode user id

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
