<?php 

    $purchase_code = $_POST['purchasecode'];
    $db_host = $_POST['dbhost'];
    $db_name = $_POST['dbname'];
    $db_user = $_POST['dbuser'];
    $db_password = $_POST['dbpass'];


    $url = 'https://salepropos.com/purchaseverify/';
    $post_string = 'purchasecode='.urlencode($purchase_code);
    

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $result = curl_exec($ch);
    $object = new \stdClass();
    $object = json_decode(strip_tags($result));
    curl_close($ch);

    if ($object->codecheck) {
       
        // Write in .env
       $path = "../../.env";

       if (!file_exists($path)) {
            header('location: step3.php?_error=.env file does not exist.');
            exit;
       } elseif (!is_readable($path)) {
            header('location: step3.php?_error=.env file is not readable.');
            exit;
       } elseif(!is_writable($path)) {
            header('location: step3.php?_error=.env file is not writable.');
            exit;
       } else{
            $pattern = array('/DB_HOST=.*/i', '/DB_DATABASE=.*/i', '/DB_USERNAME=.*/i', '/DB_PASSWORD=.*/i', '/USER_VERIFIED=.*/i');
            $replace = array('DB_HOST='.$db_host, 'DB_DATABASE='.$db_name, 'DB_USERNAME='.$db_user, 'DB_PASSWORD='.$db_password, 'USER_VERIFIED=1');
            file_put_contents($path, preg_replace($pattern, $replace, file_get_contents($path)));
       }

       //write in database
        try {
            $dbh = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbh->exec($object->dbdata);
        }
        catch(PDOException $e) {
            if ($e->getCode() == 2002) {
                header('location: step3.php?_error=Unable to Connect Database, Please make sure Host info is correct and try again !');
                exit;
            }
            elseif ($e->getCode() == 1045) {
                header('location: step3.php?_error=Unable to Connect Database, Please make sure database username and password is correct and try again !');
                exit;
            }
            elseif ($e->getCode() == 1049) {
                header('location: step3.php?_error=Unable to Connect Database, Please make sure database name is correct and try again !');
                exit;
            }
        }

    } else {
        header("Location: step3.php?_error=Wrong Purchase Code !");
        exit;
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
            <div class="bg-white shadow-lg rounded-lg mt-9 py-6">
                <!-- card header -->
                <header class="flex flex-col justify-center text-center items-center px-5">
                    <!-- avater -->
                    <img src="https://logos-world.net/wp-content/uploads/2020/04/Huawei-Logo.png"
                        class="logo text-center w-1/5  h-1/5 mb-2" alt="Logo" />
                    <!-- card name -->
                    <h3 class="text-xl font-bold text-blue-600 ">HasnaGlow Auto Installer</h3>
                </header>
                <!-- card body -->
                <div class="px-8 py-1">
                    <div class="content pad-top-bot-50">
                        <p>
                            <h5><strong class="theme-color">Congratulations!</strong>
                                You have successfully installed HasnaGlow!</h5><br>
                            Please Visite Site here - <strong><a href="<?php echo '../../'; ?>">MainSite</a></strong>
                        </p>
                        <strong>Note: </strong><i>If 'install' folder exists in your project folder, please delete it
                            ('install' folder)</i>.
                    </div>
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
