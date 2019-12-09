$(function () {
    var swiper7 = new Swiper('.special-classification .swiper-container', {
        spaceBetween: 10,
        slidesPerColumn: 3,
        slidesPerView: 4,
        slidesPerGroup: 4,
        slidesPerColumnFill : 'row',
        autoplay:{
            delay:3000,
            disableOnInteraction:false
        }
    })
    window.swiper7 = swiper7
    setTimeout(function () {
        swiper7.update()
    }, 50)
    $('.special-classification').mouseover(function(){
        swiper7.autoplay.stop()
    }).mouseout(function(){
        swiper7.autoplay.start()
    })
})

$(function () {
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

$(function () {

    $("img.lazy").lazyload({
        skip_invisible: false,
        effect: "fadeIn",
        failure_limit: 999
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
        on: {
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


    // // 计算品牌分类的高度
    // var classificationLiHeight = $('.classification li').eq(0).outerHeight(true)
    // var classificationLiLength = $('.classification li').length
    // var pongeliLength = classificationLiLength / 5
    // var realHeight = pongeliLength * classificationLiHeight

    // // 初始化ul高度
    // setTimeout(function () {
    //     $('.classification ul').height(classificationLiHeight * 2)
    // }, 20)

    // // 品牌分类点击显示隐藏
    // $('.classification .more-btn').click(function () {
    //     if ($(this).hasClass('active')) {
    //         $('.classification ul').height(classificationLiHeight * 2)
    //         $(this).removeClass('active')
    //     } else {
    //         $('.classification ul').height(realHeight - parseInt($('.classification .content').css('padding-bottom')))
    //         $(this).addClass('active')
    //     }
    // })




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
        on: {
            sliderMove: function () {
                window.update()
            },
            slideChangeTransitionEnd: function () {
                window.update()
            },
            slideChangeTransitionStart: function () {
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
            sliderMove: function () {
                window.update()
            },
            slideChangeTransitionEnd: function () {
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

    // 加盟行业高度计算
    $('.latestin2 .content ul li').each(function (index, liItem) {
        if (index == 0) {
            var liHeight = $(liItem).outerHeight(true)
            var liLength = $('.latestin2 .content ul li').length
            var ulLiLength = liLength / 3
            var ulInitHeight = 4 * liHeight
            // 这里+20是因为有误差
            var ulpongeHeight = (ulLiLength * liHeight) + 10
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
    // var swiper7 = new Swiper('.latestin3 .swiper-container', {
    //     on: {
    //         slideChangeTransitionStart: function () {
    //             $('.latestin3 .tab ul li').eq(this.activeIndex).click()
    //         }
    //     },
    //     autoHeight: true
    // });
    // $('.latestin3 .tab ul li').click(function () {
    //     $(this).addClass('active').siblings().removeClass('active')
    //     var index = $(this).index()
    //     swiper7.slideTo(index)
    // })
    // $('.latestin3 .swiper-slide').each(function (slideIndex, slideItem) {
    //     var result = 0
    //     var pongResult = 0
    //     var liLength = $(this).find('.content ul li').length
    //     var zpongResult = 0
    //     var ulLiLength = liLength / 3
    //     var ulpongeHeight = ulLiLength * $(slideItem).find('li').eq(0).outerHeight(true)
    //     $(slideItem).find('li').each(function (liIndex, liItem) {
    //         if (liIndex == 0) {
    //             var liHeight = $(liItem).outerHeight(true)
    //             pongResult = liHeight * 4
    //         }
    //     })
    //     $(this).find('ul').height(pongResult)
    //     setTimeout(function () {
    //         swiper7.update()
    //     }, 520)

    //     $(this).find('.more-btn').click(function () {
    //         if ($(this).hasClass('active')) {
    //             $(this).siblings('.content').find('ul').height(pongResult)
    //             $(this).parents('.swiper-slide').height(pongResult + 10 + $(this).outerHeight(true))
    //             $(this).removeClass('active')
    //             swiper7.update()
    //         } else {
    //             $(this).parents('.swiper-slide').height(ulpongeHeight + 10 + $(this).outerHeight(true))
    //             $(this).siblings('.content').find('ul').height('100%')
    //             $(this).addClass('active')
    //             swiper7.update(true)
    //         }
    //     })
    // })


    setTimeout(function () {
        if (swiperObj.swiper4) {
            swiperObj.swiper4.update()
        }
        if (swiperObj.swiper5) {
            swiperObj.swiper5.update()
        }
        if (swiperObj.swiper6) {
            swiperObj.swiper6.update()
        }
        // if(swiperObj.swiper7){
        //     swiperObj.swiper7.update()
        // }
    }, 50)

    window.swiperObj = {
        swiper1: swiper1,
        swiper2: swiper2,
        swiper4: swiper4,
        swiper5: swiper5,
        swiper6: swiper6,
        // swiper7: swiper7,
    }

})

$(function () {
    if ($('.footer ul li').eq(1).find('h1').length > 0) {
        var html2 = $('.footer ul li').eq(1).find('h1').html()
        $('.footer ul li').eq(1).html(html2)
    }
})