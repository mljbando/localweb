<?php
/*
Template Name: 詳細：紋別の観光
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
          <div class="card-header"><span class="line-b"><?php $homename = SCF::get('homename');
                                                        echo esc_html($homename); ?></span></div>
          <div class="col-12 col-lg-12">
            <div class="overlay">
              <img class="img-fluid" src="<?php echo $img_src[0]; ?>" loading="lazy">
              <p style="font-size:2.4rem;"><?php $sb_pictext = SCF::get('sb_pictext');
                                            echo nl2br($sb_pictext); ?></p>
            </div>
          </div>
          <div class="card-body mbn">
            <h3 class="card-title"><?php $sb_lead = SCF::get('sb_lead');
                                    echo nl2br($sb_lead); ?></h3>
            <p class="card-text">
              <?php $sb_text = SCF::get('sb_text');
              echo nl2br($sb_text); ?></p>
          </div>
        </div>
      </div>
    </div>

    <?php
    $get_group = SCF::get('sb_loop');
    foreach ($get_group as $fields) {
      $img_src = wp_get_attachment_image_src($fields['sb_looppic'], 'full');
    ?>
      <div class="container">
        <div id="lrap">
          <div class="card col-12 col-lg-8 mx-auto">
            <div class="overlay">
              <img class="roundtop" src="<?php echo $img_src[0]; ?>" loading="lazy">
              <p style="font-size:2.4rem;"><?php echo esc_html($fields['sb_looppictext']); ?></p>
            </div>
            <div class="card-body mbn">
              <p class="card-text">
                <?php echo nl2br($fields['sb_looptext']); ?></p>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>

    <div class="container">
      <div id="lrap">
        <div class="col-12 col-lg-8 mx-auto">
          <table class="tb-m">
            <tbody>
              <tr>
                <th><?php $homeitem = SCF::get('homeitem');
                    echo esc_html($homeitem); ?></th>
                <td><?php $homeurl = SCF::get('homeurl'); ?>
                  <?php if (!empty($homeurl)) : ?>
                    <a href="<?php $homeurl = SCF::get('homeurl');
                              echo esc_html($homeurl); ?>" class="linkout" target="_blink"><?php $homename = SCF::get('homename');
                                                                                            echo esc_html($homename); ?></a>
                  <?php else : ?>
                    <?php $homename = SCF::get('homename');
                    echo esc_html($homename); ?>
                  <?php endif; ?>
                </td>
              </tr>
              <?php $get_group = SCF::get('looptable');
              foreach ($get_group as $fields) {
              ?>
                <tr>
                  <th><?php echo esc_html($fields['tableitem']); ?></th>
                  <td><?php echo nl2br($fields['tabledetail']); ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <section class="detail">
      <div class="container-fluid">
        <div class="row">
          <div class="google-maps">
            <?php $gmap = SCF::get('gmap');
            echo ($gmap); ?>
          </div>
        </div>
      </div>
    </section>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>