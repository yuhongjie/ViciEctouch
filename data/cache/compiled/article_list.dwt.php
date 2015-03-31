<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="con">
  <div class="ect-bg">
    <header class="ect-header ect-margin-tb ect-margin-lr text-center icon-write article"><a class="ect-icon ect-icon-home pull-left" href="index.php"></a><span><?php echo $this->_var['lang']['shophelp']; ?></span><a class="ect-icon ect-icon-cate pull-right" href="<?php echo url('article/index');?>"></a></header>
  </div>
  <div class="article-list">
   <form action="<?php echo url('article/art_list');?>" name="search_form" method="post" class="article_search">
    <div class="input-search"> <span>
        <input autocomplete="off" placeholder="<?php echo $this->_var['lang']['art_no_keywords']; ?>"  name="keywords" id="requirement" class="J_SearchInput inputSear" type="text">
        </span>
         <input name="id" type="hidden" value="<?php echo $this->_var['cat_id']; ?>" />
        <input name="cur_url" id="cur_url" type="hidden" value="" />
        <button type="button" disabled="true" class="input-delete J_InputDelete"> <span></span> </button>
      	<button type="submit" ><i class="glyphicon glyphicon-search"></i></button>
      </div>
      </form>
<div class="article-list-ol">
  <ol id="J_ItemList">
    <li class="single_item"> </li>
    <a href="javascript:;" class="get_more"></a>
  </ol>
</div></div><footer class="logo"><a href="http://www.ectouch.cn" title="ECTouch官网" target="_blank"><img src="__TPL__/images/copyright.png" width="176" height="60"></a></footer>
<?php echo $this->fetch('library/page_footer.lbi'); ?> 
<script type="text/javascript">
get_asynclist("<?php echo url('article/asynclist', array('id'=>$this->_var['id'], 'page'=>$this->_var['page'], 'sort'=>$this->_var['sort'], 'keywords'=>$this->_var['keywords']));?>" , '__TPL__/images/loader.gif');
</script>
</body></html>