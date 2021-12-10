@extends('welcome')
@section('judul', 'transaction')
@section('konten')
<div class="card">
	<div class="card-header">
		Transaction
	</div>
	<div class="card-body">
		<form id="form-customer">
			<div class="mb-3">
				<label class="form-label">Document Number</label>
				<input type="text" class="form-control" id="doc-number" disabled>
			</div>
			<div class="mb-3">
				<label class="form-label">Transaction Date</label>
				<input type="text" class="form-control" id="transaction-date" disabled>
			</div>
			<div class="mb-3">
				<label class="form-label">Customer Name</label>
				<input type="text" class="form-control" id="cust-address" disabled value="{{$cust->name}}">
			</div>
			<div class="mb-3">
				<label class="form-label">Customer Address</label>
				<input type="text" class="form-control" id="cust-address" disabled value="{{$cust->address}}">
			</div>
			<div class="mb-3">
				<label class="form-label">Email address</label>
				<input type="text" class="form-control" id="email-address" disabled value="{{$cust->email}}">
			</div>
			<div class="mb-3">
				<label class="form-label">Telephone</label>
				<input type="text" class="form-control" id="telephone" disabled value="{{$cust->telp}}">
			</div>
			<div class="mb-3">
				<label class="form-label">Notes</label>
				<input type="text" class="form-control" id="notes">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>

		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nama Cluster</th>
					<th scope="col">Tipe Rumah</th>
					<th scope="col">Deskripsi</th>
					<th scope="col">Price</th>
					<th scope="col">Qty</th>
					<th scope="col">Total</th>
					<th scope="col">Edit</th>
					<th scope="col">Delete</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td scope="col">#</td>
					<td scope="col">1</td>
					<td scope="col">1</td>
					<td scope="col">1</td>
					<td scope="col">1</td>
					<td scope="col">1</td>
					<td scope="col">1</td>
					<td scope="col">1</td>
					<td scope="col">1</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="card-footer">
		
		<form>
			<select name="Cluster" id="cluster" class="btn btn-secondary">
				<option value=""  selected>Pilih Cluster</option>
				@foreach($cluster as $c)
					<option value="{{$c->cluster_id}}">{{$c->cluster}}</option>
				@endforeach
			</select>
			<select id="tipe" class="btn btn-secondary" disabled>
				<option value=""  selected>Pilih Tipe</option>
			</select>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Description</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Price</label>
				<input type="text" class="form-control" id="exampleInputEmail1" disabled>
			</div>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Description</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Description</label>
				<input type="text" class="form-control" id="exampleInputEmail1" disabled>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	
</div>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/simple-ajax-uploader/2.6.7/SimpleAjaxUploader.min.js"></script> 

<script>
	let cluster = $('#cluster').val()
	$(document).ready(function() {
		$('#cluster').on('change', function(){
			cluster = $('#cluster').val()
			$.ajax({
				url:"{{route('transaction.index')}}",
				method:"get",
				data : {'cluster_id':cluster},
				success:function(res){
					$('#tipe').props('disabled', false)
					$.each(res, function(i, val){
						$('option').val(val.type_id).text(val.type).appendTo('#tipe')
					})
				}
			})
		})
	} );
</script>
@endsection