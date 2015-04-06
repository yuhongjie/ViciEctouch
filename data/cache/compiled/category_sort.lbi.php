
<div class="ect-wrapper">
  <form method="GET" class="sort" name="listform">
    <div> 
      <a class="<?php if ($this->_var['sort'] == 'sales_volume' && $this->_var['order'] == 'DESC'): ?>ect-colory select<?php elseif ($this->_var['sort'] == 'sales_volume' && $this->_var['order'] == 'ASC'): ?>ect-colory<?php endif; ?>" href="<?php echo url('category/index#goods_list',array('id'=>$this->_var['id'],'type'=>$this->_var['type'],'display'=>$this->_var['display'],'brand'=>$this->_var['brand_id'],'price_min'=>$this->_var['price_min'],'price_max'=>$this->_var['price_max'],'filter_attr'=>$this->_var['filter_attr'], 'sort'=>'sales_volume', 'order'=> ($this->_var['sort']=='sales_volume' && $this->_var['order']=='ASC')?'DESC':'ASC', 'keywords'=>$this->_var['keywords']));?>&type=<?php echo $this->_var['type']; ?>"><?php echo $this->_var['lang']['sort_sales']; ?> <i class="glyphicon glyphicon-arrow-up"></i></a> 
      <a class="<?php if ($this->_var['sort'] == 'click_count' && $this->_var['order'] == 'DESC'): ?>ect-colory select<?php elseif ($this->_var['sort'] == 'click_count' && $this->_var['order'] == 'ASC'): ?>ect-colory<?php endif; ?>" href="<?php echo url('category/index#goods_list',array('id'=>$this->_var['id'],'type'=>$this->_var['type'],'display'=>$this->_var['display'],'brand'=>$this->_var['brand_id'],'price_min'=>$this->_var['price_min'],'price_max'=>$this->_var['price_max'],'filter_attr'=>$this->_var['filter_attr'], 'sort'=>'click_count', 'order'=> ($this->_var['sort']=='click_count' && $this->_var['order']=='ASC')?'DESC':'ASC', 'keywords'=>$this->_var['keywords']));?>"><?php echo $this->_var['lang']['sort_popularity']; ?> <i class="glyphicon glyphicon-arrow-up"></i></a> 
      <a class="<?php if ($this->_var['sort'] == 'shop_price' && $this->_var['order'] == 'DESC'): ?>ect-colory select<?php elseif ($this->_var['sort'] == 'shop_price' && $this->_var['order'] == 'ASC'): ?>ect-colory<?php endif; ?>" href="<?php echo url('category/index#goods_list',array('id'=>$this->_var['id'],'type'=>$this->_var['type'],'display'=>$this->_var['display'],'brand'=>$this->_var['brand_id'],'price_min'=>$this->_var['price_min'],'price_max'=>$this->_var['price_max'],'filter_attr'=>$this->_var['filter_attr'], 'sort'=>'shop_price', 'order'=> ($this->_var['sort']=='shop_price' && $this->_var['order']=='ASC')?'DESC':'ASC', 'keywords'=>$this->_var['keywords']));?>"><?php echo $this->_var['lang']['sort_price']; ?><i class="glyphicon glyphicon-arrow-up"></i></a> 
      <!-- <a class="<?php if ($this->_var['sort'] == 'shop_price' && $this->_var['order'] == 'DESC'): ?>ect-colory select<?php elseif ($this->_var['sort'] == 'shop_price' && $this->_var['order'] == 'ASC'): ?>ect-colory<?php endif; ?>" href="<?php echo url('category/index#goods_list',array('id'=>$this->_var['id'],'display'=>$this->_var['display'],'brand'=>$this->_var['brand_id'],'price_min'=>$this->_var['price_min'],'price_max'=>$this->_var['price_max'],'filter_attr'=>$this->_var['filter_attr'], 'sort'=>'shop_price', 'order'=> ($this->_var['sort']=='shop_price' && $this->_var['order']=='ASC')?'DESC':'ASC', 'keywords'=>$this->_var['keywords']));?>"><?php echo $this->_var['lang']['sort_price']; ?><i class="glyphicon glyphicon-arrow-up"></i></a> <a class="category-list"><i class="ect-icon ect-icon2 ect-icon-cate3"></i><?php echo $this->_var['lang']['goods_filter']; ?></a> </div> -->
    </div>
    <div class="category-list-show"> 
      <?php $_from = $this->_var['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_87256400_1428322790');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_87256400_1428322790']):
        $this->_foreach['no']['iteration']++;
?> 
      <a href="<?php echo $this->_var['cat_0_87256400_1428322790']['url']; ?>" class="col-md-3 col-xs-3"><span><?php if ($this->_var['cat_0_87256400_1428322790']['cat_id']): ?><?php echo htmlspecialchars($this->_var['cat_0_87256400_1428322790']['name']); ?><?php else: ?><?php echo htmlspecialchars($this->_var['cat_0_87256400_1428322790']['name']); ?><?php endif; ?></span></a> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <a href="<?php echo url('category/top_all');?>" class="col-md-3 col-xs-3 ect-colory"><span>更多</span></a> </div>
    <input type="hidden" name="id" value="<?php echo $this->_var['id']; ?>" />
    <input type="hidden" name="display" value="<?php echo $this->_var['display']; ?>" id="display" />
    <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
    <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
    <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
    <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
    <input type="hidden" name="page" value="<?php echo $this->_var['page']; ?>" />
    <input type="hidden" name="sort" value="<?php echo $this->_var['sort']; ?>" />
    <input type="hidden" name="order" value="<?php echo $this->_var['order']; ?>" />
    <input type="hidden" name="keywords" value="<?php echo $this->_var['keywords']; ?>" />
  </form>
</div>