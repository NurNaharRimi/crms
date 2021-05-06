<header>
    <div class="container">
        <figure><img src="{{asset('frontend')}}/images/1page-header-img.jpg"></figure>
        <h1><a href="#"></a></h1>
        <ul class="top-menu">

            <li><a href="#">Help</a></li>
            <li class="last"><a href="#">FAQ</a></li>
        </ul>
        <form action="#" id="search-form">
            <fieldset>
                <div class="rowElem"> <span>
          <input type="text">
          </span> <a href="#"><img src="{{asset('frontend')}}/images/button-search.gif"></a> </div>
            </fieldset>
        </form>
        <nav>
            <ul class="list-unstyled navbar__list">
            <li class="active has-sub">
                <a href="{{route('admin.list')}}">
                    <i class="fas fa-tachometer-alt"></i>HOME</a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">

                </ul>
            </li>
            </ul>
        </nav>
    </div>
</header>
