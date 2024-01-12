<?php

session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
       exit;
}

$db = mysqli_connect('localhost', 'root', '', 'face_recog');

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    h1 {
        font-family: "Times New Roman", Times, serif;
        font-size: 80px;
        text-align: center;
        color: white;
    }
    table {
        border-collapse: collapse;
        margin:     left;
        width: 500%;
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
<body background="https://i.gifer.com/7tD0.gif">
    <i><h1>Feedback</h1></i>

    <table class="table table table-hover">
        
        <tr>
            <th> G-mail</th>
            <th> Feedback</th>
        </tr>

        <?php 
        $query = mysqli_query($db, "SELECT * FROM messages");               
        while($value = mysqli_fetch_array($query)){
            echo "<tr>"; 
            echo "<td>". $value['email']. "</td>";
            echo "<td>". $value['opinion']. "</td>";
        }
        ?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
