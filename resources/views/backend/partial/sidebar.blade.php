<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#" >
            Car Rent Management System
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Admin</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="index.html">Dashboard 1</a>
                        </li>
                        <li>
                            <a href="index2.html">Dashboard 2</a>
                        </li>
                        <li>
                            <a href="index3.html">Dashboard 3</a>
                        </li>
                        <li>
                            <a href="index4.html">Dashboard 4</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('staff.list')}}">
                        <i class="fas fa-chart-bar"></i>Staff</a>
                </li>
                <li>
                    <a href="{{route('driver.list')}}">
                        <i class="fas fa-table"></i>Driver</a>
                </li>
                <li>
                    <a href="{{route('car.list')}}">
                        <i class="far fa-check-square"></i>Car</a>
                </li>
                <li>
                    <a href="{{route('categorie.list')}}">
                        <i class="fas fa-calendar-alt"></i>Categorie</a>
                </li>
                <li>
                    <a href="map.html">
                        <i class="fas fa-map-marker-alt"></i>payment</a>
                </li>
                <li>
                    <a href="{{route('booking.list')}}">
                        <i class="fas fa-map-marker-alt"></i>Booking</a>
                </li>



            </ul>
        </nav>
    </div>
</aside>
