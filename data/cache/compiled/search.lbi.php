<div class="shopSearchFormWrapper">
   <form action="<?php echo url('category/index');?><?php if ($this->_var['id']): ?>&id=<?php echo $this->_var['id']; ?><?php endif; ?>"  method="post" id="searchForm" name="searchForm">
    <fieldset>
      <input id="keywordBox" type="text" name="keywords" value="" id="shopSearchField" class="shopSearchField fieldWithIcon shopSearchFieldIcon"
      name="shopSearchField" placeholder="" />
      <input name="" type="submit" value=""  onclick="return check('keywordBox')" class="gosearch">
    </fieldset>
  </form>
</div>
