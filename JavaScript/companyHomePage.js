var nav_items = document.querySelectorAll(".navbar-item");

nav_items.forEach(function (item) {
  item.addEventListener("click", function () {
    nav_items.forEach(function (item) {
      item.classList.remove("selected");
    });

    this.classList.add("selected");
  });
});

var showForm = document.getElementById("showForm");
var form = document.querySelector(".job-create-form");

showForm.addEventListener("click", function () {
  form.style.display = "flex";
});

var closeForm = document.getElementById("closeForm");

closeForm.addEventListener("click", function () {
  form.style.display = "none";
});
