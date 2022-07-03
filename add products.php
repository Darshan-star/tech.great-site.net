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
      <?php
        if(isset($_POST['product'])){
          $conn = new mysqli('sql108.epizy.com', "epiz_31213404", "Gajender8", "epiz_31213404_customers");
          if($conn -> connect_error){
            echo "Technical Error";
            header('location: ./seller profile.php');
          }
          $id = $_POST['product'];
          $sql = "SELECT * FROM product WHERE prod_id=$id AND seller_email='".$_COOKIE['email']."'";
          if($rec = $conn -> query($sql)){
            if($rec -> num_rows > 0){
              while($data = $rec -> fetch_assoc()){
      ?>
        <div class="ContainerFlex">
          <div class="RightContainer full">
            <form action="sign_up.php" class="temp" method="post" enctype="multipart/form-data">
              <div class="Details">
                  <div class="TopTitle">
                      <h1>Update Your Product Here</h1>
                      <div class="images-container" onclick="img()">
                          <input type="file" name="productimages[]" style="display: none;" multiple aria-multiselectable="true" accept=".jpg, .jpeg, .png, .webp" id="prodimages">
                          <div class="Image">
                            <img <?php if($data['images0'] != null){?>src="<?php echo $data['images0'];?>"<?php }else{?> style="display:none;"<?php }?> id="image0" alt="">
                            <img <?php if($data['images1'] != null){?>src="<?php echo $data['images1'];?>"<?php }else{?> style="display:none;"<?php }?> id="image1" alt="">
                            <img <?php if($data['images0'] != null){?>src="<?php echo $data['images0'];?>"<?php }else{?> style="display:none;"<?php }?> id="image2" alt="">
                            <img <?php if($data['images0'] != null){?>src="<?php echo $data['images0'];?>"<?php }else{?> style="display:none;"<?php }?> id="image3" alt="">
                            <img <?php if($data['images1'] != null){?>src="<?php echo $data['images0'];?>"<?php }else{?> style="display:none;"<?php }?> id="image4" alt="">
                            <img <?php if($data['images1'] != null){?>src="<?php echo $data['images0'];?>"<?php }else{?> style="display:none;"<?php }?> id="image5" alt="">
                            <img <?php if($data['images0'] != null){?>src="<?php echo $data['images0'];?>"<?php }else{?> style="display:none;"<?php }?> id="image6" alt="">
                            <img <?php if($data['images1'] != null){?>src="<?php echo $data['images0'];?>"<?php }else{?> style="display:none;"<?php }?> id="image7" alt="">
                            <img <?php if($data['images0'] != null){?>src="<?php echo $data['images0'];?>"<?php }else{?> style="display:none;"<?php }?> id="image8" alt="">
                            <img <?php if($data['images1'] != null){?>src="<?php echo $data['images0'];?>"<?php }else{?> style="display:none;"<?php }?> id="image9" alt="">
                          </div>
                          <h1 class="hhh" style="display: none;">Add Your Products Here <?php echo $_POST['product'];?></h1>
                          <h3 class="hhh" style="display: none;">Maximum 10 Images are allowed</h3>
                          <script>
                            function img(){
                              document.getElementById('prodimages').click()
                            document.getElementById('prodimages').oninput = ()=>{
                              c = document.getElementById('prodimages')
                              m = c.files.length
                              if(m>10){
                                  alert('Maximum 10 Images are allowed');
                                }                         
                              else
                              { 
                                if(m>=10){

                                var file = c.files[0];
                                if (file) {
                                    document.getElementsByClassName('hhh')[0].setAttribute('style','display:none;')
                                    document.getElementsByClassName('hhh')[1].setAttribute('style','display:none;')
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image0').setAttribute('src',this.result)
                                        document.getElementById('image0').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[1];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image1').setAttribute('src',this.result)
                                        document.getElementById('image1').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[2];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image2').setAttribute('src',this.result)
                                        document.getElementById('image2').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[3];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image3').setAttribute('src',this.result)
                                        document.getElementById('image3').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[4];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image4').setAttribute('src',this.result)
                                        document.getElementById('image4').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[5];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image5').setAttribute('src',this.result)
                                        document.getElementById('image5').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[6];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image6').setAttribute('src',this.result)
                                        document.getElementById('image6').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[7];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image7').setAttribute('src',this.result)
                                        document.getElementById('image7').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[8];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image8').setAttribute('src',this.result)
                                        document.getElementById('image8').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[9];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image9').setAttribute('src',this.result)
                                        document.getElementById('image9').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                  }
                                else{
                                  if(m>=9)
                                {

                                  document.getElementById('image9').setAttribute('style','display:none;')
                              var file = c.files[0];
                              if (file) {
                                  document.getElementsByClassName('hhh')[0].setAttribute('style','display:none;')
                                  document.getElementsByClassName('hhh')[1].setAttribute('style','display:none;')
                                  var reader = new FileReader()
                                  reader.addEventListener("load", function () {
                                      document.getElementById('image0').setAttribute('src',this.result)
                                      document.getElementById('image0').removeAttribute('style','none')
                                  });
                                  reader.readAsDataURL(file);
                              }
                              var file = c.files[1];
                              if (file) {
                                  var reader = new FileReader()
                                  reader.addEventListener("load", function () {
                                      document.getElementById('image1').setAttribute('src',this.result)
                                      document.getElementById('image1').removeAttribute('style','none')
                                  });
                                  reader.readAsDataURL(file);
                              }
                              var file = c.files[2];
                              if (file) {
                                  var reader = new FileReader()
                                  reader.addEventListener("load", function () {
                                      document.getElementById('image2').setAttribute('src',this.result)
                                      document.getElementById('image2').removeAttribute('style','none')
                                  });
                                  reader.readAsDataURL(file);
                              }
                              var file = c.files[3];
                              if (file) {
                                  var reader = new FileReader()
                                  reader.addEventListener("load", function () {
                                      document.getElementById('image3').setAttribute('src',this.result)
                                      document.getElementById('image3').removeAttribute('style','none')
                                  });
                                  reader.readAsDataURL(file);
                              }
                              var file = c.files[4];
                              if (file) {
                                  var reader = new FileReader()
                                  reader.addEventListener("load", function () {
                                      document.getElementById('image4').setAttribute('src',this.result)
                                      document.getElementById('image4').removeAttribute('style','none')
                                  });
                                  reader.readAsDataURL(file);
                              }
                              var file = c.files[5];
                              if (file) {
                                  var reader = new FileReader()
                                  reader.addEventListener("load", function () {
                                      document.getElementById('image5').setAttribute('src',this.result)
                                      document.getElementById('image5').removeAttribute('style','none')
                                  });
                                  reader.readAsDataURL(file);
                              }
                              var file = c.files[6];
                              if (file) {
                                  var reader = new FileReader()
                                  reader.addEventListener("load", function () {
                                      document.getElementById('image6').setAttribute('src',this.result)
                                      document.getElementById('image6').removeAttribute('style','none')
                                  });
                                  reader.readAsDataURL(file);
                              }
                              var file = c.files[7];
                              if (file) {
                                  var reader = new FileReader()
                                  reader.addEventListener("load", function () {
                                      document.getElementById('image7').setAttribute('src',this.result)
                                      document.getElementById('image7').removeAttribute('style','none')
                                  });
                                  reader.readAsDataURL(file);
                              }
                              var file = c.files[8];
                              if (file) {
                                  var reader = new FileReader()
                                  reader.addEventListener("load", function () {
                                      document.getElementById('image8').setAttribute('src',this.result)
                                      document.getElementById('image8').removeAttribute('style','none')
                                  });
                                  reader.readAsDataURL(file);
                              }
                            }
                              else{
                                    if(m>=8)
                                  {
                                    document.getElementById('image8').setAttribute('style','display:none;')
                                    document.getElementById('image9').setAttribute('style','display:none;')
                                var file = c.files[0];
                                if (file) {
                                    document.getElementsByClassName('hhh')[0].setAttribute('style','display:none;')
                                    document.getElementsByClassName('hhh')[1].setAttribute('style','display:none;')
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image0').setAttribute('src',this.result)
                                        document.getElementById('image0').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[1];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image1').setAttribute('src',this.result)
                                        document.getElementById('image1').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[2];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image2').setAttribute('src',this.result)
                                        document.getElementById('image2').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[3];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image3').setAttribute('src',this.result)
                                        document.getElementById('image3').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[4];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image4').setAttribute('src',this.result)
                                        document.getElementById('image4').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[5];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image5').setAttribute('src',this.result)
                                        document.getElementById('image5').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[6];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image6').setAttribute('src',this.result)
                                        document.getElementById('image6').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[7];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image7').setAttribute('src',this.result)
                                        document.getElementById('image7').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                              }
                              else{
                                    if(m>=7)
                                  {
                                    document.getElementById('image7').setAttribute('style','display:none;')
                                    document.getElementById('image8').setAttribute('style','display:none;')
                                    document.getElementById('image9').setAttribute('style','display:none;')
                                var file = c.files[0];
                                if (file) {
                                    document.getElementsByClassName('hhh')[0].setAttribute('style','display:none;')
                                    document.getElementsByClassName('hhh')[1].setAttribute('style','display:none;')
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image0').setAttribute('src',this.result)
                                        document.getElementById('image0').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[1];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image1').setAttribute('src',this.result)
                                        document.getElementById('image1').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[2];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image2').setAttribute('src',this.result)
                                        document.getElementById('image2').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[3];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image3').setAttribute('src',this.result)
                                        document.getElementById('image3').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[4];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image4').setAttribute('src',this.result)
                                        document.getElementById('image4').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[5];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image5').setAttribute('src',this.result)
                                        document.getElementById('image5').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[6];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image6').setAttribute('src',this.result)
                                        document.getElementById('image6').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                    
                              }
                              else{
                                    if(m>=6)
                                  {
                                    document.getElementById('image6').setAttribute('style','display:none;')
                                    document.getElementById('image7').setAttribute('style','display:none;')
                                    document.getElementById('image8').setAttribute('style','display:none;')
                                    document.getElementById('image9').setAttribute('style','display:none;')

                                var file = c.files[0];
                                if (file) {
                                    document.getElementsByClassName('hhh')[0].setAttribute('style','display:none;')
                                    document.getElementsByClassName('hhh')[1].setAttribute('style','display:none;')
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image0').setAttribute('src',this.result)
                                        document.getElementById('image0').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[1];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image1').setAttribute('src',this.result)
                                        document.getElementById('image1').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[2];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image2').setAttribute('src',this.result)
                                        document.getElementById('image2').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[3];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image3').setAttribute('src',this.result)
                                        document.getElementById('image3').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[4];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image4').setAttribute('src',this.result)
                                        document.getElementById('image4').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[5];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image5').setAttribute('src',this.result)
                                        document.getElementById('image5').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                              }
                              else{
                                    if(m>=5)
                                  {
                                    document.getElementById('image5').setAttribute('style','display:none;')
                                    document.getElementById('image6').setAttribute('style','display:none;')
                                    document.getElementById('image7').setAttribute('style','display:none;')
                                    document.getElementById('image8').setAttribute('style','display:none;')
                                    document.getElementById('image9').setAttribute('style','display:none;')
                                    
                                var file = c.files[0];
                                if (file) {
                                    document.getElementsByClassName('hhh')[0].setAttribute('style','display:none;')
                                    document.getElementsByClassName('hhh')[1].setAttribute('style','display:none;')
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image0').setAttribute('src',this.result)
                                        document.getElementById('image0').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[1];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image1').setAttribute('src',this.result)
                                        document.getElementById('image1').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[2];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image2').setAttribute('src',this.result)
                                        document.getElementById('image2').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[3];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image3').setAttribute('src',this.result)
                                        document.getElementById('image3').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[4];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image4').setAttribute('src',this.result)
                                        document.getElementById('image4').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[5];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image5').setAttribute('src',this.result)
                                        document.getElementById('image5').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[6];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image6').setAttribute('src',this.result)
                                        document.getElementById('image6').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[7];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image7').setAttribute('src',this.result)
                                        document.getElementById('image7').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[8];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image8').setAttribute('src',this.result)
                                        document.getElementById('image8').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[9];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image9').setAttribute('src',this.result)
                                        document.getElementById('image9').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                              }                                 
                              else{
                                    if(m>=4)
                                  {
                                    document.getElementById('image4').setAttribute('style','display:none;')
                                    document.getElementById('image5').setAttribute('style','display:none;')
                                    document.getElementById('image6').setAttribute('style','display:none;')
                                    document.getElementById('image7').setAttribute('style','display:none;')
                                    document.getElementById('image8').setAttribute('style','display:none;')
                                    document.getElementById('image9').setAttribute('style','display:none;')
                                var file = c.files[0];
                                if (file) {
                                    document.getElementsByClassName('hhh')[0].setAttribute('style','display:none;')
                                    document.getElementsByClassName('hhh')[1].setAttribute('style','display:none;')
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image0').setAttribute('src',this.result)
                                        document.getElementById('image0').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[1];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image1').setAttribute('src',this.result)
                                        document.getElementById('image1').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[2];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image2').setAttribute('src',this.result)
                                        document.getElementById('image2').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[3];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image3').setAttribute('src',this.result)
                                        document.getElementById('image3').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                              }
                              else{
                                    if(m>=3)
                                  {
                                    document.getElementById('image3').setAttribute('style','display:none;')
                                    document.getElementById('image4').setAttribute('style','display:none;')
                                    document.getElementById('image5').setAttribute('style','display:none;')
                                    document.getElementById('image6').setAttribute('style','display:none;')
                                    document.getElementById('image7').setAttribute('style','display:none;')
                                    document.getElementById('image8').setAttribute('style','display:none;')
                                    document.getElementById('image9').setAttribute('style','display:none;')
                                var file = c.files[0];
                                if (file) {
                                    document.getElementsByClassName('hhh')[0].setAttribute('style','display:none;')
                                    document.getElementsByClassName('hhh')[1].setAttribute('style','display:none;')
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image0').setAttribute('src',this.result)
                                        document.getElementById('image0').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[1];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image1').setAttribute('src',this.result)
                                        document.getElementById('image1').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[2];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image2').setAttribute('src',this.result)
                                        document.getElementById('image2').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                              }
                              else{
                                    if(m>=2)
                                  {
                                    document.getElementById('image2').setAttribute('style','display:none;')
                                    document.getElementById('image3').setAttribute('style','display:none;')
                                    document.getElementById('image4').setAttribute('style','display:none;')
                                    document.getElementById('image5').setAttribute('style','display:none;')
                                    document.getElementById('image6').setAttribute('style','display:none;')
                                    document.getElementById('image7').setAttribute('style','display:none;')
                                    document.getElementById('image8').setAttribute('style','display:none;')
                                    document.getElementById('image9').setAttribute('style','display:none;')
                                var file = c.files[0];
                                if (file) {
                                    document.getElementsByClassName('hhh')[0].setAttribute('style','display:none;')
                                    document.getElementsByClassName('hhh')[1].setAttribute('style','display:none;')
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image0').setAttribute('src',this.result)
                                        document.getElementById('image0').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[1];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image1').setAttribute('src',this.result)
                                        document.getElementById('image1').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                              }
                              else{
                                    if(m>=1)
                                  {
                                    document.getElementById('image1').setAttribute('style','display:none;')
                                    document.getElementById('image2').setAttribute('style','display:none;')
                                    document.getElementById('image3').setAttribute('style','display:none;')
                                    document.getElementById('image4').setAttribute('style','display:none;')
                                    document.getElementById('image5').setAttribute('style','display:none;')
                                    document.getElementById('image6').setAttribute('style','display:none;')
                                    document.getElementById('image7').setAttribute('style','display:none;')
                                    document.getElementById('image8').setAttribute('style','display:none;')
                                    document.getElementById('image9').setAttribute('style','display:none;')
                                var file = c.files[0];
                                if (file) {
                                    document.getElementsByClassName('hhh')[0].setAttribute('style','display:none;')
                                    document.getElementsByClassName('hhh')[1].setAttribute('style','display:none;')
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image0').setAttribute('src',this.result)
                                        document.getElementById('image0').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                  }
                                }
                              }
                            }
                                            }
                                          }
                                        }
                                      }
                                    }
                                  }
                                }
                              }
                            }
                            }
                          </script>
                      </div>
                  </div>
              </div>
              <div class="Details">
                <div class="Title">
                  <h1>Product Details</h1>
                </div>
                <div class="EntryField grid prod nds">
                  <h3>Product Name : </h3><input required type="text" name="name" autocomplete="off" placeholder="Product Name*" value="<?php echo $data['prod_name'];?>">
                  <h3>Product Type : </h3><input required type="text" name="type" placeholder="Laptop/Mobile/TV...*" value="<?php echo $data['prod_type'];?>">
                  <h3>Original Price : </h3><input required type="number" name="org_price" placeholder="Original Price*" id="org_price" value="<?php echo $data['prod_org_price'];?>">
                  <h3>Maximum Discount Limit : </h3><input required type="number" name="max_discount" placeholder="Maximum Discount*" id="max_dis" value="<?php echo $data['max_discount'];?>">
                  <h3>Discount : </h3><input required type="number" name="discount" step="0.0001" placeholder="Discount*" id="discount" value="<?php echo $data['prod_discount'];?>">
                  <h3>Discounted Price : </h3><input required type="number" name="discount_price" placeholder="Discounted Price*" id="price" value="<?php echo $data['prod_dis_price'];?>">
                  <h3>Product Quantity : </h3><input required type="number" name="quantity" placeholder="Product Quantity*" id="quantity" value="<?php echo $data['prod_quantity'];?>">
                  <h3 style="color:transparent; cursor:default;">NONE</h3>
                  <h3 style="color:transparent; cursor:default;">NONE</h3>
                  <h3>Product Description : </h3><textarea name="description" class="text" placeholder="Product Description" cols="30" rows="10" value="<?php echo $data['prod_description'];?>" ><?php echo $data['prod_description'];?></textarea><count><val>0</val>/2500</count>
                </div>
                  <script>
                    var textarea = document.querySelector('.text');
                    var c = document.querySelector('val');
                    document.onreadystatechange = textarea.onkeyup = ()=>{
                      c.textContent = textarea.value.length
                    }
                  </script>
                </div>
                <div class="Title hiden">
                  <h1>Product Specifications: </h1>
                </div>
                
                <div class="specific hiden">
                  <note>NOTE : <noteval>Red Coloured Fields are Mandatory(*)</noteval></note>
                  <h3>General</h3>
                  <input required type="text" name="brand" placeholder="Brand*" value="<?php echo $data['brand'];?>">
                  <input required type="text" name="box" placeholder="In The Box*" value="<?php echo $data['box'];?>">
                  <input type="text" name="model_num" placeholder="Model Number" value="<?php echo $data['model_num'];?>">
                  <input required type="text" name="model_name" placeholder="Model Name*" value="<?php echo $data['model_name'];?>">
                  <input type="text" name="color" placeholder="Color" value="<?php echo $data['color'];?>">
                  <input type="text" name="browser" placeholder="Browser Type" value="<?php echo $data['browser'];?>">
                  <input required type="text" name="sim" placeholder="SIM Type*" value="<?php echo $data['sim'];?>">
                  <input type="text" name="sim_slot" placeholder="Hybrid SIM Slot" value="<?php echo $data['sim_slot'];?>">
                  <input required type="text" name="touch" placeholder="Touchscreen*" value="<?php echo $data['touch'];?>">
                  <input type="text" name="otg" placeholder="OTG Compatible" value="<?php echo $data['otg'];?>">
                  <input type="text" name="sound" placeholder="Sound Enhancement" value="<?php echo $data['sound'];?>">

                  <h3>Display Features</h3>
                  <input type="number" step="0.01" required name="size" placeholder="Display Size(inches)*" value="<?php echo $data['size'];?>">
                  <input type="text" name="resolution" placeholder="Resolution" value="<?php echo $data['resolution'];?>">
                  <input type="text" name="resolution_type" placeholder="Resolution Type*" required value="<?php echo $data['resolution_type'];?>">
                  <input type="text" name="gpu" placeholder="GPU" value="<?php echo $data['gpu'];?>">
                  <input type="text" name="display" placeholder="Display Type*" required value="<?php echo $data['display'];?>">
                  <input type="text" name="display_type" placeholder="Display Colours" value="<?php echo $data['display_type'];?>">
                  <input type="text" name="display_feature" placeholder="Other Display Features" value="<?php echo $data['display_feature'];?>">

                  <h3>Os &amp; Processor Features</h3>
                  <input type="text" name="os" placeholder="Operating System*" required value="<?php echo $data['os'];?>">
                  <input type="text" name="processor" placeholder="Processor Type" value="<?php echo $data['processor'];?>">
                  <input type="text" name="core" placeholder="Processor Core*" required value="<?php echo $data['core'];?>">
                  <input type="number" step="0.01" name="clock" placeholder="Clock Speed*"required value="<?php echo $data['clock'];?>">
                  <input type="text" name="of" placeholder="Operating Frequency" value="<?php echo $data['of'];?>">
                  
                  <h3>Memory &amp; Storage Features</h3>
                  <input type="number" step="1" name="storage" placeholder="Internal Storage*" required value="<?php echo $data['storage'];?>">
                  <input type="number" step="1" name="ram" placeholder="RAM*" required value="<?php echo $data['ram'];?>">
                  <input type="number" step="1" name="memory" placeholder="Expandable Storage*" required value="<?php echo $data['memory'];?>">
                  <input type="text" name="card" placeholder="Memory Card Support*" required value="<?php echo $data['card'];?>">

                  <h3>Camera Features</h3>
                  <input type="text" name="primary_camera" placeholder="Primary Camera*" required value="<?php echo $data['primary_camera'];?>">
                  <input type="text" name="p_cam_features" placeholder="Primary Camera Features" value="<?php echo $data['p_cam_features'];?>">
                  <input type="text" name="secondary_camera" placeholder="Secondary Camera*" required value="<?php echo $data['secondary_camera'];?>">
                  <input type="text" name="s_cam_features" placeholder="Secondary Camera Features" value="<?php echo $data['s_cam_features'];?>">
                  <input type="text" name="flash" placeholder="Flash*" required value="<?php echo $data['flash'];?>">
                  <input type="text" name="video" placeholder="Video Recording Features*" required value="<?php echo $data['video'];?>">
                  <input type="text" name="zoom" placeholder="Digital Zoom" value="<?php echo $data['zoom'];?>">
                  <input type="text" name="frame" placeholder="Frame Rate" value="<?php echo $data['frame'];?>">
                  <input type="text" name="lens" placeholder="Camera Lens" value="<?php echo $data['lens'];?>">
                  
                  <h3>Connectivity Features</h3>
                  <input type="text" name="network" placeholder="Network Type*" required value="<?php echo $data['network'];?>">
                  <input type="text" name="network_support" placeholder="Supported Networks" value="<?php echo $data['network_support'];?>">
                  <input type="text" name="internet" placeholder="Internet Connectivity" value="<?php echo $data['internet'];?>">
                  <input type="text" name="gprs" placeholder="GPRS" value="<?php echo $data['gprs'];?>">
                  <input type="text" name="bluetooth" placeholder="Bluetooth*" required value="<?php echo $data['bluetooth'];?>">
                  <input type="text" name="wifi" placeholder="Wi-Fi*" required value="<?php echo $data['wifi'];?>">
                  <input type="text" name="hotspot" placeholder="Wi-Fi Hotspot" value="<?php echo $data['hotspot'];?>">
                  <input type="text" name="nfc" placeholder="NFC" value="<?php echo $data['nfc'];?>">
                  <input type="text" name="usb" placeholder="USB Connectivity" value="<?php echo $data['usb'];?>">
                  <input type="text" name="edge" placeholder="EDGE" value="<?php echo $data['edge'];?>">
                  <input type="text" name="audio" placeholder="Audio Jack*" required value="<?php echo $data['audio'];?>">
                  <input type="text" name="map" placeholder="Map Support" value="<?php echo $data['map'];?>">
                  
                  <h3>Multimedia Features</h3>
                  <input type="text" name="audio_format" placeholder="Audio Formats" value="<?php echo $data['audio_format'];?>">
                  <input type="text" name="video_format" placeholder="Video Formats" value="<?php echo $data['video_format'];?>">
                  
                  <h3>Battery &amp; Power Features</h3>
                  <input type="text" name="battery_type" placeholder="Battery Type*" required value="<?php echo $data['battery_type'];?>">
                  <input type="number" name="battery" placeholder="Battery Capacity*" required value="<?php echo $data['battery'];?>">
                  
                  <h3>Dimensions</h3>
                  <input type="number" name="height" placeholder="Height(cm)" value="<?php if($data['height'] != 0){ echo $data['height'];}else{echo "";}?>">
                  <input type="number" name="width" placeholder="Width(cm)" value="<?php if($data['width'] != 0){ echo $data['width'];}else{echo "";}?>">
                  <input type="number" name="depth" placeholder="Depth(cm)" value="<?php if($data['depth'] != 0){ echo $data['depth'];}else{echo "";}?>">
                  <input type="number" name="weight" placeholder="Weight(g)" value="<?php if($data['weight'] != 0){ echo $data['weight'];}else{echo "";}?>">
                  
                  <h3>Other Details</h3>
                  <input type="text" name="smartphone" placeholder="Smartphone*" required value="<?php echo $data['smartphone'];?>">
                  <input type="text" name="touch_type" placeholder="Touchscreen Type" value="<?php echo $data['touch_type'];?>">
                  <input type="text" name="sim_size" placeholder="SIM Size" value="<?php echo $data['sim_size'];?>">
                  <input type="text" name="ui" placeholder="User Interface(UI)" value="<?php echo $data['ui'];?>">
                  <input type="text" name="graphics" placeholder="Graphics PPI" value="<?php echo $data['graphics'];?>">
                  <input type="text" name="sensors" placeholder="Sensors*" required value="<?php echo $data['sensors'];?>">
                  <input type="text" name="other" placeholder="Other Features" value="<?php echo $data['other'];?>">
                  
                  <h3>Warranty</h3>
                  <input type="text" name="warranty" placeholder="Warranty Summary*" required value="<?php echo $data['warranty'];?>">
                  <input type="text" name="domestic" placeholder="Domestic Warranty*" required value="<?php echo $data['domestic'];?>">
                  <h3>KeyWords</h3>
                  <note>Note : <noteval>Keywords are very Important, It helps customers to find your product Easily. And may Help You in increasing your sale.</noteval></note>
                  <br>
                  <textarea name="keywords" class="text" placeholder="Mobile, mobile with 4500 mah battery, 5G mobile, mobiles with 48MP camera..." cols="30" rows="10" value="<?php echo $data['keywords'];?>"><?php echo $data['keywords'];?></textarea><count><val>0</val>/2500</count>
                  
                </div>
                <div class="Form EntryField grid prod dns">
                  <h3>Additional Specifications : </h3>
                  <div>

                    <div class="spf">
                    <?php
                      $high = "SELECT * FROM prod_spec WHERE prod_id = $id";
                      if($find = $conn->query($high)){
                        if($find->num_rows > 0){
                          $i = 0;
                          $m = 0;
                          while($found = $find->fetch_assoc()){
                    ?>
                      <input required type="text" name="key[]" value="<?php echo $found['spec_head'];?>" placeholder="Specification Title" class="key k<?php echo $m;?>">
                      <input type="text" required name="value[]" value="<?php echo $found['spec_value'];?>" placeholder="About It" class="value v<?php echo $m;?>">
                      <button title="Remove" style="background: #f00; cursor:pointer; border-radius:50%;height:2.5rem;width:2.5rem; color:#fff; margin-left: 3rem;" class="cancel<?php echo $m;?>" type="button">X</button>
                    <?php
                        $m += 1;
                        }
                        $i += 1;
                      }
                    }
                    ?>
                    </div>
                    <div class="btn">
                      <button class="more" type="button">+More</button>
                    </div>
                  </div>
                <div class="btn" style="width:200%; display:grid;grid-template-columns: repeat(2,1fr);" id="bt">
                  <button type="reset" class="reset" style="display: none;"></button>
                  <a href="./seller profile.php">
                        <button type="button" style="background: #f00; color: #fff;margin-right: 2rem; text-shadow: 0 0 5px #000;">Cancel</button>
                  </a>
                  <input type="hidden" name="prod_id" value="<?php echo $data['prod_id'];?>">
                  <input type="hidden" name="page" value="./update products.php">
                  <button style="width: fit-content;" type="submit">Update Product</button> 
                  </div>
              </div>
            </form>
          </div>

        </div>
      <?php
              }
            }
            else{
              echo "Product Not Found";
              header('location: ./seller profile.php');
            }
          }
          else{
            echo "Technical Error";
            header('location: ./seller profile.php');
          }
        }
        else{
      ?>
        <div class="ContainerFlex">
          <div class="RightContainer full">
            <form action="sign_up.php" method="post" enctype="multipart/form-data">
              <div class="Details">
                  <div class="TopTitle">
                      <div class="images-container" onclick="img()">
                          <input type="file" name="productimages[]" style="display: none;" multiple aria-multiselectable="true" accept=".jpg, .jpeg, .png, .webp" id="prodimages">
                          <div class="Image">
                            <img id="image0" style="display: none;" alt="">
                            <img id="image1" style="display: none;" alt="">
                            <img id="image2" style="display: none;" alt="">
                            <img id="image3" style="display: none;" alt="">
                            <img id="image4" style="display: none;" alt="">
                            <img id="image5" style="display: none;" alt="">
                            <img id="image6" style="display: none;" alt="">
                            <img id="image7" style="display: none;" alt="">
                            <img id="image8" style="display: none;" alt="">
                            <img id="image9" style="display: none;" alt="">
                          </div>
                          <h1 class="hhh">Add Your Products Here</h1>
                          <h3 class="hhh">Maximum 10 Images are allowed</h3>
                          <script>
                            function img(){
                              document.getElementById('prodimages').click()
                            document.getElementById('prodimages').oninput = ()=>{
                              c = document.getElementById('prodimages')
                              m = c.files.length
                              if(m>10){
                                  alert('Maximum 10 Images are allowed');
                                }                         
                              else
                              { 
                                if(m>=10){

                                var file = c.files[0];
                                if (file) {
                                    document.getElementsByClassName('hhh')[0].setAttribute('style','display:none;')
                                    document.getElementsByClassName('hhh')[1].setAttribute('style','display:none;')
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image0').setAttribute('src',this.result)
                                        document.getElementById('image0').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[1];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image1').setAttribute('src',this.result)
                                        document.getElementById('image1').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[2];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image2').setAttribute('src',this.result)
                                        document.getElementById('image2').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[3];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image3').setAttribute('src',this.result)
                                        document.getElementById('image3').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[4];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image4').setAttribute('src',this.result)
                                        document.getElementById('image4').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[5];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image5').setAttribute('src',this.result)
                                        document.getElementById('image5').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[6];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image6').setAttribute('src',this.result)
                                        document.getElementById('image6').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[7];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image7').setAttribute('src',this.result)
                                        document.getElementById('image7').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[8];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image8').setAttribute('src',this.result)
                                        document.getElementById('image8').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[9];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image9').setAttribute('src',this.result)
                                        document.getElementById('image9').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                  }
                                else{
                                  if(m>=9)
                                {

                                  document.getElementById('image9').setAttribute('style','display:none;')
                              var file = c.files[0];
                              if (file) {
                                  document.getElementsByClassName('hhh')[0].setAttribute('style','display:none;')
                                  document.getElementsByClassName('hhh')[1].setAttribute('style','display:none;')
                                  var reader = new FileReader()
                                  reader.addEventListener("load", function () {
                                      document.getElementById('image0').setAttribute('src',this.result)
                                      document.getElementById('image0').removeAttribute('style','none')
                                  });
                                  reader.readAsDataURL(file);
                              }
                              var file = c.files[1];
                              if (file) {
                                  var reader = new FileReader()
                                  reader.addEventListener("load", function () {
                                      document.getElementById('image1').setAttribute('src',this.result)
                                      document.getElementById('image1').removeAttribute('style','none')
                                  });
                                  reader.readAsDataURL(file);
                              }
                              var file = c.files[2];
                              if (file) {
                                  var reader = new FileReader()
                                  reader.addEventListener("load", function () {
                                      document.getElementById('image2').setAttribute('src',this.result)
                                      document.getElementById('image2').removeAttribute('style','none')
                                  });
                                  reader.readAsDataURL(file);
                              }
                              var file = c.files[3];
                              if (file) {
                                  var reader = new FileReader()
                                  reader.addEventListener("load", function () {
                                      document.getElementById('image3').setAttribute('src',this.result)
                                      document.getElementById('image3').removeAttribute('style','none')
                                  });
                                  reader.readAsDataURL(file);
                              }
                              var file = c.files[4];
                              if (file) {
                                  var reader = new FileReader()
                                  reader.addEventListener("load", function () {
                                      document.getElementById('image4').setAttribute('src',this.result)
                                      document.getElementById('image4').removeAttribute('style','none')
                                  });
                                  reader.readAsDataURL(file);
                              }
                              var file = c.files[5];
                              if (file) {
                                  var reader = new FileReader()
                                  reader.addEventListener("load", function () {
                                      document.getElementById('image5').setAttribute('src',this.result)
                                      document.getElementById('image5').removeAttribute('style','none')
                                  });
                                  reader.readAsDataURL(file);
                              }
                              var file = c.files[6];
                              if (file) {
                                  var reader = new FileReader()
                                  reader.addEventListener("load", function () {
                                      document.getElementById('image6').setAttribute('src',this.result)
                                      document.getElementById('image6').removeAttribute('style','none')
                                  });
                                  reader.readAsDataURL(file);
                              }
                              var file = c.files[7];
                              if (file) {
                                  var reader = new FileReader()
                                  reader.addEventListener("load", function () {
                                      document.getElementById('image7').setAttribute('src',this.result)
                                      document.getElementById('image7').removeAttribute('style','none')
                                  });
                                  reader.readAsDataURL(file);
                              }
                              var file = c.files[8];
                              if (file) {
                                  var reader = new FileReader()
                                  reader.addEventListener("load", function () {
                                      document.getElementById('image8').setAttribute('src',this.result)
                                      document.getElementById('image8').removeAttribute('style','none')
                                  });
                                  reader.readAsDataURL(file);
                              }
                            }
                              else{
                                    if(m>=8)
                                  {
                                    document.getElementById('image8').setAttribute('style','display:none;')
                                    document.getElementById('image9').setAttribute('style','display:none;')
                                var file = c.files[0];
                                if (file) {
                                    document.getElementsByClassName('hhh')[0].setAttribute('style','display:none;')
                                    document.getElementsByClassName('hhh')[1].setAttribute('style','display:none;')
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image0').setAttribute('src',this.result)
                                        document.getElementById('image0').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[1];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image1').setAttribute('src',this.result)
                                        document.getElementById('image1').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[2];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image2').setAttribute('src',this.result)
                                        document.getElementById('image2').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[3];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image3').setAttribute('src',this.result)
                                        document.getElementById('image3').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[4];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image4').setAttribute('src',this.result)
                                        document.getElementById('image4').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[5];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image5').setAttribute('src',this.result)
                                        document.getElementById('image5').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[6];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image6').setAttribute('src',this.result)
                                        document.getElementById('image6').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[7];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image7').setAttribute('src',this.result)
                                        document.getElementById('image7').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                              }
                              else{
                                    if(m>=7)
                                  {
                                    document.getElementById('image7').setAttribute('style','display:none;')
                                    document.getElementById('image8').setAttribute('style','display:none;')
                                    document.getElementById('image9').setAttribute('style','display:none;')
                                var file = c.files[0];
                                if (file) {
                                    document.getElementsByClassName('hhh')[0].setAttribute('style','display:none;')
                                    document.getElementsByClassName('hhh')[1].setAttribute('style','display:none;')
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image0').setAttribute('src',this.result)
                                        document.getElementById('image0').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[1];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image1').setAttribute('src',this.result)
                                        document.getElementById('image1').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[2];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image2').setAttribute('src',this.result)
                                        document.getElementById('image2').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[3];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image3').setAttribute('src',this.result)
                                        document.getElementById('image3').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[4];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image4').setAttribute('src',this.result)
                                        document.getElementById('image4').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[5];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image5').setAttribute('src',this.result)
                                        document.getElementById('image5').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[6];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image6').setAttribute('src',this.result)
                                        document.getElementById('image6').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                    
                              }
                              else{
                                    if(m>=6)
                                  {
                                    document.getElementById('image6').setAttribute('style','display:none;')
                                    document.getElementById('image7').setAttribute('style','display:none;')
                                    document.getElementById('image8').setAttribute('style','display:none;')
                                    document.getElementById('image9').setAttribute('style','display:none;')

                                var file = c.files[0];
                                if (file) {
                                    document.getElementsByClassName('hhh')[0].setAttribute('style','display:none;')
                                    document.getElementsByClassName('hhh')[1].setAttribute('style','display:none;')
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image0').setAttribute('src',this.result)
                                        document.getElementById('image0').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[1];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image1').setAttribute('src',this.result)
                                        document.getElementById('image1').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[2];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image2').setAttribute('src',this.result)
                                        document.getElementById('image2').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[3];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image3').setAttribute('src',this.result)
                                        document.getElementById('image3').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[4];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image4').setAttribute('src',this.result)
                                        document.getElementById('image4').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[5];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image5').setAttribute('src',this.result)
                                        document.getElementById('image5').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                              }
                              else{
                                    if(m>=5)
                                  {
                                    document.getElementById('image5').setAttribute('style','display:none;')
                                    document.getElementById('image6').setAttribute('style','display:none;')
                                    document.getElementById('image7').setAttribute('style','display:none;')
                                    document.getElementById('image8').setAttribute('style','display:none;')
                                    document.getElementById('image9').setAttribute('style','display:none;')
                                    
                                var file = c.files[0];
                                if (file) {
                                    document.getElementsByClassName('hhh')[0].setAttribute('style','display:none;')
                                    document.getElementsByClassName('hhh')[1].setAttribute('style','display:none;')
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image0').setAttribute('src',this.result)
                                        document.getElementById('image0').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[1];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image1').setAttribute('src',this.result)
                                        document.getElementById('image1').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[2];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image2').setAttribute('src',this.result)
                                        document.getElementById('image2').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[3];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image3').setAttribute('src',this.result)
                                        document.getElementById('image3').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[4];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image4').setAttribute('src',this.result)
                                        document.getElementById('image4').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[5];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image5').setAttribute('src',this.result)
                                        document.getElementById('image5').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[6];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image6').setAttribute('src',this.result)
                                        document.getElementById('image6').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[7];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image7').setAttribute('src',this.result)
                                        document.getElementById('image7').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[8];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image8').setAttribute('src',this.result)
                                        document.getElementById('image8').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[9];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image9').setAttribute('src',this.result)
                                        document.getElementById('image9').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                              }                                 
                              else{
                                    if(m>=4)
                                  {
                                    document.getElementById('image4').setAttribute('style','display:none;')
                                    document.getElementById('image5').setAttribute('style','display:none;')
                                    document.getElementById('image6').setAttribute('style','display:none;')
                                    document.getElementById('image7').setAttribute('style','display:none;')
                                    document.getElementById('image8').setAttribute('style','display:none;')
                                    document.getElementById('image9').setAttribute('style','display:none;')
                                var file = c.files[0];
                                if (file) {
                                    document.getElementsByClassName('hhh')[0].setAttribute('style','display:none;')
                                    document.getElementsByClassName('hhh')[1].setAttribute('style','display:none;')
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image0').setAttribute('src',this.result)
                                        document.getElementById('image0').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[1];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image1').setAttribute('src',this.result)
                                        document.getElementById('image1').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[2];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image2').setAttribute('src',this.result)
                                        document.getElementById('image2').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[3];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image3').setAttribute('src',this.result)
                                        document.getElementById('image3').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                              }
                              else{
                                    if(m>=3)
                                  {
                                    document.getElementById('image3').setAttribute('style','display:none;')
                                    document.getElementById('image4').setAttribute('style','display:none;')
                                    document.getElementById('image5').setAttribute('style','display:none;')
                                    document.getElementById('image6').setAttribute('style','display:none;')
                                    document.getElementById('image7').setAttribute('style','display:none;')
                                    document.getElementById('image8').setAttribute('style','display:none;')
                                    document.getElementById('image9').setAttribute('style','display:none;')
                                var file = c.files[0];
                                if (file) {
                                    document.getElementsByClassName('hhh')[0].setAttribute('style','display:none;')
                                    document.getElementsByClassName('hhh')[1].setAttribute('style','display:none;')
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image0').setAttribute('src',this.result)
                                        document.getElementById('image0').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[1];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image1').setAttribute('src',this.result)
                                        document.getElementById('image1').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[2];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image2').setAttribute('src',this.result)
                                        document.getElementById('image2').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                              }
                              else{
                                    if(m>=2)
                                  {
                                    document.getElementById('image2').setAttribute('style','display:none;')
                                    document.getElementById('image3').setAttribute('style','display:none;')
                                    document.getElementById('image4').setAttribute('style','display:none;')
                                    document.getElementById('image5').setAttribute('style','display:none;')
                                    document.getElementById('image6').setAttribute('style','display:none;')
                                    document.getElementById('image7').setAttribute('style','display:none;')
                                    document.getElementById('image8').setAttribute('style','display:none;')
                                    document.getElementById('image9').setAttribute('style','display:none;')
                                var file = c.files[0];
                                if (file) {
                                    document.getElementsByClassName('hhh')[0].setAttribute('style','display:none;')
                                    document.getElementsByClassName('hhh')[1].setAttribute('style','display:none;')
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image0').setAttribute('src',this.result)
                                        document.getElementById('image0').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                                var file = c.files[1];
                                if (file) {
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image1').setAttribute('src',this.result)
                                        document.getElementById('image1').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                }
                              }
                              else{
                                    if(m>=1)
                                  {
                                    document.getElementById('image1').setAttribute('style','display:none;')
                                    document.getElementById('image2').setAttribute('style','display:none;')
                                    document.getElementById('image3').setAttribute('style','display:none;')
                                    document.getElementById('image4').setAttribute('style','display:none;')
                                    document.getElementById('image5').setAttribute('style','display:none;')
                                    document.getElementById('image6').setAttribute('style','display:none;')
                                    document.getElementById('image7').setAttribute('style','display:none;')
                                    document.getElementById('image8').setAttribute('style','display:none;')
                                    document.getElementById('image9').setAttribute('style','display:none;')
                                var file = c.files[0];
                                if (file) {
                                    document.getElementsByClassName('hhh')[0].setAttribute('style','display:none;')
                                    document.getElementsByClassName('hhh')[1].setAttribute('style','display:none;')
                                    var reader = new FileReader()
                                    reader.addEventListener("load", function () {
                                        document.getElementById('image0').setAttribute('src',this.result)
                                        document.getElementById('image0').removeAttribute('style','none')
                                    });
                                    reader.readAsDataURL(file);
                                  }
                                }
                              }
                            }
                                            }
                                          }
                                        }
                                      }
                                    }
                                  }
                                }
                              }
                            }
                            }
                          </script>
                      </div>
                  </div>
              </div>
              <div class="Details">
                <div class="Title">
                  <h1>Product Details</h1>
                </div>
                <div class="EntryField grid prod nds">
                  <h3>Product Name : </h3><input required type="text" name="name" autocomplete="off" placeholder="Product Name*">
                  <h3>Product Type : </h3><input required type="text" name="type" placeholder="Laptop/Mobile/TV...*">
                  <h3>Original Price : </h3><input required type="number" name="org_price" placeholder="Original Price*" id="org_price">
                  <h3>Maximum Discount Limit : </h3><input required type="number" name="max_discount" placeholder="Maximum Discount*" id="max_dis">
                  <h3>Discount : </h3><input required type="number" name="discount" step="0.0001" placeholder="Discount*" id="discount">
                  <h3>Discounted Price : </h3><input required type="number" name="discount_price" placeholder="Discounted Price*" id="price">
                  <h3>Product Quantity : </h3><input required type="number" name="quantity" placeholder="Product Quantity*" id="quantity">
                  <h3 style="color:transparent; cursor:default;">NONE</h3>
                  <h3 style="color:transparent; cursor:default;">NONE</h3>
                  <h3>Product Description : </h3><textarea name="description" class="text" placeholder="Product Description" cols="30" rows="10"></textarea><count><val>0</val>/2500</count>
                </div>
                
                <div class="Form EntryField grid prod dns">
                  <input type="hidden" name="page" value="add product.php">
                  <h3>Product Catagory : </h3><select required name="catagory">
                    <option value="mobiles">Mobile</option>
                    <option value="electronics">Electronic</option>
                    <option value="fashion">Fashion</option>
                    <option value="home">Home</option>
                    <option value="appliances">Appliances</option>
                    <option value="beauty">Beauty</option>
                    <option value="toys & baby">Toys & Baby</option>
                    <option value="furniture">Furniture</option>
                    <option value="sports">Sports</option>
                    <option value="grocery">Grocery</option>
                    <option value="flights">Flights</option>
                    <option value="india's heritage">India's Heritage</option>
                    <option value="insurance">Insurance</option>
                    <option value="food & more">Food & more</option>
                    <option value="gift cards">Gift Cards</option>
                    <option value="medical">Medical</option>
                    <option value="others">Others</option>                  
                  </select>
                  <script>
                    document.getElementById('discount').oninput = document.getElementById('org_price').oninput = function(){
                    org_price = parseInt(document.getElementById('org_price').value);
                    discount = parseFloat(document.getElementById('discount').value);
                    price = parseInt((org_price-(org_price*discount)/100));
                    document.getElementById('price').value = price;
                    if(parseInt(document.getElementById('org_price').value) < 1){
                      alert("You Can't give price less than ₹1");
                      document.getElementById('org_price').value = 1;
                    }
                    if(parseInt(document.getElementById('discount').value) < 0){
                      alert("You Can't give discount less than 0%")
                      document.getElementById('discount').value = 0;
                    }
                    if(parseInt(document.getElementById('discount').value) > 90){
                      alert("You Can only give discount Upto 90%")
                      document.getElementById('discount').value = 90;
                    }
                    if(parseInt(document.getElementById('price').value) < 1){
                      alert("You Can't give price less than ₹1");
                      document.getElementById('price').value = 1;
                      document.getElementById('discount').value = 0;
                      document.getElementById('max_dis').value = 0;
                      document.getElementById('org_price').value = 1;
                    }
                    }
                    document.getElementById('max_dis').oninput = ()=>{
                    if(parseInt(document.getElementById('max_dis').value)>90){
                      alert('You can Only give Upto 90% Discount');
                      document.getElementById('max_dis').value=90;
                    }
                    if(parseInt(document.getElementById('max_dis').value)<parseInt(document.getElementById('discount').value)){
                      alert('Maximum discount Must be Equal or More than Discount');
                      document.getElementById('discount').value = parseInt(document.getElementById('max_dis').value)
                    }
                    if(parseInt(document.getElementById('max_dis').value) < 0){
                      alert("Maximum Discount Limit can't be less than 0%")
                    }
                    }
                    document.getElementById('price').oninput = ()=>{
                    if(parseInt(document.getElementById('price').value) > price+9 ||parseInt(document.getElementById('price').value) < price-9){
                    alert('You can Only add or remove ₹9 from Discounted Price.\n You can use up or down Arrow keys to add or remove ₹9.');
                    document.getElementById('price').value=price;
                    }
                    }
                      document.getElementById('quantity').oninput = ()=>{
                      if(parseInt(document.getElementById('quantity').value) < 1){
                          alert("You have to sell Atleast a Single quantity of Product");
                          document.getElementById('quantity').value = 1;
                      }
                    }
                    var textarea2 = document.querySelector('.text');
                    var c = document.querySelector('val');
                    document.onreadystatechange = ()=>{
                      c.textContent = textarea2.value.length
                    }
                    textarea2.onkeyup = ()=>{
                      c.textContent = textarea2.value.length
                    }
                  </script>
              </div>


                <div class="Title hiden">
                  <h1>Product Specifications</h1>
                </div>
                <div class="specific hiden">
                  <note>NOTE : <noteval>Red Coloured Fields are Mandatory(*)</noteval></note>
                  <h3>General</h3>
                  <input required type="text" name="brand" placeholder="Brand*">
                  <input required type="text" name="box" placeholder="In The Box*">
                  <input type="text" name="model_num" placeholder="Model Number">
                  <input required type="text" name="model_name" placeholder="Model Name*">
                  <input type="text" name="color" placeholder="Color">
                  <input type="text" name="browser" placeholder="Browser Type">
                  <input required type="text" name="sim" placeholder="SIM Type*">
                  <input type="text" name="sim_slot" placeholder="Hybrid SIM Slot">
                  <input required type="text" name="touch" placeholder="Touchscreen*">
                  <input type="text" name="otg" placeholder="OTG Compatible">
                  <input type="text" name="sound" placeholder="Sound Enhancement">

                  <h3>Display Features</h3>
                  <input type="number" step="0.01" required name="size" placeholder="Display Size(inches)*">
                  <input type="text" name="resolution" placeholder="Resolution">
                  <input type="text" name="resolution_type" placeholder="Resolution Type*" required>
                  <input type="text" name="gpu" placeholder="GPU">
                  <input type="text" name="display" placeholder="Display Type*" required>
                  <input type="text" name="display_type" placeholder="Display Colours">
                  <input type="text" name="display_features" placeholder="Other Display Features">

                  <h3>Os &amp; Processor Features</h3>
                  <input type="text" name="os" placeholder="Operating System*" required>
                  <input type="text" name="processor" placeholder="Processor Type">
                  <input type="text" name="core" placeholder="Processor Core*" required>
                  <input type="number" step="0.01" name="clock" placeholder="Clock Speed*"required>
                  <input type="text" name="of" placeholder="Operating Frequency">
                  
                  <h3>Memory &amp; Storage Features</h3>
                  <input type="number" step="1" name="storage" placeholder="Internal Storage*" required>
                  <input type="number" step="1" name="ram" placeholder="RAM*" required>
                  <input type="number" step="1" name="memory" placeholder="Expandable Storage*" required>
                  <input type="text" name="card" placeholder="Memory Card Support*" required>

                  <h3>Camera Features</h3>
                  <input type="text" name="primary_camera" placeholder="Primary Camera*" required>
                  <input type="text" name="p_cam_features" placeholder="Primary Camera Features">
                  <input type="text" name="secondary_camera" placeholder="Secondary Camera*" required>
                  <input type="text" name="s_cam_features" placeholder="Secondary Camera Features">
                  <input type="text" name="flash" placeholder="Flash*" required>
                  <input type="text" name="video" placeholder="Video Recording Features*" required>
                  <input type="text" name="zoom" placeholder="Digital Zoom">
                  <input type="text" name="frame" placeholder="Frame Rate">
                  <input type="text" name="lens" placeholder="Camera Lens">
                  
                  <h3>Connectivity Features</h3>
                  <input type="text" name="network" placeholder="Network Type*" required>
                  <input type="text" name="network_support" placeholder="Supported Networks">
                  <input type="text" name="internet" placeholder="Internet Connectivity">
                  <input type="text" name="gprs" placeholder="GPRS">
                  <input type="text" name="bluetooth" placeholder="Bluetooth*" required>
                  <input type="text" name="wifi" placeholder="Wi-Fi*" required>
                  <input type="text" name="hotspot" placeholder="Wi-Fi Hotspot">
                  <input type="text" name="nfc" placeholder="NFC">
                  <input type="text" name="usb" placeholder="USB Connectivity">
                  <input type="text" name="edge" placeholder="EDGE">
                  <input type="text" name="audio" placeholder="Audio Jack*" required>
                  <input type="text" name="map" placeholder="Map Support">
                  
                  <h3>Multimedia Features</h3>
                  <input type="text" name="audio_format" placeholder="Audio Formats">
                  <input type="text" name="video_format" placeholder="Video Formats">
                  
                  <h3>Battery &amp; Power Features</h3>
                  <input type="text" name="battery_type" placeholder="Battery Type*" required>
                  <input type="number" step="50" name="battery" placeholder="Battery Capacity*" required>
                  
                  <h3>Dimensions</h3>
                  <input type="number" step="0.01" name="height" placeholder="Height(cm)">
                  <input type="number" step="0.01" name="width" placeholder="Width(cm)">
                  <input type="number" step="0.01" name="depth" placeholder="Depth(cm)">
                  <input type="number" step="0.01" name="weight" placeholder="Weight(g)">
                  
                  <h3>Other Details</h3>
                  <input type="text" name="smartphone" placeholder="Smartphone*" required>
                  <input type="text" name="touch_type" placeholder="Touchscreen Type">
                  <input type="text" name="sim_size" placeholder="SIM Size">
                  <input type="text" name="ui" placeholder="User Interface(UI)">
                  <input type="text" name="graphics" placeholder="Graphics PPI">
                  <input type="text" name="sensors" placeholder="Sensors*" required>
                  <input type="text" name="other" placeholder="Other Features">
                  
                  <h3>Warranty</h3>
                  <input type="text" name="warranty" placeholder="Warranty Summary*" required>
                  <input type="text" name="domestic" placeholder="Domestic Warranty*" required>
                  <h3>KeyWords</h3>
                  <note>Note : <noteval>Keywords are very Important, It helps customers to find your product Easily. And may Help You in increasing your sale.</noteval></note>
                  <br>
                  <textarea name="keywords" class="text" placeholder="Mobile, mobile with 4500 mah battery, 5G mobile, mobiles with 48MP camera..." cols="30" rows="10"></textarea><count><val>0</val>/2500</count>
                  
                </div>

                <div class="Form EntryField grid prod dns hdn">
                  <h3>Additional Specification : </h3>
                  <div>
                    <div class="spf">
                    
                    </div>
                    <div class="btn">
                      <button class="more" type="button">+More</button>
                    </div>
                  </div>
                  <div class="btn" style="width:200%; display:grid;grid-template-columns: repeat(2,1fr);" id="bt">
                  <button type="reset" class="reset" style="display: none;"></button>
                  <a href="./seller profile.php">
                        <button type="button" style="background: #f00; color: #fff;margin-right: 2rem; text-shadow: 0 0 5px #000;">Cancel</button>
                  </a>
                  <input type="hidden" name="page" value="add products.php">
                  <button style="width: fit-content;" type="submit">Sell Product</button> 
                    
                </div>
                </div>
            </form>
          </div>
 
        </div>
      <?php
        }
      ?>
      
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
  <script src="./js/Jquery.js"></script>
  <script>
    var select = document.querySelector('select')
    var hdn = document.querySelector('hdn')
    var n = document.querySelectorAll('.hiden')
    var inp = document.querySelectorAll('input')
    for(i=0; i<inp.length; i++){
      plc = inp[i].placeholder
      if(plc[plc.length - 1] == "*"){
        inp[i].setAttribute('class','place')
      }
    }
    var more = document.querySelector('.more');
    var spf = document.querySelector('.spf')
    var count = <?php echo $m;?>;
    document.onclick = (e)=>{
      if(e.target.classList == "more"){
        var keys = document.querySelectorAll(".key");
        var values = document.querySelectorAll(".value");
        spf.innerHTML+='<input required type="text" name="key[]" placeholder="Specification Title" class="key k'+count+'">\
          <input type="text" required name="value[]" placeholder="About It" class="value v'+count+'">\
          <button title="Remove" style="background: #f00; cursor:pointer; border-radius:50%;height:2.5rem;width:2.5rem; color:#fff; margin-left: 3rem;" class="cancel'+count+'" type="button">X</button>'
        count = count + 1
        var new_keys = document.querySelectorAll(".key")
        var new_values = document.querySelectorAll(".value")
        for(i=0; i<keys.length; i++){
          new_keys[i].value = keys[i].value
          new_values[i].value = values[i].value
        }
      }
      else{
        for(i=0; i<count; i++){
          if(e.target.classList == "cancel"+i){
            document.querySelector('.k'+i).remove()
            document.querySelector('.v'+i).remove()
            document.querySelector('.cancel'+i).remove()
          }
        }
      }
    }
    document.getElementById('discount').oninput = document.getElementById('org_price').oninput = function(){
    org_price = parseInt(document.getElementById('org_price').value);
    discount = parseFloat(document.getElementById('discount').value);
    price = parseInt((org_price-(org_price*discount)/100));
    document.getElementById('price').value = price;
    if(parseInt(document.getElementById('org_price').value) < 1){
      alert("You Can't give price less than ₹1");
      document.getElementById('org_price').value = 1;
    }
    if(parseInt(document.getElementById('discount').value) < 0){
      alert("You Can't give discount less than 0%")
      document.getElementById('discount').value = 0;
    }
    if(parseInt(document.getElementById('discount').value) > 90){
      alert("You Can only give discount Upto 90%")
      document.getElementById('discount').value = 90;
    }
    if(parseInt(document.getElementById('price').value) < 1){
      alert("You Can't give price less than ₹1");
      document.getElementById('price').value = 1;
      document.getElementById('discount').value = 0;
      document.getElementById('max_dis').value = 0;
      document.getElementById('org_price').value = 1;
    }
    }
    document.getElementById('max_dis').oninput = ()=>{
    if(parseInt(document.getElementById('max_dis').value)>90){
      alert('You can Only give Upto 90% Discount');
      document.getElementById('max_dis').value=90;
    }
    if(parseInt(document.getElementById('max_dis').value)<parseInt(document.getElementById('discount').value)){
      alert('Maximum discount Must be Equal or More than Discount');
      document.getElementById('discount').value = parseInt(document.getElementById('max_dis').value)
    }
    if(parseInt(document.getElementById('max_dis').value) < 0){
      alert("Maximum Discount Limit can't be less than 0%")
    }
    }
    document.getElementById('price').oninput = ()=>{
    if(parseInt(document.getElementById('price').value) > price+9 ||parseInt(document.getElementById('price').value) < price-9){
    alert('You can Only add or remove ₹9 from Discounted Price.\n You can use up or down Arrow keys to add or remove ₹9.');
    document.getElementById('price').value=price;
    }
    }
      document.getElementById('quantity').oninput = ()=>{
      if(parseInt(document.getElementById('quantity').value) < 1){
          alert("You have to sell Atleast a Single quantity of Product");
          document.getElementById('quantity').value = 1;
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
   <script>
    var select = document.querySelector('select')
    var hdn = document.querySelector('hdn')
    var n = document.querySelectorAll('.hiden')
    var inp = document.querySelectorAll('input')
    for(i=0; i<inp.length; i++){
      plc = inp[i].placeholder
      if(plc[plc.length - 1] == "*"){
        inp[i].setAttribute('class','place')
      }
    }

    document.onreadystatechange = ()=>{
      if(select.value != "mobiles"){
        for(i=0; i<n.length; i++){
          n[i].style.display = "none"
          hdn.style.display = "none"
        }
      }
      else{
        for(i=0; i<n.length; i++){
          n[i].style.display = "block"
          hdn.style.display = "grid"
        }
      }
    }
    var more = document.querySelector('.more');
    var spf = document.querySelector('.spf')
    var count = 0;
    document.onclick = (e)=>{
      if(e.target.localName == "select"){
        if(select.value != "mobiles"){
        for(i=0; i<n.length; i++){
          n[i].style.display = "none"
          hdn.style.display = "none"
        }
      }
      else{
        for(i=0; i<n.length; i++){
          n[i].style.display = "block"
          hdn.style.display = "grid"
        }
      }
      }
      if(e.target.classList == "more"){
        var keys = document.querySelectorAll(".key");
        var values = document.querySelectorAll(".value");
        spf.innerHTML+='<input required type="text" name="key[]" placeholder="Specification Title" class="key k'+count+'">\
          <input type="text" required name="value[]" placeholder="About It" class="value v'+count+'">\
          <button title="Remove" style="background: #f00; cursor:pointer; border-radius:50%;height:2.5rem;width:2.5rem; color:#fff; margin-left: 3rem;" class="cancel'+count+'" type="button">X</button>'
        count = count + 1
        var new_keys = document.querySelectorAll(".key")
        var new_values = document.querySelectorAll(".value")
        for(i=0; i<keys.length; i++){
          new_keys[i].value = keys[i].value
          new_values[i].value = values[i].value
        }
      }
      else{
        for(i=0; i<count; i++){
          if(e.target.classList == "cancel"+i){
            document.querySelector('.k'+i).remove()
            document.querySelector('.v'+i).remove()
            document.querySelector('.cancel'+i).remove()
          }
        }
      }
    }
  </script>
</body>

</html>