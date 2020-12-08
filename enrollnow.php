<?php   
    $server = "localhost";
    $username = "root";
    $password = "safu05";
    $dbname = "students";

    $conn = mysqli_connect($server,$username,$password,$dbname);

        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['Phoneno'])&& !empty($_POST['Subject'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phoneno = $_POST['Phoneno'];	
            $subject = $_POST['Subject'];

            $query = "insert into studentregistration(Name,Email,Phoneno,Subject) values('$name','$email','$phoneno','$subject')";
            $run = mysqli_query($conn,$query);
            if($run){
            echo "Thank you for your response we will reach you soon";
            }
            else{
            echo "Error!! not submitted";
            }
        }else{
             echo "All fields are required";
        }
?>

