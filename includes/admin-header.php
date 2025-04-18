<div
        class="tw-bg-[#F7F7FA] md:tw-pl-[260px] tw-pt-[60px] tw-min-h-screen tw-flex tw-flex-col tw-transition-all tw-duration-300 tw-ease-out [&:has([data-layout='sidebar'].open)]:tw-pl-0">
        <div class="tw-fixed tw-flex tw-flex-col tw-z-[999] tw-left-0 tw-top-[60px] tw-bottom-0 tw-bg-white tw-w-[260px] tw-transition-all tw-duration-300 tw-ease-out 
    -tw-translate-x-full 
    [&.open]:-tw-translate-x-0
    [&.open]:tw-shadow-2xl
     md:-tw-translate-x-0 
    [&.open]:md:-tw-translate-x-full
    [&.open]:md:tw-shadow-none
    " data-layout="sidebar">
    <!-- <button type="button" class="btn btn-light btn-icon tw-size-[40px] tw-absolute tw-top-[5px] tw-right-[5px] tw-visible md:tw-invisible" data-layout="toggle"><i class="fa fa-close"></i></button> -->
            <div class="tw-flex-none tw-flex tw-items-center tw-gap-[10px] tw-p-[20px]">
                <div
                    class="tw-size-[40px] tw-bg-gray-300 tw-rounded-full tw-bg-cover tw-bg-center tw-bg-[url(https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)]">
                </div>
                <div class="tw-text-[18px] tw-font-bold">Kushi Shroff</div>
            </div>
            <div class="
       tw-overflow-y-auto
            tw-flex-auto
            tw-min-h-0
        [&_ul]:tw-list-none 
        [&_ul]:tw-p-0 
        [&_ul]:tw-m-0 
        [&_ul]:tw-flex 
        [&_ul]:tw-flex-col
        [&_ul>li>a]:tw-flex
        [&_ul>li>a]:tw-gap-[5px]
        [&_ul>li>a]:tw-text-black
        [&_ul>li>a]:tw-h-[50px]
        [&_ul>li>a]:tw-cursor-pointer
        [&_ul>li:hover>a]:tw-bg-gray-100
        [&_ul>li>a]:tw-relative
        [&_ul>li>a:before]:tw-content-['']
        [&_ul>li>a:before]:tw-absolute
        [&_ul>li>a:before]:tw-left-0
        [&_ul>li>a:before]:tw-top-0
        [&_ul>li>a:before]:tw-w-[4px]
        [&_ul>li>a:before]:tw-h-full
        [&_ul>li>a:before]:tw-bg-primary
        [&_ul>li>a:before]:tw-rounded-r-full
        [&_ul>li>a:before]:tw-hidden
        [&_ul>li>a]:tw-no-underline	
        [&_ul>li>a]:tw-items-center
        [&_ul>li>a]:tw-px-[20px]
        [&_ul>li>a]:!tw-text-[#6F6F6F]
        [&_ul>li>a>i]:tw-size-[24px]
        [&_ul>li>a>i]:tw-flex
        [&_ul>li>a>i]:tw-mr-[10px]
        [&_ul>li>a>i]:tw-items-center
        [&_ul>li>a>i]:tw-justify-center
        [&_ul>li>a>i]:tw-text-[18px]
        [&_ul>li>a>span]:tw-flex-auto
        [&_ul>li>a>span]:tw-truncate 
        [&_ul>li>a>div]:tw-bg-primary
        [&_ul>li>a>div]:tw-text-white
        [&_ul>li>a>div]:tw-text-[12px]
        [&_ul>li>a>div]:tw-px-[6px]
        [&_ul>li>a>div]:tw-rounded-full
       

        [&_ul>li>a[data-bs-toggle='collapse']:after]:tw-content-['\f077']
        [&_ul>li>a.collapsed[data-bs-toggle='collapse']:after]:tw-content-['\f078']
        [&_ul>li>a[data-bs-toggle='collapse']:after]:tw-font-bold
        [&_ul>li>a[data-bs-toggle='collapse']:after]:tw-font-['Font_Awesome_6_Free']
        [&_ul>li>ul]:tw-pl-[39px]
        [&_ul>li.active>a]:!tw-text-primary
        [&_ul>li.active>a:before]:!tw-block
        " data-menu="group">
        <ul>
            <li><a href="dashboard.php"><i class="fa fa-chart-simple"></i><span>Dashboard</span></a></li>
            <li><a href="attendance.php"><i class="fa fa-book-open-reader"></i><span>Attendance</span></a></li>
         
            <li><a data-bs-toggle="collapse" data-bs-target='[data-menu="l2"]' class="collapsed"><i
                        class="fa fa-window-restore"></i><span>Practice Tests</span> <div class="glare-effect">New</div></a>
                <ul data-menu="l2" class="collapse" data-bs-parent='[data-menu="group"]'>
                    <li><a href="practice-assigned-tests.php"><span>Assigned Tests</span></a></li>
                    <li><a href="practice-completed-tests.php"><span>Completed Tests</span></a></li>
                </ul>
            </li>
            <li><a data-bs-toggle="collapse" data-bs-target='[data-menu="l3"]' class="collapsed"><i
                        class="fa fa-rectangle-list"></i><span>Test Series</span> <div class="glare-effect">New</div></a>
                <ul data-menu="l3" class="collapse" data-bs-parent='[data-menu="group"]'>
                    <li><a href="series-assigned-tests.php"><span>Assigned Tests</span></a></li>
                    <li><a href="series-completed-tests.php"><span>Completed Tests</span></a></li>
                </ul>
            </li>
            <li><a href="daily-puzzles.php"><i class="fa fa-puzzle-piece"></i><span>Daily Puzzles</span></a></li>
            <li><a href="download-pdfs.php"><i class="fa fa-file-pdf"></i><span>Downloaded PDFs</span></a></li>
            <li><a href="coures.php"><i class="fa fa-book"></i><span>Courses</span></a></li>
            <li><a href="live-sessions.php"><i class="fa fa-wifi"></i><span>Live Sessions</span> <div class="glare-effect">New</div></a></li>
            <li><a href="profile.php"><i class="fa fa-user"></i><span>Profile</span></a></li>
            <li><a href="upload-question.php"><i class="fa fa-table-columns"></i><span>Upload Question</span></a></li>
            <li><a href="certifications.php"><i class="fa fa-award"></i><span>Certifications</span></a></li>
            <li><a onclick="logout()"><i class="fa fa-power-off"></i><span>Logout</span></a></li>
        </ul>
            </div>
        </div>
        <div
            class="tw-fixed tw-left-0 tw-top-0 tw-right-0 tw-h-[60px] tw-bg-white tw-flex tw-items-center tw-gap-[0px] tw-z-[999]">
            <div class="tw-flex-none tw-flex tw-items-center tw-gap-[10px] tw-px-[20px]">
                <button type="button" class="btn btn-dark btn-icon tw-size-[30px] [&_i]:tw-text-[16px]" data-layout="toggle"><i class="fa"></i></button>
                <img src="assets/images/logo.svg" class="tw-flex-col tw-max-w-full tw-h-[35px] tw-max-w-full" />
            </div>
           
            <div class="tw-flex-none tw-flex tw-gap-[10px] tw-items-center tw-ml-auto tw-px-[10px]">
                
                <button type="button" class="btn btn-light btn-icon"><i class="far fa-bell"></i></button>
                <div class="dropdown tw-flex tw-items-center tw-gap-[5px] tw-cursor-pointer">
                    <div class="tw-size-[40px] tw-bg-gray-300 tw-rounded-full tw-bg-cover tw-bg-center tw-bg-[url(https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)]"
                        data-bs-toggle="dropdown"></div>
                    <i class="fa fa-chevron-down tw-text-[12px] tw-text-gray-400" data-bs-toggle="dropdown"></i>
                    <ul class="dropdown-menu tw-shadow-2xl tw-border-gray-300 tw-w-[250px] tw-py-[10px] [&_.dropdown-item]:tw-flex [&_.dropdown-item]:tw-items-center [&_.dropdown-item]:tw-h-[45px]">
                        <li><a class="dropdown-item" href="profile.php"><i class="fa fa-user tw-text-[20px] tw-mr-[15px] tw-text-gray-400"></i>Profile</a></li>
                        <li><a class="dropdown-item" href="change-password.php"><i class="fa fa-cog tw-text-[20px] tw-mr-[15px] tw-text-gray-400"></i>Change Password</a></li>
                        <li><a class="dropdown-item" onclick="logout()"><i class="fa fa-power-off tw-text-[20px] tw-mr-[15px] tw-text-gray-400"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tw-flex-auto tw-flex tw-flex-col tw-border-[0px] tw-border-t tw-border-l tw-border-solid tw-border-[#F1F1F2] tw-p-[20px] md:tw-p-[30px]">