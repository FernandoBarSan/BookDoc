<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Book Doc | Catalogo de Libros</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <link rel="stylesheet" type="text/css" href="css/tabla.css" />
        <link href="css/bootstrap.css" rel="stylesheet"> 
        <script src="js/jquery-1.7.min.js"></script>
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap-modal.js"></script>
        <script src="js/ISBN.js"></script>
    </head>
    <body>
        <?php include 'templates/header.php'; ?>
        <ul class="nav nav-pills">
            <li><img src="img/UAEM.png" class="logo-uaemex"></li>
            <li class="active"><a href="index.php">Inicio</a></li>
            <li><a data-toggle="modal" href="#registrar_libro" class="">Registrar Libro</a></li>
            <li><a data-toggle="modal" href="#acerca_de" class="">Acerca de ...</a></li>
            <li><img src="img/FIUAEM.png" class="logo-fiuaemex"></li>
        </ul>
        <div>
            <input id="s" type="text" />
            <input type="submit" value="Buscar" id="submitButton" />
        </div> 
        <div class="datagrid">
            <table>
                <thead><tr><th>Caratula</th><th>Titulo</th><th>Autores</th><th>ISBN</th><th>Foto</th><th>Nombre del Doctor</th><th>Ext.</th><th>e-mail</th><th>Area</th></tr></thead>
                <tfoot><tr><td colspan="9"><div id="no-paging">&nbsp;</div></tr></tfoot>
                <tbody><tr><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td></tr>
                    <tr class="alt"><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td></tr>
                    <tr><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td></tr>
                    <tr class="alt"><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td></tr>
                    <tr><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td></tr>
                </tbody>
            </table>
        </div>
    </body>

</html>
