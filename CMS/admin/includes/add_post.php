<?php

if(isset($_POST['create_post'])) {
    $post_title        = escape($_POST['title']);
    $post_user         = escape($_POST['post_user']);
    $post_category_id  = escape($_POST['post_category']);
    $post_status       = escape($_POST['post_status']);

    $post_image        = escape($_FILES['image']['name']);
    $post_image_temp   = escape($_FILES['image']['tmp_name']);


    $post_tags         = escape($_POST['post_tags']);
    $post_content      = escape($_POST['post_content']);
    $post_date         = escape(date('d-m-y'));

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
     <label for="title">Post Title</label>
      <input type="text" class="form-control" name="title">
</div>

<div class="form-group">
     <label for="title">Post Author</label>
      <input type="text" class="form-control" name="author">
</div>

<div class="form-group">
     <label for="title">Post Category Id</label>
      <input type="text" class="form-control" name="post_category_id">
</div>


<div class="form-group">
     <label for="title">Post Status</label>
      <input type="text" class="form-control" name="post_status">
</div>

<div class="form-group">
     <select name="post_status" id="">
         <option value="draft">Post Status</option>
         <option value="published">Published</option>
         <option value="draft">Draft</option>
     </select>
  </div>
      
    <div class="form-group">
         <label for="post_image">Post Image</label>
          <input type="file"  name="image">
      </div>

      <div class="form-group">
         <label for="post_tags">Post Tags</label>
          <input type="text" class="form-control" name="post_tags">
      </div>
      
      <div class="form-group">
         <label for="post_content">Post Content</label>
         <textarea class="form-control "name="post_content" id="" cols="30" rows="10">
         </textarea>
      </div>
      
      

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
      </div>


</form>