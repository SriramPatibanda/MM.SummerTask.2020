<div class="post-body">
    <?php echo form_open('users/login'); ?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1 class="text-center"><?php echo $title; ?></h1>
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
    </div>
    <div class="Signup">
        <p>New User?<a href="<?php echo base_url(); ?>index.php/users/register"> Click here</a> to signup for free</p>
    </div>

    <?php echo form_close(); ?>

</div>