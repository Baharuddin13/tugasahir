{{-- {{session('username')}} --}}

<div class="container">
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <img src="{{ asset('images/menu/admin.png') }}" alt="" style="width: 50px " class="mr-5">
                        <h5 class="card-title">Total admin</h5>
                    </div>
                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                </div>
            </div>
        </div>
        <div class="col-sm-6 py-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <img src="{{ asset('images/menu/kasir.png') }}" alt="" style="width: 50px "
                            class="mr-5">
                        <h5 class="card-title">Total kasir</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0 ">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <img src="{{ asset('images/menu/menu.png') }}" alt="" style="width: 50px "
                            class="mr-5">
                        <h5 class="card-title">Menu</h5>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <img src="{{ asset('images/menu/customer.png') }}" alt="" style="width: 50px "
                            class="mr-5">
                        <h5 class="card-title">Customer</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




{{-- <div class="content-wrapper">
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini">
                    <div class="card-header">
                        <h2>$18,699</h2>
                        <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="sub-title">
                            <span class="mr-1">Sales of this year</span> |
                            <span class="mx-1">45%</span>
                            <i class="mdi mdi-arrow-up-bold text-success"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-wrapper">
                            <div>
                                <div id="spline-area-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini">
                    <div class="card-header">
                        <h2>$14,500</h2>
                        <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="sub-title">
                            <span class="mr-1">Expense of this year</span> |
                            <span class="mx-1">50%</span>
                            <i class="mdi mdi-arrow-down-bold text-danger"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-wrapper">
                            <div>
                                <div id="spline-area-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini">
                    <div class="card-header">
                        <h2>$14,500</h2>
                        <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="sub-title">
                            <span class="mr-1">Expense of this year</span> |
                            <span class="mx-1">50%</span>
                            <i class="mdi mdi-arrow-down-bold text-danger"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-wrapper">
                            <div>
                                <div id="spline-area-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini">
                    <div class="card-header">
                        <h2>$14,500</h2>
                        <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="sub-title">
                            <span class="mr-1">Expense of this year</span> |
                            <span class="mx-1">50%</span>
                            <i class="mdi mdi-arrow-down-bold text-danger"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-wrapper">
                            <div>
                                <div id="spline-area-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> --}}
