@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">


@endpush
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Manajemen Berita</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
                <li class="breadcrumb-item active">Manajemen Berita</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
              
                    <a href="{{url('admin/web-berita/create')}}" class="btn btn-primary"><i class="fa fa-upload"></i> Tambah Berita</a>
                   
                </div>
                <div class="p-2 d-flex">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- akhir breadcrumb -->



<div class="row clearfix">
    <div class="col-12">
        <div class="card">
            <div class="body search">
                <div class="input-group mb-0">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search...">                                    
                </div>
            </div>
        </div>
    
    </div>
    <div class="col-12">
        <div class="row">
            @foreach($berita as $data)
            <div class="col-6">
                <div class="card single_post">
                    <div class="body">
                        <div class="img-post">
                            <img class="d-block img-fluid" src="{{url('public')}}/web/berita/{{$data->berita_cover}}" alt="First slide">
                        </div>
                        <h3><a href="blog-details.html">{{$data->berita_judul}}</a></h3>
                        <p class="isiberita" >{!! $data->beritapendek !!} . . . . .</p>
                    </div>
                    <div class="footer">
                        <div class="actions d-flex justify-content-between">
                            <a href="{{ url('admin/web-berita/detail', $data->berita_id) }}" class="btn btn-outline-secondary">Continue Reading</a>
                            @include('admin.template.utils.delete', ['url' => url('admin/web-berita/delete', $data->berita_id)])
                        </div>
                        <ul class="stats">
                            <li>{{$data->created_at}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        

        
                                
        <ul class="pagination pagination-primary">
            <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
        </ul>                
    </div>
    
</div>


@endsection