<?php
$con= mysqli_connect("localhost", "id17610880_mydb", "i#){vK(de54@}LQ@", "id17610880_user") or die(mysqli_error($con));

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

$select_query="SELECT id FROM users_details WHERE email='$email'";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
if(mysqli_num_rows($select_query_result)>0)
{
    echo "<script>alert('Email Already Exists')</script>";
    echo "<script>location.href='signup_page.php'</script>";
}
else
{
    $insert_query="INSERT INTO users_details(name,email,mobile,password) VALUES('$name','$email','$mobile','$password')";
    $user_registration_submit=mysqli_query($con, $insert_query) or die(mysqli_error($con));
    echo "<script>location.href='user_list.php'</script>";
}
?>
