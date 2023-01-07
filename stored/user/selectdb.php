<?php
 

if(!isset($_SESSION['user'])){
  header("location:../not.html",  true); 
  die("");
}

