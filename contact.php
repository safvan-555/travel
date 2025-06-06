<?php include 'header.php'; ?>
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Contact Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.php">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<div class="space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Get In Touch</span>
            <h2 class="sec-title">Our Contact Information</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-xl-4 col-lg-6">
                <div class="about-contact-grid style2">
                    <div class="about-contact-icon">
                        <img src="assets/img/icon/location-dot2.svg" alt="" />
                    </div>
                    <div class="about-contact-details">
                        <h6 class="box-title">Our Address</h6>
                        <p class="about-contact-details-text">
                            2690 Hiltona Street Victoria
                        </p>
                        <p class="about-contact-details-text">Road, New York, Canada</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="about-contact-grid">
                    <div class="about-contact-icon">
                        <img src="assets/img/icon/call.svg" alt="" />
                    </div>
                    <div class="about-contact-details">
                        <h6 class="box-title">Phone Number</h6>
                        <p class="about-contact-details-text">
                            <a href="tel:01234567890">+01 234 567 890</a>
                        </p>
                        <p class="about-contact-details-text">
                            <a href="tel:01234567890">+09 876 543 210</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="about-contact-grid">
                    <div class="about-contact-icon">
                        <img src="assets/img/icon/mail.svg" alt="" />
                    </div>
                    <div class="about-contact-details">
                        <h6 class="box-title">Email Address</h6>
                        <p class="about-contact-details-text">
                            <a href="mailto:mailinfo00@tourm.com">mailinfo00@tourm.com</a>
                        </p>
                        <p class="about-contact-details-text">
                            <a href="mailto:support24@tourm.com">support24@tourm.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space-extra2-top space-extra2-bottom" data-bg-src="assets/img/bg/video_bg_1.jpg">
    <div class="container">
        <div class="row flex-row-reverse justify-content-center align-items-center">
            <div class="col-lg-6">
                <div class="video-box1">
                    <a href="https://www.youtube.com/watch?v=cQfIUPw72Dk" class="play-btn style2 popup-video"><i
                            class="fa-sharp fa-solid fa-play"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <form action="send_email.php" method="POST" class="contact-form style2 ajax-contact-form">
                        <h3 class="sec-title mb-30 text-capitalize">Book a tour</h3>
                        <div class="row">
                            <div class="col-12 form-group">
                                <input type="text" class="form-control" name="name" id="name3"
                                    placeholder="Your Name" />
                                <!-- <img src="assets/img/icon/user.svg" alt="" /> -->
                            </div>
                            <div class="col-12 form-group">
                                <input type="email" class="form-control" name="email" id="email3"
                                    placeholder="Your Mail" />
                                <!-- <img src="assets/img/icon/mail.svg" alt="" /> -->
                            </div>

                            <div class="col-12 form-group">
                                <input type="text" class="form-control" name="phone" id="phone3"
                                    placeholder="Your Phone" />
                                <!-- <img style="color:#6e7070" src="assets/img/icon/call.svg" alt="" /> -->
                            </div>

                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                    placeholder="Your Message"></textarea>
                                <!-- <img src="assets/img/icon/chat.svg" alt="" /> -->
                            </div>
                            <div class="form-btn col-12 mt-24">
                                <button type="submit" class="th-btn style3">
                                    Send message
                                    <img src="assets/img/icon/plane.svg" alt="" />
                                </button>
                            </div>
                        </div>
                        <p style="color:red" class="contact-form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="">
    <div class="container-fluid">
        <div class="contact-map style2">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuztheme!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
                allowfullscreen="" loading="lazy"></iframe>
            <div class="contact-icon">
                <img src="assets/img/icon/location-dot3.svg" alt="" />
            </div>
        </div>
    </div>
</div>

<script>
document.querySelector('.ajax-contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const form = this;
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalBtnText = submitBtn.innerHTML;
    submitBtn.innerHTML = 'Sending...';
    submitBtn.disabled = true;

    fetch(form.action, {
            method: 'POST',
            body: new FormData(form),
            headers: {
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            const messageEl = form.querySelector('.contact-form-messages');
            if (data.success) {
                messageEl.innerHTML = `<span class="text-success">${data.message}</span>`;
                form.reset();
            } else {
                messageEl.innerHTML = `<span class="text-danger">${data.message}</span>`;
            }
        })
        .catch(error => {

            form.querySelector('.contact-form-messages').innerHTML =
                `<span class="text-danger">An error occurred. Please try again.</span>`;
        })
        .finally(() => {
            submitBtn.innerHTML = originalBtnText;
            submitBtn.disabled = false;
        });
});
</script>
<?php include 'footer.php'; ?>