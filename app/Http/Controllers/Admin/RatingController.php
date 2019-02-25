<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\RatingDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateRatingRequest;
use App\Http\Requests\UpdateRatingRequest;
use App\Repositories\RatingRepository;
use Flash;
use App\Http\Controllers\Admin\AppBaseController;
use Response;

class RatingController extends AppBaseController
{
    /** @var  RatingRepository */
    private $ratingRepository;

    public function __construct(RatingRepository $ratingRepo)
    {
        $this->ratingRepository = $ratingRepo;
    }

    /**
     * Display a listing of the Rating.
     *
     * @param RatingDataTable $ratingDataTable
     * @return Response
     */
    public function index(RatingDataTable $ratingDataTable)
    {
        return $ratingDataTable->render('admin.ratings.index');
    }

    /**
     * Show the form for creating a new Rating.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.ratings.create');
    }

    /**
     * Store a newly created Rating in storage.
     *
     * @param CreateRatingRequest $request
     *
     * @return Response
     */
    public function store(CreateRatingRequest $request)
    {
        $input = $request->all();

        $rating = $this->ratingRepository->create($input);

        Flash::success('Rating saved successfully.');

        return redirect(route('admin.ratings.index'));
    }

    /**
     * Display the specified Rating.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rating = $this->ratingRepository->findWithoutFail($id);

        if (empty($rating)) {
            Flash::error('Rating not found');

            return redirect(route('admin.ratings.index'));
        }

        return view('admin.ratings.show')->with('rating', $rating);
    }

    /**
     * Show the form for editing the specified Rating.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rating = $this->ratingRepository->findWithoutFail($id);

        if (empty($rating)) {
            Flash::error('Rating not found');

            return redirect(route('admin.ratings.index'));
        }

        return view('admin.ratings.edit')->with('rating', $rating);
    }

    /**
     * Update the specified Rating in storage.
     *
     * @param  int              $id
     * @param UpdateRatingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRatingRequest $request)
    {
        $rating = $this->ratingRepository->findWithoutFail($id);

        if (empty($rating)) {
            Flash::error('Rating not found');

            return redirect(route('admin.ratings.index'));
        }

        $rating = $this->ratingRepository->update($request->all(), $id);

        Flash::success('Rating updated successfully.');

        return redirect(route('admin.ratings.index'));
    }

    /**
     * Remove the specified Rating from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rating = $this->ratingRepository->findWithoutFail($id);

        if (empty($rating)) {
            Flash::error('Rating not found');

            return redirect(route('admin.ratings.index'));
        }

        $this->ratingRepository->delete($id);

        Flash::success('Rating deleted successfully.');

        return redirect(route('admin.ratings.index'));
    }
}
