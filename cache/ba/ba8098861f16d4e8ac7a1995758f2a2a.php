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

/* header.html.twig */
class __TwigTemplate_936793ccc028fcb1f4fc118473f677a8 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "    <script src=\"https://unpkg.com/@tailwindcss/browser@4\"></script>
  <html class=\"h-full bg-white\">
  <body class=\"h-full\">
<div class=\"min-h-[1024px] bg-white\">
      <div class=\"min-h-full\">
    <!-- Navbar -->
    <nav x-data=\"{ open: false }\" class=\"bg-gray-50\">
      <div class=\"mx-auto max-w-7xl px-4 sm:px-6 lg:px-8\">
        <div class=\"relative flex h-16 items-center justify-between border-b border-gray-200\">
          <div class=\"flex items-center\">
            <div class=\"flex-shrink-0\">
              <img class=\"h-8 w-auto\" src=\"https://tailwindui.com/img/logos/mark.svg?color=violet&amp;shade=500\" alt=\"Your Company\">
            </div>

            <!-- Links section -->
            <div class=\"hidden lg:ml-10 lg:block\">
              <div class=\"flex space-x-4\">
                
                  <a href=\"#\" class=\"bg-gray-100 px-3 py-2 rounded-md text-sm font-medium text-gray-900\" aria-current=\"page\" x-state:on=\"Current\" x-state:off=\"Default\" x-state-description=\"Current: &quot;bg-gray-100&quot;, Default: &quot;hover:text-gray-700&quot;\">Dashboard</a>
                
                  <a href=\"#\" class=\"hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium text-gray-900\" x-state-description=\"undefined: &quot;bg-gray-100&quot;, undefined: &quot;hover:text-gray-700&quot;\">Jobs</a>
                
                  <a href=\"#\" class=\"hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium text-gray-900\" x-state-description=\"undefined: &quot;bg-gray-100&quot;, undefined: &quot;hover:text-gray-700&quot;\">Applicants</a>
                
                  <a href=\"#\" class=\"hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium text-gray-900\" x-state-description=\"undefined: &quot;bg-gray-100&quot;, undefined: &quot;hover:text-gray-700&quot;\">Company</a>
                
              </div>
            </div>
          </div>

          <div class=\"flex flex-1 justify-center px-2 lg:ml-6 lg:justify-end\">
            <!-- Search section -->
            <div class=\"w-full max-w-lg lg:max-w-xs\">
              <label for=\"search\" class=\"sr-only\">Search</label>
              <div class=\"relative text-gray-400 focus-within:text-gray-500\">
                <div class=\"pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3\">
                  <svg class=\"h-5 w-5\" x-description=\"Heroicon name: mini/magnifying-glass\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z\" clip-rule=\"evenodd\"></path>
</svg>
                </div>
                <input id=\"search\" class=\"block w-full rounded-md border border-gray-300 bg-white py-2 pl-10 pr-3 leading-5 text-gray-900 placeholder-gray-500 focus:border-purple-500 focus:placeholder-gray-500 focus:outline-none focus:ring-1 focus:ring-purple-500 sm:text-sm\" placeholder=\"Search\" type=\"search\" name=\"search\">
              </div>
            </div>
          </div>
          <div class=\"flex lg:hidden\">
            <!-- Mobile menu button -->
            <button type=\"button\" class=\"inline-flex items-center justify-center rounded-md bg-gray-50 p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-50\" aria-controls=\"mobile-menu\" @click=\"open = !open\" aria-expanded=\"false\" x-bind:aria-expanded=\"open.toString()\">
              <span class=\"sr-only\">Open main menu</span>
              <svg x-state:on=\"Menu open\" x-state:off=\"Menu closed\" class=\"block h-6 w-6\" :class=\"{ 'hidden': open, 'block': !(open) }\" x-description=\"Heroicon name: outline/bars-3\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" aria-hidden=\"true\">
  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5\"></path>
</svg>
              <svg x-state:on=\"Menu open\" x-state:off=\"Menu closed\" class=\"hidden h-6 w-6\" :class=\"{ 'block': open, 'hidden': !(open) }\" x-description=\"Heroicon name: outline/x-mark\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" aria-hidden=\"true\">
  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\"></path>
</svg>
            </button>
          </div>

          <!-- Actions section -->
          <div class=\"hidden lg:ml-4 lg:block\">
            <div class=\"flex items-center\">
              <button type=\"button\" class=\"flex-shrink-0 rounded-full bg-gray-50 p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-50\">
                <span class=\"sr-only\">View notifications</span>
                <svg class=\"h-6 w-6\" x-description=\"Heroicon name: outline/bell\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" aria-hidden=\"true\">
  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0\"></path>
</svg>
              </button>

              <!-- Profile dropdown -->
              <div x-data=\"Components.menu({ open: false })\" x-init=\"init()\" @keydown.escape.stop=\"open = false; focusButton()\" @click.away=\"onClickAway(\$event)\" class=\"relative ml-3 flex-shrink-0\">
                <div>
                  <button type=\"button\" class=\"flex rounded-full bg-gray-50 text-sm text-white focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-50\" id=\"user-menu-button\" x-ref=\"button\" @click=\"onButtonClick()\" @keyup.space.prevent=\"onButtonEnter()\" @keydown.enter.prevent=\"onButtonEnter()\" aria-expanded=\"false\" aria-haspopup=\"true\" x-bind:aria-expanded=\"open.toString()\" @keydown.arrow-up.prevent=\"onArrowUp()\" @keydown.arrow-down.prevent=\"onArrowDown()\">
                    <span class=\"sr-only\">Open user menu</span>
                    <img class=\"h-8 w-8 rounded-full\" src=\"https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                  </button>
                </div>
                
                  <div x-show=\"open\" x-transition:enter=\"transition ease-out duration-100\" x-transition:enter-start=\"transform opacity-0 scale-95\" x-transition:enter-end=\"transform opacity-100 scale-100\" x-transition:leave=\"transition ease-in duration-75\" x-transition:leave-start=\"transform opacity-100 scale-100\" x-transition:leave-end=\"transform opacity-0 scale-95\" class=\"absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none\" x-ref=\"menu-items\" x-description=\"Dropdown menu, show/hide based on menu state.\" x-bind:aria-activedescendant=\"activeDescendant\" role=\"menu\" aria-orientation=\"vertical\" aria-labelledby=\"user-menu-button\" tabindex=\"-1\" @keydown.arrow-up.prevent=\"onArrowUp()\" @keydown.arrow-down.prevent=\"onArrowDown()\" @keydown.tab=\"open = false\" @keydown.enter.prevent=\"open = false; focusButton()\" @keyup.space.prevent=\"open = false; focusButton()\">
                    
                      <a href=\"#\" class=\"block py-2 px-4 text-sm text-gray-700\" x-state:on=\"Active\" x-state:off=\"Not Active\" :class=\"{ 'bg-gray-100': activeIndex === 0 }\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-0\" @mouseenter=\"onMouseEnter(\$event)\" @mousemove=\"onMouseMove(\$event, 0)\" @mouseleave=\"onMouseLeave(\$event)\" @click=\"open = false; focusButton()\">Your Profile</a>
                    
                      <a href=\"#\" class=\"block py-2 px-4 text-sm text-gray-700\" :class=\"{ 'bg-gray-100': activeIndex === 1 }\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-1\" @mouseenter=\"onMouseEnter(\$event)\" @mousemove=\"onMouseMove(\$event, 1)\" @mouseleave=\"onMouseLeave(\$event)\" @click=\"open = false; focusButton()\">Settings</a>
                    
                      <a href=\"#\" class=\"block py-2 px-4 text-sm text-gray-700\" :class=\"{ 'bg-gray-100': activeIndex === 2 }\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-2\" @mouseenter=\"onMouseEnter(\$event)\" @mousemove=\"onMouseMove(\$event, 2)\" @mouseleave=\"onMouseLeave(\$event)\" @click=\"open = false; focusButton()\">Sign out</a>
                    
                  </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>

      <div x-description=\"Mobile menu, show/hide based on menu state.\" class=\"border-b border-gray-200 bg-gray-50 lg:hidden\" id=\"mobile-menu\" x-show=\"open\">
        <div class=\"space-y-1 px-2 pt-2 pb-3\">
          
            <a href=\"#\" class=\"bg-gray-100 block px-3 py-2 rounded-md font-medium text-gray-900\" aria-current=\"page\" x-state:on=\"Current\" x-state:off=\"Default\" x-state-description=\"Current: &quot;bg-gray-100&quot;, Default: &quot;hover:bg-gray-100&quot;\">Dashboard</a>
          
            <a href=\"#\" class=\"hover:bg-gray-100 block px-3 py-2 rounded-md font-medium text-gray-900\" x-state-description=\"undefined: &quot;bg-gray-100&quot;, undefined: &quot;hover:bg-gray-100&quot;\">Jobs</a>
          
            <a href=\"#\" class=\"hover:bg-gray-100 block px-3 py-2 rounded-md font-medium text-gray-900\" x-state-description=\"undefined: &quot;bg-gray-100&quot;, undefined: &quot;hover:bg-gray-100&quot;\">Applicants</a>
          
            <a href=\"#\" class=\"hover:bg-gray-100 block px-3 py-2 rounded-md font-medium text-gray-900\" x-state-description=\"undefined: &quot;bg-gray-100&quot;, undefined: &quot;hover:bg-gray-100&quot;\">Company</a>
          
        </div>
        <div class=\"border-t border-gray-200 pt-4 pb-3\">
          <div class=\"flex items-center px-5\">
            <div class=\"flex-shrink-0\">
              <img class=\"h-10 w-10 rounded-full\" src=\"https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
            </div>
            <div class=\"ml-3\">
              <div class=\"text-base font-medium text-gray-800\">Whitney Francis</div>
              <div class=\"text-sm font-medium text-gray-500\">whitney.francis@example.com</div>
            </div>
            <button type=\"button\" class=\"ml-auto flex-shrink-0 rounded-full bg-gray-50 p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-50\">
              <span class=\"sr-only\">View notifications</span>
              <svg class=\"h-6 w-6\" x-description=\"Heroicon name: outline/bell\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" aria-hidden=\"true\">
  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0\"></path>
