
<?php if ($this->_var['goods']): ?>
<a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo $this->_var['goods']['name']; ?>"></a>
<dl>
  <dt>
    <h4 class="title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?></a></h4>
  </dt>
  <dd><span class="pull-left"><strong><?php echo $this->_var['lang']['price']; ?>：<b class="ect-colory"><?php if ($this->_var['goods']['promote_price']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></b></strong><small class="ect-margin-lr"><del><?php echo $this->_var['goods']['market_price']; ?></del></small></span><span class="ect-pro-price"> 
    <?php if ($this->_var['goods']['promotion']): ?> 
    <?php $_from = $this->_var['goods']['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'promotion');if (count($_from)):
    foreach ($_from AS $this->_var['promotion']):
?> 
    <?php if ($this->_var['promotion']['type'] == 'group_buy'): ?><i class="label tuan"><?php echo $this->_var['lang']['group_buy_act']; ?></i> 
    <?php elseif ($this->_var['promotion']['act_type'] == 0): ?> <i class="label mz"> <?php echo $this->_var['lang']['favourable_mz']; ?></i> 
    <?php elseif ($this->_var['promotion']['act_type'] == 1): ?> <i class="label mj"> <?php echo $this->_var['lang']['favourable_mj']; ?></i> 
    <?php elseif ($this->_var['promotion']['act_type'] == 2): ?> <i class="label zk"> <?php echo $this->_var['lang']['favourable_zk']; ?></i> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php endif; ?> 
    </span></dd>
  <dd><span class="pull-left <?php if ($this->_var['goods']['mysc'] != 0): ?>ect-colory<?php endif; ?>"><i class="fa <?php if ($this->_var['goods']['mysc'] != 0): ?>fa-heart<?php else: ?>fa-heart-o<?php endif; ?>"></i> <?php echo $this->_var['goods']['sc']; ?><?php echo $this->_var['lang']['like_num']; ?></span><span class="pull-right"><?php echo $this->_var['lang']['sort_sales']; ?>：<?php echo $this->_var['goods']['sales_count']; ?><?php echo $this->_var['lang']['piece']; ?></span> </dd>
</dl>
<?php endif; ?> 
 

 
<?php if ($this->_var['brand']): ?>
<li>
  <p><a href="<?php echo $this->_var['brand']['url']; ?>"><img src="<?php echo $this->_var['brand']['brand_banner']; ?>"></a><span><?php echo $this->_var['brand']['brand_name']; ?></span></p>
</li>
<?php endif; ?> 
 

 
<?php if ($this->_var['brand_goods']): ?> 
<a href="<?php echo $this->_var['brand_goods']['url']; ?>"><img src="<?php echo $this->_var['brand_goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['brand_goods']['name']; ?>"></a>
<dl>
  <dt>
    <h4 class="title"><a href="<?php echo $this->_var['brand_goods']['url']; ?>"><?php echo $this->_var['brand_goods']['goods_name']; ?></a></h4>
  </dt>
  <dd><span class="pull-left"><strong><?php echo $this->_var['lang']['price']; ?>：<b class="ect-colory"><?php if ($this->_var['brand_goods']['promote_price']): ?><?php echo $this->_var['brand_goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['brand_goods']['shop_price']; ?><?php endif; ?></b></strong><small class="ect-margin-lr"><del><?php echo $this->_var['brand_goods']['market_price']; ?></del></small></span><span class="ect-pro-price"> 
    <?php if ($this->_var['brand_goods']['promotion']): ?> 
    <?php $_from = $this->_var['brand_goods']['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'promotion');if (count($_from)):
    foreach ($_from AS $this->_var['promotion']):
?> 
    <?php if ($this->_var['promotion']['type'] == 'group_buy'): ?><i class="label tuan"><?php echo $this->_var['lang']['group_buy_act']; ?></i> 
    <?php elseif ($this->_var['promotion']['act_type'] == 0): ?> <i class="label mz"> <?php echo $this->_var['lang']['favourable_mz']; ?></i> 
    <?php elseif ($this->_var['promotion']['act_type'] == 1): ?> <i class="label mj"> <?php echo $this->_var['lang']['favourable_mj']; ?></i> 
    <?php elseif ($this->_var['promotion']['act_type'] == 2): ?> <i class="label zk"> <?php echo $this->_var['lang']['favourable_zk']; ?></i> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php endif; ?> 
    </span></dd>
  <dd><span class="pull-left <?php if ($this->_var['goods']['mysc'] != 0): ?>ect-colory<?php endif; ?>"><i class="fa <?php if ($this->_var['goods']['mysc'] != 0): ?>fa-heart<?php else: ?>fa-heart-o<?php endif; ?>"></i> <?php echo $this->_var['brand_goods']['sc']; ?><?php echo $this->_var['lang']['like_num']; ?></span><span class="pull-right"><?php echo $this->_var['lang']['sort_sales']; ?>：<?php echo $this->_var['brand_goods']['sales_count']; ?> <?php echo $this->_var['lang']['piece']; ?></span> </dd>
</dl>
<?php endif; ?>  

 
<?php if ($this->_var['activity']): ?>
<li>
  <p class="a-img"><a href="<?php echo $this->_var['activity']['url']; ?>"><img src="<?php echo $this->_var['activity']['act_banner']; ?>"></a><span><?php echo $this->_var['activity']['start_time']; ?>-<?php echo $this->_var['activity']['end_time']; ?></span></p>
  <p class="a-name"><?php echo $this->_var['activity']['act_name']; ?></p>
</li>
<?php endif; ?> 
 

 
<?php if ($this->_var['act_goods']): ?> 
<a href="<?php echo $this->_var['act_goods']['url']; ?>"><img src="<?php echo $this->_var['act_goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['act_goods']['name']; ?>"></a>
<dl>
  <h4 class="title"><a href="<?php echo $this->_var['act_goods']['url']; ?>"><?php echo $this->_var['act_goods']['name']; ?></a></h4>
  </dt>
  <dd><span class="pull-left"><strong><?php echo $this->_var['lang']['price']; ?>：<b class="ect-colory"><?php if ($this->_var['act_goods']['promote_price']): ?><?php echo $this->_var['act_goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['act_goods']['shop_price']; ?><?php endif; ?></b></strong><small class="ect-margin-lr"><del><?php echo $this->_var['act_goods']['market_price']; ?></del></small></span> <span class="ect-pro-price"> 
    <?php if ($this->_var['act_goods']['promotion']): ?> 
    <?php $_from = $this->_var['act_goods']['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'promotion');if (count($_from)):
    foreach ($_from AS $this->_var['promotion']):
?> 
    <?php if ($this->_var['promotion']['type'] == 'group_buy'): ?><i class="label tuan"><?php echo $this->_var['lang']['group_buy_act']; ?></i> 
    <?php elseif ($this->_var['promotion']['act_type'] == 0): ?> <i class="label mz"> <?php echo $this->_var['lang']['favourable_mz']; ?></i> 
    <?php elseif ($this->_var['promotion']['act_type'] == 1): ?> <i class="label mj"> <?php echo $this->_var['lang']['favourable_mj']; ?></i> 
    <?php elseif ($this->_var['promotion']['act_type'] == 2): ?> <i class="label zk"> <?php echo $this->_var['lang']['favourable_zk']; ?></i> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php endif; ?> 
    </span> </dd>
  <dd><span class="pull-left <?php if ($this->_var['goods']['mysc'] != 0): ?>ect-colory<?php endif; ?>"><i class="fa <?php if ($this->_var['goods']['mysc'] != 0): ?>fa-heart<?php else: ?>fa-heart-o<?php endif; ?>"></i> <?php echo $this->_var['act_goods']['sc']; ?><?php echo $this->_var['lang']['like_num']; ?></span><span class="pull-right"><?php echo $this->_var['lang']['sort_sales']; ?>：<?php echo $this->_var['act_goods']['sales_count']; ?> <?php echo $this->_var['lang']['piece']; ?></span> </dd>
</dl>
<?php endif; ?> 
 

 
<?php if ($this->_var['groupbuy']): ?> 
<a href="<?php echo $this->_var['groupbuy']['url']; ?>"><img src="<?php echo $this->_var['groupbuy']['goods_thumb']; ?>" alt="<?php echo $this->_var['groupbuy']['goods_name']; ?>"></a>
<dl>
  <dt>
    <h4 class="title"><a href="<?php echo $this->_var['groupbuy']['url']; ?>"><?php echo $this->_var['groupbuy']['goods_name']; ?></a></h4>
  </dt>
  <dd class="dd-price"><span class="pull-left"><strong><?php echo $this->_var['lang']['price']; ?>：<b class="ect-colory"><?php echo $this->_var['groupbuy']['cur_price']; ?></b></strong><small class="ect-margin-lr"><del><?php echo $this->_var['groupbuy']['market_price']; ?></del></small></span><span class="ect-pro-price"> <i class="label zk"><?php echo $this->_var['groupbuy']['spare_discount']; ?><?php echo $this->_var['lang']['favourable_zk']; ?></i> </span></dd>
  <dd class="dd-num"><span class="pull-left"><i class="fa fa-eye"></i> <?php echo $this->_var['groupbuy']['click_num']; ?><?php echo $this->_var['lang']['scan_num']; ?></span><span class="pull-right"><?php echo $this->_var['lang']['sort_sales']; ?>：<?php echo $this->_var['groupbuy']['sales_count']; ?><?php echo $this->_var['lang']['piece']; ?></span> </dd>
  <dd style="display:none"> <?php echo $this->_var['groupbuy']['spare_price']; ?></dd>
</dl>
<?php endif; ?> 
 

 
<?php if ($this->_var['exchange']): ?> 
<a href="<?php echo $this->_var['exchange']['url']; ?>"><img src="<?php echo $this->_var['exchange']['goods_thumb']; ?>" alt="<?php echo $this->_var['exchange']['goods_name']; ?>"></a>
<dl>
  <dt>
    <h4 class="title"><a href="<?php echo $this->_var['exchange']['url']; ?>"><?php echo $this->_var['exchange']['goods_name']; ?></a></h4>
  </dt>
  <dd><span class="pull-left"><strong><b class="ect-colory"><?php echo $this->_var['exchange']['exchange_integral']; ?>积分</b></strong><small class="ect-margin-lr"><del><?php echo $this->_var['exchange']['market_price']; ?></del></small></span> </dd>
  <dd><span class="pull-left <?php if ($this->_var['goods']['mysc'] != 0): ?>ect-colory<?php endif; ?>"><i class="fa <?php if ($this->_var['goods']['mysc'] != 0): ?>fa-heart<?php else: ?>fa-heart-o<?php endif; ?>"></i> <?php echo $this->_var['exchange']['sc']; ?><?php echo $this->_var['lang']['like_num']; ?></span> </dd>
</dl>
<?php endif; ?> 
 

 
<?php if ($this->_var['article']): ?> 
<a href="<?php echo $this->_var['article']['url']; ?>" ><?php echo $this->_var['id']; ?>、<?php echo $this->_var['article']['short_title']; ?></a> 
<?php endif; ?> 
 

 
<?php if ($this->_var['orders']): ?><a href="<?php echo url('user/order_detail', array('order_id'=>$this->_var['orders']['order_id']));?>"><img src="<?php echo $this->_var['orders']['img']; ?>" class="pull-left" />
<dl>
  <dt>
    <h4 class="title"><?php echo $this->_var['lang']['order_number']; ?>：<?php echo $this->_var['orders']['order_sn']; ?></h4>
  </dt>
  <dd><?php echo $this->_var['lang']['order_status']; ?>：<?php echo $this->_var['orders']['order_status']; ?></dd>
  <dd><?php echo $this->_var['lang']['order_total_fee']; ?>：<span class="ect-color"><?php echo $this->_var['orders']['total_fee']; ?></span></dd>
  <dd><?php echo $this->_var['lang']['order_addtime']; ?>：<?php echo $this->_var['orders']['order_time']; ?></dd>
</dl>
<i class="pull-right fa fa-angle-right"></i> </a> 

<?php endif; ?> 
 

 
<?php if ($this->_var['consignee']): ?> 
<a href="<?php echo $this->_var['consignee']['url']; ?>">
<p class="title"><?php echo $this->_var['consignee']['consignee']; ?> <span class="ect-colory"><?php echo $this->_var['consignee']['mobile']; ?></span></p>
<p><?php echo $this->_var['consignee']['address']; ?></p>
<i class="fa fa-angle-right"></i> </a> 
<?php endif; ?> 
 

 
<?php if ($this->_var['fittings']): ?> 
<a href="<?php echo $this->_var['fittings']['url']; ?>"  class="pull-left"><img src="<?php echo $this->_var['fittings']['goods_thumb']; ?>"></a>
<dl>
  <dt>
    <h4 class="title"><a href="<?php echo $this->_var['fittings']['url']; ?>"><?php echo $this->_var['fittings']['goods_name']; ?></a></h4>
  </dt>
  <dd><?php echo $this->_var['lang']['fittings_price']; ?><font class="ect-colory"><?php echo $this->_var['fittings']['fittings_price']; ?></font></dd>
  <dd>
    <div class="flow-del text-center"><a onclick="addToCart_quick(<?php echo $this->_var['fittings']['goods_id']; ?>)" href="javascript:;"><?php echo $this->_var['lang']['btn_add_to_cart']; ?></a></div>
  </dd>
</dl>

<?php endif; ?> 
 

 
<?php if ($this->_var['msg']): ?>
<p> <a style="color:#1CA2E1; float:right; font-weight:normal;" onclick="if (!confirm('<?php echo $this->_var['lang']['confirm_remove_msg']; ?>？')) return false;" href="<?php echo $this->_var['msg']['url']; ?>"><?php echo $this->_var['lang']['drop']; ?></a><?php echo $this->_var['msg']['msg_type']; ?>：<?php echo $this->_var['msg']['msg_title']; ?> - <?php echo $this->_var['msg']['msg_time']; ?> </p>
<p style="color:#999;"> <?php echo $this->_var['msg']['msg_content']; ?> </p>
<?php if ($this->_var['msg']['re_msg_content']): ?>
<table>
  <tr>
    <td> <?php echo $this->_var['lang']['shopman_reply']; ?>(<?php echo $this->_var['msg']['re_msg_time']; ?>)<br/>
      <?php echo $this->_var['msg']['re_msg_content']; ?> </td>
  </tr>
</table>
<?php endif; ?> 
<?php endif; ?> 
 

 
<?php if ($this->_var['auction']): ?> 
<a href="<?php echo $this->_var['auction']['url']; ?>"><img src="<?php echo $this->_var['auction']['act_banner']; ?>" alt="<?php echo $this->_var['auction']['goods_name']; ?>"></a>
<dl>
  <dt>
    <h4 class="title"><a href="<?php echo $this->_var['auction']['url']; ?>"><?php echo $this->_var['auction']['goods_name']; ?></a></h4>
  </dt>
  <dd class="dd-num"> <span class="pull-left"> <?php echo $this->_var['lang']['act_status']; ?>： 
    <?php if ($this->_var['auction']['status_no'] == 0): ?> 
    <?php echo $this->_var['lang']['au_pre_start']; ?><br>
    <?php elseif ($this->_var['auction']['status_no'] == 1): ?> 
    <?php echo $this->_var['lang']['au_under_way_1']; ?><br>
    <?php else: ?> 
    <?php echo $this->_var['lang']['au_finished']; ?><br>
    <?php endif; ?> 
    </span> </dd>
  <dd class="dd-num"> <span class="pull-left"><strong><?php echo $this->_var['lang']['au_start_price']; ?>：<b class="ect-colory"><?php echo $this->_var['auction']['formated_start_price']; ?></b></strong> </span> </dd>
  <dd class="dd-num"> <span class="pull-left"> 
    <?php if ($this->_var['auction']['end_price'] > 0): ?> 
    <strong><?php echo $this->_var['lang']['au_end_price']; ?>：<b class="ect-colory"><?php echo $this->_var['auction']['formated_end_price']; ?></b></strong> 
    <?php endif; ?></span> </dd>
</dl>
<?php endif; ?> 
 

 
<?php if ($this->_var['wholesale']): ?> 
<a href="<?php echo $this->_var['wholesale']['goods_url']; ?>"><img src="<?php echo $this->_var['wholesale']['goods_thumb']; ?>" alt="<?php echo $this->_var['wholesale']['name']; ?>"></a>
<dl>
  <dt>
    <h4 class="title"><a href="<?php echo $this->_var['wholesale']['goods_url']; ?>"><?php echo $this->_var['wholesale']['goods_name']; ?></a></h4>
  </dt>
  <dd><span class="pull-left"><strong><?php echo $this->_var['lang']['price']; ?>：<b class="ect-colory"><?php echo $this->_var['wholesale']['low_price']; ?></b></strong><small class="ect-margin-lr"><del><?php echo $this->_var['wholesale']['market_price']; ?></del></small></span></dd>
  <dd style="display:none"><span class="pull-left <?php if ($this->_var['wholesale']['mysc'] != 0): ?>ect-colory<?php endif; ?>"><i class="fa <?php if ($this->_var['wholesale']['mysc'] != 0): ?>fa-heart<?php else: ?>fa-heart-o<?php endif; ?>"></i> <?php echo $this->_var['wholesale']['sc']; ?><?php echo $this->_var['lang']['like_num']; ?></span><span class="pull-right"><?php echo $this->_var['lang']['sort_sales']; ?>：<?php echo $this->_var['wholesale']['sales_count']; ?><?php echo $this->_var['lang']['piece']; ?></span> </dd>
</dl>
<?php endif; ?> 
 