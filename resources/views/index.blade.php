@extends('mainframe')
@section('title')
Home-Page
@endsection
@section('mainContent')
<h3 class="text-center text-muted my-3">Line Chart</h3>
<hr>

<div class="form-group">
  <select class="form-control" data-dependent="Trade_Code">
		<option value=""> Select Trade Code</option>
		@foreach($trade_lists as $data)
		<option value="{{$data}}">{{$data}}</option>
		@endforeach
  </select>
</div>


<!--
{!! Form::select('area_id',$trade_lists,null,['class'=>'form-control']) !!}
-->

<div id="chart" style="height: 300px;"></div>

<h3 class="text-center text-muted mt-5 mb-3">Data Table</h3>
<hr>
<a href="/datas/create">Add New Entry</a><a class="mx-3" href="/getjson">Push Json Data To SQL Server</a>
<a href="/clearSQLserverData">Clear All Entries</a>

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
			<td><a href="/datas/{{$data->id}}">{{$data->date}}</a></td>
			<td>{{$data->trade_code}}</td>
			<td>{{$data->high}}</td>
			<td>{{$data->low}}</td>
			<td>{{$data->open}}</td>
			<td>{{$data->close}}</td>
			<td>{{$data->volume}}</td>
			<td><a class="btn btn-warning" href="/datas/{{$data->id}}/edit">Edit</a></td>
      <td><form class="form-horizontal" method="post" action="/datas/{{$data->id}}">
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

chart = new Chartisan({
	el: '#chart',
	url: "@chart('line_chart')"+"?id={{}}",
	hooks: new ChartisanHooks()
	 .beginAtZero()
	 .colors()
	 .borderColors()
	 .datasets([{ type: 'line', fill: false }]),
});


 //function makeChart(label, data) {
    //chart.data.labels;
  //  chart.data.datasets.forEach((dataset) => {
    //    dataset.data;
    //});
  //  chart.update();
//}

</script>
@endpush('js')
