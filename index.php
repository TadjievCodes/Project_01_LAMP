<!-- 
	File:    index.php Pizza Project LAMP01
    Purpose: Application home page
			 Welcome message and Instructions how to take the survey
	Authors:  Adil Islambekov,
               Serhii Vilkun,
			    Tadjiev Mukhammadkhon,
                  Wander Cepeda
-->

<?php
    // start session
    session_start();
    
    // create the email session variable if not already created
    if(!isset($_SESSION["email"])){
        $_SESSION["email"] = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Project PHP LAMP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
     
     <div class="container">
        <div class="main">
        <h1>
        <?php
            // this draws the email text input box and fills it in with the email that was previously entered
            if(isset($_SESSION["email"])){
                echo "Welcome back to the pizza Web App again, <font style='color:#e5383b'>" . $_SESSION["email"] . "</font>!";
            }
            else{
                echo 'Welcome to the Pizza Ordering Web App';
            }
        ?>
        </h1>
        <h5>This Web app is pretty perfect for ordering pizza</h5>
               
        <form action="orderPizza.php">
            <label for="email">Email:</label>
            <?php
                echo "<input type='email' id='email' name='email' value='" . $_SESSION["email"] . "'/>";
            ?>
            <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
            <button type="submit" class="btn btn-primary">Begin</button> 
            
        </form>
        </div>    
    </div> 
  
      

</body>
<!-- bootstrap dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
<!-- bootstrap dependencies -->
</html>

