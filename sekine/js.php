<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v10.0" nonce="SCLW6fI5"></script>
<?php if ( is_front_page() ) : ?>
<script type="text/javascript">
jQuery(function() {
 jQuery('.slider').slick({
		fade: true,
		autoplay:true,
		autoplaySpeed:5000,
		arrows:false
});
	
jQuery('.engineer-life-slider').slick({
	autoplay:true,
	dots: true,
	autoplaySpeed:5000,
	swipe: true,
	arrows:false	
	/*prevArrow: false,
	nextArrow: '<div class="sld_swipe"><span>Swipe</span></div>'*/

});
});
</script>
<script type="text/javascript">
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 80,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 3,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 4,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
</script>


<script>
particlesJS("particles-js2", {
  "particles":{
    "number":{
      "value":346,//この数値を変更すると星の数が増減できる
      "density":{
        "enable":true,
        "value_area":800
      }
    },
    "color":{
      "value":"#ffffff"
    },
    "shape":{
      "type":"circle",//形状はcircleを指定
      "stroke":{
        "width":0
      },
      },
    "opacity":{
      "value":1,//シェイプの透明度
      "random":true,//シェイプの透明度をランダムにする
      "anim":{
        "enable":true,//シェイプの透明度をアニメーションさせる
        "speed":3,//シェイプの透明度をアニメーションさせる
        "opacity_min":0,//透明度の最小値０
        "sync":false//全てを同時にアニメーションさせない
      }
    },
    "size":{
      "value":2,
      "random":true,
      "anim":{
        "enable":false,
        "speed":4,
        "size_min":0.3,
        "sync":false
      }
    },
    "line_linked":{
      "enable":false,
    },
    "move":{
      "enable":true,
      "speed":120,//この数値を小さくするとゆっくりな動きになる
    "direction":"none",//方向指定なし
    "random":true,//動きはランダムに
    "straight":true,//動きをとどめる
      "out_mode":"out",
      "bounce":false,
      "attract":{
        "enable":false,
        "rotateX":600,
        "rotateY":600
      }
    }
  },
  "interactivity":{
    "detect_on":"canvas",
    "events":{
      "onhover":{
        "enable":false,
      },
      "onclick":{
        "enable":false,
      },
      "resize":true
    }
  },
  "retina_detect":true
});
</script>


<?php endif; ?>


<script type="text/javascript">
	
jQuery(function() {
  let tabs = $(".tab"); // tabのクラスを全て取得し、変数tabsに配列で定義
  jQuery(".tab").on("click", function() { // tabをクリックしたらイベント発火
    jQuery(".active").removeClass("active"); // activeクラスを消す
    jQuery(this).addClass("active"); // クリックした箇所にactiveクラスを追加
    const index = tabs.index(this); // クリックした箇所がタブの何番目か判定し、定数indexとして定義
    jQuery(".content").removeClass("show").eq(index).addClass("show"); // showクラスを消して、contentクラスのindex番目にshowクラスを追加
  })
});
	

	
jQuery(window).on('load scroll', function (){

  var box = jQuery('.fadeIn');
  var animated = 'animated';
  
  box.each(function(){
  
    var boxOffset = jQuery(this).offset().top;
    var scrollPos = jQuery(window).scrollTop();
    var wh = jQuery(window).height();

    //画面内のどの位置で処理を実行するかで「100」の値を変更
    if(scrollPos > boxOffset - wh + 100 ){
      jQuery(this).addClass(animated);
    }
  });

});


jQuery(function () {
    jQuery('#nav-toggle').on('click', function() {
        jQuery('body').toggleClass('open');
    });
});

	
jQuery(function() {
  jQuery('a[href^="#"]').click(function(){
    var speed = 1000;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});
	
jQuery(function() {
    jQuery('.mh').matchHeight();
});
	
/* NOTE 画像切り替え-pcとsp- */
jQuery(function () {
    const $setElem = $('.switch'),
        pcName = '_pc',
        spName = '_sp',
        replaceWidth = 768;

    $setElem.each(function () {
        const $this = $(this);

        function imgSize() {
            const windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
            if (windowWidth >= replaceWidth) {
                $this.attr('src', $this.attr('src').replace(spName, pcName)).css({visibility: 'visible'});
            } else if (windowWidth < replaceWidth) {
                $this.attr('src', $this.attr('src').replace(pcName, spName)).css({visibility: 'visible'});
            }
        }

        $(window).resize(function () {
            imgSize();
        });
        imgSize();
    });
});

/* 画像切り替え-pcとtabとsp- */
jQuery(function () {
    const $setElem = $('.switch2'),
        pcName = '_pc',
        tbName = '_tb',
        spName = '_sp',
        replaceWidthTb = 1025,
        replaceWidthSp = 751;

    $setElem.each(function () {
        const $this = $(this);

        function imgSize() {
            const windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
            if (windowWidth >= replaceWidthTb) {
                $this.attr('src', $this.attr('src').replace(spName, pcName)).css({visibility: 'visible'});
                $this.attr('src', $this.attr('src').replace(tbName, pcName)).css({visibility: 'visible'});
            } else if (windowWidth < replaceWidthTb && windowWidth > replaceWidthSp) {
                $this.attr('src', $this.attr('src').replace(pcName, tbName)).css({visibility: 'visible'});
                $this.attr('src', $this.attr('src').replace(spName, tbName)).css({visibility: 'visible'});
            } else if (windowWidth < replaceWidthSp) {
                $this.attr('src', $this.attr('src').replace(pcName, spName)).css({visibility: 'visible'});
                $this.attr('src', $this.attr('src').replace(tbName, spName)).css({visibility: 'visible'});
            }
        }

        $(window).resize(function () {
            imgSize();
        });
        imgSize();
    });
});
</script>
