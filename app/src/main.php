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
                                    <div class="fs-32 ls-2 fw-900 pb-4 lh-1">What type of Business Loan are you looking for?</div>
                                    <div class="form-group form-wrapper">
                                        <div class="row radio-toolbar gx-2">
                                            <div class="col">
                                                <input class="form-check-input" type="radio" name="loanType" value="Equipment" id="loantype_equipment">
                                                <label class="form-check-label" for="loantype_equipment">
                                                    <?= renderImg("loan_type_1.png", "lib") ?>
                                                    <div class="pt-3">Equipment</div>
                                                </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" name="loanType" value="Cashflow" id="loantype_cashflow">
                                                <label class="form-check-label" for="loantype_cashflow">
                                                    <?= renderImg("loan_type_2.png", "lib") ?>
                                                    <div class="pt-3">Cashflow</div>
                                                </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" name="loanType" value="Hiring Staff" id="loantype_hiring_staff">
                                                <label class="form-check-label" for="loantype_hiring_staff">
                                                    <?= renderImg("loan_type_3.png", "lib") ?>
                                                    <div class="pt-3">Hiring Staff</div>
                                                </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" name="loanType" value="Inventory" id="loantype_inventory">
                                                <label class="form-check-label" for="loantype_inventory">
                                                    <?= renderImg("loan_type_4.png", "lib") ?>
                                                    <div class="pt-3">Inventory</div>
                                                </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" name="loanType" value="Day to Day" id="loantype_day2day">
                                                <label class="form-check-label" for="loantype_day2day">
                                                    <?= renderImg("loan_type_5.png", "lib") ?>
                                                    <div class="pt-3">Day to Day</div>
                                                </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" name="loanType" value="Others" id="loantype_others">
                                                <label class="form-check-label" for="loantype_others">
                                                    <?= renderImg("loan_type_6.png", "lib") ?>
                                                    <div class="pt-3">Others</div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="fs-32 ls-2 fw-900 pb-4 lh-1">How much are you looking to Borrow?</div>
                                    <div class="px-1">
                                        <div class="borrowAmount fs-64 fw-800 text-grey lh-1 pb-4">$<span id="borrowAmount">0</span></div>
                                        <div class="range">
                                            <div class="sliderThumb"></div>
                                            <div class="progressBar"></div>
                                            <input type="range" id="borrowSlider" name="borrowAmount" min="0" max="50000" value="0" steps="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="fs-32 ls-2 fw-900 pb-5">Entity of Business</div>
                                    <div class="form-group form-wrapper">
                                        <div class="row radio-toolbar">
                                            <div class="col">
                                                <input class="form-check-input" type="radio" name="businessEntity" value="Sole Trader" id="businessEntity_soleTrader">
                                                <label class="form-check-label py-5" for="businessEntity_soleTrader">
                                                    Sole Trader
                                                </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" name="businessEntity" value="Partnership" id="businessEntity_partnership">
                                                <label class="form-check-label py-5" for="businessEntity_partnership">
                                                    Partnership
                                                </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" name="businessEntity" value="Company" id="businessEntity_company">
                                                <label class="form-check-label py-5" for="businessEntity_company">
                                                    Company
                                                </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" name="businessEntity" value="Trust" id="businessEntity_trust">
                                                <label class="form-check-label py-5" for="businessEntity_trust">
                                                    Trust
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="fs-32 ls-2 fw-900 pb-5">Enter your Details</div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="fs-20 fw-800 lh-1">What's your human <span class="text-secondary">first name?</span></div>
                                            <input type="text" name="firstName" placeholder="First Name">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fs-20 fw-800 lh-1">What's your human <span class="text-secondary">last name?</span></div>
                                            <input type="text" name="lastName" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="fs-32 ls-2 fw-900 pb-5">How can we Contact You</div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="fs-20 fw-800 lh-1">What's your <span class="text-secondary">email address?</span></div>
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fs-20 fw-800 lh-1">What's your <span class="text-secondary">contact number?</span></div>
                                            <input type="tel" name="phone" placeholder="Number">
                                        </div>
                                    </div>
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
                    <div class="banner_right h-100 rounded-20">
                        <div>
                            <div class="font-articulat-heavy ls-2 fs-48 lh-1 text-white">Win a $1500* Flight Centre Gift Card for your Next Trip<span class="text-quaternary">.</span></div>
                            <div class="py-4 fs-20 text-white">Capify has always come forward to support hardworking Business owners, so this month we are giving away Flight centre gift card* of up to $1500 to all the businesses that get funded with us.</div>
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto">
                                    <a href="#form" class="btn btn-quaternary d-inline-flex rounded-pill border-white rounded-0 text-white px-4">Learn More</a>
                                </div>
                                <div class="col-auto">
                                    <?= renderImg("flight_center.png", 'logo') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cta_slider" id="cta_slider">
                <div>
                    <div class="row h-100 align-items-center justify-content-around">
                        <div class="col-auto">
                            <svg width="54" height="50" viewBox="0 0 54 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M38.6072 0.405194C38.2339 0.800751 38.2024 1.02382 38.2024 3.27692V5.71992H22.2153C6.96384 5.71992 6.21407 5.73548 5.92001 6.05878C5.26969 6.77356 5.65482 7.99636 6.60255 8.22647C6.82584 8.28056 14.4433 8.30169 23.5301 8.27297C39.086 8.22406 40.0708 8.20182 40.3841 7.89112C40.6429 7.63415 40.7372 7.15504 40.8096 5.7277L40.9027 3.89424L45.4654 7.13262C47.9749 8.91364 50.1315 10.4725 50.2579 10.5965C50.4391 10.7745 49.4986 11.5251 45.8012 14.1533C43.2236 15.9857 41.0461 17.5125 40.9622 17.5464C40.8783 17.5805 40.8096 16.8555 40.8096 15.9356C40.8096 14.4657 40.7588 14.2054 40.3906 13.7869L39.9716 13.3107L23.7193 13.3105C9.48263 13.3103 7.39851 13.3455 6.91505 13.5942C5.78164 14.1772 5.79803 14.0134 5.79803 24.7022V34.4392L4.55959 35.3181C1.99741 37.1369 0.322998 38.4307 0.137511 38.7349C-0.347623 39.5314 0.106969 39.9317 7.28882 45.0377C11.2209 47.8332 14.4433 50 14.6686 50C14.8884 50 15.2662 49.8409 15.508 49.6463C15.9248 49.311 15.9508 49.1613 16.0086 46.7746L16.0696 44.2566H31.8848C47.452 44.2566 47.706 44.2508 48.0727 43.886C48.6086 43.3528 48.5548 42.5165 47.9544 42.0468C47.4663 41.6648 47.3747 41.6627 30.9393 41.6627C11.366 41.6627 13.4335 41.3548 13.4335 44.2701C13.4335 45.2817 13.395 46.1093 13.3477 46.1093C13.1864 46.1093 3.84278 39.4169 3.78673 39.2612C3.73439 39.1158 12.6512 32.6581 13.1866 32.4538C13.3812 32.3795 13.4335 32.7373 13.4335 34.1394C13.4335 36.9691 11.3395 36.6604 30.5417 36.6604C46.8536 36.6604 46.9067 36.6591 47.3994 36.2735C48.466 35.4389 48.4448 35.6651 48.45 25.1365L48.4546 15.4467L51.1969 13.4976C53.7513 11.6822 53.9427 11.5045 53.9939 10.9038C54.0239 10.5492 53.9401 10.125 53.8077 9.9608C53.6086 9.71457 43.0228 2.13212 40.5508 0.465037C39.6591 -0.136357 39.1341 -0.152476 38.6072 0.405194ZM12.0433 16.4135C11.7586 17.5421 10.046 19.2459 8.91145 19.5292L8.40528 19.6555V17.7826V15.9099H10.2877H12.1703L12.0433 16.4135ZM38.2024 18.2771C38.2024 21.0065 38.373 21.4681 39.3825 21.4681C39.8453 21.4681 40.6018 21.0304 42.6835 19.5586C44.1689 18.5083 45.4863 17.5864 45.6111 17.5097C45.7872 17.4013 45.8379 18.5085 45.8379 22.4689V27.5678L45.0475 27.7795C42.4418 28.4775 40.1096 30.7276 39.487 33.1439L39.2494 34.0666H27.6451H16.0408V31.7757C16.0408 29.7386 15.998 29.4307 15.6547 28.9966C14.9847 28.1492 14.4146 28.3187 11.8817 30.1186C10.6354 31.004 9.34351 31.9311 9.01053 32.1785L8.40528 32.6283V27.5328V22.437L9.38299 22.1232C10.8071 21.6659 11.7327 21.0773 12.8104 19.9438C13.8442 18.8563 14.3915 17.9279 14.7249 16.6962L14.9377 15.9099H26.5702H38.2024V18.2771ZM25.2593 17.2829C22.9299 17.858 20.9022 19.4819 19.9284 21.552C17.6632 26.3678 20.5046 31.8231 25.7818 32.7904C30.4806 33.6518 35.032 29.8129 35.032 24.9882C35.032 19.9375 30.1376 16.0785 25.2593 17.2829ZM29.1651 20.0644C30.9693 20.8144 32.4292 23.0166 32.4292 24.9882C32.4292 26.9447 30.9701 29.1617 29.1975 29.8985C25.2946 31.5208 21.0417 28.1284 21.822 24.0156C22.4442 20.7355 26.077 18.7809 29.1651 20.0644ZM45.8379 32.2139V34.0666H43.87C41.9157 34.0666 41.9028 34.0636 42.0289 33.6497C42.3499 32.5946 43.3148 31.4785 44.5343 30.7513C45.7522 30.0249 45.8379 30.121 45.8379 32.2139Z" fill="#F33829" />
                            </svg>
                        </div>
                        <div class="col">Flexible Terms & Payment Options</div>
                    </div>
                </div>
                <div>
                    <div class="row h-100 align-items-center justify-content-around">
                        <div class="col-auto">
                            <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M25 12V25H12V22.1739H22.1739V12H25Z" fill="#F33829" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M30 40.6383V34H32.9269V40.6383C32.9269 41.2073 33.4528 42.0945 35.2038 42.9219C36.8673 43.7079 39.268 44.234 42 44.234C44.732 44.234 47.1327 43.7079 48.7962 42.9219C50.5472 42.0945 51.0731 41.2073 51.0731 40.6383V34H54V40.6383C54 42.8192 52.1675 44.4213 50.1051 45.3959C47.9553 46.4117 45.0877 47 42 47C38.9123 47 36.0447 46.4117 33.8949 45.3959C31.8325 44.4213 30 42.8192 30 40.6383Z" fill="#F33829" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M30 47.6383V41H32.9269V47.6383C32.9269 48.2073 33.4528 49.0945 35.2038 49.9219C36.8673 50.7079 39.268 51.234 42 51.234C44.732 51.234 47.1327 50.7079 48.7962 49.9219C50.5472 49.0945 51.0731 48.2073 51.0731 47.6383V41H54V47.6383C54 49.8192 52.1675 51.4213 50.1051 52.3959C47.9553 53.4117 45.0877 54 42 54C38.9123 54 36.0447 53.4117 33.8949 52.3959C31.8325 51.4213 30 49.8192 30 47.6383Z" fill="#F33829" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M35.204 31.1669C33.4528 32.0123 32.9269 32.9189 32.9269 33.5C32.9269 34.0811 33.4528 34.9877 35.204 35.8331C36.8676 36.6363 39.2683 37.1739 42 37.1739C44.7317 37.1739 47.1324 36.6363 48.796 35.8331C50.5472 34.9877 51.0731 34.0811 51.0731 33.5C51.0731 32.9189 50.5472 32.0123 48.796 31.1669C47.1324 30.3637 44.7317 29.8261 42 29.8261C39.2683 29.8261 36.8676 30.3637 35.204 31.1669ZM33.8951 28.6391C36.0449 27.6012 38.9125 27 42 27C45.0875 27 47.9551 27.6012 50.1049 28.6391C52.1673 29.6348 54 31.2717 54 33.5C54 35.7283 52.1673 37.3652 50.1049 38.3609C47.9551 39.3988 45.0875 40 42 40C38.9125 40 36.0449 39.3988 33.8951 38.3609C31.8327 37.3652 30 35.7283 30 33.5C30 31.2717 31.8327 29.6348 33.8951 28.6391Z" fill="#F33829" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.4807 2.83137C12.0746 2.83137 2.82904 12.0845 2.82904 23.5C2.82904 34.9155 12.0746 44.1686 23.4807 44.1686C24.0146 44.1686 24.5459 44.148 25.0712 44.1081L26.4817 44.0012L26.6954 46.8245L25.285 46.9314C24.69 46.9765 24.0874 47 23.4807 47C10.5122 47 0 36.4792 0 23.5C0 10.5208 10.5122 0 23.4807 0C35.8412 0 45.9715 9.55906 46.8928 21.6939L47 23.1056L44.1791 23.3201L44.0719 21.9085C43.2619 11.2388 34.3508 2.83137 23.4807 2.83137Z" fill="#F33829" />
                            </svg>
                        </div>
                        <div class="col">Quick Decisions &amp; Funding</div>
                    </div>
                </div>
                <div>
                    <div class="row h-100 align-items-center justify-content-around">
                        <div class="col-auto">
                            <svg width="40" height="57" viewBox="0 0 40 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6894 0.722168L19.6953 2.69658L19.701 0.722168C22.8512 0.731298 25.9218 1.71554 28.4937 3.54052C31.0656 5.3655 33.0133 7.94228 34.071 10.9191L30.3631 12.245C29.5774 10.034 28.1307 8.12007 26.2205 6.76456C24.3118 5.41016 22.0332 4.6792 19.6954 4.67123C16.6971 4.68173 13.8245 5.88124 11.7043 8.00824C9.58338 10.1359 8.3876 13.0189 8.3779 16.0278V19.9992C11.6535 17.6564 15.6657 16.2777 20 16.2777C31.0457 16.2777 40 25.232 40 36.2777C40 47.3234 31.0457 56.2777 20 56.2777C8.9543 56.2777 0 47.3234 0 36.2777C0 31.5166 1.66368 27.144 4.44141 23.7096V16.0247L4.44141 16.0189C4.45348 11.9656 6.06384 8.0819 8.92079 5.21584C11.7777 2.34977 15.6491 0.734274 19.6894 0.722168ZM3.87097 36.2777C3.87097 27.3699 11.0922 20.1487 20 20.1487C28.9078 20.1487 36.129 27.3699 36.129 36.2777C36.129 45.1855 28.9078 52.4067 20 52.4067C11.0922 52.4067 3.87097 45.1855 3.87097 36.2777ZM21.481 41.9571V45.9074H17.7773V41.9584C14.7881 41.1462 12.5898 38.4133 12.5898 35.1669C12.5898 31.2805 15.7404 28.1299 19.6269 28.1299C23.5133 28.1299 26.6639 31.2805 26.6639 35.1669C26.6639 38.4116 24.4679 41.1434 21.481 41.9571ZM16.4282 35.1669C16.4282 33.4004 17.8603 31.9683 19.6269 31.9683C21.3934 31.9683 22.8255 33.4004 22.8255 35.1669C22.8255 36.9335 21.3934 38.3656 19.6269 38.3656C17.8603 38.3656 16.4282 36.9335 16.4282 35.1669Z" fill="#F33829" />
                            </svg>
                        </div>
                        <div class="col">Fast Unsecured Business Loans</div>
                    </div>
                </div>
                <div>
                    <div class="row h-100 align-items-center justify-content-around">
                        <div class="col-auto">
                            <svg width="49" height="50" viewBox="0 0 49 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.2197 18.6955L16.1098 0L0 18.6955H10.349V50H18.615V47.175H13.189V15.8705H6.17478L16.1098 4.34085L26.0449 15.8705H19.0306V23.0133H21.8706V18.6955H32.2197Z" fill="#F33829" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0482 23.4262C24.8665 23.4262 22.2873 25.9917 22.2873 29.1565C22.2873 32.3213 24.8665 34.8869 28.0482 34.8869C31.2298 34.8869 33.809 32.3213 33.809 29.1565C33.809 25.9917 31.2298 23.4262 28.0482 23.4262ZM25.1273 29.1565C25.1273 27.5519 26.435 26.2511 28.0482 26.2511C29.6613 26.2511 30.969 27.5519 30.969 29.1565C30.969 30.7611 29.6613 32.0619 28.0482 32.0619C26.435 32.0619 25.1273 30.7611 25.1273 29.1565Z" fill="#F33829" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M37.4784 44.2696C37.4784 41.1048 40.0576 38.5392 43.2392 38.5392C46.4208 38.5392 49 41.1048 49 44.2696C49 47.4344 46.4208 49.9999 43.2392 49.9999C40.0576 49.9999 37.4784 47.4344 37.4784 44.2696ZM43.2392 41.3642C41.6261 41.3642 40.3184 42.665 40.3184 44.2696C40.3184 45.8742 41.6261 47.1749 43.2392 47.1749C44.8523 47.1749 46.16 45.8742 46.16 44.2696C46.16 42.665 44.8523 41.3642 43.2392 41.3642Z" fill="#F33829" />
                                <path d="M27.1823 49.4934L46.3197 25.6981L44.102 23.9333L24.9646 47.7286L27.1823 49.4934Z" fill="#F33829" />
                            </svg>
                        </div>
                        <div class="col">Competitive Variable Interest Rates</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="loan_types">
    <div class="container">
        <div class="fs-96 font-articulat-heavy text-capitalize ls-2 lh-1 pb-7">Types Of Business Loans<span class="text-quaternary">.</span></div>
        <div class="row">
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
</section>

