<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FileTable;
use App\Http\Requests;
use App\Http\Requests\CreateFileRequest;
use App\Http\Requests\UpdateFileRequest;
use App\Repositories\FileRepository;
use Flash;
use App\Http\Controllers\Admin\AppBaseController;
use Response;

class FileController extends AppBaseController
{
    /** @var  FileRepository */
    private $fileRepository;

    public function __construct(FileRepository $fileRepo)
    {
        $this->fileRepository = $fileRepo;
    }

    /**
     * Display a listing of the File.
     *
     * @param FileTable $fileFileTable
     * @return Response
     */
    public function index(FileTable $fileFileTable)
    {
        return $fileFileTable->render('admin.file.index');
    }

    /**
     * Show the form for creating a new File.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.file.create');
    }

    /**
     * Store a newly created File in storage.
     *
     * @param CreateFileRequest $request
     *
     * @return Response
     */
    public function store(CreateFileRequest $request)
    {
        $input = $request->all();

        $file = $this->fileRepository->create($input);

        Flash::success('File saved successfully.');

        return redirect(route('admin.file.index'));
    }

    /**
     * Display the specified File.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $file = $this->fileRepository->findWithoutFail($id);

        if (empty($file)) {
            Flash::error('File not found');

            return redirect(route('admin.file.index'));
        }

        return view('admin.file.show')->with('file', $file);
    }

    /**
     * Show the form for editing the specified File.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $file = $this->fileRepository->findWithoutFail($id);

        if (empty($file)) {
            Flash::error('File not found');

            return redirect(route('admin.file.index'));
        }

        return view('admin.file.edit')->with('file', $file);
    }

    /**
     * Update the specified File in storage.
     *
     * @param  int              $id
     * @param UpdateFileRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFileRequest $request)
    {
        $file = $this->fileRepository->findWithoutFail($id);

        if (empty($file)) {
            Flash::error('File not found');

            return redirect(route('admin.file.index'));
        }

        $file = $this->fileRepository->update($request->all(), $id);

        Flash::success('File updated successfully.');

        return redirect(route('admin.file.index'));
    }

    /**
     * Remove the specified File from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $file = $this->fileRepository->findWithoutFail($id);

        if (empty($file)) {
            Flash::error('File not found');

            return redirect(route('admin.file.index'));
        }

        $this->fileRepository->delete($id);

        Flash::success('File deleted successfully.');

        return redirect(route('admin.file.index'));
    }
}
