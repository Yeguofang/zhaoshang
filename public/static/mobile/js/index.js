$(function () {

    $("img.lazy").lazyload({
        skip_invisible: false,
        effect: "fadeIn",
        failure_limit : 999
    });

    // slide轮播图
    var swiper1 = new Swiper('.slide .swiper-container', {
        pagination: {
            el: '.slide .swiper-pagination',
        },
        autoplay: {},
        lazy: {
            loadPrevNext: true,
            loadPrevNextAmount: 2,
            // preloaderClass: 'yxy-lazy-preloader',
        },
        on:{
            slideChangeTransitionStart: function () {
                window.update()
            },
        }
    });

    // 品牌上榜
    var swiper2 = new Swiper('.brand .swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 5,
        freeMode: true,
        watchSlidesProgress: true,
        watchSlidesVisibility: true,
        lazy: {
            loadPrevNext: true,
            loadPrevNextAmount: 2,
            preloaderClass: 'yxy-lazy-preloader',
        }
    });




    // 火爆招商与项目推荐
    var swiper4 = new Swiper('.merchants .swiper-container', {
        on: {
            slideChangeTransitionStart: function () {
                $('.merchants .tab ul li').eq(this.activeIndex).click()
            },
            slideChangeTransitionEnd: function () {
                window.update()
            },
        },
        lazy: {
            // preloaderClass: 'yxy-lazy-preloader',
        }
    });
    $('.merchants .tab ul li').click(function () {
        $(this).addClass('active').siblings().removeClass('active')
        var index = $(this).index()
        swiper4.slideTo(index)
    })


    // 最新入驻
    var swiper5 = new Swiper('.latestin .swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 10,
        freeMode: true,
        lazy: {
            loadPrevNext: true,
            loadPrevNextAmount: 5,
            preloaderClass: 'yxy-lazy-preloader',
        },
        on:{
            sliderMove:function(){
                window.update()
            },
            slideChangeTransitionEnd:function(){
                window.update()
            },
            slideChangeTransitionStart:function(){
                window.update()
            }
        }
    });


    // 创业咨询/创业头条/创业回答/创业故事
    var swiper6 = new Swiper('.news .swiper-container', {
        autoHeight: true,
        on: {
            slideChangeTransitionStart: function () {
                $('.news .commonTabTages ul li').eq(this.activeIndex).click()
                window.update()
            },
            sliderMove:function(){
                window.update()
            },
            slideChangeTransitionEnd:function(){
                window.update()
            }
        },
        lazy: {
            preloaderClass: 'yxy-lazy-preloader',
        }
    })
    $('.news .commonTabTages ul li').click(function () {
        $(this).addClass('active').siblings().removeClass('active')
        var index = $(this).index()
        swiper6.slideTo(index)
    })

    // 计算高度
    // $('.news .swiper-container .swiper-wrapper .swiper-slide').each(function (slideIndex, slideItem) {
    //     var result = 0
    //     var pongeResult = 0
    //     $(slideItem).find('li').each(function (liIndex, liItem) {
    //         var height = $(liItem).outerHeight(true)
    //         if (liIndex < 5) {
    //             result += height
    //         }
    //         pongeResult += height
    //     })

    //     // 给查看更多添加点击事件
    //     $(this).find('.more-btn').click(function () {
    //         $(this).siblings('ul').height(pongeResult)
    //         $(this).hide()
    //         $(this).parents('.swiper-slide').height(pongeResult)
    //         swiper6.update()
    //     })

    //     $(this).find('ul').height(result)
    // })

    // 加盟行业高度计算
    $('.latestin2 .content ul li').each(function (index, liItem) {
        if (index == 0) {
            var liHeight = $(liItem).outerHeight(true)
            var liLength = $('.latestin2 .content ul li').length
            var ulLiLength = liLength / 3
            var ulInitHeight = 4 * liHeight
            // 这里+20是因为有误差
            var ulpongeHeight = (ulLiLength * liHeight)+10
            $(this).parents('ul').height(ulInitHeight)
            $(this).parents('.content').find('.more-btn').click(function () {
                if ($(this).hasClass('active')) {
                    $(this).siblings('ul').height(ulInitHeight)
                    $('.latestin2').removeClass('active')
                    $(this).removeClass('active')
                } else {
                    $(this).siblings('ul').height(ulpongeHeight)
                    $('.latestin2').addClass('active')
                    $(this).addClass('active')
                }

            })
        }
    })

    // 热门项目
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
    $('.latestin3 .swiper-slide').each(function (slideIndex, slideItem) {
        var result = 0
        var pongResult = 0
        var liLength = $(this).find('.content ul li').length
        var zpongResult = 0
        var ulLiLength = liLength / 3
        var ulpongeHeight = ulLiLength * $(slideItem).find('li').eq(0).outerHeight(true)
        $(slideItem).find('li').each(function (liIndex, liItem) {
            if (liIndex == 0) {
                var liHeight = $(liItem).outerHeight(true)
                pongResult = liHeight * 10
            }
        })
        $(this).find('ul').height(pongResult)
        setTimeout(function () {
            swiper7.update()
        }, 520)

        $(this).find('.more-btn').click(function () {
            if ($(this).hasClass('active')) {
                $(this).siblings('.content').find('ul').height(pongResult)
                $(this).parents('.swiper-slide').height(pongResult + 10 + $(this).outerHeight(true))
                $(this).removeClass('active')

                // $(this).parents('.swiper-slide').animate({
                //     'height':(pongResult+10+$(this).outerHeight(true))
                // },500,'linear')
                swiper7.update()
            } else {
                // $(this).siblings('.content').find('ul').height(ulpongeHeight)
                $(this).parents('.swiper-slide').height(ulpongeHeight + 10 + $(this).outerHeight(true))
                $(this).siblings('.content').find('ul').height('100%')
                $(this).addClass('active')
                swiper7.update(true)
                // $(this).parents('.swiper-slide').animate({
                //     'height':ulpongeHeight+10+$(this).outerHeight(true)
                // },500,'linear')
                // $(this).parents('.swiper-slide').height(ulpongeHeight+10+$(this).outerHeight(true))
            }
        })
    })


    setTimeout(function () {
        // swiper1.update()
        // swiper2.update()
        // swiper3.update()
        swiper4.update()
        swiper5.update()
        swiper6.update()
        swiper7.update()
    }, 50)

    window.swiperObj = {
        swiper1: swiper1,
        swiper2: swiper2,
        // swiper3:swiper3,
        swiper4: swiper4,
        swiper5: swiper5,
        swiper6: swiper6,
        swiper7: swiper7,
    }

})
$(function(){
    if($('.footer ul li').eq(1).find('h1').length > 0){
        var html2 = $('.footer ul li').eq(1).find('h1').html()
        $('.footer ul li').eq(1).html(html2)
    }
})

