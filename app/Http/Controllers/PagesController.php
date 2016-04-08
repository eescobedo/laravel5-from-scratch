<?php namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
        $people = ['Enner', 'Ranferi', 'Ivanof'];

        return view('welcome')->withPeople($people);
    }

    public function about()
    {
        return view('pages.about');
    }
}
