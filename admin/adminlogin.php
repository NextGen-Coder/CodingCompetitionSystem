<?php 
    session_start();
    if( isset($_SESSION['login_user']) && isset($_SESSION['admin'])) {
        echo "<script>window.location='adminDash.php';</script>";
    }
    else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css">
    <style>
        body {
            background: #00071d;
        }

        .name {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btnn {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .btnn .text{
            background: #00071d;
            border: 0.5px solid grey;
            padding: 3px;
            width: 300px;
            color: white;
        }
        input::placeholder{
            padding: 2px 5px;
            opacity: 0.5;
        }
        .submit{
            border-radius: 18px;
        }
        @font-face {
            font-family: "Space Age";
            src: url(../assets/fonts/spaceage.ttf);
        }
        .btnn{
            font-family: "Space Age";
            font-size: 1.1em;
        }
    </style>
</head>
<body>    
    <div class="name">
        <img src="../assets/images/name.png" alt="">
    </div>
    <div class="btnn text-white my-5">
    
        <form action="../controller/AdminLoginController.php" method="POST" class="">
            ADMIN ID <br>
            <input type="text" name="admin" class="text" placeholder="ADMIN ID" required> <br><br>
            PASSWORD <br>
            <input type="text" name="pass" class="text" placeholder="PASSWORD" required><br>

            <div class="row justify-content-center">
                <input type="submit" class="mt-4  btn bg-danger text-white submit px-5" value="LOGIN">
            </div>
        </form>
    </div>
    <div class="name text-white">
        <p class="text-center">
            In association with <br>
            <b>Priyadarshini J.L. College of Engineering</b>
        </p>
    </div>
</body>
<script src="../assets/bootstrap/jquery/dist/jquery.min.js"></script>
<script src="../assets/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
 <?php } ?>