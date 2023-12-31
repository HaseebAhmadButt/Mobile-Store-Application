
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@700&family=Rubik:wght@500&display=swap');

    .productImage-div{
        flex: 59%;
        display: flex;
        flex-direction: column;
        gap: 1%;
        background-color: white;
        justify-content: center;
        align-items: center;
        padding: 2.5%;

    }
    .product-multiple-Images{
        width: 100%;
        flex: 20%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .product-multiple-Images a{
        margin: auto;
        display: block;
        width: 400px;
        height: 450px;
        /* border: 2px solid lightgray; */
        padding: 2.5%;
    }
    .product-multiple-Images img{
        display: block;
        width: 100%;
        height: 100%;
    }
    .productImages{
        flex: 34%;
        display: flex;
        flex-direction: row;
        gap: 10%;
        /* margin-left: 10%; */

    }
    .product-images{
        margin-top: 2.5%;
        width: 65px;
        height: 80px;
        padding: 1%;
        border: 1px solid lightgray;

    }
    .product-images img{
        width: 100%;
        height: 100%;
    }
    .product-images:hover{
        cursor: pointer;
    }






    .productStats-div{
        flex: 79%;
        /* margin: auto; */
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: stretch;
        padding: 2.5%;
        /* background-color: lightgreen; */
    }
    .productStats-div h3, h4, .price_area, .buttons-div{
        width: 100%;
        /* text-align: center; */
    }
    .price_area{
        display: flex;
        flex-direction: row;
        gap: 1%;
    }
    .buttons-div{
        margin-top: 4%;
    }
</style>
<div class="product_info_upper_div">
    <div class="productImage-div">
        {{-- Product Image --}}
        <div class="product-multiple-Images">
            <a >
                <img src="{{asset('assets/images/products/Apple/iphone-13.jpg')}}" class="main-img" alt="productImage">
            </a>
        </div>
        {{-- Product Images  --}}
        <div class="productImages">
            <a class="product-images">
                <img src="{{asset('assets/images/products/Apple/iphone-13.jpg')}}" alt="productImage">
            </a>
            <a class="product-images">
                <img src="{{asset('assets/images/products/Apple/iphone-13-2.jpg')}}" alt="productImage">
            </a>
        </div>
    </div>
    <div class="productStats-div">
        <h3 style="Rubik">IPhone-13 IPhone-13 IPhone-13</h3>
        <h4>Brand: Apple</h4>
        <span class="price_area"><h6>Old Price: </h6><strike>765908 PKR</strike></span>
        <span class="price_area"><h6>New Price: </h6>765908 PKR</span>
        <div class="buttons-div">
            <button class="btn btn-primary">Buy Mobile &nbsp; <i class="fas fa-shopping-bag"></i></button>
            <button class="btn btn-primary">Add to Cart &nbsp; <i class="fas fa-cart-arrow-down"></i></button>
        </div>
    </div>
</div>
<script type="module">
    $(document).ready(function() {
        $(".product-images").on("mouseenter", function(){

            $(".main-img") // Selecting the target image
            .attr("src",   // Selecting its "src" attribute
            $(this)         // Selecting the object on which mouse entered
            .find("img")    // finding image from its child element
            .attr("src"));  // Selecting the "src" attribute of this child image and after selecting setting it to main image.

        });
    });
</script>
