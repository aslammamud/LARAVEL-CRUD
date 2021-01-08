<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use App\Charts\LineChart;

class DataController extends Controller
{

    public function index()
    {
      $trade_lists = Data::select('trade_code')->groupBy('trade_code')->get()->pluck('trade_code')->toArray();
      return view('index')
      ->with('dataArray', Data::all())
      ->with('trade_lists',$trade_lists);
    }

    public function create()
    {
        return view('crud.create');
    }

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

    public function show(Data $data)
    {
        return view('crud.show', compact('data'));
    }

    public function edit(Data $data)
    {
        return view('crud.edit', compact('data'));
    }

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

    public function destroy(Data $data)
    {
      $data->delete();
      return redirect('/');
    }
}
