@extends('admin.template.base')
@section('content')

<div class="card mt-3">
	<div class="card-header">
		<h3>Profil Akun</h3>
	</div>
	<div class="card-body">
		<form action="{{url('admin/profil-akun/update')}}" method="post">
			@csrf
			@method("PUT")

			<div class="form-group">
				<label for="" class="label">Email</label>
				<input type="emai" name="email" required class="form-control" value="{{$user->email}}">
			</div>

			<div class="form-group">
				<label for="" class="label">Password</label>
				<input type="password" name="password" required class="form-control">
			</div>

			<div class="form-group">
				<label for="" class="label">Konfirmasi Password</label>
				<input type="password" name="konfirmasi_password" required class="form-control" >
			</div>

			<div class="form-group">
				<button class="btn btn-primary"> <i class="fa fa-save"></i> SIMPAN PROFIL</button>
			</div>

		</form>
	</div>
</div>


@endsection