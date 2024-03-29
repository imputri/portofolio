@extends('dashboard.main')

@section('content')
    <!-- Row 1 -->
    <div class="row">
        <div class="col d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-4">
                        <div>
                            <h5 class="card-title fw-semibold">Portfolio Overview</h5>
                        </div>
                    </div>
                    <h5 class="card-title mb-10 fw-semibold">Total Projects</h5>
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="fw-semibold mb-3">50</h4> <!-- Replace with your actual total project count -->
                            <div class="d-flex align-items-center mb-3">
                                <span
                                    class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-arrow-up-left text-success"></i>
                                </span>
                                <p class="text-dark me-1 fs-3 mb-0">+15%</p>
                                <p class="fs-3 mb-0">last month</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Projects -->
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Recent Projects</h5>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <!-- Table headers -->
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">No</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Project Title</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Creator</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Category</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Views</h6>
                                    </th>
                                </tr>
                            </thead>
                            <!-- Table body with sample project data -->
                            <tbody>
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">1</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-1">Web Development</h6>
                                        <span class="fw-normal">Portfolio Website</span>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">John Doe</p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge bg-info rounded-3 fw-semibold">Web</span>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 fs-4">2.5k Views</h6>
                                    </td>
                                </tr>
                                <!-- Add more project rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
