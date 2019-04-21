
<!--
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
| Income
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
!-->

{{--Government Benefits--}}
<div id="governmentBenefits_input" class="form-group row col-lg-8">
    <label for="Government_Benefits_Income">Amount</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">$</span>
        </div>
        <input type="number" class="form-control" id="Government_Benefits_Income" name="Government_Benefits_Income" value="{{ session('FinancialDetails.Government_Benefits_Income') }}" required>
        <div class="input-group-append">
            <select id="Government_Benefits_Income_Frequency" name="Government_Benefits_Income_Frequency" class="form-control btn btn-outline-secondary">
                <option value="week" {{ session('FinancialDetails.Government_Benefits_Income_Frequency')=='week' ? 'selected' : '' }}>Week</option>
                <option value="fortnight" {{ session('FinancialDetails.Government_Benefits_Income_Frequency')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                <option value="month" {{ session('FinancialDetails.Government_Benefits_Income_Frequency')=='month' ? 'selected' : '' }}>Month</option>
                <option value="year" {{ session('FinancialDetails.Government_Benefits_Income_Frequency')=='year' ? 'selected' : '' }}>Year</option>
            </select>
        </div>
    </div>
</div>

{{--Rental Income--}}
<div id="rentalIncome_input" class="form-group row col-lg-8">
    <label for="Rental_Income">Amount</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">$</span>
        </div>
        <input type="number" class="form-control" id="Rental_Income" name="Rental_Income" value="{{ session('FinancialDetails.Rental_Income') }}" required>
        <div class="input-group-append">
            <select id="Rental_Income_Frequency" name="Rental_Income_Frequency" class="form-control btn btn-outline-secondary">
                <option value="week" {{ session('FinancialDetails.Rental_Income_Frequency')=='week' ? 'selected' : '' }}>Week</option>
                <option value="fortnight" {{ session('FinancialDetails.Rental_Income_Frequency')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                <option value="month" {{ session('FinancialDetails.Rental_Income_Frequency')=='month' ? 'selected' : '' }}>Month</option>
                <option value="year" {{ session('FinancialDetails.Rental_Income_Frequency')=='year' ? 'selected' : '' }}>Year</option>
            </select>
        </div>
    </div>
</div>

{{--Other Income--}}
<div id="otherIncome_input" class="form-group row col-lg-8">
    <label for="Other_Income">Amount</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">$</span>
        </div>
        <input type="number" class="form-control" id="Other_Income" name="Other_Income" value="{{ session('FinancialDetails.Other_Income') }}" required>
        <div class="input-group-append">
            <select id="Other_Income_Frequency" name="Other_Income_Frequency" class="form-control btn btn-outline-secondary">
                <option value="week" {{ session('FinancialDetails.Other_Income_Frequency')=='week' ? 'selected' : '' }}>Week</option>
                <option value="fortnight" {{ session('FinancialDetails.Other_Income_Frequency')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                <option value="month" {{ session('FinancialDetails.Other_Income_Frequency')=='month' ? 'selected' : '' }}>Month</option>
                <option value="year" {{ session('FinancialDetails.Other_Income_Frequency')=='year' ? 'selected' : '' }}>Year</option>
            </select>
        </div>
    </div>
</div>

<!--
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
| Liabilities
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
!-->

{{--Home Loans--}}
<div id="homeLoan_input" class="mb-2" style="background-color: seashell; border-top-style: solid; border-top-width: thin;border-bottom-style: solid; border-bottom-width: thin; padding-top: 10px; padding-left: 10px;padding-right: 10px">

    <div class="form-row">

        <!-- Home loan repayments -->
        <div class="form-group col-lg-6">
            <label for="Home_Loan_Repayments">Total repayments for all home loans</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="number" class="form-control" id="Home_Loan_Repayments" name="Home_Loan_Repayments" value="{{ session('FinancialDetails.Home_Loan_Repayments') }}" required>
                <div class="input-group-append">
                    <select id="Home_Loan_Repayments_Frequency" name="Home_Loan_Repayments_Frequency" class="form-control btn btn-outline-secondary">
                        <option value="week" {{ session('FinancialDetails.Home_Loan_Repayments_Frequency')=='week' ? 'selected' : '' }}>Week</option>
                        <option value="fortnight" {{ session('FinancialDetails.Home_Loan_Repayments_Frequency')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                        <option value="month" {{ session('FinancialDetails.Home_Loan_Repayments_Frequency')=='month' ? 'selected' : '' }}>Month</option>
                        <option value="year" {{ session('FinancialDetails.Home_Loan_Repayments_Frequency')=='year' ? 'selected' : '' }}>Year</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Home loan owing -->
        <div class="form-group col-lg-4">
            <label for="Home_Loan_Balance">Total owing for all home loans</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="number" class="form-control" id="Home_Loan_Balance" name="Home_Loan_Balance" value="{{ session('FinancialDetails.Home_Loan_Balance') }}" required>
            </div>
        </div>
    </div>
</div>

{{--Personal Loan--}}
<div id="personalLoan_input" class="mb-2" style="background-color: seashell; border-top-style: solid; border-top-width: thin;border-bottom-style: solid; border-bottom-width: thin; padding-top: 10px; padding-left: 10px;padding-right: 10px">

    <div class="form-row">

        <!-- Personal loan repayments -->
        <div class="form-group col-lg-6">
            <label for="Personal_Loan_Repayments">Total repayments for all personal loans</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="number" class="form-control" id="Personal_Loan_Repayments" name="Personal_Loan_Repayments" value="{{ session('FinancialDetails.Personal_Loan_Repayments') }}" required>
                <div class="input-group-append">
                    <select id="Personal_Loan_Repayments_Frequency" name="Personal_Loan_Repayments_Frequency" class="form-control btn btn-outline-secondary">
                        <option value="week" {{ session('FinancialDetails.Personal_Loan_Repayments_Frequency')=='week' ? 'selected' : '' }}>Week</option>
                        <option value="fortnight" {{ session('FinancialDetails.Personal_Loan_Repayments_Frequency')=='fortnight' ? 'selected' : '' }}>Fortnight</option>
                        <option value="month" {{ session('FinancialDetails.Personal_Loan_Repayments_Frequency')=='month' ? 'selected' : '' }}>Month</option>
                        <option value="year" {{ session('FinancialDetails.Personal_Loan_Repayments_Frequency')=='year' ? 'selected' : '' }}>Year</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Personal loan owing -->
        <div class="form-group col-lg-4">
            <label for="Personal_Loan_Balance">Total owing for all personal loans</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="number" class="form-control" id="Personal_Loan_Balance" name="Personal_Loan_Balance" value="{{ session('FinancialDetails.Personal_Loan_Balance') }}" required>
            </div>
        </div>
    </div>
</div>

{{--Credit Cards--}}
<div id="creditCards_input" class="mb-2" style="background-color: seashell; border-top-style: solid; border-top-width: thin;border-bottom-style: solid; border-bottom-width: thin; padding-top: 10px; padding-left: 10px;padding-right: 10px">

    <div class="form-row">

        <!-- Credit Cards owing -->
        <div class="form-group col-lg-4">
            <label for="Credit_Cards_Owing">Total owing for all credit cards</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="number" class="form-control" id="Credit_Cards_Owing" name="Credit_Cards_Owing" value="{{ session('FinancialDetails.Credit_Cards_Owing') }}" required>
            </div>
        </div>

        <!-- Credit cards maximum -->
        <div class="form-group col-lg-4">
            <label for="Credit_Cards_Limit" style="white-space: nowrap">What is the total maximum limit of all credit cards</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="number" class="form-control" id="Credit_Cards_Limit" name="Credit_Cards_Limit" value="{{ session('FinancialDetails.Credit_Cards_Limit') }}" required>
            </div>
        </div>
    </div>
</div>


