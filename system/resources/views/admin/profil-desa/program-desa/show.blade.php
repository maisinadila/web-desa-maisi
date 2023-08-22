@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">


@endpush
@section('content')




 <div class="row clearfix">
        
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <table>
                        <tbody>
                            <tr>
                                <td style="width: 150px">Nama Program </td>
                                <td>: {{$program->nama_program}}</td>
                            </tr>
                            <tr>
                                <td>Deskripsi </td>
                                <td>: {{$program->isi}}</td>
                            </tr>

                            <tr>
                                <td>Tahun Program </td>
                                <td>: {{$program->tahun}}</td>
                            </tr>

                             <tr>
                                <td>Dibuat Pada </td>
                                <td>: {{$program->created_at}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-body">

                    <embed src="{{url('public/program-desa', $program->file)}}" type="application/pdf" width="100%" height="600px" />
                </div>
            </div>
        </div>
    </div>



@endsection