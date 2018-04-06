<?php include('include/header.php'); ?>

<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">
	<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<!-- BEGIN: Subheader -->
		<div class="m-subheader ">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="m-subheader__title m-subheader__title--separator">
									Lista e Policave
								</h3>
					<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
						<li class="m-nav__item m-nav__item--home">
							<a href="#" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
						</li>
						<li class="m-nav__separator">
							-
						</li>
						<li class="m-nav__item">
							<a href="" class="m-nav__link">
									<span class="m-nav__link-text">
										Shitja
									</span>
								</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- END: Subheader -->
		<div class="m-content">
			<div class="m-portlet m-portlet--mobile">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<h3 class="m-portlet__head-text">
											Shendeti ne Udhetim
											<small>
												Lista e Policave
											</small>
										</h3>
						</div>
					</div>
					<div class="m-portlet__head-tools">
						<ul class="m-portlet__nav">
							<li class="m-portlet__nav-item">
								<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
									<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
													<i class="la la-ellipsis-h m--font-brand"></i>
												</a>
									<div class="m-dropdown__wrapper">
										<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
										<div class="m-dropdown__inner">
											<div class="m-dropdown__body">
												<div class="m-dropdown__content">
													<ul class="m-nav">
														<li class="m-nav__section m-nav__section--first">
															<span class="m-nav__section-text">
																			Veprime te Shpejta
																		</span>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-share"></i>
																			<span class="m-nav__link-text">
																				Regjistro Police
																			</span>
																		</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-chat-1"></i>
																			<span class="m-nav__link-text">
																				Send Messages
																			</span>
																		</a>
														</li>
														<li class="m-nav__separator m-nav__separator--fit m--hide"></li>
														<li class="m-nav__item m--hide">
															<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
																			Submit
																		</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="m-portlet__body">
					<!--begin: Search Form -->
					<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
						<div class="row align-items-center">
							<div class="col-xl-8 order-2 order-xl-1">
								<div class="form-group m-form__group row align-items-center">
									<div class="col-md-4">
										<div class="m-form__group m-form__group--inline">
											<div class="m-form__label">
												<label>
																Status:
															</label>
											</div>
											<div class="m-form__control">
												<select class="form-control m-bootstrap-select m-bootstrap-select--solid" id="m_form_status">
													<option value="">
														All
													</option>
													<option value="1">
														Pending
													</option>
													<option value="2">
														Delivered
													</option>
													<option value="3">
														Canceled
													</option>
												</select>
											</div>
										</div>
										<div class="d-md-none m--margin-bottom-10"></div>
									</div>
									<div class="col-md-4">
										<div class="m-form__group m-form__group--inline">
											<div class="m-form__label">
												<label class="m-label m-label--single">
													Type:
												</label>
											</div>
											<div class="m-form__control">
												<select class="form-control m-bootstrap-select m-bootstrap-select--solid" id="m_form_type">
														<option value="">
															All
														</option>
														<option value="1">
															Online
														</option>
														<option value="2">
															Retail
														</option>
														<option value="3">
															Direct
														</option>
													</select>
											</div>
										</div>
										<div class="d-md-none m--margin-bottom-10"></div>
									</div>
									<div class="col-md-4">
										<div class="m-input-icon m-input-icon--left">
											<input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
											<span class="m-input-icon__icon m-input-icon__icon--left">
													<span>
														<i class="la la-search"></i>
													</span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 order-1 order-xl-2 m--align-right">
								<a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill" data-target="#m_modal_4" data-toggle="modal">
												<span>
													<i class="la la-plus"></i>
													<span>
														Regjistro Police
													</span>
												</span>
											</a>
								<div class="m-separator m-separator--dashed d-xl-none"></div>
							</div>
						</div>
					</div>
					<!--end: Search Form -->
					<!--begin: Datatable -->
					<div class="m_datatable" id="local_data"></div>
					<!--end: Datatable -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end::Body -->

