
<!-- <ul class="mainMenuWrapper">
    <li class="ect-box-flex"><a href="<?php echo url('index/index');?>"><?php echo $this->_var['lang']['home']; ?></a></li>
    <li class="ect-box-flex"><a href="<?php echo url('index.php?m=default&c=category&a=index&id=13');?>">系列</a></li>
    <li class="ect-box-flex"><a href="<?php echo url('category/index', array('id'=>'2'));?>">用途</a></li>
    <li class="ect-box-flex"><a href="<?php echo url('index.php?m=default&c=article&a=info&aid=14');?>">食材</a></li>
    <li class="ect-box-flex"><a href="<?php echo url('index.php?m=default&c=article&a=article_list_cont&id=19');?>">FAQ</a></li>
    <li class="ect-box-flex"><a href="<?php echo url('index.php?m=default&c=article&a=info&aid=15');?>">配送说明</a></li>
    <li class="ect-box-flex"><a href="<?php echo url('index.php?m=default&c=article&a=info&aid=13');?>">关于我们</a></li>
    <li class="ect-box-flex"><a href="<?php echo url('index.php?m=default&c=article&a=info&aid=12');?>">联系我们</a></li>
    <li class="ect-box-flex"><a href="javascript:openSearch();"><i class="ect-icon ect-icon-search"></i><?php echo $this->_var['lang']['search']; ?></a></li>
</ul> -->


<ul class="mainMenuWrapper">
  <li class="">
    <a class="page_menu" href="index.php">
      首页
    </a>
  </li>
  <?php $_from = $this->_var['navigator']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'nav');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['nav']):
?>
  
  <li class="">
    <a class="page_menu" href="<?php echo $this->_var['nav']['url']; ?>">
      <?php echo $this->_var['nav']['name']; ?>
    </a>
  </li>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>

