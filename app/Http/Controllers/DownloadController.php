<?php

namespace App\Http\Controllers;

use App\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{

    protected $_file;

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

    public function getFile($id, $method = 'view')
    {
        if (! $this->_file = Download::visible()->find($id))
            return redirect()->route('downloads')->with('error', 'File does not exist!');

        if (ends_with(request()->path(), 'download') || $method == 'download') {
            return $this->fileDownload();
        } else {
            return $this->fileView();
        }
    }

    public function fileView()
    {
        $location = storage_path() . '/app/public/files/' . $this->_file->location . '.' . $this->_file->type;
        $name = $this->_file->name . '.' . $this->_file->type;

        $headers = [
            'Content-Type: application/pdf',
            'Content-Disposition: inline; filename="' . $name . '"'
        ];

        if (! \File::exists($location))
            return redirect()->back()->with('error', 'File does not exist!');

        return response()->file($location, $headers);
    }

    public function fileDownload()
    {
        $location = storage_path() . '/app/public/files/' . $this->_file->location . '.' . $this->_file->type;
        $name = $this->_file->name . '.' . $this->_file->type;

        $headers = [
            'Content-Type: application/pdf',
            'Content-Disposition: inline; filename="' . $name . '"'
        ];

        return response()->download($location, $name, $headers);
    }

}
