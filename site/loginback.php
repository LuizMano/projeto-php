<?php

require_once("config.inc.php");

$data1 = mysqli_query($con,"SELECT * FROM users WHERE id=1");
$data2 = mysqli_query($con,"SELECT * FROM users WHERE id=2");
$data3 = mysqli_query($con,"SELECT * FROM users WHERE id=3");
$data4 = mysqli_query($con,"SELECT * FROM users WHERE id=4");
$data5 = mysqli_query($con,"SELECT * FROM users WHERE id=5");
$data6 = mysqli_query($con,"SELECT * FROM users WHERE id=6");
$data7 = mysqli_query($con,"SELECT * FROM users WHERE id=7");
$data8 = mysqli_query($con,"SELECT * FROM users WHERE id=8");
$data9 = mysqli_query($con,"SELECT * FROM users WHERE id=9");
$data10 = mysqli_query($con,"SELECT * FROM users WHERE id=10");
$data11 = mysqli_query($con,"SELECT * FROM users WHERE id=11");
$data12 = mysqli_query($con,"SELECT * FROM users WHERE id=12");
$data13 = mysqli_query($con,"SELECT * FROM users WHERE id=13");
$data14 = mysqli_query($con,"SELECT * FROM users WHERE id=14");
$data15 = mysqli_query($con,"SELECT * FROM users WHERE id=15");
$data16 = mysqli_query($con,"SELECT * FROM users WHERE id=16");
$data17 = mysqli_query($con,"SELECT * FROM users WHERE id=17");
$data18 = mysqli_query($con,"SELECT * FROM users WHERE id=18");
$data19 = mysqli_query($con,"SELECT * FROM users WHERE id=19");
$data20 = mysqli_query($con,"SELECT * FROM users WHERE id=20");

$pass = $_POST['password'];
$user = $_POST['username'];

$cor1 = mysqli_fetch_array($data1);
$cor2 = mysqli_fetch_array($data2);
$cor3 = mysqli_fetch_array($data3);
$cor4 = mysqli_fetch_array($data4);
$cor5 = mysqli_fetch_array($data5);
$cor6 = mysqli_fetch_array($data6);
$cor7 = mysqli_fetch_array($data7);
$cor8 = mysqli_fetch_array($data8);
$cor9 = mysqli_fetch_array($data9);
$cor10 = mysqli_fetch_array($data10);
$cor11 = mysqli_fetch_array($data11);
$cor12 = mysqli_fetch_array($data12);
$cor13 = mysqli_fetch_array($data13);
$cor14 = mysqli_fetch_array($data14);
$cor15 = mysqli_fetch_array($data15);
$cor16 = mysqli_fetch_array($data16);
$cor17 = mysqli_fetch_array($data17);
$cor18 = mysqli_fetch_array($data18);
$cor19 = mysqli_fetch_array($data19);
$cor20 = mysqli_fetch_array($data20);

if ($pass != $cor1['username'] || $user != $cor1['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=logged');
    setcookie(name, $user);
}
if ($pass != $cor2['username'] || $user != $cor2['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=messages');
    setcookie(name, $user);
}
if ($pass != $cor3['username'] || $user != $cor3['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=messages');
    setcookie(name, $user);
}
if ($pass != $cor4['username'] || $user != $cor4['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=messages');
    setcookie(name, $user);
}
if ($pass != $cor5['username'] || $user != $cor5['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=messages');
    setcookie(name, $user);
}
if ($pass != $cor6['username'] || $user != $cor6['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=logged');
    setcookie(name, $user);
}
if ($pass != $cor7['username'] || $user != $cor7['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=messages');
    setcookie(name, $user);
}
if ($pass != $cor8['username'] || $user != $cor8['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=messages');
    setcookie(name, $user);
}
if ($pass != $cor9['username'] || $user != $cor9['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=messages');
    setcookie(name, $user);
}
if ($pass != $cor10['username'] || $user != $cor10['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=messages');
    setcookie(name, $user);
}
if ($pass != $cor11['username'] || $user != $cor11['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=logged');
    setcookie(name, $user);
}
if ($pass != $cor12['username'] || $user != $cor12['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=messages');
    setcookie(name, $user);
}
if ($pass != $cor13['username'] || $user != $cor13['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=messages');
    setcookie(name, $user);
}
if ($pass != $cor14['username'] || $user != $cor14['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=messages');
    setcookie(name, $user);
}
if ($pass != $cor15['username'] || $user != $cor15['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=messages');
    setcookie(name, $user);
}
if ($pass != $cor16['username'] || $user != $cor16['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=logged');
    setcookie(name, $user);
}
if ($pass != $cor17['username'] || $user != $cor17['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=messages');
    setcookie(name, $user);
}
if ($pass != $cor18['username'] || $user != $cor18['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=messages');
    setcookie(name, $user);
}
if ($pass != $cor19['username'] || $user != $cor19['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=messages');
    setcookie(name, $user);
}
if ($pass != $cor20['username'] || $user != $cor20['pass']){
    header('Location: index.php?pg=login');
}else{
    header('Location: index.php?pg=messages');
    setcookie(name, $user);
}
header('Location: index.php?pg=login');

?>