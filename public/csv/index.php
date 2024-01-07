<?php
namespace Phppot;

use Phppot\DataSource;
require_once __DIR__ . '/lib/UserModel.php';
$userModel = new UserModel();
if (isset($_POST["import"])) {
	

    $response = $userModel->readUserRecords();
}


?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function validateFile() {
    var csvInputFile = document.forms["frmCSVImport"]["file"].value;
    if (csvInputFile == "") {
      documemt.getElementById("response").innerHTML = "No source found to import";
      return false;
    }
    return true;
  }

</script>
</head>
<body>
	<center>
		<h3></h3>
		<h1>
			<a href="../?page="></a>
		</h1>
	</center>
	
	<div class="outer-scontainer">
		<div class="row">
			<center><h2>Import CSV file </h2></center>
			<form class="form-horizontal" action="" method="post"
				name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data"
				onsubmit="return validateFile()">
				<div Class="input-row">

					<label>Choose your file. <a href="./sample.csv" download>Download
							template</a></label><input type="file" name="file" id="file"
						class="file" accept=".csv,.xls,.xlsx">
					<div class="import">
						<button type="submit" id="submit" name="import" class="btn-submit">Import</button>
					</div>
				</div>
			</form>
		</div>
		<div id="response"
			class="<?php if(!empty($response["type"])) { echo $response["type"] ; } ?>">
        <?php if(!empty($response["message"])) { echo $response["message"]; if($response["type"]=="success"){header("location: ../chart.php?&import=success");}  } ?>
        </div><?php  //require_once __DIR__ . '/list.php';?></div>
</body>
</html>