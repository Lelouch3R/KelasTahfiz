@auth
@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="card">
				<h5 class="card-header">
					Laman Utama
				</h5>
				<div class="card-body">
					<p class="card-text">
						Senarai Pengguna
					</p>
                    <p class="card-text">
						Senarai Murid
					</p>
                    <p class="card-text">
						Mata Pelajaran
					</p>
				</div>
				<div class="card-footer">
					Keluar
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<a href="{{ route('daftarmurid') }}" class="btn btn-primary"> daftar murid
			</a>
			<table class="table">
				<thead>
					<tr>
						<th>
							ID Murid
						</th>
						<th>
							Nama Murid
						</th>
						<th>
							Jantina
						</th>
                        <th>
							Tarikh Lahir
						</th>
						<th>
							Kelas
						</th>
						<th>
							Alamat
						</th>
						<th>
							Status
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach($murids as $murid)
					<tr>
						<td>
							{{$murid->idmurid}}
						</td>
						<td>
							{{$murid->namamurid}}
						</td>
						<td>
							{{$murid->jantina}}
						</td>
						<td>
							{{$murid->tarikhlahir}}
						</td>
						<td>
							{{$murid->kelas}}
						</td>
						<td>
							{{$murid->alamat}}
						</td>
						<td>
							{{$murid->status}}
						</td>
						<td>
							<a href="{{ route('tukarmurid', $murid->idmurid) }}" class="btn btn-warning">Ubah</a>
							<a href="{{ route('padammurid', $murid->idmurid) }}" class="btn btn-danger">Padam</a>

						</td>
					@endforeach
						
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection
@endauth