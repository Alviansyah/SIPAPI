<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 20/11/2016
 * Time: 19:53
 */

namespace App\Http\ViewComposer;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserComposer
{
    public $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function compose(View $view) {
        $view->with('user', $this->user);
    }
}