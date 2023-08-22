@extends('admin.template.base')
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Manajemen Layanan</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
                <li class="breadcrumb-item active">Manajemen Layanan</li>
            </ul>
        </div>
       
    </div>
</div>
<!-- akhir breadcrumb -->

<div class="row clearfix">
    <div class="col-lg-5 col-sm-12">
        <div class="card">
           <div class="card-header">
            <div class="row">
              <div class="col">
                Logo Desa {{ucwords(App\Models\Pengaturan::first()->nama_desa)}}
              </div>
              <div class="col ">
                <a href="#modallogo" data-toggle="modal" data-target="#modallogo" class="float-right" style="font-size: 20px"><i class="fa fa-upload"></i></a>
                <div class="modal fade" id="modallogo" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="title" id="defaultModalLabel">Pengaturan</h4>
                            </div> 
                            <form action="{{url('admin/web-pengaturan/storelogo')}}" method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="modal-body">
                                <div class="form-group">
                                  <label for="">Nama Desa</label>
                                  <input type="text" name="nama" class="form-control" placeholder="Nama Desa" value="{{$pengaturan->nama_desa}}" />
                                </div>
                                <div class="form-group">
                                  <label for="">Alamat Desa</label>
                                  <textarea name="alamat" class="form-control" id="" cols="20" rows="4" placeholder="Alamat Desa"> {{$pengaturan->alamat}}</textarea>
                                </div>
                                <div class="form-group d-flex flex-column">
                                  <input type="file" class="form-file-input" name="file" accept="image/*" >
                                  <small>Logo Desa upload disini</small>
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
            </div>
           </div>
           <div class="card-body" >
            @if( $pengaturan->logo == '-' ||  $pengaturan->logo == '')
              upload logo desa
            @else
              <img src="{{url('public/web/pengaturan')}}/{{$pengaturan->logo}}" style="width: 100%; height: 180px; object-fit: contain;" alt="">
            @endif

            <hr>
            <table>  
              <tbody>
                <tr>
                  <td style="vertical-align: top;"><h5 class="text-bold">Desa</h5 ></td>
                  <td style="vertical-align: top;"><h5 class="text-bold">:</h5 ></td>
                  <td style="vertical-align: top;"><h5 class="text-bold">{{$pengaturan->nama_desa}}</h5 ></td>
                </tr>
                <tr>
                  <td style="vertical-align: top;"><h5 class="text-bold">Alamat</h5 ></td>
                  <td style="vertical-align: top;"><h5 class="text-bold">:</h5 ></td>
                  <td style="vertical-align: top;"><h5 class="text-bold">{{$pengaturan->alamat}}</h5 ></td>
                </tr>
               
              </tbody>
             </table>
           </div>
        </div>
    </div>
    <div class="col-lg-7 col-sm-12">
        <div class="card">
          <div class="card-header">
          <div class="row">
              <div class="col">
               Lokasi Desa {{ucwords(App\Models\Pengaturan::first()->nama_desa)}}
              </div>
              <div class="col ">
                <a href="#modallokasi" data-toggle="modal" data-target="#modallokasi" class="float-right" style="font-size: 20px"><i class="fa fa-upload"></i></a>
                <div class="modal fade" id="modallokasi" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="title" id="defaultModalLabel">Upload Lokasi</h4>
                            </div> 
                            <form action="{{url('admin/web-pengaturan/storemap')}}" method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="modal-body">
                              <textarea name="map" class="form-control" id="" cols="20" rows="4"></textarea>

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
            </div>
          </div>
           <div class="card-body d-flex justify-content-center">
           
            {!!nl2br($pengaturan->embed_maps)!!}
           </div>
        </div>
    </div>
    
</div>


@endsection