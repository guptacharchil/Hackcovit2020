<?php
    include("sessionStart.php");
?>
<!DOCTYPE HTML>
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
    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script src="TimeTest.js"></script>.
    <script type="text/javascript"> 
   function tab()
        {
            alert("Tab is Monitored");
        }
    </script>
    <script>
    var defaultTitle = document.title;
// subscribe to visibility change events
        
document.addEventListener('visibilitychange', function (){
    // fires when user switches tabs, apps, goes to homescreen, etc.
    document.title=document.visilityState;
    
   if( document.title !== 'visible')
        {
            alert("'You are caught in tab switching'");
            window.location="TestLink.php";
            
        }
    
});
        
        function myFunction() {
  var x = document.getElementsByName("q1").checked;
  document.getElementsByClassName("page-link").style.backgroundColor = "lawngreen";
}
    </script>
    <script>
        var video = document.getElementById('video');
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
 navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
 video.src = stream;
 video.play();
 });
}
    </script>
    <style>
    .header
        {
            width: 100%;
            height: 20%;
            background-image: radial-gradient(#cc66cc,#993399);
            color: antiquewhite;
            font-size: 30px;
            
        }
        .foot
        {
            width: 100%;
            height: 3%;
            background-color: #ac39ac;
            color:white;
        }
        .rules
        {
            margin-right: 15%;
            margin-left: 15%;
            
            padding-bottom: 18%;
            margin-bottom: 2%;
            border: 1px solid black;
            background-color: aquamarine;
        }
        .p
        {
           text-align:center; 
        }
        .row:after
        {
            content: "";
            clear: both;
            display: table;
        }
        .column1
        {
            float: left;
            width: 25%;
            height:auto;
             padding: 25px;
        }
        .column2
        {
            float: left;
            width: 45%;
            height:70%;
            padding-bottom: 100px;
            border: 1px solid black;
        }
        .column3
        {
            float: left;
            width: 20%;
            height:70%;
            
        }
        video
        {
            border: 1px solid black;
            width: 140%;
            height: 50%;
        }

    </style>
    </head>
    <body onload="tab()">
    <div class="header">
        <center><strong><h1>Welcome to the Series of Test</h1></strong></center>
        </div>
        <div class="row">
            <div class="column1"><center>Question No.
                <ul class="pagination">
  <li class="page-item"><a class="page-link" href="#" id="q1">Q01</a></li>
  <li class="page-item"><a class="page-link" href="#" id="">Q02</a></li>
  <li class="page-item"><a class="page-link" href="#" id="">Q03</a></li>
  <li class="page-item"><a class="page-link" href="#">Q04</a></li>
  <li class="page-item"><a class="page-link" href="#">Q05</a></li>
</ul>
                <ul class="pagination">
  <li class="page-item"><a class="page-link" href="#" >Q06</a></li>
  <li class="page-item"><a class="page-link" href="#">Q07</a></li>
  <li class="page-item"><a class="page-link" href="#">Q08</a></li>
  <li class="page-item"><a class="page-link" href="#">Q09</a></li>
  <li class="page-item"><a class="page-link" href="#">Q10</a></li>
</ul>
                <ul class="pagination">
  <li class="page-item"><a class="page-link" href="#" >Q11</a></li>
  <li class="page-item"><a class="page-link" href="#">Q12</a></li>
  <li class="page-item"><a class="page-link" href="#">Q13</a></li>
  <li class="page-item"><a class="page-link" href="#">Q14</a></li>
  <li class="page-item"><a class="page-link" href="#">Q15</a></li>
</ul>
                <ul class="pagination">
  <li class="page-item"><a class="page-link" href="#" >Q16</a></li>
  <li class="page-item"><a class="page-link" href="#">Q17</a></li>
  <li class="page-item"><a class="page-link" href="#">Q18</a></li>
  <li class="page-item"><a class="page-link" href="#">Q19</a></li>
  <li class="page-item"><a class="page-link" href="#">Q20</a></li>
</ul>
                <ul class="pagination">
  <li class="page-item"><a class="page-link" href="#" >Q21</a></li>
  <li class="page-item"><a class="page-link" href="#">Q22</a></li>
  <li class="page-item"><a class="page-link" href="#">Q23</a></li>
  <li class="page-item"><a class="page-link" href="#">Q24</a></li>
  <li class="page-item"><a class="page-link" href="#">Q25</a></li>
</ul>
                </center>
            </div>
            <div class="column2">Q.1 The Correct Answer of 2x+5=7 find x?<br>
                <input type="radio" name="q1" onclick="myFunction()">3<br>
                <input type="radio" name="q1" onclick="myFunction()">2<br>
                <input type="radio" name="q1" onclick="myFunction()">10<br>
                <input type="radio" name="q1" onclick="myFunction()">12<br>
                <br>
                <br>
                <br>
            <center>
                <button type="button" class="btn btn-secondary">Previous</button>
                <button type="button" class="btn btn-secondary" onclick="q2.php">Next</button>
                </center></div>
            <div class="column3">Your Cam<br>
            <video id="video" autoplay></video></div>
        </div>
        
        <div class="foot">
           <center>Test is tab Monitored.  Time: <span id="sofar">0</span></center>
        </div>
    </body>
</html>