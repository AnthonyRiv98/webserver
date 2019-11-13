<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="Stylesheet.css">

        <div>
            Hello <?=htmlspecialchars($_POST['fname']) . " " . htmlspecialchars($_POST['lname'])?>
        </div>

            
        <?php if ((int)($_POST['eth']) == 1 and (int)($_POST['usb3']) == 1 and (int)($_POST['pwr']) == 1) {
            $chk = 4; ?>
            you have a raspberry pi 4 model
        <?php } elseif ((int)($_POST['eth']) == 0 and (int)($_POST['usb3']) == 0 and (int)($_POST['pwr']) == 0) {
            $chk = 3; ?>
            you have a raspberry pi 3 A+ model
        <?php } elseif ((int)($_POST['eth']) == 1 and (int)($_POST['usb3']) == 0 and (int)($_POST['pwr']) == 0) {
            $chk = 2; ?>
            you have a raspberry pi 3 B+ model
        <?php } ?>

        </*?php
            $servername = "localhost";
            $username = "php";
            $password = "Ant1998304";
            $dbname = "raspPI";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

        $sql = "SELECT * FROM PI where id = {$chk}";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                $row = mysqli_fetch_assoc($result) 
                    echo "type: " . $row["type"]. " - Usb ports: " . $row["usb"]. " - Ethernet: " . $row["ethernet"]. " - Power connector: " . $row["power"]. " - HDMI port: " . $row["HDMI"].
                
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
        ?*/>

    </head>