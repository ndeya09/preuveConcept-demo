<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDeclarationRequest;
use App\Http\Requests\UpdateDeclarationRequest;
use App\Repositories\DeclarationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DeclarationController extends AppBaseController
{
    /** @var DeclarationRepository $declarationRepository*/
    private $declarationRepository;

    public function __construct(DeclarationRepository $declarationRepo)
    {
        $this->declarationRepository = $declarationRepo;
    }

    /**
     * Display a listing of the Declaration.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $declarations = $this->declarationRepository->all();

        return view('declarations.index')
            ->with('declarations', $declarations);
    }

    /**
     * Show the form for creating a new Declaration.
     *
     * @return Response
     */
    public function create()
    {
        return view('declarations.create');
    }

    /**
     * Store a newly created Declaration in storage.
     *
     * @param CreateDeclarationRequest $request
     *
     * @return Response
     */
    public function store(CreateDeclarationRequest $request)
    {
        $input = $request->all();

        $declaration = $this->declarationRepository->create($input);

        Flash::success('Declaration saved successfully.');

        return redirect(route('declarations.index'));
    }

    /**
     * Display the specified Declaration.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $declaration = $this->declarationRepository->find($id);

        if (empty($declaration)) {
            Flash::error('Declaration not found');

            return redirect(route('declarations.index'));
        }

        return view('declarations.show')->with('declaration', $declaration);
    }

    /**
     * Show the form for editing the specified Declaration.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $declaration = $this->declarationRepository->find($id);

        if (empty($declaration)) {
            Flash::error('Declaration not found');

            return redirect(route('declarations.index'));
        }

        return view('declarations.edit')->with('declaration', $declaration);
    }

    /**
     * Update the specified Declaration in storage.
     *
     * @param int $id
     * @param UpdateDeclarationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDeclarationRequest $request)
    {
        $declaration = $this->declarationRepository->find($id);

        if (empty($declaration)) {
            Flash::error('Declaration not found');

            return redirect(route('declarations.index'));
        }

        $declaration = $this->declarationRepository->update($request->all(), $id);

        Flash::success('Declaration updated successfully.');

        return redirect(route('declarations.index'));
    }

    /**
     * Remove the specified Declaration from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $declaration = $this->declarationRepository->find($id);

        if (empty($declaration)) {
            Flash::error('Declaration not found');

            return redirect(route('declarations.index'));
        }

        $this->declarationRepository->delete($id);

        Flash::success('Declaration deleted successfully.');

        return redirect(route('declarations.index'));
    }
}
