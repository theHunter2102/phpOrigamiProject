<?php
require_once("../models/instructionModel.php");
global $conn;
class instructionController
{

    public function getGuide($modelId)
    {

            $guideModel = new instructionModel();
            $guideItems = $guideModel->getGuideDb($modelId);

            foreach ($guideItems as $item) {
                echo '          
                        <div class="col-12 col-sm-6 mb-4">  
                        <a href="../views/instruction.php" class="text-decoration-none">
                                    <img src="' . $item['img_url'] . '" class="mb-4 img-fluid" alt="Coffe Flavour" width="400" height="400" loading="lazy">
                                </a>
                                <p style="width: 75%;margin: 0 auto">'. $item['description_guide'].'</p>
                            </div>                      
                                                       
                    ';
            }
        }
}


?>
