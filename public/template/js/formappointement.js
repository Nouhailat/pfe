

    document.addEventListener('DOMContentLoaded', function() {
        // Get references to the form and buttons
        const appointmentForm = document.getElementById('appointmentForm');
        const showFormButton = document.getElementById('showFormButton');
        const hideFormButton = document.getElementById('hideFormButton');
        const formRendezvous = document.getElementById('formRendezvous');

        // Show the appointment form when clicking the button
        showFormButton.addEventListener('click', function() {
            appointmentForm.style.display = 'block';
        });

        // Hide the appointment form when clicking the cancel button
        hideFormButton.addEventListener('click', function() {
            appointmentForm.style.display = 'none';
        });

        // Handle form submission
        formRendezvous.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // You can use Fetch API or any other method to submit the form data to your backend
            // Example using Fetch API:
            fetch('/api/appointments', {
                method: 'POST',
                body: new FormData(formRendezvous)
            })
            .then(response => response.json())
            .then(data => {
                alert('Appointment booked successfully!');
                // Optionally, reset the form or close the modal after successful submission
                appointmentForm.style.display = 'none';
                formRendezvous.reset(); // Reset the form fields
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
        });
    });

