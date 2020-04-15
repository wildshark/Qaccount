<?php

function head($t){

    return"
        <!-- Required meta tags -->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <title>{$t['title']}</title>
        <!-- base:css -->
        <link rel='stylesheet' href='vendors/typicons/typicons.css'>
        <link rel='stylesheet' href='vendors/css/vendor.bundle.base.css'>
        <!-- endinject -->
        <!-- plugin css for this page -->
        <link rel='stylesheet' href='vendors/datatables.net-bs4/dataTables.bootstrap4.css'>
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel='stylesheet' href='css/vertical-layout-dark/style.css'>
        <!-- endinject -->
        <link rel='shortcut icon' href='images/favicon.png' />
    ";
}

function head_form($t){
    return"
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>{$t['title']}</title>
    <!-- base:css -->
    <link rel='stylesheet' href='vendors/typicons/typicons.css'>
    <link rel='stylesheet' href='vendors/css/vendor.bundle.base.css'>
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel='stylesheet' href='vendors/jquery-toast-plugin/jquery.toast.min.css'>
    <link rel='stylesheet' href='vendors/select2/select2.min.css'>
    <link rel='stylesheet' href='vendors/select2-bootstrap-theme/select2-bootstrap.min.css'>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel='stylesheet' href='css/vertical-layout-dark/style.css'>
    <!-- endinject -->
    <link rel='shortcut icon' href='images/favicon.png' />
    ";
}

function side_menu(){

    return"
    <button type='button' class='btn btn-success btn-fw' onclick='showSuccessToast()'>Success</button>
        <li class='nav-item'>
            <a class='nav-link' href='?_route=dashboard'>
              <i class='typcn typcn-device-desktop menu-icon'></i>
              <span class='menu-title'>Dashboard</span>
            </a>  
        </li>
        <li class='nav-item'>
            <a class='nav-link' data-toggle='collapse' href='#ui-investment' aria-expanded='false' aria-controls='ui-basic'>
              <i class='typcn typcn-document-text menu-icon'></i>
              <span class='menu-title'>Investment</span>
              <i class='menu-arrow'></i>
            </a>
            <div class='collapse' id='ui-investment'>
              <ul class='nav flex-column sub-menu'>
                <li class='nav-item'> <a class='nav-link' data-toggle='modal' data-target='#m-investment' href='#'>Capital & Withdraws</a></li>
                <li class='nav-item'> <a class='nav-link' href='?_route=inv-statement'>Statement</a></li>
              </ul>
            </div>
        </li>
        <li class='nav-item'>
            <a class='nav-link' data-toggle='collapse' href='#ui-income' aria-expanded='false' aria-controls='ui-basic'>
              <i class='typcn typcn-document-text menu-icon'></i>
              <span class='menu-title'>Income</span>
              <i class='menu-arrow'></i>
            </a>
            <div class='collapse' id='ui-income'>
              <ul class='nav flex-column sub-menu'>
                <li class='nav-item'> <a class='nav-link' data-toggle='modal' data-target='#m-income' href='#'>New Income</a></li>
                <li class='nav-item'> <a class='nav-link' href='?_route=inc-statement'>Statement</a></li>
              </ul>
            </div>
        </li>
        <li class='nav-item'>
            <a class='nav-link' data-toggle='collapse' href='#ui-expenses' aria-expanded='false' aria-controls='ui-basic'>
              <i class='typcn typcn-document-text menu-icon'></i>
              <span class='menu-title'>Expenses</span>
              <i class='menu-arrow'></i>
            </a>
            <div class='collapse' id='ui-expenses'>
              <ul class='nav flex-column sub-menu'>
                <li class='nav-item'> <a class='nav-link' href='#' data-toggle='modal' data-target='#m-expennses'>New Expenses</a></li>
                <li class='nav-item'> <a class='nav-link' href='?_route=exp-statement'>Statement</a></li>
              </ul>
            </div>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='?_route=cash-book'>
              <i class='typcn typcn-archive menu-icon'></i>
              <span class='menu-title'>Cash Book</span>
            </a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='?_route=bank-book'>
              <i class='typcn typcn-archive menu-icon'></i>
              <span class='menu-title'>Bank Book</span>
            </a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='?_route=general-ledger'>
              <i class='typcn typcn-archive menu-icon'></i>
              <span class='menu-title'>General Ledger</span>
            </a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' data-toggle='collapse' href='#ui-basic' aria-expanded='false' aria-controls='ui-basic'>
              <i class='typcn typcn-document-text menu-icon'></i>
              <span class='menu-title'>Sales</span>
              <i class='menu-arrow'></i>
            </a>
            <div class='collapse' id='ui-basic'>
              <ul class='nav flex-column sub-menu'>
              <li class='nav-item'> <a class='nav-link' href='?_route=order'>Order</a></li>
                <li class='nav-item'> <a class='nav-link' href='?_route=billing'>Billing</a></li>
                <li class='nav-item'> <a class='nav-link' href='?_route=product'>product</a></li>
                <li class='nav-item'> <a class='nav-link' href='?_route=sales-report'>sales Report</a></li>
              </ul>
            </div>
        </li>
        <li class='nav-item'>
            <a class='nav-link' data-toggle='collapse' href='#ui-advanced' aria-expanded='false' aria-controls='ui-advanced'>
              <i class='typcn typcn-cog-outline menu-icon'></i>
              <span class='menu-title'>Setup</span>
              <i class='menu-arrow'></i>
            </a>
            <div class='collapse' id='ui-advanced'>
              <ul class='nav flex-column sub-menu'>
                <li class='nav-item'> <a class='nav-link' href='pages/ui-features/dragula.html'>Income & Expenses</a></li>
                <li class='nav-item'> <a class='nav-link' href='pages/ui-features/clipboard.html'>Chart of Account</a></li>
                <li class='nav-item'> <a class='nav-link' href='pages/ui-features/context-menu.html'>Context menu</a></li>
                <li class='nav-item'> <a class='nav-link' href='pages/ui-features/slider.html'>Sliders</a></li>
                <li class='nav-item'> <a class='nav-link' href='pages/ui-features/carousel.html'>Carousel</a></li>
                <li class='nav-item'> <a class='nav-link' href='pages/ui-features/colcade.html'>Colcade</a></li>
                <li class='nav-item'> <a class='nav-link' href='pages/ui-features/loaders.html'>Loaders</a></li>
              </ul>
            </div>
        </li>
    ";
}

?>