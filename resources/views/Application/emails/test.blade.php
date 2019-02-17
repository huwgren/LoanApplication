<html>
<head>
    <title>App Name</title>
</head>
<body>

    @foreach (Session::get('LoanDetails') as $product_id)
        {{$product_id}}
    @endforeach

    {{--Pull data from a session array (e.g. LoanDetails stores all the info and 'email_address' is a single user input)--}}
    {{ session('LoanDetails.email_address') }}

</body>
</html>
