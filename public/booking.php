<?php
// Initialize $stmt outside the conditional block
$stmt = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'face_recog';

    $conn = new mysqli($host, $user, $pass, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the insertion query
    $stmt = $conn->prepare("INSERT INTO booking1 (name, last, date, time, `table`) VALUES (?, ?, ?, ?, ?)");

    $stmt->bind_param("sssss", $name, $last, $date, $time, $table);

    $name = $_POST['name'];
    $last = $_POST['last'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $table = $_POST['table'];

    if ($stmt->execute()) {
        echo "<script>
                alert('Your reservation is successfully');
                window.location.href = 'index.html';
              </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mad Plate's Sizzling Reservation Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <section class="banner">
        <div class="card-container">
            <div class="card-img">
            </div>

            <div class="card-content">
                <h3>Reservation Form</h3>

                <form method="POST" action="" name="index">
                    <div class="form-row">
                        <input type="text" placeholder="First Name" name="name">
                        <input type="text" placeholder="Last Name" name="last">
                    </div>
                    <div class="form-row">
                        <class name="date">
                            <input type="date" name="date" class="form-control">
                </class>
                        <class name="time">
                            <input type="time" name="time" class="form-control">
                    </div>

                    <div class="form-row">
                        <input type="number" placeholder="How Many Persons" min="1" max="15" name="table">
                        <input type="submit" name="submit" value="BOOK TABLE" id="submit">
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>

</html>