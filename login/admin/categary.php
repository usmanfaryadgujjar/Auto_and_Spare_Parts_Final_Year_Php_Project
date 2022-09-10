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
                    <H1>Categary</H1>

                    <hr>
                </div>
                </div>
                </div>




            <!-- row -->
            <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                <div class="row">
                <div class="col-2" align="right">
      		<a href="#" data-toggle="modal" data-target="#add_category_modal" class="btn btn-info btn-lg">Add New Category</a>
      	</div>
      <hr>



                </div>

                <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th></th>
              <th>Name</th>
              <th>Update / Delete</th>
                <th>Ref</th>
            </tr>
          </thead>
          <tbody id="category_list">
           
              
          </tbody>
        </table>
      </div>
                </div>
                </div>


            </div>

                 <!-- Modal -->
                 <div class="modal fade" id="add_category_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add-category-form" enctype="multipart/form-data">
        	<div class="">
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Category Name</label>
		        		<input type="text" name="cat_title" class="form-control" placeholder="Enter Brand Name">
		        	</div>
        		</div>
        		<input type="hidden" name="add_category" value="1">
        		<div class="col-12 " style="float:right">
        			<button type="button" class="btn btn-success add-category">Add Category</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        		</div>
        	</div>
        	<br>
            <hr>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<!--Edit category Modal -->
<div class="modal fade" id="edit_category_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit-category-form" enctype="multipart/form-data">
          <div class="">
            <div class="col-12">
              <input type="hidden" name="cat_id">
              <div class="form-group">
                <label>Category Name</label>
                <input type="text" name="e_cat_title" class="form-control" placeholder="Enter Brand Name">
              </div>
            </div>
            <input type="hidden" name="edit_category" value="1">
            <div style="float:right">
              <button type="button" class="btn btn-success edit-category-btn">Update Category</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
              <br><hr>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->


              



    
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

getCategories();

function getCategories(){
    $.ajax({
        url : 'Admin_Data_Class/GetProduct.php',
        method : 'POST',
        data : {GET_CATEGORIES:1},
        success : function(response){
            console.log(response);
            var resp = $.parseJSON(response);

            var brandHTML = '';

            
            $.each(resp.message, function(index, value){
                brandHTML += '<tr>'+
                                '<td></td>'+
                                '<td>'+ value.cat_title +'</td>'+
                                '<td><a class="btn btn-sm btn-info edit-category">UPDATE<span style="display:none;">'+JSON.stringify(value)+'</span><i class=" glyphicon glyphicon-pencil"></i></a>&nbsp;<a cid="'+value.cat_id+'" class="btn btn-sm btn-danger delete-category"><i class=" glyphicon glyphicon-trash">DELETE</i></a></td>'+
                                '<td>'+ value.admin_id +'</td>'+
                            '</tr>';
            });

            $("#category_list").html(brandHTML);

        }
    })
    
}

$(".add-category").on("click", function(){

    $.ajax({
        url : 'Admin_Data_Class/GetProduct.php',
        method : 'POST',
        data : $("#add-category-form").serialize(),
        success : function(response){
            var resp = $.parseJSON(response);
            if (resp.status == 202) {
                getCategories();
                alert(resp.message);
            }else if(resp.status == 303){
                alert(resp.message);
            }
            $("#add_category_modal").modal('hide');
        }
    })

});

$(document.body).on("click", ".edit-category", function(){

    var cat = $.parseJSON($.trim($(this).children("span").html()));
    $("input[name='e_cat_title']").val(cat.cat_title);
    $("input[name='cat_id']").val(cat.cat_id);

    $("#edit_category_modal").modal('show');

    

});

$(".edit-category-btn").on('click', function(){

    $.ajax({
        url : 'Admin_Data_Class/GetProduct.php',
        method : 'POST',
        data : $("#edit-category-form").serialize(),
        success : function(response){
            var resp = $.parseJSON(response);
            if (resp.status == 202) {
                getCategories();
                alert(resp.message);
            }else if(resp.status == 303){
                alert(resp.message);
            }
            $("#edit_category_modal").modal('hide');
        }
    })

});

$(document.body).on('click', '.delete-category', function(){

    var cid = $(this).attr('cid');

    if (confirm("Are you sure to delete this category")) {
        $.ajax({
            url : 'Admin_Data_Class/GetProduct.php',
            method : 'POST',
            data : {DELETE_CATEGORY:1, cid:cid},
            success : function(response){
                var resp = $.parseJSON(response);
                if (resp.status == 202) {
                    alert(resp.message);
                    getCategories();
                }else if(resp.status == 303){
                    alert(resp.message);
                }
            }
        })
    }else{
        alert('Cancelled');
    }

    

});

});
    
</script>

    
</body>

</html>