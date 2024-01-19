<?php
require_once ("../models/connectDb.php");
class instructionModel
{
     function getGuideDb($model_id)
     {
         global $conn;
         $sql= "SELECT model_id, step_number, img_url, description_guide FROM origami_guide WHERE model_id=$model_id";
         $result = mysqli_query($conn,$sql);


         if (!$result) {
             die("Query SQL invalid: " . mysqli_error($conn));
         }

         $items = [];
         while ($row = mysqli_fetch_assoc($result)) {
             $items[] = $row;
         }

         return $items;

     }

}


?>