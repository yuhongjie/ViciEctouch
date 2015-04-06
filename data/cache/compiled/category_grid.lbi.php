  <?php if ($this->_var['display'] == 'list'): ?>
    
      <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
      <div class="portfolioOneItemWrapper"> 
        <a href="<?php echo $this->_var['goods']['url']; ?>" class="portfolioOneItemImageWrapper"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt=""></a>
        <div class="portfolioOneItemInfoWrapper">
          <h4 class="portfolioOneItemTitle"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?></a></h4>
          <p>
             <?php echo sub_str($this->_var['goods']['goods_brief'],20); ?>...</p>
             <span class="l-price"><?php echo $this->_var['goods']['shop_price']; ?></span>
        </div>
      </div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <?php else: ?>
  <div class="portfolioTwoItemsWrapper"> 
  <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
   
      <div class="portfolioTwoItemWrapper"> <a href="<?php echo $this->_var['goods']['url']; ?>" class="portfolioTwoItemImageWrapper"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['name']; ?>"></a>
        <div class="portfolioTwoItemInfoWrapper">
          <h4 class="portfolioTwoItemTitle"><?php echo $this->_var['goods']['name']; ?>[<?php echo $this->_var['goods']['shop_price']; ?>]</h4>
        </div>
      </div>
    
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
<?php endif; ?>