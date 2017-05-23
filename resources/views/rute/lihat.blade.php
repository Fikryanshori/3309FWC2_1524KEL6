@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('rute')}}"><i style="color: #8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Rute</strong>
	</div>
	<table class="table">
			<tr>
				<td>Kota Asal
				<td>:</td>
				<td>{{$rute->kota_asal}}</td>
			</tr>
			<tr>
				<td>Kota Tujuan
				<td>:</td>
				<td>{{$rute->kota_tujuan}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Dibuat Tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$rute->created_at}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Diperbarui Tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$rute->updated_at}}</td>
			</tr>
	</table>
</div>
@stop