<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="websiteWrapper"> 
  
  <div class="pageWrapper portfolioTwoPageWrapper"> 
    
    <div class="mainMenuOuterWrapper"> 
      
      <?php echo $this->fetch('library/page_menu.lbi'); ?>
      
      <div class="mainMenuBottomDecoration"></div>
    </div>
     
    
    
     
    
    
    <div class="headerOuterWrapper">
      <div class="headerWrapper"> 
        <a href="<?php echo url('user/index');?>" class="accountButton"></a>
        <a href="<?php echo url('flow/cart');?>" class="shoppingCartButton"></a>
        <a href="" class="mainMenuButton"></a>
      </div>
      <div class="headerDecoration"></div>
      
       
      <a href="index.php" class="mainLogo"><img src="__TPL__/images/common/mainLogo.png" alt="" /></a> 
       
    </div>
     
    
    
    <div class="portfolioTwoWrapper">
      <div class="headerBreak"></div>

      <div class="selectWrapper">
       <?php echo $this->fetch('library/cat_nav.lbi'); ?> 
      </div>
      <div class="list-title">
        <div class="bread-nav">
        <?php echo $this->fetch('library/category_sort.lbi'); ?> 
          <?php echo $this->fetch('library/ur_here.lbi'); ?> 
        </div>
        <div class="view-mode">
           <a class="list <?php if ($this->_var['display'] == 'list'): ?> active <?php endif; ?>" href="<?php echo url('category/index', array('id'=>$this->_var['id'],'price_min'=>$this->_var['price_min'],'price_max'=>$this->_var['price_max'],'sort'=>$this->_var['sort'],'type'=>$this->_var['type'],'keywords'=>$this->_var['keywords'],'display'=>'list'));?>" > 
            <i class=" icon-th-list"></i>
          </a> 
          <a class="grid <?php if ($this->_var['display'] == 'grid'): ?> active <?php endif; ?>" href="<?php echo url('category/index', array('id'=>$this->_var['id'],'price_min'=>$this->_var['price_min'],'price_max'=>$this->_var['price_max'],'sort'=>$this->_var['sort'],'display'=>'grid'));?>&type=<?php echo $this->_var['type']; ?>&keywords=<?php echo $this->_var['keywords']; ?>">
            <i class=" icon-th-large"></i>
          </a>   
        </div> 
      </div>



      <?php if ($this->_var['id'] != 18): ?>
      
        <?php echo $this->fetch('library/goods_list.lbi'); ?> 
       
      <?php else: ?>

      <?php if ($this->_var['go'] == 1): ?>
       <?php echo $this->fetch('library/goods_list.lbi'); ?> 
      <?php else: ?>
      <form id="pass_form" action="<?php echo url('category/index');?>&id=18" method="post">
        <div class="form-group">
          <label for="exampleInputPassword1">请输入密码：</label>
          <input style="height: 30px; display: inline;" type="password" name="password" class="" id="exampleInputPassword1" placeholder="" required>
          <input type="hidden" value="">
          <input style="height: 30px;display: inline;" type="submit" class="btn btn-default" value="确定">
        </div>
      </form>
      <?php if ($this->_var['result'] == 1): ?>
      <script>
        window.location.reload();
        document.getElementById("pass_form").style.display='none';
      </script>
      <?php echo $this->fetch('library/goods_list.lbi'); ?> 
      <?php else: ?>
        <p style="color: red;"><?php echo $this->_var['pswerr']; ?></p>
      <?php endif; ?>
      <?php endif; ?>
      <?php endif; ?>
    </div>
     
    
    <div class="footerDecoration"></div>
    
    <?php echo $this->fetch('library/page_footer.lbi'); ?> 
     
    
  </div>
   
</div>

<script type="text/javascript">
if( <?php echo $this->_var['show_asynclist']; ?> == 1){
  get_asynclist('<?php echo url('category/asynclist', array('id'=>$this->_var['id'], 'brand'=>$this->_var['brand_id'], 'price_min'=>$this->_var['price_min'], 'price_max'=>$this->_var['price_max'], 'filter_attr'=>$this->_var['filter_attr'], 'page'=>$this->_var['page'], 'sort'=>$this->_var['sort'], 'order'=>$this->_var['order'], 'keywords'=>$this->_var['keywords']));?>' , '__TPL__/images/loader.gif');
 }
</script>
</body>
</html>

