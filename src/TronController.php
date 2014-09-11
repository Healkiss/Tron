<?php
class TronController extends BaseController
{
    public $datas;
    public $view;

    public function getDatas()
    {
        $this->datas = null;
        return $this->datas;
    }

    public function getView($datas)
    {
        ob_start();
        require_once($this->core->srcPath ."view.php");
        $this->view = ob_get_clean();
        return $this->view;
    }
}
?>