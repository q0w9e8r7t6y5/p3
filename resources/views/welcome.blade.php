@extends('master')


@section('content')
    <h6><b>Please enter in your information and press submit to continue to the order page</b></h6><br>

    <h1>Registration</h1>


        @if(count($errors) > 0)
            <div class='alert alert-danger' role='alert'>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>

        @endif


    {{--<form method='GET' action='order'>--}}

        {{--<fieldset>--}}
            {{--<label for='searchTerm'>Search by title:</label>--}}
            {{--<input type='text' name='searchTerm' id='searchTerm'>--}}

            {{--<input type='checkbox' name='caseSensitive'>--}}
            {{--<label>case sensitive</label>--}}
        {{--</fieldset>--}}

        {{--<input type='submit' value='Search' class='btn btn-primary'>--}}

    {{--</form>--}}


    <form method='get' action='form'>
        <fieldset id="$request">
            <h5>Customer Information</h5>
            <label for='email'>Email:</label>
            <input type='text' name='email' id='email' value='{{ old('email') }}'><br>
            <label for='firstname'>First Name:</label>
            <input type='text' name='firstname' id='firstname' value='{{ old('firstname') }}'><br>
            <label for='lastname'>Last Name:</label>
            <input type='text' name='lastname' id='lastname' value='{{ old('lastname') }}'><br>
            <label for='phone'>Phone Number:</label>
            <input type='text' name='phone' id='phone' value='{{ old('phone') }}'><br>
        </fieldset>
        <br>

        <input type="submit" value="Submit">
    </form>


@endsection
