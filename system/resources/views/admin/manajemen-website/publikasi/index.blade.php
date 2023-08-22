@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">


@endpush
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Manajemen publikasi</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
                <li class="breadcrumb-item active">Manajemen publikasi</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
              
                    
                    <a href="#defaultModal" data-toggle="modal" data-target="#defaultModal" class="btn btn-primary"><i class="fa fa-upload"></i> Upload publikasi</a>
                    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="title" id="defaultModalLabel">Upload Publikasi</h4>
                                </div> 
                                <form action="{{url('admin/web-publikasi/store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Judul Publikasi</label>
                                        <input type="text" name="judul" class="form-control" placeholder="Judul publikasi" />
                                    </div>
                                    <div class="form-group d-flex flex-column">
                                        <label for="" class="">File Publikasi</label>
                                        <input type="file" class="form-file-input " name="file" accept="image/*, .pdf, .docx, .doc, .xls" required="">
                                        <small id="fileHelp" class="form-text text-muted">upload file publikasi anda di sini</small>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Upload</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
            @foreach($publikasi as $data)
            <div class="col-lg-3 col-md-3  col-sm-6">
                <div class="card">
                    <div class="body">
                        <div class="currency_state d-flex">
                            <div>
                                @if($data->icon == 'pdf')
                                    <img src="{{url('public/icon')}}/pdf-file.png" width="80" />
                                @elseif($data->icon == 'xls')
                                    <img src="{{url('public/icon')}}/xls-file.png" width="80" />
                                @elseif($data->icon == 'docx' || $data->icon == 'doc')
                                    <img src="{{url('public/icon')}}/doc-file.png" width="80" />
                                @else
                                    <img src="{{url('public/icon')}}/visible.png" width="80" />
                                @endif
                            </div>
                            <div class="ml-3" style="width: 100%">
                                <p class="mb-0 float-right">{{$data->publikasi_judul}}</p>
                               
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center" style="width: 100%">
                            
                                <div class="">
                                    <a href="{{url('public/web/publikasi')}}/{{ $data->publikasi_file }}" class="btn btn-primary" download> <i class="fa fa-download"></i></a>
                                </div>
                                    
                                <div class="float-right">
                                    @include('admin.template.utils.delete', ['url' => url('admin/web-publikasi/delete', $data->publikasi_id)])
                                </div>
                            </div>
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