<?php
/*
Template Name: トップ：紋別のグルメ
*/
get_header(); ?>

  <section>
    <div class="container">
      <div class="row p-3">
        <h2 class="mb-4"><span class="font-weight-bold line-c">紋別のグルメ</span></h2>
        <p class="p-3">
          オホーツク海に面した港町“もんべつ”は、グルメのまちとしても有名なまち。栄養豊かなオホーツク海で育った海鮮グルメはもちろんのこと、その他にも地元の素材を生かした美味しいグルメが溢れるグルメタウンです。紋別を訪れたなら、絶対に外すことができない、とっておきの美味しいグルメをご紹介します。
        </p>
      </div>
    </div>
  </section>

  <div class="container">
    <div id="wrap">


      <?php $args = array(
        'numberposts' => 20,
        'post_type' => 'gourmet',
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
              <h3 class="card-title bb-c"><?php $list_lead = SCF::get('list_lead'); echo esc_html($list_lead); ?></h3>
              <p class="card-text"><?php $list_text = SCF::get('list_text'); echo nl2br($list_text); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-c">詳細を見る</a>
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


<?php get_footer(); ?>