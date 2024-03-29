<?php

declare(strict_types=1);

namespace PhpMyAdmin\Controllers\Setup;

use PhpMyAdmin\Config\Forms\Setup\SetupFormList;
use PhpMyAdmin\LanguageManager;
use PhpMyAdmin\Setup\FormProcessing;

use function __;
use function is_string;
use function ob_get_clean;
use function ob_start;

class FormController extends AbstractController
{
    /**
     * @param mixed[] $params Request parameters
     *
     * @return string HTML
     */
    public function __invoke(array $params): string
    {
        $pages = $this->getPages();

        $formset = isset($params['formset']) && is_string($params['formset']) ? $params['formset'] : '';

        $formClass = SetupFormList::get($formset);
        if ($formClass === null) {
            return $this->template->render('error/generic', [
                'lang' => $GLOBALS['lang'] ?? 'en',
                'dir' => LanguageManager::$textDir,
                'error_message' => __('Incorrect form specified!'),
            ]);
        }

        ob_start();
        $form = new $formClass($this->config);
        FormProcessing::process($form);
        $page = ob_get_clean();

        return $this->template->render('setup/form/index', [
            'formset' => $formset,
            'pages' => $pages,
            'name' => $form::getName(),
            'page' => $page,
        ]);
    }
}
