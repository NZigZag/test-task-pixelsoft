<?php

namespace App\Http\Controllers\Admin;

class AdminController extends BaseController
{
    /**
     * Admin panel home page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.main');
    }
}
