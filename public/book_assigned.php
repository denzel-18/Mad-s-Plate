<?php

session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
       exit;
}

$db = mysqli_connect('localhost', 'root', '', 'face_recog');

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to handle the "Done" action
function markReservationAsDone($id) {
    global $db;
    $stmt = mysqli_prepare($db, "UPDATE booking1 SET status = 'Done' WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

if (isset($_POST['delete'])) {
    $idToDelete = $_POST['reserve_id'];

    // Use a prepared statement to prevent SQL injection
    $stmt = mysqli_prepare($db, "DELETE FROM booking1 WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $idToDelete);
    mysqli_stmt_execute($stmt);

    // Check if the deletion was successful
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "<script>
                alert('Record Deleted Successfully');
                window.location.href = 'book_assigned.php';
              </script>";
    } else {
        echo "Error deleting record: " . mysqli_error($db);
    }

    mysqli_stmt_close($stmt);
    } elseif (isset($_POST['done'])) {
    $idToMarkAsDone = $_POST['reserve_id'];
    markReservationAsDone($idToMarkAsDone);

    echo "<script>
            alert('Reservation marked as Done');
            window.location.href = 'book_assigned.php';
          </script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reservation List</title>
</head>
<style>
    body {
            margin: 0;
            padding: 0;
            background-color: #000; 
        }
    h1 {
        margin-top: 60px;
        font-family: "Times New Roman", Times, serif;
        font-size: 80px;
        text-align: center;
        color: white;
        }
    table {
        width: 100%;
        text-align: center;
        border-radius: 5px; 
        padding: 20px; 
        margin: 20px 0; 
        
    }
   
    th, td {
        border: 1px solid black;
        padding: 8px;  
        background: pink;
        border-radius: 15px; 
        
    } 
    th {
    height: 50px; 
    background-color: rgba(255, 255, 255, 0.7);
    font-size: 30px;
    }
    td {
    height: 50px; 
    background-color: rgba(255, 255, 255, 0.7);
    text-align: center; 
    vertical-align: justify; 
    font-size: 20px; 
    
    }
    body {
    background-repeat: no-repeat;
    background-size: 100%;
    }
    button[name='done'] {
    background-color: #28a745;
    color: #fff; 
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    }

    button[name='done']:hover {
    background-color: #fff; 
    color: #28a745;
    }


    button[name='delete'] {
    background-color: #dc3545; 
    color: #fff; 
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    }

    button[name='delete']:hover {
    background-color: #fff; 
    color: #dc3545;
    }
    .footer__container {
            background: url('images/8.png') no-repeat center center fixed; 
            background-size: cover; 
            height: 100vh; 
            display: cover;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .footer__logow img {
            width: 100%; 
            height: auto; 
            max-width: 200px; 
            display: block; 
            margin: 0 auto; 
            transform: scaleX(-1); 
        }
</style>

    <i><h1> Summary of Reservation </h1></i>

    <table class="table table-light table-striped">
        
        <tr>
            <th> Id Number </th>
            <th> First Name </th>
            <th> Last Name </th>
            <th> Reservation Date </th>
            <th> Time </th>
            <th> Number of Person </th>
            <th colspan='3'>Action</th>
        </tr>

        <?php 
        $query = mysqli_query($db, "SELECT * FROM booking1 ORDER BY date, time");
        $no = 1; // auto numbering
        
        while($value = mysqli_fetch_array($query)){
            echo "<tr>"; 
            echo "<td>". $no. "</td>";
            echo "<td>". $value['name']. "</td>";
            echo "<td>". $value['last']. "</td>";
            echo "<td>". $value['date']. "</td>";
            echo "<td>". date("h:i A", strtotime($value['time'])). "</td>"; // Format time to AM/PM
            echo "<td>". $value['table']. "</td>";

            echo "<td>
                    <form method='POST' onsubmit='return confirm(\"Have you completed this reservation?\");'>
                        <input type='hidden' name='reserve_id' value='". $value['id']. "'>
                        <button type='submit' name='done' class='btn btn-success'>DONE</button>
                    </form>
                  </td>";
            
            echo "<td>
                    <form method='POST' onsubmit='return confirm(\"Are you sure you want to delete this record?\");'>
                        <input type='hidden' name='reserve_id' value='". $value['id']. "'>
                        <button type='submit' name='delete' class='btn btn-danger'>DELETE</button>
                    </form>
                  </td>";

            echo "</tr>";
            $no++; // increment for the next iteration
        }
        ?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="footer__container" id="bottom">
        <section class="social__media">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer__logow">
                            <a href="/" id="footer__logow"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
