<!DOCTYPE html>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if IE 8 ]> <html class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html class="ie9"> <![endif]-->

<!--[if IE 7]>
<script type="text/javascript">
location.replace("http://windows.microsoft.com/en-US/internet-explorer/products/ie/home");
</script>
<![endif]-->

<html>
<head>
<title>Online Sale</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0;" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/custom-style.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 8 ]>
<link href="css/ie-grid.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->


<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<link rel="stylesheet" href="css/prettyPhoto.css" />
<script src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript">

jQuery(document).ready(function() {

$(".fa-search-btn").prettyPhoto();

	
});

</script>
</head>

<body id="index" class=" ">
<div id="page" class="clearfix">

    <?php
        require_once "./includes/header.php";
    ?>

  <section  id="columns" class="container_9 clearfix col1"> 
    
    <!-- Center -->
    <article id="center_column" class=" grid_5">
      <div class="cart">
        <form method="post" action="checkout/cart/updatePost/">
          <fieldset>
            <table class="data-table cart-table" id="shopping-cart-table">
              <colgroup>
              <col width="1">
              <col>
              <col width="1">
              <col width="1">
              <col width="1">
              <col width="1">
              <col width="1">
              </colgroup>
              <thead>
                <tr class="first last">
                  <th rowspan="1" class="product-image-unit" >Image</th>
                  <th rowspan="1" class="product-name-unit"><span class="nobr">Product Name</span> </th>
                  <th colspan="1" class="a-center"><span class="nobr">Unit Price</span></th>
                  <th class="a-center" rowspan="1">Qty</th>
                  <th colspan="1" class="a-center">Subtotal</th>
                  <th class="a-center" rowspan="1">Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr class="first last">
                  <td class="a-center last" colspan="50"><button  class="button btn-continue" title="Continue Shopping" type="button"><span><span><i class="icon-shopping-cart"></i>Continue Shopping</span></span></button>
                    <button class="button btn-update" title="Update Shopping Cart" value="update_qty" name="update_cart_action" type="submit"><span><span><i class="icon-refresh"></i>Update Shopping Cart</span></span></button></td>
                </tr>
              </tfoot>
              <tbody>
                <tr class="first last odd">
                  <td><a class="product-image"  href="/"><img src="media/246-thickbox_default.jpg" width="110" height="75"></a></td>
                  <td><h2 class="product-name"> <a href="sony-vaio-vgn-txn27n-b-11-1-notebook-pc.html">Brown Wood Chair</a> </h2>
                    <dl>
                      <dt><strong>Color:</strong> Brown</dt>
                      <dt><strong>Size:</strong>12</dt>
                    </dl></td>
                  <td class="a-center"><span class="cart-price"> <span class="price">$2,699.99</span> </span></td>
                  <td class="a-center">
				  <script>
