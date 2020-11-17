@extends('layouts.index2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="card">
				<div class="card-header">
					<h4>Edit Data Books</h4>
				</div>
				<hr>
				<div class="card-body">
					<form action="{{url('produk',$produk->id)}}" method="post">
						@csrf
						@method("PUT")
						<div class="form-group" >
							<label for="" class="control-label">Nama_buku</label>
							<input type="text" class="form-control" name="nama" value="{{$books->nama_buku}}"></input>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group" >
									<label for="" class="control-label">Harga</label>
									<input type="text" class="form-control" name="harga" value="{{$books->harga}}"></input>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group" >
									<label for="" class="control-label">Berat</label>
									<input type="text" class="form-control" name="berat" value="{{$books->berat}}"></input>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group" >
									<label for="" class="control-label">Stock</label>
									<input type="text" class="form-control" name="stock" value="{{$books->stock}}"></input>
								</div>
							</div>
						</div>
						<div class="form-group" >
							<label for="" class="control-label">Deskripsi</label>
							<textarea name="deskripsi" class="form-control">
								{{$books->deskripsi}}
							</textarea>
						</div>
						<button class="btn btn-primary right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection