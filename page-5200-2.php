<?php get_header() ?>

<section>
  <div class="three200-area">
    <div class="three200-section">

      <div class="three200-bot-title">
        <h2>プレゼント用</h2>
      </div>
      <div class="three200-title-p">
        <p>女性がプレゼントされて嬉しいパックやスキンケア商品を、豊富なラインナップの中から選んで、かわいくラッピングします。<br>
          ご予算に合わせ誕生日プレゼントや感謝のプレゼント、ホワイトデー、母の日、クリスマスプレゼントなどにもおすすめです。（お渡しする方への直送も可能）</p>
      </div>
    </div>

    <form action="">

      <div class="top-selection-area">
        <div class="selection-field">
          <div class="selection-check-cont">
            <input type="checkbox" name="" id="">
            <label for="">手提げ袋あり(+300円)</label>
            <img src="<?php echo get_template_directory_uri();?>/assets/images/icon_shoppingbag.png" alt="">
          </div>
          <div class="selection-btn">
            <a href="">3,200円の(ラッピング代込)の商品を見る</a>
          </div>
        </div>

        <div class="selection-field right-field">
          <div class="selection-check-cont">
            <input type="checkbox" name="" id="">
            <label for="">手提げ袋無し</label>
          </div>
          <div class="selection-btn">
            <a href="">5,200円の(ラッピング代込)の商品を見る</a>
          </div>
        </div>
      </div>

      <!-- 5200 area -->

      <!-- Second product list area  -->
      <div class="prod-list-area second-product-list-field">
        <div class="prod-list-section">
          <div class="prod-list-title">
            <h2>5,200円<span>(ラッピング代込)商品一覧</span> </h2>
          </div>
          <div class="prod-list-sub-title">
            <h2>マスクパック・クリームパック</h2><span class="orange-line"></span>
            <p>商品を4つ選択してください</p>
          </div>

          <div class="prod-list-group">
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



          <div class="prod-list-area second-product-list-field">
            <div class="prod-list-section">

              <div class="prod-list-sub-title second-prod-list-sub">
                <h2>デイリーケアコスメ</h2><span class="orange-line"></span>
                <p>商品を1つ選択してください</p>
              </div>

              <div class="prod-list-group">
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


            <!-- Third product list area -->


            <div class="prod-list-area second-product-list-field second-last-field">
              <div class="prod-list-section">

                <div class="prod-list-sub-title second-prod-list-sub">
                  <h2>スペシャルケアコスメ</h2><span class="orange-line"></span>
                  <p>商品を1つ選択してください</p>
                </div>

                <div class="prod-list-group">
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



              <div class="prod-bot-text">
                <p class="prod-bot-text-red-p">韓国のパックは偽物も多く出回っていますが、当社では正規ルートでの輸入品のみのお取扱いです。</p>
                <p class="prod-bot-text-bot-p">※十分に在庫を確保するよう務めておりますが、商品によっては欠品(入荷待ち)、商品の入れ替えをしている場合がございます。<br>
                  ※パッケージのリニューアルをしている場合がございます。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="wrapper-area second-wrapper-sec">
          <div class="wrapper-section">
            <div class="wrapper-sub-area"><span class="wrapper-sub-title">ラッピング</span></div>
            <div class="wrapper-title-p">以下よりお好きなラッピングを選択してください</div>
            <div class="radio-btn-area">
              <div class="radio-btn-group">
                <div class="radio-btn-left">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/text_wrapping1.png" alt="">
                  <h2>ナチュラルギフトBOX</h2>
                  <span>リボンを選択してください</span>
                  <div class="input-group"><input type="radio" name="wrapper-radio" id="r1" value="r1"><label
                      for="r1">レッド</label></div>
                  <div class="input-group"><input type="radio" name="wrapper-radio" id="r2" value="r2"><label
                      for="r2">ネイビー</label></div>
                  <div class="input-group"><input type="radio" name="wrapper-radio" id="r3" value="r3"><label
                      for="r3">ブラウン</label></div>
                  <div class="input-group"><input type="radio" name="wrapper-radio" id="r4" value="r4"><label
                      for="r4">ホワイト</label></div>
                </div>
                <div class="radio-btn-output">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/bg_wrapping1_red.png" alt="">
                </div>
              </div>
              <div class="radio-btn-group">
                <div class="radio-btn-left">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/text_wrapping2.png" alt="">
                  <h2>袋ラッピング</h2>
                  <span>カラーを選択してください。</span>
                  <div class="input-group"><input type="radio" name="wrapper-radio" id="r1" value="r1"><label
                      for="r1">ピンク</label></div>
                  <div class="input-group"><input type="radio" name="wrapper-radio" id="r2" value="r2"><label
                      for="r2">ブルー</label></div>
                  <div class="input-group"><input type="radio" name="wrapper-radio" id="r3" value="r3"><label
                      for="r3">ブラウン</label></div>
                </div>
                <div class="radio-btn-output2">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/bg_wrapping2_navy.png" alt="">
                </div>
              </div>
            </div>
          </div>

          <div class="wrapper-submit">
            <!-- <input type="submit" value="ADD TO CART"> -->
            <div class="cart-btn">
              <a href="">ご使用になる前に</a>
            </div>
          </div>



          <!-- 3200 area -->

          <div class="prod-list-area">
            <div class="prod-list-section">
              <div class="prod-list-title">
                <h2>3,200円 <span>(ラッピング代込)商品一覧</span> </h2>
              </div>
              <div class="prod-list-sub-title">
                <h2>マスクパック・クリームパック(全2枚セット)</h2><span class="orange-line"></span>
                <p>商品を4つ選択してください</p>
              </div>

              <div class="prod-list-group">
              <div class="form-input-group">
              <?php  
              $args = array(
                  'post_type'      => 'product',
                  'posts_per_page' => 16,
                  'product_cat' => 'mask-cream',

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



              <div class="prod-list-area second-prod-list-area">
                <div class="prod-list-section">

                  <div class="prod-list-sub-title second-prod-list-sub">
                    <h2>デイリーケアコスメ</h2><span class="orange-line"></span>
                    <p>商品を1つ選択してください</p>
                  </div>

                  <div class="prod-list-group">
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
                <div class="prod-bot-text">
                  <p class="prod-bot-text-red-p">韓国のパックは偽物も多く出回っていますが、当社では正規ルートでの輸入品のみのお取扱いです。</p>
                  <p class="prod-bot-text-bot-p">※十分に在庫を確保するよう務めておりますが、商品によっては欠品(入荷待ち)、商品の入れ替えをしている場合がございます。<br>
                    ※パッケージのリニューアルをしている場合がございます。</p>
                </div>
              </div>

              <div class="wrapper-area">
                <div class="wrapper-section">
                  <div class="wrapper-sub-area"><span class="wrapper-sub-title">ラッピング</span></div>
                  <div class="wrapper-title-p">以下よりお好きなラッピングを選択してください</div>
                  <div class="radio-btn-area">
                    <div class="radio-btn-group">
                      <div class="radio-btn-left">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/text_wrapping1.png" alt="">
                        <h2>ナチュラルギフトBOX</h2>
                        <span>リボンを選択してください</span>
                        <div class="input-group"><input type="radio" name="wrapper-radio" id="r1" value="r1"><label
                            for="r1">レッド</label></div>
                        <div class="input-group"><input type="radio" name="wrapper-radio" id="r2" value="r2"><label
                            for="r2">ネイビー</label></div>
                        <div class="input-group"><input type="radio" name="wrapper-radio" id="r3" value="r3"><label
                            for="r3">ブラウン</label></div>
                        <div class="input-group"><input type="radio" name="wrapper-radio" id="r4" value="r4"><label
                            for="r4">ホワイト</label></div>
                      </div>
                      <div class="radio-btn-output">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/bg_wrapping1_red.png"
                          alt="">
                      </div>
                    </div>
                    <div class="radio-btn-group">
                      <div class="radio-btn-left">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/text_wrapping2.png" alt="">
                        <h2>袋ラッピング</h2>
                        <span>カラーを選択してください。</span>
                        <div class="input-group"><input type="radio" name="wrapper-radio" id="r1" value="r1"><label
                            for="r1">ピンク</label></div>
                        <div class="input-group"><input type="radio" name="wrapper-radio" id="r2" value="r2"><label
                            for="r2">ブルー</label></div>
                        <div class="input-group"><input type="radio" name="wrapper-radio" id="r3" value="r3"><label
                            for="r3">ブラウン</label></div>
                      </div>
                      <div class="radio-btn-output2">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/bg_wrapping2_red.png"
                          alt="">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="wrapper-submit">
                  <!-- <input type="submit" value="ADD TO CART"> -->
                  <div class="cart-btn">
                    <a href="">ご使用になる前に</a>
                  </div>
                </div>
              </div>

            </div>



    </form>
  </div>
</section>



<?php get_footer() ?>