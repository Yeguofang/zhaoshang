$(function () {

    // 懒加载
    $("img.lazy").lazyload({
        skip_invisible: false,
        effect: "fadeIn",
        failure_limit: 999
    });

    // 轮播图
    var swiper1 = new Swiper('.slide .swiper-container', {
        pagination: {
            el: '.slide .swiper-pagination',
        },
        autoplay: {},
        lazy: {
            loadPrevNext: true,
            loadPrevNextAmount: 2,
        },
        on: {
            slideChangeTransitionStart: function () {
                window.update()
            },
        }
    });

    // // 4个tab选项卡
    // var swiper6 = new Swiper('.news .swiper-container', {
    //     autoHeight: true,
    //     on: {
    //         slideChangeTransitionStart: function () {
    //             $('.news .commonTabTages ul li').eq(this.activeIndex).click()
    //             window.update()
    //         },
    //         sliderMove: function () {
    //             window.update()
    //         },
    //         slideChangeTransitionEnd: function () {
    //             window.update()
    //         }
    //     },
    //     lazy: {
    //         preloaderClass: 'yxy-lazy-preloader',
    //     }
    // })
    // $('.news .commonTabTages ul li').click(function () {
    //     $(this).addClass('active').siblings().removeClass('active')
    //     var index = $(this).index()
    //     swiper6.slideTo(index)
    // })

    var swiper7 = new Swiper('.latestin3 .swiper-container', {
        on: {
            slideChangeTransitionStart: function () {
                $('.latestin3 .tab ul li').eq(this.activeIndex).click()
            }
        },
        autoHeight: true
    });
    $('.latestin3 .tab ul li').click(function () {
        $(this).addClass('active').siblings().removeClass('active')
        var index = $(this).index()
        swiper7.slideTo(index)
    })
    // $('.latestin3 .swiper-slide').each(function (slideIndex, slideItem) {
    //     var result = 0
    //     var pongResult = 0
    //     var liLength = $(this).find('.content ul li').length
    //     var zpongResult = 0
    //     var ulLiLength = liLength / 3
    //     var ulpongeHeight = Math.ceil(ulLiLength) * $(slideItem).find('li').eq(0).outerHeight(true)
    //     $(slideItem).find('li').each(function (liIndex, liItem) {
    //         if (liIndex == 0) {
    //             var liHeight = $(liItem).outerHeight(true)
    //             pongResult = liHeight * 4
    //         }

    //     })
    //     if ($(slideItem).find('li').length > 12) {
    //         $(this).find('ul').height(pongResult)
    //     }
    //     setTimeout(function () {
    //         swiper7.update()
    //     }, 520)

    //     if ($(slideItem).find('li').length > 12) {
    //         $(this).find('.more-btn').click(function () {
    //             if ($(this).hasClass('active')) {
    //                 $(this).siblings('.content').find('ul').height(pongResult)
    //                 $(this).parents('.swiper-slide').height(pongResult + 10 + $(this).outerHeight(true))
    //                 $(this).removeClass('active')
    //                 swiper7.update()
    //             } else {
                    
    //                 $(this).parents('.swiper-slide').height(ulpongeHeight + 10 + $(this).outerHeight(true))
    //                 $(this).siblings('.content').find('ul').height('100%')
    //                 $(this).addClass('active')
    //                 swiper7.update(true)
    //             }
    //         })
    //     } else {
    //         $(slideItem).find('.more-btn').hide()
    //     }

    // })

    $('.multiple').each(function (index, item) {
        var li = $(this).find('ul li')
        var lilength = li.length
        var btn = $(this).find('.btn-xc')
        if (lilength > 3) {
            var ul = $(this).find('ul')
            var liwidth = li.outerHeight(true)
            var originally = liwidth * lilength
            var init = liwidth * 3
            $(this).find('ul').height(init)
            btn.click(function () {
                if ($(this).hasClass('active')) {
                    $(this).removeClass('active')
                    ul.height(init)
                } else {
                    $(this).addClass('active')
                    ul.height(originally)
                }
            })
        } else {
            btn.parents('.commonlistMoreNew').hide()
        }
    })

})