@extends('layouts.index2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="card">
				<div class="card-header">
					<h4>Tambah Data User</h4>
				</div>
				<hr>
				<div class="card-body">
					<form action="{{url('user')}}" method="post">
						@csrf
						<div class="form-group" >
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama"></input>
						</div>
						<div class="form-group" >
							<label for="" class="control-label">Username</label>
							<input type="text" class="form-control" name="username"></input>
						</div>
						<div class="form-group" >
							<label for="" class="control-label">Email</label>
							<input type="email" class="form-control" name="email"></input>
						</div>
						<div class="form-group" >
							<label for="" class="control-label">Password</label>
							<input type="password" class="form-control" name="password"></input>
						</div>
						<button class="btn btn-primary right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection