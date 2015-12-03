

<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Form Validation &mdash; CodeIgniter 3.0.3 documentation</title>
  

  
  
    <script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"d7682f0cf6791cf762a8c070f90abc6f",petok:"d5fe32265dd4da173585252c4023aa6dfadb08cd-1449124068-1800",zone:"codeigniter.com",rocket:"0",apps:{},sha2test:1}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=38857570ac/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
//]]>
</script>
<link rel="shortcut icon" href="../_static/ci-icon.ico"/>
  

  
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700|Inconsolata:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

  
  
    

  

  
  
    <link rel="stylesheet" href="../_static/css/citheme.css" type="text/css" />
  

  
    <link rel="top" title="CodeIgniter 3.0.3 documentation" href="../index.html"/>
        <link rel="up" title="Libraries" href="index.html"/>
        <link rel="next" title="FTP Class" href="ftp.html"/>
        <link rel="prev" title="File Uploading Class" href="file_uploading.html"/> 

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

</head>

<body class="wy-body-for-nav" role="document">

  <div id="nav">
  <div id="nav_inner">
    
    
    
      <div id="pulldown-menu" class="ciNav">
        <ul>
<li class="toctree-l1"><a class="reference internal" href="../general/welcome.html">Welcome to CodeIgniter</a><ul class="simple">
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../installation/index.html">Installation Instructions</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../installation/downloads.html">Downloading CodeIgniter</a></li>
<li class="toctree-l2"><a class="reference internal" href="../installation/index.html">Installation Instructions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../installation/upgrading.html">Upgrading From a Previous Version</a></li>
<li class="toctree-l2"><a class="reference internal" href="../installation/troubleshooting.html">Troubleshooting</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../overview/index.html">CodeIgniter Overview</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../overview/getting_started.html">Getting Started</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/at_a_glance.html">CodeIgniter at a Glance</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/features.html">Supported Features</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/appflow.html">Application Flow Chart</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/mvc.html">Model-View-Controller</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/goals.html">Architectural Goals</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../tutorial/index.html">Tutorial</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../tutorial/static_pages.html">Static pages</a></li>
<li class="toctree-l2"><a class="reference internal" href="../tutorial/news_section.html">News section</a></li>
<li class="toctree-l2"><a class="reference internal" href="../tutorial/create_news_items.html">Create news items</a></li>
<li class="toctree-l2"><a class="reference internal" href="../tutorial/conclusion.html">Conclusion</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../contributing/index.html">Contributing to CodeIgniter</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../documentation/index.html">Writing CodeIgniter Documentation</a></li>
<li class="toctree-l2"><a class="reference internal" href="../DCO.html">Developer&#8217;s Certificate of Origin 1.1</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../general/index.html">General Topics</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../general/urls.html">CodeIgniter URLs</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/controllers.html">Controllers</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/reserved_names.html">Reserved Names</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/views.html">Views</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/models.html">Models</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/helpers.html">Helpers</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/libraries.html">Using CodeIgniter Libraries</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/creating_libraries.html">Creating Libraries</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/drivers.html">Using CodeIgniter Drivers</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/creating_drivers.html">Creating Drivers</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/core_classes.html">Creating Core System Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/ancillary_classes.html">Creating Ancillary Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/hooks.html">Hooks - Extending the Framework Core</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/autoloader.html">Auto-loading Resources</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/common_functions.html">Common Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/compatibility_functions.html">Compatibility Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/routing.html">URI Routing</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/errors.html">Error Handling</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/caching.html">Caching</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/profiling.html">Profiling Your Application</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/cli.html">Running via the CLI</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/managing_apps.html">Managing your Applications</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/environments.html">Handling Multiple Environments</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/alternative_php.html">Alternate PHP Syntax for View Files</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/security.html">Security</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/styleguide.html">PHP Style Guide</a></li>
</ul>
</li>
</ul>
<ul class="current">
<li class="toctree-l1 current"><a class="reference internal" href="index.html">Libraries</a><ul class="current">
<li class="toctree-l2"><a class="reference internal" href="benchmark.html">Benchmarking Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="caching.html">Caching Driver</a></li>
<li class="toctree-l2"><a class="reference internal" href="calendar.html">Calendaring Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="cart.html">Shopping Cart Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="config.html">Config Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="email.html">Email Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="encrypt.html">Encrypt Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="encryption.html">Encryption Library</a></li>
<li class="toctree-l2"><a class="reference internal" href="file_uploading.html">File Uploading Class</a></li>
<li class="toctree-l2 current"><a class="current reference internal" href="">Form Validation</a></li>
<li class="toctree-l2"><a class="reference internal" href="ftp.html">FTP Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="image_lib.html">Image Manipulation Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="input.html">Input Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="javascript.html">Javascript Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="language.html">Language Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="loader.html">Loader Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="migration.html">Migrations Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="output.html">Output Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="pagination.html">Pagination Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="parser.html">Template Parser Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="security.html">Security Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="sessions.html">Session Library</a></li>
<li class="toctree-l2"><a class="reference internal" href="table.html">HTML Table Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="trackback.html">Trackback Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="typography.html">Typography Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="unit_testing.html">Unit Testing Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="uri.html">URI Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="user_agent.html">User Agent Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="xmlrpc.html">XML-RPC and XML-RPC Server Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="zip.html">Zip Encoding Class</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../database/index.html">Database Reference</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../database/examples.html">Quick Start: Usage Examples</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/configuration.html">Database Configuration</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/connecting.html">Connecting to a Database</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/queries.html">Running Queries</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/results.html">Generating Query Results</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/helpers.html">Query Helper Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/query_builder.html">Query Builder Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/transactions.html">Transactions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/metadata.html">Getting MetaData</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/call_function.html">Custom Function Calls</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/caching.html">Query Caching</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/forge.html">Database Manipulation with Database Forge</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/utilities.html">Database Utilities Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/db_driver_reference.html">Database Driver Reference</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../helpers/index.html">Helpers</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../helpers/array_helper.html">Array Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/captcha_helper.html">CAPTCHA Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/cookie_helper.html">Cookie Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/date_helper.html">Date Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/directory_helper.html">Directory Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/download_helper.html">Download Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/email_helper.html">Email Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/file_helper.html">File Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/form_helper.html">Form Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/html_helper.html">HTML Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/inflector_helper.html">Inflector Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/language_helper.html">Language Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/number_helper.html">Number Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/path_helper.html">Path Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/security_helper.html">Security Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/smiley_helper.html">Smiley Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/string_helper.html">String Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/text_helper.html">Text Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/typography_helper.html">Typography Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/url_helper.html">URL Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/xml_helper.html">XML Helper</a></li>
</ul>
</li>
</ul>

      </div>
    
      
  </div>
</div>
<div id="nav2">
  <a href="#" id="openToc">
    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAARgAA/+4ADkFkb2JlAGTAAAAAAf/bAIQABAMDAwMDBAMDBAYEAwQGBwUEBAUHCAYGBwYGCAoICQkJCQgKCgwMDAwMCgwMDQ0MDBERERERFBQUFBQUFBQUFAEEBQUIBwgPCgoPFA4ODhQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQU/8AAEQgAKwCaAwERAAIRAQMRAf/EAHsAAQAABwEBAAAAAAAAAAAAAAABAwQFBgcIAgkBAQAAAAAAAAAAAAAAAAAAAAAQAAEDAwICBwYEAgsAAAAAAAIBAwQAEQUSBiEHkROTVNQWGDFBUVIUCHEiMtOUFWGBobHRQlMkZIRVEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwDSC+ygkOOaUoKigUCgUCgUCgUCgUCgUCgUCgkuGguIP9FBMFb0Hqg7We+3jlmIqqYFf4ub+/QYlnOR/LqIBKGFUbf8qWv971BytQXXE7Y3Lnm3HsFhp2TaZJAdchRXpIgSpdEJWxJEW3xoKV7F5OMy7JkQn2o7D6w33XGjEAkoiqrJEqIiOIiKuhePCgqp22dyYyS3CyWHnQ5joG61HkRnmnTbaFSMhExRVQRRVJU9iUHjE7ez+fJ0MFipmUNhBV8YUd2SoIV9KkjQla9ltegttBdPLW4/qocL+UTfrMiHW4+P9M71shuyrqaHTcxsl7jegpsji8nh5ZwMvDfgTm0RTjSmjYdFCS6KoOIipdFunCgmNYTMv457MMY6U7iI6oMieDDhRm1VbIhuoOkbqtuK0Hpzb+eZcYZexUxt6UyUqK2cd0SdjtgrhOgijcgERUlJOCIl6CpgbP3blRI8XgMjNARAyKNDfeRBdFDBVUAXgQrqH4pxoJTu2NysY97LP4ac1io5q1InHFeGO24LnVKJuKOkSQ/yKir+rh7aCLG1dzypZQI2FnvTgccYOM3FeN0XWERXAUEFVQgQkUktdLpegm+Td3/Xli/L+S/mYNJIOF9G/wBeLKrZHFb0akG6W1WtQWSg3Dyg5e7V3fipE3O4/wCrktyzYA+ufas2LbZIlmnAT2kvuoN1wft95augilglX/tzP3qCu9O3LL/wV/i5v79BvmTADq14UGu91467Z6U9y0HzH/ncj/U/sT/CgynZG7I2NezpZGUjIycJkYkZSG+uQ81pbBNKLxJfjwoMqZ3/ALYHl35AJ7/cuwHcu5k7r1Q5pHetBjquqVVJWGxj9Zrtcl/Ggy3dHMvauR3HFZj5nHNxSyW5JISYDMoIwx8tFIGHZhPNaykGapr6rUAiicEoMG21lMRj8buPAz8xhJrr7uOeiPTCyAwXUaGR1mgozbTusOsFLEiJ7fbQa/h7gcjy2H3V6xppwDNtUSxCJIqp7valBuWVzJ22xuCROXNNZiJkMtms0DbjUkAZjzoDrTMd9dDRI44ZC2YsrYdKWP2WDT2S3N9dNdlRYrGMYc06IURXSYb0igrpWS485xVNS6nF4rwslkoMwnbpgZLB7bmt5uMweAhDEl4B5uSLzzqTnnyVpW2jaJHRMSIjdDiiotvy3DOE5rYTEbkl5yFn28k7JyG4c7AU2HtLH1uKfaiMPI40CdYbpNtmLdwTSn5rewLNld+7TLdeal4WarWBkbVKBjgdElMJJwAAY5fl4kB3b1fp4XvagsGS3FjJfLzDNtS8aeXx7LzT7TyzByQE5PccRGRC0ZRUDRV6y62vbjagzLmJzS2vuPK43JY6aP1TW6Jz+RIWyFtyC06y3EkiiinAo7YCqfq1AqqnGgsOH3lhZO8d1pmcpB8j5XIm9OYlBJSQ/FSS4427DKO0RC8AlcEMhFdViRR1WDWR5t3WXVuL1d106kG9vdeye2g60+1FDyW0shIcXVpyroXt8I8dfd+NB1vioAdWnD3UF1+gD4UFc6CEKpagxXN43rwJLUHz7yX2c8zokt9uHlsPIhA4aRnnHJTLptIS6CNsY7iASpxUUMkReGpfbQW0vtN5pitvrsN28rwtBD0nc0+/Yft5XhaB6TuaXfsP28rwtA9J3NPv2H7eV4Wgek7mn37D9vK8LQPSdzT79h+3leFoHpO5pd+w/byvC0D0nc0u/Yft5XhaB6TuaXfsP28rwtA9J3NLv2H7eV4Wgek7ml37D9vK8LQPSdzS79h+3leFoHpO5p9+w/byvC0E9r7Reazy2HIYVPxkS/CUHVn26cosxyv2g7h89LYmZSXOenvLEQ1YaQ222RATcQCP8rSGqqA8S02W2pQ6FhMoAIlqCtsnwoCpdKClejI4i3Sgtb+GBxVuNBSFt1pV/RQefLjPyUDy4z8lA8uM/JQPLjPyUDy4z8lA8uM/JQPLjPyUDy4z8lA8uM/JQPLjPyUDy4z8lA8utJ/koJ7WCbBU/LQXOPAFq1koK8B0pag90CggtBBf6qB0UDooHRQOigdFA6KB0UDooHRQOigdFA6KB0UDooI0EaBQf//Z" title="Toggle Table of Contents" alt="Toggle Table of Contents" />
  </a>
</div>

  <div class="wy-grid-for-nav">

    
    <nav data-toggle="wy-nav-shift" class="wy-nav-side">
      <div class="wy-side-nav-search">
        
          <a href="../index.html" class="fa fa-home"> CodeIgniter</a>
        
        
<div role="search">
  <form id="rtd-search-form" class="wy-form" action="../search.html" method="get">
    <input type="text" name="q" placeholder="Search docs" />
    <input type="hidden" name="check_keywords" value="yes" />
    <input type="hidden" name="area" value="default" />
  </form>
</div>
      </div>

      <div class="wy-menu wy-menu-vertical" data-spy="affix" role="navigation" aria-label="main navigation">
        
          
          
              <ul>
