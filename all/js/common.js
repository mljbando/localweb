/*スマホ横向き判定*/
$(function () {
  function isMobile() {
    const ua = navigator.userAgent;
    return ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0
  }

  // スマホのときにbodyタグにクラスをつける
  if (isMobile()) {
    document.body.classList.add('ls-mode');
  }
});


$(function () {
});






// スクロールのドラッグ有効化
$(function () {
  jQuery.prototype.mousedragscrollable = function () {
    let target;
    $(this).each(function (i, e) {
      $(e).mousedown(function (event) {
        if (event.button === 0) { //左クリックのみ
          event.preventDefault();
          target = $(e);
          $(e).data({
            "down": true,
            "move": false,
            "x": event.clientX,
            "scrollleft": $(e).scrollLeft(),
          });
          return false
        }
      });
      $(e).click(function (event) {
        if (event.button === 0) {
          if ($(e).data("move")) {
            return false
          }
        }
      });
    });
    $(document).mousemove(function (event) {
      if (event.button === 0) {
        if ($(target).data("down")) {
          event.preventDefault();
          let move_x = $(target).data("x") - event.clientX;
          if (move_x !== 0) {
            $(target).data("move", true);
          } else { return; };
          $(target).scrollLeft($(target).data("scrollleft") + move_x);
          return false
        }
      }
    }).mouseup(function (event) {
      if (event.button === 0) {
        $(target).data("down", false);
        return false;
      }
    });
  }
  $(".scrollmenu").mousedragscrollable();


  /*詳細カテゴリーメニュー*/
  $(function () {
    $(".openWrap").hide();
    $(".pt_plus").hide();
    var btn = $(".categorynav > ul > li .drop");
    //click
    $(btn).bind("click", "focus", function (event) {
      $(".pt_plus").css({ display: 'block' });
      var shownav = $(this).next(".openWrap");

      $(btn).parent("li").removeClass("activenavi");
      $(btn).next(".openWrap").not(shownav).prev("button").removeClass("active");
      $(btn).next(".openWrap").not(shownav).fadeOut(200);
      $(shownav).slideToggle(200);
      $(this).toggleClass('active');

      if (!$(this).hasClass('active')) {
        $(this).parent("li").removeClass("activenavi");
        $(".pt_plus").css({ display: 'none' });


      } else {
        $(this).parent("li").addClass("activenavi");
      }

      // すべて表示がクリックされたらサブメニューを消す
      $(".scrollmenu #all").click(function () {
        $(shownav).slideUp(200);
        $(".pt_plus").css({ display: 'none' });
        $(btn).removeClass('active');
        $(btn).parent("li").removeClass("activenavi");

      });


      return false;
    });

  });

  /*ハンバーガーメニュー*/
  $('.burger-btn').on('click', function () {
    $('.burger-btn').toggleClass('close');
    $('.burger-menu').toggleClass('fade');
  });


  /*TOPへ戻るボタン*/
  $(function () {
    var pagetop = $('.totopfade');
    // ボタン非表示
    pagetop.hide();
    // 100px スクロールしたらボタン表示
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        pagetop.fadeIn();
      } else {
        pagetop.fadeOut();
      }
    });
    pagetop.click(function () {
      $('body, html').animate({ scrollTop: 0 }, 300);
      return false;
    });
  });
});

/*TOPカテゴリー　スライド*/
$(function () {
  $('.scrollmenu').slick({
    arrows: true,
    variableWidth: true,
    touchMove: true,
    infinite: false,
    slidesToShow:12,
    slidesToScroll:1
  });
});

/*TOPページ　スライド*/
$(function () {
  $('#top-slide').slick({
    arrows: true,
    autoplay: true,
    autoplaySpeed: 2000,
    variableWidth: true,
    centerMode: true,
    dots: true,
    slidesToShow: 1,
    speed: 1000,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          centerPadding: "30",
          variableWidth: false,
        }
      },]
  });
});



