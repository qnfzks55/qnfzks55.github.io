var richCarPlanetUI = (function() {
  return {
    element: {
      swiperSlide: {
        tutorialSwifeEvent: ".tutorial_swipe",
        mainSwifeEvent: ".main_swipe",
        answerSwifeEvent: ".answer_swipe",
        mainNotice: ".main_notice_swipe",
        myInfoSwifeEvent: ".my_point_swipe",
        shareSwifeEvent: ".marquee_swipe"
      },
      mainScroll: {
        container: "#container",
        myInfoArea: ".my_info_layer",
        head: "head_default"
      },
      tabType: {
        target: ".js_tab_type li a"
      },
      accordionType: {
        target: ".accordion"
      },
      layer: {
        name: ".pop_layer",
        wrap: ".pop_content",
        btn: ".btn_close"
      },
      hoverEvent: {
        target: ".js_hover_list li"
      }
    },
    init: function() {
      this.eventInit();
    },
    eventInit: function() {
      var lElement = this.element;

      // $(".my_point").html(priceNumberComma("999999"));

      // if (
      //   $(".my_point").outerWidth() >
      //   $(lElement.mainScroll.myInfoArea).width() / 2
      // ) {
      //   $(".my_pf_info.woman").html("님");
      // } else {
      //   $(".my_pf_info.woman").html("님 포인트");
      // }

      var totalRadio = $(".list_info_text").find("input[type='radio']").length;
      $(".list_info_text")
        .find("input[type='radio']")
        .each(function(idx) {
          $(this).on("click", function() {
            if (idx === totalRadio - 1) {
              $(".etc").show();
            } else {
              $(".etc").hide();
            }
          });
        });

      // 계정정보 변경 (연락처&비밀번호) 토글
      toggleEvent("#btn_acco_modify", ".account_form");
      toggleEvent("#btn_pw_modify", "#auth_change_pw");

      // 약관
      toggleEvent(".btn_toggle_arrow");

      // 약관 전체 동의 체크 시 펼침
      // $(".agree_ok, .agree_ok2").click(function() {
      //   if ($(this).is(":checked")) {
      //     $(this)
      //       .parents(".input_checkbox_type5")
      //       .next()
      //       .addClass("active");
      //     $(this)
      //       .parents(".agree_head")
      //       .next()
      //       .show();
      //   }
      // });

      $(".account_form1")
        .find("#btn_acco_req")
        .on("click", function() {
          $(this).hide();
          $(this)
            .next()
            .show();
          $(".account_form2").show();
        });

      // header 스크롤 이벤트
      var h_type1 = lElement.mainScroll.head + "_type1";
      var header_type1 = $("." + h_type1);
      var iOS = navigator.userAgent.match(/(iPad|iPhone|iPod)/g) ? true : false;
      var iOSver = iOSVersion();
      var iOSNewVer = 13;

      function headerToggleEvent(target) {
        var el = $(target);
        if (el.scrollTop() > 0) {
          header_type1.addClass("active");
          $("#head_mask").addClass("mask");
        } else {
          header_type1.removeClass("active");
          $("#head_mask").removeClass("mask");
        }

        // if (document.clientHeight > document.scrollHeight - el.scrollTop) {
        //   console.log("dd");
        // }
      }

      $(window).scroll(function() {
        if (iOS) {
          headerToggleEvent("body");
        } else {
          headerToggleEvent("html, body");
        }
        if (iOS && iOSver >= iOSNewVer) {
          headerToggleEvent("html, body");
        }
      });

      // 포커스 함수 호출
      focusAutoScroll("#item_544", true);

      this.agreeCheck();
      // this.inputCheck();
      this.mainSwipeSlider();
      this.scrollMyPointBanner();
      this.tabType();
      // this.accordionType();
      this.layerDataToggle();
      this.hoverEvent();
    },
    agreeCheck: function() {
      chkAllAgree(".agree_ok", "agree_chk");
      chkAllAgree(".agree_ok2", "agree_chk2");
      chkAgree("agree_chk", ".agree_ok");
      chkAgree("agree_chk2", ".agree_ok2");

      radioAllAgree("#agree_all_chk", ".pop_agree_body");
      radioAgree(".pop_agree_body", "#agree_all_chk");
    },
    // inputCheck: function() {
    //   // 비밀번호 변경 팝업 폼
    //   activeInputIcon(".change_pw_state");
    // },
    formDisabledCheck: function(el) {
      var lelement = $(el.listClass);
      var lelement_list = $(el.listClass).find("li");
      var $btn_modify = $(".btn_modify");

      lelement.find($btn_modify).on("click", function() {
        $(this).text(function(idx, text) {
          return $.trim(text) == "수정" ? "취소" : "수정";
        });
        $(this).toggleClass("btn_cancle");
        if ($(this).hasClass("btn_cancle")) {
          lelement_list
            .find(".input_type2")
            .not($(this).closest(".modify_ok"))
            .parent()
            .addClass("disabled");
        } else {
          lelement_list
            .find(".input_type2")
            .not($(this).closest(".modify_ok"))
            .parent()
            .removeClass("disabled");
        }
      });
    },
    mainSwipeSlider: function() {
      var lElement = this.element;

      // 메인 이벤트 스와이프
      var mainEventSwiper = new Swiper($(lElement.swiperSlide.mainSwifeEvent), {
        pagination: {
          el: ".swiper-pagination",
          clickable: true
        },
        loop: true,
        autoplay: {
          delay: 2000
        },
        speed: 800
      });

      // 내 포인트 스와이프
      var myInfoSwiper = new Swiper($(lElement.swiperSlide.myInfoSwifeEvent), {
        pagination: {
          el: ".swiper-pagination",
          clickable: true
        },
        autoHeight: true,
        speed: 800
      });
      myInfoSwiper.on("slideChange", function() {
        $("html,body")
          .stop(true)
          .animate(
            {
              scrollTop: 0
            },
            400
          );
      });
      myInfoSwiper.on("slideChange click", function() {
        var activeIndex = myInfoSwiper.activeIndex;
        if (activeIndex == 0) {
          $(".my_point_tab .swiper-pagination")
            .addClass("first_item")
            .removeClass("second_item third_item");
        } else if (activeIndex == 1) {
          $(".my_point_tab .swiper-pagination")
            .addClass("second_item")
            .removeClass("first_item third_item");
        } else if (activeIndex == 2) {
          $(".my_point_tab .swiper-pagination")
            .addClass("third_item")
            .removeClass("first_item second_item");
        }
      });

      // 메인 공지사항 스와이프
      var mainNoticeSwiper = new Swiper($(lElement.swiperSlide.mainNotice), {
        pagination: {
          el: ".swiper-pagination",
          clickable: true
        },
        loop: true,
        speed: 800
      });

      // 메인 이벤트 스와이프
      $(lElement.swiperSlide.answerSwifeEvent).each(function(idx) {
        var $this = $(this);
        $this.addClass("answer-" + idx);
        var answerEventSwiper = new Swiper(".answer-" + idx, {
          pagination: {
            el: ".swiper-pagination",
            clickable: true
          },
          autoHeight: true,
          loop: true,
          // autoplay: {
          //   delay: 2000
          // },
          speed: 800,
          observer: true, // 스와이프 변화 감지
          observeParents: true // 스와이프 부모의 변화 감지
        });
      });

      // 튜토리얼 스와이프
      var tutorialSwiper = new Swiper(
        $(lElement.swiperSlide.tutorialSwifeEvent),
        {
          pagination: {
            el: ".swiper-pagination",
            clickable: true
          },
          speed: 800
        }
      );

      // 공유화면용 스와이프 (마퀴효과)
      var shareSwiper = new Swiper($(lElement.swiperSlide.shareSwifeEvent), {
        pagination: false,
        slidesPerView: 4,
        loop: true,
        autoplay: {
          delay: 1000
        },
        navigation: {
          nextEl: ".btn_swipe_next",
          prevEl: ".btn_swipe_prev"
        },
        speed: 400,
        observer: true, // 스와이프 변화 감지
        observeParents: true // 스와이프 부모의 변화 감지
      });
    },
    scrollMyPointBanner: function() {
      var lElement = this.element;
      var llayerType = $(lElement.mainScroll.myInfoArea).data("info-layer");
      $(window).scroll(function() {
        var lNowPos = $(this).scrollTop();
        if (llayerType == "main" || llayerType == undefined) {
          if (
            lNowPos >=
            Math.round($(lElement.mainScroll.myInfoArea).outerHeight() / 2)
          ) {
            $(lElement.mainScroll.myInfoArea).addClass("active");
          } else {
            $(lElement.mainScroll.myInfoArea).removeClass("active");
          }
        } else if (llayerType == "sub" && llayerType != undefined) {
          if (lNowPos > 0) {
            $(lElement.mainScroll.myInfoArea).addClass("active");
            $(".my_point_tab").addClass("active");
            $(".cnt_default_type4").addClass("active");
          } else {
            $(lElement.mainScroll.myInfoArea).removeClass("active");
            $(".my_point_tab").removeClass("active");
            $(".cnt_default_type4").removeClass("active");
          }
        }
      });
    },
    tabType: function() {
      var lElement = this.element;
      $(lElement.tabType.target).on("click", function(e) {
        var targetId = $(this).attr("href");
        if ($(this).attr("target") !== "_blank") {
          e.preventDefault();
          $(this)
            .parent("li")
            .addClass("on")
            .siblings()
            .removeClass("on");
          $(targetId)
            .addClass("on")
            .siblings()
            .removeClass("on");
        } else {
          return true;
        }
      });
    },
    // accordionType: function() {
    //   var lElement = this.element;
    //   var acc = $(lElement.accordionType.target);

    //   for (var i = 0; i < acc.length; i++) {
    //     acc[i].addEventListener("click", function() {
    //       this.classList.toggle("active");
    //       var classes = this.classList.contains("active");

    //       var panel = this.nextElementSibling;

    //       if (classes) {
    //         panel.classList.add("active");
    //       } else {
    //         panel.classList.remove("active");
    //       }
    //     });
    //   }
    // },
    layerPopUp: function(pOption) {
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

      lLayer.find(_self.element.layer.btn).click(function(e) {
        e.preventDefault();
        if (llayerType === "layer" && llayerType !== undefined) {
          $(this)
            .closest(_self.element.layer.name)
            .removeClass("active");
        } else if (
          llayerType === "modal" ||
          llayerType === "fixed-modal" ||
          llayerType !== undefined
        ) {
          $(this)
            .closest(_self.element.layer.name)
            .hide();
          $(this)
            .closest(_self.element.layer.name)
            .find(".bg_shadow")
            .remove();
        }
      });
    },
    layerDataToggle: function() {
      var lelement = $(".layer_head");
      var layer = lelement.next(".layer_cnt");

      lelement.on("click", function() {
        if (
          $(this)
            .find(".btn_layer_open")
            .hasClass("close")
        ) {
          $(this)
            .next(".layer_cnt")
            .hide();
          $(this)
            .find(".btn_layer_open")
            .removeClass("close");
        } else {
          $(this)
            .next(".layer_cnt")
            .show();
          $(this)
            .find(".btn_layer_open")
            .addClass("close");
        }
        return false;
      });

      // 레이어 이외 영역 클릭시 닫힘
      $("body").on("click", function(e) {
        if (!layer.is(e.target) && layer.has(e.target).length == 0) {
          layer.hide();
          $(this)
            .find(".btn_layer_open")
            .removeClass("close");
        }
      });

      $(document)
        .find(layer)
        .each(function() {
          $(this).on("click", "li", function() {
            $(this)
              .closest(".layer_cnt")
              .prev(".layer_head")
              .find("input")
              .attr("value", $(this).text())
              .addClass("active")
              .trigger("change");
            lelement.find(".btn_layer_open").removeClass("close");
            $(this)
              .closest(layer)
              .hide();
          });
        });
    },
    hoverEvent: function() {
      var lElement = this.element;
      $(lElement.hoverEvent.target).hover(
        function() {
          $(this)
            .addClass("on")
            .siblings("li")
            .removeClass("on");
        },
        function() {
          $(this).removeClass("on");
        }
      );
    }
  };
})();

(function($) {
  $(function() {
    richCarPlanetUI.init();
  });
})(jQuery);
