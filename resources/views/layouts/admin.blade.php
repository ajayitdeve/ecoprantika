<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from themes.kopyov.com/limitless/demo/template/html/layout_1/full/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Nov 2024 17:05:39 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>

	<!-- Global stylesheets -->
	<link href="{{asset('assets/fonts/inter/inter.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/icons/phosphor/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/ltr/all.min.css')}}" id="stylesheet" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
    <!-- for datatable-->
      <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
	<!-- Core JS files -->
	<script src="{{asset('assets/demo/demo_configurator.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('assets/js/vendor/visualization/d3/d3.min.js')}}"></script>
	<script src="{{asset('assets/js/vendor/visualization/d3/d3_tooltip.js')}}"></script>

	<script src="{{asset('assets/js/app.js')}}"></script>
	<script src="{{asset('assets/demo/pages/dashboard.js')}}"></script>
	<script src="{{asset('assets/demo/charts/pages/dashboard/streamgraph.js')}}"></script>
	<script src="{{asset('assets/demo/charts/pages/dashboard/sparklines.js')}}"></script>
	<script src="{{asset('assets/demo/charts/pages/dashboard/lines.js')}}"></script>
	<script src="{{asset('assets/demo/charts/pages/dashboard/areas.js')}}"></script>
	<script src="{{asset('assets/demo/charts/pages/dashboard/donuts.js')}}"></script>
	<script src="{{asset('assets/demo/charts/pages/dashboard/bars.js')}}"></script>
	<script src="{{asset('assets/demo/charts/pages/dashboard/progress.js')}}"></script>
	<script src="{{asset('assets/demo/charts/pages/dashboard/heatmaps.js')}}"></script>
	<script src="{{asset('assets/demo/charts/pages/dashboard/pies.js')}}"></script>
	<script src="{{asset('assets/demo/charts/pages/dashboard/bullets.js')}}"></script>
	<!-- /theme JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('assets/js/jquery/jquery.min.js')}}"></script>
	<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>



	<!-- /theme JS files -->
    @stack('page-css')
</head>

