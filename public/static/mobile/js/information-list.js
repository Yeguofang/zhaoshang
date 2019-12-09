$(function () {
    var id = 0;
    // 更多点击事件
    $('.news .swiper-container .swiper-wrapper .swiper-slide .more-btn .down').click(function () {
        var url = $('#url').val();
        var data = '';
        id+=1;
        $.ajax({
            type: "GET",
            url: "/cate/listmore",
            data: {url:url,page:id},
            dataType: "json",
        }).then(function(msg){
                data = msg.data;
                if(data.length<1){
                    $(".news .swiper-container .swiper-wrapper .swiper-slide .more-btn .down span").html("没有更多内容了");
                }
            for (var i = 0; i < data.length; i++) {
                AddListFun(data[i])
                    $("img.lazy").lazyload({
                    skip_invisible: false,
                    effect: "fadeIn",
                    failure_limit: 999
                });
            }
        })
    })

    // 添加dom函数, data为一个数组数据
    function AddListFun(data) {
        var result = "\n<li>\n<div class=\"nofollowImg\" href=\"".concat(data.href, "\">\n    <div class=\"left\">\n        <a href=\"").concat(data.href, "\">\n            <div class=\"title\">").concat(data.post_title, "</div>\n            <div class=\"desc\">").concat(data.post_excerpt, "</div>\n            <div class=\"date\">\n                <img src=\"").concat(data.timerImg, "\">\n                <span>").concat(data.timer, "</span>\n            </div>\n        </a>\n    </div>\n    <div class=\"img\">\n        <a href=\"").concat(data.href, "\" rel=\"nofollow\">\n            <img class=\"swiper-lazy lazy\"\n                data-original=\"").concat(data.img, "\"\n                src=\"").concat(data.defaultImg, "\"\n                alt=\"").concat(data.post_title, "\" style=\"\">\n        </a>\n    </div>\n</div>\n</li>\n");
        // var result = "<li>\n        <a href=\"".concat(data.href, "\">\n            <div class=\"left\">\n                <div class=\"title\">").concat(data.post_title, "</div>\n                <div class=\"desc\">\n                    ").concat(data.post_excerpt, "\n                </div>\n                <div class=\"date\">\n                    <img src=\"").concat(data.timerImg, "\" alt=\"\">\n                    <span>").concat(data.timer, "</span>\n                </div>\n            </div>\n            <div class=\"img\">\n                <img class=\"swiper-lazy lazy\" data-original=\"").concat(data.img, "\" src=\"").concat(data.defaultImg, "\" alt=\"\u8001\u4EAB\u5403\u4FBF\u5F53\u52A0\u76DF\u6D41\u7A0B\uFF0C\u8F7B\u677E\u51E0\u6B65\u5FEB\u901F\u5F00\u5E97\">\n            </div>\n        </a>\n    </li>");
        $('.news .swiper-container .swiper-wrapper .swiper-slide ul').append(result);
    }

//     let result = `
// <li>
// <div class="nofollowImg" href="${data.href}">
//     <div class="left">
//         <a href="${data.href}">
//             <div class="title">${data.post_title}</div>
//             <div class="desc">${data.post_excerpt}</div>
//             <div class="date">
//                 <img src="${data.timerImg}">
//                 <span>${data.timer}</span>
//             </div>
//         </a>
//     </div>
//     <div class="img">
//         <a href="${data.href}" rel="nofollow">
//             <img class="swiper-lazy lazy"
//                 data-original="${data.img}"
//                 src="${data.defaultImg}"
//                 alt="${data.post_title}" style="">
//         </a>
//     </div>
// </div>
// </li>
// `

})


$(function () {
    // 懒加载
    $("img.lazy").lazyload({
        skip_invisible: false,
        effect: "fadeIn",
        failure_limit: 999
    });
})