
<!--
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
| Income
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
!-->

{{--Government Benefits--}}
<div id="governmentBenefits_input" class="form-group row col-lg-8">
    <label for="governmentBenefits">Amount</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">$</span>
        </div>
        <input type="text" class="form-control" id="governmentBenefits">
        <div class="input-group-append">
            <select id="governmentBenefits_periodicity" name="governmentBenefits_periodicity" class="form-control btn btn-outline-secondary">
                <option value="weekly" >Weekly</option>
                <option value="fornightly" >Fornightly</option>
                <option value="monthly" >Monthly</option>
                <option value="yearly" >Yearly</option>
            </select>
        </div>
    </div>
</div>

{{--Rental Income--}}
<div id="rentalIncome_input" class="form-group row col-lg-8">
    <label for="rentalIncome">Amount</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">$</span>
        </div>
        <input type="text" class="form-control" id="rentalIncome">
        <div class="input-group-append">
            <select id="rentalIncome_periodicity" name="rentalIncome_periodicity" class="form-control btn btn-outline-secondary">
                <option value="weekly" >Weekly</option>
                <option value="fornightly" >Fornightly</option>
                <option value="monthly" >Monthly</option>
                <option value="yearly" >Yearly</option>
            </select>
        </div>
    </div>
</div>

{{--Other Income--}}
<div id="otherIncome_input" class="form-group row col-lg-8">
    <label for="otherIncome">Amount</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">$</span>
        </div>
        <input type="text" class="form-control" id="otherIncome">
        <div class="input-group-append">
            <select id="otherIncome_periodicity" name="otherIncome_periodicity" class="form-control btn btn-outline-secondary">
                <option value="weekly" >Weekly</option>
                <option value="fornightly" >Fornightly</option>
                <option value="monthly" >Monthly</option>
                <option value="yearly" >Yearly</option>
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
            <label for="homeLoanRepayments">Total repayments for all home loans</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control" id="homeLoanRepayments">
                <div class="input-group-append">
                    <select id="homeLoanRepayments_periodicity" name="homeLoanRepayments_periodicity" class="form-control btn btn-outline-secondary">
                        <option value="weekly" >Weekly</option>
                        <option value="fornightly" >Fornightly</option>
                        <option value="monthly" >Monthly</option>
                        <option value="yearly" >Yearly</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Home loan owing -->
        <div class="form-group col-lg-4">
            <label for="loan_amount">Total owing for all home loans</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control" id="loan_amount">
            </div>
        </div>
    </div>
</div>

{{--Personal Loan--}}
<div id="personalLoan_input" class="mb-2" style="background-color: seashell; border-top-style: solid; border-top-width: thin;border-bottom-style: solid; border-bottom-width: thin; padding-top: 10px; padding-left: 10px;padding-right: 10px">

    <div class="form-row">

        <!-- Personal loan repayments -->
        <div class="form-group col-lg-6">
            <label for="personalLoanRepayments">Total repayments for all personal loans</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control" id="personalLoanRepayments">
                <div class="input-group-append">
                    <select id="personalLoanRepayments_periodicity" name="personalLoanRepayments_periodicity" class="form-control btn btn-outline-secondary">
                        <option value="weekly" >Weekly</option>
                        <option value="fornightly" >Fornightly</option>
                        <option value="monthly" >Monthly</option>
                        <option value="yearly" >Yearly</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Personal loan owing -->
        <div class="form-group col-lg-4">
            <label for="loan_amount">Total owing for all personal loans</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control" id="loan_amount">
            </div>
        </div>
    </div>
</div>

{{--Credit Cards--}}
<div id="creditCards_input" class="mb-2" style="background-color: seashell; border-top-style: solid; border-top-width: thin;border-bottom-style: solid; border-bottom-width: thin; padding-top: 10px; padding-left: 10px;padding-right: 10px">

    <div class="form-row">

        <!-- Credit Cards owing -->
        <div class="form-group col-lg-4">
            <label for="loan_amount_CC">Total owing for all credit cards</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control" id="loan_amount_CC">
            </div>
        </div>

        <!-- Credit cards maximum -->
        <div class="form-group col-lg-4">
            <label for="max_amount_CC" style="white-space: nowrap">What is the total maximum limit of all credit cards</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control" id="max_amount_CC">
            </div>
        </div>
    </div>
</div>


