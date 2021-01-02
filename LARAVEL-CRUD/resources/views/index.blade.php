@extends('mainframe')
@section('title')
Home-Page
@endsection
@section('mainContent')
<h3 class="text-center text-muted my-3">Line Chart</h3>
<p id="demo"></p>
<hr>
<div class="form-group">
  <select class="form-control dynamic" data-dependent="Trade_Code">
		<option value=""> Select Trade Code</option>
		@foreach($dataArray as $data)
		<option value="{{$data->trade_code}}">{{$data->trade_code}}</option>
		@endforeach
  </select>
</div>
	 <div id="chart" style="height: 300px;"></div>

<h3 class="text-center text-muted mt-5 mb-3">Data Table</h3>
<hr>
<a class="mx-3" href="datas/create">Add New Entry</a>
<a href="/LARAVEL-CRUD/public/clearSQLserverData">Clear All Entries</a>

 <table class="main-table mb-5">
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
@push('js')
<script>
 const chart = new Chartisan({
	 el: '#chart',
	 url: "@chart('line_chart')",
	 hooks: new ChartisanHooks()
    .beginAtZero()
    .colors()
    .borderColors()
		.datasets([{ type: 'line', fill: false }]),
 });
</script>
@endpush('js')
