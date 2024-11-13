@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form role="form" action="{{ route('tukarmurid', $murids->idmurid) }}"method="POST">
				@csrf
				@method('PUT')
				<div class="form-group">
					 
					<label for="namamurid">
						Nama Murid
					</label>
					<input type="text" class="form-control" name="namamurid" value="{{ $murids->namamurid}}"/>
				</div>
                <div class="form-group">
					<label for="jantina">Jantina</label>
					<div>
						@if($murids->jantina == 'Lelaki')
							<input type="radio" name="jantina" value="Lelaki" checked> Lelaki
							<input type="radio" name="jantina" value="Perempuan"> Perempuan
						@else
						<input type="radio" name="jantina" value="lelaki"> Lelaki
						<input type="radio" name="jantina" value="Perempuan" checked> Perempuan
						@endif
					</div>
				</div>
				<div class="form-group">
					 
					<label for="tarikhlahir">
						Tarikh Lahir
					</label>
					<input type="date" class="form-control" name="tarikhlahir" value="{{ $murids->tarikhlahir}}"/>
				</div>

                <div class="form-group">
					 
					<label for="kelas">
						Kelas
					</label>
					<input type="text" class="form-control" name="kelas" value="{{ $murids->kelas}}"/>
				</div>
				
				<div class="form-group">
					 
					<label for="alamat">
						Alamat
					</label>
					<textarea class="form-control" name="alamat"> {{ $murids->alamat}}</textarea />
				</div>
                <div>
                    <label for="status">Status (Sila Pilih)</label>
                    <select class="form-control" name="status">
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                    </select>
                </div>


				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>
	</div>
</div>

@endsection