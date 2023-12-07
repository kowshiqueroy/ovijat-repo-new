<?php
include_once("header.php");

?>

<div class="container ">
    <div class="row">
        <div class="col-sm">
        <h2>Log In / Out</h2>
            <table id="dt" class="table table-striped">
                <tr>
                    <th> Time Stamp</th>
                    <th>Data</th>

                </tr>

                <?php

                $select = $pdo->prepare("select * from log order by ts desc");

                $select->execute();

                while ($row = $select->fetch(PDO::FETCH_OBJ)) {
                    echo "
    <tr>
    <td>$row->ts</td>
    <td>$row->data</td>
   
    
   
    
    </tr>
    ";
                }
                ?>

            </table>

        </div>


        <div class="col-sm">
        <h2>Log try</h2>
            <table id="dt" class="table table-striped">
                <tr>
                    <th> Time Stamp</th>
                    <th>Data</th>

                </tr>

                <?php

                $select = $pdo->prepare("select * from logtry order by ts desc");

                $select->execute();

                while ($row = $select->fetch(PDO::FETCH_OBJ)) {
                    echo "
    <tr>
    <td>$row->ts</td>
    <td>$row->data</td>
   
    
   
    
    </tr>
    ";
                }
                ?>

            </table>

        </div>

        <div class="col-sm">
<h2>Entry Deleted</h2>
            <table id="dt" class="table table-striped">
                <tr>
                    <th> Time Stamp</th>
                    <th>Data</th>

                </tr>

                <?php

                $select = $pdo->prepare("select * from logdel order by ts desc");

                $select->execute();

                while ($row = $select->fetch(PDO::FETCH_OBJ)) {
                    echo "
    <tr>
    <td>$row->ts</td>
    <td>$row->data</td>
   
    
   
    
    </tr>
    ";
                }
                ?>

            </table>

        </div>
    </div>

    <?php
    include_once("footer.php");

    ?>