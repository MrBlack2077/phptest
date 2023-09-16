<?php 
    if(isset($_POST['submit'])){
        echo htmlspecialchars($_POST['email']."<br>");
        echo htmlspecialchars($_POST['title']."<br>");
        echo htmlspecialchars($_POST['ingerdients']."<br>");
    }
    //htmlspecialchars() <== braye jologiri az bUg amnitai
?>


<!DOCTYPE html>
<html lang="en">
    <?php include('Template/header.php'); ?>

    <section class="container gray-text">
        <h4 class="center">Add a pizza</h4>
        <form class="white " action="add.php" method="POST">
            <label>Your email</label>
            <input type="text" name="email">
            <label>Pizza Title</label>
            <input type="text" name="title">
            <label>Ingerdients (comma separated)</label>
            <input type="text" name="ingerdients">
            <div class="center">
                <input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>


    <?php include('Template/footer.php'); ?>
</html>