<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
            <!-- Sidebar user panel -->

            <!-- search form -->

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <!-- <li class="active treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                                <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                        <a href="#">
                            <i class="fa fa-folder"></i> <span>Examples</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                        </ul>
                     </li> -->

                    <li><a href=""><i class="fa fa-dashboard"></i> <span>DASHBOARD</span></a></li>
                    <li><a href="{{ route('admin.pelatih.index') }}"><i class="fa fa-files-o"></i> <span>DATA PELATIH</span></a></li>
                    <li><a href="{{ route('admin.kuda.index') }}"><i class="fa fa-folder"></i> <span>DATA KUDA</span></a></li>
                    {{--  <li><a href="{{ route('admin.peserta.index') }}"><i class="fa fa-user"></i> <span>PESERTA PERDATANG</span></a></li>
                    <li><a href="{{ route('admin.peserta.index') }}"><i class="fa fa-user"></i> <span>PESERTA PERBULAN</span></a></li>  --}}

                    {{-- <li><a href="{{ route('admin.food.index') }}"><i class="fa fa-user"></i> <span>MENU MAKANAN</span></a></li>
                    <li><a href="{{ route('admin.drink.index') }}"><i class="fa fa-book"></i> <span>MENU MINUMAN</span></a></li>
                    <li><a href="{{ route('admin.visitor.index') }}"><i class="fa fa-book"></i> <span>DATA PENGUNJUNG</span></a></li> --}}

                    <li class="treeview">
                        <a href="#">
                          <i class="fa fa-table"></i>
                          <span>DATA LESSON</span>
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{ route('admin.pesertaperdatang.index') }}"><i class="fa fa-user"></i> PESERTA PER-DATANG </a></li>
                          <li><a href="{{ route('admin.peserta.index') }}"><i class="fa fa-user"></i> PESERTA PER-BULAN</a></li>
                        </ul>
                      </li>

                      <li class="treeview">
                        <a href="#">
                          <i class="fa fa-book"></i>
                          <span>DATA LAPORAN</span>
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href=""><i class="fa fa-circle-o"></i> DATA SEKALI PERTEMUAN </a></li>
                          <li><a href=""><i class="fa fa-circle-o"></i> DATA PERBULAN</a></li>
                        </ul>
                      </li>

                <li class="header">LABELS</li>
            </ul>
    </section>
    <!-- /.sidebar -->
  </aside>























