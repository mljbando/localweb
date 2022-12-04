<?php
/*
Template Name: 詳細：紋別のグルメ
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php
    $sc_pic = SCF::get('sc_pic');
    $img_src = wp_get_attachment_image_src($sc_pic, 'full');
    ?>
    <div class="container">
      <div id="lrap">
        <div class="card">
          <div class="card-header"><span class="line-c"><?php $homename = SCF::get('homename');
                                                        echo esc_html($homename); ?></span>
          </div>
          <div class="col-12 col-lg-12">
            <div class="overlay">
              <img class="img-fluid" src="<?php echo $img_src[0]; ?>" loading="lazy">
              <p style="font-size:2.4rem;"><?php $sc_pictext = SCF::get('sc_pictext');
                                            echo nl2br($sc_pictext); ?></p>
            </div>
          </div>
          <div class="row">
            <?php
            $get_group = SCF::get('sc_loop');
            foreach ($get_group as $fields) {
              $img_src = wp_get_attachment_image_src($fields['sc_looppic'], 'full');
            ?>
              <div class="col-12 col-lg-6 pt-4">
                <div class="overlay">
                  <img class="img-fluid rounded" src="<?php echo $img_src[0]; ?>" loading="lazy">
                  <p style="font-size:2.4rem;"><?php echo nl2br($fields['sc_looppictext']); ?></p>
                </div>
              </div>
            <?php } ?>
          </div>
          <div class="card-body mbn">
            <p class="card-text">
              <?php $sc_text = SCF::get('sc_text');
              echo nl2br($sc_text); ?></p>
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