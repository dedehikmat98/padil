@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Administrator SM</a></li>
				<li class="active">merek mobil	</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Data merek mobil</h2>
				</div>
				<div class="panel-body">
		
					<p><a class="btn btn-primary" href="{{ route('Motor.create') }}">Tambah</a></p>
					<table class="table">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Merk</th>
								<th>Tipe</th>
								<th>Foto</th>
								<th style="column-span: 2">Opsi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($motor as $data)
							<tr>
								<td>{{$data->nama}}</td>
								<td>{{$data->mereks->namamerek}}</td>
								<td>{{$data->tipes->namatipe}}</td>
								
								<td><img src="{{ asset('/img/'.$data->foto.'') }}" width="100px" height="100px" ></td>
								<td><a href="{{route('Motor.edit', $data->id) }}" class="btn btn-primary">Ubah</a></td>

								<td>
									<form class="delete" action="{{route('Motor.destroy', $data->id)}}" method="POST">
										<input type="hidden" name="_method" value="DELETE">
										<input type="hidden" name="token">
										<button type="submit" class="btn btn-danger" onclick="return confirm('Anda Yakin Akan Menghapus Data ?');" value="Delete"><i class="fa fa-trash-o"> Hapus</i></button>
										{{csrf_field()}}
									</form>
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

