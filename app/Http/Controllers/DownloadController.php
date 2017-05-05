<?php

namespace App\Http\Controllers;

use App\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $downloads = Download::visible()->get();

        return view('downloads.index', compact('downloads'));
    }

    public function fileView($id)
    {
        $file = Download::visible()->find($id);
        $file = Download::visible()->find($id);
        $location = public_path() . '/files/' . $file->location . '.' . $file->type;
        $name = $file->name . '.' . $file->type;

        $headers = [
            'Content-Type: application/pdf',
            'Content-Disposition: inline; filename="' . $name . '"'
        ];

        return response()->file($location, $headers);
    }

    public function fileDownload($id)
    {
        $file = Download::visible()->find($id);
        $location = public_path() . '/files/' . $file->location . '.' . $file->type;
        $name = $file->name . '.' . $file->type;

        $headers = [
            'Content-Type: application/pdf'
        ];

        return response()->download($location, $name, $headers);
    }

}
