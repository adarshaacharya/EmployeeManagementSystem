function validateEmployee() {
  const empName = document.getElementById("emp-name");
  if (empName.value == "") {
    empName.style.border = "solid 1px red";
    alert("Please provide employee name!");
    return false;
  }

  const phone = document.getElementById("phone");
  if (phone.value == "" || isNaN(phone.value) || phone.value.length != 10) {
    phone.style.border = "solid 1px red";
    alert("Please provide a phone in the format ##########.");
    return false;
  }

  const department = document.getElementById("department");
  if (department.value == "") {
    department.style.border = "solid 1px red";
    alert("Please provide employee department!");
    return false;
  }

  const salary = document.getElementById("salary");
  if (salary.value == "") {
    salary.style.border = "solid 1px red";
    alert("Please provide salary of employee!");
    return false;
  }

  const homeAddress = document.getElementById("home-address");
  if (homeAddress.value == "") {
    homeAddress.style.border = "solid 1px red";
    alert("Please provide employee address!");
    return false;
  }
}

const search = function() {
  const searchTerm = document.getElementById("search-term");

  if (searchTerm.value == "") {
    alert("Please provide valid emp id or name!");
    return false;
  }
};
