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
      
      
      <h3 class="pageTitle">我的订单</h3>
      
		
		<form id="checkoutForm" class="checkoutForm" action="#" method="post">
		  <fieldset>
		    
		        <!-- <div id="J_ItemList" class="checkoutProductWrapper" style="border-bottom:none;">
		           <div class="single_item"></div>
		           <a href="javascript:;" style="text-align:center" class="get_more"></a>
		        </div> -->

            <div class="ect-pro-list user-order l-user-order" style="border-bottom:none;">
                <ul id="J_ItemList">
                   <li class="single_item"></li>
                   <a href="javascript:;" style="text-align:center" class="get_more"></a>
                </ul>
            </div>
            </div>
		    
		  </fieldset>
		</form>

    </div>
    
    
    <div class="pageNumbersOuterWrapper">
       <?php echo $this->fetch('library/page.lbi'); ?> 
    </div>
    
    
    <div class="footerDecoration"></div>
    
   <?php echo $this->fetch('library/page_footer.lbi'); ?> 
     
    
  </div>
   
</div>

<script type="text/javascript">
<?php $_from = $this->_var['lang']['merge_order_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
get_asynclist('index.php?m=default&c=user&a=async_order_list&pay=<?php echo $this->_var['pay']; ?>' , '__TPL__/images/loader.gif');
</script> 
</body>
</html>


