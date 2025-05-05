<!doctype html>
<html lang="en">

<head>
  <?php
    session_start()
    ?>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Bootstrap Example</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid styler-css">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse styler-buttons" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pages
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="loops.php">loops</a></li>
              <li><a class="dropdown-item" href="operators.php">operators</a></li>
              <li><a class="dropdown-item" href="functions.php">functions</a></li>
              <li><a class="dropdown-item" href="datatypes.php">datatypes</a></li>
              <li><a class="dropdown-item" href="conditionals.php">conditionals</a></li>
              <li><a class="dropdown-item" href="calendar.php">calendar</a></li>
              <li><a class="dropdown-item" href="calculator.php">calculator</a></li>
              <li><a class="dropdown-item" href="arrays.php">arrays</a></li>
              <li><a class="dropdown-item" href="contacts.php">Contacts</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
     $_Session['username']="Franklin";
    echo $_Session['username'];
    if (!isset($_Session['username'])){
      echo " You are not logged in";
     } else{
      echo " You are logged in";
     } 
     
     ?>
  <br>
</body>


</html>