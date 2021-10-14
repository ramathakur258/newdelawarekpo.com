
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3 ">
    <h1 class="h4">Blog</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">           
            <a class="pull-right btn btn-sm btn-primary" style="margin-right:40px" href="<?php  echo site_url('admin/blog/editblog' ); ?>"><i class="fas fa-plus"></i> Add Blog </a>
        </div>
    </div>
</div>
<?php  echo $this->session->flashdata('message'); ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                   <table class="table makedatatable" >
                        <thead>
                            <tr>
                                <!-- <th scope="col">S.no</th> -->
                                <th scope="col">TITLE</th>
                                <th scope="col">META DESCRIPTION</th>
                                <th scope="col">ACTION</th>  
                            </tr>
                        </thead>
                        <tbody>
                    <?php  if(!empty($blog)) { 
                     foreach($blog as $row){ ?>
                          <tr>
                                <td><?php echo $row->blog_title; ?></td> 
                                <td><?php echo $row->description; ?></td>
                          <td>
                                <a class="btn btn-default btn-xs" href="<?php echo base_url('admin/blog/editblog/'.$row->id) ; ?>" ><i class="far fa-edit" style="color:blue"></i></a>                   
                                <a class="btn btn-default btn-xs" href="<?php echo base_url('admin/blog/deleteblog/'.$row->id) ; ?>"  > <i class="far fa-trash-alt" style="color:red"></i></a>
                        </td>
                          </tr>
                           <?php }}?>
                        </tbody>
                    </table>
                    <?php  echo $pagination ?>
                </div>
            </div>
        </div>
    </div>
</div>



