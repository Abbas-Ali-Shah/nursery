<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
        <!-- Start Global Mandatory Style
        =====================================================================-->
        <!-- jquery-ui css -->
        <link href="{{asset('assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('assets/plugins/lobipanel/lobipanel.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('assets/plugins/pace/flash.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('assets/themify-icons/themify-icons.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('assets/plugins/toastr/toastr.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('assets/plugins/emojionearea/emojionearea.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('assets/plugins/monthly/monthly.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('assets/dist/css/stylehealth.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap -->
        <link href="" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>
            function showAlert(msg) {
                Swal.fire({
                icon: 'success',
                title: 'Success',
                text: msg,
                footer: '<a href>Are you facing any issue?</a>'
        })
            }
        </script>


    </head>
    <body>
        <div>

            @yield('content')

        


        </div>
        @include('includes.scripts');
    </body>

  
</html>
