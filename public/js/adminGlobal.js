// DataTables
$(document).ready(function () {
    $("#myTable").DataTable();
});

// Story Local Storage
function storyLocalStorage() {
    var selectedType = document.getElementById("storyType").value;
    localStorage.setItem("storyType", selectedType);
}

// Question Local Storage
function questionLocalStorage() {
    var selectedType = document.getElementById("questionType").value;
    localStorage.setItem("questionType", selectedType);
}
