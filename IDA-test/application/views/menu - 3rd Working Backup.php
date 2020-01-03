<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
  <div class="brand-sidebar">
    <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/logo.png" id='navlogo' style="width: auto; height: 40px; margin-top: -10px"></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
  </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow leftmenu" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <?php
        #print_r($menu);
          $keys = array_keys($menu);
          foreach($keys as $row){
        ?>
        
            



<?php if(strpos($menu[$row]->permissions, $this->ion_auth->user()->row()->first_name) !== false) {  ?> 
  <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)" ><i class="material-icons"><?php echo $menu[$row]->icon ?></i><span class="menu-title" data-i18n=""><?php echo $menu[$row]->title ?></span></a>
    <div class="collapsible-body">
      <ul class="collapsible collapsible-sub" data-collapsible="accordion">
        <?php foreach($menu[$row]->sub as $r){
          if(!$r->is_group){
          ?>


        <?php if(strpos($r->permissions, $this->ion_auth->user()->row()->first_name) !== false) {  ?>     
        <li class=""><a href="JavaScript:void(0)" onclick="return changeSrc('<?php echo $r->title ?>','','<?php echo $r->link?>')"><?php echo $r->title?></a></li>
        <?php } ?>


      <?php  }
        else{
      ?>



      <?php if(strpos($r->permissions, $this->ion_auth->user()->row()->first_name) !== false) {  ?>
      <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)" ><i class="material-icons"><?php echo $r->icon ?></i><span class="menu-title" data-i18n=""><?php echo $r->title?></span></a>
      <?php } ?>
        <div class="collapsible-body">
          <ul class="collapsible collapsible-sub" data-collapsible="accordion">
            <?php if(isset($menu[$row]->sub[$r->id]->sub)){foreach($menu[$row]->sub[$r->id]->sub as $r1){ ?>






              <?php if(strpos($r1->permissions, $this->ion_auth->user()->row()->first_name) !== false) {  ?>
              <li class=""><a  href="JavaScript:void(0)" onclick="return changeSrc('<?php echo $r1->title ?>','','<?php echo $r1->link?>')"><?php echo $r1->title?></a></li>
              <?php } ?>







            <?php }} ?>
          </ul>
        </div>
      </li>
    <?php } } ?>
      </ul>
    </div>
  </li>
<?php } ?>







        <?php }  ?>
      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
<!-- END: SideNav-->



    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-light-blue-cyan"></div>
        <div class="col s12">
          <div class="container">
            <!-- Current balance & total transactions cards-->
<div class="row mt-2">
  <div class="col s12 m12 l12 animate fadeRight">
     <!-- Total Transaction -->
     <div class="card">
        <div class="card-content" id='container'>
          <h4 class="card-title mb-0"><span id='rptTitle'>Dashboard </span><span id="icon-dash" class='float-right'></span></h4>
           <div class="total-transaction-container">
