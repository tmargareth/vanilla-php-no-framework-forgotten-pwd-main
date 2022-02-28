
<?php 
    include_once 'header.php';
    include_once './helpers/session_helper.php';
?>
<div class="section">
    <h1 class="header text-center">Reset Password</h1>

    <?php flash('reset') ?>

    <form method="post" action="./controllers/ResetPasswords.php">
        <input type="hidden" name="type" value="send" />
        <input type="text" name="usersEmail" 
        placeholder="Email...">
        <button type="submit" class="btn btn-primary">Receive Email</button>
    </form>
</div>    
<?php 
    include_once 'footer.php'
?>