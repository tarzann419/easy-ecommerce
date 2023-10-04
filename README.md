<!-- active sidebar link -->

@php 

$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();


@endphp


<li class="treeview {{ ($prefix == 'brand') ? 'active' : '' }}">
    <a href="#">
        <i data-feather="message-circle"></i>
        <span>Brands</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ ($route == 'all.brand') ? 'active' : '' }}">
            <a href="{{ route('all.brand') }}"><i class="ti-more"></i>All Brands</a>
        </li>
    </ul>
</li>


<!-- active sidebar link -->
