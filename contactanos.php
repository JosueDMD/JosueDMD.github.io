<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Css/co2.css">
    <link rel="icon" href="img/logo.png">
    <title>Contáctanos</title>
</head>
<body>
    <header>
        <img id="img" src="img/logo.png" alt="Logo CBTis #162" class="logo-img">
        <input type="checkbox" id="check">
        <label for="check" class="mostrar-menu">&#8801</label>

        <nav class="menu">
            <a href="index.php">Inicio</a>
            <a href="CAED.PHP">CAED</a>
            <a href="">Examen</a>
            <a href="">Contáctanos</a>
            <a href=""><i class="fa-solid fa-user"></i></a>
            <label for="check" class="esconder-menu">&#215</label>
        </nav>
    </header>
    <section id="contactanos">
        <div class="container-form">
            <div class="info-form">
            <h2>CONTÁCTANOS</h2>
            <P>
                Su opinión y comentarios son importante para nosotros, pues nos permite conocer la percepción 
                que se tiene de nuestros servicios, adecuándolos con fines de mejorar la calidad de la educación.
            </P>
            <h3><i class="fa-solid fa-location-dot"></i> Crescencio Morales Pte 144,Col. Las Palmas</h3>
            <h3><i class="fa-solid fa-phone"></i> Teléfono: 715 156 7836</h3>
            <h3><i class="fa-solid fa-envelope"></i> Correo Electrónico: <a href="mailto:soporte_tecnico@cbtis162.edu.mx">soporte_tecnico@cbtis162.edu.mx</a></h3>
        </div>
        <form action="#" autocomplete="off">
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="campo" required>
            <input type="email" id="correo" name="correo" placeholder="Correo Electronico" class="campo" required>
            <textarea name="mensaje" id="mensaje" placeholder="Escriba su mensaje" required></textarea>
            <input id="enviar" type="submit" name="enviar" value="Enviar" class="btn-enviar">
        </form>
        </div>
    </section>
    <section id="contacto">
        <div>
            <h2>CBTIS 162</h2>
            <p>
                Desde 1982, sirviendo a la sociedad zitacuarense y al país, 
                formando éticamente a técnicos profesionistas a través de recurso 
                humano conciente de las necesidades actuales en la industria privada 
                y del servicio público.
            </p>
            <a href="https://www.facebook.com/cbtis162" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://twitter.com/cbtis162" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="mailto:contacto@cbtis162.edu.mx"><i class="fa-solid fa-envelope"></i></a>
        </div>
        <div>
            <h2>ENLACES</h2>
            <a href="https://www.gob.mx/sep" class="link" target="_blank">SEP</a>
            <a href="https://uemstis.sep.gob.mx/" class="link" target="_blank">UEMSTIS</a>
            <a href="http://cosfac.sems.gob.mx/web/" class="link" target="_blank">COSDAC</a>

        </div>
        <div>
            <h2>CONTÁCTANOS</h2>
            <h3><i class="fa-solid fa-location-dot"></i> Crescencio Morales Pte 144,Col. Las Palmas</h3>
            <h3><i class="fa-solid fa-phone"></i> Teléfono: 715 156 7836</h3>
            <h3><i class="fa-solid fa-envelope"></i> Correo Electrónico: <a href="mailto:contacto@cbtis162.edu.mx">contacto@cbtis162.edu.mx</a></h3>
        </div>
    </section>
    <script type="text/javascript" src="Js/menut.js"></script>

    <script>
        const btnEnvio = document.getElementById('enviar');
        btnEnvio.addEventListener('click', function(e){
            e.preventDefault();
            const nombre = document.getElementById('nombre').value;
            const correo = document.getElementById('correo').value;
            const mensaje = document.getElementById('mensaje').value;
            window.location.href=`mailto:soporte_tecnico@cbtis162.edu.mx?subject=Envio Desde Formulario&body=Nombre%3A%20${nombre}%0AEmail%3A%20${correo}%0AMensaje%3A%20${mensaje}`;
        });
    </script>
</body>
</html>