<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="websiteWrapper"> 
  
  <div class="pageWrapper blogPageWrapper"> 
    
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
      
       
      <a href="" class="mainLogo"><img src="__TPL__/images/common/mainLogo.png" alt="" /></a> 
       
    </div>
     
    
    
    <div class="pageContentWrapper"> 
      
     <div class="headerBreak headerBreakTitleBottom"></div>
      
      
      <h3 class="pageTitle">我的收藏</h3>
      
        

          <?php if ($this->_var['collection_list']): ?>

          <?php $_from = $this->_var['collection_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
          
          <div class="checkoutProductWrapper"> <a href="<?php echo url('goods/index', array('id'=>$this->_var[val]['goods_id']));?>" class="checkoutProductImageWrapper"><img src="<?php echo $this->_var['val']['goods_thumb']; ?>" class="checkoutProductImage" alt="<?php echo $this->_var['val']['goods_name']; ?>"></a>
            <div class="checkoutProductInfoWrapper"> <a href="<?php echo url('goods/index', array('id'=>$this->_var[val]['goods_id']));?>" class="checkoutProductTitle"><?php echo $this->_var['val']['goods_name']; ?></a>
              <div class="checkoutProductButtonsWrapper">
                <span><?php echo $this->_var['val']['shop_price']; ?></span>
                <a href="javascript:if(confirm('<?php echo $this->_var['lang']['remove_collection_confirm']; ?>')) location.href='<?php echo url('delete_collection', array('rec_id'=>$this->_var['val']['rec_id']));?>'"  class="storeRemoveProductButton"><?php echo $this->_var['lang']['drop']; ?></a> 
                <a href="javascript:addToCart(<?php echo $this->_var['val']['goods_id']; ?>)" style="margin-right:10px;" class="storeRemoveProductButton"><?php echo $this->_var['lang']['add_to_cart']; ?></a> 
              </div>
            </div>
          </div>
           
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          <?php else: ?>
             <p class="text-center ect-margin-tb ect-padding-tb"><?php echo $this->_var['lang']['no_data']; ?></p>
          <?php endif; ?> 
        
    </div>
    
    
    <div class="pageNumbersOuterWrapper">
       <?php echo $this->fetch('library/page.lbi'); ?> 
    </div>
    
    
    <div class="footerDecoration"></div>
    
   <?php echo $this->fetch('library/page_footer.lbi'); ?> 
     
    
  </div>
   
</div>

<script type="text/javascript">
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</body>
</html>

