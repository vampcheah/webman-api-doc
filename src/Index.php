<?php
/**
 * Created by PhpStorm.
 * User: 小灰灰
 * Date: 2022-06-29
 * Time: 15:45:55
 * Info:
 */

namespace vampcheah\ApiDocWebman;

use vampcheah\ApiDocWebman\ApiDoc;
use vampcheah\ApiDocWebman\BootstrapApiDoc;

class Index
{
  public function index()
  {
    $api = new BootstrapApiDoc();
    $doc = $api->getHtml();

    return $doc;
  }
}
