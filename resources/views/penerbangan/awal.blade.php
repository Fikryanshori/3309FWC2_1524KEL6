@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Penerbangan</strong>
		<a href="{{url('penerbangan/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Penerbangan
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<head>
			<tr>
				<th>No.</th>
				<th>Maskapai</th>
				<th>Bandara</th>
				<th>Jenis Penerbangan</th>
				<th>Aksi</th>
			</tr>
		</head>
		<tbody>
			<?php $x=1; ?>
			@foreach($data as $penerbangan)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$penerbangan->maskapai or 'maskapai kosong'}}</td>
				<td>{{$penerbangan->bandara or 'bandara kosong'}}</td>
				<td>{{$penerbangan->jenis_penerbangan or 'jenis_penerbanagan kosong'}}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('penerbangan/edit/'.$penerbangan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('penerbangan/lihat/'.$penerbangan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('penerbangan/hapus/'.$penerbangan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop