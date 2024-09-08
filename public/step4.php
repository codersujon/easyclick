<?php 

    if(isset($_POST['submit'])){
        $company_name = $_POST['cmpyName'];
        $purchase_code = $_POST['purchasecode'];
        $mobile = $_POST['mobile'];

        /* API Handle Start */

         /* API Handle End */

        if($purchase_code == "4h;Gw-ES&k>-6[?,b-dT/].-"){
            $files = ['./install/index.php', './install/step2.php', './install/step3.php'];
            array_map('unlink', $files);
            rmdir('install');
        }else{
            header("Location: ./install/step3.php?_error=Wrong Purchase Code!");
            exit;
        }
    }
?>


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
                 <header class="text-center px-5 pb-5 flex flex-col justify-center items-center">
                    <!-- avater -->
                    <img src="https://codexlabbd.com/logo.png" class="logo text-center w-2/3 h-2/3 mb-2" alt="Logo" />
                    <!-- card name -->
                    <h3 class="text-xl font-bold mb-1 text-blue-700">CodexlabBD Installer</h3>
                </header>
                <!-- card body -->
                <div class="px-8 py-1">
                    <div class="content pad-top-bot-50">
                        <p>
                            <h5><strong class="theme-color">Congratulations! <?php echo $company_name;?></strong>
                            You have successfully installed CodexlabBD Software!</h5><br>
                            Please Visite Site here - <strong><a href="<?php echo '../../'; ?>">Home</a></strong>
                        </p>
                    </div>
                </div>
                <!-- card footer -->
                <hr>
                <div class="text-center py-4">
                    <p>Copyright &copy; <a href="https://codexlabbd.com/" class="text-blue-600 border-l font-bold"
                            target="_blank">CodexlabBD</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        $.ajax({
            method: 'get',
            url: 'delete.php',
            success: function (response) {
                if (response == 1) {
                    alert('Please delete "install" folder from your project folder.');
                }
            }
        });
    });

</script>
