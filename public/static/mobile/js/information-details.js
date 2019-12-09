$(function () {
    $(".item_zx .cont .agree").click(function () {
        if ($(this).hasClass("on")) {
            $(this).removeClass("on");
        } else {
            $(this).addClass("on");
        }
    })
})
$(function(){
    $("img.lazy").lazyload({
        skip_invisible: false,
        effect: "fadeIn",
        failure_limit : 999
    });
})
$(function () {
    function footerHiddenFun() {
        var scrollTop = $(window).scrollTop()
        if (scrollTop >= 100) {
            $('.footer-xm-jm').stop().show()
        } else {
            $('.footer-xm-jm').stop().hide()
        }
    }
    footerHiddenFun()
    $(window).scroll(footerHiddenFun)
})