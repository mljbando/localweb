/*スマホ横向き判定*/
$(function(){
    function isMobile() {
        const ua = navigator.userAgent;
        return ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0
    }
 
    // スマホのときにbodyタグにクラスをつける
    if (isMobile()) {
        document.body.classList.add('ls-mode');
    }
});


/*ヘッダー分mainの高さ調整*/
//$(function () {
//  hsize = $('header').outerHeight();//ヘッダーの高さを取得
//  $("main").css("padding-top", hsize + "px");//取得したヘッダーの高さ分追加指定
//});


// スクロールのドラッグ有効化
$(function(){
jQuery.prototype.mousedragscrollable = function () {
    let target;
    $(this).each(function (i, e) {
        $(e).mousedown(function (event) {
            if(event.button === 0){ //左クリックのみ
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
            if(event.button === 0){
                if ($(e).data("move")) {
                    return false
                }
            }
        });
    });
    $(document).mousemove(function (event) {
        if(event.button === 0){
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
        if(event.button === 0){
            $(target).data("down", false);
            return false;
        }
    });
}
$(".scrollmenu").mousedragscrollable();

	
/*詳細カテゴリーメニュー*/
$(function(){
 $(".openWrap").hide(); 
 $(".pt_plus").hide(); 
 var btn = $(".categorynav > ul > li .drop");
 //click
 $(btn).bind("click", "focus", function(event){
 $(".pt_plus").css({display:'block'});
  var shownav = $(this).next(".openWrap");
  
  $(btn).parent("li").removeClass("activenavi");
  $(btn).next(".openWrap").not(shownav).prev("button").removeClass("active");
  $(btn).next(".openWrap").not(shownav).fadeOut(200);
  $(shownav).slideToggle(200);
  $(this).toggleClass('active');
  
  if(!$(this).hasClass('active')){
     $(this).parent("li").removeClass("activenavi");
     $(".pt_plus").css({display:'none'});
  
     
  }else{
     $(this).parent("li").addClass("activenavi");
  }
  
  // すべて表示がクリックされたらサブメニューを消す
  $(".scrollmenu #all").click(function() {
     $(shownav).slideUp(200);
     $(".pt_plus").css({display:'none'});
     $(btn).removeClass('active');
     $(btn).parent("li").removeClass("activenavi");
     
  });
  
  
  return false;
 });

});

/*ハンバーガーメニュー*/
$('.burger-btn').on('click',function(){
  $('.burger-btn').toggleClass('close');
  $('.burger-menu').toggleClass('fade');
 });


/*TOPへ戻るボタン*/
$(function(){
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
 
/*TOPページ　スライド*/
$(function() {
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
$(function() {
		$('#thum-slide').sliderPro({
			width:535,
			height:535,
			buttons: false,//ナビゲーションボタン
			arrows: true,
			fadeArrows:false,
			thumbnailWidth: 80,//サムネイルの横幅
			thumbnailHeight: 80,//サムネイルの縦幅
			slideDistance:10,//スライド同士の距離
			thumbnailsPosition: 'bottom',
			thumbnailPointer: false,
			autoplayDelay:3000,
			responsive:true,
			loop: true,
			breakpoints: {
				992: {//表示方法を変えるサイズ
					thumbnailWidth: 60,
					thumbnailHeight:60,
					width:400,
			        height:400,
},
				768: {//表示方法を変えるサイズ
					thumbnailWidth: 48,
					thumbnailHeight:48,
},
			
				576: {//表示方法を変えるサイズ
					thumbnailWidth: 48,
					thumbnailHeight:48,
					width:345,
			        height:345,
}}
			    
			});

});
	


/*アコーディオン*/
$(function() {
	$('#top .ac-open').hide();
    $("#top .ac-btn").on("click", function() {
        $(this).prev('#top .ac-open').slideToggle('slow','swing');
	   	$(this).toggleClass('active');
	   		if ($(this).text() === 'もっと見る') {
				$(this).text('閉じる');
			} else {
				$(this).text('もっと見る');
			}
    });
 });
$(function() {
	$('#gift .ac-open').hide();
    $("#gift .ac-btn").on("click", function() {
        $(this).prev('#gift .ac-open').slideToggle('slow','swing');
	   	$(this).toggleClass('active');
	   		if ($(this).text() === 'もっと詳しく') {
				$(this).text('閉じる');
			} else {
				$(this).text('もっと詳しく');
			}
    });
 });
	
	
	


$(function(){
	$('.addition').hide();
	$(".go-cart").click(function(){
		$(this).parent("div").prev(".addition").fadeIn();
	});
});


/*ポップアップ*/
	$(function() {

    // show popupボタンクリック時の処理 見つける
    $('#popupbtns').click(function(e) {
        $('#js-popup').show();
    });

    // show popupボタンクリック時の処理 フィルター
    $('#popupbtnf').click(function(e) {
        $('#js-popup').show();
    });

    // レイヤー/ポップアップのcloseボタンクリック時の処理
    $('#popup-close, #popup-bg').click(function(e) {
        $('#js-popup').hide();
    });

});
 
 

/*見つけるポップアップ　価格帯チャート・スライダーレンジ複合*/

let data_sauce = [10, 6, 12, 13, 8, 11, 9, 10, 10, 9, 10, 6, 2, 13, 13, 8, 9, 6, 8, 10, 10, 16, 12, 13, 10, 11, 9, 8, 10, 10, 7, 6, 12, 3, 13, 5, 6, 10, 10, 6, 6, 16, 12, 13, 13, 4, 9, 10, 10, 2];
let labels_sauce = [ "100円", "200円", "300円", "400円", "500円", "600円", "700円", "800円", "900円", "1000円","1500円", "2000円", "2500円", "3000円", "3500円", "4000円", "4500円", "5000円", "5500円", "6000円", "6500円","7000円","7500円","8000円","8500円","9000円","9500円","10000円", "11000円", "11500円","12000円", "12500円","13000円","14000円","15000円","15500円","16000円","16500円","17000円","17500円","18000円","18500円","19000円","19500円","20000円"];

if(document.getElementById("chart_price")){

var ctx = document.getElementById("chart_price").getContext('2d');
var ChartDemo = new Chart(ctx, {
   type: 'bar',
   data: {
      labels: labels_sauce, //ココで参照
      datasets: [
        {
           label: 'price',
           borderColor: 'rgb(200, 200, 200,1)',
           data: data_sauce, //ココで参照
        },
      ]
   },
 options: {                             
            responsive: true,  
            maintainAspectRatio: false,                
             plugins: {
             legend: false,
               tooltip: {
            enabled: false,
        },
        },
       
   scales: {
    x: {

      display: false,
    
      ticks: {
        major: {
          enabled: false
        }, 		
        
      }
    },
    y: {
      display: false,
     
    }
  },
 
            
       
        }
});

var $slider = $('.range-slider').get(0); //スライダー作成場所を指定
var $min = $('.min-box'); //最小値を入力するボックスを指定
var $max = $('.max-box'); //最大値を入力するボックスを指定
var minVal = 0; //スライダーの最小値
var maxVal = 20000; //スライダーの最大値
var gap = 100; // ハンドルの動きを100刻みで動かす
 
//noUiSliderをセットする
noUiSlider.create($slider, {
  start: [ minVal, maxVal ], // ハンドルの初期位置を最小値・最大値にする
  connect: true,
  step: gap, // ハンドルが一度で動く数値を指定（今回はgapを指定しているので100毎動く）
  range: {
    'min': minVal, // スライダーの最小値を指定（minValに入っている、0が最大値）
    'max': maxVal // スライダーの最大値を指定（maxValに入っている、1,000が最小値）
  },
 
});
 
//noUiSliderイベント
$slider.noUiSlider.on('update', function( values, handle ) {
 
  //現在の最小値・最大値を取得
  var value = Math.floor(values[handle]);
 
  if ( handle ) {
    $max.get(0).value = value; //現在の最大値
  } else {
    $min.get(0).value = value; //現在の最小値
  }
 
});
 
//最小値をinputにセット
$($min.get(0)).on('change', function(){
  $slider.noUiSlider.set([this.value, null]);
});
 
//最大値をinputにセット
$($max.get(0)).on('change', function(){
  $slider.noUiSlider.set([null, this.value]);
});

}


/*
** Swiper top
*/

  new Swiper('.ts_gallery', {
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      });

/*
** Swiper top
*/
  new Swiper('.sw_gallery', {
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
        slidesPerView: 1.15,
      },
      640: {
        slidesPerView: 1.15,
      },
      768: {
        slidesPerView: 1.15,
      },
      820: {
        slidesPerView: 1.15,
      },
      1024: {
        slidesPerView: 2.5,
//        slidesPerView: 1.4,
      },
      1440: {
        slidesPerView: 2.5,
//        slidesPerView: 2.90,
      },
      1920: {
        slidesPerView: 2.5,
//      },
//      2560: {
//        slidesPerView: 3.35,
//      },
//      2880: {
//        slidesPerView: 3.75,
      }
    }
  });