<?php
/*
Template Name: トップ：紋別のこと
*/
get_header(); ?>

<main id="about" class="">


<div class="container">
    <div class="row">

      <ul class="gmenu">
        <li><a class="active" href=""><div class="">ABOUT</div><div class="">紋別のこと</div></a></li>
        <li><a href="/spot"><div class="">SIGHTSEEING</div><div class="">紋別の観光</div></a></li>
        <li><a href="/gourmet"><div class="">ABOUT</div><div class="">紋別のグルメ</div></a></li>
        <li><a href="/gift"><div class="">gift</div><div class="">紋別の土産</div></a></li>
        <li><a href="/gourmet"><div class="">NIGHT SPOT</div><div class="">紋別の夜</div></a></li>
        <li><a href="/hotel"><div class="">HOTEL</div><div class="">紋別の宿</div></a></li>
      </ul>

    <div class="center"><img class="logomm" src="<?php echo get_template_directory_uri(); ?>/assets/img/logomm.png" loading="lazy"></div>

    </div>
</div>


<section class="py-10">
    <div class="container px-5">
        <a class="card post-preview post-preview-featured lift mb-5 overflow-hidden" href="#!">
            <div class="row g-0">
                <div class="col-lg-5"><div class="post-preview-featured-img"><img class="card-img-top" src="https://source.unsplash.com/KE0nC8-58MQ/660x360" alt="..."></div></div>
                <div class="col-lg-7">
                    <div class="card-body">
                        <div class="py-5">
                            <h5 class="card-title">post name</h5>
                            <p class="card-text">lead</p>
                        </div>
                        <hr>
                        <div class="post-preview-meta">
                            <div class="post-preview-meta-details">
                                <div class="post-preview-meta-details-date">yyyy/mm/dd</div>
                                <div class="post-preview-meta-details-name">cate</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <div class="row gx-5">
            <div class="col-md-6 col-xl-4 mb-5">
                <a class="card post-preview lift h-100" href="#!">
                    <img class="card-img-top" src="https://source.unsplash.com/KE0nC8-58MQ/660x360" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">post name</h5>
                        <p class="card-text">lead</p>
                    </div>
                    <div class="card-footer">
                        <div class="post-preview-meta">
                            <div class="post-preview-meta-details">
                                <div class="post-preview-meta-details-date">yyyy/mm/dd</div>
                                <div class="post-preview-meta-details-name">cate</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4 mb-5">
                <a class="card post-preview lift h-100" href="#!">
                    <img class="card-img-top" src="https://source.unsplash.com/KE0nC8-58MQ/660x360" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">post name</h5>
                        <p class="card-text">lead</p>
                    </div>
                    <div class="card-footer">
                        <div class="post-preview-meta">
                            <div class="post-preview-meta-details">
                                <div class="post-preview-meta-details-date">yyyy/mm/dd</div>
                                <div class="post-preview-meta-details-name">cate</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4 mb-5">
                <a class="card post-preview lift h-100" href="#!">
                    <img class="card-img-top" src="https://source.unsplash.com/KE0nC8-58MQ/660x360" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">post name</h5>
                        <p class="card-text">lead</p>
                    </div>
                    <div class="card-footer">
                        <div class="post-preview-meta">
                            <div class="post-preview-meta-details">
                                <div class="post-preview-meta-details-date">yyyy/mm/dd</div>
                                <div class="post-preview-meta-details-name">cate</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination pagination-blog justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">«</span></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#!">1</a></li>
                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                <li class="page-item"><a class="page-link" href="#!">3</a></li>
                <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                <li class="page-item"><a class="page-link" href="#!">12</a></li>
                <li class="page-item">
                    <a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">»</span></a>
                </li>
            </ul>
        </nav>
    </div>
</section>


