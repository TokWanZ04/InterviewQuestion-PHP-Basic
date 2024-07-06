$(document).ready(function() {
    function submitForm() {
        var username = $('#username').val().trim();
        if (username === '') {
            alert('Username cannot be empty');
            return;
        }
        $.ajax({
            url: 'info.php',
            type: 'POST',
            data: { username: username },
            success: function(response) {
                if (response.trim() === 'Verified') {
                    $('#response').html('<span class="verified">Verified</span>');
                } else {
                    $('#response').html('<span class="error">Error</span>');
                }
            },
            error: function() {
                $('#response').html('<span class="error">Error occurred while verifying the username.</span>');
            }
        });
    }
    $('#submitBtn').click(function() {
        submitForm();
    });
    $('#usernameForm').on('submit', function(e) {
        e.preventDefault();
        submitForm();
    });
});
