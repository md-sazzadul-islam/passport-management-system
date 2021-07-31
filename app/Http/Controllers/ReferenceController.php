<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReferenceRequest;
use App\Http\Requests\UpdateReferenceRequest;
use App\Repositories\ReferenceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ReferenceController extends AppBaseController
{
    /** @var  ReferenceRepository */
    private $referenceRepository;

    public function __construct(ReferenceRepository $referenceRepo)
    {
        $this->referenceRepository = $referenceRepo;
    }

    /**
     * Display a listing of the Reference.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $references = $this->referenceRepository->all();

        return view('references.index')
            ->with('references', $references);
    }

    /**
     * Show the form for creating a new Reference.
     *
     * @return Response
     */
    public function create()
    {
        return view('references.create');
    }

    /**
     * Store a newly created Reference in storage.
     *
     * @param CreateReferenceRequest $request
     *
     * @return Response
     */
    public function store(CreateReferenceRequest $request)
    {
        $input = $request->all();

        $reference = $this->referenceRepository->create($input);

        Flash::success('Reference saved successfully.');

        return redirect(route('references.index'));
    }

    /**
     * Display the specified Reference.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reference = $this->referenceRepository->find($id);

        if (empty($reference)) {
            Flash::error('Reference not found');

            return redirect(route('references.index'));
        }

        return view('references.show')->with('reference', $reference);
    }

    /**
     * Show the form for editing the specified Reference.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reference = $this->referenceRepository->find($id);

        if (empty($reference)) {
            Flash::error('Reference not found');

            return redirect(route('references.index'));
        }

        return view('references.edit')->with('reference', $reference);
    }

    /**
     * Update the specified Reference in storage.
     *
     * @param int $id
     * @param UpdateReferenceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReferenceRequest $request)
    {
        $reference = $this->referenceRepository->find($id);

        if (empty($reference)) {
            Flash::error('Reference not found');

            return redirect(route('references.index'));
        }

        $reference = $this->referenceRepository->update($request->all(), $id);

        Flash::success('Reference updated successfully.');

        return redirect(route('references.index'));
    }

    /**
     * Remove the specified Reference from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reference = $this->referenceRepository->find($id);

        if (empty($reference)) {
            Flash::error('Reference not found');

            return redirect(route('references.index'));
        }

        $this->referenceRepository->delete($id);

        Flash::success('Reference deleted successfully.');

        return redirect(route('references.index'));
    }
}
