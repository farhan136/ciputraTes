@extends('welcome')
@section('judul', 'edit customer')
@section('konten')
<div class="card">
	<div class="card-header">
		Edit
	</div>
	<div class="card-body">
		<form action="{{route('customer.update', $cust->customer_id)}}" method="post">
			@csrf
			@method('PUT')
			<div class="mb-3">
				<label class="form-label">Name</label>
				<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name', $cust->name)}}">
				@error('name')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
			</div>
			<div class="mb-3">
				<label class="form-label">Address</label>
				<input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{old('address', $cust->address)}}">
				@error('address')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
			</div>
			<div class="mb-3">
				<label class="form-label">Telephone</label>
				<input type="text" class="form-control @error('telp') is-invalid @enderror" name="telp" value="{{old('telp', $cust->telp)}}">
				@error('telp')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
			</div>
			<div class="mb-3">
				<label class="form-label">Email address</label>
				<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email', $cust->email)}}">
				@error('email')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
@endsection