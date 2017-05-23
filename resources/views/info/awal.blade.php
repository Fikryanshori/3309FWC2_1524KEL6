@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Informasi</strong>
		<a href="{{url('info/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Informasi
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<head>
			<tr>
				<th>No.</th>
				<th>Cuaca</th>
				<th>Status Penerbangan</th>
				<th>Nama Petugas</th>
				<th>Aksi</th>
			</tr>
		</head>
		<body>
			<?php $x=1; ?>
			@foreach($semuaInfo as $info)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$info->cuaca or 'cuaca kosong'}}</td>
				<td>{{$info-> status_penerbangan or 'status_penerbangan kosong'}}</td>
				<td>{{$info->petugas->nama or 'no_telp kosong'}}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('info/edit/'.$info->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('info/lihat/'.$info->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('info/hapus/'.$info->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</body>
	</table>
</div>
@stop