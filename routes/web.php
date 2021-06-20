<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahassiswaController;

Route::get("/", function(){
    return redirect()->route("mahasiswa.index");
});

Route::resource("mahasiswa", MahassiswaController::class)->only(["index", "store"]);
