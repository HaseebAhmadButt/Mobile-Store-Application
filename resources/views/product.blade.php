<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product | {{ config('app.name', 'Laravel') }}</title>
    @include('CommonCssResources.css')
    @include('cdnResources.cdn')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

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

        /* Product CSS for aligning the components */
        .product_info_section{
            margin-top: 2.5%;
            width: 100%;
            height: max-content;
            display: flex;
            flex-direction: column;
            gap: 2%;
        }
        .product_info_upper_div{
            flex: 59%;
            width: 100%;
            display: flex;
            flex-direction: row;
            gap: 2%;
        }

        .product_description_lower_div{
            flex: 39%;
            background-color: darkcyan;
            width: 100%;
        }




    </style>
</head>
<body>
    <header>
        <x-header />
    </header>
    <div class="product_info_section">
            <x-product-components.product-info-component />
        <div class="product_description_lower_div"></div>
    </div>

    <footer>
        <x-footer />
    </footer>
</body>
</html>l
