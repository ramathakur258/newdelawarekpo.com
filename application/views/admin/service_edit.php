
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Service</li>
            </ol>
          </div>
        </div>
      </div>
</section>
 <form action="" method="post">
    <div class="card-body pad">
        <div class="mb-3">
           <div class="form-group col-md-4">
               <label for="title">Service*</label>
               <input type="text"  id="service" name="service" value="<?php if(isset($service->service)){echo $service->service; } ?>" class="form-control auto-complete"  /> 
          </div>
    <h6><strong>DESCRIPTION</strong></h6>
    <textarea name="description" class="textarea"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php if(isset($service->description)){echo $service->description; }?></textarea>
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