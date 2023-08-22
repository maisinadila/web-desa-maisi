@extends('website.template.base')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 mt-5">
			<div class="table-responsive">
				<table class="table table-bordered table-hover js-basic-example dataTable table-custom">
					<thead class="bg-secondary text-white">
						<tr>
							<th>No</th>
							<th>Pendidikan</th>
							<th>Jumlah Penduduk</th>
						</tr>
					</thead>
					<tbody>

						@foreach($pekerjaan as $data)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$data->nama_pekerjaan}}</td>
							<td>{{$data->jumlah_orang}}</td>
						</tr>
						@endforeach


					</tbody>


				</table>
			</div>
		</div>
	</div>
</div>
@endsection