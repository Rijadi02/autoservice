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
                                                <button class="button" type="button" onclick="move(-200)">&#10094;</button>
                                                <div class="scrollmenu" id="s">
                                                    <label>
                                                        <input type="radio" class="radio-hidden" name="test" value="small"
                                                            checked>
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/dachholmright.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            hello</p>
                                                    </label>
                                                    <label>
                                                        <input type="radio" class="radio-hidden" name="test" value="small">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/dachholmright.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            hello</p>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="test" value="small" class="radio-hidden">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/dachholmright.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            hello</p>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="test" value="small" class="radio-hidden">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/dachholmright.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            hello</p>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="test" value="small" class="radio-hidden">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/dachholmright.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            hello</p>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="test" value="small" class="radio-hidden">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/dachholmright.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            hello</p>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="test" value="small" class="radio-hidden">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/dachholmright.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            hello</p>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="test" value="small" class="radio-hidden">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/dachholmright.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            hello</p>
                                                    </label>
                                                </div>
                                                <button type="button" class="button" onclick="move(200)">&#10095;</button>
                                            </div>

                                            <div class="col-lg-12 mt-3 text-center">
                                                <h3>Schritt 3: Größe der Dellen</h3>
                                            </div>

                                            <div class="col-lg-12 text-center mt-3">
                                                <label for="f-option" class="l-radio">
                                                    <input type="radio" id="f-option" name="size" tabindex="1">
                                                    <span>groß ( 30-45 mm )</span>
                                                </label>
                                                <label for="s-option" class="l-radio">
                                                    <input type="radio" id="s-option" name="size" tabindex="2">
                                                    <span>mittel ( 20-30 mm )</span>
                                                </label>
                                                <label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="size" tabindex="3">
                                                    <span>klein ( bis 20 mm )</span>
                                                </label>
                                            </div>

                                            <div class="col-lg-12 mt-3 text-center">
                                                <h3>Schritt 4: Anzahl der Schäden wählen</h3>
                                            </div>

                                            <div class="col-lg-12 text-center mt-3">
                                                <label for="f-option" class="l-radio">
                                                    <input type="radio" id="f-option" name="size" tabindex="1">
                                                    <span>1</span>
                                                </label>
                                                <label for="s-option" class="l-radio">
                                                    <input type="radio" id="s-option" name="size" tabindex="2">
                                                    <span>2-3</span>
                                                </label>
                                                <label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="size" tabindex="3">
                                                    <span>4-6</span>
                                                </label>
                                                <label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="size" tabindex="3">
                                                    <span>4-6</span>
                                                </label><label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="size" tabindex="3">
                                                    <span>4-6</span>
                                                </label><label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="size" tabindex="3">
                                                    <span>4-6</span>
                                                </label><label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="size" tabindex="3">
                                                    <span>4-6</span>
                                                </label><label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="size" tabindex="3">
                                                    <span>4-6</span>
                                                </label><label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="size" tabindex="3">
                                                    <span>4-6</span>
                                                </label><label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="size" tabindex="3">
                                                    <span>4-6</span>
                                                </label><label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="size" tabindex="3">
                                                    <span>4-6</span>
                                                </label><label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="size" tabindex="3">
                                                    <span>4-6</span>
                                                </label><label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="size" tabindex="3">
                                                    <span>4-6</span>
                                                </label><label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="size" tabindex="3">
                                                    <span>4-6</span>
                                                </label><label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="size" tabindex="3">
                                                    <span>4-6</span>
                                                </label><label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="size" tabindex="3">
                                                    <span>4-6</span>
                                                </label>
                                                <label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="size" tabindex="3">
                                                    <span>4-6</span>
                                                </label><label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="size" tabindex="3">
                                                    <span>4-6</span>
                                                </label><label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="size" tabindex="3">
                                                    <span>4-6</span>
                                                </label><label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="size" tabindex="3">
                                                    <span>4-6</span>
                                                </label>
                                                <label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="size" tabindex="3">
                                                    <span>4-6</span>
                                                </label>
                                            </div>


                                            <button class="btn btn-primary" type="submit">Add Damage</button>
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
