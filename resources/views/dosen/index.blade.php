@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Data Dosen</div>
				
				<div class="panel-body">

					<a href="{{ route('dosen.create') }}"><button class="btn btn-primary">Tambah data</button></a>
					<div class="pull-right col-md-4">
						{!! Form::select('_bidang',$matkuls,$idCategory,['placeholder' => '-Semua data-','class' => 'form-control','id' => 'matkul']) !!}
						
					</div>
					<br><br>
					<table class="table table">
						<thead>
							<th>Nik</th>
							<th>Nama</th>
							<th>Jenis Kelamin</th>
							<th>Alamat</th>
							<th>Agama</th>
							<th>Bidang Keahlian</th>
							<th>Aksi</th>
						</thead>

						@foreach($dosens as $dosen)
							<tbody>
								<td>{{ $dosen->nik }}</td>
								<td>{{ $dosen->nama }}</td>
								<td>{{ $dosen->jenkel == 'L' ? 'Laki - laki' : 'Perempuan' }}</td>
								<td>{{ $dosen->alamat }}</td>
								<td>{{ $dosen->agama->nama }}</td>
								<td>{{ $dosen->matkul->nama }}</td>
								<td>
									<a href="{{ route('dosen.edit',$dosen->nik) }}">
										<button class="btn btn-info btn-xs">Ubah</button>
									</a>
								</td>
								<td>	
									{!! Form::open(['url' => route('dosen.destroy',$dosen->nik),'method' => 'delete']) !!}
										{!! Form::submit('Hapus',['class' => 'btn btn-danger btn-xs']) !!}
									{!! Form::close() !!}
								</td>
								<td>
									<a href="{{ route('dosen.show',$dosen->nik) }}">
										<button class="btn btn-success btn-xs">Detail</button>
									</a>
								</td>
							</tbody>
						@endforeach

					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection