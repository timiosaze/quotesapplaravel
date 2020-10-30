@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				<h3>Edit Quote</h3>
				<form action="">
					<div class="form-group">
						<textarea name="" id="" cols="20" rows="3" class="form-control">You cant understand everything, but you must push yourself to understand the system</textarea>
					</div>
					<div class="form-group">
						<input name="author" type="text" class="form-control" placeholder="Author of Quote" value="Ryan Dhal">
					</div>
					<button class="btn-primary btn float-right">Update</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</section>

@endsection
		
	