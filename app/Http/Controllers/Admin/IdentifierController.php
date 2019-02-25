<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\IdentifierDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateIdentifierRequest;
use App\Http\Requests\UpdateIdentifierRequest;
use App\Repositories\IdentifierRepository;
use Flash;
use App\Http\Controllers\Admin\AppBaseController;
use Response;

class IdentifierController extends AppBaseController
{
    /** @var  IdentifierRepository */
    private $identifierRepository;

    public function __construct(IdentifierRepository $identifierRepo)
    {
        $this->identifierRepository = $identifierRepo;
    }

    /**
     * Display a listing of the Identifier.
     *
     * @param IdentifierDataTable $identifierDataTable
     * @return Response
     */
    public function index(IdentifierDataTable $identifierDataTable)
    {
        return $identifierDataTable->render('admin.identifiers.index');
    }

    /**
     * Show the form for creating a new Identifier.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.identifiers.create');
    }

    /**
     * Store a newly created Identifier in storage.
     *
     * @param CreateIdentifierRequest $request
     *
     * @return Response
     */
    public function store(CreateIdentifierRequest $request)
    {
        $input = $request->all();

        $identifier = $this->identifierRepository->create($input);

        Flash::success('Identifier saved successfully.');

        return redirect(route('admin.identifiers.index'));
    }

    /**
     * Display the specified Identifier.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $identifier = $this->identifierRepository->findWithoutFail($id);

        if (empty($identifier)) {
            Flash::error('Identifier not found');

            return redirect(route('admin.identifiers.index'));
        }

        return view('admin.identifiers.show')->with('identifier', $identifier);
    }

    /**
     * Show the form for editing the specified Identifier.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $identifier = $this->identifierRepository->findWithoutFail($id);

        if (empty($identifier)) {
            Flash::error('Identifier not found');

            return redirect(route('admin.identifiers.index'));
        }

        return view('admin.identifiers.edit')->with('identifier', $identifier);
    }

    /**
     * Update the specified Identifier in storage.
     *
     * @param  int              $id
     * @param UpdateIdentifierRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateIdentifierRequest $request)
    {
        $identifier = $this->identifierRepository->findWithoutFail($id);

        if (empty($identifier)) {
            Flash::error('Identifier not found');

            return redirect(route('admin.identifiers.index'));
        }

        $identifier = $this->identifierRepository->update($request->all(), $id);

        Flash::success('Identifier updated successfully.');

        return redirect(route('admin.identifiers.index'));
    }

    /**
     * Remove the specified Identifier from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $identifier = $this->identifierRepository->findWithoutFail($id);

        if (empty($identifier)) {
            Flash::error('Identifier not found');

            return redirect(route('admin.identifiers.index'));
        }

        $this->identifierRepository->delete($id);

        Flash::success('Identifier deleted successfully.');

        return redirect(route('admin.identifiers.index'));
    }
}
