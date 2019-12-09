$(function(){

    $('.header').addClass('active')

    // 移动到最上边
    $('.commonTop').click(function(){
        $(window).scrollTop(0)
    })
    // 右侧按钮指定位置显示
    if($(window).scrollTop() >= 400){
        $('.commonTop').show()
    }else{
        $('.commonTop').hide()
    }
    $(window).scroll(function(){
        if($(this).scrollTop() >= 400){
            $('.commonTop').show()
        }else{
            $('.commonTop').hide()
        }
    })

})