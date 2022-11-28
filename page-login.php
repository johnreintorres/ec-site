<?php get_header();?>
<?php 

$surname = $name = $postal = $prefectures = $municipality = $street_bunch = $building_name = $phone = $birthday  = $email = $password = "";
$surname_err = $name_err =  $postal_err = $prefectures_err = $municipality_err = $street_bunch_err = $building_name_err = $phone_err = $birthday_err  = $email_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty(trim($_POST["email"]))){
    $email_err = "Please enter a email.";
  } else {
    $sql = "SELECT id FROM suppliers WHERE email = ?";
      if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_email);
        $param_email = trim($_POST["email"]);
        if(mysqli_stmt_execute($stmt)){
          mysqli_stmt_store_result($stmt);
          if(mysqli_stmt_num_rows($stmt) == 1){
            $email_err = "This email is already taken.";
          } else {
            $email = trim($_POST["email"]);
          }
        } else {
          echo "Something went wrong. Please try again later.";
        }
        mysqli_stmt_close($stmt);
      }
  }


  
  // Password area
  if(empty(trim($_POST["password"]))){
    $password_err = "Please enter a password.";
  } elseif(strlen(trim($_POST["password"]))< 6){
    $password_err = "Password must have atleast 6 characters.";
  } else {
    $password = trim($_POST["password"]);
  }

 
  // Surname area
  if(empty(trim($_POST["surname"]))){
    $surname_err = "Please enter Last name.";
  } else {
    $surname = trim($_POST["surname"]);
  }
    //  name area
    if(empty(trim($_POST["name"]))){
      $name_err = "Please enter name.";
    } else {
      $name = trim($_POST["name"]);
    }
      //  Posta area
      if(empty(trim($_POST["postal"]))){
        $postal_err = "Please enter postal.";
      } else {
        $postal = trim($_POST["postal"]);
      }
       //  Prefectures area
       if(empty(trim($_POST["prefectures"]))){
        $prefectures_err = "Please enter prefectures.";
      } else {
        $prefectures = trim($_POST["prefectures"]);
      }
      //  municipality area
      if(empty(trim($_POST["municipality"]))){
        $municipality_err = "Please enter municipality.";
      } else {
        $municipality = trim($_POST["municipality"]);
      }
       //  street_bunch area
       if(empty(trim($_POST["street_bunch"]))){
        $street_bunch_err = "Please enter street_bunch.";
      } else {
        $street_bunch = trim($_POST["street_bunch"]);
      }
      //  building_name area
      if(empty(trim($_POST["building_name"]))){
        $building_name_err = "Please enter building_name.";
      } else {
        $building_name = trim($_POST["building_name"]);
      }

      // phone area
      if(empty(trim($_POST["phone"]))){
        $phone_err = "Please enter a phone.";
      } elseif(strlen(trim($_POST["phone"]))< 11){
        $phoner_err = "Contact number must have atleast 11 characters.";
      } elseif(strlen(trim($_POST["phone"]))> 11){
        $phone_err = "Contact number must only be 11 characters.";
      } else {
        $phone = trim($_POST["phone"]);
      }
      //  birthday area
      if(empty(trim($_POST["birthday"]))){
        $birthday_err = "Please enter birthday.";
      } else {
        $birthday = trim($_POST["birthday"]);
      }
        
      //  birthday area
      if(empty(trim($_POST["birthday"]))){
        $birthday_err = "Please enter birthday.";
      } else {
        $birthday = trim($_POST["birthday"]);
      }



        

  // Checking input error before postign to db
  if(empty($surname_err) && empty($postal_err) && empty($prefectures_err) && empty($municipality_err) && empty($street_bunch_err) && empty($building_name_err) && empty($phone_err) && empty($birthday_err) && empty($email_err)  && empty($password_err)){
    // // Prepare an insert statement
    $sql = "INSERT INTO suppliers (surname, postal, prefectures, municipality, street_bunch, building_name, phone, birthday, email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
      if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "sssssss", $param_surname, $param_name, $param_postal, $param_prefectures, $param_municipality, $param_street_bunch, $param_building_name, $param_phone, $param_birthday, $param_email, $param_password);
        $param_email = $email;
        $param_password = password_hash($password, PASSWORD_DEFAULT);
        $param_surname = $surname;
        $param_name = $name;
        $param_postal = $postal;
        $param_prefectures = $prefectures;
        $param_municipality = $municipality;
        $param_street_bunch = $street_bunch;
        $param_building_name = $building_name;
        $param_phone = $phone;
        $param_birthday = $birthday;

        $param_token = 0;
            if(mysqli_stmt_execute($stmt)){
              header("location: login.php");
            } else {
              echo "Error: Could not be able to execute $sql. " . mysqli_error($link);
            }
            mysqli_stmt_close($stmt);
          }
        }

  mysqli_close($link);
}
?>
 
