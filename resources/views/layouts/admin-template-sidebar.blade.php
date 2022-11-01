<!-- Main sidebar -->
<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li class="{{Request::segment(2) ==='dashboard' ? 'active' : ''}}"><a href="{!! URL::to('admin/dashboard') !!}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    {{-- <li class="{{Request::segment(2) ==='service' ? 'active' : ''}}"><a href="{!! URL::to('admin/service') !!}"><i class="icon-newspaper2"></i> <span>Service</span></a></li> --}}
                    {{-- <li class="{{Request::segment(2) ==='appointment' ? 'active' : ''}}"><a href="{!! URL::to('admin/appointment') !!}"><i class="icon-newspaper2"></i> <span>appointment</span></a></li> --}}
                    {{-- <li class="{{Request::segment(2) ==='contact' ? 'active' : ''}}"><a href="{!! URL::to('admin/contact') !!}"><i class="icon-newspaper2"></i> <span>contact   </span></a></li> --}}
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->
