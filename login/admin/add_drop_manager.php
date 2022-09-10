
<!DOCTYPE html>
<html lang="en">

<?php 
session_start();  
if (!isset($_SESSION['admin_id'])) {
  header("location:../index.php");
}


?>

<!--header-->
<?php  
include'header.php';
?>


<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
           <!-- <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a> -->
            <h4 class="text-white p-4">Auto Parts</h4>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
   
        <?php  
include'header2.php';
?>


        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php  
include'sidebar.php';
?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">




        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                <div class="row">
                    <hr>
                    <H1>Manager Account</H1>

                    <hr>
                </div>
                </div>
                </div>





            <!-- row -->
            <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                <div align="right">
					<button type="button" id="add_admin_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add New Manager</button>
				</div>

                <div class="row">

                <hr>

<div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th></th>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
              <th>CNIC No</th>
            <th>Add / Drop</th>
          </tr>
        </thead>
        <tbody id="admin_list">
          
            
        </tbody>
      </table>
    </div>

    <div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
				<h4 class="modal-title">Add New Manager</h4>	
                <button type="button" class="close" data-dismiss="modal">&times;</button>
					
				</div>
				<div class="modal-body">
                    <label>Name:</label>
					<input type="text" name="ad_name" id="ad_name" class="form-control" />
                    <br />
                    <label>CNIC NO:</label>
					<input type="text" name="cnic" id="cnic" class="form-control" />
                    <br />
                    <label>Email:</label>
					<input type="text" name="email" id="email" class="form-control" />
                    <br />
                    <label>Password</label>
					<input type="text" name="password" id="password" class="form-control" />
                    <br />
                    
				<div class="modal-footer">
					<input type="hidden" name="operation_admin" id="operation_admin" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
            </div>
		</form>
	</div>
</div>

                  
                  
                  
<!-- Edit Admin Modal start --------->
<div class="modal fade" id="edit_admin_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Manager List</h5>
        
      </div>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="modal-body">
        <form id="edit-admin-form" method="POST" enctype="multipart/form-data">
          <div class="">
            <div class="col-5">
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="ad_name" class="form-control">
              </div>
            </div>
               <div class="col-5">
              <div class="form-group">
                <label>CNIC NO</label>
                <input type="text" name="cnic" class="form-control">
              </div>
            </div>
           
              <div class="col-5">
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
              </div>
            </div>
                <div class="col-5">
              <div class="form-group">
                <label>New Password</label>
                <input type="text" name="password" class="form-control" Placeholder="Enter New Password">
              </div>
            </div>
              <input type="hidden" name="id">
            
            <input type="hidden" name="edit_admin" value="1">
            <div class="col-12 modal-footer">
              <button type="button" class="btn btn-success sub-edit-admin">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <br>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Edit Modal end -->


                
                    



                </div>
                </div>
                </div>




            </div>




    
        </div>
        
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">

        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <?php  
include'footer_scrt.php';
?>

<script>
        
        $(document).ready(function(){
            
            
           $('#add_admin_button').click(function(){
               $('#user_form')[0].reset();
               $('#operation_admin').val("Add_admin");
               
           });
           
           
           $(document).on('submit', '#user_form', function(event){
               event.preventDefault();
               var firstNam = $('#ad_name').val();
               var lastName = $('#email').val();
               var irstNameq = $('#password').val();
               var irstcni = $('#cnic').val();
                   
               if(firstNam != '' && irstNameq != '' && irstNameq !='' && irstcni !='')
               {
                   $.ajax({
                       url:"Admin_Data_Class/Get_Manager_list.php",
                       method:'POST',
                       data:new FormData(this),
                       contentType:false,
                       processData:false,
                       success:function(data)
                       {
                           alert(data);
                           $('#user_form')[0].reset();
                           $('#userModal').modal('hide');
                           getAdmins();
                           //dataTable.ajax.reload();
                       }
                   });
               }
               else
               {
                   alert("All Fields are Required");
               }
           });
           
           
            
            
            getAdmins();
                   
           function getAdmins(){
               $.ajax({
                   url : 'Admin_Data_Class/Get_Manager_list.php',
                   method : 'POST',
                   data : {GET_ADMIN:1},
                   success : function(response){
                       console.log(response);
                       var resp = $.parseJSON(response);
       
                       if (resp.status == 202) {
                           var adminHTML = '';
       
                           $.each(resp.message, function(index, value){
                               adminHTML += '<tr>'+
                                               '<td></td>'+
                                               '<td>'+ value.name +'</td>'+
                                               '<td>'+ value.email +'</td>'+
                                               '<td>'+ value.seller_or_admin +'</td>'+
                                               '<td>'+ value.cnic +'</td>'+
                                               '<td><a class="btn btn-sm btn-info edit-admin"><span style="display:none;">'+JSON.stringify(value)+'</span><i class=" glyphicon glyphicon-pencil">UPDATE</i></a>&nbsp;<a cid="'+value.id+'" class="btn btn-sm btn-danger delete-seller"><i class=" glyphicon glyphicon-trash"></i>DELETE</a></td>'+
                                           '</tr>';
                           });
       
                           
                           
                           $("#admin_list").html(adminHTML);
       
                       }else if(resp.status == 303){
                           $("#admin_list").html(resp.message);
                       }
       
                       
       
                       
       
                   }
               })
               
           }
                   
           $(document.body).on('click', '.delete-seller', function(){
       
               var cid = $(this).attr('cid');
       
               if (confirm("Are you sure to delete Manager")) {
                   $.ajax({
                       url : 'Admin_Data_Class/Get_Manager_list.php',
                       method : 'POST',
                       data : {DELETE_Admin:1, cid:cid},
                       success : function(response){
                           var resp = $.parseJSON(response);
                           if (resp.status == 202) {
                               getAdmins();
                               alert(resp.message);
                           
                           }else if(resp.status == 303){
                               alert(resp.message);
                           }
                       }
                   })
               }else{
                   alert('Cancelled');
               }
       
               
       
           });
            
            /* show value */
            $(document.body).on("click", ".edit-admin", function(){
       
               var admin = $.parseJSON($.trim($(this).children("span").html()));
               console.log(admin);
               $("input[name='ad_name']").val(admin.name);
               $("input[name='email']").val(admin.email);
                $("input[name='id']").val(admin.id);
                $("input[name='cnic']").val(admin.cnic);
               // $("input[name='password']").val(admin.password);
               $("#edit_admin_modal").modal('show');
       
               
       
           });
            
            
            
          
            $(".sub-edit-admin").on('click', function(){
       
               $.ajax({
       
                   url : 'Admin_Data_Class/Get_Manager_list.php',
                   method : 'POST',
                   data : new FormData($("#edit-admin-form")[0]),
                   contentType : false,
                   cache : false,
                   processData : false,
                   success : function(response){
                       console.log(response);
                       var resp = $.parseJSON(response);
                       if (resp.status == 202) {
                           $("#edit-admin-form").trigger("reset");
                           $("#edit_admin_modal").modal('hide');
                           getAdmins();
                           alert(resp.message);
                       }else if(resp.status == 303){
                           alert(resp.message);
                       }
                   }
       
               });
       
       
           });
           
            
            
            
            
       });
               
           </script>
           
    
</body>

</html>