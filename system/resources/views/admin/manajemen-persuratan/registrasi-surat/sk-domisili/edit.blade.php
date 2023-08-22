@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">
@endpush
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Manajemen Surat</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
                <li class="breadcrumb-item align-items-center"><a href="{{url('admin/manajemen-persuratan/registrasi-surat')}}">Kumpulan Surat</a></li>                            
                <li class="breadcrumb-item align-items-center"><a href="{{url('admin/manajemen-persuratan/registrasi-surat', $template->nama_file)}}">{{$template->nama_surat}}</a></li>                            
                <li class="breadcrumb-item active">Edit </li>
            </ul>
        </div>
    </div>
</div>
<!-- akhir breadcrumb -->

<div class="card">
	<div class="card-body mt-3 mb-5">
		<form action="{{url('admin/manajemen-persuratan/registrasi-surat',$template->template_id)}}/update" method="post">
			@csrf
			@method('PUT')
			<textarea name="isi" id="" cols="30" rows="10" class="form-control summernote">{!!nl2br($template->isi)!!}</textarea>

			<button class="btn btn-primary float-right mt-3">Edit Isi Surat</button>
		</form>
	</div>
</div>


@endsection
