var nav_items = document.querySelectorAll(".navbar-item");

nav_items.forEach(function (item) {
  item.addEventListener("click", function () {
    nav_items.forEach(function (item) {
      item.classList.remove("selected");
    });

    this.classList.add("selected");
  });
});
