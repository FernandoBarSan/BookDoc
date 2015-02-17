$(document).ready(function () {



});

var link = "https://www.googleapis.com/books/v1/volumes?q=isbn:";
function getDataLib(link) {
    $.getJSON(link,
            function (data) {
                console.log(data.items[0].volumeInfo.title);
                  console.log(data);
                    $("#Titulo").val(data.items[0].volumeInfo.title);
                    $("#Autores").val(data.items[0].volumeInfo.authors);
                  $("#imagen").html('<img width="100px" height="100px" src="'+data.items[0].volumeInfo.imageLinks.thumbnail+'" class="img-thumbnail">');
             });
//            link="";
}
//$("#verificar_libro").click(function () {
//
//});
function verifica_isbn() {
//    var isbn="";
    isbn = $("#isbn").val();
    console.log($("#isbn").val());
    link = "https://www.googleapis.com/books/v1/volumes?q=isbn:";
    link += isbn;
    getDataLib(link);
    
}