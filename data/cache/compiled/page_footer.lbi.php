

<div class="footerWrapper">
  <span class="copyright">
    Copyright © 2015&nbsp;
    <a href="#" target="_blank">
      微茜糕点
    </a>
    &nbsp;All rights reserved.
  </span>
</div>

<a id="scrollUp" href="#top" style="position: fixed; z-index: 10;"><i class="fa fa-angle-up"></i></a>
<style>
#scrollUp {
	border-radius:100%;
	background-color: #777;
	color: #eee;
	font-size: 40px;
	line-height: 1;text-align: center;text-decoration: none;bottom: 1em;right: 10px;overflow: hidden;width: 46px;
	height: 46px;
	border: none;
	opacity: 0.6;
}
</style>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js" ></script> 
<script type="text/javascript" src="__PUBLIC__/js/jquery.json.js" ></script> 
<script type="text/javascript" src="__PUBLIC__/js/common.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/jquery.more.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/utils.js" ></script> 
<script src="__TPL__/js/TouchSlide.1.1.js"></script> 
<script src="__TPL__/js/ectouch.js"></script> 
<script src="__TPL__/js/simple-inheritance.min.js"></script> 
<script src="__TPL__/js/code-photoswipe-1.0.11.min.js"></script> 
<script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script> 
<script src="__TPL__/js/jquery.scrollUp.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/validform.js" ></script> 
<script type="text/javascript" src="__PUBLIC__/js/jquery.validate.min.js">
</script>
<script type="text/javascript" src="__TPL__/js/effects.jquery-ui.min.js">
</script>
<script type="text/javascript" src="__TPL__/js/jquery.nivo-slider.min.js">
</script>
<script type="text/javascript" src="__TPL__/js/jquery.colorbox.min.js">
</script>
<script type="text/javascript" src="__TPL__/js/custom.js">
</script>
<script type="text/javascript" src="__TPL__/js/menu_min.js">
</script>
<script type="text/javascript" src="__TPL__/js/WdatePicker.js"></script>




<script type="text/javascript">
  $(document).ready(function() {
    $(".menu ul li").menu();

    /* 添加当前页面menu高亮效果 2015-3-31 start */
	$('a.page_menu').each(function(){
      //alert(window.location.href);
      var current_url = window.location.href;
      var page_menu_href = $(this).attr('href');

      if(current_url.indexOf(page_menu_href) >= 0) {
      	$('a.page_menu').parent().removeClass("currentPage");
      	$(this).parent().addClass("currentPage");
      }
	})
	/* 添加当前页面menu高亮效果 2015-3-31 end */

  });
</script>


<script language="javascript">
	/*banner滚动图片*/
		TouchSlide({
			slideCell : "#focus",
			titCell : ".hd ul", // 开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
			mainCell : ".bd ul",
			effect : "left",
			autoPlay : true, // 自动播放
			autoPage : true, // 自动分页
			delayTime: 200, // 毫秒；切换效果持续时间（执行一次效果用多少毫秒）
			interTime: 2500, // 毫秒；自动运行间隔（隔多少毫秒后执行下一个效果）
			switchLoad : "_src" // 切换加载，真实图片路径为"_src"
		});
	/*弹出评论层并隐藏其他层*/
	function openSearch(){
		if($(".con").is(":visible")){
			$(".con").hide();	
			$(".search").show();
		}
	}
	function closeSearch(){
		if($(".con").is(":hidden")){
			$(".con").show();	
			$(".search").hide();
		}
	}

</script> 
