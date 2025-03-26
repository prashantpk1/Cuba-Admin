<style>
    .sidebar-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .chevron-right {
        margin-left: auto;
        /* This ensures the icon moves to the right */
    }
</style>
<div>
    <div class="logo-wrapper"><a href="{{ route('dashboard') }}"><img class="img-fluid for-light"
                src="{{ static_asset('admin/assets/images/logo/logo.png') }}" alt=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        <div class="toggle-sidebar"></div>
    </div>
    <div class="logo-icon-wrapper"><a href="{{ route('dashboard') }}"><img class="img-fluid"
                src="{{ static_asset('admin/assets/images/logo/logo-icon.png') }}" alt=""></a></div>
    <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn"><a href="{{ route('dashboard') }}"></a>
                    <div class="mobile-back text-end"><span>{{ translate('back') }}</span><i
                            class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title  link-nav  @if ($url == 'dashboard') badge-light-primary @endif"
                        href="{{ route('dashboard') }}">
                        <i data-feather="home"></i>
                        <span>{{ translate('dashboard') }}</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title  link-nav   @if ($url == 'language.index' || $url == 'language.create' || $url == 'language.edit' || $url == 'language.show') badge-light-primary @endif"
                        href="{{ route('language.index') }}">
                        <i data-feather="settings"></i>
                        <span>{{ translate('languages') }}</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title  link-nav   @if (
                        $url == 'translation.index' ||
                            $url == 'translation.create' ||
                            $url == 'translation.edit' ||
                            $url == 'translation.show') badge-light-primary @endif"
                        href="{{ route('translation.index') }}">
                        <i data-feather="type"></i>
                        <span>{{ translate('translations') }}</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title  link-nav   @if ($url == 'sub-admin.index' || $url == 'sub-admin.create' || $url == 'sub-admin.edit' || $url == 'sub-admin.show') badge-light-primary @endif"
                        href="{{ route('sub-admin.index') }}">
                        <i data-feather="users"></i>
                        <span>{{ translate('sub-admins') }}</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title  link-nav   @if ($url == 'module.index' || $url == 'module.create' || $url == 'module.edit' || $url == 'module.show') badge-light-primary @endif"
                        href="{{ route('module.index') }}">
                        <i data-feather="list"></i>
                        <span>{{ translate('modules') }}</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title  link-nav   @if ($url == 'permission.index' || $url == 'permission.create' || $url == 'permission.edit' || $url == 'permission.show') badge-light-primary @endif"
                        href="{{ route('permission.index') }}">
                        <i data-feather="list"></i>
                        <span>{{ translate('permissions') }}</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title  link-nav   @if ($url == 'role.index' || $url == 'role.create' || $url == 'role.edit' || $url == 'role.show') badge-light-primary @endif"
                        href="{{ route('role.index') }}">
                        <i data-feather="briefcase"></i>
                        <span>{{ translate('roles') }}</span>
                    </a>
                </li>

                @if (auth()->user()->id == 1)
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title  link-nav   @if ($url == 'role.index' || $url == 'role.create' || $url == 'role.edit') badge-light-primary @endif"
                            href="{{ route('role.index') }}">
                            <i data-feather="briefcase"></i>
                            <span>{{ translate('Roles') }}</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title  link-nav   @if ($url == 'language.index' || $url == 'language.create' || $url == 'language.edit') badge-light-primary @endif"
                            href="{{ route('language.index') }}">
                            <i data-feather="briefcase"></i>
                            <span>{{ translate('Languages') }}</span>
                        </a>
                    </li>
                @endif
                @if (auth()->user()->can('subadmin-list'))
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title  link-nav   @if ($url == 'subadmin.index' || $url == 'subadmin.create' || $url == 'subadmin.edit') badge-light-primary @endif"
                            href="{{ route('subadmin.index') }}">
                            <i data-feather="users"></i>
                            <span>{{ translate('Sub Admin') }}</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
</div>
