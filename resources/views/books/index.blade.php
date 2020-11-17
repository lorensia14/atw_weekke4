@extends('layouts.index2')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="card">
				<div class="card-header">
					<h4>Data Books</h4>
					<a href="{{url('books/create')}}" class="btn btn-primary right"><i class="fa fa-plus"></i>Tambah Data</a>
				</div>
				<br><br><br>
				<div class="card-body">
					<table class="table">
						<thead>
							<th width="50px" bgcolor="black">No</th>
							<th  bgcolor="black">Nama Buku</th>
							<th width="200px" bgcolor="black">Harga</th>
							<th width="200px" bgcolor="black">Stock</th>
							<th  colspan="3" bgcolor="black">Aksi</th>
						</thead>
						<tbody>
							@foreach($list_books as $books)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$produk->nama_buku}}</td>
								<td>{{$produk->harga}}</td>
								<td>{{$produk->stock}}</td>
								<td width="20px">
										<a href="{{url('books', $books->id)}}" class="btn btn-sm btn-info"><i class="fa fa-info"></i></a>
								</td>
								<td width="20px">
										<a href="{{url('books', $books->id)}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
								</td>
								<td width="20px">
										@include('layouts.utils.delete',['url'=>url('books', $books->id)])
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection