<?php
    // These are Global variable
    $pass = "Gajender8";
    $user = "epiz_31213404";
    $host = "sql108.epizy.com";
    if(isset($_POST['page'])){
        $page = $_POST["page"];
    }
    else{
        $page = $_GET['page'];
    }

    // This is for Sign Up Page
    if($page == "sign up.php"){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $mobile = $_POST['mobile'];
        $mobile = strval($mobile);
        $conn = new mysqli($host,$user,$pass,"epiz_31213404_customers");
        if($conn -> connect_error){
            echo "Couldn't Connect to Server";
        }
        else{
            $sql = "SELECT * FROM profile where lower(cust_email) = lower('$email')";
            $row = $conn -> query($sql);
            if($row -> num_rows>0){
                header('location: ./login.php');
                die();
            }
            $sql = "INSERT INTO profile (cust_name, cust_email, cust_pass, cust_mobile) VALUES ('$name', '$email', '$password', '$mobile')";
            if($row = $conn -> query($sql)){
                $sql = "SELECT * FROM profile where lower(cust_email) = lower('$email')";
                $row = $conn -> query($sql);
                if($row -> num_rows>0){
                    while($data = $row -> fetch_assoc()){
                        setcookie('id',$data['cust_id'],time()+60*60*24*365);
                        setcookie('name',$data['cust_name'],time()+60*60*24*365);
                        setcookie('email',$data['cust_email'],time()+60*60*24*365);
                        setcookie('mobile',$data['cust_mobile'],time()+60*60*24*365);
                        header('location: ./');
                        die();
                    }
                }
            }
            else{
                echo "Technical ISSUEd";
                echo $sql;
            }
        }
    }
    elseif($page == "login.php"){
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $conn = new mysqli($host,$user,$pass,"epiz_31213404_customers");
        if($conn -> connect_error){
            echo "Couldn't Connect to Server";
        } 
        else{
            $sql = "SELECT * FROM profile where lower(cust_email) = lower('$email') and cust_pass='$password'";
            $row = $conn -> query($sql);
            if($row -> num_rows > 0){
                while($data = $row -> fetch_assoc()){
                    setcookie('id',$data['cust_id'],time()+60*60*24*365);
                    setcookie('name',$data['cust_name'],time()+60*60*24*365);
                    setcookie('email',$data['cust_email'],time()+60*60*24*365);
                    setcookie('mobile',$data['cust_mobile'],time()+60*60*24*365);
                    if($data['cust_pic'] != null){
                        setcookie('image',$data['cust_pic'],time()+60*60*24*365);
                    }
                    $sql = "SELECT * FROM seller_account, profile where lower(seller_email) = lower(cust_email) and seller_password = cust_pass";
                    $row = $conn -> query($sql);
                    if($row -> num_rows > 0){
                        while($data2 = $row -> fetch_assoc()){
                            setcookie('seller_email',$data2['seller_email'],time()+60*60*24*365);
                            setcookie('account',$data2['seller_account_num'],time()+60*60*24*365);
                            setcookie('aadhaar',$data2['seller_aadhaar'],time()+60*60*24*365);
                            setcookie('address',$data2['seller_address'],time()+60*60*24*365);
                            setcookie('pincode',$data2['seller_pincode'],time()+60*60*24*365);
                            setcookie('pan',$data2['seller_pan'],time()+60*60*24*365);
                            header('location:./');
                            die();
                        }
                    }
                header('location:./');
                die();
                    
                }
            }
            else{
                header('location:sign up.php');
                die();
            }
        }
    }
    elseif ($page == "seller account.php") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $account = $_POST['account'];
        $pan = $_POST['pan'];
        $aadhaar = $_POST['aadhaar'];
        $address = $_POST['address'];
        $pincode = $_POST['pincode'];
        $conn = new mysqli($host, $user, $pass, "epiz_31213404_customers");
        if($conn -> connect_error){
            echo "Technical Error Occuring";
        }
        else{
            $sql = "SELECT cust_email FROM profile where lower(cust_email) = lower('$email') and cust_pass = '$password'";
            $prepare = $conn -> query($sql);
            if($prepare -> num_rows == 1){
                $sql = "SELECT seller_email FROM seller_account where lower(seller_email) = lower('$email') and seller_password = '$password'";
                $prepare = $conn -> query($sql);
                if($prepare -> num_rows == 1){
                    header('location: ./seller profile.php');
                }
                else{    
                $sql = "INSERT INTO seller_account (seller_email, seller_password, seller_account_num, seller_pan, seller_aadhaar, seller_address, seller_pincode) VALUES ('".$email."', '".$password."', $account, '".$pan."', $aadhaar, '".$address."', $pincode)";
                if($prepare = $conn -> query($sql)){
                    setcookie('seller_email',$email,time()+60*60*24*365);
                    setcookie('account',$account,time()+60*60*24*365);
                    setcookie('aadhaar',$aadhaar,time()+60*60*24*365);
                    setcookie('address',$address,time()+60*60*24*365);
                    setcookie('pincode',$pincode,time()+60*60*24*365);
                    setcookie('pan',$pan,time()+60*60*24*365);
                    header('location: ./seller profile.php');
                }
                else{
                    header('location: ./seller account.php');
                }
            }
            }
            else{
                header('location: ./sign up.php');
            }
        }
    }
    elseif($page == 'profile.php/profile image'){
        $img = $_FILES['profile_image'];
        $file_tmp = $img['tmp_name'];
        $file_size = $img['size'];
        $file_name = $img['name'];
        $file_ext = explode(".",$file_name);
        $original_ext = strtolower(end($file_ext));
        $allowed_file_type = array('jpg', 'jpeg', 'png');
        $conn =  new mysqli($host, $user, $pass, "epiz_31213404_customers");
        if($conn -> connect_error){
            echo "Technical Error";
        }
        else{
            if($img != null){
                if(in_array($original_ext,$allowed_file_type)){
                    if($file_size <= 1048576*5){
                        if(file_exists("./".$_COOKIE['email']."")){
                            if(move_uploaded_file($file_tmp,"./".$_COOKIE['email']."/Profile Image.".$original_ext)){
                                $sql = "UPDATE profile SET cust_pic = './".$_COOKIE['email']."/Profile Image.".$original_ext."' where cust_email = '".$_COOKIE['email']."'";
                                if($conn -> query($sql)){
                                    setcookie('image',"./".$_COOKIE['email']."/Profile Image.".$original_ext,time()+60*60*24*365);
                                    header('location: ./profile.php');
                                }
                                else{
                                    header('location: ./profile.php');
                                }
                            }
                            else{
                                header('location: ./profile.php');
                            }
                        }
                        else{
                            mkdir($_COOKIE['email']);
                            if(move_uploaded_file($file_tmp,"./".$_COOKIE['email']."/Profile Image.".$original_ext)){
                                setcookie('image',"./".$_COOKIE['email']."/Profile Image.".$original_ext,time()+60*60*24*365);
                                header('location: ./profile.php');
                            }
                            else{
                                header('location: ./profile.php');
                            }
                        }
                    }
                    else{
                        echo "Image size is too big";
                        header("location: ./profile.php");
                    }
                }
                else{
                    header('location:./profile.php');
                }
            }
            else{
                header('location: ./profile.php');
            }
        }
    }
    elseif($page == 'profile update'){
        $conn = new mysqli($host, $user, $pass, 'epiz_31213404_customers');
        if($conn -> connect_error){
            echo "Technical Problem Occur";
            header('location: ./profile.php');
        }
        else{
            $type = $_POST['type'];
            if($type == "name"){
                $name = $_POST['name'];
                $address = $_POST['address'];
                $pincode = $_POST['pincode'];
                $sql = "UPDATE profile set cust_name='$name', address='$address', pincode=$pincode where cust_email='".$_COOKIE['email']."'";
                if($conn -> query($sql)){
                    setcookie('name',$name,time()+60*60*24*365);
                    setcookie('address',$address,time()+60*60*24*365);
                    setcookie('pincode',$pincode,time()+60*60*24*365);
                    header('location: ./profile.php');
                }
                else{
                    echo "An error Occured";
                    header('location: ./profile.php');
                }
            }
            elseif($type == "email"){
                $email = $_POST['email'];
                $sql = "SELECT cust_email FROM profile where cust_email='$email'";
                $prepare = $conn -> query($sql);
                if($prepare -> num_rows > 0){
                    echo "$email is already Exists";
                    header('location: ./profile.php');
                }
                else{
                    $sql = "UPDATE profile set cust_email='$email' where cust_email='".$_COOKIE['email']."'";
                    if($conn -> query($sql)){
                        setcookie('email', $email, time()+60*60*24*365);
                        header('location: ./profile.php');
                    }
                    else{
                        echo "An Error Occured";
                        header('location: ./profile.php');
                    }
                }
            }
            else{
                $mobile = $_POST['mobile'];
                $sql = "SELECT cust_email FROM profile where cust_mobile= $mobile or alter_mobile=$mobile";
                $prepare = $conn -> query($sql);
                if($prepare -> num_rows > 0){
                    echo "$email is already Exists";
                    header('location: ./profile.php');
                }
                else{
                    $sql = "UPDATE profile set cust_mobile='$mobile' where cust_email='".$_COOKIE['email']."'";
                    if($conn -> query($sql)){
                        setcookie('mobile', $mobile, time()+60*60*24*365);
                        header('location: ./profile.php');
                    }
                    else{
                        echo "An Error Occured";
                        header('location: ./profile.php');
                    }
                }
            }
        }
    }
    elseif($page == 'add products.php' || $page == './update products.php'){
        $images = $_FILES['productimages'];
        $prod_name = $_POST['name'];
        $org_price = $_POST['org_price'];
        $max_discount = $_POST['max_discount'];
        $discount = $_POST['discount'];
        $discount_price = $_POST['discount_price'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];
        $catagory = $_POST['catagory'];
        $name = $images['name'];
        $size = $images['size'];
        $temp = $images['tmp_name'];
        if($page == './update products.php'){
            $id = $_POST['prod_id'];
            $length = sizeof($images['size']);
            $z=0;
            if($length <= 0){
                header('location: ./seller profile.php');
                die();
            }
            for($i=0; $i<$length; $i++){
                $temp_ext = explode(".",$name[$i]);
                $original_ext = strtolower(end($temp_ext));
                $allowed_file_type = array("jpg", "jpeg", "png", "webp");
                if(!in_array($original_ext, $allowed_file_type)){
                    header('location: ./seller profile.php');
                }
                if($size[$i] <= 1048576*5){
                    $ok = 1;
                }
                else{
                    echo "maximum file size is 5 MB";
                    header("location: ./seller profile.php");
                }
            }
            $conn = new mysqli($host, $user, $pass, "epiz_31213404_customers");
            if($conn -> connect_error){
                echo "Technical Problem Occured";
                header('location: ./');
            }
            else{
                if(file_exists($_COOKIE['email'])){
                    $exists = "True";
                }
                else{
                    $exists = "False";
                    mkdir("./".$_COOKIE['email']."");
                }
                $sql = "SELECT * FROM product WHERE lower(seller_email)='".$_COOKIE['email']."' AND prod_id=$id";
                if($prod = $conn -> query($sql)){
                    if($prod -> num_rows > 0)
                        $brand = $_POST['brand'];
                        $prod_type = $_POST['type'];
                        $box = $_POST['box'];
                        $model_name = $_POST['model_name'];
                        $sim = $_POST['sim'];
                        $touch = $_POST['touch'];
                        $size = $_POST['size'];
                        $resolution_type = $_POST['resolution_type'];
                        $display = $_POST['display'];
                        $os = $_POST['os'];
                        $core = $_POST['core'];
                        $clock = $_POST['clock'];
                        $ram = $_POST['ram'];
                        $storage = $_POST['storage'];
                        $memory = $_POST['memory'];
                        $card = $_POST['card'];
                        $primary_camera = $_POST['primary_camera'];
                        $secondary_camera = $_POST['secondary_camera'];
                        $flash = $_POST['flash'];
                        $video = $_POST['video'];
                        $network = $_POST['network'];
                        $bluetooth = $_POST['bluetooth'];
                        $wifi = $_POST['wifi'];
                        $audio = $_POST['audio'];
                        $battery_type = $_POST['battery_type'];
                        $battery = $_POST['battery'];
                        $smartphone = $_POST['smartphone'];
                        $sensors = $_POST['sensors'];
                        $warranty = $_POST['warranty'];
                        $domestic = $_POST['domestic'];
                        if(isset($_POST['model_num'])){
                            $model_num = $_POST['model_num'];
                        }
                        else{
                            $model_num = null;
                        }
                        if(isset($_POST['color'])){
                            $color = $_POST['color'];
                        }
                        else{
                            $color = null;
                        }
                        if(isset($_POST['browser'])){
                            $browser = $_POST['browser'];
                        }
                        else{
                            $browser = null;
                        }
                        if(isset($_POST['sim_slot'])){
                            $sim_slot = $_POST['sim_slot'];
                        }
                        else{
                            $sim_slot = null;
                        }
                        if(isset($_POST['otg'])){
                            $otg = $_POST['otg'];
                        }
                        else{
                            $otg = null;
                        }
                        if(isset($_POST['sound'])){
                            $sound = $_POST['sound'];
                        }
                        else{
                            $sound = null;
                        }
                        if(isset($_POST['resolution'])){
                            $resolution = $_POST['resolution'];
                        }
                        else{
                            $resolution = null;
                        }
                        if(isset($_POST['gpu'])){
                            $gpu = $_POST['gpu'];
                        }
                        else{
                            $gpu = null;
                        }
                        if(isset($_POST['display_type'])){
                            $display_type = $_POST['display_type'];
                        }
                        else{
                            $display_type = null;
                        }
                        if(isset($_POST['display_feature'])){
                            $display_feature = $_POST['display_feature'];
                        }
                        else{
                            $display_feature = null;
                        }
                        if(isset($_POST['processor'])){
                            $processor = $_POST['processor'];
                        }
                        else{
                            $processor = null;
                        }
                        if(isset($_POST['of'])){
                            $of = $_POST['of'];
                        }
                        else{
                            $of = null;
                        }
                        if(isset($_POST['p_cam_features'])){
                            $p_cam_features = $_POST['p_cam_features'];
                        }
                        else{
                            $p_cam_features = null;
                        }
                        if(isset($_POST['s_cam_features'])){
                            $s_cam_features = $_POST['s_cam_features'];
                        }
                        else{
                            $s_cam_features = null;
                        }
                        if(isset($_POST['zoom'])){
                            $zoom = $_POST['zoom'];
                        }
                        else{
                            $zoom = null;
                        }
                        if(isset($_POST['frame'])){
                            $frame = $_POST['frame'];
                        }
                        else{
                            $frame = null;
                        }
                        if(isset($_POST['lens'])){
                            $lens = $_POST['lens'];
                        }
                        else{
                            $lens = null;
                        }
                        if(isset($_POST['network_support'])){
                            $network_support = $_POST['network_support'];
                        }
                        else{
                            $network_support = null;
                        }
                        if(isset($_POST['internet'])){
                            $internet = $_POST['internet'];
                        }
                        else{
                            $internet = null;
                        }
                        if(isset($_POST['gprs'])){
                            $gprs = $_POST['gprs'];
                        }
                        else{
                            $gprs = null;
                        }
                        if(isset($_POST['hotspot'])){
                            $hotspot = $_POST['hotspot'];
                        }
                        else{
                            $hotspot = null;
                        }
                        if(isset($_POST['nfc'])){
                            $nfc = $_POST['nfc'];
                        }
                        else{
                            $nfc = null;
                        }
                        if(isset($_POST['usb'])){
                            $usb = $_POST['usb'];
                        }
                        else{
                            $usb = null;
                        }
                        if(isset($_POST['edge'])){
                            $edge = $_POST['edge'];
                        }
                        else{
                            $edge = null;
                        }
                        if(isset($_POST['map'])){
                            $map = $_POST['map'];
                        }
                        else{
                            $map = null;
                        }
                        if(isset($_POST['audio_format'])){
                            $audio_format = $_POST['audio_format'];
                        }
                        else{
                            $audio_format = null;
                        }
                        if(isset($_POST['video_format'])){
                            $video_format = $_POST['video_format'];
                        }
                        else{
                            $video_format = null;
                        }
                        if(isset($_POST['height'])){
                            if($_POST['height'] == null){
                                $height = 0;
                            }
                            else{
                                $height = $_POST['height'];
                            }
                        }
                        else{
                            $height = 0;
                        }
                        if(isset($_POST['width'])){
                            if($_POST['width'] == null){
                                $width = 0;
                            }
                            else{
                                $width = $_POST['width'];
                            }
                        }
                        else{
                            $width = 0;
                        }
                        if(isset($_POST['depth'])){
                            if($_POST['depth'] == null){
                                $depth = 0;
                            }
                            else{
                                $depth = $_POST['depth'];
                            }
                        }
                        else{
                            $depth = 0;
                        }
                        if(isset($_POST['weight'])){
                            if($_POST['weight'] == null){
                                $weight = 0;
                            }
                            else{
                                $weight = $_POST['weight'];
                            }
                        }
                        else{
                            $weight = 0;
                        }
                        if(isset($_POST['touch_type'])){
                            $touch_type = $_POST['touch_type'];
                        }
                        else{
                            $touch_type = null;
                        }
                        if(isset($_POST['sim_size'])){
                            $sim_size = $_POST['sim_size'];
                        }
                        else{
                            $sim_size = null;
                        }
                        if(isset($_POST['ui'])){
                            $ui = $_POST['ui'];
                        }
                        else{
                            $ui = null;
                        }
                        if(isset($_POST['graphics'])){
                            $graphics = $_POST['graphics'];
                        }
                        else{
                            $graphics = null;
                        }
                        if(isset($_POST['other'])){
                            $other = $_POST['other'];
                        }
                        else{
                            $other = null;
                        }
                        if(isset($_POST['keywords'])){
                            $keywords = $_POST['keywords'];
                        }
                        else{
                            $keywords = null;
                        }
                        
                        
                        $update = "UPDATE product SET 
                            prod_name = '$prod_name', 
                            prod_org_price = $org_price, 
                            prod_dis_price = $discount_price, 
                            max_discount = $max_discount, 
                            prod_discount = $discount, 
                            prod_quantity = $quantity, 
                            prod_description = '$description', 
                            catagory = '$catagory',
                            prod_type = '$prod_type',
                            brand = '$brand', 
                            box = '$box',
                            model_name = '$model_name',
                            sim = '$sim',
                            touch = '$touch',
                            size = $size,
                            resolution_type = '$resolution_type',
                            display = '$display',
                            os = '$os',
                            core = '$core',
                            clock = $clock,
                            storage = $storage,
                            ram = $ram,
                            memory = $memory,
                            card = '$card',
                            primary_camera = '$primary_camera',
                            secondary_camera = '$secondary_camera',
                            flash = '$flash',
                            video = '$video',
                            network = '$network',
                            bluetooth = '$bluetooth',
                            wifi = '$wifi',
                            audio = '$audio',
                            battery_type = '$battery_type',
                            battery = $battery,
                            smartphone = '$smartphone',
                            sensors = '$sensors',
                            warranty = '$warranty',
                            domestic = '$domestic',
                            model_num = '$model_num',
                            color = '$color',
                            browser = '$browser',
                            sim_slot = '$sim_slot',
                            otg = '$otg',
                            sound = '$sound',
                            resolution = '$resolution',
                            gpu = '$gpu',
                            display_type = '$display_type',
                            display_feature = '$display_feature',
                            processor = '$processor',
                            of = '$of',
                            p_cam_features = '$p_cam_features',
                            s_cam_features = '$s_cam_features',
                            zoom = '$zoom',
                            frame = '$frame',
                            lens = '$lens',
                            network_support = '$network_support',
                            internet = '$internet',
                            gprs = '$gprs',
                            hotspot = '$hotspot',
                            nfc = '$nfc',
                            usb = '$usb',
                            edge = '$edge',
                            map = '$map',
                            audio_format = '$audio_format',
                            video_format = '$video_format',
                            height = $height,
                            width = $width,
                            depth = $depth,
                            weight = $weight,
                            touch_type = '$touch_type',
                            sim_size = '$sim_size',
                            ui = '$ui',
                            graphics = '$graphics',
                            other = '$other',
                            keywords = '$keywords'
                            WHERE prod_id = $id AND seller_email = '".$_COOKIE['email']."'";
                        if($conn -> query($update)){
                            while($data = $prod -> fetch_assoc()){
                                if($images['name'][0] != null){
                                    for($i=0; $i<10; $i++){
                                        if($data["images$i"] != null){
                                            unlink($data["images$i"]);
                                        }
                                    }
                                }
                            }
                            if($images['name'][0] != null){
                                for($i=0; $i < 10; $i++){
                                    $temp_ext = explode(".",$name[$i]);
                                    $original_ext = strtolower(end($temp_ext));
                                    if($i >= $length){
                                        $lqs = "UPDATE product set images$i = null WHERE prod_name='$prod_name' and seller_email='".$_COOKIE['email']."'";
                                    }
                                    else{
                                        move_uploaded_file($temp[$i],"./".$_COOKIE['email']."/product$id/Product".$i.".".$original_ext);
                                        $lqs = "UPDATE product set images$i = './".$_COOKIE['email']."/product$id/Product$i.$original_ext' WHERE prod_name='$prod_name' and seller_email='".$_COOKIE['email']."'";
                                    }
                                    if($conn->query($lqs)){
                                        $ok = 1;
                                    }
                                    else{
                                        header('location: ./seller profile.php');
                                    }
                                }
                            }
                        }
                        
                        else{
                            sleep(3);
                            echo "Update Failed";
                            header('location: ./seller profile.php');
                        }
                        $del_spec = "DELETE FROM prod_spec WHERE prod_id = $id AND lower(seller_email)=lower('".$_COOKIE['email']."')";
                        if($conn -> query($del_spec)){
                            $n = 1;
                        }
                        else{
                            header("location: ./seller profile");
                        }
                        if(isset($_POST['key']) && isset($_POST['value'])){
                            $keys = $_POST['key'];
                            $values = $_POST['value'];
                            for($i=0; $i<sizeof($keys); $i++){
                                $sql = "INSERT INTO prod_spec (prod_id, seller_email, spec_head, spec_value) VALUES($id, '".$_COOKIE['email']."','".$keys[$i]."','".$values[$i]."')";
                                if($conn -> query($sql)){
                                    $z=1;
                                }
                                else{
                                    $sl = "DELETE FROM prod_spec WHERE prod_id = $id AND lower(seller_email) = lower('".$_COOKIE['email']."')";
                                    if($conn -> query($sl)){header('location: ./seller profile.php');}
                                    else{header('location: ./seller profile.php');}
                                }
                            }
                        }
                        if($z==1){
                            header('location: ./seller profile.php');
                        }
                        else{
                            header('location: ./seller profile.php');
                        }
                    }
                }
            }
        else{
            $length = sizeof($images['size']);
            $z=0;
            if($length <= 0){
                header('location: ./add products.php');
            }
            
            for($i=0; $i<$length; $i++){
                $temp_ext = explode(".",$name[$i]);
                $original_ext = strtolower(end($temp_ext));
                $allowed_file_type = array("jpg", "jpeg", "png", "webp");
                if(!in_array($original_ext, $allowed_file_type)){
                    header('location: ./seller profile.php');
                }
                if($size[$i] <= 1048576*5){
                    $ok = 1;
                }
                else{
                    echo "Maximum Allowed file size is 5 MB";
                    header("location: ./seller profile.php");
                }
            }
            $conn = new mysqli($host, $user, $pass, "epiz_31213404_customers");
            if($conn -> connect_error){
                echo "Technical Problem Occured";
            }
            else{
                if(file_exists($_COOKIE['email'])){
                    $exists = "True";
                }
                else{
                    $exists = "False";
                    mkdir("./".$_COOKIE['email']."");
                }
                    $sql = "SELECT prod_id from product where seller_email='".$_COOKIE['email']."' and prod_name = '$prod_name'";
                    if($conn -> query($sql) -> num_rows > 0){
                        echo "".$_COOKIE['name']." you already have this product on sale. Try Other Product.";
                        header('location: ./add products.php');
                    }
                    else{
                        $z=0;
                        while($z==0){
                            $small_alpha = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
                            $caps_alpha = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
                            $num = ["0","1","2","3","4","5","6","7","8","9"];
                            shuffle($small_alpha);
                            shuffle($caps_alpha);
                            shuffle($num);
                            shuffle($small_alpha);
                            shuffle($caps_alpha);
                            shuffle($num);
                            shuffle($small_alpha);
                            shuffle($caps_alpha);
                            shuffle($num);
                            $new_list = [$small_alpha[4],$small_alpha[14],$small_alpha[24],$small_alpha[6],$small_alpha[18],$small_alpha[13],$small_alpha[9],$caps_alpha[4],$caps_alpha[14],$caps_alpha[24],$caps_alpha[6],$caps_alpha[18],$caps_alpha[13],$caps_alpha[9],$num[0],$num[1],$num[2],$num[3],$num[4],$num[5],$num[6],$num[7],$num[8],$num[9]];
                            shuffle($new_list);
                            $link = $new_list[0].$new_list[1].$new_list[2].$new_list[3].$new_list[4].$new_list[5].$new_list[6].$new_list[7].$new_list[8].$new_list[9].$new_list[10].$new_list[11].$new_list[12].$new_list[13].$new_list[14];
                            $checking = "SELECT prod_link FROM product WHERE prod_link = '$link'";
                            if($chs = $conn -> query($checking)){
                                if($chs -> num_rows <= 0){
                                    $z=1;
                                }
                            }
                        }
                        $more = "";
                        $more_val = "";

                        if(isset($_POST['brand'])){
                            $more .= ",brand";
                            $more_val .= ",'".$_POST['brand']."'";
                        }
                        if(isset($_POST['type'])){
                            $more .= ",type";
                            $more_val .= ",'".$_POST['type']."'";
                        }
                        if(isset($_POST['box'])){
                            $more .= ",box";
                            $more_val .= ",'".$_POST['box']."'";
                        }
                        if(isset($_POST['model_name'])){
                            $more .= ",model_name";
                            $more_val .= ",'".$_POST['model_name']."'";
                        }
                        if(isset($_POST['sim'])){
                            $more .= ",sim";
                            $more_val .= ",'".$_POST['sim']."'";
                        }
                        if(isset($_POST['touch'])){
                            $more .= ",touch";
                            $more_val .= ",'".$_POST['touch']."'";
                        }
                        if(isset($_POST['size'])){
                            $more .= ",size";
                            $more_val .= ",'".$_POST['size']."'";
                        }
                        if(isset($_POST['resolution_type'])){
                            $more .= ",resolution_type";
                            $more_val .= ",'".$_POST['resolution_type']."'";
                        }
                        if(isset($_POST['display'])){
                            $more .= ",display";
                            $more_val .= ",'".$_POST['display']."'";
                        }
                        if(isset($_POST['os'])){
                            $more .= ",os";
                            $more_val .= ",'".$_POST['os']."'";
                        }
                        if(isset($_POST['core'])){
                            $more .= ",core";
                            $more_val .= ",'".$_POST['core']."'";
                        }
                        if(isset($_POST['clock'])){
                            $more .= ",clock";
                            $more_val .= ",'".$_POST['clock']."'";
                        }
                        if(isset($_POST['ram'])){
                            $more .= ",ram";
                            $more_val .= ",'".$_POST['ram']."'";
                        }
                        if(isset($_POST['storage'])){
                            $more .= ",storage";
                            $more_val .= ",'".$_POST['storage']."'";
                        }
                        if(isset($_POST['memory'])){
                            $more .= ",memory";
                            $more_val .= ",'".$_POST['memory']."'";
                        }
                        if(isset($_POST['card'])){
                            $more .= ",card";
                            $more_val .= ",'".$_POST['card']."'";
                        }
                        if(isset($_POST['primary camera'])){
                            $more .= ",primary camera";
                            $more_val .= ",'".$_POST['primary camera']."'";
                        }
                        if(isset($_POST['secondary_camera'])){
                            $more .= ",secondary_camera";
                            $more_val .= ",'".$_POST['secondary_camera']."'";
                        }
                        if(isset($_POST['flash'])){
                            $more .= ",flash";
                            $more_val .= ",'".$_POST['flash']."'";
                        }
                        if(isset($_POST['video'])){
                            $more .= ",video";
                            $more_val .= ",'".$_POST['video']."'";
                        }
                        if(isset($_POST['network'])){
                            $more .= ",network";
                            $more_val .= ",'".$_POST['network']."'";
                        }
                        if(isset($_POST['bluetooth'])){
                            $more .= ",bluetooth";
                            $more_val .= ",'".$_POST['bluetooth']."'";
                        }
                        if(isset($_POST['wifi'])){
                            $more .= ",wifi";
                            $more_val .= ",'".$_POST['wifi']."'";
                        }
                        if(isset($_POST['audio'])){
                            $more .= ",audio";
                            $more_val .= ",'".$_POST['audio']."'";
                        }
                        if(isset($_POST['battery_type'])){
                            $more .= ",battery_type";
                            $more_val .= ",'".$_POST['battery_type']."'";
                        }
                        if(isset($_POST['battery'])){
                            $more .= ",battery";
                            $more_val .= ",'".$_POST['battery']."'";
                        }
                        if(isset($_POST['smartphone'])){
                            $more .= ",smartphone";
                            $more_val .= ",'".$_POST['smartphone']."'";
                        }
                        if(isset($_POST['sensors'])){
                            $more .= ",sensors";
                            $more_val .= ",'".$_POST['sensors']."'";
                        }
                        if(isset($_POST['warranty'])){
                            $more .= ",warranty";
                            $more_val .= ",'".$_POST['warranty']."'";
                        }
                        
                        if(isset($_POST['domestic'])){
                            $more .= ",domestic";
                            $more_val .= ",'".$_POST['domestic']."'";
                        }


                        /* Start From Here */

                        if(isset($_POST['model_num'])){
                            $more .= ",model_num";
                            $more_val .= ",'".$_POST['model_num']."'";
                        }
                        if(isset($_POST['color'])){
                            $more .= ",color";
                            $more_val .= ",'".$_POST['color']."'";
                        }
                        if(isset($_POST['browser'])){
                            $more .= ",browser";
                            $more_val .= ",'".$_POST['browser']."'";
                        }
                        if(isset($_POST['sim_slot'])){
                            $more .= ",sim_slot";
                            $more_val .= ",'".$_POST['sim_slot']."'";
                        }
                        if(isset($_POST['otg'])){
                            $more .= ",otg";
                            $more_val .= ",'".$_POST['otg']."'";
                        }
                        if(isset($_POST['sound'])){
                            $more .= ",sound";
                            $more_val .= ",'".$_POST['sound']."'";
                        }
                        if(isset($_POST['resolution'])){
                            $more .= ",resolution";
                            $more_val .= ",'".$_POST['resolution']."'";
                        }
                        if(isset($_POST['gpu'])){
                            $more .= ",gpu";
                            $more_val .= ",'".$_POST['gpu']."'";
                        }
                        if(isset($_POST['display_type'])){
                            $more .= ",display_type";
                            $more_val .= ",'".$_POST['display_type']."'";
                        }
                        if(isset($_POST['display_feature'])){
                            $more .= ",display_feature";
                            $more_val .= ",'".$_POST['display_feature']."'";
                        }
                        if(isset($_POST['processor'])){
                            $more .= ",processor";
                            $more_val .= ",'".$_POST['processor']."'";
                        }
                        if(isset($_POST['of'])){
                            $more .= ",of";
                            $more_val .= ",'".$_POST['of']."'";
                        }
                        if(isset($_POST['p_cam_features'])){
                            $more .= ",p_cam_features";
                            $more_val .= ",'".$_POST['p_cam_features']."'";
                        }
                        if(isset($_POST['s_cam_features'])){
                            $more .= ",s_cam_features";
                            $more_val .= ",'".$_POST['s_cam_features']."'";
                        }
                        if(isset($_POST['zoom'])){
                            $more .= ",zoom";
                            $more_val .= ",'".$_POST['zoom']."'";
                        }
                        if(isset($_POST['frame'])){
                            $more .= ",frame";
                            $more_val .= ",'".$_POST['frame']."'";
                        }
                        if(isset($_POST['lens'])){
                            $more .= ",lens";
                            $more_val .= ",'".$_POST['lens']."'";
                        }
                        if(isset($_POST['network_support'])){
                            $more .= ",network_support";
                            $more_val .= ",'".$_POST['network_support']."'";
                        }
                        if(isset($_POST['internet'])){
                            $more .= ",internet";
                            $more_val .= ",'".$_POST['internet']."'";
                        }
                        if(isset($_POST['gprs'])){
                            $more .= ",gprs";
                            $more_val .= ",'".$_POST['gprs']."'";
                        }
                        if(isset($_POST['hotspot'])){
                            $more .= ",hotspot";
                            $more_val .= ",'".$_POST['hotspot']."'";
                        }
                        if(isset($_POST['nfc'])){
                            $more .= ",nfc";
                            $more_val .= ",'".$_POST['nfc']."'";
                        }
                        if(isset($_POST['usb'])){
                            $more .= ",usb";
                            $more_val .= ",'".$_POST['usb']."'";
                        }
                        if(isset($_POST['edge'])){
                            $more .= ",edge";
                            $more_val .= ",'".$_POST['edge']."'";
                        }
                        if(isset($_POST['map'])){
                            $more .= ",map";
                            $more_val .= ",'".$_POST['map']."'";
                        }
                        if(isset($_POST['audio_format'])){
                            $more .= ",audio_format";
                            $more_val .= ",'".$_POST['audio_format']."'";
                        }
                        if(isset($_POST['video_format'])){
                            $more .= ",video_format";
                            $more_val .= ",'".$_POST['video_format']."'";
                        }
                        if(isset($_POST['height'])){
                            if($_POST['height'] != null){
                                $more .= ",height";
                                $more_val .= ",".$_POST['height'];
                            }
                        }
                        if(isset($_POST['width'])){
                            if($_POST['width'] != null){
                                $more .= ",width";
                                $more_val .= ",".$_POST['width'];
                            }
                        }
                        if(isset($_POST['depth'])){
                            if($_POST['depth'] != null){
                                $more .= ",depth";
                                $more_val .= ",".$_POST['depth'];
                            }
                        }
                        if(isset($_POST['weight'])){
                            if($_POST['weight'] != null){
                                $more .= ",weight";
                                $more_val .= ",".$_POST['weight'];
                            }
                        }
                        if(isset($_POST['touch_type'])){
                            $more .= ",touch_type";
                            $more_val .= ",'".$_POST['touch_type']."'";
                        }
                        if(isset($_POST['sim_size'])){
                            $more .= ",sim_size";
                            $more_val .= ",'".$_POST['sim_size']."'";
                        }
                        if(isset($_POST['ui'])){
                            $more .= ",ui";
                            $more_val .= ",'".$_POST['ui']."'";
                        }
                        if(isset($_POST['graphics'])){
                            $more .= ",graphics";
                            $more_val .= ",'".$_POST['graphics']."'";
                        }
                        if(isset($_POST['other'])){
                            $more .= ",other";
                            $more_val .= ",'".$_POST['other']."'";
                        }
                        if(isset($_POST['keywords'])){
                            $more .= ",keywords";
                            $more_val .= ",'".$_POST['keywords']."'";
                        }
                        
                        
                        $sql = "INSERT INTO product (
                            prod_link,
                            seller_email,
                            prod_name,
                            prod_org_price,
                            prod_dis_price, 
                            max_discount, 
                            prod_discount, 
                            prod_quantity, 
                            prod_description, 
                            catagory, 
                            prod_type".$more."
                            ) 
                            VALUES (
                                '$link', 
                                '".$_COOKIE['email']."',
                                '$prod_name',
                                $org_price,
                                $discount_price, 
                                $max_discount, 
                                $discount, 
                                $quantity, 
                                '$description', 
                                '$catagory',
                                '$prod_type'".$more_val."
                                )";
                        if($conn -> query($sql)){
                            $sql = "SELECT prod_id FROM product WHERE lower(prod_name) = lower('$prod_name') AND lower(seller_email) = lower('".$_COOKIE['email']."')";
                            if($row = $conn -> query($sql)){
                                $id = $row -> fetch_assoc()['prod_id'];
                                mkdir("./".$_COOKIE['email']."/product".$id);
                                for($i=0; $i<$length; $i++){
                                    $temp_ext = explode(".",$name[$i]);
                                    $original_ext = strtolower(end($temp_ext));
                                    move_uploaded_file($temp[$i],"./".$_COOKIE['email']."/product".$id."/Product".$i.".".$original_ext);
                                    $lqs = "UPDATE product set images$i = './".$_COOKIE['email']."/product$id/Product$i.$original_ext' WHERE prod_id=$id and seller_email='".$_COOKIE['email']."'";
                                    if($conn->query($lqs)){
                                        $ok = 1;
                                    }
                                    else{
                                        $sql = "DELETE FROM product WHERE prod_id = $id AND lower(seller_email) = lower('".$_COOKIE['email']."')";
                                        if($conn -> query($sql)){header('location: ./add products.php');}
                                        else{header('location: ./add products.php');}
                                    }
                                }
                            }
                            if(isset($_POST['key']) && isset($_POST['key'])){
                                $keys = $_POST['key'];
                                $values = $_POST['value'];
                                for($i=0; $i<sizeof($keys); $i++){
                                    $sql = "INSERT INTO prod_spec (prod_id, seller_email, spec_head, spec_value) VALUES($id, '".$_COOKIE['email']."','".$keys[$i]."','".$values[$i]."')";
                                    if($conn -> query($sql)){
                                        $z=1;
                                    }
                                    else{
                                        $sl = "DELETE FROM prod_spec WHERE prod_id = $id AND lower(seller_email) = lower('".$_COOKIE['email']."')";
                                        if($conn -> query($sl)){header('location: ./add products.php');die();}
                                        else{header('location: ./add products.php');die();}
                                    }
                                }
                            }
                            if($z == 1){
                                header('location: ./seller profile.php');
                                die();
                            }
                            else{
                                header('location: ./add products.php');
                                die();
                            }
                        }
                        else{
                            echo $sql;
                        }
                }
            }
        }
    }   
    elseif($page == 'que page'){
        $que = $_POST['question'];
        $id = $_POST['product'];
        $conn = new mysqli($host, $user, $pass, "epiz_31213404_customers");
        if($conn -> connect_error){
            echo "Technical Error";
            header("location: ./product details.php?product=$id");
        }
        else{
            $sql = "INSERT INTO que (prod_id, que) VALUES ($id,'$que')";
            if($prepare = $conn -> query($sql)){
                header("location: ./product details.php?product=$id");
            }
            else{
                header("location: ./product details.php?product=$id");
            }
        }
    }
    elseif($page == 'cart.php'){
        $conn = new mysqli($host, $user, $pass, "epiz_31213404_customers");
        if($conn -> connect_error){
            echo "Technical Error";
        }
        else{
            $id = $_POST['product'];
            $rem = "DELETE FROM cart WHERE prod_id=$id AND cust_id=".$_COOKIE['id'];
            if($conn -> query($rem)){
                header('location: ./cart.php');
            }
            else{
                header('location: ./cart.php');
            }
        }
    }
    elseif($page == './order.php'){
        $conn = new mysqli($host, $user, $pass, "epiz_31213404_customers");
        if($conn -> connect_error){
            echo "Technical Error";
            header('location: ./cart.php');
        }
        else{
            $address = $_POST['address'];
            $id = $_POST['products'];
            $quantity = $_POST['quantities'];
            $pincode = $_POST['pincode'];
            $payment = $_POST['payment'];
            for($i=0; $i<sizeof($id); $i++){
                $sqls = "SELECT delivery_status FROM buyer WHERE prod_id=".$id[$i]." AND buyer_email='".$_COOKIE['email']."';";
                if($prep = $conn -> query($sqls)){
                    if($prep -> num_rows > 0){
                        if($prep->fetch_assoc()['delivery_status'] == "pending"){
                            echo "You Already have a Pending Delivery of this Product";
                            header('location: ./cart.php');
                        }
                        else{
                            $sql = "SELECT * FROM product WHERE prod_id=".$id[$i].";";
                            if($pre = $conn -> query($sql)){
                                if($pre -> num_rows > 0){
                                    while ($data = $pre -> fetch_assoc()){
                                        if($quantity[$i] <= $data['prod_quantity']){
                                            if($payment == "cod"){
                                                $transaction  = "Cash on Delivery";
                                                $order = "INSERT INTO buyer (buyer_name, buyer_email, buyer_address, pincode, prod_id, prod_org_price, prod_dis_price, prod_discount, prod_delivery, prod_quantity) VALUES ('".$_COOKIE['name']."','".$_COOKIE['email']."','$address', '$pincode', ".$id[$i].",".$data['prod_org_price'].", ".$data['prod_dis_price'].", ".$data['prod_discount'].", ".$data['prod_delivery'].", ".$quantity[$i].")";
                                                if($conn -> query($order)){
                                                    $que = "DELETE FROM cart WHERE prod_id=".$id[$i]." AND cust_id=".$_COOKIE['id'].";";
                                                    if($conn -> query($que)){
                                                        $qnttt = $data['prod_quantity']-$quantity[$i];
                                                        $deduct = "UPDATE product SET prod_quantity=$qnttt WHERE prod_id=".$id[$i].";";
                                                        if($conn -> query($deduct)){
                                                            echo "Your ".$data['prod_name']." will be Delivered Soon.";
                                                            echo "Thanks For Shoping With Us.";
                                                            echo "Have a Great Day!";
                                                        }
                                                        header('location: ./cart.php');
                                                    }
                                                    else{
                                                        $que = "DELETE FROM buyer WHERE prod_id=$id AND cust_email=".$_COOKIE['email'].";";
                                                        if($conn -> query($que)){
                                                            $qnttt = $data['prod_quantity']+$quantity[$i];
                                                            $deduct = "UPDATE product SET prod_quantity=$qnttt WHERE prod_id=".$id[$i].";";
                                                            if($conn -> query($deduct)){
                                                            echo "Technical Error";
                                                            }
                                                            header('location: ./cart.php');
                                                        }
                                                        else{
                                                            echo "Technical Error";
                                                            header('location: ./cart.php');
                                                        }
                                                    }
                                                }
                                                else{
                                                    echo "Insufficient Information Provided";
                                                    header('location: ./');
                                                }
                                            }
                                            else{
                                                $z=0;
                                                while($z==0){
                                                    $small_alpha = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
                                                    $caps_alpha = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
                                                    $num = ["0","1","2","3","4","5","6","7","8","9"];
                                                    shuffle($small_alpha);
                                                    shuffle($caps_alpha);
                                                    shuffle($num);
                                                    shuffle($small_alpha);
                                                    shuffle($caps_alpha);
                                                    shuffle($num);
                                                    shuffle($small_alpha);
                                                    shuffle($caps_alpha);
                                                    shuffle($num);
                                                    $new_list = [$small_alpha[4],$small_alpha[14],$small_alpha[24],$small_alpha[6],$small_alpha[18],$small_alpha[13],$small_alpha[9],$caps_alpha[4],$caps_alpha[14],$caps_alpha[24],$caps_alpha[6],$caps_alpha[18],$caps_alpha[13],$caps_alpha[9],$num[0],$num[1],$num[2],$num[3],$num[4],$num[5],$num[6],$num[7],$num[8],$num[9]];
                                                    shuffle($new_list);
                                                    $transaction = $new_list[0].$new_list[1].$new_list[2].$new_list[3].$new_list[4].$new_list[5].$new_list[6].$new_list[7].$new_list[8].$new_list[9].$new_list[10].$new_list[11].$new_list[12].$new_list[13].$new_list[14];
                                                    $checking = "SELECT * FROM buyer WHERE transaction_id='$transaction'";
                                                    if($chs = $conn -> query($checking)){
                                                        if($chs -> num_rows <= 0){
                                                            $order = "INSERT INTO buyer (buyer_name, buyer_email, buyer_address, pincode, pay_method, pay_status, transaction_id, prod_id, prod_org_price, prod_dis_price, prod_discount, prod_delivery, prod_quantity) VALUES ('".$_COOKIE['name']."','".$_COOKIE['email']."','$address', '$pincode', '$payment', 'Paid', '$transaction', ".$id[$i].",".$data['prod_org_price'].", ".$data['prod_dis_price'].", ".$data['prod_discount'].", ".$data['prod_delivery'].", ".$quantity[$i].")";
                                                            if($conn -> query($order)){
                                                                $api = new Api("rzp_test_lan4wQdhJmC9qj", "GAKmMAYMB0cUZhFQDuFs3XSX");

                                                                $api->order->create(array('receipt' => '123', 'amount' => 1, 'currency' => 'INR'));
                                                                $que = "DELETE FROM cart WHERE prod_id=".$id[$i]." AND cust_id=".$_COOKIE['id'].";";
                                                                if($conn -> query($que)){
                                                                    $qnttt = $data['prod_quantity']-$quantity[$i];
                                                                    $deduct = "UPDATE product SET prod_quantity=$qnttt WHERE prod_id=".$id[$i].";";
                                                                    if($conn -> query($deduct)){
                                                                        echo "Your ".$data['prod_name']." will be Delivered Soon.";
                                                                        echo "Thanks For Shoping With Us.";
                                                                        echo "Have a Great Day!";
                                                                    }
                                                                    header('location: ./cart.php');
                                                                }
                                                                else{
                                                                    $que = "DELETE FROM buyer WHERE prod_id=".$id[$i]." AND cust_email=".$_COOKIE['email'].";";
                                                                    if($conn -> query($que)){
                                                                        $qnttt = $data['prod_quantity']+$quantity[$i];
                                                                        $deduct = "UPDATE product SET prod_quantity=$qnttt WHERE prod_id=".$id[$i].";";
                                                                        if($conn -> query($deduct)){
                                                                            echo "Technical Error";
                                                                        }
                                                                        header('location: ./cart.php');
                                                                    }
                                                                    else{
                                                                        echo "Technical Error";
                                                                        header('location: ./cart.php');
                                                                    }
                                                                }
                                                            }
                                                            else{
                                                                echo "Insufficient Information Provided";
                                                                header('location: ./');
                                                            }
                                                            $z=1;
                                                        }
                                                        else{
                                                            $z=0;
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                        else{
                                            header('location: ./cart.php');
                                        }
    
                                    }
                                }
                            }
                        }
                    }
                    else{
                        $sql = "SELECT * FROM product WHERE prod_id=".$id[$i].";";
                        if($pre = $conn -> query($sql)){
                            if($pre -> num_rows > 0){
                                while ($data = $pre -> fetch_assoc()){
                                    if($quantity[$i] <= $data['prod_quantity']){
                                        if($payment == "cod"){
                                            $order = "INSERT INTO buyer (buyer_name, buyer_email, buyer_address, pincode, prod_id, prod_org_price, prod_dis_price, prod_discount, prod_delivery, prod_quantity) VALUES ('".$_COOKIE['name']."','".$_COOKIE['email']."','$address', '$pincode', ".$id[$i].",".$data['prod_org_price'].", ".$data['prod_dis_price'].", ".$data['prod_discount'].", ".$data['prod_delivery'].", ".$quantity[$i].")";
                                            if($conn -> query($order)){
                                                $que = "DELETE FROM cart WHERE prod_id=".$id[$i]." AND cust_id=".$_COOKIE['id'].";";
                                                if($conn -> query($que)){
                                                    $qnttt = $data['prod_quantity']-$quantity[$i];
                                                    $deduct = "UPDATE product SET prod_quantity=$qnttt WHERE prod_id=".$id[$i].";";
                                                    if($conn -> query($deduct)){
                                                        echo "Your ".$data['prod_name']." will be Delivered Soon.";
                                                        echo "Thanks For Shoping With Us.";
                                                        echo "Have a Great Day!";
                                                    }
                                                    header('location: ./cart.php');
                                                }
                                                else{
                                                    $que = "DELETE FROM buyer WHERE prod_id=".$id[$i]." AND cust_email=".$_COOKIE['email'].";";
                                                    if($conn -> query($que)){
                                                        $qnttt = $data['prod_quantity']+$quantity[$i];
                                                        $deduct = "UPDATE product SET prod_quantity=$qnttt WHERE prod_id=".$id[$i].";";
                                                        if($conn -> query($deduct)){
                                                            echo "Technical Error";
                                                        }
                                                        header('location: ./cart.php');
                                                    }
                                                    else{
                                                        echo "Technical Error";
                                                        header('location: ./cart.php');
                                                    }
                                                }
                                            }
                                            else{
                                                echo "Insufficient Information Provided";
                                                header('location: ./');
                                            }
                                        }
                                        else{
                                            $z=0;
                                            while($z==0){
                                                $small_alpha = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
                                                $caps_alpha = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
                                                $num = ["0","1","2","3","4","5","6","7","8","9"];
                                                shuffle($small_alpha);
                                                shuffle($caps_alpha);
                                                shuffle($num);
                                                shuffle($small_alpha);
                                                shuffle($caps_alpha);
                                                shuffle($num);
                                                shuffle($small_alpha);
                                                shuffle($caps_alpha);
                                                shuffle($num);
                                                $new_list = [$small_alpha[4],$small_alpha[14],$small_alpha[24],$small_alpha[6],$small_alpha[18],$small_alpha[13],$small_alpha[9],$caps_alpha[4],$caps_alpha[14],$caps_alpha[24],$caps_alpha[6],$caps_alpha[18],$caps_alpha[13],$caps_alpha[9],$num[0],$num[1],$num[2],$num[3],$num[4],$num[5],$num[6],$num[7],$num[8],$num[9]];
                                                shuffle($new_list);
                                                $transaction = $new_list[0].$new_list[1].$new_list[2].$new_list[3].$new_list[4].$new_list[5].$new_list[6].$new_list[7].$new_list[8].$new_list[9].$new_list[10].$new_list[11].$new_list[12].$new_list[13].$new_list[14];
                                                $checking = "SELECT * FROM buyer WHERE transaction_id='$transaction'";
                                                if($chs = $conn -> query($checking)){
                                                    if($chs -> num_rows <= 0){
                                                        $order = "INSERT INTO buyer (buyer_name, buyer_email, buyer_address, pincode, pay_method, pay_status, transaction_id, prod_id, prod_org_price, prod_dis_price, prod_discount, prod_delivery, prod_quantity) VALUES ('".$_COOKIE['name']."','".$_COOKIE['email']."','$address', '$pincode', '$payment', 'Paid', '$transaction', ".$id[$i].",".$data['prod_org_price'].", ".$data['prod_dis_price'].", ".$data['prod_discount'].", ".$data['prod_delivery'].", ".$quantity[$i].")";
                                                        if($conn -> query($order)){
                                                            $que = "DELETE FROM cart WHERE prod_id=".$id[$i]." AND cust_id=".$_COOKIE['id'].";";
                                                            if($conn -> query($que)){
                                                                $qnttt = $data['prod_quantity']-$quantity[$i];
                                                                $deduct = "UPDATE product SET prod_quantity=$qnttt WHERE prod_id=".$id[$i].";";
                                                                if($conn -> query($deduct)){
                                                                    echo "Your ".$data['prod_name']." will be Delivered Soon.";
                                                                    echo "Thanks For Shoping With Us.";
                                                                    echo "Have a Great Day!";
                                                                }
                                                                header('location: ./cart.php');
                                                            }
                                                            else{
                                                                $que = "DELETE FROM buyer WHERE prod_id=".$id[$i]." AND cust_email=".$_COOKIE['email'].";";
                                                                if($conn -> query($que)){
                                                                    $qnttt = $data['prod_quantity']+$quantity[$i];
                                                                    $deduct = "UPDATE product SET prod_quantity=$qnttt WHERE prod_id=".$id[$i].";";
                                                                    if($conn -> query($deduct)){
                                                                        echo "Technical Error";
                                                                    }
                                                                    header('location: ./cart.php');
                                                                }
                                                                else{
                                                                    echo "Technical Error";
                                                                    header('location: ./cart.php');
                                                                }
                                                            }
                                                        }
                                                        else{
                                                            echo "Insufficient Information Provided";
                                                            header('location: ./');
                                                        }
                                                        $z=1;
                                                    }
                                                    else{
                                                        $z=0;
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    else{
                                        header('location: ./cart.php');
                                    }

                                }
                            }
                        }
                    }
                }
            }
        }
    }
    elseif($page == './wish-list.php' || $page == './wishlist.php' || $page == './wish-listed.php'){
        $conn = new mysqli($host, $user, $pass, "epiz_31213404_customers");
        if($conn -> connect_error){
            echo "Technical Error";
            header('location: ./');
        }
        else{
            $id = $_POST['prod'];
            if($page == './wish-listed.php'){
                $id = $_POST['prod2'];
            }
            $sl = "SELECT * FROM wishlist WHERE prod_id=$id AND id=".$_COOKIE['id'].";";
            if($prep = $conn -> query($sl)){
                if($prep -> num_rows > 0){
                    $sql = "DELETE FROM wishlist WHERE id=".$_COOKIE['id']." AND prod_id=$id";
                    if($conn -> query($sql)){
                        if($page == './wishlist.php'){
                            header('location: ./wishlist.php');    
                        }
                        elseif($page == './wish-listed.php'){
                            header("location: ./product details.php?product=$id");
                        }
                        else{
                            echo 0;
                        }
                    }
                    else{
                        if($page == './wishlist.php'){
                            header('location: ./wishlist.php');    
                        }
                        elseif($page == './wish-listed.php'){
                            header("location: ./product details.php?product=$id");
                        }
                        else{
                            echo 1;
                        }
                    }
                }
                else{
                    $sql = "INSERT INTO wishlist (id, prod_id) VALUES (".$_COOKIE['id'].", $id)";
                    if($conn -> query($sql)){
                        if($page == './wishlist.php'){
                            header('location: ./wishlist.php');    
                        }
                        elseif($page == './wish-listed.php'){
                            header("location: ./product details.php?product=".$id."");
                        }
                        else{
                            echo 1;
                        }
                    }
                    else{
                        echo "Failed to Wishlist";
                        if($page == './wishlist.php'){
                            header('location: ./wishlist.php');    
                        }
                        elseif($page == './wish-listed.php'){
                            header("location: ./product details.php?product=".$id."");
                        }
                        else{
                            echo 0;
                        }
                    }
                }
            }
        }
    }
    elseif($page == './product details.php'){
        $id = $_POST['prod'];
        $conn = new mysqli($host, $user, $pass, "epiz_31213404_customers");
        if($conn -> connect_error){
            echo "Technical Error";
            header("location: ./product details.php?product=$id");
        }
        else{
            $command = "INSERT INTO cart (prod_id, cust_id) VALUES ($id, ".$_COOKIE['id'].")";
            if($conn -> query($command)){
                header("location: ./product details.php?product=$id");
            }
            else{
                header("location: ./product details.php?product=$id");
            }
        }
    }
    elseif($page == './rate-product.php'){
        $id = $_POST['prod'];
        $review = $_POST['review'];
        $stars = $_POST['stars'];
        $conn = new mysqli($host, $user, $pass, "epiz_31213404_customers");
        if($conn -> connect_error){
            echo "Technical Error";
            header("location: ./product details.php?product=$id");
        }
        else{
            $st = "s1";
            if($stars == 5){
                $st = "s5";
            }
            elseif($stars == 4){
                $st = "s4";
            }
            elseif($stars == 3){
                $st = "s3";
            }
            elseif($stars == 2){
                $st = "s2";
            }
            else{
                $st = "s1";
            }
            $command = "SELECT * FROM prod_rating  WHERE prod_id=$id AND cust_id=".$_COOKIE['id'];
            if($prep = $conn -> query($command)){
                if($prep -> num_rows > 0){
                    $pre_st ="s2";
                    while($data = $prep -> fetch_assoc()){
                        if($data["s1"] == 1){
                            $pre_st = "s1";
                        }
                        elseif($data['s2'] == 1){
                            $pre_st = "s2";
                        }
                        elseif($data['s3'] == 1 ){
                            $pre_st = "s3";
                        }
                        elseif($data['s4'] == 1){
                            $pre_st = "s4";
                        }
                        else{
                            $pre_st = "s5";
                        }
                        if($review == ""){
                            $review = $data['review'];
                        }
                        $com = "UPDATE prod_rating SET review='$review', $pre_st=0, $st=1";
                        if($conn -> query($com)){
                            header("location: ./product details.php?product=$id");
                        }
                        else{
                            echo "Error";
                            header("location: ./product details.php?product=$id");
                        }
                    }
                }
                else{
                    $comm = "INSERT INTO prod_rating (prod_id, cust_id, review, $st) VALUES ($id, ".$_COOKIE['id'].", '$review', 1)";
                    if($conn -> query($comm)){
                        header("location: ./product details.php?product=$id");
                    }
                    else{
                        header("location: ./product details.php?product=$id");
                    }
                }
            }
        }
    }
    elseif($page == './answer.php'){
        $id = $_POST['prod_id'];
        $que_id = $_POST['q_id'];
        $ans = $_POST['ans'];
        $conn = new mysqli($host, $user, $pass, "epiz_31213404_customers");
        if($conn -> connect_error){
            echo "Technical Error";
            header("location: ./product details.php?product=$id");
        }
        else{
            $command = "SELECT * FROM ans WHERE  ans_id=$que_id AND id=".$_COOKIE['id'];
            if($prepare = $conn -> query($command)){
                if($prepare -> num_rows > 0){
                    $com = "UPDATE ans SET ans='$ans' WHERE ans_id=$que_id AND id=".$_COOKIE['id'];
                    if($conn -> query($com)){
                        header("location: ./product details.php?product=$id");
                    }
                    else{
                        header("location: ./product details.php?product=$id");
                    }
                }
                else{
                    $command = "INSERT INTO ans (ans_id, id, ans) VALUES ($que_id, ".$_COOKIE['id'].", '$ans')";
                    if($conn -> query($command)){
                        header("location: ./product details.php?product=$id");
                    }
                    else{
                        header("location: ./product details.php?product=$id");
                    }
                }
            }
        }
    }
    elseif($page == './remove product.php'){
        $conn = new mysqli($host, $user, $pass, "epiz_31213404_customers");
        if($conn -> connect_error){
            echo "Technical Error";
            header('location: ./seller profile.php');
        }
        else{
            $prod = $_POST['product'];
            $sql = "DELETE FROM product WHERE prod_id=$prod AND seller_email='".$_COOKIE['email']."'";
            if($conn -> query($sql)){
                echo "Product Removed Successfully";
                header('location: ./seller profile.php');
            }
            else{
                header('location: ./seller profile.php');
            }
        }
    }
    elseif($page == './filter.php'){
        
        $conn = new mysqli($host, $user, $pass, "epiz_31213404_customers");
        if($conn -> connect_error){
            echo "Technical Problem Occured";
            header("location: ./product.php?query=$search");
        }
        else{
            $min_max = [];
            $sort = "";
            
            if(isset($_POST['catag'])){
                $cat = $_POST['catag'];
                $sort .= "(lower(p.prod_type) LIKE lower('%".$cat."%') OR lower(p.catagory) LIKE lower('%$cat%')) AND";
            }
            elseif(isset($_GET['catag'])){
                $cat = $_GET['catag'];
                $sort .= "(lower(p.prod_type) LIKE lower('%".$cat."%') OR lower(p.catagory) LIKE lower('%$cat%')) AND";
            }
            else{
                $sort = "";
            }

            if(isset($_POST['sort'])){
                $cat = $_POST['sort'];
                $ret = "SELECT DISTINCT p.prod_id, p.prod_dis_price FROM product p, prod_spec s WHERE ".$sort." lower(p.brand) LIKE lower('%".$_POST['sort']."%')";
            }
            elseif(isset($_GET['sort'])){
                $cat = $_GET['sort'];
                $ret = "SELECT DISTINCT p.prod_id, p.prod_dis_price FROM product p, prod_spec s WHERE ".$sort." lower(p.brand) LIKE lower('%".$_GET['sort']."%')";
            }
            elseif(isset($_POST['query'])){
                $search = $_POST['query'];
                $ret = "SELECT DISTINCT p.prod_id, p.prod_dis_price FROM product p, prod_spec s WHERE ".$sort."  lower(p.prod_name) LIKE lower('%$search%') OR lower(p.prod_org_price) LIKE lower('%$search%') OR lower(p.prod_dis_price) LIKE lower('%$search%') OR lower(p.prod_discount) LIKE lower('%$search%') OR lower(p.prod_description) LIKE lower('%$search%') OR lower(p.catagory) LIKE lower('%$search%') OR lower(s.spec_head) LIKE lower('%$search%') OR lower(s.spec_value) LIKE lower('%$search%')
             OR lower(p.network) LIKE lower('%$search%') OR lower(p.brand) LIKE lower('%$search%') OR lower(p.model_num) LIKE lower('%$search%') OR lower(p.model_name) LIKE lower('%$search%') OR lower(p.core) LIKE lower('%$search%') OR lower(p.processor) LIKE lower('%$search%') OR lower(p.os) LIKE lower('%$search%') OR lower(p.network_support) LIKE lower('%$search%') OR lower(p.sensors) LIKE lower('%$search%') OR lower(p.other) LIKE lower('%$search%')";
            }
            elseif(isset($_GET['query'])){
                $search = $_GET['query'];
                $ret = "SELECT DISTINCT p.prod_id, p.prod_dis_price FROM product p, prod_spec s WHERE ".$sort."  lower(p.prod_name) LIKE lower('%$search%') OR lower(p.prod_org_price) LIKE lower('%$search%') OR lower(p.prod_dis_price) LIKE lower('%$search%') OR lower(p.prod_discount) LIKE lower('%$search%') OR lower(p.prod_description) LIKE lower('%$search%') OR lower(p.catagory) LIKE lower('%$search%') OR lower(s.spec_head) LIKE lower('%$search%') OR lower(s.spec_value) LIKE lower('%$search%')
             OR lower(p.network) LIKE lower('%$search%') OR lower(p.brand) LIKE lower('%$search%') OR lower(p.model_num) LIKE lower('%$search%') OR lower(p.model_name) LIKE lower('%$search%') OR lower(p.core) LIKE lower('%$search%') OR lower(p.processor) LIKE lower('%$search%') OR lower(p.os) LIKE lower('%$search%') OR lower(p.network_support) LIKE lower('%$search%') OR lower(p.sensors) LIKE lower('%$search%') OR lower(p.other) LIKE lower('%$search%')";
            }
            
             //echo $ret;
                if($result = $conn -> query($ret)){
                    if($result -> num_rows > 0){
                        while($data = $result -> fetch_assoc()){
                            $sql = "SELECT prod_id, prod_link, prod_name, prod_org_price, prod_dis_price, prod_discount, prod_delivery, images0 FROM product WHERE prod_id=".$data['prod_id'];
                            array_push($min_max, $data['prod_dis_price']);
                            if($final = $conn -> query($sql)){
                                if($final -> num_rows > 0){
                                    while($collect = $final -> fetch_assoc()){
                                        $review = "SELECT * FROM prod_rating WHERE prod_id=".$data['prod_id'].";";
                                        if($done = $conn -> query($review)){
                                            if($done -> num_rows > 0){
                                                $reviews = 0;
                                                $rate_count = $done -> num_rows;
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
                                                $collect['rating'] = $rating;
                                                $collect['reviews'] = $reviews;
                                                $collect['rate_count'] = $rate_count;
                                            }
                                            else{
                                                $collect['rating'] = 0;
                                                $collect['reviews'] = 0;
                                                $collect['rate_count'] = 0;
                                            }
                                        }
                                        if(isset($_COOKIE['id'])){
                                            $sl = "SELECT * FROM wishlist WHERE prod_id=".$data['prod_id']." AND id=".$_COOKIE['id'].";";
                                            if($prep = $conn -> query($sl)){
                                                if($prep -> num_rows > 0){
                                                    $collect['wishlisted'] = "wish-listed";
                                                }
                                                else{
                                                    $collect['wishlisted'] = "wish-list";
                                                }
                                            }
                                            else{
                                                $collect['wishlisted'] = "wish-list";
                                            }
                                        }
                                        else{
                                            $collect['wishlisted'] = "wish-list";
                                        }
                                        $collect['minimum'] = min($min_max);
                                        $collect['maximum'] = max($min_max);
                                        echo json_encode($collect);
                                    }
                                }
                            }
                        }
                    }
                    else{
                        echo "";
                    }
            }
        }
    }
    elseif($page == './filter-products.php'){
        $conn = new mysqli($host, $user, $pass, "epiz_31213404_customers");
        if($conn -> connect_error){
            echo "Technical Error";
            header('location: ./');
        }
        else{
            if(isset($_POST['quer'])){
                $search = $_POST['quer'];
            }
            else{
                $search = $_GET['quer'];
            }
            $ret = "";
            $smd = "";
            
            if(isset($_POST['sortings']) || isset($_GET['sortings'])){
                if(isset($_POST['sortings'])){
                    $sort = $_POST['sortings'];
                }
                elseif(isset($_GET['sortings'])){
                    $sort = $_GET['sortings'];
                }
                if($sort == "rel"){
                    $ret .= "";
                }
                elseif($sort == "low"){
                    $ret .= " ORDER BY p.prod_dis_price";
                }
                elseif($sort == "high"){
                    $ret .= " ORDER BY p.prod_dis_price DESC";
                }
                elseif($sort == "dis_low"){
                    $ret .= " ORDER BY p.prod_discount";
                }
                elseif($sort == "dis_high"){
                    $ret .= " ORDER BY p.prod_discount DESC";
                }
                elseif($sort == "new"){
                    $ret .= " ORDER BY p.prod_id DESC";
                }
                elseif($sort == "name"){
                    $ret .= " ORDER BY p.prod_name";
                }
            }

            if(isset($_POST['min_price']) && isset($_POST['max_price'])){
                $min_price = $_POST['min_price'];
                $max_price = $_POST['max_price'];
                $smd .= '(p.prod_dis_price BETWEEN '.$min_price.' AND '.$max_price.')';
            }
            if(isset($_POST['brand'])){
                $brand = $_POST['brand'];
                for($i=0; $i<sizeof($brand); $i++){
                    if($i == 0){
                        if(sizeof($brand) == 1){
                            $smd .= " AND (lower(p.brand) LIKE lower('%".$brand[$i]."%'))";
                        }
                        else{
                            $smd .= " AND (lower(p.brand) LIKE lower('%".$brand[$i]."%')";
                        }
                    }
                    elseif($i == sizeof($brand) - 1){
                        $smd .= " OR lower(p.brand) LIKE lower('%".$brand[$i]."%'))";
                    }
                                    else{
                        $smd .= " OR lower(p.brand) LIKE lower('%".$brand[$i]."%')";
                    }
                }
            }

            if(isset($_POST['ram'])){
                $ram = $_POST['ram'];
                for($i=0; $i<sizeof($ram); $i++){
                    if($i == 0){
                        if(sizeof($ram) == 1){
                            if($ram[$i] == 6){
                                $smd .= " AND (p.ram BETWEEN ".$ram[$i]." AND 128)";
                            }
                            else{
                                $smd .= " AND (p.ram = ".$ram[$i].")";
                            }
                        }
                        else{
                            if($ram[$i] == 6){
                                $smd .= " AND (p.ram >= ".$ram[$i];
                            }
                            else{
                                $smd .= " AND (p.ram = ".$ram[$i];
                            }
                        }
                    }
                    elseif($i == sizeof($ram) - 1){
                        if($ram[$i] == 6){
                            $smd .= " OR (p.ram BETWEEN ".$ram[$i]." AND 128))";
                        }
                        else{
                            $smd .= " OR (p.ram = ".$ram[$i]."))";
                        }
                    }
                    else{
                        if($ram[$i] == 6){
                            $smd .= " OR p.ram BETWEEN ".$ram[$i]."AND 128";
                        }
                        else{
                            $smd .= " OR p.ram = ".$ram[$i];
                        }
                    }
                }
            }
            
            if(isset($_POST['storage'])){
                $storage = $_POST['storage'];
                for($i=0; $i<sizeof($storage); $i++){
                    if($i == 0){
                        if(sizeof($storage) == 1){
                            if($storage[$i] == 256){
                                $smd .= " AND (p.storage >= ".$storage[$i].")";
                            }
                            else{
                                $smd .= " AND (p.storage = ".$storage[$i].")";
                            }
                        }
                        else{
                            if($storage[$i] == 256){
                                $smd .= " AND (p.storage >= ".$storage[$i];
                            }
                            else{
                                $smd .= " AND (p.storage = ".$storage[$i];
                            }
                        }
                    }
                    elseif($i == sizeof($storage) - 1){
                        if($storage[$i] == 256){
                            $smd .= " OR (p.storage >= ".$storage[$i]."))";
                        }
                        else{
                            $smd .= " OR (p.storage = ".$storage[$i]."))";
                        }
                    }
                    else{
                        if($storage[$i] == 256){
                            $smd .= " OR p.storage >= ".$storage[$i];
                        }
                        else{
                            $smd .= " OR p.storage = ".$storage[$i];
                        }
                    }
                }
            }
            if(isset($_POST['battery'])){
                $battery = $_POST['battery'];
                for($i=0; $i<sizeof($battery); $i++){
                    if($i == 0){
                        if(sizeof($battery) == 1){
                            if($battery[$i] == 100){
                                $smd .= " AND (p.battery BETWEEN 100 AND 2000)";
                            }
                            elseif($battery[$i] == 2000){
                                $smd .= " AND (p.battery BETWEEN 2000 AND 3000)";
                            }
                            elseif($battery[$i] == 3000){
                                $smd .= " AND (p.battery BETWEEN 3000 AND 4000)";
                            }
                            elseif($battery[$i] == 4000){
                                $smd .= " AND (p.battery BETWEEN 4000 AND 5000)";
                            }
                            elseif($battery[$i] == 5000){
                                $smd .= " AND (p.battery BETWEEN 5000 AND 6000)";
                            }
                            else{
                                $smd .= " AND (p.battery >= ".$battery[$i].")";
                            }
                        }
                        else{
                            if($battery[$i] == 100){
                                $smd .= " AND (p.battery BETWEEN 100 AND 2000";
                            }
                            elseif($battery[$i] == 2000){
                                $smd .= " AND (p.battery BETWEEN 2000 AND 3000";
                            }
                            elseif($battery[$i] == 3000){
                                $smd .= " AND (p.battery BETWEEN 3000 AND 4000";
                            }
                            elseif($battery[$i] == 4000){
                                $smd .= " AND (p.battery BETWEEN 4000 AND 5000";
                            }
                            elseif($battery[$i] == 5000){
                                $smd .= " AND (p.battery BETWEEN 5000 AND 6000";
                            }
                            else{
                                $smd .= " AND (p.battery >= ".$battery[$i]."";
                            }
                        }
                    }
                    elseif($i == sizeof($battery) - 1){
                        if($battery[$i] == 100){
                            $smd .= " OR (p.battery BETWEEN 100 AND 2000))";
                        }
                        elseif($battery[$i] == 2000){
                            $smd .= " OR (p.battery BETWEEN 2000 AND 3000))";
                        }
                        elseif($battery[$i] == 3000){
                            $smd .= " OR (p.battery BETWEEN 3000 AND 4000))";
                        }
                        elseif($battery[$i] == 4000){
                            $smd .= " OR (p.battery BETWEEN 4000 AND 5000))";
                        }
                        elseif($battery[$i] == 5000){
                            $smd .= " OR (p.battery BETWEEN 5000 AND 6000))";
                        }
                        else{
                            $smd .= " OR (p.battery >= ".$battery[$i]."))";
                        }
                    }
                    else{
                        if($battery[$i] == 100){
                            $smd .= " OR p.battery BETWEEN 100 AND 2000";
                        }
                        elseif($battery[$i] == 2000){
                            $smd .= " OR p.battery BETWEEN 2000 AND 3000";
                        }
                        elseif($battery[$i] == 3000){
                            $smd .= " OR p.battery BETWEEN 3000 AND 4000";
                        }
                        elseif($battery[$i] == 4000){
                            $smd .= " OR p.battery BETWEEN 4000 AND 5000";
                        }
                        elseif($battery[$i] == 5000){
                            $smd .= " OR p.battery BETWEEN 5000 AND 6000";
                        }
                        else{
                            $smd .= " OR p.battery >= ".$battery[$i]."";
                        }
                    }
                }
            }
            if(isset($_POST['core'])){
                $core = $_POST['core'];
                for($i=0; $i<sizeof($core); $i++){
                    if($i == 0){
                        if(sizeof($core) == 1){
                            $smd .= " AND (lower(p.core) LIKE lower('%".$core[$i]."%'))";
                        }
                        else{
                            $smd .= " AND (lower(p.core) LIKE lower('%".$core[$i]."%')";
                        }
                    }
                    elseif($i == sizeof($core) - 1){
                        $smd .= " OR lower(p.core) LIKE lower('%".$core[$i]."%'))";
                    }
                                    else{
                        $smd .= " OR lower(p.core) LIKE lower('%".$core[$i]."%')";
                    }
                }
            }
            if(isset($_POST['os'])){
                $os = $_POST['os'];
                for($i=0; $i<sizeof($os); $i++){
                    if($i == 0){
                        if(sizeof($os) == 1){
                            $smd .= " AND (lower(p.os) LIKE lower('%".$os[$i]."%'))";
                        }
                        else{
                            $smd .= " AND (lower(p.os) LIKE lower('%".$os[$i]."%')";
                        }
                    }
                    elseif($i == sizeof($os) - 1){
                        $smd .= " OR lower(p.os) LIKE lower('%".$os[$i]."%'))";
                    }
                                    else{
                        $smd .= " OR lower(p.os) LIKE lower('%".$os[$i]."%')";
                    }
                }
            }
            if(isset($_POST['network'])){
                $network = $_POST['network'];
                for($i=0; $i<sizeof($network); $i++){
                    if($i == 0){
                        if(sizeof($network) == 1){
                            $smd .= " AND (lower(p.network) LIKE lower('%".$network[$i]."%'))";
                        }
                        else{
                            $smd .= " AND (lower(p.network) LIKE lower('%".$network[$i]."%')";
                        }
                    }
                    elseif($i == sizeof($network) - 1){
                        $smd .= " OR lower(p.network) LIKE lower('%".$network[$i]."%'))";
                    }
                                    else{
                        $smd .= " OR lower(p.network) LIKE lower('%".$network[$i]."%')";
                    }
                }
            }
            if(isset($_POST['size'])){
                $size = $_POST['size'];
                for($i=0; $i<sizeof($size); $i++){
                    if($i == 0){
                        if(sizeof($size) == 1){
                            if($size[$i] == 0){
                                $smd .= " AND (p.size BETWEEN 0 AND 3)";
                            }
                            elseif($size[$i] == 3){
                                $smd .= " AND (p.size BETWEEN 3 AND 4)";
                            }
                            elseif($size[$i] == 4){
                                $smd .= " AND (p.size BETWEEN 4 AND 5)";
                            }
                            elseif($size[$i] == 5){
                                $smd .= " AND (p.size BETWEEN 5 AND 6)";
                            }
                            elseif($size[$i] == 6){
                                $smd .= " AND (p.size BETWEEN 6 AND 7)";
                            }
                            else{
                                $smd .= " AND (p.size >= ".$size[$i].")";
                            }
                        }
                        else{
                            if($size[$i] == 0){
                                $smd .= " AND (p.size BETWEEN 0 AND 3";
                            }
                            elseif($size[$i] == 3){
                                $smd .= " AND (p.size BETWEEN 3 AND 4";
                            }
                            elseif($size[$i] == 4){
                                $smd .= " AND (p.size BETWEEN 4 AND 5";
                            }
                            elseif($size[$i] == 5){
                                $smd .= " AND (p.size BETWEEN 5 AND 6";
                            }
                            elseif($size[$i] == 6){
                                $smd .= " AND (p.size BETWEEN 6 AND 7";
                            }
                            else{
                                $smd .= " AND (p.size >= ".$size[$i];
                            }
                        }
                    }
                    elseif($i == sizeof($size) - 1){
                        if($size[$i] == 0){
                            $smd .= " OR (p.size BETWEEN 0 AND 3))";
                        }
                        elseif($size[$i] == 3){
                            $smd .= " OR (p.size BETWEEN 3 AND 4))";
                        }
                        elseif($size[$i] == 4){
                            $smd .= " OR (p.size BETWEEN 4 AND 5))";
                        }
                        elseif($size[$i] == 5){
                            $smd .= " OR (p.size BETWEEN 5 AND 6))";
                        }
                        elseif($size[$i] == 6){
                            $smd .= " OR (p.size BETWEEN 6 AND 7))";
                        }
                        else{
                            $smd .= " OR (p.size >= ".$size[$i]."))";
                        }
                    }
                    else{
                        if($size[$i] == 0){
                            $smd .= " OR p.size BETWEEN 0 AND 3";
                        }
                        elseif($size[$i] == 3){
                            $smd .= " OR p.size BETWEEN 3 AND 4";
                        }
                        elseif($size[$i] == 4){
                            $smd .= " OR p.size BETWEEN 4 AND 5";
                        }
                        elseif($size[$i] == 5){
                            $smd .= " OR p.size BETWEEN 5 AND 6";
                        }
                        elseif($size[$i] == 6){
                            $smd .= " OR p.size BETWEEN 6 AND 7";
                        }
                        else{
                            $smd .= " OR p.size >= ".$size[$i];
                        }
                    }
                }
            }
            if(isset($_POST['resolution'])){
                $resolution = $_POST['resolution'];
                for($i=0; $i<sizeof($resolution); $i++){
                    if($i == 0){
                        if(sizeof($resolution) == 1){
                            $smd .= " AND (lower(p.resolution_type) LIKE lower('%".$resolution[$i]."%'))";
                        }
                        else{
                            $smd .= " AND (lower(p.resolution_type) LIKE lower('%".$resolution[$i]."%')";
                        }
                    }
                    elseif($i == sizeof($resolution) - 1){
                        $smd .= " OR lower(p.resolution_type) LIKE lower('%".$resolution[$i]."%'))";
                    }
                                    else{
                        $smd .= " OR lower(p.resolution_type) LIKE lower('%".$resolution[$i]."%')";
                    }
                }
            }
            if(isset($_POST['discount'])){
                $prod_discount = $_POST['discount'];
                for($i=0; $i<sizeof($prod_discount); $i++){
                    if($i == 0){
                        if(sizeof($prod_discount) == 1){
                            if($prod_discount[$i] == 80){
                                $smd .= " AND (p.prod_discount BETWEEN 80 AND 90)";
                            }
                            elseif($prod_discount[$i] == 60){
                                $smd .= " AND (p.prod_discount BETWEEN 60 AND 80)";
                            }
                            elseif($prod_discount[$i] == 40){
                                $smd .= " AND (p.prod_discount BETWEEN 40 AND 60)";
                            }
                            elseif($prod_discount[$i] == 20){
                                $smd .= " AND (p.prod_discount BETWEEN 20 AND 40)";
                            }
                            else{
                                $smd .= " AND (p.prod_discount BETWEEN 10 AND 20)";
                            }
                        }
                        else{
                            if($prod_discount[$i] == 80){
                                $smd .= " AND (p.prod_discount BETWEEN 80 AND 90";
                            }
                            elseif($prod_discount[$i] == 60){
                                $smd .= " AND (p.prod_discount BETWEEN 60 AND 80";
                            }
                            elseif($prod_discount[$i] == 40){
                                $smd .= " AND (p.prod_discount BETWEEN 40 AND 60";
                            }
                            elseif($prod_discount[$i] == 20){
                                $smd .= " AND (p.prod_discount BETWEEN 20 AND 40";
                            }
                            else{
                                $smd .= " AND (p.prod_discount BETWEEN 10 AND 20";
                            }
                        }
                    }
                    elseif($i == sizeof($prod_discount) - 1){
                        if($prod_discount[$i] == 80){
                            $smd .= " OR (p.prod_discount BETWEEN 80 AND 90))";
                        }
                        elseif($prod_discount[$i] == 60){
                            $smd .= " OR (p.prod_discount BETWEEN 60 AND 80))";
                        }
                        elseif($prod_discount[$i] == 40){
                            $smd .= " OR (p.prod_discount BETWEEN 40 AND 60))";
                        }
                        elseif($prod_discount[$i] == 20){
                            $smd .= " OR (p.prod_discount BETWEEN 20 AND 40))";
                        }
                        else{
                            $smd .= " OR (p.prod_discount BETWEEN 10 AND 20))";
                        }
                    }
                    else{
                        if($prod_discount[$i] == 80){
                            $smd .= " OR p.prod_discount BETWEEN 80 AND 90";
                        }
                        elseif($prod_discount[$i] == 60){
                            $smd .= " OR p.prod_discount BETWEEN 60 AND 80";
                        }
                        elseif($prod_discount[$i] == 40){
                            $smd .= " OR p.prod_discount BETWEEN 40 AND 60";
                        }
                        elseif($prod_discount[$i] == 20){
                            $smd .= " OR p.prod_discount BETWEEN 20 AND 40";
                        }
                        else{
                            $smd .= " OR p.prod_discount BETWEEN 10 AND 20";
                        }
                    }
                }
            }
            if(isset($_POST['clock'])){
                $clock = $_POST['clock'];
                for($i=0; $i<sizeof($clock); $i++){
                    if($i == 0){
                        if(sizeof($clock) == 1){
                            $smd .= " AND (p.clock >= ".$clock[$i].")";
                        }
                        else{
                            $smd .= " AND (p.clock >= ".$clock[$i];
                        }
                    }
                    elseif($i == sizeof($clock) - 1){
                        $smd .= " OR (p.clock >= ".$clock[$i]."))";
                    }
                    else{
                        $smd .= " OR p.clock >= ".$clock[$i];
                    }
                }
            }
            $i = 0;
            $productslist = [];
            $z = 0;
            $sql = "SELECT DISTINCT p.prod_id FROM product p, prod_spec s WHERE lower(p.prod_name) LIKE lower('%$search%') OR lower(p.prod_org_price) LIKE lower('%$search%') OR lower(p.prod_dis_price) LIKE lower('%$search%') OR lower(p.prod_discount) LIKE lower('%$search%') OR lower(p.prod_description) LIKE lower('%$search%') OR lower(p.catagory) LIKE lower('%$search%') OR lower(s.spec_head) LIKE lower('%$search%') OR lower(s.spec_value) LIKE lower('%$search%')
            OR lower(p.network) LIKE lower('%$search%') OR lower(p.brand) LIKE lower('%$search%') OR lower(p.model_num) LIKE lower('%$search%') OR lower(p.model_name) LIKE lower('%$search%') OR lower(p.core) LIKE lower('%$search%') OR lower(p.processor) LIKE lower('%$search%') OR lower(p.os) LIKE lower('%$search%') OR lower(p.network_support) LIKE lower('%$search%') OR lower(p.sensors) LIKE lower('%$search%') OR lower(p.other) LIKE lower('%$search%')".$ret;
            if($pro = $conn -> query($sql)){
                if($pro -> num_rows > 0){
                    $min_max = [];
                    while($data = $pro -> fetch_assoc()){
                        $prod = "SELECT prod_id, prod_dis_price, prod_org_price, prod_discount, prod_name, prod_delivery, images0 FROM product p WHERE ".$smd." AND p.prod_id=".$data['prod_id'];
                        //echo $prod;
                        if($collect = $conn -> query($prod)){
                            if($collect -> num_rows > 0){
                                while ($products = $collect -> fetch_assoc()){
                                    $review = "SELECT * FROM prod_rating WHERE prod_id=".$products['prod_id'].";";
                                    if($done = $conn -> query($review)){
                                        if($done -> num_rows > 0){
                                            $reviews = 0;
                                            $rate_count = $done -> num_rows;
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
                                            $products['rating'] = $rating;
                                            $products['reviews'] = $reviews;
                                            $products['rate_count'] = $rate_count;
                                        }
                                        else{
                                            if(isset($_POST['rating'])){
                                                continue;
                                            }
                                            $products['rating'] = 0;
                                            $products['reviews'] = 0;
                                            $products['rate_count'] = 0;
                                        }
                                    }
                                    if(isset($_COOKIE['id'])){
                                        $sl = "SELECT * FROM wishlist WHERE prod_id=".$products['prod_id']." AND id=".$_COOKIE['id'].";";
                                        if($prep = $conn -> query($sl)){
                                            if($prep -> num_rows > 0){
                                                $products['wishlisted'] = "wish-listed";
                                            }
                                            else{
                                                $products['wishlisted'] = "wish-list";
                                            }
                                        }
                                    }
                                    else{
                                        $products['wishlisted'] = "wish-list";
                                    }
                                    array_push($min_max, $products['prod_dis_price']);
                                    $products['minimum'] = min($min_max);
                                    $products['maximum'] = max($min_max);
                                    echo json_encode($products);
                                
                                }
                            }
                        }
                    }
                }
            }
                
        }
    }
?>