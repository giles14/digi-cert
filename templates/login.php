<?php $this->layout('base') ?>
<!-- Section: Design Block -->
<section class="d-flex justify-content-center align-items-center" style="height: 100vh;">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            certifirma <br />
            <span class="text-primary">revisa tu acreditación</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            Nuestra plataforma te permite confirmar la validez de las firmas electrónicas.
            Con ValidSign, podrás verificar la autenticidad de una certificado electrónico, 
            emitido por IEXE Universidad.
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
            
                <img class="img-fluid mb-4 mx-auto d-block" width="200px" src="<?=$this->asset('./public/assets/img/azul-logo_iexe.png')?>" alt="">
              <form action="verifica" method="post">
                <!-- 2 column grid layout with text inputs for the first and last names -->

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input name="codigo" type="text" id="form3Example3" class="form-control" placeholder="XXXX-XXXX-XXXX-XXXX" />
                  <label class="form-label" for="form3Example3">Código de certifirma</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block text-end float-end mb-4 d-block ">
                  Verificar
                </button>

              </form>
              <p class="disclaimer">El código se compone de 16 caracteres y lo encontrarás al final del documento emitido por IEXE Universidad.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->

<style>
    body
    {
        background-color: #f5f5f5;
    }
    p.disclaimer {
      color: gray;
      font-size: small;
      font-weight: 300;
    }
</style>