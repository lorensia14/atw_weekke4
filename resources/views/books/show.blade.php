@extends('layouts.index2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="card">
				<div class="card-header">
					<h3>Detail Data Books</h3>
				</div>
				<hr>
				<div class="card-body">
					<h3>{{$books->nama_buku}}</h3>
					<hr>
					<p>
						Rp.{{number_format($books->harga)}} |
						Stock : {{$books->stock}} |
						Berat : {{$books->berat}} gr
					</p>
					<p>
						{!! nl2br($books->deskripsi) !!}
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection