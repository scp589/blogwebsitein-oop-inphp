<?php
class mainclass{
    function __construct(){ // thsi si contructor it is run automatic when we make the object of class
        $this->cat = "";// here we difine the veruable to catch get request value of categary
        if(isset($_GET['cat'])){ // here we cheking the if we have get request in categary  or not
           $this->cat = $_GET['cat']; // updating the cat veriable value with get request
        }
        $this->title = ""; // here we difine the variable to catch get request of title
        if(isset($_GET['title'])){// here we checking the if we have get request in title or not
            $this->title = $_GET['title']; // updating the title veriable value with get request
        }
        include 'model/data.php'; // includinh the file where we have all query to related database 
        $this->obj_for_data = new dataclass(); // making the object of model files class
    }
    function home(){ // this function will work like a single web page 
        $result_for_home = $this->obj_for_data->dataforhome();// here we got all data for home
        $result_for_nav = $this->obj_for_data->datafornav();// here wegot all data for navbar
        include 'view/nav.php';
        include 'view/home.php';
    }
    function single(){// this function will work like a single web page 
        $cat = $this->cat;// here we put the valu of cat construct veriable in asimple veriable
        $result_for_nav = $this->obj_for_data->datafornav();// here we got all data for navbar
        $reslt_for_single = $this->obj_for_data->dataforsingle($cat);// here we got all data for single page and passing the variable for query in data.php model
        include 'view/nav.php';
        include 'view/single.php';
    }
    function forsingleblogonepage(){// this function will work like a single web page 
        $title = $this->title; // here we put the value of title construct variable in simple php variable 
        $result_for_nav = $this->obj_for_data->datafornav(); // here we got the all data for navbar
        $result_one_page_blog = $this->obj_for_data->dataforsingleonepageblog($title);// here we got the all data for onepage an passing the titile variable for query in data.php model
        include 'view/nav.php';
        include 'view/onepage.php';
    }
}
?>