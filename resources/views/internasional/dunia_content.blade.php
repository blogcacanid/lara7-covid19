<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">CONFIRMED</span>
                        <span class="info-box-number">{{ $recSumPositif['value'] }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-smile-beam"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">RECOVERED</span>
                        <span class="info-box-number">{{ $recSumSembuh['value'] }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-ambulance"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">DEATHS</span>
                        <span class="info-box-number">{{ $recSumMeninggal['value'] }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->


        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Penyebaran Corona (Covid-19) - Dunia</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="indonesia" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Country</th>
                                    <th>Confirmed</th>
                                    <th>Recovered</th>
                                    <th>Deaths</th>
                                    <th>Active</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($recDetails as $dataDetails)   
                                <tr>
                                    <td>{{ $dataDetails['attributes']['Country_Region'] }}</td>
                                    <td>{{ $dataDetails['attributes']['Confirmed'] }}</td>
                                    <td>{{ $dataDetails['attributes']['Recovered'] }}</td>
                                    <td>{{ $dataDetails['attributes']['Deaths'] }}</td>
                                    <td>{{ $dataDetails['attributes']['Active'] }}</td>
                                </tr>
                                @endforeach 
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Country</th>
                                    <th>Confirmed</th>
                                    <th>Recovered</th>
                                    <th>Deaths</th>
                                    <th>Active</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->


    </div><!--/. container-fluid -->
</section>
<!-- /.content -->