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
                                                        <input type="radio" class="radio-hidden" name="body_part" value="1"
                                                            checked>
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/dach.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            Dach</p>
                                                    </label>
                                                    <label>
                                                        <input type="radio" class="radio-hidden" name="body_part"
                                                            value="2">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/dachholmright.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            Dach Holm r.</p>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="body_part" value="3"
                                                            class="radio-hidden">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/motorhaube.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            Motorhaube</p>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="body_part" value="4"
                                                            class="radio-hidden">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/kotfluegelfrontright.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            Kotfluegel vo. re.</p>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="body_part" value="5"
                                                            class="radio-hidden">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/tuerfrontright.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            Tur .vo .re</p>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="body_part" value="6"
                                                            class="radio-hidden">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/tuerbackright.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            Tur .he .re</p>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="body_part" value="7"
                                                            class="radio-hidden">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/seitenwandbackright.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            Seitenwand .vo .re</p>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="body_part" value="8"
                                                            class="radio-hidden">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/kofferraumdeckel.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            Kofferraumdeckel</p>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="body_part" value="9"
                                                            class="radio-hidden">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/heckklappe.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            Heckklappe</p>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="body_part" value="10"
                                                            class="radio-hidden">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/heckklappenspoiler.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            Heckklappe Oberseite</p>
                                                    </label>

                                                    <label>
                                                        <input type="radio" class="radio-hidden" name="body_part"
                                                            value="13">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/dachholmright.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            Dach Holm r.</p>
                                                    </label>

                                                    <label>
                                                        <input type="radio" name="body_part" value="14"
                                                            class="radio-hidden">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/kotfluegelfrontright.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            Kotfluegel vo. re.</p>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="body_part" value="15"
                                                            class="radio-hidden">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/tuerfrontright.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            Tur .vo .le</p>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="body_part" value="16"
                                                            class="radio-hidden">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/tuerbackright.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            Tur .he .le</p>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="body_part" value="17"
                                                            class="radio-hidden">
                                                        <img
                                                            src="http://hagelrechner.com/css/dellenrechner/images/parts/seitenwandbackright.jpg">
                                                        <p
                                                            style="width: 100%; color: white; background-color: black; padding: 10px; text-align: center">
                                                            Seitenwand .vo .le</p>
                                                    </label>


                                                </div>
                                                <button type="button" class="button" onclick="move(200)">&#10095;</button>
                                            </div>

                                            <div class="col-lg-12 mt-3 text-center">
                                                <h3>Schritt 3: Größe der Dellen</h3>
                                            </div>

                                            <div class="col-lg-12 text-center mt-3">
                                                <label for="f-option" class="l-radio">
                                                    <input type="radio" id="f-option" name="hole_type" value="1" tabindex="1">
                                                    <span>groß ( 30-45 mm )</span>
                                                </label>
                                                <label for="s-option" class="l-radio">
                                                    <input type="radio" id="s-option" name="hole_type" value="2"  tabindex="2">
                                                    <span>mittel ( 20-30 mm )</span>
                                                </label>
                                                <label for="t-option" class="l-radio">
                                                    <input type="radio" id="t-option" name="hole_type" value="3" tabindex="3">
                                                    <span>klein ( bis 20 mm )</span>
                                                </label>
                                            </div>

                                            <div class="col-lg-12 mt-3 text-center">
                                                <h3>Schritt 4: Anzahl der Schäden wählen</h3>
                                            </div>

                                            <div class="col-lg-12 text-center mt-3">
                                                <label for="1" class="l-radio">
                                                    <input type="radio" id="1" name="hole_number" value="1" value="1" tabindex="1">
                                                    <span>1</span>
                                                </label>
                                                <label for="2_3" class="l-radio">
                                                    <input type="radio" id="2_3" name="hole_number" value="2" tabindex="2">
                                                    <span>2-3</span>
                                                </label>
                                                <label for="4_6" class="l-radio">
                                                    <input type="radio" id="4_6" name="hole_number" value="3"  tabindex="3">
                                                    <span>4-6</span>
                                                </label>
                                                <label for="7_10" class="l-radio">
                                                    <input type="radio" id="7_10" name="hole_number" value="4" tabindex="3">
                                                    <span>7-10</span>
                                                </label>
                                                <label for="11_15" class="l-radio">
                                                    <input type="radio" id="11_15" name="hole_number" value="5" tabindex="3">
                                                    <span>11-15</span>
                                                </label>
                                                <label for="16_20" class="l-radio">
                                                    <input type="radio" id="16_20" name="hole_number" value="6" tabindex="3">
                                                    <span>16-20</span>
                                                </label><label for="21_25" class="l-radio">
                                                    <input type="radio" id="21_25" name="hole_number" value="7" tabindex="3">
                                                    <span>21-25</span>
                                                </label><label for="26_30" class="l-radio">
                                                    <input type="radio" id="26_30" name="hole_number" value="8" tabindex="3">
                                                    <span>26-30</span>
                                                </label><label for="31_40" class="l-radio">
                                                    <input type="radio" id="31_40" name="hole_number" value="9" tabindex="3">
                                                    <span>31-40</span>
                                                </label><label for="41_50" class="l-radio">
                                                    <input type="radio" id="41_50" name="hole_number" value="10" tabindex="3">
                                                    <span>41-50</span>
                                                </label><label for="51_60" class="l-radio">
                                                    <input type="radio" id="51_60" name="hole_number" value="11" tabindex="3">
                                                    <span>51-60</span>
                                                </label><label for="61_80" class="l-radio">
                                                    <input type="radio" id="61_80" name="hole_number" value="12" tabindex="3">
                                                    <span>61-80</span>
                                                </label><label for="81_100" class="l-radio">
                                                    <input type="radio" id="81_100" name="hole_number" value="13" tabindex="3">
                                                    <span>81-100</span>
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
