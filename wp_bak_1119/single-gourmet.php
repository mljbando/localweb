<?php
/*
Template Name: 詳細：紋別のグルメ
*/
get_header(); ?>
<main id="about">
 <div class="container">

 <?php if(have_posts()): while(have_posts()): the_post();?>

<section id="" class="mt-5">


<?php
  $sc_pic = SCF::get('sc_pic');
  $img_src = wp_get_attachment_image_src($sc_pic,'full');
?>
<?php if(!empty($sc_pic)):?>
<div>【店舗画像】</div>
    <div>
        <img src="<?php echo $img_src[0]; ?>">
    </div>
<?php else: ?>
<?php endif;?>



<?php $sc_pictext= SCF::get( 'sc_pictext' );?>
<?php if(!empty($sc_pictext)):?>
<div>【画像キャプション】<?php echo $sc_pictext; ?></div>
<?php else: ?>
<?php endif;?>


<?php
$get_group = SCF::get( 'sc_loop' );
foreach ( $get_group as $fields ) {
?> 
<div>【その他画像（ループ）】</div>
<?php if(!empty($get_group)):?>
<div>
<?php echo wp_get_attachment_image( $fields['sc_looppic'], 'full' );?>
</div>
<div>【その他画像キャプション（ループ）】<?php echo nl2br( $fields['sc_looppictext'] ); ?></div>
<?php else: ?>
<?php endif;?>
<?php } ?>


<?php $sc_text = SCF::get('sc_text'); echo nl2br($sc_text);?>
<?php if(!empty($sc_text)):?>
<div>【紹介文】<?php echo $sc_text; ?></div>
<?php else: ?>
<?php endif;?>



<div>【名称（項目/名称先+URL）】</div>
<div>
<?php $homeitem = SCF::get('homeitem'); echo esc_html($homeitem);?>/<a href="<?php $homeurl = SCF::get('homeurl'); echo ($homeurl);?>" target="_blink"><?php $homename = SCF::get('homename'); echo esc_html($homename);?></a>
</div>




<div>【情報（項目/詳細）ループ】</div>
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
<div>【Google MAP URL】</div>
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