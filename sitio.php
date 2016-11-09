<?php include ('validaSesion.php');?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Página en Sesión</title>

        <link href="https://fonts.googleapis.com/css?family=Hind+Madurai|Istok+Web|Lato|PT+Sans+Narrow|Quicksand|Poppins" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

    </head>

    <body>
        <div class="main container">
            <div class="row">
                <div class="card-panel z-depth-2 lime darken-3">
                    <div class="col l9">
                        <h4 style="font-family:'Poppins'" class="left-align white-text">Hola estás en sesión</h4>
                    </div>
                    <h4 class=" white-text right-align "><i class="material-icons md-36">verified_user</i></h4>
                </div>
            </div>
            <div class="row card-panel z-depth-2">
                <div class="col s12">
                    <?php echo "<i class='material-icons md-36'>perm_identity</i> ".$_SESSION['s_usuario'];?>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col s4">
                        <a href="newUser.php" class="btn btn-primary orange darken-3"><i class="material-icons left">contacts</i>Nuevo Usuario</a>
                        <!--<button action="capturaU.php" class="waves-effect waves-light btn btn-contacto">Nuevo Usuario</a>-->
                    </div>
                    <div class="col s4">
                        <a href="newBook.php" class="btn btn-primary orange darken-3"><i class="material-icons left">library_add</i>Nuevo Libro</a>
                        <!--<button action="cierraS.php" class="waves-effect waves-light btn btn-contacto">Cerrar Sesión</a>-->
                    </div>
                    <div class="col s4">
                        <a href="cierraS.php" class="btn btn-primary orange darken-3"><i class="material-icons left">lock</i>Cerrar Sesión</a>
                        <!--<button action="cierraS.php" class="waves-effect waves-light btn btn-contacto">Cerrar Sesión</a>-->
                    </div>
                </div>

                <!--<a href="capturaU.php" class="btn btn-primary">Nuevo Usuario</a>
                    <a href="cierraS.php" class="btn btn-primary">Cerrar Sesión</a>-->

            </div>
        </div>
    </body>

    </html>