@extends('index')
@section('content')
@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="row">
	<form class="offset-2 mt-5 col-9" action="{{ url('/produk') }}" method="POST">
            @csrf
	{{---<div class="form-group">
		<label for="produkid">Produk ID</label>
		<input type="text" class="form-control" id="produkid" name="nama_produk">
	  </div>
	---}}
	  <div class="form-group">
		<label for="produkname">Nama Produk</label>
		<input type="text" class="form-control" id="produkname" name="nama_produk" required>
		@if($errors->has("nama_produk"))
		<span class="text-danger">{{$errors->first("nama_produk") }}</span>
		@endif
	  </div>
	  <div class="form-group">
		<label for="exampleFormControlSelect2">harga </label>
		<input type="number" class="form-control" id="produkprice" name="harga" value=0 required >
		@if($errors->has("kategori"))
		<span class="text-danger">{{$errors->first("harga") }}</span>
		@endif
	  </div>
	  <div class="form-group">
		<label for="exampleFormControlSelect2">Kategory </label>
		<input type="text" class="form-control" id="produkkategori" name="kategori">
		@if($errors->has("kategori"))
		<span class="text-danger">{{$errors->first("kategori") }}</span>
		@endif
	  </div>
	  <div class="form-group">
		<label for="status">status </label>
		<select class="form-control" id="exampleFormControlSelect1" name="status">
		  <option value="bisa dijual">bisa dijual</option>
		  <option value="tidak bisa dijual">tidak bisa dijual</option>
		</select>
	  </div>
	  <div class="form-group row">
		<div class="col-sm-10">
		  <button type="submit" class="btn btn-primary">Input</button>
		</div>
	  </div>
	</form>
</div>
@endsection