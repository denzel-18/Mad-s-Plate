<?php
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
        .sidenav {
        height: 100%;
        width: 250px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        padding-top: 20px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 18px;
        color: #818181;
        display: block;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }
    /* Hide the sidebar by default */
    .sidenav {
        display: none;
        /* ... existing styles ... */
    }

    /* Adjust the content position based on the sidebar visibility */
    .content {
        margin-left: 0;
        /* ... existing styles ... */
    }
    .toggle-btn {
        font-size: 24px;
        cursor: pointer;
        position: fixed;
        left: 10px;
        top: 10px;
        background-color: #111;
        color: white;
        border: none;
        padding: 5px 10px;
    }
</style>
<body background="https://i.gifer.com/EFI0.gif">
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
     <div class="sidenav">
        <a href="book_assigned.php">Reservation</a>
        <a href="done.php">Reservation Done</a>
        <a href="pending.php">Reservation Pending</a>
        <a href="db.php">Back</a>
    </div>

    <div class="content" style="margin-left: 0;">
    <i><h1> Summary of Reservation Already Done! </h1></i>

    <table class="table table-light table-striped">
        
        <tr>
            <th> Id Number </th>
            <th> First Name </th>
            <th> Last Name </th>
            <th> Reservation Date </th>
            <th> Time </th>
            <th> Number of Person </th>
            <th> Reservation Status </th>
        </tr>

        <?php 
        // Updated query to select only reservations with status equal to 'Done'
        $query = mysqli_query($db, "SELECT * FROM booking1 WHERE status = 'Done' ORDER BY date, time");
        $no = 1; // auto numbering
        
        while($value = mysqli_fetch_array($query)){
            echo "<tr>"; 
            echo "<td>". $no. "</td>";
            echo "<td>". $value['name']. "</td>";
            echo "<td>". $value['last']. "</td>";
            echo "<td>". $value['date']. "</td>";
            echo "<td>". date("h:i A", strtotime($value['time'])). "</td>"; // Format time to AM/PM
            echo "<td>". $value['table']. "</td>";
            echo "<td>". $value['status']. "</td>";

            echo "</tr>";
            $no++; // increment for the next iteration
        }
        ?>
    </table>
    <script>
    // JavaScript function to toggle the sidebar's visibility
    function toggleSidebar() {
        var sidebar = document.querySelector('.sidenav');
        var content = document.querySelector('.content');

        if (sidebar.style.display === "none" || sidebar.style.display === "") {
            sidebar.style.display = "block";
            content.style.marginLeft = "250px";
        } else {
            sidebar.style.display = "none";
            content.style.marginLeft = "0";
        }
    }

    // Close sidebar when clicking outside of it
    document.addEventListener('click', function (event) {
        var sidebar = document.querySelector('.sidenav');
        var content = document.querySelector('.content');

        if (sidebar.style.display === "block" && event.target.closest('.sidenav') === null && event.target !== content && !event.target.classList.contains('toggle-btn')) {
            sidebar.style.display = "none";
            content.style.marginLeft = "0";
        }
    });
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>