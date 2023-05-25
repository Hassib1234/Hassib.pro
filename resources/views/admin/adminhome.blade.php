<!DOCTYPE html>
<html lang="en">

@include('admin.adminhead')

<body>
    <div class="container-scroller">


        @include('admin.navbar')

        {{-- <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <h4 class="card-title">Bar chart</h4>
                    <canvas id="barChart" style="height: 352px; display: block; width: 704px;" width="704" height="352" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div> --}}


        <div class="center">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Hoverable Table</h4>
                    <p class="card-description"> Add class <code>.table-hover</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Product</th>
                                    <th>Sale</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jacob</td>
                                    <td>Photoshop</td>
                                    <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
                                    <td><label class="badge badge-danger">Pending</label></td>
                                </tr>
                                <tr>
                                    <td>Messsy</td>
                                    <td>Flash</td>
                                    <td class="text-danger"> 21.06% <i class="mdi mdi-arrow-down"></i></td>
                                    <td><label class="badge badge-warning">In progress</label></td>
                                </tr>
                                <tr>
                                    <td>John</td>
                                    <td>Premier</td>
                                    <td class="text-danger"> 35.00% <i class="mdi mdi-arrow-down"></i></td>
                                    <td><label class="badge badge-info">Fixed</label></td>
                                </tr>
                                <tr>
                                    <td>Peter</td>
                                    <td>After effects</td>
                                    <td class="text-success"> 82.00% <i class="mdi mdi-arrow-up"></i></td>
                                    <td><label class="badge badge-success">Completed</label></td>
                                </tr>
                                <tr>
                                    <td>Dave</td>
                                    <td>53275535</td>
                                    <td class="text-success"> 98.05% <i class="mdi mdi-arrow-up"></i></td>
                                    <td><label class="badge badge-warning">In progress</label></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Test Table</h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> User </th>
                                <th> First name </th>
                                <th> Progress </th>
                                <th> Amount </th>
                                <th> Deadline </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-1">
                                    <img src="../../admin/assets/images/faces-clipart/pic-1.png" alt="image">
                                </td>
                                <td> Herman Beck </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td> $ 77.99 </td>
                                <td> May 15, 2015 </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <img src="../../admin/assets/images/faces-clipart/pic-2.png" alt="image">
                                </td>
                                <td> Messsy Adam </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td> $245.30 </td>
                                <td> July 1, 2015 </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <img src="../../admin/assets/images/faces-clipart/pic-3.png" alt="image">
                                </td>
                                <td> John Richards </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 90%"
                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td> $138.00 </td>
                                <td> Apr 12, 2015 </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <img src="../../admin/assets/images/faces-clipart/pic-4.png" alt="image">
                                </td>
                                <td> Peter Meggik </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td> $ 77.99 </td>
                                <td> May 15, 2015 </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <img src="../../admin/assets/images/faces-clipart/pic-1.png" alt="image">
                                </td>
                                <td> Edward </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 35%"
                                            aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td> $ 160.25 </td>
                                <td> May 03, 2015 </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <img src="../../admin/assets/images/faces-clipart/pic-2.png" alt="image">
                                </td>
                                <td> John Doe </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 65%"
                                            aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td> $ 123.21 </td>
                                <td> April 05, 2015 </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <img src="../../admin/assets/images/faces-clipart/pic-3.png" alt="image">
                                </td>
                                <td> Henry Tom </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td> $ 150.00 </td>
                                <td> June 16, 2015 </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('admin.adminscript')

</body>

</html>
