<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMedicalReportRequest;
use App\Http\Requests\UpdateMedicalReportRequest;
use App\Repositories\MedicalReportRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MedicalReportController extends AppBaseController
{
    /** @var  MedicalReportRepository */
    private $medicalReportRepository;

    public function __construct(MedicalReportRepository $medicalReportRepo)
    {
        $this->medicalReportRepository = $medicalReportRepo;
    }

    /**
     * Display a listing of the MedicalReport.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $medicalReports = $this->medicalReportRepository->all();

        return view('medical_reports.index')
            ->with('medicalReports', $medicalReports);
    }

    /**
     * Show the form for creating a new MedicalReport.
     *
     * @return Response
     */
    public function create()
    {
        return view('medical_reports.create');
    }

    /**
     * Store a newly created MedicalReport in storage.
     *
     * @param CreateMedicalReportRequest $request
     *
     * @return Response
     */
    public function store(CreateMedicalReportRequest $request)
    {
        $input = $request->all();

        $medicalReport = $this->medicalReportRepository->create($input);

        Flash::success('Medical Report saved successfully.');

        return redirect(route('medicalReports.index'));
    }

    /**
     * Display the specified MedicalReport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $medicalReport = $this->medicalReportRepository->find($id);

        if (empty($medicalReport)) {
            Flash::error('Medical Report not found');

            return redirect(route('medicalReports.index'));
        }

        return view('medical_reports.show')->with('medicalReport', $medicalReport);
    }

    /**
     * Show the form for editing the specified MedicalReport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $medicalReport = $this->medicalReportRepository->find($id);

        if (empty($medicalReport)) {
            Flash::error('Medical Report not found');

            return redirect(route('medicalReports.index'));
        }

        return view('medical_reports.edit')->with('medicalReport', $medicalReport);
    }

    /**
     * Update the specified MedicalReport in storage.
     *
     * @param int $id
     * @param UpdateMedicalReportRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMedicalReportRequest $request)
    {
        $medicalReport = $this->medicalReportRepository->find($id);

        if (empty($medicalReport)) {
            Flash::error('Medical Report not found');

            return redirect(route('medicalReports.index'));
        }

        $medicalReport = $this->medicalReportRepository->update($request->all(), $id);

        Flash::success('Medical Report updated successfully.');

        return redirect(route('medicalReports.index'));
    }

    /**
     * Remove the specified MedicalReport from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $medicalReport = $this->medicalReportRepository->find($id);

        if (empty($medicalReport)) {
            Flash::error('Medical Report not found');

            return redirect(route('medicalReports.index'));
        }

        $this->medicalReportRepository->delete($id);

        Flash::success('Medical Report deleted successfully.');

        return redirect(route('medicalReports.index'));
    }
}
