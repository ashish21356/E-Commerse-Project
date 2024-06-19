<!doctype html>
<html class="no-js" lang="zxx">
   
<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:12:47 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Shofy - Multipurpose eCommerce HTML Template</title>
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
<section class="breadcrumb__area include-bg pt-20 pb-20" data-bg-color="#EFF1F5">
   <div class="container">
      <div class="row">
         <div class="col-xxl-12">
            <div class="breadcrumb__content p-relative z-index-1">
               <h3 class="breadcrumb__title">Checkout</h3>
               <div class="breadcrumb__list">
                  <span><a href="#">Home</a></span>
                  <span>Checkout</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- breadcrumb area end -->

<!-- checkout area start -->
<section class="tp-checkout-area pb-10" data-bg-color="#EFF1F5">
   <div class="container">
    <?=form_open('Checkout_ctr/order_place_detail')?>
      <div class="row">
         
         <div class="col-lg-7">
            <div class="tp-checkout-bill-area">
               <h3 class="tp-checkout-bill-title">Billing Details</h3>

               <div class="tp-checkout-bill-form">
                  
                     <div class="tp-checkout-bill-inner">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="tp-checkout-input">
                                 <label>First Name <span>*</span></label>
                                 <input type="text" placeholder="John" name="address[first_name]" value="<?php echo set_value('address[first_name]');?>">
                              </div>
                              <?=form_error('address[first_name]')?>
                           </div>
                           <div class="col-md-6">
                              <div class="tp-checkout-input">
                                 <label>Last Name <span>*</span></label>
                                 <input type="text" placeholder="Doe" name="address[last_name]" value="<?php echo set_value('address[last_name]');?>">
                              </div>
                              <?=form_error('address[last_name]')?>
                           </div>
                           <div class="col-md-12">
                              <div class="tp-checkout-input">
                                 <label>Country / Region <span>*</span></label>
                                 <input type="text" placeholder="United States (US)" name="address[Country_Region]" value="<?php echo set_value('address[Country_Region]');?>">
                              </div>
                              <?=form_error('address[Country_Region]')?>
                           </div>
                           <div class="col-md-12">
                              <div class="tp-checkout-input">
                                 <label>Street address<span>*</span></label>
                                 <input type="text" placeholder="House number and street name" name="address[address_1]" value="<?php echo set_value('address[address_1]');?>">
                              </div>
                              <?=form_error('address[address_1]')?>
                              <div class="tp-checkout-input">
                                 <input type="text" placeholder="Apartment, suite, unit, etc. (optional)" name="address[address_2]" value="<?php echo set_value('address[address_2]');?>">
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="tp-checkout-input">
                                 <label>Town / City<span>*</span></label>
                                 <input type="text" placeholder="Bhopal" name="address[town_city]"  value="<?php echo set_value('address[town_city]');?>">
                              </div>
                              <?=form_error('address[town_city]')?>
                           </div>
                           <div class="col-md-6">
                              <div class="tp-checkout-input">
                                 <label>State<span>*</span></label>
                                <select name="address[state]">
    <option value="">Select</option>
    <option value="Madhya Pradesh" <?php echo set_select('address[state]', 'Madhya Pradesh'); ?>>Madhya Pradesh</option>
    <option value="Goa" <?php echo set_select('address[state]', 'Goa'); ?>>Goa</option>
    <option value="Punjab" <?php echo set_select('address[state]', 'Punjab'); ?>>Punjab</option>
    <option value="Bihar" <?php echo set_select('address[state]', 'Bihar'); ?>>Bihar</option>
