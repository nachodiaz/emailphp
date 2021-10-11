 <?php 

    if(isset($_POST['enviar'])){
        if(!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['email']) && !empty($_POST['msg'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $asunto = $_POST['asunto'];
            $msg = $_POST['msg'];

            $header = "form : noreply@vocestoons.cl" . "\r\n";
            $header .= "Reply-To: ignaciosergiodiaz@gmail.com " . "\r\n";
            $header .= "X-Mailer: PHP/" . phpversion(); 
            mail($email,$asunto,$msg,$header);

            if($email){
                echo "<h2>¡Mail enviado de forma exitosa!<h2>";
            }
        };
    };

 ?>