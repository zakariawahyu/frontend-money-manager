@extends('layouts.master')

@section('title', 'Dashboard - Money Manager')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Welcome to Money Manager Dashboard</li>
                    </ol>

                    <div class="state-information d-none d-sm-block">
                        <div class="state-graph">
                            <div id="header-chart-1"></div>
                            <div class="info">Balance </div>
                        </div>
                        <div class="state-graph">
                            <div id="header-chart-2"></div>
                            <div class="info">Expense</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="page-content-wrapper">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary mini-stat position-relative">
                        <div class="card-body">
                            <div class="mini-stat-desc">
                                <h6 class="text-uppercase verti-label text-white-50">Orders</h6>
                                <div class="text-white">
                                    <h6 class="text-uppercase mt-0 text-white-50">Orders</h6>
                                    <h3 class="mb-3 mt-0">1,587</h3>
                                    <div class="">
                                        <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">From previous period</span>
                                    </div>
                                </div>
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-cube-outline display-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary mini-stat position-relative">
                        <div class="card-body">
                            <div class="mini-stat-desc">
                                <h6 class="text-uppercase verti-label text-white-50">Revenue</h6>
                                <div class="text-white">
                                    <h6 class="text-uppercase mt-0 text-white-50">Revenue</h6>
                                    <h3 class="mb-3 mt-0">$46,785</h3>
                                    <div class="">
                                        <span class="badge badge-light text-danger"> -29% </span> <span class="ml-2">From previous period</span>
                                    </div>
                                </div>
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-buffer display-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary mini-stat position-relative">
                        <div class="card-body">
                            <div class="mini-stat-desc">
                                <h6 class="text-uppercase verti-label text-white-50">Av. Price</h6>
                                <div class="text-white">
                                    <h6 class="text-uppercase mt-0 text-white-50">Average Price</h6>
                                    <h3 class="mb-3 mt-0">15.9</h3>
                                    <div class="">
                                        <span class="badge badge-light text-primary"> 0% </span> <span class="ml-2">From previous period</span>
                                    </div>
                                </div>
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-tag-text-outline display-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary mini-stat position-relative">
                        <div class="card-body">
                            <div class="mini-stat-desc">
                                <h6 class="text-uppercase verti-label text-white-50">Pr. Sold</h6>
                                <div class="text-white">
                                    <h6 class="text-uppercase mt-0 text-white-50">Product Sold</h6>
                                    <h3 class="mb-3 mt-0">1890</h3>
                                    <div class="">
                                        <span class="badge badge-light text-info"> +89% </span> <span class="ml-2">From previous period</span>
                                    </div>
                                </div>
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-briefcase-check display-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-8 border-right">
                                    <h4 class="mt-0 header-title mb-4">Sales Report</h4>
                                    <div id="morris-area-example" class="dashboard-charts morris-charts"></div>
                                </div>
                                <div class="col-xl-4">
                                    <h4 class="header-title mb-4">Yearly Sales Report</h4>
                                    <div class="p-3">
                                        <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-first-tab" data-toggle="pill" href="#pills-first" role="tab" aria-controls="pills-first" aria-selected="true">2015</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-second-tab" data-toggle="pill" href="#pills-second" role="tab" aria-controls="pills-second" aria-selected="false">2016</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-third-tab" data-toggle="pill" href="#pills-third" role="tab" aria-controls="pills-third" aria-selected="false">2017</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="pills-first" role="tabpanel" aria-labelledby="pills-first-tab">
                                                <div class="p-3">
                                                    <h2>$17562</h2>
                                                    <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus Nullam quis ante.</p>
                                                    <a href="#" class="text-primary">Read more...</a>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="pills-second" role="tabpanel" aria-labelledby="pills-second-tab">
                                                <div class="p-3">
                                                    <h2>$18614</h2>
                                                    <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus Nullam quis ante.</p>
                                                    <a href="#" class="text-primary">Read more...</a>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="pills-third" role="tabpanel" aria-labelledby="pills-third-tab">
                                                <div class="p-3">
                                                    <h2>$19752</h2>
                                                    <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus Nullam quis ante.</p>
                                                    <a href="#" class="text-primary">Read more...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Sales Analytics</h4>
                            <div id="morris-donut-example" class="dashboard-charts morris-charts"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Latest Income</h4>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                      <tr>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Tipe Transaksi</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Deskripsi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2021-07-08</td>
                                            <td>Gaji</td>
                                            <td>Pemasukan</td>
                                            <td>Rp. 8.000.000</td>
                                            <td>Gaji bulan agustus</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Latest Expense</h4>
                            <div class="table-responsive order-table">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Tipe Transaksi</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2021-07-08</td>
                                            <td>Makanan</td>
                                            <td>Pengeluaran</td>
                                            <td>Rp. 50.000</td>
                                            <td>Makan warteg</td>
                                        </tr>
                                        <tr>
                                            <td>2021-07-08</td>
                                            <td>Belanja</td>
                                            <td>Pengeluaran</td>
                                            <td>Rp. 250.000</td>
                                            <td>Beli TWS</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page content-->
    </div> <!-- container-fluid -->
</div> <!-- content -->
@endsection
@section('extend-js')
    <!-- Peity JS -->
    <script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/pages/dashboard.js') }}"></script>
@endsection
