<?php

declare(strict_types=1);

namespace PhpMyAdmin\Controllers\Normalization;

use PhpMyAdmin\Controllers\AbstractController;
use PhpMyAdmin\Current;
use PhpMyAdmin\Http\ServerRequest;
use PhpMyAdmin\Normalization;
use PhpMyAdmin\ResponseRenderer;
use PhpMyAdmin\Template;
use PhpMyAdmin\Url;

use function intval;
use function min;

final class CreateNewColumnController extends AbstractController
{
    public function __construct(ResponseRenderer $response, Template $template, private Normalization $normalization)
    {
        parent::__construct($response, $template);
    }

    public function __invoke(ServerRequest $request): void
    {
        $numFields = min(4096, intval($request->getParsedBodyParam('numFields')));
        $html = $this->normalization->getHtmlForCreateNewColumn($numFields, Current::$database, Current::$table);
        $html .= Url::getHiddenInputs(Current::$database, Current::$table);
        $this->response->addHTML($html);
    }
}
