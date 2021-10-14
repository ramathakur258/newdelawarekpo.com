
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Blog</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <form action="" method="post">
       <div class="card-body pad">
          <div class="mb-3">
             <div class = "row">
        <div class="form-group col-md-4">
                        <label for="blog_title">Blog Tittle*</label>
                        <input type="text"  id="blog_title" name="blog_title" value="<?php  if(isset($blog->blog_title)){echo $blog->blog_title; } ?>" class="form-control auto-complete"  />
                    </div>
                  <div class="form-group col-md-4">
                        <label for="meta_title">Meta Tittle*</label>
                        <input type="text"  id="meta_title" name="meta_title" value="<?php  if(isset($blog->meta_title)){echo $blog->meta_title; } ?>" class="form-control auto-complete"  />
                    </div>
                 <div class="form-group col-md-4">
                         <label for="meta_keyword">Meta Keyword*</label>
                        <input type="text"  id="meta_keyword" name="meta_keyword" value="<?php  if(isset($blog->meta_keyword)){echo $blog->meta_keyword; } ?>" class="form-control auto-complete"  />
                </div>
         </div>
         <h6><strong>DESCRIPTION</strong></h6>
    <textarea name="description" class="textarea" ><?php  if(isset($blog->description)){echo $blog->description; } ?></textarea>
    <button class="btn btn-primary" type="submit">Submit</button>
</div>
</div>
    </form>
    <script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

  

