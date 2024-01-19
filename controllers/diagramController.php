<?php
require_once '../models/diagramModel.php';

class diagramController {
    public function displayItems($category) {
        $diagramController = new diagramModel();
        $items = $diagramController->getAllItems($category);

        foreach ($items as $item) {
            echo '
                      <div class="col-6 col-sm-3 mb-4" >
                        <form   style=" width: 210px ;height: 220px; border-radius: 5%; " action="../views/instruction.php" method="POST">
                            <input type="hidden" name="modelId" value="' . $item['model_id'] . '">
                            <button type="submit" name="idShowDetail" class="custom-button btn btn-outline-secondary">
                                <img   style="border-radius: 5px 5px 0 0;"    src="'. $item['url_img'] .'" alt="'. $item['origami_name'] . '" width="170" height="170" loading="lazy">
                                <h4 style="background: #a9a1a1;border-radius: 0 0 5px 5px">
                                     ' . $item['origami_name'] .'
                                </h4>
                            </button>
                        </form>
                      </div> 
                        
                ';
        }
    }
    public function displayItemsGallery($category)
    {
        $diagramController = new diagramModel();
        $items = $diagramController->getAllItems($category);

        foreach ($items as $item) {
            echo '
                        <div class="col-6 col-sm-3 mb-4  " >
                        <form  style=" width: 230px ;height: 213px; border-radius: 5%; " action="../views/instruction.php" method="POST">
                            <input type="hidden" name="modelId" value="' . $item['model_id'] . '">
                            <button type="submit" name="idShowDetail" class="custom-button btn btn-outline-secondary">
                                <img   style="border-radius: 5px 5px 5px 5px;"    src="'. $item['url_img'] .'" alt="'. $item['origami_name'] . '" width="190" height="190" loading="lazy">
                            </button>
                        </form>
                      </div>
                        
                ';
        }
    }
}
?>














