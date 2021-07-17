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
                            <a class="nav-item nav-link active" id="wizard1-tab" href="#wizard1" data-toggle="tab"
                            role="tab" aria-controls="wizard1" aria-selected="true">
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
                                        <h5 class="card-title text-center">Choose damage type:</h5>
                                        {{-- <h3 class="text-primary">{{ $client->name }}</h3> --}}

                                       <div class="row">
                                           <div class="col-lg-4">
                                               <a class="btn btn-primary w-100 mt-3" href="{{ route('cars.damage_hail', $car->id) }}">Hail AW</a>
                                           </div>
                                           <div class="col-lg-4">
                                                <a class="btn btn-primary w-100 mt-3" href="">Disassembly AW</a>
                                           </div>
                                           <div class="col-lg-4">
                                                <a class="btn btn-primary w-100 mt-3" href="">Flat Rates</a>
                                           </div>

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
