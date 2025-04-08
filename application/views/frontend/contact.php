<!-- header start  -->
<?php $this->load->view('layout/header'); ?>
<!-- end  -->



<div id="contactSection">
    <div class="hero_section d-flex align-items-center justify-content-center mb-5">
        <h1 class="scrollTrigger p-3 text-center">Contact Us</h1>
    </div>

    <div class="contact_info container p-3 mb-5 pt-5">
        <div class="heading text-center mb-3">
            <h2 class="scrollTrigger">Find the <span>Perfect Solution</span> for Your Business</h2>
            <p class="scrollTrigger">We have world-class, flexible support via live chat, email, and phone. We guarantee that you’ll be able to have any issue resolved within 24 hours.</p>
        </div>

        <div class="body d-flex flex-wrap justify-content-center align-items-start col-12">
            <div class="scrollTrigger box d-flex flex-column align-items-center justify-content-center text-center gap-1 col-12 col-sm-6 col-md-6 col-lg-3 p-2">
                <div class="content d-flex flex-column align-items-center justify-content-center">
                    <img src="<?php echo asset_url() ?>images/contact/phone.svg" alt="image">
                    <h2 class="mt-2 mb-0">Phone Number</h2>
                    <a class="m-0" href="tel:+91-8657554091">+91 8657554091</a>
                </div>
            </div>
            <div class="scrollTrigger box d-flex flex-column align-items-center justify-content-center text-center gap-1 col-12 col-sm-6 col-md-6 col-lg-3 p-2">
                <div class="content d-flex flex-column align-items-center justify-content-center">
                    <img src="<?php echo asset_url() ?>images/contact/email.svg" alt="image">
                    <h2 class="mt-2 mb-0">Email Address</h2>
                    <a href="mailto:connect@crezvatic.com">connect@crezvatic.com</a>
                </div>
            </div>
            <div class="scrollTrigger box d-flex flex-column align-items-center justify-content-center text-center gap-1 col-12 col-sm-12 col-md-12 col-lg-6 p-2">
                <div class="content d-flex flex-column align-items-center justify-content-center">
                    <img src="<?php echo asset_url() ?>images/contact/location.svg" alt="image">
                    <h2 class="mt-2 mb-0">Office Address</h2>
                    <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30144.969779250998!2d72.954922!3d19.189907000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe51ccf4213ab2fff!2sCrezvatic!5e0!3m2!1sen!2sin!4v1662525234817!5m2!1sen!2sin"><p class="m-0">907, Opal Square IT Park, C-2, Padwal Nagar Wagle Estate, Shri hanuman Marg, MIDC, Thane West, Thane, Maharashtra 400604</p></a>
                </div>
            </div>
        </div>


    </div>

    <div class="get_in_touch mb-5 pt-5">
        <div class="heading text-center mb-3">
            <h2 class="scrollTrigger">Get In <span>Touch</span></h2>
            <p class="scrollTrigger">Lets Make Your Dream Of Becoming a Top Brand into Reality With Proven Strategies & Realistic Approach</p>
        </div>
        <div class="body d-flex flex-wrap align-items-start justify-content-center">
            <div class="left col-12 col-sm-12 col-md-6 col-lg-6 p-3">
                <div class="content">
                    <form action="<?php echo base_url() ?>Contact/contactmail" method="POST">
                        <div class="scrollTrigger form-floating mb-3">
                            <input type="email" class="form-control" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="scrollTrigger form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Name">
                            <label for="floatingPassword">Name</label>
                        </div>
                        <div class="scrollTrigger form-floating mb-3">
                            <input type="number" class="form-control" placeholder="number">
                            <label for="floatingPassword">Phone Number</label>
                        </div>
                        <div class="scrollTrigger form-floating mb-3">
                            <input type="text" class="form-control" placeholder="website">
                            <label for="floatingPassword">Website</label>
                        </div>
                        <div class="scrollTrigger form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 120px"></textarea>
                            <label for="floatingTextarea">Message</label>
                        </div>
                        <div class="scrollTrigger form-floating mb-3">
                            <button type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="right col-12 col-sm-12 col-md-6 col-lg-6 p-3">
                <div class="scrollTrigger content">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30144.969779250998!2d72.954922!3d19.189907000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe51ccf4213ab2fff!2sCrezvatic!5e0!3m2!1sen!2sin!4v1662525234817!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- footer start -->
<?php $this->load->view('layout/footer'); ?>
<!-- end  -->