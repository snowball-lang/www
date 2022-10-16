<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/packages/{uuid}', function ($uuid) {
    return new \App\Http\Resources\PackageResource(\App\Models\Package::query()->first($uuid));
});

Route::get('/packages', function () {
    return new \App\Http\Resources\PackageCollection(\App\Models\Package::all()->where('user_id', \Illuminate\Support\Facades\Auth::id()));
})->middleware(['auth:sanctum']);

Route::post('/packages/submit', function (Request $request) {

    if (!$request->input('name')) {
        // TODO: throw error
    }

    $p = \App\Models\Package::query()->create([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'user_id' => $request->user()->id
    ]);
    return new \App\Http\Resources\PackageResource($p);
})->middleware(['auth:sanctum']);