<section class="sign-in-section">
  <div class="first-box-container">
    <form>
      <div class="form-layout">
        <label>メールアドレス</label>
        <input type="email" class="input-form" id="email" placeholder="E-mail">
      </div>
      <div class="form-layout">
        <label>パスワード</label>
        <input type="password" class="input-form" id="password" placeholder="Password">
      </div>
      <a class="btn-form btn-block btn-size btn-color"><i class="fa fa-lock" aria-hidden="true"></i>ログインする</a>
      <p class="forgot-pw"><a href="">パスワードを忘れた方はこちら</a></p>

      <div class="checkbox">
        <label>
          <input type="checkbox" id="not-remember">ログインを保持しない
        </label>
      </div>
    </form>
  </div>
  <div class="form-instructions">
    <p>初めてご利用の方は下記へご入力下さい。</p>
  </div>
  <div class="second-box-container">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">      
  <div class="form-info-layout">
        <p class="p-contact">お客様情報</p>
      </div>

      <div class="form-content">
        <label class="main-label"><span>必須</span>お名前</label>
        <div class="form-layout-2   ">
          <label class="sub-label">姓</label>
          <input class="input-form-2" type="text" name="surname" placeholder="山田" value="<?php echo $surname; ?>">

        </div>
        <div class="form-layout-2 " >
          <label class="sub-label">名</label>
          <input class="input-form-2" type="text" name="name" placeholder="太郎" value="<?php echo $name; ?>"> 

        </div>
      </div>
      <div class="divider"></div>
      <div class="form-content">
        <label class="main-label">フリガナ</label>
        <div class="form-layout-2 " >
          <label class="sub-label">セイ</label>
          <input class="input-form-2" type="text" placeholder="ヤマダ" value="<?php echo $surname; ?>">

        </div>
        <div class="form-layout-2" >
          <label class="sub-label">メイ</label>
          <input class="input-form-2" type="text" placeholder="タロウ" value="<?php echo $name; ?>" >

        </div>
      </div>
      <div class="divider"></div>
      <div class="form-content">
        <label class="main-label"><span>必須</span>住所</label>
        <div class="form-layout-2" >
          <label class="sub-label">郵便番号</label>
          <input class="input-form-2" type="text" name="postal" placeholder="1500002" value="<?php echo $postal; ?>">

        </div>
        <div class="form-layout-2">
          <a href="#"><input class="btn-form-2" type="text" placeholder="郵便番号を調べる" ></a>
        </div>
        <div class="form-layout-3 " >

          <div class="form-layout-select">
            <label class="sub-label">都道府県</label>
            <select class="input-form-2">
              <option class="" value="" disabled selected>選択してください</option>
              <option class="" value="">群馬県</option>
              <option class="" value="">群馬県</option>
              <option class="" value="">群馬県</option>
              <option class="" value="">群馬県</option>
              <option class="" value="">群馬県</option>
              <option class="" value="">群馬県</option>
              <option class="" value="">群馬県</option>
              <option class="" value="">群馬県</option>
              <option class="" value="">群馬県</option>
              <option class="" value="">群馬県</option>
              <option class="" value="">群馬県</option>
              <option class="" value="">群馬県</option>
              <option class="" value="">群馬県</option>
              <option class="" value="">群馬県</option>
              <option class="" value="">群馬県</option>
              <option class="" value="">群馬県</option>
              <option class="" value="">群馬県</option>
              <option class="" value="">群馬県</option>
              <option class="" value="">群馬県</option>
              <option class="" value="">群馬県</option>
            </select>
          </div>
          <div class="form-layout-2 ">
            <label class="sub-label">市区町村</label>
            <input class="input-form-2" type="text" name="municipality" placeholder="渋谷区渋谷" value="<?php echo $municipality; ?>">

          </div>
        </div>
        <div class="form-layout-2 ">
          <label class="sub-label-long">町名番地</label>
          <input class="input-form-2-long" type="text" name="street_bunch" placeholder="1-2-3" value="<?php echo $street_bunch; ?>">

        </div>
        <div class="form-layout-2">
          <label class="sub-label-long">建物名</label>
          <input class="input-form-2-long" type="text" name="building_name" placeholder="渋谷ビル111(任意)" value="<?php echo $building_name; ?>" >

        </div>
      </div>
      <div class="divider"></div>
      <div class="form-content ">
        <label class="main-label"><span>必須</span>お名前</label>
        <div class="form-layout-2 ">
          <input class="input-long" type="text" name="phone" placeholder="0312345678" value="<?php echo $phone; ?>"  >
          <i class="fa fa-exclamation-circle" aria-hidden="true"></i> <label class="name-info"> ハイフンは入れずにご記入ください</label>
        </div>
      </div>
      <div class="divider"></div>
      <div class="form-content ">
        <label class="main-label">生年月日</label>
        <div class="form-layout-2">
          <select class="select-input" name="birthday" id="" value="<?php echo $birthday; ?>"  >
            <option class="" value="" disabled selected>選択してください</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
          </select>
        </div>
        <div class="form-layout-2">
          <select class="select-input" name="" id="" value="<?php echo $birthday; ?>">
            <option class="" value="" disabled selected>選択してください</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
          </select>
        </div>
        <div class="form-layout-2">
          <select class="select-input" name="" id="" value="<?php echo $birthday; ?>">
            <option class="" value="" disabled selected>選択してください</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
            <option class="" value="">群馬県</option>
          </select>

        </div>
      </div>
      <div class="divider"></div>
      <div class="form-content">
        <label class="main-label"><span>必須</span>メールアドレス</label>
        <div class="form-layout-2 ">
          <input class="input-long" type="text" name="email" placeholder="yamada@example.com" value="<?php echo $email; ?>">

        </div>
      </div>
      <div class="divider"></div>
      <div class="form-content">
        <label class="main-label"><span>必須</span>パスワード</label>
        <div class="form-layout-2 ">
          <input class="input-long" name="password" type="password" placeholder="" value="<?php echo $password; ?>">

        </div>
      </div>
      <div class="divider"></div>
      <div class="subscribe-layout">
        <label class="subscribe-label">メールマガジン購読</label>
        <div class="subscribe-checkbox">
          <label>
            <input type="checkbox" id="">購読する
          </label>
        </div>
      </div>
  </div>
  <div class="bottom-layout">
    <label class="bottom-label"><span><a href="#">個人情報保護方針 </a></span>に同意のうえ、「会員登録する」ボタンを押してください。</label>
    <a class="btn-form btn-block btn-size btn-color reg-btn">会員登録する</a>
    <!-- <input type="submit" class="btn btn-primary form-btn" value="Submit">  -->

  </div>
  </form>

</section>
<?php get_footer() ?>