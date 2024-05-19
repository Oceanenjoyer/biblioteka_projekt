
function showDescription(bookId) {
    var descriptionDiv = document.getElementById("description-" + bookId);
    var showButton = document.getElementById("show-button-" + bookId);
    if (descriptionDiv.style.display === "none") {
        descriptionDiv.style.display = "block";
        showButton.value = "Schowaj"
    } else {
        showButton.value = "Pokaż"
        descriptionDiv.style.display = "none";
    }
}