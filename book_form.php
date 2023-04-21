<?php
// echo "<pre>";
// print_r($_POST);die;

$connection = mysqli_connect('localhost', 'root', 'root', 'book_db');

if(mysqli_connect_error()){
    echo "not connected : " . mysqli_connect_error();
}
if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests  = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = "insert into book_form(name, email, phone,	address, location, guests, arrivals, lieaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

    mysqli_query($connection,$request);

    header('location:book.php');

}else{
    echo "something went wrong try again";
}



?>