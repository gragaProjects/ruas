<!-- <div class="page-footer">
            <div class="page-footer-inner"> 
            
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div> -->
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="<?php echo base_url(); ?>assets/backend_assets/bundles/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend_assets/bundles/popper/popper.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend_assets/bundles/jquery-blockUI/jquery.blockui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend_assets/bundles/jquery.slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend_assets/bundles/feather/feather.min.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url(); ?>assets/backend_assets/bundles/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend_assets/bundles/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- counterup -->
    <script src="<?php echo base_url(); ?>assets/backend_assets/bundles/counterup/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend_assets/bundles/counterup/jquery.counterup.min.js"></script>
    <!-- Common js-->
    <script src="<?php echo base_url(); ?>assets/backend_assets/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend_assets/layout.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend_assets/theme-color.js"></script>
    <!-- material -->
    <script src="<?php echo base_url(); ?>assets/backend_assets/bundles/material/material.min.js"></script>
    <!-- chart js -->
   <!--  <script src="<?php echo base_url(); ?>assets/backend_assets/bundles/chart-js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend_assets/bundles/chart-js/utils.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend_assets/bundles/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend_assets/data/apex-home.js"></script> -->

     <!-- datatable -->
    <script src="<?php echo base_url(); ?>assets/datatables/jquery.dataTables.min.js"></script>
   
   <!-- New -->
    <script src="<?php echo base_url(); ?>assets/wnoty/wnoty.js"></script>
    <script src="<?php echo base_url(); ?>assets/wnoty/jquery-confirm.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script> 
 
  <?php $this->load->view('Backend/common'); ?> 

    <script type="text/javascript">
   

    

     $('#example4').DataTable({

      });
  // "pageLength": 1
    
      
  
    /*Notification*/
    /*

    $(document).ready(function() {
    // Get the number of unread notifications and display it in the badge.
    $.get('<?php echo base_url();?>/notification/get_admin_notifications_count', function(data) {
    $('.count').text(data);
    });
    // Show the notifications in a modal dialog when the user clicks on the notifications button.
    $('#notifications-button').click(function() {
    $.get('<?php echo base_url();?>/notification/get_notifications', function(data) {
      console.log('Test');
    $('.message-center').html(data);
    //$('#notifications-modal').modal('show');
    });
    });
    // Mark a notification as read when the user clicks on it.
   $('#notifications-modal').on('click', '.unread', function() {
   // $('.unread').click(function() {
    var notification_id = $(this).attr('data-notification-id'); //$(this).data('notification-id');
    var table = $(this).attr('data-table'); //$(this).data('notification-id');
    var url = $(this).attr('data-url'); //$(this).data('notification-id');
    //console.log(notification_id)
    $.post('<?php echo base_url();?>/notification/mark_notification_as_read', { notification_id: notification_id,table:table });
    $(this).removeClass('unread').addClass('read');
    var count = $('.count').text();
    $('.count').text(count - 1);
    // var count = $('.notification-badge').text();
    // $('.notification-badge').text(count - 1);
    if(url){
          setTimeout(function(){
        window.location.href = '<?php echo base_url()?>'+url;//Admin/All_Navigators
        },2000);
    }
   
    });
   ////////new
   //clear
    $(document).on('click','#clear',function(){
     //$('#header_notification_bar').on('click', '#clear', function() {
    var table = $(this).attr('data-table'); 
    var url = $(this).attr('data-url'); 
    //console.log(notification_id)
    $.post('<?php echo base_url();?>/notification/All_mark_notification_as_read', {table:table });
    $(".unread").removeClass('unread').addClass('read');
    $("#notifications-modal").html('');
    //$(this).removeClass('unread').addClass('read');
    var count = $('.count').text();
    $('.count').text(0);
    // var count = $('.notification-badge').text();
    // $('.notification-badge').text(count - 1);
    if(url){
          setTimeout(function(){
        window.location.href = '<?php echo base_url()?>'+url;//Admin/All_Navigators
        },2000);
    }
   
    });
    });
*/
    </script>