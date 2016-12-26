<?php
 $mysql_host='localhost';
 $mysql_user='root';
 $mysql_password='wamatu';

/** @var TYPE_NAME $mysql_user */
if(@mysql_connect($mysql_host,$mysql_user,$mysql_password)==true){
    @mysql_select_db('Brian1');

}else{
     echo "Unable Connect to Database";
}