</svg>
            </button>
          </div>
          <div class=\"mt-3 space-y-1 px-2\">
            
              <a href=\"#\" class=\"block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100\">Your Profile</a>
            
              <a href=\"#\" class=\"block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100\">Settings</a>
            
              <a href=\"#\" class=\"block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100\">Sign out</a>
            
          </div>
        </div>
      </div>
    </nav>

    <!-- Page heading -->
    <header class=\"bg-gray-50 py-8\">
      <div class=\"mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 xl:flex xl:items-center xl:justify-between\">
        <div class=\"min-w-0 flex-1\">
          <nav class=\"flex\" aria-label=\"Breadcrumb\">
            <ol role=\"list\" class=\"flex items-center space-x-4\">
              <li>
                <div>
                  <a href=\"#\" class=\"text-sm font-medium text-gray-500 hover:text-gray-700\">Jobs</a>
                </div>
              </li>
              <li>
                <div class=\"flex items-center\">
                  <svg class=\"h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  <a href=\"#\" class=\"ml-4 text-sm font-medium text-gray-500 hover:text-gray-700\">Engineering</a>
                </div>
              </li>
            </ol>
          </nav>
          <h1 class=\"mt-2 text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight\">Back End Developer</h1>
          <div class=\"mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-8\">
            <div class=\"mt-2 flex items-center text-sm text-gray-500\">
              <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/briefcase\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M6 3.75A2.75 2.75 0 018.75 1h2.5A2.75 2.75 0 0114 3.75v.443c.572.055 1.14.122 1.706.2C17.053 4.582 18 5.75 18 7.07v3.469c0 1.126-.694 2.191-1.83 2.54-1.952.599-4.024.921-6.17.921s-4.219-.322-6.17-.921C2.694 12.73 2 11.665 2 10.539V7.07c0-1.321.947-2.489 2.294-2.676A41.047 41.047 0 016 4.193V3.75zm6.5 0v.325a41.622 41.622 0 00-5 0V3.75c0-.69.56-1.25 1.25-1.25h2.5c.69 0 1.25.56 1.25 1.25zM10 10a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1V11a1 1 0 00-1-1H10z\" clip-rule=\"evenodd\"></path>
  <path d=\"M3 15.055v-.684c.126.053.255.1.39.142 2.092.642 4.313.987 6.61.987 2.297 0 4.518-.345 6.61-.987.135-.041.264-.089.39-.142v.684c0 1.347-.985 2.53-2.363 2.686a41.454 41.454 0 01-9.274 0C3.985 17.585 3 16.402 3 15.055z\"></path>
</svg>
              Full-time
            </div>
            <div class=\"mt-2 flex items-center text-sm text-gray-500\">
              <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/map-pin\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z\" clip-rule=\"evenodd\"></path>
</svg>
              Remote
            </div>
            <div class=\"mt-2 flex items-center text-sm text-gray-500\">
              <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/currency-dollar\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M10.75 10.818v2.614A3.13 3.13 0 0011.888 13c.482-.315.612-.648.612-.875 0-.227-.13-.56-.612-.875a3.13 3.13 0 00-1.138-.432zM8.33 8.62c.053.055.115.11.184.164.208.16.46.284.736.363V6.603a2.45 2.45 0 00-.35.13c-.14.065-.27.143-.386.233-.377.292-.514.627-.514.909 0 .184.058.39.202.592.037.051.08.102.128.152z\"></path>
  <path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-6a.75.75 0 01.75.75v.316a3.78 3.78 0 011.653.713c.426.33.744.74.925 1.2a.75.75 0 01-1.395.55 1.35 1.35 0 00-.447-.563 2.187 2.187 0 00-.736-.363V9.3c.698.093 1.383.32 1.959.696.787.514 1.29 1.27 1.29 2.13 0 .86-.504 1.616-1.29 2.13-.576.377-1.261.603-1.96.696v.299a.75.75 0 11-1.5 0v-.3c-.697-.092-1.382-.318-1.958-.695-.482-.315-.857-.717-1.078-1.188a.75.75 0 111.359-.636c.08.173.245.376.54.569.313.205.706.353 1.138.432v-2.748a3.782 3.782 0 01-1.653-.713C6.9 9.433 6.5 8.681 6.5 7.875c0-.805.4-1.558 1.097-2.096a3.78 3.78 0 011.653-.713V4.75A.75.75 0 0110 4z\" clip-rule=\"evenodd\"></path>
</svg>
              \$120k – \$140k
            </div>
            <div class=\"mt-2 flex items-center text-sm text-gray-500\">
              <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/calendar\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z\" clip-rule=\"evenodd\"></path>
</svg>
              Closing on January 9, 2024.
            </div>
          </div>
        </div>
        <div class=\"mt-5 flex xl:mt-0 xl:ml-4\">
          <span class=\"hidden sm:block\">
            <button type=\"button\" class=\"inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-50\">
              <svg class=\"-ml-1 mr-2 h-5 w-5 text-gray-400\" x-description=\"Heroicon name: mini/pencil\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z\"></path>
</svg>
              Edit
            </button>
          </span>

          <span class=\"ml-3 hidden sm:block\">
            <button type=\"button\" class=\"inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-50\">
              <svg class=\"-ml-1 mr-2 h-5 w-5 text-gray-400\" x-description=\"Heroicon name: mini/link\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z\"></path>
  <path d=\"M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z\"></path>
</svg>
              View
            </button>
          </span>

          <div x-data=\"Components.listbox({ modelName: 'selected', open: false, selectedIndex: 0, activeIndex: 0, items: [{&quot;name&quot;:&quot;Published&quot;,&quot;description&quot;:&quot;This job posting can be viewed by anyone who has the link.&quot;,&quot;current&quot;:true},{&quot;name&quot;:&quot;Draft&quot;,&quot;description&quot;:&quot;This job posting will no longer be publicly accessible.&quot;,&quot;current&quot;:false}] })\" x-init=\"init()\" class=\"sm:ml-3\">
            <label id=\"listbox-label\" class=\"sr-only\" @click=\"\$refs.button.focus()\"> Change published status </label>
            <div class=\"relative\">
              <div class=\"inline-flex divide-x divide-purple-600 rounded-md shadow-sm\">
                <div class=\"inline-flex divide-x divide-purple-600 rounded-md shadow-sm\">
                  <div class=\"inline-flex items-center rounded-l-md border border-transparent bg-purple-500 py-2 pl-3 pr-4 text-white shadow-sm\">
                    <svg class=\"h-5 w-5\" x-description=\"Heroicon name: mini/check\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z\" clip-rule=\"evenodd\"></path>
</svg>
                    <p x-text=\"selected.name\" class=\"ml-2.5 text-sm font-medium\">Published</p>
                  </div>
                  <button type=\"button\" class=\"inline-flex items-center rounded-l-none rounded-r-md bg-purple-500 p-2 text-sm font-medium text-white hover:bg-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-50\" x-ref=\"button\" @keydown.arrow-up.stop.prevent=\"onButtonClick()\" @keydown.arrow-down.stop.prevent=\"onButtonClick()\" @click=\"onButtonClick()\" aria-haspopup=\"listbox\" :aria-expanded=\"open\" aria-expanded=\"true\" aria-labelledby=\"listbox-label\">
                    <span class=\"sr-only\">Change published status</span>
                    <svg class=\"h-5 w-5 text-white\" x-description=\"Heroicon name: mini/chevron-down\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z\" clip-rule=\"evenodd\"></path>
</svg>
                  </button>
                </div>
              </div>

              
                <ul x-show=\"open\" x-transition:leave=\"transition ease-in duration-100\" x-transition:leave-start=\"opacity-100\" x-transition:leave-end=\"opacity-0\" class=\"absolute left-0 z-10 mt-2 -mr-1 w-72 origin-top-right divide-y divide-gray-200 overflow-hidden rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:left-auto sm:right-0\" x-max=\"1\" @click.away=\"open = false\" x-description=\"Select popover, show/hide based on select state.\" @keydown.enter.stop.prevent=\"onOptionSelect()\" @keydown.space.stop.prevent=\"onOptionSelect()\" @keydown.escape=\"onEscape()\" @keydown.arrow-up.prevent=\"onArrowUp()\" @keydown.arrow-down.prevent=\"onArrowDown()\" x-ref=\"listbox\" tabindex=\"-1\" role=\"listbox\" aria-labelledby=\"listbox-label\" :aria-activedescendant=\"activeDescendant\" aria-activedescendant=\"listbox-option-0\">
                  
                    <li x-state:on=\"Highlighted\" x-state:off=\"Not Highlighted\" class=\"text-gray-900 cursor-default select-none p-4 text-sm\" x-description=\"Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.\" id=\"listbox-option-0\" role=\"option\" @click=\"choose(0)\" @mouseenter=\"onMouseEnter(\$event)\" @mousemove=\"onMouseMove(\$event, 0)\" @mouseleave=\"onMouseLeave(\$event)\" :class=\"{ 'text-white bg-purple-500': activeIndex === 0, 'text-gray-900': !(activeIndex === 0) }\">
                      <div class=\"flex flex-col\">
                        <div class=\"flex justify-between\">
                          <p x-state:on=\"Selected\" x-state:off=\"Not Selected\" class=\"font-normal\" :class=\"{ 'font-semibold': selectedIndex === 0, 'font-normal': !(selectedIndex === 0) }\">Published</p>
                          <span x-description=\"Checkmark, only display for selected option.\" x-state:on=\"Highlighted\" x-state:off=\"Not Highlighted\" class=\"text-purple-500\" :class=\"{ 'text-white': activeIndex === 0, 'text-purple-500': !(activeIndex === 0) }\" x-show=\"selectedIndex === 0\">
                            <svg class=\"h-5 w-5\" x-description=\"Heroicon name: mini/check\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z\" clip-rule=\"evenodd\"></path>
</svg>
                          </span>
                        </div>
                        <p x-state:on=\"Highlighted\" x-state:off=\"Not Highlighted\" class=\"text-gray-500 mt-2\" :class=\"{ 'text-purple-200': activeIndex === 0, 'text-gray-500': !(activeIndex === 0) }\">This job posting can be viewed by anyone who has the link.</p>
                      </div>
                    </li>
                  
                    <li x-state:on=\"Highlighted\" x-state:off=\"Not Highlighted\" class=\"text-gray-900 cursor-default select-none p-4 text-sm\" x-description=\"Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.\" id=\"listbox-option-1\" role=\"option\" @click=\"choose(1)\" @mouseenter=\"onMouseEnter(\$event)\" @mousemove=\"onMouseMove(\$event, 1)\" @mouseleave=\"onMouseLeave(\$event)\" :class=\"{ 'text-white bg-purple-500': activeIndex === 1, 'text-gray-900': !(activeIndex === 1) }\">
                      <div class=\"flex flex-col\">
                        <div class=\"flex justify-between\">
                          <p x-state:on=\"Selected\" x-state:off=\"Not Selected\" class=\"font-normal\" :class=\"{ 'font-semibold': selectedIndex === 1, 'font-normal': !(selectedIndex === 1) }\">Draft</p>
                          <span x-description=\"Checkmark, only display for selected option.\" x-state:on=\"Highlighted\" x-state:off=\"Not Highlighted\" class=\"text-purple-500\" :class=\"{ 'text-white': activeIndex === 1, 'text-purple-500': !(activeIndex === 1) }\" x-show=\"selectedIndex === 1\">
                            <svg class=\"h-5 w-5\" x-description=\"Heroicon name: mini/check\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z\" clip-rule=\"evenodd\"></path>
