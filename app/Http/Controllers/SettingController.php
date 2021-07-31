<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesettingRequest;
use App\Http\Requests\UpdatesettingRequest;
use App\Repositories\SettingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Storage;

class SettingController extends AppBaseController
{
    /** @var  settingRepository */
    private $settingRepository;

    public function __construct(SettingRepository $settingRepo)
    {
        $this->settingRepository = $settingRepo;
    }

    /**
     * Display a listing of the setting.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $settings = $this->settingRepository->all();

        return view('settings.index')
            ->with('settings', $settings);
    }

    /**
     * Show the form for creating a new setting.
     *
     * @return Response
     */
    public function create()
    {
        return view('settings.create');
    }

    /**
     * Store a newly created setting in storage.
     *
     * @param CreatesettingRequest $request
     *
     * @return Response
     */
    public function store(CreatesettingRequest $request)
    {
        // dd($request->hasFile('app_logo'));
        $input = $request->all();

        $file = 'logo/none.jpg';

        if ($request->hasFile('app_logo')) {
            $file = Storage::disk('public')->put('logo', $request->file('app_logo'));
        }

        $input['app_logo'] = $file;

        $setting = $this->settingRepository->create($input);


        Flash::success('Setting saved successfully.');

        return redirect(route('settings.index'));
    }

    /**
     * Display the specified setting.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $setting = $this->settingRepository->find($id);

        if (empty($setting)) {
            Flash::error('Setting not found');

            return redirect(route('settings.index'));
        }

        return view('settings.show')->with('setting', $setting);
    }

    /**
     * Show the form for editing the specified setting.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $setting = $this->settingRepository->find($id);

        if (empty($setting)) {
            Flash::error('Setting not found');

            return redirect(route('settings.index'));
        }

        return view('settings.edit')->with('setting', $setting);
    }

    /**
     * Update the specified setting in storage.
     *
     * @param int $id
     * @param UpdatesettingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesettingRequest $request)
    {
        $setting = $this->settingRepository->find($id);
        $input = $request->all();
        if (empty($setting)) {
            Flash::error('Setting not found');

            return redirect(route('settings.index'));
        }

        $file = 'logo/none.jpg';

        if ($request->hasFile('app_logo')) {
            Storage::disk('public')->delete($setting->app_logo);
            $file = Storage::disk('public')->put('logo', $request->file('app_logo'));
            $input['app_logo'] = $file;
        }else{
            unset($input['app_logo']);
        }

        // dd($input);
        $setting = $this->settingRepository->update($input, $id);

        Flash::success('Setting updated successfully.');

        return redirect(route('settings.index'));
    }

    /**
     * Remove the specified setting from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $setting = $this->settingRepository->find($id);

        if (empty($setting)) {
            Flash::error('Setting not found');

            return redirect(route('settings.index'));
        }

        $this->settingRepository->delete($id);

        Flash::success('Setting deleted successfully.');

        return redirect(route('settings.index'));
    }
}
