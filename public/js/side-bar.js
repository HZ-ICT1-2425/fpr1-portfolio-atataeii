// How To Show
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close It If User Click Out Of This
window.onclick = function (event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function functionDelete() {
    if(!confirm("Are you sure want to delete this?"))
        event.preventDefault();
}

function functionSave(){
    if(!confirm("Are you sure you want to save it?"))
        event.preventDefault();
}
