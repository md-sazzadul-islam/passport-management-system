<?php

namespace App\Http\Controllers;

use App\DataTables\TesttttDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTesttttRequest;
use App\Http\Requests\UpdateTesttttRequest;
use App\Repositories\TesttttRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TesttttController extends AppBaseController
{
    /** @var  TesttttRepository */
    private $testtttRepository;

    public function __construct(TesttttRepository $testtttRepo)
    {
        $this->testtttRepository = $testtttRepo;
    }

    /**
     * Display a listing of the Testttt.
     *
     * @param TesttttDataTable $testtttDataTable
     * @return Response
     */
    public function index(TesttttDataTable $testtttDataTable)
    {
        return $testtttDataTable->render('testttts.index');
    }

    /**
     * Show the form for creating a new Testttt.
     *
     * @return Response
     */
    public function create()
    {
        return view('testttts.create');
    }

    /**
     * Store a newly created Testttt in storage.
     *
     * @param CreateTesttttRequest $request
     *
     * @return Response
     */
    public function store(CreateTesttttRequest $request)
    {
        $input = $request->all();

        $testttt = $this->testtttRepository->create($input);

        Flash::success('Testttt saved successfully.');

        return redirect(route('testttts.index'));
    }

    /**
     * Display the specified Testttt.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $testttt = $this->testtttRepository->find($id);

        if (empty($testttt)) {
            Flash::error('Testttt not found');

            return redirect(route('testttts.index'));
        }

        return view('testttts.show')->with('testttt', $testttt);
    }

    /**
     * Show the form for editing the specified Testttt.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $testttt = $this->testtttRepository->find($id);

        if (empty($testttt)) {
            Flash::error('Testttt not found');

            return redirect(route('testttts.index'));
        }

        return view('testttts.edit')->with('testttt', $testttt);
    }

    /**
     * Update the specified Testttt in storage.
     *
     * @param  int              $id
     * @param UpdateTesttttRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTesttttRequest $request)
    {
        $testttt = $this->testtttRepository->find($id);

        if (empty($testttt)) {
            Flash::error('Testttt not found');

            return redirect(route('testttts.index'));
        }

        $testttt = $this->testtttRepository->update($request->all(), $id);

        Flash::success('Testttt updated successfully.');

        return redirect(route('testttts.index'));
    }

    /**
     * Remove the specified Testttt from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $testttt = $this->testtttRepository->find($id);

        if (empty($testttt)) {
            Flash::error('Testttt not found');

            return redirect(route('testttts.index'));
        }

        $this->testtttRepository->delete($id);

        Flash::success('Testttt deleted successfully.');

        return redirect(route('testttts.index'));
    }
}
