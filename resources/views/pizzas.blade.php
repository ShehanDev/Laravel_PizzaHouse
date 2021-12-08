<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="flex justify-center mt-4 sm:items-center sm:justify-between">
    <div class="content">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                        <h1>Pizzas PAGE</h>
                        <div>
                            <p>{{ $type }}  {{ $base }}  {{ $price }}</p>
                            @if($price > 10)
                                <p>Pitzza is Expensive </P>
                            @elseif($price < 5)
                                <p>Hey pizza has new offer less the 5</p>
                            @endif
                        </div>
                        </div>
                    </div>
</div>
</div>
    
</body>
</html>