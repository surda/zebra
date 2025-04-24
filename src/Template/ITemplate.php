<?php declare(strict_types=1);

namespace Surda\Zebra\Template;

interface ITemplate
{
    public function getTemplateName(): string;

    /**
     * @return mixed[]
     */
    public function getTemplateVariables(): array;
}