$num = $(".my-card").length;
$even = $num / 2;
$odd = ($num + 1) / 2;
if ($num % 2 == 0) {
  $(".my-card:nth-child(" + $even + ")").addClass("active-card");
  $(".my-card:nth-child(" + $even + ")")
    .prev()
    .addClass("prev-card");
  $(".my-card:nth-child(" + $even + ")")
    .next()
    .addClass("next-card");
} else {
  $(".my-card:nth-child(" + $odd + ")").addClass("active-card");
  $(".my-card:nth-child(" + $odd + ")")
    .prev()
    .addClass("prev-card");
  $(".my-card:nth-child(" + $odd + ")")
    .next()
    .addClass("next-card");
}

$(".my-card").click(function () {
  $slide = $(".active-card").width();
  console.log($slide);
  if ($(this).hasClass("next-card")) {
    $(".card-carousel")
      .stop(false, true)
      .animate({ left: "-=" + $slide });
  } else if ($(this).hasClass("prev-card")) {
    $(".card-carousel")
      .stop(false, true)
      .animate({ left: "+=" + $slide });
  }

  $(this).removeClass("prev-card next-card");
  $(this).siblings().removeClass("prev-card active-card next-card");

  $(this).addClass("active-card");
  $(this).prev().addClass("prev-card");
  $(this).next().addClass("next-card");
});

// Keyboard nav
$("html body").keydown(function (e) {
  if (e.keyCode == 37) {
    // left
    $(".active-card").prev().trigger("click");
  } else if (e.keyCode == 39) {
    // right
    $(".active-card").next().trigger("click");
  }
});
$(document).ready(function () {
  function loop() {
    $(".active-card").each(function (index) {
      l = $(".my-card").length - 1;
      if ($(".active-card").index() == l) {
        $slide = 0;
        for (i = 0; i < l; i++) {
          $slide = $slide + $(".my-card").width();
          $tmp = $(".prev-card");
          $tmp.removeClass("prev-card next-card");
          $tmp.siblings().removeClass("prev-card active-card next-card");

          $tmp.addClass("active-card");
          $tmp.prev().addClass("prev-card");
          $tmp.next().addClass("next-card");
        }
        $(".card-carousel")
          .stop(false, true)
          .animate({ left: "+=" + $slide });
      } else {
        $slide = $(".next-card").width();
        $tmp = $(this).next();
        $tmp.removeClass("prev-card next-card");
        $tmp.siblings().removeClass("prev-card active-card next-card");

        $tmp.addClass("active-card");
        $tmp.prev().addClass("prev-card");
        $tmp.next().addClass("next-card");
        $(".card-carousel")
          .stop(false, true)
          .animate({ left: "-=" + $slide });
      }
    });
  }
  myTimer = setInterval(function () {
    loop();
  }, 3000);
});
