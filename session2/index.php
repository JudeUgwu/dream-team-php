<?php



if(!empty($_POST['registerBtn'])){
  
  $errors = [];
  $formData = [];
  extract($_POST); // creates variables from associative array


  $formData['author'] = $author;


  if(empty($fullname)){
    $errors["fullname"] = "Please Enter fullname";
  }else{
     $formData["email"] = $email;
  }

  if(empty($email)){
    $errors["email"] = "Please Enter Email";
  }else{
     $formData["email"] = $email;
  }

  if(empty($phone)){
    $errors["phone"] = "Please Enter phone";
  }else{
     $formData["phone"] = $phone;
  }

  if(empty($password)){
    $errors["password"] = "Please Enter Password";
  }else{
    $formData["password"] = sha1($password);
  }


  echo "<pre>";
  print_r($_POST);
  die();

  if(empty($errors)){
    echo "<pre>";
    print_r($formData);
  }else{
    // echo "<pre>";
    // print_r($errors);
  }
  


}





?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
  </head>

  <body>

  <div class="container p-5 text-center">
  <h1>Registeration Form</h1>
    <form  method="POST" action="index.php" class="row g-3 " style="text-align:left;">

    <div class="col-md-12">
        <label for="fullname" >Fullname</label>
        <input type="text" name="fullname" class="form-control" id="fullname" 
        value="<?php if(!empty($_POST['fullname'])){ echo $_POST['fullname'];} ?>"
        >

       <?php if(!empty($errors["fullname"])){ ?>
        <span class="text-danger"><?=$errors["fullname"]; ?></span>
       <?php } ?>

      </div> 

      <div class="col-md-12">
        <label for="email" >Email</label>
        <input type="text" name="email" class="form-control" id="email"
        value="<?php if(!empty($_POST['email'])){ echo $_POST['email'];} ?>"
        >
        <?php if(!empty($errors["email"])){ ?>
        <span class="text-danger"><?=$errors["email"]; ?></span>
       <?php } ?>

      </div>


      <div class="col-md-12">
        <label for="phone" >Phone</label>
        <input type="text" name="phone" class="form-control" id="phone"
        value="<?php if(!empty($_POST['phone'])){ echo $_POST['phone'];} ?>"
        >
        <?php if(!empty($errors["phone"])){ ?>
        <span class="text-danger"><?=$errors["phone"]; ?></span>
       <?php } ?>

      </div> 

      <input type="hidden" name="author" value="jude">

      <div class="col-md-12">
        <label for="password" >Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        <?php if(!empty($errors["password"])){ ?>
        <span class="text-danger"><?=$errors["password"]; ?></span>
       <?php } ?>

      </div>
      <div class="col-auto">
        <button name="registerBtn" value="userRegister" type="submit" class="btn btn-primary mb-3">Register</button>
      </div>
    </form>
  </div>


  </body>

</html>