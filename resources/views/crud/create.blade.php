@extends('mainframe')

@section('title')
Create a new entry
@endsection

@section('mainContent')
<hr>
<div>
	<a href="/">Back</a>
</div>
<hr>
	<h1 class="text-muted my-3">Create New Entry</h1>
	<form class="form-horizontal" method="post" action="/datas">
		@csrf
			<fieldset>
			<!-- Text input-->
			<div class="form-group row">
			  <label class="col-md-1 col-form-label" for="date">Date</label>
			  <div class="col-md-4">
			  <input id="date" name="date" type="text" placeholder="YYYY-MM-DD" class="form-control input-md">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group row">
				<label class="col-md-1 col-form-label" for="trade_code">Trade Code</label>
				<div class="col-md-4">
				<input id="trade_code" name="trade_code" type="text" placeholder="Trade Code" class="form-control input-md">
				</div>
			</div>

			<!-- Text input-->
			<div class="form-group row">
				<label class="col-md-1 col-form-label" for="high">High</label>
				<div class="col-md-4">
				<input id="high" name="high" type="text" placeholder="High" class="form-control input-md">
				</div>
			</div>

			<!-- Text input-->
			<div class="form-group row">
				<label class="col-md-1 col-form-label" for="low">Low</label>
				<div class="col-md-4">
				<input id="low" name="low" type="text" placeholder="Low" class="form-control input-md">
				</div>
			</div>

			<!-- Text input-->
			<div class="form-group row">
				<label class="col-md-1 col-form-label" for="open">Open</label>
				<div class="col-md-4">
				<input id="open" name="open" type="text" placeholder="Open" class="form-control input-md">
				</div>
			</div>

			<!-- Text input-->
			<div class="form-group row">
				<label class="col-md-1 col-form-label" for="close">Close</label>
				<div class="col-md-4">
				<input id="close" name="close" type="text" placeholder="Close" class="form-control input-md">
				</div>
			</div>

			<!-- Text input-->
			<div class="form-group row">
				<label class="col-md-1 col-form-label" for="volume">Volume</label>
				<div class="col-md-4">
				<input id="volume" name="volume" type="text" placeholder="Volume" class="form-control input-md">
				</div>
			</div>


			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-block btn-success btn-lg">Create</button>
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
