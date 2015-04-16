<?php echo $this->fetch('library/page_header.lbi'); ?>

    
    <div class="websiteWrapper">

      
      <div class="pageWrapper homePageWrapper">
        
        <div class="mainMenuOuterWrapper">
          
          <?php echo $this->fetch('library/page_menu.lbi'); ?>
          
          <div class="mainMenuBottomDecoration">
          </div>
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
          
          <a href="index.php" class="mainLogo">
            <img src="__TPL__/images/common/mainLogo.png" alt="" />
          </a>
          
        </div>
        
        
        <div class="pageContentWrapper">
          
          <?php echo $this->fetch('library/search.lbi'); ?>
          
          
          <div class="sliderOuterWrapper">
            <div class="sliderWrapper">
              <?php 
$k = array (
  'name' => 'ads',
  'id' => '1',
  'num' => '3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
            </div>
            <a href="" class="sliderControl previousSlideButton">
            </a>
            <a href="" class="sliderControl nextSlideButton">
            </a>
          </div>
          
          <div class="textBreakBottom">
          </div>
          <div class="selectWrapper">
         <?php echo $this->fetch('library/cat_nav.lbi'); ?>
          </div>
          
          <h4 class="sectionTitle">
            春季新品:
            <a href="<?php echo url('category/index', array('type'=>'new'));?>"  class="sectionTitleLink">
              更多 &raquo;
            </a>
          </h4>
          <?php echo $this->fetch('library/recommend_new.lbi'); ?>
          
          <div class="textBreakBottom">
          </div>
          
          <h4 class="sectionTitle">
            特色推荐:
             <a href="<?php echo url('category/index', array('type'=>'best'));?>" class="sectionTitleLink">
              更多 &raquo;
            </a>
          </h4>
          <?php echo $this->fetch('library/recommend_feature.lbi'); ?>
          
          <div class="pageBreak">
          </div>

          
          
           
          
          <div class="accordionWrapper"> 
            
            <?php $_from = $this->_var['artciles_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['faoo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['faoo']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['faoo']['iteration']++;
?> 
            <?php if ($this->_foreach['faoo']['iteration'] < 4): ?>
            <div class="accordionItemWrapper"> 
              <a href="" class="accordionButton"><span class="accordionButtonIcon"></span><span class="accordionButtonTitle"><?php echo $this->_var['article']['title']; ?></span></a>
              <div class="accordionContentWrapper">
                <div class="accordionContent">
                 <?php echo $this->_var['article']['content']; ?>           
                  </div>
              </div>
            </div>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
             
          
          </div>
           
          
          
        </div>
        
        <div class="footerDecoration">
        </div>
        
       <?php echo $this->fetch('library/page_footer.lbi'); ?> 
        
      </div>
      
    </div>
    
    <script type="text/javascript">
    get_asynclist("<?php echo url('index/ajax_goods', array('type'=>'best'));?>" , '__TPL__/images/loader.gif');
    </script>
  </body>
</html>