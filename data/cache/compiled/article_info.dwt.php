<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="websiteWrapper"> 
  
  <div class="pageWrapper blogPageWrapper"> 
    
    <div class="mainMenuOuterWrapper"> 
      
      <?php echo $this->fetch('library/page_menu.lbi'); ?>
      
      <div class="mainMenuBottomDecoration"></div>
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
      <div class="headerDecoration"></div>
      
       
      <a href="index.php" class="mainLogo"><img src="__TPL__/images/common/mainLogo.png" alt="" /></a> 
       
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
      
      </div>
       
    </div>
     
    
    

    
    
    <div class="footerDecoration"></div>
    
   <?php echo $this->fetch('library/page_footer.lbi'); ?> 
     
    
  </div>
   
</div>

</body>
</html>

