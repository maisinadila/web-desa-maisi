@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">
@endpush
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Manajemen informasi</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
                <li class="breadcrumb-item"><a href="{{ url('admin/web-informasi/index') }}">Manajemen informasi</a></li>
                <li class="breadcrumb-item active">Detail</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
                    <a href="{{url('admin/web-informasi/create')}}" class="btn btn-primary"><i class="fa fa-upload"></i> Upload informasi</a>
                    <a href="{{url('admin/web-informasi/edit', $informasi->informasi_id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit informasi</a>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- akhir breadcrumb -->



<div class="row clearfix">
    <div class="col-12">
        <div class="card single_post">
            <div class="body">
            <h2 class="text-bold mb-5" style="font-weight: bold;">{{$informasi->informasi_judul}}</h2>
                <div class="img-post">
                    <img class="d-block img-fluid" src="{{url('public')}}/web/informasi/{{$informasi->informasi_cover}}" alt="First slide">
                </div>
                
                <p class="text-lowercase">{!! $informasi->informasi_isi !!}</p>
            </div>                        
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12 left-box">
                <div class="card">
                    <div class="header">
                        <h2>Comments 3</h2>
                    </div>
                    <div class="body">
                        <ul class="comment-reply list-unstyled">
                            <li class="row clearfix">
                                <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="{{url('public')}}/assets-admin/images/sm/avatar2.jpg" alt="Awesome Image"></div>
                                <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                    <h5 class="mb-0">Gigi Hadid </h5>
                                    <p>Why are there so many tutorials on how to decouple WordPress? how fast and easy it is to get it running (and keep it running!) and its massive ecosystem. </p>
                                    <ul class="list-inline">
                                        <li><a href="javascript:void(0);">Mar 09 2018</a></li>
                                        <li><a href="javascript:void(0);">Reply</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="row clearfix">
                                <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="{{url('public')}}/assets-admin/images/sm/avatar3.jpg" alt="Awesome Image"></div>
                                <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                    <h5 class="mb-0">Christian Louboutin</h5>
                                    <p>Great tutorial but few issues with it? If i try open post i get following errors. Please can you help me?</p>
                                    <ul class="list-inline">
                                        <li><a href="javascript:void(0);">Mar 12 2018</a></li>
                                        <li><a href="javascript:void(0);">Reply</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="row clearfix">
                                <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="{{url('public')}}/assets-admin/images/sm/avatar4.jpg" alt="Awesome Image"></div>
                                <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                    <h5 class="mb-0">Kendall Jenner</h5>
                                    <p>Very nice and informative article. In all the years I've done small and side-projects as a freelancer, I've ran into a few problems here and there.</p>
                                    <ul class="list-inline">
                                        <li><a href="javascript:void(0);">Mar 20 2018</a></li>
                                        <li><a href="javascript:void(0);">Reply</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>                                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 left-box">
                <div class="card">
                    <div class="header">
                        <h2>Leave a reply <small>Your email address will not be published. Required fields are marked*</small></h2>
                    </div>
                    <div class="body">
                        <div class="comment-form">
                            <form class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-primary">SUBMIT</button>
                                </div>                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>          
    </div>
</div>

@endsection