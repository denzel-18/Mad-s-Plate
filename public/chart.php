<?php
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





        
        $month_date=date('m');
        $yr=date("y");

        //$p_id_data=array();
        $data=array();

          if(isset($_GET['range'])){
            $date=date_create($_GET['range']);
            $month_date=date_format($date,"m");
            $yr=date_format($date,"y");

            $month=date_format($date,"M");

            $year=date_format($date,"Y");
          }

          if($month_date=="01" || $month_date=="03" || $month_date=="05" || $month_date=="07" || $month_date=="08" || $month_date=="10" || $month_date=="12"){

            $day="31";
          }else if($month_date=="02"){
            $day="31";

          }else{
            $day="31";
          }



          for ($i=1; $i <= $day; $i++) { 

            $date_range=$month_date."/".$i."/".$yr;

            $sql = "SELECT * FROM data_analysis WHERE date_range BETWEEN '$date_range' AND '$date_range' ORDER BY id DESC LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {

               
                array_push($data,$row['total']);
              }
            }else{
              array_push($data,'0');
            }
         
          }
        
                    for ($i=0; $i <= 30; $i++) {
                     $data[$i].",";
                    }
          

          $date_range_from=$month_date."/01/".$yr;
          $date_range_to=$month_date."/31/".$yr;

          $sql = "SELECT COUNT(id) AS id,SUM(angry) as angry,SUM(sad) as sad,SUM(neutral) as neutral,SUM(happy) as happy,SUM(very_happy) as very_happy,SUM(total) as total FROM data_analysis WHERE date_range BETWEEN '$date_range_from' AND '$date_range_to'";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $id=$row['id'];
              

              if($id !=="0" ){
                $angry=round(($row['angry']/$row['total'])*100);
                $sad=round(($row['sad']/$row['total'])*100);
                $neutral=round(($row['neutral']/$row['total'])*100);
                $happy=round(($row['happy']/$row['total'])*100);
                $very_happy=round(($row['very_happy']/$row['total'])*100);
                $total=$row['total'];
              }else{
                $id=0;
                $angry=0;
                $sad=0;
                $neutral=0;
                $happy=0;
                $very_happy=0;
                $total=0;
              }
            }
          } else {
              $id=0;
              $angry=0;
              $sad=0;
              $neutral=0;
              $happy=0;
              $very_happy=0;
              $total=0;
          }
        
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <link rel="stylesheet" href="css/chart.css">
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
            <a href="index.html">
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
            <div class="card-content">
              <div class="number">423</div>
              <div class="card-name">Feedbacks</div>
            </div>
            <div class="icon-box">
              <i class="fas fa-camera"></i>
            </div>
          </div>
        
          <div class="card">
            <div class="card-content">
              <div class="number">5</div>
              <div class="card-name">Admins</div>
            </div>
            <div class="icon-box">
              <i class="fas fa-chalkboard-teacher"></i>
            </div>
          </div>
          <!-- <a href="csv/" style="text-decoration: none; ">
            <div class="card">
              <div class="card-content">
                <div class="number"><?php echo$id?></div>
                <div class="card-name">Upload new file</div>
              </div>
              <div class="icon-box">
                <i class="fas fa-file-excel"></i>
              </div>
          </div>
          </a> -->

        </div>
        <div class="charts">
          <div class="chart">
            <input type="month" name="" style="position: absolute;" onchange="date_range(this.value);">
            <h2>Feedbacks (<?php echo $month?> <?php echo$year;?>) </h2>
            
            <canvas id="lineChart"></canvas>
          </div>
          <div class="chart">
            <div class="chart" id="doughnut-chart">
              <h2>Emotions Used</h2>
              <canvas id="doughnut"></canvas>
            </div>
          </div>
        </div>

        
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <!-- <script src="js/chart.js"></script> -->

  
    <script type="text/javascript">
      function date_range(range){

        
        location.href="?range="+range;

      }

      /// LINE GRAPH
      var ctx = document.getElementById('lineChart').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'line',
          data: {
              labels: ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'],
              datasets: [{
                  label: 'Number of Feedbacks',
                  data: [<?php
                    for ($i=0; $i <= 30; $i++) {
                      echo $data[$i].",";
                    }
                    ?>],
                  backgroundColor: [
                      'rgba(85, 85, 85, 1)'

                  ],
                  borderColor: [
                      'rgba(41, 155, 99)'

                  ],
                  borderWidth: 1
              }]
          },
          options: {
              responsive: true,
              scales: {
                x: {
                 title: {
                  display: true, text: 'Days of Month'
                   }
                 },
                y: {
                 title: {
                  display: true, text: 'Total of Feedbacks'
                   }
                 }
               },

          }
      });

      // //// PIE GRAPH



      

      var ctx = document.getElementById('doughnut').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
              labels: ['Angry <?php echo $angry?>%','Sad <?php echo $sad?>%','Neutral <?php echo $neutral?>%','Happy <?php echo $happy?>%','Very Happy <?php echo $very_happy?>%'],
              datasets: [{
                  label:'Emotions',
                  data: ['<?php echo $angry?>', '<?php echo $sad?>', '<?php echo $neutral?>', '<?php echo $happy?>', '<?php echo $very_happy?>'],
                  backgroundColor: [
                      'rgba(255, 0, 0)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(120, 46, 139, 1)',
                      'rgba(41, 155, 99, 1)'
                  ],
                  borderColor: [
                      'rgba(255, 0, 0)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(120, 46, 139, 1)',
                      'rgba(41, 155, 99, 1)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              responsive: true
          }
      });

      
    </script>
</body>
</html>