<?php include 'inc/header.php'; ?>
<h2 class="page-header">Create Job Listing</h2>
<form method="post" action="create.php">
    <div class="form-group">
        <label for="company">Company</label>
        <input type="text" class="form-control" name="company">

    </div>

   
    <div class="form-group">
        <label for="category">Category</label>
        <select class="form-control" name="category"> 
            <option value="0">Choose Category</option>
            <?php foreach($categories as $category) : ?>
            <option value="<?php echo $category->id; ?>"><?php echo $category->name;?></option>
            
            <?php endforeach; ?>

        </select>

    </div>
    <div class="form-group">
        <label for="job_title">Job Title</label>
        <input type="text" class="form-control" name="job_title">

    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description"></textarea>

    </div>
    <div class="form-group">
        <label for="location">Location</label>
        <input type="text" class="form-control" name="location">

    </div>
    <div class="form-group">
        <label for="salary">Salary</label>
        <input type="text" class="form-control" name="salary">

    </div>

    <div class="form-group">
        <label for="contact_user">Contact User</label>
        <input type="text" class="form-control" name="contact_user">

    </div>

    <div class="form-group">
        <label for="contact_email">Contact Email</label>
        <input type="text" class="form-control" name="contact_email">

    </div>
    <input type="submit" class="btn btn-default" value="submit" name="submit">
</form>

<?php include 'inc/footer.php'; ?>
