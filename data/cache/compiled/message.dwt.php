<?php echo $this->fetch('library/page_header.lbi'); ?>
    
    <div class="websiteWrapper">
      
      <div class="pageWrapper">
        
        <div class="mainMenuOuterWrapper">
          
          <?php echo $this->fetch('library/page_menu.lbi'); ?>
          
          <div class="mainMenuBottomDecoration">
          </div>
        </div>
        
        
       <div id="shoppingCartWrapper" class="shoppingCartWrapper">
        <?php echo $this->fetch('library/flow_cart2.lbi'); ?>
       </div>
         
        
        <div class="headerOuterWrapper">
          <div class="headerWrapper">
            <a href="<?php echo url('user/index');?>" class="accountButton">
            </a>
            <a href="<?php echo url('flow/cart');?>" class="shoppingCartButton">
            </a>
            <a href="" class="mainMenuButton">
            </a>
          </div>
          <div class="headerDecoration">
          </div>
          
          <a href="" class="mainLogo">
            <img src="__TPL__/images/common/mainLogo.png" alt="" />
          </a>
          
        </div>
        
        
        <div class="pageContentWrapper">
          
          <h3 class="infopageTitle">
            <?php echo $this->_var['message']['content']; ?>
          </h3>
          
          <?php if ($this->_var['message']['url_info']): ?>
           <div class="user-account-success" style="float:right;">
           <?php $_from = $this->_var['message']['url_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('info', 'url');if (count($_from)):
    foreach ($_from AS $this->_var['info'] => $this->_var['url']):
?>
              <a href="<?php echo $this->_var['url']; ?>" class="shoppingCartEmptyButton" style="width:100px;">
                <?php echo $this->_var['info']; ?>
              </a>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
          <?php endif; ?>
        </div>  
        
        <div class="footerDecoration">
        </div>
         
        <?php echo $this->fetch('library/page_footer.lbi'); ?> 
         
      </div>
      
    </div>
    
  </body>

</html>