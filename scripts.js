$(document).ready(function() {
    // Form submission handling
    $("#registrationForm").submit(function(event) {
        event.preventDefault();  // Prevent form submission
        
        // Collecting form data
        var formData = $(this).serialize();
        
        // Ajax request to send form data to PHP for processing
        $.ajax({
            url: "submit.php",
            type: "POST",
            data: formData,
            success: function(response) {
                $("#output").html(response);  // Display the result in the output div
            },
            error: function() {
                alert("There was an error with the submission!");
            }
        });
    });
});
