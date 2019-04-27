

@extends('Application.layouts.default')

@section('content')

    <div class="row col-md-12 offset-md-0 col-xs-12" style=" margin-bottom: 30px; color: grey"> <h3>Unsecured Personal Loan</h3> </div>

    <div class="row col-md-12 offset-md-0 col-xs-12">
        <div class="col-12">
            <div class="row mb-3">
                <div class="col-sm" style="border-bottom-color:#659267; border-bottom-style: solid; border-bottom-width: 5px; border-top-style: solid; border-top-color: whitesmoke; ">
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
                <div class="col-sm"style="border-bottom-color:#659267; border-bottom-style: solid; border-bottom-width: 5px; border-top-style: solid; border-top-color: whitesmoke; margin-right: 0px;">
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
                    <h5 class="mb-0">Review and submit</h5>
                </div>

                <div class="card-body" style="border-radius: 0px 0px 5px 5px;;background-color:#efebe4" >

                    {{--<form class="needs-validation" method="post" action="/Review" novalidate>

                    @csrf--}}

                    <!-- SECTION HEADER - My Loan - -->
                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>My loan</strong> <span class="float-right" style="color: black;"><i class="fas fa-pen  "></i> <a href="/Step1">Edit</a></span>
                    </div>

                    {{--Loan--}}
                    <div class="form-row">
                        {{--Loan Amount--}}
                        <div class="form-group col-lg-3">
                            <label for="Loan_Amount">Loan amount</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="Loan_Amount" value="${{number_format(Session::get('LoanDetails.Loan_Amount'),0)}}">
                        </div>

                        {{--Estimated repayments--}}
                        <div class="form-group col-lg-4">
                            <label for="Estimated_Loan_Repayments">Estimated repayments</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="Estimated_Loan_Repayments" value="{{Session::get('LoanDetails.Estimated_Repayments_Excellent')}} to {{Session::get('LoanDetails.Estimated_Repayments_Ok')}}">
                        </div>

                        {{--Interest rate--}}
                        <div class="form-group col-lg-3">
                            <label for="Estimated_Interest_Rate">Interest rate</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="Estimated_Interest_Rate" value="{{Session::get('LoanDetails.Interest_Rate_Excellent')}} to {{Session::get('LoanDetails.Interest_Rate_Ok')}}">
                        </div>

                        {{--Loan term--}}
                        <div class="form-group col-lg-3">
                            <label for="Loan_Duration">Loan term</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="Loan_Duration" value="{{Session::get('LoanDetails.Loan_Duration')}} {{Session::get('LoanDetails.Loan_Duration_Periodicity')}}">
                        </div>

                        {{--Loan purpose--}}
                        <div class="form-group col-lg-3">
                            <label for="loan_reason">Loan purpose</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="loan_reason" value="{{Session::get('LoanDetails.Loan_Reason')}}">
                        </div>

                    </div>

                    <!-- SECTION HEADER - My Income - -->
                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>My income</strong> <span class="float-right" style="color: black;"><i class="fas fa-pen  "></i> <a href="/Step3">Edit</a></span>
                    </div>

                        {{--Income--}}
                        <div class="form-row">
                            {{--Salary--}}
                            <div class="form-group col-md-3">
                                <label for="salary">Salary (after tax)</label>
                                <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="salary" value="${{number_format(Session::get('FinancialDetails.Salary_Amount'),0)}} / {{Session::get('FinancialDetails.Salary_Frequency')}}">
                            </div>

                            {{--Government Benefits--}}
                            <div class="form-group col-md-3">
                                <label for="governmentBenefits">Government allowances / pension</label>
                                <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="governmentBenefits"
                                       @if (Session::has('FinancialDetails.Government_Benefits_Income'))
                                           value="${{number_format(Session::get('FinancialDetails.Government_Benefits_Income'),0)}} / {{Session::get('FinancialDetails.Government_Benefits_Income_Frequency')}}"
                                       @else
                                           value="na"
                                       @endif
                                >
                            </div>

                            {{--Rental Income--}}
                            <div class="form-group col-md-3">
                                <label for="rentalIncome">Rental income</label>
                                <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="rentalIncome"
                                    @if (Session::has('FinancialDetails.Rental_Income'))
                                        value="${{number_format(Session::get('FinancialDetails.Rental_Income'),0)}} / {{Session::get('FinancialDetails.Rental_Income_Frequency')}}"
                                    @else
                                        value="na"
                                    @endif
                                >
                            </div>

                            {{--Other Income--}}
                            <div class="form-group col-md-3">
                                <label for="otherIncome">Other income</label>
                                <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="otherIncome"
                                    @if (Session::has('FinancialDetails.Other_Income'))
                                       value="${{number_format(Session::get('FinancialDetails.Other_Income'),0)}} / {{Session::get('FinancialDetails.Other_Income_Frequency')}}"
                                    @else
                                       value="na"
                                    @endif
                                >
                            </div>

                        </div>

                    <!-- SECTION HEADER - My assets - -->
                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>My assets</strong> <span class="float-right" style="color: black;"><i class="fas fa-pen  "></i> <a href="/Step3">Edit</a></span>
                    </div>

                    {{--Assets--}}
                        <div class="form-row">
                            {{--Properties--}}
                            <div class="form-group col-lg-4">
                                <label for="xx">Market value of all properties (if any)</label>
                                <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="xx" value="${{number_format(Session::get('FinancialDetails.Market_Value_Properties'),0)}}">
                            </div>

                            {{--Other assets--}}
                            <div class="form-group col-lg-4">
                                <label for="xx">Other assets</label>
                                <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="xx" value="${{number_format(Session::get('FinancialDetails.Other_Assets_Value'),0)}}">
                            </div>

                            {{--Savings--}}
                            <div class="form-group col-lg-4">
                                <label for="xx">Total balance if saving accounts</label>
                                <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="xx" value="${{number_format(Session::get('FinancialDetails.Savings_Amount'),0)}}">
                            </div>

                        </div>

                    <!-- SECTION HEADER - My Expenses - -->
                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>My expenses</strong> <span class="float-right" style="color: black;"><i class="fas fa-pen  "></i> <a href="/Step3">Edit</a></span>
                    </div>

                    {{--Expenses--}}
                    <div class="form-row">
                        {{--Living Expenses--}}
                        <div class="form-group col-lg-12">
                            <label for="Total_Expenses">Living expenses</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="Total_Expenses" name="Total_Expenses" value="${{number_format(Session::get('FinancialDetails.Total_Expenses'),0)}} / {{Session::get('FinancialDetails.Total_Expenses_Frequency')}}">
                        </div>

                        {{--Home Loan--}}
                        <div class="form-group col-lg-3">
                            <label for="homeLoan">Any home loans</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="homeLoan" value="{{Session::get('FinancialDetails.Home_Loan_Active')}}">
                        </div>

                        {{--Home Loan Repayments--}}
                        <div class="form-group col-lg-4">
                            <label for="homeLoan_repayments">Mortgage repayments</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="homeLoan_repayments"
                                   @if (Session::has('FinancialDetails.Home_Loan_Repayments'))
                                   value="${{number_format(Session::get('FinancialDetails.Home_Loan_Repayments'),0)}} / {{Session::get('FinancialDetails.Home_Loan_Repayments_Frequency')}}"
                                   @else
                                   value="na"
                                   @endif
                                   >
                        </div>

                        {{--Home Loan Balance--}}
                        <div class="form-group col-lg-3">
                            <label for="homeLoan_balance">Mortgage balance</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="homeLoan_balance"
                                    @if (Session::has('FinancialDetails.Home_Loan_Balance'))
                                        value="${{number_format(Session::get('FinancialDetails.Home_Loan_Balance'),0)}}"
                                    @else
                                        value="na"
                                    @endif
                            >
                        </div>

                        {{--Personal Loan--}}
                        <div class="form-group col-lg-3">
                            <label for="personalLoan">Any personal loans</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="personalLoan" value="{{Session::get('FinancialDetails.Personal_Loan_Active')}}">
                        </div>

                        {{--Personal Loan Repayments--}}
                        <div class="form-group col-lg-4">
                            <label for="personalLoan_repayments">Personal loan repayments</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="personalLoan_repayments"

                                    @if (Session::has('FinancialDetails.Personal_Loan_Repayments'))
                                        value="${{number_format(Session::get('FinancialDetails.Personal_Loan_Repayments'),0)}} / {{Session::get('FinancialDetails.Personal_Loan_Repayments_Frequency')}}"
                                    @else
                                        value="na"
                                    @endif
                            >
                        </div>

                        {{--Personal Loan Balance--}}
                        <div class="form-group col-lg-3">
                            <label for="personalLoan_balance">Personal loan balance</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="personalLoan_balance"

                                @if (Session::has('FinancialDetails.Personal_Loan_Balance'))
                                    value="${{number_format(Session::get('FinancialDetails.Personal_Loan_Balance'),0)}}"
                                @else
                                    value="na"
                                @endif
                            >
                        </div>

                        {{--Credit cards--}}
                        <div class="form-group col-lg-3">
                            <label for="creditCards">Any credit cards</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="creditCards" value="{{Session::get('FinancialDetails.Credit_Cards_Active')}}">
                        </div>

                        {{--Credit card amount owing--}}
                        <div class="form-group col-lg-4">
                            <label for="creditCards_owings">Amount owing on credit cards</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="creditCards_owings"

                            @if (Session::has('FinancialDetails.Credit_Cards_Owing'))
                                value="${{number_format(Session::get('FinancialDetails.Credit_Cards_Owing'),0)}}"
                            @else
                                value="na"
                            @endif
                            >
                        </div>

                        {{--Credit card max limit--}}
                        <div class="form-group col-lg-3">
                            <label for="creditCards_maxLimit">Credit card limit</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="creditCards_maxLimit"

                                @if (Session::has('FinancialDetails.Credit_Cards_Limit'))
                                    value="${{number_format(Session::get('FinancialDetails.Credit_Cards_Limit'),0)}}"
                                @else
                                    value="na"
                                @endif
                            >
                        </div>

                    </div>

                    <!-- SECTION HEADER - My personal details - -->
                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>My details</strong> <span class="float-right" style="color: black;"><i class="fas fa-pen  "></i> <a href="/Step2">Edit</a></span>
                    </div>

                    <div class="form-row">
                        {{--Full name--}}
                        <div class="form-group col-lg-3">
                            <label for="fullName">Full name</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="fullName" value="{{Session::get('PersonalDetails.Name_Title')}} {{Session::get('PersonalDetails.First_Name')}} {{Session::get('PersonalDetails.Middle_Name')}} {{Session::get('PersonalDetails.Last_Name')}}">
                        </div>

                        {{--Date of birth--}}
                        <div class="form-group col-lg-3">
                            <label for="xx">Date of birth</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="xx" value="{{Session::get('PersonalDetails.DOB')}}">
                        </div>

                        {{--Australian drivers licence--}}
                        <div class="form-group col-lg-3">
                            <label for="xx">Australian drivers licence</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="xx" value="{{Session::get('PersonalDetails.Drivers_Licence_Number')}} ({{Session::get('PersonalDetails.Drivers_Licence_State_Issue')}})">
                        </div>

                        {{--Contact number--}}
                        <div class="form-group col-lg-3">
                            <label for="preferredContactNumber">Contact number</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="preferredContactNumber" value="{{Session::get('PersonalDetails.Preferred_Contact_Number')}}">
                        </div>

                        {{--Martial status--}}
                        <div class="form-group col-lg-3">
                            <label for="martialStatus">Martial status</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="martialStatus" value="{{Session::get('PersonalDetails.Martial_Status')}}">
                        </div>

                        {{--Number of dependents--}}
                        <div class="form-group col-lg-3">
                            <label for="numberDependents">Number of dependents</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="numberDependents" value="{{Session::get('PersonalDetails.Number_Of_Dependents')}}">
                        </div>

                        {{--Residential status--}}
                        <div class="form-group col-lg-3">
                            <label for="residentialStatus">Residential status</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="residentialStatus" value="{{Session::get('PersonalDetails.Residential_Status')}}">
                        </div>
                    </div>

                    <div class="form-row">
                        {{--Residential address--}}
                        <div class="form-group col-lg-6">
                            <label for="inputAddress">Residential address</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="inputAddress" value="{{Session::get('PersonalDetails.Residential_Address')}}">
                        </div>

                        {{--Time at residential address--}}
                        <div class="form-group col-lg-3">
                            <label for="timeAddress">Time at address</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="timeAddress" value="{{Session::get('PersonalDetails.Time_At_Current_Address')}}">
                        </div>

                        {{--Previous Residential address--}}
                        <div class="form-group col-lg-6">
                            <label for="inputAddress">Previous Residential address</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="inputAddress"
                                   @if (Session::has('PersonalDetails.Previous_Residential_Address'))
                                   value="{{Session::get('PersonalDetails.Previous_Residential_Address')}}"
                                   @else
                                   value="na"
                                @endif
                            >
                        </div>

                        {{--Time at previous residential address--}}
                        <div class="form-group col-lg-3">
                            <label for="timeAddress">Time at address</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="timeAddress"
                                   @if (Session::has('PersonalDetails.Time_At_Previous_Address'))
                                   value="{{Session::get('PersonalDetails.Time_At_Previous_Address')}}"
                                   @else
                                   value="na"
                                   @endif
                            >
                        </div>

                    </div>

                    <!-- SECTION HEADER - My employment details - -->
                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>My employment details</strong> <span class="float-right" style="color: black;"><i class="fas fa-pen  "></i> <a href="/Step2">Edit</a></span>
                    </div>

                    <div class="form-row">
                        {{--Employment status--}}
                        <div class="form-group col-lg-3">
                            <label for="employmentType">Employment type</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="employmentType" value="{{Session::get('PersonalDetails.Current_Employment_Type')}}">
                        </div>


                        {{--Employers name--}}
                        <div class="form-group col-lg-3">
                            <label for="employerName">Employers name</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="employerName" value="{{Session::get('PersonalDetails.Current_Employers_Name')}}">
                        </div>

                        {{--Employer number--}}
                        <div class="form-group col-lg-3">
                            <label for="employerPhone">Employer phone number</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="employerPhone" value="{{Session::get('PersonalDetails.Current_Employers_Phone')}}">
                        </div>

                        {{--Time at current employer--}}
                        <div class="form-group col-lg-3">
                            <label for="currentEmployerTime">Time at current employer</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="currentEmployerTime" value="{{Session::get('PersonalDetails.Current_Employment_Length')}}">
                        </div>

                        {{--Previous Employment status--}}
                        <div class="form-group col-lg-3">
                            <label for="employmentTypePrevious">Previous employment type</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="employmentTypePrevious"
                                   @if (Session::has('PersonalDetails.Previous_Employment_Type'))
                                   value="{{Session::get('PersonalDetails.Previous_Employment_Type')}}"
                                   @else
                                   value="na"
                                   @endif
                            >
                        </div>

                        {{--Previous Employers name--}}
                        <div class="form-group col-lg-3">
                            <label for="employerNamePrevious">Previous employers name</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="employerNamePrevious"
                                   @if (Session::has('PersonalDetails.Previous_Employers_Name'))
                                   value="{{Session::get('PersonalDetails.Previous_Employers_Name')}}"
                                   @else
                                   value="na"
                                   @endif
                            >
                        </div>

                        {{--Time at previous employer--}}
                        <div class="form-group col-lg-3">
                            <label for="employmentPeriodPrevious">Time at previous employer</label>
                            <input type="text" readonly class="font-weight-bold form-control-plaintext mt-n3" id="employmentPeriodPrevious"
                                   @if (Session::has('PersonalDetails.Previous_Employment_Length'))
                                   value="{{Session::get('PersonalDetails.Previous_Employment_Length')}}"
                                   @else
                                   value="na"
                                   @endif
                            >
                        </div>
                    </div>


                    <form class="needs-validation" method="post" action="/Review" novalidate>

                    @csrf
                        <!-- SECTION HEADER - Acknowledgements - -->
                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>Acknowledgements</strong>
                    </div>


                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="Financial_Position" id="Financial_Position" value="Checked" required>
                        <label class="custom-control-label" for="Financial_Position" >I have considered my future circumstances and financial position and are able to repay the loan</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="True_Information" id="True_Information" value="Checked" required>
                        <label class="custom-control-label" for="True_Information">I agree that the information I have given is true and correct</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="Electronic_Authorisation" id="Electronic_Authorisation" value="Checked" required>
                        <label class="custom-control-label" for="Electronic_Authorisation">I have reviewed, understand and consent to the <a data-toggle="modal" href="#PrivacyConsent">Privacy Consents and Electronic Authorisation</a></label>
                    </div>
                    {{--<div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="Personal_Consent" id="Personal_Consent" value="Checked">
                        <label class="custom-control-label" for="Personal_Consent">I consent to the disclosure of my personal information as set out in the <a href="">Privacy Policy</a>, including Salt&Lime obtaining a credit report </label>
                    </div>--}}


                        <!-- BUTTONS -->
                        {{--<div class="form-group row justify-content-center">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-success btn-lg">Continue</button>
                            </div>
                        </div>--}}


                        <div class="row justify-content-between text-center align-items-center">
                            <div class="col-md-4 col-sm-12 ">
                                <a class="btn btn-outline-info btn-sm " href="/Step3" role="button">Previous Page</a>
                            </div>
                            <div class="col-md-4 col-sm-12 mt-sm-3">
                                {{--<a class="btn btn-success btn-lg" href="/NextSteps" role="button">Submit</a>--}}
                                <button type="submit" class="btn btn-success btn-lg">Continue</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        {{--</div>--}}
    </div>

    <!-- Modal for description of the credit bands -->
    <div class="modal fade bd-example-modal-lg" id="PrivacyConsent" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Privacy Consents and Electronic Authorisation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <p>In order for us to comply with our legal obligations in assessing whether to provide a loan to you, Salt and Lime Pty Ltd ACN 619 815 833 Australian Credit Licence Number 501633 (“we”, “our”, “us”) needs to obtain from you and other parties personal information relating to you. </p>

                    <p>Refer to our <a href="https://www.saltandlime.com.au/privacy-credit-reporting-policy" target="_blank">Privacy Policy</a> for information on how we collect, use, and disclose your personal information. </p>

                    <h5>1. The purposes for which we collect and use your personal information</h5>

                    <p>We collect your personal information so that we can:</p>

                    <ul>
                        <li>accept, assess, and process your application for a loan;</li>
                        <li>undertake risk assessment and management involving credit scoring, identity verification, and fraud prevention;</li>
                        <li>obtain your bank account transaction information or internet banking access details;</li>
                        <li>provide you with information about other products or services we currently offer or may offer in the future; and</li>
                        <li>comply with any other legislative and regulatory requirements.</li>
                    </ul>


                    <h5>2. Exchange or supply of personal information with third parties</h5>

                    <p>We may exchange your personal information with or obtain information from:</p>

                    <ul>
                        <li>credit reporting agencies or any businesses which provide information about your credit worthiness and/or confirmation of your identity;</li>
                        <li>personal and/or business referees nominated by you, including your employer (in relation to your employment status and income);</li>
                        <li>our professional advisers, contractors and other service providers (eg. IT consultants);</li>
                        <li>your legal and financial advisers (if any);</li>
                        <li>Centrelink, Australian Taxation Office or other Government departments, agencies or bodies, to whom we may be required by law to disclose information supplied by you to us; </li>
                        <li>our financiers;</li>
                        <li>other credit providers and financial institutions;</li>
                        <li>our ASIC approved external dispute resolution service;</li>
                        <li>payment system operators (if any);</li>
                        <li>our insurers, insurance underwriters/providers in relation to our insurance policies; and</li>
                        <li>debt collectors and debt purchasers.</li>
                    </ul>

                    <p>We may also provide your personal information to others who may purchase (or who may be interested in purchasing) any interest in the obligations you may owe us under the credit contract. </p>

                    <p>We may sell your personal information for a fee to other credit licencees (either credit providers or credit assistance providers) or lead providers. The credit service providers or lead providers may either provide a service themselves to you or on sell your personal information to others. </p>

                    <p>We may use the personal information we have obtained about you for the purposes of offering you other products or services, which we believe may be of interest or benefit to you that we or our partners might have available. You can withdraw your consent at any time by advising us. </p>

                    <h5>3. Credit reporting agencies and other credit providers</h5>
                    <p>You authorise us to give to a credit reporting agency personal information necessary to ascertain your identity, and to advise a credit reporting agency that you have applied for a loan, the amount of the loan, our status as a current credit provider to you, payments that are overdue for more than 60 days, payments which are no longer overdue, when a serious credit infringement has been committed, or that the full amount of your loan has been paid (or your loan has been otherwise discharged).</p>

                    <h5>4. Illion privacy terms</h5>

                    <p>If you agree that we may access your transaction history the following provisions shall apply:</p>

                    <ul>

                        <li> you agree to provide true, accurate, current and complete information about yourself and your bank accounts (with us or third parties) and you agree to not misrepresent your identity or your account information; </li>
                        <li>neither we nor illion Open Data Solutions will store or have access to your internet banking credentials, PIN codes or passwords. That information is encrypted in transit and stored by a third party service provider upon their servers in a secure environment outside the EEA and Australia; </li>
                        <li>by agreeing to allow us viewing access to your transaction history, you authorise illion Open Data Solutions and illion's service providers to access third party sites designated by you, on your behalf, to retrieve information requested by us, and to register to view bank statements over a period of up to 90 days; </li>
                        <li>you acknowledge that access and retrieval of information and transaction history from third party sites is undertaken as your agent, and not the agent on behalf of any third party (including the bank account provider); and  </li>
                        <li>you understand that allowing us to review your transaction history is at your sole risk. </li>
                    </ul>

                    <h5>5. Access and correction of your personal information </h5>

                    <p>You can ask to obtain access to personal information we and/or our contractors hold, although under some circumstances permitted by law, you may not be provided with such information. </p>

                    <p>If we decide not to correct or provide you with access to your personal information, we will give you our reasons for our decision. </p>

                    <h5>6. Electronic authorisation</h5>
                    <p> Electronic Transactions Act 1999 enables some transactions to be entered into electronically. Under that Act, we are not entitled to conduct our business with you electronically unless we have your consent and agreement to do so.</p>

                    <p>In deciding whether you should provide that consent, we advise that should you consider:</p>

                    <ul>
                        <li>any electronic communication from us to you will be in a form which will be able to be saved by you, will be able to be printed by you or will be usable by you for subsequent reference;</li>
                        <li>any electronic communication from us to you will either direct you to a website from which the document can be downloaded, or the communication will have an attachment containing the information;</li>
                        <li>we will retain a copy of the electronic communication for such time as we are required to by law in a form which complies with the law;</li>
                        <li>you have the right to withdraw your consent to receive electronic communications on giving us at least two business days notice; and</li>
                        <li>we intend to communicate you electronically in all matters where we are able to by law, and we expect that you will regularly check your electronic communication systems (e-mail and SMS).</li>
                    </ul>
                    <h5>7. Acknowledgement and Consent</h5>
                    <p>I have read and understood this Privacy Consent and Electronic Authority, and consent to Salt&Lime using personal information in accordance with these terms.</p>

                    <p>I have read and understood the consent given under the Electronic Transactions Act 1999 and agree to allow Salt and Lime Pty Ltd to communicate with me electronically.</p>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@stop
