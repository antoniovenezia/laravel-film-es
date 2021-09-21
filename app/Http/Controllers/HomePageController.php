<?php

namespace App\Http\Controllers;
use App\Film;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allFilms=Film::all();
        return view('films.index', compact('allFilms'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('films.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateFunction($request);
        $data=$request->all();
        $singleFilm= new Film;
        $this->fillAndSave($singleFilm, $data);
     
        return view('films.show',['singleFilm'=>$singleFilm]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film=Film::find($id);


        return view('films.show', compact('film'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {

        return view('films.edit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film)
    {
        $this->validateFunction($request);
        $data=$request->all();
        $this->fillAndSave($film, $data);
        return view('films.show', compact('film'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('films.index');
    }
    private function fillAndSave(Film $film, $data){
        $film->titolo=$data['titolo'];
        $film->data=$data['data'];
        $film->trama=$data['trama'];
        $film->cast=$data['cast'];
        $film->genere=$data['genere'];
        $film->copertina=$data['copertina'];
        $film->save();
    }
    private function validateFunction($request){
        $request->validate([
            'titolo'=>'required',
            'data'=>'date',
            'trama'=>'required | max:65500',
            'cast'=> 'required | max:65500',
            'genere'=>'required',
            'copertina'=>'required'
        ]);
    }
}
