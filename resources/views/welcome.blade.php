@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xl-7">

        <!-- Traffic sources -->
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="mb-0">Traffic sources</h5>
                <div class="ms-auto">
                    <label class="form-check form-switch form-check-reverse">
                        <input type="checkbox" class="form-check-input" checked>
                        <span class="form-check-label">Live update</span>
                    </label>
                </div>
            </div>

            <div class="card-body pb-0">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="d-flex align-items-center justify-content-center mb-2">
                            <a href="#" class="bg-success bg-opacity-10 text-success lh-1 rounded-pill p-2 me-3">
                                <i class="ph-plus"></i>
                            </a>
                            <div>
                                <div class="fw-semibold">New visitors</div>
                                <span class="text-muted">2,349 avg</span>
                            </div>
                        </div>
                        <div class="w-75 mx-auto mb-3" id="new-visitors"></div>
                    </div>

                    <div class="col-sm-4">
                        <div class="d-flex align-items-center justify-content-center mb-2">
                            <a href="#" class="bg-warning bg-opacity-10 text-warning lh-1 rounded-pill p-2 me-3">
                                <i class="ph-clock"></i>
                            </a>
                            <div>
                                <div class="fw-semibold">New sessions</div>
                                <span class="text-muted">08:20 avg</span>
                            </div>
                        </div>
                        <div class="w-75 mx-auto mb-3" id="new-sessions"></div>
                    </div>

                    <div class="col-sm-4">
                        <div class="d-flex align-items-center justify-content-center mb-2">
                            <a href="#" class="bg-indigo bg-opacity-10 text-indigo lh-1 rounded-pill p-2 me-3">
                                <i class="ph-users-three"></i>
                            </a>
                            <div>
                                <div class="fw-semibold">Total online</div>
                                <span class="text-muted">5,378 avg</span>
                            </div>
                        </div>
                        <div class="w-75 mx-auto mb-3" id="total-online"></div>
                    </div>
                </div>
            </div>

            <div class="chart position-relative" id="traffic-sources"></div>
        </div>
        <!-- /traffic sources -->

    </div>

    <div class="col-xl-5">

        <!-- Sales stats -->
        <div class="card">
            <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                <h5 class="py-sm-2 my-sm-1">Sales statistics</h5>
                <div class="mt-2 mt-sm-0 ms-sm-auto">
                    <select class="form-select" id="select_date">
                        <option value="val1">June, 29 - July, 5</option>
                        <option value="val2">June, 22 - June 28</option>
                        <option value="val3" selected>June, 15 - June, 21</option>
                        <option value="val4">June, 8 - June, 14</option>
                    </select>
                </div>
            </div>

            <div class="card-body pb-0">
                <div class="row text-center">
                    <div class="col-4">
                        <div class="mb-3">
                            <h5 class="mb-0">5,689</h5>
                            <div class="text-muted fs-sm">new orders</div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="mb-3">
                            <h5 class="mb-0">32,568</h5>
                            <div class="text-muted fs-sm">this month</div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="mb-3">
                            <h5 class="mb-0">$23,464</h5>
                            <div class="text-muted fs-sm">expected profit</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="chart mb-2" id="app_sales"></div>
            <div class="chart" id="monthly-sales-stats"></div>
        </div>
        <!-- /sales stats -->

    </div>
</div>
@endsection