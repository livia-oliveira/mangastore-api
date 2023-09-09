<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use App\Http\Resources\MangaResource;
use App\Http\Requests\MangaRequest;

use Illuminate\Http\Request;

class MangaController extends Controller
{
    private $manga;

    public function __construct(Manga $manga){
        $this->manga = $manga;
    }

    public function index(){
        return MangaResource::collection(
            $this->manga->all()
        );
    }

    public function store(MangaRequest $request){
        $manga = $this->manga->create($request->all());

        if($manga){
            $resource = new MangaResource($manga);

            return $resource->response()->setStatusCode(201);
        }

        return response(['error'=>'Manga dont´t created'])->setStatusCode(401);
    }

}
