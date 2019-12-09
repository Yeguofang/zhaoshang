$(function () {

    // 点击立即咨询弹出框
    // $('.zixun').on('click', function () {
    //     layer.close(layer.index);
    //     window.lyl = layer.open({
    //         type: 1,
    //         title: '立即咨询',
    //         area: '90%',
    //         shadeClose: true,
    //         content: $('.item_zx .cont')
    //     });
    //     return false;
    // });

    // 通话
    $('#btel').on('click', function () {
        layer.open({
            type: 1,
            title: '通话',
            area: '90%',
            shadeClose: true,
            skin: 'webtellayer',
            content: $('#webtelbox')
        });
        return false;
    });

    // 下载资料
    $('#bvzlico').on('click', function (e) {
        e.preventDefault();
        layer.open({
            type: 1,
            area: '94%',
            title: false,
            closeBtn: 0,
            shadeClose: true,
            skin: 'popupsbox',
            content: $('#popups-msg'),
        });
        return false;
    });

    //图片懒加载
    $("img.lazy").lazyload({
        effect: "fadeIn",
        threshold: 200,
        skip_invisible: false
    });

    // 轮播图
    var bannerXm = new Swiper('.item-xmbanner .swiper-container', {
        autoplay: true,
        pagination: {
            el: '.item-xmbanner .swiper-pagination',
        },
        lazy: {
            loadPrevNext: true,
        },
    });
    setTimeout(function () {
        bannerXm.update()
    }, 200)

    // 我已经阅读条款点击
    $(".item_zx .cont .agree").click(function () {
        if ($(this).hasClass("on")) {
            $(this).removeClass("on");
        } else {
            $(this).addClass("on");
        }
    })

    // banner图高度动态计算
    function setSize() {
        var htmlW = $(window).width();
        var htmlH = $(window).height();
        $('.item-xmbanner').height($(".item-xmbanner").width() * 0.533);
    }
    setSize();
    $(window).bind("resize", function () {
        setSize();
    })

    // 把标题一点点奶茶转换为h1标签
    $(function () {
        var em = $('.itme_xminfo .tit_info .tit em').text()
        $('.itme_xminfo .tit_info .tit em').remove()
        var text = $('.itme_xminfo .tit_info .tit').text()
        $('.itme_xminfo .tit_info h1').remove()
        $('.itme_xminfo .tit_info').prepend('<div class="tit"><h1 style="font-size:15px;display:inline-block;">' + text + '</h1><em>' + em + '</em></div>')
    })

    // 二级导航定位
    setTimeout(function () {
        var navlistTopl = $('.itme_xminfo').offset().top + $('.itme_xminfo').height()
        $(window).scroll(function () {
            var scrollTop = $(this).scrollTop()
            if (scrollTop > navlistTopl) {
                $('.item_jminfo .tabs-cont').css('margin-top', $('.item_jminfo .tabs-tit').outerHeight(true))
                $('.item_jminfo .tabs-tit').addClass('active')
            } else {
                $('.item_jminfo .tabs-tit').removeClass('active')
                $('.item_jminfo .tabs-cont').css('margin-top', 0)
            }
        })
    }, 20)

})