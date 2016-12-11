<?php

/* base.html.twig */
class __TwigTemplate_5382e1857de27104bc2e26a64a63b709e760b47d63ef8bb38a14ae56c8f213a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc0834ca4f2264624d26b3dd24dd0403f43e782ffce1f66baacf7a77564af7b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0834ca4f2264624d26b3dd24dd0403f43e782ffce1f66baacf7a77564af7b8->enter($__internal_cc0834ca4f2264624d26b3dd24dd0403f43e782ffce1f66baacf7a77564af7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e094e82778b581730aa5fab3263dc8ba49dfc880751da21c9ec57c1dc1ad4b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e094e82778b581730aa5fab3263dc8ba49dfc880751da21c9ec57c1dc1ad4b5b->enter($__internal_e094e82778b581730aa5fab3263dc8ba49dfc880751da21c9ec57c1dc1ad4b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cc0834ca4f2264624d26b3dd24dd0403f43e782ffce1f66baacf7a77564af7b8->leave($__internal_cc0834ca4f2264624d26b3dd24dd0403f43e782ffce1f66baacf7a77564af7b8_prof);

        
        $__internal_e094e82778b581730aa5fab3263dc8ba49dfc880751da21c9ec57c1dc1ad4b5b->leave($__internal_e094e82778b581730aa5fab3263dc8ba49dfc880751da21c9ec57c1dc1ad4b5b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e7d94f5e7725a4b9ac5b86414ea06d19693f6a546dc78a26905a2c497ea0ba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e7d94f5e7725a4b9ac5b86414ea06d19693f6a546dc78a26905a2c497ea0ba0->enter($__internal_3e7d94f5e7725a4b9ac5b86414ea06d19693f6a546dc78a26905a2c497ea0ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_490a4643648330ddd7455075804edc972559f55e6492101ef37b512b09653eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490a4643648330ddd7455075804edc972559f55e6492101ef37b512b09653eb5->enter($__internal_490a4643648330ddd7455075804edc972559f55e6492101ef37b512b09653eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_490a4643648330ddd7455075804edc972559f55e6492101ef37b512b09653eb5->leave($__internal_490a4643648330ddd7455075804edc972559f55e6492101ef37b512b09653eb5_prof);

        
        $__internal_3e7d94f5e7725a4b9ac5b86414ea06d19693f6a546dc78a26905a2c497ea0ba0->leave($__internal_3e7d94f5e7725a4b9ac5b86414ea06d19693f6a546dc78a26905a2c497ea0ba0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d9c68c7893e774ed0bc70d3aa81918c62ddaf50bfe1319c7d26996e33e5a8c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9c68c7893e774ed0bc70d3aa81918c62ddaf50bfe1319c7d26996e33e5a8c15->enter($__internal_d9c68c7893e774ed0bc70d3aa81918c62ddaf50bfe1319c7d26996e33e5a8c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a7224b751a46727170502275a24906a859f03cb8f8c7c6f9c6d4ea2f88300a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7224b751a46727170502275a24906a859f03cb8f8c7c6f9c6d4ea2f88300a69->enter($__internal_a7224b751a46727170502275a24906a859f03cb8f8c7c6f9c6d4ea2f88300a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a7224b751a46727170502275a24906a859f03cb8f8c7c6f9c6d4ea2f88300a69->leave($__internal_a7224b751a46727170502275a24906a859f03cb8f8c7c6f9c6d4ea2f88300a69_prof);

        
        $__internal_d9c68c7893e774ed0bc70d3aa81918c62ddaf50bfe1319c7d26996e33e5a8c15->leave($__internal_d9c68c7893e774ed0bc70d3aa81918c62ddaf50bfe1319c7d26996e33e5a8c15_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad68f15264af0bb68ad3affe6bcb9560a9e3098509d97331cb7c9ec5531b2456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad68f15264af0bb68ad3affe6bcb9560a9e3098509d97331cb7c9ec5531b2456->enter($__internal_ad68f15264af0bb68ad3affe6bcb9560a9e3098509d97331cb7c9ec5531b2456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b710ceff96116974b4a22defc6dfe6941cb0656eab55949028f1312641fd6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b710ceff96116974b4a22defc6dfe6941cb0656eab55949028f1312641fd6bf->enter($__internal_0b710ceff96116974b4a22defc6dfe6941cb0656eab55949028f1312641fd6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0b710ceff96116974b4a22defc6dfe6941cb0656eab55949028f1312641fd6bf->leave($__internal_0b710ceff96116974b4a22defc6dfe6941cb0656eab55949028f1312641fd6bf_prof);

        
        $__internal_ad68f15264af0bb68ad3affe6bcb9560a9e3098509d97331cb7c9ec5531b2456->leave($__internal_ad68f15264af0bb68ad3affe6bcb9560a9e3098509d97331cb7c9ec5531b2456_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3370fdf9eaa008803d241f106f33e85c455bed43622937b0e93b0a790cf873c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3370fdf9eaa008803d241f106f33e85c455bed43622937b0e93b0a790cf873c1->enter($__internal_3370fdf9eaa008803d241f106f33e85c455bed43622937b0e93b0a790cf873c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b095f2d380e41bfee2cd7b97b9af2de3e14b4709584833f16f545ca214eb34e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b095f2d380e41bfee2cd7b97b9af2de3e14b4709584833f16f545ca214eb34e9->enter($__internal_b095f2d380e41bfee2cd7b97b9af2de3e14b4709584833f16f545ca214eb34e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b095f2d380e41bfee2cd7b97b9af2de3e14b4709584833f16f545ca214eb34e9->leave($__internal_b095f2d380e41bfee2cd7b97b9af2de3e14b4709584833f16f545ca214eb34e9_prof);

        
        $__internal_3370fdf9eaa008803d241f106f33e85c455bed43622937b0e93b0a790cf873c1->leave($__internal_3370fdf9eaa008803d241f106f33e85c455bed43622937b0e93b0a790cf873c1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/projetoRouting/app/Resources/views/base.html.twig");
    }
}
