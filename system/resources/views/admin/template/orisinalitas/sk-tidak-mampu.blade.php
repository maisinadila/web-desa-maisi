<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ORISINALITAS SURAT</title>
	<link rel="icon" type="image/x-icon" href="{{url('public')}}/admin/assets/img/favicon/favicon.ico" />

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
	<meta name="author" content="WrapTheme, design by: ThemeMakker.com">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{url('public')}}/assets-admin/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{url('public')}}/assets-admin/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{url('public')}}/assets-admin/vendor/toastr/toastr.min.css">
	<link rel="stylesheet" href="{{url('public')}}/assets-admin/vendor/charts-c3/plugin.css"/>

	<!-- MAIN Project CSS file -->
	<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/main.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<style>
	td{
		vertical-align: top !important;
	}
</style>
<body>
	<div class="row">
		<div class="col-md-12">
			<center>
				<div class="card shadow" style="width: 400px; margin-top: 100px;">
					<div class="card-body">
						<img src="{{url('public/logo-ketapang.png')}}" width="20%" alt="">
						<h5 class="mt-3">ORISINALITAS SURAT </h5>
						<p>Kode : {{$detail->kode_token}}</p>
						<div class="row">
							<div class="card bg-success"> <br>
								<h3 style="color:#ffffff"><b>STATUS VALID</b></h3>
							</div>
						</div>
						<table>
							<tr>
								<td colspan="2"><b>Yang bertandatangan disurat ini : <br></b></td>
							</tr>
							<tr>
								<th>Nama</th>
								<td>: {{ucwords($kades->nama)}}</td>
							</tr>
							<tr>
								<th>Jabatan</th>
								<td>: {{ucwords($kades->jabatan)}}</td>
							</tr>

							<tr>
								<td colspan="2"><br><b>Menerangkan bahwa surat ini benar-benar valid yang ditujukan Kepada : <br> <br></b></td>
							</tr>

							<tr>
								<th>Nama</th>
								<td>: {{ucwords($penduduk->nama_lengkap)}}</td>
							</tr>
							<tr>
								<th>NIK</th>
								<td>: {{ucwords($penduduk->nik)}}</td>
							</tr>

							<tr>
								<td colspan="2"><br><b>
									Dibuat Pada : {{$detail->created_at}} <br>
									Dikonfirmasi Pada : {{$detail->updated_at}}
									<br>
									<br> 	<br>

								</b></td>
							</tr>


						</table>
					</div>
				</div>
			</center>
		</div>
	</div>
	



</body>
</html>







