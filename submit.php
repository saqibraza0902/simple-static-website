<?php 
$name = filter_input(INPUT_POST, "name");
$email = filter_input(INPUT_POST, "email");
$phone = filter_input(INPUT_POST, "phone");
$guests = filter_input(INPUT_POST, "guests");
$date = filter_input(INPUT_POST, "date");
$time = filter_input(INPUT_POST, "time");
$message = filter_input(INPUT_POST, "message");

if(!empty($name)){
    if(!empty($email)){
        if(!empty($phone)){
            if(!empty($guests)){
                if(!empty($date)){
                    if(!empty($time)){
                        if(!empty($message)){

                            $host = "localhost";
                            $dbusername = "root";
                            $dbpassword = "";
                            $dbname = "project";

                            $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
                            if(mysqli_connect_error()){
                                die('Connect Error ('.mysqli_connect_errno().')'
                                .mysqli_connect_error());
                            }
                            else{
                                $sql = "INSERT INTO resturent (name, email, phone, guests, date, time, message)
                                values ('$name', '$email', '$phone', '$guests', '$date', '$time', '$message')";
                                if($conn->query($sql)){
                                    echo "new recored inserted";
                                }else{
                                    echo "Error" . $sql ."<br>" . $conn->error;
                                }$conn->close();
                                
                            }

                        } else{
                            echo ("enter message");
                        }
                    } else{
                        echo ("enter time");
                    }
                } else{
                    echo ("enter date");
                }
            } else{
                echo ("enter guests");
            }
        } else{
            echo ("enter phone");
        }
    }else{
        echo ("enter email");
    }
}else {
    echo ("enter name");
}

?>