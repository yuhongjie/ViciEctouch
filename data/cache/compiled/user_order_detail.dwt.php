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
      
       
      <a href="index.php" class="mainLogo"><img src="__TPL__/images/common/mainLogo.png" alt="" /></a> 
       
    </div>
     
    
    
    <div class="pageContentWrapper"> 
      
     <div class="headerBreak headerBreakTitleBottom"></div>
      
      <div>
           
        <h3 class="pageTitle">订单信息</h3>
        
  
        <p><?php echo $this->_var['lang']['order_status']; ?>：<span><?php echo $this->_var['order']['order_status']; ?> <?php echo $this->_var['order']['pay_status']; ?> <?php echo $this->_var['order']['shipping_status']; ?></span></p>
        <p><?php echo $this->_var['lang']['order_number']; ?>：<span><?php echo $this->_var['order']['order_sn']; ?></span></p>
        <p><?php echo $this->_var['lang']['order_money']; ?>：<span><?php echo $this->_var['order']['formated_total_fee']; ?></span></p>
        <p><?php echo $this->_var['lang']['order_addtime']; ?>：<span><?php echo $this->_var['order']['formated_add_time']; ?></span></p>
        <?php if ($this->_var['order']['to_buyer']): ?>
        <p> <?php echo $this->_var['lang']['detail_to_buyer']; ?>：<?php echo $this->_var['order']['to_buyer']; ?> </p>
        <?php endif; ?>
        <?php if ($this->_var['virtual_card']): ?>
        <p><?php echo $this->_var['lang']['virtual_card_info']; ?>：<br>
          <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');if (count($_from)):
    foreach ($_from AS $this->_var['vgoods']):
