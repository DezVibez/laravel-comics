

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

</head>
<body>


    @include('includes.header')

    <div class="comic-section">

        <div class="container">

            
        
                <div class="comic-card">
                    
                    <img src=" {{ asset($comic['thumb']) }} " alt="">
        
                </div>
        
           
                    
        </div>
        
        



 
    </div>


    @include('includes.footer')
    
</body>
</html>