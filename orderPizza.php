  
<?php
    // open the session first of all
    session_start();
    // get the submitted email and assign it to the session email variable
      if(isset($_GET["email"])){
        $_SESSION["email"] = $_GET["email"];
    }

?>


<html>
    <head>
        <title>Pizza Project PHP LAMP</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="main">
                <h1>
                    <?php
                        // this targets the email textbox and fills it in with the email that was previously entered
                        if(isset($_SESSION["email"])){
                            echo "Coming soon, <h3 class='warnRed'>" . $_SESSION["email"] . "</h3>";
                        }
                        else{
                            echo 'Coming soon!';
                        }
                    ?>
                </h1>
                <!-- <a href="index.php">Go back</a> -->
              
              <!-- Special in built PHP method  htmlspecialchars($_SERVER['HTTP_REFERER']); in order to go back to the previous page where is the form-->
 <!-- use the HTTP_REFERER, sanitize it, and echo it out via PHP below--> 
                   <?php
                       $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                       echo "<a href='$url' style='color:white;'>Back to the Form</a>"; 
                  ?>


            </div>
        </div>
    </body>
</html>