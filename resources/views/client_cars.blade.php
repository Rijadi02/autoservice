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


                                    <td><button class="btn btn-primary"  type="button" data-toggle="modal"
                                        data-target="#exampleModal{{$car->id}}">Images</button></td>

<td>


    @switch(count($car->damages) > 0 ? $car->damages[0]['damage_type'] : "")
    @case(1)
      <a class="btn btn-green text-white" href="{{route('cars.damage_hail', $car->id)}}" >Damage</a>

        @break

    @case(2)
        <a class="btn btn-green text-white" href="{{route('cars.damage_hail', $car->id)}}" >Damage</a>

        @break

    @default
        <a class="btn btn-green text-white">Flat Rates</a>
    @endswitch
</td>

@if(Auth::user()->role_id  == 1)
<td><button class="btn btn-secondary">Admin Report</button></td>
@else
<td><button class="btn btn-secondary">Report</button></td>

@endif



                                    <div class="modal fade" id="exampleModal{{$car->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" style="max-width:50%" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Car images</h5>
                                                <button class="close" type="button" data-dismiss="modal"
                                                    aria-label="Close"><span
                                                        aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        @foreach ((array) json_decode($car->images) as $image)
                                                        <div class="col-lg-12">
                                                            <img style="max-width: 100%" src="/uploads/{{$image}}" alt="">

                                                        </div>
                                                        @endforeach

                                                    </div>
                                                </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button"
                                                    data-dismiss="modal">Close</button>
                                                <button class="btn btn-primary" type="button">Save
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
