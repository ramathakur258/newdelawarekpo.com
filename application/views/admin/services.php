
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3 ">
    <h1 class="h4">Service</h1>
    <div class="btn-toolbar mb-2 mb-md-0"> 
        <div class="btn-group mr-2">  
            <a class="pull-right btn btn-sm btn-primary" style="margin-right:40px" href="<?php  echo site_url('admin/service/editservice' ); ?>"><i class="fas fa-plus"></i> Add Service</a>
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
                                <th scope="col">SERVICE</th>
                                <th scope="col">DESCRIPTION</th>
                                <th scope="col">ACTION</th>  
                            </tr>
                        </thead>
                        <tbody>
                    <?php  if(!empty($service)) { 
                    foreach($service as $row){ ?>
                           <tr>
                                <td><?php echo $row->service; ?></td>
                                <td><?php echo $row->description; ?></td>
                           <td>
                         <a class="btn btn-default btn-xs" href="<?php echo base_url('admin/service/editservice/'.$row->id); ?>" ><i class="far fa-edit" style="color:blue"> </i></a>                    
                         <a class="btn btn-default btn-xs" href="<?php echo base_url('admin/service/deleteservice/'.$row->id); ?>"> <i class="far fa-trash-alt" style="color:red"></i></a>
                        </td>
                          </tr>
                           <?php }}?>
                        </tbody>
                    </table>
                    <?php echo $pagination ?>
                </div>
            </div>
        </div>
    </div>
</div>



