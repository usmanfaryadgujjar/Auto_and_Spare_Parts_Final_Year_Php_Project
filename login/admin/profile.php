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

                    <H2>
                      Profile Update
                  </H2>
                  
                    <hr>
                </div>
                </div>
                </div>
                </div>


            <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                <div class="row">



                           <!------------Body of Content Part --------->
            <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-default">
              
              <div class="panel-body">
 
                  
                  <div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="pass_ad_back_message">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
                  <br>
                  
                  <form method="post" onsubmit="return false">
                        <?PHP
					// Id from List Page
                    include('../db/db.php');
                
					$selecte_id = $_SESSION['admin_id'];
						//Step:02 Database Connection
						//include('db2/db2.php');
					$data = "SELECT * FROM admin WHERE id='$selecte_id'";
					$view = mysqli_query($con,$data);
					while($_view = mysqli_fetch_assoc($view))
					{		
				 //  $selected_id = $_view['Code'];
					?>
                        
						<div class="row">
							<div class="col-md-7">
								<label for="name">Name</label>
								<input type="text" id="name" name="name" value="<?PHP echo $_view['name'] ?>" class="form-control" required>
							</div>
							
						</div>
                        <br>
						<div class="row">
							<div class="col-md-7">
								<label for="email">Email</label>
								<input type="text" class="form-control" value="<?PHP echo $_view['email'] ?>" readonly>
							</div>
						</div>
                        <br>
						<div class="row">
							<div class="col-md-7">
								<label for="password">Password</label>
								<input type="password" id="password" name="password"class="form-control"  required>
							</div>
						</div>
						<br>
                      <div class="row" style="margin-left: auto; margin-right: auto;">
							<div class="col-md-7">
								<input  value="Confirm" type="button" id="Admin_pass_chang" class="btn btn-success">
							</div>
						</div>
						
					<?php } ?>
					</form>
				
                  
                  
                  
              </div>
            </div>
        </div>
            
            
      </div>
    </div>
    
    <script>
    
        $(document).ready(function(){

     $("#Admin_pass_chang").click(function(event){
		event.preventDefault();
			$.ajax({
			url		:	"profile_Admin_pass_change_verfi.php",
			method	:	"POST",
			data	:	$("form").serialize(),
			success	:	function(data){ 
				$("#pass_ad_back_message").html(data);
			}
		})
		
	})
   
        })
        
    </script>

                    



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


    
</body>

</html>