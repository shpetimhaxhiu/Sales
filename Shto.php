
<?php
include 'include/header.php'; ?>
<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">
	<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<!-- BEGIN: Subheader -->
		<div class="m-subheader ">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="m-subheader__title m-subheader__title--separator">
									Regjistrimi i Polices
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
<!-- end::Body -->
<?php
include 'include/footer.php';
 ?>
