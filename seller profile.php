<?php
    if(!isset($_COOKIE['email']) || !isset($_COOKIE['aadhaar'])){
        if(!isset($_COOKIE['email'])){
            header('location: ./login.php');
            die();
        }
        else{
            header('location: ./profile.php');
            die();
        }
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
  <!-- Header -->
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
                      if(isset($_COOKIE['id'])){
                        $que = "SELECT * FROM cart WHERE cust_id = ".$_COOKIE['id'].";";
                        if($counts = $conn -> query($que)){
                          echo $counts -> num_rows;
                        }
                      }
                      else{
                        echo 0;
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

  <!-- Main -->
  <div class="Container">
      <div class="ContainerFlex">
        <div class="LeftContainer">
            <div class="Details">
                <div class="UserName">
                <?php
                if(isset($_COOKIE['email'])){
                  if(isset($_COOKIE['image'])){
                  ?>
                    <div class="Image"><img src="<?php echo $_COOKIE['image'];?>" alt=""></div>
                  <?php
                  }
                  else{?>
                    <div class="Image"><img style="filter: invert(50%);" src="./Images/images/user_icon.png" alt=""></div>
                  <?php
                  }
                }
                  ?>
                    <div class="Name">
                        <h2>Hello,</h2>
                        <h1><?php echo $_COOKIE['name'];?></h1>
                    </div>
                </div>
                <div class="MoreItems">
                    <ul>
                        <li><a href="#"><img src="./images/Images/about.png" alt=""> MY ORDERS</a></li>
                        <li><a href="#"><img src="./images/Images/login_logo.png" alt=""> ACCOUNT SETTINGS</a>
                          <ul>
                            <a href="#"><li>Profile Information</li></a>
                            <a href="#"><li>Manage Addresses</li></a>
                            <a href="#"><li>PAN Card Information</li></a>
                          </ul>
                        </li>
                        <li><a href="#"><img src="./images/Images/like.png" alt=""> PAYMENTS</a>
                          <ul>
                            <a href="#"><li>Gift Cards</li></a>
                            <a href="#"><li>Saved UPI</li></a>
                            <a href="#"><li>Saved Cards</li></a>
                          </ul>
                        </li>
                        <li><a href="#"><img src="./images/Images/request.png" alt=""> MY CHATS</a></li>
                        <li><a href="#"><img src="./images/Images/dashboard.png" alt=""> MY STUFF</a>
                          <ul>
                            <a href="#"><li>My Coupons</li></a>
                            <a href="#"><li>My Reviews &amp; Ratings</li></a>
                            <a href="#"><li>All Notifications</li></a>
                            <a href="#"><li>My Wishlist</li></a>
                          </ul>
                        </li>
                        <li><a href="#"><img src="./images/Images/cancel.png" alt=""> Logout</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="RightContainer">
          <div class="Details">
            <div class="Title">
              <h1>Personal Information</h1>
            </div>
            <div class="EntryField grid gdp">
              <div class="INFO"><h1><?php echo $_COOKIE['name'];?></h1></div>
              <div class="INFO"><h1><?php echo $_COOKIE['pan'];?></h1></div>
              <div class="INFO"><h1><?php echo $_COOKIE['aadhaar'];?></h1></div>
              <div class="INFO"><h1><?php echo $_COOKIE['address'];?></h1></div>
              <!--<input type="text" name="name" placeholder="Name" value="<?php //echo $_COOKIE['name'];?>" disabled>
              <input type="text" name="pan" placeholder="PAN" value="<?php //echo $_COOKIE['pan'];?>" disabled>
              <input type="text" name="aadhaar" placeholder="Aadhaar Number" value="<?php //echo $_COOKIE['aadhaar'];?>" disabled>
              <input type="text" name="address" placeholder="Your Address" value="<?php //echo $_COOKIE['address'];?>" disabled>
              -->
            </div>
            <div class="Email">
              <h1>Email Address</h1>
            </div>
            <div class="EntryField gdp">
            <div class="INFO"><h1><?php echo $_COOKIE['email'];?></h1></div>
            </div>
            <div class="Email">
              <h1>Mobile Number</h1>
            </div>
            <div class="EntryField gdp">
            <div class="INFO"><h1><?php echo $_COOKIE['mobile'];?></h1></div>
            </div>
            <div class="FAQ">
              <h1>FAQs</h1>
              <que>What happens when I update my email address (or mobile number)?</que>
              <ans>
                Your login email id (or mobile number) changes, likewise. You'll receive all your account related communication
                on your updated email address (or mobile number).
              </ans>
              <que>When will my Wizards account be updated with the new email address (or Mobile Number)?</que>
              <ans>
                It happens as soon as you confirm the verification code sent to your email (or mobile) and save the changes.
              </ans>
              <que>What happens to my existing Wizards account when I update my email address (or mobile Number)?</que>
              <ans>
                Updating your email address (or Mobile Number) doesn't invalidate your account. Your account remains fully functional.
                You'll continue seeing your Order history, saved information and personal details.
              </ans>
              <que>Does my Seller account get affected when I update my email address?</que>
              <ans>
                Wizards has a 'single sign-on' policy Any changes will reflect in your Seller account also.
              </ans>
              <div class="Deactivate">
                <a href="deactivate.php"><edit>Deactivate Seller Account</edit></a>
                
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="Heading"><h1>Your Products</h1></div>
  <div class="Heading select"><h3 style="margin-left: 3rem; cursor:pointer;"><a href="./add products.php">Add More Products</a></h3></div>
  <div class="SellerProductSection grid-3 grid-4">
    <?php
      $que = "SELECT prod_id FROM product WHERE seller_email = '".$_COOKIE['email']."';";
      if($counts = $conn -> query($que)){
        if($counts -> num_rows > 0){
          while($fetch = $counts->fetch_assoc()){
          $sql = "SELECT * FROM product WHERE prod_id = ".$fetch['prod_id'].";";
          $prepare = $conn -> query($sql);
          if($prepare -> num_rows > 0){
            while($data = $prepare -> fetch_assoc()){
    ?>
    <div class="Product">
      <div class="ProductID">
        <h1><?php echo $data['prod_id'];?></h1>
        <button type="button" class="cancel" onclick="cancel(<?php echo $data['prod_id'];?>)">X</button>
      </div>
      <div class="Image ">
        <edit onclick="editing(<?php echo $data['prod_id'];?>)" class="product_edit">Edit</edit>
      <a href="./product details.php?product=<?php echo $fetch['prod_id'];?>"><img src="<?php echo $data['images0'];?>" style="border-radius:0;" alt=""></a>
      </div>
      <div class="ProductDescription">
            <div class="ProductName">
                <h1><?php echo $data['prod_name'];?></h1>
            </div>
            <div class="ProductReview">
            <?php
              $review = "SELECT * FROM prod_rating WHERE prod_id=".$data['prod_id'].";";
              if($done = $conn -> query($review)){
                if($done -> num_rows > 0){
                  $reviews = 0;
                  $s1=0;
                  $s2=0;
                  $s3=0;
                  $s4=0;
                  $s5=0;
                  while($get = $done -> fetch_assoc()){
                    if($get['review'] != null){
                      $reviews += 1;
                    }
                    if($get['s1']==1){
                      $s1 += 1;
                    }
                    elseif($get['s2']==1){
                      $s2 += 1;
                    }
                    elseif($get['s3']==1){
                      $s3 += 1;
                    }
                    elseif($get['s4']==1){
                      $s4 += 1;
                    }
                    else{
                      $s5 += 1;
                    }
                  }
                  $total_stars = $s1 + $s2 + $s3 + $s4 + $s5;
                  $per_s1 = ($s1*100)/$total_stars;
                  $per_s2 = ($s2*100)/$total_stars;
                  $per_s3 = ($s3*100)/$total_stars;
                  $per_s4 = ($s4*100)/$total_stars;
                  $per_s5 = ($s5*100)/$total_stars;
                  $rating = round(((5 * $s5) + (4 * $s4) + (3 * $s3) + (2 * $s2) + (1 * $s1))/($s5 + $s4 + $s3 + $s2 + $s1),1);
            ?>
              <h1><?php echo $rating;?> <img src="./images/Images/Favourites.png" alt=""></h1><h3>(<?php echo $reviews;?>)</h3>
            <?php
                }
              }
            ?>
            </div>
            <div class="ProductCost">
                <div class="OriginalCost">
                    <del><?php echo $data['prod_org_price'];?></del><h1><?php echo $data['prod_dis_price'];?></h1><h3><?php echo $data['prod_discount'];?>% off</h3>
                </div>
                <div class="DeliveryCost">
                  <?php if($data['prod_delivery'] <= 0){?>
                    <h1>Free Delivery</h1><?php }
                    else{?>
                    <h1>₹<?php echo $data['prod_delivery'];?> Delivery Charges</h1>
                    <?php
                    }
                    ?>
                    <h3>Qnt. - <?php echo $data['prod_quantity'];?></h3>
                </div>
            </div>
      </div>

    </div>
    <?php
                      }
                    }
                  }
                }
                else{
                  ?>
                  <div class="shop-now sell">
                    <a href="./add products.php"><h1>Start Selling something New</h1></a>
                  </div>
                  <script>
                    document.querySelector('.select').style.display="none"
                  </script>
                  <?php
                }
              }
            ?>
  </div>
  <form action="./sign_up.php" method="post">
      <input type="hidden" name="page" value="./remove product.php">
      <input type="hidden" name="product"  class="remov" value="">
      <button type="submit" class="reg" style="display:none;"></button>
  </form>
  <form action="./add products.php" method="post">
    <input type="hidden" name="product"  class="remov2" value="">
    <button type="submit" class="reg2" style="display:none;"></button>
  </form>
  <script>
    function editing(id){
      document.querySelector('.remov2').value=id
      document.querySelector('.reg2').click()
    }
    function cancel(id){
      document.querySelector('.remov').value=id
      document.querySelector('.reg').click()
    }
  </script>

  <!-- End Main -->
  <!-- Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
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
</body>

</html>