<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manga;
use App\Http\Resources\MangaResource;
use App\Http\Requests\MangaRequest;

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

    public function update($id, MangaRequest $request){
        $mangaExist = $this->manga->find($id);

        if($mangaExist){
            $mangaExist->update($request->all());

            return response(['message'=> 'Manga updated with sucess'])->setStatusCode(200);
        }

        return response(['error'=>'Manga not found'])->setStatusCode(404);
    }

    public function destroy($id){
        $mangaExist = $this->manga->find($id);

        if($mangaExist){
            $mangaExist->delete();

            return response(['message'=>'Manga deleted with sucess'])->setStatusCode(200);
        }

        return response(['error'=>'Manga not found'])->setStatusCode(404);
    }

}
