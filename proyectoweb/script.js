// Variable para almacenar el contenido original sin resaltar
var originalContent = "";

function searchWords() {
    var searchTerm = document.getElementById("searchInput").value.toLowerCase();
    var contentDiv = document.getElementById("content");

    // Si el contenido original no se ha guardado, hazlo ahora
    if (!originalContent) {
        originalContent = contentDiv.innerHTML;
    }

    // Restaurar el contenido original antes de aplicar las nuevas marcas
    contentDiv.innerHTML = originalContent;

    // Verificar si hay un término de búsqueda antes de aplicar nuevas marcas
    if (searchTerm.trim() !== "") {
        // Aplicar nuevas marcas solo si hay un término de búsqueda
        var contentText = contentDiv.innerHTML;
        var highlightedText = contentText.replace(new RegExp(searchTerm, "gi"), function(match) {
            return '<span class="highlight">' + match + '</span>';
        });
        contentDiv.innerHTML = highlightedText;
    }
}