/*お礼の品詳細ページ　スライド*/
$(function () {
  $('#thum-slide').sliderPro({
    width: 535,
    height: 535,
    buttons: false,//ナビゲーションボタン
    arrows: true,
    fadeArrows: false,
    thumbnailWidth: 80,//サムネイルの横幅
    thumbnailHeight: 80,//サムネイルの縦幅
    slideDistance: 10,//スライド同士の距離
    thumbnailsPosition: 'bottom',
    thumbnailPointer: false,
    //autoplayDelay:3000,
    autoplay: false,
    responsive: true,
    loop: true,
    breakpoints: {
      992: {//表示方法を変えるサイズ
        thumbnailWidth: 60,
        thumbnailHeight: 60,
        width: 400,
        height: 400,
      },
      768: {//表示方法を変えるサイズ
        thumbnailWidth: 48,
        thumbnailHeight: 48,
      },

      576: {//表示方法を変えるサイズ
        thumbnailWidth: 48,
        thumbnailHeight: 48,
        width: 345,
        height: 345,
      }
    }

  });

});



/*アコーディオン*/
$(function () {
  $('#top .ac-open').hide();
  $("#top .ac-btn").on("click", function () {
    $(this).prev('#top .ac-open').slideToggle('slow', 'swing');
    $(this).toggleClass('active');
    if ($(this).text() === 'もっと見る') {
      $(this).text('閉じる');
    } else {
      $(this).text('もっと見る');
    }
  });
});
$(function () {
  $('#gift .ac-open').hide();
  $("#gift .ac-btn").on("click", function () {
    $(this).prev('#gift .ac-open').slideToggle('slow', 'swing');
    $(this).toggleClass('active');
    if ($(this).text() === 'もっと詳しく') {
      $(this).text('閉じる');
    } else {
      $(this).text('もっと詳しく');
    }
  });
});
//guide
$(function () {
  $('#howto .ac-open').hide();
  $("#howto .ac-btn").on("click", function () {
    $(this).prev('#howto .ac-open').slideToggle('slow', 'swing');
    $(this).toggleClass('active');
    if ($(this).text() === 'もっと詳しく') {
      $(this).text('閉じる');
    } else {
      $(this).text('もっと詳しく');
    }
  });
});
//guide	




$(function () {
  $('.addition').hide();
  $(".go-cart").click(function () {
    $(this).parent("div").prev(".addition").fadeIn();
  });
});


/*ポップアップ*/
$(function () {

  // show popupボタンクリック時の処理 見つける
  $('#popupbtns').click(function (e) {
    $('#js-popup').show();
  });

  // show popupボタンクリック時の処理 フィルター
  $('#popupbtnf').click(function (e) {
    $('#js-popup').show();
  });

  // レイヤー/ポップアップのcloseボタンクリック時の処理
  $('#popup-close, #popup-bg').click(function (e) {
    $('#js-popup').hide();
  });

});






/*
** Swiper top
*/
new Swiper('.XX_gallery', {
  centeredSlides: true,
  loop: true,
  speed: 1000,
  slidesPerView: 3,
  spaceBetween: 20,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  //    pagination: {
  //          el: '.swiper-pagination',
  //    },
  scrollbar: {
    el: '.swiper-scrollbar',
    //          hide: true,
  },
  autoplay: {
    delay: 6000,
    disableOnInteraction: false,
    stopOnLastSlide: false,
  },
  breakpoints: {
    320: {
      slidesPerView: 1,//1.15
    },
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 1,
    },
    820: {
      slidesPerView: 1,
    },
    1024: {
      slidesPerView: 1,
      //        slidesPerView: 1.4,
    },
    1440: {
      slidesPerView: 1,//2.5
      //        slidesPerView: 2.90,
    },
    1920: {
      slidesPerView: 1,//2.5
      //      },
      //      2560: {
      //        slidesPerView: 3.35,
      //      },
      //      2880: {
      //        slidesPerView: 3.75,
    }
  }
});


