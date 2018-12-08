<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePaketRequest;
use App\Http\Requests\UpdatePaketRequest;
use App\Repositories\PaketRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PaketController extends AppBaseController
{
    /** @var  PaketRepository */
    private $paketRepository;

    public function __construct(PaketRepository $paketRepo)
    {
        $this->paketRepository = $paketRepo;
    }

    /**
     * Display a listing of the Paket.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->paketRepository->pushCriteria(new RequestCriteria($request));
        $pakets = $this->paketRepository->all();

        return view('pakets.index')
            ->with('pakets', $pakets);
    }

    /**
     * Show the form for creating a new Paket.
     *
     * @return Response
     */
    public function create()
    {
        return view('pakets.create');
    }

    /**
     * Store a newly created Paket in storage.
     *
     * @param CreatePaketRequest $request
     *
     * @return Response
     */
    public function store(CreatePaketRequest $request)
    {
        $input = $request->all();

        $paket = $this->paketRepository->create($input);

        Flash::success('Paket saved successfully.');

        return redirect(route('pakets.index'));
    }

    /**
     * Display the specified Paket.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $paket = $this->paketRepository->findWithoutFail($id);

        if (empty($paket)) {
            Flash::error('Paket not found');

            return redirect(route('pakets.index'));
        }

        return view('pakets.show')->with('paket', $paket);
    }

    /**
     * Show the form for editing the specified Paket.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $paket = $this->paketRepository->findWithoutFail($id);

        if (empty($paket)) {
            Flash::error('Paket not found');

            return redirect(route('pakets.index'));
        }

        return view('pakets.edit')->with('paket', $paket);
    }

    /**
     * Update the specified Paket in storage.
     *
     * @param  int              $id
     * @param UpdatePaketRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaketRequest $request)
    {
        $paket = $this->paketRepository->findWithoutFail($id);

        if (empty($paket)) {
            Flash::error('Paket not found');

            return redirect(route('pakets.index'));
        }

        $paket = $this->paketRepository->update($request->all(), $id);

        Flash::success('Paket updated successfully.');

        return redirect(route('pakets.index'));
    }

    /**
     * Remove the specified Paket from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $paket = $this->paketRepository->findWithoutFail($id);

        if (empty($paket)) {
            Flash::error('Paket not found');

            return redirect(route('pakets.index'));
        }

        $this->paketRepository->delete($id);

        Flash::success('Paket deleted successfully.');

        return redirect(route('pakets.index'));
    }
}
