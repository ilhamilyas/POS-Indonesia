<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKantorcabangRequest;
use App\Http\Requests\UpdateKantorcabangRequest;
use App\Repositories\KantorcabangRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class KantorcabangController extends AppBaseController
{
    /** @var  KantorcabangRepository */
    private $kantorcabangRepository;

    public function __construct(KantorcabangRepository $kantorcabangRepo)
    {
        $this->kantorcabangRepository = $kantorcabangRepo;
    }

    /**
     * Display a listing of the Kantorcabang.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->kantorcabangRepository->pushCriteria(new RequestCriteria($request));
        $kantorcabangs = $this->kantorcabangRepository->all();

        return view('kantorcabangs.index')
            ->with('kantorcabangs', $kantorcabangs);
    }

    /**
     * Show the form for creating a new Kantorcabang.
     *
     * @return Response
     */
    public function create()
    {
        return view('kantorcabangs.create');
    }

    /**
     * Store a newly created Kantorcabang in storage.
     *
     * @param CreateKantorcabangRequest $request
     *
     * @return Response
     */
    public function store(CreateKantorcabangRequest $request)
    {
        $input = $request->all();

        $kantorcabang = $this->kantorcabangRepository->create($input);

        Flash::success('Kantorcabang saved successfully.');

        return redirect(route('kantorcabangs.index'));
    }

    /**
     * Display the specified Kantorcabang.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $kantorcabang = $this->kantorcabangRepository->findWithoutFail($id);

        if (empty($kantorcabang)) {
            Flash::error('Kantorcabang not found');

            return redirect(route('kantorcabangs.index'));
        }

        return view('kantorcabangs.show')->with('kantorcabang', $kantorcabang);
    }

    /**
     * Show the form for editing the specified Kantorcabang.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $kantorcabang = $this->kantorcabangRepository->findWithoutFail($id);

        if (empty($kantorcabang)) {
            Flash::error('Kantorcabang not found');

            return redirect(route('kantorcabangs.index'));
        }

        return view('kantorcabangs.edit')->with('kantorcabang', $kantorcabang);
    }

    /**
     * Update the specified Kantorcabang in storage.
     *
     * @param  int              $id
     * @param UpdateKantorcabangRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKantorcabangRequest $request)
    {
        $kantorcabang = $this->kantorcabangRepository->findWithoutFail($id);

        if (empty($kantorcabang)) {
            Flash::error('Kantorcabang not found');

            return redirect(route('kantorcabangs.index'));
        }

        $kantorcabang = $this->kantorcabangRepository->update($request->all(), $id);

        Flash::success('Kantorcabang updated successfully.');

        return redirect(route('kantorcabangs.index'));
    }

    /**
     * Remove the specified Kantorcabang from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $kantorcabang = $this->kantorcabangRepository->findWithoutFail($id);

        if (empty($kantorcabang)) {
            Flash::error('Kantorcabang not found');

            return redirect(route('kantorcabangs.index'));
        }

        $this->kantorcabangRepository->delete($id);

        Flash::success('Kantorcabang deleted successfully.');

        return redirect(route('kantorcabangs.index'));
    }
}
