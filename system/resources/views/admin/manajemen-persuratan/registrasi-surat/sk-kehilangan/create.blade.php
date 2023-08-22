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
            <center>
                <h3>Buat {{ucwords($template->nama_surat)}}</h3>
            </center>
            <p><sup style="color:red">*</sup>Pastikan NIK dan Nama telah benar yang dipilih, silahkan periksa terlebih dahulu</p>
            <form action="" method="post">
              @csrf
              <input type="text" class="form-control" placeholder="Masukan Nama Penduduk" name="search" id="search">
          </form>
          <table class="table table-hover table-sm">
              <tbody id="Content" class="searchdata">
              </tbody>
          </table>
      </div>
  </div>
</div>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


<script>
  $('#search').on('keyup', function(){

      // alert('hallo');
    $value=$(this).val();
    if($value){
      $('.alldata').hide();
      $('.searchdata').show();
  }else{
      $('.alldata').show();
      $('.searchdata').hide();
  }
      // alert($value);
  $.ajax({
      type:'POST',
      url:'{{URL::to("admin/manajemen-persuratan/cari-penduduk" )}}',
      
      data: {
         "_token": "{{ csrf_token() }}",
         'search':$value
     },

     success:function(data){




      for (var i = 0; i < data['hasil'].length; i++) {

        var con = data['hasil'][i];

        var nik = con['nik'];
        var nama_lengkap = con['nama_lengkap'];



        var output =
        `<tr>` +
        `<td>${nik}`+ ` - ${nama_lengkap}`+ ` <b> - `+`</b></td>` +
        `<td>` +
        `<form action="{{url('admin/manajemen-persuratan/registrasi-surat', $template->nama_file)}}/create" method="post">` +
        `@csrf` +          
        `<input type="hidden" name="data_status"  value="1">` +                
        `<input type="hidden" name="nik_penduduk" value="`+ `${nik}`+`">` +           
        `<button class="btn btn-primary mt-3 float-right" type="submit">Pilih Penduduk</button>` +       
        `</form>` +
        `</td>` +
        `</tr>`;
    }

    $('#Content').prepend(output);

}



})

})

</script>

@endsection