</svg>
                          </span>
                        </div>
                        <p x-state:on=\"Highlighted\" x-state:off=\"Not Highlighted\" class=\"text-gray-500 mt-2\" :class=\"{ 'text-purple-200': activeIndex === 1, 'text-gray-500': !(activeIndex === 1) }\">This job posting will no longer be publicly accessible.</p>
                      </div>
                    </li>
                  
                </ul>
              
            </div>
          </div>

          <!-- Dropdown -->
          <div x-data=\"Components.menu({ open: false })\" x-init=\"init()\" @keydown.escape.stop=\"open = false; focusButton()\" @click.away=\"onClickAway(\$event)\" class=\"relative ml-3 sm:hidden\">
            <button type=\"button\" class=\"inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2\" id=\"mobile-menu-button\" x-ref=\"button\" @click=\"onButtonClick()\" @keyup.space.prevent=\"onButtonEnter()\" @keydown.enter.prevent=\"onButtonEnter()\" aria-expanded=\"false\" aria-haspopup=\"true\" x-bind:aria-expanded=\"open.toString()\" @keydown.arrow-up.prevent=\"onArrowUp()\" @keydown.arrow-down.prevent=\"onArrowDown()\">
              More
              <svg class=\"-mr-1 ml-2 h-5 w-5 text-gray-500\" x-description=\"Heroicon name: mini/chevron-down\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z\" clip-rule=\"evenodd\"></path>
</svg>
            </button>

            
              <div x-show=\"open\" x-transition:enter=\"transition ease-out duration-200\" x-transition:enter-start=\"transform opacity-0 scale-95\" x-transition:enter-end=\"transform opacity-100 scale-100\" x-transition:leave=\"transition ease-in duration-75\" x-transition:leave-start=\"transform opacity-100 scale-100\" x-transition:leave-end=\"transform opacity-0 scale-95\" class=\"absolute right-0 z-10 mt-2 -mr-1 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none\" x-ref=\"menu-items\" x-description=\"Dropdown menu, show/hide based on menu state.\" x-bind:aria-activedescendant=\"activeDescendant\" role=\"menu\" aria-orientation=\"vertical\" aria-labelledby=\"mobile-menu-button\" tabindex=\"-1\" @keydown.arrow-up.prevent=\"onArrowUp()\" @keydown.arrow-down.prevent=\"onArrowDown()\" @keydown.tab=\"open = false\" @keydown.enter.prevent=\"open = false; focusButton()\" @keyup.space.prevent=\"open = false; focusButton()\">
                <a href=\"#\" class=\"block px-4 py-2 text-sm text-gray-700\" x-state:on=\"Active\" x-state:off=\"Not Active\" :class=\"{ 'bg-gray-100': activeIndex === 0 }\" role=\"menuitem\" tabindex=\"-1\" id=\"mobile-menu-item-0\" @mouseenter=\"onMouseEnter(\$event)\" @mousemove=\"onMouseMove(\$event, 0)\" @mouseleave=\"onMouseLeave(\$event)\" @click=\"open = false; focusButton()\">Edit</a>
                <a href=\"#\" class=\"block px-4 py-2 text-sm text-gray-700\" :class=\"{ 'bg-gray-100': activeIndex === 1 }\" role=\"menuitem\" tabindex=\"-1\" id=\"mobile-menu-item-1\" @mouseenter=\"onMouseEnter(\$event)\" @mousemove=\"onMouseMove(\$event, 1)\" @mouseleave=\"onMouseLeave(\$event)\" @click=\"open = false; focusButton()\">View</a>
              </div>
            
          </div>
        </div>
      </div>
    </header>

    <main class=\"pt-8 pb-16\">
      <div class=\"mx-auto max-w-7xl sm:px-6 lg:px-8\">
        <div class=\"px-4 sm:px-0\">
          <h2 class=\"text-lg font-medium text-gray-900\">Candidates</h2>

          <!-- Tabs -->
          <div class=\"sm:hidden\">
            <label for=\"tabs\" class=\"sr-only\">Select a tab</label>
            <!-- Use an \"onChange\" listener to redirect the user to the selected tab URL. -->
            <select id=\"tabs\" name=\"tabs\" class=\"mt-4 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-purple-500 focus:outline-none focus:ring-purple-500 sm:text-sm\">
              
                <option>Applied</option>
              
                <option>Phone Screening</option>
              
                <option selected=\"\">Interview</option>
              
                <option>Offer</option>
              
                <option>Disqualified</option>
              
            </select>
          </div>
          <div class=\"hidden sm:block\">
            <div class=\"border-b border-gray-200\">
              <nav class=\"mt-2 -mb-px flex space-x-8\" aria-label=\"Tabs\">
                
                  <a href=\"#\" class=\"border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm\" x-state:on=\"Current\" x-state:off=\"Default\" x-state-description=\"Current: &quot;border-purple-500 text-purple-600&quot;, Default: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200&quot;\">
                    Applied
                    
                      <span class=\"bg-gray-100 text-gray-900 hidden ml-2 py-0.5 px-2.5 rounded-full text-xs font-medium md:inline-block\" x-state:on=\"Current\" x-state:off=\"Default\" x-state-description=\"Current: &quot;bg-purple-100 text-purple-600&quot;, Default: &quot;bg-gray-100 text-gray-900&quot;\">2</span>
                    </a>
                
                  <a href=\"#\" class=\"border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm\" x-state-description=\"undefined: &quot;border-purple-500 text-purple-600&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200&quot;\">
                    Phone Screening
                    
                      <span class=\"bg-gray-100 text-gray-900 hidden ml-2 py-0.5 px-2.5 rounded-full text-xs font-medium md:inline-block\" x-state-description=\"undefined: &quot;bg-purple-100 text-purple-600&quot;, undefined: &quot;bg-gray-100 text-gray-900&quot;\">4</span>
                    </a>
                
                  <a href=\"#\" class=\"border-purple-500 text-purple-600 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm\" x-state-description=\"undefined: &quot;border-purple-500 text-purple-600&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200&quot;\">
                    Interview
                    
                      <span class=\"bg-purple-100 text-purple-600 hidden ml-2 py-0.5 px-2.5 rounded-full text-xs font-medium md:inline-block\" x-state-description=\"undefined: &quot;bg-purple-100 text-purple-600&quot;, undefined: &quot;bg-gray-100 text-gray-900&quot;\">6</span>
                    </a>
                
                  <a href=\"#\" class=\"border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm\" x-state-description=\"undefined: &quot;border-purple-500 text-purple-600&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200&quot;\">
                    Offer
                    </a>
                
                  <a href=\"#\" class=\"border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm\" x-state-description=\"undefined: &quot;border-purple-500 text-purple-600&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200&quot;\">
                    Disqualified
                    </a>
                
              </nav>
            </div>
          </div>
        </div>

        <!-- Stacked list -->
        <ul role=\"list\" class=\"mt-5 divide-y divide-gray-200 border-t border-gray-200 sm:mt-0 sm:border-t-0\">
          
            <li>
              <a href=\"#\" class=\"group block\">
                <div class=\"flex items-center py-5 px-4 sm:py-6 sm:px-0\">
                  <div class=\"flex min-w-0 flex-1 items-center\">
                    <div class=\"flex-shrink-0\">
                      <img class=\"h-12 w-12 rounded-full group-hover:opacity-75\" src=\"https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                    </div>
                    <div class=\"min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4\">
                      <div>
                        <p class=\"truncate text-sm font-medium text-purple-600\">Emily Selman</p>
                        <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                          <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/envelope\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\"></path>
  <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\"></path>
</svg>
                          <span class=\"truncate\">emily.selman@example.com</span>
                        </p>
                      </div>
                      <div class=\"hidden md:block\">
                        <div>
                          <p class=\"text-sm text-gray-900\">
                            Applied on
                            <!-- space -->
                            <time datetime=\"2020-07-01T15:34:56\">January 7, 2020</time>
                          </p>
                          <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                            <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-green-400\" x-description=\"Heroicon name: mini/check-circle\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z\" clip-rule=\"evenodd\"></path>
</svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class=\"h-5 w-5 text-gray-400 group-hover:text-gray-700\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  </div>
                </div>
              </a>
            </li>
          
            <li>
              <a href=\"#\" class=\"group block\">
                <div class=\"flex items-center py-5 px-4 sm:py-6 sm:px-0\">
                  <div class=\"flex min-w-0 flex-1 items-center\">
                    <div class=\"flex-shrink-0\">
                      <img class=\"h-12 w-12 rounded-full group-hover:opacity-75\" src=\"https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                    </div>
                    <div class=\"min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4\">
                      <div>
                        <p class=\"truncate text-sm font-medium text-purple-600\">Michael Foster</p>
                        <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                          <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/envelope\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\"></path>
  <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\"></path>
</svg>
                          <span class=\"truncate\">michael.foster@example.com</span>
                        </p>
                      </div>
                      <div class=\"hidden md:block\">
                        <div>
                          <p class=\"text-sm text-gray-900\">
                            Applied on
                            <!-- space -->
                            <time datetime=\"2020-07-01T15:34:56\">January 7, 2020</time>
                          </p>
                          <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                            <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-green-400\" x-description=\"Heroicon name: mini/check-circle\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z\" clip-rule=\"evenodd\"></path>
</svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class=\"h-5 w-5 text-gray-400 group-hover:text-gray-700\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  </div>
                </div>
              </a>
            </li>
          
            <li>
              <a href=\"#\" class=\"group block\">
                <div class=\"flex items-center py-5 px-4 sm:py-6 sm:px-0\">
                  <div class=\"flex min-w-0 flex-1 items-center\">
                    <div class=\"flex-shrink-0\">
                      <img class=\"h-12 w-12 rounded-full group-hover:opacity-75\" src=\"https://images.unsplash.com/photo-1505840717430-882ce147ef2d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                    </div>
                    <div class=\"min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4\">
                      <div>
                        <p class=\"truncate text-sm font-medium text-purple-600\">Emma Dorsey</p>
                        <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                          <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/envelope\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\"></path>
  <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\"></path>
</svg>
                          <span class=\"truncate\">emma.dorsey@example.com</span>
                        </p>
                      </div>
                      <div class=\"hidden md:block\">
                        <div>
                          <p class=\"text-sm text-gray-900\">
                            Applied on
                            <!-- space -->
                            <time datetime=\"2020-07-01T15:34:56\">January 7, 2020</time>
                          </p>
                          <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                            <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-green-400\" x-description=\"Heroicon name: mini/check-circle\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z\" clip-rule=\"evenodd\"></path>
</svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class=\"h-5 w-5 text-gray-400 group-hover:text-gray-700\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  </div>
                </div>
              </a>
            </li>
          
            <li>
              <a href=\"#\" class=\"group block\">
                <div class=\"flex items-center py-5 px-4 sm:py-6 sm:px-0\">
                  <div class=\"flex min-w-0 flex-1 items-center\">
                    <div class=\"flex-shrink-0\">
                      <img class=\"h-12 w-12 rounded-full group-hover:opacity-75\" src=\"https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                    </div>
                    <div class=\"min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4\">
                      <div>
                        <p class=\"truncate text-sm font-medium text-purple-600\">Anna Roberts</p>
                        <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                          <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/envelope\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\"></path>
  <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\"></path>
</svg>
                          <span class=\"truncate\">anna.roberts@example.com</span>
                        </p>
                      </div>
                      <div class=\"hidden md:block\">
                        <div>
                          <p class=\"text-sm text-gray-900\">
                            Applied on
                            <!-- space -->
                            <time datetime=\"2020-07-01T15:34:56\">January 7, 2020</time>
                          </p>
                          <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                            <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-green-400\" x-description=\"Heroicon name: mini/check-circle\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z\" clip-rule=\"evenodd\"></path>
</svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class=\"h-5 w-5 text-gray-400 group-hover:text-gray-700\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  </div>
                </div>
              </a>
            </li>
          
            <li>
              <a href=\"#\" class=\"group block\">
                <div class=\"flex items-center py-5 px-4 sm:py-6 sm:px-0\">
                  <div class=\"flex min-w-0 flex-1 items-center\">
                    <div class=\"flex-shrink-0\">
                      <img class=\"h-12 w-12 rounded-full group-hover:opacity-75\" src=\"https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                    </div>
                    <div class=\"min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4\">
                      <div>
                        <p class=\"truncate text-sm font-medium text-purple-600\">Leonard Krasner</p>
                        <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                          <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/envelope\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\"></path>
  <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\"></path>
</svg>
                          <span class=\"truncate\">leonard.krasner@example.com</span>
                        </p>
                      </div>
                      <div class=\"hidden md:block\">
                        <div>
                          <p class=\"text-sm text-gray-900\">
                            Applied on
                            <!-- space -->
                            <time datetime=\"2020-07-01T15:34:56\">January 7, 2020</time>
                          </p>
                          <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                            <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-green-400\" x-description=\"Heroicon name: mini/check-circle\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z\" clip-rule=\"evenodd\"></path>
</svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class=\"h-5 w-5 text-gray-400 group-hover:text-gray-700\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  </div>
                </div>
              </a>
            </li>
          
            <li>
              <a href=\"#\" class=\"group block\">
                <div class=\"flex items-center py-5 px-4 sm:py-6 sm:px-0\">
                  <div class=\"flex min-w-0 flex-1 items-center\">
                    <div class=\"flex-shrink-0\">
                      <img class=\"h-12 w-12 rounded-full group-hover:opacity-75\" src=\"https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                    </div>
                    <div class=\"min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4\">
                      <div>
                        <p class=\"truncate text-sm font-medium text-purple-600\">Floyd Miles</p>
                        <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                          <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/envelope\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\"></path>
  <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\"></path>
</svg>
                          <span class=\"truncate\">floyd.miles@example.com</span>
                        </p>
                      </div>
                      <div class=\"hidden md:block\">
                        <div>
                          <p class=\"text-sm text-gray-900\">
                            Applied on
                            <!-- space -->
                            <time datetime=\"2020-07-01T15:34:56\">January 7, 2020</time>
                          </p>
                          <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                            <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-green-400\" x-description=\"Heroicon name: mini/check-circle\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z\" clip-rule=\"evenodd\"></path>
</svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class=\"h-5 w-5 text-gray-400 group-hover:text-gray-700\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  </div>
                </div>
              </a>
            </li>
          
            <li>
              <a href=\"#\" class=\"group block\">
                <div class=\"flex items-center py-5 px-4 sm:py-6 sm:px-0\">
                  <div class=\"flex min-w-0 flex-1 items-center\">
                    <div class=\"flex-shrink-0\">
                      <img class=\"h-12 w-12 rounded-full group-hover:opacity-75\" src=\"https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                    </div>
                    <div class=\"min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4\">
                      <div>
                        <p class=\"truncate text-sm font-medium text-purple-600\">Benjamin Russel</p>
                        <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                          <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/envelope\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\"></path>
  <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\"></path>
</svg>
                          <span class=\"truncate\">benjamin.russel@example.com</span>
                        </p>
                      </div>
                      <div class=\"hidden md:block\">
                        <div>
                          <p class=\"text-sm text-gray-900\">
                            Applied on
                            <!-- space -->
                            <time datetime=\"2020-07-01T15:34:56\">January 7, 2020</time>
                          </p>
                          <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                            <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-green-400\" x-description=\"Heroicon name: mini/check-circle\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z\" clip-rule=\"evenodd\"></path>
</svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class=\"h-5 w-5 text-gray-400 group-hover:text-gray-700\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  </div>
                </div>
              </a>
            </li>
          
            <li>
              <a href=\"#\" class=\"group block\">
                <div class=\"flex items-center py-5 px-4 sm:py-6 sm:px-0\">
                  <div class=\"flex min-w-0 flex-1 items-center\">
                    <div class=\"flex-shrink-0\">
                      <img class=\"h-12 w-12 rounded-full group-hover:opacity-75\" src=\"https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                    </div>
                    <div class=\"min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4\">
                      <div>
                        <p class=\"truncate text-sm font-medium text-purple-600\">Courtney Henry</p>
                        <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                          <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/envelope\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\"></path>
  <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\"></path>
</svg>
                          <span class=\"truncate\">courtney.henry@example.com</span>
                        </p>
                      </div>
                      <div class=\"hidden md:block\">
                        <div>
                          <p class=\"text-sm text-gray-900\">
                            Applied on
                            <!-- space -->
                            <time datetime=\"2020-07-01T15:34:56\">January 7, 2020</time>
                          </p>
                          <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                            <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-green-400\" x-description=\"Heroicon name: mini/check-circle\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z\" clip-rule=\"evenodd\"></path>
</svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class=\"h-5 w-5 text-gray-400 group-hover:text-gray-700\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  </div>
                </div>
              </a>
            </li>
          
            <li>
              <a href=\"#\" class=\"group block\">
                <div class=\"flex items-center py-5 px-4 sm:py-6 sm:px-0\">
                  <div class=\"flex min-w-0 flex-1 items-center\">
                    <div class=\"flex-shrink-0\">
                      <img class=\"h-12 w-12 rounded-full group-hover:opacity-75\" src=\"https://images.unsplash.com/photo-1513910367299-bce8d8a0ebf6?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                    </div>
                    <div class=\"min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4\">
                      <div>
                        <p class=\"truncate text-sm font-medium text-purple-600\">Lawrence Hunter</p>
                        <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                          <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/envelope\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\"></path>
  <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\"></path>
</svg>
                          <span class=\"truncate\">lawrence.hunter@example.com</span>
                        </p>
                      </div>
                      <div class=\"hidden md:block\">
                        <div>
                          <p class=\"text-sm text-gray-900\">
                            Applied on
                            <!-- space -->
                            <time datetime=\"2020-07-01T15:34:56\">January 7, 2020</time>
                          </p>
                          <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                            <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-green-400\" x-description=\"Heroicon name: mini/check-circle\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z\" clip-rule=\"evenodd\"></path>
</svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class=\"h-5 w-5 text-gray-400 group-hover:text-gray-700\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  </div>
                </div>
              </a>
            </li>
          
            <li>
              <a href=\"#\" class=\"group block\">
                <div class=\"flex items-center py-5 px-4 sm:py-6 sm:px-0\">
                  <div class=\"flex min-w-0 flex-1 items-center\">
                    <div class=\"flex-shrink-0\">
                      <img class=\"h-12 w-12 rounded-full group-hover:opacity-75\" src=\"https://images.unsplash.com/photo-1509783236416-c9ad59bae472?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                    </div>
                    <div class=\"min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4\">
                      <div>
                        <p class=\"truncate text-sm font-medium text-purple-600\">Alicia Bell</p>
                        <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                          <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/envelope\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\"></path>
  <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\"></path>
</svg>
                          <span class=\"truncate\">alicia.bell@example.com</span>
                        </p>
                      </div>
                      <div class=\"hidden md:block\">
                        <div>
                          <p class=\"text-sm text-gray-900\">
                            Applied on
                            <!-- space -->
                            <time datetime=\"2020-07-01T15:34:56\">January 7, 2020</time>
                          </p>
                          <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                            <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-green-400\" x-description=\"Heroicon name: mini/check-circle\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z\" clip-rule=\"evenodd\"></path>
</svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class=\"h-5 w-5 text-gray-400 group-hover:text-gray-700\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  </div>
                </div>
              </a>
            </li>
          
        </ul>

        <!-- Pagination -->
        <nav class=\"flex items-center justify-between border-t border-gray-200 px-4 sm:px-0\" aria-label=\"Pagination\">
          <div class=\"-mt-px flex w-0 flex-1\">
            <a href=\"#\" class=\"inline-flex items-center border-t-2 border-transparent pt-4 pr-1 text-sm font-medium text-gray-500 hover:border-gray-200 hover:text-gray-700\">
              <svg class=\"mr-3 h-5 w-5 text-gray-400\" x-description=\"Heroicon name: mini/arrow-long-left\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z\" clip-rule=\"evenodd\"></path>
</svg>
              Previous
            </a>
          </div>
          <div class=\"hidden md:-mt-px md:flex\">
            <a href=\"#\" class=\"inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-200 hover:text-gray-700\">1</a>
            <!-- Current: \"border-purple-500 text-purple-600\", Default: \"border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200\" -->
            <a href=\"#\" class=\"inline-flex items-center border-t-2 border-purple-500 px-4 pt-4 text-sm font-medium text-purple-600\" aria-current=\"page\">2</a>
            <a href=\"#\" class=\"inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-200 hover:text-gray-700\">3</a>
            <a href=\"#\" class=\"inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-200 hover:text-gray-700\">4</a>
            <a href=\"#\" class=\"inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-200 hover:text-gray-700\">5</a>
            <a href=\"#\" class=\"inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-200 hover:text-gray-700\">6</a>
          </div>
          <div class=\"-mt-px flex w-0 flex-1 justify-end\">
            <a href=\"#\" class=\"inline-flex items-center border-t-2 border-transparent pt-4 pl-1 text-sm font-medium text-gray-500 hover:border-gray-200 hover:text-gray-700\">
              Next
              <svg class=\"ml-3 h-5 w-5 text-gray-400\" x-description=\"Heroicon name: mini/arrow-long-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z\" clip-rule=\"evenodd\"></path>
