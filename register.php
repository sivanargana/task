<?php include("includes/header.php"); ?>

    <div class="tw-bg-[#F7F7FA] tw-min-h-screen tw-grid tw-grid-cols-12">

        <div class="tw-bg-slate-100 tw-col-span-12 xl:tw-col-span-7 tw-hidden md:tw-flex tw-flex-col tw-items-center tw-justify-center tw-min-w-0 tw-p-[20px] md:tw-p-[40px]">
            <img src="assets/images/register.svg"  class="tw-w-[600px] tw-max-w-full">
        </div>
        <div class="tw-bg-white tw-col-span-12 xl:tw-col-span-5 tw-min-w-0 tw-flex tw-flex-col tw-justify-center tw-py-[40px] tw-px-[20px] md:tw-p-[40px]">

            <div class="md:tw-w-[450px] tw-max-w-full tw-mx-auto">
                <img src="assets/images/logo.svg" class="tw-h-[30px] tw-max-w-full tw-mb-[40px] md:tw-mb-[60px]" />
                <div class="tw-text-[30px] tw-font-bold tw-mb-[3px]">Sign Up</div>
                <div class="tw-text-[14px] tw-font-normal tw-text-gray-400">Please sign up to your account and start the adventure</div>
                <div class="tw-grid tw-grid-cols-12 tw-gap-[10px] tw-my-[20px]">
                    <div class="tw-col-span-12 md:tw-col-span-6 form-floating">
                        <input type="email" class="form-control" id="firstname" placeholder="">
                        <label for="firstname">First Name</label>
                      </div>
                    <div class="tw-col-span-12 md:tw-col-span-6 form-floating">
                        <input type="email" class="form-control" id="lastname" placeholder="">
                        <label for="lastname">Last Name</label>
                      </div>
                    <div class="tw-col-span-12 md:tw-col-span-6 form-floating">
                        <input type="email" class="form-control" id="email" placeholder="">
                        <label for="email">Email</label>
                      </div>
                    <div class="tw-col-span-12 md:tw-col-span-6 form-floating">
                        <input type="email" class="form-control" id="mobile" placeholder="">
                        <label for="mobile">Mobile</label>
                      </div>
                      <div class="tw-col-span-12 form-floating">
                        <select class="form-select" id="subject">
                            <option selected>Selected</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        <label for="subject">Subject</label>
                      </div>
                      <div class="tw-col-span-12 form-floating">
                        <input type="text" class="form-control" id="College" placeholder="">
                        <label for="College">College</label>
                      </div>
                </div>
                 
                 <div class="tw-flex tw-flex-col tw-gap-[10px]"> 
                    <a href="login.php" class="btn btn-lg btn-primary tw-w-full">Sign Up</a> 
                    <!-- <button tyoe="button" class="btn btn-lg btn-primary tw-w-full">Sign Up</button>  -->
                    <a href="login.php" class="btn btn-link tw-w-full"><span class="tw-text-gray-500">Already have an account?</span> Sign In</a>
                 </div>
            </div>

        </div>
        </div>
       
      
    </div>
  <?php include("includes/footer.php"); ?>
