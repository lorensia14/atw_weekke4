@extends('layouts.index2')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="card">
				<div class="card-header">
					<h4>Data User</h4>
					<a href="{{url('user/create')}}" class="btn btn-primary right"><i class="fa fa-plus"></i>Tambah Data</a>
				</div>
				<br><br><br>
				<div class="card-body">
					<table class="table">
						<thead>
							<th width="50px" bgcolor="black">No</th>
							<th  bgcolor="black">Username</th>
							<th width="200px" bgcolor="black">Nama</th>
							<th width="200px" bgcolor="black">Email</th>
							<th  colspan="3" bgcolor="black">Aksi</th>
						</thead>
						<tbody>
							@foreach($list_user as $user)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$user->username}}</td>
								<td>{{$user->nama}}</td>
								<td>{{$user->email}}</td>
								<td width="20px">
										<a href="{{url('user', $user->id)}}" class="btn btn-sm btn-info"><i class="fa fa-info"></i></a>
								</td>
								<td width="20px">
										<a href="{{url('user', $user->id)}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
								</td>
								<td width="20px">
										@include('layouts.utils.delete',['url'=>url('user', $user->id)])
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