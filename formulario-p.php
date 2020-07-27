<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seattle Una Ayuda Mas</title>
    <link rel="shortcut icon" href="./img/favicon-una-ayuda-mas.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Kaushan+Script&family=Pathway+Gothic+One&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./icomoon/icon.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/formulario.css">
    <link rel="stylesheet" href="./css/media.css">
</head>
<body>
    <header class="header">
        <a href="http://seattleuam.com/"><img src="./img/logo-seattle-una-ayuda-mas.png" alt="logo-seattle-una-ayuda-mas"></a>
        <h1>Refugio De Paso</h1>
    </header>
    <div class="container">
    <section class="main__index">
       <form action="./dat/recibir-p.php" method="post" class="formualrio-animales">
           <label for="name">Nombres: </label>
           <input type="text" name="nombre" required><br>
           <label for="name">Apellidos: </label>
           <input type="text"name="apellido" required><br>
           <label for="edad">Edad: </label>
           <input type="number"name="edad" required><br>
           <label for="email">E-mail:</label>
           <input type="email"name="correo" required><br>
           <label for="numero">Numero</label>
           <input type="text"name="numero" required><br>
          <select name="animal" class="seleccion">
              <option value="Perro-pequeño">Perro pequeño</option>
              <option value="Perro-mediano">Perro mediano</option>
              <option value="Perro-grande">Perro grande</option>
              <option value="Gato">Gato</option>
              <option value="Otro">Otro</option>
          </select>
           <button class="enviar"type="submit">Enviar</button>
       </form>
        
    </section>
    </div>
    <footer class="footer">
        <div class="footer_container-social">
            <a href="https://www.instagram.com/seattle_unaayudamas/" target="_blank"><i class="icon-instagram social"></i></a>
            <a href="https://www.facebook.com/seattle_unaayudamas-105910350923815/" target="_blank"><i class="icon-facebook social" ></i></a>
            <a href="https://api.whatsapp.com/send?phone=573197058854&text=hola,%20¿qué%20tal%20me%20regalas%20mas%20informacion?" target="_blank"><i class="icon-whatsapp social"></i></a> 
            <!-- <i class="icon-twitter social"></i>
            <i class="icon-telegram social"></i> -->
        </div>
            <p> Con Mucho ❤ de <a href="https://github.com/RingilDeveloper"> RingilDeveloper</a></p>
    </footer>
</body>
</html>