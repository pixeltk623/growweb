<?php 
    
    $sidebarMenus = Config::get('sidebar_menu.menu');
    //dd($sidebarMenus); 
?>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                @foreach ($sidebarMenus as $keyMenu => $menu)
                    @if($menu['has_submenus'])
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            {{ $menu['title'] }}
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>

                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">

                                <?php 

                                    foreach ($menu['submenus'] as $key => $value) {
                                ?>
                                    <a class="nav-link" href="layout-static.html">{{ $value['title'] }}</a>
                                <?php
                                    }

                                ?>
                            </nav>
                        </div>
                    @else
                        <a class="nav-link" href="{{ route($menu['route'])  }}">
                            <div class="sb-nav-link-icon"> {!! $menu['icon']  !!}</div>
                            {{ $menu['title'] }}
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>