

<?php
    
if($_POST['prenom'] === ""){
    header("location:./contact.php?status=not_ok");
}

        if (isset($_POST['prenom']) && isset($_POST['email'])) {
            $prenom = $_POST['prenom']; 
            $email = $_POST['email'];
            echo "<p>" . $prenom . "<p>";
            echo "<p>" . $email . "<p>";
        }
?>
        
