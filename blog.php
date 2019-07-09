<?php include 'header.php'; ?>
<main>

    <div class="uk-section">
        <div class="uk-container uk-container-large uk-text-center">
            <h1 class="page-title"> Blog </h1>

            <div class="uk-text-center" uk-grid>
                <div class="uk-width-expand@m blog-posts blog-grid-order-2" uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 500; repeat: false">

                    <!-- POSTS  -->
                    <div>
                        <div class="uk-card uk-card-default post-card">
                            <div class="uk-card-media-top">
                                <img src="uploads/img/post.jpg" alt="">
                            </div>
                            <div class="uk-card-body uk-text-left">
                                <small>Posted on May 26, 2019, 4:02 p.m. by adminartur</small>
                                <h2 class="post-card-title">Lean manufacturing taken care of</h2>
                                <div class="post-category"><span>category1</span></div>
                                <p>We’re always thinking about how to manufacture the products we design – it’s second nature. And our in-house manufacturing capabilities can bring your product to life..</p>

                                <div class="uk-text-right">
                                    <a href="post.php">
                                        <button class="button">
                                            Read More
                                            <div class="button__horizontal"></div>
                                            <div class="button__vertical"></div>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default post-card">
                            <div class="uk-card-media-top">
                                <img src="uploads/img/android.jpg" alt="">
                            </div>
                            <div class="uk-card-body uk-text-left">
                                <small>Posted on May 26, 2019, 4:02 p.m. by adminartur</small>
                                <h2 class="post-card-title">Lean manufacturing taken care of</h2>
                                <div class="post-category"><span>category1</span> <span>category1</span> </div>
                                <p>We’re always thinking about how to manufacture the products we design – it’s second nature. And our in-house manufacturing capabilities can bring your product to life..</p>

                                <div class="uk-text-right">
                                    <a href="post.php">
                                        <button class="button">
                                            Read More
                                            <div class="button__horizontal"></div>
                                            <div class="button__vertical"></div>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default post-card">
                            <div class="uk-card-media-top">
                                <img src="uploads/img/technology.jpg" alt="">
                            </div>
                            <div class="uk-card-body uk-text-left">
                                <small>Posted on May 26, 2019, 4:02 p.m. by adminartur</small>
                                <h2 class="post-card-title">Lean manufacturing taken care of</h2>
                                <div class="post-category"><span>category1</span></div>
                                <p>We’re always thinking about how to manufacture the products we design – it’s second nature. And our in-house manufacturing capabilities can bring your product to life..</p>

                                <div class="uk-text-right">
                                    <a href="post.php">
                                        <button class="button">
                                            Read More
                                            <div class="button__horizontal"></div>
                                            <div class="button__vertical"></div>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- END POSTS -->

                </div>

                <div class="uk-width-1-3@m blog-grid-order-1">
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-margin">
                            <h4>Search for an article..</h4>
                            <form class="uk-search uk-search-default uk-width-1-1">
                                <span uk-search-icon></span>
                                <input class="uk-search-input" type="search" placeholder="Search...">
                            </form>
                        </div>
                    </div>

                    <div class="uk-card uk-card-default uk-card-body uk-margin">
                        <div class="uk-margin">
                            <h4>Categories</h4>
                            <div>
                                <ul class="uk-tab-left tab-line" uk-tab>
                                    <li class="uk-active"><a href="#">all</a></li>
                                    <li><a href="#">category 1 </a></li>
                                    <li><a href="#">category 2 </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <div class="uk-section uk-section-medium">
        <div class="uk-container uk-container-expand uk-text-center">

            <ul class="uk-pagination uk-flex-center pagination" uk-margin>
                <li><a href="#"><span uk-pagination-previous></span></a></li>
                <li><a href="#">1</a></li>
                <li class="uk-disabled"><span>...</span></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li class="uk-active"><span>7</span></li>
                <li><a href="#">8</a></li>
                <li><a href="#"><span uk-pagination-next></span></a></li>
            </ul>

        </div>
    </div>

</main>
<?php include 'footer.php'; ?>
