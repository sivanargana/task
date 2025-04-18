<?php include("includes/header.php"); ?>
<?php include("includes/admin-header.php"); ?>
 <nav aria-label="breadcrumb" class="tw-flex-none">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li> 
                    <li class="breadcrumb-item active" aria-current="page">Attendance</li>
                </ol>
            </nav>
            <div class="tw-flex-auto tw-grid tw-grd-cols-1 md:tw-grid-cols-2 tw-gap-[20px] md:tw-gap-[30px]">
                <div class="tw-flex tw-flex-col">
                   <div class="tw-shadow-md tw-bg-white tw-p-[20px] tw-rounded-[10px] tw-flex tw-flex-col tw-items-center tw-gap-[20px]">
                    <div class="tw-text-[30px] tw-font-bold tw-leading-tight">Show your <span class="tw-text-primary">QR code</span> to your college representative</div>
                    <div class="tw-shadow-md tw-bg-gray-100 tw-py-[20px] tw-px-[50px] tw-rounded-[10px] tw-flex tw-flex-col tw-items-center tw-justify-center tw-gap-[20px]">
                        <div class="tw-flex tw-flex-col tw-items-center tw-justify-center tw-gap-[5px]">
                            <div
                                class="tw-size-[40px] tw-bg-gray-300 tw-rounded-full tw-bg-cover tw-bg-center tw-bg-[url(https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)]">
                            </div>
                            <div class="tw-text-[20px] tw-font-bold">Kushi Shroff</div>
                        </div>
                        <img src="https://pngimg.com/uploads/qr_code/qr_code_PNG10.png" class="tw-w-[300px] tw-max-w-full tw-p-[10px] tw-bg-white tw-shadow tw-rounded-[5px]" />
                        <a class="btn btn-lg btn-primary" href="#"><i class="fa fa-download"></i> Download</a>
                    </div>
                    
                   </div>
                </div>
                <div class="tw-flex tw-flex-col tw-gap-[20px] md:tw-gap-[30px]">
                    <div class="tw-shadow-md tw-bg-white tw-p-[20px] tw-rounded-[10px]">
                       <div class="tw-flex tw-items-center tw-flex-gap-[20px] tw-pb-[10px] tw-justify-between tw-border-[0px] tw-border-b tw-border-solid tw-border-[#F1F1F2]">
                        <div class="tw-text-[25px] tw-font-semibold">Your CRT Attendance</div>
                        <button type="button" class="btn btn-light btn-icon !tw-bg-gray-200 !tw-size-[50px]"><i class="fa fa-user-group tw-text-primary"></i></button>
                       </div>
                        <div class="tw-text-[60px] tw-font-bold tw-text-primary">92%</div>
                        <div class="tw-text-base">Note: Daily Attendance report will be sent to college</div>
                    </div>
                    <div class="tw-shadow-md tw-bg-white tw-p-[20px] tw-rounded-[10px]">
                        <div class="tw-flex tw-items-center tw-flex-gap-[20px] tw-pb-[10px] tw-justify-between tw-border-[0px] tw-border-b tw-border-solid tw-border-[#F1F1F2]">
                            <div class="tw-text-[25px] tw-font-semibold">Your JAVA Attendance</div>
                            <button type="button" class="btn btn-light btn-icon !tw-bg-gray-200 !tw-size-[50px]"><i class="fa fa-user-group tw-text-primary"></i></button>
                           </div>
                        
                        <div class="tw-text-[60px] tw-font-bold tw-text-primary">88%</div>
                        <div class="tw-text-base">Note: Daily Attendance report will be sent to college

                        </div>
                    </div>
                </div>
            </div>
            <?php include("includes/admin-footer.php"); ?>
  <?php include("includes/footer.php"); ?>
