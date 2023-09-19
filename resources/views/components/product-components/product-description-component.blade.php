<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@700&family=Rubik:wght@500&display=swap');

    .tabs {
        background-color: ;
        width: 50%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .desc-btn {
        flex: 50%;
        display: inline-block;
        font-family: Rubik;
        font-size: 110%;
        font-weight: 500;
        color: rgb(0, 0, 0) !important;
    }

    .desc-btn:hover {
        background-color: rgba(0, 0, 0, 0.09);
    }

    .description,
    .comments {
        margin: 2%;
    }

    .description h5 {
        font-family: Rubik;
    }

    .description-details {
        margin-top: 1%;
    }



    .comments {
        display: flex;
        flex-direction: row;
        height: 500px;
        overflow-y: scroll;
        overflow-x: none;
    }

    .comment {
        display: flex;
        flex-direction: row;

    }

    .comment-image {
        flex: 5px;
        margin: auto;
    }

    .comment-image img {
        width: 50%;
        height: 50%;
        border-radius: 100px;
    }
    .product-comment {
        flex: 92.5%;
    }
    .add-comment-section{
        display: flex;
        flex-direction: column;
        justify-content:end;
        gap: 2.5%;
        height: 100px;
        padding: 0 2.5%;
    }
    .comment-input{
        flex: 75%;
    }
    .comment-btn{
        flex: 23.5%;
        width: 10%;
        float: right;
        /* padding: unset; */

    }
</style>


<div class="product_description_lower_div">
    <div class="tabs">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="desc-btn nav-link active" id="nav-description-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description"
                    aria-selected="true">Description</button>

                <button class="desc-btn nav-link" id="nav-comments-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-comments" type="button" role="tab" aria-controls="nav-comments"
                    aria-selected="false">Comments</button>
            </div>
        </nav>
    </div>

    <div class="description-details tab-content" id="nav-tabContent">
        <div class="description tab-pane fade show active" id="nav-description" role="tabpanel"
            aria-labelledby="nav-description-tab">
            <h5 class="product-description-heading">Product Description</h5>
            <p> It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
            </p>
            <h5 class="features">Features</h5>
            <ul class="features-list">
                <li class="feature">Feature 1</li>
                <li class="feature">Feature 2</li>
                <li class="feature">Feature 3</li>
                <li class="feature">Feature 4</li>
                <li class="feature">Feature 5</li>
                <li class="feature">Feature 6</li>
                <li class="feature">Feature 7</li>

            </ul>
        </div>

        <div class="comments tab-pane fade" id="nav-comments" role="tabpanel" aria-labelledby="nav-comments-tab">
            <table class="table table-striped table-hover">
                <tr>
                    <div class="comment">
                        <td>
                            <div class="comment-image">
                                <img src="{{ asset('assets/images/products/Apple/iphone-13-2.jpg') }}"
                                    alt="productImage">
                            </div>
                        </td>
                        <td>
                            <div class="product-comment">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered
                                alteration in some form, by injected humour, or randomised words which don't look even
                                slightly
                                believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                isn't
                                anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on
                                the Internet
                                tend to repeat predefined chunks as necessary, making this the first true generator on
                                the Internet.
                                It uses a dictionary of over 200 Latin words, combined with a handful of model sentence
                                structures,
                                to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore
                                always free
                                from repetition, injected humour, or non-characteristic words etc.
                            </div>
                        </td>
                    </div>
                </tr>

                <tr>
                    <div class="comment">
                        <td>
                            <div class="comment-image">
                                <img src="{{ asset('assets/images/products/Apple/iphone-13-2.jpg') }}"
                                    alt="productImage">
                            </div>
                        </td>
                        <td>
                            <div class="product-comment">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered
                                alteration in some form, by injected humour, or randomised words which don't look even
                                slightly
                                believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                isn't
                                anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on
                                the Internet
                                tend to repeat predefined chunks as necessary, making this the first true generator on
                                the Internet.
                                It uses a dictionary of over 200 Latin words, combined with a handful of model sentence
                                structures,
                                to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore
                                always free
                                from repetition, injected humour, or non-characteristic words etc.
                            </div>
                        </td>
                    </div>
                </tr>
                <tr>
                    <div class="comment">
                        <td>
                            <div class="comment-image">
                                <img src="{{ asset('assets/images/products/Apple/iphone-13-2.jpg') }}"
                                    alt="productImage">
                            </div>
                        </td>
                        <td>
                            <div class="product-comment">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered
                                alteration in some form, by injected humour, or randomised words which don't look even
                                slightly
                                believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                isn't
                                anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on
                                the Internet
                                tend to repeat predefined chunks as necessary, making this the first true generator on
                                the Internet.
                                It uses a dictionary of over 200 Latin words, combined with a handful of model sentence
                                structures,
                                to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore
                                always free
                                from repetition, injected humour, or non-characteristic words etc.
                            </div>
                        </td>
                    </div>
                </tr>
                <tr>
                    <div class="comment">
                        <td>
                            <div class="comment-image">
                                <img src="{{ asset('assets/images/products/Apple/iphone-13-2.jpg') }}"
                                    alt="productImage">
                            </div>
                        </td>
                        <td>
                            <div class="product-comment">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered
                                alteration in some form, by injected humour, or randomised words which don't look even
                                slightly
                                believable.
                            </div>
                        </td>
                    </div>
                </tr>
            </table>
            <div class="add-comment-section">
                    <textarea class="form-control comment-input" ></textarea>
                    <button class="btn btn-primary comment-btn"> Add Comment</button>
            </div>
        </div>
    </div>
</div>
