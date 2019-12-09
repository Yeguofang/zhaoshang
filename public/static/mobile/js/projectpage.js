$(function () {



    function classificationAddH1() {

        var html = $(".classification .tab ul li").eq(0).find('span').html()

        $(".classification .tab ul li").eq(0).find('span').html('<h1>' + html + '</h1>')

    }

    function footernavRemoveH1() {

        var html2 = $('.footer ul li').eq(1).find('h1').html()

        $('.footer ul li').eq(1).html(html2)

    }

    function listRemoveH2() {

        $('.projectPage .contentList ul li').each(function (index, item) {

            if ($(item).find('h2')) {

                var html = $(item).find('h2').html()

                $(item).find('.title').html(html)

            }

        })

    }

    var classbolleanli1 = $('.classification .tab ul li').eq(0).hasClass('active')

    var classbolleanli2 = $('.classification .tab ul li').eq(1).hasClass('active')

    var classbolleanli3 = $('.classification .tab ul li').eq(2).hasClass('active')

    if (classbolleanli1 && !classbolleanli2 && !classbolleanli3) {

        footernavRemoveH1()

        classificationAddH1()

    } else if ((classbolleanli2 || classbolleanli3)) {

        listRemoveH2()

        footernavRemoveH1()

    }







    // 鍒ゆ柇鍒濆鍖栧叏閮ㄥ垎绫诲乏渚у姞杞�

    function initLeftAjax() {

        var boolean = false

        $('.classification .content .contentTab .swiper-container .swiper-slide').each(function (index, item) {

            if ($(item).hasClass('active')) {

                boolean = true

            }

        })

        if (!boolean) {

            $('.classification .content .contentTab .swiper-container .swiper-slide').eq(0).addClass('active')

        }

    }

    initLeftAjax()



    // 椤圭洰搴撳垪琛ㄨ绠楅珮搴�

    // setTimeout(function(){

    //     $('.projectPage .contentList ul li').each(function (index, item) {

    //         if (index == 0) {

    //             var liLength = $('.projectPage .contentList ul li').length

    //             var liHeight = $(item).outerHeight(true)

    //             console.log(liHeight)

    //             var pongeHeight = liLength * liHeight

    //             $('.projectPage .contentList ul').height(liHeight * 10)

    //             $('.projectPage .contentList .more-btn').click(function () {

    //                 $('.projectPage .contentList ul').height(pongeHeight)

    //                 $(this).hide()

    //             })

    //         }

    //     })

    // },20)



    $("img.lazy").lazyload();



    function pagelistShow() {

        $('.classification .btn').show()

        $('.mc').stop().fadeIn()

        $('.mc').addClass('active')

        $('.header').css('z-index', 4)

        $('.classification').addClass('active')

        $('body').css({

            "overflow-x": "hidden",

            "overflow-y": "hidden"

        });

    }

    function pagelistHide() {

        $('.ponglist').stop().slideUp('normal', function () {

            $('.mc').stop().fadeOut()

            $('.mc').removeClass('active')

            $('.header').css('z-index', 3)

            // $('.classification').removeClass('active')

            $('body').css({

                "overflow-x": "auto",

                "overflow-y": "auto"

            });

            $('.classification .btn').hide()

        $('.classification').removeClass('active')

            $('.classification .ponglist>div').hide()

            // $('.classification .tab ul li').removeClass('active')

            // $('.classification .content .right ul li').removeClass('active')
            $('.classification .ponglist').removeClass('active')

        })

    }



    function init() {

        $('.classification .content .contentTab .swiper-container .swiper-slide').eq(0).addClass('active').siblings().removeClass('active')

    }

    // init()



    // 鍒犻櫎椤甸潰鐨勬墍鏈塩lass涓篴ctive鐨勫垪琛�

    function removeLiActive() {

        // $('.classification .investment ul li, .classification .region ul li,.classification .content .right ul li').removeClass('active')

    }



    // 鐐瑰嚮鍒嗙被鏄剧ず
    var pongelistTabHeightSave = $('.classification .ponglist').height()
    $('.classification .tab ul li').click(function () {

        var index = $(this).index()

        if(index == 0){
            // $('.classification .ponglist').height(pongelistTabHeightSave)
            var headerHeight = $('.header').outerHeight(true)
            var tabHeight = $('.classification .tab').outerHeight(true)
            var windowHeight = $(window).height()
            var truenumber = windowHeight - (headerHeight+tabHeight)
            truenumber = truenumber - 15 - 20
            $('.classification .ponglist').css({
                height:truenumber+'px'
            })
        }else if(index == 1){
            $('.classification .ponglist').height(pongelistTabHeightSave)
        }else if(index == 2){
            var headerHeight = $('.header').outerHeight(true)
            var tabHeight = $('.classification .tab').outerHeight(true)
            var windowHeight = $(window).height()
            var truenumber = windowHeight - (headerHeight+tabHeight)
            truenumber = truenumber - 15 - 20
            $('.classification .ponglist').css({
                height:truenumber+'px'
            })
        }

        // $(this).addClass('active').siblings().removeClass('active')

        pagelistShow()

        $('.ponglist').stop().slideDown()

        if (index == 0) {

            if ($('.classification .content').is(':hidden')) {


                $('.classification .content').show().siblings().hide()

                var indexOP = 0

                $('.classification .content .contentTab .swiper-container .swiper-slide').each(function (index, item) {

                    if ($(item).hasClass('active')) {

                        indexOP = index

                    }

                })

                if (BTscrollArr[indexOP]) {

                    BTscrollArr[indexOP].refresh()

                }

                swiperLeftTab.update()

                removeLiActive()

            }

        } else if (index == 1) {

            if ($('.classification .investment').is(':hidden')) {


                $('.classification .investment').show().siblings().hide()

                investmentBSroll.refresh()

                removeLiActive()

            }

        } else if (index == 2) {

            if ($('.classification .region').is(':hidden')) {


                $('.classification .region').show().siblings().hide()

                regionBSroll.refresh()

                removeLiActive()

            }

        }

    })



    // // 鐐瑰嚮纭鎸夐挳

    // $('.classification .btn .enter').click(function () {

    //     $('.classification .investment ul li, .classification .region ul li, .classification .content .right ul li').each(function (index, item) {

    //         if ($(item).hasClass('active')) {

    //             location.href = $(item).find('a').attr('href')

    //         }

    //     })

    // })



    // // 鐐瑰嚮鍙栨秷鎸夐挳闅愯棌

    // $('.classification .btn .esc').click(function () {

    //     pagelistHide()

    // })



    // 鍒濆鍖栦笅鎷夊垎绫籦tscroll鍒濆鍖�

    var arr = []

    if ($('.right .block').length) {

        $('.right .block').each(function (index, item) {

            var scroll = new BScroll($(item).find('.wrapper').get(0), {

                scrollbar: {

                    fade: true

                },

                click: true,

            })

            arr.push(scroll)

        })

    }

    window.BTscrollArr = arr





    // 鍒濆鍖栨姇璧勯噾棰�,鍔犵洘鍦板尯鐨勪笂涓嬬Щ鍔�

    if ($('.investment').length) {

        window.investmentBSroll = new BScroll('.investment', {

            scrollbar: {

                fade: true

            },

            click: true,

        })

    }



    if ($('.region').length) {

        window.regionBSroll = new BScroll('.region', {

            scrollbar: {

                fade: true

            },

            click: true,

        })

    }





















    $('.classification .content .right ul li a').click(function () {

        pagelistHide()

    })

    $('.classification .investment ul li a').click(function () {

        pagelistHide()

    })

    $('.classification .region ul li a').click(function () {

        pagelistHide()

    })





    // 鐐瑰嚮鍏ㄩ儴鍒嗙被缁欏綋鍓嶅鍔犲鍙锋牱寮�

    $('.classification .content .right ul li').click(function () {

        // $('.classification .content .right ul li').removeClass('active')

        // $(this).addClass('active')



    })

    // 鐐瑰嚮鎶曡祫閲戦缁欏綋鍓嶅鍔犳牱寮�

    $('.classification .investment ul li').click(function () {

        $(this).addClass('active').siblings().removeClass('active')

    })

    // 鐐瑰嚮鍔犵洘鍦板尯缁欏綋鍓嶅鍔犳牱寮�

    $('.classification .region ul li').click(function () {

        $(this).addClass('active').siblings().removeClass('active')

    })





    // 鐐瑰嚮宸︿晶tab鍒囨崲class

    $('.classification .content .contentTab .swiper-container .swiper-slide').click(function () {

        $(this).addClass('active').siblings().removeClass('active')

        var index = $(this).index()

        $('.classification .content .right .block').eq(index).stop().fadeIn().siblings().stop().fadeOut()

        if (window.BTscrollArr[index]) {

            window.BTscrollArr[index].refresh()

        }

    })



    // 鍒嗙被宸︿晶tab閫夐」

    var swiper = new Swiper('.classification .contentTab .swiper-container', {

        direction: 'vertical',

        freeMode: true,

        roundLengths: true,

        slidesPerView: 'auto'

    });

    setTimeout(function () {

        swiper.update()

    }, 500)

    window.swiperLeftTab = swiper



    // 鏈€鏂拌祫璁痶ab閫夐」鍗″垏鎹�

    var swiper4 = new Swiper('.news .swiper-container', {

        on: {

            slideChangeTransitionStart: function () {

                $('.news .commonTabTages ul li').eq(this.activeIndex).click()

            }

        },

        lazy: {

            preloaderClass: 'yxy-lazy-preloader',

        }

    });

    // 鏈€鏂板挩璇ab鍒囨崲

    $('.news .commonTabTages ul li').click(function () {

        $(this).addClass('active').siblings().removeClass('active')

        var index = $(this).index()

        swiper4.slideTo(index)

    })



    // 鐐瑰嚮钂欏眰鏀惰捣

    $('.mc').click(function () {

        pagelistHide()

    })









})

$(function(){

    if($('.classification .content .right').find('h1').length > 0){

        // 餐饮tab的全部h1去

        var h1html = $('.classification .content .right').find('h1')

        var h1htmlnew = h1html.html()

        var h1parent = h1html.parent()

        h1parent.html(h1htmlnew)

    }

})