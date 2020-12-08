<?php   
    $server = "localhost";
    $username = "root";
    $password = "safu05";
    $dbname = "students";

    $conn = mysqli_connect($server,$username,$password,$dbname);

        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $query = "insert into feedbackers(name,email,message) values('$name','$email','$message')";
            $run = mysqli_query($conn,$query);
            if($run){
            echo "Feedback Submitted";
            }
            else{
            echo "Error!! not submitted";
            }
        }else{
             echo "All fields are required";
        }
    
?>