<li class="toctree-l1"><a class="reference internal" href="../general/welcome.html">Welcome to CodeIgniter</a><ul class="simple">
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../installation/index.html">Installation Instructions</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../installation/downloads.html">Downloading CodeIgniter</a></li>
<li class="toctree-l2"><a class="reference internal" href="../installation/index.html">Installation Instructions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../installation/upgrading.html">Upgrading From a Previous Version</a></li>
<li class="toctree-l2"><a class="reference internal" href="../installation/troubleshooting.html">Troubleshooting</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../overview/index.html">CodeIgniter Overview</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../overview/getting_started.html">Getting Started</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/at_a_glance.html">CodeIgniter at a Glance</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/features.html">Supported Features</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/appflow.html">Application Flow Chart</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/mvc.html">Model-View-Controller</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/goals.html">Architectural Goals</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../tutorial/index.html">Tutorial</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../tutorial/static_pages.html">Static pages</a></li>
<li class="toctree-l2"><a class="reference internal" href="../tutorial/news_section.html">News section</a></li>
<li class="toctree-l2"><a class="reference internal" href="../tutorial/create_news_items.html">Create news items</a></li>
<li class="toctree-l2"><a class="reference internal" href="../tutorial/conclusion.html">Conclusion</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../contributing/index.html">Contributing to CodeIgniter</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../documentation/index.html">Writing CodeIgniter Documentation</a></li>
<li class="toctree-l2"><a class="reference internal" href="../DCO.html">Developer&#8217;s Certificate of Origin 1.1</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../general/index.html">General Topics</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../general/urls.html">CodeIgniter URLs</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/controllers.html">Controllers</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/reserved_names.html">Reserved Names</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/views.html">Views</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/models.html">Models</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/helpers.html">Helpers</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/libraries.html">Using CodeIgniter Libraries</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/creating_libraries.html">Creating Libraries</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/drivers.html">Using CodeIgniter Drivers</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/creating_drivers.html">Creating Drivers</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/core_classes.html">Creating Core System Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/ancillary_classes.html">Creating Ancillary Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/hooks.html">Hooks - Extending the Framework Core</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/autoloader.html">Auto-loading Resources</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/common_functions.html">Common Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/compatibility_functions.html">Compatibility Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/routing.html">URI Routing</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/errors.html">Error Handling</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/caching.html">Caching</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/profiling.html">Profiling Your Application</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/cli.html">Running via the CLI</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/managing_apps.html">Managing your Applications</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/environments.html">Handling Multiple Environments</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/alternative_php.html">Alternate PHP Syntax for View Files</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/security.html">Security</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/styleguide.html">PHP Style Guide</a></li>
</ul>
</li>
</ul>
<ul class="current">
<li class="toctree-l1 current"><a class="reference internal" href="index.html">Libraries</a><ul class="current">
<li class="toctree-l2"><a class="reference internal" href="benchmark.html">Benchmarking Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="caching.html">Caching Driver</a></li>
<li class="toctree-l2"><a class="reference internal" href="calendar.html">Calendaring Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="cart.html">Shopping Cart Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="config.html">Config Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="email.html">Email Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="encrypt.html">Encrypt Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="encryption.html">Encryption Library</a></li>
<li class="toctree-l2"><a class="reference internal" href="file_uploading.html">File Uploading Class</a></li>
<li class="toctree-l2 current"><a class="current reference internal" href="">Form Validation</a></li>
<li class="toctree-l2"><a class="reference internal" href="ftp.html">FTP Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="image_lib.html">Image Manipulation Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="input.html">Input Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="javascript.html">Javascript Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="language.html">Language Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="loader.html">Loader Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="migration.html">Migrations Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="output.html">Output Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="pagination.html">Pagination Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="parser.html">Template Parser Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="security.html">Security Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="sessions.html">Session Library</a></li>
<li class="toctree-l2"><a class="reference internal" href="table.html">HTML Table Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="trackback.html">Trackback Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="typography.html">Typography Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="unit_testing.html">Unit Testing Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="uri.html">URI Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="user_agent.html">User Agent Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="xmlrpc.html">XML-RPC and XML-RPC Server Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="zip.html">Zip Encoding Class</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../database/index.html">Database Reference</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../database/examples.html">Quick Start: Usage Examples</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/configuration.html">Database Configuration</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/connecting.html">Connecting to a Database</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/queries.html">Running Queries</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/results.html">Generating Query Results</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/helpers.html">Query Helper Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/query_builder.html">Query Builder Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/transactions.html">Transactions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/metadata.html">Getting MetaData</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/call_function.html">Custom Function Calls</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/caching.html">Query Caching</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/forge.html">Database Manipulation with Database Forge</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/utilities.html">Database Utilities Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/db_driver_reference.html">Database Driver Reference</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../helpers/index.html">Helpers</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../helpers/array_helper.html">Array Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/captcha_helper.html">CAPTCHA Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/cookie_helper.html">Cookie Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/date_helper.html">Date Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/directory_helper.html">Directory Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/download_helper.html">Download Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/email_helper.html">Email Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/file_helper.html">File Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/form_helper.html">Form Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/html_helper.html">HTML Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/inflector_helper.html">Inflector Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/language_helper.html">Language Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/number_helper.html">Number Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/path_helper.html">Path Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/security_helper.html">Security Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/smiley_helper.html">Smiley Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/string_helper.html">String Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/text_helper.html">Text Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/typography_helper.html">Typography Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/url_helper.html">URL Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/xml_helper.html">XML Helper</a></li>
</ul>
</li>
</ul>

          
        
      </div>
      &nbsp;
    </nav>

    <section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">

      
      <nav class="wy-nav-top" role="navigation" aria-label="top navigation">
        <i data-toggle="wy-nav-top" class="fa fa-bars"></i>
        <a href="../index.html">CodeIgniter</a>
      </nav>


      
      <div class="wy-nav-content">
        <div class="rst-content">
          <div role="navigation" aria-label="breadcrumbs navigation">
  <ul class="wy-breadcrumbs">
    <li><a href="../index.html">Docs</a> &raquo;</li>
      
        <li><a href="index.html">Libraries</a> &raquo;</li>
      
    <li>Form Validation</li>
    <li class="wy-breadcrumbs-aside">
      
    </li>
    <div style="float:right;margin-left:5px;" id="closeMe">
      <img title="Classic Layout" alt="classic layout" src="data:image/gif;base64,R0lGODlhFAAUAJEAAAAAADMzM////wAAACH5BAUUAAIALAAAAAAUABQAAAImlI+py+0PU5gRBRDM3DxbWoXis42X13USOLauUIqnlsaH/eY6UwAAOw==" />
    </div>
  </ul>
  <hr/>
</div>
          <div role="main" class="document">
            
  <div class="section" id="form-validation">
<h1><a class="toc-backref" href="#id6">Form Validation</a><a class="headerlink" href="#form-validation" title="Permalink to this headline">¶</a></h1>
<p>CodeIgniter provides a comprehensive form validation and data prepping
class that helps minimize the amount of code you&#8217;ll write.</p>
<div class="contents topic" id="page-contents">
<p class="topic-title first">Page Contents</p>
<ul class="simple">
<li><a class="reference internal" href="#form-validation" id="id6">Form Validation</a><ul>
<li><a class="reference internal" href="#overview" id="id7">Overview</a></li>
<li><a class="reference internal" href="#form-validation-tutorial" id="id8">Form Validation Tutorial</a><ul>
<li><a class="reference internal" href="#the-form" id="id9">The Form</a></li>
<li><a class="reference internal" href="#the-success-page" id="id10">The Success Page</a></li>
<li><a class="reference internal" href="#the-controller" id="id11">The Controller</a></li>
<li><a class="reference internal" href="#try-it" id="id12">Try it!</a></li>
<li><a class="reference internal" href="#explanation" id="id13">Explanation</a></li>
<li><a class="reference internal" href="#setting-validation-rules" id="id14">Setting Validation Rules</a></li>
<li><a class="reference internal" href="#setting-rules-using-an-array" id="id15">Setting Rules Using an Array</a></li>
<li><a class="reference internal" href="#cascading-rules" id="id16">Cascading Rules</a></li>
<li><a class="reference internal" href="#prepping-data" id="id17">Prepping Data</a></li>
<li><a class="reference internal" href="#re-populating-the-form" id="id18">Re-populating the form</a></li>
<li><a class="reference internal" href="#callbacks-your-own-validation-methods" id="id19">Callbacks: Your own Validation Methods</a></li>
<li><a class="reference internal" href="#callable-use-anything-as-a-rule" id="id20">Callable: Use anything as a rule</a></li>
<li><a class="reference internal" href="#setting-error-messages" id="id21">Setting Error Messages</a></li>
<li><a class="reference internal" href="#translating-field-names" id="id22">Translating Field Names</a></li>
<li><a class="reference internal" href="#changing-the-error-delimiters" id="id23">Changing the Error Delimiters</a></li>
<li><a class="reference internal" href="#showing-errors-individually" id="id24">Showing Errors Individually</a></li>
<li><a class="reference internal" href="#validating-an-array-other-than-post" id="id25">Validating an Array (other than $_POST)</a></li>
</ul>
</li>
<li><a class="reference internal" href="#saving-sets-of-validation-rules-to-a-config-file" id="id26">Saving Sets of Validation Rules to a Config File</a><ul>
<li><a class="reference internal" href="#how-to-save-your-rules" id="id27">How to save your rules</a></li>
<li><a class="reference internal" href="#creating-sets-of-rules" id="id28">Creating Sets of Rules</a></li>
<li><a class="reference internal" href="#calling-a-specific-rule-group" id="id29">Calling a Specific Rule Group</a></li>
<li><a class="reference internal" href="#associating-a-controller-method-with-a-rule-group" id="id30">Associating a Controller Method with a Rule Group</a></li>
</ul>
</li>
<li><a class="reference internal" href="#using-arrays-as-field-names" id="id31">Using Arrays as Field Names</a></li>
<li><a class="reference internal" href="#rule-reference" id="id32">Rule Reference</a></li>
<li><a class="reference internal" href="#prepping-reference" id="id33">Prepping Reference</a></li>
<li><a class="reference internal" href="#class-reference" id="id34">Class Reference</a></li>
<li><a class="reference internal" href="#helper-reference" id="id35">Helper Reference</a></li>
</ul>
</li>
</ul>
</div>
<div class="section" id="overview">
<h2><a class="toc-backref" href="#id7">Overview</a><a class="headerlink" href="#overview" title="Permalink to this headline">¶</a></h2>
<p>Before explaining CodeIgniter&#8217;s approach to data validation, let&#8217;s
describe the ideal scenario:</p>
<ol class="arabic simple">
<li>A form is displayed.</li>
<li>You fill it in and submit it.</li>
<li>If you submitted something invalid, or perhaps missed a required
item, the form is redisplayed containing your data along with an
error message describing the problem.</li>
<li>This process continues until you have submitted a valid form.</li>
</ol>
<p>On the receiving end, the script must:</p>
<ol class="arabic simple">
<li>Check for required data.</li>
<li>Verify that the data is of the correct type, and meets the correct
criteria. For example, if a username is submitted it must be
validated to contain only permitted characters. It must be of a
minimum length, and not exceed a maximum length. The username can&#8217;t
be someone else&#8217;s existing username, or perhaps even a reserved word.
Etc.</li>
<li>Sanitize the data for security.</li>
<li>Pre-format the data if needed (Does the data need to be trimmed? HTML
encoded? Etc.)</li>
<li>Prep the data for insertion in the database.</li>
</ol>
<p>Although there is nothing terribly complex about the above process, it
usually requires a significant amount of code, and to display error
messages, various control structures are usually placed within the form
HTML. Form validation, while simple to create, is generally very messy
and tedious to implement.</p>
</div>
<div class="section" id="form-validation-tutorial">
<h2><a class="toc-backref" href="#id8">Form Validation Tutorial</a><a class="headerlink" href="#form-validation-tutorial" title="Permalink to this headline">¶</a></h2>
<p>What follows is a &#8220;hands on&#8221; tutorial for implementing CodeIgniters Form
Validation.</p>
<p>In order to implement form validation you&#8217;ll need three things:</p>
<ol class="arabic simple">
<li>A <a class="reference internal" href="../general/views.html"><em>View</em></a> file containing a form.</li>
<li>A View file containing a &#8220;success&#8221; message to be displayed upon
successful submission.</li>
<li>A <a class="reference internal" href="../general/controllers.html"><em>controller</em></a> method to receive and
process the submitted data.</li>
</ol>
<p>Let&#8217;s create those three things, using a member sign-up form as the
example.</p>
<div class="section" id="the-form">
<h3><a class="toc-backref" href="#id9">The Form</a><a class="headerlink" href="#the-form" title="Permalink to this headline">¶</a></h3>
<p>Using a text editor, create a form called myform.php. In it, place this
code and save it to your application/views/ folder:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;</span><span class="nx">html</span><span class="o">&gt;</span>
<span class="o">&lt;</span><span class="nx">head</span><span class="o">&gt;</span>
<span class="o">&lt;</span><span class="nx">title</span><span class="o">&gt;</span><span class="nx">My</span> <span class="nx">Form</span><span class="o">&lt;/</span><span class="nx">title</span><span class="o">&gt;</span>
<span class="o">&lt;/</span><span class="nx">head</span><span class="o">&gt;</span>
<span class="o">&lt;</span><span class="nx">body</span><span class="o">&gt;</span>

<span class="o">&lt;?</span><span class="nx">php</span> <span class="k">echo</span> <span class="nx">validation_errors</span><span class="p">();</span> <span class="cp">?&gt;</span>

<span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nx">form_open</span><span class="p">(</span><span class="s1">&#39;form&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span>

<span class="nt">&lt;h5&gt;</span>Username<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">name=</span><span class="s">&quot;username&quot;</span> <span class="na">value=</span><span class="s">&quot;&quot;</span> <span class="na">size=</span><span class="s">&quot;50&quot;</span> <span class="nt">/&gt;</span>

<span class="nt">&lt;h5&gt;</span>Password<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">name=</span><span class="s">&quot;password&quot;</span> <span class="na">value=</span><span class="s">&quot;&quot;</span> <span class="na">size=</span><span class="s">&quot;50&quot;</span> <span class="nt">/&gt;</span>

