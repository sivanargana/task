<?php include("includes/header.php"); ?>
<?php include("includes/admin-header.php"); ?>
<?php include("includes/data.php"); ?>
<nav aria-label="breadcrumb" class="tw-flex-none">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item">Test Series</li>
        <li class="breadcrumb-item active" aria-current="page">Completed Tests</li>
    </ol>
</nav>
<div
    class="tw-grid tw-grid-cols-1 sm:tw-grid-cols-2 md:tw-grid-cols-2 lg:tw-grid-cols-3 xl:tw-grid-cols-3 2xl:tw-grid-cols-3 tw-gap-[20px] lg:tw-gap-[30px]">
    
    <?php foreach ($tests as $test) { ?>
    <div class="tw-bg-white tw-rounded-[10px] tw-p-[10px] tw-shadow tw-flex tw-flex-col tw-gap-[10px] tw-cursor-pointer tw-transition-all tw-duration-300 tw-ease-out hover:tw-scale-[1.05] hover:tw-shadow-lg">
        <img src="<?= $test['image'] ?>"
            class="tw-max-w-full tw-rounded-[10px] tw-border tw-border-solid tw-border-gray-300" />
        <div class="tw-flex tw-flex-col">
            <div class="tw-font-bold tw-text-[20px] tw-text-center"><?= $test['topic'] ?></div>
            <div class="tw-text-center tw-text-[16px] tw-text-gray-500"><?= $test['test_name'] ?></div>

            <div class="tw-flex tw-justify-center tw-my-[10px]">
                <div class="tw-flex tw-flex-col tw-px-[20px] tw-border-0 tw-border-solid tw-border-r tw-border-gray-300">
                    <div class="tw-font-bold tw-text-[18px] tw-text-center"><?= $test['no_of_questions'] ?></div>
                    <div class="tw-text-[14px] tw-text-gray-400 tw-text-center">Questions</div>

                </div>
                <div class="tw-flex tw-flex-col tw-px-[20px]">
                    <div class="tw-font-bold tw-text-[18px] tw-text-center"><?= $test['duration'] ?> Mins</div>
                    <div class="tw-text-[14px] tw-text-gray-400 tw-text-center">Duration</div>

                </div>
             
            </div>

 
        </div> 
    </div>
    <?php } ?>
    

</div>
<?php include("includes/admin-footer.php"); ?>
<?php include("includes/footer.php"); ?>