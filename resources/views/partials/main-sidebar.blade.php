<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('img/boy.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p> {{Auth::User()->name}} </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="">
                <router-link to="/dashboard">
                    <i class="fa fa-th"></i>
                    <span>Dashboard</span>
                </router-link>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-address-book"></i>
                    <span> Contacts</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="contacts/suppliers"><i class="fa fa-star"></i> Suppliers</a></li>
                    <li><a href="contacts/customers"><i class="fa fa-star"></i> Customers</a></li>
                    <li><a href="contacts/customer-group"><i class="fa fa-users"></i> Customer Groups</a></li>
                    <li><a href="contacts/import"><i class="fa fa-upload"></i> Import Contacts</a></li>
                </ul>
            </li>

            <li class="treeview" id="tour_step5">
                <a href="#" id="tour_step5_menu"><i class="fa fa-cubes"></i> <span>Products</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class=""><router-link to="/products"><i class="fa fa-list"></i>List Products</router-link></li>
                    <li class=""><a href="/products/create"><i class="fa fa-plus-circle"></i>Add Product</a></li>
                    <li class=""><a href="/labels/show"><i class="fa fa-barcode"></i>Print Labels</a></li>
                    <li class=""><a href="/variation-templates"><i class="fa fa-circle-notch"></i><span>Variations</span></a></li>
                    <li class=""><a href="/import-products"><i class="fa fa-download"></i><span>Import Products</span></a></li>
                    <li class=""><a href="/import-opening-stock"><i class="fa fa-download"></i><span>Import Opening Stock</span></a></li>
                    <li class="">
                        <a href="/selling-price-group"><i class="fa fa-circle-notch"></i><span>Selling Price Group</span></a>
                    </li>
                    <li class="">
                        <a href="/units"><i class="fa fa-balance-scale"></i> <span>Units</span></a>
                    </li>
                    <li class="">
                        <a href="/categories"><i class="fa fa-tags"></i> <span>Categories </span></a>
                    </li>
                    <li class="">
                        <a href="/brands"><i class="fa fa-circle-notch"></i> <span>Brands</span></a>
                    </li>
                </ul>
            </li>

            <li class="treeview " id="tour_step6">
                <a href="#" id="tour_step6_menu"><i class="fa fa-arrow-circle-down"></i> <span>Purchases</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="/purchases"><i class="fa fa-list"></i>List Purchases</a></li>
                    <li class=""><a href="/purchases/create"><i class="fa fa-plus-circle"></i> Add Purchase</a></li>
                    <li class=""><a href="/purchase-return"><i class="fa fa-undo"></i> List Purchase Return</a></li>
                </ul>
            </li>

            <li class="treeview " id="tour_step7">
                <a href="#" id="tour_step7_menu"><i class="fa fa-arrow-circle-up"></i> <span>Sell</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="/sells"><i class="fa fa-list"></i>All sales</a></li>
                    <!-- Call superadmin module if defined -->
                    <li class=""><a href="/sells/create"><i class="fa fa-plus-circle"></i>Add Sale</a></li>
                    <li class=""><a href="/pos"><i class="fa fa-list"></i>List POS</a></li>
                    <li class=""><a href="/pos/create"><i class="fa fa-plus-circle"></i>POS</a></li>
                    <li class=""><a href="/sells/drafts"><i class="fa fa-pencil-alt" aria-hidden="true"></i>List Drafts</a></li>

                    <li class=""><a href="/sells/quotations"><i class="fa fa-pencil-ruler" aria-hidden="true"></i>List quotations</a></li>
                    <li class=""><a href="/sell-return"><i class="fa fa-undo"></i>List Sell Return</a></li>
                </ul>
            </li>

            <li class="treeview ">
                <a href="#"><i class="fa fa-truck" aria-hidden="true"></i> <span>Stock Transfers</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="/stock-transfers"><i class="fa fa-list"></i>List Stock Transfers</a></li>
                    <li class=""><a href="/stock-transfers/create"><i class="fa fa-plus-circle"></i>Add Stock Transfer</a></li>
                </ul>
            </li>

            <li class="treeview ">
                <a href="#"><i class="fa fa-database" aria-hidden="true"></i> <span>Stock Adjustment</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="/stock-adjustments"><i class="fa fa-list"></i>List Stock Adjustments</a></li>
                    <li class=""><a href="/stock-adjustments/create"><i class="fa fa-plus-circle"></i>Add Stock Adjustment</a></li>
                </ul>
            </li>

            <li class="treeview ">
                <a href="#"><i class="fa fa-minus-circle"></i> <span>Expenses</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="/expenses"><i class="fa fa-list"></i>List Expenses</a></li>
                    <li class=""><a href="/expenses/create"><i class="fa fa-plus-circle"></i>Add Expenses</a></li>
                    <li class=""><a href="/expense-categories"><i class="fa fa-circle-notch"></i>Expense Categories</a></li>
                </ul>
            </li>

            <li class="treeview " id="tour_step8">
                <a href="#" id="tour_step8_menu"><i class="fa fa-chart-bar"></i> <span>Reports</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="/reports/profit-loss"><i class="fa fa-money-bill"></i> Profit / Loss Report</a></li>
                    <li class=""><a href="/reports/purchase-sell"><i class="fa fa-exchange-alt"></i> Purchase &amp; Sale</a></li>
                    <li class=""><a href="/reports/tax-report"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Tax Report</a></li>
                    <li class=""><a href="/reports/customer-supplier"><i class="fa fa-address-book"></i> Supplier &amp; Customer Report</a></li>
                    <li class=""><a href="/reports/customer-group"><i class="fa fa-users"></i> Customer Groups Report</a></li>
                    <li class=""><a href="/reports/stock-report"><i class="fa fa-hourglass-half" aria-hidden="true"></i> Stock Report</a></li>
                    <li class=""><a href="/reports/lot-report"><i class="fa fa-hourglass-half" aria-hidden="true"></i> Lot Report</a></li>
                    <li class=""><a href="/reports/trending-products"><i class="fa fa-chart-line" aria-hidden="true"></i> Trending Products</a></li>
                    <li class=""><a href="/reports/stock-adjustment-report"><i class="fa fa-sliders-h"></i> Stock Adjustment Report</a></li>
                    <li class=""><a href="/reports/product-purchase-report"><i class="fa fa-arrow-circle-down"></i> Product Purchase Report</a></li>
                    <li class=""><a href="/reports/product-sell-report"><i class="fa fa-arrow-circle-up"></i> Product Sell Report</a></li>
                    <li class=""><a href="/reports/purchase-payment-report"><i class="fa fa-money-bill-alt"></i> Purchase Payment Report</a></li>
                    <li class=""><a href="/reports/sell-payment-report"><i class="fa fa-money-bill-wave"></i> Sell Payment Report</a></li>
                    <li class=""><a href="/reports/expense-report"><i class="fa fa-search-minus" aria-hidden="true"></i> Expense Report</a></li>
                    <li class=""><a href="/reports/register-report"><i class="fa fa-briefcase"></i> Register Report</a></li>
                    <li class=""><a href="/reports/sales-representative-report"><i class="fa fa-user" aria-hidden="true"></i> Sales Representative Report</a></li>
                </ul>
            </li>

            <li class="treeview ">
                <a href="/notification-templates"><i class="fa fa-envelope"></i> <span>Notification Templates</span>
                </a>
            </li>

            <li class="treeview ">
                <a href="#" id="tour_step2_menu"><i class="fa fa-cog"></i> <span>Settings</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" id="tour_step3">
                    <li class="">
                        <a href="/business/settings" id="tour_step2"><i class="fa fa-cogs"></i> Business Settings</a>
                    </li>
                    <li class="">
                        <a href="/business-location"><i class="fa fa-map-marker"></i> Business Locations</a>
                    </li>
                    <li class="">
                        <a href="/invoice-schemes"><i class="fa fa-file"></i> <span>Invoice Settings</span></a>
                    </li>
                    <li class="">
                        <a href="/barcodes"><i class="fa fa-barcode"></i> <span>Barcode Settings</span></a>
                    </li>
                    <li class="">
                        <a href="/printers"><i class="fa fa-share-alt"></i> <span>Receipt Printers</span></a>
                    </li>
                    <li class="">
                        <a href="/tax-rates"><i class="fa fa-bolt"></i> <span>Tax Rates</span></a>
                    </li>
                    <li class="">
                        <a href="/subscription">
                            <i class="fa fa-rebel"></i>
                            <span class="title">Package Subscription</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="bg-navy treeview ">
                <a href="#">
                    <i class="fa fa-check-double"></i>
                    <span class="title">Essentials</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="">
                        <a href="/essentials/todo">
                            <i class="fa fa-list-ul"></i>
                            <span class="title">To Do</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="/essentials/document">
                            <i class="fa fa-file"></i>
                            <span class="title"> Document </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="/essentials/document?type=memos">
                            <i class="fa fa-envelope-open"></i>
                            <span class="title">Memos</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="/essentials/reminder">
                            <i class="fa fa-bell"></i>
                            <span class="title">Reminders</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="/essentials/messages">
                            <i class="fa fa-comment-alt"></i>
                            <span class="title">Messages</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>