<body>

	<!-- Main navbar -->
    @include('partials.navigation')
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
        @include('partials.sidebar')
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
            @yield('content')

			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


	<!-- Notifications -->
	<div class="offcanvas offcanvas-end" tabindex="-1" id="notifications">
		<div class="offcanvas-header py-0">
			<h5 class="offcanvas-title py-3">Activity</h5>
			<button type="button" class="btn btn-light btn-sm btn-icon border-transparent rounded-pill" data-bs-dismiss="offcanvas">
				<i class="ph-x"></i>
			</button>
		</div>

		<div class="offcanvas-body p-0">
			<div class="bg-light fw-medium py-2 px-3">New notifications</div>
			<div class="p-3">
				<div class="d-flex align-items-start mb-3">
					<a href="#" class="status-indicator-container me-3">
						<img src="{{asset('assets/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
						<span class="status-indicator bg-success"></span>
					</a>
					<div class="flex-fill">
						<a href="#" class="fw-semibold">James</a> has completed the task <a href="#">Submit documents</a> from <a href="#">Onboarding</a> list

						<div class="bg-light rounded p-2 my-2">
							<label class="form-check ms-1">
								<input type="checkbox" class="form-check-input" checked disabled>
								<del class="form-check-label">Submit personal documents</del>
							</label>
						</div>

						<div class="fs-sm text-muted mt-1">2 hours ago</div>
					</div>
				</div>

				<div class="d-flex align-items-start mb-3">
					<a href="#" class="status-indicator-container me-3">
						<img src="{{asset('assets/images/demo/users/face3.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
						<span class="status-indicator bg-warning"></span>
					</a>
					<div class="flex-fill">
						<a href="#" class="fw-semibold">Margo</a> has added 4 users to <span class="fw-semibold">Customer enablement</span> channel

						<div class="d-flex my-2">
							<a href="#" class="status-indicator-container me-1">
								<img src="{{asset('assets/images/demo/users/face10.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
								<span class="status-indicator bg-danger"></span>
							</a>
							<a href="#" class="status-indicator-container me-1">
								<img src="{{asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
								<span class="status-indicator bg-success"></span>
							</a>
							<a href="#" class="status-indicator-container me-1">
								<img src="{{asset('assets/images/demo/users/face12.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
								<span class="status-indicator bg-success"></span>
							</a>
							<a href="#" class="status-indicator-container me-1">
								<img src="{{asset('assets/images/demo/users/face13.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
								<span class="status-indicator bg-success"></span>
							</a>
							<button type="button" class="btn btn-light btn-icon d-inline-flex align-items-center justify-content-center w-32px h-32px rounded-pill p-0">
								<i class="ph-plus ph-sm"></i>
							</button>
						</div>

						<div class="fs-sm text-muted mt-1">3 hours ago</div>
					</div>
				</div>

				<div class="d-flex align-items-start">
					<div class="me-3">
						<div class="bg-warning bg-opacity-10 text-warning rounded-pill">
							<i class="ph-warning p-2"></i>
						</div>
					</div>
					<div class="flex-1">
						Subscription <a href="#">#466573</a> from 10.12.2021 has been cancelled. Refund case <a href="#">#4492</a> created
						<div class="fs-sm text-muted mt-1">4 hours ago</div>
					</div>
				</div>
			</div>

			<div class="bg-light fw-medium py-2 px-3">Older notifications</div>
			<div class="p-3">
				<div class="d-flex align-items-start mb-3">
					<a href="#" class="status-indicator-container me-3">
						<img src="{{asset('assets/images/demo/users/face25.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
						<span class="status-indicator bg-success"></span>
					</a>
					<div class="flex-fill">
						<a href="#" class="fw-semibold">Nick</a> requested your feedback and approval in support request <a href="#">#458</a>

						<div class="my-2">
							<a href="#" class="btn btn-success btn-sm me-1">
								<i class="ph-checks ph-sm me-1"></i>
								Approve
							</a>
							<a href="#" class="btn btn-light btn-sm">
								Review
							</a>
						</div>

						<div class="fs-sm text-muted mt-1">3 days ago</div>
					</div>
				</div>

				<div class="d-flex align-items-start mb-3">
					<a href="#" class="status-indicator-container me-3">
						<img src="{{asset('assets/images/demo/users/face24.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
						<span class="status-indicator bg-grey"></span>
					</a>
					<div class="flex-fill">
						<a href="#" class="fw-semibold">Mike</a> added 1 new file(s) to <a href="#">Product management</a> project

						<div class="bg-light rounded p-2 my-2">
							<div class="d-flex align-items-center">
								<div class="me-2">
									<img src="https://themes.kopyov.com/limitless/demo/template/assets/images/icons/pdf.svg" width="34" height="34" alt="">
								</div>
								<div class="flex-fill">
									new_contract.pdf
									<div class="fs-sm text-muted">112KB</div>
								</div>
								<div class="ms-2">
									<button type="button" class="btn btn-flat-dark text-body btn-icon btn-sm border-transparent rounded-pill">
										<i class="ph-arrow-down"></i>
									</button>
								</div>
							</div>
						</div>

						<div class="fs-sm text-muted mt-1">1 day ago</div>
					</div>
				</div>

				<div class="d-flex align-items-start mb-3">
					<div class="me-3">
						<div class="bg-success bg-opacity-10 text-success rounded-pill">
							<i class="ph-calendar-plus p-2"></i>
						</div>
					</div>
					<div class="flex-fill">
						All hands meeting will take place coming Thursday at 13:45.

						<div class="my-2">
							<a href="#" class="btn btn-primary btn-sm">
								<i class="ph-calendar-plus ph-sm me-1"></i>
								Add to calendar
							</a>
						</div>

						<div class="fs-sm text-muted mt-1">2 days ago</div>
					</div>
				</div>

				<div class="d-flex align-items-start mb-3">
					<a href="#" class="status-indicator-container me-3">
						<img src="{{asset('assets/images/demo/users/face4.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
						<span class="status-indicator bg-danger"></span>
					</a>
					<div class="flex-fill">
						<a href="#" class="fw-semibold">Christine</a> commented on your community <a href="#">post</a> from 10.12.2021

						<div class="fs-sm text-muted mt-1">2 days ago</div>
					</div>
				</div>

				<div class="d-flex align-items-start mb-3">
					<div class="me-3">
						<div class="bg-primary bg-opacity-10 text-primary rounded-pill">
							<i class="ph-users-four p-2"></i>
						</div>
					</div>
					<div class="flex-fill">
						<span class="fw-semibold">HR department</span> requested you to complete internal survey by Friday

						<div class="fs-sm text-muted mt-1">3 days ago</div>
					</div>
				</div>

				<div class="text-center">
					<div class="spinner-border" role="status">
						<span class="visually-hidden">Loading...</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /notifications -->


	<!-- Demo config -->
	{{-- <div class="offcanvas offcanvas-end" tabindex="-1" id="demo_config">
		<div class="position-absolute top-50 end-100 visible">
			<button type="button" class="btn btn-primary btn-icon translate-middle-y rounded-end-0" data-bs-toggle="offcanvas" data-bs-target="#demo_config">
				<i class="ph-gear"></i>
			</button>
		</div>

		<div class="offcanvas-header border-bottom py-0">
			<h5 class="offcanvas-title py-3">Demo configuration</h5>
			<button type="button" class="btn btn-light btn-sm btn-icon border-transparent rounded-pill" data-bs-dismiss="offcanvas">
				<i class="ph-x"></i>
			</button>
		</div>

		<div class="offcanvas-body">
			<div class="fw-semibold mb-2">Color mode</div>
			<div class="list-group mb-3">
				<label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-2">
					<div class="d-flex flex-fill my-1">
						<div class="form-check-label d-flex me-2">
							<i class="ph-sun ph-lg me-3"></i>
							<div>
								<span class="fw-bold">Light theme</span>
								<div class="fs-sm text-muted">Set light theme or reset to default</div>
							</div>
						</div>
						<input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme" value="light" checked>
					</div>
				</label>

				<label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-2">
					<div class="d-flex flex-fill my-1">
						<div class="form-check-label d-flex me-2">
							<i class="ph-moon ph-lg me-3"></i>
							<div>
								<span class="fw-bold">Dark theme</span>
								<div class="fs-sm text-muted">Switch to dark theme</div>
							</div>
						</div>
						<input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme" value="dark">
					</div>
				</label>

				<label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-0">
					<div class="d-flex flex-fill my-1">
						<div class="form-check-label d-flex me-2">
							<i class="ph-translate ph-lg me-3"></i>
							<div>
								<span class="fw-bold">Auto theme</span>
								<div class="fs-sm text-muted">Set theme based on system mode</div>
							</div>
						</div>
						<input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme" value="auto">
					</div>
				</label>
			</div>

			<div class="fw-semibold mb-2">Direction</div>
			<div class="list-group mb-3">
				<label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-0">
					<div class="d-flex flex-fill my-1">
						<div class="form-check-label d-flex me-2">
							<i class="ph-translate ph-lg me-3"></i>
							<div>
								<span class="fw-bold">RTL direction</span>
								<div class="text-muted">Toggle between LTR and RTL</div>
							</div>
						</div>
						<input type="checkbox" name="layout-direction" value="rtl" class="form-check-input cursor-pointer m-0 ms-auto">
					</div>
				</label>
			</div>

			<div class="fw-semibold mb-2">Layouts</div>
			<div class="row">
				<div class="col-12">
					<a href="index.html" class="d-block mb-3">
						<img src="../../assets/images/layouts/layout_1.png" class="img-fluid img-thumbnail bg-primary bg-opacity-20 border-primary" alt="">
					</a>
				</div>
				<div class="col-12">
					<a href="https://themes.kopyov.com/limitless/demo/template/html/layout_2/full/index.html" class="d-block mb-3">
						<img src="../../assets/images/layouts/layout_2.png" class="img-fluid img-thumbnail" alt="">
					</a>
				</div>
				<div class="col-12">
					<a href="https://themes.kopyov.com/limitless/demo/template/html/layout_3/full/index.html" class="d-block mb-3">
						<img src="../../assets/images/layouts/layout_3.png" class="img-fluid img-thumbnail" alt="">
					</a>
				</div>
				<div class="col-12">
					<a href="https://themes.kopyov.com/limitless/demo/template/html/layout_4/full/index.html" class="d-block mb-3">
						<img src="../../assets/images/layouts/layout_4.png" class="img-fluid img-thumbnail" alt="">
					</a>
				</div>
				<div class="col-12">
					<a href="https://themes.kopyov.com/limitless/demo/template/html/layout_5/full/index.html" class="d-block mb-3">
						<img src="../../assets/images/layouts/layout_5.png" class="img-fluid img-thumbnail" alt="">
					</a>
				</div>
				<div class="col-12">
					<a href="https://themes.kopyov.com/limitless/demo/template/html/layout_6/full/index.html" class="d-block">
						<img src="../../assets/images/layouts/layout_6.png" class="img-fluid img-thumbnail" alt="">
					</a>
				</div>
			</div>
		</div>

		<div class="border-top text-center py-2 px-3">
			<a href="../themeforest.net/item/limitless-responsive-web-application-kit/130803287d6b.html?ref=kopyov" class="btn btn-yellow fw-semibold w-100 my-1" target="_blank">
				<i class="ph-shopping-cart me-2"></i>
				Purchase Limitless
			</a>
		</div>
	</div> --}}
	<!-- /demo config -->

    @stack('page-script')
</body>

<!-- Mirrored from themes.kopyov.com/limitless/demo/template/html/layout_1/full/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Nov 2024 17:07:29 GMT -->
</html>
