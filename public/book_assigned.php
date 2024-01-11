<?php
$db = mysqli_connect('localhost', 'root', '', 'face_recog');

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
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
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Reservation List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    h1 {
        font-family: "Times New Roman", Times, serif;
        font-size: 50px;
        text-align: center;
        color: white;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid black;
        text-align: center;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
    } 
    body {
        background-repeat: no-repeat;
        background-size: 100%;
    }
</style>
<body background="https://i.gifer.com/EFI0.gif">
    <i><h1> Summary of Reservation </h1></i>

    <table class="table table-light table-striped">
        
        <tr>
            <th> Id Number </th>
            <th> First Name </th>
            <th> Last Name </th>
            <th> Reservation Date </th>
            <th> Time </th>
            <th> Number of Person </th>
            <th colspan='2'>Action</th>
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
</body>
</html>