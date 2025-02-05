<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* exemple.html.twig */
class __TwigTemplate_3931551efed1a6498cfe9f8485bc6271 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 8
        yield "    </head>
    <body>
        <div id=\"content\">";
        // line 10
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        yield "</div>
        <div id=\"footer\">
            ";
        // line 12
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 15
        yield "        </div>
    </body>
</html>";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "            <link rel=\"stylesheet\" href=\"style.css\"/>
            <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield " - My Webpage</title>
        ";
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "                &copy; Copyright 2011 by <a href=\"https://facebook.com/\">you</a>.
            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "exemple.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  114 => 13,  107 => 12,  97 => 10,  81 => 6,  78 => 5,  71 => 4,  64 => 15,  62 => 12,  57 => 10,  53 => 8,  51 => 4,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        {% block head %}
            <link rel=\"stylesheet\" href=\"style.css\"/>
            <title>{% block title %}{% endblock %} - My Webpage</title>
        {% endblock %}
    </head>
    <body>
        <div id=\"content\">{% block content %}{% endblock %}</div>
        <div id=\"footer\">
            {% block footer %}
                &copy; Copyright 2011 by <a href=\"https://facebook.com/\">you</a>.
            {% endblock %}
        </div>
    </body>
</html>", "exemple.html.twig", "C:\\xampp\\htdocs\\cabinet-medical-mvc\\views\\exemple.html.twig");
    }
}
