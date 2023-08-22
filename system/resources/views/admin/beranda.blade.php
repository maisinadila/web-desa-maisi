@extends('admin.template.base')
@section('content')


<div class="row clearfix mt-4">

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card top_widget">
            <div class="body bg-warning">
                <div class="icon"><i class="fa fa-star"></i> </div>
                <div class="content">
                    <div class="text mb-2 text-uppercase">Layanan</div>
                     <h5 class="mb-0">{{$layanan}}</h5>
                </div>
            </div>
        </div>
    </div>

     <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card top_widget">
            <div class="body bg-danger text-white">
                <div class="icon"><i class="fa fa-newspaper-o"></i> </div>
                <div class="content">
                    <div class="text mb-2 text-uppercase">Berita</div>
                     <h5 class="mb-0">{{$berita}}</h5>
                </div>
            </div>
        </div>
    </div>

<!-- 
     <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card top_widget">
            <div class="body bg-secondary text-white">
                <div class="icon"><i class="fa fa-globe"></i> </div>
                <div class="content">
                    <div class="text mb-2 text-uppercase">Publikasi</div>
                     <h5 class="mb-0">{{$berita}}</h5>
                </div>
            </div>
        </div>
    </div>
 -->

 <!--  <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card top_widget">
            <div class="body bg-success text-white">
                <div class="icon"><i class="fa fa-info"></i> </div>
                <div class="content">
                    <div class="text mb-2 text-uppercase">Informasi</div>
                     <h5 class="mb-0">{{$informasi}}</h5>
                </div>
            </div>
        </div>
    </div>
 -->
    

  <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card top_widget">
            <div class="body bg-info text-white">
                <div class="icon"><i class="fa fa-users"></i> </div>
                <div class="content">
                    <div class="text mb-2 text-uppercase">Total Penduduk</div>
                     <h5 class="mb-0">{{$penduduk}}</h5>
                </div>
            </div>
        </div> 
    </div>

     <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card top_widget">
            <div class="body bg-primary text-white">
                <div class="icon"><i class="fa fa-envelope"></i> </div>
                <div class="content">
                    <div class="text mb-2 text-uppercase">Surat Baru Masuk</div>
                     <h5 class="mb-0">{{$surat}}</h5>
                </div>
            </div>
        </div>
    </div>

    
</div>

@if(Auth::user()->level == 2)
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h3>Permohonan TTD Surat</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Surat</th>
                                <th>Tgl. Mohon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list_surat_baru as $s)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ucwords($s->jenis_surat)}}</td>
                                <td>{{$s->created_at}}</td>
                                <td><a href="{{url($s->url)}}" class="btn btn-warning"><i class="fa fa-eye"></i> Lihat</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endif

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Lokasi Desa</h2>

            </div>
            <div class="body">
                <div class="row">
                    <div class="col-md-8">
                        {!!nl2br($pengaturan->embed_maps)!!}
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{url('public/perangkat-desa')}}/{{$kepala->foto}}" style="border: 5px;" width="100%" alt="">
                            </div>
                            <div class="card-header">
                                <center>
                                   <u>{{ucwords($kepala->nama)}}</u> <br>
                                   <b>Kepala Desa</b>
                               </center>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>

@endsection