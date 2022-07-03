<?php
    if(!isset($_COOKIE['email'])){
      header('location: ./login.php');
      die();
    }
    if(!isset($_POST['orders']) && !isset($_POST['quantity'])){
        header('location: ./cart.php');
    }
    if(isset($_POST['orders']) && isset($_POST['quantity'])){
        if(isset($_POST['page'])){
            $page = $_POST['page'];
            $conn = new mysqli('sql108.epizy.com', 'epiz_31213404', 'Gajender8', 'epiz_31213404_customers');
            if($conn -> connect_error){
              echo "Technical Error";
            }
            else{
              $id = $_POST['orders'];
              $quantity = $_POST['quantity'];
              for($i=0; $i<sizeof($id); $i++){
                $sql = "SELECT * FROM product WHERE prod_id=".$id[$i].";";
                if($pre = $conn -> query($sql)){
                  if($pre -> num_rows > 0){
            ?>
            <form class="add-to-cart" style="display: none;">
              <input type="hidden" name="prod" value="<?php echo $id[$i];?>">
              <input type="hidden" name="page" value="./product details.php">
              <button type="submit" class="cart" >Add to Cart</button>
              <script src="./js/Jquery.js"></script>
              <script>
                $(document).ready(()=>{
                    $.ajax({
                        method: "POST",
                        url:"./sign_up.php",
                        data: $('.add-to-cart').serialize(),
                        processData: false,
                        cache: false,
                        success: function(e){
                        con = "yes"
                        },
                        error: function(a,b,c){
                        con = "No"
                        }
                    })
                    return false;
                })
              </script>
            </form>
            <?php
                  }
                }
              }
            }
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
  <div class="Container contain">
    <form action="./sign_up.php" class="orderpage" method="post">
      <div class="Details">
          <div class="Address">
              <div class="AddressTitle">
                  <h1>Address</h1>
              </div>
              <div class="AddressDetails">
              <?php 
                if(isset($_COOKIE['address'])){
            ?>
            <textarea name="address" required placeholder="Your Permenant Address" value="<?php echo $_COOKIE['address'];?>"><?php echo $_COOKIE['address'];?></textarea>
            <?php
                }
                else{
            ?>
            <textarea name="address" required placeholder="Your Permenant Address"></textarea>
            <?php
                }
            ?>
                <div class="DeliveryPin">
                  <h1>Pincode</h1>
                  <div class="EntryFields">
                    <img src="./images/Images/favourites.ico" alt="">
                    <?php 
                if(isset($_COOKIE['pincode'])){
            ?>
            <input type="text" required minlength="6" maxlength="6" placeholder="Pincode" value="<?php echo $_COOKIE['pincode'];?>" name="pincode">
            <?php
                }
                else{
            ?>
            <input type="text" required minlength="6" maxlength="6" placeholder="Pincode" name="pincode">
            <?php
                }
            ?>
                    
                    <h3>Change</h3>
                  </div>
                </div>
              </div>
          </div>
          <?php
            $conn = new mysqli('sql108.epizy.com', 'epiz_31213404', 'Gajender8', 'epiz_31213404_customers');
            if($conn -> connect_error){
              echo "Technical Error";
            }
            else{
              $id = $_POST['orders'];
              $quantity = $_POST['quantity'];
              for($i=0; $i<sizeof($id); $i++){
                $sql = "SELECT * FROM product WHERE prod_id=".$id[$i].";";
                if($pre = $conn -> query($sql)){
                  if($pre -> num_rows > 0){
                    while($data = $pre -> fetch_assoc()){
                      if($quantity[$i] <= $data['prod_quantity']){
          ?>
            <div class="ProductSpecification spec3">
              <h1>Order Details</h1>
              <div class="spec">
                <h3>Product ID</h3>
                <p><?php echo $data['prod_id'];?></p>
              </div>
              <div class="spec">
                <h3>Product Name</h3>
                <p><?php echo $data['prod_name'];?></p>
              </div>
              <div class="spec">
                <h3>Original Product Cost</h3>
                <p class="org_price">₹<?php echo $data['prod_org_price'];?></p>
              </div>
              <div class="spec">
                <h3>Discount Cost</h3>
                <p class="save_price">₹0</p>
              </div>
              <div class="spec">
                <h3>Order Cost</h3>
                <p class="dis_price">₹<?php echo $data['prod_dis_price'];?></p>
              </div>
              <div class="spec">
                <h3>Delivery Cost</h3>
                <?php 
                  if($data['prod_delivery'] <= 0){
                ?>
                  <p class="del_price">Free Delivery</p>
                <?php
                  }
                  else{
                ?>
                  <p class="del_price"><?php echo $data['prod_delivery'];?></p>
                <?php
                  }
                ?>
              </div>
              <div class="spec">
                <h3>Order Quantity</h3>
                <p class="qnt"><?php echo $quantity[$i];?></p>
              </div>
              <div class="spec">
                <h3>Total</h3>
                <p class="total_price">₹0</p>
              </div>
            </div>
            <input type="hidden" name="products[]" value="<?php echo $id[$i];?>">
            <input type="hidden" name="quantities[]" value="<?php echo $quantity[$i];?>">
          <?php
                      }
                      else{
                        header('location: ./cart.php');
                      }
                    }
                  }
                }
              }
            }
          ?>
        </div>
        <div class="PaymentMethods">
          <h1>Choose Payment  Method</h1>
          <div>
            <!--<input type="radio" name="payment" value="upi" id="upi">
            <label for="upi">UPI</label>
            <input type="radio" name="payment" value="emi" id="emi">
            <label for="emi">EMI Card</label>
            <input type="radio" name="payment" value="credit" id="credit">
            <label for="credit">Credit Card</label>
            <input type="radio" name="payment" value="debit" id="debit">
            <label for="debit">Debit Card</label>
            <input type="radio" name="payment" value="qr" id="qr">
            <label for="qr">Scan QR Code</label>-->
            <input type="radio" checked name="payment" value="cod" id="cod">
            <label for="cod">Cash On Delivery</label>
            <input type="radio" name="payment" value="online" id="online">
            <label for="online">Online Payment</label>
          </div>
           
          
        </div>


        <div class="Total">
          <h1>Grand Total : </h1><h3 class="totals">0</h3>
          <hr>
          <h1>You Will Save : </h1><h3 class="saving">0</h3>
          <div class="btn flex">
          <input type="hidden" name="page" value="./order.php">
          <button type="submit">Place Order</button>
        </div>
        
      </div>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <!-- Custom Script -->
  <script src="./js/index.js"></script>
  <script>
          que = document.querySelectorAll('.org_price')          
          document.onreadystatechange = document.onclick = ()=>{
          torg_price = 0
          tdis_price = 0
          tdel_price = 0
          tsaving = 0
          for(m=0; m<=que.length - 1; m++){
              org_price = document.querySelectorAll('.org_price')[m].textContent
              org_price = org_price.split('₹')
              org_price = parseInt(org_price[1])
              dis_price = document.querySelectorAll('.dis_price')[m].textContent
              dis_price = dis_price.split('₹')
              dis_price = parseInt(dis_price[1])
              del_price = document.querySelectorAll('.del_price')[m].textContent
              if(del_price.split('₹').length > 1){
                  del_price = del_price.split('₹')
                  del_price = parseInt(del_price[1])
                }
              else{
                if(parseInt(del_price)){
                  del_price = parseInt(del_price)
                }
                else{
                  del_price = 0
                  document.querySelectorAll('.del_price')[m].textContent = "Free Delivery";
                }
              }
              qnt = parseInt(document.querySelectorAll('.qnt')[m].textContent)
              torg_price += org_price * qnt
              tdis_price += dis_price * qnt
              tdel_price += del_price
              tsaving += (org_price - dis_price) * qnt
              document.querySelectorAll('.save_price')[m].innerHTML = '<del>₹' + (org_price - dis_price) + "</del>"
              document.querySelectorAll('.total_price')[m].textContent = "₹" + ((dis_price * qnt) + del_price)
          }
          document.querySelector('.totals').textContent = "₹" + (tdis_price + tdel_price)
          document.querySelector('.saving').textContent = "₹" + tsaving    
          }
        </script>
</body>

</html>