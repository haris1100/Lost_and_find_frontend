<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img class="hide-on-med-and-down " src="newTemp/app-assets/images/logo/materialize-logo.png" alt="materialize logo" /><img class="show-on-medium-and-down hide-on-med-and-up" src="newTemp/app-assets/images/logo/materialize-logo-color.png" alt="materialize logo" /><span class="logo-text hide-on-med-and-down">Materialize</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">

        <li class="navigation-header mb-10"><a class="navigation-header-text">National Lost & Found Repository</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if (\Request::is('search')) active  @endif" href="search"><i class="material-icons">format_list_bulleted</i><span class="menu-title" data-i18n="Playlists">Search</span>
                {{--                    <span class="badge new badge pill pink accent-2 float-right mr-2">5</span>--}}
            </a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan  " href="report/lost"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="Chat">report Lost</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan    " href="report/found"><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="ToDo">report Found</span></a>
        </li>

        <li class="bold "><a class=" waves-effect waves-cyan @if(\Request::is('my-posts')) active  @endif" href="my-posts"><i class="material-icons">receipt</i><span class="menu-title" data-i18n="Invoice">My Posts</span></a>

        </li>
        <li class="bold "><a class=" waves-effect waves-cyan @if(\Request::is('chat-room')) active  @endif" href="chat-room"><i class="material-icons">receipt</i><span class="menu-title" data-i18n="Invoice">Chats</span></a>

        </li>

    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
