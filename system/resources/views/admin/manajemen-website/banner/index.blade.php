@extends('admin.template.base')
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Manajemen Banner</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
                <li class="breadcrumb-item active">Manajemen Banner</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
              
                    <a href="#defaultModal" data-toggle="modal" data-target="#defaultModal" class="btn btn-primary"><i class="fa fa-upload"></i> Tambah Banner</a>
                    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="title" id="defaultModalLabel">Tambah Banner</h4>
                                </div> 
                                <form action="{{url('admin/web-banner/store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input type="text" class="form-file-input form-control" name="judul" placeholder="berikan judul pada banner anda ...." required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea name="deskripsi" class="form-file-input form-control " id="" cols="30" rows="3" placeholder="deskripsikan banner anda ...."></textarea>
                                    </div>
                                    <div class="form-group d-flex flex-column">
                                        <label>Banner</label>
                                        <input type="file" class="" name="file" accept=".png, .jpg, .jpeg" required="">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Simpan</button>
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
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Banner Website Desa {{ucwords(App\Models\Pengaturan::first()->nama_desa)}}<small>Semua banner yang ada di sini akan ditampilkan pada website</small></h2>
            </div>
            <div class="body">
                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                    @foreach($banner as $data)
                    <div class="col-12 m-b-30"> 
                        <a href="#modalgambar{{$data->banner_id}}" data-toggle="modal" data-target="#modalgambar{{$data->banner_id}}" > 
                            <img class="img-fluid img-thumbnail" src="{{url('public/web/banner')}}/{{$data->banner_foto}}" alt="" style="height: 240px; width: 100%; object-fit: contain;"> 
                        </a> 
                        <div class="modal fade" id="modalgambar{{$data->banner_id}}" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content" style="width: fit-content">
                                    <img class="img-fluid img-thumbnail" src="{{url('public/web/banner')}}/{{$data->banner_foto}}" alt="" style="height: fit-content; width: 500px; object-fit: contain;">                              
                                    <div class="modal-footer">
                                        <p class="mr-auto">Judul : {{$data->banner_judul}}</p>
                                        <p class="mr-auto">Deskripsi: {{$data->banner_deskripsi}}</p>
                                        @include('admin.template.utils.delete', ['url' => url('admin/web-banner/delete', $data->banner_id)])
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
</div>


@endsection