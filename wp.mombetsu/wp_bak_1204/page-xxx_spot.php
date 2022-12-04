<?php
/*
Template Name: 詳細：xxx紋別の観光
*/
get_header(); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php
    $sb_pic = SCF::get('sb_pic');
    $img_src = wp_get_attachment_image_src($sb_pic, 'full');
    ?>

    <div class="container">
      <div id="lrap">
        <div class="card">
          <div class="card-header"><span class="line-b">オホーツクスカイタワー</span></div>
          <div class="col-12 col-lg-12">
            <div class="overlay">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/kanko12_00.jpg" loading="lazy">
              <p style="font-size:2.4rem;">圧巻のパノラマ絶景を楽しもう！</p>
            </div>
          </div>
          <div class="card-body mbn">
            <h3 class="card-title">オホーツクスカイタワーとは？</h3>
            <p class="card-text">
              標高334mの紋別山（通称：大山）山頂付近を整備した公園に、高さ30.9メートルの大きさでそびえたつオホーツクスカイタワー。テレビの電波塔を兼ねた展望塔で市街地からもよく見えることから紋別のシンボルになっています。眼下には、市街地をはじめ、オホーツク海と知床、大雪連峰などを一望することができます。</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div id="lrap">
        <div class="card col-12 col-lg-8 mx-auto">
          <div class="overlay">
            <img class="roundtop" src="<?php echo get_template_directory_uri(); ?>/assets/img/kanko12_01.jpg" loading="lazy">
            <p style="font-size:2.4rem;">冬のオホーツクスカイタワー</p>
          </div>
          <div class="card-body mbn">
            <p class="card-text">
              オホーツクスカイタワーがある公園は、バードウォッチングや森林浴、植物観察など楽しめる遊歩道もあります。園内には、コテージもあり、週末を利用して家族や仲間達とアウトドアを満喫することができます。</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div id="lrap">
        <div class="card col-12 col-lg-8 mx-auto">
          <div class="overlay">
            <img class="roundtop" src="<?php echo get_template_directory_uri(); ?>/assets/img/kanko12_02.jpg" loading="lazy">
            <p style="font-size:2.4rem;">展望フロア</p>
          </div>
          <div class="card-body mbn">
            <p class="card-text">
              展望フロアでは、オホーツク海を望む、雄大な景色をパノラマビューで楽しむことができます。四季折々変化するオホーツクの絶景をお楽しみください。</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div id="lrap">
        <div class="col-12 col-lg-8 mx-auto">
          <table class="tb-m">
            <tbody>
              <tr>
                <th>施設名</th>
                <td><a href="https://sancho-mombetsu.org/free/okhotskskytower" class="linkout" target="_blink">オホーツクスカイタワー</a></td>
              </tr>
              <tr>
                <th>住所</th>
                <td>紋別市大山町４丁目２５－２</td>
              </tr>
              <tr>
                <th>電話番号</th>
                <td>0158-24-3165</td>
              </tr>
              <tr>
                <th>営業時間</th>
                <td>４月１日～１１月３０日　１０：００～２１：００<br>１２月１日～３月３１日　　１０：００～１８：００</td>
              </tr>
              <tr>
                <th>休館</th>
                <td>休館日　　１２月２９日～１月４日（元旦初日の出の時間帯は臨時開館の場合あり）</td>
              </tr>
              <tr>
                <th>駐車場</th>
                <td>７４台収容</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <section class="detail">
      <div class="container-fluid">
        <div class="row">
          <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2853.436390793513!2d143.32256011634976!3d44.34208577910393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f1288905365a84b%3A0x38261e96c412e5ff!2z44Kq44Ob44O844OE44Kv44K544Kr44Kk44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1668753503926!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section>



<?php endwhile;
endif; ?>

</main>

<?php get_footer(); ?>