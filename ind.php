<?php
$insert = false;
if(isset($_POST['f1'])) {

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("Connection failed due to" . mysqli_connect_error());}
// }else{
//     echo "Successfully connected";
// }
$First_name = $_POST['f1'];
$Phone = $_POST['l1'];
$Psassword = $_POST['Password'];
$Email = $_POST['e1'];
    $sql =  "INSERT INTO `sign`.`sign` (`Name`, `Email`, `Phone`, `Pass`, `d&t`) VALUES ('$First_name', '$Email', '$Phone', '$Psassword', current_timestamp());";
    // echo $sql;

    if($con->query($sql) == true) {
       // echo "Insert into";
       $insert = true;
        
    }else{
        echo "ERROR: $sql <br> $con->error";
        
    }
    $con->close();

}

?>  

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Nirmal Satva Sign-in</title>

    <link rel="icon" href="favicon.ico">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Favicons -->

    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
        <form action="ind.php" method="post">
            <img class="mb-4" src="logo.png" alt="" width="72" height="70">
            <h1 class="h3 mb-3 fw-normal">Sign-in</h1>

            <div class="form-floating">
                <input type="text" class="form-control top" placeholder="Name" autofocus name="f1" required>
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating">
                <input type="tel" class="form-control middle" placeholder="Phone" name="l1" required maxlength="10">
                <label for="floatingInput">Phone no.</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control middle" id="floatingInput" placeholder="name@example.com" name="e1" required >
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control bottom" id="floatingInput" placeholder="password" name="Password" required maxlength="10">
                <label for="floatingInput">Password</label>
            </div>

           <?php
           $GLOBALS = $insert;
           if ($insert == true){
            echo "<p class='submitMsg'>Thank you for signin. Congratulations to be a part of Nirmal Satva Customers</p>";
           }


?>

            <button class="w-100 btn btn-lg btn-warning" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy;Copyrights by Nirmal Satva</p>
        </form>
    </main>



</body>

</html>