<?php
    if(!isset($_COOKIE['email'])){
      header('location:login.php');
      die();
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

  <!-- Main -->
  <div class="Container">
      <div class="Details">
        <div class="SellerProductSection grid-3 grid-4">
          <?php
            $que = "SELECT * FROM buyer WHERE buyer_email = '".$_COOKIE['email']."';";
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
            </div>
            <div class="Image ">
            <a href="./product details.php?product=<?php echo $fetch['prod_id'];?>"><img src="<?php echo $data['images0'];?>" style="border-radius: 0;" alt=""></a>
            </div>
            <a href="./product details.php?product=<?php echo $fetch['prod_id'];?>">
              <div class="ProductDescription">
                    <div class="ProductName">
                        <h1><?php echo $data['prod_name'];?></h1>
                    </div>
                    <div class="ProductCost">
                        <div class="OriginalCost">
                            <del><?php echo $fetch['prod_org_price'];?></del><h1><?php echo $fetch['prod_dis_price'];?></h1><h3><?php echo $fetch['prod_discount'];?>% off</h3>
                        </div>
                        <div class="DeliveryCost">
                          <?php if($data['prod_delivery'] <= 0){?>
                            <h1>Free Delivery</h1><?php }
                            else{?>
                            <h1>₹<?php echo $data['prod_delivery'];?> Delivery Charges</h1>
                            <?php
                            }
                            ?>
                            <h3>Qnt. - <?php echo $fetch['prod_quantity'];?></h3>
                        </div>
                        <div class="DeliveryCost">
                          <h1>Total Price : <?php echo ($fetch['prod_org_price'] * $fetch['prod_quantity']) + $fetch['prod_delivery'];?></h1>
                        </div>
                        <div class="DeliveryCost">
                        <?php
                          $time = $fetch['order_time'];
                          $year = $time[0].$time[1].$time[2].$time[3];
                          $month = $time[5].$time[6];
                          if($month == "01"){
                            $month = "Jan";
                          }
                          elseif($month == "02"){
                            $month = "Feb";
                          }
                          elseif($month == "03"){
                            $month = "Mar";
                          }
                          elseif($month == "04"){
                            $month = "Apr";
                          }
                          elseif($month == "05"){
                            $month = "May";
                          }
                          elseif($month == "06"){
                            $month = "Jun";
                          }
                          elseif($month == "07"){
                            $month = "Jul";
                          }
                          elseif($month == "08"){
                            $month = "Aug";
                          }
                          elseif($month == "09"){
                            $month = "Sep";
                          }
                          elseif($month == "10"){
                            $month = "Oct";
                          }
                          elseif($month == "11"){
                            $month = "Nov";
                          }
                          else{
                            $month = "Dec";
                          }
                          $day = round($time[8].$time[9]);
                          $clock = $time[11].$time[12].$time[13].$time[14].$time[15];
                          $hours = round($time[11].$time[12]);
                          $mins = $time[14].$time[15];
                          $tt = "AM";
                          if($hours == 12){
                            $hours = 12;
                            $tt = "PM";
                          }
                          elseif($hours == 13){
                            $hours = 1;
                            $tt = "PM";
                          }
                          elseif($hours == 14){
                            $hours = 2;
                            $tt = "PM";
                          }
                          elseif($hours == 15){
                            $hours = 3;
                            $tt = "PM";
                          }
                          elseif($hours == 16){
                            $hours = 4;
                            $tt = "PM";
                          }
                          elseif($hours == 17){
                            $hours = 5;
                            $tt = "PM";
                          }
                          elseif($hours == 18){
                            $hours = 6;
                            $tt = "PM";
                          }
                          elseif($hours == 19){
                            $hours = 7;
                            $tt = "PM";
                          }
                          elseif($hours == 20){
                            $hours = 8;
                            $tt = "PM";
                          }
                          elseif($hours == 21){
                            $hours = 9;
                            $tt = "PM";
                          }
                          elseif($hours == 22){
                            $hours = 10;
                            $tt = "PM";
                          }
                          elseif($hours == 23){
                            $hours = 11;
                            $tt = "PM";
                          }
                          elseif($hours == 24){
                            $hours = 12;
                            $tt = "PM";
                          }
                          elseif($hours == 0){
                            $hours = 12;
                            $tt = "AM";
                          }
                          
                        ?>
                          <h1>Ordered On : <?php echo $day." ".$month." ".$year."<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; at ".$hours." : ".$mins." ".$tt;?></h1>
                        </div>
                        <?php
                         if($fetch['pay_method'] != "Cash On Delivery"){
                        ?>
                        <div class="DeliveryCost">
                          <h1>Payment Method : Online Payment</h1>
                        </div>
                        <div class="DeliveryCost">
                          <h1>Payment Status : <?php echo $fetch['pay_status'];?></h1>
                        </div>
                        <?php
                          if($fetch['pay_status'] == "Paid"){
                        ?>
                        <div class="DeliveryCost">
                          <h1>Transaction ID : <?php echo $fetch['transaction_id'];?></h1>
                        </div>
                        <?php
                          }
                         }
                         else{
                        ?>
                          <div class="DeliveryCost">
                          <h1>Payment Method : Cash On Delivery</h1>
                        </div>
                        <?php
                         }
                        ?>
                        <div class="DeliveryCost">
                          <h1>Delivery Status : <?php echo $fetch['delivery_status'];?></h1>
                        </div>
                        <?php
                          if($fetch['delivery_status'] != 'pending'){
                        ?>
                        <div class="DeliveryCost">
                        <?php
                          $time = $fetch['delivery_time'];
                          $year = $time[0].$time[1].$time[2].$time[3];
                          $month = $time[5].$time[6];
                          if($month == "01"){
                            $month = "Jan";
                          }
                          elseif($month == "02"){
                            $month = "Feb";
                          }
                          elseif($month == "03"){
                            $month = "Mar";
                          }
                          elseif($month == "04"){
                            $month = "Apr";
                          }
                          elseif($month == "05"){
                            $month = "May";
                          }
                          elseif($month == "06"){
                            $month = "Jun";
                          }
                          elseif($month == "07"){
                            $month = "Jul";
                          }
                          elseif($month == "08"){
                            $month = "Aug";
                          }
                          elseif($month == "09"){
                            $month = "Sep";
                          }
                          elseif($month == "10"){
                            $month = "Oct";
                          }
                          elseif($month == "11"){
                            $month = "Nov";
                          }
                          else{
                            $month = "Dec";
                          }
                          $day = round($time[8].$time[9]);
                          $clock = $time[11].$time[12].$time[13].$time[14].$time[15];
                          $hours = round($time[11].$time[12]);
                          $mins = $time[14].$time[15];
                          $tt = "AM";
                          if($hours == 12){
                            $hours = 12;
                            $tt = "PM";
                          }
                          elseif($hours == 13){
                            $hours = 1;
                            $tt = "PM";
                          }
                          elseif($hours == 14){
                            $hours = 2;
                            $tt = "PM";
                          }
                          elseif($hours == 15){
                            $hours = 3;
                            $tt = "PM";
                          }
                          elseif($hours == 16){
                            $hours = 4;
                            $tt = "PM";
                          }
                          elseif($hours == 17){
                            $hours = 5;
                            $tt = "PM";
                          }
                          elseif($hours == 18){
                            $hours = 6;
                            $tt = "PM";
                          }
                          elseif($hours == 19){
                            $hours = 7;
                            $tt = "PM";
                          }
                          elseif($hours == 20){
                            $hours = 8;
                            $tt = "PM";
                          }
                          elseif($hours == 21){
                            $hours = 9;
                            $tt = "PM";
                          }
                          elseif($hours == 22){
                            $hours = 10;
                            $tt = "PM";
                          }
                          elseif($hours == 23){
                            $hours = 11;
                            $tt = "PM";
                          }
                          elseif($hours == 24){
                            $hours = 12;
                            $tt = "PM";
                          }
                          elseif($hours == 0){
                            $hours = 12;
                            $tt = "AM";
                          }
                          
                        ?>
                          <h1>Delivered On : <?php echo $day." ".$month." ".$year."<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; at ".$hours." : ".$mins." ".$tt;?></h1>
                        </div>
                        <?php
                          }
                        ?>
                    </div>
              </div>
            </a>

          </div>
          <?php
                  }
                }
              }
            }
            else{
              ?>
              <div class="shop-now">
                <a href="./product.php"><h1>Shop Now</h1></a>
              </div>
              <?php
            }
          }
        ?>
          </div>
  </div
  
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