<?php declare(strict_types=1);

namespace Surda\Zebra\Template;

class Template implements ITemplate
{
    private string $templateName;

    /** @var mixed[] */
    private array $templateVariables;

    /**
     * @param mixed[] $templateVariables
     */
    public function __construct(string $templateName, array $templateVariables = [])
    {
        $this->templateName = $templateName;
        $this->templateVariables = $templateVariables;
    }

    public function getTemplateName(): string
    {
        return $this->templateName;
    }

    /**
     * @return mixed[]
     */
    public function getTemplateVariables(): array
    {
        return $this->templateVariables;
    }
}