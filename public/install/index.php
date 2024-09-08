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
        <div class="max-w-[480px] mx-auto">
            <div class="bg-white shadow-lg rounded-lg mt-9 pt-6 pb-3">
                <!-- card header -->
                <header class="text-center px-5 pb-5 flex flex-col justify-center items-center">
                    <!-- avater -->
                    <img src="https://codexlabbd.com/logo.png" class="logo text-center w-2/3 h-2/3 mb-2" alt="Logo" />
                    <!-- card name -->
                    <h3 class="text-xl font-bold mb-1 text-blue-700">CodexlabBD Installer</h3>
                    <div class="text-sm font-medium text-gray-500">Please read the license agreement before
                        installation: <br>
                        <a href="https://codexlabbd.com/" class="text-blue-600" target="_blank">Read Agreement</a>
                    </div>
                </header>
                <!-- card body -->
                <div class="text-center px-8">
                    <form class="space-y-3">
                        <a href="step2.php"
                            class="font-semibold text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow transition duration-150 ease-in-out w-full bg-blue-600 hover:bg-blue-700 text-white focus:outline-none focus-visible:ring-2 border-l">Accept
                            and Continue</a>
                    </form>
                </div>
                <!-- card footer -->
                <div class="text-center py-3">
                    <p>If you neeed any help with installation, please contact <a href="mailto:support@codexlabbd.com"
                            class="text-blue-600"><strong>support@codexlabbd.com</strong></a></p>
                    <p><strong>$5 charge applicable</strong></p>
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