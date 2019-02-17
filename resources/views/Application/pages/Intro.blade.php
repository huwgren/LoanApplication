

@extends('Application.layouts.default')

@section('content')

    <br>

    <div class="row col-md-12 offset-md-0 col-xs-12 ">
        {{--<div class="col-12">--}}
            <div class="card w-100" style="border-style: none; border-radius: 5px 5px 5px 5px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
                <div class="card-body" style="border-radius: 5px 5px 5px 5px;;background-color:#efebe4;color: #659267;" >
                    <br>
                    <h3>Unsecured Personal Loan</h3>
                    <h5>Secure online application</h5>
                    <br>
                </div>
            </div>
        {{--</div>--}}
    </div>

    <br>
    <br>

    <div class="row col-md-12 offset-md-0 col-xs-12">
        {{--<div class="col-12">--}}
            <div class="card w-100" style="border-style: none; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
                <div class="card-body" style="border-radius: 5px 5px 5px 5px;;background-color:#efebe4" >
                    <div class="row">
                        <div class="col-auto " >
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                                <strong>Some things to check-off</strong>
                            </div>
                            <div style="font-size: 15px">
                                <p> <span><i class="fas fa-check"></i></span>  Must be over 18 </p>
                                <p> <span><i class="fas fa-check"></i></span>  Must be eligible to work in Australia </p>
                                <p> <span><i class="fas fa-check"></i></span>  Be receiving regular income </p>
                                <p> <span><i class="fas fa-check"></i></span>  Not bankrupt (or in process of) </p>
                            </div>
                        </div>
                        <div class="col-auto " >
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                                <strong>How this works</strong>
                            </div>
                            <div style="font-size: 15px">
                                <p>1. It takes 10-15 minutes to apply online</p>
                                <p>2. Get a response after submitting your application</p>
                                <p>3. Accept the contract online</p>
                                <p>4. Receive the money in your account</p>
                            </div>
                        </div>
                        <div class="col-auto " >
                            <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                                <strong>What you'll need</strong>
                            </div>
                            <div style="font-size: 15px">
                                <p> <span><i class="far fa-edit fa-2x"></i></span>  Personal details </p>
                                <p> <span><i class="fas fa-file-invoice-dollar fa-2x"></i></span>  Income and expenses </p>
                                <p> <span><i class="fas fa-file-alt fa-2x"></i></span>  Employment details </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        {{--</div>--}}
    </div>

    <br>
    <br>

    <div class="text-center">
        <a class="btn btn-success btn-lg" href="/loanDetails" role="button">Continue</a>
    </div>

    <br>
@stop
