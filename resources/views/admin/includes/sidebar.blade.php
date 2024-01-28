<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('users')}}">Users List</a></li>
                    <li><a href="{{route('adduser')}}">Add User</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> Categories <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('addcategory')}}">Add Category</a></li>
                    <li><a href="{{route('categories')}}">Categories List</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-desktop"></i> Cars <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('addcar')}}">Add Car</a></li>
                    <li><a href="{{route('cars')}}">Cars List</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-desktop"></i> Testimonials <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('addtestimonials')}}">Add Testimonials</a></li>
                    <li><a href="{{route('testimonials')}}">Edit Testimonials</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-desktop"></i> Messages <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('messages')}}">Messages</a></li>
                </ul>
            </li>
        </ul>
    </div>

</div>