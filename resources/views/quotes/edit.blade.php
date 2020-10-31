@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				@include('includes.validation')
				<h3>Edit Quote</h3>
				<form action="{{route('quotes.update', $quote->id)}}" method="POST">
					@csrf
					@method('PUT')
					<div class="form-group">
						<textarea name="the_quote" id="" cols="20" rows="3" class="form-control">{{$quote->the_quote}}</textarea>
					</div>
					<div class="form-group">
						<input name="author" type="text" class="form-control" placeholder="Author of Quote" value="{{$quote->author}}">
					</div>
					<button class="btn-primary btn float-right">Update</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</section>

@endsection
		
	