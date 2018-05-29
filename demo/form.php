<?php
    /*
    */
//this sunmit is from the 3rd input according to the name
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        //echo $username;
        //users mean the database
        $connection = mysqli_connect('localhost', 'root', '', 'loginapp'); 
        if($connection){
            echo "we are connected";
        }else{
            die("Database connection failed");
        }
        
        $query = "INSERT INTO users(username, password)";
        $query .= "VALUES('$username', $password)";
        $query = "SELECT * FROM users";
        
        $result = mysqli_query($connection, $query);
        
        if(!$result){
            die('Query Failed' . mysqli_error());
        }
    }
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
               
               
               
               <input type="submit" name="submit" value="Submit" class="btn btn-primary">
           </form>
       </div>   
   </div>
</body>
</html>
