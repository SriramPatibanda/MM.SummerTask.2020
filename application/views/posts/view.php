<div class="post-body">
<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?> </small><br>

    <?php echo $post['body']; ?>


<hr>
<a class= "btn btn-success pull-left" href="<?php echo base_url(); ?>index.php/posts/edit/<?php echo $post['slug']; ?>">Edit</a>

<?php echo form_open('/posts/delete/'.$post['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger">
</form>




































</div>