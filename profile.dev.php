
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
                <div class="search s1"><i class="bx bx-search srch2"></i></div>
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
      <div class="ContainerFlex">
        <div class="LeftContainer">
            <div class="Details">
                <div class="P">
                </div>
            </div>

        </div>
        <div class="RightContainer">
          <div class="Details">
            <div class="Email">
              <h1>Personal Information</h1><edit>Edit</edit>
            </div>
            <form action="./sign_up.php" class="b" method="post">
                <div class="EntryField grid gdp">
                    <?php 
                        if(isset($_COOKIE['name'])){
                    ?>
                        <div class="INFO user"><h1><?php echo $_COOKIE['name'];?></h1></div>
                    <?php
                        }
                        else{
                    ?>
                        <div class="INFO user"><h1>User</h1></div>
                    <?php 
                        }
                        if(isset($_COOKIE['address'])){
                    ?>
                        <div class="INFO address"><h1><?php echo $_COOKIE['address'];?></h1></div>
                    <?php
                        }
                        if(isset($_COOKIE['pincode'])){
                    ?>
                        <div class="INFO pin"><h1><?php echo $_COOKIE['pincode'];?></h1></div>
                    <?php
                        }
                    ?>
                </div>
            </form>
            <!--<gender>
              <h1>Your Gender</h1>
              <input type="radio" checked name="gender" value="male" id="male">
              <label for="male">Male</label>
              <input type="radio" name="gender" value="female" id="female">
              <label for="female">Female</label>
              <input type="radio" name="gender" value="trans" id="trans">
              <label for="trans">TransGender</label>
            </gender>-->
            <div class="Email">
              <h1>Email Address</h1><edit>Edit</edit><pass>Change Password</pass>
            </div>
            <form action="./sign_up.php" class="b" method="post">
                <div class="EntryField grid gdp">
                <div class="INFO email"><h1><?php echo $_COOKIE['email'];?></h1></div>
                </div>
            </form>
            <div class="Email">
              <h1>Mobile Number</h1><edit>Edit</edit>
            </div>
            <form action="./sign_up.php" class="b" method="post">
                <div class="EntryField grid gdp">
                <div class="INFO mobile"><h1><?php echo $_COOKIE['mobile'];?></h1></div>
                </div>
            </form>
        
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
                <a href="deactivate.php"><edit class="deactivate">Deactivate Account</edit></a>
              </div>
            </div>
          </div>
        </div>
      </div>
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
            var req = 0
            var address = document.querySelector('.address');
            var user = document.querySelector('.user');
            var pin = document.querySelector('.pin');
            var edit = document.querySelectorAll('edit');
            var field = document.querySelectorAll('.EntryField');
            var search_bar = document.querySelector('.search')
            var email = document.querySelector('.email');
            var mobile = document.querySelector('.mobile');
            var img = document.querySelector('.pro-image');
            var input_field = document.querySelector('.image-file');
            var sub_btn = document.querySelector('.sub-btn');
            var edit = document.querySelectorAll('edit');
            var field = document.querySelectorAll('.EntryField');
            document.onclick = (e)=>{
                console.log(e)
                
                if(e.target.classList == "cancel"){
                    document.querySelectorAll('.gdp')[0].innerHTML = '<div class="INFO user"><h1><?php echo $_COOKIE["name"];?></h1></div>\
                    <div class="INFO address"><h1><?php echo $_COOKIE["address"];?></h1></div>\
                    <div class="INFO pin"><h1><?php echo $_COOKIE["pincode"];?></h1></div>'
                    document.querySelectorAll('.gdp')[1].innerHTML = '<div class="INFO email"><h1><?php echo $_COOKIE["email"];?></h1></div>'
                    document.querySelectorAll('.gdp')[2].innerHTML = '<div class="INFO mobile"><h1><?php echo $_COOKIE["mobile"];?></h1></div>'
                    
                    m=0
                    z=0
                    n=0
                }
              if(e.target.classList == "bx bx-menu-alt-left"){

                document.querySelector('.main-navigation').setAttribute('class','main-navigation show')
              }
              else{
                if(!("sort-by" == e.target.classList) && !(e.target.localName == "li") && !(e.target.localName == "i") && !(e.target.classList == "search-field") && !(e.target.localName == "s1") && !(e.target.localName == "srch2")){
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

              if(e.target.classList == "bx" || e.target.classList == "bx bx-search" || e.target.classList == "search-field" || e.target.classList == "bx bx-search srch2"){
                if(req == 0){
                  if(window.innerWidth > 886){
                    search_bar.innerHTML = '<form action="./product.php" method="get"><div class="srch"><input type="text" name="query" placeholder="Search" autocomplete="off" class="search-field" /><i class="bx bx-search" style="display: inline;" id="srch"></i></div><button type="submit" class="srch-btn" style="display:none;"></button></form>'
                    document.querySelector('.cart-item-count').style.marginLeft="5.3rem"
                    document.querySelector('.search-field').click()
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
                z=0
                n=0
                m=0
              
                document.querySelector('pass').onclick = ()=>{
                document.querySelectorAll('.gdp')[1].innerHTML += '<div class="btn" id="bt">\
                                <input type="text" name="cpass" placeholder="Enter Current Password">\
                                <input type="text" name="npass" placeholder="Enter New Password">\
                                <input type="text" name="conpass" placeholder="Confirm Password">\
                                <button type="submit">Save</button>\
                                <button style="background: #f00; color:#fff; margin-left: 3rem;" class="cancel" type="button">X</button>\
                            </div>';
                            n=1
                }
                edit[0].onclick = ()=>{
                if(n==0 && z==0 && m==0){
                    
                    user.innerHTML = '<input type="text" name="name" placeholder="User Name" required value="<?php echo $_COOKIE['name'];?>">'
                    user.style.border = "none"
                    pin.innerHTML = '<input type="text" name="pincode" style="display:block;" placeholder="Pincode" required value="<?php echo $_COOKIE['pincode'];?>">'
                    pin.style.display="block"
                    pin.style.border= "none"
                    address.innerHTML = '<input type="text" name="address" style="display:block;" placeholder="Your Address" required value="<?php echo $_COOKIE['address'];?>">'
                    address.style.border= "none"
                    address.style.display="block"
                    document.querySelectorAll('.gdp')[0].innerHTML += '<div class="btn" id="bt">\
                                <input type="hidden" name="page" value="profile update">\
                                <input type="hidden" name="type" value="name">\
                                <button type="submit">Save</button>\
                                <button style="background: #f00; color:#fff; margin-left: 3rem;" class="cancel" type="button">X</button>\
                            </div>';
                    z=1
                }
                }
                edit[1].onclick = ()=>{
                if(z==0 && n==0 && m==0){
                    
                    
                    email.innerHTML = '<input type="email" name="email" required placeholder="Enter Your new Email" value="<?php echo $_COOKIE["email"];?>">'
                    email.style.border = "none"
                    document.querySelectorAll('.gdp')[1].innerHTML += '<div class="btn" id="bt">\
                                <input type="hidden" name="page" value="profile update">\
                                <input type="hidden" name="type" value="email">\
                                <button type="submit">Save</button>\
                                <button style="background: #f00; color:#fff; margin-left: 3rem;" class="cancel" type="button">X</button>\
                            </div>';
                    n=1
                }
              }
              edit[2].onclick = (e)=>{
                if(z==0 && n==0 && m==0){
                    
                    
                    mobile.innerHTML = '<input type="number" name="mobile" required placeholder="Enter Your new Mobile Number" value="<?php echo $_COOKIE["mobile"];?>">'
                    mobile.style.border = "none"
                    document.querySelectorAll('.gdp')[2].innerHTML += '<div class="btn" id="bt">\
                                <input type="hidden" name="page" value="profile update">\
                                <input type="hidden" name="type" value="mobile">\
                                <button type="submit">Save</button>\
                                <button style="background: #f00; color:#fff; margin-left: 3rem;" class="cancel" type="button">X</button>\
                            </div>';
                    m=1
                }
              }
               
                      
                      img.onclick = ()=>{input_field.click()}
                      input_field.oninput = ()=>{
                        document.querySelector('.image-sub-btn').click()
                      }
                    </script>
                    <script>
                z=0
                n=0
                m=0
              
                document.querySelector('pass').onclick = ()=>{
                document.querySelectorAll('.gdp')[1].innerHTML += '<div class="btn" id="bt">\
                                <input type="text" name="cpass" placeholder="Enter Current Password">\
                                <input type="text" name="npass" placeholder="Enter New Password">\
                                <input type="text" name="conpass" placeholder="Confirm Password">\
                                <button type="submit">Save</button>\
                                <button style="background: #f00; color:#fff; margin-left: 3rem;" class="cancel" type="button">X</button>\
                            </div>';
                            n=1
                }
                edit[0].onclick = ()=>{
                if(n==0 && z==0 && m==0){
                    var address = document.querySelector('.address');
                    var user = document.querySelector('.user');
                    var pin = document.querySelector('.pin');
                    user.innerHTML = '<input type="text" name="name" placeholder="User Name" required value="<?php echo $_COOKIE['name'];?>">'
                    user.style.border = "none"
                    pin.innerHTML = '<input type="text" name="pincode" placeholder="Pincode" required value="<?php echo $_COOKIE['pincode'];?>">'
                    pin.style.border= "none"
                    address.innerHTML = '<input type="text" name="address" placeholder="Your Address" required value="<?php echo $_COOKIE['address'];?>">'
                    address.style.border= "none"
                    document.querySelectorAll('.gdp')[0].innerHTML += '<div class="btn" id="bt">\
                                <input type="hidden" name="page" value="profile update">\
                                <input type="hidden" name="type" value="name">\
                                <button type="submit">Save</button>\
                                <button style="background: #f00; color:#fff; margin-left: 3rem;" class="cancel" type="button">X</button>\
                            </div>';
                    z=1
                }
                }
                edit[1].onclick = ()=>{
                if(z==0 && n==0 && m==0){
                    
                    var email = document.querySelector('.email');
                    email.innerHTML = '<input type="email" name="email" required placeholder="Enter Your new Email" value="<?php echo $_COOKIE["email"];?>">'
                    email.style.border = "none"
                    document.querySelectorAll('.gdp')[1].innerHTML += '<div class="btn" id="bt">\
                                <input type="hidden" name="page" value="profile update">\
                                <input type="hidden" name="type" value="email">\
                                <button type="submit">Save</button>\
                                <button style="background: #f00; color:#fff; margin-left: 3rem;" class="cancel" type="button">X</button>\
                            </div>';
                    n=1
                }
              }
              edit[2].onclick = (e)=>{
                if(z==0 && n==0 && m==0){
                    var mobile = document.querySelector('.mobile');
                    
                    mobile.innerHTML = '<input type="number" name="mobile" required placeholder="Enter Your new Mobile Number" value="<?php echo $_COOKIE["mobile"];?>">'
                    mobile.style.border = "none"
                    document.querySelectorAll('.gdp')[2].innerHTML += '<div class="btn" id="bt">\
                                <input type="hidden" name="page" value="profile update">\
                                <input type="hidden" name="type" value="mobile">\
                                <button type="submit">Save</button>\
                                <button style="background: #f00; color:#fff; margin-left: 3rem;" class="cancel" type="button">X</button>\
                            </div>';
                    m=1
                }
              }
    </script>
</body>

</html>