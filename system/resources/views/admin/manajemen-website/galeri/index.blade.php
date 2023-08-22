@extends('admin.template.base')
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Manajemen Galeri</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
                <li class="breadcrumb-item active">Manajemen Galeri</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
              
                    <a href="#defaultModal" data-toggle="modal" data-target="#defaultModal" class="btn btn-primary"><i class="fa fa-upload"></i> Tambah Foto</a>
                    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="title" id="defaultModalLabel">Tambah Foto</h4>
                                </div> 
                                <form action="{{url('admin/web-galeri/store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <input type="file" class="form-file-input form-control" name="file" accept=".png, .jpg, .jpeg" required="">

                                    <textarea name="caption" class="form-file-input form-control mt-3" id="" cols="30" rows="3" placeholder="Caption Gambar"></textarea>
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
                <h2>Galeri Website Desa {{ucwords(App\Models\Pengaturan::first()->nama_desa)}}<small>Semua foto yang ada di galeri ini akan ditampilkan pada website</small></h2>
            </div>
            <div class="body">
                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                    @foreach($galeri as $data)
                    <div class="col-lg-3 col-md-6 col-sm-12 m-b-30"> 
                        <a href="#modalgambar{{$data->galeri_id}}" data-toggle="modal" data-target="#modalgambar{{$data->galeri_id}}" > 
                            <img class="img-fluid img-thumbnail" src="{{url('public/web/galeri')}}/{{$data->galeri_foto}}" alt="" style="height: 240px; width: 340px; object-fit: contain;"> 
                        </a> 
                        <div class="modal fade" id="modalgambar{{$data->galeri_id}}" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content" style="width: fit-content">
                                    <img class="img-fluid img-thumbnail" src="{{url('public/web/galeri')}}/{{$data->galeri_foto}}" alt="" style="height: 340px; width: 500px; object-fit: contain;">                              
                                    <div class="modal-footer">
                                        <p class="mr-auto">{{$data->galeri_caption}}</p>
                                        @include('admin.template.utils.delete', ['url' => url('admin/web-galeri/delete', $data->galeri_id)])
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