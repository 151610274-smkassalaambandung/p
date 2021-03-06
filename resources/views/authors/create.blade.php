@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Dashboard</a></li>
					<li><a href="{{ url('/admin/authors') }}">Tambah penulis</a></li>
					<li class="active">Tambah penulis</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">tambah penulis</h2>
					</div>

					<div class="panel-body">
					{!! Form::open(['url =>route('authors.store'),
					'method => 'post','class'=>'form-horizontal']) !!}
					@include('authors_form')
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection