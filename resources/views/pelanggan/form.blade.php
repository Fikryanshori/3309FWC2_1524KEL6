<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Nama"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="alamat">Alamat</label>
	<div class="col-sm-10">
		{!! Form::textarea('alamat',null,['class'=>'form-control','id'=>'alamat','placeholder'=>"Alamat"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="jenis_kelamin">Jenis Kelamin</label>
	<div class="col-sm-10">
		{!! Form::text('jenis_kelamin',null,['class'=>'form-control','id'=>'jenis_kelamin','placeholder'=>"Jenis Kelamin"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="no_telp">No Telpon</label>
	<div class="col-sm-10">
		{!! Form::text('no_telp',null,['class'=>'form-control','id'=>'no_telp','placeholder'=>"No Telpon"]) !!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
		{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
	</div>
</div>
