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

// Fetch messages from the database
$sql = "SELECT * FROM messages ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/inbox.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
        crossorigin="anonymous" />
    <title>Inbox - Mad Plate's Sizzling House</title>
</head>

<body>
    <div class="container">
        <!-- Include the sidebar and header from db.php -->
        <?php include 'db.php'; ?>

        <!-- Main content for Inbox page -->
        <div class="main">
            <div class="cards">
                <div class="card">
                    <div class="messages-container">
                        <h2>Inbox</h2>
                        <?php
                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <div class="message">
                                    <p>Email: <?php echo $row['email']; ?></p>
                                    <p>Opinion: <?php echo $row['opinion']; ?></p>
                                    <p>Sent at: <?php echo $row['timestamp']; ?></p>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<p>No messages in the inbox.</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Your other HTML content goes here -->
    </div>
    <script src="js/inbox.js"></script>
</body>

</html>
