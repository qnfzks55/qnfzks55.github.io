var richAndCarWebUi = (function() {
  return {
    element: {
      header: {
        pcHeader: "#header",
        mobHeader: "#mob_header",
        btnAppDown: ".btn_app_down"
      },
      mainBody: ".main_body",
      sticky: {
        selector: ".gnb",
        mobSelector: ".mob_gnb_area",
        link: ".gnb li"
      }
    },
    init: function() {
      this.eventInit();
    },
    eventInit: function() {
      this.scrollEvent();
      // this.stickyEvent();
      this.gnbEvent();
    },
    scrollEvent: function() {
      var lElement = this.element;
      var defaultWidth = 1174;
      var exceptNum = 5;
      var $mainBody = $(lElement.mainBody).offset().top;

      $(window)
        .scroll(function() {
          var lNowPos = $(this).scrollTop();

          // 애니메이션 영역 벗어날 시 활성화
          if (
            $(document).scrollTop() > $mainBody ||
            $(document).scrollTop() == $mainBody
          ) {
            // $(lElement.header.pcHeader).addClass("active");
            // $(lElement.header.mobHeader).addClass("active");
            $(lElement.header.btnAppDown).addClass("active");
          } else {
            // $(lElement.header.pcHeader).removeClass("active");
            // $(lElement.header.mobHeader).removeClass("active");
            $(lElement.header.btnAppDown).removeClass("active");
          }

          // 링크 변수 배열
          var contentId = [];
          // 내용 변수 배열
          var contentPos = [];

          var headerHeight =
            $(lElement.sticky.selector).outerHeight() + exceptNum;
          var mobHeaderHeight = $(lElement.sticky.mobSelector).outerHeight();

          // PC, M 기준 header
          function changeScrollHandler($el) {
            if (lNowPos + $el >= contentPos[i]) {
              $(lElement.sticky.link)
                .eq(i)
                .addClass("active")
                .siblings("li")
                .removeClass("active");
            } else if (lNowPos + $el < contentPos[0]) {
              $(lElement.sticky.link).removeClass("active");
            }
          }

          for (var i = 0; i < $(lElement.sticky.link).length; i++) {
            contentId[i] = $(lElement.sticky.link)
              .eq(i)
              .find("a")
              .attr("href");
            contentPos[i] = $(contentId[i]).offset().top;

            if (document.body.clientWidth <= defaultWidth) {
              changeScrollHandler(mobHeaderHeight);
            } else {
              changeScrollHandler(headerHeight);
            }
          }
        })
        .scroll();
    },
    // stickyEvent: function() {
    //   var lElement = this.element;
    //   var defaultWidth = 1174;
    //   var $abandonPos = $("#abandonpet").offset().top;

    //   $(lElement.sticky.link)
    //     .find("a")
    //     .click(function() {
    //       var lMoveObj = $(this).attr("href");

    //       var lMovePos;
    //       if (document.body.clientWidth <= defaultWidth) {
    //         lMovePos =
    //           $(lMoveObj).offset().top -
    //           $(lElement.header.mobHeader).outerHeight();
    //       } else {
    //         lMovePos =
    //           $(lMoveObj).offset().top -
    //           $(lElement.sticky.selector).outerHeight();
    //       }

    //       $("html,body")
    //         .stop(true)
    //         .animate({ scrollTop: lMovePos }, 300);

    //       $(lElement.sticky.mobSelector).removeClass("active");
    //       $(".bg_shadow").removeClass("active");
    //       $("body").removeClass("lock_modal");

    //       return false;
    //     });

    //   // 해쉬 url로 진입했을 때
    //   // $(window).on("load hashchange", function() {
    //   //   if (window.location.hash) {
    //   //     var hash = window.location.hash.substring(1);
    //   //     if (document.body.clientWidth <= defaultWidth) {
    //   //       $("html, body")
    //   //         .stop(true)
    //   //         .animate(
    //   //           {
    //   //             scrollTop:
    //   //               $("#" + hash).offset().top -
    //   //               $(lElement.header.mobHeader).outerHeight()
    //   //           },
    //   //           300
    //   //         );
    //   //     } else {
    //   //       $("html, body")
    //   //         .stop(true)
    //   //         .animate(
    //   //           {
    //   //             scrollTop:
    //   //               $("#" + hash).offset().top -
    //   //               $(lElement.sticky.selector).outerHeight()
    //   //           },
    //   //           300
    //   //         );
    //   //     }
    //   //   }
    //   // });

    //   // 스크롤 버튼
    //   // $(".section-down-arrow").click(function(e) {
    //   //   e.preventDefault();
    //   //   $("html,body")
    //   //     .stop(true)
    //   //     .animate(
    //   //       {
    //   //         scrollTop: $abandonPos - $(lElement.sticky.selector).outerHeight()
    //   //       },
    //   //       "fast"
    //   //     );
    //   // });

    //   $(".btn_logo").click(function(e) {
    //     e.preventDefault();
    //     $("html,body")
    //       .stop(true)
    //       .animate({ scrollTop: 0 }, "fast");
    //   });
    // },
    gnbEvent: function() {
      var lElement = this.element;

      $(".btn_menu").click(function(e) {
        e.preventDefault();
        $(lElement.sticky.mobSelector).addClass("active");
        $(".bg_shadow").addClass("active");
        $("body").addClass("lock_modal");
      });

      $(".btn_menu_close").click(function(e) {
        e.preventDefault();
        $(lElement.sticky.mobSelector).removeClass("active");
        $(".bg_shadow").removeClass("active");
        $("body").removeClass("lock_modal");
      });

      $(".bg_shadow").click(function(e) {
        $(lElement.sticky.mobSelector).removeClass("active");
        $("body").removeClass("lock_modal");
        $(this).removeClass("active");
      });
    }
  };
})();

// 인스턴스 호출
(function($) {
  $(function() {
    richAndCarWebUi.init();
  });
})(jQuery);