<!--
<div class="container-fluid">
 <div class="row">
  <div class="swiper ts_gallery">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/topslide1.jpg" loading="lazy"></a></div>
        <div class="swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/topslide2.jpg" loading="lazy"></a></div>
        <div class="swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/topslide3.jpg" loading="lazy"></a></div>
        <div class="swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/topslide4.jpg" loading="lazy"></a></div>
        <div class="swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/topslide5.jpg" loading="lazy"></a></div>
        <div class="swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/topslide6.jpg" loading="lazy"></a></div>
        <div class="swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/topslide7.jpg" loading="lazy"></a></div>
        <div class="swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/topslide8.jpg" loading="lazy"></a></div>
      </div>
      <div class="swiper-pagination"></div>
  </div>
 </div>
</div>



<section class="container-fluid">
  <div class="container bg-white cont">

    <div class="row">
        <h2 class="title-a">“紋別（もんべつ）”ってどんなところ？</h2>
        <div class="contin">
          <p>“流氷のまち”として知られる紋別市は、北海道オホーツク海沿岸のほぼ中央に位置する、人口約21,400人の水産業が盛んなまち。人気の流氷観光をはじめとして、滝上芝ざくらや湧別のチューリップなど、四季を通じて観光を楽しむことができるまちです。特にオホーツク海の恵みを受けた海の幸はまちが誇る自慢の逸品です。ふるさと納税のお礼の品としても人気が高く、2021年度にはふるさと納税ランキングで紋別市は全国１位を獲得しました。<br>「人よし、食よし、遊びよし」と３拍子揃った、どこかほっとする港町の紋別。知れば知るほど好きるなるまちです。</p>
        </div>
    </div>

    <div class="row">
        <h2 class="title-a">“紋別”へのアクセス</h2>
        <div class="contin">
          <p>「オホーツクかぁ。遠いなぁ。。。」と思っていませんか？<br>いえいえ、そんなことはありません。東京羽田から飛行機で約1時間45分「オホーツク紋別空港」への直行便でひとっ飛びで行くことができます。<br>現在、東京(羽田空港)－紋別間を1日1往復で飛行機が運航しています。晴れた日には、太平洋や大雪山、オホーツク海を望むことができ、北海道の形を上空からはっきり認識できるほど。北海道の空の旅の醍醐味を満喫できる人気の絶景ルートとなっています。また、流氷シーズンには運がよければ、上空からどこまでも続く大氷原が見られることも！？<br>近年では「紋別タッチ」と言われるマイル修行僧の聖地としても有名な航空路線です。「紋別タッチ」も楽しめますが、たまには「紋別ステイ」で、ゆっくりと日々の疲れを癒して見ませんか？楽しめるスポット沢山ありますよ。<br>なお、空港から紋別市街地までは無料バスが運行していて、約17分で市街地に到着します。コンパクトに移動でき、観光が楽しめるまち、それが紋別です。<br></p>
        </div>
    </div>

    <div class="row">
      <h2 class="title-a">紋別市のマスコットキャラクター「紋太（もんた）」</h2>
      <div class="contin">
        <div class="col-5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img01.jpg" loading="lazy"></a>
        </div>
        <div class="col-5">
          <p>「オホーツクかぁ。遠いなぁ。。。」と思っていませんか？ いえいえ、そんなことはありません。東京羽田から飛行機で約1時間45分「オホーツク紋別空港」への直行便でひとっ飛びで行くことができます。 現在、東京(羽田空港)－紋別間を1日1往復で飛行機が運航しています。晴れた日には、太平洋や大雪山、オホーツク海を望むことができ、北海道の形を上空からはっきり認識できるほど。北海道の空の旅の醍醐味を満喫できる人気の絶景ルートとなっています。また、流氷シーズンには運がよければ、上空からどこまでも続く大氷原が見られることも！？ 近年では「紋別タッチ」と言われるマイル修行僧の聖地としても有名な航空路線です。「紋別タッチ」も楽しめますが、たまには「紋別ステイ」で、ゆっくりと日々の疲れを癒して見ませんか？楽しめるスポット沢山ありますよ。 なお、空港から紋別市街地までは無料バスが運行していて、約17分で市街地に到着します。コンパクトに移動でき、観光が楽しめるまち、それが紋別です。 </p>
        </div>
      </div>
    </div>

  </div>
</section>



<div class="container">



</div>
-->

</main>

<?php get_footer(); ?>