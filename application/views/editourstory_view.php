<div class="container">
    <h1>Our Story</h1>
	<h4>Current Tagline</h4>
    <?php echo $ourstorytaglinemessage; ?>
    
	<br>
	<h4>Edit Tagline to..</h4>
	<div class="form-group">
    <form action="<?php echo base_url();?>admin/doeditourstorytagline" method="post" enctype="multipart/form-data">
        <textarea class="form-control" rows="4" name="message"></textarea><br>
        <input type="file" name="file"><br>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    </div>

    <br>
    <h4>Edit Timeline</h4>

</div>