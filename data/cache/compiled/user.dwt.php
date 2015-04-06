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
          <div class="textBreakBottom">
          </div>
          <h3 class="blockTitle">
            个人中心
          </h3>
          
          <div class="quoteWrapper" style="margin-bottom:0px;">
            <a href="" class="quoteAvatar">
              <img src="__TPL__/images/common/commentAvatarBg.png" alt="">
            </a>
            <blockquote style="font-size:12px;">
              <cite class="user-name">
               <?php echo $this->_var['info']['username']; ?> 
              </cite>
              <a class="user-account-edit" href="<?php echo url('user/profile');?>">编辑</a>
              <a class="user-account-edit" href="<?php echo url('user/logout');?>"><?php echo $this->_var['lang']['label_logout']; ?></a>
            </blockquote>
            <div class="user-center-menu">
              <ul>
                <li>
                  <a href="<?php echo url('user/order_list');?>">我的订单</a>
                </li>
                <li>
                  <a href="<?php echo url('collection_list');?>"><?php echo $this->_var['lang']['label_collection']; ?></a>
                </li>
                <li>
                  <a href="<?php echo url('user/address_list');?>"><?php echo $this->_var['lang']['label_address']; ?></a>
                </li>
              </ul>
            </div>
          </div>
          
          <div class="textBreakBoth">
          </div>
           
          <h3 class="user-pageTitle">
            最近订单
          </h3>
          
          
          <form id="checkoutForm" class="checkoutForm" action="#" method="post">
            <fieldset>
              

            <?php if ($this->_var['orders']): ?>
            <div class="ect-pro-list user-order l-user-order" style="border-bottom:none;">
              <ul id="J_ItemList">
              <?php $_from = $this->_var['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');$this->_foreach['neworder'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['neworder']['total'] > 0):
    foreach ($_from AS $this->_var['val']):
        $this->_foreach['neworder']['iteration']++;
?>
              
              <?php if ($this->_foreach['neworder']['iteration'] < 4): ?>
              <li class="single_item">
               <a href="<?php echo url('user/order_detail', array('order_id'=>$this->_var['val']['order_id']));?>"><img src="<?php echo $this->_var['val']['img']; ?>" class="pull-left" />
               <dl>
                 <dt>
                   <h4 class="title"><?php echo $this->_var['lang']['order_number']; ?>：<?php echo $this->_var['val']['order_sn']; ?></h4>
                 </dt>
                 <dd><?php echo $this->_var['lang']['order_status']; ?>：<?php echo $this->_var['val']['order_status']; ?></dd>
                 <dd><?php echo $this->_var['lang']['order_total_fee']; ?>：<span class="ect-color l-ectcolor"><?php echo $this->_var['val']['total_fee']; ?></span></dd>
                 <dd><?php echo $this->_var['lang']['order_addtime']; ?>：<?php echo $this->_var['val']['order_time']; ?></dd>
               </dl>
               <i class="pull-right fa fa-angle-right"></i> </a> 
               </li>
                <?php endif; ?>
               
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </ul>
            </div>
            <?php else: ?>
               <p class="text-center ect-margin-tb ect-padding-tb"><?php echo $this->_var['lang']['no_data']; ?></p>
            <?php endif; ?> 

              
            </fieldset>
          </form>
          
      
        </div>
        
        <div class="footerDecoration">
        </div>
        
        <?php echo $this->fetch('library/page_footer.lbi'); ?> 
        
      </div>
      
    </div>
    
  </body>

</html>