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
							<th>Baca Program</th>
							<th>Download</th>
						</tr>
					</thead>

					<tbody>
						@foreach($list_program->sortByDesc('tahun') as $p)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{ucwords($p->nama_program)}}</td>
							<td>{{$p->tahun}}</td>
							<td>
								<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal{{$p->program_id}}">
									Baca Program Desa
								</button>

							</div>

							<div class="modal fade" id="exampleModal{{$p->program_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">{{ucwords($p->nama_program)}}</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											{!!nl2br($p->isi)!!}
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</td>
					<td><a href="{{url('public')}}/program-desa/{{$p->file}}" download="" class="btn btn-info"><i class="fa fa-download"></i> Download</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div> 
</section>	

@endsection