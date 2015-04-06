<div class="menu">
  <ul>
    <li class="father-li"><a class="" href="javascript:void(0)">产品分类</a>
      <ul style="display:black;">    
            <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['no']['iteration']++;
?>

              
              <?php if ($this->_var['cat']['cat_id']): ?>
                <li>
                 <a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?> </a>
                </li>
                
                <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['no1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no1']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['no1']['iteration']++;
?>

                  <li>
                  <a href="<?php echo $this->_var['child']['url']; ?>">&nbsp<i class="icon-angle-right"></i>&nbsp<?php echo sub_str(htmlspecialchars($this->_var['child']['name']),5,false); ?> </a>
                  </li>

                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                <li class="line">
                </li>

              <?php else: ?>

                <li><a href="<?php echo url('category/index',array('id'=>$this->_var['cat']['id']));?>">
                  <?php echo htmlspecialchars($this->_var['cat']['name']); ?>
                </a></li>

              <?php endif; ?>


        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

      </ul>
    </li>
  </ul>
</div>