<?php
  if(isset($_GET['query']) || isset($_GET['sort'])){
    $dhfjkshdfjks = "";
  }
  else{
    header('location: ./');
  }
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <!-- Box icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./css/styles.css" />
  <link rel="stylesheet" href="./css/gajendra.css" />
  <link rel="stylesheet" href="./css/boxicons.min.css" />
  <link rel="stylesheet" href="./css/boxicons.css" />
  <link rel="stylesheet" href="./css/animations.css" />
  <title>THE WIZARDS - Ecommerce Website</title>
</head>
 
<body>
    <!-- Navigation -->
    <?php
      if(isset($_GET['query']) || isset($_GET['sort'])){
    ?>
    <form class="search-this">
      <input type="hidden" name="page" value="./filter.php">
      <input type="hidden" name="query" value="<?php if(isset($_GET['query'])){echo $_GET['query'];}?>">
      <input type="hidden" name="sort" value="<?php if(isset($_GET['sort'])){echo $_GET['sort'];}?>">
      <input type="hidden" name="catag" value="<?php if(isset($_GET['category'])){echo $_GET['category'];}?>">
    </form>
    <?php
      }
    ?>
  <nav>
    <div class="Information">
      <div>
        <section>
          <h4>Order Online Or Call Us: (001) 2222-55555</h4>
        </section>
        <section>
          <a href="./"><h3>Wizardme</h3></a>
        </section>
        <section>
          <a href="#"><h3>Wizardone</h3></a>
        </section>
        <section>
          <a href="./about.php"><h3>About Us</h3></a>
          <a href="#"><h3>FAQ</h3></a>
          <a href="./contact.php"><h3>Contact</h3></a>
        </section>
      </div>
    </div>
    <div class="main-navigation">
      <div class="resize">
        <div class="site-title">
          <a href="./"><h1>Wizardme</h1></a>
        </div>
        <i class="bx bx-menu-alt-left"></i>
        <ul>
          <a href="./"><li>Home</li></a>
          <li>SmartPhones <i class="bx bxs-down-arrow"></i>
            <ul>
              <li class="sort-by" data-cat="mobile">MI</li>
              <li class="sort-by" data-cat="mobile">One+</li>
              <li class="sort-by" data-cat="mobile">Redmi</li>
              <li class="sort-by" data-cat="mobile">Samsung</li>
              <li class="sort-by" data-cat="mobile">Apple</li>
              <li class="sort-by" data-cat="mobile">Realme</li>
              <li class="sort-by" data-cat="mobile">Poco</li>
              <li class="sort-by" data-cat="mobile">Infinix</li>
              <li class="sort-by" data-cat="mobile">Oppo</li>
              <li class="sort-by" data-cat="mobile">Vivo</li>
              <li class="sort-by" data-cat="mobile">Motorola</li>
            </ul>
          </li>
          <li>Laptops <i class="bx bxs-down-arrow"></i>
            <ul>
              <li class="sort-by" data-cat="laptop">Acer</li>
              <li class="sort-by" data-cat="laptop">Asus</li>
              <li class="sort-by" data-cat="laptop">Dell</li>
              <li class="sort-by" data-cat="laptop">Apple</li>
              <li class="sort-by" data-cat="laptop">MSI</li>
              <li class="sort-by" data-cat="laptop">Lenovo</li>
              <li class="sort-by" data-cat="laptop">Redmi</li>
              <li class="sort-by" data-cat="laptop">MI</li>
              <li class="sort-by" data-cat="laptop">HP</li>
              <li class="sort-by" data-cat="laptop">Alienware</li>
              <li class="sort-by" data-cat="laptop">Microsoft</li>
            </ul>
          </li>
          <li>Tablets <i class="bx bxs-down-arrow"></i>
            <ul>
              <li class="sort-by" data-cat="tablet">Apple</li>
              <li class="sort-by" data-cat="tablet">Samsung</li>
              <li class="sort-by" data-cat="tablet">Datawind</li>
              <li class="sort-by" data-cat="tablet">Microsoft</li>
              <li class="sort-by" data-cat="tablet">Coolpad</li>
              <li class="sort-by" data-cat="tablet">Dell</li>
            </ul>
          </li>
          <li>TV &amp; Home <i class="bx bxs-down-arrow"></i>
            <ul>
              <li class="sort-by" data-cat="tv">Panasonic</li>
              <li class="sort-by" data-cat="tv">Mi</li>
              <li class="sort-by" data-cat="tv">HP</li>
              <li class="sort-by" data-cat="tv">Samsung</li>
              <li class="sort-by" data-cat="tv">TCL</li>
              <li class="sort-by" data-cat="tv">LG</li>
              <li class="sort-by" data-cat="tv">Sony</li>
              <li class="sort-by" data-cat="tv">Vu</li>
              <li class="sort-by" data-cat="tv">Thomson</li>
              <li class="sort-by" data-cat="tv">Micromax</li>
              <li class="sort-by" data-cat="tv">Haier</li>
              <li class="sort-by" data-cat="tv">Intex</li>
              <li class="sort-by" data-cat="home">Furniture</li>
              <li class="sort-by" data-cat="home">Table</li>
              <li class="sort-by" data-cat="home">Alexa</li>
              <li class="sort-by" data-cat="home">Google Assistant</li>
              <li class="sort-by" data-cat="home">Lamps</li>
              <li class="sort-by" data-cat="home">Furnishing</li>
            </ul>
          </li>
          <li>Fitness <i class="bx bxs-down-arrow"></i>
            <ul>
              <li class="sort-by" data-cat="fitness">Fitness Accessories</li>
              <li class="sort-by" data-cat="fitness">Fitness Equipments</li>
              <li class="sort-by" data-cat="fitness">Yoga</li>
              <li class="sort-by" data-cat="fitness">Pilates</li>
              <li class="sort-by" data-cat="fitness">Mobility Aids</li>
              <li class="sort-by" data-cat="fitness">Dumbols</li>
            </ul>
          </li>
          <li>Audio <i class="bx bxs-down-arrow"></i>
            <ul>
              <li class="sort-by" data-cat="audio">Headphones</li>
              <li class="sort-by" data-cat="audio">Earphones</li>
              <li class="sort-by" data-cat="audio">Speakers</li>
              <li class="sort-by" data-cat="audio">MicroPhones</li>
              <li class="sort-by" data-cat="audio">Amplifiers</li>
              <li class="sort-by" data-cat="audio">Home Theatres</li>
            </ul>
          </li>
        </ul>
        <form action="./product.php" method="get">
          <input type="hidden" name="sort" value="" class="sort">
          <input type="hidden" name="category" value="" class="cat">
          <button type="submit" class="sort-list" style="display:none;"></button>
        </form>
        <ul>
          <div class="search"><i class="bx bx-search"></i></div>
          
          <a href="./wishlist.php"><i class="bx bx-heart"></i></a>
          <a href="./cart.php"><i class="bx bx-cart"></i></a>
          <?php
            if(isset($_COOKIE['seller_email']) || isset($_COOKIE['seller_id'])){
          ?>
          <a href="./seller profile.php"><i class="bx bxs-user-account" title="Seller Profile"></i></a>
          <?php
            }
          ?>
          <?php 
            if(isset($_COOKIE['email'])){
          ?>
          <a href="./order history.php"><i class="bx bxs-cart-download" title="My Orders"></i></a>
          <?php
            }
          ?>
          <h5 class="cart-item-count">
            <?php
              $conn = new mysqli('sql108.epizy.com', 'epiz_31213404', 'Gajender8', 'epiz_31213404_customers');
              if($conn -> connect_error){
                echo 0;
              }
              else{
                if(isset($_COOKIE['id'])){
                  $que = "SELECT * FROM cart WHERE cust_id = ".$_COOKIE['id'].";";
                  if($counts = $conn -> query($que)){
                    echo $counts -> num_rows;
                  }
                }
                else{
                  echo 0;
                }
              }
            ?>
          </h5>
          <?php
            if(isset($_COOKIE['email'])){
              if(isset($_COOKIE['image']) && file_exists($_COOKIE['image'])){
          ?>
              <li><div class="Image"><img src="<?php echo $_COOKIE['image'];?>" title="Profile" class="img" alt=""></div>
              <ul class="profile-option">
              <a href="./profile.php"><li>Profile</li></a>
              <?php
                if(isset($_COOKIE['seller_email']) || isset($_COOKIE['seller_id'])){
                  echo '<a href="./seller profile.php"><li>Seller Profile</li></a>';
                }
                else{
                  echo '<a href="./seller account.php"><li>Become a Seller</li></a>';
                }
              ?>
              <a href="./order history.php"><li>My Orders</li></a>
              <ul>
                <div class="search"><i class="bx bx-search"></i></div>
                <a href="./wishlist.php"><i class="bx bx-heart"></i></a>
                <a href="./cart.php"><i class="bx bx-cart"></i></a>
                <h5 class="cart-item-count">
                  <?php
                    $conn = new mysqli('sql108.epizy.com', 'epiz_31213404', 'Gajender8', 'epiz_31213404_customers');
                    if($conn -> connect_error){
                      echo 0;
                    }
                    else{
                      if(isset($_COOKIE['id'])){
                        $que = "SELECT * FROM cart WHERE cust_id = ".$_COOKIE['id'].";";
                        if($counts = $conn -> query($que)){
                          echo $counts -> num_rows;
                        }
                      }
                      else{
                        echo 0;
                      }
                    }
                  ?>
                </h5>
              </ul>
              <li style="color: #f00;" onclick="document.querySelector('.sub').click()">Logout</li>
              <form action="logout.php" method="post">
                  <button type="submit" class="sub" style="display: none;"></button>
              </form>
              </ul>
            </li>
          <?php
            }
            else{
          ?>
            <li><div class="logged-in"><i class="bx bxs-user"></i></div>
              <ul class="profile-option">
              <a href="./profile.php"><li>Profile</li></a>
              <?php
                if(isset($_COOKIE['seller_email']) || isset($_COOKIE['seller_id'])){
                  echo '<a href="./seller profile.php"><li>Seller Profile</li></a>';
                }
                else{
                  echo '<a href="./seller account.php"><li>Become a Seller</li></a>';
                }
              ?>
              <a href="./order history.php"><li>My Orders</li></a>
              <li style="color: #f00;" onclick="document.querySelector('.sub').click()">Logout</li>
              <form action="logout.php" method="post">
                  <button type="submit" class="sub" style="display: none;"></button>
              </form>
              </ul>
            </li>
          <?php
              }
            }
            else{
          ?>
            <a href="./login.php"><i class="bx bx-user"></i></a>
          <?php
            }
          ?>
          <?php 
            if(isset($_COOKIE['email'])){
          ?>
          <a href="./logout.php"><i class="bx bx-log-in" style="color: #f00;" title="Logout"></i></a>
          <?php 
            }
          ?>
        </ul>
      </div>
    </div>
  </nav>
  
    <!-- All Products -->
    <div class="top-container">
      <form class="data-sorting">
        <div class="sort-btn">
          <button type="button" onclick="show_this()">Sort</button>
        </div>
        <div class="filter-this">
        <button type="button" onclick="show_filter()">Filter</button>
        </div>
        <ul>
          <li>Sort By <i class="bx bx-right-arrow-alt"></i></li>
          <li><input type="radio" name="sortings" checked value="relevant" id="rel" style="display: none;"><label for="rel">Relevant</label></li>
          <li><input type="radio" name="sortings" value="low" id="low" style="display: none;"><label for="low">Price Low to High</label></li>
          <li><input type="radio" name="sortings" value="high" id="high" style="display: none;"><label for="high">Price High to Low</label></li>
          <li><input type="radio" name="sortings" value="dis_low" id="dis_low" style="display: none;"><label for="dis_low">Discount Low to High</label></li>
          <li><input type="radio" name="sortings" value="dis_high" id="dis_high" style="display: none;"><label for="dis_high">Discount High to Low</label></li>
          <li><input type="radio" name="sortings" value="new" id="new" style="display: none;"><label for="new">Newly Added</label></li>
          <li><input type="radio" name="sortings" value="name" id="name" style="display: none;"><label for="name">Name</label></li>
        </ul>
      </form>
    </div>
    <section class="section all-products" id="products">
      
        <div class="filter-section" id="filter">
          <form class="filter" method="post">
            <h1>Filter</h1>
            <button type="submit" class="apply">Apply Filters</button>
            <!--<div class="active-filters">
              <h2>Active Filters</h2>
              <h4><p class="remove">X</p>rating</h4>
              <h4><p class="remove">X</p>brand</h4>
              <h4><p class="remove">X</p>ram</h4>
              <h4><p class="remove">X</p>storage</h4>
              <h4><p class="remove">X</p>clock speed</h4>
            </div>-->
            <div class="price-limitor">
              <h2>Set Price Limit</h2>
              <input type="range" oninput="slide()" class="slider" min="0"  step="100" value="0" max=0>
              <h5>do it manually</h5>
              <div class="limitor-values">
                <input type="number" name="min_price" class="min" min="" max="" placeholder="min">
                <input type="number" name="max_price" class="max" min="" max="" placeholder="max">
              </div>
              <script>
                var slider = document.querySelector('.slider')
                var min = document.querySelector('.min')
                var max = document.querySelector('.max')

                slide = ()=>{
                  max.min = min.min = slider.min
                  max.max = slider.max
                  min.max = (slider.max - slider.step)
                  min.value = slider.value
                  max.value = slider.max
                  if(min.value > (slider.max - slider.step)){
                    min.value = (slider.max - slider.step)
                    slider.value = min.value
                  }
                }

                min.onkeyup = ()=>{
                  if(min.value >= (slider.max - slider.step)){
                    min.value = (slider.max - slider.step)
                  }
                  slider.value = min.value
                  if(min.value == ''){
                    slider.value = 0
                  }
                  if(min.value > (max.value - 1)){
                    min.value = (max.value - slider.step)
                  }
                  if(min.value < 0){
                    min.value = 0
                  }
                  if(max.value < 0){
                    max.value = 0
                  }
                  if(max.value == ''){
                    min.value = 0
                    slider.value = 0
                  }
                }
                
                max.onkeyup = ()=>{
                  if(max.value == 0){
                    slider.value = slider.step
                  }
                  if(max.value > (slider.max - 0)){
                    max.value = max.max
                  }
                  slider.value = max.value
                  if(min.value == ''){
                    slider.value = 0
                  }
                  if(min.value >= max.value){
                    min.value = (max.value - slider.step)
                  }
                  if(min.value < 0){
                    min.value = 0
                  }
                  if(max.value < 0){
                    max.value = 0
                  }
                  if(max.value == ''){
                    min.value = 0
                    slider.value = 0
                  }
                }

              </script>
            </div>

            <!-- For Mobile Phones-->

            <div class="brand-filter">
              <h2>Brand</h2>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="brand[]" value="mi" value=""><p>MI</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="brand[]" value="xiaomi"><p>Xiaomi</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="brand[]" value="poco"><p>Poco</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="brand[]" value="apple"><p>Apple</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="brand[]" value="samsung"><p>Samsung</p>
              </div>
              <more>15 more brands</more>
            </div>
            <div class="brand-filter">
              <h2>Product Rating</h2>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="rating[]" value="4"><p>4 <img src="./images/Images/Favourites.png" alt=""> &amp; Above</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="rating[]" value="3"><p>3 <img src="./images/Images/Favourites.png" alt=""> &amp; Above</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="rating[]" value="2"><p>2 <img src="./images/Images/Favourites.png" alt=""> &amp; Above</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="rating[]" value="1"><p>1 <img src="./images/Images/Favourites.png" alt=""> &amp; Above</p>
              </div>
            </div>
            <div class="brand-filter">
              <h2>RAM</h2>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="ram[]" value="512"><p>512MB</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="ram[]" value="1"><p>1GB</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="ram[]" value="2"><p>2GB</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="ram[]" value="3"><p>3GB</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="ram[]" value="4"><p>4GB</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="ram[]" value="6"><p>6GB &amp; Above</p>
              </div>
            </div>
            <div class="brand-filter">
              <h2>Internal Storage</h2>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="storage[]" value="8"><p>8GB</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="storage[]" value="16"><p>16GB</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="storage[]" value="32"><p>32GB</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="storage[]" value="64"><p>64GB</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="storage[]" value="128"><p>128GB</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="storage[]" value="256"><p>256GB &amp; Above</p>
              </div>
            </div>
            <div class="brand-filter">
              <h2>Battery Capicity</h2>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="battery[]" value="100"><p>100 - 2000 mAh</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="battery[]" value="2000"><p>2000 - 3000 mAh</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="battery[]" value="3000"><p>3000 - 4000 mAh</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="battery[]" value="4000"><p>4000 - 5000 mAh</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="battery[]" value="5000"><p>5000 - 6000 mAh</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="battery[]" value="6000"><p>6000 mAh &amp; Above</p>
              </div>
            </div>
            <div class="brand-filter">
              <h2>Processor Core</h2>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="core[]" value="single"><p>Single Core</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="core[]" value="dual"><p>Dual Core</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="core[]" value="quad"><p>Quad Core</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="core[]" value="hexa"><p>Hexa Core</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="core[]" value="octa"><p>Octa Core</p>
              </div>
            </div>
            <div class="brand-filter">
              <h2>Operating System</h2>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="os[]" value="symbian"><p>Symbian</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="os[]" value="android"><p>Android</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="os[]" value="ios"><p>iOS</p>
              </div>
            </div>
            <div class="brand-filter">
              <h2>Network Type</h2>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="network[]" value="5g"><p>5G</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="network[]" value="4g"><p>4G</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="network[]" value="3g"><p>3G</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="network[]" value="2g"><p>2G</p>
              </div>
            </div>
            <div class="brand-filter">
              <h2>Screen Size</h2>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="size[]" value="0"><p>Less than 3inch</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="size[]" value="3"><p>3-4inch</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="size[]" value="4"><p>4-5inch</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="size[]" value="5"><p>5-6inch</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="size[]" value="6"><p>6-7inch</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="size[]" value="7"><p>7inch &amp; Above</p>
              </div>
            </div>
            <div class="brand-filter">
              <h2>Resolution</h2>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="resolution[]" value="hd"><p>HD</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="resolution[]" value="hd+"><p>HD+</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="resolution[]" value="full hd"><p>Full HD</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="resolution[]" value="full hd+"><p>Full HD+</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="resolution[]" value="4k"><p>4K</p>
              </div>
            </div>
            <div class="brand-filter">
              <h2>Discount</h2>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="discount[]" value="80"><p>80% &amp; Above</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="discount[]" value="60"><p>60% &amp; Above</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="discount[]" value="40"><p>40% &amp; Above</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="discount[]" value="20"><p>20% &amp; Above</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="discount[]" value="10"><p>10% &amp; Above</p>
              </div>
            </div>
            <div class="brand-filter">
              <h2>Clock Speed</h2>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="clock[]" value="4"><p>4GHz &amp; Above</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="clock[]" value="3"><p>3GHz &amp; Above</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="clock[]" value="2.5"><p>2.5GHz &amp; Above</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="clock[]" value="2"><p>2GHz &amp; Above</p>
              </div>
              <div class="available-brands">
                <input type="checkbox" class="check-box" name="clock[]" value="1"><p>1GHz &amp; Above</p>
              </div>
            </div>


            <input type="hidden" name="quer" value="<?php if(isset($_GET['query'])){echo $_GET['query'];}?>">
            <input type="hidden" name="sort" value="<?php if(isset($_GET['sort'])){echo $_GET['sort'];}?>">
            <input type="hidden" name="catagory" value="<?php if(isset($_GET['category'])){echo $_GET['category'];}?>">
            <input type="hidden" name="page" value="./filter-products.php">
            <button type="submit" class="apply1">Apply Filters</button>
          </form>
        </div>
      <div class="SellerProductSection right-float" style="margin: 1rem 0;">

          
          
      </div>
      <form action="./product details.php" style="display: none" method="get">
                <input type="hidden" name="product" class="pro" value="">
                <button style="display:none;" class="sub-bttn" type="submit"></button>
          </form>
          <form action="./sign_up.php" style="display: none" method="post" class="add-to-wishlist">
              <input type="hidden" name="page" value="./wish-list.php">
              <input type="hidden" name="prod" class="prod_id" value="">
              <button class="wish" style="display:none;" type="submit"></button>
          </form>
          <script>
            function wish_list(id, pos){
              document.querySelector('.prod_id').value=id
              $.ajax({
                url: './sign_up.php',
                method: 'post',
                data: $('.add-to-wishlist').serialize(),
                success: function(e){
                    if(e == "1"){
                      document.querySelector('.l'+pos).setAttribute('class','wish-listed l'+pos)
                    }
                    else{
                      document.querySelector('.l'+pos).setAttribute('class','wish-list l'+pos)
                    }
                  },
                error: function(a,b,c){
                  alert("error")
                }
              })
              return false;
            }
            function prod(id){
              document.querySelector('.pro').value=id;
              document.querySelector('.sub-bttn').click()
            }
          </script>
    </section>


    <a href="#" class="back-to-top" style="display:none;"></a>
    <!-- Footer -->
    <footer id="footer" class="section footer">
        <div class="container">
          
            <div class="footer-container">
                <div class="footer-center">
                    <h3>EXTRAS</h3>
                    <a href="#">Brands</a>
                    <a href="#">Gift Certificates</a>
                    <a href="#">Affiliate</a>
                    <a href="#">Specials</a>
                    <a href="#">Site Map</a>
                </div>
                <div class="footer-center">
                    <h3>INFORMATION</h3>
                    <a href="#">About Us</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Site Map</a>
                </div>
                <div class="footer-center">
                    <h3>MY ACCOUNT</h3>
                    <a href="#">My Account</a>
                    <a href="#">Order History</a>
                    <a href="#">Wish List</a>
                    <a href="#">Newsletter</a>
                    <a href="#">Returns</a>
                </div>
                <div class="footer-center">
                    <h3>CONTACT US</h3>
                    <div>
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                        42 Dream House, Dreammy street, 7131 Dreamville, USA
                    </div>
                    <div>
                        <span>
                            <i class="far fa-envelope"></i>
                        </span>
                        company@gmail.com
                    </div>
                    <div>
                        <span>
                            <i class="fas fa-phone"></i>
                        </span>
                        456-456-4512
                    </div>
                    <div>
                        <span>
                            <i class="far fa-paper-plane"></i>
                        </span>
                        Dream City, USA
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <!-- Custom Script -->
    <script src="./js/index.js"></script>
    <script src="./js/Jquery.js"></script>
    <script>
      const targ = document.querySelector('.data-sorting ul')
      const form_btn = document.querySelector('#filter')
      cnd = 0;
      show_this = ()=>{
        form_btn.style.display="none";
        if(cnd == 0){
          targ.style.display="flex";
          setTimeout(() => {
            targ.style.opacity = "1";
          }, 100);
          cnd = 1;
        }
        else{
          targ.style.opacity = "1";
          setTimeout(() => {
            targ.style.display="none";
          }, 300);
          cnd = 0
        }
      }

        show_filter = ()=>{
          targ.style.display="none";
        if(cnd == 0){
          form_btn.style.display="flex";
          setTimeout(() => {
            form_btn.style.opacity = "1";
          }, 100);
          cnd = 1;
        }
        else{
          form_btn.style.opacity = "1";
          setTimeout(() => {
            form_btn.style.display="none";
          }, 300);
          cnd = 0
        }
      }
    </script>
    <script>
      $(document).ready(()=>{
        
        filling = '<div class="found"><h6 class="result"></h6></div>'
        $.ajax({
          method: "GET",
          url:"./sign_up.php",
          data: $('.search-this').serialize(),
          processData: false,
          cache: false,
          success: function(e){
            if(e == ''){
              filling += '<not><red>No Product is Found</red></not>'
              document.querySelector('.back-to-top').click()
              document.querySelector('.right-float').innerHTML = filling
            }
            else{
              conv = e.replaceAll('}{','}/*-+{')
              list = conv.split('/*-+')
              Json = []
              for(i=0; i<list.length; i++){
                Json.push(JSON.parse(list[i]))
              }
              hide = []
              wishlist = []
              for(i=0; i<Json.length; i++){
                if(Json[i].prod_delivery <= 0){
                  Json[i].prod_delivery = "Free Delivery"
                }
                if(Json[i].rate_count <= 0){
                  hide.push(i)
                }
                if(i == Json.length - 1){
                  var slider = document.querySelector('.slider')
                  var min = document.querySelector('.min')
                  var max = document.querySelector('.max')
                  slider.min = Json[i].minimum
                  slider.max = Json[i].maximum
                  min.value = slider.min
                  max.min = min.min = slider.min
                  max.max = slider.max
                  min.max = (slider.max - slider.step)
                  max.value = slider.max
                  min.value = slider.min
                }

                filling += '<div class="Product"><div class="Image"><div type="button" class="'+Json[i].wishlisted+' l'+i+'" onclick="wish_list('+Json[i].prod_id+', '+i+')"><i class="bx bxs-heart"></i></div><img onclick="prod('+Json[i].prod_id+')" src="'+Json[i].images0+'" alt=""></div><div class="ProductDescription" onclick="prod('+Json[i].prod_id+')"><div class="ProductName"><h1>'+Json[i].prod_name+'</h1></div><div class="ProductReview r'+i+'"><h1>'+Json[i].rating+' <img src="./images/Images/Favourites.png" alt=""></h1><h3>('+Json[i].rate_count+')</h3></div><div class="ProductCost"><div class="OriginalCost"><del>'+Json[i].prod_org_price+'</del><h1>'+Json[i].prod_dis_price+'</h1><h3>'+Json[i].prod_discount+'% off</h3></div><div class="DeliveryCost">'+Json[i].prod_delivery+'</div></div></div></div>'
              }
              document.querySelector('.right-float').innerHTML = filling
              for(i=0; i<hide.length; i++){
                  document.querySelector('.r'+hide[i]).style.display="none"
                  document.querySelector('.result').innerHTML = Json.length+" Products Found"
              }
            }
          },
          error: function(a,b,c){
            alert("eror")
          }
        })
        return false;
      })
    </script>
    <script>
        $('.data-sorting').change(()=>{
          filling = '<div class="found"><h6 class="result"></h6></div>'
          $.ajax({
            method: "POST",
            url:"./sign_up.php",
            data: $('.data-sorting').serialize()+"&"+$('.filter').serialize(),
            processData: false,
            cache: false,
            success: function(e){
              if(e == ''){
                filling += '<not><red>No Product is Found</red></not>'
                document.querySelector('.back-to-top').click()
                document.querySelector('.right-float').innerHTML = filling
              }
              else{
                conv = e.replaceAll('}{','}/*-+{')
                list = conv.split('/*-+')
                Json = []
                for(i=0; i<list.length; i++){
                  Json.push(JSON.parse(list[i]))
                }
                hide = []
                wishlist = []
                for(i=0; i<Json.length; i++){
                  if(Json[i].prod_delivery <= 0){
                    Json[i].prod_delivery = "Free Delivery"
                  }
                  if(Json[i].rate_count <= 0){
                    hide.push(i)
                  }
                  filling += '<div class="Product"><div class="Image"><div type="button" class="'+Json[i].wishlisted+' l'+i+'" onclick="wish_list('+Json[i].prod_id+', '+i+')"><i class="bx bxs-heart"></i></div><img onclick="prod('+Json[i].prod_id+')" src="'+Json[i].images0+'" alt=""></div><div class="ProductDescription" onclick="prod('+Json[i].prod_id+')"><div class="ProductName"><h1>'+Json[i].prod_name+'</h1></div><div class="ProductReview r'+i+'"><h1>'+Json[i].rating+' <img src="./images/Images/Favourites.png" alt=""></h1><h3>('+Json[i].rate_count+')</h3></div><div class="ProductCost"><div class="OriginalCost"><del>'+Json[i].prod_org_price+'</del><h1>'+Json[i].prod_dis_price+'</h1><h3>'+Json[i].prod_discount+'% off</h3></div><div class="DeliveryCost">'+Json[i].prod_delivery+'</div></div></div></div>'
                }
                document.querySelector('.back-to-top').click()
                document.querySelector('.right-float').innerHTML = filling
                document.querySelector('.result').innerHTML = Json.length+" Products Found"
                for(i=0; i<hide.length; i++){
                  document.querySelector('.r'+hide[i]).style.display="none"
                }
              }
              
              
            },
            error: function(a,b,c){
              alert("eror")
            }
          })
          return false;
          
        })
    </script>

    <script>
        
        $('.filter').submit(()=>{
          filling = '<div class="found"><h6 class="result"></h6></div>'
          $.ajax({
            method: "POST",
            url:"./sign_up.php",
            data: $('.data-sorting').serialize()+"&"+$('.filter').serialize(),
            processData: false,
            cache: false,
            success: function(e){
              if(e == ''){
                filling += '<not><red>No Product is Found</red></not>'
                document.querySelector('.back-to-top').click()
                document.querySelector('.right-float').innerHTML = filling
              }
              else{
                conv = e.replaceAll('}{','}/*-+{')
                list = conv.split('/*-+')
                Json = []
                for(i=0; i<list.length; i++){
                  Json.push(JSON.parse(list[i]))
                }
                hide = []
                wishlist = []
                for(i=0; i<Json.length; i++){
                  if(Json[i].prod_delivery <= 0){
                    Json[i].prod_delivery = "Free Delivery"
                  }
                  if(Json[i].rate_count <= 0){
                    hide.push(i)
                  }
                  filling += '<div class="Product"><div class="Image"><div type="button" class="'+Json[i].wishlisted+' l'+i+'" onclick="wish_list('+Json[i].prod_id+', '+i+')"><i class="bx bxs-heart"></i></div><img onclick="prod('+Json[i].prod_id+')" src="'+Json[i].images0+'" alt=""></div><div class="ProductDescription" onclick="prod('+Json[i].prod_id+')"><div class="ProductName"><h1>'+Json[i].prod_name+'</h1></div><div class="ProductReview r'+i+'"><h1>'+Json[i].rating+' <img src="./images/Images/Favourites.png" alt=""></h1><h3>('+Json[i].rate_count+')</h3></div><div class="ProductCost"><div class="OriginalCost"><del>'+Json[i].prod_org_price+'</del><h1>'+Json[i].prod_dis_price+'</h1><h3>'+Json[i].prod_discount+'% off</h3></div><div class="DeliveryCost">'+Json[i].prod_delivery+'</div></div></div></div>'
                }
                document.querySelector('.back-to-top').click()
                document.querySelector('.right-float').innerHTML = filling
                document.querySelector('.result').innerHTML = Json.length+" Products Found"
                for(i=0; i<hide.length; i++){
                  document.querySelector('.r'+hide[i]).style.display="none"
                }
              }
              
              
            },
            error: function(a,b,c){
              alert("eror")
            }
          })
          return false;
          
        })
    </script>
    <script>
            req = 0
            var search_bar = document.querySelector('.search')
            document.onclick = (e)=>{
              if(e.target.classList == "bx bx-menu-alt-left"){
                document.querySelector('.main-navigation').setAttribute('class','main-navigation show')
              }
              else{
                if(!("sort-by" == e.target.classList) && !(e.target.localName == "li") && !(e.target.localName == "i") && !(e.target.classList == "search-field")){
                  document.querySelector('.main-navigation').setAttribute('class','main-navigation')
                }
              }
              if(e.target.classList == "Image" || e.target.classList == "img"){
                window.location = "./profile.php"
              }

              if(e.target.classList == "sort-by"){
                document.querySelector('.sort').value=e.target.textContent
                document.querySelector('.cat').value=e.target.dataset.cat
                document.querySelector('.sort-list').click()
              }
              if(e.target.id == "srch"){
                document.querySelector('.srch-btn').click()
              }

              if(e.target.classList == "bx" || e.target.classList == "bx bx-search" || e.target.classList == "search-field"){
                if(req == 0){
                  if(window.innerWidth > 886){
                    search_bar.innerHTML = '<form action="./product.php" method="get"><div class="srch"><input type="text" name="query" placeholder="Search" autocomplete="off" class="search-field" /><i class="bx bx-search" style="display: inline;" id="srch"></i></div><button type="submit" class="srch-btn" style="display:none;"></button></form>'
                    document.querySelector('.cart-item-count').style.marginLeft="5.3rem"
                  }
                  else{
                    search_bar.innerHTML = '<form action="./product.php" method="get"><div class="srch"><i class="bx bx-search" style="display: inline;" id="srch"></i><input type="text" name="query" placeholder="Search" autocomplete="off" class="search-field" /></div><button type="submit" class="srch-btn" style="display:none;"></button></form>'
                    document.querySelector('.cart-item-count').style.marginLeft="5.3rem"
                  }
                  req = 1
                }
              }
              else{
                if(window.innerWidth > 886){
                  document.querySelector('.search-field').style.animation="wdt-out 0.5s linear"
                }
                else{
                  document.querySelector('.search-field').style.animation="wdt-out-alt 0.5s linear"
                }
                setTimeout(() => {
                  search_bar.innerHTML = '<i class="bx bx-search"></i>'
                  document.querySelector('.cart-item-count').style.marginLeft="8.8rem"
                }, 500)
                req = 0
              }
            }
          </script>
    
</body>
</html>