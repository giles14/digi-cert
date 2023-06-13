<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Confirma tu identidad</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mb-4">Expedición de certíficado electrónico</h1>
            </div>
            <div class="col-12">
                <p>Muchas felicidades por este logro importante para tu vida y desarrollo profesional, compartimos tu emoción y queremos ayudarte a mostrar este logro al mundo. Antes de comenzar, debemos comprobar tu identidad y asegurar que estás de acuerdo en que tu certificado pueda ser accedido de ahora en adelante.</p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 mb-3">
                <h2>Confirma tu identidad</h2>
            </div>
            <div class="col-12 instrucciones">
                
               <p> La verificación de datos se lleva a cabo con el fin de autorizar que el certificado sea accesible públicamente mediante el uso de un enlace o código QR. Para que puedas compartirlo con empleadores o personas que consideras de interés. <!-- Esta medida garantiza que solo  aquellos que cumplan con los requisitos establecidos puedan acceder a la información contenida en el certificado. --></p>
            </div>
            <div class="col">
                <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombre Completo</label>
                        <input type="text" class="form-control is-valid" id="inputEmail4">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Matricula</label>
                        <input type="text" class="form-control is-valid text-right text-end" id="inputPassword4">
                        <button class="btn btn-primary float-right mt-3" type="submit">Validar</button>
                      </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 instrucciones">
                            <p>Como titular del certificado, tienes el derecho de revocar el permiso en cualquier momento. Esto significa que puedes retirar la autorización para que el certificado no pueda ser accedido públicamente. Al hacerlo, el enlace o código QR te solicitará tus datos personales nuevamente y la información del certificado ya no estará disponible para el público en general.</p>
                            <p> Esta flexibilidad te brinda el control total sobre la divulgación de tus datos personales o cualquier otra información confidencial contenida en el certificado. Si en algún momento consideras que es necesario restringir el acceso, puedes ejercer tu derecho visitando nuevamente esta URL.</p>
                            <p> Recuerda que la comprobación de datos y la posibilidad de revocar el permiso están diseñadas para proteger tu privacidad y garantizar que tengas el control sobre el uso de tu información.</p>
                        </div>   
                    </div>
                    <!-- <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                          <option selected>Choose...</option>
                          <option>...</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                      </div>
                    </div> -->
                    <div class="form-row">
                        <div class="form-group col-12 instrucciones">
                            <h2>Información que se compartirá</h2>
                        </div> 
                        <div class="form-group col-12 instrucciones">
                            <p>El certificado que se compartirá contiene información importante sobre tu logro académico. Incluye tu nombre completo, el nombre del diplomado que has completado, así como la fecha de inicio y finalización del mismo.</p> 
                            <p>Además, el certificado proporcionará una lista detallada de las materias cursadas durante el diplomado. Junto a cada materia, se indicará si ha sido acreditada o no. Esta información te brinda una visión clara de tu desempeño en cada materia y resalta tus logros en términos de acreditación.</p> 
                            <p>El objetivo de compartir estos detalles es validar tu participación en el diplomado y demostrar tus conocimientos y habilidades adquiridas. Recuerda que tienes el control sobre el acceso a esta información y puedes revocar el permiso en cualquier momento si así lo deseas.</p>
                        </div>   
                    </div>
                    <div class="form-group autorizacion">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Autorizo que pueda efectuarse la revisión del certíficado en línea usando el link y/o el QR personalizado <a href="">Ver ejemplo</a>.
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck2">
                        <label class="form-check-label" for="gridCheck2">
                          Autorizo que esté dispónible y sea accesible la tira de materias junto con la leyenda de acreditación y/o calificación de cada una de ellas <a href="">Ver ejemplo</a>.
                        </label>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                            <p style="font-size: 12px">Al dar click en el botón <b>generar certíficado</b> por cuestiones legales se guardará en la base de datos tu IP actual así como la fecha en que aceptaste los términos.</p>
                        </div>  
                    </div>
                    <button type="submit" class="btn btn-primary d-block mx-auto mb-5">Generar certificado</button>
                  </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                    <h1>Hello <?=$this->e(($name)) ?></h1>
            </div>
        </div>
    </div>
    <style>
        .col-12.instrucciones p {
            font-size: 13px;
        }
        .autorizacion {
            border-radius: 5px;
            border: 1px solid gray;
            padding: 15px;
            background: #efefef;
        }
    </style>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    
  </body>
</html>
