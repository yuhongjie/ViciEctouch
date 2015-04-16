<div class="homeProductsWrapper">
  <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['recommend_products'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['recommend_products']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['recommend_products']['iteration']++;
?>
    <?php if ($this->_foreach['recommend_products']['iteration'] < 5): ?>
    <div class="homeProductWrapper">
        <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"></a>
      <div class="homeProductInfoWrapper">
        <span class="homeProductTitle">
          <?php echo $this->_var['goods']['short_style_name']; ?>
        </span>
        <a href="<?php echo $this->_var['goods']['url']; ?>" class="homePurchaseButton">
          <?php if ($this->_var['goods']['promote_price'] != ""): ?>

         <?php echo $this->_var['goods']['promote_price']; ?>

         <?php else: ?>

         <?php echo $this->_var['goods']['shop_price']; ?>

         <?php endif; ?>购买
        </a>
      </div>
    </div>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>

