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
      <!--<div class="Details">
          <div class="ListItems">
              <ul>
                  <a href="#"><li>Winter Collection</li></a>
                  <a href="#"><li>Summer Collection</li></a>
                  <a href="#"><li>Men's Cloth</li></a>
                  <a href="#"><li>Women's Cloth</li></a>
                  <a href="#"><li>Men's Footwear</li></a>
                  <a href="#"><li>Women's Footwear</li></a>
                  <a href="#"><li>Baby & Kids</li></a>
                  <a href="#"><li>Top Deals</li></a>
              </ul>
          </div>
      </div>-->
      <div class="Details">
        <form action="./order.php" method="post">
        <div class="SellerProductSection grid-3 grid-4">
          <input type="checkbox" class="checkall" id="checkall">
          <label class="chbox" for="checkall">Checkout All</label>
          <?php
            $que = "SELECT * FROM cart WHERE cust_id = ".$_COOKIE['id'].";";
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
            <a href="./product details.php?product=<?php echo $fetch['prod_id'];?>"><img src="<?php echo $data['images0'];?>" style="border-radius: 0;" alt=""></a>
            <input type="checkbox" class="checkbox" name="orders[]" data-org_price="<?php echo $data['prod_org_price'];?>" data-dis_price="<?php echo $data['prod_dis_price'];?>" value="<?php echo $data['prod_id'];?>">
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
                          <h3>Qnt. - </h3><select class="qnt" name="quantity[]">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
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
                        <div class="shop-now">
                          <a href="./product.php"><h1>Shop Now</h1></a>
                        </div>
                        <script>
                          document.getElementById('checkall').style.display="none";
                          document.querySelector('.chbox').style.display="none";
                        </script>
                        <?php
                      }
                    }
          ?>
        </div>
      <div class="Total">
          <h1>Total : </h1><h3 class="totals">₹0</h3>
          <hr>
          <h1>You Save : </h1><h3 class="saving">₹0</h3>
          
      </div>
      <div class="btn flex off">
          <button type="submit">Place Order</button>
      </div>
      
    </form>
    <form action="./sign_up.php" method="post">
      <input type="hidden" name="page" value="cart.php">
      <input type="hidden" name="product"  class="remov" value="">
      <button type="submit" class="reg" style="display:none;"></button>
    </form>
    
    </div>
  
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
  <!-- Custom Script -->
  <script src="./js/index.js"></script>
  <script>
    function cancel(id){
      document.querySelector('.remov').value=id
      document.querySelector('.reg').click()
    }
    document.onreadystatechange = document.onclick = ()=>{
      if(document.getElementById('checkall').checked){
        que = document.querySelectorAll('.checkbox')
        for(m=0; m<=que.length - 1; m++){
          que[m].setAttribute('checked','true')
        }
      }
      else{
        que = document.querySelectorAll('.checkbox')
        for(m=0; m<=que.length - 1; m++){
          que[m].removeAttribute('checked')
        }
      }
      que = document.querySelectorAll('.checkbox')
      torg_price = 0
      tdis_price = 0
      tsavings = 0
      qnt = document.querySelectorAll('.qnt')
      for(m=0; m<=que.length - 1; m++){
        if(que[m].checked){
          org_price = que[m].getAttributeNode('data-org_price').value
          dis_price = que[m].getAttributeNode('data-dis_price').value
          torg_price += parseInt(org_price)*parseInt(qnt[m].value)
          tdis_price += parseInt(dis_price)*parseInt(qnt[m].value)
          tsavings += (parseInt(org_price*parseInt(qnt[m].value)) - parseInt(dis_price*parseInt(qnt[m].value)))
        }
      }
    document.querySelector('.totals').innerHTML = "₹"+tdis_price
    document.querySelector('.saving').innerHTML = "₹"+ tsavings 
    if(tdis_price == 0){
      document.querySelector('.Total').style = "display: none;"
      document.querySelector('.off').style = "display: none;"
    }
    }
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