<?php 

    $email = $title = $password= '';
    $errors = ['email' => '','title' => '' , 'password' => ''];
    //Email Validation
    if(empty($_POST['email'])){
        $errors['email'] = 'Email Required <br>';
    }else{
        $email=$_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] =  'Email is not valid <br>';
        }
    };
    //password Validation
    if(empty($_POST['password'])){
        $errors['password'] = 'Password Required <br>';
    }else{
        $password=$_POST['password'];
        if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/', $password)){
            $errors['password'] =  'Minimum eight characters, at least one uppercase letter, one lowercase letter and one number <br>';
        }
    };

    //Title Validation
    if(empty($_POST['title'])){
        $errors['title'] =  'title Required <br>';
    }else {
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
            $errors['title'] =  'title must be letters and spaces only <br>';
        };
    };
    
    if(!array_filter($errors)){
        header('Location: index.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
    <?php include('Template/header.php'); ?>

    <section class="container gray-text">
        <h4 class="center">Add a pizza</h4>
        <form class="white " action="add.php" method="POST">
            <label>Your email</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
            <div class="red-text"><?php echo $errors['email']; ?></div>
            <label>Password</label>
            <input type="text" name="password"value="<?php echo htmlspecialchars($password); ?>">
            <div class="red-text"><?php echo $errors['password']; ?></div>
            <label>Pizza Title</label>
            <input type="text" name="title"value="<?php echo htmlspecialchars($title); ?>">
            <div class="red-text"><?php echo $errors['title']; ?></div>
            <div class="center">
                <input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>


    <?php include('Template/footer.php'); ?>
</html>