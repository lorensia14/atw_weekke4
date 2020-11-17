@extends('layouts.index2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="card">
				<div class="card-header">
					<h3>Detail Data User</h3>
				</div>
				<hr>
				<div class="card-body">
					<h3>{{$user->nama}}</h3>
					<hr>
					<p>
						{{"@".$user->username}} |
						Email : {{$user->email}}
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection