<?php 

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$parish = $_POST['parish'];
$role = $_POST['role'];

if (!empty($firstname) || !empty($lastname) || !empty($username) || !empty($password) || !empty($parish) || !empty($role)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "roadnet";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else {
        $SELECT = "SELECT username From employee Where username = ? Limit 1";
        $INSERT = "INSERT into employee (fname, lname, username, password, parish, role) values (?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($username);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0) {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssss", $firstname, $lastname, $username, $password, $parish, $role);
            $stmt->execute();
            //echo '<script type="text/javascript">  window.onload = function(){
              //  alert("New user added");
             // }</script>';
            //echo '<script>alert("Welcome to Geeks for Geeks")</script>';
            //echo "User has been created successfully.";
            header("location: crud.php");
            exit();
        }
        else {
            echo "There is already a staff with that username.";
        }

        
        $stmt->close();
        $conn->close();
    }
}
else {
    echo "All fields are required";
    die();
}
?>