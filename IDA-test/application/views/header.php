<html class="loading" data-textdirection="ltr" lang="en"><!-- BEGIN: Head--><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="IDA Dashboard">
    <meta name="keywords" content="dashboard, IDA Automation, Powerbi, powerapps, powerplatform,  analytic dashboard">
    <title>IDA Reports Dashboard</title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url() ?>assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url() ?>assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url() ?>assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url() ?>assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url() ?>assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ?>assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url() ?>assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() ?>assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url() ?>assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url() ?>assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="<?php echo base_url() ?>assets/icon.css" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/animate.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/materialize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/custom.css">
    <script type="text/javascript">
    function changeSrc(src,rpname,url){
      //document.getElementById('reportFrame').src = "https://app.powerbi.com/reportEmbed?"+url+"&navContentPaneEnabled=false&pageName="+rpname;
      document.getElementById('reportFrame').src = "https://app.powerbi.com/reportEmbed?"+url;
      document.getElementById('rptTitle').innerHTML = src
      return false;
    }
    </script>
    <script src="<?php echo base_url() ?>assets/vendors.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/custom-script.js"></script>
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-rloender-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns" data-open="click" data-menu="vertical-modern-menu" data-col="2-columns" style="">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed">
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark no-shadow gradient-45deg-light-blue-cyan">
          <div align="left" class="col sm6 " id="welcome" style="float: left; margin-left: 270px">
              Welcome <?php echo $this->ion_auth->user()->row()->first_name;?> -  <?php echo $this->ion_auth->user()->row()->last_name;?>

              <!-- <?php if($this->ion_auth->in_group('IDA')){?>
                  IDA 
              <?php }?> -->
              <?php if($this->ion_auth->is_admin()){?>
                  Admin
              <?php }?>
              <?php
              
              // $data['users'] = $this->ion_auth->users()->result();
              // foreach ($this->data['users'] as $k => $user)
              // {
              //   $this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
              //   echo $this->data['users'][$k]->groups;
              // }


              // echo ($this->ion_auth->get_users_groups()->row()->id);
              // echo ($this->ion_auth->get_users_groups(3));


              // $this->data['users'] = $this->ion_auth->users()->result();

              
              // foreach ($this->data['users'] as $k => $user)
              // {	  
              //     echo($k);
              //     $this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
              //     $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
              //     print($user_groups);
              // }
              // $user_in_group = $this->ion_auth->get_users_groups(); 


              // foreach($this->ion_auth->groups()->result() as $k => $cur)
              // {
              //     echo $cur->user_id;
              //     echo ',';
              // }
                
              // $group_id = 2;
              // $group = $this->ion_auth->group($group_id)->result();


              // print($group);
              ?>
          </div>
          <div align="right" class="col sm6 " style="margin-right: 40px; float:right;">
            <a href="<?php echo site_url('user/profile')?>">Profile</a> | <a href="<?php echo site_url('auth/logout')?>">Logout</a>
          </div>

        </nav>
      </div>
    </header>
    <!-- END: Header-->
