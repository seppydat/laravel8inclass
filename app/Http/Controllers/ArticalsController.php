<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articals;
use App\Http\Requests\ArticalRequest;

class ArticalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articals = Articals::paginate(16);

        return view('Articals.index')->with('articals', $articals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Articals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticalRequest $request)
    {
        // this is store
        
        $artical = new Articals();

        $data = $request->all();
        
        $artical->title = $data['title'];
        $artical->contents = $data['contents'];

        $artical->save();

        return redirect()->route('baiviet.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $artical = Articals::find($id);

        return view('Articals.detail')->with('artical', $artical);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $artical = Articals::find($id);

        return view('Articals.edit')->with('artical', $artical);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticalRequest $request, $id)
    {
        //
        $artical = Articals::find($id);

        $artical->title = $request->title;
        $artical->contents = $request->contents;

        $artical->save();

        return redirect()->route('baiviet.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Articals::destroy($id);

        return redirect()->route('baiviet.index');
    }
}
