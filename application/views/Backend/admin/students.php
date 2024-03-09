<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="RedstarHospital" />
    <title>Admin Panel</title>
  <!-- css -->
     <?php $this->load->view('Backend/admin/admin-temp/link-css'); ?> 
    <!-- Date Time item CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend_assets/bundles/flatpicker/css/flatpickr.min.css" />
</head>
<!-- END HEAD -->

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- start header -->
        <?php $this->load->view('Backend/admin/admin-temp/header'); ?> 
        <div class="page-container">
            <!-- start sidebar menu -->
          <?php $this->load->view('Backend/admin/admin-temp/sidebar'); ?> 
            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Students</div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            
                          <div class="d-flex justify-content-end">
                          <?php  if($admin_data->user_status == '0') { ?>
                                   <a type="button" data-bs-toggle="modal" data-bs-target="#smallModel" 
                                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary text-right"  style="text-transform: capitalize;">Add Student </a> 
                                        <?php  } ?>
                                    </div>
                            <div class="tabbable-line">

                                <div class="tab-content">
                                    <div class="tab-pane active fontawesome-demo" id="tab1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-head">
                                                        <header></header>
                                                        <div class="tools">
                                                            <a class="fa fa-repeat btn-color box-refresh"
                                                                href="javascript:;"></a>
                                                            <a class="t-collapse btn-color fa fa-chevron-down"
                                                                href="javascript:;"></a>
                                                            <a class="t-close btn-color fa fa-times"
                                                                href="javascript:;"></a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body ">

                                                        <table
                                                            class="table table-striped table-bordered table-hover table-checkable order-column full-width"
                                                            id="example4">
                                                            <thead>
                                                                <tr>
                                                                    <th class="center text-center">S.No</th>
                                                                  
                                                                    <th class="center text-center"> Name </th>
                                                                    <th class="center text-center"> Email </th>
                                                                    <th class="center text-center"> Mobile No </th>
                                                                    <th class="center text-center"> Roll No </th>
                                                                    <th class="center text-center"> Branch </th>
                                                                    <th class="center text-center"> Class </th>
                                                                    <th class="center text-center"> Gender </th>
                                                                    <!-- <th class="center text-center"> Team </th> -->
                                                                    <?php  if($admin_data->user_status == '0') { ?>
                                                                    <th class="center text-center"> Update / Delete </th>

                                                                    <?php  } ?>
                                                               
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               <?php 
                                                               $i = 1;
                                                                foreach ($announcement as $member) {
                                                                  

                                                                    $query = $this->db->get_where('branch',array('isActive'=> '1','id'=>$member->branch));
                                                                    $result = $query->row();
                                                            
                                                                 //  print_r($result);
                                                                    
                                                                   // die();
                                                                    ?>
                                                                 <tr class="odd gradeX" data-id="<?=$member->id;?>">
                                                                    <td class="center"> <?=$i; ?></td>
                                                                   
                                                                    <td class="center">   <?=$member->name; ?></td>
                                                                    <td class="center">   <?=$member->email; ?></td>
                                                                    <td class="center">   <?=$member->number; ?></td>
                                                                    <td class="center">   <?=$member->roll_no; ?></td>
                                                                    <td class="center">   <?= ($result) ? $result->title : ''; ?></td>
                                                                    <td class="center">   <?=$member->class; ?></td>
                                                                    <td class="center">   <?=$member->gender; ?></td>
                                                                    
                                                                   
                                                                    <?php  if($admin_data->user_status == '0') { ?>
                                                            
                                                                    <td class="center">
                                                                        <a href="#" class="tblEditBtn"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#smallModel" data-id="<?php echo $member->id; ?>">
                                                                            <i class="fa fa-pencil"></i>
                                                                        </a>
                                                                        <a class="tblDelBtn delete"  data-id="<?php echo $member->id; ?>"><!-- data-bs-toggle="modal"
                                                                            data-bs-target="#smallModel" -->
                                                                            <i class="fa fa-trash-o"></i>
                                                                        </a>
                                                                    </td>
                                                                    <?php  } ?>
                                                                
                                                                </tr>


                                                                <?php $i++; } ?>
                                                            

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- end admited patient list -->
                </div>
            </div>
            <!-- end page content -->

        </div>
        <!-- end page container -->
        <!-- start footer -->
 
        <!-- end footer -->
        <?php $query = $this->db->get_where('branch', array('isActive' => '1'));

          $result = $query->result();
     ?>
        <div class="modal fade" id="smallModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form  id="form_sample_add" class="form-horizontal" method="post " enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Add Students
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="form-group row">
                         
                <div class="form-group row">
                <label class="control-label col-md-2"> Name
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <input type="text" name="name" data-required="1" placeholder="Enter Name"
                        class="form-control input-height" required/>
                </div>
               </div>
                <div class="form-group row">
                <label class="control-label col-md-2"> Email
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <input type="text" name="email" data-required="1" placeholder="Enter Email"
                        class="form-control input-height" required />
                </div>
               </div>
                <div class="form-group row">
                <label class="control-label col-md-2"> Number
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <input type="text" name="number" data-required="1" placeholder="Enter Number"
                        class="form-control input-height" required/>
                </div>
               </div>
                <div class="form-group row">
                <label class="control-label col-md-2"> Password
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <input type="text" name="password" data-required="1" placeholder="Enter Password"
                        class="form-control input-height" />
                  
                </div>
               </div>
               <div class="form-group row">
                <label class="control-label col-md-2"> Roll Number
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <input type="text" name="roll_no" data-required="1" placeholder="Enter Roll Number"
                        class="form-control input-height" required />
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-2"> Class
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <input type="text" name="class" data-required="1" placeholder="Enter Class"
                        class="form-control input-height" required />
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-2"> Branch
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <!-- <input type="text" name="branch" data-required="1" placeholder="Enter Branch"
                        class="form-control input-height" required /> -->
                        <select id="branch" name="branch"  class="form-control input-height" >
                    <?php
                      echo '<option value="">Select</option>';
                    foreach ($result as $row) {
                        echo '<option value="' . $row->id . '">' . $row->title . '</option>';
                       
                    }
                    ?>
                </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-2"> Gender
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <select name="gender" class="form-control input-height" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                       
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-2"> Date of Birth
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <input type="date" name="dob" data-required="1" placeholder="Enter Date of Birth (YYYY-MM-DD)"
                        class="form-control input-height" required />
                   
                </div>
            </div>
                </div>
                <div class="modal-footer">
                <input type="hidden" name="id">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        aria-label="Close">Cancel</button>
                    <button type="button" class="btn btn-primary" id="save_nav">Save</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <?php //$query = $this->db->get_where('leader_board', array('isActive' => '1'));

        //  $result = $query->result();
             ?>
             <form  id="form_sample_1" class="form-horizontal" method="post " enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Update Students</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   
                <div class="form-group row">
                <label class="control-label col-md-2"> Name
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <input type="text" name="name" data-required="1" placeholder="Enter Name"
                        class="form-control input-height" />
                </div>
               </div>
                <div class="form-group row">
                <label class="control-label col-md-2"> Email
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <input type="text" name="email" data-required="1" placeholder="Enter Email"
                        class="form-control input-height" />
                </div>
               </div>
                <div class="form-group row">
                <label class="control-label col-md-2"> Number
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <input type="text" name="number" data-required="1" placeholder="Enter Number"
                        class="form-control input-height" />
                </div>
               </div>
                <div class="form-group row">
                <label class="control-label col-md-2"> Password
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <input type="text" name="password" data-required="1" placeholder="Enter Password"
                        class="form-control input-height" />
                  
                </div>
               </div>
               <div class="form-group row">
                <label class="control-label col-md-2"> Roll Number
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <input type="text" name="roll_no" data-required="1" placeholder="Enter Roll Number"
                        class="form-control input-height" />
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-2"> Class
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <input type="text" name="class" data-required="1" placeholder="Enter Class"
                        class="form-control input-height" />
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-2"> Branch
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <input type="text" name="branch" data-required="1" placeholder="Enter Branch"
                        class="form-control input-height" />
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-2"> Gender
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <select name="gender" class="form-control input-height">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                     
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-2"> Date of Birth
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <input type="date" name="dob" data-required="1" placeholder="Enter Date of Birth (YYYY-MM-DD)"
                        class="form-control input-height" />
                   
                </div>
            </div>
               -- <div class="form-group row">
                <label class="control-label col-md-3">Profile Picture
                </label>
                <div class="col-md-5">
                    <input type="file" class="default" name="file_url">
                </div> -->
                <!-- <div class="form-group row">
                <label class="control-label col-md-2"> Select Leaderboard
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                <select id="team" name="team"  class="form-control input-height" >
                    <?php
                      echo '<option value="">Select</option>';
                    foreach ($result as $row) {
                        echo '<option value="' . $row->id . '">' . $row->team . '</option>';
                       
                    }
                    ?>
                </select>
                </div>
               </div> --

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary"  id="update">update</button>
                </div>
                  </form>
            </div>
        </div> -->
   <?php $this->load->view('Backend/admin/admin-temp/footer'); ?> 
    <script src="<?php echo base_url(); ?>assets/backend_assets/bundles/material/material.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend_assets/bundles/flatpicker/js/flatpicker.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend_assets/data/date-time.init.js"></script>
