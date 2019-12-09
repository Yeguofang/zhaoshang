$(function () {

    function headerSearchShow() {
        $('.header.second .title').addClass('an');
        $('.header.second .search').addClass('an');
        $('.header .return').addClass('an');
    }
    function headerSearchHide() {
        $('.header.second .title').removeClass('an');
        $('.header.second .search').removeClass('an');
        $('.header .return').removeClass('an');
    }

    $('.header.second .search').click(function (e) {
        e.stopPropagation()
    })

    $('.header.second .search span.active').click(function () {
        headerSearchShow()
    })

    function lazyinit(index) {
        $('.content-parent .block').eq(index).find('img.lazy').lazyload({
            effect: "fadeIn",
            container: $(".content-parent .block").eq(index).find('.wrapper'),
            event: 'scrollEnd'
        });
    }
    lazyinit(0)

    // 返回有active的index值
    function isInit(tabSlide) {
        var indexI = 0
        tabSlide.each(function (index, item) {
            if ($(item).hasClass('active')) {
                indexI = index
            }
        })
        return indexI
    }

    var tabSlide = $('.projectLibrary .tab .swiper-container .swiper-slide')
    var lazyloadIndexArr = []
    tabSlide.eq(0).addClass('active')
    tabSlide.click(function () {
        var index = $(this).index()

        // 防止多次点击同一个餐饮
        if (index != isInit(tabSlide)) {
            lazyinit(index)
        }
        $('.projectLibrary .content-parent .block').eq(index).stop().fadeIn().siblings().stop().fadeOut()
        $(this).addClass('active').siblings().removeClass('active')
        if (BTscrollArr[index]) {
            BTscrollArr[index].refresh()
        }
    })

    // 左边tab
    if ($('.projectLibrary .tab .swiper-container').length > 0) {
        var swiper = new Swiper('.projectLibrary .tab .swiper-container', {
            direction: 'vertical',
            freeMode: true,
            roundLengths: true,
            slidesPerView: 'auto'
        });
        setTimeout(function () {
            swiper.update()
        }, 500)
    }

    var arr = []
    $('.content-parent .block').each(function (index, item) {
        var scroll = new BScroll($(item).find('.wrapper').get(0), {
            scrollbar: {
                fade: true
            },
            probeType: 3,
            click: true,
        })
        scroll.on('scroll', function () {
            window.update()
        })
        arr.push(scroll)
    })
    window.BTscrollArr = arr

})