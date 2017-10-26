<?php 
    session_start();
    
?>


<!doctype html>
<html lang="en">
<head>
    <title>Cars</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!--<link rel="stylesheet" href="style.css">-->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <br/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4"><a class="btn btn-info" href="statistics.php"><?php echo $_SESSION['username']?></a>&nbsp<a class="btn btn-info" href="login.php" >Logout</a></div>
        </div>

        <div class="row">
            
            <div class="col-md-2"></div>
            <div class="col"><h1>Dice game</h1></div>
        </div>
        <div class="row">
            
            <div class="col-md-3"></div>
            <div class="col"><h3>roll a dice, two matching dices - 10 ct win. </h3></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col">
                <img src="images/1.png" alt="Mountain View">
            </div>
            <div class="col">
            </div>
            <div class="col">
                <img src="images/1.png" alt="Mountain View">
            </div>
            <div class="col">
            </div>
             <div class="col">
                <img src="images/1.png" alt="Mountain View">
            </div>
             <div class="col-md-2">
            </div>
        </div>
        <div class="row" id="">
            <div class="col-md-5"></div>
            <div class="col btn btn-primary btn-lg" id="newGame" >New Game</div>
            <div class="col-md-5"></div>
        </div>
        <div class="row" id="">
            <div class="col-md-5"></div>
            <div class="col btn btn-primary btn-lg" id="rollDice" style="display: none;" >Roll dice</div>   
            <div class="col-md-5"></div>
        </div>
        

    </div>
    
<script src="js/app.js"></script>
</body>
</html>