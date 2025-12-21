<!-- resources/views/html101.blade.php-->
<!DOCTYPE html>
<html>
    <head>
        <title>HTML - @yield('title')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://camp-67160292-g2.test/css/bootstrap.css">
        <style>
            body {
                font-family: "Sarabun", -apple-system, BlinkMacSystemFont, sans-serif;
                background-color: #ffffff;
                padding: 20px;
            }
            .container {
                max-width: 700px;
                margin: 0 auto;
            }
            h1 {
                font-size: 28px;
                font-weight: bold;
                margin-bottom: 30px;
                text-align: left;
            }
            .form-section {
                display: flex;
                margin-bottom: 15px;
                align-items: flex-start;
            }
            .label-col {
                width: 120px;
                text-align: left;
                padding-right: 17px;
                flex-shrink: 0;
            }
            .label-col label {
                margin: 0;
                font-weight: normal;
                font-size: 16px;
            }
            .input-col {
                flex: 1;
            }
            .form-control {
                border: 1px solid #a0b90f;
                border-radius: 2px;
                padding: 6px 10px;
                font-family: inherit;
                font-size: 14px;
                width: 100%;
            }
            .form-control:focus {
                border-color: #197833;
                outline: none;
                box-shadow: none;
            }
            textarea.form-control {
                resize: vertical;
                min-height: 120px;
            }
            input[type="file"] {
                display: block;
            }
            .radio-group, .checkbox-group {
                display: flex;
                gap: 30px;
                align-items: center;
                flex-wrap: wrap;
            }
            .radio-item, .checkbox-item {
                display: flex;
                align-items: center;
                gap: 8px;
            }
            input[type="radio"], input[type="checkbox"] {
                cursor: pointer;
                width: 16px;
                height: 16px;
                margin: 0;
            }
            .radio-item label, .checkbox-item label {
                margin: 0;
                cursor: pointer;
                font-size: 14px;
            }
            .button-group {
                display: flex;
                gap: 10px;
                justify-content: flex-start;
                margin-top: 15px;
            }
            .btn {
                padding: 6px 20px;
                border: 1px solid #b61398;
                background-color: rgb(43, 22, 134);
                color: #333;
                cursor: pointer;
                border-radius: 2px;
                font-family: inherit;
                font-size: 14px;
                transition: all 0.2s;
            }
            .btn:hover {
                background-color: #e00e0e;
            }
            select.form-control {
                cursor: pointer;
            }
        </style>
        @stack('styles')
    </head>
    <body>
        <div class="container" style="padding-top: 50px;">

            <h1>@yield('header')</h1>
            @yield('content')
        </div>
        @stack('scripts')
    </body>
</html>
