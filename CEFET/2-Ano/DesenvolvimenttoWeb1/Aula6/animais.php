<?php
$especies = array(
    "MA" => array(
        "Loxodonta africana", 
        "Panthera leo", 
        "Equus ferus caballus", 
        "Canis lupus familiaris"
    ),
    "BA" => array(
        "Escherichia coli", 
        "Lactobacillus acidophilus", 
        "Staphylococcus aureus", 
        "Bacillus subtilis"
    ),
    "MAR" => array(
        "Macropus rufus", 
        "Phascolarctos cinereus", 
        "Sarcophilus harrisii", 
        "Didelphis virginiana"
    ),
    "RE" => array(
        "Python bivittatus", 
        "Alligator mississippiensis", 
        "Varanus komodoensis", 
        "Chelonia mydas"
    )
);
if(!(empty($_POST["classe"]))){
  echo json_encode($especies[$_POST["classe"]]);
}

?>
