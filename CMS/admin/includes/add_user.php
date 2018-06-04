<?php

if(isset($_POST['create_post'])) {
    $post_title        = $_POST['post_title'];
    $post_author         = $_POST['post_author'];
    $post_category_id  = $_POST['post_category'];
    $post_status       = $_POST['post_status'];

    $post_image        = $_FILES['image']['name'];
    $post_image_temp   = $_FILES['image']['tmp_name'];


    $post_tags         = $_POST['post_tags'];
    $post_content      = $_POST['post_content'];
    $post_date         = date('d-m-y');

    move_uploaded_file($post_image_temp, "../image/$post_image" );


    $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date,post_image,post_content,post_tags,post_status) ";

    $query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tags}', '{$post_status}') "; 

    $create_post_query = mysqli_query($connection, $query);  

    confirmQuery($create_post_query);

    $the_post_id = mysqli_insert_id($connection);
    
    echo "<p class='bg-success'>Post Created. <a href='../post.php?p_id={$the_post_id}'>View Post </a> or <a href='posts.php'>Edit More Posts</a></p>";
       


   }    
?> 
<form action="" method="post" enctype="multipart/form-data">    

<div class="form-group">
     <label for="title">Firstname</label>
      <input type="text" class="form-control" name="user_firstname">
</div>

<div class="form-group">
     <label for="title">Lastname</label>
      <input type="text" class="form-control" name="user_lastname">
</div>

<!--
<div class="form-group">
    <label for="title">Add User</label>
     <select name="post_category" id="post_cat">
<?php
//    $query = "SELECT * FROM users";
//    $select_cat = mysqli_query($connection,$query);
//    confirmQuery($select_cat);
//    while($row = mysqli_fetch_assoc($select_cat)){
//        $cat_title = $row['cat_title'];
//        $cat_id = $row['cat_id']; 
//        echo "<option value='{$cat_id}'>{$cat_title}</option>";
//    }
?>
    </select>
</div>
-->

<div class="form-group">
     <select name="post_status" id="">
         <option value="draft">Post Status</option>
         <option value="published">Published</option>
         <option value="draft">Draft</option>
     </select>
  </div>
      
<!--
    <div class="form-group">
         <label for="post_image">Post Image</label>
          <input type="file"  name="image">
    </div>
-->

      <div class="form-group">
         <label for="post_tags">Username</label>
          <input type="text" class="form-control" name="username">
      </div>
      
      <div class="form-group">
         <label for="user_email">Email</label>
         <input type="email" class="form-control" name="user_email">
      </div>
      
      <div class="form-group">
         <label for="user_password">Password</label>
         <input type="password" class="form-control" name="user_password">
      </div>
      
       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
      </div>


</form>