</select>

                              </div>
                              <?=form_error('address[state]')?>
                           </div>
                           <div class="col-md-6">
                              <div class="tp-checkout-input">
                                 <label>Post / ZIP Code<span>*</span></label>
                                 <input type="number" placeholder="09787" name="address[zip_code]"  value="<?php echo set_value('address[zip_code]');?>">
                              </div>
                              <?=form_error('address[zip_code]')?>
                           </div>
                           <div class="col-md-12">
                              <div class="tp-checkout-input">
                                 <label>Phone <span>*</span></label>
                                 <input type="number" placeholder="+91-1234567890" name="address[mobile_number]"  value="<?php echo set_value('address[mobile_number]');?>">
                              </div>
                              <?=form_error('address[mobile_number]')?>
                           </div>
                           <div class="col-md-12">
                              <div class="tp-checkout-input">
                                 <label>Email address <span>*</span></label>
                                 <input type="email" placeholder="example@gmail.com" name="address[email]"  value="<?php echo set_value('address[email]');?>">
                              </div>
                              <?=form_error('address[email]')?>
                           </div>
                           
                           <div class="col-md-12">
                              <div class="tp-checkout-input">
                                 <label>Order notes (optional)</label>
                                 <textarea name="address[order_note]" placeholder="Notes about your order, e.g. special notes for delivery."><?php echo set_value('address[order_note]'); ?></textarea>

                              </div>
                           </div>
                        </div>
                     </div>
                 
               </div>
            </div>
         </div>
         <div class="col-lg-5">
            <!-- checkout place order -->
            <div class="tp-checkout-place white-bg">
               <h3 class="tp-checkout-place-title">Your Order</h3>
               <?php  if(!empty($cart)):?>
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
                  <?php foreach($cart as $index => $product):?>
                  <tbody>
                     <tr>
                     <td style="text-align: center;" hidden>
                      <input type="text" hidden name="products[<?= $index ?>][pro_id]" value="<?= htmlspecialchars($product->pro_id) ?>" />
                      
                    </td>
                    <td style="text-align: center;" hidden>
                    <input type="text" hidden name="products[<?= $index ?>][pro_qty]" value="<?=number_format($product->pro_qty)?>" />
                </td>
                <td style="text-align: center;" hidden>
                    <input type="text" hidden name="products[<?= $index ?>][cart_id]" value="<?=$product->cart_id?>" />
                </td>
                        <!-- img -->
                        <td style="text-align: center;"><img src="uploads/<?=$product->pro_image?>" alt="" style="width: 25px; height: 25px;"></td>
                        <!-- title -->
                        <td style="text-align: center;"><?=$product->pro_name?></td>
                        <!-- price -->
                        <td style="text-align: center;"><span>₹<?=number_format($product->pro_price,2)?></span></td>
                        <!-- quantity -->
                        <td style="text-align: center;"><span><?=number_format($product->pro_qty)?></span></td>
                        <!-- action -->
                       
                        
                     </tr>
                     <?php endforeach; ?>
                    
                  </tbody>
                </table>
                <?php else: ?>
    <tbody>
        <tr>
            <td colspan="4" style="text-align: center;"><h5>No items in the cart.</h5></td>
        </tr>
    </tbody>
<?php endif; ?>
                  <ul>  
                     <!-- subtotal -->
                     <li class="tp-order-info-list-subtotal">
                        <span>Subtotal</span>
                        <span>₹ <?=number_format($total['subtotal'],2)?></span>
                     </li>
                     <!-- shipping -->
                     <li class="tp-order-info-list-shipping">
                        <span>Shipping Charges</span>
                           <span>
                           <?php if($total['subtotal']>499):?>
                        <p >Free shipping-&nbsp;&nbsp;<del>₹<?=number_format($total['delivery'],2)?></del></p>
                        <?php else:?>
                           <p> ₹<?=number_format($total['delivery'],2)?></p>
                           <?php endif;?>
                           </span>
                       
                     </li>

                     <!-- total -->
                     <li class="tp-order-info-list-total">
                        <span>Total</span>
                        <span>₹ <?=number_format($total['grandtotal'],2)?></span>
                     </li>
                  </ul>
               </div>
               <div class="tp-checkout-payment">
               <div class="tp-checkout-payment-item">
    <input type="radio" id="back_transfer" name="payment[payment_mode]" value="Bank Transfer" 
        <?php echo (isset($_POST['payment']['payment_mode']) && $_POST['payment']['payment_mode'] == 'Bank Transfer') ? 'checked' : ''; ?>>
    <label for="back_transfer" data-bs-toggle="direct-bank-transfer">Bank Transfer</label>
</div>
<div class="tp-checkout-payment-item">
    <input type="radio" id="cheque_payment" name="payment[payment_mode]" value="Cash on Delivery" 
        <?php echo (isset($_POST['payment']['payment_mode']) && $_POST['payment']['payment_mode'] == 'Cash on Delivery') ? 'checked' : ''; ?>>
    <label for="cheque_payment">Cash on Delivery</label>
</div>

                  
                  <?=form_error('payment[payment_mode]')?>
               </div>
               <div class="tp-checkout-agree">
                  <div class="tp-checkout-option">
                     <input id="read_all" type="checkbox" checked>
                     <label for="read_all">I agree to the terms & conditions.</label>
                  </div>
               </div>
               <div class="tp-checkout-btn-wrapper">
               <button type="submit" class="tp-checkout-btn w-100">Place Order</button>
               </div>
            </div>
         </div>
      </div>
      <?=form_close()?>
   </div>
</section>
<!-- checkout area end -->


</main>
      <?php $this->load->view('front/footer');?>
   </body>

<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:14:29 GMT -->
</html>
