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
		<form action="{{url('admin/manajemen-persuratan/template-surat',$template->template_id)}}/update" method="post">
			@csrf
			@method('PUT')
			<textarea name="isi" id="tampil" cols="30" rows="10" class="form-control">{{$template->isi}}</textarea>

			<button class="btn btn-primary float-right mt-3">Edit Isi Surat</button>
		</form>
	</div>
</div>

<script>

    var id= "{{ $template->tempelate_id }}";
    var url = "{{ url('admin/manajemen-persuratan/template-surat/1/ambilData') }}";

  
        fetch(url)
    .then(response => response.json())
    .then(data => {
        var isi = data.data.template.isi;
       
        $('#tampil').summernote({
            height: 300, // Set the desired height
            callbacks: {
                // After Summernote is initialized, set its content
                onInit: function() {
                    $('#tampil').summernote('code', isi);
                }
            }
        });
    })
    .catch(error => {
        console.error('Error fetching data:', error);
    });


    

    

    

</script>


@endsection
