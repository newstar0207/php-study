<?php
if($_POST['id'] === 'newstar' and ($_POST['password'] === '1111' or $_POST['password'] === '2222' or $_POST['password'] === 3333)){
    echo 'Welcome, newstar';     
}else{
    echo 'wrong';
}
?>
