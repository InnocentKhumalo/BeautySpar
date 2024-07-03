<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Bookings</title>
</head>
<body>
        <?php
 
 $servername = 'localhost';
 $username = 'root';
 $password = 'password';
 $dbname = 'morena';

        $conn = mysqli_connect("localhost", "root", "password", "morena");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
       $clientname = $_REQUEST['clientname'];
    $email = $_REQUEST['email'];
    $clientnumber = $_REQUEST['clientnumber'];
    $serviceselected = $_REQUEST['serviceselected'];
    $datetime = $_REQUEST['datetime'];
    $comment = $_REQUEST['comment'];
         
        // Performing insert query execution
        
        $sql = "INSERT INTO bookings (clientname, email, clientnumber, serviceselected, booking_time, comment)
        VALUES ('$clientname', '$email', '$clientnumber', '$serviceselected', '$datetime', '$comment') ";
         
        if(mysqli_query($conn, $sql)){
            echo '<h2 style="text-align: center;">Appointment Made Successfully.</h2>'; 
 
            echo nl2br("<h5 style='text-align: center; padding: 15px;'>Appointment Details:</h5>
            <p style='text-align: center; padding: 15px;'>\n$clientname\n $email\n $clientnumber\n </p> "
            . " <p style='text-align: center; padding: 15px;'>$serviceselected\n $datetime\n $comment</p>");
            echo ('<h1 style="text-align: center; color: RED;">THANK YOU!!!</h1>');
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
</body>
</html>