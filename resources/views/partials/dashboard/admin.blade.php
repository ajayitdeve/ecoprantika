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


                                <livewire:charts.incident-handeller.impact-wise-bar-chart />


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

                                <livewire:charts.incident-handeller.asset-wise-pi-chart />

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

                                <livewire:charts.incident-handeller.state-wise-pi-chart />

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
                            <tbody>
                                @foreach ($recentIncidents as $incident)
                                    <tr class="table-light">
                                        <td>{{ $incident->incident_no }}</td>
                                        <td>{{ $incident->short_description }}</td>
                                        <td>{{ isset($incident->impact) ? $incident->impact->name : null }}</td>
                                        <td>{{ isset($incident->urgency) ? $incident->urgency->name : null }}</td>
                                        <td>{{ $incident->address }}</td>
                                        <td>{{ $incident->created_at }}</td>
                                    </tr>
                                @endforeach


                            </tbody>
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
                                        @foreach ($incidentHistories as $history)
                                        @if($history->is_email==1)
                                            @if ($history->is_approved == 0)
                                                <tr>
                                                    <td>{{ $history->incident->incident_no }}</td>
                                                    <td>{{ $history->narration }}</td>
                                                    <td>{{ $history->created_at }}</td>

                                                </tr>
                                            @endif
                                            @endif
                                        @endforeach


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
                                        @foreach ($incidentHistories as $history)
                                            @if ($history->is_approved == 1)
                                                <tr>
                                                    <td>{{ $history->incident->incident_no }}</td>
                                                    <td>{{ $history->narration }}</td>
                                                    <td>{{ $history->created_at }}</td>

                                                </tr>
                                            @endif
                                        @endforeach


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
                                        @foreach($loggedinUsers as $user)
                                        <tr>
                                         <td>{{$user->user_id}}</td>
                                         <td>{{$user->user->name}}</td>
                                         <td>{{$user->user->email}}</td>
                                         <td>{{$user->user->team->name}}</td>
                                         <td>{{date("Y-m-d H:i:s", $user->last_activity)}}</td>
                                        </tr>
                                        @endforeach



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
      @push('page-script')
          <script src="https://maps.google.com/maps/api/js?key=AIzaSyAQ4w1g8_JURox-z_kg8DQRRgBSnibiYsg" type="text/javascript">
          </script>
          <script type="text/javascript">
              var data = [];
              @foreach ($incidents as $incident)
                  data.push({
                      description: '{{ $incident->description }}',
                      address:'{{$incident->address}}',
                      no:'{{$incident->incident_no}}',
                      lat: '{{ $incident->lat }}',
                      lng: '{{ $incident->lng }}'
                  });
              @endforeach
              console.log(data)
              var locations = [
                  ['Bondi Beach', -33.890542, 151.274856, 4],
                  ['Coogee Beach', -33.923036, 151.259052, 5],
                  ['Cronulla Beach', -34.028249, 151.157507, 3],
                  ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
                  ['Maroubra Beach', -33.950198, 151.259302, 1]
              ];

              var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 10,
                  center: new google.maps.LatLng(data[0].lat, data[0].lng),
                  mapTypeId: google.maps.MapTypeId.ROADMAP
              });

              var infowindow = new google.maps.InfoWindow();

              var marker, i;

              for (i = 0; i < data.length; i++) {
                  marker = new google.maps.Marker({
                      position: new google.maps.LatLng(data[i].lat, data[i].lng),
                      map: map,
                      //icon: 'https://apextechno.co.uk/fav.png'
                  });

                  google.maps.event.addListener(marker, 'click', (function(marker, i) {
                      return function() {
                      //alert(data[i].description)
                      let des=`<table>
                        <tr>
                          <th>No</th>
                           <td>${data[i].no}</td>
                        </tr>
                        <tr>
                          <th>Address</th>
                           <td>${data[i].address}</td>
                        </tr>
                         <tr>
                          <th>Description</th>
                           <td>${data[i].description}</td>
                        </tr>
                        </table>`;
                          infowindow.setContent(des);
                          infowindow.open(map, marker);
                      }
                  })(marker, i));
              }
          </script>
      @endpush
</div>
<!-- /inner content -->
