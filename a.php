<?php
include "db.php";

$solt = "SELECT * FROM `foodtype`";
            $reds = mysqli_query($db, $solt);
            $are = [];
        while($ree = mysqli_fetch_assoc($reds)){
             $are[]=$ree['tur'];
        }
        print_r($are);

if(!in_array("ovqat",$are)){
    
}

?>