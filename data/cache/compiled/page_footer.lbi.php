

<div class="footerWrapper">
  <span class="copyright">
  <a href="<?php echo url('category/index');?>&id=18">Rabbit Hole</a> 
  <input id='rabbit_exit' style="display: none;background:none;" type="button" name='exit' value="Exit" onclick="window.location='<?php echo url('category/rabbit_exit');?>';"><br>

 <?php if (( $this->_var['result'] == 1 || $this->_var['go'] == 1 ) && $this->_var['id'] == 18): ?>
  <script>
      document.getElementById("rabbit_exit").style.display='inline';
  </script>
  <?php endif; ?>
    Copyright © 2015&nbsp;
    <a href="index.php" target="_blank">
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
      //var index="http://127.0.0.1/ecshop/mobile";
      var re = new RegExp("mobile");;//最简单的正则表达式,将匹配mobile这个单词  
      var index = window.location.href; 
      var indexlength=index.search(re)+7;
      var current_url = window.location.href;
      var page_menu_href = $(this).attr('href');
      //if(current_url.indexOf(page_menu_href) >= 0) {
      if(current_url.substr(indexlength) == page_menu_href) {
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


<script>

$(document).ready(function() {

  // validate signup form on keyup and submit
  $("#checkForm").validate({
    rules: {
      best_time: {
        required: true,
        minlength: 2
      },
    },
    messages: {
      best_time: {
        required: "*您没有选择配送日期",
      },
    }
  });
});
</script>
