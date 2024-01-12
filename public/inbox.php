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
    
</head>
<style>
    h1 {
        margin-top: 60px;
        font-family: "Times New Roman", Times, serif;
        font-size: 80px;
        text-align: center;
        color: white;
    }
    table {
    width: 100%;
    border: 1px solid black;
    text-align: center;
    border-radius: 10px; /* Adjust the border radius for rounded corners */
    padding: 20px; /* Adjust the padding on both sides as needed */
    margin: 20px 0; /* Add margin as needed */
    
}
   
    th, td {
        border: 1px solid black;
        padding: 8px;  
        background: pink;
        border-radius: 30px; /* Adjust the border radius for rounded corners */
        
    } 
    th {
    height: 50px; /* Adjust the height as needed */
    background-color: rgba(255, 255, 255, 0.7);
    font-size: 30px;
    }
    td {
    height: 50px; /* Adjust the height as needed */
    background-color: rgba(255, 255, 255, 0.7);
    text-align: center; /* Center the text horizontally */
    vertical-align: justify; /* Justify the text vertically */
    font-size: 20px; /* Adjust the font size as needed */
    
}
body {
            margin: 0;
            padding: 0;
            background-color: #000; 
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
<body> 

    <i><h1>Inquiries</h1></i>

    <table class="table table table-hover">
        
        <tr>
            <th> Google mail</th>
            <th> Messages </th>
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