</body>

<script type="text/javascript">


// smallModel
$(document).on('click', '#save_nav', function () {
    event.preventDefault();

    if ($("#form_sample_add").valid()) {

        var id = $("input[name='id']").val(); // Assuming you have an input field with name 'id' in your form
        var slot = $("input[name='title']").val();

        // Check if the ID value exists
        if (id !== '') {
            // Update functionality
            $.ajax({
                type: 'post',
                url: '<?php echo base_url("Admin/update_student");?>', // Change the URL to your update function
                data: new FormData($("#form_sample_add")[0]),
                contentType: false,
                processData: false,
                success: function (resp) {
                    var data = $.parseJSON(resp);
                    if (data.status == 'success') {
                        $('#form_sample_add')[0].reset();
                        $('#smallModel').modal('hide');
                        $(".modal-backdrop").remove();
                        $.wnoty({
                            type: 'success',
                            message: data.message,
                            autohideDelay: 1000,
                            position: 'top-right'
                        });
                        setTimeout(function () {
                            location.reload(true);
                        }, 2000);
                    } else if (data.status == 'error') {
                        $.wnoty({
                            type: 'error',
                            message: data.message,
                            autohideDelay: 2000,
                            position: 'top-right'
                        });
                    }
                },
            });
        } else {
            // Add functionality
            $.ajax({
                type: 'post',
                url: '<?php echo base_url("Admin/add_student");?>',
                data: new FormData($("#form_sample_add")[0]),
                contentType: false,
                processData: false,
                success: function (resp) {
                    var data = $.parseJSON(resp);
                    if (data.status == 'success') {
                        $('#form_sample_add')[0].reset();
                        $('#smallModel').modal('hide');
                        $(".modal-backdrop").remove();
                        $.wnoty({
                            type: 'success',
                            message: data.message,
                            autohideDelay: 1000,
                            position: 'top-right'
                        });
                        setTimeout(function () {
                            location.reload(true);
                        }, 2000);
                    } else if (data.status == 'error') {
                        $.wnoty({
                            type: 'error',
                            message: data.message,
                            autohideDelay: 2000,
                            position: 'top-right'
                        });
                    }
                },
            });
        }
    }

    return false;
});


