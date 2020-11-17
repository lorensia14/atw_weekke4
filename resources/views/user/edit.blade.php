@extends('layouts.index2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="card">
				<div class="card-header">
					<h4>Edit Data User</h4>
				</div>
				<hr>
				<div class="card-body">
					<form action="{{url('user',$user->id)}}" method="post">
						@csrf
						@method("put")
						<div class="form-group" >
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$user->nama}}"></input>
						</div>
						<div class="form-group" >
							<label for="" class="control-label">Username</label>
							<input type="text" class="form-control" name="username" value="{{$user->username}}"></input>
						</div>
						<div class="form-group" >
							<label for="" class="control-label">Email</label>
							<input type="text" class="form-control" name="email" value="{{$user->email}}"></input>
						</div>
						<div class="form-group" >
							<label for="" class="control-label">Password</label>
							<input type="text" class="form-control" name="password"></input>
						</div>
						<button class="btn btn-primary right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection