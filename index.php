<?php 
    include_once 'header.php'
?>

<div class="container text-body text-center">
    <h1 id="index-text" class="font-weight-bold" style="margin-top: 60px">Welcome, <?php if(isset($_SESSION['usersId'])){
        echo explode(" ", $_SESSION['usersName'])[0];
    }else{
        echo 'Guest';
    } 
    ?> 
    </h1>
</div>   

<?php 
    include_once 'footer.php'
?>