<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <form action="<?php echo e(url('/')); ?>/register" method="post">
        <?php echo csrf_field(); ?>
        <pre>
        <?php
            print_r($errors->all());
        ?>    
    </pre>
    <div class="container">
        <h1 class="text-center">Registration</h1>
        <div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" id="" name="name" aria-describedby="emailHelp" placeholder="Enter name">
    
     </div>
     <div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" id="" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    
     </div>
     <div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control" name="password" id="" aria-describedby="emailHelp" placeholder="Enter password">
    
     </div>
     <div class="form-group">
    <label for="">Confirm password</label>
    <input type="password" class="form-control" name="confirm password" id="" aria-describedby="emailHelp" placeholder="confirm password">
    
     </div>
     <button class="btn btn-primary">
        Submit 
     </button>
    </div>
    </form>
</body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/mynewapp/resources/views/form.blade.php ENDPATH**/ ?>