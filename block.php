<html>

<head>
    <title> Area of Square Using PHP Programing Language </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
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

                    <li><a class="dropdown-item" href="home.php">Back</a></li>

                    <!-- <li><a class="dropdown-item" href="#">Circle</a></li> -->
                </ul>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- square -->
    <h2> Area of Block </h2><br>
    <!-- picture -->
    <figure><img src="" alt=""></figure>
    <form method="post">
        Give a the value of width <input type="text" name="width" /> <br> <br>
        Give a the value of length <input type="text" name="length" /> <br> <br>
        Give a the value of heigth <input type="text" name="heigth" /> <br> <br>

        <button type="submit" title="Click here to compute value"> Compute </button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>

<?php

if ($_POST) {

    $width = $_POST['width'];


    $length = $_POST['length'];
    $heigth = $_POST['heigth'];

    // compute of block
    $compute = (2*($width * $length + $width * $heigth + $length * $width));


    echo "The Area value of rectangle with width = $width , heigth = $heigth and length = $length is $compute.";
}
