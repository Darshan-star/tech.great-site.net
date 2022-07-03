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
              <li style="color: #f00;" onclick="document.querySelector('.submit-button').click()">Logout</li>
              <form action="logout.php" method="post">
                  <button type="submit" class="submit-button" style="display: none;"></button>
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
  <?php
  if(isset($_GET['product'])){
    $id = $_GET['product'];
    $sql = "SELECT * FROM product WHERE prod_id = $id";
    $prepare = $conn -> query($sql);
    if($prepare -> num_rows > 0){
      if($data = $prepare -> fetch_assoc()){
        ?>
  <div class="Container margin">
    <div class="LeftContainer">
        <div class="ImageContainer">
          <?php
            if(isset($_COOKIE['id'])){
            $sl = "SELECT * FROM wishlist WHERE prod_id=".$data['prod_id']." AND id=".$_COOKIE['id'].";";
            if($prep = $conn -> query($sl)){
              if($prep -> num_rows > 0){
          ?>
          <div type="button" class="wish-listed" onclick="wish(<?php echo $data['prod_id'];?>, <?php echo $data['prod_id'];?>)"><i class="bx bxs-heart"></i></div>
          <?php
              }
              else{
          ?>
            <div type="button" class="wish-list" onclick="wish(<?php echo $data['prod_id'];?>, <?php echo $data['prod_id'];?>)"><i class="bx bxs-heart"></i></div>
          <?php
              }
            }
          }
          ?>
            <div class="main-image-container">
              <div class="cursor"></div>
              <img src="<?php echo $data['images0'];?>" id="main-image" alt="">
            </div>
            <div class="Images">
            <img src="<?php echo $data['images0'];?>" <?php if(isset($data['images0'])){echo 'data-exists="1"';}else{echo 'style="display: none;';} ?> onclick="setup_image('<?php echo $data['images0'];?>')" alt="">
            <img src="<?php echo $data['images1'];?>" <?php if(isset($data['images1'])){echo 'data-exists="1"';}else{echo 'style="display: none;';} ?> onclick="setup_image('<?php echo $data['images1'];?>')" alt="">
            <img src="<?php echo $data['images2'];?>" <?php if(isset($data['images2'])){echo 'data-exists="1"';}else{echo 'style="display: none;';} ?> onclick="setup_image('<?php echo $data['images2'];?>')" alt="">
            <img src="<?php echo $data['images3'];?>" <?php if(isset($data['images3'])){echo 'data-exists="1"';}else{echo 'style="display: none;';} ?> onclick="setup_image('<?php echo $data['images3'];?>')" alt="">
            <img src="<?php echo $data['images4'];?>" <?php if(isset($data['images4'])){echo 'data-exists="1"';}else{echo 'style="display: none;';} ?> onclick="setup_image('<?php echo $data['images4'];?>')" alt="">
            <img src="<?php echo $data['images5'];?>" <?php if(isset($data['images5'])){echo 'data-exists="1"';}else{echo 'style="display: none;';} ?> onclick="setup_image('<?php echo $data['images5'];?>')" alt="">
            <img src="<?php echo $data['images6'];?>" <?php if(isset($data['images6'])){echo 'data-exists="1"';}else{echo 'style="display: none;';} ?> onclick="setup_image('<?php echo $data['images6'];?>')" alt="">
            <img src="<?php echo $data['images7'];?>" <?php if(isset($data['images7'])){echo 'data-exists="1"';}else{echo 'style="display: none;';} ?> onclick="setup_image('<?php echo $data['images7'];?>')" alt="">
            <img src="<?php echo $data['images8'];?>" <?php if(isset($data['images8'])){echo 'data-exists="1"';}else{echo 'style="display: none;';} ?> onclick="setup_image('<?php echo $data['images8'];?>')" alt="">
            <img src="<?php echo $data['images9'];?>" <?php if(isset($data['images9'])){echo 'data-exists="1"';}else{echo 'style="display: none;';} ?> onclick="setup_image('<?php echo $data['images9'];?>')" alt="">
            </div>
        </div>
        <div id="zoom">
          <img src="<?php echo $data['images0'];?>" alt="">
        </div>

        <script>
          const main_image = document.querySelector('#main-image');
          const zoom_image = document.querySelector('#zoom img');
          var cursor = document.querySelector('.cursor');
          var calc = document.querySelector('.main-image-container');
          setup_image = (attribute)=>{
            main_image.setAttribute('src', attribute)
            zoom_image.setAttribute('src', attribute)
          }
          /*calc.onmouseover = ()=>{
            calc.onpointermove = (event)=>{
              //console.log(event)
              m = cursor.style.top = event.layerY - 45+"px"
              n = cursor.style.left = event.layerX - 73.5+"px"
              //console.log(event.layerX, event.layerY)
            }
          }*/
        </script>
        <!--<script>
            var curs = document.getElementById('cursor');
            var zoom = document.getElementById('zoom');
            var before = document.getElementsByClassName('before')[0]
            var after = document.getElementsByClassName('after')[0]
            n = 0
            before.onclick = ()=>{
                n-=200
                if(n<0)
                n=700
                cont.scrollTo(n,0)
            }
            after.onclick = ()=>{
                n+=200
                if(n>700) 
                n=0
                cont.scrollTo(n,0)
            }
            z = 0
            X = 0
            Y = 0
            m =0
            n=0
            Left = 0
            Top = 0
            end=()=>{
              z=0
              zoom.style.display='none'
            }
              main.addEventListener('mouseover',()=>{
                curs.onmousemove = main.onmousemove = (event)=>{
                zoom.style.backgroundImage = "url('"+document.getElementById('main-image').getAttributeNode('src').nodeValue+"')"
                curs.style.display="block"
                zoom.style.display="block"
                  if(z == 0){
                        Left = event.x-72.5
                        Top = event.y-50
                        X = event.x - Left
                        Y = event.y - Top
                        z=1
                  }
                  m = ((Top-147)*100)/(268)
                  n = ((Left-32.5)*100)/(207)
                  if(m > 100)m = 100
                  if(m < 0)m = 0
                  if(n > 100)n = 100
                  if(n < 0)n = 0
                  zoom.style.backgroundPositionX = n + "%"
                  zoom.style.backgroundPositionY = m + "%"
                  Left = event.x - X
                  Top = event.y - Y
                  if(window.innerWidth >=1297){
                    if(Top > 416)Top=416;
                    if(Top < 156)Top=156;
                    if(Left > 241.5)Left=244;
                    if(Left < 31.5)Left=31.5;
                  }
                  else if(window.innerWidth >=1040){
                    if(Top > 416)Top=422;
                    if(Top < 162)Top=162;
                    if(Left > 241.5)Left=244;
                    if(Left < 31.5)Left=31.5;
                  }
                  else if(window.innerWidth >=1024){
                    if(Top > 422)Top=422;
                    if(Top < 159)Top=159;
                    if(Left > 241.5)Left=244;
                    if(Left < 31.5)Left=31.5;
                  }
                  else if(window.innerWidth >=884){
                    if(Top > 419)Top=419;
                    if(Top < 159)Top=159;
                    if(Left > 241.5)Left=244;
                    if(Left < 31.5)Left=31.5;
                  }
                  curs.style.top = Top + "px";
                  curs.style.left = Left + "px";
                  main.onmouseout = curs.onmouseout = ()=>{
                    curs.style.display="none";
                    end()
                  }
                }})
        </script>
              -->
        <div class="Form gt">
          <div class="btn bt-n buy-btn">
            <?php 
            if(isset($_COOKIE['id'])){
              $check = "SELECT * FROM cart WHERE prod_id=".$data['prod_id']." AND cust_id=".$_COOKIE['id'].";";
              if($pre = $conn -> query($check)){
                if($pre -> num_rows > 0){
            ?>
                <a href="./cart.php"><button type="button" style="width: max-content;" class="cart">Go to Cart</button></a>
            <?php
              
                }
                else{
            ?>
            <form action="./sign_up.php" method="post">
              <input type="hidden" name="prod" value="<?php echo $data['prod_id'];?>">
              <input type="hidden" name="page" value="./product details.php">
              <button type="submit" class="cart" style="width: max-content;" >Add to Cart</button>
            </form>
            <?php
                }
              }
            }
            else{
            ?>
              <a href="./login.php"><button type="submit" style="width: max-content;" class="cart" >Add to Cart</button></a>
            <?php
            }
            ?>
            <form action="./order.php" method="post" style="padding-left:1rem;">
                <input type="hidden" name="orders[]" value="<?php echo $data['prod_id'];?>">
                <input type="hidden" name="quantity[]" value="1">
                <input type="hidden" name="page" value="./product details.php">
              <button type="submit" style="width: max-content;" class="buy">Buy Now</button>
            </form>
          </div>
        </div>
    </div>
    <div class="RightContainer">
      <div class="ItemName">
        <h1><?php echo $data['prod_name'];?></h1>
      </div>
      <!--<a href="https://api.whatsapp.com/send?text=Product http://gstech.com/product%20details.php?product=17"  target="_blank" title="Share on whatsapp">Whatsapp Share</a>-->
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
        <h1><?php echo $rating;?><img src="./images/Images/Favourites.png" alt=""></h1><h3>(<?php echo $reviews;?>) Ratings &amp; Reviews</h3>
      <?php
            }
          }
      ?>
      </div>
      <div class="ProductCost">
        <div class="OriginalCost">
            <h1>₹<?php echo $data['prod_dis_price'];?></h1><del>₹<?php echo $data['prod_org_price'];?></del><?php if($data['prod_discount'] > 0){ ?><h3><?php echo $data['prod_discount'];?>% off</h3><?php }?>
        </div>
        <div class="DeliveryCost" style="margin-left: -39rem;">
        <?php if($data['prod_delivery'] <= 0){?>
            <h1>Free Delivery</h1>
        <?php }
        else{
          ?>
          <h1>₹<?php echo $data['prod_delivery'];?> Delivery Charges</h1>
          <?php
            }
          ?>
        </div>
        <?php
        if($data['prod_quantity'] < 10){?>
          <h3 class="warning">Hurry, Only <?php echo $data['prod_quantity'];?> Left</h3>
          <?php
        }
        elseif($data['prod_quantity'] <= 30){
          echo '<h3 class="warning">Hurry, Only few Left</h3>';
        }
        ?>
    </div>
    <?php 
    $bank = "SELECT * FROM bank_offers WHERE prod_id = $id";
    $execute = $conn->query($bank);
    if($execute -> num_rows > 0){
      echo '<div class="offersHead"><h1>Available Offers</h1></div>';
      while($offer = $execute->fetch_assoc()){
        ?>
    <div class="offers">
      <img src="./images/Images/correct.png" alt=""><h3><?php echo $offer['offer']?></h3>
      </div>
    <?php
      }
    }?>
    <div class="DeliveryPin">
      <h1>Delivery</h1>
      <div class="EntryFields">
        <img src="./images/Images/favourites.ico" alt="">
        <?php
        if(isset($_COOKIE['email'])){
          $pin = "SELECT pincode FROM profile WHERE cust_email = '".$_COOKIE['email']."'";
          if($execute = $conn->query($pin)){
            if($execute->num_rows>0){
              ?>
              
        <input type="text" minlength="6" maxlength="6" value="<?php echo $execute->fetch_assoc()['pincode'];?>" placeholder="Check Availability" disabled name="pincode">
        <?php
            }
            else{
              ?>
              <input type="text" minlength="6" maxlength="6" placeholder="Check Availability" name="pincode">
              <?php
            }
          }
          }
          else{
        ?>
        <input type="text" minlength="6" maxlength="6" placeholder="Check Availability" name="pincode">
        <?php
         }
        ?>
        <h3>Change</h3>
        <p>Delivery in 9-10 days | </p><h5>Free</h5>
        <a href="#">View Details</a>
      </div>
    </div>
    <div class="Details">
      <div class="ProductDetails">
        <h1>Highlights</h1>
        <ul>
          <li>Ram : <?php echo $data['ram'];?>GB</li>
          <li>Storage : <?php echo $data['storage'];?>GB</li>
          <li>Connectivity : <?php echo $data['network'];?></li>
          <li>Memory Card : <?php echo $data['card'];?><?php if($data['memory'] > 0){?>, <?php echo $data['memory'];?>GB<?php }?></li>
          <li>Operating System : <?php echo $data['os'];?></li>
          <li>Processor : <?php echo $data['clock'];?>GHz <?php echo $data['core'];?></li>
          <li>Primary Camera : <?php echo $data['primary_camera'];?></li>
          <li>Secondary Camera : <?php echo $data['secondary_camera'];?></li>
        </ul>
      </div>
      <div class="SellerDetails">
        <h1>Seller</h1>
        <div>
          <h3><a href="#">GS Tech</a></h3><h2>3.3 <img src="./images/Images/Favourites.png" alt=""></h2>
          <h3>View <a href="#">more sellers</a> starting from ₹1,368</h3> 
        </div>
      </div>
      <div class="ProductDescriptions">
        <h1>Description</h1>
        <h3><?php echo $data['prod_description'];?></h3>
      </div>
      <div class="ProductSpecification">
        <h1>Specifications</h1>
        <h2>General</h2>
          <div class="spec">
            <h3>In The Box</h3>
            <p><?php echo $data['box'];?></p>
          </div>
          <div class="spec">
            <h3>Brand</h3>
            <p><?php echo $data['brand'];?></p>
          </div>
          <?php if($data['model_num'] != null || $data['model_num'] != ""){?>
          <div class="spec">
            <h3>Model Number</h3>
            <p><?php echo $data['model_num'];?></p>
          </div>
          <?php
            }
          ?>
          <div class="spec">
            <h3>Model Name</h3>
            <p><?php echo $data['model_name'];?></p>
          </div>
          <?php if($data['color'] != null || $data['color'] != ""){?>
          <div class="spec">
            <h3>Colour</h3>
            <p><?php echo $data['color'];?></p>
          </div>
          <?php
            }
          ?>
          <?php if($data['browser'] != null || $data['browser'] != ""){?>
          <div class="spec">
            <h3>Browser</h3>
            <p><?php echo $data['browser'];?></p>
          </div>
          <?php
            }
          ?>
          <div class="spec">
            <h3>SIM Type</h3>
            <p><?php echo $data['sim'];?></p>
          </div>
          <?php if($data['sim_slot'] != null || $data['sim_slot'] != ""){?>
          <div class="spec">
            <h3>Hybrid SIM Slot</h3>
            <p><?php echo $data['sim_slot'];?></p>
          </div>
          <?php
            }
          ?>
          <div class="spec">
            <h3>Touch Screen</h3>
            <p><?php echo $data['touch'];?></p>
          </div>
          <?php if($data['otg'] != null || $data['otg'] != ""){?>
          <div class="spec">
            <h3>OTG Compatible</h3>
            <p><?php echo $data['otg'];?></p>
          </div>
          <?php
            }
          ?>
          <?php if($data['sound'] != null || $data['sound'] != ""){?>
          <div class="spec">
            <h3>Sound Enhancement</h3>
            <p><?php echo $data['sound'];?></p>
          </div>
          <?php
            }
          ?>
        
        <h2>Display Features</h2>
          <div class="spec">
            <h3>Display Size</h3>
            <p><?php echo $data['size'];?> Inches</p>
          </div>
          <?php if($data['resolution'] != null || $data['resolution'] != ""){?>
          <div class="spec">
            <h3>Resolution</h3>
            <p><?php echo $data['resolution'];?></p>
          </div>
          <?php
            }
          ?>
          
          <div class="spec">
            <h3>Resolution Type</h3>
            <p><?php echo $data['resolution_type'];?></p>
          </div>
          <?php if($data['gpu'] != null || $data['gpu'] != ""){?>
          <div class="spec">
            <h3>GPU</h3>
            <p><?php echo $data['gpu'];?></p>
          </div>
          <?php
            }
          ?>
          <div class="spec">
            <h3>Display Type Type</h3>
            <p><?php echo $data['display'];?></p>
          </div>
          <?php if($data['display_type'] != null || $data['display_type'] != ""){?>
          <div class="spec">
            <h3>Display Colours</h3>
            <p><?php echo $data['display_type'];?></p>
          </div>
          <?php
            }
          ?>
          <?php if($data['display_feature'] != null || $data['display_feature'] != ""){?>
          <div class="spec">
            <h3>Resolution</h3>
            <p><?php echo $data['display_feature'];?></p>
          </div>
          <?php
            }
          ?>
        <h2>Os &amp; Processor Features</h2>
          <div class="spec">
            <h3>Operating System</h3>
            <p><?php echo $data['os'];?></p>
          </div>
          <?php if($data['processor'] != null || $data['processor'] != ""){?>
          <div class="spec">
            <h3>Processor Type</h3>
            <p><?php echo $data['processor'];?></p>
          </div>
          <?php
            }
          ?>
          <div class="spec">
            <h3>Processor Core</h3>
            <p><?php echo $data['core'];?></p>
          </div>
          <div class="spec">
            <h3>Processor Clock Speed</h3>
            <p><?php echo $data['clock'];?>GHz</p>
          </div>
          <?php if($data['of'] != null || $data['of'] != ""){?>
          <div class="spec">
            <h3>Operating Frequency</h3>
            <p><?php echo $data['of'];?></p>
          </div>
          <?php
            }
          ?>
        <h2>Memory &amp; Storage</h2>
          <div class="spec">
            <h3>Internal Storage</h3>
            <p><?php echo $data['storage'];?>GB</p>
          </div>
          <div class="spec">
            <h3>RAM</h3>
            <p><?php echo $data['ram'];?>GB</p>
          </div>
          <div class="spec">
            <h3>Memory Card Support</h3>
            <p><?php echo $data['card'];?></p>
          </div>
          <?php if($data['memory'] > 0){?>
          <div class="spec">
            <h3>Expandable Memory</h3>
            <p><?php echo $data['memory'];?>GB</p>
          </div>
          <?php
            }
          ?>
        <h2>Camera Features</h2>
          <div class="spec">
            <h3>Primary Camera</h3>
            <p><?php echo $data['primary_camera'];?></p>
          </div>
          <?php if($data['p_cam_features'] != null || $data['p_cam_features'] != ""){?>
          <div class="spec">
            <h3>Primary Camera Features</h3>
            <p><?php echo $data['p_cam_features'];?></p>
          </div>
          <?php
            }
          ?>
          <div class="spec">
            <h3>Secondary Camera</h3>
            <p><?php echo $data['secondary_camera'];?></p>
          </div>
          <?php if($data['s_cam_features'] != null || $data['s_cam_features'] != ""){?>
          <div class="spec">
            <h3>Secondary Camera Features</h3>
            <p><?php echo $data['s_cam_features'];?></p>
          </div>
          <?php
            }
          ?>
          <div class="spec">
            <h3>Flash</h3>
            <p><?php echo $data['flash'];?></p>
          </div>
          <div class="spec">
            <h3>Video</h3>
            <p><?php echo $data['video'];?></p>
          </div>
          <?php if($data['zoom'] != null || $data['zoom'] != ""){?>
          <div class="spec">
            <h3>Digital Zoom</h3>
            <p><?php echo $data['zoom'];?></p>
          </div>
          <?php
            }
          ?>
          <?php if($data['frame'] != null || $data['frame'] != ""){?>
          <div class="spec">
            <h3>Frame Rate</h3>
            <p><?php echo $data['frame'];?></p>
          </div>
          <?php
            }
          ?>
          <?php if($data['lens'] != null || $data['lens'] != ""){?>
          <div class="spec">
            <h3>Camera Lens</h3>
            <p><?php echo $data['lens'];?></p>
          </div>
          <?php
            }
          ?>
        <h2>Networks &amp; Connectivity</h2>
          <div class="spec">
            <h3>Network Type</h3>
            <p><?php echo $data['network'];?></p>
          </div>
          <?php if($data['network_support'] != null || $data['network_support'] != ""){?>
          <div class="spec">
            <h3>Supported Networks</h3>
            <p><?php echo $data['network_support'];?></p>
          </div>
          <?php
            }
          ?>
          <?php if($data['internet'] != null || $data['internet'] != ""){?>
          <div class="spec">
            <h3>Internet Connectivity</h3>
            <p><?php echo $data['internet'];?></p>
          </div>
          <?php
            }
          ?>
          <?php if($data['gprs'] != null || $data['gprs'] != ""){?>
          <div class="spec">
            <h3>GPRS</h3>
            <p><?php echo $data['gprs'];?></p>
          </div>
          <?php
            }
          ?>
          <div class="spec">
            <h3>Bluetooth</h3>
            <p><?php echo $data['bluetooth'];?></p>
          </div>
          <div class="spec">
            <h3>Wi-Fi</h3>
            <p><?php echo $data['wifi'];?></p>
          </div>
          <?php if($data['hotspot'] != null || $data['hotspot'] != ""){?>
          <div class="spec">
            <h3>Wi-Fi Hotspot</h3>
            <p><?php echo $data['hotspot'];?></p>
          </div>
          <?php
            }
          ?>
          <?php if($data['nfc'] != null || $data['nfc'] != ""){?>
          <div class="spec">
            <h3>NFC</h3>
            <p><?php echo $data['nfc'];?></p>
          </div>
          <?php
            }
          ?>
          <?php if($data['usb'] != null || $data['usb'] != ""){?>
          <div class="spec">
            <h3>USB Connectivity</h3>
            <p><?php echo $data['usb'];?></p>
          </div>
          <?php
            }
          ?>
          <?php if($data['edge'] != null || $data['edge'] != ""){?>
          <div class="spec">
            <h3>EDGE</h3>
            <p><?php echo $data['edge'];?></p>
          </div>
          <?php
            }
          ?>
          <div class="spec">
            <h3>Audio Jack</h3>
            <p><?php echo $data['audio'];?></p>
          </div>
          <?php if($data['map'] != null || $data['map'] != ""){?>
          <div class="spec">
            <h3>MAP Support</h3>
            <p><?php echo $data['map'];?></p>
          </div>
          <?php
            }
          ?>
        <h2>Multimedia Features</h2>
          <?php if($data['audio_format'] != null || $data['audio_format'] != ""){?>
          <div class="spec">
            <h3>Supported Audio Formats</h3>
            <p><?php echo $data['audio_format'];?></p>
          </div>
          <?php
            }
          ?>
          <?php if($data['video_format'] != null || $data['video_format'] != ""){?>
          <div class="spec">
            <h3>Supported Video Formats</h3>
            <p><?php echo $data['video_format'];?></p>
          </div>
          <?php
            }
          ?>
        <h2>Battery &amp; Power</h2>
          <div class="spec">
            <h3>Batttery Type</h3>
            <p><?php echo $data['battery_type'];?></p>
          </div>
          <div class="spec">
            <h3>Battery Capacity</h3>
            <p><?php echo $data['battery'];?>mAh</p>
          </div>
          <?php
          if($data['height'] > 0 && $data['width'] > 0 && $data['depth'] > 0 && $data['weight'] > 0){
          ?>
        <h2>Dimensions</h2>
          <?php if($data['height'] > 0){?>
          <div class="spec">
            <h3>Height</h3>
            <p><?php echo $data['height'];?>cm</p>
          </div>
          <?php
            }
          ?>
          <?php if($data['width'] > 0){?>
          <div class="spec">
            <h3>Width</h3>
            <p><?php echo $data['width'];?>cm</p>
          </div>
          <?php
            }
          ?>
          <?php if($data['depth'] > 0){?>
          <div class="spec">
            <h3>Depth</h3>
            <p><?php echo $data['depth'];?>cm</p>
          </div>
          <?php
            }
          ?>
          <?php if($data['weight'] > 0){?>
          <div class="spec">
            <h3>Weight</h3>
            <p><?php echo $data['weight'];?>g</p>
          </div>
          <?php
            }
          }
          ?>
        <h2>Other Details</h2>
          <div class="spec">
            <h3>Smartphone</h3>
            <p><?php echo $data['smartphone'];?></p>
          </div>
          <?php if($data['touch_type'] != null || $data['touch_type'] != ""){?>
          <div class="spec">
            <h3>Touchscreen Type</h3>
            <p><?php echo $data['touch_type'];?></p>
          </div>
          <?php
            }
          ?>
          <?php if($data['sim_size'] != null || $data['sim_size'] != ""){?>
          <div class="spec">
            <h3>SIM Size</h3>
            <p><?php echo $data['sim_size'];?></p>
          </div>
          <?php
            }
          ?>
          <?php if($data['ui'] != null || $data['ui'] != ""){?>
          <div class="spec">
            <h3>User Interface(UI)</h3>
            <p><?php echo $data['ui'];?></p>
          </div>
          <?php
            }
          ?>
          <?php if($data['graphics'] != null || $data['graphics'] != ""){?>
          <div class="spec">
            <h3>Graphics PPI</h3>
            <p><?php echo $data['graphics'];?></p>
          </div>
          <?php
            }
          ?>
          <div class="spec">
            <h3>Sensors</h3>
            <p><?php echo $data['sensors'];?></p>
          </div>
          <?php if($data['other'] != null || $data['other'] != ""){?>
          <div class="spec">
            <h3>Other Features</h3>
            <p><?php echo $data['other'];?></p>
          </div>
          <?php
            }
          ?>

          <?php
            $high = "SELECT * FROM prod_spec WHERE prod_id = $id";
            if($find = $conn->query($high)){
              if($find->num_rows > 0){
                ?>
        <h2>Additional Features</h2>
                <?php
                  while($found = $find->fetch_assoc()){
                  ?>
          <div class="spec">
          <h3><?php echo $found['spec_head'];?></h3>
          <p><?php echo $found['spec_value'];?></p>
          </div>
          <?php
                  }
                }
              }
          ?>
        <h2>Warranty Details</h2>
          <div class="spec">
            <h3>Warranty Summary</h3>
            <p><?php echo $data['warranty'];?></p>
          </div>
          <div class="spec">
            <h3>Domestic Warranty</h3>
            <p><?php echo $data['domestic'];?></p>
          </div>
      </div>
      <button class="see">See All Details</button>
      <script>
        var spec = document.querySelector('.ProductSpecification')
        var spec_btn = document.querySelector('.see')
        spec_btn.onclick = ()=>{
          if(spec.style.height == "fit-content"){
            spec.style.height = "51rem"
            spec_btn.innerText = "See All Details"
          }
          else{
            spec.style.height = "fit-content"
            spec_btn.innerText = "See Less Details"
          }
        }
      </script>

      <div class="ProductRating">
        <div class="flex">
          <h1>Ratings &amp; Reviews</h1>
          <button type="button" class="rate-btn" >Rate Product</button>
        </div>
        <div class="rating-window">
          <div class="close-btn">X</div>
          <form action="./sign_up.php" method="post">
            <div class="rate_sys">
              <h1>Rate The Product</h1>
              <div class="btns">
                <button type="button" class="btn-1"><img class="st1" src="./images/Images/Favourites.png" alt=""></button>
                <button type="button" class="btn-2"><img class="st2" src="./images/Images/Favourites.png" alt=""></button>
                <button type="button" class="btn-3"><img class="st3" src="./images/Images/Favourites.png" alt=""></button>
                <button type="button" class="btn-4"><img class="st4" src="./images/Images/Favourites.png" alt=""></button>
                <button type="button" class="btn-5"><img class="st5" src="./images/Images/Favourites.png" alt=""></button>
              </div>
              <h2>Please give us your relevant feedback</h2>
              <textarea name="review" placeholder="Please Write Your Experience Here..."></textarea>
              <input type="hidden" name="page" value="./rate-product.php">
              <input type="hidden" name="prod" value="<?php echo $data['prod_id'];?>">
              <input type="hidden" name="stars" class="stars" value="1">
              <div class="rate-btns">
                <button type="submit" id="pstque">Rate Product</button>
              </div>
            </div>
          </form>
        </div>
        
        <div class="grid">
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
          <h1><p><?php echo $rating;?> <img src="./images/Images/Favourites.png" alt=""></p>
          <?php echo $reviews;?> Ratings &amp; Reviews</h1>
          <div class="RateGraph">
            <div class="rateline">
              <h3>5 <img src="./images/Images/Favourites.png" alt=""></h3><div><div class="s5"></div></div><p><?php echo $s5;?></p>
            </div>
            <div class="rateline">
              <h3>4 <img src="./images/Images/Favourites.png" alt=""></h3><div><div class="s4"></div></div><p><?php echo $s4;?></p>
            </div>
            <div class="rateline">
              <h3>3 <img src="./images/Images/Favourites.png" alt=""></h3><div><div class="s3"></div></div><p><?php echo $s3;?></p>
            </div>
            <div class="rateline">
              <h3>2 <img src="./images/Images/Favourites.png" alt=""></h3><div><div class="s2"></div></div><p><?php echo $s2;?></p>
            </div>
            <div class="rateline">
              <h3>1 <img src="./images/Images/Favourites.png" alt=""></h3><div><div class="s1"></div></div><p><?php echo $s1;?></p>
            </div>
          </div>
          <script>
            document.querySelector('.s5').style.width="<?php echo $per_s5;?>%"
            document.querySelector('.s4').style.width="<?php echo $per_s4;?>%"
            document.querySelector('.s3').style.width="<?php echo $per_s3;?>%"
            document.querySelector('.s2').style.width="<?php echo $per_s2;?>%"
            document.querySelector('.s1').style.width="<?php echo $per_s1;?>%"
          </script>
          <?php
              }
              else{
          ?>
          <h1><p>0 <img src="./images/Images/Favourites.png" alt=""></p>
          0 Ratings &amp; Reviews</h1>
          <div class="RateGraph">
            <div class="rateline">
              <h3>5 <img src="./images/Images/Favourites.png" alt=""></h3><div><div class="s5"></div></div><p>0</p>
            </div>
            <div class="rateline">
              <h3>4 <img src="./images/Images/Favourites.png" alt=""></h3><div><div class="s4"></div></div><p>0</p>
            </div>
            <div class="rateline">
              <h3>3 <img src="./images/Images/Favourites.png" alt=""></h3><div><div class="s3"></div></div><p>0</p>
            </div>
            <div class="rateline">
              <h3>2 <img src="./images/Images/Favourites.png" alt=""></h3><div><div class="s2"></div></div><p>0</p>
            </div>
            <div class="rateline">
              <h3>1 <img src="./images/Images/Favourites.png" alt=""></h3><div><div class="s1"></div></div><p>0</p>
            </div>
          </div>
          <?php
              }
            }
          ?>
        </div>
      </div>
      <div class="QnA">
        <div class="postque">
          <h1>Have doubts regarding this product?</h1>
          <button class="ques" type="button">Post Your Questions</button>
          <a href="#pstque" style="display:none;" class="pstscroll"></a>
          <form action="./sign_up.php" method="post">
            <div class="question-window">
                <div class="close-btn2">X</div>
                <h1>Enter Your Question</h1>
                <input type="text" name="question" placeholder="Enter Your Question Here...">
                <input type="hidden" name="page" value="que page">
                <input type="hidden" name="product" value="<?php echo $data['prod_id'];?>">
                <div class="question-btn">
                  <button type="submit">Post Your Question</button>
                </div>
            </div>
          </form>
        </div>
      <div class="qna">
        <?php
        if(isset($_COOKIE['email'])){
          $command = "SELECT * FROM buyer WHERE prod_id=".$data['prod_id']." AND buyer_email='".$_COOKIE['email']."'";
          if($prep = $conn -> query($command)){
            if($prep -> num_rows > 0){
              while($done = $prep ->fetch_assoc()){
                  $que = "SELECT * FROM que WHERE prod_id=".$data['prod_id'].";";
                  if($q = $conn -> query($que)){
                    if($q -> num_rows > 0){
                      while($question = $q -> fetch_assoc()){
                        if($done['delivery_status'] != "pending"){
                        
        ?>
          <que><?php echo $question['que'];?> <answer onclick="ansswer(<?php echo $question['que_id'];?>)" >Answer</answer></que>
        <?php
                      $ans = "SELECT * FROM ans WHERE ans_id=".$question['que_id'].";";
                      if($answer = $conn -> query($ans)){
                        if($answer -> num_rows > 0){
                          $margin = 0;
                          if($answer -> num_rows > 1){
                            $margin = 5;
                          }
                          while($an = $answer -> fetch_assoc()){
        ?>
          <ans style="margin-left: <?php echo $margin;?>rem;"><?php echo $an['ans'];?></ans>
        <?php
                              $margin += 5;
                            }
                          }
                        }
                      }
                      else{
        ?>
          <que><?php echo $question['que'];?></que>
        <?php
                      $ans = "SELECT * FROM ans WHERE ans_id=".$question['que_id'].";";
                      if($answer = $conn -> query($ans)){
                        if($answer -> num_rows > 0){
                          $margin = 0;
                          if($answer -> num_rows > 1){
                            $margin = 5;
                          }
                          while($an = $answer -> fetch_assoc()){
        ?>
          <ans style="margin-left: <?php echo $margin;?>rem;"><?php echo $an['ans'];?></ans>
        <?php
                              $margin += 5;
                            }
                          }
                        } 
                      }
                    }
                  }
                }
              }
            }
            else{
              $que = "SELECT * FROM que WHERE prod_id=".$data['prod_id'].";";
              if($q = $conn -> query($que)){
                if($q -> num_rows > 0){
                  while($question = $q -> fetch_assoc()){
        ?>
          <que><?php echo $question['que'];?></que>
        <?php
                    $ans = "SELECT * FROM ans WHERE ans_id=".$question['que_id'].";";
                    if($answer = $conn -> query($ans)){
                      if($answer -> num_rows > 0){
                        $margin = 0;
                        if($answer -> num_rows > 1){
                          $margin = 5;
                        }
                        while($an = $answer -> fetch_assoc()){
        ?>
          <ans style="margin-left: <?php echo $margin;?>rem;"><?php echo $an['ans'];?></ans>
        <?php
                            $margin += 5;
                          }
                        }
                      }
                  }
                }
              }
            }
          }
        }
        else{
          $que = "SELECT * FROM que WHERE prod_id=".$data['prod_id'].";";
              if($q = $conn -> query($que)){
                if($q -> num_rows > 0){
                  while($question = $q -> fetch_assoc()){
        ?>
          <que><?php echo $question['que'];?></que>
        <?php
                    $ans = "SELECT * FROM ans WHERE ans_id=".$question['que_id'].";";
                    if($answer = $conn -> query($ans)){
                      if($answer -> num_rows > 0){
                        $margin = 0;
                        if($answer -> num_rows > 1){
                          $margin = 5;
                        }
                        while($an = $answer -> fetch_assoc()){
        ?>
          <ans style="margin-left: <?php echo $margin;?>rem;"><?php echo $an['ans'];?></ans>
        <?php
                            $margin += 5;
                          }
                        }
                      }
                  }
                }
              }
        }
        ?>
        <form action="./sign_up.php"  method="post">
            <div class="answer-window" id="formbtn">
                <div class="close-btn3" >X</div>
                <a href="#formbtn" class="scrll" style="display:none;"></a>
                <h1>Enter Your Answer</h1>
                <textarea name="ans" placeholder="Please Answer Here..."></textarea>
                <input type="hidden" name="page" value="./answer.php">
                <input type="hidden" name="prod_id" value="<?php echo $data['prod_id'];?>">
                <input type="hidden" class="ques_id" name="q_id" value="">
                <div class="ans-btns">
                  <button type="submit">Post Your Question</button>
                </div>
            </div>
          </form>
        <script>
          function ansswer(id){
            document.querySelector('.ques_id').value=id;
            showans();
          }
          var wh = document.querySelector('.qna')
          if(wh.style.height > "35rem"){
            wh.style.overflowY="scroll";
          }
        </script>
      </div>
    </div>
      <script>
          var rating_window = document.querySelector('.rating-window')
          var rating_button = document.querySelector('.rate-btn')
          var closebutton = document.querySelector('.close-btn')
          var que_btn = document.querySelector('.ques')
          var ans_btn = document.querySelector('.ans-btn')
          var closebutton2 = document.querySelector('.close-btn2')
          var closebutton3 = document.querySelector('.close-btn3')
          var ques = document.querySelector('.question-window')
          var an = document.querySelector('.answer-window')
          var st1 = document.querySelector('.st1')
          var st2 = document.querySelector('.st2')
          var st3 = document.querySelector('.st3')
          var st4 = document.querySelector('.st4')
          var st5 = document.querySelector('.st5')
          var btn1 = document.querySelector('.btn-1')
          var btn2 = document.querySelector('.btn-2')
          var btn3 = document.querySelector('.btn-3')
          var btn4 = document.querySelector('.btn-4')
          var btn5 = document.querySelector('.btn-5')
          p = 0
          var stars = 0
          closebutton3.onclick = closebutton2.onclick = closebutton.onclick = ()=>{
            if(p==0){
              if(ques.style.display = "block"){
                an.style.display = "none";
                rating_window.style.display = "none"
              }
              else if(an.style.display = "block"){
                ques.style.display = "none";
                rating_window.style.display = "none"
              }
              else if(rating_window.style.display = "block"){
                an.style.display = "none";
                ques.style.display = "none";
              }
              p = 1;
            }
            else{
              ques.style.display = "none";
              an.style.display = "none";
              rating_window.style.display = "none"
              p = 0;
            }
          }
          function showans(){
            if(p==0){
              an.style.display = "block";
              ques.style.display = "none";
              rating_window.style.display = "none"
              document.querySelector('.scrll').click();
              p = 1;
            }
            else{
              ques.style.display = "none";
              an.style.display = "none";
              rating_window.style.display = "none"
              p = 0;
            }
          }
          que_btn.onclick = ()=>{
            if(p==0){
              an.style.display = "none";
              ques.style.display = "block";
              rating_window.style.display = "none"
              p = 1;
            }
            else{
              ques.style.display = "none";
              an.style.display = "none";
              rating_window.style.display = "none"
              p = 0;
            }
          }
          rating_button.onclick = ()=>{
            <?php
            if(isset($_COOKIE['email'])){
              $ss = "SELECT * FROM buyer WHERE prod_id =".$_GET['product']." AND buyer_email='".$_COOKIE['email']."'";
              if($prep = $conn -> query($ss)){
                if($prep -> num_rows < 1){
            ?>
              document.querySelector('.rate_sys').innerHTML = "<h1 class='error'>You can't rate this Product untill you bought it.</h1>";
            <?php
                }
                elseif($prep -> fetch_assoc()['delivery_status'] == "pending"){
            ?>
              document.querySelector('.rate_sys').innerHTML = "<h1 class='error'>You can rate this Product Once you received your Product.</h1>";
            <?php
                }
              }
            }
            else{
            ?>
            rating_window.style.display = "none";
            p = 1
            window.location = "./login.php"
            <?php
            }
            ?>
            if(p==0){
              rating_window.style.display = "block";
              if(ques.style.display == "block"){
                ques.style.display = "none"
                an.style.display = "none"
              }
              p = 1;
            }
            else{
              rating_window.style.display = "none";
              stars = 1
              document.querySelector('.stars').value=stars
              st1.style.filter = "grayscale(100%)"
              st2.style.filter = "grayscale(100%)"
              st3.style.filter = "grayscale(100%)"
              st4.style.filter = "grayscale(100%)"
              st5.style.filter = "grayscale(100%)"
              p = 0;
            }
          }
          
          btn1.onmouseover = st1.onclick = ()=>{
            stars = 1
            document.querySelector('.stars').value=stars
            st1.style.filter = "grayscale(0%)"
            st2.style.filter = "grayscale(100%)"
            st3.style.filter = "grayscale(100%)"
            st4.style.filter = "grayscale(100%)"
            st5.style.filter = "grayscale(100%)"
          }
          btn2.onmouseover = st2.onclick = ()=>{
            stars = 2
            document.querySelector('.stars').value=stars
            st1.style.filter = "grayscale(0%)"
            st2.style.filter = "grayscale(0%)"
            st3.style.filter = "grayscale(100%)"
            st4.style.filter = "grayscale(100%)"
            st5.style.filter = "grayscale(100%)"
          }
          btn3.onmouseover = st3.onclick = ()=>{
            stars = 3
            document.querySelector('.stars').value=stars
            st1.style.filter = "grayscale(0%)"
            st2.style.filter = "grayscale(0%)"
            st3.style.filter = "grayscale(0%)"
            st4.style.filter = "grayscale(100%)"
            st5.style.filter = "grayscale(100%)"
          }
          btn4.onmouseover = st4.onclick = ()=>{
            stars = 4
            document.querySelector('.stars').value=stars
            st1.style.filter = "grayscale(0%)"
            st2.style.filter = "grayscale(0%)"
            st3.style.filter = "grayscale(0%)"
            st4.style.filter = "grayscale(0%)"
            st5.style.filter = "grayscale(100%)"
          }
          btn5.onmouseover = st5.onclick = ()=>{
            stars = 5
            document.querySelector('.stars').value=stars
            st1.style.filter = "grayscale(0%)"
            st2.style.filter = "grayscale(0%)"
            st3.style.filter = "grayscale(0%)"
            st4.style.filter = "grayscale(0%)"
            st5.style.filter = "grayscale(0%)"
          }            
      </script>
    </div>
      </div>
  </div>
  
  <div class="Heading br"><h1>Related Products</h1></div>
  <div class="SellerProductSection" style="display: flex;">
  <?php 
    $conn = new mysqli('sql108.epizy.com', 'epiz_31213404', 'Gajender8', 'epiz_31213404_customers');
      $ql = "SELECT * FROM product WHERE prod_id!=".$data['prod_id']." AND (catagory='".$data['catagory']."' OR lower(prod_type) LIKE lower('%".$data['prod_type']."%') OR lower(prod_type) LIKE lower('%".$_GET['product']."%') OR lower(keywords) LIKE lower('%".$data['prod_type']."%') OR lower(keywords) LIKE lower('%".$data['catagory']."%'))";
      if($prepar = $conn -> query($ql)){
        if($prepar -> num_rows > 0){
          $num = 0;
            while($dat = $prepar -> fetch_assoc()){
              if($num < 21){
  ?>
  <div class="Product">
    <div class="Image">
        <?php
          $sl = "SELECT * FROM wishlist WHERE prod_id=".$dat['prod_id']." AND id=".$_COOKIE['id'].";";
          if($prep = $conn -> query($sl)){
            if($prep -> num_rows > 0){
        ?>
          <div type="button" class="wish-listed" onclick="wish(<?php echo $dat['prod_id'];?>, <?php echo $data['prod_id'];?>)"><i class="bx bxs-heart"></i></div>
        <?php
            }
            else{
        ?>
          <div type="button" class="wish-list" onclick="wish(<?php echo $dat['prod_id'];?>, <?php echo $data['prod_id'];?>)"><i class="bx bxs-heart"></i></div>
        <?php
            }
          }
        ?>
        <img onclick="prod(<?php echo $dat['prod_id'];?>)" src="<?php echo $dat['images0'];?>" alt="">
    </div>
    <div class="ProductDescription" onclick="prod(<?php echo $dat['prod_id'];?>)">
            <div class="ProductName">
                <h1><?php echo $dat['prod_name'];?></h1>
            </div>
            <div class="ProductReview">
          <?php
            $review = "SELECT * FROM prod_rating WHERE prod_id=".$dat['prod_id'].";";
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
                    <del><?php echo $dat['prod_org_price'];?></del><h1><?php echo $dat['prod_dis_price'];?></h1><h3><?php echo $dat['prod_discount'];?>% off</h3>
                </div>
                <div class="DeliveryCost">
                <?php if($dat['prod_delivery'] <= 0){
                    echo "<h1>Free Delivery</h1>";
                }
                ?>
                </div>
            </div>
    </div>
  </div>
  <?php
          }
        $num += 1;
        }
      }
    }
  ?>
    
  </div>
  <?php
        }
      }
    }
  ?>

<form action="./product details.php" method="get">
      <input type="hidden" name="product" class="pro" value="">
      <button style="display:none;" class="sub-bttn" type="submit"></button>
</form>
<form action="./sign_up.php" method="post">
    <input type="hidden" name="page" value="./wish-listed.php">
    <input type="hidden" name="prod" class="prod_id" value="">
    <input type="hidden" name="prod2" class="prod_id2" value="">
    <button class="wish" style="display:none;" type="submit"></button>
</form>
<script>
  function wish(id, id2){
    document.querySelector('.prod_id').value=id;
    document.querySelector('.prod_id2').value=id2;
    document.querySelector('.wish').click()
  }
  function prod(id){
    document.querySelector('.pro').value=id;
    document.querySelector('.sub-bttn').click()
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