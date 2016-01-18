@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Ubah data dosen</div>

                <div class="panel-body">
                   {!! Form::open(['url' => route('dosen.update',$dosen->nik),'method'=>'put','class' => 'form-horizontal']) !!}
                   		
                   		<div class="form-group {{ $errors->has('_nik') ? 'has-error' : '' }}">
                   			
                   			{!! Form::label('Nik',null,['class' => 'col-sm-2 control-label']) !!}                  			
                   			<div class="col-md-5">
                   				{!! Form::text('_nik',$dosen->nik,['class' => 'form-control']) !!}
                   			</div>
                   			
                   			@if ($errors->has('_nik'))
                   				<span class="help-block">
                   					<strong>{{ $errors->first('_nik') }}</strong>
                   				</span>
                   			@endif
                   		
                   		</div>

                   		<div class="form-group {{ $errors->has('_nama') ? 'has-error' : '' }}">
                   			
                   			{!! Form::label('Nama',null,['class' => 'col-sm-2 control-label']) !!}
                   			<div class="col-md-6">
                   				{!! Form::text('_nama',$dosen->nama,['class' => 'form-control']) !!}
                   			</div>
                   			
                   			@if ($errors->has('_nama'))
                   				<span class="help-block">
                   					<strong>{{ $errors->first('_nama') }}</strong>
                   				</span>
                   			@endif
                   		</div>
                   		
                   		<div class="form-group {{ $errors->has('_jenkel') ? 'has-error' : '' }}">

                   			{!! Form::label('Jenis Kelamin',null,['class' => 'col-sm-2 control-label']) !!}
                   			<div class="col-md-6">
                   				{!! Form::radio('_jenkel','L',$dosen->jenkel == 'L' ? true : false) !!} Laki - laki
                   				{!! Form::radio('_jenkel','p',$dosen->jenkel == 'P' ? true : false) !!} Perempuan
                   			</div>
                   			
                   			@if ($errors->has('_jenkel'))
                   				<span class="help-block">
                   					<strong>{{ $errors->first('_jenkel') }}</strong>
                   				</span>
                   			@endif

                   		</div>

                   		<div class="form-group {{ $errors->has('_alamat') ? 'has-error' : '' }}">
                   			
                   			{!! Form::label('Alamat',null,['class' => 'col-sm-2 control-label']) !!}
                   			<div class="col-md-6">
                   				{!! Form::textarea('_alamat',$dosen->alamat,['class' => 'form-control','size' => '30x5']) !!} 
                   			</div>
                   			
                   			@if ($errors->has('_alamat'))
                   				<span class="help-block">
                   					<strong>{{ $errors->first('_alamat') }}</strong>
                   				</span>
                   			@endif
                   		</div>

                   		<div class="form-group {{ $errors->has('_agama') ? 'has-error' : ''}}">

                   			{!! Form::label('Agama',null,['class' => 'col-sm-2 control-label']) !!}
                   			<div class="col-md-4">
                   				{!! Form::select('_agama',$agamas,$dosen->id_agama,['class' => 'form-control']) !!} 
                   			</div>
                   			
                   			@if ($errors->has('_agama'))
                   				<span class="help-block">
                   					<strong>{{ $errors->first('_agama') }}</strong>
                   				</span>
                   			@endif
                   		</div>

                   		<div class="form-group {{ $errors->has('_bidang') ? 'has-error' : '' }}">

                   			{!! Form::label('Bidang Keahlian',null,['class' => 'col-sm-2 control-label']) !!}
                   			<div class="col-md-4">
                   				{!! Form::select('_bidang',$matkuls,$dosen->id_matkul,['class' => 'form-control']) !!} 
                   			</div>
                   			
                   			@if ($errors->has('_bidang'))
                   				<span class="help-block">
                   					<strong>{{ $errors->first('_bidang') }}</strong>
                   				</span>
                   			@endif
                   		</div>

                   		<div class="form-group">
                   			<div class="col-md-4 col-md-offset-2">
                   				{!! Form::submit('Simpan',['class' => 'btn btn-primary']) !!}
                   			</div>	
                   		</div>

                   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection