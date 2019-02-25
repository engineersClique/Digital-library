<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FeedDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateFeedRequest;
use App\Http\Requests\UpdateFeedRequest;
use App\Repositories\FeedRepository;
use Flash;
use App\Http\Controllers\Admin\AppBaseController;
use Response;

class FeedController extends AppBaseController
{
    /** @var  FeedRepository */
    private $feedRepository;

    public function __construct(FeedRepository $feedRepo)
    {
        $this->feedRepository = $feedRepo;
    }

    /**
     * Display a listing of the Feed.
     *
     * @param FeedDataTable $feedDataTable
     * @return Response
     */
    public function index(FeedDataTable $feedDataTable)
    {
        return $feedDataTable->render('admin.feeds.index');
    }

    /**
     * Show the form for creating a new Feed.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.feeds.create');
    }

    /**
     * Store a newly created Feed in storage.
     *
     * @param CreateFeedRequest $request
     *
     * @return Response
     */
    public function store(CreateFeedRequest $request)
    {
        $input = $request->all();

        $feed = $this->feedRepository->create($input);

        Flash::success('Feed saved successfully.');

        return redirect(route('admin.feeds.index'));
    }

    /**
     * Display the specified Feed.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $feed = $this->feedRepository->findWithoutFail($id);

        if (empty($feed)) {
            Flash::error('Feed not found');

            return redirect(route('admin.feeds.index'));
        }

        return view('admin.feeds.show')->with('feed', $feed);
    }

    /**
     * Show the form for editing the specified Feed.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $feed = $this->feedRepository->findWithoutFail($id);

        if (empty($feed)) {
            Flash::error('Feed not found');

            return redirect(route('admin.feeds.index'));
        }

        return view('admin.feeds.edit')->with('feed', $feed);
    }

    /**
     * Update the specified Feed in storage.
     *
     * @param  int              $id
     * @param UpdateFeedRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFeedRequest $request)
    {
        $feed = $this->feedRepository->findWithoutFail($id);

        if (empty($feed)) {
            Flash::error('Feed not found');

            return redirect(route('admin.feeds.index'));
        }

        $feed = $this->feedRepository->update($request->all(), $id);

        Flash::success('Feed updated successfully.');

        return redirect(route('admin.feeds.index'));
    }

    /**
     * Remove the specified Feed from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $feed = $this->feedRepository->findWithoutFail($id);

        if (empty($feed)) {
            Flash::error('Feed not found');

            return redirect(route('admin.feeds.index'));
        }

        $this->feedRepository->delete($id);

        Flash::success('Feed deleted successfully.');

        return redirect(route('admin.feeds.index'));
    }
}
