
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
        <div class="form-group row col-8">
            <label for="Previous_Residential_Address">Address</label>
            <input type="text" class="form-control" id="Previous_Residential_Address" name="Previous_Residential_Address" placeholder="e.g. Unit 3, 1234 Main St, Sydney, NSW, 2000" value="{{ session('PersonalDetails.Previous_Residential_Address') }}" required>
        </div>

        <!-- time at address -->
        <div class="form-group row col-lg-4">
            <label for="Time_At_Previous_Address" style="white-space: nowrap">Length of time at address</label>
            <select class="form-control" id="Time_At_Previous_Address" name="Time_At_Previous_Address" required>
                <option value="" >Please Select</option>
                <option value="0 to 6 months" {{ session('PersonalDetails.Time_At_Previous_Address')=='0 to 6 months' ? 'selected' : '' }}>0 to 6 months</option>
                <option value="6 to 12 months" {{ session('PersonalDetails.Time_At_Previous_Address')=='6 to 12 months' ? 'selected' : '' }}>6 to 12 months</option>
                <option value="1 to 2 years" {{ session('PersonalDetails.Time_At_Previous_Address')=='1 to 2 years' ? 'selected' : '' }}>1 to 2 years</option>
                <option value="2 to 3 years" {{ session('PersonalDetails.Time_At_Previous_Address')=='2 to 3 years' ? 'selected' : '' }}>2 to 3 years</option>
                <option value="Greater than 3 years" {{ session('PersonalDetails.Time_At_Previous_Address')=='Greater than 3 years' ? 'selected' : '' }}>Greater than 3 years</option>
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
            <label for="Previous_Employment_Type">Previous employment type</label>
            <select class="form-control" id="Previous_Employment_Type" name="Previous_Employment_Type" required>
                <option value="" >Please Select</option>
                <option value="Full time" {{ session('PersonalDetails.Previous_Employment_Type')=='Full time' ? 'selected' : '' }}>Full time</option>
                <option value="Part time" {{ session('PersonalDetails.Previous_Employment_Type')=='Part time' ? 'selected' : '' }}>Part time</option>
                <option value="Casual/seasonal" {{ session('PersonalDetails.Previous_Employment_Type')=='Casual/seasonal' ? 'selected' : '' }}>Casual/seasonal</option>
                <option value="Self employed" {{ session('PersonalDetails.Previous_Employment_Type')=='Self employed' ? 'selected' : '' }}>Self employed</option>
                <option value="Not employed" {{ session('PersonalDetails.Previous_Employment_Type')=='Not employed' ? 'selected' : '' }}>Not employed</option>
            </select>
        </div>


        <!-- previous employers name -->
        <div class="form-group col-lg-5">
            <label for="Previous_Employers_Name">Previous employer's name</label>
            <input type="text" class="form-control" id="Previous_Employers_Name" name="Previous_Employers_Name" value="{{ session('PersonalDetails.Previous_Employers_Name') }}" required>
        </div>


        <!-- Previous employment period -->
        <div class="form-group col-lg-4">
            <label for="Previous_Employment_Length">Previous employment period</label>
            <select class="form-control" id="Previous_Employment_Length" name="Previous_Employment_Length" required>
                <option value="" >Please Select</option>
                <option value="Less than one year" {{ session('PersonalDetails.Previous_Employment_Length')=='Less than one year' ? 'selected' : '' }}>Less than one year</option>
                <option value="1 to 2 years" {{ session('PersonalDetails.Previous_Employment_Length')=='1 to 2 years' ? 'selected' : '' }}>1 to 2 years</option>
                <option value="2 to 3 years" {{ session('PersonalDetails.Previous_Employment_Length')=='2 to 3 years' ? 'selected' : '' }}>2 to 3 years</option>
                <option value="Greater than 3 years" {{ session('PersonalDetails.Previous_Employment_Length')=='Greater than 3 years' ? 'selected' : '' }}>Greater than 3 years</option>
            </select>
        </div>
    </div>
</div>
