<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
  <div class="brand-sidebar">
    <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/logo.png" id='navlogo' style="width: auto; height: 40px; margin-top: -10px"></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
  </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow leftmenu" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="bold"><a class="waves-effect waves-cyan " href="<?php echo base_url()?>">
          <i class="material-icons">dashboard</i><span class="menu-title" data-i18n="Support">Dashboard</span></a>
          
        </li>
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
          <h4 class="card-title mb-0"><span id='rptTitle'>Financial Summary </span><i class="material-icons float-right" onclick="fullscreen()">fullscreen</i></h4>
           <div class="total-transaction-container">
