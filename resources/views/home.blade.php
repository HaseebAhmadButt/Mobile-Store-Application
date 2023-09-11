<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | {{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Home/products.css') }}">
    @include('CommonCssResources.css')
    <style>
        header {
            padding: unset;
        }

        body {
            margin: 0;
            padding: unset;
            background-color: rgba(0, 0, 0, 0.1);
            /* box-sizing: border-box; */
        }

        a {
            text-decoration: none;
            color: rgb(0, 0, 0);
        }
    </style>
</head>

<body>
    <header>
        <x-header />
    </header>
    <div class="brands-list">
        <h6>Apple</h6>
        <h6>Samsung</h6>
        <h6>Xiaomi</h6>
        <h6>OPPO</h6>
        <h6>Vivo</h6>
        <h6>Realme</h6>
        <h6>Motorola</h6>
        <h6>Huawei</h6>
        <h6>Tecno</h6>
        <h6>Honor</h6>
        <h6>TCL</h6>
        <h6>Lenovo</h6>
        <h6>Nokia</h6>
        <h6>ZTE</h6>
        <h6>Sharp</h6>
    </div>
    <div class="products-list">
        <x-product-card image="Apple/iphone-13.jpg" name="IPhone-13 IPhone-13 IPhone-13" brandName="Apple"
            oldPrice="6500000" newPrice="4500000" />
            <x-product-card image="Apple/iphone-13.jpg" name="IPhone-13 IPhone-13 IPhone-13" brandName="Apple"
            oldPrice="6500000" newPrice="4500000" />
            <x-product-card image="Apple/iphone-13.jpg" name="IPhone-13 IPhone-13 IPhone-13" brandName="Apple"
            oldPrice="6500000" newPrice="4500000" />
            <x-product-card image="Apple/iphone-13.jpg" name="IPhone-13 IPhone-13 IPhone-13" brandName="Apple"
            oldPrice="6500000" newPrice="4500000" />
            <x-product-card image="Apple/iphone-13.jpg" name="IPhone-13 IPhone-13 IPhone-13" brandName="Apple"
            oldPrice="6500000" newPrice="4500000" />
            <x-product-card image="Apple/iphone-13.jpg" name="IPhone-13 IPhone-13 IPhone-13" brandName="Apple"
            oldPrice="6500000" newPrice="4500000" />
            <x-product-card image="Apple/iphone-13.jpg" name="IPhone-13 IPhone-13 IPhone-13" brandName="Apple"
            oldPrice="6500000" newPrice="4500000" />
            <x-product-card image="Apple/iphone-13.jpg" name="IPhone-13 IPhone-13 IPhone-13" brandName="Apple"
            oldPrice="6500000" newPrice="4500000" />
            <x-product-card image="Apple/iphone-13.jpg" name="IPhone-13 IPhone-13 IPhone-13" brandName="Apple"
            oldPrice="6500000" newPrice="4500000" />
            <x-product-card image="Apple/iphone-13.jpg" name="IPhone-13 IPhone-13 IPhone-13" brandName="Apple"
            oldPrice="6500000" newPrice="4500000" />
    </div>
</body>

</html>
