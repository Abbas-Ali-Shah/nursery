<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
<meta content="Splite - a responsive, flat and full featured admin template" name="description">
<meta content="Spruko Technologies Private Limited" name="author">
<meta name="keywords" content="bootstrap admin template,bootstrap dashboard,dashboard template,bootstrap dashboard,admin dashboard,bootstrap admin,html admin template,html dashboard template,bootstrap admin dashboard,themeforest admin template,admin panel template,bootstrap 4 admin template,template admin bootstrap 4,bootstrap dashboard template,dashboard design template">
<link rel="icon" href="{{asset('assets/img/brand/favicon.icon')}}" type="image/x-icon"/>
<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/brand/favicon.icon')}}" />
<title>Login</title>


<!--Bootstrap.min css-->
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">

<!--Style css-->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

<!--Icons css-->
<link rel="stylesheet" href="{{asset('assets/css/icons.css')}}">

<!--P-scrollbar css-->
<link href="{{asset('assets/plugins/p-scroll/perfect-scrollbar.css')}}" rel="stylesheet"/>

<!--Sidemenu css-->
<link rel="stylesheet" href="{{asset('assets/css/sidemenu.css')}}">

<!--Chartist css-->
<link rel="stylesheet" href="{{asset('assets/plugins/chartist/chartist.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/chartist/chartist-plugin-tooltip.css')}}">

<!--Full calendar css-->
<link rel="stylesheet" href="{{asset('assets/plugins/fullcalendar/stylesheet1.css')}}">

<!--morris css-->
<link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">

</head>

	<body class="bg-primary">

	    <!--app open-->
		<div id="app" class="page">
			<section class="section ">
                <div class="container">
					<div class="">

						<!--single-page open-->
						<div class="single-page">
							<div class="">
								<div class="wrapper wrapper2">
									<form id="login" class="card-body" tabindex="500" action="{{ route('sigup.Addsign') }}" method="post">
                                        @csrf
										<h3 class="text-dark">Sig Up</h3>
										<div class="mail">
											<input type="text" name ="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
										</div>
                                        <div class="mail">
											<input type="email"  name ="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
										</div>
										<div class="passwd">
											<input type="password"  name ="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
										</div>
										
										<div class="form-group mb-0 mt-2 row justify-content-end">
                                            <div class="col-md-9">
                                                <button type="submit" class="btn btn-primary">Submit</button>
    
                                            </div>
										
									</form>
									
								</div>
							</div>
						</div>
						<!--single-page closed-->

					</div>
				</div>
			</section>
		</div>
		<!--app closed-->

		<!--Jquery.min js-->
		<script src="../../assets/js/jquery.min.js"></script>

		<!--popper js-->
		<script src="../../assets/js/popper.js"></script>

		<!--Bootstrap.min js-->
		<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--Tooltip js-->
		<script src="../../assets/js/tooltip.js"></script>

		<!-- Jquery star rating-->
		<script src="../../assets/plugins/rating/jquery.rating-stars.js"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="../../assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

		<!--Scroll-up-bar.min js-->
		<script src="../../assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

		<script src="../../assets/js/moment.min.js"></script>

		<!--p-scrollbar js-->
		<script src="../../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
		<script src="../../assets/plugins/p-scroll/p-scroll.js"></script>

		<!--Sidemenu js-->
		<script src="../../assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--Showmore js-->
		<script src="../../assets/js/jquery.showmore.js"></script>

		<!--Scripts js-->
		<script src="../../assets/js/scripts.js"></script>
	</body>
</html>