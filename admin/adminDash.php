<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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

        .btnn .text {
            background: #00071d;
            border: 0.5px solid grey;
            padding: 3px;
            width: 300px;
            color: white;
        }

        input::placeholder {
            padding: 2px 5px;
            opacity: 0.5;
        }

        .submit {
            border-radius: 18px;
        }

        @font-face {
            font-family: "Space Age";
            src: url(../assets/fonts/spaceage.ttf);
        }

        .btnn {
            font-family: "Space Age";
            font-size: 1.1em;
        }
    </style>
</head>

<body>
<?php 
        session_start();
        if( $_SESSION['login_user']) {
        } else {
            echo "<script>window.location='adminDash.php';</script>";
        }
    ?>
    <div class="name">
        <img src="../assets/images/name.png" alt="">
    </div>
    <div class="btnn text-white my-5">
    <form action="token.php">
        <div>
            <button type="submit" class="btn btn-dark ">GENERATE Token</button>
        </div>
    </form>
    <!-- <form action="./results.php" method="post">
            <div class="row justify-content-center mt-5 mb-5">
                <button type="submit" class="btn btn-dark borderbtn ">GENERATE RESULT</button>
            </div>
        </form> -->

    <div class="row justify-content-center mt-3">
        <a type="submit" class="btn formbtn1 btn-info" href="./viewcodes.php">View Codes</a>
    </div>
    </div>

    <?php

include("../model/config.php");
$sql = "SELECT * FROM user ";

if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){

?>
    <div class=" container">
        <div class="justify-content-center">
            <table class="table text-white bg-secondary" style="border-radius: 8px;">
                <thead>
                    <tr class="bg-light">

                        <th>Id</th>
                        <th>Name</th>
                        <th>College</th>
                        <th>Mobile</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
         
        while($row = mysqli_fetch_array($result)){ ?>
                    <tr>

                        <td> <?php echo $row['user_id'] ?> </td>
                        <td> <?php echo $row['user_name'] ?> </td>
                        <td> <?php echo $row['user_college'] ?> </td>
                        <td> <?php echo $row['user_phone'] ?> </td>
                        <td> <?php echo $row['user_mail'] ?> </td>
                    </tr>
                    <?php } ?>


                </tbody>
            </table> <?php } }?>
        </div>
    </div>






    <div class="name text-white">
        <p class="text-center">
            In association with <br>
            <b>Priyadarshani J.L. College of Engineering</b>
        </p>
    </div>
</body>
<script src="../assets/bootstrap/jquery/dist/jquery.min.js"></script>
<script src="../assets/bootstrap/dist/js/bootstrap.min.js"></script>

</html>