$(document).ready(function() {
    $('#submit-pin').on('click', function() {
        // Collect values from each pin input field
        const pin1 = $('input[name="pin1"]').val().trim();
        const pin2 = $('input[name="pin2"]').val().trim();
        const pin3 = $('input[name="pin3"]').val().trim();
        const pin4 = $('input[name="pin4"]').val().trim();
        
        // Combine values into a single PIN string
        const pin = pin1 + pin2 + pin3 + pin4;
        
        // Validate form fields
        if (pin.length !== 4) {
            $('#success-message').addClass('hidden');
            $('#error-message').removeClass('hidden');
            $('#error-text').text('Please fill out all pin fields.');
            return; // Stop form submission
        } else {
            $('#error-message').addClass('hidden');
            $('#success-message').removeClass('hidden');
        }

        // Create an object with form data
        const formData = {
            pin: pin
        };

        // Send AJAX request
        $.ajax({
            url: './controller/practitioner-validatePin.php', // Replace with your server endpoint
            type: 'POST',
            data: formData,
            dataType: 'json', // Expecting JSON response
            success: function(response) {
                console.log('Response:', response); // Log the entire response object
                if (typeof response === 'string') {
                    try {
                        response = JSON.parse(response); // Parse JSON response if it's a string
                    } catch (e) {
                        console.error('Failed to parse JSON:', e);
                    }
                }

                // Log response object or its properties
                console.log('Response Status:', response.status);
                console.log('Response Message:', response.message);

                // Handle success response
                $('input[name="pin1"]').val('');
                $('input[name="pin2"]').val('');
                $('input[name="pin3"]').val('');
                $('input[name="pin4"]').val('');
                
                $('#success-message').removeClass('hidden');
                $('#error-message').addClass('hidden');
              
                window.location.href = '/ecares-final/practitioner/facility'
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                $('#error-text').text('An error occurred while submitting the PIN.');
                $('#success-message').addClass('hidden');
                $('#error-message').removeClass('hidden');
            }
        });
    });
});
