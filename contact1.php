<!-- INSERT INTO `carrer` (`name`, `email`, `contact`, `msg`) VALUES ('Army bhadaja', 'army@gmail.com', '9328573535', 'My mother is my my world'); -->


<?php
$insert = false;
if(isset($_POST['name'])){
     
     $server = "localhost";
     $username = "root";
     $password = "";    

     $con = mysqli_connect($server, $username, $password);

        if(!$con){
            die("connection to this database failed due to" . mysqli_connect_error());
        }
        // echo "Success connecting to the db";

         $name  =$_POST['name'];
         $email =$_POST['email'];   
         $phone =$_POST['phone'];   
         $msg  =$_POST['msg'];  
         $sql ="INSERT INTO `vivide`.`contact` ( `name`, `email`, `phone`, `msg`) VALUES ( '$name', '$email', '$phone', '$msg');";
        // echo $sql;
         if($con->query($sql) == true){
         //   echo "Successfully inserted";
           $insert=true;
        }
        else{
            echo "ERROR:$sql <br> $con->error";
        }

            $con->close();
    }
         ?>