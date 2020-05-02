
<html>
<head>
    <title>
        Login: Online Exam</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        .head{
            width: 100%;
            height: 15%;
            background-image: radial-gradient(#002699,#0040ff,#3366ff);
            color: white;
            font-size: 40px;
            padding-top: 30px;
        }
    </style>
    </head>
    
    <body>
        <div class="head">
        <center><strong>Online Exam Login</strong></center>
        </div>
        <div class="container">
  <h2>Login</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="usr">Username:</label>
      <input type="text" class="form-control" id="usr" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
        
    </body>
</html>
