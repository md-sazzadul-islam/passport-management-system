<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSelectionStatusRequest;
use App\Http\Requests\UpdateSelectionStatusRequest;
use App\Repositories\SelectionStatusRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SelectionStatusController extends AppBaseController
{
    /** @var  SelectionStatusRepository */
    private $selectionStatusRepository;

    public function __construct(SelectionStatusRepository $selectionStatusRepo)
    {
        $this->selectionStatusRepository = $selectionStatusRepo;
    }

    /**
     * Display a listing of the SelectionStatus.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $selectionStatuses = $this->selectionStatusRepository->all();

        return view('selection_statuses.index')
            ->with('selectionStatuses', $selectionStatuses);
    }

    /**
     * Show the form for creating a new SelectionStatus.
     *
     * @return Response
     */
    public function create()
    {
        return view('selection_statuses.create');
    }

    /**
     * Store a newly created SelectionStatus in storage.
     *
     * @param CreateSelectionStatusRequest $request
     *
     * @return Response
     */
    public function store(CreateSelectionStatusRequest $request)
    {
        $input = $request->all();

        $selectionStatus = $this->selectionStatusRepository->create($input);

        Flash::success('Selection Status saved successfully.');

        return redirect(route('selectionStatuses.index'));
    }

    /**
     * Display the specified SelectionStatus.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $selectionStatus = $this->selectionStatusRepository->find($id);

        if (empty($selectionStatus)) {
            Flash::error('Selection Status not found');

            return redirect(route('selectionStatuses.index'));
        }

        return view('selection_statuses.show')->with('selectionStatus', $selectionStatus);
    }

    /**
     * Show the form for editing the specified SelectionStatus.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $selectionStatus = $this->selectionStatusRepository->find($id);

        if (empty($selectionStatus)) {
            Flash::error('Selection Status not found');

            return redirect(route('selectionStatuses.index'));
        }

        return view('selection_statuses.edit')->with('selectionStatus', $selectionStatus);
    }

    /**
     * Update the specified SelectionStatus in storage.
     *
     * @param int $id
     * @param UpdateSelectionStatusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSelectionStatusRequest $request)
    {
        $selectionStatus = $this->selectionStatusRepository->find($id);

        if (empty($selectionStatus)) {
            Flash::error('Selection Status not found');

            return redirect(route('selectionStatuses.index'));
        }

        $selectionStatus = $this->selectionStatusRepository->update($request->all(), $id);

        Flash::success('Selection Status updated successfully.');

        return redirect(route('selectionStatuses.index'));
    }

    /**
     * Remove the specified SelectionStatus from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $selectionStatus = $this->selectionStatusRepository->find($id);

        if (empty($selectionStatus)) {
            Flash::error('Selection Status not found');

            return redirect(route('selectionStatuses.index'));
        }

        $this->selectionStatusRepository->delete($id);

        Flash::success('Selection Status deleted successfully.');

        return redirect(route('selectionStatuses.index'));
    }
}
