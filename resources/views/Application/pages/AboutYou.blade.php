

@extends('Application.layouts.default')

@section('content')

    <div class="row col-12" style="margin-bottom: 30px;  color: grey"> <h3>Unsecured Personal Loan</h3> </div>

    <div class="row col-12">
        <div class="col-12">
            <div class="row mb-3">
                <div class="col-sm" style="border-bottom-color:#659267; border-bottom-style: solid; border-bottom-width: 5px; border-top-style: solid; border-top-color: whitesmoke;">
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
                <div class="col-sm"style="border-bottom-color:lightgrey; border-bottom-style: solid; border-top-style: solid; border-top-color: whitesmoke; margin-right: 0px;">
                    Step 4
                    <br>
                    <strong>Review and apply</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="row col-12">
        {{--<div class="col-12">--}}
            <div class="card w-100" style="border-style: none; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
                <div class="card-header" style=" border-radius:5px 5px 0px 0px ; border-style: none; background-color: #659267; color: white">
                    <h5 class="mb-0">About you</h5>
                </div>

                <div class="card-body" style="border-radius: 0px 0px 5px 5px;;background-color:#efebe4" >

                    <form class="needs-validation" method="post" action="/Step2" novalidate>

                        @csrf

                        <!-- SECTION HEADER - Tell us about yourself - -->
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                                <strong>Tell us about yourself</strong>
                            </div>

                            <!-- name -->
                            <div class="form-row">
                                <!-- title -->
                                <div class="form-group col-lg-2">
                                    <label for="Name_Title">Title</label>
                                    <select class="form-control" id="Name_Title" name="Name_Title" required>
                                        <option value="" >Please Select</option>
                                        <option value="Mr" {{ session('PersonalDetails.Name_Title')=='Mr' ? 'selected' : '' }}>Mr</option>
                                        <option value="Mrs" {{ session('PersonalDetails.Name_Title')=='Mrs' ? 'selected' : '' }}>Mrs</option>
                                        <option value="Miss" {{ session('PersonalDetails.Name_Title')=='Miss' ? 'selected' : '' }}>Miss</option>
                                        <option value="Ms" {{ session('PersonalDetails.Name_Title')=='Ms' ? 'selected' : '' }}>Ms</option>
                                        <option value="Dr" {{ session('PersonalDetails.Name_Title')=='Dr' ? 'selected' : '' }}>Dr</option>
                                    </select>
                                </div>

                                <!-- first name -->
                                <div class="form-group col-lg-3">
                                    <label for="First_Name">First name</label>
                                    <input type="text" class="form-control" id="First_Name" name="First_Name" value="{{ session('PersonalDetails.First_Name') }}">
                                </div>

                                <!-- middle name -->
                                <div class="form-group col-lg-3">
                                    <label for="Middle_Name">Middle name (if any)</label>
                                    <input type="text" class="form-control" id="Middle_Name" name="Middle_Name" value="{{ session('PersonalDetails.Middle_Name') }}">
                                </div>

                                <!-- last name -->
                                <div class="form-group col-lg-4">
                                    <label for="Last_Name">Last name</label>
                                    <input type="text" class="form-control" id="Last_Name" name="Last_Name" value="{{ session('PersonalDetails.Last_Name') }}">
                                </div>
                            </div>

                            <!-- DOB, drivers licence -->
                            <div class="form-row">

                                <!-- DOB -->
                                <div class="form-group col-lg-3">
                                    <label for="DOB">Date of birth</label>
                                    <input type="text" class="form-control" id="DOB" name="DOB" placeholder="DD/MM/YYYY" value="{{ session('PersonalDetails.DOB') }}">
                                </div>

                                <!-- drivers licence number -->
                                <div class="form-group col-lg-3">
                                    <label for="Drivers_Licence_Number">Drivers licence number</label>
                                    <input type="text" class="form-control" id="Drivers_Licence_Number" name="Drivers_Licence_Number" value="{{ session('PersonalDetails.Drivers_Licence_Number') }}">
                                </div>

                                <!-- licence state of issue -->
                                <div class="form-group col-lg-2">
                                    <label for="Drivers_Licence_State_Issue">State of issue</label>
                                    <select class="form-control" id="Drivers_Licence_State_Issue" name="Drivers_Licence_State_Issue" value="{{ session('PersonalDetails.Drivers_Licence_State_Issue') }}">
                                        <option value="" >Please Select</option>
                                        <option value="NSW" {{ session('PersonalDetails.Drivers_Licence_State_Issue')=='NSW' ? 'selected' : '' }}>NSW</option>
                                        <option value="QLD" {{ session('PersonalDetails.Drivers_Licence_State_Issue')=='QLD' ? 'selected' : '' }}>QLD</option>
                                        <option value="VIC" {{ session('PersonalDetails.Drivers_Licence_State_Issue')=='VIC' ? 'selected' : '' }}>VIC</option>
                                        <option value="SA" {{ session('PersonalDetails.Drivers_Licence_State_Issue')=='SA' ? 'selected' : '' }}>SA</option>
                                        <option value="WA" {{ session('PersonalDetails.Drivers_Licence_State_Issue')=='WA' ? 'selected' : '' }}>WA</option>
                                        <option value="NT" {{ session('PersonalDetails.Drivers_Licence_State_Issue')=='NT' ? 'selected' : '' }}>NT</option>
                                        <option value="ACT" {{ session('PersonalDetails.Drivers_Licence_State_Issue')=='ACT' ? 'selected' : '' }}>ACT</option>
                                        <option value="TAS" {{ session('PersonalDetails.Drivers_Licence_State_Issue')=='TAS' ? 'selected' : '' }}>TAS</option>
                                    </select>
                                </div>

                                <!-- preferred contact number -->
                                <div class="form-group col-lg-3">
                                    <label for="Preferred_Contact_Number">Preferred contact number</label>
                                    <input type="text" class="form-control" id="Preferred_Contact_Number" name="Preferred_Contact_Number" value="{{ session('PersonalDetails.Preferred_Contact_Number') }}">
                                </div>
                            </div>

                            <!-- SECTION HEADER - Your personal situation - -->
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                                <strong>Your personal situation</strong>
                            </div>

                            <div class="form-row">

                                <!-- residential status -->
                                <div class="form-group col-lg-4">
                                    <label for="Residential_Status">Residential status</label>
                                    <select class="form-control" id="Residential_Status" name="Residential_Status" required>
                                        <option value="" >Please Select</option>
                                        <option value="Renting" {{ session('PersonalDetails.Residential_Status')=='Renting' ? 'selected' : '' }}>Renting</option>
                                        <option value="Home owner - no mortgage" {{ session('PersonalDetails.Residential_Status')=='Home owner - no mortgage' ? 'selected' : '' }}>Home owner - no mortgage</option>
                                        <option value="Home owner - with mortgage" {{ session('PersonalDetails.Residential_Status')=='Home owner - with mortgage' ? 'selected' : '' }}>Home owner - with mortgage</option>
                                        <option value="Boarding/living with parents" {{ session('PersonalDetails.Residential_Status')=='Boarding/living with parents' ? 'selected' : '' }}>Boarding/living with parents</option>
                                        <option value="Other" {{ session('PersonalDetails.Residential_Status')=='Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>

                                <!-- martial status -->
                                <div class="form-group col-lg-4">
                                    <label for="Martial_Status">Martial status</label>
                                    <select class="form-control" id="Martial_Status" name="Martial_Status" required>
                                        <option value="" >Please Select</option>
                                        <option value="Single" {{ session('PersonalDetails.Martial_Status')=='Single' ? 'selected' : '' }}>Single</option>
                                        <option value="Married" {{ session('PersonalDetails.Martial_Status')=='Married' ? 'selected' : '' }}>Married</option>
                                        <option value="De facto" {{ session('PersonalDetails.Martial_Status')=='De facto' ? 'selected' : '' }}>De facto</option>
                                        <option value="Widowed" {{ session('PersonalDetails.Martial_Status')=='Widowed' ? 'selected' : '' }}>Widowed</option>
                                        <option value="Divorced" {{ session('PersonalDetails.Martial_Status')=='Divorced' ? 'selected' : '' }}>Divorced</option>
                                    </select>
                                </div>

                                <!-- number of dependents -->
                                <div class="form-group col-lg-4">
                                    <label for="Number_Of_Dependents">How many dependents do you have</label>
                                    <select class="form-control" id="Number_Of_Dependents" name="Number_Of_Dependents" required>
                                        <option value="" >Please Select</option>
                                        <option value="0" {{ session('PersonalDetails.Number_Of_Dependents')=='0' ? 'selected' : '' }}>0</option>
                                        <option value="1" {{ session('PersonalDetails.Number_Of_Dependents')=='1' ? 'selected' : '' }}>1</option>
                                        <option value="2" {{ session('PersonalDetails.Number_Of_Dependents')=='2' ? 'selected' : '' }}>2</option>
                                        <option value="3" {{ session('PersonalDetails.Number_Of_Dependents')=='3' ? 'selected' : '' }}>3</option>
                                        <option value="4" {{ session('PersonalDetails.Number_Of_Dependents')=='4' ? 'selected' : '' }}>4</option>
                                        <option value="5" {{ session('PersonalDetails.Number_Of_Dependents')=='5' ? 'selected' : '' }}>5+</option>
                                    </select>
                                </div>

                            </div>


                            <!-- SECTION HEADER - Current residential address - -->
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-2">
                                <strong>Current residential address</strong>
                            </div>

                            <div>

                            </div>

                            <div class="form-group row col-lg-8">
                                <label for="Residential_Address">Address</label>
                                <input type="text" class="form-control" id="Residential_Address" name="Residential_Address" placeholder="e.g. Unit 3, 1234 Main St, Sydney, NSW, 2000" value="{{ session('PersonalDetails.Residential_Address') }}">
                                <small class="form-text text-muted mb-1" >This is your postal address as well and cannot be a PO Box</small>
                            </div>


                            <!-- time at address -->
                            <div class="form-group row col-lg-4">
                                <label for="Time_At_Current_Address" style="white-space: nowrap">How long have you lived at the above address</label>
                                <select class="form-control" id="Time_At_Current_Address" name="Time_At_Current_Address" required>
                                    <option value="" >Please Select</option>
                                    <option value="0 to 6 months" {{ session('PersonalDetails.Time_At_Current_Address')=='0 to 6 months' ? 'selected' : '' }}>0 to 6 months</option>
                                    <option value="6 to 12 months" {{ session('PersonalDetails.Time_At_Current_Address')=='6 to 12 months' ? 'selected' : '' }}>6 to 12 months</option>
                                    <option value="1 to 2 years" {{ session('PersonalDetails.Time_At_Current_Address')=='1 to 2 years' ? 'selected' : '' }}>1 to 2 years</option>
                                    <option value="2 to 3 years" {{ session('PersonalDetails.Time_At_Current_Address')=='2 to 3 years' ? 'selected' : '' }}>2 to 3 years</option>
                                    <option value="Greater than 3 years" {{ session('PersonalDetails.Time_At_Current_Address')=='Greater than 3 years' ? 'selected' : '' }}>Greater than 3 years</option>
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
                                <div class="form-group col-lg-2">
                                    <label for="Current_Employment_Type">Employment type</label>
                                    <select class="form-control" id="Current_Employment_Type" name="Current_Employment_Type" required>
                                        <option value="" >Please Select</option>
                                        <option value="Full time" {{ session('PersonalDetails.Current_Employment_Type')=='Full time' ? 'selected' : '' }}>Full time</option>
                                        <option value="Part time" {{ session('PersonalDetails.Current_Employment_Type')=='Part time' ? 'selected' : '' }}>Part time</option>
                                        <option value="Casual/seasonal" {{ session('PersonalDetails.Current_Employment_Type')=='Casual/seasonal' ? 'selected' : '' }}>Casual/seasonal</option>
                                        <option value="Self employed" {{ session('PersonalDetails.Current_Employment_Type')=='Self employed' ? 'selected' : '' }}>Self employed</option>
                                        <option value="Not employed" {{ session('PersonalDetails.Current_Employment_Type')=='Not employed' ? 'selected' : '' }}>Not employed</option>
                                    </select>
                                </div>

                                <!-- Employment period -->
                                <div class="form-group col-lg-3">
                                    <label for="Current_Employment_Length">Employment period</label>
                                    <select class="form-control" id="Current_Employment_Length" name="Current_Employment_Length" required>
                                        <option value="" >Please Select</option>
                                        <option value="Less than one year" {{ session('PersonalDetails.Current_Employment_Length')=='Less than one year' ? 'selected' : '' }}>Less than one year</option>
                                        <option value="1 to 2 years" {{ session('PersonalDetails.Current_Employment_Length')=='1 to 2 years' ? 'selected' : '' }}>1 to 2 years</option>
                                        <option value="2 to 3 years" {{ session('PersonalDetails.Current_Employment_Length')=='2 to 3 years' ? 'selected' : '' }}>2 to 3 years</option>
                                        <option value="Greater than 3 years" {{ session('PersonalDetails.Current_Employment_Length')=='Greater than 3 years' ? 'selected' : '' }}>Greater than 3 years</option>
                                    </select>
                                </div>


                                <!-- employers name -->
                                <div class="form-group col-lg-4">
                                    <label for="Current_Employers_Name">Employer's name</label>
                                    <input type="text" class="form-control" id="Current_Employers_Name" name="Current_Employers_Name" value="{{ session('PersonalDetails.Current_Employers_Name') }}">
                                </div>

                                <!-- employers phone number -->
                                <div class="form-group col-lg-3">
                                    <label for="Current_Employers_Phone">Employer's phone number</label>
                                    <input type="text" class="form-control" id="Current_Employers_Phone" name="Current_Employers_Phone" value="{{ session('PersonalDetails.Current_Employers_Phone') }}">
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

                        {{--<div class="--}}{{--form-group row justify-content-center align-items-center--}}{{-- --}}{{--text-center--}}{{--">

                            <div class="col-12 float-left">
                                <a class="btn btn-outline-info btn-lg " href="/loanDetails" role="button">Previous Page</a>
                            </div>
                            <div class="col-12">
                                <a class="btn btn-success btn-lg" href="/financialDetails" role="button">Continue</a>
                            </div>
                        </div>--}}
                            <div class="row justify-content-between text-center align-items-center">
                                <div class="col-md-4 col-sm-12 ">
                                    <a class="btn btn-outline-info btn-sm " href="/Step1" role="button">Previous Page</a>
                                </div>
                                <div class="col-md-4 col-sm-12 mt-sm-3 mt-xs-3">
                                    {{--<a class="btn btn-success btn-lg" href="/financialDetails" role="button">Continue</a>--}}
                                    <button type="submit" class="btn btn-success btn-lg">Continue</button>
                                </div>
                            </div>

                    </form>

                </div>
            </div>
        {{--</div>--}}
    </div>

    <script>
        /*Previous Address*/
        $(function () {
            $('#Time_At_Current_Address').change(function(){

                var y = document.querySelector('#Time_At_Current_Address').value;

                if (y =='2 to 3 years' || y=='Greater than 3 years') {
                    $("#previousAddressInputs").detach();
                } else {
                    $('#previousAddressPlaceholder').load("/aboutYou_partials #previousAddressInputs");
                }

            })
        })

        /*Previous Employer*/
        $(function () {
            $('#Current_Employment_Length').change(function(){

                var y = document.querySelector('#Current_Employment_Length').value;

                if (y =='2 to 3 years' || y=='Greater than 3 years' ) {
                    $("#previousEmployerInputs").detach();
                } else  {
                    $('#previousEmployerPlaceholder').load("/aboutYou_partials #previousEmployerInputs");
                }

            })
        })
    </script>

@stop
