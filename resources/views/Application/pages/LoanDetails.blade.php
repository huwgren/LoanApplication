

@extends('Application.layouts.default')

@section('content')

    <div class="row col-12" style="  margin-bottom: 30px; color: grey"> <h3>Unsecured Personal Loan</h3> </div>

    <div class="row col-md-12 offset-md-0 col-xs-12">
        <div class="col-12">
            <div class="row mb-3">
                <div class="col-sm" style="border-bottom-color:#659267; border-bottom-style: solid; border-bottom-width: 5px; border-top-style: solid; border-top-color: whitesmoke; margin-left: 0px;">
                    Step 1
                    <br>
                    <strong>Loan details</strong>
                </div>
                <div class="col-sm"style="border-bottom-color:lightgrey; border-bottom-style: solid; border-top-style: solid; border-top-color: whitesmoke;">
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

    <div class="row col-md-12 offset-md-0 col-xs-12">
        {{--<div class="col-12">--}}
            <div class="card w-100" style="border-style: none; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
                <div class="card-header" style=" border-radius:5px 5px 0px 0px ; border-style: none; background-color: #659267; color: white">
                    <h5 class="mb-0">Your Loan</h5>
                </div>

                <div class="card-body" style="border-radius: 0px 0px 5px 5px;;background-color:#efebe4" >

                    <form class=" needs-validation" method="post" action="/Step1" novalidate>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @csrf

                        <!-- SECTION HEADER - email - -->
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                                <strong>Before we get started</strong>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="Email_Address">Email</label>
                                    <input type="email" class="form-control" id="Email_Address" name="Email_Address" placeholder="Email" value="{{ session('LoanDetails.Email_Address') }}" required>
                                </div>
                            </div>

                            <div class="row col-12 mt-n3 mb-3">
                            <small class="text-muted">We will use this email address to let you know the outcome of your application and the next steps.</small>
                            </div>

                            <!-- SECTION HEADER -loan details - -->
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                                <strong>Loan Details</strong>
                            </div>

                            <div class="form-row">

                                <!-- loan reason -->
                                <div class="form-group col-lg-4">
                                    <label for="Loan_Reason">Primary Loan Reason</label>
                                    <select class="form-control" id="Loan_Reason" name="Loan_Reason" required>
                                        <option value="" >Please Select</option>
                                        <optgroup label="Financial">
                                            <option value="Debt consolidation" {{ session('LoanDetails.Loan_Reason')=='Debt consolidation' ? 'selected' : '' }}>Debt consolidation</option>
                                            <option value="Investment" {{ session('LoanDetails.Loan_Reason')=='Investment' ? 'selected' : '' }} >Investment</option>
                                        </optgroup>
                                        <optgroup label="Transport">
                                            <option value="New car" {{ session('LoanDetails.Loan_Reason')=='New car' ? 'selected' : '' }} >New car</option>
                                            <option value="Used car" {{ session('LoanDetails.Loan_Reason')=='Used car' ? 'selected' : '' }} >Used car</option>
                                            <option value="Boats, caravans, trailers" {{ session('LoanDetails.Loan_Reason')=='Boats, caravans, trailers' ? 'selected' : '' }} >Boats, caravans, trailers</option>
                                            <option value="Motorbike/Scooter" {{ session('LoanDetails.Loan_Reason')=='Motorbike/Scooter' ? 'selected' : '' }} >Motorbike/Scooter</option>
                                        </optgroup>
                                        <optgroup label="Home improvement">
                                            <option value="Home renovations" {{ session('LoanDetails.Loan_Reason')=='Home renovations' ? 'selected' : '' }} >Home renovations</option>
                                            <option value="Household goods" {{ session('LoanDetails.Loan_Reason')=='Household goods' ? 'selected' : '' }} >Household goods</option>
                                        </optgroup>
                                        <optgroup label="Event">
                                            <option value="Wedding" {{ session('LoanDetails.Loan_Reason')=='Wedding' ? 'selected' : '' }} >Wedding</option>
                                            <option value="Other life event" {{ session('LoanDetails.Loan_Reason')=='Other life event' ? 'selected' : '' }} >Other life event</option>
                                        </optgroup>
                                        <optgroup label="Living">
                                            <option value="Medical expenses" {{ session('LoanDetails.Loan_Reason')=='Medical expenses' ? 'selected' : '' }} >Medical expenses</option>
                                            <option value="Travel" {{ session('LoanDetails.Loan_Reason')=='Travel' ? 'selected' : '' }} >Travel</option>
                                            <option value="Other" {{ session('LoanDetails.Loan_Reason')=='Other' ? 'selected' : '' }} >Other</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <!-- loan amount -->
                                <div class="form-group col-lg-4">
                                    <label for="Loan_Amount">Loan amount</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" id="Loan_Amount" name="Loan_Amount" value="{{ session('LoanDetails.Loan_Amount') }}" onchange="calculate()" required>
                                    </div>
                                </div>

                                <!-- loan duration -->
                                <div class="form-group col-lg-4">
                                    <label for="Loan_Duration">Loan duration</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="Loan_Duration" name="Loan_Duration" value="{{ session('LoanDetails.Loan_Duration') }}" onchange="calculate()" required>
                                        <div class="input-group-append">
                                            <select id="Loan_Duration_Periodicity" name="Loan_Duration_Periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()" >
                                                <option value="months" {{ session('LoanDetails.Loan_Duration_Periodicity')=='months' ? 'selected' : '' }} >Months</option>
                                                <option value="years"  {{ session('LoanDetails.Loan_Duration_Periodicity')=='years' ? 'selected' : '' }} >Years</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <!-- SECTION HEADER -repayment details- -->
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                                <strong>Repayment details</strong>
                            </div>

                                <!-- Repayment table -->
                                <div class="row mt-4" >
                                    <div class="col-12 table-responsive">
                                        <table class="table table-bordered" >
                                            <thead class="">
                                            <tr class="table-info">
                                                <th scope="col">Credit profile<a href="#creditProfileModal" data-toggle="modal" data-target="#creditProfileModal"><span class="fas fa-question-circle fa-xs" data-fa-transform="right-6 up-6" style="color:red"   ></span></a></th>
                                                <th scope="col" >Interest rate</th>
                                                <th scope="col">Comparison rate<a href="#comparisonRateModal" data-toggle="modal" data-target="#comparisonRateModal"><span class="fas fa-question-circle fa-xs" data-fa-transform="right-6 up-6" style="color:red"   ></span></a></th>
                                                <th scope="col">Estimated repayments</th>
                                            </tr>
                                            </thead>
                                            <tbody >
                                            <tr>
                                                <th scope="row" class="table-light">Excellent</th>
                                                <td class="table-light" ><input class="border-0" type="text" id="Interest_Rate_Excellent" name="Interest_Rate_Excellent" value="9.0%"></td>
                                                <td class="table-light">9.0%</td>
                                                <td class="table-light" id=""><input class="border-0" readonly type="text" id="Estimated_Repayments_Excellent" name="Estimated_Repayments_Excellent" value="{{ session('LoanDetails.Estimated_Repayments_Excellent') }}"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="table-light">Good</th>
                                                <td class="table-light"><input class="border-0" readonly type="text" id="Interest_Rate_Good" name="Interest_Rate_Good" value="12.0%"></td>
                                                <td class="table-light">12.0%</td>
                                                <td class="table-light" id=""><input class="border-0" readonly type="text" id="Estimated_Repayments_Good" name="Estimated_Repayments_Good" value="{{ session('LoanDetails.Estimated_Repayments_Good') }}"></td>
                                            </tr>
                                            <tr >
                                                <th scope="row" class="table-light">Ok</th>
                                                <td class="table-light"><input class="border-0" readonly type="text" id="Interest_Rate_Ok" name="Interest_Rate_Ok" value="16.0%"></td>
                                                <td class="table-light">16.0%</td>
                                                <td class="table-light" ><input class="border-0" readonly type="text" id="Estimated_Repayments_Ok" name="Estimated_Repayments_Ok" value="{{ session('LoanDetails.Estimated_Repayments_Ok') }}"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            <div class="row">
                                <div class="input-group  col-lg-5 offset-lg-7 offset-sm-0">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Repayment frequency</span>
                                    </div>
                                    <select class="form-control btn btn-md btn-outline-secondary" id="Repayment_Frequency" onchange="calculate()">
                                        <option value="week">Weekly</option>
                                        <option value="fortnight">Fortnightly</option>
                                        <option value="month">Monthly</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-3" style="color: grey">
                                    <small> <i> Our loan calculator is for illustrative purposes only and does not constitute an offer of finance from Salt&Lime. As a responsible lender, Salt&Lime wants to find the best way to truly help customers. The loan amount, rate and repayment term you are offered may differ, depending on your personal circumstances and our credit assessment procedures.</i></small>
                                </div>
                            </div>

                        <!-- BUTTONS -->
                        {{--<div class="form-group row justify-content-center">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-success btn-lg">Continue</button>
                            </div>
                        </div>--}}

                        <div class="{{--form-group row justify-content-center--}} text-center">
                            <div class="col-12">
                                {{--<a class="btn btn-success btn-lg" href="/aboutYou" role="button">Continue</a>--}}
                                <button type="submit" class="btn btn-success btn-lg">Continue</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        {{--</div>--}}
    </div>

    {{--Calculate the repayments--}}
    <script>

        window.calculate = function () {

            // find out what the repayment frequency is as requested by user
            loanDuration = document.getElementById("Loan_Duration");
            duration_period = document.getElementById("Loan_Duration_Periodicity");

            switch (duration_period.value) {
                case "months":
                    durationMths = loanDuration.value;
                    break;
                case "years":
                    durationMths = loanDuration.value*12;
                    break;
            }

            //alert(duration_period.value);
            //alert(durationMths);

            // find out what the repayment frequency is as requested by user
            repayment_frequence = document.getElementById("Repayment_Frequency");

            switch (repayment_frequence.value) {
                case "week":
                    pay_frequency = 52;
                    break;
                case "fortnight":
                    pay_frequency = 26;
                    break;
                case "month":
                    pay_frequency = 12;
                    break;
            }

            //need to calculate the repayments for the three rate bands
            excellentRate();
            goodRate();
            okRate();
        }


        function excellentRate() {

            // Excellent Rate

            // Look up the input and output elements in the document
            var amount = document.getElementById("Loan_Amount");
            var apr = 9;
            //var durationMths = document.getElementById("loanDuration");
            var total = document.getElementById("total");
            var totalinterest = document.getElementById("totalinterest");


            // Get the user's input from the input elements.
            // Assume it is all valid.  Convert interest from
            // a percentage to a decimal, and convert from an
            // annual rate to a monthly rate.  Convert payment
            // period in years to the number of monthly
            // payments.

            var principal = parseFloat(amount.value);
            var interest = parseFloat(apr) / 100 / 12;
            var numPayments = parseFloat(durationMths/12*pay_frequency);

            // Now compute the monthly payment figure.
            var x = Math.pow(1 + interest, numPayments); // Math.pow() computes powers
            var monthlyRepayment = (principal * x * interest) / (x - 1);

            //  If the result is a finite number, the user's input was good and
            // we have meaningful results to display

            if (isFinite(monthlyRepayment)) {
                // Fill in the output fields, rounding to 2 decimal places
                document.getElementById("Estimated_Repayments_Excellent").value = "$"+monthlyRepayment.toFixed(2) +" per " + repayment_frequence.value;
                /*Estimated_Repayments_Excellent.innerHTML = "$"+monthlyRepayment.toFixed(2) +" per " + repayment_frequence.value;*/



            } else {
                // Reslt was Not-a-Number or infinite, which means the input was
                // incomplete or invalid.  Clear any previously displayed output.
                Estimated_Repayments_Excellent.innterHTML = ""; // Erase the content of these elemts
                //totalRepayments.innerHTML = "";
                //totalInterest.innerHTML = "";

            }

        }

        function goodRate() {


            // Excellent Rate

            // Look up the input and output elements in the document
            var amount = document.getElementById("Loan_Amount");
            var apr = 12;
            //var durationMths = document.getElementById("loanDuration");
            var total = document.getElementById("total");
            var totalinterest = document.getElementById("totalinterest");


            // Get the user's input from the input elements.
            // Assume it is all valid.  Convert interest from
            // a percentage to a decimal, and convert from an
            // annual rate to a monthly rate.  Convert payment
            // period in years to the number of monthly
            // payments.

            var principal = parseFloat(amount.value);
            var interest = parseFloat(apr) / 100 / 12;
            var numPayments = parseFloat(durationMths/12*pay_frequency);


            // Now compute the monthly payment figure.
            var x = Math.pow(1 + interest, numPayments); // Math.pow() computes powers
            var monthlyRepayment = (principal * x * interest) / (x - 1);

            //  If the result is a finite umber, the user's input was good and
            // we have meaningful results to display

            if (isFinite(monthlyRepayment)) {
                // Fill in the output fields, rounding to 2 decimal places
                document.getElementById("Estimated_Repayments_Good").value = "$"+monthlyRepayment.toFixed(2) +" per " + repayment_frequence.value;
                /*Estimated_Repayments_Good.innerHTML = "$"+monthlyRepayment.toFixed(2) +" per " + repayment_frequence.value;*/


            } else {
                // Reslt was Not-a-Number or infinite, which means the input was
                // incomplete or invalid.  Clear any peviously displayed output.
                Estimated_Repayments_Good.innterHTML = ""; // Erase the content of these elemts
                //totalRepayments.innerHTML = "";
                //totalInterest.innerHTML = "";

            }

        }

        function okRate() {

            // Excellent Rate

            // Look up the input and output elements in the document
            var amount = document.getElementById("Loan_Amount");
            var apr = 16;



            // Get the user's input from the input elements.
            // Assume it is all valid.  Convert interest from
            // a percentage to a decimal, and convert from an
            // annual rate to a monthly rate.  Convert payment
            // period in years to the number of monthly
            // payments.

            var principal = parseFloat(amount.value);
            var interest = parseFloat(apr) / 100 / 12;
            var numPayments = parseFloat(durationMths/12*pay_frequency);


            // Now compute the monthly payment figure.
            var x = Math.pow(1 + interest, numPayments); // Math.pow() computes powers
            var monthlyRepayment = (principal * x * interest) / (x - 1);

            //  If the result is a finite umber, the user's input was good and
            // we have meaningful results to display

            if (isFinite(monthlyRepayment)) {
                // Fill in the output fields, rounding to 2 decimal places
                document.getElementById("Estimated_Repayments_Ok").value = "$"+monthlyRepayment.toFixed(2) +" per " + repayment_frequence.value;

                /*Estimated_Repayments_Ok.innerHTML = "$"+monthlyRepayment.toFixed(2) +" per " + repayment_frequence.value;*/


            } else {
                // Reslt was Not-a-Number or infinite, which means the input was
                // incomplete or invalid.  Clear any peviously displayed output.
                Estimated_Repayments_Ok.innterHTML = ""; // Erase the content of these elemts


            }
        }
    </script>

    <!-- Modal for description of the credit bands -->
    <div class="modal fade" id="creditProfileModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">What is a 'Credit Profile'</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    Credit Profile is an assessment of the assumed credit worthiness of the borrower. The assessment takes into various factors like the loan amount, loan duration, your credit history and other financial and employment information.


                </div>
            </div>
        </div>
    </div>

    <!-- Modal for description of the comparison rate -->
    <div class="modal fade" id="comparisonRateModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">What is a 'Comparison rate'</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h5>A comparison rate indicates the true cost of a loan</h5>
                    <p>A comparison rate is designed to help you understand the overall cost of a loan based on several relevant factors, rather than just the interest rate. Each comparison rate accounts for the: </p>

                    <ul>
                        <li>amount of the loan</li>
                        <li>term</li>
                        <li>repayment frequency</li>
                        <li>interest rate</li>
                        <li>fees and charges</li>
                    </ul>

                    <h5>Why pay attention to comparison rates?</h5>
                    <p>The loan with the lowest interest rate isn’t always the cheapest option. When researching products offered by different providers, you can use the respective comparison rates as a more accurate indication of loan cost than you would otherwise get by only comparing interest rates. This can help you decide which option might suit your needs. </p>

                    <p>For instance, a loan with a low interest rate but high fees and charges may have a higher comparison rate than a loan with a higher interest rate but low fees and charges. Note that comparison rates only apply to loans with a fixed term, not lines of credit such as flexi loans, as there are too many variables.</p>

                    <h5>Things to keep in mind</h5>
                    <p>Remember that when you look at comparison rates, the loan amounts and terms don’t cover all possible situations – so they may not be an accurate reflection of your particular loan. The amounts that a comparison rate is based on will be in the fine print.</p>

                    <p>While comparison rates can be a good starting point, they’re not the only thing to consider when shopping around for a personal loan. It’s also important to compare the other features of the loan to see if it works for you.</p>


                </div>
            </div>
        </div>
    </div>


@stop
