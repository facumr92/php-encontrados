
<?php

include("header.php");
?>

<div class="bienvenido">
    <div class="flex-shrink-0">
        <img src="#" alt="" width="300" />
    </div>
    <div class="flex-grow-1 ms-3">
        <h3 class="mt-0">Bienvenido al sitio </h3>
        <p>
            Puedes buscar y subir lo que hayas encontrado o perdido
        </p>

        <hr>
    </div>
</div>


<section>
<h5 class="mt-0">Ultimos objetos encontrados </h5>
</section>

<div class="contenedor-objetos">

<div class="elemento">e1</div>
<div class="elemento">e2</div>
<div class="elemento">e3</div>
<div class="elemento">e4</div>
<div class="elemento">e5</div>
<div class="elemento">e6</div>
<div class="elemento">e7</div>
<div class="elemento">e8</div>
<div class="elemento">e9</div>
<div class="elemento">e10</div>

</div>



<!-- Ventana modal -->
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logueate en encontrados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-login">


        <!-- Formulario -->
        <form method="post" action="index-login.php" id="form-login">
        <div class="modal-body"  >
            <div class="form-group">
            <label for="nombre">Nombre de usuario:</label>
            <input type="text" class="form-control" id="nombre-usr" name="nombre-usr" placeholder="Ingrese su nombre">
            </div>
            <div class="form-group">
            <label for="pass-login">Contraseña:</label>
            <input type="password" class="form-control" id="pass-login" name="pass-login" placeholder="Escribe tu contraseña">
            </div>
        </div>
        <a href="create-account.php" class="link-crear-cuenta" > No tienes cuenta? Registrate aquí</a>
        <div class="modal-footer">
    
            <button type="submit" class="btn btn-primary" id= "btn-login">Enviar</button>
            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>


        </div>
</form>

    

    </div>
  </div>
</div>



<?php include("footer.php");

?> 
