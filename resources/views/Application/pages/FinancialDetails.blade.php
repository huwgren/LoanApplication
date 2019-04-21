

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

                    <form class="needs-validation" method="post" action="/Step3" novalidate>

                        @csrf

                        <!-- SECTION HEADER - Income - -->
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                                <strong>Income</strong>
                            </div>

                            {{--Salary--}}
                            <div class="form-group row col-lg-8">
                                <label for="Salary_Amount">What is your salary (after tax)?</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" name="Salary_Amount" id="Salary_Amount" value="{{ session('FinancialDetails.Salary_Amount') }}">
                                    <div class="input-group-append">
                                        <select id="Salary_Frequency" name="Salary_Frequency" class="form-control btn btn-outline-secondary">
                                            <option value="week" {{ session('FinancialDetails.Salary_Frequency')=='week' ? 'selected' : '' }} >Week</option>
                                            <option value="fortnight" {{ session('FinancialDetails.Salary_Frequency')=='fortnight' ? 'selected' : '' }} >Fortnight</option>
                                            <option value="month" {{ session('FinancialDetails.Salary_Frequency')=='month' ? 'selected' : '' }} >Month</option>
                                            <option value="year" {{ session('FinancialDetails.Salary_Frequency')=='year' ? 'selected' : '' }} >Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{--Government Benefits--}}
                            <div class="mb-2">Do you receive any government allowances or pensions? </div>
                            <div class="btn-group btn-group-toggle btn-group-sm mb-2" data-toggle="buttons" id="Government_Benefits_Received" >
                                <label class="btn btn-outline-info {{ session('FinancialDetails.Government_Benefits_Received')=='Yes' ? 'active' : '' }}">
                                    <input type="radio" name="Government_Benefits_Received" id="Government_Benefits_Yes" value="Yes"   {{ session('FinancialDetails.Government_Benefits_Received')=='Yes' ? 'checked' : '' }}  />Yes</label>
                                <label class="btn btn-outline-info {{ session('FinancialDetails.Government_Benefits_Received')=='No' ? 'active' : '' }}">
                                    <input type="radio" name="Government_Benefits_Received" id="Government_Benefits_No" value="No"  {{ session('FinancialDetails.Government_Benefits_Received')=='No' ? 'checked' : '' }} />No</label>
                            </div>

                            <div id="governmentBenefits_income">
                                {{--Placeholder for income input--}}
                            </div>

                            {{--Rental Income--}}
                            <div class="mb-2">Do you receive any rental income? </div>
                            <div class="btn-group btn-group-toggle btn-group-sm mb-2" data-toggle="buttons" id="Rental_Income_Received" >
                                <label class="btn btn-outline-info {{ session('FinancialDetails.Rental_Income_Received')=='Yes' ? 'active' : '' }}">
                                    <input type="radio" name="Rental_Income_Received" id="Rental_Income_Yes" value="Yes"  {{ session('FinancialDetails.Rental_Income_Received')=='Yes' ? 'checked' : '' }}/>Yes</label>
                                <label class="btn btn-outline-info {{ session('FinancialDetails.Rental_Income_Received')=='No' ? 'active' : '' }}">
                                    <input type="radio" name="Rental_Income_Received" id="Rental_Income_No" value="No" {{ session('FinancialDetails.Rental_Income_Received')=='No' ? 'checked' : '' }}/>No</label>
                            </div>

                            <div id="rentalIncome_income">
                                {{--Placeholder for income input--}}
                            </div>


                            {{--Other Income--}}
                            <div class="mb-2">Do you receive any other additional income? </div>
                            <div class="btn-group btn-group-toggle btn-group-sm mb-2" data-toggle="buttons" id="Other_Income_Received" >
                                <label class="btn btn-outline-info {{ session('FinancialDetails.Other_Income_Received')=='Yes' ? 'active' : '' }}">
                                    <input type="radio" name="Other_Income_Received" id="Other_Income_Yes" value="Yes" {{ session('FinancialDetails.Other_Income_Received')=='Yes' ? 'checked' : '' }}/>Yes</label>
                                <label class="btn btn-outline-info {{ session('FinancialDetails.Other_Income_Received')=='No' ? 'active' : '' }}">
                                    <input type="radio" name="Other_Income_Received" id="Other_Income_No" value="No" {{ session('FinancialDetails.Other_Income_Received')=='No' ? 'checked' : '' }}/>No</label>
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
                                    <label for="Market_Value_Properties">Market value of all properties (if any)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" name="Market_Value_Properties" id="Market_Value_Properties" value="{{ session('FinancialDetails.Market_Value_Properties') }}">
                                    </div>
                                </div>

                                <!-- Other assets -->
                                <div class="form-group col-lg-4">
                                    <label for="Other_Assets_Value">Other assets (if any)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" name="Other_Assets_Value" id="Other_Assets_Value" value="{{ session('FinancialDetails.Other_Assets_Value') }}">
                                    </div>
                                </div>

                                <!-- Saving accounts -->
                                <div class="form-group col-lg-4">
                                    <label for="Savings_Amount">Total balance of saving accounts (if any) </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" name="Savings_Amount" id="Savings_Amount" value="{{ session('FinancialDetails.Savings_Amount') }}">
                                    </div>
                                </div>
                            </div>

                            <!-- SECTION HEADER - Expenses - -->
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                                <strong>Expenses</strong>
                            </div>

                            Insurance (e.g. medical, vehicle, home)
                            Utilities (e.g. water, electricity, gas)
                            Phone/Internet
                            Medical
                            Travel (e.g. vehicle running costs, public transport)
                            Other (e.g. education, rates)
                            Childcare
                            Food
                            Clothing
                            Entertainment
                            Rent/Board

                            {{--Expense category 1--}}
                            <div class="form-group row">
                                <label for="expense1" class="col-lg-6 col-form-label">Expense1</label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" name="expense1_value" id="expense1_value" value="{{ session('FinancialDetails.expense1_value') }}" onchange="calculate()">
                                    <div class="input-group-append">
                                        <select id="expense1_periodicity" name="expense1_periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()">
                                            <option value="week" {{ session('FinancialDetails.expense1_periodicity')=='week' ? 'selected' : '' }}>Week</option>
                                            <option value="fortnight" {{ session('FinancialDetails.expense1_periodicity')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                                            <option value="month" {{ session('FinancialDetails.expense1_periodicity')=='month' ? 'selected' : '' }}>Month</option>
                                            <option value="year" {{ session('FinancialDetails.expense1_periodicity')=='year' ? 'selected' : '' }}>Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{--Expense category 2--}}
                            <div class="form-group row">
                                <label for="expense2" class="col-lg-6 col-form-label">Expense2</label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" name="expense2_value" id="expense2_value" value="{{ session('FinancialDetails.expense2_value') }}" onchange="calculate()">
                                    <div class="input-group-append">
                                        <select id="expense2_periodicity" name="expense2_periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()">
                                            <option value="week" {{ session('FinancialDetails.expense2_periodicity')=='week' ? 'selected' : '' }}>Week</option>
                                            <option value="fortnight" {{ session('FinancialDetails.expense2_periodicity')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                                            <option value="month" {{ session('FinancialDetails.expense2_periodicity')=='month' ? 'selected' : '' }}>Month</option>
                                            <option value="year" {{ session('FinancialDetails.expense2_periodicity')=='year' ? 'selected' : '' }}>Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{--Expense category 3--}}
                            <div class="form-group row">
                                <label for="expense3" class="col-lg-6 col-form-label">Expense3</label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" name="expense3_value" id="expense3_value" value="{{ session('FinancialDetails.expense3_value') }}" onchange="calculate()">
                                    <div class="input-group-append">
                                        <select id="expense3_periodicity" name="expense3_periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()">
                                            <option value="week" {{ session('FinancialDetails.expense3_periodicity')=='week' ? 'selected' : '' }}>Week</option>
                                            <option value="fortnight" {{ session('FinancialDetails.expense3_periodicity')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                                            <option value="month" {{ session('FinancialDetails.expense3_periodicity')=='month' ? 'selected' : '' }}>Month</option>
                                            <option value="year" {{ session('FinancialDetails.expense3_periodicity')=='year' ? 'selected' : '' }}>Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{--Expense category 4--}}
                            <div class="form-group row">
                                <label for="expense4" class="col-lg-6 col-form-label">Expense4</label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" name="expense4_value" id="expense4_value" value="{{ session('FinancialDetails.expense4_value') }}" onchange="calculate()">
                                    <div class="input-group-append">
                                        <select id="expense4_periodicity" name="expense4_periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()">
                                            <option value="week" {{ session('FinancialDetails.expense4_periodicity')=='week' ? 'selected' : '' }}>Week</option>
                                            <option value="fortnight" {{ session('FinancialDetails.expense4_periodicity')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                                            <option value="month" {{ session('FinancialDetails.expense4_periodicity')=='month' ? 'selected' : '' }}>Month</option>
                                            <option value="year" {{ session('FinancialDetails.expense4_periodicity')=='year' ? 'selected' : '' }}>Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{--Total Expenses--}}
                            <div class="form-group row">
                                <label for="Total_Expenses" class="col-lg-6 col-form-label"><strong>Total Expenses</strong></label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><strong>$</strong></span>
                                    </div>
                                    <input type="text" class="form-control" name="Total_Expenses" id="Total_Expenses" readonly style="font-weight: bold">
                                    <div class="input-group-append">
                                        <select id="Total_Expenses_Frequency" name="Total_Expenses_Frequency" class="form-control btn btn-outline-secondary" onchange="calculate()" style="font-weight: bold">
                                            <option value="week" {{ session('FinancialDetails.Total_Expenses_Frequency')=='week' ? 'selected' : '' }}>Week</option>
                                            <option value="fortnight" {{ session('FinancialDetails.Total_Expenses_Frequency')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                                            <option value="month" {{ session('FinancialDetails.Total_Expenses_Frequency')=='month' ? 'selected' : '' }}>Month</option>
                                            <option value="year" {{ session('FinancialDetails.Total_Expenses_Frequency')=='year' ? 'selected' : '' }}>Year</option>
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
                            <div class="btn-group btn-group-toggle btn-group-sm mb-2" data-toggle="buttons" id="Home_Loan_Active">
                                <label class="btn btn-outline-info {{ session('FinancialDetails.Home_Loan_Active')=='Yes' ? 'active' : '' }}">
                                    <input type="radio" name="Home_Loan_Active" id="Home_Loan_Active_Yes" value="Yes" {{ session('FinancialDetails.Home_Loan_Active')=='Yes' ? 'checked' : '' }}/>Yes</label>
                                <label class="btn btn-outline-info {{ session('FinancialDetails.Home_Loan_Active')=='No' ? 'active' : '' }}">
                                    <input type="radio" name="Home_Loan_Active" id="Home_Loan_Active_No" value="No" {{ session('FinancialDetails.Home_Loan_Active')=='No' ? 'checked' : '' }}/>No</label>
                            </div>

                            <div id="homeLoans_liabilities">
                                {{--Placeholder for home loan input--}}
                            </div>



                            {{--Personal loans--}}
                            <div style="color: #659267" class="mb-3 ">
                                <strong>Personal Loans</strong>
                            </div>

                            <div class="mb-2">Do you have any personal loans? </div>
                            <div class="btn-group btn-group-toggle btn-group-sm mb-2" data-toggle="buttons" id="Personal_Loan_Active" >
                                <label class="btn btn-outline-info {{ session('FinancialDetails.Personal_Loan_Active')=='Yes' ? 'active' : '' }}">
                                    <input type="radio" name="Personal_Loan_Active" id="Personal_Loan_Active_Yes" value="Yes" {{ session('FinancialDetails.Personal_Loan_Active')=='Yes' ? 'checked' : '' }}/>Yes</label>
                                <label class="btn btn-outline-info {{ session('FinancialDetails.Personal_Loan_Active')=='No' ? 'active' : '' }}">
                                    <input type="radio" name="Personal_Loan_Active" id="Personal_Loan_Active_No" value="No" {{ session('FinancialDetails.Personal_Loan_Active')=='No' ? 'checked' : '' }}/>No</label>
                            </div>

                            <div id="personalLoans_liabilities">
                                {{--Placeholder for personal loan input--}}
                            </div>

                            {{--Credit Cards--}}
                            <div style="color: #659267" class="mb-3 ">
                                <strong>Credit cards</strong>
                            </div>

                            <div class="mb-2">Do you have any credit cards? </div>
                            <div class="btn-group btn-group-toggle btn-group-sm mb-2" data-toggle="buttons" id="Credit_Cards_Active" >
                                <label class="btn btn-outline-info {{ session('FinancialDetails.Credit_Cards_Active')=='Yes' ? 'active' : '' }}">
                                    <input type="radio" name="Credit_Cards_Active" id="Credit_Cards_Active_Yes" value="Yes" {{ session('FinancialDetails.Credit_Cards_Active')=='Yes' ? 'checked' : '' }}/>Yes</label>
                                <label class="btn btn-outline-info {{ session('FinancialDetails.Credit_Cards_Active')=='No' ? 'active' : '' }}">
                                    <input type="radio" name="Credit_Cards_Active" id="Credit_Cards_Active_No" value="No" {{ session('FinancialDetails.Credit_Cards_Active')=='No' ? 'checked' : '' }}/>No</label>
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
                                    <a class="btn btn-outline-info btn-sm " href="/Step2" role="button">Previous Page</a>
                                </div>
                                <div class="col-md-4 col-sm-12 mt-sm-3">
                                    {{--<a class="btn btn-success btn-lg" href="/Review" role="button">Continue</a>--}}
                                    <button type="submit" class="btn btn-success btn-lg">Continue</button>
                                </div>
                            </div>

                    </form>

                </div>
            </div>
        {{--</div>--}}
    </div>

    <script>
        window.onload=function () {

            Government_Benefits_Received();
            Rental_Income_Received();
            Other_Income_Received();
            Home_Loan_Active();
            Personal_Loan_Active();
            Credit_Cards_Active();


            /*Government Benefits*/
            function Government_Benefits_Received() {
                var y = document.querySelector('input[name="Government_Benefits_Received"]:checked').value;

                if (y =='No') {
                    $("#governmentBenefits_input").detach();
                } else if (y =='Yes') {
                    $('#governmentBenefits_income').load("/financialDetails_partials #governmentBenefits_input");
                }
            }


            /*Rental Income*/
            function Rental_Income_Received() {
                var y = document.querySelector('input[name="Rental_Income_Received"]:checked').value;

                if (y =='No') {
                    $("#rentalIncome_input").detach();
                } else if (y =='Yes') {
                    $('#rentalIncome_income').load("/financialDetails_partials #rentalIncome_input");
                }
            }


            /*Other Income*/
            function Other_Income_Received() {
                var y = document.querySelector('input[name="Other_Income_Received"]:checked').value;

                if (y =='No') {
                    $("#otherIncome_input").detach();
                } else if (y =='Yes') {
                    $('#otherIncome_income').load("/financialDetails_partials #otherIncome_input");
                }
            }


            /*Home Loans*/
            function Home_Loan_Active() {
                var y = document.querySelector('input[name="Home_Loan_Active"]:checked').value;

                if (y =='No') {
                    $("#homeLoan_input").detach();
                } else if (y =='Yes') {
                    $('#homeLoans_liabilities').load("/financialDetails_partials #homeLoan_input");
                }
            }

            /*Personal Loans*/
            function Personal_Loan_Active() {
                var y = document.querySelector('input[name="Personal_Loan_Active"]:checked').value;

                if (y =='No') {
                    $("#personalLoan_input").detach();
                } else if (y =='Yes') {
                    $('#personalLoans_liabilities').load("/financialDetails_partials #personalLoan_input");
                }
            }


            /*Credit Cards*/
            function Credit_Cards_Active() {
                var y = document.querySelector('input[name="Credit_Cards_Active"]:checked').value;

                if (y =='No') {
                    $("#creditCards_input").detach();
                } else if (y =='Yes') {
                    $('#creditCards_liabilities').load("/financialDetails_partials #creditCards_input");
                }
            }

        }
    </script>

    {{--Scripts for the add/remove additional income inputs--}}
    <script>
        /*Government Benefits*/
            $(function () {
                $('#Government_Benefits_Received input[type=radio]').change(function(){

                    var y = document.querySelector('input[name="Government_Benefits_Received"]:checked').value;

                    if (y =='No') {
                        $("#governmentBenefits_input").detach();
                    } else if (y =='Yes') {
                        $('#governmentBenefits_income').load("/financialDetails_partials #governmentBenefits_input");
                    }

                })
            })

        /*Rental Income*/
        $(function () {
            $('#Rental_Income_Received input[type=radio]').change(function(){

                var y = document.querySelector('input[name="Rental_Income_Received"]:checked').value;

                if (y =='No') {
                    $("#rentalIncome_input").detach();
                } else if (y =='Yes') {
                    $('#rentalIncome_income').load("/financialDetails_partials #rentalIncome_input");
                }

            })
        })

        /*Other Income*/
        $(function () {
            $('#Other_Income_Received input[type=radio]').change(function(){

                var y = document.querySelector('input[name="Other_Income_Received"]:checked').value;

                if (y =='No') {
                    $("#otherIncome_input").detach();
                } else if (y =='Yes') {
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
                case "week":
                    expense1 = expense1_value.value * 52;
                    break;
                case "fortnight":
                    expense1 = expense1_value.value * 26;
                    break;
                case "month":
                    expense1 = expense1_value.value * 12;
                    break;
                case "year":
                    expense1 = expense1_value.value * 1;
                    break;
            }

            //expense 2
            switch (expense2_periodicity.value) {
                case "week":
                    expense2 = expense2_value.value * 52;
                    break;
                case "fortnight":
                    expense2 = expense2_value.value * 26;
                    break;
                case "month":
                    expense2 = expense2_value.value * 12;
                    break;
                case "year":
                    expense2 = expense2_value.value * 1;
                    break;
            }

            //expense 3
            switch (expense3_periodicity.value) {
                case "week":
                    expense3 = expense3_value.value * 52;
                    break;
                case "fortnight":
                    expense3 = expense3_value.value * 26;
                    break;
                case "month":
                    expense3 = expense3_value.value * 12;
                    break;
                case "year":
                    expense3 = expense3_value.value * 1;
                    break;
            }

            //expense 4
            switch (expense4_periodicity.value) {
                case "week":
                    expense4 = expense4_value.value * 52;
                    break;
                case "fortnight":
                    expense4 = expense4_value.value * 26;
                    break;
                case "month":
                    expense4 = expense4_value.value * 12;
                    break;
                case "year":
                    expense4 = expense4_value.value * 1;
                    break;
            }

            // Fill in the total expense field, rounding to 2 decimal places
            var totalExpenses = expense1 + expense2 + expense3 + expense4 ;

            var Total_Expenses_Frequency = document.getElementById("Total_Expenses_Frequency");

            //calculate the total expenses based on the user selection
            switch (Total_Expenses_Frequency.value) {
                case "week":
                    expenses = totalExpenses / 52;
                    break;
                case "fortnight":
                    expenses = totalExpenses / 26;
                    break;
                case "month":
                    expenses = totalExpenses / 12;
                    break;
                case "year":
                    expenses = totalExpenses / 1;
                    break;
            }

            document.getElementById("Total_Expenses").value = expenses.toFixed(2);
        }


    </script>

    {{--Scripts for the add/remove liabilities (loans) inputs--}}
    <script>
        /*Home Loans*/
        $(function () {
            $('#Home_Loan_Active input[type=radio]').change(function(){

                var y = document.querySelector('input[name="Home_Loan_Active"]:checked').value;

                if (y =='No') {
                    $("#homeLoan_input").detach();
                } else if (y =='Yes') {
                    $('#homeLoans_liabilities').load("/financialDetails_partials #homeLoan_input");
                }

            })
        })

        /*Personal Loans*/
        $(function () {
            $('#Personal_Loan_Active input[type=radio]').change(function(){

                var y = document.querySelector('input[name="Personal_Loan_Active"]:checked').value;

                if (y =='No') {
                    $("#personalLoan_input").detach();
                } else if (y =='Yes') {
                    $('#personalLoans_liabilities').load("/financialDetails_partials #personalLoan_input");
                }

            })
        })

        /*Credit Cards*/
        $(function () {
            $('#Credit_Cards_Active input[type=radio]').change(function(){

                var y = document.querySelector('input[name="Credit_Cards_Active"]:checked').value;

                if (y =='No') {
                    $("#creditCards_input").detach();
                } else if (y =='Yes') {
                    $('#creditCards_liabilities').load("/financialDetails_partials #creditCards_input");
                }

            })
        })

    </script>
@stop
