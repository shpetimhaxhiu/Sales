<?php
// Nese nuk ka ID redirekto
if(!isset($_GET["id"])) {

  header("Location:/Sales/Lista.php");
}
else {
  // Importo klasat qe nevojiten
  require '../include/Classes/Database.php';

  // Konekcioni me databaze
  $db = new Database();
  $db = $db->lidhja();

  // nese nuk behet konekcioni me databaze
  if(!$db) {

    die("Konekcioni me databaze nuk u be");

  }

  $sql = "select * from Klientat where id_klientit =" . $_GET["id"];
  $rezultati = $db->query($sql);


  // Nese ID nuk ekziston redirekto
  if ($rezultati->num_rows <= 0) {

    header("Location:/Sales/Lista.php");

  }
  else {

    include '../include/header.php';

    while($klienti = $rezultati->fetch_assoc()) {
      echo "id: " . $klienti["id_klientit"]. " - Name: " . $klienti["emri"]. " " . $klienti["mbiemri"]. "<br>";
    }
  }
?>
<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">
	<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<!-- BEGIN: Subheader -->
		<div class="m-subheader ">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="m-subheader__title m-subheader__title--separator">
									Regjistrimi i Klienteve
								</h3>
					<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
						<li class="m-nav__item m-nav__item--home">
							<a href="/Sales/Lista.php" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
						</li>
						<li class="m-nav__separator">
							-
						</li>
						<li class="m-nav__item">
							<a href="/Sales/Klientat/shto.php" class="m-nav__link">
									<span class="m-nav__link-text">
										Regjistrimi i Klienteve
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
				<div class="m-portlet__body">

          <!-- body -->
          <form class="m-form m-form--fit m-form--label-align-right" method="post" action="ruaj.php">
						<div class="m-portlet__body">
            <div class="form-group m-form__group row">
							<label for="emri" class="col-2 col-form-label">
								Emri
							</label>
							<div class="col-10">
								<input class="form-control m-input" type="text" value="Filon" id="emri" name="emri">
							</div>
						</div>

            <div class="form-group m-form__group row">
              <label for="mbiemri" class="col-2 col-form-label">
                Mbiemri
              </label>
              <div class="col-10">
                <input class="form-control m-input" type="text" value="Fisteku" id="mbiemri" name="mbiemri">
              </div>
            </div>

            <div class="form-group m-form__group row">
							<label for="data_lindjes" class="col-2 col-form-label">
								Data e Lindjes
							</label>
							<div class="col-10">
								<input class="form-control m-input" type="date" value="2011-08-19" id="data_lindjes" name="data_lindjes">
							</div>
						</div>

            <div class="form-group m-form__group row">
              <label for="nr_telefonit" class="col-2 col-form-label">
                Nr. Telefonit
              </label>
              <div class="col-10">
                <input class="form-control m-input" type="tel" value="1-(555)-555-5555" id="nr_telefonit" name="nr_telefonit">
              </div>
            </div>

            <div class="form-group m-form__group row">
              <label for="nr_telefonit_2" class="col-2 col-form-label">
                Nr. Telefonit 2
              </label>
              <div class="col-10">
                <input class="form-control m-input" type="tel" value="1-(555)-555-5555" id="nr_telefonit_2" name="nr_telefonit_2">
              </div>
            </div>

						<div class="form-group m-form__group row">
							<label for="example-email-input" class="col-2 col-form-label">
								Email
							</label>
							<div class="col-10">
								<input class="form-control m-input" type="email" value="bootstrap@example.com" id="example-email-input">
							</div>
						</div>

            <div class="form-group m-form__group row">
              <label for="adresa" class="col-2 col-form-label">
                Adresa
              </label>
              <div class="col-10">
                <input class="form-control m-input" type="text" value="Nr. XYZ, Pa numer" id="adresa" name="adresa">
              </div>
            </div>

            <div class="form-group m-form__group row">
              <label for="qyteti" class="col-2 col-form-label">
                Qyteti
              </label>
              <div class="col-10">
                <input class="form-control m-input" type="text" value="Prishtine" id="qyteti" name="qyteti">
              </div>
            </div>

            <div class="form-group m-form__group row">
              <label for="shteti" class="col-2 col-form-label">
                Shteti
              </label>
              <div class="col-10">
                <input class="form-control m-input" type="text" value="Kosove" id="shteti" name="shteti">
              </div>
            </div>



            <div class="form-group m-form__group row">
              <label for="zip_kodi" class="col-2 col-form-label">
                Zip Kodi
              </label>
              <div class="col-10">
                <input class="form-control m-input" type="text" value="10000" id="zip_kodi" name="zip_kodi">
              </div>
            </div>

            <div class="form-group m-form__group row">
              <label for="nr_leternjoftimit" class="col-2 col-form-label">
                Nr. Leternjoftimit
              </label>
              <div class="col-10">
                <input class="form-control m-input" type="text" value="1000000000000" id="nr_leternjoftimit" name="nr_leternjoftimit">
              </div>
            </div>

            <div class="form-group m-form__group row">
              <label for="nr_pasaportes" class="col-2 col-form-label">
                Nr. Pasaportes
              </label>
              <div class="col-10">
                <input class="form-control m-input" type="text" value="1000000000000" id="nr_pasaportes" name="nr_pasaportes">
              </div>
            </div>

            <div class="form-group m-form__group row">
              <label for="nr_patent_shoferit" class="col-2 col-form-label">
                Nr. Patent Shoferit
              </label>
              <div class="col-10">
                <input class="form-control m-input" type="text" value="1000000000000" id="nr_patent_shoferit" name="nr_patent_shoferit">
              </div>
            </div>

					</div>
					<div class="m-portlet__foot m-portlet__foot--fit text-right">
						<div class="m-form__actions">
							<div class="row">
								<div class="col-2"></div>
								<div class="col-10">
									<button type="submit" class="btn btn-success" name="submit" value="ruaj">
										Ruaj
									</button>
									<button type="reset" class="btn btn-secondary">
										Anulo
									</button>
								</div>
							</div>
						</div>
					</div>
				</form>
          <!-- end body  -->


				</div>
			</div>
		</div>
	</div>
</div>
<!-- end::Body -->


<?php
  include '../include/footer.php';
} 
?>