<span class="nt">&lt;h5&gt;</span>Password Confirm<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">name=</span><span class="s">&quot;passconf&quot;</span> <span class="na">value=</span><span class="s">&quot;&quot;</span> <span class="na">size=</span><span class="s">&quot;50&quot;</span> <span class="nt">/&gt;</span>

<span class="nt">&lt;h5&gt;</span>Email Address<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">name=</span><span class="s">&quot;email&quot;</span> <span class="na">value=</span><span class="s">&quot;&quot;</span> <span class="na">size=</span><span class="s">&quot;50&quot;</span> <span class="nt">/&gt;</span>

<span class="nt">&lt;div&gt;&lt;input</span> <span class="na">type=</span><span class="s">&quot;submit&quot;</span> <span class="na">value=</span><span class="s">&quot;Submit&quot;</span> <span class="nt">/&gt;&lt;/div&gt;</span>

<span class="nt">&lt;/form&gt;</span>

<span class="nt">&lt;/body&gt;</span>
<span class="nt">&lt;/html&gt;</span>
</pre></div>
</div>
</div>
<div class="section" id="the-success-page">
<h3><a class="toc-backref" href="#id10">The Success Page</a><a class="headerlink" href="#the-success-page" title="Permalink to this headline">¶</a></h3>
<p>Using a text editor, create a form called formsuccess.php. In it, place
this code and save it to your application/views/ folder:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;</span><span class="nx">html</span><span class="o">&gt;</span>
<span class="o">&lt;</span><span class="nx">head</span><span class="o">&gt;</span>
<span class="o">&lt;</span><span class="nx">title</span><span class="o">&gt;</span><span class="nx">My</span> <span class="nx">Form</span><span class="o">&lt;/</span><span class="nx">title</span><span class="o">&gt;</span>
<span class="o">&lt;/</span><span class="nx">head</span><span class="o">&gt;</span>
<span class="o">&lt;</span><span class="nx">body</span><span class="o">&gt;</span>

<span class="o">&lt;</span><span class="nx">h3</span><span class="o">&gt;</span><span class="nx">Your</span> <span class="nx">form</span> <span class="nx">was</span> <span class="nx">successfully</span> <span class="nx">submitted</span><span class="o">!&lt;/</span><span class="nx">h3</span><span class="o">&gt;</span>

<span class="o">&lt;</span><span class="nx">p</span><span class="o">&gt;&lt;?</span><span class="nx">php</span> <span class="k">echo</span> <span class="nx">anchor</span><span class="p">(</span><span class="s1">&#39;form&#39;</span><span class="p">,</span> <span class="s1">&#39;Try it again!&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span><span class="nt">&lt;/p&gt;</span>

<span class="nt">&lt;/body&gt;</span>
<span class="nt">&lt;/html&gt;</span>
</pre></div>
</div>
</div>
<div class="section" id="the-controller">
<h3><a class="toc-backref" href="#id11">The Controller</a><a class="headerlink" href="#the-controller" title="Permalink to this headline">¶</a></h3>
<p>Using a text editor, create a controller called form.php. In it, place
this code and save it to your application/controllers/ folder:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;?</span><span class="nx">php</span>

<span class="k">class</span> <span class="nc">Form</span> <span class="k">extends</span> <span class="nx">CI_Controller</span> <span class="p">{</span>

        <span class="k">public</span> <span class="k">function</span> <span class="nf">index</span><span class="p">()</span>
        <span class="p">{</span>
                <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">helper</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="s1">&#39;form&#39;</span><span class="p">,</span> <span class="s1">&#39;url&#39;</span><span class="p">));</span>

                <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">library</span><span class="p">(</span><span class="s1">&#39;form_validation&#39;</span><span class="p">);</span>

                <span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">run</span><span class="p">()</span> <span class="o">==</span> <span class="k">FALSE</span><span class="p">)</span>
                <span class="p">{</span>
                        <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">view</span><span class="p">(</span><span class="s1">&#39;myform&#39;</span><span class="p">);</span>
                <span class="p">}</span>
                <span class="k">else</span>
                <span class="p">{</span>
                        <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">view</span><span class="p">(</span><span class="s1">&#39;formsuccess&#39;</span><span class="p">);</span>
                <span class="p">}</span>
        <span class="p">}</span>
<span class="p">}</span>
</pre></div>
</div>
</div>
<div class="section" id="try-it">
<h3><a class="toc-backref" href="#id12">Try it!</a><a class="headerlink" href="#try-it" title="Permalink to this headline">¶</a></h3>
<p>To try your form, visit your site using a URL similar to this one:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nx">example</span><span class="o">.</span><span class="nx">com</span><span class="o">/</span><span class="nx">index</span><span class="o">.</span><span class="nx">php</span><span class="o">/</span><span class="nx">form</span><span class="o">/</span>
</pre></div>
</div>
<p>If you submit the form you should simply see the form reload. That&#8217;s
because you haven&#8217;t set up any validation rules yet.</p>
<p><strong>Since you haven&#8217;t told the Form Validation class to validate anything
yet, it returns FALSE (boolean false) by default. ``The run()`` method
only returns TRUE if it has successfully applied your rules without any
of them failing.</strong></p>
</div>
<div class="section" id="explanation">
<h3><a class="toc-backref" href="#id13">Explanation</a><a class="headerlink" href="#explanation" title="Permalink to this headline">¶</a></h3>
<p>You&#8217;ll notice several things about the above pages:</p>
<p>The form (myform.php) is a standard web form with a couple exceptions:</p>
<ol class="arabic">
<li><p class="first">It uses a form helper to create the form opening. Technically, this
isn&#8217;t necessary. You could create the form using standard HTML.
However, the benefit of using the helper is that it generates the
action URL for you, based on the URL in your config file. This makes
your application more portable in the event your URLs change.</p>
</li>
<li><p class="first">At the top of the form you&#8217;ll notice the following function call:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;?</span><span class="nx">php</span> <span class="k">echo</span> <span class="nx">validation_errors</span><span class="p">();</span> <span class="cp">?&gt;</span>
</pre></div>
</div>
<p>This function will return any error messages sent back by the
validator. If there are no messages it returns an empty string.</p>
</li>
</ol>
<p>The controller (form.php) has one method: <tt class="docutils literal"><span class="pre">index()</span></tt>. This method
initializes the validation class and loads the form helper and URL
helper used by your view files. It also runs the validation routine.
Based on whether the validation was successful it either presents the
form or the success page.</p>
</div>
<div class="section" id="setting-validation-rules">
<span id="id1"></span><h3><a class="toc-backref" href="#id14">Setting Validation Rules</a><a class="headerlink" href="#setting-validation-rules" title="Permalink to this headline">¶</a></h3>
<p>CodeIgniter lets you set as many validation rules as you need for a
given field, cascading them in order, and it even lets you prep and
pre-process the field data at the same time. To set validation rules you
will use the <tt class="docutils literal"><span class="pre">set_rules()</span></tt> method:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">();</span>
</pre></div>
</div>
<p>The above method takes <strong>three</strong> parameters as input:</p>
<ol class="arabic simple">
<li>The field name - the exact name you&#8217;ve given the form field.</li>
<li>A &#8220;human&#8221; name for this field, which will be inserted into the error
message. For example, if your field is named &#8220;user&#8221; you might give it
a human name of &#8220;Username&#8221;.</li>
<li>The validation rules for this form field.</li>
<li>(optional) Set custom error messages on any rules given for current field. If not provided will use the default one.</li>
</ol>
<div class="admonition note">
<p class="first admonition-title">Note</p>
<p class="last">If you would like the field name to be stored in a language
file, please see <a class="reference internal" href="#translating-field-names"><em>Translating Field Names</em></a>.</p>
</div>
<p>Here is an example. In your controller (form.php), add this code just
below the validation initialization method:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;username&#39;</span><span class="p">,</span> <span class="s1">&#39;Username&#39;</span><span class="p">,</span> <span class="s1">&#39;required&#39;</span><span class="p">);</span>
<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;password&#39;</span><span class="p">,</span> <span class="s1">&#39;Password&#39;</span><span class="p">,</span> <span class="s1">&#39;required&#39;</span><span class="p">);</span>
<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;passconf&#39;</span><span class="p">,</span> <span class="s1">&#39;Password Confirmation&#39;</span><span class="p">,</span> <span class="s1">&#39;required&#39;</span><span class="p">);</span>
<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;email&#39;</span><span class="p">,</span> <span class="s1">&#39;Email&#39;</span><span class="p">,</span> <span class="s1">&#39;required&#39;</span><span class="p">);</span>
</pre></div>
</div>
<p>Your controller should now look like this:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;?</span><span class="nx">php</span>

<span class="k">class</span> <span class="nc">Form</span> <span class="k">extends</span> <span class="nx">CI_Controller</span> <span class="p">{</span>

        <span class="k">public</span> <span class="k">function</span> <span class="nf">index</span><span class="p">()</span>
        <span class="p">{</span>
                <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">helper</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="s1">&#39;form&#39;</span><span class="p">,</span> <span class="s1">&#39;url&#39;</span><span class="p">));</span>

                <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">library</span><span class="p">(</span><span class="s1">&#39;form_validation&#39;</span><span class="p">);</span>

                <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;username&#39;</span><span class="p">,</span> <span class="s1">&#39;Username&#39;</span><span class="p">,</span> <span class="s1">&#39;required&#39;</span><span class="p">);</span>
                <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;password&#39;</span><span class="p">,</span> <span class="s1">&#39;Password&#39;</span><span class="p">,</span> <span class="s1">&#39;required&#39;</span><span class="p">,</span>
                        <span class="k">array</span><span class="p">(</span><span class="s1">&#39;required&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;You must provide a %s.&#39;</span><span class="p">)</span>
                <span class="p">);</span>
                <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;passconf&#39;</span><span class="p">,</span> <span class="s1">&#39;Password Confirmation&#39;</span><span class="p">,</span> <span class="s1">&#39;required&#39;</span><span class="p">);</span>
                <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;email&#39;</span><span class="p">,</span> <span class="s1">&#39;Email&#39;</span><span class="p">,</span> <span class="s1">&#39;required&#39;</span><span class="p">);</span>

                <span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">run</span><span class="p">()</span> <span class="o">==</span> <span class="k">FALSE</span><span class="p">)</span>
                <span class="p">{</span>
                        <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">view</span><span class="p">(</span><span class="s1">&#39;myform&#39;</span><span class="p">);</span>
                <span class="p">}</span>
                <span class="k">else</span>
                <span class="p">{</span>
                        <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">view</span><span class="p">(</span><span class="s1">&#39;formsuccess&#39;</span><span class="p">);</span>
                <span class="p">}</span>
        <span class="p">}</span>
<span class="p">}</span>
</pre></div>
</div>
<p>Now submit the form with the fields blank and you should see the error
messages. If you submit the form with all the fields populated you&#8217;ll
see your success page.</p>
<div class="admonition note">
<p class="first admonition-title">Note</p>
<p class="last">The form fields are not yet being re-populated with the data
when there is an error. We&#8217;ll get to that shortly.</p>
</div>
</div>
<div class="section" id="setting-rules-using-an-array">
<h3><a class="toc-backref" href="#id15">Setting Rules Using an Array</a><a class="headerlink" href="#setting-rules-using-an-array" title="Permalink to this headline">¶</a></h3>
<p>Before moving on it should be noted that the rule setting method can
be passed an array if you prefer to set all your rules in one action. If
you use this approach, you must name your array keys as indicated:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$config</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span>
        <span class="k">array</span><span class="p">(</span>
                <span class="s1">&#39;field&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;username&#39;</span><span class="p">,</span>
                <span class="s1">&#39;label&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Username&#39;</span><span class="p">,</span>
                <span class="s1">&#39;rules&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;required&#39;</span>
        <span class="p">),</span>
        <span class="k">array</span><span class="p">(</span>
                <span class="s1">&#39;field&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;password&#39;</span><span class="p">,</span>
                <span class="s1">&#39;label&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Password&#39;</span><span class="p">,</span>
                <span class="s1">&#39;rules&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;required&#39;</span><span class="p">,</span>
                <span class="s1">&#39;errors&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span>
                        <span class="s1">&#39;required&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;You must provide a %s.&#39;</span><span class="p">,</span>
                <span class="p">),</span>
        <span class="p">),</span>
        <span class="k">array</span><span class="p">(</span>
                <span class="s1">&#39;field&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;passconf&#39;</span><span class="p">,</span>
                <span class="s1">&#39;label&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Password Confirmation&#39;</span><span class="p">,</span>
                <span class="s1">&#39;rules&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;required&#39;</span>
        <span class="p">),</span>
        <span class="k">array</span><span class="p">(</span>
                <span class="s1">&#39;field&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;email&#39;</span><span class="p">,</span>
                <span class="s1">&#39;label&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Email&#39;</span><span class="p">,</span>
                <span class="s1">&#39;rules&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;required&#39;</span>
        <span class="p">)</span>
<span class="p">);</span>

