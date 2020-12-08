<?php namespace Mohsin\TextWithButtonWidget\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * TextWithButton Form Widget
 */
class TextWithButton extends FormWidgetBase
{
    /**
     * @inheritDoc
     */
    protected $defaultAlias = 'text-with-button';

    /**
     * @var string The button label
     */
    public $buttonText = "Default";

    /**
     * @var string The request handler
     */
    public $buttonHandler = "onDefaultHandler";

    /**
     * @inheritDoc
     */
    public function init()
    {
        $this->fillFromConfig([
            'buttonText',
            'buttonHandler'
        ]);
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('text_with_button');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['model'] = $this->model;
        $this->vars['buttonText'] = $this->buttonText;
        $this->vars['buttonHandler'] = $this->buttonHandler;
    }

    /**
     * @inheritDoc
     */
    public function loadAssets()
    {
        $this->addCss('css/textwithbutton.css', 'Mohsin.TextWithButtonWidget');
    }

    /**
     * @inheritDoc
     */
    public function getSaveValue($value)
    {
        return $value;
    }
}
