<?php include 'header.php'; ?>

<main class="main-page">
    <div class="">
        <div class="uk-text-center">
            <!-- <div class="uk-container uk-container-expand uk-text-center"> -->


            <div class="uk-grid-collapse home-cards" uk-grid>
                <div class=" uk-width-2-5@s">

                    <div class="uk-position-relative uk-visible-toggle home-cards__big-item" tabindex="-1" uk-slideshow="animation: push; autoplay: true">
                        <ul class="uk-slideshow-items"  uk-height-viewport>
                            <li>
                                <img src="./uploads/img/cup.jpg" alt="" uk-cover>
                                <div class="uk-overlay home-cards__overlay uk-position-cover" >
                                    <div class="uk-position-bottom-left uk-text-left uk-padding home-cards__slide-txt">
                                        <p class="home-cards__subtitle">Latest post</h2>
                                            <h2>Excepteur sint occaecat cupidatat non proident</h2>
                                            <p>
                                                The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before.

                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <img src="./uploads/img/blogger.jpg" alt="" uk-cover>
                                    <div class="uk-overlay home-cards__overlay uk-position-cover" >
                                        <div class="uk-position-bottom-left uk-text-left uk-padding home-cards__slide-txt">
                                            <p class="home-cards__subtitle">Latest post</h2>
                                                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>

                                                <p>
                                                    The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before.

                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                </ul>

                                <div class="uk-light">
                                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                                </div>

                            </div>

                        </div>

                        <div  class=" uk-width-3-5@s" uk-height-viewport>

                            <div class="uk-grid-collapse uk-child-width-1-2@s" uk-height-match="target: > div > .home-cards__item" uk-grid>
                                <div class="home-cards__item-parent">
                                    <div class="home-cards__item  uk-background-cover mcard-darkblue" >
                                        <div class="home-cards__overlay uk-position-cover" >
                                            <div class="uk-position-center-left uk-text-left uk-padding">

                                                <h2><i class="card-icon material-icons">code</i>Engineer projects</h2>
                                                <p>
                                                    The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="home-cards__item-parent">
                                    <div class="home-cards__item  uk-background-cover" style="background-image: url('./uploads/img/android.jpg');">
                                        <div class="home-cards__overlay uk-position-cover" >
                                            <div class="uk-position-center-left uk-text-left uk-padding">
                                                <h2>Mobile apps</h2>
                                                <p>
                                                    The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="home-cards__item-parent">
                                    <div class="home-cards__item  uk-background-cover" style="background-image: url('./uploads/img/vision.jpg');">
                                        <div class="home-cards__overlay uk-position-cover" >
                                            <div class="uk-position-center-left uk-text-left uk-padding">
                                                <h2>Computer Vision</h2>
                                                <p>
                                                    The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="main-cards-v2" class="home-cards__item-parent">

                                    <div class="uk-card uk-card-body home-cards__item  mcard-darkblue">
                                        <div class="uk-position-center-left uk-width-1-1 uk-padding">
                                            <i class="card-icon material-icons">open_in_browser</i>
                                            <p class="card-title"> WWW </p>
                                        </div>
                                        <div class="uk-position-center uk-overlay card-description">
                                            The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before.
                                        </div>
                                    </div>
                                    <!-- <div class="home-cards__item  uk-background-cover mcard-darkblue" >
                                        <div class="home-cards__overlay uk-position-cover" >
                                            <div class="uk-position-center-left uk-text-left uk-padding">

                                                <h2> <i class="card-icon material-icons">open_in_browser</i> WWW</h2>
                                                <p>
                                                    The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before.

                                                </p>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </main>



        <?php include 'footer.php'; ?>
