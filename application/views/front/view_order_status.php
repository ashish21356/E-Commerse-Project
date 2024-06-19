
<!doctype html>
<html class="no-js" lang="zxx">
   
<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:12:47 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>E-commerce | Track Order Status</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="assets_front/img/logo/favicon.png">
      <?php $this->load->view('front/links');?>
      <!-- CSS here -->

   </head>
   <body>
      
      <?php $this->load->view('front/header');?>
      <main>

<!-- breadcrumb area start -->
<section class="breadcrumb__area include-bg pt-40 pb-35">
   <div class="container">
      <div class="row">
         <div class="col-xxl-12">
            <div class="breadcrumb__content p-relative z-index-1">
               <h3 class="breadcrumb__title">Your order status</h3>
               <div class="breadcrumb__list">
                  <span><a href="#">Home</a></span>
                  <span>Track your order</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- breadcrumb area end -->

<!-- order area start -->
<section class="tp-order-area pb-170">
   <div class="container">

      <div class="tp-order-inner">
         <div class="row gx-0">
            
            <div class="col-lg-12">
               <div class="tp-order-info-wrapper">
                  <h4 class="tp-order-info-title">Your Order Details</h4>

                  <div class="tp-order-info-list">
                  <table class="table">
                           <thead>
                             <tr>
                             <th class="tp-cart-header-product">S. no.</th>
                             <th class="tp-cart-header-product">Order ID</th>
                             <th class="tp-cart-header-product">Order Placed</th>
                    <th class="tp-cart-header-product">Image</th>
                      <th  style="text-align: center;" class="tp-cart-header-product "> Name</th>
                      <th style="text-align: center;" class="tp-cart-header-price">Price</th>
                      <th style="text-align: center;" class="tp-cart-header-quantity">Quantity</th>
                      <th class="tp-cart-header-product">Delivery Date</th>
                      <th class="tp-cart-header-product">Payment Mode</th>
                      <th class="tp-cart-header-product">Subtotal</th>
                      <th class="tp-cart-header-product">Shipping</th>
                      <th class="tp-cart-header-product">Total Amount</th>
                      
                     
                     
                    </tr>
                  </thead>
                        <?php 
                                    $s=1;
                             foreach($cart as $index =>  $product):?>
                           
                        <!-- item list -->
                        <tbody>
                            <tr style="text-align: center;">
                              <!-- Order ID -->
                            <td style="text-align: center;"></span><?=$s++?></td>
                               <!-- Order ID -->
                            <td style="text-align: center;"><span>#<?=$product->order_id?></span></span></td>
                            <!-- Order Placed -->
                            <td style="text-align: center;"><span><?=$product->updated_on?></span></td>
                               <!-- Order img -->
                            <td style="text-align: center;"><img src="uploads/<?=$product->pro_image?>" alt="" style="width: 30px; height: 30px;"></td>
                              <!-- title -->
                        <td style="text-align: center;"><?=$product->pro_name?></td>
                           <!-- price -->
                           <td style="text-align: center;"><span>₹<?=number_format($product->pro_price,2)?></span></td>
                           <!-- quantity -->
                        <td style="text-align: center;"><span><?=number_format($product->pro_qty)?></span></td>
                        
                            <!-- Delivery date -->
                            <td style="text-align: center;"><span><?php
                if(isset($product->updated_on)) {
                    echo htmlspecialchars((new DateTime($product->updated_on))->modify('+4 days')->format('Y-m-d'));
                }
            ?><br><p><span style="color: red;"><?=$product->status?></span></p></p></span></td>
            <td><p><b><?=$product->payment_mode?></b></p></td>
                 
                         <!--  payment mode -->
                    
                     <!-- Sub total -->
                     <td style="text-align: center;"><span>₹<?=number_format(($product->pro_price*$product->pro_qty),2)?></span></td>
                    </td>
                      <!-- Sub total -->
                      <td>
                     <?php 
                      if (($product->pro_price * $product->pro_qty) > 499):?>
                     <p><b>Free Shipping <del>₹<?=number_format(0, 2)?></del></b></p>
                      <?php else:?>
                     <p><b> ₹<?=number_format(40, 2)?></b></p>
                     <?php endif;?>
                       </td>

                              <!--  total -->
                        <td><b><?php 
                      if (($product->pro_price * $product->pro_qty) > 499):?>
                     <p><b>₹<?=number_format(($product->pro_price*$product->pro_qty),2)?></b></p>
                      <?php else:?>
                     <p><b></b> ₹<?=number_format(($product->pro_price*$product->pro_qty)+40, 2)?></b></p>
                     <?php endif;?></b></td>
                        
                            </tr>
                        </tbody>
                        <?php endforeach; ?>
                        
                        </tbody>
                        </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- order area end -->

</main>
      <?php $this->load->view('front/footer');?>
   </body>

<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:14:29 GMT -->
</html>
