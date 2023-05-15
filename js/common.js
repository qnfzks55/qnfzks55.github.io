/**
 * ui.js
 * Author : LMJ
 * Date : 16.10.17
 * Update : 23.05.15
 */

if (typeof lmj === "undefined") {
    lmj = {};
}

lmj.lmj_ui = function () {
    this.init();
};

lmj.lmj_ui.prototype = (function () {
    let $nav = $("#nav li"),
        date = new Date();

    function removeli() {
        $nav.removeClass("active");
    }

    function scrollTopBtn() {
        $("body").on("click", "#top_bt, .title", function (e) {
            e.preventDefault();
            $("body, html").stop(true).animate(
                {
                    scrollTop: 0,
                },
                500,
                "easeInOutExpo"
            );
        });
    }

    // 풋터 날짜
    document.querySelector(".copyright__year").innerHTML = `${date.getFullYear()}`;

    return {
        init: function () {
            this.bindEvent();
        },

        bindEvent: function () {
            this.topAnimation();
            this.scrollPosition();
            this.portfolioScroll();
            this.changeAgentMobile("cori");
            this.changeAgentMobile("sl");
        },
        topAnimation: function () {
            scrollTopBtn();
        },
        scrollPosition: function () {
            $(window).scroll(function () {
                var scroll_info = $(window).scrollTop();

                if (scroll_info >= Math.floor($("#about").offset().top)) {
                    removeli();
                    $(".about").addClass("active");
                }

                if (scroll_info >= Math.floor($("#skill").offset().top)) {
                    removeli();
                    $(".skill").addClass("active");
                }

                if (scroll_info >= Math.floor($("#portfolio").offset().top)) {
                    removeli();
                    $(".port").addClass("active");
                }

                /* if(scroll_info >= Math.floor($('#contact').offset().top)){
					removeli();
					$('.contact').addClass('active');
				}*/
            });
        },
        portfolioScroll: function () {
            var $img_area = $("#portfolio .image");
            $img_area.hover(
                function () {
                    var $img_h = $(this).find("img").height() - $img_area.height();
                    $(this)
                        .find("img")
                        .css("transform", "translate3d(0, " + -$img_h + "px, 0)");
                },
                function () {
                    $(this).find("img").css("transform", "translate3d(0, 0, 0)");
                }
            );
        },
        changeAgentMobile: function (type) {
            var varUA = navigator.userAgent.toLowerCase(); //userAgent 값 얻기
            var deviceOs = null;
            var androidLink = "https://play.google.com/store/apps/details?id=kr.richplanet.app.cori&hl=ko";
            //var iosLink = "javascript:alert('앱스토어 등록 중입니다.')";
            var iosLink = "https://itunes.apple.com/kr/app/id1476796492";
            var downloadLink = "";

            if (type == "cori") {
                if (varUA.match("android") != null) {
                    // 안드로이드 일때 처리
                    deviceOs = "android";
                    downloadLink = androidLink;
                } else if (varUA.indexOf("iphone") > -1 || varUA.indexOf("ipad") > -1 || varUA.indexOf("ipod") > -1) {
                    //IOS 일때 처리
                    deviceOs = "ios";
                    downloadLink = iosLink;
                } else {
                    //아이폰, 안드로이드 외 처리
                    downloadLink = "http://cori.pet";
                    $("#btn_app_link").on("click", function () {
                        alert("PC에서는 웹사이트로 이동합니다.\n해당 작업물은 모바일에서 확인 부탁드립니다.");
                    });
                }
                $("#btn_app_link").prop("href", downloadLink);
            }

            if (type == "sl") {
                if (
                    varUA.match("android") != null ||
                    varUA.indexOf("iphone") > -1 ||
                    varUA.indexOf("ipad") > -1 ||
                    varUA.indexOf("ipod") > -1
                ) {
                    $("#btn_mo_link").prop("href", "./portfolio/sl_reser_event_mobile/page/index.html");
                }
            }
        },
        loadingUi: function () {
            var loadingElement = document.createElement("div");
            loadingElement.classList.add("loading");
            document.body.append(loadingElement);
        },
    };
})();
