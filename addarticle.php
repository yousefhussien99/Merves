<?php 
 $conn = mysqli_connect("localhost","root","","merves");
 $sql = "INSERT INTO articles (name,src,description) VALUES ('".$_POST['name']."','".$_POST['image']."','".$_POST['description']."')";
$result = mysqli_query($conn,$sql);
$emails = "SELECT email FROM emails";
$result = mysqli_query($conn,$emails);
$result2 = mysqli_fetch_all($result);
?>
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script>
    var emails = <?php echo json_encode($result2); ?>;
    var email = emails.map(function(item){
        return item[0];
    });
    
    function sendEmails() {
        if (email.length === 0) {
            window.location.href = "addarticle.html"; // Redirect when all emails are sent
            return;
        }

        if (email[0] === "") {
            email.shift(); // Remove empty emails
            sendEmails(); // Continue with the next email
            return;
        }

        emailjs.init("Kke-77fbXUsE0DFem");

        var templateParams = {
            sendname: "merves",
            to: email[0],
            subject: "new article added",
            replyto: "hh",
            message: "please check the new article in the website",
        };

        var service_id = "service_2lysrnj";
        var template_id = "template_qc44331";
        
        emailjs.send(service_id, template_id, templateParams)
            .then(function(response) {
                console.log('SUCCESS!', response.status, response.text);
                email.shift(); // Remove the email that has been sent
                sendEmails(); // Continue with the next email
            }, function(error) {
                console.log('FAILED...', error);
                email.shift(); // Remove the email that has failed
                sendEmails(); // Continue with the next email
            });
    }

    sendEmails(); // Start sending emails
</script>
