<!doctype html>
<html lang="en">

<head>
    <title>Login {{ucwords($pengaturan->nama_desa)}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{url('public')}}/assets-admin/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public')}}/assets-admin/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('public')}}/assets-admin/css/main.css">

</head>

<body data-theme="light" class="font-nunito">
	<!-- WRAPPER -->
	<div id="wrapper" class="theme-cyan">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle auth-main">
				<div class="auth-box">
					<div class="card">
                        <div class="header">
                            <p class="lead">Masuk Perangkat Desa</p>
                            @include('admin.template.utils.notif')
                        </div>
                        <div class="body">
                            <form class="form-auth-small" action="{{url('login')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="email" class="form-control" id="signin-email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="signin-password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group clearfix">
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox">
                                        <span>Remember me</span>
                                    </label>							
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
