
    <?php
include "./model/HumanBeing.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $height = $_POST['height'] ?? '';
    $weight = $_POST['weight'] ?? '';

    // Validate height and weight
    
        $hb = new HumanBeing();
        $hb->setWeight($weight);
        $hb->setHeight($height);
        $hb->calculateBMI();

        echo "<div class='result'>";
        echo "Your BMI is: " . $hb->getBmi();
        echo "<br>";
        echo "Result: " . $hb->analyzeBmi();
        echo "</div>";
     
} 

?>
