

@extends('Application.layouts.default')

@section('content')

    <div class="row col-md-12 offset-md-0 col-xs-12" style=" padding-left: 30px; margin-bottom: 30px; color: grey"> <h3>Thankyou for applying for a Salt&Lime Personal Loan</h3> </div>

    <div class="row col-md-12 offset-md-0 col-xs-12">
        <div class="col-12">
            <div class="card bg-light" style="border-style: none; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
                <div class="card-header" style="color: #659267">
                    <h5> Your application has been successfully submitted and we are currently reviewing your details</h5>
                </div>
                <div class="card-body text-center">
                    <p> Your reference number: <strong style="font-size: larger"> {{Session::get('ReferenceID')}}</strong></p>

                    <div class="row">
                        <div class=" offset-md-1 col-md-10">
                            <div class="card text-left" style="border-style: none; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #659267">You're nearly there</h5>
                                    <p >To finalise our assessment of your application we need to verify the following:</p>
                                    <ul>
                                        <li><strong> Income and expenses</strong></li>
                                        <li><strong>Residential address</strong></li>
                                        <li><strong>Identity</strong></li>
                                    </ul>

                                    <p><u>Our customer care team will contact you with the easiest and quickest way for you to verify the above.</u></p>

                                    {{--<div class="text-right">
                                        <a href="#" class="btn btn-success">Verify your information</a>
                                    </div>--}}

                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="offset-md-1 col-md-10 text-left" style="border-bottom-style:solid; border-bottom-width: thin; color: #659267">
                        <h5>Next Steps</h5>
                    </div>

                    <div class="offset-md-1 col-md-10 text-left">
                        <p class="card-text">If we need further information, we'll let you know within 2-3 working days.</p>
                        <p class="card-text">If you have further enquiries, please contact our Customer Care Team on 1300 123 123 or at CustomerCare@saltandlime.com.au.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>



@stop
