@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				@include('includes.validation')
				@include('includes.session')
				<h3>New Quote</h3>
				<form action="{{route('quotes.store')}}" method="POST">
					@csrf
					<div class="form-group">
						<textarea name="the_quote" id="" cols="20" rows="3" class="form-control" placeholder="Quote"></textarea>
					</div>
					<div class="form-group">
						<input name="author" type="text" class="form-control" placeholder="Author of Quote">
					</div>
					<button class="btn-primary btn float-right">Create</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</section>

		<section class="section">
			<div class="data">
				<h5>Quotes</h5>
				<ul>
					@forelse ($quotes as $quote)

					<li class="data-list">
						<div class="data-text">
							<p class="text-class">{{$quote->the_quote}}</p>
							<p class="float-right author">{{$quote->author}}</p>
							<div class="clearfix"></div>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="{{route('quotes.edit', $quote->id)}}" class="edit">Edit</a>
								</div>
								<div class="col text-center">
									<a href="#" class="delete" data-toggle="modal" data-target="#exampleModal{{$quote->id}}">Delete</a>
								</div>
							</div>
						</div>
					</li>
					
					<!-- Modal -->
					<div class="modal fade" id="exampleModal{{$quote->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Delete Quote</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							</div>
							<div class="modal-body">
							{{Str::limit($quote->the_quote, 20)}}
							</div>
							<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<form action="{{route('quotes.destroy', $quote->id)}}" method="POST">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
							</div>
						</div>
						</div>
					</div>

					@empty
					<li class="no-data text-center">
						No quotes yet.
					</li>	
					@endforelse
				</ul>
			</div>
		</section>
		<section class="section">
			{{$quotes->links()}}
		</section>

@endsection
	