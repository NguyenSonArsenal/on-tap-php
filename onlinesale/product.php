<?php
require_once './model/Product.php';

$productObj = new Product();
$productId = isset($_GET['id']) ? $_GET['id'] : 0;
$product = $productObj->getProductById($productId);
if($product->num_rows > 0)
{
  $product = $product->fetch_assoc();
} else {
  header('Location: ./404.php');
}
?>

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

  <div class="category-full-image">
     <script src="js/jquery.bxslider.min.js"></script>
     <link href="css/jquery.bxslider.css" rel="stylesheet" />
     <script>
       $(document).ready(function(){
         $('.category-slider').bxSlider({
           auto: true,
           mode:'fade'
          });
        });
     </script>
  </div>
  
  <section  id="columns" class="container_9 clearfix col2-right">
 
  <!-- Center -->
  <article id="center_column" class=" grid_5">
     <div class="clearfix" id="primary_block">
        <!-- right infos-->
        <div id="pb-right-column"> 
          <!-- product img-->
          <div id="image-block">
            <link rel="stylesheet" href="css/prettyPhoto.css" />
            <script src="js/jquery.prettyPhoto.js"></script> 
            <script type="text/javascript">
              jQuery(document).ready(function() {
                $(".prettyPhoto").prettyPhoto();
              });
            </script>
            <a class="prettyPhoto" href="<?php echo 'photos/' . $product['name']?>">
              <img src="<?php echo 'photos/' . $product['name']?>" width="470" height="280">
            </a>
          </div>
        </div>
        <div id="pb-left-column">
          <div id="short_description_block">
            <h1><?php echo $product['name']?></h1>
            <div class="price">
              <p class="our_price_display">
                <span id="our_price_display">
                  <?php echo number_format($product['price'],0,"",".") . '$' ?>
                </span>
              </p>
            </div>
            <div class="rte align_justify" id="short_description_content">
              <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a</p>
            </div>
          </div>
          <form method="post" action="controller=cart" id="buy_block">
            <div class="product_attributes">
              <div class="add-to-box"> 
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
                </div>
                <button class="btn-icon btn"><i class="icon-shopping-cart"></i> Add to Cart</button>
                <button class="btn-icon btn"><i class="icon-heart"></i> Add to Wishlist</button>
              </div>
            </div>
          </form>
        </div>
     </div>
      <script>
        $(document).ready(function(){
          $('.content-li:first').addClass ('active');
          $('.content-li:first').css ('display', 'block');
          
          $('ul.i-tab').delegate('li:not(.active)', 'click', function() {
            $(this).addClass('active').siblings().removeClass('active')
          .parents('.tabs').find('ul.tab-content .content-li').hide()
          .eq($(this).index()).show();
          })
        });
      </script>
      <div class="tabs">
        <ul class="i-tab">
          <li class="active first-bg-hover"> Description </li>
          <li class="first-bg-hover"> Ingredients </li>
          <li class="first-bg-hover"> How to use </li>
          <li class="last first-bg-hover"> Video </li>
        </ul>
        <ul class="tab-content">
          <li class="content-li active" style="display: block;">
            <div class="box-collateral box-description">
              <div class="std">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratcommodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
              </div>
            </div>
          </li>
          <li class="content-li">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi arcoluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
          </li>
          <li class="content-li">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius moincidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
          </li>
          <li class="content-li">
           <iframe src="//player.vimeo.com/video/58894324" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/58894324">White Bedroom, CGI artwork</a> from <a href="http://vimeo.com/jurajtalcik">JurajTalcik</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
          </li>
        </ul>
      </div>   
        
        
  </article>

    <?php
      require_once "./includes/right-bar.php";
    ?>
    
</section>

  <div class="footer-info first-bg">
    <div class="container_9 clearfix">
      <p><a href="/"><img src="media/footer-banner.png" alt=""></a></p>
    </div>
  </div>

    <?php
      require_once "./includes/footer.php";
    ?>

</div>
</body>
</html>
