<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="websiteWrapper"> 
  
  <div class="pageWrapper blogPageWrapper"> 
    
    <div class="mainMenuOuterWrapper"> 
      
      <?php echo $this->fetch('library/page_menu.lbi'); ?>
      
      <div class="mainMenuBottomDecoration"></div>
    </div>
     
  
    
    
    <div class="headerOuterWrapper">
      <div class="headerWrapper"> 
        <a href="<?php echo url('user/index');?>" class="accountButton"></a>
        <a href="<?php echo url('flow/cart');?>" class="shoppingCartButton"></a>
        <a href="" class="mainMenuButton"></a>
      </div>
      <div class="headerDecoration"></div>
      
       
      <a href="index.php" class="mainLogo"><img src="__TPL__/images/common/mainLogo.png" alt="" /></a> 
       
    </div>
     
    
    
    <div class="pageContentWrapper"> 
      
     <div class="headerBreak headerBreakTitleBottom"></div>
      
      
      <h3 class="pageTitle">用户登陆</h3>
      
      
      
      <div class="loginFormWrapper">
        <form name="formLogin" action="<?php echo url('user/login');?>" method="post" class="validforms">
          <fieldset>
            <div class="formFieldWrapper">
              <label for="loginNameField">用户名 / 邮箱：</label>
              <input placeholder="<?php echo $this->_var['lang']['username']; ?>/邮箱" name="username" type="text"  id="username" datatype="*" class="loginNameField fieldWithIcon userFieldIcon" />
            </div>
            <div class="formFieldWrapper">
              <label for="loginPasswordField"><?php echo $this->_var['lang']['label_password']; ?>：</label>
              <input placeholder="<?php echo $this->_var['lang']['label_password']; ?>"  name="password" type="password"  datatype="*6-16" value="" id="loginPasswordField" class="loginPasswordField fieldWithIcon passwordFieldIcon"  />
            </div>

             <?php if ($this->_var['enabled_captcha']): ?>
           <div class="input-text code"><b><?php echo $this->_var['lang']['comment_captcha']; ?></b><span>
              <input name="captcha" type="text" placeholder="<?php echo $this->_var['lang']['comment_captcha']; ?>">
              </span><img src="<?php echo url('Public/captcha', array('rand'=>$this->_var['rand']));?>" alt="captcha" class="img-yzm pull-right" onClick="this.src='<?php echo url('public/captcha');?>&t='+Math.random()" />
           </div>
             <?php endif; ?>
            <div class="loginButtonsWrapper"> 
              <a href="<?php echo url('user/register');?>" class="loginRegisterButton"><?php echo $this->_var['lang']['free_registered']; ?></a> 
              <a href="<?php echo url('user/get_password_phone');?>" class="loginRecoverButton"><?php echo $this->_var['lang']['forgot_password']; ?>？</a>
              <input type="submit" value="<?php echo $this->_var['lang']['now_landing']; ?>" class="loginButton" id="loginButton">
            </div>
          </fieldset>
        </form>
      </div>
      
      
    </div>
    
    
    
    <div class="footerDecoration"></div>
    
   <?php echo $this->fetch('library/page_footer.lbi'); ?> 
     
    
  </div>
   
</div>

</body>
</html>

