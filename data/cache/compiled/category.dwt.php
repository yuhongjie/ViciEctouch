<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="websiteWrapper"> 
  
  <div class="pageWrapper portfolioTwoPageWrapper"> 
    
    <div class="mainMenuOuterWrapper"> 
      
      <?php echo $this->fetch('library/page_menu.lbi'); ?>
      
      <div class="mainMenuBottomDecoration"></div>
    </div>
     
    
    
    <form id="shoppingCartWrapper" class="shoppingCartWrapper" action="#" method="post">
      <fieldset>
        
        <div class="shoppingCartProductWrapper"> <a  href="" class="shoppingCartProductImageWrapper"><img src="__TPL__/images/content/shoppingCartProductImage-1.jpg" class="shoppingCartProductImage" alt=""></a>
          <div class="shoppingCartProductInfoWrapper"> <a href="" class="shoppingCartProductTitle">Product One</a>
            <div class="shoppingCartProductButtonsWrapper">
              <input type="text" id="shoppingCartProductNumber-1" class="shoppingCartProductNumber" name="product-1" value="1">
              <span class="shoppingCartProductPrice">$25</span><a href="" class="shoppingCartRemoveProductButton"></a> </div>
          </div>
        </div>
         
        
        
        <div class="shoppingCartProductWrapper"> <a href="" class="shoppingCartProductImageWrapper"><img src="__TPL__/images/content/shoppingCartProductImage-2.jpg" class="shoppingCartProductImage" alt=""></a>
          <div class="shoppingCartProductInfoWrapper"> <a href="" class="shoppingCartProductTitle">Product Two</a>
            <div class="shoppingCartProductButtonsWrapper">
              <input type="text" id="shoppingCartProductNumber-2" class="shoppingCartProductNumber" name="product-2" value="2">
              <span class="shoppingCartProductPrice">$50</span><a href="" class="shoppingCartRemoveProductButton"></a> </div>
          </div>
        </div>
         
        
        
        <div class="shoppingCartProductWrapper"> <a  href="" class="shoppingCartProductImageWrapper"><img src="__TPL__/images/content/shoppingCartProductImage-3.jpg" class="shoppingCartProductImage" alt=""></a>
          <div class="shoppingCartProductInfoWrapper"> <a href="" class="shoppingCartProductTitle">Product Three</a>
            <div class="shoppingCartProductButtonsWrapper">
              <input type="text" id="shoppingCartProductNumber-3" class="shoppingCartProductNumber" name="product-3" value="1">
              <span class="shoppingCartProductPrice">$110</span><a href="" class="shoppingCartRemoveProductButton"></a> </div>
          </div>
        </div>
         
        
        
        <div class="shoppingCartInfoWrapper"> <span class="shoppingCartProductsNumber">Products: 3</span> <span class="shoppingCartProductsTotal">Total: $235</span> </div>
        
        
        <div class="shoppingCartButtonsWrapper"><a href="" class="shoppingCartEmptyButton">Empty</a>
          <input type="submit" value="Checkout" id="shoppingCartCheckoutButton" class="shoppingCartCheckoutButton">
        </div>
      </fieldset>
    </form>
     
    
    
    <div class="headerOuterWrapper">
      <div class="headerWrapper"> 
        <a href="<?php echo url('user/index');?>" class="accountButton"></a>
        <a href="<?php echo url('flow/cart');?>" class="shoppingCartButton"></a>
        <a href="" class="mainMenuButton"></a>
      </div>
      <div class="headerDecoration"></div>
      
       
      <a href="" class="mainLogo"><img src="__TPL__/images/common/mainLogo.png" alt="" /></a> 
       
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
           <a class="list <?php if ($this->_var['display'] == 'list'): ?> active <?php endif; ?>" href="<?php echo url('category/index', array('id'=>$this->_var['id'],'display'=>'list'));?>&type=<?php echo $this->_var['type']; ?>" > 
            <i class=" icon-th-list"></i>
          </a> 
          <a class="grid <?php if ($this->_var['display'] == 'grid'): ?> active <?php endif; ?>" href="<?php echo url('category/index', array('id'=>$this->_var['id'],'display'=>'grid'));?>&type=<?php echo $this->_var['type']; ?>">
            <i class=" icon-th-large"></i>
          </a>   
        </div> 
      </div>

      
        <em><?php echo $this->_var['career']; ?></em>
      
       
      
        <?php echo $this->fetch('library/goods_list.lbi'); ?> 
       
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

