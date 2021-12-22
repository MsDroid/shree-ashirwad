<?php include 'includes/header.php'; ?>

        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Contact</h2>
                    <ul>
                        <li>
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
            <div class="shape shape-1">
                <img src="assets/images/page-title-shape-1.png" alt="Image">
            </div>
            <div class="shape shape-2">
                <img src="assets/images/page-title-shape-2.png" alt="Image">
            </div>
        </div>


        <div class="contact-info-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info">
                            <i class="ri-map-pin-fill"></i>
                            <div class="count-title" style="font-size: 16px;">
                                <p>Anandpui Chowk, Vidyanagar</p>
                                <p>Road, Harmu, Ranchi(JH)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info">
                            <i class="ri-phone-fill"></i>
                            <div class="count-title">
                                <a style="font-size: 16px" href="tel:+1-(514)-312-5678">+91 8409531615</a>
                                <a style="font-size: 16px" href="tel:+1-(514)-312-6677">+91 9835565233</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="single-contact-info">
                            <i class="ri-mail-fill"></i>
                            <div class="count-title">
                                <a href=""><span class="__cf_email__" data-cfemail="" style="font-size: 16px;">shreeashirwadpackers@gmail.com</span></a>
                                <a href=""><span class="__cf_email__" data-cfemail="" style="font-size: 16px">shreeashirwadpackers@gmail.com</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- <div class="map-area pb-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51502.423422968604!2d-115.24877995231783!3d36.21758989848515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8eaf574293f1b%3A0x8e720e5b03149745!2sLas%20Vegas%2C%20NV%2089108%2C%20USA!5e0!3m2!1sen!2sbd!4v1612342385496!5m2!1sen!2sbd"></iframe>
        </div>
 -->

        <section class="main-contact-area pb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Write us a message</h2>
                </div>
                <form id="contactForm">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>Your name</label>
                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>Your email</label>
                                <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>Your phone</label>
                                <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Your message</label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-12 col-md-12">
                            <div class="form-group checkboxs">
                                <input type="checkbox" id="chb2">
                                <p>
                                    Accept <a href="terms-conditions.html">Terms &amp; Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
                                </p>
                            </div>
                        </div> -->
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">
                                <span>
                                    Send message
                                    <i class="ri-arrow-right-circle-line"></i>
                                </span>
                            </button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

<?php include 'includes/footer.php'; ?>