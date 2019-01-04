<?php

/* /application/themes/mytheme/pages/about.htm */
class __TwigTemplate_929cfef8d13b85ab4e2c2b887e0f99107308930e9238171e447d3c394bb08967 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>About us</h1>
<p>This is the About page</p>
<hr>
";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("resourcesLinks"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/application/themes/mytheme/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>About us</h1>
<p>This is the About page</p>
<hr>
{% component 'resourcesLinks' %}", "/application/themes/mytheme/pages/about.htm", "");
    }
}
