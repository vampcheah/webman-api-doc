<?php

use Webman\Route;

Route::any("/apidoc", [vampcheah\ApiDocWebman\Index::class, "index"]);
Route::any("/apidoc/check_auth", [
  vampcheah\ApiDocWebman\BootstrapApiDoc::class,
  "check_auth",
]);