?> 
          <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
        <hr style="border:none;border-top:1px #CCCCCC dashed; margin:5px 0" />
        <?php if ($this->_var['card']['card_sn']): ?><?php echo $this->_var['lang']['card_sn']; ?>:<span style="color:red;"><?php echo $this->_var['card']['card_sn']; ?></span><br>
        <?php endif; ?> 
        <?php if ($this->_var['card']['card_password']): ?><?php echo $this->_var['lang']['card_password']; ?>:<span style="color:red;"><?php echo $this->_var['card']['card_password']; ?></span><br>
        <?php endif; ?> 
        <?php if ($this->_var['card']['end_date']): ?><?php echo $this->_var['lang']['end_date']; ?>:<?php echo $this->_var['card']['end_date']; ?><br>
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </p>
        <?php endif; ?>
        <div class="textBreakBoth"></div>
      </div>
      
       <div>
           
        <h3 class="pageTitle">地址信息</h3>
        
        <p><?php echo $this->_var['lang']['consignee_name']; ?>：<?php echo $this->_var['order']['consignee']; ?></p>
        <p><?php echo $this->_var['lang']['mobile']; ?>：<?php echo $this->_var['order']['mobile']; ?></p>
        <?php if ($this->_var['order']['exist_real_goods']): ?>
        <p><?php echo $this->_var['lang']['detailed_address']; ?>：<?php echo $this->_var['l_detail_address']; ?></p>
        <?php endif; ?> 
      </div>


       <fieldset>
         <div class="headerBreak headerBreakTitleBottom"></div>
         <h3 class="pageTitle">产品信息</h3>
        <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
      
       <div class="checkoutProductWrapper"> <a href="<?php echo url('goods/index', array('id'=>$this->_var['goods']['goods_id']));?>" class="checkoutProductImageWrapper"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" class="checkoutProductImage" alt=""></a>
       <div class="checkoutProductInfoWrapper"> <a href="<?php echo url('goods/index', array('id'=>$this->_var['goods']['goods_id']));?>" class="checkoutProductTitle"><?php echo $this->_var['goods']['goods_name']; ?></a>
         <div class="checkoutProductButtonsWrapper">
           <span> <?php echo $this->_var['lang']['number_to']; ?>：<?php echo $this->_var['goods']['goods_number']; ?>&nbsp&nbsp <?php echo $this->_var['lang']['shop_price']; ?><?php echo $this->_var['goods']['goods_price']; ?></span>
           <div><?php echo $this->_var['lang']['ws_subtotal']; ?>：<span class="ect-colory"><?php echo $this->_var['goods']['subtotal']; ?></span></div>   
        </div>
       </div>
       </div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
         


        
        <div class="checkoutInfoWrapper" style="height:100px;"> <span class="checkoutProductsNumber">商品: <?php echo $this->_var['goods_number']; ?>&nbsp件</span> <span class="checkoutProductsTotal">

        <p class="ect-margin-tb"><?php echo $this->_var['lang']['goods_all_price']; ?>：<b class="ect-colory"> 
          <?php if ($this->_var['order']['extension_code'] == "group_buy"): ?><?php echo $this->_var['lang']['gb_deposit']; ?><?php endif; ?><?php echo $this->_var['order']['formated_goods_amount']; ?></b>
           <?php if ($this->_var['order']['tax'] > 0): ?> 
        + <?php echo $this->_var['lang']['tax']; ?>:<b class="ect-colory"><?php echo $this->_var['order']['formated_tax']; ?></b><br>
        <?php endif; ?> 
        <?php if ($this->_var['order']['shipping_fee'] > 0): ?> 
        + <?php echo $this->_var['lang']['shipping_fee']; ?>:<b class="ect-colory"><?php echo $this->_var['order']['formated_shipping_fee']; ?></b><br>
        <?php endif; ?> 
        <?php if ($this->_var['order']['insure_fee'] > 0): ?> 
        + <?php echo $this->_var['lang']['insure_fee']; ?>:<b class="ect-colory"><?php echo $this->_var['order']['formated_insure_fee']; ?></b><br>
        <?php endif; ?> 
        <?php if ($this->_var['order']['pay_fee'] > 0): ?> 
        + <?php echo $this->_var['lang']['pay_fee']; ?>:<b class="ect-colory"><?php echo $this->_var['order']['formated_pay_fee']; ?></b><br>
        <?php endif; ?> 
        <?php if ($this->_var['order']['pack_fee'] > 0): ?> 
        + <?php echo $this->_var['lang']['pack_fee']; ?>:<b class="ect-colory"><?php echo $this->_var['order']['formated_pack_fee']; ?></b><br>
        <?php endif; ?> 
        <?php if ($this->_var['order']['card_fee'] > 0): ?> 
        + <?php echo $this->_var['lang']['card_fee']; ?>:<b class="ect-colory"><?php echo $this->_var['order']['formated_card_fee']; ?></b>
        <?php endif; ?> 
        </p>
        <p class="ect-margin-tb">
           <?php if ($this->_var['order']['money_paid'] > 0): ?> 
        - <?php echo $this->_var['lang']['order_money_paid']; ?>: <b class="ect-colory"><?php echo $this->_var['order']['formated_money_paid']; ?></b><br>
        <?php endif; ?> 
        <?php if ($this->_var['order']['surplus'] > 0): ?> 
        - <?php echo $this->_var['lang']['use_surplus']; ?>: <b class="ect-colory"><?php echo $this->_var['order']['formated_surplus']; ?></b><br>
        <?php endif; ?> 
        <?php if ($this->_var['order']['integral_money'] > 0): ?> 
        - <?php echo $this->_var['lang']['use_integral']; ?>: <b class="ect-colory"><?php echo $this->_var['order']['formated_integral_money']; ?></b><br>
        <?php endif; ?> 
        <?php if ($this->_var['order']['bonus'] > 0): ?> 
        - <?php echo $this->_var['lang']['use_bonus']; ?>: <b class="ect-colory"><?php echo $this->_var['order']['formated_bonus']; ?></b><br>
        <?php endif; ?> 
        </p>
        <p class="ect-margin-tb"><?php echo $this->_var['lang']['order_amount']; ?>：<b class="ect-colory"><?php echo $this->_var['order']['formated_order_amount']; ?></b><br><?php if ($this->_var['order']['extension_code'] == "group_buy"): ?> 
        <?php echo $this->_var['lang']['notice_gb_order_amount']; ?><?php endif; ?> </p>
          </span> </div>


        
        
        <div class="checkoutButtonsWrapper">
          <!-- <input style="margin-left:10px;padding-left:5px;" type="submit" value="使用支付宝支付"  class="checkoutCheckoutButton"> -->
          <!-- <input type="submit" value="确定"  class="checkoutCheckoutButton"> -->
          <?php if ($this->_var['order']['order_amount'] > 0): ?>
          <?php echo $this->_var['order']['pay_online']; ?>
          <?php endif; ?>
          <?php echo $this->_var['order']['handler']; ?>
        </div>
      </fieldset>
       <div style="margin-top: 15px;">
           
        <h3 class="pageTitle">配送方式和时间</h3>
        
        <?php if ($this->_var['order']['exist_real_goods']): ?>
        <p><?php echo $this->_var['lang']['deliver_goods_time']; ?>：<?php echo $this->_var['order']['best_time']; ?></p>
        <?php endif; ?>
        <?php if ($this->_var['order']['shipping_id'] > 0): ?>
         <p><?php echo $this->_var['lang']['shipping']; ?>：<?php echo $this->_var['order']['shipping_name']; ?></p>
         <?php endif; ?>
        <p><?php echo $this->_var['lang']['payment']; ?>：<?php echo $this->_var['order']['pay_name']; ?></p>
      </div>

      <div class="textBreakBottom"></div>
      <div class="l-bblock">
        <h4><?php echo $this->_var['lang']['order_postscript']; ?> </h4>

            <p><?php echo $this->_var['order']['postscript']; ?></p>

      </div>




         

    </div>
    
    
    <div class="pageNumbersOuterWrapper">
       <?php echo $this->fetch('library/page.lbi'); ?> 
    </div>
    
    
    <div class="footerDecoration"></div>
    
   <?php echo $this->fetch('library/page_footer.lbi'); ?> 
     
    
  </div>
   
</div>

</body>
</html>


