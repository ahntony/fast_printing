@extends('index')
@section('content')
<div class="row">
	<table class="table offset-1 col-10 mt-5" class="">
	  <thead>
		<tr>
		  <th scope="col">Id_produk  </th>
		  <th scope="col">Nama_produk </th>
		  <th scope="col">Harga </th>
		  <th scope="col">Kategori </th>
		  <th scope="col">Status  </th>
		  <th scope="col">Edit  </th>
		  <th scope="col">Hapus  </th>
		</tr>
	  </thead>
	  <tbody>
	  
		@foreach($produks as $p)
		<tr>
		  <th> {{ $p->id_produk  }}</th>
		  <td> {{ $p->nama_produk }}</td>
		  <td> {{ $p->harga	 }}</td>
		  <td> {{ $p->kategori }}</td>
		  <td> {{ $p->status }}</td>
		  <td> <a href="{{ url('/produk/').'/'.$p->id_produk }}"> Edit</a></td>
		  <td> <a class="btn btn-danger" onclick="return confirm('Are you sure to delete {{$p->nama_produk }}?')" href="{{ url('/delete',$p->id_produk) }}"  data-method="delete"  data-method="delete" ><i class="fa fa-trash">Delete</i> </a></td>
		</tr>
		
		@endforeach
	  </tbody>
	</table>
</div>
@endsection