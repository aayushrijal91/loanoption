<header>
    <div class="navigation_bar">
        <div class="container-fluid">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-auto">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="capify"><?= renderImg('capify.png', 'logo') ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="./">
                                <?= renderImg("logo.png", "logo") ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn btn-primary text-white">
                                <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.8554 14.3002L14.9345 12.3862C14.5466 12.1974 14.113 12.1547 13.7008 12.2646C13.2887 12.3744 12.9209 12.6308 12.6547 12.9939L11.471 14.6233C9.55282 13.2809 7.92591 11.4916 6.70511 9.38188L8.185 8.08115C8.51624 7.78856 8.75026 7.38372 8.85063 6.92963C8.951 6.47554 8.91209 5.99769 8.73996 5.57045L6.99884 1.25716C6.81388 0.799033 6.48707 0.428012 6.07665 0.210199C5.66623 -0.00761358 5.19885 -0.0580721 4.75776 0.0678128L1.44302 1.01517C0.985711 1.14659 0.588098 1.45794 0.325492 1.89025C0.0628867 2.32256 -0.0464734 2.8458 0.0181268 3.36087C0.631973 8.05944 2.61287 12.4129 5.66419 15.7693C8.71552 19.1257 12.6731 21.3045 16.9443 21.9794C17.0321 21.993 17.1206 21.9999 17.2093 22C17.6361 21.9997 18.0507 21.8438 18.3883 21.5567C18.726 21.2696 18.9676 20.8675 19.0754 20.4133L19.9353 16.7655C20.0514 16.2804 20.0065 15.7657 19.8085 15.3138C19.6106 14.8619 19.2726 14.5025 18.8554 14.3002Z" fill="#9159E8" />
                                    <ellipse cx="16.9204" cy="4.71415" rx="3.07669" ry="3.14286" fill="#F33829" />
                                </svg>
                                <span class="ps-2">Talk to a Human</span>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="#form" class="btn btn-secondary rounded-pill">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="banner_left h-100 bg-secondary rounded-20">
                        <div class="fs-70 lh-1 text-white font-articulat-heavy ls-2 mb-3">Offering <span class="text-secondary-light">Business <br>Loans</span> from $5k - $2M<span class="text-quaternary">.</span></div>
                        <div class="text-white fs-32 fw-700 ls-2 py-4 text-capitalize">Request a quick quote today</div>
                        <form id="business_loan_form" method="POST" class="form_wrapper rounded-20 bg-white mt-3">
                            <div class="form_slider" id="form_slider">
                                <div class="tab">
                                    <div class="fs-32 ls-2 fw-900">What type of Business Loan are you looking for?</div>
                                    <div class="row gx-3">
                                        <div class="col">
                                            <div class="loan_type_option">
                                                <?= renderImg("loan_type_1.png", "lib") ?>
                                                <div class="pt-3">Equipment</div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="loan_type_option">
                                                <?= renderImg("loan_type_2.png", "lib") ?>
                                                <div class="pt-3">Cashflow</div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="loan_type_option">
                                                <?= renderImg("loan_type_3.png", "lib") ?>
                                                <div class="pt-3">Hiring Staff</div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="loan_type_option">
                                                <?= renderImg("loan_type_4.png", "lib") ?>
                                                <div class="pt-3">Inventory</div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="loan_type_option">
                                                <?= renderImg("loan_type_5.png", "lib") ?>
                                                <div class="pt-3">Day to Day</div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="loan_type_option">
                                                <?= renderImg("loan_type_6.png", "lib") ?>
                                                <div class="pt-3">Others</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="fs-32 ls-2 fw-900">How much are you looking to Borrow?</div>
                                </div>
                                <div class="tab">
                                    <div class="fs-32 ls-2 fw-900">How much are you looking to Borrow?</div>
                                </div>
                            </div>
                            <div class="buttons d-flex flex-column flex-md-row justify-content-center justify-content-md-start align-items-center flex-wrap mt-5">
                                <button type="button" id="nextBtn" class="btn btn-quaternary d-inline-flex rounded-pill border-white rounded-0 text-white px-5" onclick="nextPrev(1)">Next</button>
                                <span class="px-3 py-md-0 py-2 text-tertiary" id="prevBtn" onclick="nextPrev(-1)">Go Back</span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="banner_right h-100 rounded-20"></div>
                </div>
            </div>
        </div>
    </div>
</header>

<footer>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-auto">
                <div class="row gx-2 gx-md-3 text-white justify-content-center">
                    <div class="col-12 text-center pb-3 d-lg-none">
                        <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                            <?= renderImg("aiims.png", "logo") ?>
                        </a>
                    </div>
                    <div class="col-auto text-center">Copyright <?= date('Y') ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center"><?= $site ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center">All Rights Reserved</div>
                </div>
            </div>
            <div class="col-auto d-none d-lg-block">
                <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                    <?= renderImg("aiims.png", "logo") ?>
                </a>
            </div>
        </div>
    </div>
</footer>