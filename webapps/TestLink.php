<?php
    include("sessionStart.php");
?>
<html>
    <head>
    <title> Online Exam: Test Series
        </title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
$(document).ready(function(){
  $(".btn1").click(function(){
    $("#a1").toggle();
  });
    $(".btn2").click(function(){
    $("#a2").toggle();
  });
    $(".btn3").click(function(){
    $("#a3").toggle();
  });
    $(".btn4").click(function(){
    $("#a4").toggle();
  });
    $(".btn5").click(function(){
    $("#a5").toggle();
  });
    $(".btn6").click(function(){
    $("#a6").toggle();
  });
    $(".btn7").click(function(){
    $("#a7").toggle();
  });
    
});
                

</script>
    </head>
    <style>
    .header
        {
            width: 100%;
            height: 15%;
            background-image: radial-gradient(#cc66cc,#993399);
            color: antiquewhite;
            font-size: 30px;
            padding-top: 20px;
        }
        .container1{
            padding-left: 5%;
        }
    </style>
<body>
    <div class="header">
      <center><strong><h1>Welcome to the Series of Test</h1></strong></center>
    </div>
    
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Scores</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link " href="#" >
        Lectures
      </a>
    </li>
  </ul>
</nav>
    <div class="container1">
        <ul type="disc"><br>
            <li><a href="Test1.php"> Test 1</a>&emsp;<button class="btn1" >Time</button><br><p id="a1">Time: 4:00pm -</p><br></li> 
            
            <li><a href="#"> Test 2</a>&emsp;<button class="btn2" >Time</button><br>
            <p id="a2">Time: 4:00pm -</p><br></li> 
            <li><a href="#"> Test 3</a>&emsp;<button class="btn3" >Time</button><br><p id="a3"> Time: 4:00pm -</p><br></li> 
            <li><a href="#"> Test 4</a>&emsp;<button class="btn4" >Time</button><br><p id="a4">Time: 4:00pm -</p><br></li> 
            <li><a href="#"> Test 5</a>&emsp;<button class="btn5" >Time</button><br><p id="a5">Time: 4:00pm -</p><br></li> 
            <li><a href="#"> Test 6</a>&emsp;<button class="btn6" >Time</button><br><p id="a6">Time: 4:00pm -</p><br></li> 
            <li><a href="#"> Test 7</a>&emsp;<button class="btn7" >Time</button><br><p id="a7">Time: 4:00pm -</p><br></li> 
            
    </ul>
    </div>
    </body>
</html>