<?php
//include_once "application/controllers/admin/banners/listar_banners.php";
?>
<!doctype html>
<html lang="es">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url();?>plantilla/css/estilos.css">





  
  
</head>
<body>

<div class="container">
  <div class="alert alert-primary" role="alert">
  Los campos con (*) Son obligatorios
</div>
 <form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre completo *</label>
    <div class="col-sm-10">
      <input type="input" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Correo electronico *</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputPassword3">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Sexo *</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            Masculino
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
           Femenino
          </label>
        </div>
        
      </div>
    </div>
  </fieldset>

<div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Area</label>
    <div class="col-sm-10">
     <select name="" class="form-control" id="">
       <option value="1">Administración</option>
     </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Descripción *</label>
    <div class="col-sm-10">
   <textarea name="" id="" class="form-control"  rows="3" placeholder="Descripción de la experiencia del empleado"></textarea>
    </div>
  </div>

 <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0" style="color:white">Boletin</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
         Deseas recibir boletin informativo
          </label>
        </div>
        

        
        
      </div>
    </div>
  </fieldset>

   <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Roles *</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
          Profesional de proyectos desarrollador
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
           Gerente estrategico
          </label>
        </div>

         <div class="form-check">
          <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
         Auxiliar administrativo
          </label>
        </div>
        
      </div>
    </div>
  </fieldset>




   
 

 
</form>
</div>

</body>
</html>