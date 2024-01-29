<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>

.invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}
</style>


<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    	<img src="l.png" style=" margin-top:20px;" height="100">  <h3 class="pull-right">Invoice # <?php   echo rand(10000,99999);?></h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
    					IT Engineer<br>
    					DelightGrocery.com<br>
    					
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Shipped To:</strong><br>
    					Downloads & Licenses<br>
    					it.delightgrocery@gmail.com<br>
    					
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>
    					BKash Agent Payment from  <?php 
                        
                        
                        if (isset($_REQUEST['b']))
                        {
                            echo $_REQUEST['b'];
                        }
                        
                        
                        ?>
                        
                        
                        <br>
    					Transaction ID: <?php 
                        
                        
                        if (isset($_REQUEST['t']))
                        {
                            echo $_REQUEST['t'];
                        }
                        
                        
                        ?>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
    					Jan 29, 2024<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Item</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-right"><strong>Total    </strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
    								<td>Wordpress Theme: Broccoli - Organic Shop WooCommerce Theme</td>
    								<td class="text-center">৳3180.00</td>
    								<td class="text-center">1</td>
    								<td class="text-right">৳3180.00</td>
    							</tr>

                                <tr>
    								<td>Wordpress Child Theme: Broccoli - Organic Shop WooCommerce Theme</td>
    								<td class="text-center">৳2180.00</td>
    								<td class="text-center">1</td>
    								<td class="text-right">৳2180.00</td>
    							</tr>

                                <tr>
    								<td>Wordpress Child Theme Contents: Extended Support 12 Months</td>
    								<td class="text-center">৳6000.00</td>
    								<td class="text-center">1</td>
    								<td class="text-right">৳6000.00</td>
    							</tr>

                                <tr>
    								<td>Wordpress Plugin: Extended Support 12 Months</td>
    								<td class="text-center">৳1320.00</td>
    								<td class="text-center">3</td>
    								<td class="text-right">৳3960.00</td>
    							</tr>
                               
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">৳15,320.00</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Shipping</strong></td>
    								<td class="no-line text-right">৳00.00</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right">৳15,320.00</td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>