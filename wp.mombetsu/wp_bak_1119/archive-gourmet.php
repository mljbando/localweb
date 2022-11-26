<?php
/*
Template Name: トップ：紋別のグルメ
*/
get_header(); ?>
<main id="about">
 <div class="container">

 <div class="row col-lg-6 mt-3">
<section id="" class="">


<?php
  $args = [
    'post_type' => 'gourmet', // カスタム投稿名が「gourmet」の場合
    'posts_per_page' => 20, // 表示する数
    'order' => 'DESC', 
  ];
  $my_query = new WP_Query($args); ?>
 
<?php if ($my_query->have_posts()): // 投稿がある場合 ?>
 
  <div class="">
 
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
 
    <!-- ▽ ループ開始 ▽ -->
 
    <?php
    $list_pic = SCF::get('list_pic');
    $img_src = wp_get_attachment_image_src($list_pic,'full');
    $list_pictext = SCF::get('list_pictext');
    $list_lead = SCF::get('list_lead');
    $list_text = SCF::get('list_text');
    ?>



    <div>
        <img src="<?php echo $img_src[0]; ?>">
    </div>
    <div>
        <?php echo $list_pictext; ?>
    </div>
    <div>
        <?php echo $list_lead; ?>
    </div>
    <div>
        <?php echo $list_text; ?>
    </div>    
    <div>
    <a href="<?php $permalink = get_permalink(); ?>" class="stretched-link">詳細を見る</a>
    </div> 
    
 
    <!-- △ ループ終了 △ -->
 
    <?php endwhile; ?>
 
</div>
 
<?php else: // 投稿がない場合?>
 
  <p>まだ投稿がありません。</p>
 
<?php endif; wp_reset_postdata(); ?>











</section>
    </div><!-- End .row-->


 </div>
</main>
<?php get_footer(); ?>