document.getElementById('form-id').addEventListener('submit', function(event) {
    var form = event.target;

    // Check if the form is valid
    if (!form.checkValidity()) {
        event.preventDefault(); // Prevent form submission
        alert("Please fill out all required fields correctly.");
    } else {
        alert("Form submitted successfully!");
    }
});

// Form validation handling
document.getElementById('form-id').addEventListener('submit', function(event) {
    var form = event.target;

    // Check if the form is valid
    if (!form.checkValidity()) {
        event.preventDefault(); // Prevent form submission
        alert("Please fill out all required fields correctly.");
    } else {
        alert("Form submitted successfully!");
    }
});