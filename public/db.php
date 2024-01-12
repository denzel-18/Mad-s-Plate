<?php


session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
       exit;
}



  include'../connect/connect.php';

$files = glob("../csv/*.csv");

    foreach($files as $file) {

        if (($handle = fopen($file, "r")) !== FALSE) {
           // echo "<b>Filename: " . basename($file) . "</b><br><br>";

            while (($data = fgetcsv($handle, 4096, ",")) !== FALSE) {
                //echo $data[0];
                 
                  $date_range=$data[0];
                  $angry=$data[1];
                  $sad=$data[2];
                  $neutral=$data[3];
                  $happy=$data[4];
                  $very_happy=$data[5];
                  $total=$data[6];

                  $sql = "SELECT * FROM data_analysis WHERE date_range='$date_range'";
                  $result = $conn->query($sql);

                  if ($result->num_rows <= 0) {
                    
                    $sql1 = "INSERT INTO data_analysis (date_range, angry, sad, neutral, happy, very_happy, total)
                      VALUES ('$date_range', '$angry', '$sad', '$neutral', '$happy', '$very_happy', '$total')";

                      if ($conn->query($sql1) === TRUE) {
                        //echo "New record created successfully";
                      } else {
                        //echo "Error: " . $sql1 . "<br>" . $conn->error;
                      }

                  }
            }
            
            fclose($handle);
        } else {
            echo "Could not open file: " . $file;
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <link rel="stylesheet" href="css/db.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <title>Mad Plate's Sizzling House</title>
</head>
<body>
    <div class="container">
      <div class="topbar">
        <div class="logo">
          <img src="images/2.png" alt="Avatar" class="avatar">
        </div>
        <i class="fas fa-bell"></i>
        <div class="user">
          <img src="images/user.png" alt="">
        </div> 
      </div>
      <div class="sidebar">
        <ul>
          <li>
            <a href="db.php">
              <i class="fas fa-th-large"></i>
              <div>Dashboard.</div>
            </a>
          </li>
          <li>
            <a href="chart.php">
              <i class="fas fa-chart-bar"></i>
              <div>Analytics</div>
            </a>
          </li>
          <li>
            <a href="inbox.php">
              <i class="fas fa-inbox"></i>
              <div>Inbox</div>
            </a>
          </li>
          <li>
            <a href="book_assigned.php">
              <i class="fas fa-book"></i>
              <div>Book Assigned</div>
            </a>
          </li>
          <!--
          <li>
            <a href="AddData.html">
              <i class="fas fa-users"></i>
              <div>Add Data</div>
            </a>
          </li>
  -->
          <li>
            <a href="logout.php">
              <i class="fas fa-sign-in-alt"></i>
              <div>Log Out</div>
            </a>
          </li>
        </ul>
        <div class="logo">
          <img src="images/2.png" alt="Avtr" class="avtr">
        </div>
      </div>
      <div class="main">
        <div class="cards">
          <div class="card">
            <div class="table">
              <table>
                <thead>
                  <tr>
                    <th>Date</th>
                    <th><img src="images/Angry 1.png"> </th> 
                    <p>Angry&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sad
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Neutral 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Happy 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Very Happy</p> 
                    <th><img src="images/Sad.png"> </th>
                    <th><img src="images/Neutral.png"> </th>
                    <th><img src="images/Happy.png"> </th>
                    <th><img src="images/Very Happy.png"> </th>
                    <th>TOTAL</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM data_analysis ORDER BY id DESC";
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          ?>
                            <tr>
                               <td><?php echo$row['date_range']?></td>
                               <td><?php echo$row['angry']?></td>
                               <td><?php echo$row['sad']?></td>
                               <td><?php echo$row['neutral']?></td>
                               <td><?php echo$row['happy']?></td>
                               <td><?php echo$row['very_happy']?></td>
                               <td><?php echo$row['total']?></td>
                            </tr>
                          <?php
                        }
                      } else {
                        echo "0 results";
                      }
                      
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          
          
        </div>
        
        </div>
      </div>
    </div>
    <script src="js/dashboard.js"></script>
</body>
</html>
