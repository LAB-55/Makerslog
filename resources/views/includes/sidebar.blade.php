    @if( Auth::check() )

        <!--/. Sidebar navigation -->

        <ul id="slide-out" class="side-nav fixed sn-bg-1 custom-scrollbar">
            <li>
                <div class="user-box">
                    <img src="{{ $meta['avatar'] }}" class="img-fluid rounded-circle">
                    <p class="user text-center black-text">{{ $meta['firstName'] }} {{$meta['lastName']}}</p>
                </div>
            </li>

            <li>
                <ul class="collapsible collapsible-accordion">
                    <!-- <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-code"></i> Dashboards<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="home.html" class="waves-effect">Dahboard v1</a>
                                </li>
                                <li><a href="home v2.html" class="waves-effect">Dahboard v2</a>
                                </li>
                                <li><a href="home v3.html" class="waves-effect">Dahboard v3</a>
                                </li>
                            </ul>
                        </div></li>
                    <li><a href="analytics.html" class="collapsible-header waves-effect arrow-r"><i class="fa fa-pie-chart"></i> Analytics</a>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-code"></i> Creators<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="modals.html" class="waves-effect">Modals</a>
                                </li>
                                <li><a href="page-create.html" class="waves-effect">Create Page</a>
                                </li>
                            </ul>
                        </div>
                    </li> -->
                    <!-- <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-lock"></i> Forms<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="signup.html" class="waves-effect">Sign up</a>
                                </li>
                                <li><a href="signup v2.html" class="waves-effect">Sign up v2</a>
                                </li>
                                <li><a href="login.html" class="waves-effect">Login</a>
                                </li>
                                <li><a href="{{ route('getProfile', ['gusermail' => $meta['gusermail']] ) }}" class="waves-effect">Edit Account</a>
                                </li>
                            </ul>
                        </div>
                    </li> -->
                    <!-- <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-bar-chart"></i> SEO<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="seo-overview.html" class="waves-effect">Overview</a>
                            </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="clients.html" class="collapsible-header waves-effect arrow-r"><i class="fa fa-users"></i> Clients</a>
                    <li><a href="invoice.html" class="collapsible-header waves-effect arrow-r"><i class="fa fa-money"></i> Invoice</a>
                    <li><a href="support.html" class="collapsible-header waves-effect arrow-r"><i class="fa fa-support"></i> Support</a>
                    <li><a href="faq.html" class="collapsible-header waves-effect arrow-r"><i class="fa fa-question-circle" aria-hidden="true"></i> FAQ</a> -->
                    <li><a href="{{ route('indexroot') }}" class="waves-effect">Search</a></li>
                    <li><a href="{{ route('createLog') }}" class="waves-effect">Add New Log</a></li>
                    <li><a href="{{ route('gusermail', ['gusermail' => $meta['gusermail']] ) }}" class="waves-effect">My Logs</a></li>
                    <!-- <li><a href="{{ route('teams', ['teamsroot' => $meta['gusermail']] ) }}" class="waves-effect">My Teams</a></li> -->
                    <li><a href="{{ route('getProfile', ['gusermail' => $meta['gusermail']] ) }}" class="waves-effect">Edit Account</a></li>
                    <!-- <li><a href="{{ route('presentations', ['gusermail' => $meta['gusermail']] ) }}" class="waves-effect">Presentations</a></li> -->
                    <li><a href="{{ route('documents', ['gusermail' => $meta['gusermail']] ) }}" class="waves-effect">Attachments</a></li>
                    <li><a href="{{ route('tasks', ['gusermail' => $meta['gusermail']] ) }}" class="waves-effect">Tasks</a></li>
                </ul>
            </li>
            <!--/. Side navigation links -->
            <div class="sidenav-bg mask-strong"></div>
        </ul>
        
        <!--/. Sidebar navigation -->
    @endif