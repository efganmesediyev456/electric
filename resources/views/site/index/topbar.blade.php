
{{--{{$generals}}--}}
<header class="wow fadeInDown" data-offset-top="197" data-spy="affix">

    <div class="top-wrapper hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="guest">@lang('site.welcome')</div>
                </div>
                <div class="col-lg-5 col-md-6 hidden-sm">
                    <div class="top-header-add">
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i><span>Call</span> {{'+'.$generals->phone}}</div>
                        <div class="book"><a href="javascript:void(0)"><i class="fa fa-globe" aria-hidden="true"></i><span>Book Online</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="logo"> <a href="index.html"><img src="{{route('home').'/'.'images/'.$generals->image}}" alt="#" data-popupalt-original-title="null" title="#"></a> </div>
                    <div class="mobile-menu"></div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <nav class="navbar navbar-default desktop">
                        <div class="navbar-collapse">
                            <!-- Main Menu -->
                            <ul id="nav" class="nav menu navbar-nav">
                                @foreach($menus as $menu)

                                    <li>
                                        <a
                                                @if($menu->hasChildren())
                                                @else
                                                href="{{ $menu->url() }}"
                                                @endif


                                        >{{ $menu->title }}
                                            @if($menu->hasChildren())
                                                <i class="fa fa-circle"></i>
                                            @endif
                                        </a>
                                        @if($menu->hasChildren())

                                            <ul class="dropdown">
                                                <li>
                                                    @include('site.index.menu',['menus'=>$menu->children()])
                                                </li>
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                            <!-- End Main Menu -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>