

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
          <section class="ect-bg-colorf ect-padding-lr flow-done">
              <i class="glyphicon glyphicon-ok"></i>
                <p class="ect-margin-tb"><?php echo $this->_var['lang']['remember_order_number']; ?>：<b class="ect-color"><?php echo $this->_var['order']['order_sn']; ?></b></p>
                <p class="ect-margin-tb"><?php if ($this->_var['order']['shipping_name']): ?><?php echo $this->_var['lang']['select_shipping']; ?>:<b><?php echo $this->_var['order']['shipping_name']; ?></b><?php endif; ?></p>
                <p class="ect-margin-tb"><?php echo $this->_var['lang']['order_amount']; ?>: <b><?php echo $this->_var['total']['amount_formated']; ?></b></p>
                <p class="ect-margin-tb"><?php echo $this->_var['lang']['select_payment']; ?>: <b><?php echo $this->_var['order']['pay_name']; ?></b></p>
                <p class="ect-margin-tb" style="padding: 10px;"><?php echo $this->_var['pay_desc']; ?></p>
                <?php if ($this->_var['virtual_card']): ?>
                <div class="alert alert-warning" role="alert" style="height: 100px;">
              <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');if (count($_from)):
    foreach ($_from AS $this->_var['vgoods']):
?>
                    <h3 style="color:#2359B1; font-size:15px;"><?php echo $this->_var['vgoods']['goods_name']; ?></h3>
                    <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
                    <ul style="list-style:none;padding:0;margin:0;clear:both">
                      <?php if ($this->_var['card']['card_sn']): ?>
                      <li> <strong><?php echo $this->_var['lang']['card_sn']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_sn']; ?></span> </li>
                      <?php endif; ?> 
                      <?php if ($this->_var['card']['card_password']): ?>
                      <li> <strong><?php echo $this->_var['lang']['card_password']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_password']; ?></span> </li>
                      <?php endif; ?> 
                      <?php if ($this->_var['card']['end_date']): ?>
                      <li> <strong><?php echo $this->_var['lang']['end_date']; ?>:</strong><?php echo $this->_var['card']['end_date']; ?> </li>
                      <?php endif; ?>
                    </ul>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            </div>
                <?php endif; ?>
               <p class="ect-margin-tb text-center"><?php echo $this->_var['pay_online']; ?></p>
               <p class="ect-margin-tb "><?php echo $this->_var['order_submit_back']; ?></p>
          </section>
    </div>
    <div class="footerDecoration">
  </div>