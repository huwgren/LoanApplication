<html>
<head>
    @include('Application.includes.head')
</head>
<body>

<div class="container" >

    <br>
    Reference ID: {{Session::get('ReferenceID')}}
    <br>
    <br>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th><strong>Key ID</strong></th>
                <th><strong>Key Value</strong></th>
            </tr>
        </thead>
        @foreach (collect(Session::get('LoanDetails'))->keys() as $item)
            <tr>
                    <td>{{ $item }}</td>
                    <td>{{ session('LoanDetails.'.$item) }}</td>
            </tr>
        @endforeach
    </table>

    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th><strong>Key ID</strong></th>
            <th><strong>Key Value</strong></th>
        </tr>
        </thead>
        @foreach (collect(Session::get('PersonalDetails'))->keys() as $item)
            <tr>
                <td>{{ $item }}</td>
                <td>{{ session('PersonalDetails.'.$item) }}</td>
            </tr>
        @endforeach
    </table>

    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th><strong>Key ID</strong></th>
            <th><strong>Key Value</strong></th>
        </tr>
        </thead>
        @foreach (collect(Session::get('FinancialDetails'))->keys() as $item)
            <tr>
                <td>{{ $item }}</td>
                <td>{{ session('FinancialDetails.'.$item) }}</td>
            </tr>
        @endforeach
    </table>

    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th><strong>Key ID</strong></th>
            <th><strong>Key Value</strong></th>
        </tr>
        </thead>
        @foreach (collect(Session::get('Acknowledgments'))->keys() as $item)
            <tr>
                <td>{{ $item }}</td>
                <td>{{ session('Acknowledgments.'.$item) }}</td>
            </tr>
        @endforeach
    </table>




</div>


</body>
</html>

{{--

--}}
{{--{{dd(Session::get('LoanDetails'))}}--}}{{--


{{Session::get('LoanDetails.email_address')}}

@foreach (Session::get('LoanDetails') as $item)
    {{$item}}
@endforeach

<BR>

@foreach (Session::get('PersonalDetails') as $item)
    {{$item}}
@endforeach

--}}
{{--Pull data from a session array (e.g. LoanDetails stores all the info and 'email_address' is a single user input)--}}{{--

{{ session('LoanDetails.email_address') }}


<ul>
    @foreach (collect(Session::get('LoanDetails'))->keys()/*->all()*/ as $item)
        <li>{{$item}}</li>
    @endforeach
</ul>

<ul>
    @foreach (collect(Session::get('LoanDetails'))/*->all()*/ as $item)
        <li>{{$item}}</li>
    @endforeach
</ul>

<ul>
    @foreach (collect(Session::get('LoanDetails'))->keys()/*->all()*/ as $item)
        <li>{{ session('LoanDetails.'.$item) }}</li>
    @endforeach
</ul>--}}