/*
** desvg
*/
(function () {
  "use strict";

  var desvg = function (selector, removeInlineCss) {
    removeInlineCss = removeInlineCss || false;

    var images,
      imagesLength,
      sortImages = {},

      // load svg file
      loadSvg = function (imgURL, replaceImages) {
        // set up the AJAX request
        var xhr = new XMLHttpRequest();
        xhr.open('GET', imgURL, true);

        xhr.onload = function () {
          var xml,
            svg,
            paths,
            replaceImagesLength;

          // get the response in XML format
          xml = xhr.responseXML;
          replaceImagesLength = replaceImages.length;

          // bail if no XML
          if (!xml) {
            return;
          }

          // this will be the <svg />
          svg = xml.documentElement;

          // get all the SVG paths
          paths = svg.querySelectorAll('path');

          if (removeInlineCss) {
            // if `removeInlineCss` is true then remove the style attributes from the SVG paths
            for (var i = 0; i < paths.length; i++) {
              paths[i].removeAttribute('style');
            }
          }
          svg.removeAttribute('xmlns:a');

          while (replaceImagesLength--) {
            replaceImgWithSvg(replaceImages[replaceImagesLength], svg.cloneNode(true));
          }
        };

        xhr.send();
      },

      // replace the original <img /> with the new <svg />
      replaceImgWithSvg = function (img, svg) {
        var imgID = img.id,
          imgClasses = img.getAttribute('class');

        if (imgID) {
          // re-assign the ID attribute from the <img />
          svg.id = imgID;
        }

        if (imgClasses) {
          // re-assign the class attribute from the <img />
          svg.setAttribute('class', imgClasses + ' replaced-svg');
        }

        img.parentNode.replaceChild(svg, img);
      };

    // grab all the elements from the document matching the passed in selector
    images = document.querySelectorAll(selector);
    imagesLength = images.length;

    // sort images array by image url
    while (imagesLength--) {
      var _img = images[imagesLength],
        _imgURL;

      if (_img.getAttribute('data-src')) {
        _imgURL = _img.getAttribute('data-src')
      } else {
        _imgURL = _img.getAttribute('src')
      }

      if (sortImages[_imgURL]) {
        sortImages[_imgURL].push(_img);
      } else {
        sortImages[_imgURL] = [_img];
      }
    }

    // loops over the matched urls
    for (var key in sortImages) {
      if (sortImages.hasOwnProperty(key)) {
        loadSvg(key, sortImages[key]);
      }
    }

  };

  window.deSVG = desvg;
})();


$(function () {
  deSVG('.caticon', true);
});


//////トップ：スクロール後ヘッダー表示
window.addEventListener('load', () => {
  const mainElement = document.querySelector('main#top');
  if (mainElement) {
    //スクロール後ヘッター表示
    $(window).scroll(function () {           //scroll start
      //var pos = $('main').offset();        //Get the height of the main tag beyond mv and store it in the variable [pos]
      //if ($(this).scrollTop() > pos.top) { //If scrolled from the variable [pos] 
      if (window.pageYOffset > 250) {//スクロールタイミング
        $('header').slideDown(400);//.fadeIn
      } else {
        $('header').slideUp(400);//.fadeOut
      }
    });

  } else {
    /*ヘッダー分mainの高さ調整*/
    hsize = $('header').outerHeight();//ヘッダーの高さを取得
    $("main").css("padding-top", hsize + "px");//取得したヘッダーの高さ分追加指定
    document.querySelector('header').style.display = 'block';

  }

})

/**
  * Swiper catelist
  */
new Swiper('.sw_catelist', {
  allowTouchMove: true,
  // freeMode: true,
  initialSlide: 0,
  touchRatio: 1,
  //spaceBetween: 30,
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    320: {
      slidesPerView: 5.7,
    },
    640: {
      slidesPerView: 6.7,
    },
    768: {
      slidesPerView: 7.7,
    },
    846: {
      slidesPerView: 8.5,
    },
    986: {
      slidesPerView: 9.5,
    },
    1132: {
      slidesPerView: 12.5,
    }
  }
});