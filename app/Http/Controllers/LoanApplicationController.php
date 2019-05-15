<?php

namespace App\Http\Controllers;

use App\Mail\ApplicationSubmitted;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Validator;



class LoanApplicationController extends Controller
{

    /**
     * Return Intro view
     *
     * @param  Request  $request
     * @return Response
     */
    public function Intro_View(Request $request)
    {

        //clear all session data
        Session::flush();
        Session::regenerate();

        //return view
        return view('Application.pages.Intro');

    }

    /**
     * Return view for the loan details
     *
     * @param  Request  $request
     * @return Response
     */
    public function LoanDetails_View(Request $request)
    {

        /*//clear all session data
        Session::flush();
        Session::regenerate();*/

        if (session('Step1')=='Completed'){

            //Retrieve loan details from session
            $loan_details = $request->session()->get('LoanDetails');

            //return view
            return view('Application.pages.LoanDetails',compact('loan_details',$loan_details));



        } else {

            /*//clear all session data
            Session::flush();
            Session::regenerate();*/

            //Retrieve loan details from session
            $loan_details = $request->session()->get('LoanDetails');

            //return view
            return view('Application.pages.LoanDetails',compact('loan_details',$loan_details));
        }


    }



    /**
     * Return view for the personal details
     *
     * @param  Request  $request
     * @return Response
     */
    public function PersonalDetails_View(Request $request)
    {
        //Retrieve personal details from session
        $personal_details = $request->session()->get('PersonalDetails');

        if (session('Step1')=='Completed'){
            //return view
            return view('Application.pages.AboutYou',compact('personal_details',$personal_details));
        } else {
            //return to Loan Details page
            return redirect()->action('LoanApplicationController@LoanDetails_View');
        }

    }



    /**
     * Return view for the financial details
     *
     * @param  Request  $request
     * @return Response
     */
    public function FinancialDetails_View(Request $request)
    {
        //Retrieve financial details from session
        $financial_details = $request->session()->get('FinancialDetails');

        if (session('Step2')=='Completed'){
            //return view
            return view('Application.pages.FinancialDetails',compact('financial_details',$financial_details));
        } else {
            //return to Personal Details page
            return redirect()->action('LoanApplicationController@PersonalDetails_View');
        }

    }


    /**
     * Return view for the review details
     *
     * @param  Request  $request
     * @return Response
     */
    public function ReviewDetails_View(Request $request)
    {

        //Retrieve loan details from session
        $loan_details = $request->session()->get('LoanDetails');

        //Retrieve personal details from session
        $personal_details = $request->session()->get('PersonalDetails');

        //Retrieve financial details from session
        $financial_details = $request->session()->get('FinancialDetails');

        if (session('Step3')=='Completed'){
            //return view
            return view('Application.pages.Review',compact('loan_details',$loan_details,'personal_details',$personal_details,'financial_details',$financial_details));
        } else {
            //return to Financial Details page
            return redirect()->action('LoanApplicationController@FinancialDetails_View');
        }

    }


    /**
     * Return view for the next steps
     *
     * @param  Request  $request
     * @return Response
     */
    public function NextSteps_View(Request $request)
    {
        if (session('ReviewStep')=='Completed'){

            //return view
            return view('Application.pages.NextSteps');

        } else {
            //return to Financial Details page
            return redirect()->action('LoanApplicationController@ReviewDetails_View');
        }

    }


    /**
     * Store the loan details
     *
     * @param  Request  $request
     * @return Response
     */
    public function LoanDetails_Store(Request $request)
    {
        $validatedData = $request->validate([
            'Email_Address' => 'required',
            'Loan_Reason' => 'required',
        ]);

        // Store the user form data into the session
        Session::put('LoanDetails',$request->all());

        //Store the fact that Step 1 values have been stored
        Session::put('Step1', 'Completed');

        // return view
        return redirect('/Step2');

    }

    /**
     * Store the applicant's personal details
     *
     * @param  Request  $request
     * @return Response
     */
    public function PersonalDetails_Store(Request $request)
    {
        // Store the user form data into the session
        Session::put('PersonalDetails',$request->all());

        //Store the fact that Step 2 values have been stored
        Session::put('Step2', 'Completed');

        // return view
        return redirect('/Step3');

    }

    /**
     * Store the applicant's financial details
     *
     * @param  Request  $request
     * @return Response
     */
    public function FinancialDetails_Store(Request $request)
    {
        // Store the user form data into the session
        Session::put('FinancialDetails',$request->all());

        //Store the fact that Step  3values have been stored
        Session::put('Step3', 'Completed');

        // return view
        return redirect('/Review');

    }


    /**
     * Mail the applicant's details
     *
     * @param  Request  $request
     * @return Response
     */
    public function ReviewDetails_Store(Request $request)
    {
        // Store the user form data into the session
        Session::put('Acknowledgments',$request->all());

        //Store the fact that Review values have been stored
        Session::put('ReviewStep', 'Completed');

        // Store the timestamp as reference ID
        $date= Carbon::now()->timestamp;
        Session::put('ReferenceID', $date);

        //set a variable to be equal a entry from the session array
        $email='loanapplications@saltandlime.com.au';
        /*$email=Session::get('LoanDetails.Email_Address');*/

        /*return view('Application.emails.test');*/

        //Mail the applicant's details
        Mail::to($email)
            ->send(new ApplicationSubmitted());

        // return view
        return redirect('/NextSteps');

    }





    /**
     * Test function
     *
     * @param  Request  $request
     * @return Response
     */
    public function test(Request $request)
    {
        //Store the user form data
        $input = $request->all();

        // Store the user form data into the session
        Session::put('LoanDetails',$request->all());

        //get all session data
        $data = session()->all();


        //set a variable to be equal a entry from the session array
        $email=Session::get('LoanDetails.email_address');

        //Send mail
        Mail::to($email)
            ->send(new ApplicationSubmitted());


        // return view
        return view('Application.emails.test')/*->with($value)*/;


    }

    public function sendMail(Request $request)
    {

    }
}
