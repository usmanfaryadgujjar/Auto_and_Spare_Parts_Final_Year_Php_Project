<!DOCTYPE html>
<html lang="en">


<
<?php 
session_start();  
if (!isset($_SESSION['admin_id'])) {
  header("location:../../index.php");
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
                    

 
                <script src="../../assets/B/js/jquery2.js"></script>



                <hr>
                	<div align="right">
					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add</button>
				</div>
			
                  
                  <hr>

                                  <div class="table-responsive">
                                    <table class="table table-striped table-sm">
                                      <thead>
                                        <tr>
                                          <th>Name</th>
                                          <th>Image</th>
                                          <th>Product Condition</th>
                                          <th>Price Rs</th>
                                          <th>Quantity</th>
                                          <th>Category</th>
                                          <th>Brand</th>
                                          <th>Add / Drop</th>
                                        </tr>
                                      </thead>
                                      <tbody id="product_list">
                                      
                                        </tbody>
                                    </table>
                                  </div>






                </div>
                </div>
                </div>




            </div>

        <!----add pro--->
        <div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add Product</h4>
				</div>
				<div class="modal-body">
                    <label>Name:</label>
					<input type="text" name="product_title" id="product_title" class="form-control" />
                    <br />
                    <div class="col-10">
        			<div class="form-group">
		        		<label>Brand Name</label>
		        		<select class="form-control brand_list" id="brand_id" name="brand_id">
		        			<option value="">Select Brand</option>
		        		</select>
		        	</div>
        		    </div>
                    <br />
                    <div class="col-10">
        			<div class="form-group">
		        		<label>Product Condition</label>
		        		<select class="form-control" id="product_condition_id" name="product_condition_id">
		        			<option value="New_product">New Product </option>
                            <option value="Old_product">Old Product But Good Condition</option>
		        		</select>
		        	</div>
        		    </div>
                    <br />
                    <div class="col-10">
        			<div class="form-group">
		        		<label>Category Name</label>
		        		<select class="form-control category_list" id="category_id" name="category_id">
		        			<option value="">Select Category</option>
		        		</select>
		        	 </div>
        		    </div>
                    <br />
                     <div class="col-5">
                      <div class="form-group">
                        <label>Product Qty</label>
                        <input type="" id="product_qty"  name="product_qty" class="form-control" placeholder="Enter Product Quantity">
                      </div>
                    </div>
                    <br />
                    <div class="col-5">
        			<div class="form-group">
		        		<label>Product Price</label>
		        		<input type="" id="product_price" name="product_price" class="form-control" placeholder="Enter Product Price">
		        	</div>
        		  </div>
                    <br />
                    <label>Description</label>
					<input type="text" name="product_desc" id="product_desc" class="form-control" />
                    <br />
                    <label>Keywords</label>
					<input type="text" name="product_keywords" id="product_keywords" class="form-control" />
                    <br />
                    <label>Select Image</label>
					<input type="file" name="user_image" id="user_image" />
					<span id="user_uploaded_image"></span>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>
                  
                  
<!-- Edit Product Modal start -->
<div class="modal fade" id="edit_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit-product-form" enctype="multipart/form-data">
          <div class="">
            <div class="col-5">
              <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="e_product_name" class="form-control" placeholder="Product Name">
              </div>
            </div>
            <div class="col-5">
              <div class="form-group">
                <label>Brand Name</label>
                <select class="form-control brand_list" name="e_brand_id">
                  <option value="">Select Brand</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Category Name</label>
                <select class="form-control category_list" name="e_category_id">
                  <option value="">Select Category</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Description</label>
                <input class="form-control" name="e_product_desc" placeholder="Product description">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Qty</label>
                <input type="text" name="e_product_qty" class="form-control" placeholder="Enter Product Quantity">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Price</label>
                <input type="text" name="e_product_price" class="form-control" placeholder="Enter Product Price">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Keyword </label>
                <input type="text" name="e_product_keywords" class="form-control" placeholder="Enter Product Keywords">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Image </label>
                <input type="file" name="e_product_image" class="form-control">
                <img src="../product_images/1.0x0.jpg" class="img-fluid" width="50">
              </div>
            </div>
            <input type="hidden" name="pid">
            <input type="hidden" name="edit_product" value="1">
            <div class="col-12 modal-footer">
              <button type="button" class="btn btn-primary submit-edit-product">Add Product</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <br>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Edit Product Modal end -->



    
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
            
            
           $('#add_button').click(function(){
               $('#user_form')[0].reset();
               $('#operation').val("Add");
               
           });
           
           
           $(document).on('submit', '#user_form', function(event){
               event.preventDefault();
               var firstNam = $('#product_title').val();
               var lastName = $('#brand_id').val();
               var irstNameq = $('#product_condition_id').val();
               var frstNamea = $('#category_id').val();
               var fistNamev = $('#product_qty').val();
               var fistNames = $('#product_price').val();
               var fistNamef = $('#product_desc').val();
               var fistNameg = $('#product_keywords').val();
               var extension = $('#user_image').val().split('.').pop().toLowerCase();
               if(extension != '')
               {
                   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                   {
                       alert("Invalid Image File");
                       $('#user_image').val('');
                       return false;
                   }
               }	
               if(firstNam != '' && irstNameq != '')
               {
                   $.ajax({
                       url:"add_product.php",
                       method:'POST',
                       data:new FormData(this),
                       contentType:false,
                       processData:false,
                       success:function(data)
                       {
                           alert(data);
                           $('#user_form')[0].reset();
                           $('#userModal').modal('hide');
                           //dataTable.ajax.reload();
                       }
                   });
               }
               else
               {
                   alert("Both Fields are Required");
               }
           });
           
           
            
       
           var productList;
       
           function getProducts(){
               $.ajax({
                   url : 'Admin_Data_Class/GetProduct.php',
                   method : 'POST',
                   data : {GET_PRODUCT:1},
                   success : function(response){
                       //console.log(response);
                       var resp = $.parseJSON(response);
                       if (resp.status == 202) {
       
                           var productHTML = '';
       
                           productList = resp.message.products;
       
                           if (productList) {
                               $.each(resp.message.products, function(index, value){
       
                                   productHTML += '<tr>'+
                                                     '<td>'+ value.product_title +'</td>'+
                                                     '<td><img width="60" height="60" src="../Image_Product/'+value.product_image+'"></td>'+
                                                       '<td>'+value.product_condition+'</td>'+
                                                     '<td>'+ value.product_price +'</td>'+
                                                     '<td>'+ value.product_qty +'</td>'+
                                                     '<td>'+ value.cat_title +'</td>'+
                                                     '<td>'+ value.brand_title +'</td>'+
                                                     '<td><a class="btn btn-sm btn-info edit-product" style="color:#fff;"><span style="display:none;">'+JSON.stringify(value)+'</span><i class=" glyphicon glyphicon-pencil">Edit</i></a>&nbsp;<a pid="'+value.product_id+'" class="btn btn-sm btn-danger delete-product" style="color:#fff;"><i class=" glyphicon glyphicon-trash">Delete</i></a></td>'+
                                                   '</tr>';
       
                               });
       
                               $("#product_list").html(productHTML);
                           }
       
                           
       
       
                           var catSelectHTML = '<option value="">Select Category</option>';
                           $.each(resp.message.categories, function(index, value){
       
                               catSelectHTML += '<option value="'+ value.cat_id +'">'+ value.cat_title +'</option>';
       
                           });
       
                           $(".category_list").html(catSelectHTML);
       
                           var brandSelectHTML = '<option value="">Select Brand</option>';
                           $.each(resp.message.brands, function(index, value){
       
                               brandSelectHTML += '<option value="'+ value.brand_id +'">'+ value.brand_title +'</option>';
       
                           });
       
                           $(".brand_list").html(brandSelectHTML);
       
                       }
                   }
       
               });
           }
       
           getProducts();
            
            
            
       
           $(document.body).on('click', '.edit-product', function(){
       
               console.log($(this).find('span').text());
       
               var product = $.parseJSON($.trim($(this).find('span').text()));
       
               console.log(product);
       
               $("input[name='e_product_name']").val(product.product_title);
               $("select[name='e_brand_id']").val(product.brand_id);
               $("select[name='e_category_id']").val(product.cat_id);
               $("textarea[name='e_product_desc']").val(product.product_desc);
               $("input[name='e_product_qty']").val(product.product_qty);
               $("input[name='e_product_price']").val(product.product_price);
               $("input[name='e_product_keywords']").val(product.product_keywords);
               $("input[name='e_product_image']").siblings("img").attr("src", "../Image_Product/"+product.product_image);
               $("input[name='pid']").val(product.product_id);
               $("#edit_product_modal").modal('show');
       
           });
       
           $(".submit-edit-product").on('click', function(){
       
               $.ajax({
       
                   url : 'Admin_Data_Class/GetProduct.php',
                   method : 'POST',
                   data : new FormData($("#edit-product-form")[0]),
                   contentType : false,
                   cache : false,
                   processData : false,
                   success : function(response){
                       console.log(response);
                       var resp = $.parseJSON(response);
                       if (resp.status == 202) {
                           $("#edit-product-form").trigger("reset");
                           $("#edit_product_modal").modal('hide');
                           getProducts();
                           alert(resp.message);
                       }else if(resp.status == 303){
                           alert(resp.message);
                       }
                   }
       
               });
       
       
           });
       
           $(document.body).on('click', '.delete-product', function(){
       
               var pid = $(this).attr('pid');
               if (confirm("Are you sure to delete this item ?")) {
                   $.ajax({
       
                       url : 'Admin_Data_Class/GetProduct.php',
                       method : 'POST',
                       data : {DELETE_PRODUCT: 1, pid:pid},
                       success : function(response){
                           console.log(response);
                           var resp = $.parseJSON(response);
                           if (resp.status == 202) {
                               getProducts();
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