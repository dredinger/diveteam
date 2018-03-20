<?php

namespace App\Http\Controllers;

use App\Download;
use Illuminate\Http\Request;
use App\Events\DownloadCounter;

class DownloadsController extends Controller
{

    protected $_file, $_name, $_location, $_headers = [];

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
        $this->_file = Download::visible()->find($id);
        if (! $this->_file)
            return redirect()->route('downloads')->with('error', 'File does not exist!');

        if (! $this->prepFile()) {
            return redirect()->back()->with('error', 'File does not exist!');
        } else {
            event(new DownloadCounter($this->_file));

            if (ends_with(request()->path(), 'download') || $method == 'download')
                return $this->fileDownload();
            else
                return $this->fileView();
        }

    }

    public function prepFile()
    {
        $this->_location = $this->_file->location . '.' . $this->_file->type;
        $this->_name = $this->_file->name . '.' . $this->_file->type;
        $this->_location = storage_path() . '/app/public/files/' . $this->_location;

        $this->_headers = [];

        if (! \File::exists($this->_location))
            return false;
        else
            return true;
    }

    public function fileView()
    {
        return response()->file($this->_location, $this->_headers);
    }

    public function fileDownload()
    {
        return response()->download($this->_location, $this->_name, $this->_headers);
    }

}
