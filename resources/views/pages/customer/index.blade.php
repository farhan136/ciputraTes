@extends('welcome')
@section('judul', 'customer')
@section('konten')
@if (session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
	{{ session('status') }}
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<a href="{{route('customer.create')}}" class="btn btn-primary">Tambah</a>
<table class="table">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nama</th>
			<th scope="col">Alamat</th>
			<th scope="col">Telepon</th>
			<th scope="col">Email</th>
			<th scope="col">Aksi</th>
		</tr>
	</thead>
	<tbody>
		@foreach($cust as $c)
		<tr>
			<th>{{$loop->iteration}}</th>
			<td>{{$c->name}}</td>
			<td>{{$c->address}}</td>
			<td>{{$c->telp}}</td>
			<td>{{$c->email}}</td>
			<td>
				<a href="{{route('customer.edit', $c->customer_id)}}" class="btn btn-warning">Edit</a><br>
				<form  action="{{route('customer.destroy', $c->customer_id)}}" method="post">
					@csrf
					@method('delete')
					<button type="submit" class="btn btn-danger">
						Delete
					</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection