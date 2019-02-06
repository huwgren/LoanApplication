

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
                    <h5 class="mb-0">Your Loan</h5>
                </div>

                <div class="card-body" style="border-radius: 0px 0px 5px 5px;;background-color:#efebe4" >

                    <form class="needs-validation" method="post" action="/xxx" novalidate>

                        @csrf

                        <!-- SECTION HEADER - email - -->
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                                <strong>Before we get started</strong>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                    <small id="emailHelp" class="form-text text-muted" style="white-space: nowrap">We will use this email address to let you know the outcome of your application and the next steps.</small>
                                </div>
                            </div>

                            <!-- SECTION HEADER -loan details - -->
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                                <strong>Loan Details</strong>
                            </div>

                            <div class="form-row">

                                <!-- loan reason -->
                                <div class="form-group col-lg-4">
                                    <label for="loan_reason">Primary Loan Reason</label>
                                    <select class="form-control" id="loan_reason" name="loan_reason" required>
                                        <option value="" >Please Select</option>
                                        <optgroup label="Financial">
                                            <option value="Debt consolidation" >Debt consolidation</option>
                                            <option value="Investment" >Investment</option>
                                        </optgroup>
                                        <optgroup label="Transport">
                                            <option value="New car">New car</option>
                                            <option value="Used car">Used car</option>
                                            <option value="Boats, caravans, trailers">Boats, caravans, trailers</option>
                                            <option value="Motorbike/Scooter">Motorbike/Scooter</option>
                                        </optgroup>
                                        <optgroup label="Home improvement">
                                            <option value="Home renovations">Home renovations</option>
                                            <option value="Household goods">Household goods</option>
                                        </optgroup>
                                        <optgroup label="Event">
                                            <option value="Wedding">Wedding</option>
                                            <option value="Other life event">Other life event</option>
                                        </optgroup>
                                        <optgroup label="Living">
                                            <option value="Medical expenses">Medical expenses</option>
                                            <option value="Travel">Travel</option>
                                            <option value="Other">Other</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <!-- loan amount -->
                                <div class="form-group col-lg-4">
                                    <label for="loan_amount">Loan amount</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" id="loan_amount" onchange="calculate()">
                                    </div>
                                </div>

                                <!-- loan duration -->
                                <div class="form-group col-lg-4">
                                    <label for="loan_duration">Loan duration</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="loan_duration" onchange="calculate()">
                                        <div class="input-group-append">
                                            <select id="loan_periodicity" name="loan_periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()">
                                                <option value="months" >Months</option>
                                                <option value="years" >Years</option>
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
                                    <div class="col-12">
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
                                                <td class="table-light">9.0%</td>
                                                <td class="table-light">9.0%</td>
                                                <td class="table-light" id="excellent_repaymentAmount"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="table-light">Good</th>
                                                <td class="table-light">12.0%</td>
                                                <td class="table-light">12.0%</td>
                                                <td class="table-light" id="good_repaymentAmount"></td>
                                            </tr>
                                            <tr >
                                                <th scope="row" class="table-light">Ok</th>
                                                <td class="table-light">16.0%</td>
                                                <td class="table-light">16.0%</td>
                                                <td class="table-light" id="ok_repaymentAmount" ></td>
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
                                    <select class="form-control btn btn-md btn-outline-secondary" id="repayment_frequency" onchange="calculate()">
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

                        <div class="form-group row justify-content-center">
                            <div class="col-sm-2">
                                <a class="btn btn-success btn-lg" href="/aboutYou" role="button">Continue</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    {{--Calculate the repayments--}}
    <script>

        window.calculate = function () {

            // find out what the repayment frequency is as requested by user
            loanDuration = document.getElementById("loan_duration");
            duration_period = document.getElementById("loan_periodicity");

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
            repayment_frequence = document.getElementById("repayment_frequency");

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
            var amount = document.getElementById("loan_amount");
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
                excellent_repaymentAmount.innerHTML = "$"+monthlyRepayment.toFixed(2) +" per " + repayment_frequence.value;
                //totalRepayments.innerHTML = (monthlyRepayment * numPayments).toFixed(2);
                //totalInterest.innerHTML = ((monthlyRepayment * numPayments) - principal).toFixed(2);


            } else {
                // Reslt was Not-a-Number or infinite, which means the input was
                // incomplete or invalid.  Clear any previously displayed output.
                excellent_repaymentAmount.innterHTML = ""; // Erase the content of these elemts
                //totalRepayments.innerHTML = "";
                //totalInterest.innerHTML = "";

            }

        }

        function goodRate() {


            // Excellent Rate

            // Look up the input and output elements in the document
            var amount = document.getElementById("loan_amount");
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
                good_repaymentAmount.innerHTML = "$"+monthlyRepayment.toFixed(2) +" per " + repayment_frequence.value;;
                //totalRepayments.innerHTML = (monthlyRepayment * numPayments).toFixed(2);
                //totalInterest.innerHTML = ((monthlyRepayment * numPayments) - principal).toFixed(2);


            } else {
                // Reslt was Not-a-Number or infinite, which means the input was
                // incomplete or invalid.  Clear any peviously displayed output.
                good_repaymentAmount.innterHTML = ""; // Erase the content of these elemts
                //totalRepayments.innerHTML = "";
                //totalInterest.innerHTML = "";

            }

        }

        function okRate() {

            // Excellent Rate

            // Look up the input and output elements in the document
            var amount = document.getElementById("loan_amount");
            var apr = 16;
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
                ok_repaymentAmount.innerHTML = "$"+monthlyRepayment.toFixed(2) +" per " + repayment_frequence.value;;
                //totalRepayments.innerHTML = (monthlyRepayment * numPayments).toFixed(2);
                //totalInterest.innerHTML = ((monthlyRepayment * numPayments) - principal).toFixed(2);


            } else {
                // Reslt was Not-a-Number or infinite, which means the input was
                // incomplete or invalid.  Clear any peviously displayed output.
                ok_repaymentAmount.innterHTML = ""; // Erase the content of these elemts
                //totalRepayments.innerHTML = "";
                //totalInterest.innerHTML = "";

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
                    <strong>Explanation text</strong>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid amet at autem,
                    consequatur error nulla omnis quae quas quibusdam ullam veniam. Autem distinctio ipsum maiores nobis
                    repellat veritatis vero.


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
                    <strong>Explanation text</strong>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid amet at autem,
                    consequatur error nulla omnis quae quas quibusdam ullam veniam. Autem distinctio ipsum maiores nobis
                    repellat veritatis vero.


                </div>
            </div>
        </div>
    </div>


@stop
