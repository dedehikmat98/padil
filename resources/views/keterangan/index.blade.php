@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">{{ Auth::user()->name }}</a></li>
				<li class="active">Keterangan	</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Data Keterangan</h2>
				</div>
				<div class="panel-body">
		
					<p><a class="btn btn-primary" href="{{ route('Keterangan.create') }}">Tambah</a></p>
					<table class="table">
						<thead>
							<tr>
								<th>Keadaan</th>
								<th>Transmisi</th>
								<th>Bahan Bakar</th>
								<th>Tahun Keluar</th>
								<th>Harga</th>
								<th>Deskripsi</th>
								<th>Motor</th>
								<th style="column-span: 2">Opsi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($keterangan as $data)
							<tr>
								<td>{{$data->keadaan}}</td>
								<td>{{$data->transmisi}}</td>
								<td>{{$data->bahanbkr}}</td>
								<td>{{$data->thnklr}}</td>
								<td>{{$data->harga}}</td>
								<td>{!! $data->desk !!}</td>
								<td>{{$data->motorrrs->nama}}</td>
								
								<td><a href="{{route('Keterangan.edit', $data->id) }}" class="btn btn-primary">Ubah</a></td>

								<td>
									<form class="delete" action="{{route('Keterangan.destroy', $data->id)}}" method="POST">
										<input type="hidden" name="_method" value="DELETE">
										<input type="hidden" name="token">
										<button type="submot" class="btn btn-danger" onclick="return confirm('Anda Yakin Akan Menghapus Data ?');" value="Delete"><i class="glyphicon-trash">Hapus</i></button>
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

