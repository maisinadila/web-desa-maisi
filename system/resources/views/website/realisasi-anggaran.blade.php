@extends('website.template.base')
@section('content')

<section id="content-1" class="wide-60 content-section division">
	<div class="container">
		<div class="row d-flex align-items-center">
			<div class="col-md-12">
				<h4 class="h4-xl">Program Desa</h4>
			</div>

			<div class="col-md-12">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Program</th>
							<th>Tahun Program</th>
							<th>Download</th>
						</tr>
					</thead>

					<tbody>
						@foreach($list_realisasi->sortByDesc('tahun') as $p)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{ucwords($p->judul)}}</td>
							<td>{{$p->tahun}}</td>
					<td><a href="{{url('public')}}/{{$p->file}}" download="" class="btn btn-primary btn-sm"><i class="fa fa-download"></i> Download</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div> 
</section>	

@endsection