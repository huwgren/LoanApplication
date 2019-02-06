

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
                <div class="col-sm"style="border-bottom-color:#659267; border-bottom-style: solid; border-bottom-width: 5px; border-top-style: solid; border-top-color: whitesmoke;">
                    Step 3
                    <br>
                    <strong>Finances</strong>
                </div>
                <div class="col-sm"style="border-bottom-color:#659267; border-bottom-style: solid; border-bottom-width: 5px; border-top-style: solid; border-top-color: whitesmoke; margin-right: 15px;">
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
                    <h5 class="mb-0">Review and submit</h5>
                </div>

                <div class="card-body" style="border-radius: 0px 0px 5px 5px;;background-color:#efebe4" >

                    <form class="needs-validation" method="post" action="/xxx" novalidate>

                    @csrf

                    <!-- SECTION HEADER - My Loan - -->
                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>My loan</strong>
                    </div>

                    {{--Loan--}}
                    <div class="form-row">
                        {{--Loan Amount--}}
                        <div class="form-group col-lg-3">
                            <label for="loan_amount">Loan amount</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="loan_amount" value="$xx">
                        </div>

                        {{--Estimated repayments--}}
                        <div class="form-group col-lg-4">
                            <label for="xx">Estimated repayments</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="xx" value="$xx/month">
                        </div>

                        {{--Interest rate--}}
                        <div class="form-group col-lg-3">
                            <label for="rentalIncome">Interest rate</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="rentalIncome" value="xx%">
                        </div>

                        {{--Loan term--}}
                        <div class="form-group col-lg-3">
                            <label for="loan_duration">Loan term</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="loan_duration" value="xx">
                        </div>

                        {{--Loan purpose--}}
                        <div class="form-group col-lg-3">
                            <label for="loan_reason">Loan purpose</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="loan_reason" value="xx">
                        </div>

                    </div>

                    <!-- SECTION HEADER - My Income - -->
                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>My income</strong>
                    </div>

                        {{--Income--}}
                        <div class="form-row">
                            {{--Salary--}}
                            <div class="form-group col-lg-3">
                                <label for="salary">Salary (after tax)</label>
                                <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="salary" value="$xx/month">
                            </div>

                            {{--Government Benefits--}}
                            <div class="form-group col-lg-4">
                                <label for="governmentBenefits">Government allowances / pension</label>
                                <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="governmentBenefits" value="$xx/month">
                            </div>

                            {{--Rental Income--}}
                            <div class="form-group col-lg-3">
                                <label for="rentalIncome">Rental income</label>
                                <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="rentalIncome" value="$xx/month">
                            </div>

                            {{--Other Income--}}
                            <div class="form-group col-lg-3">
                                <label for="otherIncome">Other income</label>
                                <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="otherIncome" value="$xx/month">
                            </div>

                        </div>

                    <!-- SECTION HEADER - My assets - -->
                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>My assets</strong>
                    </div>

                    {{--Assets--}}
                        <div class="form-row">
                            {{--Properties--}}
                            <div class="form-group col-lg-4">
                                <label for="xx">Market value of all properties (if any)</label>
                                <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="xx" value="$xx">
                            </div>

                            {{--Other assets--}}
                            <div class="form-group col-lg-4">
                                <label for="xx">Other assets</label>
                                <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="xx" value="$xx">
                            </div>

                            {{--Savings--}}
                            <div class="form-group col-lg-4">
                                <label for="xx">Total balance if saving accounts</label>
                                <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="xx" value="$xx">
                            </div>

                        </div>

                    <!-- SECTION HEADER - My Expenses - -->
                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>My expenses</strong>
                    </div>

                    {{--Expenses--}}
                    <div class="form-row">
                        {{--Living Expenses--}}
                        <div class="form-group col-lg-12">
                            <label for="totalExpenses">Living expenses</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="totalExpenses" value="$xx/month">
                        </div>

                        {{--Home Loan--}}
                        <div class="form-group col-lg-3">
                            <label for="homeLoan">Any home loans</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="homeLoan" value="Yes">
                        </div>

                        {{--Home Loan Repayments--}}
                        <div class="form-group col-lg-4">
                            <label for="homeLoan_repayments">Mortgage repayments</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="homeLoan_repayments" value="$xx/month">
                        </div>

                        {{--Home Loan Balance--}}
                        <div class="form-group col-lg-3">
                            <label for="homeLoan_balance">Mortgage balance</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="homeLoan_balance" value="$xx">
                        </div>

                        {{--Personal Loan--}}
                        <div class="form-group col-lg-3">
                            <label for="personalLoan">Any personal loans</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="personalLoan" value="Yes">
                        </div>

                        {{--Personal Loan Repayments--}}
                        <div class="form-group col-lg-4">
                            <label for="personalLoan_repayments">Personal loan repayments</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="personalLoan_repayments" value="$xx/month">
                        </div>

                        {{--Personal Loan Balance--}}
                        <div class="form-group col-lg-3">
                            <label for="personalLoan_balance">Personal loan balance</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="personalLoan_balance" value="$xx">
                        </div>

                        {{--Credit cards--}}
                        <div class="form-group col-lg-3">
                            <label for="creditCards">Any credit cards</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="creditCards" value="Yes">
                        </div>

                        {{--Credit card amount owing--}}
                        <div class="form-group col-lg-4">
                            <label for="creditCards_owings">Amount owing on credit cards</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="creditCards_owings" value="$xx">
                        </div>

                        {{--Credit card max limit--}}
                        <div class="form-group col-lg-3">
                            <label for="creditCards_maxLimit">Credit card limit</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="creditCards_maxLimit" value="$xx">
                        </div>

                    </div>

                    <!-- SECTION HEADER - My personal details - -->
                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>My details</strong>
                    </div>

                    <div class="form-row">
                        {{--Full name--}}
                        <div class="form-group col-lg-3">
                            <label for="fullName">Full name</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="fullName" value="Mr James Allen Brown">
                        </div>

                        {{--Date of birth--}}
                        <div class="form-group col-lg-3">
                            <label for="xx">Date of birth</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="xx" value="09 August 1987">
                        </div>

                        {{--Australian drivers licence--}}
                        <div class="form-group col-lg-3">
                            <label for="xx">Australian drivers licence</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="xx" value="NSW 1234567">
                        </div>

                        {{--Contact number--}}
                        <div class="form-group col-lg-3">
                            <label for="preferredContactNumber">Contact number</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="preferredContactNumber" value="0448 333 454">
                        </div>

                        {{--Martial status--}}
                        <div class="form-group col-lg-3">
                            <label for="martialStatus">Martial status</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="martialStatus" value="Married">
                        </div>

                        {{--Number of dependents--}}
                        <div class="form-group col-lg-3">
                            <label for="numberDependents">Number of dependents</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="numberDependents" value="2">
                        </div>

                        {{--Residential status--}}
                        <div class="form-group col-lg-3">
                            <label for="residentialStatus">Residential status</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="residentialStatus" value="Renting">
                        </div>
                    </div>

                    <div class="form-row">
                        {{--Residential address--}}
                        <div class="form-group col-lg-5">
                            <label for="inputAddress">Residential address</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="inputAddress" value="xx">
                        </div>

                        {{--Time at residential address--}}
                        <div class="form-group col-lg-3">
                            <label for="timeAddress">Time at address</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="timeAddress" value="Less than 2 years">
                        </div>

                        {{--Previous Residential address--}}
                        <div class="form-group col-lg-5">
                            <label for="inputAddress">Previous Residential address</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="inputAddress" value="xx">
                        </div>

                        {{--Time at previous residential address--}}
                        <div class="form-group col-lg-3">
                            <label for="timeAddress">Time at address</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="timeAddress" value="Less than 2 years">
                        </div>

                    </div>

                    <!-- SECTION HEADER - My employment details - -->
                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>My employment details</strong>
                    </div>

                    <div class="form-row">
                        {{--Employment status--}}
                        <div class="form-group col-lg-2">
                            <label for="employmentType">Employment type</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="employmentType" value="Full-time">
                        </div>

                        {{--Occupation type--}}
                        <div class="form-group col-lg-2">
                            <label for="occupationType">Occupation type</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="occupationType" value="Accountant">
                        </div>

                        {{--Employers name--}}
                        <div class="form-group col-lg-2">
                            <label for="employerName">Employers name</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="employerName" value="Company A">
                        </div>

                        {{--Employer number--}}
                        <div class="form-group col-lg-3">
                            <label for="employerPhone">Employer phone number</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="employerPhone" value="0448 333 454">
                        </div>

                        {{--Time at current employer--}}
                        <div class="form-group col-lg-3">
                            <label for="currentEmployerTime">Time at current employer</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="currentEmployerTime" value="2 years">
                        </div>

                        {{--Previous Employment status--}}
                        <div class="form-group col-lg-3">
                            <label for="employmentTypePrevious">Previous employment type</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="employmentTypePrevious" value="Full-time">
                        </div>

                        {{--Previous Occupation type--}}
                        <div class="form-group col-lg-3">
                            <label for="occupationTypePrevious">Previous occupation type</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="occupationTypePrevious" value="Accountant">
                        </div>

                        {{--Previous Employers name--}}
                        <div class="form-group col-lg-3">
                            <label for="employerNamePrevious">Previous employers name</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="employerNamePrevious" value="Company A">
                        </div>

                        {{--Time at previous employer--}}
                        <div class="form-group col-lg-3">
                            <label for="employmentPeriodPrevious">Time at previous employer</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="employmentPeriodPrevious" value="2 years">
                        </div>
                    </div>


                        <!-- SECTION HEADER - Acknowledgements - -->
                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>Acknowledgements</strong>
                    </div>


                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">I have considered my future circumstances and financial position and are able to repay the loan</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">I agree that the information I have given is true and correct</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                        <label class="custom-control-label" for="customCheck3">I have reviewed, understand and consent to the <a href="">Electronic Authorisation</a></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">I consent to the disclosure of my personal information as set out in the <a href="">Privacy Policy</a>, including Salt&Lime obtaining a credit report </label>
                    </div>


                        <!-- BUTTONS -->
                        {{--<div class="form-group row justify-content-center">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-success btn-lg">Continue</button>
                            </div>
                        </div>--}}

                        <div class="form-group row justify-content-center align-items-center mt-3">
                            <div class="col-sm-2">
                                <a class="btn btn-outline-info btn-sm" href="/financialDetails" role="button">Previous Page</a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-success btn-lg" href="/NextSteps" role="button">Submit</a>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@stop
