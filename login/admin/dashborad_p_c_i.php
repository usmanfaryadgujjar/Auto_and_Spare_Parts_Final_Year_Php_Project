<?php
include('../db/db.php');
// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

    $Totalsellercustomer=0;
                    
                    $data = "SELECT * FROM user_info ";
					$view = mysqli_query($con,$data);
					while($_view = mysqli_fetch_assoc($view))
					{		
                        $Totalsellercustomer++;
                    }
    
    $Totalseller=0;
                    $data2 = "SELECT * FROM user_info where user_type='seller' ";
					$view2 = mysqli_query($con,$data2);
					while($_view2 = mysqli_fetch_assoc($view2))
					{		
                        $Totalseller++;
                    }
    
    $TotalsellerActive=0;
                    $data3 = "SELECT * FROM admin where seller_or_admin='seller' ";
					$view3 = mysqli_query($con,$data3);
					while($_view3 = mysqli_fetch_assoc($view3))
					{		
                        $TotalsellerActive++;
                    }
    
    $TotalsellerDisactive=$Totalseller-$TotalsellerActive;
                    
    
    $TotalCustomer=0;
                    $data5 = "SELECT * FROM user_info where user_type='customer' ";
					$view5 = mysqli_query($con,$data5);
					while($_view5 = mysqli_fetch_assoc($view5))
					{		
                        $TotalCustomer++;
                    }
    
    $TotalAdmin=0;
                    $data6 = "SELECT * FROM admin where seller_or_admin='admin' ";
					$view6 = mysqli_query($con,$data6);
					while($_view6 = mysqli_fetch_assoc($view6))
					{		
                        $TotalAdmin++;
                    
                    }
                    
    
    $TotalManager=0;
                    $data7 = "SELECT * FROM admin where seller_or_admin='manager' ";
					$view7 = mysqli_query($con,$data7);
					while($_view7 = mysqli_fetch_assoc($view7))
					{		
                        $TotalManager++;
                    
                    }
    
                    $TotalOrder=0;

                    $data8 = "SELECT * FROM orders ";
					$view8 = mysqli_query($con,$data8);
					while($_view8 = mysqli_fetch_assoc($view8))
					{		
                        $TotalOrder++;
                    
                    }
    
                    $TotalCategories=0;

                    $data9 = "SELECT * FROM categories ";
					$view9 = mysqli_query($con,$data9);
					while($_view9 = mysqli_fetch_assoc($view9))
					{		
                        $TotalCategories++;
                    
                    }
                    $Totalbrands=0;

                    $data10 = "SELECT * FROM brands ";
					$view10 = mysqli_query($con,$data10);
					while($_view10 = mysqli_fetch_assoc($view10))
					{		
                        $Totalbrands++;
                    
                    }
                    $Totalproducts=0;

                    $data11 = "SELECT * FROM products ";
					$view11 = mysqli_query($con,$data11);
					while($_view11 = mysqli_fetch_assoc($view11))
					{		
                        $Totalproducts++;
                    
                    }

    
                        
					?>
   
   



<div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Orders </div>
                                    <div class="stat-digit"><?php echo $TotalOrder; ?></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Categories Register</div>
                                    <div class="stat-digit"><?php echo $TotalCategories ?></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Brands Register</div>
                                    <div class="stat-digit"><?php echo $Totalbrands; ?></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Products Register</div>
                                    <div class="stat-digit"><?php echo $Totalproducts; ?></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
