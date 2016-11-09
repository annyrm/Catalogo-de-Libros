<?php include ('validaSesion.php');?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <title>Formulario</title>

        <link href="https://fonts.googleapis.com/css?family=Hind+Madurai|Istok+Web|Lato|PT+Sans+Narrow|Quicksand|Poppins" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

    </head>

    <body>
        <div class="main container">
            <div class="row">
                <div class="card-panel z-depth-2 lime darken-3">
                    <div class="col l9">
                        <h4 style="font-family:'Poppins'" class="left-align white-text">Nuevo Usuario</h4>
                    </div>
                    <h4 class=" white-text right-align "><i class="material-icons md-36">recent_actors</i></h4>
                </div>
            </div>
            <div class="row card-panel z-depth-2">
                <br>
                <form method="post" class="contact-form" id="newUser">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">supervisor_account</i>
                        <input type="text" name="usuario" class="validate" id="usuario" required="" aria-required="true">
                        <label for="usuario">Usuario</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock_outline</i>
                        <label for="pass">Password</label>
                        <input type="password" name="pass" id="pass" required="" aria-required="true">
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <label for="pass2">Confirma Password</label>
                        <input type="password" name="pass2" id="cpass" required="" aria-required="true">
                    </div>
                    <div class="row">
                        <div class="col s6">
                            <button id="enviar" class="waves-effect waves-light btn btn-contacto orange darken-3" type="submit"><i class="material-icons left">send</i>Enviar</a>
                        </div>
                        <div class="col s6">
                            <a href="sitio.php" class="btn btn-primary orange darken-3"><i class="material-icons left">replay</i>Atrás</a>
                        </div>
                    </div>

                </form>
                <div id=" info "></div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-2.1.1.min.js "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js "></script>
        <script src="rpass.js "></script>
    </body>

    </html>