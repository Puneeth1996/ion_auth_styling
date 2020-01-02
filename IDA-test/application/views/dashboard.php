<iframe width="100%" height="600" id='reportFrame' src="<?php echo $src;?>" frameborder="0" allowFullScreen="true"></iframe>
<script type="text/javascript">
  $(document).ready(function(data)
    {
      $("#icon-dash").html('<i class="material-icons" onclick="setFav()">favorite_border</i><i class="material-icons" onclick="fullscreen()">fullscreen</i>');
    }
  );
  function setFav(){
    $.post("<?php echo site_url('user/setFav')?>",{'src':$("#reportFrame").attr('src')},function(data){
      alert(data);
    });
  }
</script>
