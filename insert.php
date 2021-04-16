<?php 

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$parish = $_POST['parish'];
$role = $_POST['role'];

if (!empty($firstname) || !empty($lastname) || !empty($username) || !empty($password)  || !empty($email) || !empty($parish) || !empty($role)) {
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
        $SELECT2 = "SELECT email From employee Where email = ? Limit 1";
        $INSERT = "INSERT into employee (fname, lname, username, password, email, parish, role) values (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($username);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        $stmt2 = $conn->prepare($SELECT2);
        $stmt2->bind_param("s", $email);
        $stmt2->execute();
        $stmt2->bind_result($email);
        $stmt2->store_result();
        $rnum2 = $stmt2->num_rows;

        if ($rnum==0) {
            $stmt->close();

            if($rnum2==0) {
                $stmt2->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssssss", $firstname, $lastname, $username, $password, $email, $parish, $role);
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
            echo "This email is not unique.";
             }
        }
        else {
            echo "There is already a staff with that username.";
        }

        
        
        $conn->close();
    }
}
else {
    echo "All fields are required";
    die();
}
