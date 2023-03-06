<div id="sidebar-menu">
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title" key="t-menu">Menu</li>
        <li>
            <a class="waves-effect" href="">
                <i class="bx bx-home-circle"></i>
                <span key="t-chat">{{ __('Dashboard') }}</span>
            </a>
        </li>
        <li>
            <a class="has-arrow waves-effect" href="javascript: void(0);">
                <i class="bx bx-home-circle"></i>
                <span key="t-dashboards">{{ __('Manage Users') }}</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li>
                    <a href="#" key="t-default">{{ __('All Users') }}</a>
                </li>
                <li>
                    <a href="#" key="t-default">{{ __('Active Users') }}</a>
                </li>
                <li>
                    <a href="#" key="t-default">{{ __('Banned Users') }}</a>
                </li>
            </ul>
        </li>
        {{-- <li>
            <a class="has-arrow waves-effect" href="javascript: void(0);">
                <i class="bx bx-home-circle"></i>
                <span key="t-dashboards">Dashboards</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="index.html" key="t-default">Default</a></li>
                <li><a href="dashboard-saas.html" key="t-saas">Saas</a></li>
                <li><a href="dashboard-crypto.html" key="t-crypto">Crypto</a></li>
                <li><a href="dashboard-blog.html" key="t-blog">Blog</a></li>
                <li><a href="dashboard-job.html"><span class="badge rounded-pill text-bg-success float-end" key="t-new">New</span> <span key="t-jobs">Jobs</span></a></li>
            </ul>
        </li> --}}
    </ul>
</div>
