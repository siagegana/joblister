<?php include 'inc/header.php'; ?>

<h2 class="page-header"><?php echo $jobs->job_title; ?>(<?php echo $jobs->location; ?>)</h2>
<small>Posted by <?php echo $jobs->contact_user; ?> on <?php echo $jobs->post_date; ?></small>


<hr>
<p class="lead"><?php echo $jobs->description; ?></p>
<ul class="list-group">
    <li class="list-group-item"><strong>Company:</strong><?php echo $jobs->company; ?></li>
    <li class="list-group-item"><strong>Salary:</strong><?php echo $jobs->salary; ?></li>
    <li class="list-group-item"><strong>Contact Email:</strong><?php echo $jobs->contact_email; ?></li>

</ul>
<br><br>
<a href="index.php">Go Back</a>

<br><br>

	<div class="well">
			<a href="edit.php?id=<?php echo $jobs->id; ?>" class="btn btn-default">Edit</a>
			<form action="job.php" method="post" style="display: inline;">
				<input type="hidden" name="del_id" value="<?php echo $jobs->id; ?>">
				<input type="submit" class="btn btn-danger" value="Delete">
			</form>
	</div>


<?php include 'inc/footer.php'; ?>
