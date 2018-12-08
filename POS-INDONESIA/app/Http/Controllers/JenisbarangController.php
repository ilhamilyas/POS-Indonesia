<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJenisbarangRequest;
use App\Http\Requests\UpdateJenisbarangRequest;
use App\Repositories\JenisbarangRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class JenisbarangController extends AppBaseController
{
    /** @var  JenisbarangRepository */
    private $jenisbarangRepository;

    public function __construct(JenisbarangRepository $jenisbarangRepo)
    {
        $this->jenisbarangRepository = $jenisbarangRepo;
    }

    /**
     * Display a listing of the Jenisbarang.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jenisbarangRepository->pushCriteria(new RequestCriteria($request));
        $jenisbarangs = $this->jenisbarangRepository->all();

        return view('jenisbarangs.index')
            ->with('jenisbarangs', $jenisbarangs);
    }

    /**
     * Show the form for creating a new Jenisbarang.
     *
     * @return Response
     */
    public function create()
    {
        return view('jenisbarangs.create');
    }

    /**
     * Store a newly created Jenisbarang in storage.
     *
     * @param CreateJenisbarangRequest $request
     *
     * @return Response
     */
    public function store(CreateJenisbarangRequest $request)
    {
        $input = $request->all();

        $jenisbarang = $this->jenisbarangRepository->create($input);

        Flash::success('Jenisbarang saved successfully.');

        return redirect(route('jenisbarangs.index'));
    }

    /**
     * Display the specified Jenisbarang.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jenisbarang = $this->jenisbarangRepository->findWithoutFail($id);

        if (empty($jenisbarang)) {
            Flash::error('Jenisbarang not found');

            return redirect(route('jenisbarangs.index'));
        }

        return view('jenisbarangs.show')->with('jenisbarang', $jenisbarang);
    }

    /**
     * Show the form for editing the specified Jenisbarang.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jenisbarang = $this->jenisbarangRepository->findWithoutFail($id);

        if (empty($jenisbarang)) {
            Flash::error('Jenisbarang not found');

            return redirect(route('jenisbarangs.index'));
        }

        return view('jenisbarangs.edit')->with('jenisbarang', $jenisbarang);
    }

    /**
     * Update the specified Jenisbarang in storage.
     *
     * @param  int              $id
     * @param UpdateJenisbarangRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJenisbarangRequest $request)
    {
        $jenisbarang = $this->jenisbarangRepository->findWithoutFail($id);

        if (empty($jenisbarang)) {
            Flash::error('Jenisbarang not found');

            return redirect(route('jenisbarangs.index'));
        }

        $jenisbarang = $this->jenisbarangRepository->update($request->all(), $id);

        Flash::success('Jenisbarang updated successfully.');

        return redirect(route('jenisbarangs.index'));
    }

    /**
     * Remove the specified Jenisbarang from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jenisbarang = $this->jenisbarangRepository->findWithoutFail($id);

        if (empty($jenisbarang)) {
            Flash::error('Jenisbarang not found');

            return redirect(route('jenisbarangs.index'));
        }

        $this->jenisbarangRepository->delete($id);

        Flash::success('Jenisbarang deleted successfully.');

        return redirect(route('jenisbarangs.index'));
    }
}
