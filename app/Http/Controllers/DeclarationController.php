<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDeclarationRequest;
use App\Http\Requests\UpdateDeclarationRequest;
use App\Repositories\DeclarationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;
use Illuminate\Support\Facades\Http;
use App\Models\Declaration;

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
        $declarations = Declaration::where('user_id',Auth::id())->get();

        return view('declarations.index')
            ->with('declarations', $declarations);

    }
    public function apiData(Request $request)
    {
       $response = Http::get('https://app.sportdataapi.com/api/v1/soccer/countries/29?apikey=4ed39d40-c0be-11ec-ac2c-bff8a910b194');

       $jsondata = json_decode($response);

       return $jsondata;

        
    }

    /**
     * Show the form for creating a new Declaration.
     *
     * @return Response
     */
    public function create()
    {
        $response = Http::get('https://app.sportdataapi.com/api/v1/soccer/countries/29?apikey=1b74efd0-c0c8-11ec-9804-ede59613358b');

       $jsondata = json_decode($response);

       //return $jsondata->data->name;

        return view('declarations.create',compact("jsondata"));

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
        $input['user_id'] = Auth::id();
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
