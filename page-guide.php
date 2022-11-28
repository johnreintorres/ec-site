<?php get_header() ?>

<section>
    <div class="guide-area">
      <div class="guide-section">
        <div class="guide-title">
          <h2>ご利用ガイド</h2>
        </div>
        <div class="guide-link">
          <a href="#1" class="guide-link-cont">商品の選択</a>
          <a href="#2" class="guide-link-cont">ログイン・お客様情報の入力</a>
          <a href="#3" class="guide-link-cont">注文内容のご確認</a>
          <div id="1"></div>
        </div>
        <div class="guide-ques">
          <div class="guide-ques-title">
            <h2>商品の選択</h2>
          </div>
          <div class="guide-steps">
            <img class="guide-steps-img" src="<?php echo get_template_directory_uri();?>/assets/images/guide_step01.jpg" alt="">
            <p class="guide-top-p">商品ページより各個別商品の中から上部に指定の数を選択したあと、最下部の「ADD TO CART」を押すとカート画面に遷移します。 <br><br><br>
              ご注文される商品名と個数を確認の上、【購入手続きへ進む】ボタンをクリックします。
              <div id="2"></div>
            </p>
          </div>
        </div>

        <div class="guide-ques">
          <div class="guide-ques-title">
            <h2>ログイン・お客様情報の入力</h2>
          </div>
          <div class="guide-steps">
            <img class="guide-steps-img" src="<?php echo get_template_directory_uri();?>/assets/images/guide_step02.jpg" alt="">
            <p class="guide-top-p">すでに会員登録がお済みのお客様はメールアドレスとパスワードをご入力いただき、【ログインする】ボタンをクリックします。</p>
            <img class="guide-steps-img" src="<?php echo get_template_directory_uri();?>/assets/images/guide_step03.jpg" alt="">
            <p class="guide-top-p no-padd">会員登録がお済みでないお客様はこちらに「お客様情報」をご入力いただき、そのまま「お届け日設定」の項目へお進みください。</p>

          </div>
        </div>


        <div class="guide-ques none-bd-area">
          <div class="guide-ques-title  none-bd">
            <h2>お届け方法・お支払い方法の入力</h2>
          </div>
          <div class="guide-steps">
            <img class="guide-steps-img" src="<?php echo get_template_directory_uri();?>/assets/images/guide_step05.jpg" alt="">
            <p class="guide-top-p ">
              お届けの希望日、時間帯がございましたら選択してください。<br>特にお届け日時のご希望がない場合には、<br>お届け希望日はデフォルトのまま、（次営業日から７日後が最初から自動入力されています。）
              <br>時間帯指定【指定なし】を選択してください。<br>エコ配での配送の場合、時間指定は出来ません。万一、お荷物を受け取れなかった場合は、再配達にて時間指定を行えますので、そちらをご利用ください。<br><br>次に、定期コースの配送頻度をお選びください<br>コースによっては、１ヶ月ごとのみのご案内の場合があります。ご了承下さい。<br>日にちは、2回目以降のお届けが、月のいつ頃になるかをお選びいただけます。
            </p>
          </div>
        </div>

        <div class="guide-ques none-bd-area2">
          <div class="guide-ques-title  none-bd">
            <h2>クレジットカード決済</h2>
          </div>
          <div class="guide-steps">
            <img class="guide-steps-img" src="<?php echo get_template_directory_uri();?>/assets/images/guide_step06.jpg" alt="">
            <p class="guide-top-p">お支払い方法でクレジットカードをお選びいただいた方は、こちらの画面でカード情報の入力を行い、【登録する】ボタンをクリックします。</p>
          </div>
        </div>


        <div class="guide-ques none-bd-area2">
          <div class="guide-ques-title  none-bd">
            <h2>後払い</h2>
          </div>
          <div class="guide-steps">
            <img class="guide-steps-img" src="<?php echo get_template_directory_uri();?>/assets/images/guide_step04.jpg" alt="">
            <div id="3"></div>
            <p class="guide-top-p">お支払い方法で後払いをお選びいただいた方は、表示内容をご確認頂き、そのまま最下部にある【確認画面に進む】ボタンをクリックします。</p>
          </div>
        </div>

        <div class="guide-ques">
          <div class="guide-ques-title">
            <h2>ご注文内容のご確認</h2>
          </div>
          <div class="guide-steps">
            <img class="guide-steps-img" src="<?php echo get_template_directory_uri();?>/assets/images/guide_step07.jpg" alt="">
            <p class="guide-top-p no-padd">ご注文の商品やご登録の情報に間違いがないかご確認いただき、問題がなければ【ご注文を確定する】ボタンをクリックします。</p>
          </div>
        </div>

        <div class="guide-ques">
          <div class="guide-ques-title">
            <h2>注文完了</h2>
          </div>
          <div class="guide-steps guide-bot-steps">
            <p class="guide-top-p guide-bot-p">以上でご注文手続きは終了となります。<br><br>※弊社の定期購入コースの場合、2回目以降にお届けする商品はマイページよりご変更頂けます。
            </p>
          </div>
        </div>



      </div>
    </div>
  </section>


<?php get_footer() ?>
