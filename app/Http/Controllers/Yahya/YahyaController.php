<?php
namespace App\Http\Controllers\Yahya;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class YahyaController extends Controller
{
    public function __construct()
    {
        $this ->middleware('auth')->except('view3');
    }

    public function view(){
        return 'Sham M. Y. Qosa';
    }
    public function view2(){
            return 'Sham M. Y. Qosa2';
    }
    public function view3(){
            return 'Sham M. Y. Qosa3';
    }
    public function view4(){
            return 'Sham M. Y. Qosa4';
    }
}
