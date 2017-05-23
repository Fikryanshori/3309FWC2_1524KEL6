@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('info')}}"><i style="color: #8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Jadwal Matakuliah</strong>
	</div>
	<table class="table">
			<tr>
				<td>Cuaca</td>
				<td>:</td>
				<td>{{$info->cuaca}}</td>
			</tr>
			<tr>
				<td>Status Penerbangan</td>
				<td>:</td>
				<td>{{$info->status_penerbangan}}</td>
			</tr>
			<tr>
				<td>Nama Petugas</td>
				<td>:</td>
				<td>{{$info->petugas->nama}}</td>
			</tr>
			<tr>
				<td>No Petugas</td>
				<td>:</td>
				<td>{{$info->petugas->no_telp}}</td>
			</tr>
			
			<tr>
				<td class="col-xs-4">Dibuat Tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$jadwal_matakuliah->created_at}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Diperbarui Tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$jadwal_matakuliah->updated_at}}</td>
			</tr>
	</table>
</div>
@stop