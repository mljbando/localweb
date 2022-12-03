<?php
/*
Template Name: 詳細：紋別の観光
*/
get_header(); ?>

<main>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <?php
      $sb_pic = SCF::get('sb_pic');
      $img_src = wp_get_attachment_image_src($sb_pic, 'full');
      ?>

      <section class="detail">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
              <div class="title-b mb-3 text-white"><?php $homename = SCF::get('homename');
                                                    echo esc_html($homename); ?></div>
              <div class="overlay">
                <img class="img-fluid rounded" src="<?php echo $img_src[0]; ?>" loading="lazy">
                <p class="display-5 text-white font-weight-bold"><?php $sb_pictext = SCF::get('sb_pictext');
                                                                  echo nl2br($sb_pictext); ?></p>
              </div>
              <div class="my-3">
                <p class="font-weight-bold"><?php $sb_lead = SCF::get('sb_lead');
                                            echo nl2br($sb_lead); ?></p>
                <?php $sb_text = SCF::get('sb_text');
                echo nl2br($sb_text); ?>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="detail">
        <div class="container">
          <div class="row">

            <?php
            $get_group = SCF::get('sb_loop');
            foreach ($get_group as $fields) {
              $img_src = wp_get_attachment_image_src($fields['sb_looppic'], 'full');
            ?>

              <div class="col-12 col-lg-8 mx-auto">
                <div class="overlay">
                  <img class="img-fluid rounded" src="<?php echo $img_src[0]; ?>" loading="lazy">
                  <p class="display-6 text-white font-weight-bold"><?php echo esc_html($fields['sb_looppictext']); ?></p>
                </div>
                <div class="my-3">
                  <?php echo nl2br($fields['sb_looptext']); ?>
                </div>
              </div>

            <?php } ?>

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