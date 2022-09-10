

<div class="row">
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




					?>

    <div class="col-lg-3 col-sm-6">
                        <div class="card">

                            <div class="stat-widget-two card-body">
                              <!--
                                <div class="stat-content">
                                    <div class="stat-text">Customer </div>
                                    <div class="stat-digit"><?PHP echo $Totalsellercustomer;  ?></div>
                                </div>
-->

                                <!--

                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                -->

                            </div>
                        </div>
                    </div>



                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">

                              <div class="card">
                                  <div class="stat-widget-two card-body">
                                      <div class="stat-content">
                                          <div class="stat-text">Manager  </div>
                                          <div class="stat-digit">   <h4>Total : <?PHP echo $TotalManager;  ?></h4> </div>
                                      </div>

                                      <!--

                                      <div class="progress">
                                          <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                              -->

                                  </div>
                              </div>



                              <!--
                                <div class="stat-content">
                                    <div class="stat-text"> Seller </div>
                                    <div class="stat-digit">

                                    <div class="infos">
                                <h4>G.Total : <?PHP //echo $Totalseller;  ?></h4>
                                <h4>Active Total : <?PHP //echo $TotalsellerActive;  ?></h4>
                                <h4>Disactive Total : <?PHP //echo $TotalsellerDisactive;  ?></h4>


                            </div>

                                    </div>
                                </div>
                              -->

                            <!---
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning w-<?PHP // echo $qa=$Totalseller+$ab;  ?>" role="progressbar" aria-valuenow="<?PHP echo $Totalseller;  ?>" aria-valuemin="0" aria-valuemax="100"></div>

                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning w-<?PHP //echo $TotalsellerActive;  ?>" role="progressbar" aria-valuenow=" <?PHP echo $TotalsellerActive;  ?>" aria-valuemin="0" aria-valuemax="100"></div>

                                </div>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning w-<?PHP //echo $TotalsellerDisactive;  ?>" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>

                                </div>


                            -->
                            </div>
                        </div>
                    </div>



    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Customer  </div>
                                    <div class="stat-digit"> <h4>Total : <?PHP echo $TotalCustomer;  ?></h4></div>
                                </div>

                                <!--

                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                -->
                            </div>
                        </div>
                    </div>



    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Admin  </div>
                                    <div class="stat-digit">   <h4>Total : <?PHP echo $TotalAdmin;  ?></h4> </div>
                                </div>

                                <!--

                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                -->

                            </div>
                        </div>
                    </div>




    <div class="col-lg-3 col-sm-6">

                    </div>







     <!--------------
                      <div class="col-md-2">
                        <div class="color-swatches">
                          <div class="swatches">
                            <div class="clearfix">
                                <div style="background-color:#5D9CEC; font-size:20px;" ><b style="margin-left:8px;"> Total Sale</b></div>
                              <div style="background-color:#4FC1E9" class="pull-left light"></div>
                              <div style="background-color:#3BAFDA" class="pull-right dark"></div>
                            </div>
                            <div class="infos">
                              <h4>AQUA</h4>
                              <p>#4FC1E9, #3BAFDA</p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="color-swatches">
                          <div class="swatches">
                            <div class="clearfix">
                              <div style="background-color:#48CFAD" class="pull-left light"></div>
                              <div style="background-color:#37BC9B" class="pull-right dark"></div>
                            </div>
                            <div class="infos">
                              <h4>MINT</h4>
                              <p>#48CFAD, #37BC9B</p>
                            </div>
                          </div>
                        </div>
                      </div>
        ------------------>




</div>
