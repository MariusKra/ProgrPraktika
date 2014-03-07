<?php
/**
 * Created by PhpStorm.
 * User: Marius
 * Date: 3/5/14
 * Time: 10:25 PM
 */

class conn_to_db {
function __construct(){
    $mysql_host = 'localhost';
    $mysql_user = 'markra';
    $mysql_password = 'iequiNg6ohchietu';
    $mysql_db = 'markra';
    if(!@$mysql = mysql_connect($mysql_host, $mysql_user, $mysql_password) || !@mysql_select_db($mysql_db)){
        die('conn error');
    }
    mysql_select_db($mysql_db);
}
    function getUsers(){
        $query ="select * from users";
        $result = mysql_query($query);

        return $result;
    }



} 