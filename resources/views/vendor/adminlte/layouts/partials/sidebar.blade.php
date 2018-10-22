<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p style="overflow: hidden;text-overflow: ellipsis;max-width: 160px;" data-toggle="tooltip" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            {{--<li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Products</span></a></li>--}}
{{--            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>--}}
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Products</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/products">Manage Product</a></li>
                    <li><a href="/category-products">Category Product</a></li>
                    <li><a href="/status-products">Status Product</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Manage RBAC</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/permissions">Permissions</a></li>
                    <li><a href="/roles">Roles</a></li>
                    <li><a href="/users">Users</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
