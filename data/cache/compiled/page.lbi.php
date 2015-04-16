

<div class="pageNumbersOuterWrapper-page">
  <div class="pageNumbersWrapper">

    <?php if ($this->_var['pager']['page_number']): ?>
      <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'num');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['num']):
?>
        <a class="pageNumber <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>currentPageNumber<?php endif; ?>" href="<?php echo $this->_var['num']; ?>&type=<?php echo $this->_var['type']; ?>&keywords=<?php echo $this->_var['keywords']; ?>"><?php echo $this->_var['key']; ?></a> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>


  <?php if ($this->_var['pager']['page_count'] > 1): ?>

   <a href="<?php echo empty($this->_var['pager']['page_prev']) ? '#' : $this->_var['pager']['page_prev']; ?>" class="pageNumber">&laquo;</a> 
   <a href="<?php echo empty($this->_var['pager']['page_next']) ? '#' : $this->_var['pager']['page_next']; ?>" class="pageNumber">&raquo;</a> 

  <?php else: ?>


  <?php endif; ?>

 </div>
</div>
