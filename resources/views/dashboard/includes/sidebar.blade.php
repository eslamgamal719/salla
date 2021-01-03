<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src="{{asset('assets/admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{auth('admin')->user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> اونلاين</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="بحث ...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                        class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->


        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">الرئيسيه</li>

            <li class="active treeview">
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i> <span>الرئيسيه</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>المدونه</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('blogs.index') }}"><i class="fa fa-file"></i>المدونات</a></li>
                    <li><a href="{{ route('blogs.create') }}"><i class="fa fa-plus"></i> انشاء مدونه جديده</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>الباقات</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('packages.index') }}"><i class="fa fa-file"></i>الباقات</a></li>
                    <li><a href="{{ route('packages.create') }}"><i class="fa fa-plus"></i> انشاء باقه جديده</a></li>
                </ul>
            </li>


        </ul>


    </section>
    <!-- /.sidebar -->
</aside>