</svg>
            </a>
          </div>
        </nav>
      </div>
    </main>
  </div>

  </div>
  </body>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("    <script src=\"https://unpkg.com/@tailwindcss/browser@4\"></script>
  <html class=\"h-full bg-white\">
  <body class=\"h-full\">
<div class=\"min-h-[1024px] bg-white\">
      <div class=\"min-h-full\">
    <!-- Navbar -->
    <nav x-data=\"{ open: false }\" class=\"bg-gray-50\">
      <div class=\"mx-auto max-w-7xl px-4 sm:px-6 lg:px-8\">
        <div class=\"relative flex h-16 items-center justify-between border-b border-gray-200\">
          <div class=\"flex items-center\">
            <div class=\"flex-shrink-0\">
              <img class=\"h-8 w-auto\" src=\"https://tailwindui.com/img/logos/mark.svg?color=violet&amp;shade=500\" alt=\"Your Company\">
            </div>

            <!-- Links section -->
            <div class=\"hidden lg:ml-10 lg:block\">
              <div class=\"flex space-x-4\">
                
                  <a href=\"#\" class=\"bg-gray-100 px-3 py-2 rounded-md text-sm font-medium text-gray-900\" aria-current=\"page\" x-state:on=\"Current\" x-state:off=\"Default\" x-state-description=\"Current: &quot;bg-gray-100&quot;, Default: &quot;hover:text-gray-700&quot;\">Dashboard</a>
                
                  <a href=\"#\" class=\"hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium text-gray-900\" x-state-description=\"undefined: &quot;bg-gray-100&quot;, undefined: &quot;hover:text-gray-700&quot;\">Jobs</a>
                
                  <a href=\"#\" class=\"hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium text-gray-900\" x-state-description=\"undefined: &quot;bg-gray-100&quot;, undefined: &quot;hover:text-gray-700&quot;\">Applicants</a>
                
                  <a href=\"#\" class=\"hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium text-gray-900\" x-state-description=\"undefined: &quot;bg-gray-100&quot;, undefined: &quot;hover:text-gray-700&quot;\">Company</a>
                
              </div>
            </div>
          </div>

          <div class=\"flex flex-1 justify-center px-2 lg:ml-6 lg:justify-end\">
            <!-- Search section -->
            <div class=\"w-full max-w-lg lg:max-w-xs\">
              <label for=\"search\" class=\"sr-only\">Search</label>
              <div class=\"relative text-gray-400 focus-within:text-gray-500\">
                <div class=\"pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3\">
                  <svg class=\"h-5 w-5\" x-description=\"Heroicon name: mini/magnifying-glass\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z\" clip-rule=\"evenodd\"></path>
</svg>
                </div>
                <input id=\"search\" class=\"block w-full rounded-md border border-gray-300 bg-white py-2 pl-10 pr-3 leading-5 text-gray-900 placeholder-gray-500 focus:border-purple-500 focus:placeholder-gray-500 focus:outline-none focus:ring-1 focus:ring-purple-500 sm:text-sm\" placeholder=\"Search\" type=\"search\" name=\"search\">
              </div>
            </div>
          </div>
          <div class=\"flex lg:hidden\">
            <!-- Mobile menu button -->
            <button type=\"button\" class=\"inline-flex items-center justify-center rounded-md bg-gray-50 p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-50\" aria-controls=\"mobile-menu\" @click=\"open = !open\" aria-expanded=\"false\" x-bind:aria-expanded=\"open.toString()\">
              <span class=\"sr-only\">Open main menu</span>
              <svg x-state:on=\"Menu open\" x-state:off=\"Menu closed\" class=\"block h-6 w-6\" :class=\"{ 'hidden': open, 'block': !(open) }\" x-description=\"Heroicon name: outline/bars-3\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" aria-hidden=\"true\">
  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5\"></path>
</svg>
              <svg x-state:on=\"Menu open\" x-state:off=\"Menu closed\" class=\"hidden h-6 w-6\" :class=\"{ 'block': open, 'hidden': !(open) }\" x-description=\"Heroicon name: outline/x-mark\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" aria-hidden=\"true\">
  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\"></path>
</svg>
            </button>
          </div>

          <!-- Actions section -->
          <div class=\"hidden lg:ml-4 lg:block\">
            <div class=\"flex items-center\">
              <button type=\"button\" class=\"flex-shrink-0 rounded-full bg-gray-50 p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-50\">
                <span class=\"sr-only\">View notifications</span>
                <svg class=\"h-6 w-6\" x-description=\"Heroicon name: outline/bell\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" aria-hidden=\"true\">
  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0\"></path>
</svg>
              </button>

              <!-- Profile dropdown -->
              <div x-data=\"Components.menu({ open: false })\" x-init=\"init()\" @keydown.escape.stop=\"open = false; focusButton()\" @click.away=\"onClickAway(\$event)\" class=\"relative ml-3 flex-shrink-0\">
                <div>
                  <button type=\"button\" class=\"flex rounded-full bg-gray-50 text-sm text-white focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-50\" id=\"user-menu-button\" x-ref=\"button\" @click=\"onButtonClick()\" @keyup.space.prevent=\"onButtonEnter()\" @keydown.enter.prevent=\"onButtonEnter()\" aria-expanded=\"false\" aria-haspopup=\"true\" x-bind:aria-expanded=\"open.toString()\" @keydown.arrow-up.prevent=\"onArrowUp()\" @keydown.arrow-down.prevent=\"onArrowDown()\">
                    <span class=\"sr-only\">Open user menu</span>
                    <img class=\"h-8 w-8 rounded-full\" src=\"https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                  </button>
                </div>
                
                  <div x-show=\"open\" x-transition:enter=\"transition ease-out duration-100\" x-transition:enter-start=\"transform opacity-0 scale-95\" x-transition:enter-end=\"transform opacity-100 scale-100\" x-transition:leave=\"transition ease-in duration-75\" x-transition:leave-start=\"transform opacity-100 scale-100\" x-transition:leave-end=\"transform opacity-0 scale-95\" class=\"absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none\" x-ref=\"menu-items\" x-description=\"Dropdown menu, show/hide based on menu state.\" x-bind:aria-activedescendant=\"activeDescendant\" role=\"menu\" aria-orientation=\"vertical\" aria-labelledby=\"user-menu-button\" tabindex=\"-1\" @keydown.arrow-up.prevent=\"onArrowUp()\" @keydown.arrow-down.prevent=\"onArrowDown()\" @keydown.tab=\"open = false\" @keydown.enter.prevent=\"open = false; focusButton()\" @keyup.space.prevent=\"open = false; focusButton()\">
                    
                      <a href=\"#\" class=\"block py-2 px-4 text-sm text-gray-700\" x-state:on=\"Active\" x-state:off=\"Not Active\" :class=\"{ 'bg-gray-100': activeIndex === 0 }\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-0\" @mouseenter=\"onMouseEnter(\$event)\" @mousemove=\"onMouseMove(\$event, 0)\" @mouseleave=\"onMouseLeave(\$event)\" @click=\"open = false; focusButton()\">Your Profile</a>
                    
                      <a href=\"#\" class=\"block py-2 px-4 text-sm text-gray-700\" :class=\"{ 'bg-gray-100': activeIndex === 1 }\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-1\" @mouseenter=\"onMouseEnter(\$event)\" @mousemove=\"onMouseMove(\$event, 1)\" @mouseleave=\"onMouseLeave(\$event)\" @click=\"open = false; focusButton()\">Settings</a>
                    
                      <a href=\"#\" class=\"block py-2 px-4 text-sm text-gray-700\" :class=\"{ 'bg-gray-100': activeIndex === 2 }\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-2\" @mouseenter=\"onMouseEnter(\$event)\" @mousemove=\"onMouseMove(\$event, 2)\" @mouseleave=\"onMouseLeave(\$event)\" @click=\"open = false; focusButton()\">Sign out</a>
                    
                  </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>

      <div x-description=\"Mobile menu, show/hide based on menu state.\" class=\"border-b border-gray-200 bg-gray-50 lg:hidden\" id=\"mobile-menu\" x-show=\"open\">
        <div class=\"space-y-1 px-2 pt-2 pb-3\">
          
            <a href=\"#\" class=\"bg-gray-100 block px-3 py-2 rounded-md font-medium text-gray-900\" aria-current=\"page\" x-state:on=\"Current\" x-state:off=\"Default\" x-state-description=\"Current: &quot;bg-gray-100&quot;, Default: &quot;hover:bg-gray-100&quot;\">Dashboard</a>
          
            <a href=\"#\" class=\"hover:bg-gray-100 block px-3 py-2 rounded-md font-medium text-gray-900\" x-state-description=\"undefined: &quot;bg-gray-100&quot;, undefined: &quot;hover:bg-gray-100&quot;\">Jobs</a>
          
            <a href=\"#\" class=\"hover:bg-gray-100 block px-3 py-2 rounded-md font-medium text-gray-900\" x-state-description=\"undefined: &quot;bg-gray-100&quot;, undefined: &quot;hover:bg-gray-100&quot;\">Applicants</a>
          
            <a href=\"#\" class=\"hover:bg-gray-100 block px-3 py-2 rounded-md font-medium text-gray-900\" x-state-description=\"undefined: &quot;bg-gray-100&quot;, undefined: &quot;hover:bg-gray-100&quot;\">Company</a>
          
        </div>
        <div class=\"border-t border-gray-200 pt-4 pb-3\">
          <div class=\"flex items-center px-5\">
            <div class=\"flex-shrink-0\">
              <img class=\"h-10 w-10 rounded-full\" src=\"https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
            </div>
            <div class=\"ml-3\">
              <div class=\"text-base font-medium text-gray-800\">Whitney Francis</div>
              <div class=\"text-sm font-medium text-gray-500\">whitney.francis@example.com</div>
            </div>
            <button type=\"button\" class=\"ml-auto flex-shrink-0 rounded-full bg-gray-50 p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-50\">
              <span class=\"sr-only\">View notifications</span>
              <svg class=\"h-6 w-6\" x-description=\"Heroicon name: outline/bell\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" aria-hidden=\"true\">
  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0\"></path>
</svg>
            </button>
          </div>
          <div class=\"mt-3 space-y-1 px-2\">
            
              <a href=\"#\" class=\"block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100\">Your Profile</a>
            
              <a href=\"#\" class=\"block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100\">Settings</a>
            
              <a href=\"#\" class=\"block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100\">Sign out</a>
            
          </div>
        </div>
      </div>
    </nav>

    <!-- Page heading -->
    <header class=\"bg-gray-50 py-8\">
      <div class=\"mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 xl:flex xl:items-center xl:justify-between\">
        <div class=\"min-w-0 flex-1\">
          <nav class=\"flex\" aria-label=\"Breadcrumb\">
            <ol role=\"list\" class=\"flex items-center space-x-4\">
              <li>
                <div>
                  <a href=\"#\" class=\"text-sm font-medium text-gray-500 hover:text-gray-700\">Jobs</a>
                </div>
              </li>
              <li>
                <div class=\"flex items-center\">
                  <svg class=\"h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  <a href=\"#\" class=\"ml-4 text-sm font-medium text-gray-500 hover:text-gray-700\">Engineering</a>
                </div>
              </li>
            </ol>
          </nav>
          <h1 class=\"mt-2 text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight\">Back End Developer</h1>
          <div class=\"mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-8\">
            <div class=\"mt-2 flex items-center text-sm text-gray-500\">
              <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/briefcase\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M6 3.75A2.75 2.75 0 018.75 1h2.5A2.75 2.75 0 0114 3.75v.443c.572.055 1.14.122 1.706.2C17.053 4.582 18 5.75 18 7.07v3.469c0 1.126-.694 2.191-1.83 2.54-1.952.599-4.024.921-6.17.921s-4.219-.322-6.17-.921C2.694 12.73 2 11.665 2 10.539V7.07c0-1.321.947-2.489 2.294-2.676A41.047 41.047 0 016 4.193V3.75zm6.5 0v.325a41.622 41.622 0 00-5 0V3.75c0-.69.56-1.25 1.25-1.25h2.5c.69 0 1.25.56 1.25 1.25zM10 10a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1V11a1 1 0 00-1-1H10z\" clip-rule=\"evenodd\"></path>
  <path d=\"M3 15.055v-.684c.126.053.255.1.39.142 2.092.642 4.313.987 6.61.987 2.297 0 4.518-.345 6.61-.987.135-.041.264-.089.39-.142v.684c0 1.347-.985 2.53-2.363 2.686a41.454 41.454 0 01-9.274 0C3.985 17.585 3 16.402 3 15.055z\"></path>
</svg>
              Full-time
            </div>
            <div class=\"mt-2 flex items-center text-sm text-gray-500\">
              <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/map-pin\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z\" clip-rule=\"evenodd\"></path>
</svg>
              Remote
            </div>
            <div class=\"mt-2 flex items-center text-sm text-gray-500\">
              <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/currency-dollar\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M10.75 10.818v2.614A3.13 3.13 0 0011.888 13c.482-.315.612-.648.612-.875 0-.227-.13-.56-.612-.875a3.13 3.13 0 00-1.138-.432zM8.33 8.62c.053.055.115.11.184.164.208.16.46.284.736.363V6.603a2.45 2.45 0 00-.35.13c-.14.065-.27.143-.386.233-.377.292-.514.627-.514.909 0 .184.058.39.202.592.037.051.08.102.128.152z\"></path>
  <path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-6a.75.75 0 01.75.75v.316a3.78 3.78 0 011.653.713c.426.33.744.74.925 1.2a.75.75 0 01-1.395.55 1.35 1.35 0 00-.447-.563 2.187 2.187 0 00-.736-.363V9.3c.698.093 1.383.32 1.959.696.787.514 1.29 1.27 1.29 2.13 0 .86-.504 1.616-1.29 2.13-.576.377-1.261.603-1.96.696v.299a.75.75 0 11-1.5 0v-.3c-.697-.092-1.382-.318-1.958-.695-.482-.315-.857-.717-1.078-1.188a.75.75 0 111.359-.636c.08.173.245.376.54.569.313.205.706.353 1.138.432v-2.748a3.782 3.782 0 01-1.653-.713C6.9 9.433 6.5 8.681 6.5 7.875c0-.805.4-1.558 1.097-2.096a3.78 3.78 0 011.653-.713V4.75A.75.75 0 0110 4z\" clip-rule=\"evenodd\"></path>
</svg>
              \$120k – \$140k
            </div>
            <div class=\"mt-2 flex items-center text-sm text-gray-500\">
              <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/calendar\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z\" clip-rule=\"evenodd\"></path>
</svg>
              Closing on January 9, 2024.
            </div>
          </div>
        </div>
        <div class=\"mt-5 flex xl:mt-0 xl:ml-4\">
          <span class=\"hidden sm:block\">
            <button type=\"button\" class=\"inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-50\">
              <svg class=\"-ml-1 mr-2 h-5 w-5 text-gray-400\" x-description=\"Heroicon name: mini/pencil\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z\"></path>
</svg>
              Edit
            </button>
          </span>

          <span class=\"ml-3 hidden sm:block\">
            <button type=\"button\" class=\"inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-50\">
              <svg class=\"-ml-1 mr-2 h-5 w-5 text-gray-400\" x-description=\"Heroicon name: mini/link\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z\"></path>
  <path d=\"M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z\"></path>
</svg>
              View
            </button>
          </span>

          <div x-data=\"Components.listbox({ modelName: 'selected', open: false, selectedIndex: 0, activeIndex: 0, items: [{&quot;name&quot;:&quot;Published&quot;,&quot;description&quot;:&quot;This job posting can be viewed by anyone who has the link.&quot;,&quot;current&quot;:true},{&quot;name&quot;:&quot;Draft&quot;,&quot;description&quot;:&quot;This job posting will no longer be publicly accessible.&quot;,&quot;current&quot;:false}] })\" x-init=\"init()\" class=\"sm:ml-3\">
            <label id=\"listbox-label\" class=\"sr-only\" @click=\"\$refs.button.focus()\"> Change published status </label>
            <div class=\"relative\">
              <div class=\"inline-flex divide-x divide-purple-600 rounded-md shadow-sm\">
                <div class=\"inline-flex divide-x divide-purple-600 rounded-md shadow-sm\">
                  <div class=\"inline-flex items-center rounded-l-md border border-transparent bg-purple-500 py-2 pl-3 pr-4 text-white shadow-sm\">
                    <svg class=\"h-5 w-5\" x-description=\"Heroicon name: mini/check\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z\" clip-rule=\"evenodd\"></path>
</svg>
                    <p x-text=\"selected.name\" class=\"ml-2.5 text-sm font-medium\">Published</p>
                  </div>
                  <button type=\"button\" class=\"inline-flex items-center rounded-l-none rounded-r-md bg-purple-500 p-2 text-sm font-medium text-white hover:bg-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-50\" x-ref=\"button\" @keydown.arrow-up.stop.prevent=\"onButtonClick()\" @keydown.arrow-down.stop.prevent=\"onButtonClick()\" @click=\"onButtonClick()\" aria-haspopup=\"listbox\" :aria-expanded=\"open\" aria-expanded=\"true\" aria-labelledby=\"listbox-label\">
                    <span class=\"sr-only\">Change published status</span>
                    <svg class=\"h-5 w-5 text-white\" x-description=\"Heroicon name: mini/chevron-down\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z\" clip-rule=\"evenodd\"></path>
</svg>
                  </button>
                </div>
              </div>

              
                <ul x-show=\"open\" x-transition:leave=\"transition ease-in duration-100\" x-transition:leave-start=\"opacity-100\" x-transition:leave-end=\"opacity-0\" class=\"absolute left-0 z-10 mt-2 -mr-1 w-72 origin-top-right divide-y divide-gray-200 overflow-hidden rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:left-auto sm:right-0\" x-max=\"1\" @click.away=\"open = false\" x-description=\"Select popover, show/hide based on select state.\" @keydown.enter.stop.prevent=\"onOptionSelect()\" @keydown.space.stop.prevent=\"onOptionSelect()\" @keydown.escape=\"onEscape()\" @keydown.arrow-up.prevent=\"onArrowUp()\" @keydown.arrow-down.prevent=\"onArrowDown()\" x-ref=\"listbox\" tabindex=\"-1\" role=\"listbox\" aria-labelledby=\"listbox-label\" :aria-activedescendant=\"activeDescendant\" aria-activedescendant=\"listbox-option-0\">
                  
                    <li x-state:on=\"Highlighted\" x-state:off=\"Not Highlighted\" class=\"text-gray-900 cursor-default select-none p-4 text-sm\" x-description=\"Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.\" id=\"listbox-option-0\" role=\"option\" @click=\"choose(0)\" @mouseenter=\"onMouseEnter(\$event)\" @mousemove=\"onMouseMove(\$event, 0)\" @mouseleave=\"onMouseLeave(\$event)\" :class=\"{ 'text-white bg-purple-500': activeIndex === 0, 'text-gray-900': !(activeIndex === 0) }\">
                      <div class=\"flex flex-col\">
                        <div class=\"flex justify-between\">
                          <p x-state:on=\"Selected\" x-state:off=\"Not Selected\" class=\"font-normal\" :class=\"{ 'font-semibold': selectedIndex === 0, 'font-normal': !(selectedIndex === 0) }\">Published</p>
                          <span x-description=\"Checkmark, only display for selected option.\" x-state:on=\"Highlighted\" x-state:off=\"Not Highlighted\" class=\"text-purple-500\" :class=\"{ 'text-white': activeIndex === 0, 'text-purple-500': !(activeIndex === 0) }\" x-show=\"selectedIndex === 0\">
                            <svg class=\"h-5 w-5\" x-description=\"Heroicon name: mini/check\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z\" clip-rule=\"evenodd\"></path>
</svg>
                          </span>
                        </div>
                        <p x-state:on=\"Highlighted\" x-state:off=\"Not Highlighted\" class=\"text-gray-500 mt-2\" :class=\"{ 'text-purple-200': activeIndex === 0, 'text-gray-500': !(activeIndex === 0) }\">This job posting can be viewed by anyone who has the link.</p>
                      </div>
                    </li>
                  
                    <li x-state:on=\"Highlighted\" x-state:off=\"Not Highlighted\" class=\"text-gray-900 cursor-default select-none p-4 text-sm\" x-description=\"Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.\" id=\"listbox-option-1\" role=\"option\" @click=\"choose(1)\" @mouseenter=\"onMouseEnter(\$event)\" @mousemove=\"onMouseMove(\$event, 1)\" @mouseleave=\"onMouseLeave(\$event)\" :class=\"{ 'text-white bg-purple-500': activeIndex === 1, 'text-gray-900': !(activeIndex === 1) }\">
                      <div class=\"flex flex-col\">
                        <div class=\"flex justify-between\">
                          <p x-state:on=\"Selected\" x-state:off=\"Not Selected\" class=\"font-normal\" :class=\"{ 'font-semibold': selectedIndex === 1, 'font-normal': !(selectedIndex === 1) }\">Draft</p>
                          <span x-description=\"Checkmark, only display for selected option.\" x-state:on=\"Highlighted\" x-state:off=\"Not Highlighted\" class=\"text-purple-500\" :class=\"{ 'text-white': activeIndex === 1, 'text-purple-500': !(activeIndex === 1) }\" x-show=\"selectedIndex === 1\">
                            <svg class=\"h-5 w-5\" x-description=\"Heroicon name: mini/check\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z\" clip-rule=\"evenodd\"></path>
</svg>
                          </span>
                        </div>
                        <p x-state:on=\"Highlighted\" x-state:off=\"Not Highlighted\" class=\"text-gray-500 mt-2\" :class=\"{ 'text-purple-200': activeIndex === 1, 'text-gray-500': !(activeIndex === 1) }\">This job posting will no longer be publicly accessible.</p>
                      </div>
                    </li>
                  
                </ul>
              
            </div>
          </div>

          <!-- Dropdown -->
          <div x-data=\"Components.menu({ open: false })\" x-init=\"init()\" @keydown.escape.stop=\"open = false; focusButton()\" @click.away=\"onClickAway(\$event)\" class=\"relative ml-3 sm:hidden\">
            <button type=\"button\" class=\"inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2\" id=\"mobile-menu-button\" x-ref=\"button\" @click=\"onButtonClick()\" @keyup.space.prevent=\"onButtonEnter()\" @keydown.enter.prevent=\"onButtonEnter()\" aria-expanded=\"false\" aria-haspopup=\"true\" x-bind:aria-expanded=\"open.toString()\" @keydown.arrow-up.prevent=\"onArrowUp()\" @keydown.arrow-down.prevent=\"onArrowDown()\">
              More
              <svg class=\"-mr-1 ml-2 h-5 w-5 text-gray-500\" x-description=\"Heroicon name: mini/chevron-down\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z\" clip-rule=\"evenodd\"></path>
</svg>
            </button>

            
              <div x-show=\"open\" x-transition:enter=\"transition ease-out duration-200\" x-transition:enter-start=\"transform opacity-0 scale-95\" x-transition:enter-end=\"transform opacity-100 scale-100\" x-transition:leave=\"transition ease-in duration-75\" x-transition:leave-start=\"transform opacity-100 scale-100\" x-transition:leave-end=\"transform opacity-0 scale-95\" class=\"absolute right-0 z-10 mt-2 -mr-1 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none\" x-ref=\"menu-items\" x-description=\"Dropdown menu, show/hide based on menu state.\" x-bind:aria-activedescendant=\"activeDescendant\" role=\"menu\" aria-orientation=\"vertical\" aria-labelledby=\"mobile-menu-button\" tabindex=\"-1\" @keydown.arrow-up.prevent=\"onArrowUp()\" @keydown.arrow-down.prevent=\"onArrowDown()\" @keydown.tab=\"open = false\" @keydown.enter.prevent=\"open = false; focusButton()\" @keyup.space.prevent=\"open = false; focusButton()\">
                <a href=\"#\" class=\"block px-4 py-2 text-sm text-gray-700\" x-state:on=\"Active\" x-state:off=\"Not Active\" :class=\"{ 'bg-gray-100': activeIndex === 0 }\" role=\"menuitem\" tabindex=\"-1\" id=\"mobile-menu-item-0\" @mouseenter=\"onMouseEnter(\$event)\" @mousemove=\"onMouseMove(\$event, 0)\" @mouseleave=\"onMouseLeave(\$event)\" @click=\"open = false; focusButton()\">Edit</a>
                <a href=\"#\" class=\"block px-4 py-2 text-sm text-gray-700\" :class=\"{ 'bg-gray-100': activeIndex === 1 }\" role=\"menuitem\" tabindex=\"-1\" id=\"mobile-menu-item-1\" @mouseenter=\"onMouseEnter(\$event)\" @mousemove=\"onMouseMove(\$event, 1)\" @mouseleave=\"onMouseLeave(\$event)\" @click=\"open = false; focusButton()\">View</a>
              </div>
            
          </div>
        </div>
      </div>
    </header>

    <main class=\"pt-8 pb-16\">
      <div class=\"mx-auto max-w-7xl sm:px-6 lg:px-8\">
        <div class=\"px-4 sm:px-0\">
          <h2 class=\"text-lg font-medium text-gray-900\">Candidates</h2>

          <!-- Tabs -->
          <div class=\"sm:hidden\">
            <label for=\"tabs\" class=\"sr-only\">Select a tab</label>
            <!-- Use an \"onChange\" listener to redirect the user to the selected tab URL. -->
            <select id=\"tabs\" name=\"tabs\" class=\"mt-4 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-purple-500 focus:outline-none focus:ring-purple-500 sm:text-sm\">
              
                <option>Applied</option>
              
                <option>Phone Screening</option>
              
                <option selected=\"\">Interview</option>
              
                <option>Offer</option>
              
                <option>Disqualified</option>
              
            </select>
          </div>
          <div class=\"hidden sm:block\">
            <div class=\"border-b border-gray-200\">
              <nav class=\"mt-2 -mb-px flex space-x-8\" aria-label=\"Tabs\">
                
                  <a href=\"#\" class=\"border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm\" x-state:on=\"Current\" x-state:off=\"Default\" x-state-description=\"Current: &quot;border-purple-500 text-purple-600&quot;, Default: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200&quot;\">
                    Applied
                    
                      <span class=\"bg-gray-100 text-gray-900 hidden ml-2 py-0.5 px-2.5 rounded-full text-xs font-medium md:inline-block\" x-state:on=\"Current\" x-state:off=\"Default\" x-state-description=\"Current: &quot;bg-purple-100 text-purple-600&quot;, Default: &quot;bg-gray-100 text-gray-900&quot;\">2</span>
                    </a>
                
                  <a href=\"#\" class=\"border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm\" x-state-description=\"undefined: &quot;border-purple-500 text-purple-600&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200&quot;\">
                    Phone Screening
                    
                      <span class=\"bg-gray-100 text-gray-900 hidden ml-2 py-0.5 px-2.5 rounded-full text-xs font-medium md:inline-block\" x-state-description=\"undefined: &quot;bg-purple-100 text-purple-600&quot;, undefined: &quot;bg-gray-100 text-gray-900&quot;\">4</span>
                    </a>
                
                  <a href=\"#\" class=\"border-purple-500 text-purple-600 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm\" x-state-description=\"undefined: &quot;border-purple-500 text-purple-600&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200&quot;\">
                    Interview
                    
                      <span class=\"bg-purple-100 text-purple-600 hidden ml-2 py-0.5 px-2.5 rounded-full text-xs font-medium md:inline-block\" x-state-description=\"undefined: &quot;bg-purple-100 text-purple-600&quot;, undefined: &quot;bg-gray-100 text-gray-900&quot;\">6</span>
                    </a>
                
                  <a href=\"#\" class=\"border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm\" x-state-description=\"undefined: &quot;border-purple-500 text-purple-600&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200&quot;\">
                    Offer
                    </a>
                
                  <a href=\"#\" class=\"border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm\" x-state-description=\"undefined: &quot;border-purple-500 text-purple-600&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200&quot;\">
                    Disqualified
                    </a>
                
              </nav>
            </div>
          </div>
        </div>

        <!-- Stacked list -->
        <ul role=\"list\" class=\"mt-5 divide-y divide-gray-200 border-t border-gray-200 sm:mt-0 sm:border-t-0\">
          
            <li>
              <a href=\"#\" class=\"group block\">
                <div class=\"flex items-center py-5 px-4 sm:py-6 sm:px-0\">
                  <div class=\"flex min-w-0 flex-1 items-center\">
                    <div class=\"flex-shrink-0\">
                      <img class=\"h-12 w-12 rounded-full group-hover:opacity-75\" src=\"https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                    </div>
                    <div class=\"min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4\">
                      <div>
                        <p class=\"truncate text-sm font-medium text-purple-600\">Emily Selman</p>
                        <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                          <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/envelope\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\"></path>
  <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\"></path>
</svg>
                          <span class=\"truncate\">emily.selman@example.com</span>
                        </p>
                      </div>
                      <div class=\"hidden md:block\">
                        <div>
                          <p class=\"text-sm text-gray-900\">
                            Applied on
                            <!-- space -->
                            <time datetime=\"2020-07-01T15:34:56\">January 7, 2020</time>
                          </p>
                          <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                            <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-green-400\" x-description=\"Heroicon name: mini/check-circle\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z\" clip-rule=\"evenodd\"></path>
</svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class=\"h-5 w-5 text-gray-400 group-hover:text-gray-700\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  </div>
                </div>
              </a>
            </li>
          
            <li>
              <a href=\"#\" class=\"group block\">
                <div class=\"flex items-center py-5 px-4 sm:py-6 sm:px-0\">
                  <div class=\"flex min-w-0 flex-1 items-center\">
                    <div class=\"flex-shrink-0\">
                      <img class=\"h-12 w-12 rounded-full group-hover:opacity-75\" src=\"https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                    </div>
                    <div class=\"min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4\">
                      <div>
                        <p class=\"truncate text-sm font-medium text-purple-600\">Michael Foster</p>
                        <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                          <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/envelope\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\"></path>
  <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\"></path>
</svg>
                          <span class=\"truncate\">michael.foster@example.com</span>
                        </p>
                      </div>
                      <div class=\"hidden md:block\">
                        <div>
                          <p class=\"text-sm text-gray-900\">
                            Applied on
                            <!-- space -->
                            <time datetime=\"2020-07-01T15:34:56\">January 7, 2020</time>
                          </p>
                          <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                            <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-green-400\" x-description=\"Heroicon name: mini/check-circle\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z\" clip-rule=\"evenodd\"></path>
</svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class=\"h-5 w-5 text-gray-400 group-hover:text-gray-700\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  </div>
                </div>
              </a>
            </li>
          
            <li>
              <a href=\"#\" class=\"group block\">
                <div class=\"flex items-center py-5 px-4 sm:py-6 sm:px-0\">
                  <div class=\"flex min-w-0 flex-1 items-center\">
                    <div class=\"flex-shrink-0\">
                      <img class=\"h-12 w-12 rounded-full group-hover:opacity-75\" src=\"https://images.unsplash.com/photo-1505840717430-882ce147ef2d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                    </div>
                    <div class=\"min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4\">
                      <div>
                        <p class=\"truncate text-sm font-medium text-purple-600\">Emma Dorsey</p>
                        <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                          <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/envelope\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\"></path>
  <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\"></path>
</svg>
                          <span class=\"truncate\">emma.dorsey@example.com</span>
                        </p>
                      </div>
                      <div class=\"hidden md:block\">
                        <div>
                          <p class=\"text-sm text-gray-900\">
                            Applied on
                            <!-- space -->
                            <time datetime=\"2020-07-01T15:34:56\">January 7, 2020</time>
                          </p>
                          <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                            <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-green-400\" x-description=\"Heroicon name: mini/check-circle\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z\" clip-rule=\"evenodd\"></path>
</svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class=\"h-5 w-5 text-gray-400 group-hover:text-gray-700\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  </div>
                </div>
              </a>
            </li>
          
            <li>
              <a href=\"#\" class=\"group block\">
                <div class=\"flex items-center py-5 px-4 sm:py-6 sm:px-0\">
                  <div class=\"flex min-w-0 flex-1 items-center\">
                    <div class=\"flex-shrink-0\">
                      <img class=\"h-12 w-12 rounded-full group-hover:opacity-75\" src=\"https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                    </div>
                    <div class=\"min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4\">
                      <div>
                        <p class=\"truncate text-sm font-medium text-purple-600\">Anna Roberts</p>
                        <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                          <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/envelope\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\"></path>
  <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\"></path>
</svg>
                          <span class=\"truncate\">anna.roberts@example.com</span>
                        </p>
                      </div>
                      <div class=\"hidden md:block\">
                        <div>
                          <p class=\"text-sm text-gray-900\">
                            Applied on
                            <!-- space -->
                            <time datetime=\"2020-07-01T15:34:56\">January 7, 2020</time>
                          </p>
                          <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                            <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-green-400\" x-description=\"Heroicon name: mini/check-circle\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z\" clip-rule=\"evenodd\"></path>
</svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class=\"h-5 w-5 text-gray-400 group-hover:text-gray-700\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  </div>
                </div>
              </a>
            </li>
          
            <li>
              <a href=\"#\" class=\"group block\">
                <div class=\"flex items-center py-5 px-4 sm:py-6 sm:px-0\">
                  <div class=\"flex min-w-0 flex-1 items-center\">
                    <div class=\"flex-shrink-0\">
                      <img class=\"h-12 w-12 rounded-full group-hover:opacity-75\" src=\"https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                    </div>
                    <div class=\"min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4\">
                      <div>
                        <p class=\"truncate text-sm font-medium text-purple-600\">Leonard Krasner</p>
                        <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                          <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/envelope\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\"></path>
  <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\"></path>
</svg>
                          <span class=\"truncate\">leonard.krasner@example.com</span>
                        </p>
                      </div>
                      <div class=\"hidden md:block\">
                        <div>
                          <p class=\"text-sm text-gray-900\">
                            Applied on
                            <!-- space -->
                            <time datetime=\"2020-07-01T15:34:56\">January 7, 2020</time>
                          </p>
                          <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                            <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-green-400\" x-description=\"Heroicon name: mini/check-circle\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z\" clip-rule=\"evenodd\"></path>
</svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class=\"h-5 w-5 text-gray-400 group-hover:text-gray-700\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  </div>
                </div>
              </a>
            </li>
          
            <li>
              <a href=\"#\" class=\"group block\">
                <div class=\"flex items-center py-5 px-4 sm:py-6 sm:px-0\">
                  <div class=\"flex min-w-0 flex-1 items-center\">
                    <div class=\"flex-shrink-0\">
                      <img class=\"h-12 w-12 rounded-full group-hover:opacity-75\" src=\"https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                    </div>
                    <div class=\"min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4\">
                      <div>
                        <p class=\"truncate text-sm font-medium text-purple-600\">Floyd Miles</p>
                        <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                          <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/envelope\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\"></path>
  <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\"></path>
</svg>
                          <span class=\"truncate\">floyd.miles@example.com</span>
                        </p>
                      </div>
                      <div class=\"hidden md:block\">
                        <div>
                          <p class=\"text-sm text-gray-900\">
                            Applied on
                            <!-- space -->
                            <time datetime=\"2020-07-01T15:34:56\">January 7, 2020</time>
                          </p>
                          <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                            <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-green-400\" x-description=\"Heroicon name: mini/check-circle\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z\" clip-rule=\"evenodd\"></path>
</svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class=\"h-5 w-5 text-gray-400 group-hover:text-gray-700\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  </div>
                </div>
              </a>
            </li>
          
            <li>
              <a href=\"#\" class=\"group block\">
                <div class=\"flex items-center py-5 px-4 sm:py-6 sm:px-0\">
                  <div class=\"flex min-w-0 flex-1 items-center\">
                    <div class=\"flex-shrink-0\">
                      <img class=\"h-12 w-12 rounded-full group-hover:opacity-75\" src=\"https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                    </div>
                    <div class=\"min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4\">
                      <div>
                        <p class=\"truncate text-sm font-medium text-purple-600\">Benjamin Russel</p>
                        <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                          <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/envelope\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\"></path>
  <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\"></path>
</svg>
                          <span class=\"truncate\">benjamin.russel@example.com</span>
                        </p>
                      </div>
                      <div class=\"hidden md:block\">
                        <div>
                          <p class=\"text-sm text-gray-900\">
                            Applied on
                            <!-- space -->
                            <time datetime=\"2020-07-01T15:34:56\">January 7, 2020</time>
                          </p>
                          <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                            <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-green-400\" x-description=\"Heroicon name: mini/check-circle\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z\" clip-rule=\"evenodd\"></path>
</svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class=\"h-5 w-5 text-gray-400 group-hover:text-gray-700\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  </div>
                </div>
              </a>
            </li>
          
            <li>
              <a href=\"#\" class=\"group block\">
                <div class=\"flex items-center py-5 px-4 sm:py-6 sm:px-0\">
                  <div class=\"flex min-w-0 flex-1 items-center\">
                    <div class=\"flex-shrink-0\">
                      <img class=\"h-12 w-12 rounded-full group-hover:opacity-75\" src=\"https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                    </div>
                    <div class=\"min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4\">
                      <div>
                        <p class=\"truncate text-sm font-medium text-purple-600\">Courtney Henry</p>
                        <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                          <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/envelope\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\"></path>
  <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\"></path>
</svg>
                          <span class=\"truncate\">courtney.henry@example.com</span>
                        </p>
                      </div>
                      <div class=\"hidden md:block\">
                        <div>
                          <p class=\"text-sm text-gray-900\">
                            Applied on
                            <!-- space -->
                            <time datetime=\"2020-07-01T15:34:56\">January 7, 2020</time>
                          </p>
                          <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                            <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-green-400\" x-description=\"Heroicon name: mini/check-circle\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z\" clip-rule=\"evenodd\"></path>
</svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class=\"h-5 w-5 text-gray-400 group-hover:text-gray-700\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  </div>
                </div>
              </a>
            </li>
          
            <li>
              <a href=\"#\" class=\"group block\">
                <div class=\"flex items-center py-5 px-4 sm:py-6 sm:px-0\">
                  <div class=\"flex min-w-0 flex-1 items-center\">
                    <div class=\"flex-shrink-0\">
                      <img class=\"h-12 w-12 rounded-full group-hover:opacity-75\" src=\"https://images.unsplash.com/photo-1513910367299-bce8d8a0ebf6?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                    </div>
                    <div class=\"min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4\">
                      <div>
                        <p class=\"truncate text-sm font-medium text-purple-600\">Lawrence Hunter</p>
                        <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                          <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/envelope\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\"></path>
  <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\"></path>
</svg>
                          <span class=\"truncate\">lawrence.hunter@example.com</span>
                        </p>
                      </div>
                      <div class=\"hidden md:block\">
                        <div>
                          <p class=\"text-sm text-gray-900\">
                            Applied on
                            <!-- space -->
                            <time datetime=\"2020-07-01T15:34:56\">January 7, 2020</time>
                          </p>
                          <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                            <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-green-400\" x-description=\"Heroicon name: mini/check-circle\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z\" clip-rule=\"evenodd\"></path>
</svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class=\"h-5 w-5 text-gray-400 group-hover:text-gray-700\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  </div>
                </div>
              </a>
            </li>
          
            <li>
              <a href=\"#\" class=\"group block\">
                <div class=\"flex items-center py-5 px-4 sm:py-6 sm:px-0\">
                  <div class=\"flex min-w-0 flex-1 items-center\">
                    <div class=\"flex-shrink-0\">
                      <img class=\"h-12 w-12 rounded-full group-hover:opacity-75\" src=\"https://images.unsplash.com/photo-1509783236416-c9ad59bae472?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80\" alt=\"\">
                    </div>
                    <div class=\"min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4\">
                      <div>
                        <p class=\"truncate text-sm font-medium text-purple-600\">Alicia Bell</p>
                        <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                          <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400\" x-description=\"Heroicon name: mini/envelope\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\"></path>
  <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\"></path>
</svg>
                          <span class=\"truncate\">alicia.bell@example.com</span>
                        </p>
                      </div>
                      <div class=\"hidden md:block\">
                        <div>
                          <p class=\"text-sm text-gray-900\">
                            Applied on
                            <!-- space -->
                            <time datetime=\"2020-07-01T15:34:56\">January 7, 2020</time>
                          </p>
                          <p class=\"mt-2 flex items-center text-sm text-gray-500\">
                            <svg class=\"mr-1.5 h-5 w-5 flex-shrink-0 text-green-400\" x-description=\"Heroicon name: mini/check-circle\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z\" clip-rule=\"evenodd\"></path>
</svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class=\"h-5 w-5 text-gray-400 group-hover:text-gray-700\" x-description=\"Heroicon name: mini/chevron-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\"></path>
</svg>
                  </div>
                </div>
              </a>
            </li>
          
        </ul>

        <!-- Pagination -->
        <nav class=\"flex items-center justify-between border-t border-gray-200 px-4 sm:px-0\" aria-label=\"Pagination\">
          <div class=\"-mt-px flex w-0 flex-1\">
            <a href=\"#\" class=\"inline-flex items-center border-t-2 border-transparent pt-4 pr-1 text-sm font-medium text-gray-500 hover:border-gray-200 hover:text-gray-700\">
              <svg class=\"mr-3 h-5 w-5 text-gray-400\" x-description=\"Heroicon name: mini/arrow-long-left\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z\" clip-rule=\"evenodd\"></path>
</svg>
              Previous
            </a>
          </div>
          <div class=\"hidden md:-mt-px md:flex\">
            <a href=\"#\" class=\"inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-200 hover:text-gray-700\">1</a>
            <!-- Current: \"border-purple-500 text-purple-600\", Default: \"border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200\" -->
            <a href=\"#\" class=\"inline-flex items-center border-t-2 border-purple-500 px-4 pt-4 text-sm font-medium text-purple-600\" aria-current=\"page\">2</a>
            <a href=\"#\" class=\"inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-200 hover:text-gray-700\">3</a>
            <a href=\"#\" class=\"inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-200 hover:text-gray-700\">4</a>
            <a href=\"#\" class=\"inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-200 hover:text-gray-700\">5</a>
            <a href=\"#\" class=\"inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-200 hover:text-gray-700\">6</a>
          </div>
          <div class=\"-mt-px flex w-0 flex-1 justify-end\">
            <a href=\"#\" class=\"inline-flex items-center border-t-2 border-transparent pt-4 pl-1 text-sm font-medium text-gray-500 hover:border-gray-200 hover:text-gray-700\">
              Next
              <svg class=\"ml-3 h-5 w-5 text-gray-400\" x-description=\"Heroicon name: mini/arrow-long-right\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
  <path fill-rule=\"evenodd\" d=\"M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z\" clip-rule=\"evenodd\"></path>
</svg>
            </a>
          </div>
        </nav>
      </div>
    </main>
  </div>

  </div>
  </body>", "header.html.twig", "C:\\xampp\\htdocs\\cabinet-medical-mvc\\views\\header.html.twig");
    }
}
