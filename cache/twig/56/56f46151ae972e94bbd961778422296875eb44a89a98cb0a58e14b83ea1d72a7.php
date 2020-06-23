<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Page:/Users/hannahfan/Documents/MAMP Websites/Caltech-Engineers-Without-Borders-Website-/user/pages/07.contact/_main */
class __TwigTemplate_3dbdb5069804fff02d3ebb82180a73ca0d8fb2c2340cbd5347719900ea24c5df extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"modular-row contact borderbottom\">
    <div class=\"g-grid pure-g-r\">
        <div id=\"listing\" class=\"g-block pure-u-2-3\">
            


            




<form name=\"my-nice-form\"
      action=\"/Caltech-Engineers-Without-Borders-Website-/contact\"
      method=\"POST\"
      id=\"my-nice-form\"            class=\" \"
                  >

  
            

    <div class=\"form-field   \">
                                    <div class=\"form-label \">
                    <label class=\"inline\" for=\"name\"  >
                                                                                                        Name
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"text\"
                data-grav-disabled=\"true\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper  \">
                                                        <input
                                                                name=\"data[name]\"
                                value=\"\"
                                                                    type=\"text\"
                                                    class=\" form-control form-control-lg\"
                                    id=\"name\"                                                                                                             placeholder=\"Enter&#x20;your&#x20;name\"                                                                                                                                                autocomplete=\"on\"                                                                                                            
                                                                        required=\"required\"                                                                                                                                            
                            />
                                                                                    </div>
                    
                                
            </div>
            </div>
          

    <div class=\"form-field   \">
                                    <div class=\"form-label \">
                    <label class=\"inline\" for=\"email\"  >
                                                                                                        Email
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"email\"
                data-grav-disabled=\"true\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper  \">
                                                        <input
                                                                name=\"data[email]\"
                                value=\"\"
                                                                    type=\"email\"
                                            class=\" form-control form-control-lg\"
                                    id=\"email\"                                                                                                             placeholder=\"Enter&#x20;your&#x20;email&#x20;address\"                                                                                                                                                                                                                                                            
                                                                        required=\"required\"                                                                                                                                            
                            />
                                                                                </div>
                                                    
            </div>
            </div>
          

    <div class=\"form-field   \">
                                    <div class=\"form-label \">
                    <label class=\"inline\"  >
                                                                                                        Message
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"textarea\"
                data-grav-disabled=\"true\"
                data-grav-default=\"null\"
                            >
                                        <div class=\"form-textarea-wrapper long \">
        <textarea
                        name=\"data[message]\"
                                        class=\" form-control form-control-lg\"
                                                                placeholder=\"Enter your message\"                                                                                required=\"required\"                                                                                                                        ></textarea>
    </div>
                                
            </div>
            </div>
  
  <input type=\"hidden\" name=\"__form-name__\" value=\"my-nice-form\" />
  
    <div class=\"buttons\">
  
                            <button
                                                class=\"button \"
                                
                type=\"submit\"

                            >
                Submit
          </button>
                  
    </div>
  
  <input type=\"hidden\" name=\"__unique_form_id__\" value=\"eTyG2DdOARkpWu8ZJXcn\" />  <input type=\"hidden\" name=\"form-nonce\" value=\"95e47ebbafc4a2eb2bda31cc27dcb4ad\" />
</form>

        </div>
        <div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
            <h4>Our Location</h4>
<p>1200 E California Blvd <br />
Pasadena, CA <br />
MSC 366 <br /></p>
<h4>Contact Information</h4>
<p><strong>Email:</strong>                  ewb@caltech.edu <br /></p>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/hannahfan/Documents/MAMP Websites/Caltech-Engineers-Without-Borders-Website-/user/pages/07.contact/_main";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row contact borderbottom\">
    <div class=\"g-grid pure-g-r\">
        <div id=\"listing\" class=\"g-block pure-u-2-3\">
            


            




<form name=\"my-nice-form\"
      action=\"/Caltech-Engineers-Without-Borders-Website-/contact\"
      method=\"POST\"
      id=\"my-nice-form\"            class=\" \"
                  >

  
            

    <div class=\"form-field   \">
                                    <div class=\"form-label \">
                    <label class=\"inline\" for=\"name\"  >
                                                                                                        Name
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"text\"
                data-grav-disabled=\"true\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper  \">
                                                        <input
                                                                name=\"data[name]\"
                                value=\"\"
                                                                    type=\"text\"
                                                    class=\" form-control form-control-lg\"
                                    id=\"name\"                                                                                                             placeholder=\"Enter&#x20;your&#x20;name\"                                                                                                                                                autocomplete=\"on\"                                                                                                            
                                                                        required=\"required\"                                                                                                                                            
                            />
                                                                                    </div>
                    
                                
            </div>
            </div>
          

    <div class=\"form-field   \">
                                    <div class=\"form-label \">
                    <label class=\"inline\" for=\"email\"  >
                                                                                                        Email
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"email\"
                data-grav-disabled=\"true\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper  \">
                                                        <input
                                                                name=\"data[email]\"
                                value=\"\"
                                                                    type=\"email\"
                                            class=\" form-control form-control-lg\"
                                    id=\"email\"                                                                                                             placeholder=\"Enter&#x20;your&#x20;email&#x20;address\"                                                                                                                                                                                                                                                            
                                                                        required=\"required\"                                                                                                                                            
                            />
                                                                                </div>
                                                    
            </div>
            </div>
          

    <div class=\"form-field   \">
                                    <div class=\"form-label \">
                    <label class=\"inline\"  >
                                                                                                        Message
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"textarea\"
                data-grav-disabled=\"true\"
                data-grav-default=\"null\"
                            >
                                        <div class=\"form-textarea-wrapper long \">
        <textarea
                        name=\"data[message]\"
                                        class=\" form-control form-control-lg\"
                                                                placeholder=\"Enter your message\"                                                                                required=\"required\"                                                                                                                        ></textarea>
    </div>
                                
            </div>
            </div>
  
  <input type=\"hidden\" name=\"__form-name__\" value=\"my-nice-form\" />
  
    <div class=\"buttons\">
  
                            <button
                                                class=\"button \"
                                
                type=\"submit\"

                            >
                Submit
          </button>
                  
    </div>
  
  <input type=\"hidden\" name=\"__unique_form_id__\" value=\"eTyG2DdOARkpWu8ZJXcn\" />  <input type=\"hidden\" name=\"form-nonce\" value=\"95e47ebbafc4a2eb2bda31cc27dcb4ad\" />
</form>

        </div>
        <div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
            <h4>Our Location</h4>
<p>1200 E California Blvd <br />
Pasadena, CA <br />
MSC 366 <br /></p>
<h4>Contact Information</h4>
<p><strong>Email:</strong>                  ewb@caltech.edu <br /></p>
        </div>
    </div>
</div>
", "@Page:/Users/hannahfan/Documents/MAMP Websites/Caltech-Engineers-Without-Borders-Website-/user/pages/07.contact/_main", "");
    }
}
