<x-home-master>

    @section('content')
        <div class="container ">


            <!-- Main page content-->
            <div class="container p-0 m-0 mt-5 ">
                <!-- Wizard card example with navigation-->
                <div class="card">
                    <div class="card-header border-bottom">
                        <!-- Wizard navigation-->
                        <div class="nav nav-pills nav-justified flex-column flex-xl-row nav-wizard" id="cardTab"
                            role="tablist">
                            <!-- Wizard navigation item 1-->
                            <a class="nav-item nav-link ">
                                <div class="wizard-step-icon">1</div>
                                <div class="wizard-step-text">
                                    <div class="wizard-step-text-name">Car Data</div>
                                    <div class="wizard-step-text-details">Basic details and information</div>
                                </div>
                            </a>
                            <!-- Wizard navigation item 2-->
                            <a class="nav-item nav-link">
                                <div class="wizard-step-icon">2</div>
                                <div class="wizard-step-text">
                                    <div class="wizard-step-text-name">Vehicle Body Types</div>
                                    <div class="wizard-step-text-details">Type of the car</div>
                                </div>
                            </a>
                            <!-- Wizard navigation item 3-->
                            <a class="nav-item nav-link active" id="wizard1-tab" href="#wizard1" data-toggle="tab"
                                role="tab" aria-controls="wizard1" aria-selected="true">
                                <div class="wizard-step-icon">3</div>
                                <div class="wizard-step-text">
                                    <div class="wizard-step-text-name">Damages</div>
                                    <div class="wizard-step-text-details">Notification and account options</div>
                                </div>
                            </a>
                            <!-- Wizard navigation item 4-->
                            <h1 class="nav-item nav-link" id="wizard4-tab">
                                <div class="wizard-step-icon">4</div>
                                <div class="wizard-step-text">
                                    <div class="wizard-step-text-name">Images</div>
                                    <div class="wizard-step-text-details">Review and submit changes</div>
                                </div>
                            </h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="cardTabContent">
                            <!-- Wizard tab pane item 1-->
                            <div class="tab-pane py-5 py-xl-10 fade show active" id="wizard1" role="tabpanel"
                                aria-labelledby="wizard1-tab">
                                <div class="row justify-content-center">
                                    <div class="col-xxl-8 col-xl-8">
                                        <h5 class="card-title text-center">Hail AW</h5>
                                        {{-- <h3 class="text-primary">{{ $client->name }}</h3> --}}
                                        <form method="POST" action="{{ route('damage_hail.store', $car->id) }}"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="col-lg-12 mb-3 text-center">
                                                <h3>Schritt 2: Beschädigtes Bauteil wählen</h3>
                                            </div>

                                            <div class="scroll">
                                                <button class="button btn btn-light mx-2" type="button"
                                                    onclick="move(-200)">&#10094;</button>
                                                <div class="scrollmenu" id="s">

                                                    @foreach ($parts as $part)
                                                        <label>
                                                            <input type="radio" name="body_part" value="{{ $part->id }}"
                                                                class="radio-hidden">
                                                            <div class="card mx-1 shadow-none bg-light">
                                                                <img class="card-img" src="{{ $part->image }}" alt="...">
                                                                <h5 class="card-title px-3 pt-3">{{ $part->name }}</h5>
                                                            </div>
                                                        </label>
                                                    @endforeach
                                                </div>
                                                <button type="button" class="button btn btn-light mx-2"
                                                    onclick="move(200)">&#10095;</button>
                                            </div>

                                            <div class="col-lg-12 mt-3 text-center">
                                                <h3>Schritt 3: Größe der Dellen</h3>
                                            </div>

                                            <div class="col-lg-12 text-center mt-3">


                                                @foreach ($hole_types as $hole_type)
                                                    <label for="{{ $hole_type->name }}" class="l-radio">
                                                        <input type="radio" id="{{ $hole_type->name }}" name="hole_type"
                                                            value="{{ $hole_type->id }}" tabindex="3">
                                                        <span>{{ $hole_type->name }}</span>
                                                    </label>
                                                @endforeach
                                            </div>

                                            <div class="col-lg-12 mt-3 text-center">
                                                <h3>Schritt 4: Anzahl der Schäden wählen</h3>
                                            </div>

                                            <div class="col-lg-12 text-center mt-3">
                                                @foreach ($hole_numbers as $hole_number)
                                                    <label for="{{ $hole_number->name }}" class="l-radio">
                                                        <input type="radio" id="{{ $hole_number->name }}" name="hole_number"
                                                            value="{{ $hole_number->id }}" tabindex="1">
                                                        <span>{{ $hole_number->name }}</span>
                                                    </label>
                                                @endforeach


                                            </div>

                                            <div class="col-lg-12 mt-3 text-center">
                                                <h3>All Damages</h3>
                                            </div>


                                            <table class="table table-bordered table-hover overflow-auto"
                                                style="overflow: auto;" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                <tr>
                                                    <th>Body Part</th>
                                                    <th>Holes Type</th>
                                                    <th>Number of holes</th>
                                                    <th>Actions</th>

                                                </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($car->damages as $damage)
                                                        <tr>
                                                            <td>{{ $damage->body_part->name }}</td>
                                                            <td>{{ $damage->hole_type }}</td>
                                                            <td>{{ $damage->hole_number }}</td>

                                                            <td>

                                                                <div class="modal fade" id="id{{ $car->id }}"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">Delete Category
                                                                                </h5>
                                                                                <button class="close" type="button"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close"><span
                                                                                        aria-hidden="true">×</span></button>
                                                                            </div>
                                                                            <div class="modal-body">This will delete the
                                                                                selected car and all
                                                                                the data associated with it!</div>
                                                                            <div class="modal-footer"><button
                                                                                    class="btn btn-secondary" type="button"
                                                                                    data-dismiss="modal">Close</button>


                                                                                <form method="POST"
                                                                                    action="{{ route('cars.destroy', $car->id) }}">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button class="btn btn-danger"
                                                                                        type="submit">Delete</button>
                                                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <a href="" class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal"
                                data-target="#id{{ $car->id }}"><i data-feather="trash-2"></i></a>

                            </td>



                            </tr>
                            @endforeach

                            </tbody>
                            </table>

                            <button class="btn-lg btn float-right btn-primary mx-1 mt-3" type="submit">Continue</button>
                            <button class="btn-lg btn float-right btn-light mx-1 mt-3" type="submit">Add Damage &nbsp; <i
                                    class="fa fa-plus-circle"></i> </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>


    @endsection

</x-home-master>
