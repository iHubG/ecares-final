$(document).ready(function() {
    // Handle adding links
    $('#add-link-button').on('click', function() {
      const linkInput = $('#link-input');
      const linksList = $('#links-list');
      const linkValue = linkInput.val().trim();
  
      // Validate and add link
      if (linkValue.match(/(https?:\/\/[^\s]+)/g)) {
        const listItem = $('<li>').addClass('text-blue-600 underline');
        listItem.html(`<a href="${linkValue}" target="_blank">${linkValue}</a>`);
        linksList.append(listItem);
        linkInput.val(''); // Clear input field
      } else {
        alert('Please enter a valid URL.');
      }
    });
  
    // Handle form submission with AJAX
    $('#post-button').on('click', function() {
      const postContent = $('#post-textarea').val().trim();
      const files = $('#file-input')[0].files;
      const links = $('#links-list').children().map(function() {
        return $(this).html();
      }).get();
  
      // Validate form fields
      if (!postContent && files.length === 0 && links.length === 0) {
        $('#success-message').addClass('hidden');
        $('#error-message').removeClass('hidden');
        $('#error-text').text('Please fill out the required fields.');
        return; // Stop form submission
      } else {
        $('#error-message').addClass('hidden');
        $('#success-message').removeClass('hidden');
      }
  
      // Prepare form data
      const formData = new FormData();
      formData.append('postContent', postContent);
      links.forEach((link, index) => {
        formData.append(`links[${index}]`, link);
      });
      for (let i = 0; i < files.length; i++) {
        formData.append('files[]', files[i]);
      }
  
      // Send AJAX request
      $.ajax({
        url: '../post.php', // Replace with your server endpoint
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          console.log('Response:', response);
          // Handle success response
          $('#post-textarea').val('');
          $('#links-list').empty();
          $('#file-input').val('');

          // Reload the page after a short delay (e.g., 1 second)
          setTimeout(function() {
            location.reload(); // Reload the current page
          }, 1000);
        },
        error: function(xhr, status, error) {
          console.error('Error:', error);
          // Handle error response
        }
      });
    });
  });
  