<?php
namespace CodeProject\Presenters;

use CodeProject\Transformers\PojectTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class ProjectPresenter extends FractalPresenter
{
    public function getTransformer()
    {
        return new PojectTransformer();
    }
}