@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('petugas')}}"><i style="color: #8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Mahasiswa</strong>
	</div>
	<table class="table">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{$petugas->nama}}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>{{$petugas->alamat}}</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>{{$petugas->jenis_kelamin}}</td>
			</tr>
			<tr>
				<td>No Telpon</td>
				<td>:</td>
				<td>{{$petugas->no_telp}}</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td>{{$petugas->pengguna->username}}</td>
			</tr>
			<tr>
				<td>password</td>
				<td>:</td>
				<td>{{$petugas->pengguna->password}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Dibuat Tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$petugas->created_at}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Diperbarui Tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$petugas->updated_at}}</td>
			</tr>
	</table>
</div>
@stop