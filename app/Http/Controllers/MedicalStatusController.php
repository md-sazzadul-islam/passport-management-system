<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMedicalStatusRequest;
use App\Http\Requests\UpdateMedicalStatusRequest;
use App\Repositories\MedicalStatusRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MedicalStatusController extends AppBaseController
{
    /** @var  MedicalStatusRepository */
    private $medicalStatusRepository;

    public function __construct(MedicalStatusRepository $medicalStatusRepo)
    {
        $this->medicalStatusRepository = $medicalStatusRepo;
    }

    /**
     * Display a listing of the MedicalStatus.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $medicalStatuses = $this->medicalStatusRepository->all();

        return view('medical_statuses.index')
            ->with('medicalStatuses', $medicalStatuses);
    }

    /**
     * Show the form for creating a new MedicalStatus.
     *
     * @return Response
     */
    public function create()
    {
        return view('medical_statuses.create');
    }

    /**
     * Store a newly created MedicalStatus in storage.
     *
     * @param CreateMedicalStatusRequest $request
     *
     * @return Response
     */
    public function store(CreateMedicalStatusRequest $request)
    {
        $input = $request->all();

        $medicalStatus = $this->medicalStatusRepository->create($input);

        Flash::success('Medical Status saved successfully.');

        return redirect(route('medicalStatuses.index'));
    }

    /**
     * Display the specified MedicalStatus.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $medicalStatus = $this->medicalStatusRepository->find($id);

        if (empty($medicalStatus)) {
            Flash::error('Medical Status not found');

            return redirect(route('medicalStatuses.index'));
        }

        return view('medical_statuses.show')->with('medicalStatus', $medicalStatus);
    }

    /**
     * Show the form for editing the specified MedicalStatus.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $medicalStatus = $this->medicalStatusRepository->find($id);

        if (empty($medicalStatus)) {
            Flash::error('Medical Status not found');

            return redirect(route('medicalStatuses.index'));
        }

        return view('medical_statuses.edit')->with('medicalStatus', $medicalStatus);
    }

    /**
     * Update the specified MedicalStatus in storage.
     *
     * @param int $id
     * @param UpdateMedicalStatusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMedicalStatusRequest $request)
    {
        $medicalStatus = $this->medicalStatusRepository->find($id);

        if (empty($medicalStatus)) {
            Flash::error('Medical Status not found');

            return redirect(route('medicalStatuses.index'));
        }

        $medicalStatus = $this->medicalStatusRepository->update($request->all(), $id);

        Flash::success('Medical Status updated successfully.');

        return redirect(route('medicalStatuses.index'));
    }

    /**
     * Remove the specified MedicalStatus from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $medicalStatus = $this->medicalStatusRepository->find($id);

        if (empty($medicalStatus)) {
            Flash::error('Medical Status not found');

            return redirect(route('medicalStatuses.index'));
        }

        $this->medicalStatusRepository->delete($id);

        Flash::success('Medical Status deleted successfully.');

        return redirect(route('medicalStatuses.index'));
    }
}
