<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/gavias_edmix/templates/node/node--vacancies.html.twig */
class __TwigTemplate_bdd520e74acf73068e57db7d51d20ab57bf64cd9551d5d874b4b082214205cbc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((($context["view_mode"] ?? null) == "teaser")) {
            echo " 
  
";
        } elseif ((        // line 3
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 4
            echo "
  <div class=\"team-block team-teaser-2\">
    <div class=\"team-image\">
      ";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image_small_vacancies", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "      
    </div>
    <div class=\"team-content\">
      <div class=\"team-name\">";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 10, $this->source), "html", null, true);
            echo "</div>  
      <div class=\"team-job\"><a class=\"btn-theme\" href=\"";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 11, $this->source), "html", null, true);
            echo "\">Read more</a></div>
      <!-- <div class=\"team-job\"><a href=\"";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 12, $this->source), "html", null, true);
            echo "\">Read More</a></div> -->
    </div>
  </div> 

";
        } else {
            // line 17
            echo "
";
            // line 19
            $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 21
($context["node"] ?? null), "bundle", [], "any", false, false, true, 21), 21, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,             // line 22
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 22)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,             // line 23
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 23)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,             // line 24
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 24)) ? ("node--unpublished") : ("")), 5 => ((            // line 25
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 25, $this->source)))) : (""))];
            // line 28
            echo "
<article";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 29), 29, $this->source), "about"), "html", null, true);
            echo ">
  <div class=\"align-left style-default padding-bottom-30\">";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image_large_vacancies", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "</div>
  <header>
    <div class=\"container\">
      <div class=\"widget gsc-heading align-left style-default padding-bottom-15\">
        <h2";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title title"], "method", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "><span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 34, $this->source), "html", null, true);
            echo "</span></h2>
        <div class=\"heading-line\"><span class=\"one\"></span><span class=\"second\"></span><span class=\"three\"></span></div>
      </div>  
    </div>
  </header>
  
  <div";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 40), 40, $this->source), "html", null, true);
            echo ">
    ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 41, $this->source), "field_image_small_vacancies", "field_image_large_vacancies", "label", "comment"), "html", null, true);
            echo "
  </div>
  <div style=\"padding-bottom:10\">    
  </div>
</article>

<!-- End Display article for detail page -->
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_edmix/templates/node/node--vacancies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  108 => 40,  97 => 34,  90 => 30,  86 => 29,  83 => 28,  81 => 25,  80 => 24,  79 => 23,  78 => 22,  77 => 21,  76 => 19,  73 => 17,  65 => 12,  61 => 11,  57 => 10,  51 => 7,  46 => 4,  44 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gavias_edmix/templates/node/node--vacancies.html.twig", "/home/bestsols/public_html/dev1.bestsols.co.uk/themes/custom/gavias_edmix/templates/node/node--vacancies.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 19);
        static $filters = array("escape" => 7, "clean_class" => 21, "without" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'clean_class', 'without'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
