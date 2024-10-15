// Toggle between hamburger btn & close btn
document.addEventListener('DOMContentLoaded', function() {  
    const btn = document.querySelector(".hamburger-btn i.fas");

    if (btn) {
        btn.closest('.hamburger-btn').addEventListener('click', function() {  //Add event listener to the closest btn (itself)
            btn.classList.toggle("fa-bars");
            btn.classList.toggle("fa-times");
        });
    }
});

// AOS initializer
document.addEventListener('DOMContentLoaded', function() { // Ensure AOS initialization after DOM content is loaded
    AOS.init({
        duration: 1250, 
        easing: 'ease-in-out', 
        once: false, // AOS behaviour
    });
});

// Stats Counter initializer
document.addEventListener('DOMContentLoaded', function() { // Ensure counter initialization after DOM content is loaded
    const counters = document.querySelectorAll('.number');
    counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        let count = 0;
        const increment = target / 200;

        const updateCounter = () => {
            count += increment;
            if (count < target) {
                counter.innerText = Math.ceil(count);
                requestAnimationFrame(updateCounter);
            } else {
                counter.innerText = target;
            }
        };

        updateCounter();
    });
});

// Toastr configuration 
toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "preventDuplicates": true,
    "escapeHtml": false
};

$(document).ready(function() {
    $('#contactForm').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission
        
        // Collect form data
        var formData = {
            name: $('#name').val(),
            email: $('#email').val(),
            phone: $('#phone').val(),
            subject: $('#subject').val(),
            message: $('#message').val()
        };

        // AJAX request
        $.ajax({
            type: 'POST',
            url: 'forms/contact.php', // URL of the PHP form handler
            data: formData,
            dataType: 'json', // Expect JSON response from the server
            success: function(response) {
                if (response.status === 1) {
                    showToast('success', response.title, response.message);
                } else {
                    showToast('warning', response.title, response.message);
                }
            },
            error: function(xhr, status, error) {
                showToast('error', 'Error!', 'Something went wrong. Please try again.');
            }
        });
    });

    // Function to display toast alerts
    function showToast(type, title, message) {
        var bgColor;
        if (type === 'success') bgColor = '#28a745'; // Green for success
        else if (type === 'warning') bgColor = '#ffc107'; // Yellow for warning
        else bgColor = '#dc3545'; // Red for error
        
        var toast = $('<div class="toast" style="position: fixed; top: 20px; right: 20px; min-width: 300px; z-index: 9999;">' +
            '<div class="toast-header" style="background-color: ' + bgColor + '; color: white;">' +
            '<strong class="mr-auto">' + title + '</strong>' +
            '<button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>' +
            '</div>' +
            '<div class="toast-body">' + message + '</div>' +
        '</div>');

        $('body').append(toast);
        toast.toast({delay: 5000}); // Toast duration: 5 seconds
        toast.toast('show');
    }
});
