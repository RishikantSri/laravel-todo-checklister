<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="index.html">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="../images/logo-dark.png" alt="">
                        <h3>Admin</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li>
                <a href="index.html">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>


            @if(auth()->user()->is_admin)
            <li class="header ">
                <h4>{{ __("Manage Checklist") }}</h4>
            </li>
            <li class="header nav-small-cap">Groups</li>

            @foreach(\App\Models\ChecklistGroup::with('checklists')->get() as $group)
            <li class="treeview">
                <a href="#">
                    <i data-feather="grid"></i>
                    <span>{{ $group->name }}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="header nav-small-cap">
                        <a class="c-sidebar-nav-link" href="{{ route('admin.checklist_groups.edit',$group->id)}}"><i
                                class="si-pencil si"></i>Edit Group</a>
                    </li>

                    @foreach($group->checklists as $checklist)
                    <li><a href="{{ route('admin.checklist_groups.checklists.edit',[$group,$checklist]) }}"><i class="ti-more"></i> {{ $checklist->name }}</a></li>
                    @endforeach
                    <li>
                        <a href="{{ route('admin.checklist_groups.checklists.create', $group) }}">
                            <i data-feather="plus"></i>
                            <span>{{ __("Create Checklist") }}</span>

                        </a>
                    </li>
                </ul>
            </li>
            <hr />
            @endforeach
            <li>
                <a href="{{ route('admin.checklist_groups.create') }}">
                    <i data-feather="plus"></i>
                    <span>{{ __("Create Checklist Group") }}</span>

                </a>
            </li>

            @endif
            <li class="header nav-small-cap">EXTRA</li>



            <li>
                
                 <a class="c-sidebar-nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  <i data-feather="lock"></i>
                {{ __("Logout") }}</a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </li>

        </ul>
    </section>

    <div class="sidebar-footer">
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings"
            aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                class="ti-email"></i></a>
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                class="ti-lock"></i></a>
    </div>
</aside>