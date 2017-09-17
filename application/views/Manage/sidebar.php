<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>NPIC Sport Admin</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">Navigate</li>
      <!-- Optionally, you can add icons to the links -->
      <li><a href="<?php echo site_url('adm');?>"> <i class="fa fa-home"></i> <span>Dashboard</span></a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-trophy"></i> <span>Tournament</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('adm/tournament/create');?>">Create</a></li>
          <li><a href="<?php echo site_url('adm/tournament/manage');?>">Manage</a></li>
          <li><a href="<?php echo site_url('adm/tournament/history');?>">History & Result</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-calendar-o"></i> <span>Schedule</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <?php if($tnumrows>0) 
          { 
            if($team_count>1)
            {
              if(isset($mtour) && $tnumrows > 1) {
            ?>
            <li><a href="#" data-toggle="modal" data-target="#tournament_found">Create Schedule</a></li>
          <?php
              } else {
          ?>
             <li><a href="#" data-toggle="modal" data-target="#sch_found">Create Schedule</a></li>
          <?php
              }
            }
            else
            {
          ?>
            <li><a href="#" data-toggle="modal" data-target="#noteam">Create Schedule</a></li>
          <?php
            } 
          } else { ?>
          <li><a href="#" data-toggle="modal" data-target="#tournament_notfound">Create Schedule</a></li>
          <?php } ?>
          <?php if($schedule>0) { ?>
          <li><a href="#" data-toggle="modal" data-target="#sch_found">Manage Schedule</a></li>
          <?php } else { ?>
          <li><a href="#" data-toggle="modal" data-target="#sch_notfound">Manage Schedule</a></li>
          <?php } ?>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-bullhorn"></i> <span>Timeline</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('adm/timeline/create');?>">Create Post</a></li>
          <li><a href="<?php echo site_url('adm/timeline/manage');?>">Manage Post</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-check"></i> <span>Manage Team</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('adm/team/new');?>">Register Team</a></li>
          <li><a href="<?php echo site_url('adm/manage/team');?>">Validate</a></li>
        </ul>
      </li> 
      <li class="treeview">
        <a href="#"><i class="fa fa-comments"></i> <span>Message</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('adm/message/broadcast');?>">Create Broadcast Message</a></li>
          <li><a href="<?php echo site_url('adm/message/manage');?>">Manage Message</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-clock-o"></i> <span>Manage Match</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('adm/match/update');?>">Update Result</a></li>
        </ul>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>