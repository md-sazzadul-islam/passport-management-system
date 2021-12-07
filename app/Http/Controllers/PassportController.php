<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePassportRequest;
use App\Http\Requests\UpdatePassportRequest;
use App\Repositories\PassportRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\MedicalReport;
use App\Models\MedicalStatus;
use App\Models\Agent;
use App\Models\Reference;
use App\Models\SelectionStatus;
use App\Models\Position;

class PassportController extends AppBaseController
{
    /** @var  PassportRepository */
    private $passportRepository;

    public function __construct(PassportRepository $passportRepo)
    {
        $this->passportRepository = $passportRepo;
    }

    /**
     * Display a listing of the Passport.
     *
     * @param Request $request
     *
     * @return Response
     */

    public function index(Request $request)
    {
        $search = array();
        if ($request->has('searchable') && $request->has('search_value')) {
            $search[$request->get('searchable')] = $request->get('search_value');
        }
        $searchable = $this->passportRepository->getFieldsSearchableStr();
        $passports = $this->passportRepository->paginate(
            10,
            $search,
            ['medicalReportjoin', 'medicalStatusjoin', 'referencejoin', 'agentjoin', 'selectionStatusjoin', 'positionjoin']
        );
        // dd($passports);

        return view('passports.index')
            ->with('passports', $passports)
            ->with('searchable', $searchable);
    }

    /**
     * Show the form for creating a new Passport.
     *
     * @return Response
     */
    public function create()
    {
        $data['medicalReport'] = MedicalReport::pluck('title', 'id');
        $data['medicalStatus'] = MedicalStatus::pluck('title', 'id');
        $data['reference'] = Reference::pluck('name', 'id');
        $data['agent'] = Agent::pluck('title', 'id');
        $data['selectionStatus'] = SelectionStatus::pluck('title', 'id');
        $data['position'] = Position::pluck('title', 'id');
        return view('passports.create', $data);
    }

    /**
     * Store a newly created Passport in storage.
     *
     * @param CreatePassportRequest $request
     *
     * @return Response
     */
    public function store(CreatePassportRequest $request)
    {
        $input = $request->all();

        $passport = $this->passportRepository->create($input);

        Flash::success('Passport saved successfully.');

        return redirect(route('passports.index'));
    }

    /**
     * Display the specified Passport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $passport = $this->passportRepository->find($id);

        if (empty($passport)) {
            Flash::error('Passport not found');

            return redirect(route('passports.index'));
        }

        return view('passports.show')->with('passport', $passport);
    }

    /**
     * Show the form for editing the specified Passport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $data['medicalReport'] = MedicalReport::pluck('title', 'id');
        $data['medicalStatus'] = MedicalStatus::pluck('title', 'id');
        $data['reference'] = Reference::pluck('name', 'id');
        $data['agent'] = Agent::pluck('title', 'id');
        $data['selectionStatus'] = SelectionStatus::pluck('title', 'id');
        $data['position'] = Position::pluck('title', 'id');
        $passport = $this->passportRepository->find($id);
        $data['passport'] = $passport;
        // dd($passport);
        if (empty($passport)) {
            Flash::error('Passport not found');

            return redirect(route('passports.index'));
        }

        return view('passports.edit', $data);
    }

    /**
     * Update the specified Passport in storage.
     *
     * @param int $id
     * @param UpdatePassportRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePassportRequest $request)
    {
        $passport = $this->passportRepository->find($id);

        if (empty($passport)) {
            Flash::error('Passport not found');

            return redirect(route('passports.index'));
        }

        $passport = $this->passportRepository->update($request->all(), $id);

        Flash::success('Passport updated successfully.');

        return redirect(route('passports.index'));
    }

    /**
     * Remove the specified Passport from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $passport = $this->passportRepository->find($id);

        if (empty($passport)) {
            Flash::error('Passport not found');

            return redirect(route('passports.index'));
        }

        $this->passportRepository->delete($id);

        Flash::success('Passport deleted successfully.');

        return redirect(route('passports.index'));
    }
}
