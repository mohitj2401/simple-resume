<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div>
        <div class="logo-wrapper">
            {{-- <a href="{{ route('admin.dashboard') }}"><img class="img-fluid"
                    src="../assets/images/logo/logo_light.png" alt=""></a> --}}
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar">
                <svg class="stroke-icon sidebar-toggle status_toggle middle">
                    <use href="../assets/svg/icon-sprite.svg#toggle-icon"></use>
                </svg>
                <svg class="fill-icon sidebar-toggle status_toggle middle">
                    <use href="../assets/svg/icon-sprite.svg#fill-toggle-icon"></use>
                </svg>
            </div>
        </div>
        <div class="logo-icon-wrapper">
            {{-- <a href="{{ route('admin.dashboard') }}"><img class="img-fluid"
                    src="../assets/images/logo/logo-icon.png" alt=""></a> --}}
        </div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid"
                                src="../assets/images/logo/logo-icon.png" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">General</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link sidebar-title link-nav @if ($page == 'Dashboard') active @endif "
                            href="{{ route('admin.dashboard') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                            </svg><span>Dashboard</span>
                        </a>
                    </li>
                    {{-- <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link sidebar-title link-nav  @if ($page === 'Categories') active @endif"
                            href="{{ route('categories.index') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-layout') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-layout') }}"> </use>
                            </svg><span>Categories</span></a>
                    </li> --}}
                    @if (checkPermission('Role Management'))
                        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title  @if ($page == 'Permission') active @endif"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-editors') }}"></use>
                                </svg>
                                <svg class="fill-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#fill-editors') }}"></use>
                                </svg><span>Role Management</span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ route('roles.index') }}"
                                        class=" @if ($page == 'Role') active @endif">Role</a></li>
                                <li><a href="{{ route('permissions.index') }}"
                                        class=" @if ($page == 'Permission') active @endif">Permission</a></li>

                            </ul>
                        </li>
                    @endif

                    @if (checkPermission('Resume Management'))
                        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                            <a class="sidebar-link sidebar-title active " href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-layout') }}"></use>
                                </svg>
                                <svg class="fill-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#fill-layout') }}"></use>
                                </svg><span>Resume Management</span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ route('profile.edit') }}" class=" ">Profile</a></li>
                                <li><a href="{{ route('skills.index') }}" class=" ">Skills</a></li>
                                <li><a href="{{ route('projects.index') }}" class="">Project</a></li>
                                <li><a href="{{ route('experiences.index') }}" class=" ">Experience</a></li>
                                <li><a href="{{ route('education.index') }}" class=" ">Education</a></li>
                                <li><a href="{{ route('resumes.index') }}" class=" ">Resume</a></li>


                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
