<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Compiled and minified CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Custom CSS -->
  <link type="text/css" rel="stylesheet" href="css/main.css" />
  <title>GROUP 1</title>
  <style >
    body{
    background-image: url("img/triangle.png");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        font-size: 15px;
        background-color: #007acc;
        color: white;
        text-align: center;
        height: 7rem;
        margin-top:1rem;
    }
    .success, .error {
      color: white;
      padding: 5px;
      margin: 5px 0 15px 0;
    }

    .success {
      background: blue;
    }
    .error {
      background: red;
    }
  </style>
</head>
<body>

  <!-- Navigation bar -->
<nav class="blue lighten-1">
    <div class="nav-wrapper">
      <a href="home.html" class="brand-logo"><strong>ODMS</strong></a>
      <a href="#" data-target="slide-out" class="button-collapse show-on-large right sidenav-trigger">
        <i class="material-icons">menu</i>
      </a>
      <ul class="right hide-on-med-and-down">
        <li >
          <a href="home.html">HOME</a>
        </li>
        <li>
          <a href="dashboard.html">DASHBOARD</a>
        </li>
        <li class="active">
          <a href="upload.php">UPLOAD</a>
        </li>
        <li>
          <a href="view.html">VIEW</a>
        </li>
      </ul>
    </div>
</nav>

  <div class="container">
    <h3 class="grey-text text-darken-4">Upload file</h3><hr>
     <form id="pdf-form">
       <div class="input-field">
         <input type="text" id="classification">
         <label for="classification">Classification</label>
       </div><br>
       <div class="input-field">
         <input type="file" id="pdf">
       </div><br>
       <div class="input-field">
         <input type="text" id="date" value="<?php date_default_timezone_set("Asia/Manila"); echo date("Y-m-d H:i:s");?>" disabled >
         <label for="date">Date</label>
       </div>
       <input type="submit" class="btn black right">
     </form><br><br><br><br>
     <hr><hr>
     <table class="striped">
       <thead>
         <tr>
           <th>Classification</th>
           <th>File Name</th>
           <th>Date</th>
           <th></th>
         </tr>
       </thead>
       <tbody id="pdf-list">
         
       </tbody>
     </table>
  </div><br><br>


  <!-- Footer -->
  <footer class="section blue lighten-1 white-text center footer">
    <p>WEB DEVELOPMENT BATCH 2<br>
    GROUP 1 &copy; 2021</p><br>
  </footer>


   <!-- Jquery CDN -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

   <script src="js/app.js"></script>
</body>
</html>