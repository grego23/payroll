

    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menu-light brand-lightblue icon-colored">
        <div class="navbar-wrapper ">
            <div class="navbar-brand header-logo">
                <a href="{{URL::to('dashboard')}}" class="b-brand">
                         <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title">Easypay </span>
                 
                    <!--<span class="b-title"><img src="{{ asset('assets/images/easy.jpg')}}" width="150"/></span>-->
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item pcoded-hasmenu active pcoded-trigger">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="{{URL::to('dashboard')}}" class=""><span class="pcoded-micon"><i class="feather icon-info"></i></span>Home</span></a></li>
                           <!--<li class=""><a href="dashboard-ecommerce.html" class="">Ecommerce</a></li>
                            <li class=""><a href="dashboard-crm.html" class="">CRM</a></li>
                            <li class="active"><a href="dashboard-analytics.html" class="">Analytics</a></li>
                            <li class=""><a href="dashboard-crypto.html" class="">Crypto<span class="pcoded-badge label label-danger">NEW</span></a></li>
                            <li class=""><a href="dashboard-project.html" class="">Project</a></li>-->
                        </ul>
                    </li>
                     <li class="nav-item pcoded-menu-caption">
                        <label>Administration</label>
                    </li>
               
                    <li data-username="advance components Alert gridstack lightbox modal notification pnotify rating rangeslider slider syntax highlighter Tour Tree view Nestable Toolbar" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-gitlab"></i></span><span class="pcoded-mtext">Users</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="{{URL::to('user')}}" class="">List Users</a></li>
                            <li class=""><a href="" class="">Register User</a></li>
                            <li class=""><a href="" class="">Edit User</a></li>
                        </ul>
                    </li>
                    <li data-username="extra components Session Timeout Session Idle Timeout Offline" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-package"></i></span><span class="pcoded-mtext">Settings</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="" class="">Session timeout</a></li>
                            <li class=""><a href="" class="">Session idle timeout</a></li>
                            <li class=""><a href="ec-offline.html" class="">Offline</a></li>
                        </ul>
                    </li>
                    <li data-username="Vertical Horizontal Box Layout RTL fixed static collapse menu color icon dark" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-briefcase"></i></span><span class="pcoded-mtext">Organizations</span></a>
                        <ul class="pcoded-submenu">
                            <li class="pcoded-hasmenu"><a href="{{route('company.create')}}" class=""><span class="pcoded-micon"><i class="feather icon-folder"></i></span>Add Organization</span></a>
                                <ul class="pcoded-submenu">
                                    <li class=""><a href="{{route('company.create')}}" class="" target="_blank">Add Here</a></li>
                                    
                                </ul>
                            </li>
                          
                           <!-- <li class=""><a href="layout-horizontal.html" class="" target="_blank">Horizontal</a></li>
                            <li class=""><a href="layout-box.html" class="" target="_blank">Box layout</a></li>
                            <li class=""><a href="layout-rtl.html" class="" target="_blank">RTL</a></li>
                            <li class=""><a href="layout-light.html" class="" target="_blank">Light layout</a></li>
                            <li class=""><a href="layout-dark.html" class="" target="_blank">Dark layout <span class="pcoded-badge label label-danger">Hot</span></a></li>
                            <li class=""><a href="layout-menu-icon.html" class="" target="_blank">Color icon</a></li>-->
                        </ul>
                    </li>
                    <li data-username="Vertical Horizontal Box Layout RTL fixed static collapse menu color icon dark" class="nav-item pcoded-hasmenu">
                        <a href="{{route('employee.create')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">Employees</span></a>
                        <ul class="pcoded-submenu">
                            <li class="pcoded-hasmenu"><a href="{{route('employee.create')}}" class=""><span class="pcoded-micon"><i class="feather icon-folder"></i></span>Add Employee</span></a>
                               
                            </li>
                          
                           <!-- <li class=""><a href="layout-horizontal.html" class="" target="_blank">Horizontal</a></li>
                            <li class=""><a href="layout-box.html" class="" target="_blank">Box layout</a></li>
                            <li class=""><a href="layout-rtl.html" class="" target="_blank">RTL</a></li>
                            <li class=""><a href="layout-light.html" class="" target="_blank">Light layout</a></li>
                            <li class=""><a href="layout-dark.html" class="" target="_blank">Dark layout <span class="pcoded-badge label label-danger">Hot</span></a></li>
                            <li class=""><a href="layout-menu-icon.html" class="" target="_blank">Color icon</a></li>-->
                        </ul>
                    </li>
				
					        <!--<li data-username="Vertical Horizontal Box Layout RTL fixed static collapse menu color icon dark" class="nav-item pcoded-hasmenu">
                        <a href="{{route('position.create')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">Positions</span></a>
                        <ul class="pcoded-submenu">
                            <li class="pcoded-hasmenu"><a href="{{route('position.create')}}" class=""><span class="pcoded-micon"><i class="feather icon-folder"></i></span>Add Position</span></a>
                               
                            </li>-->
                          
                           <!-- <li class=""><a href="layout-horizontal.html" class="" target="_blank">Horizontal</a></li>
                            <li class=""><a href="layout-box.html" class="" target="_blank">Box layout</a></li>
                            <li class=""><a href="layout-rtl.html" class="" target="_blank">RTL</a></li>
                            <li class=""><a href="layout-light.html" class="" target="_blank">Light layout</a></li>
                            <li class=""><a href="layout-dark.html" class="" target="_blank">Dark layout <span class="pcoded-badge label label-danger">Hot</span></a></li>
                            <li class=""><a href="layout-menu-icon.html" class="" target="_blank">Color icon</a></li>-->
                       <!-- </ul>
                    </li>-->
					
					       <!-- <li data-username="Vertical Horizontal Box Layout RTL fixed static collapse menu color icon dark" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file"></i></span><span class="pcoded-mtext">Deductions</span></a>
                        <ul class="pcoded-submenu">
                            <li class="pcoded-hasmenu"><a href="{{route('company.create')}}" class=""><span class="pcoded-micon"><i class="feather icon-file"></i></span>Add Deductions</span></a>
                               
                            </li>-->
                          
                           <!-- <li class=""><a href="layout-horizontal.html" class="" target="_blank">Horizontal</a></li>
                            <li class=""><a href="layout-box.html" class="" target="_blank">Box layout</a></li>
                            <li class=""><a href="layout-rtl.html" class="" target="_blank">RTL</a></li>
                            <li class=""><a href="layout-light.html" class="" target="_blank">Light layout</a></li>
                            <li class=""><a href="layout-dark.html" class="" target="_blank">Dark layout <span class="pcoded-badge label label-danger">Hot</span></a></li>
                            <li class=""><a href="layout-menu-icon.html" class="" target="_blank">Color icon</a></li>-->
                     
					
					        <li data-username="Vertical Horizontal Box Layout RTL fixed static collapse menu color icon dark" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file"></i></span><span class="pcoded-mtext">Payroll</span></a>
                        <ul class="pcoded-submenu">
                          
                    </li>
                    <li data-username="Sample Page" class="nav-item"><a href="{{URL::to('payroll')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Process Payroll</span></a></li>
                    <li data-username="Sample Page" class="nav-item"><a href="{{URL::to('payroll')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Payroll Reports</span></a></li>
                    
                    
                    <li class="nav-item pcoded-menu-caption">
                        <label>Subscription</label>
                    </li>
                    <li data-username="Sample Page" class="nav-item"><a href="payments.html" class="nav-link"><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Payments</span></a></li>
                    <li data-username="Sample Page" class="nav-item"><a href="payments.html" class="nav-link"><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Pending Invoices</span></a></li>
                    <li data-username="Sample Page" class="nav-item"><a href="payments.html" class="nav-link"><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Subscription Reports</span></a></li>
                    
                    
                    <li class="nav-item pcoded-menu-caption">
                        <label>Support</label>
                    </li>
                    <li data-username="Documentation" class="nav-item"><a href="#" class="nav-link" target="_blank"><span class="pcoded-micon"><i class="feather icon-book"></i></span><span class="pcoded-mtext">Documentation</span></a></li>
                    <li data-username="Need Support" class="nav-item"><a href="#" class="nav-link" target="_blank"><span class="pcoded-micon"><i class="feather icon-help-circle"></i></span><span class="pcoded-mtext">Need
                                support ?</span></a></li>
                          
                           <!-- <li class=""><a href="layout-horizontal.html" class="" target="_blank">Horizontal</a></li>
                            <li class=""><a href="layout-box.html" class="" target="_blank">Box layout</a></li>
                            <li class=""><a href="layout-rtl.html" class="" target="_blank">RTL</a></li>
                            <li class=""><a href="layout-light.html" class="" target="_blank">Light layout</a></li>
                            <li class=""><a href="layout-dark.html" class="" target="_blank">Dark layout <span class="pcoded-badge label label-danger">Hot</span></a></li>
                            <li class=""><a href="layout-menu-icon.html" class="" target="_blank">Color icon</a></li>-->
                        </ul>
                    </li>
                   <!-- <li data-username="widget Statistic Data Table User card Chart" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">Widget</span><span class="pcoded-badge label label-info">100+</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="widget-statistic.html" class="">Statistic</a></li>
                            <li class=""><a href="widget-data.html" class="">Data</a></li>
                            <li class=""><a href="widget-table.html" class="">Table</a></li>
                            <li class=""><a href="widget-user-card.html" class="">User</a></li>
                            <li class=""><a href="widget-chart.html" class="">Chart</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>UI Element</label>
                    </li>
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Basic</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="bc_alert.html" class="">Alert</a></li>
                            <li class=""><a href="bc_button.html" class="">Button</a></li>
                            <li class=""><a href="bc_badges.html" class="">Badges</a></li>
                            <li class=""><a href="bc_breadcrumb-pagination.html" class="">Breadcrumb & paggination</a></li>
                            <li class=""><a href="bc_card.html" class="">Cards</a></li>
                            <li class=""><a href="bc_collapse.html" class="">Collapse</a></li>
                            <li class=""><a href="bc_carousel.html" class="">Carousel</a></li>
                            <li class=""><a href="bc_grid.html" class="">Grid system</a></li>
                            <li class=""><a href="bc_progress.html" class="">Progress</a></li>
                            <li class=""><a href="bc_modal.html" class="">Modal</a></li>
                            <li class=""><a href="bc_spinner.html" class="">Spinner<span class="pcoded-badge label label-danger">NEW</span></a></li>
                            <li class=""><a href="bc_tabs.html" class="">Tabs & pills</a></li>
                            <li class=""><a href="bc_typography.html" class="">Typography</a></li>
                            <li class=""><a href="bc_tooltip-popover.html" class="">Tooltip & popovers</a></li>
                            <li class=""><a href="bc_toasts.html" class="">Toasts<span class="pcoded-badge label label-danger">NEW</span></a></li>
                            <li class=""><a href="bc_extra.html" class="">Other<span class="pcoded-badge label label-primary">NEW</span></a></li>
                        </ul>
                    </li>
                    <li data-username="advance components Alert gridstack lightbox modal notification pnotify rating rangeslider slider syntax highlighter Tour Tree view Nestable Toolbar" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-gitlab"></i></span><span class="pcoded-mtext">Advance</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="ac_alert.html" class="">Sweet alert</a></li>
                            <li class=""><a href="ac-datepicker-componant.html" class="">Datepicker</a></li>
                            <li class=""><a href="ac_gridstack.html" class="">Gridstack</a></li>
                            <li class=""><a href="ac_lightbox.html" class="">Lightbox</a></li>
                            <li class=""><a href="ac_modal.html" class="">Modal</a></li>
                            <li class=""><a href="ac_notification.html" class="">Notification</a></li>
                            <li class=""><a href="ac_nestable.html" class="">Nestable</a></li>
                            <li class=""><a href="ac_pnotify.html" class="">Pnotify</a></li>
                            <li class=""><a href="ac_rating.html" class="">Rating</a></li>
                            <li class=""><a href="ac_rangeslider.html" class="">Rangeslider</a></li>
                            <li class=""><a href="ac_slider.html" class="">Slider</a></li>
                            <li class=""><a href="ac_syntax_highlighter.html" class="">Syntax highlighter</a></li>
                            <li class=""><a href="ac_tour.html" class="">Tour</a></li>
                            <li class=""><a href="ac_treeview.html" class="">Tree view</a></li>
                            <li class=""><a href="ac_toolbar.html" class="">Toolbar</a></li>
                        </ul>
                    </li>
                    <li data-username="extra components Session Timeout Session Idle Timeout Offline" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-package"></i></span><span class="pcoded-mtext">Extra</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="ec-session-timeout.html" class="">Session timeout</a></li>
                            <li class=""><a href="ec-session-idle-timeout.html" class="">Session idle timeout</a></li>
                            <li class=""><a href="ec-offline.html" class="">Offline</a></li>
                        </ul>
                    </li>
                    <li data-username="Animations" class="nav-item"><a href="animation.html" class="nav-link"><span class="pcoded-micon"><i class="feather icon-aperture"></i></span><span class="pcoded-mtext">Animations</span></a></li>
                    <li data-username="icons Feather Fontawsome flag material simple line themify" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-feather"></i></span><span class="pcoded-mtext">Icons</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="icon-feather.html" class="">Feather<span class="pcoded-badge label label-danger">NEW</span></a></li>
                            <li class=""><a href="icon-fontawsome.html" class="">Font Awesome 5<span class="pcoded-badge label label-primary">1000+</span></a></li>
                            <li class=""><a href="icon-flag.html" class="">Flag</a></li>
                            <li class=""><a href="icon-material.html" class="">Material</a></li>
                            <li class=""><a href="icon-simple-line.html" class="">Simple line</a></li>
                            <li class=""><a href="icon-themify.html" class="">Themify</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Forms</label>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Forms</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="form_elements.html" class="">Form elements</a></li>
                            <li class=""><a href="form-elements-advance.html" class="">Form advance</a></li>
                            <li class=""><a href="form-validation.html" class="">Form validation</a></li>
                            <li class=""><a href="form-masking.html" class="">Form masking</a></li>
                            <li class=""><a href="form-wizard.html" class="">Form wizard</a></li>
                            <li class=""><a href="form-picker.html" class="">Form picker</a></li>
                            <li class=""><a href="form-select.html" class="">Form select</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>table</label>
                    </li>
                    <li data-username="Table bootstrap datatable footable" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext">Table</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="tbl_bootstrap.html" class="">Bootstrap</a></li>
                            <li class=""><a href="tbl_datatable.html" class="">Data table</a></li>
                            <li class=""><a href="tbl_foo.html" class="">Foo table</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Chart & Maps</label>
                    </li>
                    <li data-username="Charts AM Chart js Echart Google Highchart Knob Morris Nvd3 Peity Radial" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="chart-am.html" class="">amChart 4</a></li>
                            <li class=""><a href="chart-chartjs.html" class="">Chart js</a></li>
                            <li class=""><a href="chart-echart.html" class="">Echart</a></li>
                            <li class=""><a href="chart-google.html" class="">Google</a></li>
                            <li class=""><a href="chart-highchart.html" class="">Highchart</a></li>
                            <li class=""><a href="chart-knob.html" class="">Knob</a></li>
                            <li class=""><a href="chart-morris.html" class="">Morris</a></li>
                            <li class=""><a href="chart-nvd3.html" class="">Nvd3</a></li>
                            <li class=""><a href="chart-peity.html" class="">Peity</a></li>
                            <li class=""><a href="chart-radial.html" class="">Radial</a></li>
                        </ul>
                    </li>
                    <li data-username="Maps Google Vector Google Map Search API Location" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="map-google.html" class="">Google</a></li>
                            <li class=""><a href="map-vector.html" class="">Vector</a></li>
                            <li class=""><a href="map-api.html" class="">Gmap search API</a></li>
                            <li class=""><a href="map-location.html" class="">Location</a></li>
                        </ul>
                    </li>
                    <li data-username="landing page" class="nav-item"><a href="extra-pages/landingpage/index.html" class="nav-link" target="_blank"><span class="pcoded-micon"><i class="feather icon-navigation-2"></i></span><span class="pcoded-mtext">Landing
                                page</span></a></li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Pages</label>
                    </li>
                    <li data-username="Authentication Sign up Sign in reset password Change password Personal information profile settings map form subscribe" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span><span class="pcoded-badge label label-danger">New</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="auth-signup.html" class="" target="_blank">Sign up</a></li>
                            <li class=""><a href="auth-signup-v2.html" class="" target="_blank">Sign up v2<span class="pcoded-badge label label-primary">New</span></a></li>
                            <li class=""><a href="auth-signup-v3.html" class="" target="_blank">Sign up v3<span class="pcoded-badge label label-primary">New</span></a></li>
                            <li class=""><a href="auth-signup-v4.html" class="" target="_blank">Sign up v4<span class="pcoded-badge label label-primary">New</span></a></li>
                            <li class=""><a href="auth-signup-v5.html" class="" target="_blank">Sign up v5<span class="pcoded-badge label label-primary">New</span></a></li>
                            <li class=""><a href="auth-signin.html" class="" target="_blank">Sign in</a></li>
                            <li class=""><a href="auth-signin-v2.html" class="" target="_blank">Sign in v2<span class="pcoded-badge label label-primary">New</span></a></li>
                            <li class=""><a href="auth-signin-v3.html" class="" target="_blank">Sign in v3<span class="pcoded-badge label label-primary">New</span></a></li>
                            <li class=""><a href="auth-signin-v4.html" class="" target="_blank">Sign in v4<span class="pcoded-badge label label-primary">New</span></a></li>
                            <li class=""><a href="auth-signin-v5.html" class="" target="_blank">Sign in v5<span class="pcoded-badge label label-primary">New</span></a></li>
                            <li class=""><a href="auth-reset-password.html" class="" target="_blank">Reset password</a></li>
                            <li class=""><a href="auth-reset-password-v2.html" class="" target="_blank">Reset password v2<span class="pcoded-badge label label-primary">New</span></a></li>
                            <li class=""><a href="auth-reset-password-v3.html" class="" target="_blank">Reset password v3<span class="pcoded-badge label label-primary">New</span></a></li>
                            <li class=""><a href="auth-reset-password-v4.html" class="" target="_blank">Reset password v4<span class="pcoded-badge label label-primary">New</span></a></li>
                            <li class=""><a href="auth-reset-password-v5.html" class="" target="_blank">Reset password v5<span class="pcoded-badge label label-primary">New</span></a></li>
                            <li class=""><a href="auth-change-password.html" class="" target="_blank">Change password</a></li>
                            <li class=""><a href="auth-Personal-Information.html" class="" target="_blank">Personal information</a></li>
                            <li class=""><a href="auth-profile-settings.html" class="" target="_blank">Profile settings</a></li>
                            <li class=""><a href="auth-map-form.html" class="" target="_blank">Map form</a></li>
                            <li class=""><a href="auth-subscribe.html" class="" target="_blank">Subscribe</a></li>
                        </ul>
                    </li>
                    <li data-username="Maintenance Error Comming soon offline ui" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-sliders"></i></span><span class="pcoded-mtext">Maintenance</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="maint-error.html" class="">Error</a></li>
                            <li class=""><a href="maint-coming-soon.html" class="">Coming soon</a></li>
                            <li class=""><a href="maint-offline-ui.html" class="" target="_blank">Offline UI</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>App</label>
                    </li>
                    <li data-username="message" class="nav-item"><a href="message.html" class="nav-link"><span class="pcoded-micon"><i class="feather icon-message-circle"></i></span><span class="pcoded-mtext">Message</span></a></li>
                    <li data-username="Task list board details" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-clipboard"></i></span><span class="pcoded-mtext">Task</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="task-list.html" class="">List</a></li>
                            <li class=""><a href="task-board.html" class="">Board</a></li>
                            <li class=""><a href="task-detail.html" class="">Detail</a></li>
                        </ul>
                    </li>
                    <li data-username="To-Do notes" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-check-square"></i></span><span class="pcoded-mtext">To-Do</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="todo.html" class="">To-Do</a></li>
                            <li class=""><a href="notes.html" class="">Notes</a></li>
                        </ul>
                    </li>
                    <li data-username="Gallery Grid Masonry Advance" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-image"></i></span><span class="pcoded-mtext">Gallery</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="gallery-grid.html" class="">Grid</a></li>
                            <li class=""><a href="gallery-masonry.html" class="">Masonry</a></li>
                            <li class=""><a href="gallery-advance.html" class="">Advance</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Extension</label>
                    </li>
                    <li data-username="Editor CK-Editor Tinemce" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-plus"></i></span><span class="pcoded-mtext">Editor</span></a>
                        <ul class="pcoded-submenu">
                            <li class="pcoded-hasmenu">
                                <a href="#!" class="">CK editor</a>
                                <ul class="pcoded-submenu">
                                    <li class=""><a href="editor-classic.html" class="">Classic</a></li>
                                    <li class=""><a href="editor-balloon.html" class="">Balloon</a></li>
                                    <li class=""><a href="editor-inline.html" class="">Inline</a></li>
                                    <li class=""><a href="editor-document.html" class="">Document</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="editor-tinymce.html" class="">Tinymce editor</a></li>
                        </ul>
                    </li>-->
                 <!--  < <li data-username="Invoice Summury List" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-minus"></i></span><span class="pcoded-mtext">Invoice</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="invoice.html" class="">Invoice</a></li>
                            <li class=""><a href="invoice-summary.html" class="">Invoice summary</a></li>
                            <li class=""><a href="invoice-list.html" class="">Invoice list</a></li>
                        </ul>
                    </li>
                    <li data-username="Full Calendar" class="nav-item"><a href="full-calendar.html" class="nav-link"><span class="pcoded-micon"><i class="feather icon-calendar"></i></span><span class="pcoded-mtext">Full calendar</span></a></li>
                    <li data-username="File Upload" class="nav-item"><a href="file-upload.html" class="nav-link"><span class="pcoded-micon"><i class="feather icon-upload-cloud"></i></span><span class="pcoded-mtext">File upload</span></a></li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Other</label>
                    </li>
                    <li data-username="Menu levels Menu level 2.1 Menu level 2.2" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-menu"></i></span><span class="pcoded-mtext">Menu levels</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="" class="">Menu Level 2.1</a></li>
                            <li class="pcoded-hasmenu">
                                <a href="#!" class="">Menu level 2.2</a>
                                <ul class="pcoded-submenu">
                                    <li class=""><a href="" class="">Menu level 3.1</a></li>
                                    <li class=""><a href="" class="">Menu level 3.2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li data-username="Disabled Menu" class="nav-item disabled"><a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Disabled menu</span></a></li>
                    <li data-username="Sample Page" class="nav-item"><a href="sample-page.html" class="nav-link"><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Support</label>
                    </li>
                    <li data-username="Documentation" class="nav-item"><a href="docs.html" class="nav-link" target="_blank"><span class="pcoded-micon"><i class="feather icon-book"></i></span><span class="pcoded-mtext">Documentation</span></a></li>
                    <li data-username="Need Support" class="nav-item"><a href="https://codedthemes.support-hub.io/" class="nav-link" target="_blank"><span class="pcoded-micon"><i class="feather icon-help-circle"></i></span><span class="pcoded-mtext">Need
                                support ?</span></a></li>-->
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
           <!-- <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
            <a href="index.html" class="b-brand">
                   <div class="b-bg">
                       <i class="feather icon-trending-up"></i>
                   </div>
                   <span class="b-title">Datta Able</span>
               </a>-->
        </div>
        <a class="mobile-menu" id="mobile-header" href="#!">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
               <!-- <li><a href="#!" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#!">Action</a></li>
                        <li><a class="dropdown-item" href="#!">Another action</a></li>
                        <li><a class="dropdown-item" href="#!">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <div class="main-search">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                            <a href="#!" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>-->
            </ul>
            <ul class="navbar-nav ml-auto">
                <!--<li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="#!" class="m-r-10">mark as read</a>
                                    <a href="#!">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="#!">show all</a>
                            </div>
                        </div>
                    </div>
                </li>-->
                <li><a href="#!" class="displayChatbox"><i class="icon feather icon-mail"></i></a></li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>{{Auth::user()->name}}</span>
                                <a href="{{ route('logout') }}" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                               <!-- <li><a href="#!" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
                                <li><a href="#!" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>-->
                                <li><a href="{{ route('logout') }}" class="dropdown-item"><i class="feather icon-lock"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->