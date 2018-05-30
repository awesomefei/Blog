<?php
if(isset($_GET['p_id'])){
   $the_post_id = $_GET['p_id'];
}

    $query = 'SELECT * FROM posts';
    $select_posts_by_id = mysqli_query($connection,$query);                                    
    while($row = mysqli_fetch_assoc($select_posts_by_id)){
         $post_title = $row['post_title'];
         $post_id = $row['post_id'];
         $post_author = $row['post_author'];        
         $post_category_id = $row['post_category_id'];
         $post_status = $row['post_status'];
         $post_image = $row['post_image'];
         $post_content = $row['post_content'];

         $post_tags = $row['post_tags'];
         $post_date = $row['post_date'];
         $post_comment_count = $row['post_comment_count'];    
}
?>


<form action="" method="post" enctype="multipart/form-data">    
 <div class="form-group">
     <label for="title">Post Title</label>
      <input value='<?php echo $post_title; ?>' type="text" class="form-control" name="title">
</div>

<div class="form-group">
     <select name="" id=""></select>
<?php
    $query = "SELECT * FROM category WHERE cat_id = $cat_id";
    $select_cat_id = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($select_cat_id)){
        $cat_title = $row['cat_title'];
        $cat_id = $row['cat_id']; 
    }
?>
</div>

<div class="form-group">
     <label for="title">Post Author</label>
      <input value='<?php echo $post_author; ?>' type="text" class="form-control" name="author">
</div>

<div class="form-group">
     <label for="title">Post Status</label>
      <input value='<?php echo $post_status; ?>' type="text" class="form-control" name="post_status">
</div>

<div class="form-group">
     <select name="post_status" id="">
         <option value="draft">Post Status</option>
         <option value="published">Published</option>
         <option value="draft">Draft</option>
     </select>
  </div>
      
    <div class="form-group">
        <img width=100 src="../image/<?php echo $post_image; ?>" alt="">
        <br>
        <label value='<?php echo $post_author; ?>' for="post_image">Post Image</label>
          <input type="file"  name="image">
          
      </div>

      <div class="form-group">
         <label for="post_tags">Post Tags</label>
          <input value='<?php echo $post_tags; ?>' type="text" class="form-control" name="post_tags">
      </div>
      
      <div class="form-group">
         <label for="post_content">Post Content</label>
         <textarea class="form-control "name="post_content" id="" cols="30" rows="10"><?php echo $post_content;?>
         </textarea>
      </div>
      
      

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
      </div>


</form>