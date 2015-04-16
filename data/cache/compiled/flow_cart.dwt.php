    
    <div class="websiteWrapper">

      
      <div class="pageWrapper homePageWrapper">
        
        <div class="mainMenuOuterWrapper">
          
          <?php echo $this->fetch('library/page_menu.lbi'); ?>
          
          <div class="mainMenuBottomDecoration">
          </div>
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
        
        
        <div class="pageContentWrapper">
            <div class="headerBreak headerBreakTitleBottom"></div>
             
             <h3 class="pageTitle">购物车</h3>
             
            <?php if ($this->_var['goods_list']): ?>
            
            

            <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['goods']):
?>
            <div class="shoppingCartProductWrapper">
              <a href="<?php echo url('goods/index',array('id'=>$this->_var['goods']['goods_id']));?>" class="shoppingCartProductImageWrapper">
                <img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" class="shoppingCartProductImage"
                alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>">
              </a>
              <div class="shoppingCartProductInfoWrapper">
                <a href="<?php echo url('goods/index',array('id'=>$this->_var['goods']['goods_id']));?>" class="shoppingCartProductTitle">
                  <?php echo $this->_var['goods']['goods_name']; ?> 
                </a>
                <div class="shoppingCartProductButtonsWrapper">
                  <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
                    <input type="hidden" id="back_number<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>" />
                    <input type="text" class="shoppingCartProductNumber" name="<?php echo $this->_var['goods']['rec_id']; ?>" id="goods_number<?php echo $this->_var['goods']['rec_id']; ?>" autocomplete="off" value="<?php echo $this->_var['goods']['goods_number']; ?>" onFocus="back_goods_number(<?php echo $this->_var['goods']['rec_id']; ?>)"  onblur="change_goods_number('2',<?php echo $this->_var['goods']['rec_id']; ?>)" />
                    <span class="shoppingCartProductPrice">
                      <?php echo $this->_var['goods']['goods_price']; ?>
                    </span>
                   <?php else: ?>
                      <input type="text" class="txtnum" readonly value="<?php echo $this->_var['goods']['goods_number']; ?>"/>
                    <?php endif; ?> 
                  
                  <a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='<?php echo url('flow/drop_goods',array('id'=>$this->_var['goods']['rec_id']));?>';" class="shoppingCartRemoveProductButton" style="padding: 2px 5px;text-indent: -999999px;"><?php echo $this->_var['lang']['drop']; ?></a>

                </div>
              </div>
            </div>
            
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          
  
            
            <div class="shoppingCartInfoWrapper">
              <span class="shoppingCartProductsNumber">
                购物车<?php echo $this->_var['lang']['total']; ?>:<b id="total_number">&nbsp<?php echo $this->_var['total']['total_number']; ?></b>&nbsp件产品
              </span>
              <span class="shoppingCartProductsTotal">
              <?php echo $this->_var['lang']['goods_price']; ?>: <b class="ect-colory" id="goods_subtotal"><?php echo $this->_var['total']['goods_price']; ?></b>
              </span>
            </div>
            
            <div class="shoppingCartButtonsWrapper">
              <a href="javascript:if (confirm('确定清空购物车？')) location.href='<?php echo url('flow/clear_cart');?>';" class="btn btn-info ect-colorf l-order-sta-btn">
                清空购物车
              </a>
              <a href="<?php echo url('flow/checkout');?>" type="button" class="btn btn-info color-green-fr l-order-sta-btn"><?php echo $this->_var['lang']['check_out']; ?></a>
            </div>
            
            
            <?php else: ?>
            <div class="flow-no-pro"> <img src="__TPL__/images/gwc.png">
              <p class="text-center"><?php echo $this->_var['lang']['empty_shopping']; ?></p>
              <a type="button" href="<?php echo url('category/index');?>" class="btn btn-info ect-btn-info l-color73c ect-bg"><?php echo $this->_var['lang']['go_shopping']; ?></a> </div>
            <?php endif; ?> 
        </div>
        <div class="footerDecoration">
      </div>