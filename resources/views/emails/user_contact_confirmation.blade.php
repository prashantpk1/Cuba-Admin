<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Confirmation</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f5f6;
            font-family: Helvetica, sans-serif;
        }

        .container {
            max-width: 600px;
            margin-top: 20px;
        }

        .card {
            border-radius: 16px;
            border: 1px solid #eaebed;
        }

        .card-header {
            background-color: #686868; 
            padding: 20px;
            text-align: center;
        }

        .card-header img {
            max-width: 100px;
        }

        .card-body p {
            margin-bottom: 16px;
        }

        .footer {
            text-align: center;
            color: #9a9ea6;
            font-size: 16px;
            margin-top: 20px;
        }

        .btn-custom {
            background-color: #0867ec;
            color: #ffffff;
            border-radius: 4px;
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            font-weight: bold;
        }

        .btn-custom:hover {
            background-color: #ec0867;
        }

        @media (max-width: 640px) {
            .container {
                padding: 0 15px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- START CENTERED WHITE CONTAINER -->
        <div class="card">
            <div class="card-header text-center">
                <img src="{{ asset('assets/front/images/blazin_logo.png') }}" alt="Blazin Logo">
            </div>
            <div class="card-body">
                <p>Dear {{ $name }},</p>
                <p>Thank you for reaching out to us. We have received your message and will get back to you shortly.</p>
                <p>If you have any additional questions or need further assistance, please feel free to contact us at any time.</p>
            </div>
            <!-- START FOOTER -->
            <div class="footer">
                <p>Copyright &copy; {{ date('Y') }} Blazin</p>
            </div>
            <!-- END FOOTER -->
        </div>
        <!-- END CENTERED WHITE CONTAINER -->
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
