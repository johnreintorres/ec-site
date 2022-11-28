<?php get_header() ?>

<div class="line-banner">
  <img class="line-banner-img" src="<?php echo get_template_directory_uri();?>/assets/images/line-banner.jpg" alt="">

</div>
<section class="contact-section">

  <div class="second-box-container">
    <div class="form-info-layout">
      <p class="p-contact">お問い合わせ</p>
    </div>
    <div class="contacts-instruction">
      <p>ご不明点などございましたら、些細なことでもかまいませんのでお気軽にお問い合わせ下さい。</p>
    </div>
    <div class="divider"></div>
    <form>
      <div class="contact-form-layout">
        <label class="contact-main-label">お名前<span>必須</span></label>
        <div class="contact-form">
          <div class="form-layout-2">
            <label class="sub-label">姓</label>
            <input class="input-form-2" type="text" placeholder="山田">
          </div>
          <div class="form-layout-2">
            <label class="sub-label">名</label>
            <input class="input-form-2" type="text" placeholder="太郎">
          </div>
        </div>
      </div>
      <div class="divider"></div>
      <div class="contact-form-layout">
        <label class="contact-main-label">フリガナ<span>必須</span></label>
        <div class="contact-form">
          <div class="form-layout-2">
            <label class="sub-label">セイ</label>
            <input class="input-form-2" type="text" placeholder="ヤマダ">
          </div>
          <div class="form-layout-2">
            <label class="sub-label">メイ</label>
            <input class="input-form-2" type="text" placeholder="タロウ">
          </div>
        </div>
      </div>
      <div class="divider"></div>
      <div class="contact-form-layout">
        <label class="contact-main-label">電話番号<span>必須</span></label>
        <div class="contact-form">
          <div class="form-layout-2">
            <input class="input-long" type="text" placeholder="0312345678">
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i> <label class="name-info">
              ハイフンは入れずにご記入ください</label>
          </div>
        </div>
      </div>
      <div class="divider"></div>
      <div class="contact-form-layout">
        <label class="contact-main-label">メールアドレス<span>必須</span></label>
        <div class="contact-form">
          <div class="form-layout-2">
            <input class="input-long" type="text" placeholder="yamada@example.com">
          </div>
        </div>
      </div>
      <div class="divider"></div>
      <div class="contact-form-layout">
        <label class="contact-main-label">件名</label>
        <div class="contact-form">
          <div class="form-layout-2">
            <input class="input-long" type="text" placeholder="商品に関するお問い合わせ">
          </div>
        </div>
      </div>
      <div class="divider"></div>
      <div class="contact-form-layout">
        <label class="contact-main-label">お問い合わせ種別</label>
        <div class="contact-form">
          <div class="form-layout-2">
            <select class="input-long" name="" id="" required>
              <option class="" value="" disabled selected>選択してください。</option>
              <option class="" value="">No results found</option>

            </select>
          </div>
        </div>
      </div>
      <div class="divider"></div>
      <div class="contact-form-layout">
        <label class="contact-main-label">お問い合わせ種別</label>
        <div class="contact-form">
          <div class="form-layout-2">
            <textarea class="input-long" name="" id="" cols="30" rows="10"></textarea>
          </div>
        </div>
      </div>
      <div class="divider"></div>
      <div class="contact-form-layout">
        <label class="contact-main-label">お問い合わせ種別</label>
        <div class="contact-form">
          <div class="form-layout-2">
            <div class="btn-select-files"><a href="#"><i class="fa fa-folder-open" aria-hidden="true">ファイルを選択</i></a>
            </div>
            <p class="select-file-info">最大５ファイル（合計２０MB）まで写真ファイルを添付することができます。</p>
          </div>
        </div>
    </form>
  </div>
  </div>
  <div class="bottom-layout">
    <label class="bottom-label"><span><a href="#">個人情報保護方針 </a></span>に同意のうえ、「会員登録する」ボタンを押してください。</label>
    <a class="btn-form btn-block btn-size btn-color reg-btn">入力内容を確認</a>

  </div>

</section>


<?php get_footer() ?>