
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Users List</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3 ">
    <h1 class="h4">Users List</h1>
    <div class="btn-toolbar mb-2 mb-md-0"> 
        <div class="btn-group mr-2">  
            <!-- <a class="pull-right btn btn-sm btn-primary" style="margin-right:40px" href="<?php  echo site_url('admin/service/editservice' ); ?>"><i class="fas fa-plus"></i> Add Service</a> -->
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
                                <th scope="col">NAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">MOBILE NO.</th>
                                <th scope="col">MESSAGE</th>
                                <!-- <th scope="col">ACTION</th>   -->
                            </tr>
                        </thead>
                        <tbody>
                    <?php  if(!empty($user)) { 
                    foreach($user as $row){ 
                        if($row->user_type == 'USER'){?>
                           <tr>
                                <td><?php echo $row->name; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->mobile; ?></td>
                                <td><?php echo $row->message; ?></td>
                           <!-- <td>
                         <a class="btn btn-default btn-xs" href="<?php //echo base_url('admin/service/editservice/'.$row->id); ?>" ><i class="far fa-edit" style="color:blue"> </i></a>                    
                         <a class="btn btn-default btn-xs" href="<?php //echo base_url('admin/service/deleteservice/'.$row->id); ?>"> <i class="far fa-trash-alt" style="color:red"></i></a>
                        </td> -->
                          </tr>
                           <?php }}}?>
                        </tbody>
                    </table>
                    <?php echo $pagination ?>
                </div>
            </div>
        </div>
    </div>
</div>



