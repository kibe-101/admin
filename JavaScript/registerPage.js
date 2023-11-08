var toEmployee = document.getElementById("toEmployee");
var toRecruiter = document.getElementById("toRecruiter");

var employeeForm = document.getElementsByClassName("employee")[0];
var recruiterForm = document.getElementsByClassName("recruiter")[0];

toEmployee.addEventListener("click", function () {
  console.log("You are looking to register as an employee");
  employeeForm.style.display = "flex";
  recruiterForm.style.display = "none";
});

toRecruiter.addEventListener("click", function () {
  console.log("You are looking to register as a recruiter");
  employeeForm.style.display = "none";
  recruiterForm.style.display = "flex";
});