<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="nv">$config</span><span class="p">);</span>
</pre></div>
</div>
</div>
<div class="section" id="cascading-rules">
<h3><a class="toc-backref" href="#id16">Cascading Rules</a><a class="headerlink" href="#cascading-rules" title="Permalink to this headline">¶</a></h3>
<p>CodeIgniter lets you pipe multiple rules together. Let&#8217;s try it. Change
your rules in the third parameter of rule setting method, like this:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span>
        <span class="s1">&#39;username&#39;</span><span class="p">,</span> <span class="s1">&#39;Username&#39;</span><span class="p">,</span>
        <span class="s1">&#39;required|min_length[5]|max_length[12]|is_unique[users.username]&#39;</span><span class="p">,</span>
        <span class="k">array</span><span class="p">(</span>
                <span class="s1">&#39;required&#39;</span>      <span class="o">=&gt;</span> <span class="s1">&#39;You have not provided %s.&#39;</span><span class="p">,</span>
                <span class="s1">&#39;is_unique&#39;</span>     <span class="o">=&gt;</span> <span class="s1">&#39;This %s already exists.&#39;</span>
        <span class="p">)</span>
<span class="p">);</span>
<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;password&#39;</span><span class="p">,</span> <span class="s1">&#39;Password&#39;</span><span class="p">,</span> <span class="s1">&#39;required&#39;</span><span class="p">);</span>
<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;passconf&#39;</span><span class="p">,</span> <span class="s1">&#39;Password Confirmation&#39;</span><span class="p">,</span> <span class="s1">&#39;required|matches[password]&#39;</span><span class="p">);</span>
<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;email&#39;</span><span class="p">,</span> <span class="s1">&#39;Email&#39;</span><span class="p">,</span> <span class="s1">&#39;required|valid_email|is_unique[users.email]&#39;</span><span class="p">);</span>
</pre></div>
</div>
<p>The above code sets the following rules:</p>
<ol class="arabic simple">
<li>The username field be no shorter than 5 characters and no longer than
12.</li>
<li>The password field must match the password confirmation field.</li>
<li>The email field must contain a valid email address.</li>
</ol>
<p>Give it a try! Submit your form without the proper data and you&#8217;ll see
new error messages that correspond to your new rules. There are numerous
rules available which you can read about in the validation reference.</p>
<div class="admonition note">
<p class="first admonition-title">Note</p>
<p>You can also pass an array of rules to <tt class="docutils literal"><span class="pre">set_rules()</span></tt>,
instead of a string. Example:</p>
<div class="last highlight-ci"><div class="highlight"><pre><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;username&#39;</span><span class="p">,</span> <span class="s1">&#39;Username&#39;</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;required&#39;</span><span class="p">,</span> <span class="s1">&#39;min_length[5]&#39;</span><span class="p">));</span>
</pre></div>
</div>
</div>
</div>
<div class="section" id="prepping-data">
<h3><a class="toc-backref" href="#id17">Prepping Data</a><a class="headerlink" href="#prepping-data" title="Permalink to this headline">¶</a></h3>
<p>In addition to the validation method like the ones we used above, you
can also prep your data in various ways. For example, you can set up
rules like this:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;username&#39;</span><span class="p">,</span> <span class="s1">&#39;Username&#39;</span><span class="p">,</span> <span class="s1">&#39;trim|required|min_length[5]|max_length[12]&#39;</span><span class="p">);</span>
<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;password&#39;</span><span class="p">,</span> <span class="s1">&#39;Password&#39;</span><span class="p">,</span> <span class="s1">&#39;trim|required|min_length[8]&#39;</span><span class="p">);</span>
<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;passconf&#39;</span><span class="p">,</span> <span class="s1">&#39;Password Confirmation&#39;</span><span class="p">,</span> <span class="s1">&#39;trim|required|matches[password]&#39;</span><span class="p">);</span>
<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;email&#39;</span><span class="p">,</span> <span class="s1">&#39;Email&#39;</span><span class="p">,</span> <span class="s1">&#39;trim|required|valid_email&#39;</span><span class="p">);</span>
</pre></div>
</div>
<p>In the above example, we are &#8220;trimming&#8221; the fields, checking for length
where necessary and making sure that both password fields match.</p>
<p><strong>Any native PHP function that accepts one parameter can be used as a
rule, like ``htmlspecialchars()``, ``trim()``, etc.</strong></p>
<div class="admonition note">
<p class="first admonition-title">Note</p>
<p class="last">You will generally want to use the prepping functions
<strong>after</strong> the validation rules so if there is an error, the
original data will be shown in the form.</p>
</div>
</div>
<div class="section" id="re-populating-the-form">
<h3><a class="toc-backref" href="#id18">Re-populating the form</a><a class="headerlink" href="#re-populating-the-form" title="Permalink to this headline">¶</a></h3>
<p>Thus far we have only been dealing with errors. It&#8217;s time to repopulate
the form field with the submitted data. CodeIgniter offers several
helper functions that permit you to do this. The one you will use most
commonly is:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nx">set_value</span><span class="p">(</span><span class="s1">&#39;field name&#39;</span><span class="p">)</span>
</pre></div>
</div>
<p>Open your myform.php view file and update the <strong>value</strong> in each field
using the <a class="reference internal" href="../helpers/form_helper.html#set_value" title="set_value"><tt class="xref php php-func docutils literal"><span class="pre">set_value()</span></tt></a> function:</p>
<p><strong>Don&#8217;t forget to include each field name in the :php:func:`set_value()`
function calls!</strong></p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;</span><span class="nx">html</span><span class="o">&gt;</span>
<span class="o">&lt;</span><span class="nx">head</span><span class="o">&gt;</span>
<span class="o">&lt;</span><span class="nx">title</span><span class="o">&gt;</span><span class="nx">My</span> <span class="nx">Form</span><span class="o">&lt;/</span><span class="nx">title</span><span class="o">&gt;</span>
<span class="o">&lt;/</span><span class="nx">head</span><span class="o">&gt;</span>
<span class="o">&lt;</span><span class="nx">body</span><span class="o">&gt;</span>

<span class="o">&lt;?</span><span class="nx">php</span> <span class="k">echo</span> <span class="nx">validation_errors</span><span class="p">();</span> <span class="cp">?&gt;</span>

<span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nx">form_open</span><span class="p">(</span><span class="s1">&#39;form&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span>

