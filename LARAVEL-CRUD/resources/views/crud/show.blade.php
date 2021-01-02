@extends('mainframe')
@section('title')
Entry Details
@endsection
@section('mainContent')
<hr>
<div>
	<a href="/LARAVEL-CRUD/public/datas">Back</a>
</div>
<hr>
		<table style="font-size:18px; width:60%" class="ml-5 my-5 main-table">
		 <tr>
			 <td>Date</td>
			 <td>{{$data->date}}</td>
		 </tr>

		 <tr>
			 <td>Trade-Code</td>
			 <td>{{$data->trade_code}}</td>
		 </tr>

		 <tr>
		 	<td>High</td>
		 	<td>{{$data->high}}</td>
		 </tr>

		 <tr>
			<td>Low</td>
			<td>{{$data->low}}</td>
		 </tr>

		 <tr>
			<td>Open</td>
			<td>{{$data->open}}</td>
		 </tr>

		 <tr>
			<td>Close</td>
			<td>{{$data->close}}</td>
		 </tr>

		 <tr>
			<td>Volume</td>
			<td>{{$data->volume}}</td>
		 </tr>

		 <tr>
			<td><a class="btn btn-warning " href="/LARAVEL-CRUD/public/datas/{{$data->id}}/edit">Edit</a></td>
			<td><form method="post" action="/LARAVEL-CRUD/public/datas/{{$data->id}}">
			 @csrf
			 @method('delete')
				 <label for="submit"></label>
					 <button id="submit" name="submit" class="btn btn-danger">Delete</button>
			</form></td>
		 </tr>
		</table>


@endsection
