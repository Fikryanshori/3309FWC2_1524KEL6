<div class="form-group">
	<label class="col-sm-2 control-label" id="cuaca">Cuaca</label>
	<div class="col-sm-10">
		{!! Form::text('cuaca',null,['class'=>'form-control','id'=>'cuaca','placeholder'=>"Cuaca"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="status_penerbangan">Status Penerbangan</label>
	<div class="col-sm-10">
		{!! Form::text('status_penerbangan',null,['class'=>'form-control','id'=>'status_penerbangan','placeholder'=>"Status Penerbangan"]) !!}
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="petugas_id">Nama Petugas</label>
	<div class="col-sm-10">
		{!! Form::select('petugas_id',$petugas->listpetugasDanNo_telp(),null,['class'=>'form-control','id'=>'petugas_id','placeholder'=>"Petugas"]) !!}
	</div>
</div>
