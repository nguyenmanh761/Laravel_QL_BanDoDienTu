<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Style as Style;
use App\Http\Requests\StoreStyle;
class StyleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $styles = Style::all();

        return view('style.index', ['styles'=>$styles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('style.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStyle $request)
    {
        $style = new Style();
        $style->name = $request->name;
        $style->description = $request->description;

        $style->save();

        return $this->index();
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $style = Style::findOrFail($id);

        return view('style.edit', ['style'=>$style]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStyle $request, $id)
    {
        $style = Style::findOrFail($id);
        $style->name = $request->name;
        $style->description = $request->description;

        $style->save();

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $style = Style::findOrFail($id);

        $style->delete();

        return $this->index();
    }
}
