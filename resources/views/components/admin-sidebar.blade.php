<div class="admin-sidebar">
    <li>
        <a href="{{ route('admin.dashboard') }}">
            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
    </li>

    <li class="has-sub">
        <a href="#" class="js-arrow">
            <i class="fas fa-tags"></i>
            Categories
            <i style="float: right" class="m-0 d-block mt-1 fa fa-chevron-down"></i>
        </a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
            <li>
                <a href="{{ route('admin.categories.index') }}">All Categories</a>
            </li>
            <li>
                <a href="{{ route('admin.categories.create') }}">Add New Category</a>
            </li>
        </ul>
    </li>

    <li class="has-sub">
        <a href="#" class="js-arrow">
            <i class="fas fa-bullhorn"></i>
            Advertisements
            <i style="float: right" class="m-0 d-block mt-1 fa fa-chevron-down"></i>
        </a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
            <li>
                <a href="index.html">All Advertisements</a>
            </li>
            <li>
                <a href="index2.html">Add New Advertisement</a>
            </li>
        </ul>
    </li>

    <li class="has-sub">
        <a href="#" class="js-arrow">
            <i class="fas fa-lock"></i>
            Roles
            <i style="float: right" class="m-0 d-block mt-1 fa fa-chevron-down"></i>
        </a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
            <li>
                <a href="index.html">All Roles</a>
            </li>
            <li>
                <a href="index2.html">Add New Role</a>
            </li>
            <li>
                <a href="index2.html">Premissions</a>
            </li>
        </ul>
    </li>

    <li>
        <a class="d-flex align-items-center" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-heart"></i>Services</a>
    </li>
    <li>
        <a class="d-flex align-items-center" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-file"></i>Reports</a>
    </li>
    <li>
        <a class="d-flex align-items-center" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-dollar-sign"></i>Payments</a>
    </li>
</div>
