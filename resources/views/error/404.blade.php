<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{!! asset('assets/style/404style.css') !!}">
    <title>404 Not Found</title>
</head>
<body>
    
    <h1>404 Page Not Found</h1>
    <p class="zoom-area"><b>Sorry..</b> Looks like the page you were looking for is no longer here. </p>
    <section class="error-container">
      <span class="four"><span class="screen-reader-text">4</span></span>
      <span class="zero"><span class="screen-reader-text">0</span></span>
      <span class="four"><span class="screen-reader-text">4</span></span>
    </section>
    <div class="link-container">
      <a href="{{ url('/') }}" class="more-link">Back Home</a>
    </div>

</body>
</html>