$(document).ready(function(){

  
  
  	    $(".input a").click(function () {
        var inputEl = $(this).parent().parent().children().next().children();
        var qty = inputEl.val();
        if ($(this).parent().hasClass("plus"))
            qty++;
        else
            qty--;
        if (qty < 0)
            qty = 0;
        inputEl.val(qty);
    })
	
	
	
});
</script>
                    <div class="input-qty-box">
                      <div class="input">
                        <ul class="range">
                          <li class="item minus"><a style=" cursor:pointer">-</a></li>
                          <li>
                            <input type="text" maxlength="3" size="2" value="1" class="input-text qty text" id="quantity_wanted" name="qty">
                          </li>
                          <li class="item plus"><a style=" cursor:pointer">+</a></li>
                        </ul>
                      </div>
                    </div></td>
                  <td class="a-center"><span class="cart-price"> <span class="price">$2,699.99</span> </span></td>
                  <td class="a-center last"><a class="btn-remove btn-remove2" title="Remove item" href="/">x</a></td>
                </tr>
                <tr class="first last odd">
                  <td><a class="product-image"  href="/"><img src="media/246-thickbox_default.jpg" width="110" height="75"></a></td>
                  <td><h2 class="product-name"> <a href="sony-vaio-vgn-txn27n-b-11-1-notebook-pc.html">Brown Wood Chair</a> </h2></td>
                  <td class="a-center"><span class="cart-price"> <span class="price">$2,699.99</span> </span></td>
                  <td class="a-center"><div class="input-qty-box">
                      <div class="input">
                        <ul class="range">
                          <li class="item minus"><a style=" cursor:pointer">-</a></li>
                          <li>
                            <input type="text" maxlength="3" size="2" value="1" class="input-text qty text" id="quantity_wanted" name="qty">
                          </li>
                          <li class="item plus"><a style=" cursor:pointer">+</a></li>
                        </ul>
                      </div>
                    </div></td>
                  <td class="a-center"><span class="cart-price"> <span class="price">$2,699.99</span> </span></td>
                  <td class="a-center last"><a class="btn-remove btn-remove2" title="Remove item" href="/">x</a></td>
                </tr>
              </tbody>
            </table>
          </fieldset>
        </form>
        <div class="cart-collaterals">
          <div class="col2-set">
            <div class="col-1">
              <div class="shipping">
                <h2>Estimate Shipping and Tax</h2>
                <div class="shipping-form">
                  <form id="shipping-zip-form" method="post" action="checkout/cart/estimatePost/">
                    <ul class="form-list">
                      <li>
                        <div class="input-box">
                          <select title="Country" class="validate-select" id="country" name="country_id">
                            <option value="">-- Select Your Country --</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="VN">Vietnam</option>
                            <option value="WF">Wallis and Futuna</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                            <option value="AX">Åland Islands</option>
                          </select>
                        </div>
                      </li>
                      <li>
                        <div class="input-box">
                          <select style="" title="State/Province" name="region_id" id="region_id" defaultvalue="" class="required-entry validate-select">
                            <option value="">Please select region, state or province</option>
                            <option value="1" title="Alabama">Alabama</option>
                            <option value="2" title="Alaska">Alaska</option>
                            <option value="3" title="American Samoa">American Samoa</option>
                            <option value="4" title="Arizona">Arizona</option>
                            <option value="5" title="Arkansas">Arkansas</option>
                            <option value="6" title="Armed Forces Africa">Armed Forces Africa</option>
                            <option value="7" title="Armed Forces Americas">Armed Forces Americas</option>
                            <option value="8" title="Armed Forces Canada">Armed Forces Canada</option>
                            <option value="9" title="Armed Forces Europe">Armed Forces Europe</option>
                            <option value="10" title="Armed Forces Middle East">Armed Forces Middle East</option>
                            <option value="11" title="Armed Forces Pacific">Armed Forces Pacific</option>
                            <option value="12" title="California">California</option>
                            <option value="13" title="Colorado">Colorado</option>
                            <option value="14" title="Connecticut">Connecticut</option>
                            <option value="15" title="Delaware">Delaware</option>
                            <option value="16" title="District of Columbia">District of Columbia</option>
                            <option value="44" title="North Carolina">North Carolina</option>
                            <option value="45" title="North Dakota">North Dakota</option>
                            <option value="46" title="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="47" title="Ohio">Ohio</option>
                            <option value="48" title="Oklahoma">Oklahoma</option>
                            <option value="49" title="Oregon">Oregon</option>
                            <option value="50" title="Palau">Palau</option>
                            <option value="51" title="Pennsylvania">Pennsylvania</option>
                            <option value="52" title="Puerto Rico">Puerto Rico</option>
                            <option value="53" title="Rhode Island">Rhode Island</option>
                            <option value="54" title="South Carolina">South Carolina</option>
                            <option value="55" title="South Dakota">South Dakota</option>
                            <option value="56" title="Tennessee">Tennessee</option>
                            <option value="57" title="Texas">Texas</option>
                            <option value="58" title="Utah">Utah</option>
                            <option value="59" title="Vermont">Vermont</option>
                            <option value="60" title="Virgin Islands">Virgin Islands</option>
                            <option value="61" title="Virginia">Virginia</option>
                            <option value="62" title="Washington">Washington</option>
                            <option value="63" title="West Virginia">West Virginia</option>
                            <option value="64" title="Wisconsin">Wisconsin</option>
                            <option value="65" title="Wyoming">Wyoming</option>
                          </select>
                          <input type="text" style="display:none;" class="input-text required-entry" title="State/Province" value="" name="region" id="region">
                        </div>
                      </li>
                      <li>
                        <div class="input-box">
                          <input type="text" value="" name="estimate_postcode" id="postcode" class="input-text validate-postcode">
                        </div>
                      </li>
                    </ul>
                    <div class="buttons-set">
                      <button class="button" onclick="coShippingMethodForm.submit()" title="Get a Quote" type="button"><span><span>Get a Quote</span></span></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-2">
              <form method="post" action="" id="discount-coupon-form">
                <div class="discount">
                  <h2>Discount Codes</h2>
                  <div class="discount-form">
                    <div class="input-box">
                      <input value="" name="coupon_code" id="coupon_code" class="input-text" placeholder="Enter your coupon code if you have one.">
                      <button value="Apply Coupon"  class="button" title="Apply Coupon" type="button"><span><span>Apply Coupon</span></span></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="totals">
            <table id="shopping-cart-totals-table">
              <colgroup>
              <col>
              <col width="1">
              </colgroup>
              <tfoot>
                <tr>
                  <th colspan="1" class="a-center" style=""> Grand Total </th>
                  <td class="a-center" style=""><strong><span class="price">$1475.00</span></strong></td>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <th colspan="1" class="a-center" style=""> Subtotal </th>
                  <td class="a-center" style=""><span class="price">$2,699.99</span></td>
                </tr>
              </tbody>
            </table>
            <ul class="checkout-types">
              <li>
                <button onclick="window.location='checkout/onepage/';" class="button btn-proceed-checkout btn-checkout" title="Proceed to Checkout" type="button"><span><span>PROCEED TO CHECKOUT</span></span></button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </article>
  </section>
  
  <div class="footer-info first-bg">
    <div class="container_9 clearfix">
      <p><a href="/"><img src="media/footer-banner.png" alt=""></a></p>
    </div>
  </div>
  
  <!-- Footer -->
    <?php
        require_once "./includes/footer.php";
    ?>

</div>
</body>
</html>
