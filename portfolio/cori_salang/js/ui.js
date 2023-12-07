/**
 * ui.js
 * Author : 이명종
 * Date : 20.04.01
 * Update : 20.04.13
 */
var coriSalangUI = (function () {
  return {
    element: {
      header: {
        gnb: ".gnb_list > li > a",
        subMenu: ".sub_menu_wrap",
      },
      swiperSlide: {
        mainSwifeEvent: ".main_swipe",
        exeSwifeEvent: ".executives_swipe",
      },
      mainScroll: {
        container: "#container",
        myInfoArea: ".my_info_layer",
        head: "head_default",
      },
      tabType: {
        target: ".js_tab_type li a",
      },
      tabType2: {
        target: ".js_tab_type2 li a",
      },
      accordionType: {
        target: "#accordion",
      },
      layer: {
        name: ".pop_layer",
        wrap: ".pop_content",
        btn: ".btn_close",
      },
    },
    init: function () {
      this.eventInit();
    },
    eventInit: function () {
      // var lElement = this.element;

      // 태블릿에서는 인트로 영상 삭제
      if ($(document).outerWidth() < 1024) {
        $(".intro_home").remove();
        0;
      }

      // 메인 문의전화 버튼
      $(".btn_customer").on("click", function () {
        var pcFilter = "win16|win32|win64|mac|macintel";
        if (navigator.platform) {
          if (pcFilter.indexOf(navigator.platform.toLowerCase()) < 0) {
            $(".btn_customer").prop("href", "tel:02-1670-1612");
          } else {
            alert("모바일에서만 이용가능합니다.");
            return false;
          }
        }
      });
      this.gnbViewController();
      this.introViewController();
      this.mainSwipeSlider();
      this.mainInstagramController();
      this.tabType();
      this.tabType2();
      this.accordionType();
    },
    gnbViewController: function () {
      var lElement = this.element;
      $(lElement.header.gnb).mouseenter(function () {
        var _this = $(this);
        $(lElement.header.subMenu).addClass("on");
        var index = $(this).parent().index();
        $(lElement.header.gnb).each(function (idx) {
          if (idx == index) {
            $(this).parent().addClass("active2");
          } else {
            $(this).parent().removeClass("active2");
          }
        });
      });
      $(lElement.header.subMenu).mouseleave(function () {
        $(lElement.header.subMenu).removeClass("on");
        if ($(lElement.header.gnb).parent().hasClass("active2")) {
          $(lElement.header.gnb).parent().removeClass("active2");
        }
      });
      $(lElement.header.subMenu)
        .find("ul")
        .mouseenter(function () {
          var _this = $(this);
          $(lElement.header.gnb).each(function (idx, data) {
            if (_this.hasClass("sub_menu1") && idx == 0) {
              $(data).parent().addClass("active2");
            } else if (_this.hasClass("sub_menu2") && idx == 1) {
              $(data).parent().addClass("active2");
            } else if (_this.hasClass("sub_menu3") && idx == 2) {
              $(data).parent().addClass("active2");
            }
          });
        });
      $(lElement.header.subMenu)
        .find("ul")
        .mouseleave(function () {
          var _this = $(this);
          $(lElement.header.gnb).each(function (idx, data) {
            if (_this.hasClass("sub_menu1") && idx == 0) {
              $(data).parent().removeClass("active2");
            } else if (_this.hasClass("sub_menu2") && idx == 1) {
              $(data).parent().removeClass("active2");
            } else if (_this.hasClass("sub_menu3") && idx == 2) {
              $(data).parent().removeClass("active2");
            }
          });
        });
    },
    introViewController: function () {
      $(".trigger, .intro_home").click(function () {
        $("#page_wrap").css("opacity", "1");
        $("#page_wrap").css("clip-path", "circle(100%)");
        $(".intro_home").css({
          "z-index": 0,
          opacity: 0,
        });
      });

      introComplete = false;

      setTimeout(function () {
        introComplete = true;
      }, 100);

      var scrollPosition = 0;
      window.addEventListener("wheel", function (e) {
        if (e.deltaY > 0) {
          scrollPosition += 10;
          $(".content").css("top", -scrollPosition + "px");
          if (introComplete) {
            $("#page_wrap").css("opacity", "1");
            $("#page_wrap").css("clip-path", "circle(100%)");
            $(".intro_home").css({
              "z-index": 0,
              opacity: 0,
            });
          }
        } else {
          scrollPosition -= 10;
        }
      });
    },
    mainSwipeSlider: function () {
      var lElement = this.element;

      // 메인 이벤트 스와이프
      var mainEventSwiper = new Swiper($(lElement.swiperSlide.mainSwifeEvent), {
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        loop: true,
        autoplay: {
          delay: 5000, // .progress 클래스 transition 속도와 일치시켜야 함
        },
        speed: 800,
        watchSlidesProgress: true,
        slidesPerView: "auto",
        centeredSlides: true,
        navigation: {
          nextEl: ".btn_swipe_next",
          prevEl: ".btn_swipe_prev",
        },
        on: {
          // progress bar ui처리
          slideChangeTransitionStart: function () {
            $(".progress").removeClass("active");
          },
          slideChangeTransitionEnd: function () {
            $(".progress").addClass("active");
          },
        },
      });

      // 임직원 스와이프
      var exeEventSwife = new Swiper($(lElement.swiperSlide.exeSwifeEvent), {
        loop: true,
        autoplay: {
          delay: 3000,
        },
        speed: 800,
        slidesPerView: 5,
        centeredSlides: true,
        navigation: {
          nextEl: ".btn_swipe_next",
          prevEl: ".btn_swipe_prev",
        },
      });
    },
    mainInstagramController: function () {
      // 인스타그램 API 지원 중단으로 rss로 연동
      var setInstagram = $("#get_instagram");
      $.ajax({
        url: "https://rss.app/feeds/QG2EuiSOnQZqZF1N.xml",
        dataType: "xml",
        success: function (data) {
          $.each($(data).find("item"), function (idx, items) {
            if ($(document).outerWidth() < 1024) {
              if (idx >= 3) {
                return;
              }
            } else {
              if (idx >= 5) {
                return;
              }
            }
            var li = document.createElement("li"),
              a = document.createElement("a"),
              div = document.createElement("div");

            (a.target = "_blank"),
              (a.href = $(items).find("link").text()),
              (div.innerHTML = $(items)
                .find("description")
                .text()
                .substring(5));
            div.classList.add("insta_img");
            $(li).append(a), $(a).append(div), setInstagram.append(li);
          });
        },
        error: function (error) {
          alert("rss 통신 에러!");
        },
      });
    },
    tabType: function () {
      var lElement = this.element;

      $(lElement.tabType.target).on("click", function (e) {
        var targetId = $(this).attr("href");
        var _this = $(this);

        // function activeTabEvent(target) {
        //   var $target = $(target);
        //   $target.find("li").each(function (idx, item) {
        //     var index = _this.parent().index();
        //     if (idx == index) {
        //       $(this).addClass("active");
        //     } else {
        //       $(this).removeClass("active");
        //     }
        //   });
        // }

        if ($(this).attr("target") !== "_blank") {
          e.preventDefault();
          $(this)
            .parent("li")
            .addClass("active")
            .siblings()
            .removeClass("active");

          // activeTabEvent("#quick_tab");
          // activeTabEvent(".sub_menu2");

          $(targetId).addClass("active").siblings().removeClass("active");
        } else {
          return true;
        }
      });
    },
    tabType2: function () {
      var lElement = this.element;

      $(lElement.tabType2.target).on("click", function (e) {
        var targetId = $(this).attr("href");

        if ($(this).attr("target") !== "_blank") {
          e.preventDefault();
          $(this)
            .parent("li")
            .addClass("active")
            .siblings()
            .removeClass("active");

          $(targetId).addClass("active").siblings().removeClass("active");
        } else {
          return true;
        }
      });
    },
    accordionType: function () {
      var lElement = this.element;
      var acc = $(lElement.accordionType.target).find(">li");

      acc.on("click", function () {
        var index = $(this).index();
        acc.each(function (idx) {
          if (idx == index) {
            $(this).toggleClass("active");
          } else {
            $(this).removeClass("active");
          }
        });
      });
    },
    layerPopUp: function (pOption) {
      /*   pOption
       *  {
       *  	 state : 'open' & 'close'
       *  	 selId : Layer Selector
       *     layer-type : 'modal' & 'fixed-modal' & 'layer
       *  }
       */
      var lLayer = $(pOption.selId);
      var lLayerBox = $(pOption.selId).find(this.element.layer.wrap);
      var llayerType = $(pOption.selId).data("layer-type");
      var _self = this;

      if (pOption.state !== "close") {
        if (llayerType === "layer") {
          lLayer.addClass("active");
        } else if (llayerType === "modal" || llayerType === "fixed-modal") {
          lLayer.show();
          lLayerBox.parent().append("<div class='bg_shadow'></div>");
          if (llayerType === "fixed-modal") {
            $("html, body").scrollTop(0);
          }
          // lLayerBox.css("margin-left", "-" + lLayerBox.outerWidth() / 2 + "px");
          // if (lLayerBox.outerHeight() < $(document).height()) {
          //   lLayerBox.css(
          //     "margin-top",
          //     "-" + lLayerBox.outerHeight() / 2 + "px"
          //   );
          // } else {
          //   lLayerBox.css("top", "0");
          // }
        }
      } else {
        lLayer.hide();
      }

      lLayer.find(_self.element.layer.btn).click(function (e) {
        e.preventDefault();
        if (llayerType === "layer" && llayerType !== undefined) {
          $(this).closest(_self.element.layer.name).removeClass("active");
        } else if (
          llayerType === "modal" ||
          llayerType === "fixed-modal" ||
          llayerType !== undefined
        ) {
          $(this).closest(_self.element.layer.name).hide();
          $(this).closest(_self.element.layer.name).find(".bg_shadow").remove();
          $(".modal_video").get(0).pause();
          $(".modal_youtube").each(function (idx) {
            $(this).attr("src", $(this).attr("src"));
            return false;
          });
        }
      });
    },
  };
})();

(function ($) {
  $(function () {
    coriSalangUI.init();
  });
})(jQuery);
