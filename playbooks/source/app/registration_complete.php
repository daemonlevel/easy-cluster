<style> <?php include 'css/signin.css'; ?> </style>
<style> <?php include 'css/bootstrap.min.css'; ?> </style>


<?php
$contact_name = $_POST['inputName'];
$color_choice = $_POST['inputColor'];
$pet_choice = $_POST['inputPetChoice'];
$contact_email = $_POST['inputEmail'];




echo '<div class="text-center jumbotron">';
echo '<h2 class="h3 mb-3 font-weight-normal">';
echo "<p>Thank you ".$contact_name ."!</p>";
echo "<p>An email will be sent to:</p>"."<p>".$contact_email."</p>"."<p>with more details!</p>";
echo "</h2>";
echo '<p class="mt-5 mb-3 text-muted">&copy; 2020</p>';
echo '</div>';
