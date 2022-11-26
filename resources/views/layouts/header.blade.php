<header class="p-3 bg-dark bg-opacity-75">
    <div class="container-fluid">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start mx-lg-5">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 me-lg-2 text-light text-decoration-none">
                <i class="bi bi-receipt" style='font-size:1.67em;'></i>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 link-secondary text-light">Home</a></li>
                <li><a href="{{route('clients.index')}}" class="nav-link px-2 link-secondary text-light">Clients</a></li>
                <li><a href="{{route('pos.index')}}" class="nav-link px-2 link-secondary text-light">POs</a></li>
                <li><a href="{{route('invoices.index')}}" class="nav-link px-2 link-secondary text-light">Invoices</a></li>
                <li><a href="{{route('payments.index')}}" class="nav-link px-2 link-secondary text-light">Payments</a></li>
            </ul>

            <form class="d-flex col-12 col-lg-auto mb-3 mb-lg-0 me-lg-1" role="search">
                <input type="search" class="form-control me-2" placeholder="Search..." aria-label="Search">
                <button class="btn btn-outline-light me-2" type="submit"><i class="bi bi-search"></i></button>
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-secondary text-light text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="true">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
                            class="rounded-circle">
                    </a>
                    
                    <ul class="dropdown-menu text-small" id="dropdownMenu">
                        <li><a class="dropdown-item" href="#">New Invoice...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-in-right me-2"></i>Sign
                                out</a></li>
                    </ul>
                </div>
            </form>
            <div class="text-end mx-2">
                <button type="button" class="btn btn-info me-2">Login</button>
                <button type="button" class="btn btn-light me-2">Register</button>
            </div>
        </div>
    </div>
</header>
