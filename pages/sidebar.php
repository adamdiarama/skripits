
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel" style="height:80px;">
        <div class="pull-left info">
          <img src="../dist/img/userimage.png" class="img-circle" alt="User Image" style="width:50px; margin-left:-50px;">
          <p style="margin-top:-40px; margin-left:20px;"><?php echo $_SESSION['username']; ?></p>
          <p style="margin-left:20px;"><small><a href="#"><i class="fa fa-circle text-success"></i> Online</a></small></p>
        </div>
      </div>


      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li><a href="pelajaran.php" class="treeview"><i class="fa fa-book"></i> <span>Pelajaran</span></a></li>
        <li class="treeview">
          <a href="materi.php?id=1">
            <i class="fa fa-files-o"></i>
            <span>Materi</span>
          </a>
        </li>
        <li class="treeview">
          <a href="latihan.php">
            <i class="fa fa-laptop"></i>
            <span>Latihan</span>
          </a>
        </li>
        <li class="treeview">
          <a href="evaluasi.php">
            <i class="fa fa-edit"></i> <span>Evaluasi</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<script type="text/javascript">

$(document).ready(function(){
    $('.sidebar-menu li').click(function(event){
        //remove all pre-existing active classes
        $('.active').removeClass('active');

        //add the active class to the link we clicked
        $(this).addClass('active');

        //Load the content
        //e.g.
        //load the page that the link was pointing to
        $('#content').load($(this).find(a).attr('href'));      

        event.preventDefault();
    });
});
</script>