

@extends('Application.layouts.default')

@section('content')

    <div class="row col-12" style=" padding-left: 30px; margin-bottom: 30px; color: grey"> <h3>Unsecured Personal Loan</h3> </div>

    <div class="row col-md-12 offset-md-0 col-xs-12">
        <div class="col-12">
            <div class="row mb-3">
                <div class="col-sm" style="border-bottom-color:#659267; border-bottom-style: solid; border-bottom-width: 5px; border-top-style: solid; border-top-color: whitesmoke; margin-left: 0px;">
                    Step 1
                    <br>
                    <strong>Loan details</strong>
                </div>
                <div class="col-sm"style="border-bottom-color:#659267; border-bottom-style: solid; border-bottom-width: 5px; border-top-style: solid; border-top-color: whitesmoke;">
                    Step 2
                    <br>
                    <strong>About you</strong>
                </div>
                <div class="col-sm"style="border-bottom-color:#659267; border-bottom-style: solid; border-bottom-width: 5px; border-top-style: solid; border-top-color: whitesmoke;">
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
                    <h5 class="mb-0">Financial details</h5>
                </div>

                <div class="card-body" style="border-radius: 0px 0px 5px 5px;;background-color:#efebe4" >

                    <form class="needs-validation" method="post" action="/xxx" novalidate>

                        @csrf

                        <!-- SECTION HEADER - Income - -->
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                                <strong>Income</strong>
                            </div>

                            {{--Salary--}}
                            <div class="form-group row col-lg-8">
                                <label for="salary">What is your salary (after tax)?</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" id="salary">
                                    <div class="input-group-append">
                                        <select id="salary_periodicity" name="salary_periodicity" class="form-control btn btn-outline-secondary">
                                            <option value="weekly" >Weekly</option>
                                            <option value="fornightly" >Fornightly</option>
                                            <option value="monthly" >Monthly</option>
                                            <option value="yearly" >Yearly</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{--Government Benefits--}}
                            <div class="mb-2">Do you recieve any government allowances or pensions? </div>
                            <div class="btn-group btn-group-toggle btn-group-sm mb-2" data-toggle="buttons" id="governmentBenefits" >
                                <label class="btn btn-outline-info">
                                    <input type="radio" name="governmentBenefits" id="governmentBenefits_yes" value="1"  />Yes</label>
                                <label class="btn btn-outline-info">
                                    <input type="radio" name="governmentBenefits" id="governmentBenefits_no" value="0" />No</label>
                            </div>

                            <div id="governmentBenefits_income">
                                {{--Placeholder for income input--}}
                            </div>

                            {{--Rental Income--}}
                            <div class="mb-2">Do you recieve any rental income? </div>
                            <div class="btn-group btn-group-toggle btn-group-sm mb-2" data-toggle="buttons" id="rentalIncome" >
                                <label class="btn btn-outline-info">
                                    <input type="radio" name="rentalIncome" id="option1" value="1" />Yes</label>
                                <label class="btn btn-outline-info">
                                    <input type="radio" name="rentalIncome" id="option2" value="0" />No</label>
                            </div>

                            <div id="rentalIncome_income">
                                {{--Placeholder for income input--}}
                            </div>


                            {{--Other Income--}}
                            <div class="mb-2">Do you recieve any other additional income? </div>
                            <div class="btn-group btn-group-toggle btn-group-sm mb-2" data-toggle="buttons" id="otherIncome" >
                                <label class="btn btn-outline-info">
                                    <input type="radio" name="otherIncome" id="option1" value="1"  />Yes</label>
                                <label class="btn btn-outline-info">
                                    <input type="radio" name="otherIncome" id="option2" value="0"  />No</label>
                            </div>

                            <div id="otherIncome_income">
                                {{--Placeholder for income input--}}
                            </div>


                            <!-- SECTION HEADER - Assets - -->
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                                <strong>Assets</strong>
                            </div>

                            <div class="form-row">
                                <!-- Properties -->
                                <div class="form-group col-lg-4">
                                    <label for="xx">Market value of all properties (if any)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" id="xx">
                                    </div>
                                </div>

                                <!-- Other assets -->
                                <div class="form-group col-lg-4">
                                    <label for="xx">Other assets (if any)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" id="xx">
                                    </div>
                                </div>

                                <!-- Saving accounts -->
                                <div class="form-group col-lg-4">
                                    <label for="xx">Total balance of saving accounts (if any) </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" id="xx">
                                    </div>
                                </div>
                            </div>

                            <!-- SECTION HEADER - Expenses - -->
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                                <strong>Expenses</strong>
                            </div>

                            {{--Expense category 1--}}
                            <div class="form-group row">
                                <label for="expense1" class="col-lg-6 col-form-label">Expense1</label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" id="expense1_value" onchange="calculate()">
                                    <div class="input-group-append">
                                        <select id="expense1_periodicity" name="expense1_periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()">
                                            <option value="weekly" >Weekly</option>
                                            <option value="fornightly" >Fornightly</option>
                                            <option value="monthly" >Monthly</option>
                                            <option value="yearly" >Yearly</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{--Expense category 2--}}
                            <div class="form-group row">
                                <label for="expense1" class="col-lg-6 col-form-label">Expense2</label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" id="expense2_value" onchange="calculate()">
                                    <div class="input-group-append">
                                        <select id="expense2_periodicity" name="expense2_periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()">
                                            <option value="weekly" >Weekly</option>
                                            <option value="fornightly" >Fornightly</option>
                                            <option value="monthly" >Monthly</option>
                                            <option value="yearly" >Yearly</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{--Expense category 3--}}
                            <div class="form-group row">
                                <label for="expense1" class="col-lg-6 col-form-label">Expense3</label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control " id="expense3_value" onchange="calculate()">
                                    <div class="input-group-append">
                                        <select id="expense3_periodicity" name="expense3_periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()">
                                            <option value="weekly" >Weekly</option>
                                            <option value="fornightly" >Fornightly</option>
                                            <option value="monthly" >Monthly</option>
                                            <option value="yearly" >Yearly</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{--Expense category 4--}}
                            <div class="form-group row">
                                <label for="expense1" class="col-lg-6 col-form-label">Expense4</label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" id="expense4_value" onchange="calculate()">
                                    <div class="input-group-append">
                                        <select id="expense4_periodicity" name="expense4_periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()">
                                            <option value="weekly" >Weekly</option>
                                            <option value="fornightly" >Fornightly</option>
                                            <option value="monthly" >Monthly</option>
                                            <option value="yearly" >Yearly</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{--Total Expenses--}}
                            <div class="form-group row">
                                <label for="totalExpenses" class="col-lg-6 col-form-label"><strong>Total Expenses</strong></label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><strong>$</strong></span>
                                    </div>
                                    <input type="text" class="form-control" id="totalExpenses" disabled style="font-weight: bold">
                                    <div class="input-group-append">
                                        <select id="totalExpenses_periodicity" name="totalExpenses_periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()" style="font-weight: bold">
                                            <option value="weekly" >Weekly</option>
                                            <option value="fornightly" >Fornightly</option>
                                            <option value="monthly" >Monthly</option>
                                            <option value="yearly" >Yearly</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <!-- SECTION HEADER - Liabilities - -->
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                                <strong>Liabilities</strong>
                            </div>

                            {{--Home loans--}}
                            <div style="color: #659267" class="mb-3 ">
                                <strong>Home Loans</strong>
                            </div>

                            <div class="mb-2">Do you have any home loans? </div>
                            <div class="btn-group btn-group-toggle btn-group-sm mb-2" data-toggle="buttons" id="homeLoan">
                                <label class="btn btn-outline-info">
                                    <input type="radio" name="homeLoan" id="option1" value="1"  />Yes</label>
                                <label class="btn btn-outline-info">
                                    <input type="radio" name="homeLoan" id="option2" value="0" />No</label>
                            </div>

                            <div id="homeLoans_liabilities">
                                {{--Placeholder for home loan input--}}
                            </div>



                            {{--Personal loans--}}
                            <div style="color: #659267" class="mb-3 ">
                                <strong>Personal Loans</strong>
                            </div>

                            <div class="mb-2">Do you have any personal loans? </div>
                            <div class="btn-group btn-group-toggle btn-group-sm mb-2" data-toggle="buttons" id="personalLoan" >
                                <label class="btn btn-outline-info">
                                    <input type="radio" name="personalLoan" id="option1" value="1" />Yes</label>
                                <label class="btn btn-outline-info">
                                    <input type="radio" name="personalLoan" id="option2" value="0" />No</label>
                            </div>

                            <div id="personalLoans_liabilities">
                                {{--Placeholder for personal loan input--}}
                            </div>

                            {{--Credit Cards--}}
                            <div style="color: #659267" class="mb-3 ">
                                <strong>Credit cards</strong>
                            </div>

                            <div class="mb-2">Do you have any credit cards? </div>
                            <div class="btn-group btn-group-toggle btn-group-sm mb-2" data-toggle="buttons" id="creditCards" >
                                <label class="btn btn-outline-info">
                                    <input type="radio" name="creditCards" id="option1" value="1" />Yes</label>
                                <label class="btn btn-outline-info">
                                    <input type="radio" name="creditCards" id="option2" value="0" />No</label>
                            </div>

                            <div id="creditCards_liabilities">
                                {{--Placeholder for credit cards input--}}
                            </div>




                            <!-- BUTTONS -->
                            {{--<div class="form-group row justify-content-center">
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn-success btn-lg">Continue</button>
                                </div>
                            </div>--}}

                            {{--<div class="form-group row justify-content-center align-items-center mt-3">
                                <div class="col-sm-2">
                                    <a class="btn btn-outline-info btn-sm" href="/aboutYou" role="button">Previous Page</a>
                                </div>
                                <div class="col-sm-2">
                                    <a class="btn btn-success btn-lg" href="/Review" role="button">Continue</a>
                                </div>
                            </div>--}}

                            <div class="row justify-content-between text-center align-items-center">
                                <div class="col-md-4 col-sm-12 ">
                                    <a class="btn btn-outline-info btn-sm " href="/aboutYou" role="button">Previous Page</a>
                                </div>
                                <div class="col-md-4 col-sm-12 mt-sm-3">
                                    <a class="btn btn-success btn-lg" href="/Review" role="button">Continue</a>
                                </div>
                            </div>
                    </form>

                </div>
            </div>
        {{--</div>--}}
    </div>

    {{--Scripts for the add/remove additional income inputs--}}
    <script>
        /*Government Benefits*/
            $(function () {
                $('#governmentBenefits input[type=radio]').change(function(){

                    var y = document.querySelector('input[name="governmentBenefits"]:checked').value;

                    if (y ==0) {
                        $("#governmentBenefits_input").detach();
                    } else if (y ==1) {
                        $('#governmentBenefits_income').load("/financialDetails_partials #governmentBenefits_input");
                    }

                })
            })

        /*Rental Income*/
        $(function () {
            $('#rentalIncome input[type=radio]').change(function(){

                var y = document.querySelector('input[name="rentalIncome"]:checked').value;

                if (y ==0) {
                    $("#rentalIncome_input").detach();
                } else if (y ==1) {
                    $('#rentalIncome_income').load("/financialDetails_partials #rentalIncome_input");
                }

            })
        })

        /*Other Income*/
        $(function () {
            $('#otherIncome input[type=radio]').change(function(){

                var y = document.querySelector('input[name="otherIncome"]:checked').value;

                if (y ==0) {
                    $("#otherIncome_input").detach();
                } else if (y ==1) {
                    $('#otherIncome_income').load("/financialDetails_partials #otherIncome_input");
                }

            })
        })
    </script>

    {{--Scripts for the calculation of total expenses--}}
    <script>
        window.calculate=function () {

            //get the user enter expense values and periodicity
            var expense1_value = document.getElementById("expense1_value");
            var expense1_periodicity = document.getElementById("expense1_periodicity");

            var expense2_value = document.getElementById("expense2_value");
            var expense2_periodicity = document.getElementById("expense2_periodicity");

            var expense3_value = document.getElementById("expense3_value");
            var expense3_periodicity = document.getElementById("expense3_periodicity");

            var expense4_value = document.getElementById("expense4_value");
            var expense4_periodicity = document.getElementById("expense4_periodicity");

            //calculate the expenses on a yearly basis

            //expense 1
            switch (expense1_periodicity.value) {
                case "weekly":
                    expense1 = expense1_value.value * 52;
                    break;
                case "fortnightly":
                    expense1 = expense1_value.value * 26;
                    break;
                case "monthly":
                    expense1 = expense1_value.value * 12;
                    break;
                case "yearly":
                    expense1 = expense1_value.value * 1;
                    break;
            }

            //expense 2
            switch (expense2_periodicity.value) {
                case "weekly":
                    expense2 = expense2_value.value * 52;
                    break;
                case "fortnightly":
                    expense2 = expense2_value.value * 26;
                    break;
                case "monthly":
                    expense2 = expense2_value.value * 12;
                    break;
                case "yearly":
                    expense2 = expense2_value.value * 1;
                    break;
            }

            //expense 3
            switch (expense3_periodicity.value) {
                case "weekly":
                    expense3 = expense3_value.value * 52;
                    break;
                case "fortnightly":
                    expense3 = expense3_value.value * 26;
                    break;
                case "monthly":
                    expense3 = expense3_value.value * 12;
                    break;
                case "yearly":
                    expense3 = expense3_value.value * 1;
                    break;
            }

            //expense 4
            switch (expense4_periodicity.value) {
                case "weekly":
                    expense4 = expense4_value.value * 52;
                    break;
                case "fortnightly":
                    expense4 = expense4_value.value * 26;
                    break;
                case "monthly":
                    expense4 = expense4_value.value * 12;
                    break;
                case "yearly":
                    expense4 = expense4_value.value * 1;
                    break;
            }

            // Fill in the total expense field, rounding to 2 decimal places
            var totalExpenses = expense1 + expense2 + expense3 + expense4 ;

            var totalExpenses_periodicity = document.getElementById("totalExpenses_periodicity");

            //calculate the total expenses based on the user selection
            switch (totalExpenses_periodicity.value) {
                case "weekly":
                    expenses = totalExpenses / 52;
                    break;
                case "fortnightly":
                    expenses = totalExpenses / 26;
                    break;
                case "monthly":
                    expenses = totalExpenses / 12;
                    break;
                case "yearly":
                    expenses = totalExpenses / 1;
                    break;
            }

            document.getElementById("totalExpenses").value = expenses.toFixed(2);
        }


    </script>

    {{--Scripts for the add/remove liabilities (loans) inputs--}}
    <script>
        /*Home Loans*/
        $(function () {
            $('#homeLoan input[type=radio]').change(function(){

                var y = document.querySelector('input[name="homeLoan"]:checked').value;

                if (y ==0) {
                    $("#homeLoan_input").detach();
                } else if (y ==1) {
                    $('#homeLoans_liabilities').load("/financialDetails_partials #homeLoan_input");
                }

            })
        })

        /*Personal Loans*/
        $(function () {
            $('#personalLoan input[type=radio]').change(function(){

                var y = document.querySelector('input[name="personalLoan"]:checked').value;

                if (y ==0) {
                    $("#personalLoan_input").detach();
                } else if (y ==1) {
                    $('#personalLoans_liabilities').load("/financialDetails_partials #personalLoan_input");
                }

            })
        })

        /*Credit Cards*/
        $(function () {
            $('#creditCards input[type=radio]').change(function(){

                var y = document.querySelector('input[name="creditCards"]:checked').value;

                if (y ==0) {
                    $("#creditCards_input").detach();
                } else if (y ==1) {
                    $('#creditCards_liabilities').load("/financialDetails_partials #creditCards_input");
                }

            })
        })

    </script>
@stop
