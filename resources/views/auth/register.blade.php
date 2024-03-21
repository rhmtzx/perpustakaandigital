
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Digitalibrary - Register Perpustakaan</title>
	<link rel="icon" href="{{asset('syndash/codervent.com/syndash/demo/vertical/assets/images/favicon-32x32.png')}}" type="image/png" />
	<link href="{{asset('syndash/codervent.com/syndash/demo/vertical/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('syndash/codervent.com/syndash/demo/vertical/assets/js/pace.min.js')}}"></script>
	<link rel="stylesheet" href="{{asset('syndash/codervent.com/syndash/demo/vertical/assets/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&amp;family=Roboto&amp;display=swap" />
	<link rel="stylesheet" href="{{asset('syndash/codervent.com/syndash/demo/vertical/assets/css/icons.css')}}" />
	<link rel="stylesheet" href="{{asset('syndash/codervent.com/syndash/demo/vertical/assets/css/app.css')}}" />
</head>
<body class="bg-register">
	<div class="wrapper">
		<div class="section-authentication-register d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15 overflow-hidden">
						<div class="row g-0">
							<div class="col-xl-6">
								<div class="card-body p-md-5">
									<div class="text-center">
										<img src="{{asset('syndash/codervent.com/syndash/demo/vertical/assets/images/logo-icon.png')}}" width="80" alt="">
										<h3 class="mt-4 font-weight-bold"><em>Register Perpustakaan</em></h3>
									</div>
									<div class="">
										<br>
										<div class="form-body">
											<form action="/prosesregister" method="post" class="row g-3">
												@csrf
												<div class="col-sm-12">
													<label for="inputFirstName" class="form-label">Masukkan Nama Lengkap</label>
													<input type="text" name="namalengkap" class="form-control" id="namalengkap" placeholder="MUHAMMAD RAHMATULLAH">
												</div>
												<div class="col-sm-12">
													<label for="inputFirstName" class="form-label">Masukkan Username</label>
													<input type="text" name="username" class="form-control" id="username" placeholder="RAHMATZ">
												</div>
												<div class="col-sm-12">
													<label for="inputFirstName" class="form-label">Masukkan Alamat</label>
													<input type="text" name="alamat" class="form-control" id="alamat" placeholder="JL.MT HARYONO GG 10">
												</div>
												<div class="col-12">
													<label for="inputemailAddress" class="form-label">Masukkan Email</label>
													<input type="email" name="email" class="form-control" id="email" placeholder="rahmat@gmail.com">
												</div>
												@error('email')
                                    				<div class="alert alert-danger">{{ $message }}</div>
                                    			@enderror
												<div class="col-12">
													<label for="inputChoosepassword" class="form-label">Masukkan Password</label>
													<div class="input-group" id="show_hide_password">
														<input type="password" name="password" class="form-control border-end-0" id="password" placeholder="123456789"> <a href="javascript:;" class="input-group-text bg-transparent"><i class="bx bx-hide"></i></a>
													</div>
												</div>
												<div class="col-12">
													<div class="d-grid">
														<button type="submit" class="btn btn-primary"><i class="bx bx-user me-1"></i>Daftarkan Akun</button>
													</div>
													<br>
													<div class="col-12 text-center">
														<p>Sudah Punya Akun ? <a href="/login ">Login Disini</a></p>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 bg-login-color d-flex align-items-center justify-content-center">
								<img src="{{asset('syndash/codervent.com/syndash/demo/vertical/assets/images/login-images/register-frent-img.jpg')}}" class="img-fluid" alt="...">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="{{asset('syndash/codervent.com/syndash/demo/vertical/assets/js/jquery.min.js')}}"></script>
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
</body>
</html>