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
  
  <div class="sf-contener clearfix second-bg ">
  </div>
  <div class="container_9 title-container">
  </div>
  <section  id="columns" class="container_9 clearfix col1"> 
    
    <!-- Center -->
    <article id="center_column" class=" grid_5">
      <ol id="checkoutSteps" class="opc">
        <li class="section allow active" id="opc-login">
          <div class="step-title"> <span class="number">STEP  1</span>
            <h2>Checkout Method</h2>
            <a href="#">Edit</a> </div>
          <div style="" class="step a-item" id="checkout-step-login">
            <div class="col2-set">
              <div class="col-1">
                <h3>New Customer ?</h3>
                <div class="wrap-login">
                  <ul class="form-list">
                    <li class="control">
                      <input type="radio" class="radio" value="guest" id="login:guest" name="checkout_method">
                      <label for="login:guest">Checkout as Guest</label>
                    </li>
                    <li class="control">
                      <input type="radio" class="radio" value="register" id="login:register" name="checkout_method">
                      <label for="login:register">Register</label>
                    </li>
                  </ul>
                  <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                  <div class="buttons-set">
                    <button onclick="checkout.setMethod();" class="button" type="button" id="onepage-guest-register-button"><span><span>Continue</span></span></button>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <h3>Registered Customer ?</h3>
                <div class="wrap-login">
                  <form method="post" action="/customer/account/loginPost/" id="login-form">
                    <fieldset>
                      <ul class="form-list">
                        <li>
                          <label class="required" for="login-email"><em>*</em>Email Address</label>
                          <div class="input-box">
                            <input type="text" value="" name="login[username]" id="login-email" class="input-text required-entry validate-email">
                          </div>
                        </li>
                        <li>
                          <label class="required" for="login-password"><em>*</em>Password</label>
                          <div class="input-box">
                            <input type="password" name="login[password]" id="login-password" class="input-text required-entry">
                          </div>
                        </li>
                      </ul>
                      <input type="hidden" value="checkout" name="context">
                    </fieldset>
                  </form>
                  <div class="buttons-set">
                    <button onclick="checkout.setMethod();" class="button" type="button" id="onepage-guest-register-button"><span><span>Login</span></span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="section" id="opc-billing">
          <div class="step-title"> <span class="number">STEP  2</span>
            <h2>Billing Information</h2>
            <a href="#">Edit</a> </div>
          <div style="display:none;" class="step a-item" id="checkout-step-billing">
            <form action="" id="co-billing-form">
              <fieldset>
                <ul class="form-list">
                  <li id="billing-new-address-form">
                    <fieldset>
                      <input type="hidden" id="billing:address_id" value="" name="billing[address_id]">
                      <ul>
                        <li class="fields">
                          <div class="customer-name">
                            <div class="field name-firstname">
                              <label class="required" for="billing:firstname"><em>*</em>First Name</label>
                              <div class="input-box">
                                <input type="text" class="input-text required-entry" maxlength="255" title="First Name" value="" name="billing[firstname]" id="billing:firstname">
                              </div>
                            </div>
                            <div class="field name-lastname">
                              <label class="required" for="billing:lastname"><em>*</em>Last Name</label>
                              <div class="input-box">
                                <input type="text" class="input-text required-entry" maxlength="255" title="Last Name" value="" name="billing[lastname]" id="billing:lastname">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="fields">
                          <div class="field">
                            <label for="billing:company">Company</label>
                            <div class="input-box">
                              <input type="text" class="input-text " title="Company" value="" name="billing[company]" id="billing:company">
                            </div>
                          </div>
                          <div class="field">
                            <label class="required" for="billing:email"><em>*</em>Email Address</label>
                            <div class="input-box">
                              <input type="text" class="input-text validate-email required-entry" title="Email Address" value="" id="billing:email" name="billing[email]">
                            </div>
                          </div>
                        </li>
                        <li class="wide">
                          <label class="required" for="billing:street1"><em>*</em>Address</label>
                          <div class="input-box">
                            <input type="text" class="input-text  required-entry" value="" id="billing:street1" name="billing[street][]" title="Street Address">
                          </div>
                        </li>
                        <li class="wide">
                          <div class="input-box">
                            <input type="text" class="input-text " value="" id="billing:street2" name="billing[street][]" title="Street Address 2">
                          </div>
                        </li>
                        <li class="fields">
                          <div class="field">
                            <label class="required" for="billing:city"><em>*</em>City</label>
                            <div class="input-box">
                              <input type="text" id="billing:city" class="input-text  required-entry" value="" name="billing[city]" title="City">
                            </div>
                          </div>
                          <div class="field">
                            <label class="required" for="billing:region_id"><em>*</em>State/Province</label>
                            <div class="input-box">
                              <select style="" class="validate-select required-entry" title="State/Province" name="billing[region_id]" id="billing:region_id" defaultvalue="">
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
                                <option value="17" title="Federated States Of Micronesia">Federated States Of Micronesia</option>
                                <option value="18" title="Florida">Florida</option>
                                <option value="19" title="Georgia">Georgia</option>
                                <option value="20" title="Guam">Guam</option>
                                <option value="21" title="Hawaii">Hawaii</option>
                                <option value="22" title="Idaho">Idaho</option>
                                <option value="23" title="Illinois">Illinois</option>
                                <option value="24" title="Indiana">Indiana</option>
                                <option value="25" title="Iowa">Iowa</option>
                                <option value="26" title="Kansas">Kansas</option>
                                <option value="63" title="West Virginia">West Virginia</option>
                                <option value="64" title="Wisconsin">Wisconsin</option>
                                <option value="65" title="Wyoming">Wyoming</option>
                              </select>
                              <input type="text" style="display:none;" class="input-text regions required-entry" title="State/Province" value="" name="billing[region]" id="billing:region">
                            </div>
                          </div>
                        </li>
                        <li class="fields">
                          <div class="field">
                            <label class="required" for="billing:postcode"><em>*</em>Zip/Postal Code</label>
                            <div class="input-box">
                              <input type="text" class="input-text validate-zip-international  required-entry" value="" id="billing:postcode" name="billing[postcode]" title="Zip/Postal Code">
                            </div>
                          </div>
                          <div class="field">
                            <label class="required" for="billing:country_id"><em>*</em>Country</label>
                            <div class="input-box">
                              <select title="Country" class="validate-select" id="billing:country_id" name="billing[country_id]">
                                <option value=""> </option>
                                <option value="AF">Afghanistan</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="VA">Vatican City</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Vietnam</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                                <option value="AX">Åland Islands</option>
                              </select>
                            </div>
                          </div>
                        </li>
                        <li class="fields">
                          <div class="field">
                            <label class="required" for="billing:telephone"><em>*</em>Telephone</label>
                            <div class="input-box">
                              <input type="text" id="billing:telephone" class="input-text  required-entry" title="Telephone" value="" name="billing[telephone]">
                            </div>
                          </div>
                          <div class="field">
                            <label for="billing:fax">Fax</label>
                            <div class="input-box">
                              <input type="text" id="billing:fax" class="input-text " title="Fax" value="" name="billing[fax]">
                            </div>
                          </div>
                        </li>
                        <li id="register-customer-password" class="fields">
                          <div class="field">
                            <label class="required" for="billing:customer_password"><em>*</em>Password</label>
                            <div class="input-box">
                              <input type="password" class="input-text required-entry validate-password" title="Password" id="billing:customer_password" name="billing[customer_password]">
                            </div>
                          </div>
                          <div class="field">
                            <label class="required" for="billing:confirm_password"><em>*</em>Confirm Password</label>
                            <div class="input-box">
                              <input type="password" class="input-text required-entry validate-cpassword" id="billing:confirm_password" title="Confirm Password" name="billing[confirm_password]">
                            </div>
                          </div>
                        </li>
                        <li class="no-display">
                          <input type="hidden" value="1" name="billing[save_in_address_book]">
                        </li>
                      </ul>
                    </fieldset>
                  </li>
                  <li class="control">
                    <input type="radio" class="radio" onclick="$('shipping:same_as_billing').checked = true;" title="Ship to this address" checked="checked" value="1" id="billing:use_for_shipping_yes" name="billing[use_for_shipping]">
                    <label for="billing:use_for_shipping_yes">Ship to this address</label>
                  </li>
                  <li class="control">
                    <input type="radio" class="radio" onclick="$('shipping:same_as_billing').checked = false;" title="Ship to different address" value="0" id="billing:use_for_shipping_no" name="billing[use_for_shipping]">
                    <label for="billing:use_for_shipping_no">Ship to different address</label>
                  </li>
                </ul>
                <div id="billing-buttons-container" class="buttons-set">
                  <p class="required">* Required Fields</p>
                  <button onclick="billing.save()" class="button" title="Continue" type="button"><span><span>Continue</span></span></button>
                </div>
              </fieldset>
            </form>
          </div>
        </li>
        <li class="section" id="opc-shipping">
          <div class="step-title"> <span class="number">STEP   3</span>
            <h2>Shipping Information</h2>
            <a href="#">Edit</a> </div>
        </li>
        <li class="section" id="opc-shipping_method">
          <div class="step-title"> <span class="number">STEP  4</span>
            <h2>Shipping Method</h2>
            <a href="#">Edit</a> </div>
        </li>
        <li class="section" id="opc-payment">
          <div class="step-title"> <span class="number">STEP  5</span>
            <h2>Payment Information</h2>
            <a href="#">Edit</a> </div>
          <div style="display:none;" class="step a-item" id="checkout-step-payment">
            <form id="co-payment-form" action="">
              <fieldset>
                <dl id="checkout-payment-method-load" class="sp-methods">
                  <dt>
                    <input type="radio" class="radio" onclick="payment.switchMethod('checkmo')" title="Check / Money order" name="payment[method]" value="checkmo" id="p_method_checkmo" autocomplete="off">
                    <label for="p_method_checkmo">Check / Money order </label>
                  </dt>
                  <dt>
                    <input type="radio" class="radio" onclick="payment.switchMethod('ccsave')" title="Credit Card (saved)" name="payment[method]" value="ccsave" id="p_method_ccsave" autocomplete="off">
                    <label for="p_method_ccsave">Credit Card (saved) </label>
                  </dt>
                  <dd> </dd>
                </dl>
              </fieldset>
            </form>
            <div id="payment-buttons-container" class="buttons-set">
              <p class="required">* Required Fields</p>
              <p class="back-link"><a onclick="checkout.back(); return false;" href="#"><small>« </small>Back</a></p>
              <button onclick="payment.save()" class="button" type="button"><span><span>Continue</span></span></button>
            </div>
          </div>
        </li>
        <li class="section" id="opc-review">
          <div class="step-title"> <span class="number">STEP  6</span>
            <h2>Order Review</h2>
            <a href="#">Edit</a> </div>
        </li>
      </ol>
    </article>
  </section>
  <div class="footer-info first-bg">
    <div class="container_9 clearfix">
      <p><a href="/"><img src="media/footer-banner.png" alt=""></a></p>
    </div>
  </div>
  
  <!-- Footer -->
  <footer id="footer" class="clearfix second-bg">
    <div class="footer-wrap container_9 ">
      <div class="footer-set">
        <div class="block">
          <h4>Customer Service</h4>
          <div class="block_content">
            <ul>
              <li class="first_item"><a title="Specials" href="index.php?controller=prices-drop">Specials</a></li>
              <li class="item"><a title="New products" href="index.php?controller=new-products">New products</a></li>
              <li class="item"><a title="Best sellers" href="index.php?controller=best-sales">Best sellers</a></li>
              <li class="item"><a title="Our stores" href="index.php?controller=stores">Our stores</a></li>
              <li class="item"><a title="Contact us" href="index.php?controller=contact">Contact us</a></li>
            </ul>
          </div>
        </div>
        <div class="block">
          <h4>Information</h4>
          <div class="block_content">
            <ul>
              <li class="item"><a title="Delivery" href="index.php?id_cms=1&amp;controller=cms&amp;id_lang=1">Delivery</a></li>
              <li class="item"><a title="Legal Notice" href="index.php?id_cms=2&amp;controller=cms&amp;id_lang=1">Legal Notice</a></li>
              <li class="item"><a title="About us" href="index.php?id_cms=4&amp;controller=cms&amp;id_lang=1">About us</a></li>
              <li><a title="Sitemap" href="index.php?controller=sitemap">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <div class="block">
          <h4>My account</h4>
          <div class="block_content">
            <ul>
              <li><a href="index.php?controller=history">My orders</a></li>
              <li><a href="index.php?controller=order-slip">My credit slips</a></li>
              <li><a href="index.php?controller=addresses">My addresses</a></li>
              <li><a href="index.php?controller=identity">My personal info</a></li>
            </ul>
          </div>
        </div>
        <div class="block last">
          <h4>Contact us</h4>
          <div class="block_content">
            <p><a href="mailto:prestazilla@gmail.com">prestazilla@gmail.com</a> <br />
              +38649 123 456 789 00<br />
              Lorem ipsum address street no 24 b41</p>
          </div>
        </div>
      </div>
      <footer id="footer-absolute" class="clearfix"> <a  id="scroll-top-img"  href="#" class="go-top first-bg" > <img src="images/scrolltop.png"  /></a>
        <div class="copy">
          <p>© 2013 onlinestore , All Rights Reserved</p>
        </div>
        <div class="social">
          <p><a href="#"> <em class="icon-facebook"><span>icon</span></em></a> <a href="#"><em class="icon-twitter"><span>icon</span></em></a> <a href="#"><em class="icon-rss"><span>icon</span></em></a> <a href="#"><em class="icon-pinterest"><span>icon</span></em></a> <a href="#"><em class="icon-google-plus"><span>icon</span></em></a></p>
        </div>
      </footer>
    </div>
  </footer>
</div>
</body>
</html>
