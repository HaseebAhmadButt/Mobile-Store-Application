<div>
    <a href="#">
        <div class="product-card">
            <div class="productImage">
                <img src="{{ asset('assets/images/products/' . $imageName) }}" alt="">
            </div>
            <div class="product-details">
                <h4>{{$productName}}</h4>
                <span><b>Brand: </b> {{$productBrand}}</span>
                <br>
                <b> Old Price: </b><strike> {{$productOldPrice}} PKR</strike>
                <br>
                <b>New Price: </b>{{$productNewPrice}} PKR
            </div>

        </div>
    </a>
</div>
