
<html>
    <head>
    <title> Area of Square Using PHP Programing Language </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            text-align: center;
        }
    </style>
    </head>
    <body>
        <!-- navbar -->
         <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Math</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            2 Dimension
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="square.php">square</a></li>
            <li><a class="dropdown-item" href="rectangle.php">Rectangle</a></li>
            <li><a class="dropdown-item" href="circle.php">Circle</a></li>
            <li><a class="dropdown-item" href="triangle.php">Triangle</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            3 Dimension
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="cube.php">Cube</a></li>
            <li><a class="dropdown-item" href="block.php">Block</a></li>
            <li><a class="dropdown-item" href="#">Cylinder</a></li>
            <li><a class="dropdown-item" href="#">Ball</a></li>
            <!-- <li><a class="dropdown-item" href="#">Circle</a></li> -->
          </ul>
        </li>

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

        <!-- square -->
      <h2> Area of Square </h2><br>
<!-- picture -->
<figure><img src="" alt=""></figure>
      <form method ="post">
        Give a the value of side <input type ="text" name="side"/> <br> <br>
        <button type="submit" title="Click here to compute value"> Compute </button>
         </form>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

         </body>
         </html>

         <?php
             
               if ($_POST) {

                   $side = $_POST['side'];
                  

                   $compute = ($side * $side);
                   

                   echo "The Area value of Square with side = $side is $compute.";
                   

               }
   
             
        
     