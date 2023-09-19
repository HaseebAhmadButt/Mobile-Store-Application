<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product | {{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Home/products.css') }}">
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
        .product_info_section {
            margin-top: 2.5%;
            width: 95%;
            height: max-content;
            display: flex;
            flex-direction: column;
            gap: 2%;
            margin: auto;
            margin-top: 5%;
        }

        .product_info_upper_div {
            flex: 59%;
            width: 100%;
            display: flex;
            flex-direction: row;
            gap: 2%;
        }

        .product_description_lower_div {
            flex: 39%;
            /* background-color: darkcyan; */
            width: 100%;
            margin-top: 1.5%;
        }


        /* Carousal Design */
        .carousal-outer-div {
            margin: 0 3%;
            width: 95%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin: auto;
            gap: 0.5%;
        }

        .left-carousal,
        .right-carousal,
        .fa {
            border: none;
            border-radius: 100%;
            padding: 0 1%;
            font-size: 50px;
            color: lightgray;
            height: max-content;
            margin: auto;
        }

        .innercarousal {
            display: flex;
            flex-direction: row;
            justify-content: start;
            gap: 0.5%;
            overflow: hidden;
            padding: 2% 0;
        }

        .left-carousal:hover,
        .right-carousal:hover,
        .fa:hover {
            color: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
    <header>
        <x-header />
    </header>
    <div class="product_info_section">
        <x-product-components.product-info-component />
        <x-product-components.product-description-component />
    </div>
    <div class="carousal-outer-div">
        <button class="left-carousal" disabled><i class="fa fa-angle-left"></i></button>
        <div class="innercarousal">
            @for ($i = 0; $i < 10; $i++)
                <x-product-card image="Apple/iphone-13.jpg" name="IPhone-13 IPhone-13 IPhone-13" brandName="Apple"
                    oldPrice="6500000" newPrice="4500000" />
            @endfor
        </div>
        <button class="right-carousal"><i class="fa fa-angle-right"></i></button>
    </div>
    <footer>
        <x-footer />
    </footer>
</body>
{{-- <script type="module">
    $(document).ready(function() {
        $('.product-carousel').carousel();
    });
</script> --}}

<script type="module">
    $(document).ready(function() {
        // Initialize variables

        let scrollPosition = 0;
        let scrollStep = 275;
        let carouselOuterDiv = $(".carousal-outer-div");
        let innerCarousel = $(".innercarousal");

        // Attach a scroll event handler to the inner carousel
        innerCarousel.on("scroll", function() {
            // Calculate the maximum scroll position to the right
            let maxScrollRight = innerCarousel[0].scrollWidth - innerCarousel.width() - 1;

            // Check if the scroll position is at the right end
            if (innerCarousel.scrollLeft() >= maxScrollRight) {
                // Disable the "right-carousal" button
                $(".right-carousal").prop("disabled", true);
            } else {
                // Enable the "right-carousal" button
                $(".right-carousal").prop("disabled", false);
            }

            // Check if the scroll position is at the left end
            if (innerCarousel.scrollLeft() <= 0) {
                // Disable the "left-carousal" button
                $(".left-carousal").prop("disabled", true);
            } else {
                // Enable the "left-carousal" button
                $(".left-carousal").prop("disabled", false);
            }

        });
        // Left button click event handler
        $(".left-carousal").on("click", function() {
            // Calculate the new scroll position
            scrollPosition -= scrollStep;

            // Scroll the .innercarousal element
            $(".innercarousal").animate({
                scrollLeft: scrollPosition
            }, "slow");


        });

        // Right button click event handler
        $(".right-carousal").on("click", function() {
            // Calculate the new scroll position
            scrollPosition += scrollStep;

            // Scroll the .innercarousal element
            $(".innercarousal").animate({
                scrollLeft: scrollPosition
            }, "slow");
        });
    });
</script>

</html>l
