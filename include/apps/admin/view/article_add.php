{include file="pageheader"}
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">{$ur_here}</h3>
  </div>
  <div class="panel-body">
    <ul class="nav nav-tabs" role="tablist" id="myTab">
      <li class="active"><a href="#general" role="tab" data-toggle="tab">{$lang['tab_general']}</a></li>
      <li><a href="#detail" role="tab" data-toggle="tab">{$lang['tab_content']}</a></li>
    </ul>
    <form  action="{url('add')}" method="post" enctype="multipart/form-data" name="theForm" onsubmit="return validate();">
      <div class="tab-content">
        <div class="tab-pane active" id="general">
          <table width="90%" id="general-table" class="table table-hover ectouch-table">
            <tr>
              <td width="200">{$lang['title']}</td>
              <td><div class="col-md-4">
                  <input type="text" name="data[title]"  maxlength="20" class="form-control input-sm" />
                </div></td>
            </tr>
            <!-- {if $article['cat_id'] >= 0} -->
            <tr>
              <td class="narrow-label">{$lang['cat']} </td>
              <td><div class="col-md-2">
                  <select name="data[cat_id]" onchange="catChanged()" class="form-control input-sm">
                    <option value="0">{$lang['select_plz']}</option>
                    {$cat_select}
                  </select>
                </div></td>
            </tr>
            <!-- {else} -->
            <input type="hidden" name="data[article_cat]" value="-1" />
            <!-- {/if} -->
            <tr>
              <td class="narrow-label">{$lang['is_open']}</td>
              <td><div class="col-md-4">
                  <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-primary btn-sm active">
                      <input type="radio" name="data[is_open]" value="1" checked>
                      {$lang['isopen']}</label>
                    <label class="btn btn-primary btn-sm">
                      <input type="radio" name="data[is_open]" value="0">
                      {$lang['isclose']} </label>
                  </div>
                </div></td>
            </tr>
            <tr>
              <td class="narrow-label">{$lang['author']}</td>
              <td><div class="col-md-4">
                  <input type="text" name="data[author]" maxlength="20" class="form-control input-sm" />
                </div></td>
            </tr>
            <tr>
              <td class="narrow-label">{$lang['email']}</td>
              <td><div class="col-md-4">
                  <input type="text" name="data[author_email]" maxlength="20" class="form-control input-sm" />
                </div></td>
            </tr>
            <tr>
              <td class="narrow-label">{$lang['keywords']}</td>
              <td><div class="col-md-4">
                  <input type="text" name="data[keywords]" maxlength="20" class="form-control input-sm"/>
                </div></td>
            </tr>
            <tr>
              <td class="narrow-label">{$lang['lable_description']}</td>
              <td><div class="col-md-6">
                  <textarea name='data[description]' rows="6" class="form-control input-sm"></textarea>
                </div></td>
            </tr>
            <tr>
              <td class="narrow-label">{$lang['external_links']}</td>
              <td><div class="col-md-4">
                  <input name="data[link]" type="text" id="link" maxlength="20" class="form-control input-sm" />
                </div></td>
            </tr>
          </table>
        </div>
        <div class="tab-pane" id="detail">
		  <table width="90%" class="table table-hover ectouch-table">
            <tr>
              <td><div class="col-md-9"> 
                  <script id="container" name="content" type="text/plain" style="width:810px; height:360px;"></script> 
                </div></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="button-div">
        <input type="hidden" name="act" value="{$form_action}" />
        <input type="hidden" name="old_title" value="{$article['title']}"/>
        <input type="hidden" name="id" value="{$article['article_id']}" />
        <input type="submit" value="{$lang['button_submit']}" class="btn btn-primary"  />
        <input type="reset" value="{$lang['button_reset']}" class="btn btn-default" />
      </div>
    </form>
  </div>
</div>
<script type="text/javascript" src="__PUBLIC__/js/region.js"></script> 
<script type="text/javascript" src="__PUBLIC__/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="__PUBLIC__/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript">var ue = UE.getEditor('container');</script>
{include file="pagefooter"}