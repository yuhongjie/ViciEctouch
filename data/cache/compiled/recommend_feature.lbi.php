<div class="homeProductsWrapper">
  <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_40349500_1429170122');$this->_foreach['recommend_feature'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['recommend_feature']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_40349500_1429170122']):
        $this->_foreach['recommend_feature']['iteration']++;
?>
    <?php if ($this->_foreach['recommend_feature']['iteration'] < 5): ?>
    <div class="homeProductWrapper">
        <a href="<?php echo $this->_var['goods_0_40349500_1429170122']['url']; ?>"><img src="<?php echo $this->_var['goods_0_40349500_1429170122']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_40349500_1429170122']['name']); ?>"></a>
      <div class="homeProductInfoWrapper">
        <span class="homeProductTitle">
          <?php echo sub_str($this->_var['goods_0_40349500_1429170122']['short_style_name'],4); ?>
        </span>
        <a href="<?php echo $this->_var['goods_0_40349500_1429170122']['url']; ?>" class="homePurchaseButton">
          <?php if ($this->_var['goods_0_40349500_1429170122']['promote_price'] != ""): ?>

         <?php echo $this->_var['goods_0_40349500_1429170122']['promote_price']; ?>

         <?php else: ?>

         <?php echo $this->_var['goods_0_40349500_1429170122']['shop_price']; ?>

         <?php endif; ?>购买
        </a>
      </div>
    </div>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>