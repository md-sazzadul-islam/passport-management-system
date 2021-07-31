<?php

namespace App\Http\Controllers;

use App\DataTables\MyconteDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMyconteRequest;
use App\Http\Requests\UpdateMyconteRequest;
use App\Repositories\MyconteRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MyconteController extends AppBaseController
{
    /** @var  MyconteRepository */
    private $myconteRepository;

    public function __construct(MyconteRepository $myconteRepo)
    {
        $this->myconteRepository = $myconteRepo;
    }

    /**
     * Display a listing of the Myconte.
     *
     * @param MyconteDataTable $myconteDataTable
     * @return Response
     */
    public function index(MyconteDataTable $myconteDataTable)
    {
        return $myconteDataTable->render('mycontes.index');
    }

    /**
     * Show the form for creating a new Myconte.
     *
     * @return Response
     */
    public function create()
    {
        return view('mycontes.create');
    }

    /**
     * Store a newly created Myconte in storage.
     *
     * @param CreateMyconteRequest $request
     *
     * @return Response
     */
    public function store(CreateMyconteRequest $request)
    {
        $input = $request->all();

        $myconte = $this->myconteRepository->create($input);

        Flash::success('Myconte saved successfully.');

        return redirect(route('mycontes.index'));
    }

    /**
     * Display the specified Myconte.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $myconte = $this->myconteRepository->find($id);

        if (empty($myconte)) {
            Flash::error('Myconte not found');

            return redirect(route('mycontes.index'));
        }

        return view('mycontes.show')->with('myconte', $myconte);
    }

    /**
     * Show the form for editing the specified Myconte.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $myconte = $this->myconteRepository->find($id);

        if (empty($myconte)) {
            Flash::error('Myconte not found');

            return redirect(route('mycontes.index'));
        }

        return view('mycontes.edit')->with('myconte', $myconte);
    }

    /**
     * Update the specified Myconte in storage.
     *
     * @param  int              $id
     * @param UpdateMyconteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMyconteRequest $request)
    {
        $myconte = $this->myconteRepository->find($id);

        if (empty($myconte)) {
            Flash::error('Myconte not found');

            return redirect(route('mycontes.index'));
        }

        $myconte = $this->myconteRepository->update($request->all(), $id);

        Flash::success('Myconte updated successfully.');

        return redirect(route('mycontes.index'));
    }

    /**
     * Remove the specified Myconte from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $myconte = $this->myconteRepository->find($id);

        if (empty($myconte)) {
            Flash::error('Myconte not found');

            return redirect(route('mycontes.index'));
        }

        $this->myconteRepository->delete($id);

        Flash::success('Myconte deleted successfully.');

        return redirect(route('mycontes.index'));
    }
}
