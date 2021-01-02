@extends('mainframe')
@section('title')
Home-Page
@endsection
@section('mainContent')
<hr>
	<a class="mx-3" href="datas/create">Add New Entry</a><a href="datas">Load Data From Json</a><a class="mx-4" href="">Clear Json Data</a>
	<a href="/getjson">Push Json Data To SQL Server</a><a class="mx-3" href="datas/create">Clear SQL Server Data</a>
<hr>
<h3 class="text-center text-muted my-3">Data Charts</h3>

<hr>
<h3 class="text-center text-muted my-3">Data Table</h3>
 <table class="main-table">
	<tr>
		<th>Date</th>
		<th>Trade-Code</th>
		<th>High</th>
		<th>Low</th>
		<th>Open</th>
		<th>Close</th>
		<th>Volume</th>
		<th>Update</th>
		<th>Remove</th>
	</tr>
  @foreach($dataArray as $data)
		<tr>
			<td><a href="datas/{{$data->id}}">{{$data->date}}</a></td>
			<td>{{$data->trade_code}}</td>
			<td>{{$data->high}}</td>
			<td>{{$data->low}}</td>
			<td>{{$data->open}}</td>
			<td>{{$data->close}}</td>
			<td>{{$data->volume}}</td>
			<td><a class="btn btn-warning" href="/LARAVEL-CRUD/public/datas/{{$data->id}}/edit">Edit</a></td>
      <td><form class="form-horizontal" method="post" action="/LARAVEL-CRUD/public/datas/{{$data->id}}">
  			@csrf
  			@method('delete')
  			<!-- Button -->
  			  <label class="control-label" for="submit"></label>
  			    <button id="submit" name="submit" class="btn btn-danger">Delete</button>
  		</form></td>
		</tr>
    @endforeach
 </table>

@endsection
