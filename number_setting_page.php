<?php
    global $chk;
    if(isset($_POST['wphw_submit'])){
            wphw_opt();
    }
    function wphw_opt(){
        $number = $_POST['textname'];
        global $chk;
        if( get_option('text') != trim($number)){
            $chk = update_option( 'text', trim($number));
        }
    }
?>
<div class="wrap">
  <div id="icon-options-general" class="icon32"> <br>
  </div>
  <h2>Input Number</h2>
  <?php if(isset($_POST['wphw_submit']) && $chk):?>
  <div id="message" class="updated below-h2">
    <p>Content updated successfully</p>
  </div>
  <?php endif;?>
  <div class="metabox-holder">
    <div class="postbox">
      <h3><strong>Enter number and click on save button.</strong></h3>
      <form method="post" action="">
        <table class="form-table">
          <tr>
            <th scope="row">Enter Number</th>
            <td><input type="number" name="textname" 
value="<?php echo get_option('text');?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <td style="padding-top:10px;  padding-bottom:10px;">
<input type="submit" name="wphw_submit" value="Save changes" class="button-primary" />
</td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>