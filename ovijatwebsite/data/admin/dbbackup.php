<?php
include_once 'header.php';


$dir_name = 'backup/' . $_SESSION["company"];

//Check if the directory with the name already exists
if (!is_dir($dir_name)) {

    mkdir($dir_name);

}



$folderName = $dir_name . "/";
$counterb = 0;
if (file_exists($folderName)) {
    foreach (new DirectoryIterator($folderName) as $fileInfo) {

        if ($fileInfo->isDot()) {
            continue;
        }
        if ($fileInfo->isFile() && time() - $fileInfo->getCTime() <= 60 * 60 * 5) {
            $counterb++;
        }





    }


}

if ($counterb == 0 or isset($_GET['backup'])) {

    //Enter your database information here and the name of the backup file
    $dbName = $dbname;
    $dbUsername = $dbuser;
    $dbPassword = $dbpass;
    $dbHost = $dbhost;




    function backupDatabaseTables($dbHost, $dbUsername, $dbPassword, $dbName, $tables = '*', $dir_name)
    {
        //connect & select the database
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        //get all of the tables
        if ($tables == '*') {
            $tables = array();
            $result = $db->query("SHOW TABLES");
            while ($row = $result->fetch_row()) {
                $tables[] = $row[0];
            }
        } else {
            $tables = is_array($tables) ? $tables : explode(',', $tables);
        }
        $return = "";
        //loop through the tables
        foreach ($tables as $table) {
            $result = $db->query("SELECT * FROM $table");
            $numColumns = $result->field_count;

            $return .= "DROP TABLE $table;";

            $result2 = $db->query("SHOW CREATE TABLE $table");
            $row2 = $result2->fetch_row();

            $return .= "\n\n" . $row2[1] . ";\n\n";

            for ($i = 0; $i < $numColumns; $i++) {
                while ($row = $result->fetch_row()) {
                    $return .= "INSERT INTO $table VALUES(";
                    for ($j = 0; $j < $numColumns; $j++) {
                        $row[$j] = addslashes($row[$j]);
                        $row[$j] = preg_replace("/\n/", "/\\n/", $row[$j]);
                        if (isset($row[$j])) {
                            $return .= '"' . $row[$j] . '"';
                        } else {
                            $return .= '""';
                        }
                        if ($j < ($numColumns - 1)) {
                            $return .= ',';
                        }
                    }
                    $return .= ");\n";
                }
            }

            $return .= "\n\n\n";
        }
        $n = date("Y.m.d.h.i.s") . '.sql';






        // $to = "it.ovijat@gmail.com";
        // $head = "From: kowshiqueroy Web App< it@ovijatfood.com>\r\nReply-To: kowshiqueroy@gmail.com";
        // $sub = "DB Backup From App " . date("d-m-Y-");
        // $msg = $return;
        // if (
        //     mail($to, $sub, $msg, $head)
        // ) {
        //     //echo "mail Done";
        // } else {


        //     // echo "mail Failed";
        // }


        //save file
        $handle = fopen($dir_name . '/' . $n, 'w+');

        if (fwrite($handle, $return)) {

            fclose($handle);



            // $file_url = 'backup/' . $n;
            // header('Content-Type: application/octet-stream');
            //header("Content-Transfer-Encoding: utf-8");
            // header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
            //readfile($file_url);


            $folderName = $dir_name . "/";
            $counter = 0;
            if (file_exists($folderName)) {
                foreach (new DirectoryIterator($folderName) as $fileInfo) {
                    $counter++;
                    if ($fileInfo->isDot()) {
                        continue;
                    }
                    if ($fileInfo->isFile() && time() - $fileInfo->getCTime() >= 60 * 60 * 24 * 30 && $counter > 10) {
                        unlink($fileInfo->getRealPath());
                    }





                }
            }





            echo '

            <script>

            alert("Backup Successful.");

            </script>

        ';

        } else {


            echo '

    <script>
    
    alert("Backup Failed");
    
    </script>
    
    ';

        }


    }

    backupDatabaseTables($dbHost, $dbUsername, $dbPassword, $dbName, $tables = '*', $dir_name);
}
?>