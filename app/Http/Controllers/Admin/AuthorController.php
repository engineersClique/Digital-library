<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AuthorDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Repositories\AuthorRepository;
use Flash;
use App\Http\Controllers\Admin\AppBaseController;
use Response;

class AuthorController extends AppBaseController
{
    /** @var  AuthorRepository */
    private $authorRepository;

    public function __construct(AuthorRepository $authorRepo)
    {
        $this->authorRepository = $authorRepo;
    }

    /**
     * Display a listing of the Author.
     *
     * @param AuthorDataTable $authorDataTable
     * @return Response
     */
    public function index(AuthorDataTable $authorDataTable)
    {
        return $authorDataTable->render('admin.authors.index');
    }

    /**
     * Show the form for creating a new Author.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.authors.create');
    }

    /**
     * Store a newly created Author in storage.
     *
     * @param CreateAuthorRequest $request
     *
     * @return Response
     */
    public function store(CreateAuthorRequest $request)
    {
        $input = $request->all();

        $author = $this->authorRepository->create($input);

        Flash::success('Author saved successfully.');

        return redirect(route('admin.authors.index'));
    }

    /**
     * Display the specified Author.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $author = $this->authorRepository->findWithoutFail($id);

        if (empty($author)) {
            Flash::error('Author not found');

            return redirect(route('admin.authors.index'));
        }

        return view('admin.authors.show')->with('author', $author);
    }

    /**
     * Show the form for editing the specified Author.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $author = $this->authorRepository->findWithoutFail($id);

        if (empty($author)) {
            Flash::error('Author not found');

            return redirect(route('admin.authors.index'));
        }

        return view('admin.authors.edit')->with('author', $author);
    }

    /**
     * Update the specified Author in storage.
     *
     * @param  int              $id
     * @param UpdateAuthorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAuthorRequest $request)
    {
        $author = $this->authorRepository->findWithoutFail($id);

        if (empty($author)) {
            Flash::error('Author not found');

            return redirect(route('admin.authors.index'));
        }

        $author = $this->authorRepository->update($request->all(), $id);

        Flash::success('Author updated successfully.');

        return redirect(route('admin.authors.index'));
    }

    /**
     * Remove the specified Author from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $author = $this->authorRepository->findWithoutFail($id);

        if (empty($author)) {
            Flash::error('Author not found');

            return redirect(route('admin.authors.index'));
        }

        $this->authorRepository->delete($id);

        Flash::success('Author deleted successfully.');

        return redirect(route('admin.authors.index'));
    }
}
