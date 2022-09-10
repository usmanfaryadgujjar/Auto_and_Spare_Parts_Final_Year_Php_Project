

<div class="content-row">
                <!----
                <b>
                  <h2 class="content-row-title" >Product List Of User Add</h2>
                </b>
                ---->
                  <div class="row">
                    <div class="col-md-4">
                      <ul class="list-group"><b>
                          <h4 class="list-group-item" style="background-color:#00bfff;">Product List Of User Add</h4></b>
                         <!---
                          <li class="list-group-item" style="background-color:#00bfff;"><h6><b>User Name <span style="float:right;">Total Product</span></b></h6></li>
                            --------------->
                          <?php 
                         include('../db/db.php');
                        $c=0;  
                          $cM=0;
                          $ad_name1=0;
                          $contt=0;  
                          $user_name=0;
                          
                          $data = "SELECT * FROM products p JOIN admin ad ON p.pro_user_add_id = ad.id where p.pro_user_add_id = ad.id and seller_or_admin = 'admin' ";
					$view = mysqli_query($con,$data);
					while($_view = mysqli_fetch_assoc($view))
					{		
                        $id_ad=$_view['id'];
                        if(!empty($_view))
                        {
                            $d="select * from admin where id= '$id_ad' ";
                            $v = mysqli_query($con,$d);
					           while($_v = mysqli_fetch_assoc($v))
					                   {
                                            
                                   $ad_name1=$_v['name'];
                                   
                                            }
                            
                        }
                        
                        $c++;
                        
                        
                    }
                        
                           $dataM = "SELECT * FROM products p JOIN admin ad ON p.pro_user_add_id = ad.id where p.pro_user_add_id = ad.id and seller_or_admin = 'manager' ";
					$viewM = mysqli_query($con,$dataM);
					while($_viewM = mysqli_fetch_assoc($viewM))
					{		
                        $id_adM=$_viewM['id'];
                        if(!empty($_viewM))
                        {
                            $d="select * from admin where id= '$id_adM' ";
                            $v = mysqli_query($con,$d);
					           while($_v = mysqli_fetch_assoc($v))
					                   {
                                            
                                   $ad_name1=$_v['name'];
                                   
                                            }
                            
                        }
                        
                        $cM++;
                        
                        
                    }
                          
                        
                          
                          
                        $Total=0;  
                          $se = "SELECT * FROM products ";
					$viewse = mysqli_query($con,$se);
					while($_viewse = mysqli_fetch_assoc($viewse))
					{		
                        
                        $Total++;
                        
                    }
                          $sel=$Total-$c;
                          
                          echo "<li class='list-group-item' style='background-color:#ffe6e6;'><b>Admin Last Time Add / Drop : </b>  $ad_name1 </li>";
                            echo "<li class='list-group-item' style='background-color:#ffe6e6;'><b>Admin Side Total Product: </b> $c </li>";
                          echo "<li class='list-group-item' style='background-color:#ffe6e6;'><b>Manager Side Total Product: </b> $cM </li>";
                          
                          echo "<li class='list-group-item' style='background-color:#ffe6e6;'><b>Seller Side Total Product: </b>$sel</li>";
                          $contt_ad=0;
                          $ad_id3=0;
                          $l=0;
                      
                          echo "<li class='list-group-item' style='background-color:#ffe6e6;'><b>G.Total Product : </b>$Total<br><br> <b>Admin Name : </b>";
                    $d3 ="SELECT * FROM admin where seller_or_admin = 'admin'";
					$vi3 = mysqli_query($con,$d3);
					while($_vi3 = mysqli_fetch_assoc($vi3))
					{		
                        
                        $ad_n=$_vi3['name'];
                        echo " ".$ad_n." | ";
                    }
                          
                          echo "<BR><center>-----------------------------------------------------------</center><b> Manager Name : </b> ";
                          $d4 ="SELECT * FROM admin where seller_or_admin = 'manager'";
					$vi4 = mysqli_query($con,$d4);
					while($_vi4 = mysqli_fetch_assoc($vi4))
					{		
                        
                        $ad_nm=$_vi4['name'];
                        echo " ".$ad_nm." | ";
                    }
                    
                          
                          echo "</li>";
                        
                      
                        
                    /*
                    $data2 ="SELECT us.first_name, p.pro_user_add_id FROM products p JOIN user_info us ON p.pro_user_add_id = us.user_id";
					$view2 = mysqli_query($con,$data2);
					while($_view2 = mysqli_fetch_assoc($view2))
					{		
                        
                        $user_name=$_view2['first_name'];
                        
                        if(!empty($user_name))
                          {
                            $contt++;
                          echo"<li class='list-group-item'><span class='badge badge-default'>$contt</span><i>Seller : </i>$user_name</li>";
                            $contt=0;  
                          }
                        
                        
                    }
                    
                       */   
                          
                          
                          
                          ?>
                          
                          
                          
                        
                      </ul>
                    </div>
                    <div class="col-md-8">
                      <div class="list-group">
                        
                          
                      </div>
                    </div>
                  </div>
<hr>
</div>