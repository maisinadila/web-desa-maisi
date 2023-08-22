@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">


@endpush
@section('content')


    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-body">
                <h3>Profil Wilayah Desa</h3>
                <a href="{{url('admin/profil-desa/profil-wilayah-desa/edit',$profil->profil_id)}}" class="btn btn-dark">Edit Profil Wilayah Desa</a>
                <p>{!!nl2br($profil->profil_wilayah_desa)!!}</p>
            </div>
        </div>
    </div>

</div>


@endsection