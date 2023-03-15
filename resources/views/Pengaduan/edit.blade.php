<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="../../">
		<title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular &amp; Laravel by Keenthemes</title>
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Signup Free Trial-->
			<div class="d-flex flex-column flex-xl-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-lg-row-fluid">
					<!--begin::Wrapper-->
					<div class="d-flex flex-row-fluid flex-center p-10">
						<!--begin::Content-->
						<div class="d-flex flex-column">
							<!--begin::Logo-->
							<a href="../../demo9/dist/index.html" class="mb-15">
								<img alt="Logo" src="assets/media/img_custom/kabbogor.png" class="h-40px" />
							</a>
							<!--end::Logo-->
							<!--begin::Title-->
							<h1 class="text-dark fs-2x mb-3">Selamat Datang !</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="fw-bold fs-4 text-gray-400 mb-10">Adakah Yang Ingin Anda Adukan ?
							<br />Adukanlah Kepada Kami</div>
							<!--begin::Description-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Illustration-->
					<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-200px min-h-xl-450px mb-xl-10" style="background-image: url(assets/media/illustrations/sigma-1/8.png"></div>
					<!--end::Illustration-->
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="flex-row-fluid d-flex flex-center justfiy-content-xl-first p-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-center p-15 shadow bg-body rounded w-100 w-md-550px mx-auto ms-xl-20">
						<!--begin::Form-->
						<form class="form"  id="kt_free_trial_form" action="{{ route('approve',$pengaduan->id) }}" method="POST" enctype="multipart/form-data"> 
							@csrf
							@method ('PUT')
							<!--begin::Heading-->
							<div class="text-center mb-10">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">Halaman Pengaduan</h1>
								<!--end::Title-->
								<!--begin::Link-->
								<div class="text-gray-400 fw-bold fs-4">Adukan Masalah Anda
								<!--end::Link-->
							</div>
							<!--begin::Heading-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<label class="form-label fw-bolder text-dark fs-6">Nama Pengadu</label>
								<input class="form-control form-control-solid" type="text" placeholder="" name="nama" autocomplete="off" />
							</div>
							<div class="fv-row mb-10">
								<label class="form-label fw-bolder text-dark fs-6">NIK</label>
								<input class="form-control form-control-solid" type="text" placeholder="" name="nik" autocomplete="off" />
							</div>
                            <div class="fv-row mb-10">
								<label class="form-label fw-bolder text-dark fs-6">Tanggal Pengaduan</label>
								<input class="form-control form-control-solid" type="date" placeholder="" name="tgl_pengaduan" autocomplete="off" />
                                
							</div>
                            <div class="fv-row mb-10">
								<label class="form-label fw-bolder text-dark fs-6">Foto</label>
								<input class="form-control form-control-solid" type="file" placeholder="" name="foto" autocomplete="off" />
							</div>
                            <div class="fv-row mb-10">
								<label class="form-label fw-bolder text-dark fs-6">Isi Laporan</label>
								<input class="form-control form-control-solid" type="text" placeholder="" name="isi_laporan" autocomplete="off" />
							</div>
							<div class="fv-row mb-10">
								<label class="form-label fw-bolder text-dark fs-6">Status</label>
								<input class="form-control form-control-solid" type="text" placeholder="" name="status" autocomplete="off" />
							</div>
							<div class="text-muted">Pastikan status yang anda masukan adalah salah satu dari : pengajuan, on_progress , dan selesai</div>

                            
                            
								<!--end::Wrapper-->
								<!--begin::Hint-->
								<div class="text-muted">Pastikan Laporan Anda Sudah Disampaikan Dengan Jelas Agar Mempermudah Kami Menyelesaikannya</div>
								<!--end::Hint-->
							</div>
							<!--end::Input group=-->
							<!--begin::Row-->
							
							<!--end::Row-->
							<!--begin::Row-->
							
							<!--end::Row-->
							<!--begin::Row-->
							<div class="text-center pb-lg-0 pb-8">
								<button type="submit" id="kt_free_trial_submit" class="btn btn-lg btn-primary fw-bolder">
									<span class="indicator-label">Update Pengaduan</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Row-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Right Content-->
			</div>
			<!--end::Authentication - Signup Free Trial-->
		</div>
		<!--end::Main-->
		
        <script>var hostUrl = "assets/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/apps/calendar/calendar.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/modals/create-app.js"></script>
		<script src="assets/js/custom/modals/upgrade-plan.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->