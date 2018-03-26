@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Administrator SM</a></li>
				<li class="active">Akun 	</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Data Akun</h2>
				</div>
				<div class="panel-body">
		
					<p><a class="btn btn-primary" href="{{ route('User.create') }}">Tambah Akun</a></p>
					<table class="table">
						<thead>
							<tr>
								<th>Nama User</th>
								<th>Email</th>
								
								<th style="column-span: 2">Opsi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($user as $data)
							@if($loop->first)
							<tr>
								<td>{{$data->name}}</td>
								<td>{{$data->email}}</td>
							</tr>
							@else
							<tr>
								<td>{{$data->name}}</td>
								<td>{{$data->email}}</td>

								

								<td>
									<form class="delete" action="{{route('User.destroy', $data->id)}}" method="POST">
										<input type="hidden" name="_method" value="DELETE">
										<input type="hidden" name="token">
										<button type="submit" class="btn btn-danger" onclick="return confirm('Anda Yakin Akan Menghapus Data ?');" value="Delete"><i class="fa fa-trash-o"> Hapus</i></button>
										{{csrf_field()}}
									</form>
								</td>
							</tr>
							@endif
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

