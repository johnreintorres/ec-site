<?php get_header() ?>

<section>
  <div class="two900-area">
    <div class="two900-section">
      <div class="two900-top-title">
        <h2>今月のラインナップ</h2>
      </div>
      <div class="two900-bot-title">
        <h2>選べる4,900円</h2>
        <span>定期コース</span>
      </div>
      <div class="two200-title-p">
        <p> 韓国コスメの中でも人気のパックやスキンケア商品を集め、選んで楽しいお得な定期コースで毎月ご自宅にお届けします。<br>
          高品質で有名なマスクやデイケア+αのスペシャルケアまで揃う、豊富なラインナップからお選びください。</p>
      </div>
    </div>

    <form action="">
      <!-- Top form input area -->
      <div class="two900-form-area">
        <div class="two900-form-section">
          <div class="two900-form-title">
            <h2>マスクパック・クリームパック</h2>
          </div>
          <div class="form-title-bot-p">
            <p>商品を4つ選択してください</p>
          </div>
          <div class="two900-form-cont">
          <div class="form-input-group">
          <?php  
              $args = array(
                  'post_type'      => 'product',
                  'posts_per_page' => 39,
                  'product_cat' => 'mask-cream-4900',

              );
              $loop = new WP_Query( $args );

              while ( $loop->have_posts() ) : $loop->the_post();
                  global $product;
                  echo '<div class="product-layout">';
                  echo '<a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().' '.'</a>';
                  echo '<div class="title-cart-layout">';
                  echo '<span class="prod-label">'.get_the_title().'</span>';
                  echo the_excerpt();
                  echo  woocommerce_template_loop_add_to_cart();
                  echo '</div>';
                  echo '</div>';
              endwhile;

              wp_reset_query();

          ?>
          </div>
        </div>

        <!--Second input area -->
        <div class="two900-form-area second-form-area">
          <div class="two900-form-section second-form-section">
            <div class="two900-form-title">
              <h2>+ <br> <br> デイリーケアコスメ</h2>
            </div>
            <div class="form-title-bot-p">
              <p>商品を4つ選択してください</p>
            </div>
            <div class="two900-form-cont">
            <div class="form-input-group">
            <?php  
              $args = array(
                  'post_type'      => 'product',
                  'posts_per_page' => 15,
                  'product_cat' => 'daily-cosmetics',

              );
              $loop = new WP_Query( $args );

              while ( $loop->have_posts() ) : $loop->the_post();
                  global $product;
                  echo '<div class="product-layout">';
                  echo '<a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().' '.'</a>';
                  echo '<div class="title-cart-layout">';
                  echo '<span class="prod-label">'.get_the_title().'</span>';
                  echo the_excerpt();
                  echo  woocommerce_template_loop_add_to_cart();
                  echo '</div>';
                  echo '</div>';
              endwhile;

              wp_reset_query();

          ?>
          </div>
            </div>
          </div>
          <!--third input area -->
          <div class="two900-form-area third-form-area">
            <div class="two900-form-section third-form-section">
              <div class="two900-form-title">
                <h2>+ <br> <br> デイリーケアコスメ</h2>
              </div>
              <div class="form-title-bot-p">
                <p>商品を4つ選択してください</p>
              </div>
              <div class="two900-form-cont">
              <div class="form-input-group">
            <?php  
              $args = array(
                  'post_type'      => 'product',
                  'posts_per_page' => 10,
                  'product_cat' => 'special-cosmetics'
              );
              $loop = new WP_Query( $args );

              while ( $loop->have_posts() ) : $loop->the_post();
                  global $product;
                  echo '<div class="product-layout">';
                  echo '<a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().' '.'</a>';
                  echo '<div class="title-cart-layout">';
                  echo '<span class="prod-label">'.get_the_title().'</span>';
                  echo the_excerpt();
                  echo  woocommerce_template_loop_add_to_cart();
                  echo '</div>';
                  echo '</div>';
              endwhile;

              wp_reset_query();

          ?>
          </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- cart area -->
  <div class="cart-area">
    <div class="cart-head">
      <p class="cart-red-p">韓国のパックは偽物も多く出回っていますが、当社では正規ルートでの輸入品のみのお取扱いです。</p>
      <p class="cart-bot-p">※十分に在庫を確保するよう務めておりますが、商品によっては欠品(入荷待ち)、商品の入れ替えをしている場合がございます。<br>
        ※パッケージのリニューアルをしている場合がございます。</p>
    </div>
    <div class="cart-submit">
      <!-- <input type="submit" value="ADD TO CART"> -->
      <!-- <p class="cart-submit-p">選択した商品数を確認して下さい</p> -->
      <div class="cart-btn">
        <a href="">ご使用になる前に</a>
      </div>
      <div class="cart-links-area">
        <div class="cart-link">
          <a href="">選べる2,900円定期コースを詳しく見る</a>
        </div>
        <div class="cart-link">
          <a href="">プレゼント用商品を詳しく見る</a>
        </div>
      </div>
    </div>
  </div>
  </form>

  </div>
  </div>
</section>



<?php get_footer() ?>