<div class="jet-menu__sidebar">
    <ul class="nav nav-list hidden-xs hidden-sm sidebar-menu">
        @if ($sidebar)
            @include('jetcms.core::helpers.li_lvl',[
                'index' => $index,
                'lvl' => $sidebar,
                'hr' => true
            ])
        @endif
    </ul>

    <noindex>
        <div class="visible-xs visible-sm">
            <div class="navbar-offcanvas navbar-offcanvas-touch" id="js-offcanvas">
                <ul class="nav nav-list sidebar-menu">
                    @if ($sidebar)
                        @include('jetcms.core::helpers.li_lvl',[
                            'index' => $index,
                            'lvl' => $sidebar,
                            'hr' => true
                        ])
                    @endif
                </ul>
            </div>

            @if ($sidebar)

                <button type="button" class="btn btn-success btn-block offcanvas-toggle"
                        data-toggle="offcanvas"
                        data-target="#js-offcanvas">
                    @if(App\Menu::getActiveModel())
                        {{App\Menu::getActiveModel()->lable}}
                    @endif
                </button>

                <hr>

            @endif



        </div>
    </noindex>

</div>

<style>
    .navbar-offcanvas {
        background: #fff;
        display: none;
    }

    .navbar-offcanvas.js-offcanas-done {
        background: #fff;
        display: block;
    }
</style>


