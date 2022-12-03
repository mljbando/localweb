<?php
/*
Template Name: 詳細：紋別のグルメ
*/
get_header(); ?>

<main>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <?php
      $sc_pic = SCF::get('sc_pic');
      $img_src = wp_get_attachment_image_src($sc_pic, 'full');
      ?>

      <section class="detail">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
              <div class="title-c mb-4"><?php $homename = SCF::get('homename');
                                        echo esc_html($homename); ?></div>
              <div class="overlay">
                <img class="img-fluid rounded" src="<?php echo $img_src[0]; ?>" loading="lazy">
                <p class="display-5 text-white font-weight-bold"><?php $sc_pictext = SCF::get('sc_pictext');
                                                                  echo nl2br($sc_pictext); ?></p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="detail">
        <div class="container">
          <div class="row">

            <?php
            $get_group = SCF::get('sc_loop');
            foreach ($get_group as $fields) {
              $img_src = wp_get_attachment_image_src($fields['sc_looppic'], 'full');
            ?>

              <div class="col-12 col-lg-6 mb-4">
                <div class="overlay">
                  <img class="img-fluid rounded" src="<?php echo $img_src[0]; ?>" loading="lazy">
                  <p class="display-6 text-white font-weight-bold"><?php echo nl2br($fields['sc_looppictext']); ?></p>
                </div>
              </div>

            <?php } ?>

            <div class="col-12 col-lg-12">
              <?php $sc_text = SCF::get('sc_text');
              echo nl2br($sc_text); ?>
            </div>
          </div>
        </div>
      </section>

      <section class="detail">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th scope="row" class="w-25 p-3"><?php $homeitem = SCF::get('homeitem');
                                                      echo esc_html($homeitem); ?></th>
                    <td class="w-auto p-3">
                      <?php $homeurl = SCF::get('homeurl'); ?>
                      <?php if (!empty($homeurl)) : ?>
                        <a href="<?php $homeurl = SCF::get('homeurl');
                                                    echo esc_html($homeurl); ?>" class="linkout" target="_blink"><?php $homename = SCF::get('homename'); echo esc_html($homename); ?></a>
                      <?php else : ?>
                        <?php $homename = SCF::get('homename'); echo esc_html($homename); ?>
                      <?php endif; ?>
                    </td>
                  </tr>

                  <?php $get_group = SCF::get('looptable');
                  foreach ($get_group as $fields) {
                  ?>
                    <tr>
                      <th scope="row" class="w-25 p-3"><?php echo esc_html($fields['tableitem']); ?></th>
                      <td class="w-auto p-3"><?php echo nl2br($fields['tabledetail']); ?></td>
                    </tr>

                  <?php } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>

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

</main>

<?php get_footer(); ?>