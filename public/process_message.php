<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "face_recog";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $opinion = mysqli_real_escape_string($conn, $_POST["opinion"]);

    // Insert data into your database (replace "messages" and field names with your actual database table and column names)
    $sql = "INSERT INTO messages (email, opinion) VALUES ('$email', '$opinion')";

    if (mysqli_query($conn, $sql)) {
        // Display modal instead of echoing
        echo <<<HTML
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Thank You</title>
            <!-- Bootstrap CSS -->
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body>
            <div class="modal fade" id="thankYouModal" tabindex="-1" role="dialog" aria-labelledby="thankYouModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="thankYouModalLabel">Thank You for the Feedback!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Your feedback has been received successfully.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" onclick="window.location.href='index.html'">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap JS and Popper.js -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

            <script>
                $(document).ready(function(){
                    $('#thankYouModal').modal('show');
                });
            </script>
        </body>
        </html>
HTML;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close database connection if needed
mysqli_close($conn);
?>
