<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PreferenceDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePreferenceRequest;
use App\Http\Requests\UpdatePreferenceRequest;
use App\Repositories\PreferenceRepository;
use Flash;
use App\Http\Controllers\Admin\AppBaseController;
use Response;

class PreferenceController extends AppBaseController
{
    /** @var  PreferenceRepository */
    private $preferenceRepository;

    public function __construct(PreferenceRepository $preferenceRepo)
    {
        $this->preferenceRepository = $preferenceRepo;
    }

    /**
     * Display a listing of the Preference.
     *
     * @param PreferenceDataTable $preferenceDataTable
     * @return Response
     */
    public function index(PreferenceDataTable $preferenceDataTable)
    {
        return $preferenceDataTable->render('admin.preferences.index');
    }

    /**
     * Show the form for creating a new Preference.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.preferences.create');
    }

    /**
     * Store a newly created Preference in storage.
     *
     * @param CreatePreferenceRequest $request
     *
     * @return Response
     */
    public function store(CreatePreferenceRequest $request)
    {
        $input = $request->all();

        $preference = $this->preferenceRepository->create($input);

        Flash::success('Preference saved successfully.');

        return redirect(route('admin.preferences.index'));
    }

    /**
     * Display the specified Preference.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $preference = $this->preferenceRepository->findWithoutFail($id);

        if (empty($preference)) {
            Flash::error('Preference not found');

            return redirect(route('admin.preferences.index'));
        }

        return view('admin.preferences.show')->with('preference', $preference);
    }

    /**
     * Show the form for editing the specified Preference.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $preference = $this->preferenceRepository->findWithoutFail($id);

        if (empty($preference)) {
            Flash::error('Preference not found');

            return redirect(route('admin.preferences.index'));
        }

        return view('admin.preferences.edit')->with('preference', $preference);
    }

    /**
     * Update the specified Preference in storage.
     *
     * @param  int              $id
     * @param UpdatePreferenceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePreferenceRequest $request)
    {
        $preference = $this->preferenceRepository->findWithoutFail($id);

        if (empty($preference)) {
            Flash::error('Preference not found');

            return redirect(route('admin.preferences.index'));
        }

        $preference = $this->preferenceRepository->update($request->all(), $id);

        Flash::success('Preference updated successfully.');

        return redirect(route('admin.preferences.index'));
    }

    /**
     * Remove the specified Preference from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $preference = $this->preferenceRepository->findWithoutFail($id);

        if (empty($preference)) {
            Flash::error('Preference not found');

            return redirect(route('admin.preferences.index'));
        }

        $this->preferenceRepository->delete($id);

        Flash::success('Preference deleted successfully.');

        return redirect(route('admin.preferences.index'));
    }
}
