"use strict";


$(function(){
  // 初始化
  $('.classification .content .contentTab .swiper-container .swiper-slide.active').click()
})


$(function () {
  var id = 0;
  $('.projectPage .contentList .more-btn').click(function () {
    // 全部分类
    var classification = $('.classification .content .right ul li.active a').attr('attr');
    if(classification == undefined){
      var classification = $('.contentTab').find('.swiper-wrapper').find('.swiper-slide.active').find('div').attr('attr');

    }
      var xiangmu = $('#xiangmu').val();
      if(xiangmu == 'xiangmu'){
        classification = '';
      }
    // 投资金额
    var investment = $('.investment ul li a.active').html()
    // 地区
    var map = $('.region ul li a.active').html()
    var url = $('#url').val();
    id+=1;
    $.ajax({
      type: "POST",
      url: "/cate/listajax/",
      data: {id:classification,num:investment,address:map,url:url,page:id},
      dataType: "json",
      success: function (msg) {
        if(msg.html){

          $('.asd').append(msg.html);
          $("img.lazy").lazyload({
            effect: "fadeIn",
            container:$('.projectPage .contentList ul'),
            threshold: 200,
            skip_invisible: false
          });
        }else{
          $(".projectPage .contentList .more-btn .down span").html("没有更多内容了");
        }

      }
    });

    // 点击完后添加dom
    // addListDom(data);
  });


});