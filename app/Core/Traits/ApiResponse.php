<?php

namespace App\Core\Traits;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

trait ApiResponse
{
    /**
     * Función que retorna una respuesta JSON
     *
     * @param ResourceCollection | Resource | array $data
     * @param int $code
     * @return JsonResponse
     */
    protected function successResponse($data, int $code): JsonResponse
    {
        return response()->json($data, $code);
    }

    /**
     * Función que retorna una respuesta JSON con contenido de algún archivo
     */
    protected function fileResponse(string $pathFile, array $headers = []): BinaryFileResponse
    {
        return response()->file($pathFile, $headers);
    }

    /**
     * Función que retorna una respuesta JSON erronea
     *
     * @param array|string $message
     * @param int $code
     * @return JsonResponse
     */
    protected function errorResponse($message, int $code): JsonResponse
    {
        return response()->json(['code' => $code, 'error' => $message], $code);
    }

    /**
     * Función que retorna una respuesta 204 no content
     */
    protected function noContentResponse(): Response
    {
        return response()->noContent();
    }

    /**
     * Función que retorna un JSON con un listado de registros
     *
     * @param ResourceCollection|Collection|array $collection
     * @param int $code
     * @return JsonResponse
     */
    protected function showAll($collection, int $code = 200): JsonResponse
    {
        return $this->successResponse($collection, $code);
    }

    /**
     * Función que retorna un JSON con un registro
     *
     * @param Resource|JsonResource $resource
     */
    protected function showOne($resource, int $code = 200): JsonResponse
    {
        return $this->successResponse($resource, $code);
    }
}
