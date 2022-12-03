<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="format-detection" content="telephone=no" />
  <title></title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
  <?php include_once("inc/analyticstracking.php"); ?>
</head>

<body>

  <header>

    <div class="container">
      <div class="d-none d-md-block">
        <div id="g-menu">
          <nav>
            <div class="menu-list"><a href="/about">
                <div class="smn">ABOUT</div>
                <div class="line-a">紋別のこと</div>
              </a></div>
            <div class="menu-list"><a href="/spot">
                <div class="smn">SIGHTSEEING</div>
                <div class="line-b">紋別の観光</div>
              </a></div>
            <div class="menu-list"><a href="/gourmet">
                <div class="smn">GOURMET</div>
                <div class="line-c">紋別のグルメ</div>
              </a></div>
            <div class="menu-list mce">
              <div class="sms">紋別市ふるさと納税総合サイト</div><a href="/about"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logomm.png" loading="lazy"></a>
            </div>
            <div class="menu-list"><a href="/gift">
                <div class="smn">GIFT</div>
                <div class="line-d">紋別の土産</div>
              </a></div>
            <div class="menu-list"><a href="/hamanasu">
                <div class="smn">NIGHT SPOT</div>
                <div class="line-e">紋別の夜</div>
              </a></div>
            <div class="menu-list"><a href="/hotel">
                <div class="smn">HOTEL</div>
                <div class="line-f">紋別の宿</div>
              </a></div>
          </nav>
        </div>
      </div>
    </div>

    <div class="d-md-none d-block">
      <section class="mmback">

        <div class="mm-logo">
          <a href="/about"><img class="logomm" src="<?php echo get_template_directory_uri(); ?>/assets/img/logomms.png" loading="lazy"></a>
        </div>

        <div class="tab">
          <div class="tab__item tline-a">
            <div class="menu-list"><a href="/about">紋別市</a></div>
          </div>
          <div class="tab__item tline-b">
            <div class="menu-list"><a href="/spot">観光</a></div>
          </div>
          <div class="tab__item tline-c">
            <div class="menu-list"><a href="/gourmet">グルメ</a></div>
          </div>
          <div class="tab__item tline-d">
            <div class="menu-list"><a href="/gift">土産</a></div>
          </div>
          <div class="tab__item tline-e">
            <div class="menu-list"><a href="/hamanasu">夜</a></div>
          </div>
          <div class="tab__item tline-f">
            <div class="menu-list"><a href="/hotel">宿</a></div>
          </div>
        </div>
      </section>
    </div>


  </header>