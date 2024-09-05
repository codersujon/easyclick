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
            <div class="bg-white shadow-lg rounded-lg mt-9 py-6">
                <!-- card header -->
                <header class="flex flex-col justify-center text-center items-center px-5">
                    <!-- avater -->
                    <img src="https://logos-world.net/wp-content/uploads/2020/04/Huawei-Logo.png"
                        class="logo text-center w-1/5  h-1/5 mb-2" alt="Logo" />
                    <!-- card name -->
                    <h3 class="text-xl font-bold text-indigo-600 ">HasnaGlow Auto Installer</h3>
                </header>
                <!-- card body -->
                <div class="px-8 py-1">
                    <form class="max-w-sm mx-auto space-y-3 shadow p-5" action="step4.php" method="POST">
                        <fieldset>

                            <!-- purchase code -->
                            <div class="mb-5">
                                <label for="purchasecode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Purchase Code</label>
                                <input type="text" id="purchasecode" name="purchasecode"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
                            </div>

                            <!-- Database Host -->
                            <div class="mb-5 grid grid-cols-2">
                                <label for="dbhost"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Database Host</label>
                                <input type="text" id="dbhost" name="dbhost"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
                            </div>

                            <!-- Database Name -->
                            <div class="mb-5 grid grid-cols-2">
                                <label for="dbname"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Database Name</label>
                                <input type="text" id="dbname" name="dbname"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
                            </div>

                            <!-- Database Username -->
                            <div class="mb-5 grid grid-cols-2">
                                <label for="dbuser"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Database Username</label>
                                <input type="text" id="dbuser" name="dbuser"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
                            </div>

                             <!-- Database Password -->
                             <div class="mb-5 grid grid-cols-2">
                                <label for="dbpass"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Database Password</label>
                                <input type="password" id="dbpass" name="dbpass"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
                            </div>
                            <!-- Submit -->
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Submit
                            </button>
                        </fieldset>
                    </form>
                </div>
                <!-- card footer -->
                <hr>
                <div class="text-center pt-5">
                    <p>Copyright &copy; HasnaGlow. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</section>
