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
                        <h4 style="font-family:'Poppins'" class="left-align white-text">Nuevo Libro</h4>
                    </div>
                    <h4 class=" white-text right-align "><i class="material-icons md-36">recent_actors</i></h4>
                </div>
            </div>
            <div class="row card-panel z-depth-2">
                <br>
                <form method="post" class="contact-form" id="newBook">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">library_books</i>
                        <input type="text" name="titulo" class="validate" id="titulo" required="" aria-required="true">
                        <label for="titulo">Título</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">person_pin</i>
                        <label for="autor">Autor</label>
                        <input type="text" name="autor" id="autor" required="" aria-required="true">
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">mode_edit</i>
                            <label for="edicion">Edición</label>
                            <input type="text" name="edicion" id="edicion" required="" aria-required="true">
                        </div>
                        <div class="input-field col s4">
                            <i class="material-icons prefix">perm_media</i>
                            <label for="editorial">Editorial</label>
                            <input type="text" name="editorial" id="editorial" required="" aria-required="true">
                        </div>
                        <div class="input-field col s4">
                            <i class="material-icons prefix">today</i>
                            <label for="año">Año</label>
                            <input type="text" name="año" id="año" required="" aria-required="true">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">offline_pin</i>
                            <label for="isbn">ISBN</label>
                            <input type="text" name="isbn" id="isbn" required="" aria-required="true">
                        </div>
                        <div class="input-field col s4">
                            <i class="material-icons prefix">translate</i>
                            <label for="idioma">Idioma</label>
                            <input type="text" name="idioma" id="idioma" required="" aria-required="true">
                        </div>
                        <div class="input-field col s4">
                            <i class="material-icons prefix">turned_in</i>
                            <label for="pags">Páginas</label>
                            <input type="text" name="pags" id="pags" required="" aria-required="true">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">message</i>
                            <label for="desc">Descripción</label>
                            <input type="text" name="desc" id="desc" required="" aria-required="true">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">code</i>
                            <label for="codigo">Código</label>
                            <input type="text" name="codigo" id="codigo" required="" aria-required="true">
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">info</i>
                            <label for="idioma">ID</label>
                            <input type="text" name="id" id="id" required="" aria-required="true">
                        </div>

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
                <div id="info"></div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
        <script src="nLibro.js"></script>
    </body>

    </html>