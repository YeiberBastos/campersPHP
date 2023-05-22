<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Candidatos</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Formulario de Candidatos</h1>
    
    <form method="post" action="procesar_formulario.php">
        <label for="nombre">Nombre y Apellidos:</label>
        <input type="text" name="nombre" id="nombre" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        
        <label for="telefono">Teléfono de Contacto:</label>
        <input type="tel" name="telefono" id="telefono" required>
        
        <label for="nivel_estudio">Nivel de Estudio:</label>
        <select name="nivel_estudio" id="nivel_estudio">
            <option value="Bachiller">Bachiller</option>
            <option value="Técnico">Técnico</option>
            <option value="Tecnólogo">Tecnólogo</option>
            <option value="Profesional">Profesional</option>
            <option value="Estudiante">Estudiante Universitario</option>
        </select>
        
        <label for="conocimientos">Conocimientos Previos en Programación:</label>
        <select name="conocimientos[]" id="conocimientos" multiple required>
            <option value="Python">Python</option>
            <option value="HTML">HTML</option>
            <option value="CSS">CSS</option>
            <option value="JavaScript">JavaScript</option>
            <option value="TypeScript">TypeScript</option>
            <option value="PHP">PHP</option>
            <option value="Node.js">Node.js</option>
        </select>
        
        <label for="nivel_ingles">Nivel de Inglés:</label>
        <select name="nivel_ingles" id="nivel_ingles">
            <option value="Basico">Básico</option>
            <option value="Intermedio">Intermedio</option>
            <option value="Avanzado">Avanzado</option>
        </select>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>



<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <title>CAMPERS</title>
</head>

<body>
  <div class="section" method="post" action="bienvenido.php">
    <form class="contenido row g-3 needs-validation" novalidate>
      <div class="col-md-12">
        <label for="validationCustom01" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="validationCustom01" name="Nombre" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-12">
        <label for="validationCustom02" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="validationCustom02" name="Apellido" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-12">
        <label for="validationCustom01" class="form-label">Numero</label>
        <input type="number" class="form-control" id="validationCustom01" name="Numero" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-12">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" name="email" required>
      </div>
      <div class="col-md-12">
        <label for="validationCustom04" class="form-label">Nivel de estudio</label>
        <select class="form-select" id="validationCustom04" name="nivel" required>
          <option>Bachiller</option>
          <option>Tecnico</option>
          <option>Tecnologo</option>
          <option>Profecional</option>
          <option>Estudiante</option>
          <option>Universitario</option>


        </select>

      </div>
      <div class="form-check">
         <legend class="col-form-label">Conocimientos previos</legend>
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
        HTML
        </label>
      </div>
      <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
        JS
        </label>
      </div>
      <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
        CSS
        </label>
      </div>
      <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
        PHP
        </label>
      </div>
      <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
        nodejs
        </label>
      </div>
      <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
        C#
        </label>
      </div>
      <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
        TypeScript
        </label>
      </div>

     
      <div class="col-md-3">
        <label for="validationCustom04" class="form-label">Nivel de Ingles</label>
        <select class="form-select" id="validationCustom04" name="" required>
          <option>Basico</option>
          <option>Intermedio</option>
          <option>Avanzado</option>



        </select>
        <div class="col-12">
          <button class="btn btn-primary" type="submit" name="aceptar" value="aceptar">Submit form</button>
        </div>
    </form>
  </div>
</body>

</html> -->