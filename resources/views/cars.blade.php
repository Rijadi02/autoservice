<x-home-master>

    @section('content')
        <div class="container ">

            {{-- <div class="card mb-4">
                <div class="card-header">
                    Add Car
                </div>

                <div class="card-body">

                    @if (isset($car))
                        <form method="POST" action="{{ route('cars.update', $car->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="col-lg-12">
                                <label for="license" class="col-md-12 col-form-label">License</label>
                                <input id="license" type="text" name="license"
                                    class="form-control @error('license') is-invalid @enderror"
                                    value="{{ old('license') ?? $car->license }}" autocomplete="license">
                                @error('license')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>\n
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="chassis" class="col-md-12 col-form-label">Chassis</label>
                                <input id="chassis" type="text" name="chassis"
                                    class="form-control @error('chassis') is-invalid @enderror"
                                    value="{{ old('chassis') ?? $car->chassis }}" autocomplete="chassis">
                                @error('chassis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>\n
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="body_type" class="col-md-12 col-form-label">Body Type</label>
                                <input id="body_type" type="text" name="body_type"
                                    class="form-control @error('body_type') is-invalid @enderror"
                                    value="{{ old('body_type') ?? $car->body_type }}" autocomplete="body_type">
                                @error('body_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>\n
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="brand" class="col-md-12 col-form-label">Brand</label>
                                <input id="brand" type="text" name="brand"
                                    class="form-control @error('brand') is-invalid @enderror"
                                    value="{{ old('brand') ?? $car->brand }}" autocomplete="brand">
                                @error('brand')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>\n
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="model" class="col-md-12 col-form-label">Model</label>
                                <input id="model" type="text" name="model"
                                    class="form-control @error('model') is-invalid @enderror"
                                    value="{{ old('model') ?? $car->model }}" autocomplete="model">
                                @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>\n
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="color" class="col-md-12 col-form-label">Color</label>
                                <input id="color" type="text" name="color"
                                    class="form-control @error('color') is-invalid @enderror"
                                    value="{{ old('color') ?? $car->color }}" autocomplete="color">
                                @error('color')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>\n
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="year" class="col-md-12 col-form-label">Year</label>
                                <input id="year" type="number" name="year"
                                    class="form-control @error('year') is-invalid @enderror"
                                    value="{{ old('year') ?? $car->year }}" autocomplete="year">
                                @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>\n
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="fuel" class="col-md-12 col-form-label">Fuel</label>
                                <input id="fuel" type="text" name="fuel"
                                    class="form-control @error('fuel') is-invalid @enderror"
                                    value="{{ old('fuel') ?? $car->fuel }}" autocomplete="fuel">
                                @error('fuel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>\n
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="weight" class="col-md-12 col-form-label">Weight</label>
                                <input id="weight" type="text" name="weight"
                                    class="form-control @error('weight') is-invalid @enderror"
                                    value="{{ old('weight') ?? $car->weight }}" autocomplete="weight">
                                @error('weight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>\n
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3 d-flex" style="justify-content: center">
                                <button type="submit" class="btn btn-primary pr-5 pl-5 mt-1">Update</button>
                        </form>

                    @else

                        <form method="POST" action="{{ route('cars.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="col-lg-12">
                                <label for="license" class="col-md-12 col-form-label">License</label>
                                <input id="license" type="text" name="license"
                                    class="form-control @error('license') is-invalid @enderror"
                                    value="{{ old('license') }}" autocomplete="license">
                                @error('license')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="chassis" class="col-md-12 col-form-label">Chassis</label>
                                <input id="chassis" type="text" name="chassis"
                                    class="form-control @error('chassis') is-invalid @enderror"
                                    value="{{ old('chassis') }}" autocomplete="chassis">
                                @error('chassis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="body_type" class="col-md-12 col-form-label">Body Type</label>
                                <input id="body_type" type="text" name="body_type"
                                    class="form-control @error('body_type') is-invalid @enderror"
                                    value="{{ old('body_type') }}" autocomplete="body_type">
                                @error('body_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="brand" class="col-md-12 col-form-label">Brand</label>
                                <input id="brand" type="text" name="brand"
                                    class="form-control @error('brand') is-invalid @enderror" value="{{ old('brand') }}"
                                    autocomplete="brand">
                                @error('brand')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="model" class="col-md-12 col-form-label">Model</label>
                                <input id="model" type="text" name="model"
                                    class="form-control @error('model') is-invalid @enderror" value="{{ old('model') }}"
                                    autocomplete="model">
                                @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="color" class="col-md-12 col-form-label">Color</label>
                                <input id="color" type="text" name="color"
                                    class="form-control @error('color') is-invalid @enderror" value="{{ old('color') }}"
                                    autocomplete="color">
                                @error('color')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="year" class="col-md-12 col-form-label">Year</label>
                                <input id="year" type="number" name="year"
                                    class="form-control @error('year') is-invalid @enderror" value="{{ old('year') }}"
                                    autocomplete="year">
                                @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="fuel" class="col-md-12 col-form-label">Fuel</label>
                                <input id="fuel" type="text" name="fuel"
                                    class="form-control @error('fuel') is-invalid @enderror" value="{{ old('fuel') }}"
                                    autocomplete="fuel">
                                @error('fuel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="weight" class="col-md-12 col-form-label">Weight</label>
                                <input id="weight" type="text" name="weight"
                                    class="form-control @error('weight') is-invalid @enderror"
                                    value="{{ old('weight') }}" autocomplete="weight">
                                @error('weight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3 d-flex" style="justify-content: center">
                                <button type="submit" class="btn btn-primary pr-5 pl-5 mt-1">Add Car</button>
                        </form>
                    @endif

                </div>
            </div>
        </div>
        <div class="container p-0 m-0 mt-5 ">

            <div class="card mb-4">
                <div class="card-header">All cars</div>
                <div class="card-body">
                    <div class="datatable" style="overflow-x:auto;">
                        <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;" id="dataTable"
                            width="100%" cellspacing="0">
                            <tr>
                                <th>Name</th>
                                <th>Register Car/Damage</th>
                                <th>All Car/Damage</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Register Car/Damage</th>
                                    <th>All Car/Damage</th>

                                    <th>Actions</th>

                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($cars as $car)
                                    <tr>
                                        <td>{{ $car->name }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('cars.edit', $car->id) }}">Add
                                                car/damage</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-secondary" href="{{ route('cars.edit', $car->id) }}">All
                                                cars</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-datatable btn-icon btn-transparent-dark mr-2"
                                                href="{{ route('cars.edit', $car->id) }}"><i data-feather="edit"></i></a>

                                            <div class="modal fade" id="id{{ $car->id }}" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete Category
                                                            </h5>
                                                            <button class="close" type="button" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="modal-body">This will delete the selected car and all
                                                            the data associated with it!</div>
                                                        <div class="modal-footer"><button class="btn btn-secondary"
                                                                type="button" data-dismiss="modal">Close</button>


                                                            <form method="POST"
                                                                action="{{ route('cars.destroy', $car->id) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit">Delete</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <a href="" class="btn btn-datatable btn-icon btn-transparent-dark"
                                                data-toggle="modal" data-target="#id{{ $car->id }}"><i
                                                    data-feather="trash-2"></i></a>

                                        </td>



                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div> --}}


            <!-- Main page content-->
            <div class="container p-0 m-0 mt-5 ">
                <!-- Wizard card example with navigation-->
                <div class="card">
                    <div class="card-header border-bottom">
                        <!-- Wizard navigation-->
                        <div class="nav nav-pills nav-justified flex-column flex-xl-row nav-wizard" id="cardTab"
                            role="tablist">
                            <!-- Wizard navigation item 1-->
                            <a class="nav-item nav-link active" id="wizard1-tab" href="#wizard1" data-toggle="tab"
                                role="tab" aria-controls="wizard1" aria-selected="true">
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
                            <a class="nav-item nav-link" id="wizard3-tab">
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
                                    <div class="col-xxl-6 col-xl-8">
                                        <h5 class="card-title">Client Name:</h5>
                                        <h3 class="text-primary">{{ $client->name }}</h3>

                                        <form method="POST" action="{{ route('cars.store', $client->id) }}"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-row">
                                                <div class="col-md-6 form-group">
                                                    <label for="license" class="col-md-12 col-form-label">License</label>
                                                    <input id="license" type="text" name="license"
                                                        placeholder="License Plate"
                                                        class="form-control @error('license') is-invalid @enderror"
                                                        value="{{ old('license') }}" autocomplete="license">
                                                    @error('license')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <label for="chassis" class="col-md-12 col-form-label">Chassis</label>
                                                    <input id="chassis" type="number" name="chassis"
                                                        placeholder="Chassis Number"
                                                        class="form-control @error('chassis') is-invalid @enderror"
                                                        value="{{ old('chassis') }}" autocomplete="chassis">
                                                    @error('chassis')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                {{-- <div class="col-md-4 form-group">
                                                    <label for="body_type" class="col-md-12 col-form-label">Body
                                                        Type</label>
                                                    <input id="body_type" type="number" name="body_type"
                                                        placeholder="Body type"
                                                        class="form-control @error('body_type') is-invalid @enderror"
                                                        value="{{ old('body_type') }}" autocomplete="body_type">
                                                    @error('body_type')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div> --}}
                                                <label class="col-lg-12 text-center" for="body_type">Select Body Type</label>
                                                <div class="col-lg-12 scroll">
                                                    <button class="button btn btn-light mx-2" type="button"
                                                        onclick="move(-200)">&#10094;</button>
                                                    <div class="scrollmenu" id="s">

                                                            <label>
                                                                <input type="radio" name="body_type" value="1"
                                                                    class="radio-hidden">
                                                                <div class="card mx-1 shadow-none bg-light">
                                                                    <img class="card-img" style="width: 200px;height: 200px" src="http://hagelrechner.com/css/dellenrechner/images/pkw3.jpg" alt="...">
                                                                    <h5 class="card-title px-3 pt-3">PKW 3-Turing</h5>
                                                                </div>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="body_type" value="1"
                                                                    class="radio-hidden">
                                                                <div class="card mx-1 shadow-none bg-light">
                                                                    <img class="card-img" style="width: 200px;height: 200px" src="http://hagelrechner.com/css/dellenrechner/images/pkw3.jpg" alt="...">
                                                                    <h5 class="card-title px-3 pt-3">PKW 3-Turing</h5>
                                                                </div>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="body_type" value="1"
                                                                    class="radio-hidden">
                                                                <div class="card mx-1 shadow-none bg-light">
                                                                    <img class="card-img" style="width: 200px;height: 200px" src="http://hagelrechner.com/css/dellenrechner/images/pkw3.jpg" alt="...">
                                                                    <h5 class="card-title px-3 pt-3">PKW 3-Turing</h5>
                                                                </div>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="body_type" value="1"
                                                                    class="radio-hidden">
                                                                <div class="card mx-1 shadow-none bg-light">
                                                                    <img class="card-img" style="width: 200px;height: 200px" src="http://hagelrechner.com/css/dellenrechner/images/pkw3.jpg" alt="...">
                                                                    <h5 class="card-title px-3 pt-3">PKW 3-Turing</h5>
                                                                </div>
                                                            </label> <label>
                                                                <input type="radio" name="body_type" value="1"
                                                                    class="radio-hidden">
                                                                <div class="card mx-1 shadow-none bg-light">
                                                                    <img class="card-img" style="width: 200px;height: 200px" src="http://hagelrechner.com/css/dellenrechner/images/pkw3.jpg" alt="...">
                                                                    <h5 class="card-title px-3 pt-3">PKW 3-Turing</h5>
                                                                </div>
                                                            </label> <label>
                                                                <input type="radio" name="body_type" value="1"
                                                                    class="radio-hidden">
                                                                <div class="card mx-1 shadow-none bg-light">
                                                                    <img class="card-img" style="width: 200px;height: 200px" src="http://hagelrechner.com/css/dellenrechner/images/pkw3.jpg" alt="...">
                                                                    <h5 class="card-title px-3 pt-3">PKW 3-Turing</h5>
                                                                </div>
                                                            </label>
                                                    </div>
                                                    <button type="button" class="button btn btn-light mx-2"
                                                        onclick="move(200)">&#10095;</button>
                                                </div>


                                                {{-- <div class="form-group col-md-6 ">
                                                    <label for="brand" class="col-md-12 col-form-label">Brand</label>
                                                    <select class="form-control @error('brand') is-invalid @enderror" id="brand" name="brand">
                                                        <option value="4">Audi</option>
                                                        <option value="2">Saab</option>
                                                        <option value="3">Mercedes</option>
                                                        <option value="1">Volvo</option>
                                                    </select>
                                                    @error('brand')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>



                                                <div class="form-group col-md-6 ">
                                                    <label for="model" class="col-md-12 col-form-label">Model</label>
                                                    <select class="form-control @error('model') is-invalid @enderror" id="model" name="model">
                                                        <option value="1">A4</option>
                                                        <option value="2">A6</option>
                                                        <option value="3">Q7</option>
                                                        <option value="4">R8</option>
                                                        <option value="5">A3</option>
                                                    </select>
                                                    @error('model')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div> --}}


                                                    {{-- aaaaaaaa --}}


                                                    <div class="form-group col-md-6 ">
                                                        <label for="brand" class="col-md-12 col-form-label">Brand:</label>
                                                        <select name="brand" id="brand"
                                                                class="form-control @error('brand') is-invalid @enderror"
                                                                value="{{ old('brand') }}" autocomplete="brand" autofocus>
                                                                <option value="">Select Brand</option>
                                                                @foreach ($brands as $brand)
                                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('brand')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group col-md-6 ">
                                                        <label for="model" class="col-md-12 col-form-label">Type:</label>
                                                        <select name="model" id="model"
                                                                class="form-control @error('model') is-invalid @enderror"
                                                            value="{{ old('model') }}" autocomplete="model" autofocus>
                                                            <option value="" id="0">Select type</option>
                                                            @foreach ($models as $model)
                                                                <option value="{{ $model->id }}" id="{{$model->brands->id}}" >{{ $model->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('model')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                    <script>

                                                       var mark =  $("#brand").find(':selected').attr('value');
                                                       var type =  $("#model").find(':selected').attr('data-x');
                                                       $("#model").hide();
                                                       $(document).on('change', '#brand', function() {
                                                            mark =  $("#brand").find(':selected').attr('value');
                                                            $("#model").show();
                                                            $("#model option")[0].selected = true
                                                        $("#model option").each(function(i){
                                                        if (this.attributes.id.value == mark || this.attributes.id.value == "0"){
                                                            $(this).css("display", "block");
                                                        }else{
                                                            $(this).css("display", "none");
                                                        }

                                                        });
                                                        });

                                                    </script>



                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 ">
                                                    <label for="color" class="col-md-12 col-form-label">Color</label>
                                                    <select class="form-control @error('color') is-invalid @enderror" id="color" name="color">
                                                        <option value="1">Red</option>
                                                        <option value="2">White</option>
                                                        <option value="3">Black</option>
                                                        <option value="4">Blue</option>
                                                        <option value="5">Silver</option>
                                                        <option value="6">Green</option>
                                                        <option value="7">Purple</option>
                                                    </select>
                                                    @error('color')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <label for="year" class="col-md-12 col-form-label">Year</label>
                                                    <input id="year" type="number" name="year" placeholder="Year"
                                                        class="form-control @error('year') is-invalid @enderror"
                                                        value="{{ old('year') }}" autocomplete="year">
                                                    @error('year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6 form-group">
                                                    <label for="fuel" class="col-md-12 col-form-label">Fuel</label>
                                                    <input id="fuel" type="text" name="fuel" placeholder="Fuel (Liters)"
                                                        class="form-control @error('fuel') is-invalid @enderror"
                                                        value="{{ old('fuel') }}" autocomplete="fuel">
                                                    @error('fuel')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <label for="weight" class="col-md-12 col-form-label">Weight</label>
                                                    <input id="weight" type="number" name="weight" placeholder="Weight (kg)"
                                                        class="form-control @error('weight') is-invalid @enderror"
                                                        value="{{ old('weight') }}" autocomplete="weight">
                                                    @error('weight')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <hr class="my-4" />
                                            <div class="d-flex justify-content-between">
                                                <button class="btn btn-light disabled" type="button"
                                                    disabled>Car Registration</button>
                                                <button type="submit" class="btn btn-primary">Next</button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Wizard tab pane item 2-->
                            <div class="tab-pane py-5 py-xl-10 fade" id="wizard2" role="tabpanel"
                                aria-labelledby="wizard2-tab">
                                <div class="row justify-content-center">
                                    <div class="col-xxl-6 col-xl-8">
                                        <h3 class="text-primary">Step 2</h3>
                                        <h5 class="card-title">Enter your billing details</h5>
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="small mb-1" for="inputBillingName">Name on card</label>
                                                    <input class="form-control" id="inputBillingName" type="text"
                                                        placeholder="Enter the name as it appears on your card"
                                                        value="Valerie Luna" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="small mb-1" for="inputBillingCCNumber">Card number</label>
                                                    <input class="form-control" id="inputBillingCCNumber" type="text"
                                                        placeholder="Enter your credit card number"
                                                        value="4444 3333 2222 1111" />
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4 mb-4 mb-md-0">
                                                    <label class="small mb-1" for="inputOrgName">Card expiry month</label>
                                                    <input class="form-control" id="inputOrgName" type="text"
                                                        placeholder="Enter expiry month" value="06" />
                                                </div>
                                                <div class="form-group col-md-4 mb-4 mb-md-0">
                                                    <label class="small mb-1" for="inputLocation">Card expiry year</label>
                                                    <input class="form-control" id="inputLocation" type="text"
                                                        placeholder="Enter expiry year" value="2024" />
                                                </div>
                                                <div class="form-group col-md-4 mb-0">
                                                    <label class="small mb-1" for="inputLocation">CVV Number</label>
                                                    <input class="form-control" id="inputLocation" type="password"
                                                        placeholder="Enter CVV number" value="111" />
                                                </div>
                                            </div>
                                            <hr class="my-4" />
                                            <div class="d-flex justify-content-between">
                                                <button class="btn btn-light" type="button"
                                                    onclick="$('#wizard1-tab').trigger('click')">Previous</button>
                                                <button class="btn btn-primary" type="button"
                                                    onclick="$('#wizard3-tab').trigger('click')">Next</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Wizard tab pane item 3-->
                            <div class="tab-pane py-5 py-xl-10 fade" id="wizard3" role="tabpanel"
                                aria-labelledby="wizard3-tab">
                                <div class="row justify-content-center">
                                    <div class="col-xxl-6 col-xl-8">
                                        <h3 class="text-primary">Step 3</h3>
                                        <h5 class="card-title">Choose when you want to receive email notifications</h5>
                                        <form>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="checkAccountChanges" type="checkbox"
                                                    checked />
                                                <label class="custom-control-label" for="checkAccountChanges">Changes made
                                                    to your account</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="checkAccountGroups" type="checkbox"
                                                    checked />
                                                <label class="custom-control-label" for="checkAccountGroups">Changes are
                                                    made to groups you're part of</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="checkProductUpdates" type="checkbox"
                                                    checked />
                                                <label class="custom-control-label" for="checkProductUpdates">Product
                                                    updates for products you've purchased or starred</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="checkProductNew" type="checkbox"
                                                    checked />
                                                <label class="custom-control-label" for="checkProductNew">Information on new
                                                    products and services</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="checkPromotional" type="checkbox" />
                                                <label class="custom-control-label" for="checkPromotional">Marketing and
                                                    promotional offers</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="checkSecurity" type="checkbox"
                                                    checked disabled />
                                                <label class="custom-control-label" for="checkSecurity">Security
                                                    alerts</label>
                                            </div>
                                            <hr class="my-4" />
                                            <div class="d-flex justify-content-between">
                                                <button class="btn btn-light" type="button"
                                                    onclick="$('#wizard2-tab').trigger('click')">Previous</button>
                                                <button class="btn btn-primary" type="button"
                                                    onclick="$('#wizard4-tab').trigger('click')">Next</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Wizard tab pane item 4-->
                            <div class="tab-pane py-5 py-xl-10 fade" id="wizard4" role="tabpanel"
                                aria-labelledby="wizard4-tab">
                                <div class="row justify-content-center">
                                    <div class="col-xxl-6 col-xl-8">
                                        <h3 class="text-primary">Step 4</h3>
                                        <h5 class="card-title">Review the following information and submit</h5>
                                        <div class="row small text-muted">
                                            <div class="col-sm-3 text-truncate"><em>Username:</em></div>
                                            <div class="col">username</div>
                                        </div>
                                        <div class="row small text-muted">
                                            <div class="col-sm-3 text-truncate"><em>Name:</em></div>
                                            <div class="col">Valerie Luna</div>
                                        </div>
                                        <div class="row small text-muted">
                                            <div class="col-sm-3 text-truncate"><em>Organization Name:</em></div>
                                            <div class="col">Start Bootstrap</div>
                                        </div>
                                        <div class="row small text-muted">
                                            <div class="col-sm-3 text-truncate"><em>Location:</em></div>
                                            <div class="col">San Francisco, CA</div>
                                        </div>
                                        <div class="row small text-muted">
                                            <div class="col-sm-3 text-truncate"><em>Email Address:</em></div>
                                            <div class="col">name@example.com</div>
                                        </div>
                                        <div class="row small text-muted">
                                            <div class="col-sm-3 text-truncate"><em>Phone Number:</em></div>
                                            <div class="col">555-123-4567</div>
                                        </div>
                                        <div class="row small text-muted">
                                            <div class="col-sm-3 text-truncate"><em>Birthday:</em></div>
                                            <div class="col">06/10/1988</div>
                                        </div>
                                        <div class="row small text-muted">
                                            <div class="col-sm-3 text-truncate"><em>Credit Card Number:</em></div>
                                            <div class="col">**** **** **** 1111</div>
                                        </div>
                                        <div class="row small text-muted">
                                            <div class="col-sm-3 text-truncate"><em>Credit Card Expiration:</em></div>
                                            <div class="col">06/2024</div>
                                        </div>
                                        <hr class="my-4" />
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-light" type="button"
                                                onclick="$('#wizard3-tab').trigger('click')">Previous</button>
                                            <button class="btn btn-primary" type="button">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        @endsection

</x-home-master>
