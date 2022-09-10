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
            <!-- row -->
            <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                <div class="row">
                    <hr>
                    <H1>Customer Order List</H1>

                    <hr>
                </div>
                </div>
                </div>
            <div class="card">
                <div class="card-body">
                <div class="row">
                    

                <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Order </th>
             <th>Customer Id</th>
              <th>Product Id</th>
              <th>Product Name</th>
              <th>Quantity</th>
              <th>Payment Status</th>
                <th>Order Status</th>
                <th>Confirm Update</th>
                
            </tr>
          </thead>
          <tbody id="customer_order_list">
           
          </tbody>
        </table>
      </div>
    
              
                                     
<!-- Edit Admin Modal start --------->
<div class="modal fade" id="edit_admin_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order Confirm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit-admin-form" method="POST" enctype="multipart/form-data">
          <div class="">
            <div class="col-5">
              <div class="form-group">
                <label>Order Id</label>
                <input type="text" name="order_id" class="form-control" readonly>
              </div>
            </div>
            <div class="col-5">
              <div class="form-group">
                <label>Customer Id</label>
                <input type="text" name="user_id" class="form-control" readonly>
              </div>
            </div>
      
               <div class="col-5">
              <div class="form-group">
                <label>Order Status</label>
                <input type="text" name="order_status" class="form-control" >
              </div>
            </div>
      
              
              <input type="hidden" name="seller_id">
            
            <input type="hidden" name="edit_customer" value="1">
            <div class="col-12 modal-footer">
              <button type="button" class="btn btn-primary sub-edit-admin">Submit</button>
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

getCustomerOrders();

    
	function getCustomerOrders(){
		$.ajax({
			url : 'Admin_Data_Class/GetCustomerOrderLister.php',
			method : 'POST',
			data : {GET_CUSTOMER_ORDERS:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var customerOrderHTML = "";

					$.each(resp.message, function(index, value){

						customerOrderHTML +='<tr>'+
								            
								              '<td>'+ value.order_id +'</td>'+
                                                '<td>'+ value.user_id +'</td>'+
								              '<td>'+ value.product_id +'</td>'+
								              '<td>'+ value.product_title +'</td>'+
								              '<td>'+ value.qty +'</td>'+
								              '<td>'+ value.payment_status +'</td>'+
                                                '<td>'+value.order_status+'</td>'+
                                                '<td><a class="btn btn-sm btn-info edit-customer-ord"><span style="display:none;">'+JSON.stringify(value)+'</span><i class=" glyphicon glyphicon-pencil">Edit</i></a>&nbsp;<a pid="'+value.order_id+'" class="btn btn-sm btn-danger delete-order" style="color:#fff;"><i class=" glyphicon glyphicon-trash">Delete</i></a> - By Edit : '+value.edit_status+'</td></tr>';

					});

					$("#customer_order_list").html(customerOrderHTML);

				}else if(resp.status == 303){
					$("#customer_order_list").html(resp.message);
				}

			}
		})
		
	}

     function load_data(query)
             {
              $.ajax({
               url:"Admin_Data_Class/GetCustomerOrderLister.php",
               method:"POST",
               data:{query:query},
               success:function(data)
               {
                $('#customer_order_list').html(data);
               }
              });
             }

             $('#search_text').keyup(function(){
              var search = $(this).val();
              if(search != '')
              {
               load_data(search);
              }else{
                  getCustomerOrders();
                }
     
 });
    
    
      /* show value */
     $(document.body).on("click", ".edit-customer-ord", function(){

		var admin = $.parseJSON($.trim($(this).children("span").html()));
		console.log(admin);
		$("input[name='order_id']").val(admin.order_id);
         $("input[name='user_id']").val(admin.user_id);
         $("input[name='order_status']").val(admin.order_status);
     	$("#edit_admin_modal").modal('show');

		

	});
   
    
     $(".sub-edit-admin").on('click', function(){

		$.ajax({

			url : 'Admin_Data_Class/GetCustomerOrderLister.php',
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
					
					alert(resp.message);
                    getCustomerOrders();
				}else if(resp.status == 303){
					alert(resp.message);
				}
			}

		});


	});
    
     
  $(document.body).on('click', '.delete-order', function(){

		var pid = $(this).attr('pid');
		if (confirm("Are You Sure To Delete Order ?")) {
			$.ajax({

				url : 'Admin_Data_Class/GetCustomerOrderLister.php',
				method : 'POST',
				data : {DELETE_Customer_order: 1, pid:pid},
				success : function(response){
					console.log(response);
					var resp = $.parseJSON(response);
					if (resp.status == 202) {
						getCustomerOrders();
					}else if (resp.status == 303) {
						alert(resp.message);
					}
				}

			});
		}else{
			alert('Cancelled');
		}
		

	});        
  


});



        
    </script>

    
</body>

</html>