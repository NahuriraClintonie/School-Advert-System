// Form validation function
function validateForm() {
    var name = document.forms["contactForm"]["name"].value;
    var email = document.forms["contactForm"]["email"].value;
    var message = document.forms["contactForm"]["message"].value;
  
    // Validate name field
    if (name == "") {
      alert("Name must be filled out");
      return false;
    }
  
    // Validate email field
    if (email == "") {
      alert("Email must be filled out");
      return false;
    }
  
    // Validate message field
    if (message == "") {
      alert("Message must be filled out");
      return false;
    }
  
    // If all fields are filled, submit the form
    alert("Form submitted successfully!");
    return true;
  }
  
  