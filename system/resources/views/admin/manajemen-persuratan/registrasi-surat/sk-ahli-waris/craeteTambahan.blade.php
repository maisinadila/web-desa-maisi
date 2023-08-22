@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">


@endpush
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Manajemen Persuratan</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
                <li class="breadcrumb-item align-items-center"><a href="{{url('admin/manajemen-persuratan/registrasi-surat')}}">Kumpulan Surat</a></li>                            
                <li class="breadcrumb-item active">Tambah {{ucwords($template->nama_surat)}}</li>
            </ul>
        </div>
    </div>
</div>
<!-- akhir breadcrumb -->



<div class="row clearfix">
  <div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <form action="{{url('admin/manajemen-persuratan/registrasi-surat/surat-keterangan-ahli-waris/createtambahan', $surat->surat_id)}}"  method="post">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
                        <label >Tanggal Meninggal</label>
                        <input type="date" name="tgl" required class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                   <div class="form-group">
                    <label >Tempat Meninggal</label>
                    <input type="text" name="tempat" required class="form-control">
                </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                <label >Sebab</label>
                <input type="text" name="sebab" required class="form-control">
            </div>
        </div>
        <div class="col-md-6">
           <div class="form-group">
            <label >Tempat Pemakaman</label>
            <input type="text" name="tempat_pemakam" required class="form-control">
        </div>
    </div>


    <div class="col-md-6">
       <div class="form-group">
        <label >Saksi 1</label>
        <input type="text" name="saksi_1" required class="form-control">
    </div>
</div>
<div class="col-md-6">
   <div class="form-group">
    <label >Saksi 2</label>
    <input type="text" name="saksi_2" required class="form-control">
</div>
</div>

<div class="col-md-12 mt-5">
    <h3>Data Ahli Waris</h3>
    
</div>


<div class="col-md-6 mt-3">

    <div class="form-group">
        <label >Nama</label>
        <input type="text" name="nama[]" required class="form-control">
    </div>
</div>
<div class="col-md-6 mt-3">

   <div class="form-group">
    <label >Jenis Kelamin</label>
    <select name="jenis_kelamin[]" required id="" class="form-control">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
</div>
</div>
<div class="col-md-6">
   <div class="form-group">
    <label >Umur</label>
    <input type="number" name="umur[]" required class="form-control">
</div>
</div>
<div class="col-md-6">

  <div class="form-group">
    <label >Hubungan dalam keluarga</label>
    <input type="text" name="hubungan[]" class="form-control">
</div>
</div>

</div>

<div class="row">
    <div class="col-md-12">
     <div id="dynamicTableDasar"></div>
 </div>
</div>





<div class="col-md-12">
    <button type="button" name="add" id="add"
    class="btn btn-sm btn-dark mb-3"><i class="fa fa-plus"></i> Tambah Ahli Waris</button>
</div>







<button type="submit" class="btn btn-primary">Buat Surat</button>
</form>
</div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script type="text/javascript">
    var i = 0;

    $("#add").click(function() {
        ++i;

        var isi_dasar =  '<div class="row mt-5">'+
        '<div class="col-md-6">'+
        '<div class="form-group">'+
        '<label >Nama</label>'+
        '<input type="text" name="nama[]" required class="form-control">'+
        '</div>'+
        '</div>'+
        '<div class="col-md-6">'+
        '<div class="form-group">'+
        '<label >Jenis Kelamin</label>'+
        '<select name="jenis_kelamin[]" required id="" class="form-control">'+
        '<option value="Laki-laki">Laki-laki</option>'+
        '<option value="Perempuan">Perempuan</option>'+
        '</select>'+
        '</div>'+
        '</div>'+
        '<div class="col-md-6">'+
        '<div class="form-group">'+
        '<label >Umur</label>'+
        '<input type="number" name="umur[]" required class="form-control">'+
        '</div>'+
        '</div>'+
        '<div class="col-md-6">'+
        '<div class="form-group">'+
        '<label >Hubungan dalam keluarga</label>'+
        '<input type="text" name="hubungan[]" class="form-control">'+
        '</div>'+
        '</div>'+
        '</div>';


        $("#dynamicTableDasar").append(isi_dasar);
    });

</script>

@endsection