<x-home-master>

    @section('content')
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="filter"></i></div>
                            All cars for client : &nbsp; <b> {{$client->name}}</b>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-n10 ">
        <div class="card mb-4">
            <div class="card-header">Cars</div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Body Type</th>
                                <th>License</th>
                                <th>Images</th>
                                <th>Damage</th>
                                <th>Report</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Body Type</th>
                                <th>License</th>
                                <th>Images</th>
                                <th>Damage</th>
                                <th>Report</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($client->cars as $car )
                                <tr>

                                    <td>{{$car->brand}}</td>
                                    <td>{{$car->model}}</td>
                                    <td>{{$car->body_type}}</td>
                                    <td>{{$car->license}}</td>


                                    <td><button class="btn btn-primary">Images</button></td>
                                    <td><button class="btn btn-green">Damage</button></td>
                                    <td><button class="btn btn-secondary">Report</button></td>


                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>



    @endsection

</x-home-master>
