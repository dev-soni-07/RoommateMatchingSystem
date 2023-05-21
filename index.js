// Add interactivity and validation to the form
document.querySelector("form").addEventListener("submit", function(event) {
    event.preventDefault();
    var name = document.querySelector("#name").value;
    var age = document.querySelector("#age").value;
    var gender = document.querySelector("#gender").value;
    var email = document.querySelector("#email").value;
    if (name === "" || age === "" || gender === "" || email === "") {
      alert("Please fill out all fields.");
    } else {
      alert("Profile submitted successfully!");
    }
  });
  