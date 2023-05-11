<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link -->
    <link rel="stylesheet" href="css/testing.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Cafe Wikrama | @yield ('title')</title>
</head>
<body>
    
    <div>
        <nav class="navbar">
            <div class="navigation">
                <a class="navigation-button" href="#home">Home</a>
                <a class="navigation-button" href="#shop">Shop</a>
                <a class="navigation-button" href="#contact">Contact</a>
            </div>
        </nav>

        <div>
            @yield ('content')
        </div>
    </div>

</body>
</html>