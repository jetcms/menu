<div class="jet-menu__top ">

<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Блог веб-разработчика</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="logo" href="/"><img src="/img/logo.png"/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @foreach ($menu as $val)
                    @if (isset($menu_map[$val->id]))
                        <li @if ($val->is_active ) class="active" @endif>
                            <a href="{{$val->url}}">{{$val->lable}}</a>
                        </li>
                    @else
                        <li @if ($val->is_active ) class="active" @endif>
                            <a href="{{$val->url}}">{{$val->lable}}</a>
                        </li>
                    @endif
                @endforeach
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @include('jetcms.menu::widgets.top.right')
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
</div>