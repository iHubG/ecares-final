$(document).ready(function() {
    $('#emailForm').on('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Collect form values
        const recipient = $('input[name="recipient"]').val().trim();
        const recipientName = $('input[name="recipient-name"]').val().trim();
        const subject = $('input[name="subject"]').val().trim();
        const message = $('textarea[name="message"]').val().trim();

        // Validate form fields
        if (!recipient || !recipientName || !subject || !message) {
            $('#success-message').addClass('hidden');
            $('#error-message').removeClass('hidden');
            $('#error-text').text('Please fill out all required fields.');
            return; // Stop form submission
        }

        // Create FormData object
        const formData = {
            recipient: recipient,
            recipientName: recipientName,
            subject: subject,
            message: message
        };

        //console.log('Form Data:', formData); // Log form data for debugging

        // Send AJAX request
        $.ajax({
            url: '../controller/practitioner-sendEmail.php', // Replace with the path to your PHP script
            type: 'POST',
            data: formData,
            dataType: 'text', // Expect raw text response
            success: function(response) {
                console.log('Response:', response); // Log the raw response

                try {
                    // Parse the response text as JSON
                    const jsonResponse = JSON.parse(response);
                    
                    if (jsonResponse && typeof jsonResponse === 'object') {
                        if (jsonResponse.success) {
                            $('#success-message').removeClass('hidden');
                            $('#error-message').addClass('hidden');
                            $('#emailForm')[0].reset(); // Reset form fields
                            setTimeout(function() {
                                $('#success-message').addClass('hidden');
                            }, 3000); // Hide success message after 2 seconds
                        } else {
                            $('#error-text').text(jsonResponse.message);
                            $('#success-message').addClass('hidden');
                            $('#error-message').removeClass('hidden');
                        }
                    } else {
                        console.error('Unexpected response format:', jsonResponse);
                        $('#error-text').text('An unexpected error occurred.');
                        $('#success-message').addClass('hidden');
                        $('#error-message').removeClass('hidden');
                    }
                } catch (e) {
                    console.error('JSON parse error:', e);
                    $('#error-text').text('Failed to parse response.');
                    $('#success-message').addClass('hidden');
                    $('#error-message').removeClass('hidden');
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
                $('#error-text').text('An error occurred while sending the email.');
                $('#success-message').addClass('hidden');
                $('#error-message').removeClass('hidden');
            }
        });
    });
});
