<html>
    <header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    </header>  
    <body> 
        <nav class="navbar navbar-dark bg-dark">
            <div style="text-align:center">
                <a class="navbar-brand" href="index.html">Mi primer tutorial de PHP</a>
            </div>
        </nav>
        <div class="container">
            <?php 
                $segundo_numero = $_POST['segundo_numero'];
                $primer_numero = $_POST['primer_numero'];
                $respuesta_correcta =sqrt(pow($primer_numero, 2)+pow($segundo_numero, 2)) ;
                echo '<div class="alert alert-primary" role="alert">';
                
                echo '</div>';
            

            ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Teorema de pitágoras</h5>
                    <p class="card-text">La hipotenusa es: <strong><? echo $respuesta_correcta; ?></strong></p>
                    <a href="pitagoras.php" class="btn btn-primary">Volver</a>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <div style="text-align:center"  style="padding:20px;">
         hecho por Matias y Luciano
        </div>
    </footer>
</html>