
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active">FAQ</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <form action="" method="post">   
       <div class="card-body pad">
              <div class="mb-3">
                  <div class="form-group col-md-4">
                        <label for="question">Question*</label>
                        <input type="question"  id="question" name="question" value="<?php  if(isset($faq->question)){echo $faq->question; } ?>" class="form-control auto-complete"  />
                    </div>  
                  <h6><strong>DESCRIPTION</strong><h6>                
                  <textarea name="description" class ="textarea" ><?php  if(isset($faq->description)){echo $faq->description; } ?></textarea>
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

  

