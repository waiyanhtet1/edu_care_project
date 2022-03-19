<?php $page='contact'; include 'layout/header.php'; ?>

<!-- contact form  -->
<div class="container my-5 contact-us-page">
        <div class="form-infomation" style="
        text-align: center;">
            <h2 style="color: rgb(73, 89, 120);">Contact <span style="color: rgb(247,148,29);">Us</span></h2>
            <p style="color: rgb(51, 51, 51);">We are always ready for your children!</p>
        </div>
        <div class="contact-page flex-wrap">
            <div class="contact-1" style="
            text-align: center;">

            <div class="swiper mySwiper swiper-4">
                <div class="swiper-wrapper">
                <div class="swiper-slide ">
                    <img src="img/contact/contact2.svg" class="contactme-img" />
                </div>
                <div class="swiper-slide">
                    <img src="img/contact/contact3.svg" class="contactme-img" />
                </div>
                <div class="swiper-slide">
                    <img src="img/contact/contact4.svg" class="contactme-img" />
                </div>
                </div>
            </div>   
                <!-- <img src="img/contact/contact4.svg" alt="" class="contactme-img" data-aos="flip-up"> -->
                <p>You can manually send us email on <span style="color: rgb(0,113,188);">
                        example@gmail.com</span></p>
            </div>
            <div class="contact-2">
                <form class="row g-3 contact-form">
                    <div class="col-md-6 mt-2">
                        <label for="" class="form-label text-secondary">Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your Name">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="" class="form-label text-secondary">Phone Number</label>
                        <input type="number" class="form-control" placeholder="+95">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="" class="form-label text-secondary">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Your Email Address">
                    </div>
                    <div class="col-12 mt-2">
                        <label for="inputAddress" class="form-label text-secondary">Subject</label>
                        <input type="text" class="form-control" placeholder="Subject..">
                    </div>
                    <div class="col-12 mt-2">
                        <label for="" class="form-label text-secondary">Message</label>
                        <textarea name="" id="" cols="" rows="5" class="w-100 form-control"
                            placeholder="Enter your Message"></textarea>
                    </div>
                    <div class="col-12" style="margin-top: 20px;">
                        <button type="" class="contact-btn">Send Message</button>
                    </div>

                </form>
            </div>
        </div>
    </div>


<?php include 'layout/footer.php'; ?>