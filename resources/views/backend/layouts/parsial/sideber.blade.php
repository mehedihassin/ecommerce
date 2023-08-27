<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard_view') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Categoris</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('category_create') }}">
                        <i class="bi bi-circle"></i><span>Create_Categori</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('category_index') }}">
                        <i class="bi bi-circle"></i><span>Categori_List</span>
                    </a>
                </li>


            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('product_create') }}">
                        <i class="bi bi-circle"></i><span>Product_create</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('product_index') }}">
                        <i class="bi bi-circle"></i><span>Product_list</span>
                    </a>
                </li>

            </ul>
        </li>

        <!-- End Forms Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Order List</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('order_list') }}">
                        <i class="bi bi-circle"></i><span>Show Castomer Order List</span>
                    </a>
                </li>


            </ul>
        </li>

    </ul>

</aside>
