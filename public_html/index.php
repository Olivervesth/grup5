<?php
include_once("db.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<div id=nav>
    <div id=navwrapper>
        <a href="/?page=home">Home</a>
        <a href="/?page=about">About us</a>
    </div>
</div>

<div style="position: relative;
margin: auto;">

  <?php
  if(isset($_GET['page'])){
    
    if($_GET['page'] == 'home'){
      include_once('home.php');
    }elseif($_GET['page'] == 'about'){
      include_once('about.php');
    }
  }
  ?>

</div>
<style>
    body{
        background-color:#202830;
    }
    #navwrapper a:hover{
        color:#43caff;
    }
    #navwrapper a{
        padding:15px;
        margin-right:40px;
        text-decoration:none;
        color:white;
        font-weight:bold;
    }
    #navwrapper{
        display:flex;
    }
    #nav{
    background-color: #01497e;
    min-height:50px;
    width:100%;
}
</style>



