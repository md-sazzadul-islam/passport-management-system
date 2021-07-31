<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePossitionRequest;
use App\Http\Requests\UpdatePossitionRequest;
use App\Repositories\PossitionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PossitionController extends AppBaseController
{
    /** @var  PossitionRepository */
    private $possitionRepository;

    public function __construct(PossitionRepository $possitionRepo)
    {
        $this->possitionRepository = $possitionRepo;
    }

    /**
     * Display a listing of the Possition.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $possitions = $this->possitionRepository->all();

        return view('possitions.index')
            ->with('possitions', $possitions);
    }

    /**
     * Show the form for creating a new Possition.
     *
     * @return Response
     */
    public function create()
    {
        return view('possitions.create');
    }

    /**
     * Store a newly created Possition in storage.
     *
     * @param CreatePossitionRequest $request
     *
     * @return Response
     */
    public function store(CreatePossitionRequest $request)
    {
        $input = $request->all();

        $possition = $this->possitionRepository->create($input);

        Flash::success('Possition saved successfully.');

        return redirect(route('possitions.index'));
    }

    /**
     * Display the specified Possition.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $possition = $this->possitionRepository->find($id);

        if (empty($possition)) {
            Flash::error('Possition not found');

            return redirect(route('possitions.index'));
        }

        return view('possitions.show')->with('possition', $possition);
    }

    /**
     * Show the form for editing the specified Possition.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $possition = $this->possitionRepository->find($id);

        if (empty($possition)) {
            Flash::error('Possition not found');

            return redirect(route('possitions.index'));
        }

        return view('possitions.edit')->with('possition', $possition);
    }

    /**
     * Update the specified Possition in storage.
     *
     * @param int $id
     * @param UpdatePossitionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePossitionRequest $request)
    {
        $possition = $this->possitionRepository->find($id);

        if (empty($possition)) {
            Flash::error('Possition not found');

            return redirect(route('possitions.index'));
        }

        $possition = $this->possitionRepository->update($request->all(), $id);

        Flash::success('Possition updated successfully.');

        return redirect(route('possitions.index'));
    }

    /**
     * Remove the specified Possition from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $possition = $this->possitionRepository->find($id);

        if (empty($possition)) {
            Flash::error('Possition not found');

            return redirect(route('possitions.index'));
        }

        $this->possitionRepository->delete($id);

        Flash::success('Possition deleted successfully.');

        return redirect(route('possitions.index'));
    }
}
