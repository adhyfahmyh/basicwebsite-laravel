<?php

<<<<<<< HEAD
namespace MyLearning\Http\Controllers;
=======
namespace PLearning\Http\Controllers;
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
