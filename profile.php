<?php include("includes/header.php"); ?>
<?php include("includes/admin-header.php"); ?>
<nav aria-label="breadcrumb" class="tw-flex-none">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li> 
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
            <div class="tw-rounded-[10px] tw-overflow-hidden tw-shadow">
                <div class="tw-relative">
                    <img src="assets/images/profile.jpeg" class="tw-w-full tw-object-cover tw-aspect-[1/.3] md:tw-aspect-[1/0.15]" />
                <div class="tw-size-[80px] xl:tw-size-[100px] tw-border-[3px] tw-border-solid tw-border-white tw-absolute tw-left-[20px] tw-bottom-0 tw-translate-y-1/2 tw-bg-gray-300 tw-rounded-full tw-bg-cover tw-bg-center tw-bg-[url(https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)]">
                <button type="button" class="tw-absolute tw-right-[-5px] tw-bottom-[-5px] btn btn-sm btn-icon btn-dark tw-size-[30px] [&_i]:tw-text-[14px]"><i class="fa fa-pen"></i></button>
            </div>
                </div>
               
                <div class="tw-p-[20px] tw-pt-[50px] xl:tw-p-[20px] tw-bg-white">
                    <div class="tw-container tw-mx-auto tw-max-w-[600px]">
                    <div class="tw-text-[18px] tw-font-bold tw-mb-[5px]">Kushi Shroff</div>
                    <div class="tw-flex-col lg:tw-flex-row tw-flex tw-gap-[10px] md:tw-gap-[20px] [&_span]:tw-flex [&_span]:tw-gap-[10px] [&_span]:tw-items-center [&_span>i]:tw-text-gray-400">
                        <span><i class="fa fa-book-open fa-fw"></i>Shri Ramdeobaba University</span>
                        <span><i class="fa fa-calendar fa-fw"></i>Join 22 Aug 2024</span>
                    </div>
                    <hr class="tw-border-gray-400">
                    <div class="tw-grid tw-grid-cols-12 tw-gap-[20px] tw-my-[20px]">
                    <div class="tw-col-span-12 md:tw-col-span-6 floating-label">
                        <input type="email" class="form-control" id="firstname">
                        <label for="firstname">First Name</label>
                      </div>
                    <div class="tw-col-span-12 md:tw-col-span-6 floating-label">
                        <input type="email" class="form-control" id="lastname">
                        <label for="lastname">Last Name</label>
                      </div>
                    <div class="tw-col-span-12 md:tw-col-span-6 floating-label">
                        <input type="email" class="form-control" id="email">
                        <label for="email">Email</label>
                      </div>
                    <div class="tw-col-span-12 md:tw-col-span-6 floating-label">
                        <input type="email" class="form-control" id="mobile">
                        <label for="mobile">Mobile</label>
                      </div>
                      <div class="tw-col-span-12 floating-label">
                        <select class="form-select" id="subject">
                            <option selected>Select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        <label for="subject">Subject</label>
                      </div>
                      <div class="tw-col-span-12 floating-label">
                        <input type="text" class="form-control" id="College">
                        <label for="College">College</label>
                      </div>
                </div>
                <hr class="tw-border-gray-400">
                <div class="tw-flex tw-justify-end tw-gap-[10px]">
                <a href="#" class="btn btn-secondary">Cancel</a> 
                <a href="#" class="btn btn-primary">Save Details</a> 
                </div>
                    </div>
              
                   
                </div>
            </div>
            <?php include("includes/admin-footer.php"); ?>
  <?php include("includes/footer.php"); ?>
