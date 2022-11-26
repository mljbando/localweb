<?php
/*
Template Name: 詳細：紋別の観光
*/
get_header(); ?>
<main id="about">
 <div class="container">

 <?php if(have_posts()): while(have_posts()): the_post();?>

<section id="" class="mt-5">


<?php
  $sb_pic = SCF::get('sb_pic');
  $img_src = wp_get_attachment_image_src($sb_pic,'full');
?>
<?php if(!empty($sb_pic)):?>
    <div>【要素：観光地画像】</div>

    <div>
        <img src="<?php echo $img_src[0]; ?>">
    </div>
    <?php else: ?>
<?php endif;?>



<?php $sb_pictext= SCF::get( 'sb_pictext' );?>
<?php if(!empty($sb_pictext)):?>
    <div>【要素：キャッチコピー】</div>
    <div>
        <?php echo $sb_pictext; ?>
    </div>
    <?php else: ?>
<?php endif;?>


<?php $sb_lead= SCF::get( 'sb_lead' );?>
<?php if(!empty($sb_lead)):?>
<div>【要素：リード文】</div>
    <div>
        <?php echo $sb_lead; ?>
    </div>
    <?php else: ?>
<?php endif;?>


<?php $sb_text = SCF::get('sb_text'); echo nl2br($sb_text);?>
<?php if(!empty($sb_text)):?>
    <div>【要素：本文】</div>

    <div>
        <?php echo $sb_text; ?>
    </div>
    <?php else: ?>
<?php endif;?>


<div>【要素：ループ（画像～リード文～本文）】</div>
<?php
$get_group = SCF::get( 'sb_loop' );
foreach ( $get_group as $fields ) {
?>
<?php if(!empty($get_group)):?>
<div>【要素：観光地画像】</div>
<div>
<?php echo wp_get_attachment_image( $fields['sb_looppic'], 'full' );?>
</div>
<div>【要素：リード文】</div>
<div>
<?php echo esc_html( $fields['sb_looppictext'] ); ?>
</div>
<div>【要素：本文】</div>
<div>
<?php echo nl2br( $fields['sb_looptext'] ); ?>
</div>
<?php else: ?>
<?php endif;?>
<?php } ?>




<div>【要素：項目/詳細】</div>
<?php $get_group = SCF::get( 'looptable' );
foreach ( $get_group as $fields ) {
?>
<?php if(!empty($get_group)):?>
<div>
<?php echo esc_html( $fields['tableitem'] ); ?>/<?php echo nl2br( $fields['tabledetail'] ); ?>
</div>
<?php else: ?>
<?php endif;?>
<?php } ?>


<?php $gmap= SCF::get( 'gmap' );?>
<?php if(!empty($gmap)):?>
<div>【要素：Google MAP URL】</div>
    <div>
        <?php echo $gmap; ?>
    </div>
<?php else: ?>
<?php endif;?>




</section>

<?php endwhile; endif; ?>

 </div>
</main>
<?php get_footer(); ?>