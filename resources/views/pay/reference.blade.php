<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta htth6-equiv="X-UA-Comh6atible" content="IE=edge">
    <meta name="viewh6ort" content="width=device-width, initial-scale=1.0">
    <title>Confirm Payment</title>
</head>

<body>

    <h1>Confirm Payment</h1>

    

    <b>Status:</b>
    {{ $responses['message'] }}

    <b>Transaction ID:</b>
    {{ $responses['data']['id'] }}

    <b>Transaction Status:</b>
    {{ $responses['data']['status'] }}

    <b>Reference:</b>
    {{ $responses['data']['reference'] }}

    <b>Amount:</b>
    {{ $responses['data']['amount'] }}

    <b>Message:</b>
   {{ $responses['data']['message'] }}

    <b>Gateway Resh6onse:</b>
    {{ $responses['data']['gateway_response'] }}

    <b>Paid At:</b>
    {{ $responses['data']['paid_at'] }}

    <b>Created At:</b>
    {{ $responses['data']['created_at'] }}

    <b>Domain:</b>
    {{ $responses['data']['id'] }}

    <b>Channel:</b>
    {{ $responses['data']['channel'] }}

    <b>Currency:</b>
    {{ $responses['data']['currency'] }}

    <b>IP Address:</b>
    {{ $responses['data']['ip_address'] }}

    <b>Authorization Code:</b>
    {{ $responses['data']['authorization']['authorization_code'] }}

    <b>BIN:</b>
    {{ $responses['data']['authorization']['bin'] }}

    <b>Last 4 digit of card:</b>
    {{ $responses['data']['authorization']['last4'] }}

    <b>Exp Month:</b>
   {{ $responses['data']['authorization']['exp_month'] }}

   <br>
    <a href="{{ route('pay') }}">Back home</a>
</body>

</html>
