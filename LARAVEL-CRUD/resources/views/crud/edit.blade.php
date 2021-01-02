@extends('mainframe')

@section('title')
Update  Data
@endsection

@section('mainContent')
<hr>
<div>
	<a href="/LARAVEL-CRUD/public/datas">Back</a>
</div>
<hr>
	<h2 class="my-4">Update Data</h2>
	<form class="form-horizontal" method="post" action="/LARAVEL-CRUD/public/datas/{{$data->id}}">
		@csrf
		@method('put')
			<fieldset>
						<!-- Text input-->
						<div class="form-group row">
						  <label class="col-md-1 col-form-label" for="date">Date</label>
						  <div class="col-md-4">
						  <input id="date" name="date" type="text" placeholder="Enter Date" value="{{$data->date}}" class="form-control input-md">
						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-1 col-form-label" for="trade_code">Trade Code</label>
							<div class="col-md-4">
							<input id="trade_code" name="trade_code" type="text" placeholder="Trade Code" value="{{$data->trade_code}}" class="form-control input-md">
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-1 col-form-label" for="high">High</label>
							<div class="col-md-4">
							<input id="high" name="high" type="text" placeholder="High" value="{{$data->high}}" class="form-control input-md">
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-1 col-form-label" for="low">Low</label>
							<div class="col-md-4">
							<input id="low" name="low" type="text" placeholder="Low" value="{{$data->low}}" class="form-control input-md">
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-1 col-form-label" for="open">Open</label>
							<div class="col-md-4">
							<input id="open" name="open" type="text" placeholder="Open" value="{{$data->open}}" class="form-control input-md">
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-1 col-form-label" for="close">Close</label>
							<div class="col-md-4">
							<input id="close" name="close" type="text" placeholder="Close" value="{{$data->close}}" class="form-control input-md">
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-1 col-form-label" for="volume">Volume</label>
							<div class="col-md-4">
							<input id="volume" name="volume" type="text" placeholder="Volume" value="{{$data->volume}}" class="form-control input-md">
							</div>
						</div>


			<!-- Button -->
			<div class="form-group center">
			  <label class="col-md-1 col-form-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-block btn-success">Save</button>
			  </div>
			</div>

			</fieldset>
		</form>


		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
<br><hr>
@endsection
