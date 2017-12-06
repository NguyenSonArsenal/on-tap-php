<!DOCTYPE html>

<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

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

        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);

        
    ?>

  <!-- Main -->
  <section  id="columns" class="container_9 clearfix col2-right">
    <!-- Center -->
    <article id="center_column" class=" grid_5">
      <?php
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
      ?>
      <ul class="products-grid">
        <li class="item first fadeIn animated">
          <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg">
            enlarge image
            <i class="icon-search"></i>
          </a>
          <a class="product-image" title="Product Name" href="product.php">
            <img src="photos/<?php echo $row['name'] ?> " width="249" height="180" alt="product">
          </a>
          <h2 class="product-name"> <a title="Product Name" href="product.php"> Product Name </a> </h2>
          <div class="actions">
            <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a>
            <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a>
          </div>
        </li>
      </ul>
      <?php
        }
      } else {
        echo "<b>No products</b>";
      }
      ?>
    </article>

      <?php
        require_once "./includes/right-bar.php";
      ?>

  </section>

  <div class="footer-info first-bg">
    <div class="container_9 clearfix">
      <p><a href="javascript:"><img src="media/footer-banner.png" alt=""></a></p>
    </div>
  </div>


    <?php
        require_once "./includes/footer.php";
    ?>

</div>
</body>
</html>
