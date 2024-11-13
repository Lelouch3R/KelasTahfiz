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
			<a href="" class="btn btn-primary"> daftar cikgu
			</a>
			<table class="table">
				<thead>
					<tr>
						<th>
							ID Cikgu
						</th>
						<th>
							Nama Cikgu
						</th>
						<th>
							Jantina
						</th>
                        <th>
							Tarikh Lahir
						</th>
						<th>
							Bidang
						</th>
						<th>
							Alamat
						</th>
						<th>
							Status
						</th>
					</tr>
				</thead>
				
			</table>
		</div>
	</div>
</div>

@endsection
