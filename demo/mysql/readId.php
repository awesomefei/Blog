<?php
    include "function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<body>
  
   <div class="container">
       <div class="col-xs-6">

       
          
           <form action="form.php" method="post">
               <div class="form-group">
                   <label for="username" class="">Username</label>
                    <input type="text" name="username"class="form-control">
               </div>
               
               <div class="form-group">
                   <label for="password" class="">Password</label>
                    <input type="text" name="password" class="form-control">
               </div>
               
               <div class="form-group">
                   <select name="" id="">
                      <?php
                       showAllData();
                       ?>
                   </select>
               </div>
               
               <input type="submit" name="submit" value="Submit" class="btn btn-primary">
           </form>
       </div>   
   </div>
</body>
</html>
