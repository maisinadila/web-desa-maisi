@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">


@endpush
@section('content')


    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-body">
                <h3>Profil Wilayah Desa</h3>

                <form action="{{url('admin/profil-desa/profil-wilayah-desa/update',$profil->profil_id)}}" method="post">
                    @csrf
                    @method("PUT")
                    <textarea name="profil_wilayah_desa" required id="" cols="30" rows="10" class="form-control">{!!nl2br($profil->profil_wilayah_desa)!!}</textarea>

                    <div class="form-group mt-3 mb-5">
                        <button class="btn btn-primary float-right">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>


@endsection