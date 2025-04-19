<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brainwiz</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/styles.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            prefix: 'tw-',
            corePlugins: {
                preflight: false,
            },
            theme: {
                extend:{
                    colors:{
                        "primary":"var(--primary)"
                    }
                }
            }
            
        }
    </script>
 
      <style type="text/tailwindcss">
    @layer components {
        .btn-icon{
            @apply tw-size-[40px] tw-rounded-full tw-p-0 tw-flex tw-items-center tw-justify-center tw-text-[20px];
        }
      .floating-label {
         @apply tw-relative;
         &.active{

            label{

                @apply tw-top-0 tw-text-[12px]

            }

         }
         label{
            @apply tw-text-[14px] tw-px-[2px] tw-transition-all tw-duration-300 tw-ease-out tw-absolute tw-top-1/2 -tw-translate-y-1/2 tw-left-[10px] tw-bg-white;

         }
      }
    }
  </style>
</head>
<body>