<div class="sidebar" data-color="rose" data-background-color="white"
     data-image="{{asset('assets/img/sidebar-1.jpg')}}">

    <div class="logo" style="padding: 0">
        {{--        <a href="/" class="simple-text logo-mini">--}}
        {{--            <img src="{{asset('assets/img/logo/VUOZ_Main Logo_Primary_Colour_RGB.png')}}" alt="logo_mini"--}}
        {{--                 class="w-100"/>--}}
        {{--        </a>--}}
        <a href="/" class="simple-text logo-normal">
            <img src="{{asset('assets/img/logo/red_logo.png')}}" alt="vuoz" class="w-100"/>
        </a></div>
    <div class="sidebar-wrapper">
        @if(session()->has('scholar_name'))
            <div class="user">
                <div class="photo">
                    <span class="material-icons" style="font-size: 35px">account_circle</span>
                    {{--                <img src="{{asset('assets/img/faces/avatar.jpg')}}"/>--}}
                </div>
                <div class="user-info">
                    <a data-toggle="collapse" href="#collapseExample" class="username">
                  <span>
                   {{session('scholar_name')}}
                    <b class="caret"></b>
                  </span>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> <i class="material-icons">person_pin</i> </span>
                                    <span class="sidebar-normal"> My Profile </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> <i class="material-icons">person_pin</i></span>
                                    <span class="sidebar-normal"> Edit Profile </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/logout">
                                    <span class="sidebar-mini"> <i class="material-icons">settings_suggest</i></span>
                                    <span class="sidebar-normal"> logout </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <ul class="nav">
            <li class="nav-item @if(request()->segment(1) ==='scholar' && request()->segment(2) ==='overview') active @endif">
                <a class="nav-link" href="/scholar/overview">
                    <i class="material-icons">dashboard</i>
                    <p> Overview </p>
                </a>
            </li>
            <li class="nav-item @if(request()->segment(1) ==='scholar' && request()->segment(2) ==='tracker') active @endif">
                <a class="nav-link" href="/scholar/tracker">
                    <i class="material-icons">rocket_launch</i>
                    <p> Tracker </p>
                </a>
            </li>
            <li class="nav-item @if(request()->segment(1) ==='scholar' && request()->segment(2) ==='axies') active @endif">
                <a class="nav-link" href="/scholar/axies">
                    <i class="material-icons">add_chart</i>
                    <p> Axies </p>
                </a>
            </li>
            <li class="nav-item @if(request()->segment(1) ==='scholar' && request()->segment(2) ==='wallet') active @endif">
                <a class="nav-link" href="/scholar/wallet">
                    <i class="material-icons">account_balance_wallet</i>
                    <p> Wallet </p>
                </a>
            </li>
            <li class="nav-item @if(request()->segment(1) ==='scholar' && request()->segment(2) ==='payments') active @endif">
                <a class="nav-link" href="/scholar/payments">
                    <i class="material-icons">monetization_on</i>
                    <p> Payments </p>
                </a>
            </li>

            <li class="nav-item @if(request()->segment(1) ==='scholar' && request()->segment(2) ==='share') active @endif">
                <a class="nav-link" href="/scholar/share">
                    <i class="material-icons">share</i>
                    <p> Share </p>
                </a>
            </li>
            <li class="nav-item @if(request()->segment(1) ==='scholar' && request()->segment(2) ==='settings') active @endif">
                <a class="nav-link" href="/scholar/settings">
                    <i class="material-icons">settings_suggest</i>
                    <p> Settings </p>
                </a>
            </li>
            <li class="nav-item @if(request()->segment(1) ==='scholar' && request()->segment(2) ==='faq') active @endif">
                <a class="nav-link" href="/scholar/faq">
                    <i class="material-icons">mark_unread_chat_alt</i>
                    <p> FAQ </p>
                </a>
            </li>
        </ul>
        <hr>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="#">

                </a>
            </li>
        </ul>
        <hr>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link realtime-price" href="https://coinmarketcap.com/currencies/ethereum/eth/usd/">
                    <span><svg viewBox="-38.39985 -104.22675 332.7987 625.3605" width="24px" color="text"
                               xmlns="http://www.w3.org/2000/svg" class="sc-jSFjdj cWAeCE"><path fill="#343434"
                                                                                                 d="M125.166 285.168l2.795 2.79 127.962-75.638L127.961 0l-2.795 9.5z"></path><path
                                fill="#8C8C8C" d="M127.962 287.959V0L0 212.32z"></path><path fill="#3C3C3B"
                                                                                             d="M126.386 412.306l1.575 4.6L256 236.587l-128.038 75.6-1.575 1.92z"></path><path
                                fill="#8C8C8C" d="M0 236.585l127.962 180.32v-104.72z"></path><path fill="#141414"
                                                                                                   d="M127.961 154.159v133.799l127.96-75.637z"></path><path
                                fill="#393939" d="M127.96 154.159L0 212.32l127.96 75.637z"></path> </svg></span>
                    <p class="text-primary"><b>&nbsp;&nbsp;$4,261.28</b> <small
                            class="text-success">&nbsp;&nbsp;6.32%</small></p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link realtime-price" href="https://coinmarketcap.com/currencies/axie-infinity/axs/usd/">
                    <span><svg viewBox="0 0 90 90" width="24px" color="text" xmlns="http://www.w3.org/2000/svg"
                               class="sc-jSFjdj cWAeCE"> <image id="image0" width="90" height="90" x="0" y="0"
                                                                href="data:image/png;base64,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"></image></svg></span>
                    <p class="text-primary"><b>&nbsp;&nbsp;$129.78</b> <small
                            class="text-success">&nbsp;&nbsp;5.49%</small></p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link realtime-price"
                   href="https://coinmarketcap.com/currencies/smooth-love-potion/slp/usd/">
                    <span><svg viewBox="0 0 90 90" width="24px" color="text" xmlns="http://www.w3.org/2000/svg"
                               class="sc-jSFjdj cWAeCE"> <image id="image0" width="90" height="90" x="0" y="0"
                                                                href="data:image/png;base64,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"></image></svg></span>
                    <p class="text-primary"><b>&nbsp;&nbsp;$0.06526</b> <small
                            class="text-success">&nbsp;&nbsp;7.73%</small></p>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-background"></div>
</div>
