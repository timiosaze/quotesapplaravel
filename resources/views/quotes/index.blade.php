@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				<h3>New Quote</h3>
				<form action="">
					<div class="form-group">
						<textarea name="quote" id="" cols="20" rows="3" class="form-control" placeholder="Quote"></textarea>
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
					<li class="no-data text-center">
						No quotes yet.
					</li>
					<li class="data-list">
						<div class="data-text">
							<p class="text-class">You cant understand everything, but you must push yourself to understand the system</p>
							<p class="float-right author">Ryan Dhal</p>
							<div class="clearfix"></div>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="#" class="edit">Edit</a>
								</div>
								<div class="col text-center">
									<form action="">
										<a href="#" class="delete">Delete</a>
									</form>
								</div>
							</div>
						</div>
					</li>
					<li class="data-list">
						<div class="data-text">
							<p class="text-class">You cant understand everything, but you must push yourself to understand the system</p>
							<p class="float-right author">Ryan Dhal</p>
							<div class="clearfix"></div>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="#" class="edit">Edit</a>
								</div>
								<div class="col text-center">
									<form action="">
										<a href="#" class="delete">Delete</a>
									</form>
								</div>
							</div>
						</div>
					</li>
					<li class="data-list">
						<div class="data-text">
							<p class="text-class">You cant understand everything, but you must push yourself to understand the system</p>
							<p class="float-right author">Ryan Dhal</p>
							<div class="clearfix"></div>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="#" class="edit">Edit</a>
								</div>
								<div class="col text-center">
									<form action="">
										<a href="#" class="delete">Delete</a>
									</form>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>
		<section class="section">
			<div class="paginate">
				<a href="#" class="btn btn-outline-primary">Prev</a>
				<a href="#" class="btn btn-outline-primary">Next</a>
			</div>
		</section>

@endsection
	