<nav class="navbar">
        <div class="logo">
            REabook's
        </div>
        <ul class="nav-link">
            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
            <div class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="{{url('dashboard')}}">Admin</a></li>
                <li><a href="{{route('table')}}">Top List Book</a></li>
                <li class="services">
                    <a href="#">Theme</a>
                    <ul class="dropdown">
                        <li><a href="#">Horror</a></li>
                        <li><a href="#">Romance</a></li>
                        <li><a href="#">Action</a></li>
                    </ul>
                </li>
            </div>
        </ul>
    </nav>