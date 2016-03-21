<?php ?>

      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
  
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU NAVIGATION</li>
            <li class="active treeview">
              <a href="../../index.php">
                <i class="fa fa-home"></i> <span>Home</span>
              </a>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-gear"></i>
                <span>Maintenance</span>            <!--  MAINTENANCE  -->
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="../cust/cust.php"><i class="fa fa-circle-o"></i> Customer </a>
                </li>                
                <li><a href="../emp/emp.php"><i class="fa fa-circle-o"></i>Employee</a></li>
                <li><a href="../ch/ch.php"><i class="fa fa-circle-o"></i> Charges </a></li>
                <li><a href="../cont/cont.php"><i class="fa fa-circle-o"></i> Containers </a></li> 
                <li><a href="../tr/tr.php"><i class="fa fa-circle-o"></i> Trucks </a></li>
                <li><a href="../disc/disc.php"><i class="fa fa-circle-o"></i> Discounts </a></li>   
              </ul>
            </li>
            
            <li class="treeview">
              <a href="../../trans/shp/shp.php">
                <i class="fa fa-truck"></i>
                <span>Transaction</span>    
              </a>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Reports</span>    
              </a>
              <ul class="treeview-menu">
                  <li><a href="../../trans/rm/rm.php"><i class="fa fa-circle-o"></i> Daily Remmitance Report </a></li>
                <li><a href="../../trans/ar/ar.php"><i class="fa fa-circle-o"></i> Accounts Receivable </a></li>                                                                                                                                 
              </ul>
            </li>

            <?php if($usertype=="root") { ?>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-wrench"></i>
                <span>Utilities</span>    
              </a>
              <ul class="treeview-menu">
                <li><a href="../../maintenance/at/at.php"><i class="fa fa-circle-o"></i> Audit Trails</a></li>
                <li><a href="../../maintenance/lb/lb.php"><i class="fa fa-circle-o"></i> Local Backup</a></li>                                                                                                                                                                   
              </ul>
            </li>
            <?php } ?>
        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

<?php ?>