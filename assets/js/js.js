

//列表ajax加载
jQuery(document).ready(function($) {
$('div.post-read-more a').click( function() {
    $this = $(this);
    $this.addClass('loading');
    var href = $this.attr("href");
    if (href != undefined) {
        $.ajax( {
            url: href,
            type: "get",
        error: function(request) {
        },
        success: function(data) {
            $this.removeClass('loading');
            var $res = $(data).find(".post_loop");
            $('.post_box').append($res);
            var newhref = $(data).find(".post-read-more a").attr("href");
            if( newhref != undefined ){
                $(".post-read-more a").attr("href",newhref);
            }else{
                $(".post-read-more").hide();
            }
        }
        });
    }
    return false;
});
});



//返回顶部
const scrollToTopBtn = document.querySelector(".scrollToTopBtn")
const rootElement = document.documentElement
function handleScroll() {
  const scrollTotal = rootElement.scrollHeight - rootElement.clientHeight
  if ((rootElement.scrollTop / scrollTotal ) > 0.20 ) {
    scrollToTopBtn.classList.add("showBtn")
  } else {
    scrollToTopBtn.classList.remove("showBtn")
  }
}
function scrollToTop() {
  rootElement.scrollTo({
    top: 0,
    behavior: "smooth"
  })
}
scrollToTopBtn.addEventListener("click", scrollToTop)
document.addEventListener("scroll", handleScroll)

