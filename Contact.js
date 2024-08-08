document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    alert('Your message has been sent! Thank you for contacting us.');
    
    // Clear the form fields after the alert
    document.getElementById('contact-form').reset();
});