<span class="nt">&lt;h5&gt;</span>Username<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">name=</span><span class="s">&quot;username&quot;</span> <span class="na">value=</span><span class="s">&quot;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nx">set_value</span><span class="p">(</span><span class="s1">&#39;username&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span><span class="s">&quot;</span> <span class="na">size=</span><span class="s">&quot;50&quot;</span> <span class="nt">/&gt;</span>

<span class="nt">&lt;h5&gt;</span>Password<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">name=</span><span class="s">&quot;password&quot;</span> <span class="na">value=</span><span class="s">&quot;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nx">set_value</span><span class="p">(</span><span class="s1">&#39;password&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span><span class="s">&quot;</span> <span class="na">size=</span><span class="s">&quot;50&quot;</span> <span class="nt">/&gt;</span>

<span class="nt">&lt;h5&gt;</span>Password Confirm<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">name=</span><span class="s">&quot;passconf&quot;</span> <span class="na">value=</span><span class="s">&quot;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nx">set_value</span><span class="p">(</span><span class="s1">&#39;passconf&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span><span class="s">&quot;</span> <span class="na">size=</span><span class="s">&quot;50&quot;</span> <span class="nt">/&gt;</span>

<span class="nt">&lt;h5&gt;</span>Email Address<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">name=</span><span class="s">&quot;email&quot;</span> <span class="na">value=</span><span class="s">&quot;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nx">set_value</span><span class="p">(</span><span class="s1">&#39;email&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span><span class="s">&quot;</span> <span class="na">size=</span><span class="s">&quot;50&quot;</span> <span class="nt">/&gt;</span>

<span class="nt">&lt;div&gt;&lt;input</span> <span class="na">type=</span><span class="s">&quot;submit&quot;</span> <span class="na">value=</span><span class="s">&quot;Submit&quot;</span> <span class="nt">/&gt;&lt;/div&gt;</span>

<span class="nt">&lt;/form&gt;</span>

<span class="nt">&lt;/body&gt;</span>
<span class="nt">&lt;/html&gt;</span>
</pre></div>
</div>
<p>Now reload your page and submit the form so that it triggers an error.
Your form fields should now be re-populated</p>
<div class="admonition note">
<p class="first admonition-title">Note</p>
<p class="last">The <a class="reference internal" href="#class-reference"><em>Class Reference</em></a> section below
contains methods that permit you to re-populate &lt;select&gt; menus,
radio buttons, and checkboxes.</p>
</div>
<div class="admonition important">
<p class="first admonition-title">Important</p>
<p>If you use an array as the name of a form field, you
must supply it as an array to the function. Example:</p>
<div class="last highlight-ci"><div class="highlight"><pre><span class="o">&lt;</span><span class="nx">input</span> <span class="nx">type</span><span class="o">=</span><span class="s2">&quot;text&quot;</span> <span class="nx">name</span><span class="o">=</span><span class="s2">&quot;colors[]&quot;</span> <span class="nx">value</span><span class="o">=</span><span class="s2">&quot;&lt;?php echo set_value(&#39;colors[]&#39;); ?&gt;&quot;</span> <span class="nx">size</span><span class="o">=</span><span class="s2">&quot;50&quot;</span> <span class="o">/&gt;</span>
</pre></div>
</div>
</div>
<p>For more info please see the <a class="reference internal" href="#using-arrays-as-field-names"><em>Using Arrays as Field Names</em></a> section below.</p>
</div>
<div class="section" id="callbacks-your-own-validation-methods">
<h3><a class="toc-backref" href="#id19">Callbacks: Your own Validation Methods</a><a class="headerlink" href="#callbacks-your-own-validation-methods" title="Permalink to this headline">¶</a></h3>
<p>The validation system supports callbacks to your own validation
methods. This permits you to extend the validation class to meet your
needs. For example, if you need to run a database query to see if the
user is choosing a unique username, you can create a callback method
that does that. Let&#8217;s create an example of this.</p>
<p>In your controller, change the &#8220;username&#8221; rule to this:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;username&#39;</span><span class="p">,</span> <span class="s1">&#39;Username&#39;</span><span class="p">,</span> <span class="s1">&#39;callback_username_check&#39;</span><span class="p">);</span>
</pre></div>
</div>
<p>Then add a new method called <tt class="docutils literal"><span class="pre">username_check()</span></tt> to your controller.
Here&#8217;s how your controller should now look:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;?</span><span class="nx">php</span>

<span class="k">class</span> <span class="nc">Form</span> <span class="k">extends</span> <span class="nx">CI_Controller</span> <span class="p">{</span>

        <span class="k">public</span> <span class="k">function</span> <span class="nf">index</span><span class="p">()</span>
        <span class="p">{</span>
                <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">helper</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="s1">&#39;form&#39;</span><span class="p">,</span> <span class="s1">&#39;url&#39;</span><span class="p">));</span>

                <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">library</span><span class="p">(</span><span class="s1">&#39;form_validation&#39;</span><span class="p">);</span>

                <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;username&#39;</span><span class="p">,</span> <span class="s1">&#39;Username&#39;</span><span class="p">,</span> <span class="s1">&#39;callback_username_check&#39;</span><span class="p">);</span>
                <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;password&#39;</span><span class="p">,</span> <span class="s1">&#39;Password&#39;</span><span class="p">,</span> <span class="s1">&#39;required&#39;</span><span class="p">);</span>
                <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;passconf&#39;</span><span class="p">,</span> <span class="s1">&#39;Password Confirmation&#39;</span><span class="p">,</span> <span class="s1">&#39;required&#39;</span><span class="p">);</span>
                <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;email&#39;</span><span class="p">,</span> <span class="s1">&#39;Email&#39;</span><span class="p">,</span> <span class="s1">&#39;required|is_unique[users.email]&#39;</span><span class="p">);</span>

                <span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">run</span><span class="p">()</span> <span class="o">==</span> <span class="k">FALSE</span><span class="p">)</span>
                <span class="p">{</span>
                        <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">view</span><span class="p">(</span><span class="s1">&#39;myform&#39;</span><span class="p">);</span>
                <span class="p">}</span>
                <span class="k">else</span>
                <span class="p">{</span>
                        <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">view</span><span class="p">(</span><span class="s1">&#39;formsuccess&#39;</span><span class="p">);</span>
                <span class="p">}</span>
        <span class="p">}</span>

        <span class="k">public</span> <span class="k">function</span> <span class="nf">username_check</span><span class="p">(</span><span class="nv">$str</span><span class="p">)</span>
        <span class="p">{</span>
                <span class="k">if</span> <span class="p">(</span><span class="nv">$str</span> <span class="o">==</span> <span class="s1">&#39;test&#39;</span><span class="p">)</span>
                <span class="p">{</span>
                        <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_message</span><span class="p">(</span><span class="s1">&#39;username_check&#39;</span><span class="p">,</span> <span class="s1">&#39;The {field} field can not be the word &quot;test&quot;&#39;</span><span class="p">);</span>
                        <span class="k">return</span> <span class="k">FALSE</span><span class="p">;</span>
                <span class="p">}</span>
                <span class="k">else</span>
                <span class="p">{</span>
                        <span class="k">return</span> <span class="k">TRUE</span><span class="p">;</span>
                <span class="p">}</span>
        <span class="p">}</span>

<span class="p">}</span>
</pre></div>
</div>
<p>Reload your form and submit it with the word &#8220;test&#8221; as the username. You
can see that the form field data was passed to your callback method
for you to process.</p>
<p>To invoke a callback just put the method name in a rule, with
&#8220;callback_&#8221; as the rule <strong>prefix</strong>. If you need to receive an extra
parameter in your callback method, just add it normally after the
method name between square brackets, as in: &#8220;callback_foo**[bar]**&#8221;,
then it will be passed as the second argument of your callback method.</p>
<div class="admonition note">
<p class="first admonition-title">Note</p>
<p class="last">You can also process the form data that is passed to your
callback and return it. If your callback returns anything other than a
boolean TRUE/FALSE it is assumed that the data is your newly processed
form data.</p>
</div>
</div>
<div class="section" id="callable-use-anything-as-a-rule">
<h3><a class="toc-backref" href="#id20">Callable: Use anything as a rule</a><a class="headerlink" href="#callable-use-anything-as-a-rule" title="Permalink to this headline">¶</a></h3>
<p>If callback rules aren&#8217;t good enough for you (for example, because they are
limited to your controller), don&#8217;t get disappointed, there&#8217;s one more way
to create custom rules: anything that <tt class="docutils literal"><span class="pre">is_callable()</span></tt> would return TRUE for.</p>
<p>Consider the following example:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span>
        <span class="s1">&#39;username&#39;</span><span class="p">,</span> <span class="s1">&#39;Username&#39;</span><span class="p">,</span>
        <span class="k">array</span><span class="p">(</span>
                <span class="s1">&#39;required&#39;</span><span class="p">,</span>
                <span class="k">array</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">users_model</span><span class="p">,</span> <span class="s1">&#39;valid_username&#39;</span><span class="p">)</span>
        <span class="p">)</span>
<span class="p">);</span>
</pre></div>
</div>
<p>The above code would use the <tt class="docutils literal"><span class="pre">valid_username()</span></tt> method from your
<tt class="docutils literal"><span class="pre">Users_model</span></tt> object.</p>
<p>This is just an example of course, and callbacks aren&#8217;t limited to models.
You can use any object/method that accepts the field value as its&#8217; first
parameter. Or if you&#8217;re running PHP 5.3+, you can also use an anonymous
function:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span>
        <span class="s1">&#39;username&#39;</span><span class="p">,</span> <span class="s1">&#39;Username&#39;</span><span class="p">,</span>
        <span class="k">array</span><span class="p">(</span>
                <span class="s1">&#39;required&#39;</span><span class="p">,</span>
                <span class="k">function</span><span class="p">(</span><span class="nv">$value</span><span class="p">)</span>
                <span class="p">{</span>
                        <span class="c1">// Check $value</span>
                <span class="p">}</span>
        <span class="p">)</span>
<span class="p">);</span>
</pre></div>
</div>
<p>Of course, since a Callable rule by itself is not a string, it isn&#8217;t
a rule name either. That is a problem when you want to set error messages
for them. In order to get around that problem, you can put such rules as
the second element of an array, with the first one being the rule name:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span>
        <span class="s1">&#39;username&#39;</span><span class="p">,</span> <span class="s1">&#39;Username&#39;</span><span class="p">,</span>
        <span class="k">array</span><span class="p">(</span>
                <span class="s1">&#39;required&#39;</span><span class="p">,</span>
                <span class="k">array</span><span class="p">(</span><span class="s1">&#39;username_callable&#39;</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">users_model</span><span class="p">,</span> <span class="s1">&#39;valid_username&#39;</span><span class="p">))</span>
        <span class="p">)</span>
<span class="p">);</span>
</pre></div>
</div>
<p>Anonymous function (PHP 5.3+) version:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span>
        <span class="s1">&#39;username&#39;</span><span class="p">,</span> <span class="s1">&#39;Username&#39;</span><span class="p">,</span>
        <span class="k">array</span><span class="p">(</span>
                <span class="s1">&#39;required&#39;</span><span class="p">,</span>
                <span class="k">array</span><span class="p">(</span>
                        <span class="s1">&#39;username_callable&#39;</span><span class="p">,</span>
                        <span class="k">function</span><span class="p">(</span><span class="nv">$str</span><span class="p">)</span>
                        <span class="p">{</span>
                                <span class="c1">// Check validity of $str and return TRUE or FALSE</span>
                        <span class="p">}</span>
                <span class="p">)</span>
        <span class="p">)</span>
<span class="p">);</span>
</pre></div>
</div>
</div>
<div class="section" id="setting-error-messages">
<span id="id2"></span><h3><a class="toc-backref" href="#id21">Setting Error Messages</a><a class="headerlink" href="#setting-error-messages" title="Permalink to this headline">¶</a></h3>
<p>All of the native error messages are located in the following language
file: <strong>system/language/english/form_validation_lang.php</strong></p>
<p>To set your own global custom message for a rule, you can either
extend/override the language file by creating your own in
<strong>application/language/english/form_validation_lang.php</strong> (read more
about this in the <a class="reference internal" href="language.html"><em>Language Class</em></a> documentation),
or use the following method:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_message</span><span class="p">(</span><span class="s1">&#39;rule&#39;</span><span class="p">,</span> <span class="s1">&#39;Error Message&#39;</span><span class="p">);</span>
</pre></div>
</div>
<p>If you need to set a custom error message for a particular field on
some particular rule, use the set_rules() method:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;field_name&#39;</span><span class="p">,</span> <span class="s1">&#39;Field Label&#39;</span><span class="p">,</span> <span class="s1">&#39;rule1|rule2|rule3&#39;</span><span class="p">,</span>
        <span class="k">array</span><span class="p">(</span><span class="s1">&#39;rule2&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Error Message on rule2 for this field_name&#39;</span><span class="p">)</span>
<span class="p">);</span>
</pre></div>
</div>
<p>Where rule corresponds to the name of a particular rule, and Error
Message is the text you would like displayed.</p>
<p>If you&#8217;d like to include a field&#8217;s &#8220;human&#8221; name, or the optional
parameter some rules allow for (such as max_length), you can add the
<strong>{field}</strong> and <strong>{param}</strong> tags to your message, respectively:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_message</span><span class="p">(</span><span class="s1">&#39;min_length&#39;</span><span class="p">,</span> <span class="s1">&#39;{field} must have at least {param} characters.&#39;</span><span class="p">);</span>
</pre></div>
</div>
<p>On a field with the human name Username and a rule of min_length[5], an
error would display: &#8220;Username must have at least 5 characters.&#8221;</p>
<div class="admonition note">
<p class="first admonition-title">Note</p>
<p class="last">The old <cite>sprintf()</cite> method of using <strong>%s</strong> in your error messages
will still work, however it will override the tags above. You should
use one or the other.</p>
</div>
<p>In the callback rule example above, the error message was set by passing
the name of the method (without the &#8220;callback_&#8221; prefix):</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_message</span><span class="p">(</span><span class="s1">&#39;username_check&#39;</span><span class="p">)</span>
</pre></div>
</div>
</div>
<div class="section" id="translating-field-names">
<span id="id3"></span><h3><a class="toc-backref" href="#id22">Translating Field Names</a><a class="headerlink" href="#translating-field-names" title="Permalink to this headline">¶</a></h3>
<p>If you would like to store the &#8220;human&#8221; name you passed to the
<tt class="docutils literal"><span class="pre">set_rules()</span></tt> method in a language file, and therefore make the name
able to be translated, here&#8217;s how:</p>
<p>First, prefix your &#8220;human&#8221; name with <strong>lang:</strong>, as in this example:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;first_name&#39;</span><span class="p">,</span> <span class="s1">&#39;lang:first_name&#39;</span><span class="p">,</span> <span class="s1">&#39;required&#39;</span><span class="p">);</span>
</pre></div>
</div>
<p>Then, store the name in one of your language file arrays (without the
prefix):</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;first_name&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;First Name&#39;</span><span class="p">;</span>
</pre></div>
</div>
<div class="admonition note">
<p class="first admonition-title">Note</p>
<p>If you store your array item in a language file that is not
loaded automatically by CI, you&#8217;ll need to remember to load it in your
controller using:</p>
<div class="last highlight-ci"><div class="highlight"><pre><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">lang</span><span class="o">-&gt;</span><span class="na">load</span><span class="p">(</span><span class="s1">&#39;file_name&#39;</span><span class="p">);</span>
</pre></div>
</div>
</div>
<p>See the <a class="reference internal" href="language.html"><em>Language Class</em></a> page for more info regarding
language files.</p>
</div>
<div class="section" id="changing-the-error-delimiters">
<span id="changing-delimiters"></span><h3><a class="toc-backref" href="#id23">Changing the Error Delimiters</a><a class="headerlink" href="#changing-the-error-delimiters" title="Permalink to this headline">¶</a></h3>
<p>By default, the Form Validation class adds a paragraph tag (&lt;p&gt;) around
each error message shown. You can either change these delimiters
globally, individually, or change the defaults in a config file.</p>
<ol class="arabic">
<li><p class="first"><strong>Changing delimiters Globally</strong>
To globally change the error delimiters, in your controller method,
just after loading the Form Validation class, add this:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_error_delimiters</span><span class="p">(</span><span class="s1">&#39;&lt;div class=&quot;error&quot;&gt;&#39;</span><span class="p">,</span> <span class="s1">&#39;&lt;/div&gt;&#39;</span><span class="p">);</span>
</pre></div>
</div>
<p>In this example, we&#8217;ve switched to using div tags.</p>
</li>
<li><p class="first"><strong>Changing delimiters Individually</strong>
Each of the two error generating functions shown in this tutorial can
be supplied their own delimiters as follows:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;?</span><span class="nx">php</span> <span class="k">echo</span> <span class="nx">form_error</span><span class="p">(</span><span class="s1">&#39;field name&#39;</span><span class="p">,</span> <span class="s1">&#39;&lt;div class=&quot;error&quot;&gt;&#39;</span><span class="p">,</span> <span class="s1">&#39;&lt;/div&gt;&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span>
</pre></div>
</div>
<p>Or:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;?</span><span class="nx">php</span> <span class="k">echo</span> <span class="nx">validation_errors</span><span class="p">(</span><span class="s1">&#39;&lt;div class=&quot;error&quot;&gt;&#39;</span><span class="p">,</span> <span class="s1">&#39;&lt;/div&gt;&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span>
</pre></div>
</div>
</li>
<li><p class="first"><strong>Set delimiters in a config file</strong>
You can add your error delimiters in application/config/form_validation.php as follows:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$config</span><span class="p">[</span><span class="s1">&#39;error_prefix&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;&lt;div class=&quot;error_prefix&quot;&gt;&#39;</span><span class="p">;</span>
<span class="nv">$config</span><span class="p">[</span><span class="s1">&#39;error_suffix&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;&lt;/div&gt;&#39;</span><span class="p">;</span>
</pre></div>
</div>
</li>
</ol>
</div>
<div class="section" id="showing-errors-individually">
<h3><a class="toc-backref" href="#id24">Showing Errors Individually</a><a class="headerlink" href="#showing-errors-individually" title="Permalink to this headline">¶</a></h3>
<p>If you prefer to show an error message next to each form field, rather
than as a list, you can use the <a class="reference internal" href="../helpers/form_helper.html#form_error" title="form_error"><tt class="xref php php-func docutils literal"><span class="pre">form_error()</span></tt></a> function.</p>
<p>Try it! Change your form so that it looks like this:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;</span><span class="nx">h5</span><span class="o">&gt;</span><span class="nx">Username</span><span class="o">&lt;/</span><span class="nx">h5</span><span class="o">&gt;</span>
<span class="o">&lt;?</span><span class="nx">php</span> <span class="k">echo</span> <span class="nx">form_error</span><span class="p">(</span><span class="s1">&#39;username&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">name=</span><span class="s">&quot;username&quot;</span> <span class="na">value=</span><span class="s">&quot;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nx">set_value</span><span class="p">(</span><span class="s1">&#39;username&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span><span class="s">&quot;</span> <span class="na">size=</span><span class="s">&quot;50&quot;</span> <span class="nt">/&gt;</span>

<span class="nt">&lt;h5&gt;</span>Password<span class="nt">&lt;/h5&gt;</span>
<span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nx">form_error</span><span class="p">(</span><span class="s1">&#39;password&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">name=</span><span class="s">&quot;password&quot;</span> <span class="na">value=</span><span class="s">&quot;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nx">set_value</span><span class="p">(</span><span class="s1">&#39;password&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span><span class="s">&quot;</span> <span class="na">size=</span><span class="s">&quot;50&quot;</span> <span class="nt">/&gt;</span>

<span class="nt">&lt;h5&gt;</span>Password Confirm<span class="nt">&lt;/h5&gt;</span>
<span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nx">form_error</span><span class="p">(</span><span class="s1">&#39;passconf&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">name=</span><span class="s">&quot;passconf&quot;</span> <span class="na">value=</span><span class="s">&quot;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nx">set_value</span><span class="p">(</span><span class="s1">&#39;passconf&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span><span class="s">&quot;</span> <span class="na">size=</span><span class="s">&quot;50&quot;</span> <span class="nt">/&gt;</span>

<span class="nt">&lt;h5&gt;</span>Email Address<span class="nt">&lt;/h5&gt;</span>
<span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nx">form_error</span><span class="p">(</span><span class="s1">&#39;email&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">name=</span><span class="s">&quot;email&quot;</span> <span class="na">value=</span><span class="s">&quot;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nx">set_value</span><span class="p">(</span><span class="s1">&#39;email&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span><span class="s">&quot;</span> <span class="na">size=</span><span class="s">&quot;50&quot;</span> <span class="nt">/&gt;</span>
</pre></div>
</div>
<p>If there are no errors, nothing will be shown. If there is an error, the
message will appear.</p>
<div class="admonition important">
<p class="first admonition-title">Important</p>
<p>If you use an array as the name of a form field, you
must supply it as an array to the function. Example:</p>
<div class="last highlight-ci"><div class="highlight"><pre><span class="o">&lt;?</span><span class="nx">php</span> <span class="k">echo</span> <span class="nx">form_error</span><span class="p">(</span><span class="s1">&#39;options[size]&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">name=</span><span class="s">&quot;options[size]&quot;</span> <span class="na">value=</span><span class="s">&quot;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nx">set_value</span><span class="p">(</span><span class="s2">&quot;options[size]&quot;</span><span class="p">);</span> <span class="cp">?&gt;</span><span class="s">&quot;</span> <span class="na">size=</span><span class="s">&quot;50&quot;</span> <span class="nt">/&gt;</span>
</pre></div>
</div>
</div>
<p>For more info please see the <a class="reference internal" href="#using-arrays-as-field-names"><em>Using Arrays as Field Names</em></a> section below.</p>
</div>
<div class="section" id="validating-an-array-other-than-post">
<h3><a class="toc-backref" href="#id25">Validating an Array (other than $_POST)</a><a class="headerlink" href="#validating-an-array-other-than-post" title="Permalink to this headline">¶</a></h3>
<p>Sometimes you may want to validate an array that does not originate from <tt class="docutils literal"><span class="pre">$_POST</span></tt> data.</p>
<p>In this case, you can specify the array to be validated:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$data</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span>
        <span class="s1">&#39;username&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;johndoe&#39;</span><span class="p">,</span>
        <span class="s1">&#39;password&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;mypassword&#39;</span><span class="p">,</span>
        <span class="s1">&#39;passconf&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;mypassword&#39;</span>
<span class="p">);</span>

<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_data</span><span class="p">(</span><span class="nv">$data</span><span class="p">);</span>
</pre></div>
</div>
<p>Creating validation rules, running the validation, and retrieving error
messages works the same whether you are validating <tt class="docutils literal"><span class="pre">$_POST</span></tt> data or
another array of your choice.</p>
<div class="admonition important">
<p class="first admonition-title">Important</p>
<p class="last">You have to call the <tt class="docutils literal"><span class="pre">set_data()</span></tt> method <em>before</em> defining
any validation rules.</p>
</div>
<div class="admonition important">
<p class="first admonition-title">Important</p>
<p class="last">If you want to validate more than one array during a single
execution, then you should call the <tt class="docutils literal"><span class="pre">reset_validation()</span></tt> method
before setting up rules and validating the new array.</p>
</div>
<p>For more info please see the <a class="reference internal" href="#class-reference"><em>Class Reference</em></a> section below.</p>
</div>
</div>
<div class="section" id="saving-sets-of-validation-rules-to-a-config-file">
<span id="saving-groups"></span><h2><a class="toc-backref" href="#id26">Saving Sets of Validation Rules to a Config File</a><a class="headerlink" href="#saving-sets-of-validation-rules-to-a-config-file" title="Permalink to this headline">¶</a></h2>
<p>A nice feature of the Form Validation class is that it permits you to
store all your validation rules for your entire application in a config
file. You can organize these rules into &#8220;groups&#8221;. These groups can
either be loaded automatically when a matching controller/method is
called, or you can manually call each set as needed.</p>
<div class="section" id="how-to-save-your-rules">
<h3><a class="toc-backref" href="#id27">How to save your rules</a><a class="headerlink" href="#how-to-save-your-rules" title="Permalink to this headline">¶</a></h3>
<p>To store your validation rules, simply create a file named
form_validation.php in your application/config/ folder. In that file
you will place an array named $config with your rules. As shown earlier,
the validation array will have this prototype:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$config</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span>
        <span class="k">array</span><span class="p">(</span>
                <span class="s1">&#39;field&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;username&#39;</span><span class="p">,</span>
                <span class="s1">&#39;label&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Username&#39;</span><span class="p">,</span>
                <span class="s1">&#39;rules&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;required&#39;</span>
        <span class="p">),</span>
        <span class="k">array</span><span class="p">(</span>
                <span class="s1">&#39;field&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;password&#39;</span><span class="p">,</span>
                <span class="s1">&#39;label&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Password&#39;</span><span class="p">,</span>
                <span class="s1">&#39;rules&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;required&#39;</span>
        <span class="p">),</span>
        <span class="k">array</span><span class="p">(</span>
                <span class="s1">&#39;field&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;passconf&#39;</span><span class="p">,</span>
                <span class="s1">&#39;label&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Password Confirmation&#39;</span><span class="p">,</span>
                <span class="s1">&#39;rules&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;required&#39;</span>
        <span class="p">),</span>
        <span class="k">array</span><span class="p">(</span>
                <span class="s1">&#39;field&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;email&#39;</span><span class="p">,</span>
                <span class="s1">&#39;label&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Email&#39;</span><span class="p">,</span>
                <span class="s1">&#39;rules&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;required&#39;</span>
        <span class="p">)</span>
<span class="p">);</span>
</pre></div>
</div>
<p>Your validation rule file will be loaded automatically and used when you
call the <tt class="docutils literal"><span class="pre">run()</span></tt> method.</p>
<p>Please note that you MUST name your <tt class="docutils literal"><span class="pre">$config</span></tt> array.</p>
</div>
<div class="section" id="creating-sets-of-rules">
<h3><a class="toc-backref" href="#id28">Creating Sets of Rules</a><a class="headerlink" href="#creating-sets-of-rules" title="Permalink to this headline">¶</a></h3>
<p>In order to organize your rules into &#8220;sets&#8221; requires that you place them
into &#8220;sub arrays&#8221;. Consider the following example, showing two sets of
rules. We&#8217;ve arbitrarily called these two rules &#8220;signup&#8221; and &#8220;email&#8221;.
You can name your rules anything you want:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$config</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span>
        <span class="s1">&#39;signup&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span>
                <span class="k">array</span><span class="p">(</span>
                        <span class="s1">&#39;field&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;username&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;label&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Username&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;rules&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;required&#39;</span>
                <span class="p">),</span>
                <span class="k">array</span><span class="p">(</span>
                        <span class="s1">&#39;field&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;password&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;label&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Password&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;rules&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;required&#39;</span>
                <span class="p">),</span>
                <span class="k">array</span><span class="p">(</span>
                        <span class="s1">&#39;field&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;passconf&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;label&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Password Confirmation&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;rules&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;required&#39;</span>
                <span class="p">),</span>
                <span class="k">array</span><span class="p">(</span>
                        <span class="s1">&#39;field&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;email&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;label&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Email&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;rules&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;required&#39;</span>
                <span class="p">)</span>
        <span class="p">),</span>
        <span class="s1">&#39;email&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span>
                <span class="k">array</span><span class="p">(</span>
                        <span class="s1">&#39;field&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;emailaddress&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;label&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;EmailAddress&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;rules&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;required|valid_email&#39;</span>
                <span class="p">),</span>
                <span class="k">array</span><span class="p">(</span>
                        <span class="s1">&#39;field&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;name&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;label&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Name&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;rules&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;required|alpha&#39;</span>
                <span class="p">),</span>
                <span class="k">array</span><span class="p">(</span>
                        <span class="s1">&#39;field&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;title&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;label&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Title&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;rules&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;required&#39;</span>
                <span class="p">),</span>
                <span class="k">array</span><span class="p">(</span>
                        <span class="s1">&#39;field&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;message&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;label&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;MessageBody&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;rules&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;required&#39;</span>
                <span class="p">)</span>
        <span class="p">)</span>
<span class="p">);</span>
</pre></div>
</div>
</div>
<div class="section" id="calling-a-specific-rule-group">
<h3><a class="toc-backref" href="#id29">Calling a Specific Rule Group</a><a class="headerlink" href="#calling-a-specific-rule-group" title="Permalink to this headline">¶</a></h3>
<p>In order to call a specific group, you will pass its name to the <tt class="docutils literal"><span class="pre">run()</span></tt>
method. For example, to call the signup rule you will do this:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">run</span><span class="p">(</span><span class="s1">&#39;signup&#39;</span><span class="p">)</span> <span class="o">==</span> <span class="k">FALSE</span><span class="p">)</span>
<span class="p">{</span>
        <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">view</span><span class="p">(</span><span class="s1">&#39;myform&#39;</span><span class="p">);</span>
<span class="p">}</span>
<span class="k">else</span>
<span class="p">{</span>
        <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">view</span><span class="p">(</span><span class="s1">&#39;formsuccess&#39;</span><span class="p">);</span>
<span class="p">}</span>
</pre></div>
</div>
</div>
<div class="section" id="associating-a-controller-method-with-a-rule-group">
<h3><a class="toc-backref" href="#id30">Associating a Controller Method with a Rule Group</a><a class="headerlink" href="#associating-a-controller-method-with-a-rule-group" title="Permalink to this headline">¶</a></h3>
<p>An alternate (and more automatic) method of calling a rule group is to
name it according to the controller class/method you intend to use it
with. For example, let&#8217;s say you have a controller named Member and a
method named signup. Here&#8217;s what your class might look like:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;?</span><span class="nx">php</span>

<span class="k">class</span> <span class="nc">Member</span> <span class="k">extends</span> <span class="nx">CI_Controller</span> <span class="p">{</span>

        <span class="k">public</span> <span class="k">function</span> <span class="nf">signup</span><span class="p">()</span>
        <span class="p">{</span>
                <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">library</span><span class="p">(</span><span class="s1">&#39;form_validation&#39;</span><span class="p">);</span>

                <span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">run</span><span class="p">()</span> <span class="o">==</span> <span class="k">FALSE</span><span class="p">)</span>
                <span class="p">{</span>
                        <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">view</span><span class="p">(</span><span class="s1">&#39;myform&#39;</span><span class="p">);</span>
                <span class="p">}</span>
                <span class="k">else</span>
                <span class="p">{</span>
                        <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">view</span><span class="p">(</span><span class="s1">&#39;formsuccess&#39;</span><span class="p">);</span>
                <span class="p">}</span>
        <span class="p">}</span>
<span class="p">}</span>
</pre></div>
</div>
<p>In your validation config file, you will name your rule group
member/signup:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$config</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span>
        <span class="s1">&#39;member/signup&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span>
                <span class="k">array</span><span class="p">(</span>
                        <span class="s1">&#39;field&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;username&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;label&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Username&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;rules&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;required&#39;</span>
                <span class="p">),</span>
                <span class="k">array</span><span class="p">(</span>
                        <span class="s1">&#39;field&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;password&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;label&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Password&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;rules&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;required&#39;</span>
                <span class="p">),</span>
                <span class="k">array</span><span class="p">(</span>
                        <span class="s1">&#39;field&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;passconf&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;label&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;PasswordConfirmation&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;rules&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;required&#39;</span>
                <span class="p">),</span>
                <span class="k">array</span><span class="p">(</span>
                        <span class="s1">&#39;field&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;email&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;label&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Email&#39;</span><span class="p">,</span>
                        <span class="s1">&#39;rules&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;required&#39;</span>
                <span class="p">)</span>
        <span class="p">)</span>
<span class="p">);</span>
</pre></div>
</div>
<p>When a rule group is named identically to a controller class/method it
will be used automatically when the <tt class="docutils literal"><span class="pre">run()</span></tt> method is invoked from that
class/method.</p>
</div>
</div>
<div class="section" id="using-arrays-as-field-names">
<span id="id4"></span><h2><a class="toc-backref" href="#id31">Using Arrays as Field Names</a><a class="headerlink" href="#using-arrays-as-field-names" title="Permalink to this headline">¶</a></h2>
<p>The Form Validation class supports the use of arrays as field names.
Consider this example:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;</span><span class="nx">input</span> <span class="nx">type</span><span class="o">=</span><span class="s2">&quot;text&quot;</span> <span class="nx">name</span><span class="o">=</span><span class="s2">&quot;options[]&quot;</span> <span class="nx">value</span><span class="o">=</span><span class="s2">&quot;&quot;</span> <span class="nx">size</span><span class="o">=</span><span class="s2">&quot;50&quot;</span> <span class="o">/&gt;</span>
</pre></div>
</div>
<p>If you do use an array as a field name, you must use the EXACT array
name in the <a class="reference internal" href="#helper-functions"><em>Helper Functions</em></a> that require the
field name, and as your Validation Rule field name.</p>
<p>For example, to set a rule for the above field you would use:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">set_rules</span><span class="p">(</span><span class="s1">&#39;options[]&#39;</span><span class="p">,</span> <span class="s1">&#39;Options&#39;</span><span class="p">,</span> <span class="s1">&#39;required&#39;</span><span class="p">);</span>
</pre></div>
</div>
<p>Or, to show an error for the above field you would use:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;?</span><span class="nx">php</span> <span class="k">echo</span> <span class="nx">form_error</span><span class="p">(</span><span class="s1">&#39;options[]&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span>
</pre></div>
</div>
<p>Or to re-populate the field you would use:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;</span><span class="nx">input</span> <span class="nx">type</span><span class="o">=</span><span class="s2">&quot;text&quot;</span> <span class="nx">name</span><span class="o">=</span><span class="s2">&quot;options[]&quot;</span> <span class="nx">value</span><span class="o">=</span><span class="s2">&quot;&lt;?php echo set_value(&#39;options[]&#39;); ?&gt;&quot;</span> <span class="nx">size</span><span class="o">=</span><span class="s2">&quot;50&quot;</span> <span class="o">/&gt;</span>
</pre></div>
</div>
<p>You can use multidimensional arrays as field names as well. For example:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;</span><span class="nx">input</span> <span class="nx">type</span><span class="o">=</span><span class="s2">&quot;text&quot;</span> <span class="nx">name</span><span class="o">=</span><span class="s2">&quot;options[size]&quot;</span> <span class="nx">value</span><span class="o">=</span><span class="s2">&quot;&quot;</span> <span class="nx">size</span><span class="o">=</span><span class="s2">&quot;50&quot;</span> <span class="o">/&gt;</span>
</pre></div>
</div>
<p>Or even:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;</span><span class="nx">input</span> <span class="nx">type</span><span class="o">=</span><span class="s2">&quot;text&quot;</span> <span class="nx">name</span><span class="o">=</span><span class="s2">&quot;sports[nba][basketball]&quot;</span> <span class="nx">value</span><span class="o">=</span><span class="s2">&quot;&quot;</span> <span class="nx">size</span><span class="o">=</span><span class="s2">&quot;50&quot;</span> <span class="o">/&gt;</span>
</pre></div>
</div>
<p>As with our first example, you must use the exact array name in the
helper functions:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;?</span><span class="nx">php</span> <span class="k">echo</span> <span class="nx">form_error</span><span class="p">(</span><span class="s1">&#39;sports[nba][basketball]&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span>
</pre></div>
</div>
<p>If you are using checkboxes (or other fields) that have multiple
options, don&#8217;t forget to leave an empty bracket after each option, so
that all selections will be added to the POST array:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;</span><span class="nx">input</span> <span class="nx">type</span><span class="o">=</span><span class="s2">&quot;checkbox&quot;</span> <span class="nx">name</span><span class="o">=</span><span class="s2">&quot;options[]&quot;</span> <span class="nx">value</span><span class="o">=</span><span class="s2">&quot;red&quot;</span> <span class="o">/&gt;</span>
<span class="o">&lt;</span><span class="nx">input</span> <span class="nx">type</span><span class="o">=</span><span class="s2">&quot;checkbox&quot;</span> <span class="nx">name</span><span class="o">=</span><span class="s2">&quot;options[]&quot;</span> <span class="nx">value</span><span class="o">=</span><span class="s2">&quot;blue&quot;</span> <span class="o">/&gt;</span>
<span class="o">&lt;</span><span class="nx">input</span> <span class="nx">type</span><span class="o">=</span><span class="s2">&quot;checkbox&quot;</span> <span class="nx">name</span><span class="o">=</span><span class="s2">&quot;options[]&quot;</span> <span class="nx">value</span><span class="o">=</span><span class="s2">&quot;green&quot;</span> <span class="o">/&gt;</span>
</pre></div>
</div>
<p>Or if you use a multidimensional array:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;</span><span class="nx">input</span> <span class="nx">type</span><span class="o">=</span><span class="s2">&quot;checkbox&quot;</span> <span class="nx">name</span><span class="o">=</span><span class="s2">&quot;options[color][]&quot;</span> <span class="nx">value</span><span class="o">=</span><span class="s2">&quot;red&quot;</span> <span class="o">/&gt;</span>
<span class="o">&lt;</span><span class="nx">input</span> <span class="nx">type</span><span class="o">=</span><span class="s2">&quot;checkbox&quot;</span> <span class="nx">name</span><span class="o">=</span><span class="s2">&quot;options[color][]&quot;</span> <span class="nx">value</span><span class="o">=</span><span class="s2">&quot;blue&quot;</span> <span class="o">/&gt;</span>
<span class="o">&lt;</span><span class="nx">input</span> <span class="nx">type</span><span class="o">=</span><span class="s2">&quot;checkbox&quot;</span> <span class="nx">name</span><span class="o">=</span><span class="s2">&quot;options[color][]&quot;</span> <span class="nx">value</span><span class="o">=</span><span class="s2">&quot;green&quot;</span> <span class="o">/&gt;</span>
</pre></div>
</div>
<p>When you use a helper function you&#8217;ll include the bracket as well:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;?</span><span class="nx">php</span> <span class="k">echo</span> <span class="nx">form_error</span><span class="p">(</span><span class="s1">&#39;options[color][]&#39;</span><span class="p">);</span> <span class="cp">?&gt;</span>
</pre></div>
</div>
</div>
<div class="section" id="rule-reference">
<h2><a class="toc-backref" href="#id32">Rule Reference</a><a class="headerlink" href="#rule-reference" title="Permalink to this headline">¶</a></h2>
<p>The following is a list of all the native rules that are available to
use:</p>
<table border="1" class="docutils">
<colgroup>
<col width="16%" />
<col width="7%" />
<col width="61%" />
<col width="16%" />
</colgroup>
<thead valign="bottom">
<tr class="row-odd"><th class="head">Rule</th>
<th class="head">Parameter</th>
<th class="head">Description</th>
<th class="head">Example</th>
</tr>
</thead>
<tbody valign="top">
<tr class="row-even"><td><strong>required</strong></td>
<td>No</td>
<td>Returns FALSE if the form element is empty.</td>
<td>&nbsp;</td>
</tr>
<tr class="row-odd"><td><strong>matches</strong></td>
<td>Yes</td>
<td>Returns FALSE if the form element does not match the one in the parameter.</td>
<td>matches[form_item]</td>
</tr>
<tr class="row-even"><td><strong>regex_match</strong></td>
<td>Yes</td>
<td>Returns FALSE if the form element does not match the regular expression.</td>
<td>regex_match[/regex/]</td>
</tr>
<tr class="row-odd"><td><strong>differs</strong></td>
<td>Yes</td>
<td>Returns FALSE if the form element does not differ from the one in the parameter.</td>
<td>differs[form_item]</td>
</tr>
<tr class="row-even"><td><strong>is_unique</strong></td>
<td>Yes</td>
<td>Returns FALSE if the form element is not unique to the table and field name in the
parameter. Note: This rule requires <a class="reference internal" href="../database/query_builder.html"><em>Query Builder</em></a> to be
enabled in order to work.</td>
<td>is_unique[table.field]</td>
</tr>
<tr class="row-odd"><td><strong>min_length</strong></td>
<td>Yes</td>
<td>Returns FALSE if the form element is shorter than the parameter value.</td>
<td>min_length[3]</td>
</tr>
<tr class="row-even"><td><strong>max_length</strong></td>
<td>Yes</td>
<td>Returns FALSE if the form element is longer than the parameter value.</td>
<td>max_length[12]</td>
</tr>
<tr class="row-odd"><td><strong>exact_length</strong></td>
<td>Yes</td>
<td>Returns FALSE if the form element is not exactly the parameter value.</td>
<td>exact_length[8]</td>
</tr>
<tr class="row-even"><td><strong>greater_than</strong></td>
<td>Yes</td>
<td>Returns FALSE if the form element is less than or equal to the parameter value or not
numeric.</td>
<td>greater_than[8]</td>
</tr>
<tr class="row-odd"><td><strong>greater_than_equal_to</strong></td>
<td>Yes</td>
<td>Returns FALSE if the form element is less than the parameter value,
or not numeric.</td>
<td>greater_than_equal_to[8]</td>
</tr>
<tr class="row-even"><td><strong>less_than</strong></td>
<td>Yes</td>
<td>Returns FALSE if the form element is greater than or equal to the parameter value or
not numeric.</td>
<td>less_than[8]</td>
</tr>
<tr class="row-odd"><td><strong>less_than_equal_to</strong></td>
<td>Yes</td>
<td>Returns FALSE if the form element is greater than the parameter value,
or not numeric.</td>
<td>less_than_equal_to[8]</td>
</tr>
<tr class="row-even"><td><strong>in_list</strong></td>
<td>Yes</td>
<td>Returns FALSE if the form element is not within a predetermined list.</td>
<td>in_list[red,blue,green]</td>
</tr>
<tr class="row-odd"><td><strong>alpha</strong></td>
<td>No</td>
<td>Returns FALSE if the form element contains anything other than alphabetical characters.</td>
<td>&nbsp;</td>
</tr>
<tr class="row-even"><td><strong>alpha_numeric</strong></td>
<td>No</td>
<td>Returns FALSE if the form element contains anything other than alpha-numeric characters.</td>
<td>&nbsp;</td>
</tr>
<tr class="row-odd"><td><strong>alpha_numeric_spaces</strong></td>
<td>No</td>
<td>Returns FALSE if the form element contains anything other than alpha-numeric characters
or spaces.  Should be used after trim to avoid spaces at the beginning or end.</td>
<td>&nbsp;</td>
</tr>
<tr class="row-even"><td><strong>alpha_dash</strong></td>
<td>No</td>
<td>Returns FALSE if the form element contains anything other than alpha-numeric characters,
underscores or dashes.</td>
<td>&nbsp;</td>
</tr>
<tr class="row-odd"><td><strong>numeric</strong></td>
<td>No</td>
<td>Returns FALSE if the form element contains anything other than numeric characters.</td>
<td>&nbsp;</td>
</tr>
<tr class="row-even"><td><strong>integer</strong></td>
<td>No</td>
<td>Returns FALSE if the form element contains anything other than an integer.</td>
<td>&nbsp;</td>
</tr>
<tr class="row-odd"><td><strong>decimal</strong></td>
<td>No</td>
<td>Returns FALSE if the form element contains anything other than a decimal number.</td>
<td>&nbsp;</td>
</tr>
<tr class="row-even"><td><strong>is_natural</strong></td>
<td>No</td>
<td>Returns FALSE if the form element contains anything other than a natural number:
0, 1, 2, 3, etc.</td>
<td>&nbsp;</td>
</tr>
<tr class="row-odd"><td><strong>is_natural_no_zero</strong></td>
<td>No</td>
<td>Returns FALSE if the form element contains anything other than a natural
number, but not zero: 1, 2, 3, etc.</td>
<td>&nbsp;</td>
</tr>
<tr class="row-even"><td><strong>valid_url</strong></td>
<td>No</td>
<td>Returns FALSE if the form element does not contain a valid URL.</td>
<td>&nbsp;</td>
</tr>
<tr class="row-odd"><td><strong>valid_email</strong></td>
<td>No</td>
<td>Returns FALSE if the form element does not contain a valid email address.</td>
<td>&nbsp;</td>
</tr>
<tr class="row-even"><td><strong>valid_emails</strong></td>
<td>No</td>
<td>Returns FALSE if any value provided in a comma separated list is not a valid email.</td>
<td>&nbsp;</td>
</tr>
<tr class="row-odd"><td><strong>valid_ip</strong></td>
<td>No</td>
<td>Returns FALSE if the supplied IP is not valid.
Accepts an optional parameter of &#8216;ipv4&#8217; or &#8216;ipv6&#8217; to specify an IP format.</td>
<td>&nbsp;</td>
</tr>
<tr class="row-even"><td><strong>valid_base64</strong></td>
<td>No</td>
<td>Returns FALSE if the supplied string contains anything other than valid Base64 characters.</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
<div class="admonition note">
<p class="first admonition-title">Note</p>
<p>These rules can also be called as discrete methods. For
example:</p>
<div class="last highlight-ci"><div class="highlight"><pre><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">form_validation</span><span class="o">-&gt;</span><span class="na">required</span><span class="p">(</span><span class="nv">$string</span><span class="p">);</span>
</pre></div>
</div>
</div>
<div class="admonition note">
<p class="first admonition-title">Note</p>
<p class="last">You can also use any native PHP functions that permit up
to two parameters, where at least one is required (to pass
the field data).</p>
</div>
</div>
<div class="section" id="prepping-reference">
<h2><a class="toc-backref" href="#id33">Prepping Reference</a><a class="headerlink" href="#prepping-reference" title="Permalink to this headline">¶</a></h2>
<p>The following is a list of all the prepping methods that are available
to use:</p>
<table border="1" class="docutils">
<colgroup>
<col width="15%" />
<col width="7%" />
<col width="78%" />
</colgroup>
<thead valign="bottom">
<tr class="row-odd"><th class="head">Name</th>
<th class="head">Parameter</th>
<th class="head">Description</th>
</tr>
</thead>
<tbody valign="top">
<tr class="row-even"><td><strong>prep_for_form</strong></td>
<td>No</td>
<td>Converts special characters so that HTML data can be shown in a form field without breaking it.</td>
</tr>
<tr class="row-odd"><td><strong>prep_url</strong></td>
<td>No</td>
<td>Adds &#8220;http://&#8221; to URLs if missing.</td>
</tr>
<tr class="row-even"><td><strong>strip_image_tags</strong></td>
<td>No</td>
<td>Strips the HTML from image tags leaving the raw URL.</td>
</tr>
<tr class="row-odd"><td><strong>encode_php_tags</strong></td>
<td>No</td>
<td>Converts PHP tags to entities.</td>
</tr>
</tbody>
</table>
<div class="admonition note">
<p class="first admonition-title">Note</p>
<p class="last">You can also use any native PHP functions that permits one
parameter, like <tt class="docutils literal"><span class="pre">trim()</span></tt>, <tt class="docutils literal"><span class="pre">htmlspecialchars()</span></tt>, <tt class="docutils literal"><span class="pre">urldecode()</span></tt>,
etc.</p>
</div>
</div>
<div class="section" id="class-reference">
<span id="id5"></span><h2><a class="toc-backref" href="#id34">Class Reference</a><a class="headerlink" href="#class-reference" title="Permalink to this headline">¶</a></h2>
<dl class="class">
<dt id="CI_Form_validation">
<em class="property">class </em><tt class="descname">CI_Form_validation</tt><a class="headerlink" href="#CI_Form_validation" title="Permalink to this definition">¶</a></dt>
<dd><dl class="method">
<dt id="CI_Form_validation::set_rules">
<tt class="descname">set_rules</tt><big>(</big><em>$field</em><span class="optional">[</span>, <em>$label = ''</em><span class="optional">[</span>, <em>$rules = ''</em><span class="optional">]</span><span class="optional">]</span><big>)</big><a class="headerlink" href="#CI_Form_validation::set_rules" title="Permalink to this definition">¶</a></dt>
<dd><table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Parameters:</th><td class="field-body"><ul class="first simple">
<li><strong>$field</strong> (<em>string</em>) &#8211; Field name</li>
<li><strong>$label</strong> (<em>string</em>) &#8211; Field label</li>
<li><strong>$rules</strong> (<em>mixed</em>) &#8211; Validation rules, as a string list separated by a pipe &#8220;|&#8221;, or as an array or rules</li>
</ul>
</td>
</tr>
<tr class="field-even field"><th class="field-name">Returns:</th><td class="field-body"><p class="first">CI_Form_validation instance (method chaining)</p>
</td>
</tr>
<tr class="field-odd field"><th class="field-name">Return type:</th><td class="field-body"><p class="first last">CI_Form_validation</p>
</td>
</tr>
</tbody>
</table>
<p>Permits you to set validation rules, as described in the tutorial
sections above:</p>
<ul class="simple">
<li><a class="reference internal" href="#setting-validation-rules"><em>Setting Validation Rules</em></a></li>
<li><a class="reference internal" href="#saving-groups"><em>Saving Sets of Validation Rules to a Config File</em></a></li>
</ul>
</dd></dl>

<dl class="method">
<dt id="CI_Form_validation::run">
<tt class="descname">run</tt><big>(</big><span class="optional">[</span><em>$group = ''</em><span class="optional">]</span><big>)</big><a class="headerlink" href="#CI_Form_validation::run" title="Permalink to this definition">¶</a></dt>
<dd><table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Parameters:</th><td class="field-body"><ul class="first simple">
<li><strong>$group</strong> (<em>string</em>) &#8211; The name of the validation group to run</li>
</ul>
</td>
</tr>
<tr class="field-even field"><th class="field-name">Returns:</th><td class="field-body"><p class="first">TRUE on success, FALSE if validation failed</p>
</td>
</tr>
<tr class="field-odd field"><th class="field-name">Return type:</th><td class="field-body"><p class="first last">bool</p>
</td>
</tr>
</tbody>
</table>
<p>Runs the validation routines. Returns boolean TRUE on success and FALSE
on failure. You can optionally pass the name of the validation group via
the method, as described in: <a class="reference internal" href="#saving-groups"><em>Saving Sets of Validation Rules to a Config File</em></a></p>
</dd></dl>

<dl class="method">
<dt id="CI_Form_validation::set_message">
<tt class="descname">set_message</tt><big>(</big><em>$lang</em><span class="optional">[</span>, <em>$val = ''</em><span class="optional">]</span><big>)</big><a class="headerlink" href="#CI_Form_validation::set_message" title="Permalink to this definition">¶</a></dt>
<dd><table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Parameters:</th><td class="field-body"><ul class="first simple">
<li><strong>$lang</strong> (<em>string</em>) &#8211; The rule the message is for</li>
<li><strong>$val</strong> (<em>string</em>) &#8211; The message</li>
</ul>
</td>
</tr>
<tr class="field-even field"><th class="field-name">Returns:</th><td class="field-body"><p class="first">CI_Form_validation instance (method chaining)</p>
</td>
</tr>
<tr class="field-odd field"><th class="field-name">Return type:</th><td class="field-body"><p class="first last">CI_Form_validation</p>
</td>
</tr>
</tbody>
</table>
<p>Permits you to set custom error messages. See <a class="reference internal" href="#setting-error-messages"><em>Setting Error Messages</em></a></p>
</dd></dl>

<dl class="method">
<dt id="CI_Form_validation::set_error_delimiters">
<tt class="descname">set_error_delimiters</tt><big>(</big><span class="optional">[</span><em>$prefix = '&lt;p&gt;'</em><span class="optional">[</span>, <em>$suffix = '&lt;/p&gt;'</em><span class="optional">]</span><span class="optional">]</span><big>)</big><a class="headerlink" href="#CI_Form_validation::set_error_delimiters" title="Permalink to this definition">¶</a></dt>
<dd><table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Parameters:</th><td class="field-body"><ul class="first simple">
<li><strong>$prefix</strong> (<em>string</em>) &#8211; Error message prefix</li>
<li><strong>$suffix</strong> (<em>string</em>) &#8211; Error message suffix</li>
</ul>
</td>
</tr>
<tr class="field-even field"><th class="field-name">Returns:</th><td class="field-body"><p class="first">CI_Form_validation instance (method chaining)</p>
</td>
</tr>
<tr class="field-odd field"><th class="field-name">Return type:</th><td class="field-body"><p class="first last">CI_Form_validation</p>
</td>
</tr>
</tbody>
</table>
<p>Sets the default prefix and suffix for error messages.</p>
</dd></dl>

<dl class="method">
<dt id="CI_Form_validation::set_data">
<tt class="descname">set_data</tt><big>(</big><em>$data</em><big>)</big><a class="headerlink" href="#CI_Form_validation::set_data" title="Permalink to this definition">¶</a></dt>
<dd><table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Parameters:</th><td class="field-body"><ul class="first simple">
<li><strong>$data</strong> (<em>array</em>) &#8211; Array of data validate</li>
</ul>
</td>
</tr>
<tr class="field-even field"><th class="field-name">Returns:</th><td class="field-body"><p class="first">CI_Form_validation instance (method chaining)</p>
</td>
</tr>
<tr class="field-odd field"><th class="field-name">Return type:</th><td class="field-body"><p class="first last">CI_Form_validation</p>
</td>
</tr>
</tbody>
</table>
<p>Permits you to set an array for validation, instead of using the default
<tt class="docutils literal"><span class="pre">$_POST</span></tt> array.</p>
</dd></dl>

<dl class="method">
<dt id="CI_Form_validation::reset_validation">
<tt class="descname">reset_validation</tt><big>(</big><big>)</big><a class="headerlink" href="#CI_Form_validation::reset_validation" title="Permalink to this definition">¶</a></dt>
<dd><table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Returns:</th><td class="field-body">CI_Form_validation instance (method chaining)</td>
</tr>
<tr class="field-even field"><th class="field-name">Return type:</th><td class="field-body">CI_Form_validation</td>
</tr>
</tbody>
</table>
<p>Permits you to reset the validation when you validate more than one array.
This method should be called before validating each new array.</p>
</dd></dl>

<dl class="method">
<dt id="CI_Form_validation::error_array">
<tt class="descname">error_array</tt><big>(</big><big>)</big><a class="headerlink" href="#CI_Form_validation::error_array" title="Permalink to this definition">¶</a></dt>
<dd><table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Returns:</th><td class="field-body">Array of error messages</td>
</tr>
<tr class="field-even field"><th class="field-name">Return type:</th><td class="field-body">array</td>
</tr>
</tbody>
</table>
<p>Returns the error messages as an array.</p>
</dd></dl>

<dl class="method">
<dt id="CI_Form_validation::error_string">
<tt class="descname">error_string</tt><big>(</big><span class="optional">[</span><em>$prefix = ''</em><span class="optional">[</span>, <em>$suffix = ''</em><span class="optional">]</span><span class="optional">]</span><big>)</big><a class="headerlink" href="#CI_Form_validation::error_string" title="Permalink to this definition">¶</a></dt>
<dd><table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Parameters:</th><td class="field-body"><ul class="first simple">
<li><strong>$prefix</strong> (<em>string</em>) &#8211; Error message prefix</li>
<li><strong>$suffix</strong> (<em>string</em>) &#8211; Error message suffix</li>
</ul>
</td>
</tr>
<tr class="field-even field"><th class="field-name">Returns:</th><td class="field-body"><p class="first">Error messages as a string</p>
</td>
</tr>
<tr class="field-odd field"><th class="field-name">Return type:</th><td class="field-body"><p class="first last">string</p>
</td>
</tr>
</tbody>
</table>
<p>Returns all error messages (as returned from error_array()) formatted as a
string and separated by a newline character.</p>
</dd></dl>

<dl class="method">
<dt id="CI_Form_validation::error">
<tt class="descname">error</tt><big>(</big><em>$field</em><span class="optional">[</span>, <em>$prefix = ''</em><span class="optional">[</span>, <em>$suffix = ''</em><span class="optional">]</span><span class="optional">]</span><big>)</big><a class="headerlink" href="#CI_Form_validation::error" title="Permalink to this definition">¶</a></dt>
<dd><table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Parameters:</th><td class="field-body"><ul class="first simple">
<li><strong>$field</strong> (<em>string</em>) &#8211; Field name</li>
<li><strong>$prefix</strong> (<em>string</em>) &#8211; Optional prefix</li>
<li><strong>$suffix</strong> (<em>string</em>) &#8211; Optional suffix</li>
</ul>
</td>
</tr>
<tr class="field-even field"><th class="field-name">Returns:</th><td class="field-body"><p class="first">Error message string</p>
</td>
</tr>
<tr class="field-odd field"><th class="field-name">Return type:</th><td class="field-body"><p class="first last">string</p>
</td>
</tr>
</tbody>
</table>
<p>Returns the error message for a specific field, optionally adding a
prefix and/or suffix to it (usually HTML tags).</p>
</dd></dl>

<dl class="method">
<dt id="CI_Form_validation::has_rule">
<tt class="descname">has_rule</tt><big>(</big><em>$field</em><big>)</big><a class="headerlink" href="#CI_Form_validation::has_rule" title="Permalink to this definition">¶</a></dt>
<dd><table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Parameters:</th><td class="field-body"><ul class="first simple">
<li><strong>$field</strong> (<em>string</em>) &#8211; Field name</li>
</ul>
</td>
</tr>
<tr class="field-even field"><th class="field-name">Returns:</th><td class="field-body"><p class="first">TRUE if the field has rules set, FALSE if not</p>
</td>
</tr>
<tr class="field-odd field"><th class="field-name">Return type:</th><td class="field-body"><p class="first last">bool</p>
</td>
</tr>
</tbody>
</table>
<p>Checks to see if there is a rule set for the specified field.</p>
</dd></dl>

</dd></dl>

</div>
<div class="section" id="helper-reference">
<span id="helper-functions"></span><h2><a class="toc-backref" href="#id35">Helper Reference</a><a class="headerlink" href="#helper-reference" title="Permalink to this headline">¶</a></h2>
<p>Please refer to the <a class="reference internal" href="../helpers/form_helper.html"><em>Form Helper</em></a> manual for
the following functions:</p>
<ul class="simple">
<li><a class="reference internal" href="../helpers/form_helper.html#form_error" title="form_error"><tt class="xref php php-func docutils literal"><span class="pre">form_error()</span></tt></a></li>
<li><a class="reference internal" href="../helpers/form_helper.html#validation_errors" title="validation_errors"><tt class="xref php php-func docutils literal"><span class="pre">validation_errors()</span></tt></a></li>
<li><a class="reference internal" href="../helpers/form_helper.html#set_value" title="set_value"><tt class="xref php php-func docutils literal"><span class="pre">set_value()</span></tt></a></li>
<li><a class="reference internal" href="../helpers/form_helper.html#set_select" title="set_select"><tt class="xref php php-func docutils literal"><span class="pre">set_select()</span></tt></a></li>
<li><a class="reference internal" href="../helpers/form_helper.html#set_checkbox" title="set_checkbox"><tt class="xref php php-func docutils literal"><span class="pre">set_checkbox()</span></tt></a></li>
<li><a class="reference internal" href="../helpers/form_helper.html#set_radio" title="set_radio"><tt class="xref php php-func docutils literal"><span class="pre">set_radio()</span></tt></a></li>
</ul>
<p>Note that these are procedural functions, so they <strong>do not</strong> require you
to prepend them with <tt class="docutils literal"><span class="pre">$this-&gt;form_validation</span></tt>.</p>
</div>
</div>


          </div>
          <footer>
  
    <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
      
        <a href="ftp.html" class="btn btn-neutral float-right" title="FTP Class">Next <span class="fa fa-arrow-circle-right"></span></a>
      
      
        <a href="file_uploading.html" class="btn btn-neutral" title="File Uploading Class"><span class="fa fa-arrow-circle-left"></span> Previous</a>
      
    </div>
  

  <hr/>

  <div role="contentinfo">
    <p>
        &copy; Copyright 2014 - 2015, British Columbia Institute of Technology.
      Last updated on Oct 31, 2015.
    </p>
  </div>

  Built with <a href="http://sphinx-doc.org/">Sphinx</a> using a <a href="https://github.com/snide/sphinx_rtd_theme">theme</a> provided by <a href="https://readthedocs.org">Read the Docs</a>.
  
</footer>
        </div>
      </div>

    </section>

  </div>
  


  

    <script type="text/javascript">
        var DOCUMENTATION_OPTIONS = {
            URL_ROOT:'../',
            VERSION:'3.0.3',
            COLLAPSE_INDEX:false,
            FILE_SUFFIX:'.html',
            HAS_SOURCE:  false
        };
    </script>
      <script type="text/javascript" src="../_static/jquery.js"></script>
      <script type="text/javascript" src="../_static/underscore.js"></script>
      <script type="text/javascript" src="../_static/doctools.js"></script>

  

  
  
    <script type="text/javascript" src="../_static/js/theme.js"></script>
  

  
  
  <script type="text/javascript">
      jQuery(function () {
          SphinxRtdTheme.StickyNav.enable();
      });
  </script>
   

</body>
</html>