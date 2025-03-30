
@extends('layouts.admin')
@section('content')
<div class="content container-fluid">
<!-- Inner content -->
<div class="content-inner">


    <!-- Page header -->
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">
                    Admin - <span class="fw-normal">Dashboard</span>
                </h4>

                <a href="#page_header"
                    class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                    data-bs-toggle="collapse">
                    <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                </a>
            </div>

        </div>

        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="#" class="breadcrumb-item">Home</a>
                    <span class="breadcrumb-item active">Dashboard</span>
                </div>

                <a href="#breadcrumb_elements"
                    class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                    data-bs-toggle="collapse">
                    <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                </a>
            </div>


        </div>
    </div>
    <!-- /page header -->



    <!-- Content area -->
    <div class="content">

        <!-- Main charts -->
        <div class="row">
            <div class="col-xl-4" >

                <!-- Traffic sources -->
                <div class="card" style="height:450px;">
                    <div class="card-header d-flex align-items-center">
                        <h5 class="mb-0">Incidents by Impact</h5>
                    </div>

                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-sm-12">





                            </div>



                        </div>
                    </div>


                </div>
                <!-- /traffic sources -->

            </div>
            <div class="col-xl-4">

                <!-- Traffic sources -->
                <div class="card" style="height:450px;">
                    <div class="card-header d-flex align-items-center">
                        <h5 class="mb-0">Incidents by Asset</h5>
                    </div>

                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-sm-12">



                            </div>


                        </div>
                    </div>


                </div>
                <!-- /traffic sources -->

            </div>
            <div class="col-xl-4">

                <!-- Traffic sources -->
                <div class="card" style="height:450px;">
                    <div class="card-header d-flex align-items-center">
                        <h5 class="mb-0">Incidents by Status</h5>
                    </div>

                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-sm-12">



                            </div>


                        </div>
                    </div>


                </div>
                <!-- /traffic sources -->

            </div>
        </div>
        <!-- /main charts -->
<!-- Google Maps -->
<div class="row">
    <div class="col-md-12">
        <div class="card-body">
            <div id="map" style="width: 100%; height: 400px;"></div>
        </div>
    </div>
</div>
<!-- Google Maps -->

        <!-- Dashboard content -->
        <div class="row">
            <div class="col-xl-12">



                <!-- Recent Incidents -->
                <div class="card">
                    <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                        <h5 class="py-sm-2 my-sm-1">Recent Incidents</h5>
                    </div>



                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Description</th>
                                    <th>Impact</th>
                                    <th>Severity</th>
                                    <th><small>Location</small></th>
                                    <th>Created At</th>

                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
                <!-- /Recent Incidents -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- Pending Approvals -->
                        <div class="card">
                            <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                                <h5 class="py-sm-2 my-sm-1">Approval Pending for EA Email Notification</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Narration</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /Pending Approvals -->
                    </div>
                    <div class="col-md-6">
                        <!-- Pending Approvals -->
                        <div class="card">
                            <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                                <h5 class="py-sm-2 my-sm-1">Email Sent to EA</h5>
                            </div>



                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Narration</th>
                                            <th>Created At</th>



                                        </tr>
                                    </thead>
                                    <tbody>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /Pending Approvals -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <!--Currently Loggedin Users -->
                        <div class="card">
                            <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                                <h5 class="py-sm-2 my-sm-1">Currently Logged In Users</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>User Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Group</th>
                                            <th>Last Activity at</th>

                                        </tr>
                                    </thead>
                                    <tbody>




                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Currently Loggedin Users -->
                    </div>
                </div>



            </div>


        </div>
        <!-- /dashboard content -->

    </div>
    <!-- /content area -->


    <!-- Footer -->
    @include('partials.admin-footer')
    <!-- /footer -->
    <style>
        .gm-style-iw {
height: auto;
width: 300px;
}
      </style>

</div>
<!-- /inner content -->


@endsection
