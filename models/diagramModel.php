<?php
require_once("../models/connectDb.php");

class diagramModel {
    public static function getAllItems($category) {
        global $conn;

        $sql = "SELECT model_id, origami_name, url_img,category FROM origami_diagrams WHERE category='$category'";
        $result = mysqli_query($conn, $sql);

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
