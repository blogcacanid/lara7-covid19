<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- Info boxes -->
        @foreach ($recSum as $dataSum)   
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">POSITIF</span>
                        <span class="info-box-number">{{ $dataSum['positif'] }}</span>
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
                        <span class="info-box-text">SEMBUH</span>
                        <span class="info-box-number">{{ $dataSum['sembuh'] }}</span>
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
                        <span class="info-box-text">MENINGGAL</span>
                        <span class="info-box-number">{{ $dataSum['meninggal'] }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->


        </div>
        @endforeach 
        <!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Penyebaran Corona (Covid-19) - Indonesia</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="indonesia" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Provinsi</th>
                                    <th>Positif</th>
                                    <th>Sembuh</th>
                                    <th>Meninggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($recDetails as $dataDetails)   
                                <tr>
                                    <td>{{ $dataDetails['attributes']['Provinsi'] }}</td>
                                    <td>{{ $dataDetails['attributes']['Kasus_Posi'] }}</td>
                                    <td>{{ $dataDetails['attributes']['Kasus_Semb'] }}</td>
                                    <td>{{ $dataDetails['attributes']['Kasus_Meni'] }}</td>
                                </tr>
                                @endforeach 
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Provinsi</th>
                                    <th>Positif</th>
                                    <th>Sembuh</th>
                                    <th>Meninggal</th>
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