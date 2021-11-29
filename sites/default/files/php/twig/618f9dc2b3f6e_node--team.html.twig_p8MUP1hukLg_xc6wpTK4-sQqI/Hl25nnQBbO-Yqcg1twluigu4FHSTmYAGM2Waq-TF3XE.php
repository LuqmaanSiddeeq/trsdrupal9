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

/* themes/custom/gavias_edmix/templates/node/node--team.html.twig */
class __TwigTemplate_b62cd8c7b380ffe2f40750719ccacb29b3def1e7646bd36ab29427fd1532d936 extends \Twig\Template
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
  <div class=\"team-block team-teaser-1\">
    <div class=\"team-image\">";
            // line 3
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_image", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo "
      <a class=\"team-email\" href=\"mailto:";
            // line 4
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_email", [], "any", false, false, true, 4), "value", [], "any", false, false, true, 4), 4, $this->source));
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Email"));
            echo "</a>
    </div>
    <div class=\"team-content\">
      <div class=\"team-name\"><a href=\"";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 7, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_name", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7), 7, $this->source));
            echo "</a></div>   
      <div class=\"team-job\">";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8), 8, $this->source));
            echo "</div>
      <div class=\"team-body\">";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</div>
      <div class=\"socials\">
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_social", [], "any", false, false, true, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getFieldCollectionItem", [], "method", false, false, true, 12), "field_team_social_link", [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12), 12, $this->source));
                echo "\">
            <i class=\"";
                // line 13
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getFieldCollectionItem", [], "method", false, false, true, 13), "field_team_social_icon", [], "any", false, false, true, 13), "value", [], "any", false, false, true, 13), 13, $this->source));
                echo "\"></i>
          </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo " 
      </div>
    </div>
  </div>  

";
        } elseif ((        // line 20
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 21
            echo "
  <div class=\"team-block team-teaser-2\">
    <div class=\"team-image\">";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_image", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "
      <a class=\"team-email\" href=\"mailto:";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_email", [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24), 24, $this->source));
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Email"));
            echo "</a>
    </div>
    <div class=\"team-content\">
      <!-- <div class=\"team-name\"><a href=\"";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 27, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_name", [], "any", false, false, true, 27), "value", [], "any", false, false, true, 27), 27, $this->source));
            echo "</a></div>    -->
      <div class=\"team-name\">";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_name", [], "any", false, false, true, 28), "value", [], "any", false, false, true, 28), 28, $this->source));
            echo "</div>
      <div class=\"team-job\">";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29), 29, $this->source));
            echo "</div>
      <div class=\"team-body\">";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "</div>
      <div class=\"socials\">
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_social", [], "any", false, false, true, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 33
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getFieldCollectionItem", [], "method", false, false, true, 33), "field_team_social_link", [], "any", false, false, true, 33), "value", [], "any", false, false, true, 33), 33, $this->source));
                echo "\">
            <i class=\"";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getFieldCollectionItem", [], "method", false, false, true, 34), "field_team_social_icon", [], "any", false, false, true, 34), "value", [], "any", false, false, true, 34), 34, $this->source));
                echo "\"></i>
          </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo " 
      </div>
    </div>
  </div>  

";
        } else {
            // line 42
            echo "
";
            // line 44
            $context["classes"] = [0 => "node", 1 => "node-detail", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 47
($context["node"] ?? null), "bundle", [], "any", false, false, true, 47), 47, $this->source))), 3 => ((twig_get_attribute($this->env, $this->source,             // line 48
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 48)) ? ("node--promoted") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,             // line 49
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 49)) ? ("node--sticky") : ("")), 5 => (( !twig_get_attribute($this->env, $this->source,             // line 50
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 50)) ? ("node--unpublished") : ("")), 6 => ((            // line 51
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 51, $this->source)))) : ("")), 7 => "clearfix"];
            // line 55
            echo "
<article";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 56), 56, $this->source), "html", null, true);
            echo ">
  <div class=\"team-single-page\">
    <div class=\"row\">
      <div class=\"col-md-3 col-sm-3 col-xs-12\">
        <div class=\"team-image\">";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_image", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "</div>
        <div class=\"team-contact margin-top-10\">
            <div class=\"heading\">";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contact Info"));
            echo "</div>
            <div class=\"content-inner\">";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_contact", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "</div>
            <div class=\"socials\">
              ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_social", [], "any", false, false, true, 65));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 66
                echo "                <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getFieldCollectionItem", [], "method", false, false, true, 66), "field_team_social_link", [], "any", false, false, true, 66), "value", [], "any", false, false, true, 66), 66, $this->source));
                echo "\">
                  <i class=\"";
                // line 67
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getFieldCollectionItem", [], "method", false, false, true, 67), "field_team_social_icon", [], "any", false, false, true, 67), "value", [], "any", false, false, true, 67), 67, $this->source));
                echo "\"></i>
                </a>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo " 
            </div>
          </div>
      </div>
      <div class=\"col-md-9 col-sm-9 col-xs-12\">
        <div class=\"team-name clearfix\">
          <div class=\"name\">";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_name", [], "any", false, false, true, 75), "value", [], "any", false, false, true, 75), 75, $this->source));
            echo "</div>
          <div class=\"job\">";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 76), "value", [], "any", false, false, true, 76), 76, $this->source));
            echo "</div>
        </div> 
        <div class=\"team-description\">";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_description", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "</div>
        <div class=\"team-info\">
          <div class=\"team-education\">
            <div class=\"heading\">";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Education"));
            echo "</div>
            <div class=\"content-inner\">";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_education", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "</div>
          </div>
        </div>
        <div";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 85), 85, $this->source), "html", null, true);
            echo ">
          ";
            // line 86
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 86, $this->source), "field_team_name", "field_team_contact", "field_team_image", "field_team_contact", "field_team_quote", "field_team_social", "field_team_education", "field_team_position", "field_team_email", "field_team_description", "comment"), "html", null, true);
            echo "
        </div>
        <div class=\"team-quote\"> ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_quote", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo " </div>
      </div>
     
    ";
            // line 91
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 91)) {
                // line 92
                echo "      <div id=\"node-single-comment\">
        ";
                // line 93
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 95
            echo "  

  </div>
</article>

<!-- End Display article for detail page -->
";
        }
        // line 102
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_edmix/templates/node/node--team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 102,  270 => 95,  264 => 93,  261 => 92,  259 => 91,  253 => 88,  248 => 86,  244 => 85,  238 => 82,  234 => 81,  228 => 78,  223 => 76,  219 => 75,  211 => 69,  202 => 67,  197 => 66,  193 => 65,  188 => 63,  184 => 62,  179 => 60,  172 => 56,  169 => 55,  167 => 51,  166 => 50,  165 => 49,  164 => 48,  163 => 47,  162 => 44,  159 => 42,  151 => 36,  142 => 34,  137 => 33,  133 => 32,  128 => 30,  124 => 29,  120 => 28,  114 => 27,  106 => 24,  102 => 23,  98 => 21,  96 => 20,  89 => 15,  80 => 13,  75 => 12,  71 => 11,  66 => 9,  62 => 8,  56 => 7,  48 => 4,  44 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gavias_edmix/templates/node/node--team.html.twig", "/home/bestsols/public_html/dev1.bestsols.co.uk/themes/custom/gavias_edmix/templates/node/node--team.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 11, "set" => 44);
        static $filters = array("escape" => 3, "e" => 4, "t" => 4, "clean_class" => 47, "without" => 86);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'e', 't', 'clean_class', 'without'],
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
