
<!--
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
| Previous Address
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
!-->

<!-- SECTION HEADER - Previous residential address - -->
<div id="previousAddressInputs">
    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-2">
        <strong>Previous residential address</strong>
    </div>
    <div class="mb-2" style="background-color: seashell; border-top-style: solid; border-top-width: thin;border-bottom-style: solid; border-bottom-width: thin; padding-top: 10px; padding-left: 10px;padding-right: 10px">

        <!-- address -->
        <div class="form-group row col-12">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="e.g. Unit 3, 1234 Main St, Sydney, NSW, 2000">
        </div>

        <!-- time at address -->
        <div class="form-group row col-lg-4">
            <label for="previousAddressTime" style="white-space: nowrap">Length of time at address</label>
            <select class="form-control" id="previousAddressTime" name="previousAddressTime" required>
                <option value="" >Please Select</option>
                <option value="6">0 to 6 months</option>
                <option value="12">6 to 12 months</option>
                <option value="24">1 to 2 years</option>
                <option value="36">2 to 3 years</option>
                <option value="48">Greater than 3 years</option>
            </select>
        </div>
    </div>
</div>


<!--
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
| Previous Employer
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
!-->
<div class="mb-5" style="background-color: seashell ;border-top-style: solid; border-top-width: thin;border-bottom-style: solid; border-bottom-width: thin; padding-top: 10px; padding-left: 10px;padding-right: 10px" id="previousEmployerInputs">

    <div class="form-row ">

        <!-- Previous employment type -->
        <div class="form-group col-lg-3">
            <label for="employmentTypePrevious">Previous employment type</label>
            <select class="form-control" id="employmentTypePrevious" name="employmentTypePrevious" required>
                <option value="" >Please Select</option>
                <option value="Full time">Full time</option>
                <option value="Part time">Part time</option>
                <option value="Casual/seasonal">Casual/seasonal</option>
                <option value="Self employed">Self employed</option>
                <option value="Not employed">Not employed</option>
            </select>
        </div>

        <!-- Previous occupation type -->
        <div class="form-group col-lg-3">
            <label for="occupationTypePrevious">Previous occuptation type</label>
            <select class="form-control" id="occupationTypePrevious" name="occupationTypePrevious" required>
                <option value="" >Please Select</option>
                <option value="xx">xx</option>
                <option value="xx">xx</option>
                <option value="xx">xx</option>
                <option value="xx">xx</option>
            </select>
        </div>

        <!-- previous employers name -->
        <div class="form-group col-lg-3">
            <label for="employerNamePrevious">Previous employer's name</label>
            <input type="text" class="form-control" id="employerNamePrevious">
        </div>


        <!-- Previous employment period -->
        <div class="form-group col-lg-3">
            <label for="employmentPeriodPrevious">Previous employment period</label>
            <select class="form-control" id="employmentPeriodPrevious" name="employmentPeriodPrevious" required>
                <option value="" >Please Select</option>
                <option value="1">Less than one year</option>
                <option value="2">1 to 2 years</option>
                <option value="3">2 to 3 years</option>
                <option value="4">Greater than 3 years</option>
            </select>
        </div>
    </div>
</div>
