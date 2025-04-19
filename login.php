<?php include("includes/header.php"); ?>

    <div class="tw-bg-[#F7F7FA] tw-min-h-screen tw-grid tw-grid-cols-12" data-aos="fade">

        <div class="tw-bg-slate-100 tw-col-span-12 lg:tw-col-span-7 tw-hidden md:tw-flex tw-flex-col tw-items-center tw-justify-center tw-min-w-0 tw-p-[20px] md:tw-p-[40px]">
            <img src="assets/images/login.svg"  class="tw-w-[600px] tw-max-w-full" data-aos="zoom-out">
        </div>
        <div class="tw-bg-white tw-col-span-12 lg:tw-col-span-5 tw-min-w-0 tw-flex tw-flex-col tw-justify-center tw-py-[40px] tw-px-[20px] md:tw-p-[40px]">

            <div class="md:tw-w-[450px] tw-max-w-full tw-mx-auto">
                <img src="assets/images/logo.svg" class="tw-h-[30px] tw-max-w-full tw-mb-[20px] md:tw-mb-[60px]" data-aos="fade-up"/>
                <div class="tw-text-[30px] tw-font-bold tw-mb-[3px]" data-aos="fade-up" data-aos-delay="50">Welcome to Back! 👋</div>
                <div class="tw-text-[14px] tw-font-normal tw-mb-[20px] tw-text-gray-400" data-aos="fade-up" data-aos-delay="100">Please sign in to your account and start the adventure</div>
                <div class="floating-label tw-mb-[10px]" data-aos="fade-up" data-aos-delay="150">
                    <input type="email" class="form-control" id="username">
                    <label for="username">Username</label>
                  </div>
                  <div class="floating-label tw-mb-[20px]" data-aos="fade-up" data-aos-delay="200">
                    <input type="password" class="form-control" id="password">
                    <label for="password">Password</label>
                  </div>
                 <div class="tw-flex tw-flex-col tw-gap-[10px]">
                    <a href="forgot-password.php" class="btn btn-link tw-w-full" data-aos="fade-up" data-aos-delay="250">Forgot Your Password?</a>
                    <a  data-bs-toggle="modal" data-bs-target="#otpmodal" class="btn btn-primary tw-w-full" data-aos="fade-up" data-aos-delay="300">Sign In</a>
                    <a href="register.php" class="btn btn-link tw-w-full" data-aos="fade-up" data-aos-delay="350"><span class="tw-text-gray-500" >New on our platform?</span> Sign Up</a>
                 </div>
            </div>

        </div>
        </div>
       
      
    </div>
  <?php include("includes/footer.php"); ?>


 
 
<div class="modal fade" id="otpmodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Verify Account</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <p class="tw-text-center">Enter 4 digit OTP sent to <b>+91 9xxxxxxx75</b></p>

         <div class="tw-flex tw-gap-[10px] tw-justify-center tw-mb-[1rem]">
         <input type="text" class="form-control tw-w-[40px]">
         <input type="text" class="form-control tw-w-[40px]">
         <input type="text" class="form-control tw-w-[40px]">
         <input type="text" class="form-control tw-w-[40px]">
         </div>

         <div class="tw-flex tw-justify-center tw-mb-[1rem]">
         <a href="dashboard.php" class="btn btn-primary">Verify and Proceed</a>
         <!-- <button type="button" class="btn btn-primary">Verify and Proceed</button> -->
         </div>

         <p class="tw-text-center">Did not receive the OTP? <a class="tw-font-bold">Resend</a></p>
         <p class="tw-text-center">Resend in <a class="tw-text-primary">5 seconds</a></p>
      </div>
    
    </div>
  </div>
</div>
