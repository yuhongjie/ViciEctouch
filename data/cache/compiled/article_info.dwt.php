<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="websiteWrapper"> 
  
  <div class="pageWrapper blogPageWrapper"> 
    
    <div class="mainMenuOuterWrapper"> 
      
      <?php echo $this->fetch('library/page_menu.lbi'); ?>
      
      <div class="mainMenuBottomDecoration"></div>
    </div>
     
    
   
   <form id="shoppingCartWrapper" class="shoppingCartWrapper" action="#" method="post">
     <fieldset>
       
       <div class="shoppingCartProductWrapper"> <a  href="singleProduct.html" class="shoppingCartProductImageWrapper"><img src="__TPL__/images/content/shoppingCartProductImage-1.jpg" class="shoppingCartProductImage" alt=""></a>
         <div class="shoppingCartProductInfoWrapper"> <a href="singleProduct.html" class="shoppingCartProductTitle">微茜甜点</a>
           <div class="shoppingCartProductButtonsWrapper">
             <input type="text" id="shoppingCartProductNumber-1" class="shoppingCartProductNumber" name="product-1" value="1">
             <span class="shoppingCartProductPrice">￥25</span><a href="" class="shoppingCartRemoveProductButton"></a> </div>
         </div>
       </div>
        
       
       
       <div class="shoppingCartProductWrapper"> <a href="singleProduct.html" class="shoppingCartProductImageWrapper"><img src="__TPL__/images/content/shoppingCartProductImage-2.jpg" class="shoppingCartProductImage" alt=""></a>
         <div class="shoppingCartProductInfoWrapper"> <a href="singleProduct.html" class="shoppingCartProductTitle">微茜甜点</a>
           <div class="shoppingCartProductButtonsWrapper">
             <input type="text" id="shoppingCartProductNumber-2" class="shoppingCartProductNumber" name="product-2" value="2">
             <span class="shoppingCartProductPrice">￥50</span><a href="" class="shoppingCartRemoveProductButton"></a> </div>
         </div>
       </div>
        
       
       
       <div class="shoppingCartProductWrapper"> <a  href="singleProduct.html" class="shoppingCartProductImageWrapper"><img src="__TPL__/images/content/shoppingCartProductImage-3.jpg" class="shoppingCartProductImage" alt=""></a>
         <div class="shoppingCartProductInfoWrapper"> <a href="singleProduct.html" class="shoppingCartProductTitle">微茜甜点III</a>
           <div class="shoppingCartProductButtonsWrapper">
             <input type="text" id="shoppingCartProductNumber-3" class="shoppingCartProductNumber" name="product-3" value="1">
             <span class="shoppingCartProductPrice">￥110</span><a href="" class="shoppingCartRemoveProductButton"></a> </div>
         </div>
       </div>
        
       
       
       <div class="shoppingCartInfoWrapper"> <span class="shoppingCartProductsNumber">购物车:3件产品</span> <span class="shoppingCartProductsTotal">总共: ￥185</span> </div>
       
       
       <div class="shoppingCartButtonsWrapper"><a href="" class="shoppingCartEmptyButton">清空购物车</a>
         <a href="" class="shoppingCartEmptyButton">更新购物车</a>
         <input type="button" value="去付款" onclick="javascript:window.location.href='checkout.html' "  class="shoppingCartCheckoutButton">
       </div>
     </fieldset>
   </form>
    
    
    
    <div class="headerOuterWrapper">
      <div class="headerWrapper"> <a href="login.html" class="accountButton"></a><a href="" class="shoppingCartButton"></a><a href="" class="mainMenuButton"></a></div>
      <div class="headerDecoration"></div>
      
       
      <a href="" class="mainLogo"><img src="__TPL__/images/common/mainLogo.png" alt="" /></a> 
       
    </div>
     
    
    
    <div class="blogPostsWrapper">
      <div class="blogTitleWrapper">
        <div class="headerBreak headerBreakTitleBottom"></div>
        
        
        <h3 class="pageTitle"><?php echo $this->_var['article']['title']; ?></h3>
         
      </div>
      
      
      <div class="smallPostWrapper"> 
        <div class="postExcerptWrapper">
         <?php echo $this->_var['article']['content']; ?>
        </div>
        <div class="smallPostInfoWrapper"></div>
      </div>
       
    </div>
     
    
    

    
    
    <div class="footerDecoration"></div>
    
   <?php echo $this->fetch('library/page_footer.lbi'); ?> 
     
    
  </div>
   
</div>

</body>
</html>

