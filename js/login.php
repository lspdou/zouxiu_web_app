<?php
	
	doPOST();
	
	
	function doPOST(){
        session_start();
        if(isset($_SESSION["user"])){
        	if($_SESSION["user"]==null) {
        		echo 0;
            }else {
                echo 1;
            }
        }else{
            $_SESSION["user"] = $_POST["user"];
            echo 2;
        }
    }
   
    
?>