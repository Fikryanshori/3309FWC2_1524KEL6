@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data rute</strong>
		<a href="{{url('rute/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Rute
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<head>
			<tr>
				<th>No.</th>
				<th>Kota Asal</th>
				<th>Kota Tujuan</th>
				<th>Aksi</th>
			</tr>
		</head>
		<tbody>
			<?php $x=1; ?>
			@foreach($data as $rute)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$rute->kota_asal or 'kota_asal kosong'}}</td>
				<td>{{$rute->kota_tujuan or 'kota_tujuan kosong'}}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('rute/edit/'.$rute->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('rute/lihat/'.$rute->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('rute/hapus/'.$rute->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop