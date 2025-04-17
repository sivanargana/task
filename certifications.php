<?php include("includes/header.php"); ?>
<?php include("includes/admin-header.php"); ?>
<div class="tw-flex-auto tw-grid tw-grd-cols-1 md:tw-grid-cols-2 -tw-m-[20px md:-tw-m-[30px]">
    <div class="tw-flex tw-flex-col tw-border-[0px] tw-border-r tw-border-solid tw-border-[#DADADA]">
        <div class="tw-flex-none tw-p-[20px] tw-border-[0px] tw-border-b tw-border-solid tw-border-[#DADADA]">
            <nav aria-label="breadcrumb" class="tw-flex-none">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Certifications</li>
                </ol>
            </nav>
            <h3 class="tw-text-[28px] tw-font-bold tw-text-primary tw-m-0">Congratulations!</h3>
        </div>
        <div class="tw-flex-auto tw-flex tw-flex-col tw-items-center tw-justify-center tw-p-[20px]">
            <img src="assets/images/success.gif"
                class="tw-w-[500px] tw-max-w-full tw-mix-blend-multiply -tw-my-[50px] tw-relative tw-z-[1]" />
            <div class="tw-text-[20px] tw-font-normal tw-text-center">We know it was hard but you have
                successfully <br />completed xxx days challenge.</div>
        </div>
    </div>
    <div class="tw-flex tw-flex-col tw-p-[20px] tw-flex tw-flex-col tw-items-center tw-justify-center tw-gap-[30px]">
        <img src="assets/images/certificate.png" class="tw-w-[500px] tw-max-w-full" />
        <a class="btn btn-lg btn-primary" href="#"><i class="fa fa-download"></i> Download Your Cartificate</a>
    </div>
</div>
<?php include("includes/admin-footer.php"); ?>
<?php include("includes/footer.php"); ?>