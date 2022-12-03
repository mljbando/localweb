<?php
/*
Template Name: トップ：紋別の観光
*/
get_header(); ?>

<main>

  <section>
    <div class="container">
      <div class="row p-3">
        <h2 class="mb-4"><span class="font-weight-bold line-b">紋別の観光</span></h2>
        <p class="p-3">
          紋別には四季を楽しむ観光スポットが満載です。四季折々に彩りを変える大地のキャンバスは、さまざまな景色で訪れる人の目を楽しませてくれます。<br>
          自然豊かな絶景から、子供から大人まで楽しむことができる観光スポットまで、ご家族から友達同士、恋人同士まで、心ゆくまで楽しむことができます。ぜひ一度、実際に足を運んで、ゆっくりと流れる“紋別時間”をお楽しみください。
        </p>
        <div class="border-b"></div>
      </div>
    </div>
  </section>


  <div class="container">
    <div id="wrap">


      <?php $args = array(
        'numberposts' => 20,
        'post_type' => 'spot',
        'order' => 'DESC'
      );
      $customPosts = get_posts($args);
      if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
      ?>
          <?php
          $list_pic = SCF::get('list_pic');
          $img_src = wp_get_attachment_image_src($list_pic, 'full');
          ?>

          <div class="card">
            <div class="overlay">
              <img src="<?php echo $img_src[0]; ?>">
              <p><?php $list_pictext = SCF::get('list_pictext'); echo nl2br($list_pictext); ?></p>
            </div>
            <div class="card-body">
              <h3 class="card-title bb-b"><?php $list_lead = SCF::get('list_lead'); echo esc_html($list_lead); ?></h3>
              <p class="card-text"><?php $list_text = SCF::get('list_text'); echo nl2br($list_text); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-b">詳細を見る</a>
            </div>
          </div>

        <?php endforeach; ?>
      <?php else :
      ?>

      <?php endif;
      wp_reset_postdata();
      ?>

    </div>
  </div>

</main>

<?php get_footer(); ?>