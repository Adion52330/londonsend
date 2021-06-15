<?php
if (isset($_POST['frst'])) {
    # code...
    $servername = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($servername, $username, $password);

    if (!$con) {
        # code...
        die("Sorry unable to connect because of" . mysqli_connect_error());
    }

    // echo "success";

    $firstname = $_POST['frst'];
    $lastname = $_POST['lst'];
    $school = $_POST['scl'];
    $class = $_POST['num'];
    $addr = $_POST['adrs'];
    $email = $_POST['em'];
    $other = $_POST['otr'];

    $sql = "INSERT INTO `london_from_adion`.`data` (`First Name`, `Last Name`, `School Name`, `Class`, `Address`, `Gmail`, `Other`) VALUES ('$firstname', '$lastname', '$school', '$class', '$addr', '$email', '$other')";

    if ($con->query($sql) == true) {
        # code...
        echo "<h1>Successfully Sent to the Adion Foreign Services</h1>";
    } else {
        echo "An error occurred<br /> $sql <br/> $con->error";
    }

    $con->close();
}
