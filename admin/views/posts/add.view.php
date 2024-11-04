
<?php require_once ADMIN_PATH."views/inc/header.php"; ?>
<!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-12">
        <div class="card card-primary my-5">
              <div class="card-header">
                <h3 class="card-title">Add New Post</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo admin_url("store-post"); ?>" method="POST">
              <?php if(has_session('success')): ?>
                    <div class="alert alert-success p-2">
                        <?php echo flash_session('success'); ?>
                    </div>
                <?php endif;?>

                <?php if(has_session('errors')): ?>
                    <?php foreach(flash_session('errors') as $error): ?>
                        <div class="alert alert-danger p-2">
                            <?php echo $error; ?>
                        </div>
                    <?php endforeach;?>
                <?php endif; ?>

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="title" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Post Title">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputContent">Content</label>
                      <textarea name="content" class="form-control" id="exampleInputContent" rows="5" placeholder="Enter content"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Post URL</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label  name = "choose_file" class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
      </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php require_once ADMIN_PATH."views/inc/footer.php"; ?>
