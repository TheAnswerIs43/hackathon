$(function() {
    $('#btn-special').on('click', function() {
        $.ajax({
            url: '/finish-onboarding',
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    window.location.href = response.url; // ricarica forzata
                    window.location.reload(true);
                } else {
                    alert('Error: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                alert('An error occurred: ' + error);
            }
        });
    });
});
