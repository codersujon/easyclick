<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
<!-- tailwind custom configuration -->
<script type="tailwind-config">
    {
        theme: {
            extend: {
            colors: {
                gray: colors.blueGray,
                pink: colors.fuchsia,  
            }
            }
        }
    }
</script>

<section class="flex flex-col justify-center antialiased bg-gray-200 text-gray-600 min-h-screen p-4">
    <div class="h-full">
        <!-- card -->
        <div class="max-w-[556px] mx-auto">
            <div class="bg-white shadow-lg rounded-lg mt-9 pt-6 pb-3">
                <!-- card header -->
                <header class="text-center px-5 pb-5 flex flex-col justify-center items-center">
                    <!-- avater -->
                    <img src="https://codexlabbd.com/logo.png" class="logo text-center w-2/3 h-2/3 mb-2" alt="Logo" />
                    <!-- card name -->
                    <h3 class="text-xl font-bold mb-1 text-blue-700">CodexlabBD System</h3>
                </header>
                <hr>
                <!-- content start -->
                <div class="content px-8 pb-6">
                    <?php
                            
                            $passed = "";
                            $ltext = "";

                            if (version_compare(PHP_VERSION, '8.2') >= 0) {
                                $ltext .= '<i class="fa-solid fa-check text-green-600"></i> Your PHP Version is: ' . PHP_VERSION . '<br/>';
                                $passed .= '1';
                            }  else {
                                $ltext .= '<i class="fa-solid fa-xmark text-red-600"></i> HasnaGlow needs at least PHP version  8.2, Your PHP Version is: ' . PHP_VERSION . '<br/>';
                                $passed .= '0';
                            }

                            if (extension_loaded('PDO')) {
                                $ltext .= '<i class="fa-solid fa-check  text-green-600"></i> PDO is installed on your server.' . '<br/>';
                                $passed .= '1';
                            } else {
                                $ltext = '<i class="fa-solid fa-xmark text-red-600"></i> PDO is not installed on your server.' . '<br/>';
                                $passed .= '0';
                            }
            
                            if (extension_loaded('pdo_mysql')) {
                                $ltext .= '<i class="fa-solid fa-check text-green-600"></i> PDO MySQL driver is enabled on your server.' . '<br/>';
                                $passed .= '1';
                            } else {
                                $ltext .= '<i class="fa-solid fa-xmark text-red-600"></i> PDO MySQL driver is not enabled on your server.' . '<br/>';
                                $passed .= '0';
                            }
            
                            if (extension_loaded('curl')) {
                                $ltext .= '<i class="fa-solid fa-check text-green-600"></i> php-curl extension is enabled on your server.' . '<br/>';
                                $passed .= '1';
                            } else {
                                $ltext .= '<i class="fa-solid fa-xmark text-red-600"></i> php-curl extension is not enabled on your server.' . '<br/>';
                                $passed .= '0';
                            }
                        ?>
                    <!-- check the requirments is true or false -->
                    <?php if($passed == '1111'): ?>

                    <br>
                    <?php echo $ltext; ?>
                    <br />

                    <h4 class="text-xl mb-6 text-green-600">Great! System Test Completed. You can run HasnaGlow on your
                        server. Click Continue For Next Step.</h4>
                    <a href="step3.php"
                        class="font-semibold text-sm items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow transition duration-150 ease-in-out w-full bg-blue-600 hover:bg-blue-700 text-white focus:outline-none focus-visible:ring-2 border-l">Continue</a>

                    <?php else: ?>

                    <br />
                    <?php echo $ltext; ?>
                    <br />

                    <h4 class="text-xl mb-6 text-red-600">
                        Sorry. The requirements of HasnaGlow is not available on your server. Please contact with us-
                        support@hasnaglow.com with this code- <?php echo $passed; ?> Or contact with your server
                        administrator.
                    </h4>
                    <a href="#"
                        class="font-semibold text-sm items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow transition duration-150 ease-in-out w-full bg-red-500 hover:bg-red-600 text-white focus:outline-none focus-visible:ring-2 border-l">Correct
                        The Problem To Continue</a>

                    <?php endif ?>
                </div>
                <hr>
                <!-- footer -->
                <div class="text-center py-4">
                    <p>Copyright &copy; <a href="https://codexlabbd.com/" class="text-blue-600 border-l font-bold"
                            target="_blank">CodexlabBD</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"
    integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>