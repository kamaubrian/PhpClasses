<?php

require 'database_connection.php';

$query="SELECT * FROM `user_info`";

if($is_query_run=mysql_query($query)){

    echo "Query Execution Success.<br>";
    while($query_execute=mysql_fetch_assoc($is_query_run)){
        echo $query_execute['NAME'] .'<br>';

    }

}else{

    echo "Query not Executed";
}