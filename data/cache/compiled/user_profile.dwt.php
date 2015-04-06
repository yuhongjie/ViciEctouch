
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
      
       
      <a href="" class="mainLogo"><img src="__TPL__/images/common/mainLogo.png" alt="" /></a> 
       
    </div>
     
    
    
    <div class="pageContentWrapper"> 




  
  <div class="contactFormWrapper">

    <script type="text/javascript">
        <?php $_from = $this->_var['lang']['profile_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
        var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </script>
    <h4 class="contactTitle">
      我的个人信息
    </h4>
    
    
    <form name="formEdit" action="<?php echo url('user/profile');?>" method="post" onSubmit="return userEdit()" class="contactForm">
      <fieldset>
        <div class="formFieldWrapper">
          <label for="contactEmailField">
           <?php echo $this->_var['lang']['email']; ?>：
          </label>
          <input name="email" type="text" placeholder="<?php echo $this->_var['lang']['no_emaill']; ?>"  value="<?php echo $this->_var['profile']['email']; ?>" class="contactField fieldWithIcon emailFieldIcon requiredField requiredEmailField"
          id="contactEmailField" data-dummy="">
        </div>
         <div class="formSubmitButtonErrorsWrapper">
            
            
            <input name="submit" type="submit" value="<?php echo $this->_var['lang']['confirm_edit']; ?>" class="buttonWrapper contactSubmitButton" 
            data-formId="contactForm">
          </div>
        <input type="hidden" name="formIsReady" value="true" id="formIsReady"
        />
      </fieldset>
    </form>


    <form id="signupForm" name="formPassword" action="<?php echo url('user/edit_password');?>" method="post" onSubmit="return editPassword()" class="contactForm" >
    
        <fieldset>
          <div class="formFieldWrapper">
            <label for="registerPasswordField"><?php echo $this->_var['lang']['old_password']; ?>：</label>
            <input placeholder="<?php echo $this->_var['lang']['old_password']; ?>" name="old_password" type="password" value="" id="registerPasswordField" class="registerPasswordField fieldWithIcon passwordFieldIcon" />
          </div>
          
          <div class="formFieldWrapper">
            <label for="password"><?php echo $this->_var['lang']['new_password']; ?>：</label>
            <input id="password" placeholder="<?php echo $this->_var['lang']['new_password']; ?>" name="new_password" type="password" class="registerPasswordField fieldWithIcon passwordFieldIcon" />
          </div>
          <div class="formFieldWrapper">
            <label for="confirm_password"><?php echo $this->_var['lang']['confirm_password']; ?>：</label>
            <input id="confirm_password" placeholder="<?php echo $this->_var['lang']['confirm_password']; ?>" name="confirm_password" type="password" class="registerPasswordField fieldWithIcon passwordFieldIcon" />
          </div>
          <input name="act" type="hidden" value="edit_password" />
            <input name="submit" type="submit" class="buttonWrapper contactSubmitButton" value="<?php echo $this->_var['lang']['confirm_edit']; ?>" />
        </fieldset>
     </form>
    

  </div>
  
 </div>
</div>
    
    
    
    <div class="footerDecoration"></div>
    
   <?php echo $this->fetch('library/page_footer.lbi'); ?> 
     
    
  </div>
   
</div>


<script>
// $.validator.setDefaults({
//   submitHandler: function() {
//     alert("submitted!");
//   }
// });

$().ready(function() {
  // validate the comment form when it is submitted
  $("#commentForm").validate();

  // validate signup form on keyup and submit
  $("#signupForm").validate({
    rules: {
      password: {
        required: true,
        minlength: 6
      },
      confirm_password: {
        required: true,
        minlength: 6,
        equalTo: "#password"
      },
    },
    messages: {
      password: {
        required: "请输入密码",
        minlength: "你的密码必须至少6个字符长度"
      },
      confirm_password: {
        required: "请输入密码",
        minlength: "你的密码必须至少6个字符长度",
        equalTo: "请输入相同的密码"
      }
    }
  });
});
</script>

</body>
</html>

