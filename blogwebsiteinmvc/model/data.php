<?php
class dataclass{
    function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "blog";
        $this->connect = mysqli_connect($servername, $username, $password, $database);
    }
    function dataforhome(){
        $sql_for_home = "SELECT * FROM `blog1`";
        $result_for_home = mysqli_query($this->connect, $sql_for_home);
        return $result_for_home;
    }
    function datafornav(){
        $sql_for_nav = "SELECT * FROM `blog1` WHERE `blog1`.`fornav` = 'yes'";
        $result_for_nav = mysqli_query($this->connect, $sql_for_nav);
        return $result_for_nav;
    }
    function dataforsingle($cat){
        $sql_for_single = "SELECT * FROM `blog1` WHERE `blog1`.`type` = '$cat'";
        $result_for_single = mysqli_query($this->connect, $sql_for_single);
        return $result_for_single;
    }
    function dataforsingleonepageblog($title){
        $sql_single_one_page_blog = "SELECT * FROM `blog1` WHERE `blog1`.`title` = '$title'";
        $result_one_page_blog = mysqli_query($this->connect, $sql_single_one_page_blog);
        return $result_one_page_blog;
    }
}
?>