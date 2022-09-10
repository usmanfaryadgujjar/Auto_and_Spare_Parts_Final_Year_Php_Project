$(document).ready(function(){
	cat();
	brand();
	product();
	function cat(){
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:	{category:1},
			success	:	function(data){
				$("#get_category").html(data);
				
			}
		})
	}
	//brand() is a funtion fetching brand record from database whenever page is load
	function brand(){
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:	{brand:1},
			success	:	function(data){
				$("#get_brand").html(data);
			}
		})
	}
    
    
    //all brand
    	function brand(){
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:	{brandall:1},
			success	:	function(data){
				$("#get_brand_all").html(data);
			}
		})
	}
    
    
    function product(){
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:	{get30Product_main_page:1},
			success	:	function(data){
				$("#get30_product_main_page").html(data);
			}
		})
	}
    
    
    
		function product(){
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:	{get3Product_main_page:1},
			success	:	function(data){
				$("#get3_product_main_page").html(data);
			}
		})
	}
    
    
    
    
    
	$("body").delegate(".selectBrand","click",function(event){
		event.preventDefault();
		
		var bid = $(this).attr('bid');
		
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{selectBrand:1,brand_id:bid},
			success	:	function(data){
				$("#get_product").html(data);
				if($("body").width() < 480){
					$("body").scrollTop(683);
				}
			}
		})
	
	})
	
	
	$("#search_btn").click(function(){
		var keywords = $("#search").val();
		if(keywords != ""){
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{searcha:1,keyword:keywords},
			success	:	function(data){ 
           	
                //window.location = 'product_search.php'
                $("#show_p").html(data);
				$("#get3_product_main_page").html(data);
                $("#get3_search_product").html(data);
                $("#get_product").html(data);
               
                /*
                $("html, body").animate({ 
                    scrollTop: $( 
                      'html, body').get(0).scrollHeight 
                }, 5000);
                */
			}
		})
		}
        else if(keywords = ""){
           //$("#get3_product_main_page").html("<h3>NOT Available This Product</h3>");
            $("#get3_product_main_page").html("<h3>Please Enter Search box Name of Product</h3>");
            $("body").scrollTop(683);
        }
	})







	$("#login").on("submit",function(event){
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url	:	"login_V.php",
			method:	"POST",
			data	:$("#login").serialize(),
			success	:function(data){
				if(data == "login is Success"){
                    windows.location.replace("Customer_profile.php");
					/*window.location.href = "Customer_profile.php"; */
				}else{
                    setTimeout(function(){
                  location.reload(true);
                  //alert("The page will now refresh");
                }, 5000);
                    
				   $("#e_msg").html(data);
                    
				}
			}
		})
	})
	//end
    
    
	$("#Reg_form").click(function(event){
		event.preventDefault();
			$.ajax({
			url		:	"Registration_Verfi.php",
			method	:	"POST",
			data	:	$("form").serialize(),
			success	:	function(data){ 
				$("#signup_back_message").html(data);
			}
		})
		
	})
    
    $("#forgott").click(function(event){
		event.preventDefault();
			$.ajax({
			url		:	"Get_forgt.php",
			method	:	"POST",
			data	:	$("form").serialize(),
			success	:	function(data){ 
				$("#forgt_back_message").html(data);
			}
		})
		
             
	})
    
    
    $("#forgott2").click(function(event){
		event.preventDefault();
			$.ajax({
			url		:	"Get_forgt2.php",
			method	:	"POST",
			data	:	$("form").serialize(),
			success	:	function(data){ 
				$("#forgt_back_message2").html(data);
			}
		})
		
             
	})
        
    
    
    
    
    //This working order
      $("body").delegate("#orderconfirmOn","click",function(event){
		$.ajax({
			url	:	"Customer_order_conf.php",
			method	:	"POST",
			data	:	{confirmbycash:1},
			success	:	function(data){
				$("#cart_msg").html(data);
                //location.reload();
                window.location.href = "customer_order_view.php";
			
			}
		})
	})
    
    
    
       $("body").delegate("#orderconfirmOn2","click",function(event){
		$.ajax({
			url	:	"Customer_order_Debit_Credit_Card.php",
			method	:	"POST",
			data	:	{confirmbycash:1},
			success	:	function(data){
				$("#cart_msg").html(data);
                //location.reload();
                //window.location.href = "customer_order_view.php";
			
			}
		})
	})
	
  
    
    
    
    
    
    
    $("#customer_pass_chang").click(function(event){
		event.preventDefault();
			$.ajax({
			url		:	"Customer_pass_change_verfi.php",
			method	:	"POST",
			data	:	$("form").serialize(),
			success	:	function(data){ 
				$("#pass_back_message").html(data);
			}
		})
		
	})
   
    
    
     $("#customer_information_order").click(function(event){
		event.preventDefault();
			$.ajax({
			url		:	"Get_Customer_order_info.php",
			method	:	"POST",
			data	:	$("form").serialize(),
			success	:	function(data){ 
				$("#cus_back_message").html(data);
			}
		})
		
	})
   
    

	//Add Product into Cart
	$("body").delegate("#product","click",function(event){
		var pid = $(this).attr("pid");
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {addToCart:1,proId:pid},
			success : function(data){
				count_item();
				getCartItem();
				$('#product_msg').html(data);
				$('.overlay').hide();
			}
		})
	})
	//Add Product into Cart End Here
	//Count user cart items funtion
	count_item();
	function count_item(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {count_item:1},
			success : function(data){
				$(".badge").html(data);
			}
		})
	}
	//Count user cart items funtion end

	//Fetch Cart item from Database to dropdown menu
	getCartItem();
	function getCartItem(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {Common:1,getCartItem:1},
			success : function(data){
				$("#cart_product").html(data);
			}
		})
	}

	
    $("body").delegate(".qty","keyup",function(event){
		event.preventDefault();
		var row = $(this).parent().parent();
		var price = row.find('.price').val();
		var qty = row.find('.qty').val();
		if (isNaN(qty)) {
			qty = 1;
		};
		if (qty < 1) {
			qty = 1;
		};
		var total = price * qty;
		row.find('.total').val(total);
		var net_total=0;
		$('.total').each(function(){
			net_total += ($(this).val()-0);
		})
		$('.net_total').html("G.Total Rs." +net_total);

	})
	
    
    
    
    $("body").delegate(".remove","click",function(event){
		var remove = $(this).parent().parent().parent();
		var remove_id = remove.find(".remove").attr("remove_id");
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{removeItemFromCart:1,rid:remove_id},
			success	:	function(data){
				$("#cart_msg").html(data);
				checkOutDetails();
			}
		})
	})
	
    
    
    $("body").delegate(".update","click",function(event){
		var update = $(this).parent().parent().parent();
		var update_id = update.find(".update").attr("update_id");
		var qty = update.find(".qty").val();
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{updateCartItem:1,update_id:update_id,qty:qty},
			success	:	function(data){
				$("#cart_msg").html(data);
				checkOutDetails();
			}
		})


	})
	checkOutDetails();
	net_total();
	
    function checkOutDetails(){
	 $('.overlay').show();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {Common:1,checkOutDetails:1},
			success : function(data){
				$('.overlay').hide();
				$("#cart_checkout").html(data);
					net_total();
			}
		})
	}
	/*
		net_total function is used to calcuate total amount of cart item
	*/
	function net_total(){
		var net_total = 0;
		$('.qty').each(function(){
			var row = $(this).parent().parent();
			var price  = row.find('.price').val();
			var total = price * $(this).val()-0;
			row.find('.total').val(total);
		})
		$('.total').each(function(){
			net_total += ($(this).val()-0);
		})
		$('.net_total').html("G.Total  "+ CURRENCY + " " +net_total);
	}

	//remove product from cart

	page();
	function page(){
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{page:1},
			success	:	function(data){
				$("#pageno").html(data);
			}
		})
	}
	$("body").delegate("#page","click",function(){
		var pn = $(this).attr("page");
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{getProduct:1,setPage:1,pageNumber:pn},
			success	:	function(data){
				$("#get_product").html(data);
			}
		})
	})
})

