<?php



/**
 * Description of DevManager
 *
 * @author Romaric
 */
class DevManager extends HirringManager {
    public function makeIntervier() 
    {
        return new Developper();
    }

}

$dev = new DevManager();

echo $dev->takeInterviewer();
