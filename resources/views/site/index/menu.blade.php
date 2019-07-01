@foreach($menus as $menu)

<li>
    <a href="{{ $menu->url() }}">{{ $menu->title }}</a>
    @if($menu->hasChildren())
    <span class="submenu-button"></span>
    <ul class="dropdown-menu">
        <li>
            @include('site.index.menu',['menus'=>$menu->children()])
        </li>
    </ul>
    @endif
</li>
@endforeach