<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PonenteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'ciudad' => $this->ciudad,
            'pais' => $this->pais,
            'imagen' => $this->imagen,
            'redes' => $this->redes,
            'areas' => $this->areas,
        ];
    }
}