<section class="our_commitment">
    <div class="container">
        <div class="row gx-xxl-7 align-items-center">
            <div class="col-md-6">
                <div class="fs-96 lh-3 ls-2 text-white font-articulat-heavy">More Options.<br>More <span class="text-secondary-light">Capital.</span></div>
                <div class="text-white fs-32 fw-800 ls-2 py-5">We got you coverd<span class="text-quaternary">.</span></div>
                <div class="fs-20 text-secondary-light">
                    Business loans are a valuable way to support various aspects of your organisation. From working capital to everyday expenses, a business loan has got you covered.
                </div>
            </div>
            <div class="col-md-6"><?= renderImg('ourcommitment.png', 'lib') ?></div>
        </div>
    </div>
</section>

<section class="about_us">
    <div class="container">
        <div class="fs-96 lh-3 ls-2 text-white font-articulat-heavy">How do I know what <br class="d-none d-xl-block">is right for me?</div>
        <div class="pt-4 pb-8 fs-20 text-light-grey">
            As a business owner you need to be on top of it all. If you’re not, then it's pretty much chaos. Finding the right loan can also be just that if you don’t know what you are looking for. Don’t disappear down the rabbit hole searching through endless financial product descriptions, interest rate offers and advertisements. The best way to find the right personal loan for you is to compare what is out in the market right now. Compare, Compare, Compare! Comparing your options will get you the best deal for your circumstances. You can also consider the below to give you a headstart when you start your search.
        </div>
        <div class="bg-white rounded-20 p-8">
            <div class="row justify-content-between gx-xxl-7">
                <div class="col-md-6">
                    <div class="fs-64 lh-1 text-capitalize fw-800">The Right <br class="d-none d-xl-block">interest rate<span class="text-quaternary">.</span></div>
                    <div class="pt-3 fs-20 text-dark-grey">
                        These days on the news all you hear about is interest rates rising. You can thank the Reserve Bank of Australia (RBA) for that. Interest rates play a vital role, as they dictate the amount you pay on a loan in any given year. When you are looking to get a business loan, be sure to be smart about it, don’t be a dummy and go with the first loan you see. Use LoanOptions to compare and find yourself (without any need to contact anyone else) the best loan for you! More Options. More You.
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fs-64 lh-1 text-capitalize fw-800 ls-2">More Return (ROI)<span class="text-quaternary">.</span></div>
                    <div class="pt-3 fs-20 text-dark-grey">
                        Cashflow is King! If you have a proper financing solution in place, you can see your business grow and generate additional (ROI). The saying you have to spend money to make money rings true. The money spent on marketing or other growth opportunities could lead to additional revenue that offsets any interest paid. It allows for more rapid expansion when cashflow would otherwise not allow it. There are many options these days when it comes to structuring your finance, including Overdrafts, lines of credit, working capital loans and invoice/debtor financing. Talk to our Customer Service professionals at LoanOptions today!
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="loan_security">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-7">
                <div class="fs-96 lh-3 ls-2 text-white font-articulat-heavy">To secure, or not secure your loan?</div>
            </div>
            <div class="col-auto"><div class="animated_text">That is the<br>question</div></div>
        </div>
        <div class="pt-4 pb-8 fs-20 text-light-grey">
        We have said it before, and we’ll say it again, not every loan is the same! When you are applying for a loan it can be either an unsecured or secured loan. 
Finding the right loan can be confusing and to make it easier we’ve defined the below.
        </div>
    </div>
</section>

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