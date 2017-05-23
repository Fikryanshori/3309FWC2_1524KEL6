@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('penerbangan')}}"><i style="color: #8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Penerbangan</strong>
	</div>
	<table class="table">
			<tr>
				<td>Maskapai
				<td>:</td>
				<td>{{$penerbangan->maskapai}}</td>
			</tr>
			<tr>
				<td>Bandara
				<td>:</td>
				<td>{{$penerbangan->bandara}}</td>
			</tr>
			<tr>
				<td>Jenis Penerbangan
				<td>:</td>
				<td>{{$penerbangan->jenis_penerbangan}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Dibuat Tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$penerbangan->created_at}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Diperbarui Tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$penerbangan->updated_at}}</td>
			</tr>
	</table>
</div>
@stop