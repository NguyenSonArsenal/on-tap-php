<!-- Header Top -->
<div class="navbar navbar-static top-links first-bg" >
  <div class="navbar-inner container_9">
    <ul id="header_nav" class="nav pull-left">
       <li ><i class="icon-user"></i> <a href="#">My Account</a></li>
    </ul>
    <ul id="header_nav" class="nav pull-right">
      <li ><i class="icon-shopping-cart"></i> <a href="shopping-cart.php">Shopping Cart</a></li>
      <li><i class="icon-circle-arrow-right"></i> <a href="checkout.php">Checkout </a></li>
    </ul>
  </div>
</div>

<!-- Header -->
<header id="header" role="heading" class="third-bg" >
    <div class="header-content container_9"> <a title="onlinestore" href="index.php" class="logo "><img alt="logo" src="media/logo.jpg"></a>
        <div class="quick-access">
            <ul>
                <li > <a rel="nofollow" title="View my shopping cart" href="/" class="cart-btn  first-bg" > <i class="icon-shopping-cart"></i> </a> <span>0 item(s) - $0.00</span> </li>
            </ul>
        </div>
        <form method="get" action="index.php?controller=search" id="searchbox">
            <p>
                <input type="text" placeholder="Type and hit enter" value="" name="search_query">
            </p>
        </form>
    </div>
    <script src="js/jquery.dlmenu.js"></script>
    <script>
        $(function() {
            $( '#dl-menu' ).dlmenu();
            $(".sf-menu li.item").hover(
                function () {
                    $(this).children('a').addClass('hover');
                },function () {
                    $(this).children('a').removeClass('hover');
                }
            );});
    </script>
    <div id="dl-menu" class="dl-menuwrapper" style="display:none;">
        <button class="dl-trigger">Open Menu</button>
        <ul class="dl-menu">
            <li> <a href="#">Fashion</a>
                <ul class="dl-submenu">
                    <li> <a href="#">Men</a>
                        <ul class="dl-submenu">
                            <li><a href="product-list.html">Shirts</a></li>
                            <li><a href="product-list.html">Jackets</a></li>
                            <li><a href="product-list.html">Chinos &amp; Trousers</a></li>
                            <li><a href="product-list.html">Jeans</a></li>
                            <li><a href="product-list.html">T-Shirts</a></li>
                            <li><a href="product-list.html">Underwear</a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Women</a>
                        <ul class="dl-submenu">
                            <li><a href="product-list.html">Jackets</a></li>
                            <li><a href="product-list.html">Knits</a></li>
                            <li><a href="product-list.html">Jeans</a></li>
                            <li><a href="product-list.html">Dresses</a></li>
                            <li><a href="product-list.html">Blouses</a></li>
                            <li><a href="product-list.html">T-Shirts</a></li>
                            <li><a href="product-list.html">Underwear</a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Children</a>
                        <ul class="dl-submenu">
                            <li><a href="product-list.html">Boys</a></li>
                            <li><a href="product-list.html">Girls</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li> <a href="#">Electronics</a>
                <ul class="dl-submenu">
                    <li><a href="product-list.html">Camera &amp; Photo</a></li>
                    <li><a href="product-list.html">TV &amp; Home Cinema</a></li>
                    <li><a href="product-list.html">Phones</a></li>
                    <li><a href="product-list.html">PC &amp; Video Games</a></li>
                </ul>
            </li>
            <li> <a href="#">Furniture</a>
                <ul class="dl-submenu">
                    <li> <a href="product-list.html">Living Room</a>
                        <ul class="dl-submenu">
                            <li><a href="product-list.html">Sofas &amp; Loveseats</a></li>
                            <li><a href="product-list.html">Coffee &amp; Accent Tables</a></li>
                            <li><a href="product-list.html">Chairs &amp; Recliners</a></li>
                            <li><a href="product-list.html">Bookshelves</a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Bedroom</a>
                        <ul class="dl-submenu">
                            <li> <a href="#">Beds</a>
                                <ul class="dl-submenu">
                                    <li><a href="product-list.html">Upholstered Beds</a></li>
                                    <li><a href="product-list.html">Divans</a></li>
                                    <li><a href="product-list.html">Metal Beds</a></li>
                                    <li><a href="product-list.html">Storage Beds</a></li>
                                    <li><a href="product-list.html">Wooden Beds</a></li>
                                    <li><a href="product-list.html">Children's Beds</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Bedroom Sets</a></li>
                            <li><a href="#">Chests &amp; Dressers</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Home Office</a></li>
                    <li><a href="#">Dining &amp; Bar</a></li>
                    <li><a href="#">Patio</a></li>
                </ul>
            </li>
            <li> <a href="#">Jewelry &amp; Watches</a>
                <ul class="dl-submenu">
                    <li><a href="product-list.html">Fine Jewelry</a></li>
                    <li><a href="product-list.html">Fashion Jewelry</a></li>
                    <li><a href="product-list.html">Watches</a></li>
                    <li> <a href="product-list.html">Wedding Jewelry</a>
                        <ul class="dl-submenu">
                            <li><a href="product-list.html">Engagement Rings</a></li>
                            <li><a href="product-list.html">Bridal Sets</a></li>
                            <li><a href="product-list.html">Women's Wedding Bands</a></li>
                            <li><a href="product-list.html">Men's Wedding Bands</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</header>

<!-- Menu -->
<div class="sf-contener clearfix second-bg ">
    <nav class="nav-wrap container_9">
        <ul class="sf-menu clearfix  ">
            <li class="item"><a class="parent" href="index.php">Home</a></li>
            <li class="item"><a class="parent"  href="shopping-cart.php">Shopping Cart</a></li>
            <li class="item"><a class="parent"  href="checkout.php">Checkout</a></li>
            </li>
        </ul>
    </nav>
</div>