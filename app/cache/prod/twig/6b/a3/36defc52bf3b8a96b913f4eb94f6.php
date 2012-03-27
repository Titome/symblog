<?php

/* ::base.html.twig */
class __TwigTemplate_6ba336defc52bf3b8a96b913f4eb94f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
        
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "            
        <link rel=\"shortcut icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        
        <section id=\"wrapper\">
        
            <header id=\"header\">
            
                <div class=\"top\">
                    
                    ";
        // line 27
        $this->displayBlock('navigation', $context, $blocks);
        // line 40
        echo "                    
                </div>
                
                <hgroup>
                    <h2>";
        // line 44
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>
                        ";
        // line 46
        $this->displayBlock('blog_tagline', $context, $blocks);
        // line 49
        echo "                    </h3>
                </hgroup>
                
            </header>
            
            <section class=\"main-col\">
            
                ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "                
            </section>
            
            <aside class=\"sidebar\">
                ";
        // line 61
        $this->displayBlock('sidebar', $context, $blocks);
        // line 62
        echo "            </aside>
            
            <div id=\"footer\">
            
                ";
        // line 66
        $this->displayBlock('footer', $context, $blocks);
        // line 69
        echo "                    
            </div>
            
        </section>
        
        ";
        // line 74
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        // line 28
        echo "                        
                        <nav>
                            
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage"), "html", null, true);
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_about"), "html", null, true);
        echo "\">About</a></li>
                                <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact"), "html", null, true);
        echo "\">Contact</a></li>
                            </ul>
                            
                        </nav>
                    
                    ";
    }

    // line 44
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage"), "html", null, true);
        echo "\">symblog</a>";
    }

    // line 46
    public function block_blog_tagline($context, array $blocks = array())
    {
        // line 47
        echo "                            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage"), "html", null, true);
        echo "\">creating a blog in Symfony2</a>
                        ";
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
    }

    // line 61
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 66
    public function block_footer($context, array $blocks = array())
    {
        // line 67
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
