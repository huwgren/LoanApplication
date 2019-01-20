

@extends('Application.layouts.default')

@section('content')

    <div class="row col-md-8 offset-md-2 col-xs-12" style=" padding-left: 30px; margin-bottom: 30px; color: grey"> <h3>Unsecured Personal Loan</h3> </div>

    <div class="row col-md-8 offset-md-2 col-xs-12">
        <div class="col-12">
            <div class="row mb-3">
                <div class="col-sm" style="border-bottom-color:#659267; border-bottom-style: solid; border-bottom-width: 5px; border-top-style: solid; border-top-color: whitesmoke; margin-left: 15px;">
                    Step 1
                    <br>
                    <strong>Loan details</strong>
                </div>
                <div class="col-sm"style="border-bottom-color:#659267; border-bottom-style: solid; border-bottom-width: 5px; border-top-style: solid; border-top-color: whitesmoke;">
                    Step 2
                    <br>
                    <strong>About you</strong>
                </div>
                <div class="col-sm"style="border-bottom-color:lightgrey; border-bottom-style: solid; border-top-style: solid; border-top-color: whitesmoke;">
                    Step 3
                    <br>
                    <strong>Finances</strong>
                </div>
                <div class="col-sm"style="border-bottom-color:lightgrey; border-bottom-style: solid; border-top-style: solid; border-top-color: whitesmoke; margin-right: 15px;">
                    Step 4
                    <br>
                    <strong>Review and apply</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="row col-md-8 offset-md-2 col-xs-12">
        <div class="col-12">
            <div class="card" style="border-style: none; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
                <div class="card-header" style=" border-radius:5px 5px 0px 0px ; border-style: none; background-color: #659267; color: white">
                    <h5 class="mb-0">About you</h5>
                </div>

                <div class="card-body" style="border-radius: 0px 0px 5px 5px;;background-color:#efebe4" >

                    <form class="needs-validation" method="post" action="/xxx" novalidate>

                        @csrf

                        <!-- SECTION HEADER - Tell us about yourself - -->
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                                <strong>Tell us about yourself</strong>
                            </div>

                            <!-- name -->
                            <div class="form-row">
                                <!-- title -->
                                <div class="form-group col-lg-2">
                                    <label for="titleName">Title</label>
                                    <select class="form-control" id="titleName" name="titleName" required>
                                        <option value="" >Please Select</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Miss">Miss</option>
                                        <option value="Ms">Ms</option>
                                        <option value="Dr">Dr</option>
                                    </select>
                                </div>

                                <!-- first name -->
                                <div class="form-group col-lg-3">
                                    <label for="firstName">First name</label>
                                    <input type="text" class="form-control" id="firstName">
                                </div>

                                <!-- middle name -->
                                <div class="form-group col-lg-3">
                                    <label for="middleName">Middle name (if any)</label>
                                    <input type="text" class="form-control" id="middleName">
                                </div>

                                <!-- last name -->
                                <div class="form-group col-lg-4">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control" id="lastName">
                                </div>
                            </div>

                            <!-- DOB, drivers licence -->
                            <div class="form-row">

                                <!-- DOB -->
                                <div class="form-group col-lg-3">
                                    <label for="DOB">Date of birth</label>
                                    <input type="text" class="form-control" id="DOB" placeholder="DD/MM/YYYY">
                                </div>

                                <!-- drivers licence number -->
                                <div class="form-group col-lg-3">
                                    <label for="driversLicenceNumber">Drivers licence number</label>
                                    <input type="text" class="form-control" id="driversLicenceNumber" >
                                </div>

                                <!-- licence state of issue -->
                                <div class="form-group col-lg-2">
                                    <label for="licenceStateIssue">State of issue</label>
                                    <select class="form-control" id="licenceStateIssue" name="licenceStateIssue" required>
                                        <option value="" >Please Select</option>
                                        <option value="NSW">NSW</option>
                                        <option value="QLD">QLD</option>
                                        <option value="VIC">VIC</option>
                                        <option value="SA">SA</option>
                                        <option value="WA">WA</option>
                                        <option value="WA">NT</option>
                                        <option value="WA">ACT</option>
                                    </select>
                                </div>

                                <!-- preferred contact number -->
                                <div class="form-group col-lg-3">
                                    <label for="preferredContactNumber">Preferred contact number</label>
                                    <input type="text" class="form-control" id="preferredContactNumber" >
                                </div>
                            </div>

                            <!-- SECTION HEADER - Your personal situation - -->
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                                <strong>Your personal situation</strong>
                            </div>

                            <div class="form-row">

                                <!-- residential status -->
                                <div class="form-group col-lg-4">
                                    <label for="residentialStatus">Residential status</label>
                                    <select class="form-control" id="residentialStatus" name="residentialStatus" required>
                                        <option value="" >Please Select</option>
                                        <option value="Renting">Renting</option>
                                        <option value="Home owner - no mortgage">Home owner - no mortgage</option>
                                        <option value="Home owner - with mortgage">Home owner - with mortgage</option>
                                        <option value="Boarding/living with parents">Boarding/living with parents</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <!-- martial status -->
                                <div class="form-group col-lg-4">
                                    <label for="martialStatus">Martial status</label>
                                    <select class="form-control" id="martialStatus" name="martialStatus" required>
                                        <option value="" >Please Select</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="De facto">De facto</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Divorced">Divorced</option>
                                    </select>
                                </div>

                                <!-- number of dependents -->
                                <div class="form-group col-lg-4">
                                    <label for="numberDependents">How many dependents do you have</label>
                                    <select class="form-control" id="numberDependents" name="numberDependents" required>
                                        <option value="" >Please Select</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5+</option>
                                    </select>
                                </div>

                            </div>


                            <!-- SECTION HEADER - Current residential address - -->
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-2">
                                <strong>Current residential address</strong>
                            </div>

                            <div>

                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="e.g. Unit 3, 1234 Main St, Sydney, NSW, 2000">
                                <small class="form-text text-muted mb-1" >This is your postal address as well and cannot be a PO Box</small>
                            </div>


                            <!-- time at address -->
                            <div class="form-group row col-lg-4">
                                <label for="timeAddress" style="white-space: nowrap">How long have you lived at the above address</label>
                                <select class="form-control" id="currentAddressTime" name="currentAddressTime" required>
                                    <option value="" >Please Select</option>
                                    <option value="6">0 to 6 months</option>
                                    <option value="12">6 to 12 months</option>
                                    <option value="24">1 to 2 years</option>
                                    <option value="36">2 to 3 years</option>
                                    <option value="48">Greater than 3 years</option>
                                </select>
                            </div>

                            <div id="previousAddressPlaceholder">
                                {{--Placeholder for previous address--}}
                            </div>

                            <!-- SECTION HEADER - Employment details - -->
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                                <strong>Employment details</strong>
                            </div>


                            <div class="form-row">
                                <!-- Employment type -->
                                <div class="form-group col-lg-4">
                                    <label for="employmentType">Employment type</label>
                                    <select class="form-control" id="employmentType" name="employmentType" required>
                                        <option value="" >Please Select</option>
                                        <option value="Full time">Full time</option>
                                        <option value="Part time">Part time</option>
                                        <option value="Casual/seasonal">Casual/seasonal</option>
                                        <option value="Self employed">Self employed</option>
                                        <option value="Not employed">Not employed</option>
                                    </select>
                                </div>

                                <!-- Occupation type -->
                                <div class="form-group col-lg-4">
                                    <label for="occupationType">Occupation type</label>
                                    <select class="form-control" id="occupationType" name="occupationType" required>
                                        <option value="" >Please Select</option>
                                        <option value="xx">xx</option>
                                        <option value="xx">xx</option>
                                        <option value="xx">xx</option>
                                        <option value="xx">xx</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-row">

                                <!-- employers name -->
                                <div class="form-group col-lg-4">
                                    <label for="employerName">Employer's name</label>
                                    <input type="text" class="form-control" id="employerName">
                                </div>

                                <!-- employers phone number -->
                                <div class="form-group col-lg-4">
                                    <label for="employerPhone">Employer's phone number</label>
                                    <input type="text" class="form-control" id="employerPhone">
                                </div>

                                <!-- Employment period -->
                                <div class="form-group col-lg-4">
                                    <label for="currentEmployerTime">Employment period</label>
                                    <select class="form-control" id="currentEmployerTime" name="currentEmployerTime" required>
                                        <option value="" >Please Select</option>
                                        <option value="1">Less than one year</option>
                                        <option value="2">1 to 2 years</option>
                                        <option value="3">2 to 3 years</option>
                                        <option value="4">Greater than 3 years</option>
                                    </select>
                                </div>
                            </div>

                            <div id="previousEmployerPlaceholder">
                                {{--Placeholder for previous employer--}}
                            </div>

                        <!-- BUTTONS -->
                        {{--<div class="form-group row justify-content-center">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-success btn-lg">Continue</button>
                            </div>
                        </div>--}}

                        <div class="form-group row justify-content-center align-items-center">

                            <div class="col-sm-2">
                                <a class="btn btn-outline-info btn-sm" href="/loanDetails" role="button">Previous Page</a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-success btn-lg" href="/financialDetails" role="button">Continue</a>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <script>
        /*Previous Address*/
        $(function () {
            $('#currentAddressTime').change(function(){

                var y = document.querySelector('#currentAddressTime').value;

                if (y >24) {
                    $("#previousAddressInputs").detach();
                } else if (y <=24) {
                    $('#previousAddressPlaceholder').load("/aboutYou_partials #previousAddressInputs");
                }

            })
        })

        /*Previous Employer*/
        $(function () {
            $('#currentEmployerTime').change(function(){

                var y = document.querySelector('#currentEmployerTime').value;

                if (y >2) {
                    $("#previousEmployerInputs").detach();
                } else if (y <=2) {
                    $('#previousEmployerPlaceholder').load("/aboutYou_partials #previousEmployerInputs");
                }

            })
        })
    </script>

@stop
