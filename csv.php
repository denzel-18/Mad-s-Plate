<?php

    $files = glob("./*.csv");

    foreach($files as $file) {

        if (($handle = fopen($file, "r")) !== FALSE) {
           // echo "<b>Filename: " . basename($file) . "</b><br><br>";

            while (($data = fgetcsv($handle, 4096, ",")) !== FALSE) {
                echo $data[0].$data[1];
            }
            echo "<br>";
            fclose($handle);
        } else {
            echo "Could not open file: " . $file;
        }

    }

?>