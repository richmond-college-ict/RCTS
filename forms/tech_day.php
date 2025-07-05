<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Day</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../assets/css/day_reg.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://i.ibb.co/JF8nBS1/Logo-Tech-2.png" rel="icon">
  <style>
        /* Customize modal background color */
        .modal-content {
            background-color: #f8f9fa; /* Light background */
            border-radius: 0.5rem; /* Rounded corners */
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        /* Customize modal header */
        .modal-header {
            border-bottom: 2px solid #343a40; /* Darker border */
            background-color: #e9ecef; /* Slightly darker background */
        }

        /* Customize modal title */
        .modal-title {
            font-weight: bold; /* Bold title */
            color: #343a40; /* Dark text */
        }

        /* Customize modal body */
        .modal-body {
            font-size: 1rem; /* Font size */
            color: #495057; /* Darker text color */
        }

        /* Customize modal footer */
        .modal-footer {
            border-top: 1px solid #dee2e6; /* Light border */
        }

        /* Custom classes for success and error messages */
        .text-success {
            color: #28a745; /* Green for success */
        }

        .text-danger {
            color: #dc3545; /* Red for errors */
        }
    </style>
</head>
<body>
<?php include('../pages/navbar.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Day Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Tech Day Registration Form</h2>
        <form action="../data/register-techday.php" method="POST">
            <div class="mb-3">
                <label for="school_name" class="form-label">School Name</label>
                <input type="text" class="form-control" id="school_name" name="school_name" required>
            </div>
            <div class="mb-3">
                <label for="school_address" class="form-label">School Address</label>
                <input type="text" class="form-control" id="school_address" name="school_address" required>
            </div>
            <div class="mb-3">
                <label for="school_address" class="form-label">Census number of the school (පාසල් සංගණන අංකය)</label>
                <input type="number" class="form-control" id="school_address" name="census_number" required>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>
            <div class="mb-3">
                <label for="school_no" class="form-label">School Contact Number</label>
                <input type="tel" class="form-control" id="school_no" name="school_no" required>
            </div>
            <div class="mb-3">
                <label for="school_email" class="form-label">School Email</label>
                <input type="email" class="form-control" id="school_email" name="school_email" required>
            </div>
            <div class="mb-3">
                <label for="principal" class="form-label">Principal's Name</label>
                <input type="text" class="form-control" id="principal" name="principal" required>
            </div>
            <div class="mb-3">
                <label for="tic_name" class="form-label">Teacher-In-Charge (TIC) Name</label>
                <input type="text" class="form-control" id="tic_name" name="tic_name" required>
            </div>
            <div class="mb-3">
                <label for="tic_number" class="form-label">TIC Contact Number</label>
                <input type="tel" class="form-control" id="tic_number" name="tic_number" required>
            </div>
            <div class="mb-3">
                <label for="tic_email" class="form-label">TIC Email</label>
                <input type="email" class="form-control" id="tic_email" name="tic_email" required>
            </div>
            <div class="mb-3">
                <label for="participants" class="form-label">Number of Participants</label>
                <input type="number" class="form-control" id="participants" name="participants" required>
            </div>

            <!-- Checkbox section for competitions -->
            <div class="mb-3">
                <label class="form-label">Competitions</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="quiz" name="comp[]" value="Quiz">
                    <label class="form-check-label" for="quiz">Quiz</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="graphic_design" name="comp[]" value="Graphic Design">
                    <label class="form-check-label" for="graphic_design">Graphic Design</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="coding" name="comp[]" value="Coding">
                    <label class="form-check-label" for="coding">Coding</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="practical" name="comp[]" value="Practical">
                    <label class="form-check-label" for="practical">Practical</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="notes" class="form-label">Additional Notes</label>
                <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
            </div>

            <input type="hidden" name="year" value="2024">
            <button type="submit" class="btn btn-secondary">Register</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include('../pages/footer.php'); ?>

<!-- Modal -->
<div class="modal fade modal-sm" id="responseModal" tabindex="-1" aria-labelledby="responseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="modalMessage">
                <div id="iconContainer" style="display: none;">
                <center>
                <svg xmlns="http://www.w3.org/2000/svg" width="1.414cm" height="1.414cm" viewBox="0 0 50 50">
                    <path d="M 25 2 C 12.317 2 2 12.317 2 25 C 2 37.683 12.317 48 25 48 C 37.683 48 48 37.683 48 25 C 48 20.44 46.660281 16.189328 44.363281 12.611328 L 42.994141 14.228516 C 44.889141 17.382516 46 21.06 46 25 C 46 36.579 36.579 46 25 46 C 13.421 46 4 36.579 4 25 C 4 13.421 13.421 4 25 4 C 30.443 4 35.393906 6.0997656 39.128906 9.5097656 L 40.4375 7.9648438 C 36.3525 4.2598437 30.935 2 25 2 z M 43.236328 7.7539062 L 23.914062 30.554688 L 15.78125 22.96875 L 14.417969 24.431641 L 24.083984 33.447266 L 44.763672 9.046875 L 43.236328 7.7539062 z"></path>
                </svg><br<
                </center>
                </div>
                <center>
                <div id="responseText"></div><br>
                </center>
            </div>
        </div>
    </div>
</div>

<script>
document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();  // Prevent the form from submitting in the default way

    var formData = new FormData(this);  // Collect the form data

    // Send the form data via AJAX using fetch
    fetch(this.action, {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())  // Parse the response as text
    .then(data => {
        const modalMessage = document.getElementById('modalMessage');
        const responseText = document.getElementById('responseText');
        const iconContainer = document.getElementById('iconContainer');
        
        responseText.innerHTML = data;  // Set modal message content
        
        // Check if the response indicates a census number already exists
        if (data.includes("Census number already exists")) {
            modalMessage.classList.add('text-danger');  // Add error style
            iconContainer.style.display = "none";  // Hide success icon
        } else if (data.includes("successful")) {
            modalMessage.classList.add('text-success');  // Add success style
            iconContainer.style.display = "block";  // Show success icon
            this.reset();  // Reset the form fields
        } else {
            modalMessage.classList.add('text-danger');  // Handle general errors
            iconContainer.style.display = "none";  // Hide success icon
        }

        // Show the modal
        const responseModal = new bootstrap.Modal(document.getElementById('responseModal'));
        responseModal.show();
    })
    .catch(error => {
        console.error('Error:', error);
        const modalMessage = document.getElementById('modalMessage');
        const responseText = document.getElementById('responseText');
        responseText.innerHTML = "There was an error processing your request.";
        modalMessage.classList.add('text-danger');
        document.getElementById('iconContainer').style.display = "none"; // Hide success icon
        
        // Show the modal
        const responseModal = new bootstrap.Modal(document.getElementById('responseModal'));
        responseModal.show();
    });
});
</script>


</body>
</html>
