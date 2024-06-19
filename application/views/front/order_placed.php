
<!doctype html>
<html class="no-js" lang="zxx">
   
<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:12:47 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Shofy | Track Orders</title>
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
            <div class="col-lg-6">
               <div class="tp-order-details" data-bg-color="#4F3D97">
                  <div class="tp-order-details-top text-center mb-20">
                     <div class="tp-order-details-icon">
                        <span>
                           <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M46 26V51H6V26" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M51 13.5H1V26H51V13.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M26 51V13.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M26 13.5H14.75C13.0924 13.5 11.5027 12.8415 10.3306 11.6694C9.15848 10.4973 8.5 8.9076 8.5 7.25C8.5 5.5924 9.15848 4.00269 10.3306 2.83058C11.5027 1.65848 13.0924 1 14.75 1C23.5 1 26 13.5 26 13.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M26 13.5H37.25C38.9076 13.5 40.4973 12.8415 41.6694 11.6694C42.8415 10.4973 43.5 8.9076 43.5 7.25C43.5 5.5924 42.8415 4.00269 41.6694 2.83058C40.4973 1.65848 38.9076 1 37.25 1C28.5 1 26 13.5 26 13.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                        </span>
                     </div>
                     <div class="tp-order-details-content">
                        <h3 class="tp-order-details-title">Your Order Confirmed</h3>
                        <p>We will send you a shipping confirmation email as soon <br> as your order ships</p>
                     </div>
                  </div>
                  <div class="tp-order-details-item-wrapper">
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="tp-order-details-item">
                              <h4>Order Date Time:</h4>
                              <p><?=$cart[0][0]->updated_on?></p>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="tp-order-details-item">
                              <h4>Expected Delivery: </h4>
                              <p><?php
                if(isset($cart[0][0]->updated_on)) {
                    echo htmlspecialchars((new DateTime($cart[0][0]->updated_on))->modify('+4 days')->format('Y-m-d'));
                }
            ?></p>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="tp-order-details-item">
                              <h4>Order Number:</h4>
                              <p>#<?=$cart[0][0]->order_id?></p>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="tp-order-details-item">
                              <h4>Payment Method:</h4>
                              <p><?=$cart[0][0]->payment_mode?></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="tp-order-info-wrapper">
                  <h4 class="tp-order-info-title">Order Details</h4>

                  <div class="tp-order-info-list">
                  <table class="table">
                           <thead>
                             <tr>
                    <th class="tp-cart-header-product">Image</th>
                      <th  style="text-align: center;" class="tp-cart-header-product "> Name</th>
                      <th style="text-align: center;" class="tp-cart-header-price">Price</th>
                      <th style="text-align: center;" class="tp-cart-header-quantity">Quantity</th>
                      <th></th>
                    </tr>
                  </thead>
                        <?php foreach($cart  as $innerArray):?>
                           <?php  foreach ($innerArray as $items) {
        $flattenedArray[] = (array)$items; // Convert stdClass object to array
    }?> 

                        <tbody>
                            <tr>
                            <td style="text-align: center;"><img src="uploads/<?= $items->pro_image?>" alt="" style="width: 25px; height: 25px;"></td>
                            <!-- title -->
                        <td style="text-align: center;"><?=$items->pro_name?></td>
                        <!-- price -->
                        <td style="text-align: center;"><span>₹<?=number_format($items->pro_price,2)?></span></td>
                        <!-- quantity -->
                        <td style="text-align: center;"><span><?=number_format($items->pro_qty)?></span></td>
                            </tr>
                        </tbody>
                        
                        <?php endforeach; ?>
                        </tbody>
                        </table>
                       
                       
                        <table class="table">
                            <tbody>
                               
                                <tr>
                                    <td >Subtotal</td>
                                    <td></td>
                                    <td></td>
                                    <td><P>₹<?=number_format($total['subtotal'],2)?></P></td>
                                </tr>
                                <tr>
                                    <td >Shipping Charges</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <?php if($total['subtotal']>499):?>
                        <p><del>₹<?=number_format($total['delivery'],2)?></del></P>
                        <?php else:?>
                           <p> ₹<?=number_format($total['delivery'],2)?></p>
                           <?php endif;?>
                        </td>
                                </tr>
                                <tr>
                                    <td >Total Amount</td>
                                    <td></td>
                                    <td></td>
                                    <td><p><b>₹<?=number_format($total['grandtotal'],2)?></b></p></td>
                                </tr>
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
