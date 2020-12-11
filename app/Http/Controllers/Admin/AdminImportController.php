<?php

namespace App\Http\Controllers\Admin;

use App\Services\ImportService;
use Illuminate\Http\Request;

class AdminImportController extends BaseController
{
    /**
     * @var ImportService
     */
    protected $importService;

    /**
     * AdminImportController constructor
     *
     * @param ImportService $importService
     */
    public function __construct(ImportService $importService)
    {
        $this->importService = $importService;
    }

    /**
     * The action for importing posts
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function import(Request $request)
    {
        $importPosts = $this->importService->importPosts();
        return $importPosts ? $this->sendResponse($importPosts, "The posts were successfully added")
                            : $this->sendError('Error');
    }
}
