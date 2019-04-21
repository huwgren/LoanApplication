

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
                                    <input type="number" class="form-control" name="Salary_Amount" id="Salary_Amount" value="{{ session('FinancialDetails.Salary_Amount') }}" required>
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
                                    <input type="radio" name="Government_Benefits_Received" id="Government_Benefits_Yes" value="Yes"   {{ session('FinancialDetails.Government_Benefits_Received')=='Yes' ? 'checked' : '' }} required />Yes</label>
                                <div class="invalid-feedback">
                                    Please select.
                                </div>
                                <label class="btn btn-outline-info {{ session('FinancialDetails.Government_Benefits_Received')=='No' ? 'active' : '' }}">
                                    <input type="radio" name="Government_Benefits_Received" id="Government_Benefits_No" value="No"  {{ session('FinancialDetails.Government_Benefits_Received')=='No' ? 'checked' : '' }} />No</label>
                                <div class="invalid-feedback">
                                    Please select.
                                </div>
                            </div>

                            <div id="governmentBenefits_income">
                                {{--Placeholder for income input--}}
                            </div>

                            {{--Rental Income--}}
                            <div class="mb-2">Do you receive any rental income? </div>
                            <div class="btn-group btn-group-toggle btn-group-sm mb-2" data-toggle="buttons" id="Rental_Income_Received" >
                                <label class="btn btn-outline-info {{ session('FinancialDetails.Rental_Income_Received')=='Yes' ? 'active' : '' }}">
                                    <input type="radio" name="Rental_Income_Received" id="Rental_Income_Yes" value="Yes"  {{ session('FinancialDetails.Rental_Income_Received')=='Yes' ? 'checked' : '' }} required/>Yes</label>
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
                                    <input type="radio" name="Other_Income_Received" id="Other_Income_Yes" value="Yes" {{ session('FinancialDetails.Other_Income_Received')=='Yes' ? 'checked' : '' }} required/>Yes</label>
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
                                        <input type="number" class="form-control" name="Market_Value_Properties" id="Market_Value_Properties" value="{{ session('FinancialDetails.Market_Value_Properties') }}" required>
                                    </div>
                                </div>

                                <!-- Other assets -->
                                <div class="form-group col-lg-4">
                                    <label for="Other_Assets_Value">Other assets (if any)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="number" class="form-control" name="Other_Assets_Value" id="Other_Assets_Value" value="{{ session('FinancialDetails.Other_Assets_Value') }}" required>
                                    </div>
                                </div>

                                <!-- Saving accounts -->
                                <div class="form-group col-lg-4">
                                    <label for="Savings_Amount">Total balance of saving accounts (if any) </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="number" class="form-control" name="Savings_Amount" id="Savings_Amount" value="{{ session('FinancialDetails.Savings_Amount') }}" required>
                                    </div>
                                </div>
                            </div>

                            <!-- SECTION HEADER - Expenses - -->
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                                <strong>Expenses</strong>
                            </div>

                            {{--Insurance Expense--}}
                            <div class="form-group row">
                                <label for="Insurance_Expense" class="col-lg-6 col-form-label">Insurance (e.g. medical, vehicle, home)</label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" class="form-control" name="Insurance_Expense_Value" id="Insurance_Expense_Value" value="{{ session('FinancialDetails.Insurance_Expense_Value') }}" onchange="calculate()" required>
                                    <div class="input-group-append">
                                        <select id="Insurance_Expense_Value_Periodicity" name="Insurance_Expense_Value_Periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()">
                                            <option value="week" {{ session('FinancialDetails.Insurance_Expense_Value_Periodicity')=='week' ? 'selected' : '' }}>Week</option>
                                            <option value="fortnight" {{ session('FinancialDetails.Insurance_Expense_Value_Periodicity')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                                            <option value="month" {{ session('FinancialDetails.Insurance_Expense_Value_Periodicity')=='month' ? 'selected' : '' }}>Month</option>
                                            <option value="year" {{ session('FinancialDetails.Insurance_Expense_Value_Periodicity')=='year' ? 'selected' : '' }}>Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{--Utilities Expense--}}
                            <div class="form-group row">
                                <label for="Utilities_Expense" class="col-lg-6 col-form-label">Utilities (e.g. water, electricity, gas)</label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" class="form-control" name="Utilities_Expense_Value" id="Utilities_Expense_Value" value="{{ session('FinancialDetails.Utilities_Expense_Value') }}" onchange="calculate()" required>
                                    <div class="input-group-append">
                                        <select id="Utilities_Expense_Value_Periodicity" name="Utilities_Expense_Value_Periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()">
                                            <option value="week" {{ session('FinancialDetails.Utilities_Expense_Value_Periodicity')=='week' ? 'selected' : '' }}>Week</option>
                                            <option value="fortnight" {{ session('FinancialDetails.Utilities_Expense_Value_Periodicity')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                                            <option value="month" {{ session('FinancialDetails.Utilities_Expense_Value_Periodicity')=='month' ? 'selected' : '' }}>Month</option>
                                            <option value="year" {{ session('FinancialDetails.Utilities_Expense_Value_Periodicity')=='year' ? 'selected' : '' }}>Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{--Phone Expense--}}
                            <div class="form-group row">
                                <label for="Phone_Expense" class="col-lg-6 col-form-label">Phone/Internet</label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" class="form-control" name="Phone_Expense_Value" id="Phone_Expense_Value" value="{{ session('FinancialDetails.Phone_Expense_Value') }}" onchange="calculate()" required>
                                    <div class="input-group-append">
                                        <select id="Phone_Expense_Value_Periodicity" name="Phone_Expense_Value_Periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()">
                                            <option value="week" {{ session('FinancialDetails.Phone_Expense_Value_Periodicity')=='week' ? 'selected' : '' }}>Week</option>
                                            <option value="fortnight" {{ session('FinancialDetails.Phone_Expense_Value_Periodicity')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                                            <option value="month" {{ session('FinancialDetails.Phone_Expense_Value_Periodicity')=='month' ? 'selected' : '' }}>Month</option>
                                            <option value="year" {{ session('FinancialDetails.Phone_Expense_Value_Periodicity')=='year' ? 'selected' : '' }}>Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{--Medical Expense--}}
                            <div class="form-group row">
                                <label for="Medical_Expense" class="col-lg-6 col-form-label">Medical</label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" class="form-control" name="Medical_Expense_Value" id="Medical_Expense_Value" value="{{ session('FinancialDetails.Medical_Expense_Value') }}" onchange="calculate()" required>
                                    <div class="input-group-append">
                                        <select id="Medical_Expense_Value_Periodicity" name="Medical_Expense_Value_Periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()">
                                            <option value="week" {{ session('FinancialDetails.Medical_Expense_Value_Periodicity')=='week' ? 'selected' : '' }}>Week</option>
                                            <option value="fortnight" {{ session('FinancialDetails.Medical_Expense_Value_Periodicity')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                                            <option value="month" {{ session('FinancialDetails.Medical_Expense_Value_Periodicity')=='month' ? 'selected' : '' }}>Month</option>
                                            <option value="year" {{ session('FinancialDetails.Medical_Expense_Value_Periodicity')=='year' ? 'selected' : '' }}>Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{--Travel Expense--}}
                            <div class="form-group row">
                                <label for="Travel_Expense" class="col-lg-6 col-form-label">Travel (e.g. vehicle running costs, public transport)</label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" class="form-control" name="Travel_Expense_Value" id="Travel_Expense_Value" value="{{ session('FinancialDetails.Travel_Expense_Value') }}" onchange="calculate()" required>
                                    <div class="input-group-append">
                                        <select id="Travel_Expense_Value_Periodicity" name="Travel_Expense_Value_Periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()">
                                            <option value="week" {{ session('FinancialDetails.Travel_Expense_Value_Periodicity')=='week' ? 'selected' : '' }}>Week</option>
                                            <option value="fortnight" {{ session('FinancialDetails.Travel_Expense_Value_Periodicity')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                                            <option value="month" {{ session('FinancialDetails.Travel_Expense_Value_Periodicity')=='month' ? 'selected' : '' }}>Month</option>
                                            <option value="year" {{ session('FinancialDetails.Travel_Expense_Value_Periodicity')=='year' ? 'selected' : '' }}>Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{--Other Expense--}}
                            <div class="form-group row">
                                <label for="Other_Expense" class="col-lg-6 col-form-label">Other (e.g. education, rates)</label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" class="form-control" name="Other_Expense_Value" id="Other_Expense_Value" value="{{ session('FinancialDetails.Other_Expense_Value') }}" onchange="calculate()" required>
                                    <div class="input-group-append">
                                        <select id="Other_Expense_Value_Periodicity" name="Other_Expense_Value_Periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()">
                                            <option value="week" {{ session('FinancialDetails.Other_Expense_Value_Periodicity')=='week' ? 'selected' : '' }}>Week</option>
                                            <option value="fortnight" {{ session('FinancialDetails.Other_Expense_Value_Periodicity')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                                            <option value="month" {{ session('FinancialDetails.Other_Expense_Value_Periodicity')=='month' ? 'selected' : '' }}>Month</option>
                                            <option value="year" {{ session('FinancialDetails.Other_Expense_Value_Periodicity')=='year' ? 'selected' : '' }}>Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{--Childcare Expense--}}
                            <div class="form-group row">
                                <label for="Childcare_Expense" class="col-lg-6 col-form-label">Childcare</label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" class="form-control" name="Childcare_Expense_Value" id="Childcare_Expense_Value" value="{{ session('FinancialDetails.Childcare_Expense_Value') }}" onchange="calculate()" required>
                                    <div class="input-group-append">
                                        <select id="Childcare_Expense_Value_Periodicity" name="Childcare_Expense_Value_Periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()">
                                            <option value="week" {{ session('FinancialDetails.Childcare_Expense_Value_Periodicity')=='week' ? 'selected' : '' }}>Week</option>
                                            <option value="fortnight" {{ session('FinancialDetails.Childcare_Expense_Value_Periodicity')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                                            <option value="month" {{ session('FinancialDetails.Childcare_Expense_Value_Periodicity')=='month' ? 'selected' : '' }}>Month</option>
                                            <option value="year" {{ session('FinancialDetails.Childcare_Expense_Value_Periodicity')=='year' ? 'selected' : '' }}>Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{--Food Expense--}}
                            <div class="form-group row">
                                <label for="Food_Expense" class="col-lg-6 col-form-label">Food</label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" class="form-control" name="Food_Expense_Value" id="Food_Expense_Value" value="{{ session('FinancialDetails.Food_Expense_Value') }}" onchange="calculate()" required>
                                    <div class="input-group-append">
                                        <select id="Food_Expense_Value_Periodicity" name="Food_Expense_Value_Periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()">
                                            <option value="week" {{ session('FinancialDetails.Food_Expense_Value_Periodicity')=='week' ? 'selected' : '' }}>Week</option>
                                            <option value="fortnight" {{ session('FinancialDetails.Food_Expense_Value_Periodicity')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                                            <option value="month" {{ session('FinancialDetails.Food_Expense_Value_Periodicity')=='month' ? 'selected' : '' }}>Month</option>
                                            <option value="year" {{ session('FinancialDetails.Food_Expense_Value_Periodicity')=='year' ? 'selected' : '' }}>Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{--Clothing Expense--}}
                            <div class="form-group row">
                                <label for="Clothing_Expense" class="col-lg-6 col-form-label">Clothing</label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" class="form-control" name="Clothing_Expense_Value" id="Clothing_Expense_Value" value="{{ session('FinancialDetails.Clothing_Expense_Value') }}" onchange="calculate()" required>
                                    <div class="input-group-append">
                                        <select id="Clothing_Expense_Value_Periodicity" name="Clothing_Expense_Value_Periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()">
                                            <option value="week" {{ session('FinancialDetails.Clothing_Expense_Value_Periodicity')=='week' ? 'selected' : '' }}>Week</option>
                                            <option value="fortnight" {{ session('FinancialDetails.Clothing_Expense_Value_Periodicity')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                                            <option value="month" {{ session('FinancialDetails.Clothing_Expense_Value_Periodicity')=='month' ? 'selected' : '' }}>Month</option>
                                            <option value="year" {{ session('FinancialDetails.Clothing_Expense_Value_Periodicity')=='year' ? 'selected' : '' }}>Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{--Entertainment Expense--}}
                            <div class="form-group row">
                                <label for="Entertainment_Expense" class="col-lg-6 col-form-label">Entertainment</label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" class="form-control" name="Entertainment_Expense_Value" id="Entertainment_Expense_Value" value="{{ session('FinancialDetails.Entertainment_Expense_Value') }}" onchange="calculate()" required>
                                    <div class="input-group-append">
                                        <select id="Entertainment_Expense_Value_Periodicity" name="Entertainment_Expense_Value_Periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()">
                                            <option value="week" {{ session('FinancialDetails.Entertainment_Expense_Value_Periodicity')=='week' ? 'selected' : '' }}>Week</option>
                                            <option value="fortnight" {{ session('FinancialDetails.Entertainment_Expense_Value_Periodicity')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                                            <option value="month" {{ session('FinancialDetails.Entertainment_Expense_Value_Periodicity')=='month' ? 'selected' : '' }}>Month</option>
                                            <option value="year" {{ session('FinancialDetails.Entertainment_Expense_Value_Periodicity')=='year' ? 'selected' : '' }}>Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{--Rent/Board Expense--}}
                            <div class="form-group row">
                                <label for="Rent_Expense" class="col-lg-6 col-form-label">Rent/Board</label>
                                <div class="input-group col-lg-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" class="form-control" name="Rent_Expense_Value" id="Rent_Expense_Value" value="{{ session('FinancialDetails.Rent_Expense_Value') }}" onchange="calculate()" required>
                                    <div class="input-group-append">
                                        <select id="Rent_Expense_Value_Periodicity" name="Rent_Expense_Value_Periodicity" class="form-control btn btn-outline-secondary" onchange="calculate()">
                                            <option value="week" {{ session('FinancialDetails.Rent_Expense_Value_Periodicity')=='week' ? 'selected' : '' }}>Week</option>
                                            <option value="fortnight" {{ session('FinancialDetails.Rent_Expense_Value_Periodicity')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                                            <option value="month" {{ session('FinancialDetails.Rent_Expense_Value_Periodicity')=='month' ? 'selected' : '' }}>Month</option>
                                            <option value="year" {{ session('FinancialDetails.Rent_Expense_Value_Periodicity')=='year' ? 'selected' : '' }}>Year</option>
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
                                    <input type="number" class="form-control" name="Total_Expenses" id="Total_Expenses" readonly style="font-weight: bold">
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
                                    <input type="radio" name="Home_Loan_Active" id="Home_Loan_Active_Yes" value="Yes" {{ session('FinancialDetails.Home_Loan_Active')=='Yes' ? 'checked' : '' }} required/>Yes</label>
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
                                    <input type="radio" name="Personal_Loan_Active" id="Personal_Loan_Active_Yes" value="Yes" {{ session('FinancialDetails.Personal_Loan_Active')=='Yes' ? 'checked' : '' }} required/>Yes</label>
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
                                    <input type="radio" name="Credit_Cards_Active" id="Credit_Cards_Active_Yes" value="Yes" {{ session('FinancialDetails.Credit_Cards_Active')=='Yes' ? 'checked' : '' }} />Yes</label>
                                <label class="btn btn-outline-info {{ session('FinancialDetails.Credit_Cards_Active')=='No' ? 'active' : '' }}">
                                    <input type="radio" name="Credit_Cards_Active" id="Credit_Cards_Active_No" value="No" required {{ session('FinancialDetails.Credit_Cards_Active')=='No' ? 'checked' : '' }}/>No</label>
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

        window.onload=function(){
            window.calculate();
        };


        window.calculate=function () {

            //get the user enter expense values and periodicity
            var Insurance_Expense_Value = document.getElementById("Insurance_Expense_Value");
            var Insurance_Expense_Value_Periodicity = document.getElementById("Insurance_Expense_Value_Periodicity");

            var Utilities_Expense_Value = document.getElementById("Utilities_Expense_Value");
            var Utilities_Expense_Value_Periodicity = document.getElementById("Utilities_Expense_Value_Periodicity");

            var Phone_Expense_Value = document.getElementById("Phone_Expense_Value");
            var Phone_Expense_Value_Periodicity = document.getElementById("Phone_Expense_Value_Periodicity");

            var Medical_Expense_Value = document.getElementById("Medical_Expense_Value");
            var Medical_Expense_Value_Periodicity = document.getElementById("Medical_Expense_Value_Periodicity");

            var Travel_Expense_Value = document.getElementById("Travel_Expense_Value");
            var Travel_Expense_Value_Periodicity = document.getElementById("Travel_Expense_Value_Periodicity");

            var Other_Expense_Value = document.getElementById("Other_Expense_Value");
            var Other_Expense_Value_Periodicity = document.getElementById("Other_Expense_Value_Periodicity");

            var Childcare_Expense_Value = document.getElementById("Childcare_Expense_Value");
            var Childcare_Expense_Value_Periodicity = document.getElementById("Childcare_Expense_Value_Periodicity");

            var Food_Expense_Value = document.getElementById("Food_Expense_Value");
            var Food_Expense_Value_Periodicity = document.getElementById("Food_Expense_Value_Periodicity");

            var Clothing_Expense_Value = document.getElementById("Clothing_Expense_Value");
            var Clothing_Expense_Value_Periodicity = document.getElementById("Clothing_Expense_Value_Periodicity");

            var Entertainment_Expense_Value = document.getElementById("Entertainment_Expense_Value");
            var Entertainment_Expense_Value_Periodicity = document.getElementById("Entertainment_Expense_Value_Periodicity");

            var Rent_Expense_Value = document.getElementById("Rent_Expense_Value");
            var Rent_Expense_Value_Periodicity = document.getElementById("Rent_Expense_Value_Periodicity");


            //calculate the expenses on a yearly basis

            //Insurance_Expense
            switch (Insurance_Expense_Value_Periodicity.value) {
                case "week":
                    expense1 = Insurance_Expense_Value.value * 52;
                    break;
                case "fortnight":
                    expense1 = Insurance_Expense_Value.value * 26;
                    break;
                case "month":
                    expense1 = Insurance_Expense_Value.value * 12;
                    break;
                case "year":
                    expense1 = Insurance_Expense_Value.value * 1;
                    break;
            }

            //Utilities_Expense
            switch (Utilities_Expense_Value_Periodicity.value) {
                case "week":
                    expense2 = Utilities_Expense_Value.value * 52;
                    break;
                case "fortnight":
                    expense2 = Utilities_Expense_Value.value * 26;
                    break;
                case "month":
                    expense2 = Utilities_Expense_Value.value * 12;
                    break;
                case "year":
                    expense2 = Utilities_Expense_Value.value * 1;
                    break;
            }

            //Phone_Expense
            switch (Phone_Expense_Value_Periodicity.value) {
                case "week":
                    expense3 = Phone_Expense_Value.value * 52;
                    break;
                case "fortnight":
                    expense3 = Phone_Expense_Value.value * 26;
                    break;
                case "month":
                    expense3 = Phone_Expense_Value.value * 12;
                    break;
                case "year":
                    expense3 = Phone_Expense_Value.value * 1;
                    break;
            }

            //Medical_Expense
            switch (Medical_Expense_Value_Periodicity.value) {
                case "week":
                    expense4 = Medical_Expense_Value.value * 52;
                    break;
                case "fortnight":
                    expense4 = Medical_Expense_Value.value * 26;
                    break;
                case "month":
                    expense4 = Medical_Expense_Value.value * 12;
                    break;
                case "year":
                    expense4 = Medical_Expense_Value.value * 1;
                    break;
            }

            //Travel_Expense
            switch (Travel_Expense_Value_Periodicity.value) {
                case "week":
                    expense5 = Travel_Expense_Value.value * 52;
                    break;
                case "fortnight":
                    expense5 = Travel_Expense_Value.value * 26;
                    break;
                case "month":
                    expense5 = Travel_Expense_Value.value * 12;
                    break;
                case "year":
                    expense5 = Travel_Expense_Value.value * 1;
                    break;
            }

            //Other_Expense
            switch (Other_Expense_Value_Periodicity.value) {
                case "week":
                    expense6 = Other_Expense_Value.value * 52;
                    break;
                case "fortnight":
                    expense6 = Other_Expense_Value.value * 26;
                    break;
                case "month":
                    expense6 = Other_Expense_Value.value * 12;
                    break;
                case "year":
                    expense6 = Other_Expense_Value.value * 1;
                    break;
            }

            //Childcare_Expense
            switch (Childcare_Expense_Value_Periodicity.value) {
                case "week":
                    expense7 = Childcare_Expense_Value.value * 52;
                    break;
                case "fortnight":
                    expense7 = Childcare_Expense_Value.value * 26;
                    break;
                case "month":
                    expense7 = Childcare_Expense_Value.value * 12;
                    break;
                case "year":
                    expense7 = Childcare_Expense_Value.value * 1;
                    break;
            }

            //Food_Expense
            switch (Food_Expense_Value_Periodicity.value) {
                case "week":
                    expense8 = Food_Expense_Value.value * 52;
                    break;
                case "fortnight":
                    expense8 = Food_Expense_Value.value * 26;
                    break;
                case "month":
                    expense8 = Food_Expense_Value.value * 12;
                    break;
                case "year":
                    expense8 = Food_Expense_Value.value * 1;
                    break;
            }

            //Clothing_Expense
            switch (Clothing_Expense_Value_Periodicity.value) {
                case "week":
                    expense9 = Clothing_Expense_Value.value * 52;
                    break;
                case "fortnight":
                    expense9 = Clothing_Expense_Value.value * 26;
                    break;
                case "month":
                    expense9 = Clothing_Expense_Value.value * 12;
                    break;
                case "year":
                    expense9 = Clothing_Expense_Value.value * 1;
                    break;
            }

            //Entertainment_Expense
            switch (Entertainment_Expense_Value_Periodicity.value) {
                case "week":
                    expense10 = Entertainment_Expense_Value.value * 52;
                    break;
                case "fortnight":
                    expense10 = Entertainment_Expense_Value.value * 26;
                    break;
                case "month":
                    expense10 = Entertainment_Expense_Value.value * 12;
                    break;
                case "year":
                    expense10 = Entertainment_Expense_Value.value * 1;
                    break;
            }

            //Rent_Expense
            switch (Rent_Expense_Value_Periodicity.value) {
                case "week":
                    expense11 = Rent_Expense_Value.value * 52;
                    break;
                case "fortnight":
                    expense11 = Rent_Expense_Value.value * 26;
                    break;
                case "month":
                    expense11 = Rent_Expense_Value.value * 12;
                    break;
                case "year":
                    expense11 = Rent_Expense_Value.value * 1;
                    break;
            }


            // Fill in the total expense field, rounding to 2 decimal places
            var totalExpenses = expense1 + expense2 + expense3 + expense4 + expense5 + expense6 + expense7 + expense8 +expense9 + expense10 + expense11 ;

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
