@component('mail::message')

We're almost there <strong>{{Session::get('PersonalDetails.First_Name')}}</strong>,

Thanks for your Salt&Lime Personal Loan application.

Application ID: <strong>{{Session::get('ReferenceID')}}</strong>

### What's next?<br>
If you haven't already, we need you to provide us with further information to complete your application such as:
  * Two of your most recent payslips showing year-to-date income.

### What will Salt&Lime do? <br>
Once we receive your documents we'll review them in line with Salt&Lime's credit assessment criteria. If we need additional information we will contact you.

If further information is not required, a Letter of Offer will be sent to you confirming the details of your loan and the terms and conditions that apply. Upon acceptance of your Letter of Offer, your funds will be transferred to your nominated account.

### Need to contact us?

Please email us at CustomerCare@saltandlime.com.au

Thanks,<br>
Customer Care Team
@endcomponent
