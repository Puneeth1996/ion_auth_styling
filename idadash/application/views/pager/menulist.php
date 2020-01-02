<?php
#print_r($menu);
  $keys = array_keys($menu);
  foreach($keys as $row){
?>
    <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)" ><i class="material-icons"><?php echo $menu[$row]->icon ?></i><span class="menu-title" data-i18n=""><?php echo $menu[$row]->title ?></span></a>
      <div class="collapsible-body">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
          <?php foreach($menu[$row]->sub as $r){
            if(!$r->is_group){
            ?>
          <li class=""><a href="JavaScript:void(0)" onclick="return changeSrc('<?php echo $r->title ?>','','<?php echo $r->link?>')"><?php echo $r->title?></a></li>
        <?php  }
          else{
        ?>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)" ><i class="material-icons"><?php echo $r->icon ?></i><span class="menu-title" data-i18n=""><?php echo $r->title?></span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <?php foreach($menu[$row]->sub[$r->id]->sub as $r1){ ?>
                <li class=""><a  href="JavaScript:void(0)" onclick="return changeSrc('<?php echo $r1->title ?>','','<?php echo $r1->link?>')"><?php echo $r1->title?></a></li>
              <?php } ?>
            </ul>
          </div>
        </li>
      <?php } } ?>
        </ul>
      </div>
    </li>
<?php }  ?>
