@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">


@endpush
@section('content')





    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{url('admin/profil-desa/program-desa/create')}}" method="post" enctype="multipart/form-data">
                    @csrf
                   <div class="row">
                       <div class="col-md-6 mt-3">
                           <span>Nama Program</span>
                           <input type="text" class="form-control" name="nama_program" required>
                       </div>
                       <div class="col-md-6 mt-3">
                           <span>Tahun Program</span>
                           <input type="number" min="2000" class="form-control" name="tahun" required>
                       </div>
                       <div class="col-md-6 mt-3">
                           <span>Deskripsi Program</span>
                           <textarea name="isi" id="" cols="30" rows="10" class="form-control" required></textarea>
                       </div>
                       <div class="col-md-6 mt-3">
                           <span>File Program</span>
                           <input type="file" class="form-control" name="file">
                       </div>

                       <div class="col-md-12">
                           <button class="btn btn-primary mt-3">SIMPAN</button>
                       </div>
                   </div>
                </form>
                
            </div>
        </div>
    </div>

</div>


@endsection