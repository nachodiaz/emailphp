 <?php 

    if(isset($_POST['enviar'])){
        if(!empty($_POST['name']) && !empty($_POST['asunto'])  && !empty($_POST['msg']) && !empty($_POST['email'])) {
            $name = $_POST['name']; 
            $asunto = $_POST['asunto'];
            $msg = $_POST['msg'];
            $email = $_POST['email'];
            $header = "From: noreply@example.com" . "\r\n";
            $header .= "Reply-To: ignaciosergiodiaz@gmail.com " . "\r\n";
            $header .= "X-Mailer: PHP/" . phpversion(); 
            $mail =  mail($name, $email,$asunto,$msg,$header);
            if($mail){
                echo "<h2>¡Mail enviado de forma exitosa!<h2>";
            }
        }
    }

 ?>