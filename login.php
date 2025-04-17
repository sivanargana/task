<?php include("includes/header.php"); ?>

    <div class="tw-bg-[#F7F7FA] tw-min-h-screen tw-grid tw-grid-cols-12">

        <div class="tw-bg-orange-100 tw-col-span-12 lg:tw-col-span-7 tw-flex tw-flex-col tw-items-center tw-justify-center tw-min-w-0 tw-p-[20px] md:tw-p-[40px]">
            <img src="assets/images/login.svg"  class="tw-w-[600px] tw-max-w-full">
        </div>
        <div class="tw-bg-white tw-col-span-12 lg:tw-col-span-5 tw-min-w-0 tw-flex tw-flex-col tw-justify-center tw-p-[20px] md:tw-p-[40px]">

            <div class="md:tw-w-[450px] tw-max-w-full tw-mx-auto">
                <img src="assets/images/logo.svg" class="tw-h-[50px] tw-max-w-full tw-mb-[20px] md:tw-mb-[40px]" />
                <div class="tw-text-[30px] tw-font-bold tw-mb-[3px]">Welcome to Back! 👋</div>
                <div class="tw-text-[14px] tw-font-normal tw-mb-[20px] tw-text-gray-400">Please sign in to your account and start the adventure</div>
                <div class="form-floating tw-mb-[10px]">
                    <input type="email" class="form-control" id="username" placeholder="name@example.com">
                    <label for="username">Username</label>
                  </div>
                  <div class="form-floating tw-mb-[20px]">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                    <label for="password">Password</label>
                  </div>
                 <div class="tw-flex tw-flex-col tw-gap-[10px]">
                    <button type="button" class="btn btn-link tw-w-full">Forgot Your Password?</button>
                    <a href="dashboard.php" class="btn btn-lg btn-primary tw-w-full">Sign In</a>
                    <!-- <button type="button" class="btn btn-lg btn-primary tw-w-full">Sign In</button> -->
                    <a href="register.php" class="btn btn-link tw-w-full"><span class="tw-text-gray-500">New on our platform?</span> Sign In</a>
                 </div>
            </div>

        </div>
        </div>
       
      
    </div>
  <?php include("includes/footer.php"); ?>
