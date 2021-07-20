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
                            <a class="nav-item nav-link " >
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
                            <a class="nav-item nav-link active" id="wizard3-tab" id="wizard1-tab" href="#wizard1" data-toggle="tab"
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
                                    <div class="col-xxl-6 col-xl-8">


                                        <form method="POST" action="{{ route('flat_rates.store', $car->id) }}"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-row">
                                                <div class="col-md-12 form-group">
                                                    <label for="parking_damage" class="col-md-12 col-form-label">Parking Damage</label>
                                                    <input id="parking_damage" type="number" name="parking_damage"
                                                        placeholder="Parking Damage"
                                                        class="form-control @error('parking_damage') is-invalid @enderror"
                                                        value="{{ old('parking_damage') }}" autocomplete="parking_damage">
                                                    @error('parking_damage')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <label for="disassambly" class="col-md-12 col-form-label">Disassambly</label>
                                                    <input id="disassambly" type="number" name="disassambly"
                                                        placeholder="Disassambly"
                                                        class="form-control @error('license') is-invalid @enderror"
                                                        value="{{ old('disassambly') }}" autocomplete="disassambly">
                                                    @error('disassambly')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>


                                                <div class="col-md-12 form-group">
                                                    <label for="hail_damage" class="col-md-12 col-form-label">Hail Damage</label>
                                                    <input id="hail_damage" type="number" name="hail_damage"
                                                        placeholder="Hail Damage"
                                                        class="form-control @error('hail_damage') is-invalid @enderror"
                                                        value="{{ old('hail_damage') }}" autocomplete="hail_damage">
                                                    @error('hail_damage')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">

                                            <hr class="my-4" />
                                            <div class="d-flex justify-content-between">

                                                <button type="submit" class="btn btn-primary">Next</button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Wizard tab pane item 2-->

                        </div>
                    </div>
                </div>
            </div>


        @endsection

</x-home-master>
