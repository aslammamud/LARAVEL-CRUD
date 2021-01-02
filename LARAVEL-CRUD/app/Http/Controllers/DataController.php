<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      return view('index')
      ->with('dataArray',Data::all());
      //->with('jumman',$jumman);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $validatedData = request()->validate([
        'date' => 'required',
        'trade_code' => 'required',
        'high' => 'required',
        'low' => 'required',
        'open' => 'required',
        'close' => 'required',
        'volume' => 'required'
     ]);

     Data::create($validatedData);

     return redirect('datas/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        return view('crud.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        return view('crud.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
      $validatedData = request()->validate([
          'date' => 'required',
          'trade_code' => 'required',
          'high' => 'required',
          'low' => 'required',
          'open' => 'required',
          'close' => 'required',
          'volume' => 'required'
      ]);

      $data->update($validatedData);

      return redirect('/datas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
      $data->delete();
      return redirect('/');
    }
}
