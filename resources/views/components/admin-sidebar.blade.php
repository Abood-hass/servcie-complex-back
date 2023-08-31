<div class="admin-sidebar lang-body">
    <li>
        <a href="{{ route('admin.dashboard') }}">
            <i class="fas fa-tachometer-alt m-0 px-2"></i>{{ __('adminPage.dashboard') }}</a>
    </li>

    <li class="has-sub">
        <a href="#" class="js-arrow d-flex justify-content-between align-items-center">
            <span>
                <i class="fas fa-tags m-0 px-2"></i>{{ __('adminPage.categories') }}
            </span>
            <i style="float: right" class="m-0 d-block mt-1 fa fa-chevron-down"></i>
        </a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
            <li>
                <a href="{{ route('admin.categories.index') }}">{{ __('adminPage.all-categories') }}</a>
            </li>
            <li>
                <a href="{{ route('admin.categories.create') }}">{{ __('adminPage.add-new-category') }}</a>
            </li>
        </ul>
    </li>

    <li class="has-sub">
        <a href="#" class="js-arrow d-flex justify-content-between align-items-center">
            <span>
                <i class="fas fa-bullhorn m-0 px-2"></i>{{ __('adminPage.advertisements') }}
            </span>
            <i style="float: right" class="m-0 d-block mt-1 fa fa-chevron-down"></i>
        </a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
            <li>
                <a href="index.html">{{ __('adminPage.all-advertisements') }}</a>
            </li>
            <li>
                <a href="index2.html">{{ __('adminPage.add-new-advertisement') }}</a>
            </li>
        </ul>
    </li>

    <li class="has-sub">
        <a href="#" class="js-arrow d-flex justify-content-between align-items-center">
            <span>
                <i class="fas fa-lock m-0 px-2"></i>{{ __('adminPage.roles') }}
            </span>
            <i style="float: right" class="m-0 d-block mt-1 fa fa-chevron-down"></i>
        </a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
            <li>
                <a href="index.html">{{ __('adminPage.all-roles') }}</a>
            </li>
            <li>
                <a href="index2.html">{{ __('adminPage.add-new-role') }}</a>
            </li>
            <li>
                <a href="index2.html">{{ __('adminPage.premissions') }}</a>
            </li>
        </ul>
    </li>

    <li>
        <a href="{{ route('admin.dashboard') }}">
            <i class="fas fa-heart m-0" style="padding-left: 6px;padding-right: 6px;"></i>{{ __('adminPage.services') }}
        </a>
    </li>
    <li>
        <a href="{{ route('admin.dashboard') }}">
            <i class="fas fa-file m-0 px-2"></i>{{ __('adminPage.reports') }}</a>
    </li>
    <li>
        <a href="{{ route('admin.dashboard') }}">
            <i class="fas fa-dollar-sign m-0 px-2"></i>{{ __('adminPage.payments') }}</a>
    </li>
</div>
