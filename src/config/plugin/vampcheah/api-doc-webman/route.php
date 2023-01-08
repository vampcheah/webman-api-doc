<?php

use Webman\Route;

Route::get("/apidoc", [vampcheah\ApiDocWebman\Index::class, "index"]);
Route::post("/apidoc/check_auth", [
  vampcheah\ApiDocWebman\BootstrapApiDoc::class,
  "check_auth",
]);
