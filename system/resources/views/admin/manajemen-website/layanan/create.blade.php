@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">

@endpush
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Manajemen layanan</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
                <li class="breadcrumb-item active"><a href="{{url('admin/web-layanan/index')}}">Manajemen layanan</a></li>
                <li class="breadcrumb-item active">Tambah layanan</li>
            </ul>
        </div>
       
    </div>
</div>
<!-- akhir breadcrumb -->


<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <form action="{{url('admin/web-layanan/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="body">
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" required placeholder="Nama layanan" />
                    </div>
                
                    <div class="form-group m-t-20 m-b-20">
                        <input type="file" name="file" required class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">Upload Icon dari layanan mu di sini.</small>
                    </div>
                    <textarea name="syarat" required class="summernote" cols="30" rows="10">
                        <h3 class="mb-0">hai,</h3>
                        <h4 class="m-t-0">Tuliskan layanan mu di sini</h4>
                        <p></p>
                    </textarea>
                    
                    <button type="submit" class="btn btn-block btn-primary   m-t-20">Save</button>
                </div>
            </form>
        </div>
    </div>            
</div>



@endsection

@push('jscustom')
<script src="{{url('public')}}/assets-admin/vendor/summernote/dist/summernote.js"></script>

<script>
    jQuery(document).ready(function() {

        $('.summernote').summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false, // set focus to editable area after initializing summernote
            popover: { image: [], link: [], air: [] }
        });

        $('.inline-editor').summernote({
            airMode: true
        });

    });

    window.edit = function() {
            $(".click2edit").summernote()
        },
        
    window.save = function() {
        $(".click2edit").summernote('destroy');
    }
</script>
@endpush