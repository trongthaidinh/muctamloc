<!doctype html>
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    @include('Web.head')
        <style>
        body {
            background-color: #f0f8ff; /* Light background for contrast */
            min-height: 100vh; /* Full height of the viewport */
            display: flex; /* Use flexbox */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            margin: 0; /* Remove default margin */
        }

        .login-container {
            min-width: 400px;
            padding: 20px;
            border: 1px solid #1973a5;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: white;
            text-align: left;
        }

        .logo {
            margin-bottom: 20px;
            text-align: center;
        }

        .logo img {
            width: 200px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold; /* Bold labels */
            display: block; /* Block display for labels */
            margin-bottom: 5px; /* Space between label and input */
        }

        .form-control {
            border: 1px solid #1973a5;
            border-radius: 4px;
            padding: 10px;
            font-size: 16px; /* Larger font for better readability */
        }

        .btn-primary {
            background-color: #1973a5;
            border: none;
            color: white;
            padding: 10px;
            width: 100%;
            border-radius: 4px;
            font-size: 16px; /* Larger font for buttons */
            cursor: pointer; /* Pointer cursor on hover */
        }

        .btn-primary:hover {
            background-color: #155a8a; /* Darker shade on hover */
        }

    </style>
</head>


<body>
    @yield('content')
</body>
</html>
