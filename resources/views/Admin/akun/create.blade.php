@extends ('Layouts.Admin')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">
							<!--begin::Card-->
							<div class="card">
								<!--begin::Card body-->
								<div class="card-body p-0">
									<!--begin::Wrapper-->
									<div class="card-px text-center py-20 my-10">
										<!--begin::Title-->
										<h2 class="fs-2x fw-bolder mb-10">Halo Admin!</h2>
										<!--end::Title-->
										<!--begin::Description-->
										<p class="text-gray-400 fs-4 fw-bold mb-10">Mau Nambahin User ?.
										<br />Pilih Disini</p>
										<!--end::Description-->
										<!--begin::Action-->
										<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">Buat User</a>
										<!--end::Action-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Illustration-->
									<div class="text-center px-4">
										<img class="mw-100 mh-300px" alt="" src="assets/media/illustrations/sigma-1/2.png" />
									</div>
									<!--end::Illustration-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
							<!--begin::Modals-->
							<!--begin::Modal - Customers - Add-->
							<div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Form-->
										<form class="form" action="{{ route('akun.store')}}" method="POST" enctype="multipart/form-data">
											@csrf
											<!--begin::Modal header-->
											<div class="modal-header" id="kt_modal_add_customer_header">
												<!--begin::Modal title-->
												<h2 class="fw-bolder">Buat User</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Close-->
											</div>
											<!--end::Modal header-->
											<!--begin::Modal body-->
											<div class="modal-body py-10 px-lg-17">
												<!--begin::Scroll-->
												<div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="required fs-6 fw-bold mb-2">Name</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" placeholder="" name="name" value="" />
														<!--end::Input-->
													</div>
                                                    <div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-bold mb-2">
															<span class="required">NIK</span>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" placeholder="" name="nik" value="" />
														<!--end::Input-->
													</div>

                                                    <div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-bold mb-2">
															<span class="required">No Telepon</span>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" placeholder="" name="no_telp" value="" />
														<!--end::Input-->
													</div>

													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-bold mb-2">
															<span class="required">Email</span>
															<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Email address must be active"></i>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="email" class="form-control form-control-solid" placeholder="" name="email" value="" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-15">
														<!--begin::Label-->
														<label class="fs-6 fw-bold mb-2 required">Password</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="password" class="form-control form-control-solid" placeholder="" name="password" />
														<!--end::Input-->
													</div>

                                                   


                                                    <div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">
																<span class="required">Role</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<select name="role" aria-label="Select a Role" data-control="select2" data-placeholder="Select a Role..." data-dropdown-parent="#kt_modal_add_customer" class="form-select form-select-solid fw-bolder">
																<option value="">Select a Role ...</option>
																<option value="admin">Admin</option>
																<option value="petugas">Petugas </option>
																<option value="masyarakat">Masyarakat</option>
																
															</select>
															<!--end::Input-->
														</div>
													<!--end::Input group-->
													<!--begin::Billing toggle-->
												
											<!--end::Modal body-->
											<!--begin::Modal footer-->
											<div class="modal-footer flex-center">
												<!--begin::Button-->
												<button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">Hapus Data</button>
												<!--end::Button-->
												<!--begin::Button-->
												<button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
													<span class="indicator-label">Submit</span>
													<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<!--end::Button-->
											</div>
											<!--end::Modal footer-->
										</form>
										<!--end::Form-->
									</div>
								</div>
							</div>
							<!--end::Modal - Customers - Add-->
							<!--end::Modals-->
						</div>
						<!--end::Container-->
					</div>
                











                

























