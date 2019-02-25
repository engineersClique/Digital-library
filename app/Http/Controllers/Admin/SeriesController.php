<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SeriesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateSeriesRequest;
use App\Http\Requests\UpdateSeriesRequest;
use App\Repositories\SeriesRepository;
use Flash;
use App\Http\Controllers\Admin\AppBaseController;
use Response;

class SeriesController extends AppBaseController
{
    /** @var  SeriesRepository */
    private $seriesRepository;

    public function __construct(SeriesRepository $seriesRepo)
    {
        $this->seriesRepository = $seriesRepo;
    }

    /**
     * Display a listing of the Series.
     *
     * @param SeriesDataTable $seriesDataTable
     * @return Response
     */
    public function index(SeriesDataTable $seriesDataTable)
    {
        return $seriesDataTable->render('admin.series.index');
    }

    /**
     * Show the form for creating a new Series.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.series.create');
    }

    /**
     * Store a newly created Series in storage.
     *
     * @param CreateSeriesRequest $request
     *
     * @return Response
     */
    public function store(CreateSeriesRequest $request)
    {
        $input = $request->all();

        $series = $this->seriesRepository->create($input);

        Flash::success('Series saved successfully.');

        return redirect(route('admin.series.index'));
    }

    /**
     * Display the specified Series.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $series = $this->seriesRepository->findWithoutFail($id);

        if (empty($series)) {
            Flash::error('Series not found');

            return redirect(route('admin.series.index'));
        }

        return view('admin.series.show')->with('series', $series);
    }

    /**
     * Show the form for editing the specified Series.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $series = $this->seriesRepository->findWithoutFail($id);

        if (empty($series)) {
            Flash::error('Series not found');

            return redirect(route('admin.series.index'));
        }

        return view('admin.series.edit')->with('series', $series);
    }

    /**
     * Update the specified Series in storage.
     *
     * @param  int              $id
     * @param UpdateSeriesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSeriesRequest $request)
    {
        $series = $this->seriesRepository->findWithoutFail($id);

        if (empty($series)) {
            Flash::error('Series not found');

            return redirect(route('admin.series.index'));
        }

        $series = $this->seriesRepository->update($request->all(), $id);

        Flash::success('Series updated successfully.');

        return redirect(route('admin.series.index'));
    }

    /**
     * Remove the specified Series from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $series = $this->seriesRepository->findWithoutFail($id);

        if (empty($series)) {
            Flash::error('Series not found');

            return redirect(route('admin.series.index'));
        }

        $this->seriesRepository->delete($id);

        Flash::success('Series deleted successfully.');

        return redirect(route('admin.series.index'));
    }
}
