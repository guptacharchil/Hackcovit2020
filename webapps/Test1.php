<?php
    include("sessionStart.php");
?>
<html>
<head>
    <title>
    Test 1
    </title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="time.js">
    
    </script>
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
        .foot
        {
            width: 100%;
            height: auto;
            background-color: #ac39ac;
            color:white;
        }
        .rules
        {
            margin-right: 15%;
            margin-left: 15%;
            margin-top: 2%;
            padding-bottom: 18%;
            margin-bottom: 2%;
            border: 1px solid black;
            background-color: aquamarine;
        }
        .p
        {
           text-align:center; 
        }
    </style>
    </head>
    <body>
    <div class="header">
        <center><strong><h1>Welcome to the Series of Test</h1></strong></center>
        </div>
        <div class="rules">
            <h3>Online exam Instructions</h3><br>
            <h6>Read the instructions Carefully</h6>
            <p class="p"><em>After 30 seconds The Test page will appear</em></p>
            <ul>
                <li>With jQuery, you can hide and show</li>
                <li>With jQuery, you can hide and show</li>
                <li>With jQuery, you can hide and show</li>
                <li>With jQuery, you can hide and show</li>
            </ul>
            
        </div>
        <div class="foot">
           <center> Time: <span id="sofar">0</span></center>
        </div>
    </body>
</html>