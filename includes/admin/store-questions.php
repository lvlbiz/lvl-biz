<?php
require_once './includes/dbh.inc.php'; 
$category = $group = $question = "";
$category_err = $group_err = $question_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    $group = $_POST['group'];

    if (empty(trim($_POST["category"]))) {
        $category_err = "Please select category.";     
    } else {
        $category = (int)$_POST["category"];
    }
  
    if(empty($_POST["question"])){
        $question_err = "Please type your question.";    
    }else{
        $question = $_POST["question"];
    }

    if(empty($category_err) && empty($usertype_err)){
        $sql = "INSERT INTO alts_salesman_questions (`set_type`, `group`, `questions`)
        VALUES ($category, '$group', '$question')";
        if (mysqli_query($link, $sql)) {
            $_SESSION['category_add'] = 1;
            //header("location: add-category.php"); 
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
    }
}
?>