// $(document).on('click','#save_nav',function(){
//         event.preventDefault();
//         $("#form_sample_add").valid();


       
//          var slot = $("input[name='title']").val();
       
     

//     // Check if all required fields are filled out
//     if (slot !== '' ) {
          


//         $.ajax({
//         type:'post',
//         url: '<?php echo base_url("Admin/add_team");?>',
//         data: new FormData($("#form_sample_add")[0]),
//         contentType: false,
//         processData: false, 
//         success:function(resp){
//         var data=$.parseJSON(resp);
//         if(data.status == 'success'){
//         $('#form_sample_add')[0].reset();

//           $('#smallModel').modal('hide');
//          $(".modal-backdrop").remove();
//         $.wnoty({
//         type: 'success',
//         message: data.message,
//         autohideDelay: 1000,
//         position: 'top-right'

//         });
//                  setTimeout(function(){
//          location.reload(true);
//         },2000);

//         }else if(data.status == 'error'){

//           $.wnoty({
//                 type: 'error',
//                 message: data.message,
//                 autohideDelay: 2000,
//                 position: 'top-right'

//                 });
//         }
//         },
//         });
//         } else {

//         }

//         return false;
//         })

  

          $('#example4').on('click', '.tblEditBtn', function() {
       // $('.tblEditBtn').click(function() {
            // Get the data attributes from the button
            var id = $(this).data('id');
            
            $('#smallModel .modal-title').text("Update Student");
            $('#smallModel #save_nav').text("Update");
            // Make an AJAX request to retrieve the data for the ID
            $.ajax({
                url: '<?php echo base_url("Admin/getstudentsByID"); ?>?id=' + id,
                method: 'GET',
                data: { id: id },
                dataType: 'json',
                success: function(response) {
                    // Populate the modal with the data returned from the server
                    $('#smallModel [name="id"]').val(response.id);
                  
                    $('#smallModel [name="name"]').val(response.name);
                    $('#smallModel [name="email"]').val(response.email);
                    $('#smallModel [name="team"]').val(response.team);
                    $('#smallModel [name="number"]').val(response.number);
                    $('#smallModel [name="roll_no"]').val(response.roll_no);
                        $('#smallModel [name="class"]').val(response.class);
                        $('#smallModel [name="branch"]').val(response.branch);
                        $('#smallModel [name="gender"]').val(response.gender);
                        $('#smallModel [name="dob"]').val(response.dob);
           
               
                     // Open the modal
                    $('#smallModel').modal('show');
                },
                error: function(xhr, status, error) {
                    console.log(error); // Handle the error if any
                }
            });
        });
    

         $(document).on('click','#update',function(){
        event.preventDefault();
           $("#form_sample_1").valid();
         
         $.ajax({
        type:'post',
        url: '<?php echo base_url("Admin/update_student");?>',
        data: new FormData($("#form_sample_1")[0]),
        contentType: false,
        processData: false, 
        success:function(resp){
        var data=$.parseJSON(resp);
        if(data.status == 'success'){
        $('#form_sample_1')[0].reset();
          $('#staticBackdrop').modal('hide');
         $(".modal-backdrop").remove();

        $.wnoty({
        type: 'success',
        message: data.message,
        autohideDelay: 1000,
        position: 'top-right'

        });
         setTimeout(function(){
         location.reload(true);
        },2000);
  


       }else if(data.status == 'error'){
       
        $('#staticBackdrop').modal('hide');
         $(".modal-backdrop").remove();
              $.wnoty({
                    type: 'error',
                    message: data.message,
                    autohideDelay: 2000,
                    position: 'top-right'

                    });
               setTimeout(function(){
         location.reload(true);
        },2000);
        }
        },
        });
       
     
        return false;
        })

         //delete
    $(document).on('click','.delete', function (e) {
    //var id = $(this).parents('tr').find('#id').val();
    var id = $(this).attr('data-id');
   $.confirm({
    title: 'Delete Warning!',
    content: 'Are you sure, you want to delete this?',
    boxWidth: '25%',
    useBootstrap: false,
    buttons: {
    delete: {
    text: 'Delete',
    btnClass: 'btn-primary',
    action: function(){
    $.ajax({
    type: 'post',
    url: '<?php echo base_url('Admin/delete_student') ?>',
    data: {id:id},
    success: function (response) {
     var data=$.parseJSON(response);
     if(data.status == 'success'){

    $.wnoty({
    type: 'success',
    message: data.message,
    autohideDelay: 1000,
    position: 'top-right'

    });
    setTimeout(function(){
         location.reload(true);
        },2000);
     }
    } 
   });
    }
    },
    close: function () {
    }
    }
    });

    });    


</script>

</html>