<div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Konfirmoni
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						×
					</span>
				</button>
			</div>
			<div class="modal-body">
				<p>
					A jeni te sigurte per veprimin?
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn  m-btn m-btn--custom btn-secondary" data-dismiss="modal">
					Anulo
				</button>
				<button type="button" class="btn btn-danger m-btn m-btn--custom m-btn--icon">
					Fshije Policen
				</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="m_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Regjistro Police te re
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						×
					</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
					<div class="m-portlet__body">
						<div class="form-group m-form__group row">

							<div class="col-lg-6">
								<label>
									Emri dhe Mbiemri:
								</label>
								<div class="m-input-icon m-input-icon--right">
									<input type="text" class="form-control m-input" placeholder="Emri dhe mbiemri">
									<span class="m-input-icon__icon m-input-icon__icon--right">
										<span>
											<i class="la la-user"></i>
										</span>
									</span>
								</div>
							</div>
							<div class="col-lg-6">
								<label class="">
									Numri i Pasaportes:
								</label>
								<div class="m-input-icon m-input-icon--right">
									<input type="text" class="form-control m-input" placeholder="Emri dhe mbiemri">
									<span class="m-input-icon__icon m-input-icon__icon--right">
										<span>
											<i class="la la-file"></i>
										</span>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group m-form__group row">
							<div class="col-lg-6">
								<label class="">
									Datelindja:
								</label>
								<div class="m-input-icon m-input-icon--right">
									<input type="text" class="form-control m-input" value="20/03/1989">
									<span class="m-input-icon__icon m-input-icon__icon--right">
										<span>
											<i class="la la-calendar"></i>
										</span>
									</span>
								</div>
								<span class="m-form__help">
									18 vjec.
								</span>
							</div>
							<div class="col-lg-6">
								<label>
									Adresa:
								</label>
								<div class="m-input-icon m-input-icon--right">
									<input type="text" class="form-control m-input" placeholder="Shkruani adresen e klientit">
									<span class="m-input-icon__icon m-input-icon__icon--right">
										<span>
											<i class="la la-map-marker"></i>
										</span>
									</span>
								</div>
							</div>

						</div>


						<div class="form-group m-form__group row">
							<div class="col-lg-5">
								<label>
									Destinacioni:
								</label>
								<div class="m-input-icon m-input-icon--right">
									<select class="form-control m-input" name="option">
										<option value="">Gjermani</option>
										<option value="">Gjermani</option>
										<option value="">Gjermani</option>
									</select>
								</div>

							</div>
							<div class="col-lg-7">
								<label class="">
									Zona:
								</label>
								<div class="m-checkbox-list">
									<label class="m-checkbox m-checkbox--square m-checkbox--disabled">
										<input type="checkbox" disabled="disabled">
										A - Gjithe bota (perfshire SHA dhe Kanada)
										<span></span>
									</label>
									<label class="m-checkbox m-checkbox--square m-checkbox--disabled">
										<input type="checkbox" disabled="disabled">
										B - Gjithe bota (nuk perfshire SHA dhe Kanada)
										<span></span>
									</label>
									<label class="m-checkbox m-checkbox--square">
										<input type="checkbox" checked="checked">
										C - Europa
										<span></span>
									</label>
								</div>
							</div>

						</div>

						<div class="form-group m-form__group row">

							<div class="col-lg-5">
								<label class="">
									Data e Udhetimit:
								</label>
								<div class="m-input-icon m-input-icon--right">
									<input type="text" class="form-control m-input" value="20/03/1989">
									<span class="m-input-icon__icon m-input-icon__icon--right">
										<span>
											<i class="la la-calendar"></i>
										</span>
									</span>
								</div>
								<br>
								<div class="m-input-icon m-input-icon--right">
									<input type="text" disabled="disabled" class="form-control m-input" value="20/03/1989">
									<span class="m-input-icon__icon m-input-icon__icon--right">
										<span>
											<i class="la la-calendar"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="col-lg-2">
								<label class="">
									Brenda:
								</label>
								<div class="m-input-icon m-input-ion--right">
									<input class="form-control m-input" type="number" value="42" id="example-number-input">
								</div>
								<br>
								<div class="m-input-icon m-input-ion--right">
									<input class="form-control m-input" type="number" value="42" id="example-number-input">
								</div>
							</div>

							<div class="col-lg-5">
								<div class="row">
									<label class="">
										Data e Leshimit:
									</label>
									<div class="m-input-icon m-input-icon--right">
										<input type="text" class="form-control m-input" value="20/03/1989">
										<span class="m-input-icon__icon m-input-icon__icon--right">
											<span><i class="la la-calendar"></i></span>
										</span>
									</div>
								</div>
							</div>

						</div>



					<!-- start: rreshti parafundit  -->
					<div class="form-group m-form__group row">
						<div class="col-lg-4">
							<label class="m-option">
									<span class="m-option__control">
										<span class="m-radio m-radio--state-brand">
											<input type="radio" name="billing_delivery" value="">
											<span></span>
										</span>
									</span>
									<span class="m-option__label">
										<span class="m-option__head">
											<span class="m-option__title">
												Seksioni 1
											</span>
										</span>
										<span class="m-option__body">
											Shprenzimet mjeksore perfshire ndihmen urgjente deri:<br><br>
											<strong>Zona A</strong>: 10,000€<br>
											<strong>Zona B</strong>: 10,000€<br>
											<strong>Zona C</strong>: 30,000€<br>
										</span>
									</span>
								</label>
						</div>
						<div class="col-lg-4">
							<label class="m-option">
									<span class="m-option__control">
										<span class="m-radio m-radio--state-brand">
											<input type="radio" name="billing_delivery" value="">
											<span></span>
										</span>
									</span>
									<span class="m-option__label">
										<span class="m-option__head">
											<span class="m-option__title">
												Seksioni 2
											</span>
										</span>
										<span class="m-option__body">
											Shpenzime riatdhesimi deri ne:<br><br>
											<strong>Zona A</strong>: 10,000€<br>
											<strong>Zona B</strong>: 10,000€<br>
											<strong>Zona C</strong>: 30,000€<br>
										</span>
									</span>
								</label>
						</div>
						<div class="col-lg-4">
							<label class="m-option">
									<span class="m-option__control">
										<span class="m-radio m-radio--state-brand">
											<input type="radio" name="billing_delivery" value="">
											<span></span>
										</span>
									</span>
									<span class="m-option__label">
										<span class="m-option__head">
											<span class="m-option__title">
												Seksioni 3
											</span>
										</span>
										<span class="m-option__body">
											Aksidente personale deri ne:<br><br>
											<strong>Zona A</strong>: 10,000€<br>
											<strong>Zona B</strong>: 10,000€<br>
											<strong>Zona C</strong>: 30,000€<br>
										</span>
									</span>
								</label>
						</div>



					</div>
					<!-- finish: rreshti parafundit  -->

					<!-- start: rreshti fundit  -->
					<div class="form-group m-form__group row">
						<div class="col-lg-12">
							<div class="form-group m-form__group row">
								<label class="col-form-label col-lg-8 col-sm-12">
										Primi
									</label>
								<div class="col-lg-4 col-md-4 col-sm-12">
									<input class="form-control m-input" type="number" value="42" id="example-number-input">
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label class="col-form-label col-lg-8 col-sm-12">
										TVSH
									</label>
								<div class="col-lg-4 col-md-4 col-sm-12">
									<input class="form-control m-input" type="number" value="42" id="example-number-input"><br>
									<input class="form-control m-input" type="number" value="42" id="example-number-input" disabled="disabled">
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label class="col-form-label col-lg-8 col-sm-12">
										Total
									</label>
								<div class="col-lg-4 col-md-4 col-sm-12">
									<input class="form-control m-input" type="number" value="42" id="example-number-input">
								</div>
							</div>
						</div>
					</div>
					<!-- finish: rreshti fundit  -->


			</div>
		</div>
	</div>

</div>


<?php include('include/footer.php'); ?>
