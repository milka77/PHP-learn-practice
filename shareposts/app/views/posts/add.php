<?php require APPROOT . '/views/inc/header.php'; ?>

  <div class="card card-body bg-light mt-5">
    <h2>Add Post</h2>
    <p>Create a post with this form</p>
    <!-- Register Form -->
    <form action="<?php echo URLROOT; ?>/posts/add" method="POST">
      

      <!-- Email -->
      <div class="form-group">
        <label for="title">Title: <sup class="text-danger">*</sup></label>
        <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
        <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
      </div>
      <!-- End of Email -->

      <!-- Password -->
      <div class="form-group">
        <label for="body">Post: <sup>*</sup></label>
        <textarea name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body']; ?></textarea>
        <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
      </div>
      <!-- End of Password -->

      
      <input type="submit" class="btn btn-success" value="Submit">

      <a href="<?php echo URLROOT; ?>/posts" class="btn btn-outline-danger">Cancel</a>

    </form>
    <!-- End of Register Form -->
  </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>