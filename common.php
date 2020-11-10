<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $user = 'Imanbek';
    $pass = 'remix';
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=pizza_store', $user, $pass);
        foreach($dbh->query('SELECT * from customers') as $row) {
            print_r($row);
        }
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>
</body>
</html>