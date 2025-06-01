<?php include 'header.php'; ?>

<?php
    $packages = [
        [
            'id'       => 1,
            'title'    => 'Dubai',
            'image'    => 'assets/img/tour/tour_3_1.jpg',
            'price'    => 980.00,
            'duration' => '7 Days',
            'rating'   => 4.8,
        ],
        [
            'id'       => 2,
            'title'    => 'Italy',
            'image'    => 'assets/img/tour/tour_3_2.jpg',
            'price'    => 880.00,
            'duration' => '7 Days',
            'rating'   => 4.8,
        ],
        [
            'id'       => 3,
            'title'    => 'France',
            'image'    => 'assets/img/tour/tour_3_3.jpg',
            'price'    => 680.00,
            'duration' => '7 Days',
            'rating'   => 4.8,
        ],

        [
            'id'       => 4,
            'title'    => 'Maldives',
            'image'    => 'assets/img/tour/tour_3_4.jpg',
            'price'    => 530.00,
            'duration' => '7 Days',
            'rating'   => 4.8,
        ],
        [
            'id'       => 5,
            'title'    => 'Belgium',
            'image'    => 'assets/img/tour/tour_3_5.jpg',
            'price'    => 530.00,
            'duration' => '7 Days',
            'rating'   => 4.8,
        ],
        [
            'id'       => 6,
            'title'    => 'Brazil',
            'image'    => 'assets/img/tour/tour_3_6.jpg',
            'price'    => 440.00,
            'duration' => '7 Days',
            'rating'   => 4.8,
        ],
        [
            'id'       => 7,
            'title'    => 'Spain',
            'image'    => 'assets/img/tour/tour_3_7.jpg',
            'price'    => 980.00,
            'duration' => '7 Days',
            'rating'   => 4.8,
        ],
        [
            'id'       => 8,
            'title'    => 'Greece',
            'image'    => 'assets/img/tour/tour_3_8.jpg',
            'price'    => 980.00,
            'duration' => '7 Days',
            'rating'   => 4.8,
        ],
        [
            'id'       => 9,
            'title'    => 'Newziland',
            'image'    => 'assets/img/tour/tour_3_9.jpg',
            'price'    => 780.00,
            'duration' => '7 Days',
            'rating'   => 4.8,
        ],
    ];
    if (isset($_GET['search'])) {
        $searchTerm       = strtolower(trim($_GET['search']));
        $filteredPackages = array_filter($packages, function ($package) use ($searchTerm) {
            return strpos(strtolower($package['title']), $searchTerm) !== false;
        });
    } else {
        $filteredPackages = $packages;
    }
?>


<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg" data-aos="fade-up" data-aos-delay="700">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Packages</h1>
            <ul class="breadcumb-menu">
                <li><a href="/l">Home</a></li>
                <li>Packages</li>
            </ul>
        </div>
    </div>
</div>
<section class="space">
    <div class="container">
        <div class="th-sort-bar">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-4">
                    <div class="search-form-area">
                        <form class="search-form" method="GET" action="packages.php">
                            <input type="text" name="search" placeholder="Search packages..."
                                value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>" />
                            <button type="submit">
                                <i class="fa-light fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="700">
            <div class="col-xxl-9 col-lg-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="tab-grid" role="tabpanel"
                        aria-labelledby="tab-destination-grid">
                        <div class="row gy-30">
                            <?php foreach ($filteredPackages as $package): ?>
                            <div class="col-xxl-4 col-xl-6">
                                <div class="tour-box th-ani">
                                    <div class="tour-box_img global-img">
                                        <!-- <img src="assets/img/tour/tour_3_1.jpg" alt="image" /> -->
                                        <img src="<?php echo $package['image']; ?>"
                                            alt="<?php echo $package['title']; ?>" />
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title">
                                            <a
                                                href="holidays-details.php?id=<?php echo $package['id']; ?>"><?php echo $package['title']; ?></a>
                                        </h3>
                                        <div class="tour-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                <span style="width: 100%">
                                                    Rated <strong class="rating">5.00</strong> out of 5 based on
                                                    <span class="rating"><?php echo $package['rating']; ?></span>
                                                    (<?php echo $package['rating']; ?> Rating)
                                                </span>
                                                >
                                            </div>
                                            <a href="holidays-details.php?id=<?php echo $package['id']; ?>"
                                                class="woocommerce-review-link">
                                                (<span class="count"><?php echo $package['rating']; ?></span> Rating)
                                            </a>
                                        </div>
                                        <h4 class="tour-box_price">
                                            <span
                                                class="currency">$<?php echo number_format($package['price'], 2); ?></span>/Person
                                        </h4>
                                        <div class="tour-action">
                                            <span><i
                                                    class="fa-light fa-clock"></i><?php echo $package['duration']; ?></span>
                                            <a href="holidays-details.php?id=<?php echo $package['id']; ?>"
                                                class="th-btn style4 th-icon">
                                                View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <?php if (empty($filteredPackages)): ?>
                            <div class="col-12">
                                <div class="alert alert-info">No packages found matching your search.</div>
                            </div>
                            <?php endif; ?>



                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4">
                <aside class="sidebar-area style2">
                    <div class="widget widget_categories">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            <li>
                                <a href="#"><img src="assets/img/theme-img/map.svg" alt="" />City
                                    Tour</a>
                                <span>(8)</span>
                            </li>
                            <li>
                                <a href="#"><img src="assets/img/theme-img/map.svg" alt="" />Beach
                                    Tours</a>
                                <span>(6)</span>
                            </li>
                            <li>
                                <a href="#"><img src="assets/img/theme-img/map.svg" alt="" />Wildlife
                                    Tours</a>
                                <span>(2)</span>
                            </li>
                            <li>
                                <a href="#"><img src="assets/img/theme-img/map.svg" alt="" />News &
                                    Tips</a>
                                <span>(7)</span>
                            </li>
                            <li>
                                <a href="#"><img src="assets/img/theme-img/map.svg" alt="" />Adventure Tours</a>
                                <span>(9)</span>
                            </li>
                            <li>
                                <a href="#"><img src="assets/img/theme-img/map.svg" alt="" />Mountain
                                    Tours</a>
                                <span>(10)</span>
                            </li>
                        </ul>
                    </div>

                    <div class="widget widget_offer" data-bg-src="assets/img/bg/widget_bg_1.jpg">
                        <div class="offer-banner">
                            <div class="offer">
                                <h6 class="box-title">
                                    Need Help? We Are Here To Help You
                                </h6>
                                <div class="banner-logo">
                                    <img src="assets/img/RTW-color-log.png" alt="Tourm" />
                                </div>
                                <div class="offer">
                                    <h6 class="offer-title">You Get Online support</h6>
                                    <a class="offter-num" href="%2b256214203215.html">+256 214 203 215</a>
                                </div>
                                <a href="contact.php" class="th-btn style2 th-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>