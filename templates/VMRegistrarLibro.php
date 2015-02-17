<!-- La ventana modal de Registrar Libro-->
<div id="registrar_libro" class="modal hide fade in" style="display: none; ">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3>Registrar Libro</h3>
    </div>
    <div class="modal-body">
        <form class="form-inline">
            <label>Ingrese el ISBN del libro: </label>
            <input id="isbn" class="form-control" placeholder="Ingresa isbn sin guiones"><a class="btn-mini" id="verificar_libro" onClick="verifica_isbn()">Verificar</a> 
            <label>Titulo: </label>
            <input class="form-control" placeholder="Titulo" id="Titulo">
            <label>Autores: </label>
            <input class="form-control" placeholder="Autores"id="Autores">
            <label>Imagen: </label>
            <div id="imagen"></div> 
        </form> 
    </div>
    <div class="modal-footer">
        <a href="index.html" class="btn btn-success">Guardar</a>
        <a href="#" class="btn" data-dismiss="modal" onclick="window.location.reload()">Cerrar</a>
    </div>
</div>
