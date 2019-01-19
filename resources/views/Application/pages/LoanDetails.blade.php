

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
                                        <input type="text" class="form-control" id="loan_amount">
                                    </div>
                                </div>

                                <!-- loan duration -->
                                <div class="form-group col-lg-4">
                                    <label for="loan_duration">Loan duration</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="loan_duration">
                                        <div class="input-group-append">
                                            <select id="loan_periodicity" name="loan_periodicity" class="form-control btn btn-outline-secondary">
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
                                                <th scope="col">Credit profile<a href="#exampleModal" data-toggle="modal" data-target="#exampleModal"><span class="fas fa-question-circle fa-xs" data-fa-transform="right-6 up-6" style="color:red"   ></span></a></th>
                                                <th scope="col" >Interest rate</th>
                                                <th scope="col">Comparison rate</th>
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

@stop
