<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ConversionOptionDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateConversionOptionRequest;
use App\Http\Requests\UpdateConversionOptionRequest;
use App\Repositories\ConversionOptionRepository;
use Flash;
use App\Http\Controllers\Admin\AppBaseController;
use Response;

class ConversionOptionController extends AppBaseController
{
    /** @var  ConversionOptionRepository */
    private $conversionOptionRepository;

    public function __construct(ConversionOptionRepository $conversionOptionRepo)
    {
        $this->conversionOptionRepository = $conversionOptionRepo;
    }

    /**
     * Display a listing of the ConversionOption.
     *
     * @param ConversionOptionDataTable $conversionOptionDataTable
     * @return Response
     */
    public function index(ConversionOptionDataTable $conversionOptionDataTable)
    {
        return $conversionOptionDataTable->render('admin.conversion_options.index');
    }

    /**
     * Show the form for creating a new ConversionOption.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.conversion_options.create');
    }

    /**
     * Store a newly created ConversionOption in storage.
     *
     * @param CreateConversionOptionRequest $request
     *
     * @return Response
     */
    public function store(CreateConversionOptionRequest $request)
    {
        $input = $request->all();

        $conversionOption = $this->conversionOptionRepository->create($input);

        Flash::success('Conversion Option saved successfully.');

        return redirect(route('admin.conversionOptions.index'));
    }

    /**
     * Display the specified ConversionOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $conversionOption = $this->conversionOptionRepository->findWithoutFail($id);

        if (empty($conversionOption)) {
            Flash::error('Conversion Option not found');

            return redirect(route('admin.conversionOptions.index'));
        }

        return view('admin.conversion_options.show')->with('conversionOption', $conversionOption);
    }

    /**
     * Show the form for editing the specified ConversionOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $conversionOption = $this->conversionOptionRepository->findWithoutFail($id);

        if (empty($conversionOption)) {
            Flash::error('Conversion Option not found');

            return redirect(route('admin.conversionOptions.index'));
        }

        return view('admin.conversion_options.edit')->with('conversionOption', $conversionOption);
    }

    /**
     * Update the specified ConversionOption in storage.
     *
     * @param  int              $id
     * @param UpdateConversionOptionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConversionOptionRequest $request)
    {
        $conversionOption = $this->conversionOptionRepository->findWithoutFail($id);

        if (empty($conversionOption)) {
            Flash::error('Conversion Option not found');

            return redirect(route('admin.conversionOptions.index'));
        }

        $conversionOption = $this->conversionOptionRepository->update($request->all(), $id);

        Flash::success('Conversion Option updated successfully.');

        return redirect(route('admin.conversionOptions.index'));
    }

    /**
     * Remove the specified ConversionOption from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $conversionOption = $this->conversionOptionRepository->findWithoutFail($id);

        if (empty($conversionOption)) {
            Flash::error('Conversion Option not found');

            return redirect(route('admin.conversionOptions.index'));
        }

        $this->conversionOptionRepository->delete($id);

        Flash::success('Conversion Option deleted successfully.');

        return redirect(route('admin.conversionOptions.index'));
    }
}
