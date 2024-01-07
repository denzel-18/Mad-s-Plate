<?php
namespace Phppot;

use Phppot\DataSource;

class UserModel
{

    private $conn;

    function __construct()
    {
        require_once 'DataSource.php';
        $this->conn = new DataSource();
    }

    function getAllUser()
    {
        $sqlSelect = "SELECT * FROM student";
        $result = $this->conn->select($sqlSelect);
        return $result;
    }

    function readUserRecords()
    {
        $fileName = $_FILES["file"]["tmp_name"];
        if ($_FILES["file"]["size"] > 0) {
            $file = fopen($fileName, "r");
            $importCount = 0;
            while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
                if (! empty($column) && is_array($column)) {
                    if ($this->hasEmptyRow($column)) {
                        continue;
                    }
                    if (isset($column[0])) {
                        $date = $column[0];
                        $angry = $column[1];
                        $sad = $column[2];
                        $nuetral = $column[3];
                        $happy = $column[4];
                        $very_happy = $column[5];
                        $total = $column[6];
                        $insertId = $this->insertUser($date, $angry, $sad,$nuetral,$happy,$very_happy,$total);
                        if (! empty($insertId)) {
                            $output["type"] = "success";
                            $output["message"] = "Import completed.";
                            $importCount ++;
                        }
                        
                    }
                } else {
                    $output["type"] = "error";
                    $output["message"] = "Problem in importing data.";
                }
            }
            if ($importCount == 0) {
                $output["type"] = "error";
                $output["message"] = "Duplicate data found.";
            }
            return $output;
        }
    }

    function hasEmptyRow(array $column)
    {
        $columnCount = count($column);
        $isEmpty = true;
        for ($i = 0; $i < $columnCount; $i ++) {
            if (! empty($column[$i]) || $column[$i] !== '') {
                $isEmpty = false;
            }
        }
        return $isEmpty;
    }

    function insertUser($date, $angry, $sad,$nuetral,$happy,$very_happy,$total)
    {

        
        // $sql = "SELECT student_number FROM student WHERE student_number = ?";
        // $paramType = "s";
        // $paramArray = array(
        //     $student_number
        // );
        // $result = $this->conn->select($sql, $paramType, $paramArray);


        

        $insertId = 0;
        
        //if (empty($result)) {
            //$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO data_analysis (date_range,angry,sad,neutral,happy,very_happy,total)
                       values (?,?,?,?,?,?,?)";
            $paramType = "sssssss";
            $paramArray = array(
                $date,
                $angry,
                $sad,
                $nuetral,
                $happy,
                $very_happy,
                $total

            );

            $insertId = $this->conn->insert($sql, $paramType, $paramArray);
        //}
        return $insertId;
    }
}
?>