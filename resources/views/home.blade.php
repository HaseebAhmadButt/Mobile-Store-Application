<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | {{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Home/products.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Home/home-banner.css') }}">
    @include('CommonCssResources.css')
    @include('cdnResources.cdn')
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

        .recent-products-heading {
            width: max-content;
            margin: 2.5% 0 0 4%;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header>
        <x-header />
    </header>
    <div class="banner">
        <div class="banner-left">
            <h1 class="main-quote">
                Connecting You to the Future of Mobile Technology
            </h1>
            <h4 class="sub-quote">Your trusted source for the latest smartphones and accessories.</h4>
        </div>
        <div class="banner-right">
            <form action="">
                <div class="form-div">
                    <div class="form-group input-div">
                        <input type="text" class="form-control" placeholder="Search Here" />
                    </div>
                    <div class="text-right button-div">
                        <button type="submit" class="btn btn-primary p-0.5 w-25">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
    <h4 class="recent-products-heading">Featured Products</h4>
    <div class="products-list">
        @for ($i = 0; $i< 20; $i++)
        <x-product-card image="Apple/iphone-13.jpg" name="IPhone-13 IPhone-13 IPhone-13" brandName="Apple"
            oldPrice="6500000" newPrice="4500000" />
        @endfor
    </div>
    <h4 class="recent-products-heading">Recent Products</h4>
    <div class="products-list">
        @for ($i = 0; $i< 20; $i++)
        <x-product-card image="Apple/iphone-13.jpg" name="IPhone-13 IPhone-13 IPhone-13" brandName="Apple"
            oldPrice="6500000" newPrice="4500000" />
        @endfor
    </div>
    <h4 class="recent-products-heading">All Products</h4>
    <div class="products-list">
        @for ($i = 0; $i< 20; $i++)
        <x-product-card image="Apple/iphone-13.jpg" name="IPhone-13 IPhone-13 IPhone-13" brandName="Apple"
            oldPrice="6500000" newPrice="4500000" />
        @endfor
    </div>
    <footer>
        <x-footer />
    </footer>
</body>

</html>
