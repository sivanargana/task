<?php include("includes/header.php"); ?>
    <div class="tw-bg-[#F7F7FA] tw-min-h-screen tw-grid tw-grid-cols-12" data-aos="fade">
        <div class="tw-bg-slate-100 tw-col-span-12 xl:tw-col-span-7 tw-hidden md:tw-flex tw-flex-col tw-items-center tw-justify-center tw-min-w-0 tw-p-[20px] md:tw-p-[40px]">
            <img src="assets/images/forgot-password.svg"  class="tw-w-[500px] tw-max-w-full" data-aos="zoom-out">
        </div>
        <div class="tw-bg-white tw-col-span-12 xl:tw-col-span-5 tw-min-w-0 tw-flex tw-flex-col tw-justify-center tw-py-[40px] tw-px-[20px] md:tw-p-[40px]">
            <div class="md:tw-w-[450px] tw-max-w-full tw-mx-auto">
                <img src="assets/images/logo.svg" class="tw-h-[30px] tw-max-w-full tw-mb-[40px] md:tw-mb-[60px]" data-aos="fade-up" />
                <div class="tw-text-[30px] tw-font-bold tw-mb-[3px]" data-aos="fade-up" data-aos-delay="50">Forgot Password?</div>
                <div class="tw-text-[14px] tw-font-normal tw-text-gray-400" data-aos="fade-up" data-aos-delay="100">Lost your password? Please enter your email address. You will receive a link to create a new password via email.</div>
                <div class="tw-grid tw-grid-cols-12 tw-gap-[10px] tw-my-[20px]">
                       <div class="tw-col-span-12 md:tw-col-span-12 floating-label" data-aos="fade-up" data-aos-delay="150">
                        <input type="email" class="form-control" id="email">
                        <label for="email">Email</label>
                      </div>
                </div>
                 <div class="tw-flex tw-flex-col tw-gap-[10px]"> 
                    <a href="login.php" class="btn btn-primary tw-w-full" data-aos="fade-up" data-aos-delay="200">Send Reset Link</a> 
                    <a href="login.php" class="btn btn-link tw-w-full" data-aos="fade-up" data-aos-delay="250"><i class="fa fa-angle-left tw-mr-[10px]"></i>Back to Sign In</a>
                 </div>
            </div>
        </div>
        </div>
    </div>
  <?php include("includes/footer.php"); ?>
