<div id="change-password" style="display: block;" class="active">
        <div class="card-panel">
          <form class="paaswordvalidate" novalidate="novalidate">
            <div class="row">
              <div class="col s12">
                <div class="input-field">
                  <input id="oldpswd" name="oldpswd" type="password" data-error=".errorTxt4">
                  <label for="oldpswd" class="">Old Password</label>
                  <small class="errorTxt4"></small>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="newpswd" name="newpswd" type="password" data-error=".errorTxt5">
                  <label for="newpswd">New Password</label>
                  <small class="errorTxt5"></small>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="repswd" type="password" name="repswd" data-error=".errorTxt6">
                  <label for="repswd">Retype new Password</label>
                  <small class="errorTxt6"></small>
                </div>
              </div>
              <div class="col s12 display-flex justify-content-end form-action">
                <button type="button" onclick='return changePassword()' class="btn indigo waves-effect waves-light mr-1">Save changes</button>
                <button type="reset" class="btn btn-light-pink waves-effect waves-light">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
<script type="text/javascript">
$(document).ready(
  function(data){
    $("#rptTitle").html("Change Password");
  }
);
function changePassword(){
  $.post("<?php echo site_url('user/changePassword')?>",{'old':$("#oldpswd").val(),'new':$("#newpswd").val(), 'rep':$("#repswd").val()},function(data){
    alert(data);
  });
  return false;
}
</script>
