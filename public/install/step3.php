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
                <header class="text-center px-5 pb-1 flex flex-col justify-center items-center">
                    <!-- avater -->
                    <img src="https://codexlabbd.com/logo.png" class="logo text-center w-2/3 h-2/3 mb-2" alt="Logo" />
                    <!-- card name -->
                    <h3 class="text-xl font-bold mb-1 text-blue-700">CodexlabBD Installer</h3>
                     <!-- message -->
                     <?php  if(isset($_GET['_error'])): ?>
                            <div class="text-red-600 font-bold text-center text-xl"> <?php echo $error = $_GET['_error'];?> </div>
                     <?php endif; ?>
                </header>
                <!-- card body -->
                <div class="px-8 py-1">
                    <form class="max-w-sm mx-auto space-y-3 pt-0" action="../step4.php" method="POST">
                        <fieldset>
                                <!-- company name -->
                                <div class="mb-5">
                                    <label for="cmpyName"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company
                                        Name</label>
                                    <input type="text" id="cmpyName" name="cmpyName"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                        required placeholder="Enter company name"/>
                                </div>

                                <!-- mobile number -->
                                <div class="mb-5">
                                    <label for="mobile"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mobile
                                        Number</label>
                                    <input type="text" id="mobile" name="mobile"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                        required placeholder="Ex: 01680******" minlength="11" maxlength="11"/>
                                </div>

                                <!-- purchase code -->
                                <div class="mb-5">
                                    <label for="purchasecode"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Purchase
                                        Code</label>
                                    <input type="text" id="purchasecode" name="purchasecode"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                        required placeholder="Enter purchase code" minlength="20" maxlength="24"/>
                                </div>

                                <!-- Submit -->
                                <button type="submit" name="submit"
                                    class="text-white bg-blue-600 mb-2 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Submit
                                </button>
                                <?php  if(isset($_GET['_error'])): ?>
                                    <p>If you neeed any help with installation, please contact <a href="mailto:support@codexlabbd.com"
                                    class="text-blue-600"><strong>support@codexlabbd.com</strong></a></p>
                                <?php endif; ?>
                        </fieldset>
                    </form>
                </div>
                <!-- card footer -->
                <hr>
                <div class="text-center pt-2 pb-4">
                    <p>Copyright &copy; <a href="https://codexlabbd.com/" class="text-blue-600 border-l font-bold"
                            target="_blank">CodexlabBD</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</section>