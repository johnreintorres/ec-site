<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/rei.css">

  <title>Index</title>
  <?php wp_head(); ?>

</head>

<body >
  <nav>
    <div class="nav-area">
      <div class="nav-icon"><a href="/development/ec-site-wp/"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt=""></a></div>
      <ul class="nav-ul">
        <a href="/development/ec-site-wp/my-account" class="nav-link">
          <li class="nav-li"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon_user.png" alt=""></li>
        </a>

        <a href="/development/ec-site-wp/cart" class="nav-link">
          <li class="nav-li"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon_cart.png" alt=""><span><?php echo WC()->cart->get_cart_contents_count(); ?></span>
</li>
        </a>
        <div class="menu-btn" onclick="myFunction(this); toogleSlideMenu(this);">
          <div class="menu-abstract">
            <div class="mod-gnav-btn-lines">
              <div class="bar1"></div>
              <div class="bar2"></div>
              <div class="bar3"></div>
            </div>
          </div>
        </div>
      </ul>
    </div>
  </nav>
  <section>
    <div id="myNav" class="overlay">
      <div class="overlay-content">
        <div class="nav-layout">
          <img class="nav-img" src="<?php echo get_template_directory_uri();?>/assets/images/nav-img.jpg" alt="">
          <div class="course-other-layout">
            <!-- josel changes -->
            <div class="nav-head-title">
              <h4>COURSE</h4>
              <h4>OTHER</h4>
            </div>
            <div class="links-group">
              <div class="links-group-cont">
              <a href="/development/ec-site-wp/2900-2">選べる2,900円定期コース</a>
              <a href="/development/ec-site-wp/4900-2">選べる4,900円定期コース</a>
              <a href="/development/ec-site-wp/3200-2">プレゼント用3,200円(ラッピング付単発購入)</a>
              <a href="/development/ec-site-wp/5200-2">プレゼント用5,200円(ラッピング付単発購入)</a>
              </div>
              <div class="links-group-cont">
              <a href="/development/ec-site-wp/my-account">マイページ</a>
              <a href="/development/ec-site-wp/faq">会社概要</a>
              <a href="/development/ec-site-wp/guide">ご利用ガイド</a>
              <a href="/development/ec-site-wp/company">よくある質問</a>
              </div>
            </div>
            <div class="nav-bot-links">
            <img class="course-logo" src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="">
            <div class="contact-btn">
                <a>お問い合わせ</a>
              </div>
            </div>
            <!-- josel changes -->

            <!-- <div class="course-layout">
              <h4>COURSE</h4>
              <a href="/development/ec-site-wp/2900-2">選べる2,900円定期コース</a>
              <a href="/development/ec-site-wp/4900-2">選べる4,900円定期コース</a>
              <a href="/development/ec-site-wp/3200-2">プレゼント用3,200円(ラッピング付単発購入)</a>
              <a href="/development/ec-site-wp/5200-2">プレゼント用5,200円(ラッピング付単発購入)</a>
              <img class="course-logo" src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="">
            </div>
            <div class="other-layout">
              <h4>OTHER</h4>
              <a href="/development/ec-site-wp/login">マイページ</a>
              <a href="/development/ec-site-wp/faq">よくある質問</a>
              <a href="/development/ec-site-wp/guide">ご利用ガイド</a>
              <a href="/development/ec-site-wp/company">会社概要</a>
              <div class="contact-btn">
                <a>お問い合わせ</a>
              </div> -->
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>