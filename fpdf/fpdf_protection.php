



<!DOCTYPE html>
<html lang="en" class="">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    
    
    <title>fpdf/fpdf_protection.php at master · lsolesen/fpdf · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png">
    <meta property="fb:app_id" content="1401488693436528">

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="lsolesen/fpdf" name="twitter:title" /><meta content="fpdf - [Unofficial] FPDF Library. Pdf Generator." name="twitter:description" /><meta content="https://avatars2.githubusercontent.com/u/148026?v=3&amp;s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars2.githubusercontent.com/u/148026?v=3&amp;s=400" property="og:image" /><meta content="lsolesen/fpdf" property="og:title" /><meta content="https://github.com/lsolesen/fpdf" property="og:url" /><meta content="fpdf - [Unofficial] FPDF Library. Pdf Generator." property="og:description" />

      <meta name="browser-stats-url" content="/_stats">
    <link rel="assets" href="https://assets-cdn.github.com/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035">
    
    <meta name="pjax-timeout" content="1000">
    

    <meta name="msapplication-TileImage" content="/windows-tile.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="selected-link" value="repo_source" data-pjax-transient>
      <meta name="google-analytics" content="UA-3769691-2">

    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="4DC69110:2BF0:B9F16F:54C8AA9A" name="octolytics-dimension-request_id" />
    
    <meta content="Rails, view, blob#show" name="analytics-event" />

    
    
    <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">


    <meta content="authenticity_token" name="csrf-param" />
<meta content="mk2pzfEBYA7MIZvo1qE9r3k233sMpJo+STVr/jNVqE8Txfy59BbmJNmoVXY03qBtq2xivI/dzM0wHRG4JFJ7yQ==" name="csrf-token" />

    <link href="https://assets-cdn.github.com/assets/github-f19e43be00c28904df28a1fd1fa3c117e5d2358dd3cf0f4216536f8737c2e033.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://assets-cdn.github.com/assets/github2-29c7da379589a0dc8a4aeee9d661ddbbc6726ded580d170ced239d72d1137908.css" media="all" rel="stylesheet" type="text/css" />
    
    


    <meta http-equiv="x-pjax-version" content="52aee216f294b9c9a6a8b25f193226a4">

      
  <meta name="description" content="fpdf - [Unofficial] FPDF Library. Pdf Generator.">
  <meta name="go-import" content="github.com/lsolesen/fpdf git https://github.com/lsolesen/fpdf.git">

  <meta content="148026" name="octolytics-dimension-user_id" /><meta content="lsolesen" name="octolytics-dimension-user_login" /><meta content="553749" name="octolytics-dimension-repository_id" /><meta content="lsolesen/fpdf" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="553749" name="octolytics-dimension-repository_network_root_id" /><meta content="lsolesen/fpdf" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/lsolesen/fpdf/commits/master.atom" rel="alternate" title="Recent Commits to fpdf:master" type="application/atom+xml">

  </head>


  <body class="logged_out  env-production windows vis-public page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      
      


      
      <div class="header header-logged-out" role="banner">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/" ga-data-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions" role="navigation">
        <a class="button primary" href="/join" data-ga-click="(Logged out) Header, clicked Sign up, text:sign-up">Sign up</a>
      <a class="button" href="/login?return_to=%2Flsolesen%2Ffpdf%2Fblob%2Fmaster%2Fexamples%2Fprotection%2Ffpdf_protection.php" data-ga-click="(Logged out) Header, clicked Sign in, text:sign-in">Sign in</a>
    </div>

    <div class="site-search repo-scope js-site-search" role="search">
      <form accept-charset="UTF-8" action="/lsolesen/fpdf/search" class="js-site-search-form" data-global-search-url="/search" data-repo-search-url="/lsolesen/fpdf/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
  <input type="text"
    class="js-site-search-field is-clearable"
    data-hotkey="s"
    name="q"
    placeholder="Search"
    data-global-scope-placeholder="Search GitHub"
    data-repo-scope-placeholder="Search"
    tabindex="1"
    autocapitalize="off">
  <div class="scope-badge">This repository</div>
</form>
    </div>

      <ul class="header-nav left" role="navigation">
          <li class="header-nav-item">
            <a class="header-nav-link" href="/explore" data-ga-click="(Logged out) Header, go to explore, text:explore">Explore</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/features" data-ga-click="(Logged out) Header, go to features, text:features">Features</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="https://enterprise.github.com/" data-ga-click="(Logged out) Header, go to enterprise, text:enterprise">Enterprise</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/blog" data-ga-click="(Logged out) Header, go to blog, text:blog">Blog</a>
          </li>
      </ul>

  </div>
</div>



      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    <div id="js-flash-container">
      
    </div>
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        
<ul class="pagehead-actions">


  <li>
      <a href="/login?return_to=%2Flsolesen%2Ffpdf"
    class="minibutton with-count star-button tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <span class="octicon octicon-star"></span>
    Star
  </a>

    <a class="social-count js-social-count" href="/lsolesen/fpdf/stargazers">
      46
    </a>

  </li>

    <li>
      <a href="/login?return_to=%2Flsolesen%2Ffpdf"
        class="minibutton with-count js-toggler-target fork-button tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-repo-forked"></span>
        Fork
      </a>
      <a href="/lsolesen/fpdf/network" class="social-count">
        36
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="mega-octicon octicon-repo"></span>
          <span class="author"><a href="/lsolesen" class="url fn" itemprop="url" rel="author"><span itemprop="title">lsolesen</span></a></span><!--
       --><span class="path-divider">/</span><!--
       --><strong><a href="/lsolesen/fpdf" class="js-current-repository" data-pjax="#js-repo-pjax-container">fpdf</a></strong>

          <span class="page-context-loader">
            <img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            
<nav class="sunken-menu repo-nav js-repo-nav js-sidenav-container-pjax js-octicon-loaders"
     role="navigation"
     data-pjax="#js-repo-pjax-container"
     data-issue-count-url="/lsolesen/fpdf/issues/counts">
  <ul class="sunken-menu-group">
    <li class="tooltipped tooltipped-w" aria-label="Code">
      <a href="/lsolesen/fpdf" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-hotkey="g c" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /lsolesen/fpdf">
        <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>    </li>

      <li class="tooltipped tooltipped-w" aria-label="Issues">
        <a href="/lsolesen/fpdf/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item" data-hotkey="g i" data-selected-links="repo_issues repo_labels repo_milestones /lsolesen/fpdf/issues">
          <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
          <span class="js-issue-replace-counter"></span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

    <li class="tooltipped tooltipped-w" aria-label="Pull Requests">
      <a href="/lsolesen/fpdf/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item" data-hotkey="g p" data-selected-links="repo_pulls /lsolesen/fpdf/pulls">
          <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
          <span class="js-pull-replace-counter"></span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>    </li>


  </ul>
  <div class="sunken-menu-separator"></div>
  <ul class="sunken-menu-group">

    <li class="tooltipped tooltipped-w" aria-label="Pulse">
      <a href="/lsolesen/fpdf/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-selected-links="pulse /lsolesen/fpdf/pulse">
        <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>    </li>

    <li class="tooltipped tooltipped-w" aria-label="Graphs">
      <a href="/lsolesen/fpdf/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-selected-links="repo_graphs repo_contributors /lsolesen/fpdf/graphs">
        <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>    </li>
  </ul>


</nav>

              <div class="only-with-full-nav">
                
  
<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><span class="text-emphasized">HTTPS</span> clone URL</h3>
  <div class="input-group js-zeroclipboard-container">
    <input type="text" class="input-mini input-monospace js-url-field js-zeroclipboard-target"
           value="https://github.com/lsolesen/fpdf.git" readonly="readonly">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  
<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><span class="text-emphasized">Subversion</span> checkout URL</h3>
  <div class="input-group js-zeroclipboard-container">
    <input type="text" class="input-mini input-monospace js-url-field js-zeroclipboard-target"
           value="https://github.com/lsolesen/fpdf" readonly="readonly">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>



<p class="clone-options">You can clone with
  <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a> or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <a href="https://help.github.com/articles/which-remote-url-should-i-use" class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <span class="octicon octicon-question"></span>
  </a>
</p>


  <a href="http://windows.github.com" class="minibutton sidebar-button" title="Save lsolesen/fpdf to your computer and use it in GitHub Desktop." aria-label="Save lsolesen/fpdf to your computer and use it in GitHub Desktop.">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>

                <a href="/lsolesen/fpdf/archive/master.zip"
                   class="minibutton sidebar-button"
                   aria-label="Download the contents of lsolesen/fpdf as a zip file"
                   title="Download the contents of lsolesen/fpdf as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          

<a href="/lsolesen/fpdf/blob/f321be9320d7a4a67c9b27a5e1ad576d75af3714/examples/protection/fpdf_protection.php" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:8c404e35e89c44f9740eb7f0774d1cda -->

<div class="file-navigation js-zeroclipboard-container">
  
<div class="select-menu js-menu-container js-select-menu left">
  <span class="minibutton select-menu-button js-menu-target css-truncate" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    title="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button css-truncate-target">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-x js-menu-close" role="button" aria-label="Close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/lsolesen/fpdf/blob/master/examples/protection/fpdf_protection.php"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/lsolesen/fpdf/tree/1.6.0/examples/protection/fpdf_protection.php"
                 data-name="1.6.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="1.6.0">1.6.0</a>
            </div> <!-- /.select-menu-item -->
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="button-group right">
    <a href="/lsolesen/fpdf/find/master"
          class="js-show-file-finder minibutton empty-icon tooltipped tooltipped-s"
          data-pjax
          data-hotkey="t"
          aria-label="Quickly jump between files">
      <span class="octicon octicon-list-unordered"></span>
    </a>
    <button aria-label="Copy file path to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
  </div>

  <div class="breadcrumb js-zeroclipboard-target">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/lsolesen/fpdf" class="" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">fpdf</span></a></span></span><span class="separator">/</span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/lsolesen/fpdf/tree/master/examples" class="" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">examples</span></a></span><span class="separator">/</span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/lsolesen/fpdf/tree/master/examples/protection" class="" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">protection</span></a></span><span class="separator">/</span><strong class="final-path">fpdf_protection.php</strong>
  </div>
</div>


  <div class="commit file-history-tease">
    <div class="file-history-tease-header">
        <img alt="Lars Olesen" class="avatar" data-user="148026" height="24" src="https://avatars2.githubusercontent.com/u/148026?v=3&amp;s=48" width="24" />
        <span class="author"><a href="/lsolesen" rel="author">lsolesen</a></span>
        <time datetime="2010-05-20T07:23:14Z" is="relative-time">May 20, 2010</time>
        <div class="commit-title">
            <a href="/lsolesen/fpdf/commit/e9b8569819ff45906d9b87b7edae65b37fead118" class="message" data-pjax="true" title="Changed link for the stylesheet">Changed link for the stylesheet</a>
        </div>
    </div>

    <div class="participation">
      <p class="quickstat">
        <a href="#blob_contributors_box" rel="facebox">
          <strong>1</strong>
           contributor
        </a>
      </p>
      
    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
          <li class="facebox-user-list-item">
            <img alt="Lars Olesen" data-user="148026" height="24" src="https://avatars2.githubusercontent.com/u/148026?v=3&amp;s=48" width="24" />
            <a href="/lsolesen">lsolesen</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta clearfix">
      <div class="info file-name">
          <span class="mode" title="File mode">executable file</span>
          <span class="meta-divider"></span>
          <span>207 lines (188 sloc)</span>
          <span class="meta-divider"></span>
        <span>5.906 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
          <a href="/lsolesen/fpdf/raw/master/examples/protection/fpdf_protection.php" class="minibutton " id="raw-url">Raw</a>
            <a href="/lsolesen/fpdf/blame/master/examples/protection/fpdf_protection.php" class="minibutton js-update-url-with-hash">Blame</a>
          <a href="/lsolesen/fpdf/commits/master/examples/protection/fpdf_protection.php" class="minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->

          <a class="octicon-button tooltipped tooltipped-nw"
             href="http://windows.github.com" aria-label="Open this file in GitHub for Windows">
              <span class="octicon octicon-device-desktop"></span>
          </a>

            <a class="octicon-button disabled tooltipped tooltipped-w" href="#"
               aria-label="You must be signed in to make or propose changes"><span class="octicon octicon-pencil"></span></a>

          <a class="octicon-button danger disabled tooltipped tooltipped-w" href="#"
             aria-label="You must be signed in to make or propose changes">
          <span class="octicon octicon-trashcan"></span>
        </a>
      </div><!-- /.actions -->
    </div>
    

  <div class="blob-wrapper data type-php">
      <table class="highlight tab-size-8 js-file-line-container">
      <tr>
        <td id="L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="LC1" class="blob-code js-file-line"><span class="pl-pse">&lt;?php</span><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="LC2" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">/****************************************************************************</span></span></td>
      </tr>
      <tr>
        <td id="L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="LC3" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">* Software: FPDF_Protection                                                 *</span></span></td>
      </tr>
      <tr>
        <td id="L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="LC4" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">* Version:  1.03                                                            *</span></span></td>
      </tr>
      <tr>
        <td id="L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="LC5" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">* Date:     2009-11-29                                                      *</span></span></td>
      </tr>
      <tr>
        <td id="L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="LC6" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">* Author:   Klemen VODOPIVEC                                                *</span></span></td>
      </tr>
      <tr>
        <td id="L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="LC7" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">* License:  FPDF                                                            *</span></span></td>
      </tr>
      <tr>
        <td id="L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="LC8" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">*                                                                           *</span></span></td>
      </tr>
      <tr>
        <td id="L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="LC9" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">* Thanks:  Cpdf (http://www.ros.co.nz/pdf) was my working sample of how to  *</span></span></td>
      </tr>
      <tr>
        <td id="L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="LC10" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">*          implement protection in pdf.                                     *</span></span></td>
      </tr>
      <tr>
        <td id="L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="LC11" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">****************************************************************************/</span></span></td>
      </tr>
      <tr>
        <td id="L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="LC12" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L13" class="blob-num js-line-number" data-line-number="13"></td>
        <td id="LC13" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-k">require</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>../../src/fpdf.php<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L14" class="blob-num js-line-number" data-line-number="14"></td>
        <td id="LC14" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L15" class="blob-num js-line-number" data-line-number="15"></td>
        <td id="LC15" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-k">if</span>(<span class="pl-s3">function_exists</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>mcrypt_encrypt<span class="pl-pds">&#39;</span></span>))</span></td>
      </tr>
      <tr>
        <td id="L16" class="blob-num js-line-number" data-line-number="16"></td>
        <td id="LC16" class="blob-code js-file-line"><span class="pl-s2">{</span></td>
      </tr>
      <tr>
        <td id="L17" class="blob-num js-line-number" data-line-number="17"></td>
        <td id="LC17" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-st">function</span> <span class="pl-en">RC4</span>(<span class="pl-vo">$key</span>, <span class="pl-vo">$data</span>)</span></td>
      </tr>
      <tr>
        <td id="L18" class="blob-num js-line-number" data-line-number="18"></td>
        <td id="LC18" class="blob-code js-file-line"><span class="pl-s2">	{</span></td>
      </tr>
      <tr>
        <td id="L19" class="blob-num js-line-number" data-line-number="19"></td>
        <td id="LC19" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-k">return</span> <span class="pl-s3">mcrypt_encrypt</span>(<span class="pl-sc">MCRYPT_ARCFOUR</span>, <span class="pl-vo">$key</span>, <span class="pl-vo">$data</span>, <span class="pl-sc">MCRYPT_MODE_STREAM</span>, <span class="pl-s1"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L20" class="blob-num js-line-number" data-line-number="20"></td>
        <td id="LC20" class="blob-code js-file-line"><span class="pl-s2">	}</span></td>
      </tr>
      <tr>
        <td id="L21" class="blob-num js-line-number" data-line-number="21"></td>
        <td id="LC21" class="blob-code js-file-line"><span class="pl-s2">}</span></td>
      </tr>
      <tr>
        <td id="L22" class="blob-num js-line-number" data-line-number="22"></td>
        <td id="LC22" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-k">else</span></span></td>
      </tr>
      <tr>
        <td id="L23" class="blob-num js-line-number" data-line-number="23"></td>
        <td id="LC23" class="blob-code js-file-line"><span class="pl-s2">{</span></td>
      </tr>
      <tr>
        <td id="L24" class="blob-num js-line-number" data-line-number="24"></td>
        <td id="LC24" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-st">function</span> <span class="pl-en">RC4</span>(<span class="pl-vo">$key</span>, <span class="pl-vo">$data</span>)</span></td>
      </tr>
      <tr>
        <td id="L25" class="blob-num js-line-number" data-line-number="25"></td>
        <td id="LC25" class="blob-code js-file-line"><span class="pl-s2">	{</span></td>
      </tr>
      <tr>
        <td id="L26" class="blob-num js-line-number" data-line-number="26"></td>
        <td id="LC26" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-s">static</span> <span class="pl-vo">$last_key</span>, <span class="pl-vo">$last_state</span>;</span></td>
      </tr>
      <tr>
        <td id="L27" class="blob-num js-line-number" data-line-number="27"></td>
        <td id="LC27" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L28" class="blob-num js-line-number" data-line-number="28"></td>
        <td id="LC28" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-k">if</span>(<span class="pl-vo">$key</span> <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-vo">$last_key</span>)</span></td>
      </tr>
      <tr>
        <td id="L29" class="blob-num js-line-number" data-line-number="29"></td>
        <td id="LC29" class="blob-code js-file-line"><span class="pl-s2">		{</span></td>
      </tr>
      <tr>
        <td id="L30" class="blob-num js-line-number" data-line-number="30"></td>
        <td id="LC30" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$k</span> <span class="pl-k">=</span> <span class="pl-s3">str_repeat</span>(<span class="pl-vo">$key</span>, <span class="pl-c1">256</span><span class="pl-k">/</span><span class="pl-s3">strlen</span>(<span class="pl-vo">$key</span>)<span class="pl-k">+</span><span class="pl-c1">1</span>);</span></td>
      </tr>
      <tr>
        <td id="L31" class="blob-num js-line-number" data-line-number="31"></td>
        <td id="LC31" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$state</span> <span class="pl-k">=</span> <span class="pl-s3">range</span>(<span class="pl-c1">0</span>, <span class="pl-c1">255</span>);</span></td>
      </tr>
      <tr>
        <td id="L32" class="blob-num js-line-number" data-line-number="32"></td>
        <td id="LC32" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$j</span> <span class="pl-k">=</span> <span class="pl-c1">0</span>;</span></td>
      </tr>
      <tr>
        <td id="L33" class="blob-num js-line-number" data-line-number="33"></td>
        <td id="LC33" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-k">for</span> (<span class="pl-vo">$i</span><span class="pl-k">=</span><span class="pl-c1">0</span>; <span class="pl-vo">$i</span><span class="pl-k">&lt;</span><span class="pl-c1">256</span>; <span class="pl-vo">$i</span><span class="pl-k">++</span>){</span></td>
      </tr>
      <tr>
        <td id="L34" class="blob-num js-line-number" data-line-number="34"></td>
        <td id="LC34" class="blob-code js-file-line"><span class="pl-s2">				<span class="pl-vo">$t</span> <span class="pl-k">=</span> <span class="pl-vo">$state</span>[<span class="pl-vo">$i</span>];</span></td>
      </tr>
      <tr>
        <td id="L35" class="blob-num js-line-number" data-line-number="35"></td>
        <td id="LC35" class="blob-code js-file-line"><span class="pl-s2">				<span class="pl-vo">$j</span> <span class="pl-k">=</span> (<span class="pl-vo">$j</span> <span class="pl-k">+</span> <span class="pl-vo">$t</span> <span class="pl-k">+</span> <span class="pl-s3">ord</span>(<span class="pl-vo">$k</span>[<span class="pl-vo">$i</span>])) <span class="pl-k">%</span> <span class="pl-c1">256</span>;</span></td>
      </tr>
      <tr>
        <td id="L36" class="blob-num js-line-number" data-line-number="36"></td>
        <td id="LC36" class="blob-code js-file-line"><span class="pl-s2">				<span class="pl-vo">$state</span>[<span class="pl-vo">$i</span>] <span class="pl-k">=</span> <span class="pl-vo">$state</span>[<span class="pl-vo">$j</span>];</span></td>
      </tr>
      <tr>
        <td id="L37" class="blob-num js-line-number" data-line-number="37"></td>
        <td id="LC37" class="blob-code js-file-line"><span class="pl-s2">				<span class="pl-vo">$state</span>[<span class="pl-vo">$j</span>] <span class="pl-k">=</span> <span class="pl-vo">$t</span>;</span></td>
      </tr>
      <tr>
        <td id="L38" class="blob-num js-line-number" data-line-number="38"></td>
        <td id="LC38" class="blob-code js-file-line"><span class="pl-s2">			}</span></td>
      </tr>
      <tr>
        <td id="L39" class="blob-num js-line-number" data-line-number="39"></td>
        <td id="LC39" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$last_key</span> <span class="pl-k">=</span> <span class="pl-vo">$key</span>;</span></td>
      </tr>
      <tr>
        <td id="L40" class="blob-num js-line-number" data-line-number="40"></td>
        <td id="LC40" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$last_state</span> <span class="pl-k">=</span> <span class="pl-vo">$state</span>;</span></td>
      </tr>
      <tr>
        <td id="L41" class="blob-num js-line-number" data-line-number="41"></td>
        <td id="LC41" class="blob-code js-file-line"><span class="pl-s2">		}</span></td>
      </tr>
      <tr>
        <td id="L42" class="blob-num js-line-number" data-line-number="42"></td>
        <td id="LC42" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-k">else</span></span></td>
      </tr>
      <tr>
        <td id="L43" class="blob-num js-line-number" data-line-number="43"></td>
        <td id="LC43" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$state</span> <span class="pl-k">=</span> <span class="pl-vo">$last_state</span>;</span></td>
      </tr>
      <tr>
        <td id="L44" class="blob-num js-line-number" data-line-number="44"></td>
        <td id="LC44" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L45" class="blob-num js-line-number" data-line-number="45"></td>
        <td id="LC45" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$len</span> <span class="pl-k">=</span> <span class="pl-s3">strlen</span>(<span class="pl-vo">$data</span>);</span></td>
      </tr>
      <tr>
        <td id="L46" class="blob-num js-line-number" data-line-number="46"></td>
        <td id="LC46" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$a</span> <span class="pl-k">=</span> <span class="pl-c1">0</span>;</span></td>
      </tr>
      <tr>
        <td id="L47" class="blob-num js-line-number" data-line-number="47"></td>
        <td id="LC47" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$b</span> <span class="pl-k">=</span> <span class="pl-c1">0</span>;</span></td>
      </tr>
      <tr>
        <td id="L48" class="blob-num js-line-number" data-line-number="48"></td>
        <td id="LC48" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$out</span> <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L49" class="blob-num js-line-number" data-line-number="49"></td>
        <td id="LC49" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-k">for</span> (<span class="pl-vo">$i</span><span class="pl-k">=</span><span class="pl-c1">0</span>; <span class="pl-vo">$i</span><span class="pl-k">&lt;</span><span class="pl-vo">$len</span>; <span class="pl-vo">$i</span><span class="pl-k">++</span>){</span></td>
      </tr>
      <tr>
        <td id="L50" class="blob-num js-line-number" data-line-number="50"></td>
        <td id="LC50" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$a</span> <span class="pl-k">=</span> (<span class="pl-vo">$a</span><span class="pl-k">+</span><span class="pl-c1">1</span>) <span class="pl-k">%</span> <span class="pl-c1">256</span>;</span></td>
      </tr>
      <tr>
        <td id="L51" class="blob-num js-line-number" data-line-number="51"></td>
        <td id="LC51" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$t</span> <span class="pl-k">=</span> <span class="pl-vo">$state</span>[<span class="pl-vo">$a</span>];</span></td>
      </tr>
      <tr>
        <td id="L52" class="blob-num js-line-number" data-line-number="52"></td>
        <td id="LC52" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$b</span> <span class="pl-k">=</span> (<span class="pl-vo">$b</span><span class="pl-k">+</span><span class="pl-vo">$t</span>) <span class="pl-k">%</span> <span class="pl-c1">256</span>;</span></td>
      </tr>
      <tr>
        <td id="L53" class="blob-num js-line-number" data-line-number="53"></td>
        <td id="LC53" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$state</span>[<span class="pl-vo">$a</span>] <span class="pl-k">=</span> <span class="pl-vo">$state</span>[<span class="pl-vo">$b</span>];</span></td>
      </tr>
      <tr>
        <td id="L54" class="blob-num js-line-number" data-line-number="54"></td>
        <td id="LC54" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$state</span>[<span class="pl-vo">$b</span>] <span class="pl-k">=</span> <span class="pl-vo">$t</span>;</span></td>
      </tr>
      <tr>
        <td id="L55" class="blob-num js-line-number" data-line-number="55"></td>
        <td id="LC55" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$k</span> <span class="pl-k">=</span> <span class="pl-vo">$state</span>[(<span class="pl-vo">$state</span>[<span class="pl-vo">$a</span>]<span class="pl-k">+</span><span class="pl-vo">$state</span>[<span class="pl-vo">$b</span>]) <span class="pl-k">%</span> <span class="pl-c1">256</span>];</span></td>
      </tr>
      <tr>
        <td id="L56" class="blob-num js-line-number" data-line-number="56"></td>
        <td id="LC56" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$out</span> <span class="pl-k">.=</span> <span class="pl-s3">chr</span>(<span class="pl-s3">ord</span>(<span class="pl-vo">$data</span>[<span class="pl-vo">$i</span>]) <span class="pl-k">^</span> <span class="pl-vo">$k</span>);</span></td>
      </tr>
      <tr>
        <td id="L57" class="blob-num js-line-number" data-line-number="57"></td>
        <td id="LC57" class="blob-code js-file-line"><span class="pl-s2">		}</span></td>
      </tr>
      <tr>
        <td id="L58" class="blob-num js-line-number" data-line-number="58"></td>
        <td id="LC58" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-k">return</span> <span class="pl-vo">$out</span>;</span></td>
      </tr>
      <tr>
        <td id="L59" class="blob-num js-line-number" data-line-number="59"></td>
        <td id="LC59" class="blob-code js-file-line"><span class="pl-s2">	}</span></td>
      </tr>
      <tr>
        <td id="L60" class="blob-num js-line-number" data-line-number="60"></td>
        <td id="LC60" class="blob-code js-file-line"><span class="pl-s2">}</span></td>
      </tr>
      <tr>
        <td id="L61" class="blob-num js-line-number" data-line-number="61"></td>
        <td id="LC61" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L62" class="blob-num js-line-number" data-line-number="62"></td>
        <td id="LC62" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-st">class</span> <span class="pl-en">FPDF_Protection</span> <span class="pl-s">extends</span> <span class="pl-e">FPDF</span></span></td>
      </tr>
      <tr>
        <td id="L63" class="blob-num js-line-number" data-line-number="63"></td>
        <td id="LC63" class="blob-code js-file-line"><span class="pl-s2">{</span></td>
      </tr>
      <tr>
        <td id="L64" class="blob-num js-line-number" data-line-number="64"></td>
        <td id="LC64" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-st">var</span> <span class="pl-vo">$encrypted</span> <span class="pl-k">=</span> <span class="pl-c1">false</span>;  <span class="pl-c">//whether document is protected</span></span></td>
      </tr>
      <tr>
        <td id="L65" class="blob-num js-line-number" data-line-number="65"></td>
        <td id="LC65" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-st">var</span> <span class="pl-vo">$Uvalue</span>;             <span class="pl-c">//U entry in pdf document</span></span></td>
      </tr>
      <tr>
        <td id="L66" class="blob-num js-line-number" data-line-number="66"></td>
        <td id="LC66" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-st">var</span> <span class="pl-vo">$Ovalue</span>;             <span class="pl-c">//O entry in pdf document</span></span></td>
      </tr>
      <tr>
        <td id="L67" class="blob-num js-line-number" data-line-number="67"></td>
        <td id="LC67" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-st">var</span> <span class="pl-vo">$Pvalue</span>;             <span class="pl-c">//P entry in pdf document</span></span></td>
      </tr>
      <tr>
        <td id="L68" class="blob-num js-line-number" data-line-number="68"></td>
        <td id="LC68" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-st">var</span> <span class="pl-vo">$enc_obj_id</span>;         <span class="pl-c">//encryption object id</span></span></td>
      </tr>
      <tr>
        <td id="L69" class="blob-num js-line-number" data-line-number="69"></td>
        <td id="LC69" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L70" class="blob-num js-line-number" data-line-number="70"></td>
        <td id="LC70" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-c">/**</span></span></td>
      </tr>
      <tr>
        <td id="L71" class="blob-num js-line-number" data-line-number="71"></td>
        <td id="LC71" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">	* Function to set permissions as well as user and owner passwords</span></span></td>
      </tr>
      <tr>
        <td id="L72" class="blob-num js-line-number" data-line-number="72"></td>
        <td id="LC72" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">	*</span></span></td>
      </tr>
      <tr>
        <td id="L73" class="blob-num js-line-number" data-line-number="73"></td>
        <td id="LC73" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">	* - permissions is an array with values taken from the following list:</span></span></td>
      </tr>
      <tr>
        <td id="L74" class="blob-num js-line-number" data-line-number="74"></td>
        <td id="LC74" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">	*   copy, print, modify, annot-forms</span></span></td>
      </tr>
      <tr>
        <td id="L75" class="blob-num js-line-number" data-line-number="75"></td>
        <td id="LC75" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">	*   If a value is present it means that the permission is granted</span></span></td>
      </tr>
      <tr>
        <td id="L76" class="blob-num js-line-number" data-line-number="76"></td>
        <td id="LC76" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">	* - If a user password is set, user will be prompted before document is opened</span></span></td>
      </tr>
      <tr>
        <td id="L77" class="blob-num js-line-number" data-line-number="77"></td>
        <td id="LC77" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">	* - If an owner password is set, document can be opened in privilege mode with no</span></span></td>
      </tr>
      <tr>
        <td id="L78" class="blob-num js-line-number" data-line-number="78"></td>
        <td id="LC78" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">	*   restriction if that password is entered</span></span></td>
      </tr>
      <tr>
        <td id="L79" class="blob-num js-line-number" data-line-number="79"></td>
        <td id="LC79" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">	*/</span></span></td>
      </tr>
      <tr>
        <td id="L80" class="blob-num js-line-number" data-line-number="80"></td>
        <td id="LC80" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-st">function</span> <span class="pl-en">SetProtection</span>(<span class="pl-vo">$permissions</span><span class="pl-k">=</span><span class="pl-s3">array</span>(), <span class="pl-vo">$user_pass</span><span class="pl-k">=</span><span class="pl-s1"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>, <span class="pl-vo">$owner_pass</span><span class="pl-k">=</span><span class="pl-c1">null</span>)</span></td>
      </tr>
      <tr>
        <td id="L81" class="blob-num js-line-number" data-line-number="81"></td>
        <td id="LC81" class="blob-code js-file-line"><span class="pl-s2">	{</span></td>
      </tr>
      <tr>
        <td id="L82" class="blob-num js-line-number" data-line-number="82"></td>
        <td id="LC82" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$options</span> <span class="pl-k">=</span> <span class="pl-s3">array</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>print<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-c1">4</span>, <span class="pl-s1"><span class="pl-pds">&#39;</span>modify<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-c1">8</span>, <span class="pl-s1"><span class="pl-pds">&#39;</span>copy<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-c1">16</span>, <span class="pl-s1"><span class="pl-pds">&#39;</span>annot-forms<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-c1">32</span> );</span></td>
      </tr>
      <tr>
        <td id="L83" class="blob-num js-line-number" data-line-number="83"></td>
        <td id="LC83" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$protection</span> <span class="pl-k">=</span> <span class="pl-c1">192</span>;</span></td>
      </tr>
      <tr>
        <td id="L84" class="blob-num js-line-number" data-line-number="84"></td>
        <td id="LC84" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-k">foreach</span>(<span class="pl-vo">$permissions</span> <span class="pl-k">as</span> <span class="pl-vo">$permission</span>)</span></td>
      </tr>
      <tr>
        <td id="L85" class="blob-num js-line-number" data-line-number="85"></td>
        <td id="LC85" class="blob-code js-file-line"><span class="pl-s2">		{</span></td>
      </tr>
      <tr>
        <td id="L86" class="blob-num js-line-number" data-line-number="86"></td>
        <td id="LC86" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-s3">isset</span>(<span class="pl-vo">$options</span>[<span class="pl-vo">$permission</span>]))</span></td>
      </tr>
      <tr>
        <td id="L87" class="blob-num js-line-number" data-line-number="87"></td>
        <td id="LC87" class="blob-code js-file-line"><span class="pl-s2">				<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>Error(<span class="pl-s1"><span class="pl-pds">&#39;</span>Incorrect permission: <span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-vo">$permission</span>);</span></td>
      </tr>
      <tr>
        <td id="L88" class="blob-num js-line-number" data-line-number="88"></td>
        <td id="LC88" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$protection</span> <span class="pl-k">+</span><span class="pl-k">=</span> <span class="pl-vo">$options</span>[<span class="pl-vo">$permission</span>];</span></td>
      </tr>
      <tr>
        <td id="L89" class="blob-num js-line-number" data-line-number="89"></td>
        <td id="LC89" class="blob-code js-file-line"><span class="pl-s2">		}</span></td>
      </tr>
      <tr>
        <td id="L90" class="blob-num js-line-number" data-line-number="90"></td>
        <td id="LC90" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-k">if</span> (<span class="pl-vo">$owner_pass</span> <span class="pl-k">===</span> <span class="pl-c1">null</span>)</span></td>
      </tr>
      <tr>
        <td id="L91" class="blob-num js-line-number" data-line-number="91"></td>
        <td id="LC91" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$owner_pass</span> <span class="pl-k">=</span> <span class="pl-s3">uniqid</span>(<span class="pl-s3">rand</span>());</span></td>
      </tr>
      <tr>
        <td id="L92" class="blob-num js-line-number" data-line-number="92"></td>
        <td id="LC92" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">encrypted</span> <span class="pl-k">=</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L93" class="blob-num js-line-number" data-line-number="93"></td>
        <td id="LC93" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">padding</span> <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&quot;</span><span class="pl-c1">\x28\xBF\x4E\x5E\x4E\x75\x8A\x41\x64\x00\x4E\x56\xFF\xFA\x01\x08</span><span class="pl-pds">&quot;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L94" class="blob-num js-line-number" data-line-number="94"></td>
        <td id="LC94" class="blob-code js-file-line"><span class="pl-s2">						<span class="pl-s1"><span class="pl-pds">&quot;</span><span class="pl-c1">\x2E\x2E\x00\xB6\xD0\x68\x3E\x80\x2F\x0C\xA9\xFE\x64\x53\x69\x7A</span><span class="pl-pds">&quot;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L95" class="blob-num js-line-number" data-line-number="95"></td>
        <td id="LC95" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_generateencryptionkey(<span class="pl-vo">$user_pass</span>, <span class="pl-vo">$owner_pass</span>, <span class="pl-vo">$protection</span>);</span></td>
      </tr>
      <tr>
        <td id="L96" class="blob-num js-line-number" data-line-number="96"></td>
        <td id="LC96" class="blob-code js-file-line"><span class="pl-s2">	}</span></td>
      </tr>
      <tr>
        <td id="L97" class="blob-num js-line-number" data-line-number="97"></td>
        <td id="LC97" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L98" class="blob-num js-line-number" data-line-number="98"></td>
        <td id="LC98" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">/****************************************************************************</span></span></td>
      </tr>
      <tr>
        <td id="L99" class="blob-num js-line-number" data-line-number="99"></td>
        <td id="LC99" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">*                                                                           *</span></span></td>
      </tr>
      <tr>
        <td id="L100" class="blob-num js-line-number" data-line-number="100"></td>
        <td id="LC100" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">*                              Private methods                              *</span></span></td>
      </tr>
      <tr>
        <td id="L101" class="blob-num js-line-number" data-line-number="101"></td>
        <td id="LC101" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">*                                                                           *</span></span></td>
      </tr>
      <tr>
        <td id="L102" class="blob-num js-line-number" data-line-number="102"></td>
        <td id="LC102" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">****************************************************************************/</span></span></td>
      </tr>
      <tr>
        <td id="L103" class="blob-num js-line-number" data-line-number="103"></td>
        <td id="LC103" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L104" class="blob-num js-line-number" data-line-number="104"></td>
        <td id="LC104" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-st">function</span> <span class="pl-en">_putstream</span>(<span class="pl-vo">$s</span>)</span></td>
      </tr>
      <tr>
        <td id="L105" class="blob-num js-line-number" data-line-number="105"></td>
        <td id="LC105" class="blob-code js-file-line"><span class="pl-s2">	{</span></td>
      </tr>
      <tr>
        <td id="L106" class="blob-num js-line-number" data-line-number="106"></td>
        <td id="LC106" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-k">if</span> (<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">encrypted</span>) {</span></td>
      </tr>
      <tr>
        <td id="L107" class="blob-num js-line-number" data-line-number="107"></td>
        <td id="LC107" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$s</span> <span class="pl-k">=</span> RC4(<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_objectkey(<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">n</span>), <span class="pl-vo">$s</span>);</span></td>
      </tr>
      <tr>
        <td id="L108" class="blob-num js-line-number" data-line-number="108"></td>
        <td id="LC108" class="blob-code js-file-line"><span class="pl-s2">		}</span></td>
      </tr>
      <tr>
        <td id="L109" class="blob-num js-line-number" data-line-number="109"></td>
        <td id="LC109" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-st">parent</span><span class="pl-k">::</span>_putstream(<span class="pl-vo">$s</span>);</span></td>
      </tr>
      <tr>
        <td id="L110" class="blob-num js-line-number" data-line-number="110"></td>
        <td id="LC110" class="blob-code js-file-line"><span class="pl-s2">	}</span></td>
      </tr>
      <tr>
        <td id="L111" class="blob-num js-line-number" data-line-number="111"></td>
        <td id="LC111" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L112" class="blob-num js-line-number" data-line-number="112"></td>
        <td id="LC112" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-st">function</span> <span class="pl-en">_textstring</span>(<span class="pl-vo">$s</span>)</span></td>
      </tr>
      <tr>
        <td id="L113" class="blob-num js-line-number" data-line-number="113"></td>
        <td id="LC113" class="blob-code js-file-line"><span class="pl-s2">	{</span></td>
      </tr>
      <tr>
        <td id="L114" class="blob-num js-line-number" data-line-number="114"></td>
        <td id="LC114" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-k">if</span> (<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">encrypted</span>) {</span></td>
      </tr>
      <tr>
        <td id="L115" class="blob-num js-line-number" data-line-number="115"></td>
        <td id="LC115" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$s</span> <span class="pl-k">=</span> RC4(<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_objectkey(<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">n</span>), <span class="pl-vo">$s</span>);</span></td>
      </tr>
      <tr>
        <td id="L116" class="blob-num js-line-number" data-line-number="116"></td>
        <td id="LC116" class="blob-code js-file-line"><span class="pl-s2">		}</span></td>
      </tr>
      <tr>
        <td id="L117" class="blob-num js-line-number" data-line-number="117"></td>
        <td id="LC117" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-k">return</span> <span class="pl-st">parent</span><span class="pl-k">::</span>_textstring(<span class="pl-vo">$s</span>);</span></td>
      </tr>
      <tr>
        <td id="L118" class="blob-num js-line-number" data-line-number="118"></td>
        <td id="LC118" class="blob-code js-file-line"><span class="pl-s2">	}</span></td>
      </tr>
      <tr>
        <td id="L119" class="blob-num js-line-number" data-line-number="119"></td>
        <td id="LC119" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L120" class="blob-num js-line-number" data-line-number="120"></td>
        <td id="LC120" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-c">/**</span></span></td>
      </tr>
      <tr>
        <td id="L121" class="blob-num js-line-number" data-line-number="121"></td>
        <td id="LC121" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">	* Compute key depending on object number where the encrypted data is stored</span></span></td>
      </tr>
      <tr>
        <td id="L122" class="blob-num js-line-number" data-line-number="122"></td>
        <td id="LC122" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">	*/</span></span></td>
      </tr>
      <tr>
        <td id="L123" class="blob-num js-line-number" data-line-number="123"></td>
        <td id="LC123" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-st">function</span> <span class="pl-en">_objectkey</span>(<span class="pl-vo">$n</span>)</span></td>
      </tr>
      <tr>
        <td id="L124" class="blob-num js-line-number" data-line-number="124"></td>
        <td id="LC124" class="blob-code js-file-line"><span class="pl-s2">	{</span></td>
      </tr>
      <tr>
        <td id="L125" class="blob-num js-line-number" data-line-number="125"></td>
        <td id="LC125" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-k">return</span> <span class="pl-s3">substr</span>(<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_md5_16(<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">encryption_key</span><span class="pl-k">.</span><span class="pl-s3">pack</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>VXxx<span class="pl-pds">&#39;</span></span>,<span class="pl-vo">$n</span>)),<span class="pl-c1">0</span>,<span class="pl-c1">10</span>);</span></td>
      </tr>
      <tr>
        <td id="L126" class="blob-num js-line-number" data-line-number="126"></td>
        <td id="LC126" class="blob-code js-file-line"><span class="pl-s2">	}</span></td>
      </tr>
      <tr>
        <td id="L127" class="blob-num js-line-number" data-line-number="127"></td>
        <td id="LC127" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L128" class="blob-num js-line-number" data-line-number="128"></td>
        <td id="LC128" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-st">function</span> <span class="pl-en">_putresources</span>()</span></td>
      </tr>
      <tr>
        <td id="L129" class="blob-num js-line-number" data-line-number="129"></td>
        <td id="LC129" class="blob-code js-file-line"><span class="pl-s2">	{</span></td>
      </tr>
      <tr>
        <td id="L130" class="blob-num js-line-number" data-line-number="130"></td>
        <td id="LC130" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-st">parent</span><span class="pl-k">::</span>_putresources();</span></td>
      </tr>
      <tr>
        <td id="L131" class="blob-num js-line-number" data-line-number="131"></td>
        <td id="LC131" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-k">if</span> (<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">encrypted</span>) {</span></td>
      </tr>
      <tr>
        <td id="L132" class="blob-num js-line-number" data-line-number="132"></td>
        <td id="LC132" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_newobj();</span></td>
      </tr>
      <tr>
        <td id="L133" class="blob-num js-line-number" data-line-number="133"></td>
        <td id="LC133" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">enc_obj_id</span> <span class="pl-k">=</span> <span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">n</span>;</span></td>
      </tr>
      <tr>
        <td id="L134" class="blob-num js-line-number" data-line-number="134"></td>
        <td id="LC134" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_out(<span class="pl-s1"><span class="pl-pds">&#39;</span>&lt;&lt;<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L135" class="blob-num js-line-number" data-line-number="135"></td>
        <td id="LC135" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_putencryption();</span></td>
      </tr>
      <tr>
        <td id="L136" class="blob-num js-line-number" data-line-number="136"></td>
        <td id="LC136" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_out(<span class="pl-s1"><span class="pl-pds">&#39;</span>&gt;&gt;<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L137" class="blob-num js-line-number" data-line-number="137"></td>
        <td id="LC137" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_out(<span class="pl-s1"><span class="pl-pds">&#39;</span>endobj<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L138" class="blob-num js-line-number" data-line-number="138"></td>
        <td id="LC138" class="blob-code js-file-line"><span class="pl-s2">		}</span></td>
      </tr>
      <tr>
        <td id="L139" class="blob-num js-line-number" data-line-number="139"></td>
        <td id="LC139" class="blob-code js-file-line"><span class="pl-s2">	}</span></td>
      </tr>
      <tr>
        <td id="L140" class="blob-num js-line-number" data-line-number="140"></td>
        <td id="LC140" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L141" class="blob-num js-line-number" data-line-number="141"></td>
        <td id="LC141" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-st">function</span> <span class="pl-en">_putencryption</span>()</span></td>
      </tr>
      <tr>
        <td id="L142" class="blob-num js-line-number" data-line-number="142"></td>
        <td id="LC142" class="blob-code js-file-line"><span class="pl-s2">	{</span></td>
      </tr>
      <tr>
        <td id="L143" class="blob-num js-line-number" data-line-number="143"></td>
        <td id="LC143" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_out(<span class="pl-s1"><span class="pl-pds">&#39;</span>/Filter /Standard<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L144" class="blob-num js-line-number" data-line-number="144"></td>
        <td id="LC144" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_out(<span class="pl-s1"><span class="pl-pds">&#39;</span>/V 1<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L145" class="blob-num js-line-number" data-line-number="145"></td>
        <td id="LC145" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_out(<span class="pl-s1"><span class="pl-pds">&#39;</span>/R 2<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L146" class="blob-num js-line-number" data-line-number="146"></td>
        <td id="LC146" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_out(<span class="pl-s1"><span class="pl-pds">&#39;</span>/O (<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_escape(<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">Ovalue</span>)<span class="pl-k">.</span><span class="pl-s1"><span class="pl-pds">&#39;</span>)<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L147" class="blob-num js-line-number" data-line-number="147"></td>
        <td id="LC147" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_out(<span class="pl-s1"><span class="pl-pds">&#39;</span>/U (<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_escape(<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">Uvalue</span>)<span class="pl-k">.</span><span class="pl-s1"><span class="pl-pds">&#39;</span>)<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L148" class="blob-num js-line-number" data-line-number="148"></td>
        <td id="LC148" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_out(<span class="pl-s1"><span class="pl-pds">&#39;</span>/P <span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">Pvalue</span>);</span></td>
      </tr>
      <tr>
        <td id="L149" class="blob-num js-line-number" data-line-number="149"></td>
        <td id="LC149" class="blob-code js-file-line"><span class="pl-s2">	}</span></td>
      </tr>
      <tr>
        <td id="L150" class="blob-num js-line-number" data-line-number="150"></td>
        <td id="LC150" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L151" class="blob-num js-line-number" data-line-number="151"></td>
        <td id="LC151" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-st">function</span> <span class="pl-en">_puttrailer</span>()</span></td>
      </tr>
      <tr>
        <td id="L152" class="blob-num js-line-number" data-line-number="152"></td>
        <td id="LC152" class="blob-code js-file-line"><span class="pl-s2">	{</span></td>
      </tr>
      <tr>
        <td id="L153" class="blob-num js-line-number" data-line-number="153"></td>
        <td id="LC153" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-st">parent</span><span class="pl-k">::</span>_puttrailer();</span></td>
      </tr>
      <tr>
        <td id="L154" class="blob-num js-line-number" data-line-number="154"></td>
        <td id="LC154" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-k">if</span> (<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">encrypted</span>) {</span></td>
      </tr>
      <tr>
        <td id="L155" class="blob-num js-line-number" data-line-number="155"></td>
        <td id="LC155" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_out(<span class="pl-s1"><span class="pl-pds">&#39;</span>/Encrypt <span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">enc_obj_id</span><span class="pl-k">.</span><span class="pl-s1"><span class="pl-pds">&#39;</span> 0 R<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L156" class="blob-num js-line-number" data-line-number="156"></td>
        <td id="LC156" class="blob-code js-file-line"><span class="pl-s2">			<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_out(<span class="pl-s1"><span class="pl-pds">&#39;</span>/ID [()()]<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L157" class="blob-num js-line-number" data-line-number="157"></td>
        <td id="LC157" class="blob-code js-file-line"><span class="pl-s2">		}</span></td>
      </tr>
      <tr>
        <td id="L158" class="blob-num js-line-number" data-line-number="158"></td>
        <td id="LC158" class="blob-code js-file-line"><span class="pl-s2">	}</span></td>
      </tr>
      <tr>
        <td id="L159" class="blob-num js-line-number" data-line-number="159"></td>
        <td id="LC159" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L160" class="blob-num js-line-number" data-line-number="160"></td>
        <td id="LC160" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-c">/**</span></span></td>
      </tr>
      <tr>
        <td id="L161" class="blob-num js-line-number" data-line-number="161"></td>
        <td id="LC161" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">	* Get MD5 as binary string</span></span></td>
      </tr>
      <tr>
        <td id="L162" class="blob-num js-line-number" data-line-number="162"></td>
        <td id="LC162" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">	*/</span></span></td>
      </tr>
      <tr>
        <td id="L163" class="blob-num js-line-number" data-line-number="163"></td>
        <td id="LC163" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-st">function</span> <span class="pl-en">_md5_16</span>(<span class="pl-vo">$string</span>)</span></td>
      </tr>
      <tr>
        <td id="L164" class="blob-num js-line-number" data-line-number="164"></td>
        <td id="LC164" class="blob-code js-file-line"><span class="pl-s2">	{</span></td>
      </tr>
      <tr>
        <td id="L165" class="blob-num js-line-number" data-line-number="165"></td>
        <td id="LC165" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-k">return</span> <span class="pl-s3">pack</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>H*<span class="pl-pds">&#39;</span></span>,<span class="pl-s3">md5</span>(<span class="pl-vo">$string</span>));</span></td>
      </tr>
      <tr>
        <td id="L166" class="blob-num js-line-number" data-line-number="166"></td>
        <td id="LC166" class="blob-code js-file-line"><span class="pl-s2">	}</span></td>
      </tr>
      <tr>
        <td id="L167" class="blob-num js-line-number" data-line-number="167"></td>
        <td id="LC167" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L168" class="blob-num js-line-number" data-line-number="168"></td>
        <td id="LC168" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-c">/**</span></span></td>
      </tr>
      <tr>
        <td id="L169" class="blob-num js-line-number" data-line-number="169"></td>
        <td id="LC169" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">	* Compute O value</span></span></td>
      </tr>
      <tr>
        <td id="L170" class="blob-num js-line-number" data-line-number="170"></td>
        <td id="LC170" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">	*/</span></span></td>
      </tr>
      <tr>
        <td id="L171" class="blob-num js-line-number" data-line-number="171"></td>
        <td id="LC171" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-st">function</span> <span class="pl-en">_Ovalue</span>(<span class="pl-vo">$user_pass</span>, <span class="pl-vo">$owner_pass</span>)</span></td>
      </tr>
      <tr>
        <td id="L172" class="blob-num js-line-number" data-line-number="172"></td>
        <td id="LC172" class="blob-code js-file-line"><span class="pl-s2">	{</span></td>
      </tr>
      <tr>
        <td id="L173" class="blob-num js-line-number" data-line-number="173"></td>
        <td id="LC173" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$tmp</span> <span class="pl-k">=</span> <span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_md5_16(<span class="pl-vo">$owner_pass</span>);</span></td>
      </tr>
      <tr>
        <td id="L174" class="blob-num js-line-number" data-line-number="174"></td>
        <td id="LC174" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$owner_RC4_key</span> <span class="pl-k">=</span> <span class="pl-s3">substr</span>(<span class="pl-vo">$tmp</span>,<span class="pl-c1">0</span>,<span class="pl-c1">5</span>);</span></td>
      </tr>
      <tr>
        <td id="L175" class="blob-num js-line-number" data-line-number="175"></td>
        <td id="LC175" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-k">return</span> RC4(<span class="pl-vo">$owner_RC4_key</span>, <span class="pl-vo">$user_pass</span>);</span></td>
      </tr>
      <tr>
        <td id="L176" class="blob-num js-line-number" data-line-number="176"></td>
        <td id="LC176" class="blob-code js-file-line"><span class="pl-s2">	}</span></td>
      </tr>
      <tr>
        <td id="L177" class="blob-num js-line-number" data-line-number="177"></td>
        <td id="LC177" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L178" class="blob-num js-line-number" data-line-number="178"></td>
        <td id="LC178" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-c">/**</span></span></td>
      </tr>
      <tr>
        <td id="L179" class="blob-num js-line-number" data-line-number="179"></td>
        <td id="LC179" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">	* Compute U value</span></span></td>
      </tr>
      <tr>
        <td id="L180" class="blob-num js-line-number" data-line-number="180"></td>
        <td id="LC180" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">	*/</span></span></td>
      </tr>
      <tr>
        <td id="L181" class="blob-num js-line-number" data-line-number="181"></td>
        <td id="LC181" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-st">function</span> <span class="pl-en">_Uvalue</span>()</span></td>
      </tr>
      <tr>
        <td id="L182" class="blob-num js-line-number" data-line-number="182"></td>
        <td id="LC182" class="blob-code js-file-line"><span class="pl-s2">	{</span></td>
      </tr>
      <tr>
        <td id="L183" class="blob-num js-line-number" data-line-number="183"></td>
        <td id="LC183" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-k">return</span> RC4(<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">encryption_key</span>, <span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">padding</span>);</span></td>
      </tr>
      <tr>
        <td id="L184" class="blob-num js-line-number" data-line-number="184"></td>
        <td id="LC184" class="blob-code js-file-line"><span class="pl-s2">	}</span></td>
      </tr>
      <tr>
        <td id="L185" class="blob-num js-line-number" data-line-number="185"></td>
        <td id="LC185" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L186" class="blob-num js-line-number" data-line-number="186"></td>
        <td id="LC186" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-c">/**</span></span></td>
      </tr>
      <tr>
        <td id="L187" class="blob-num js-line-number" data-line-number="187"></td>
        <td id="LC187" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">	* Compute encryption key</span></span></td>
      </tr>
      <tr>
        <td id="L188" class="blob-num js-line-number" data-line-number="188"></td>
        <td id="LC188" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">	*/</span></span></td>
      </tr>
      <tr>
        <td id="L189" class="blob-num js-line-number" data-line-number="189"></td>
        <td id="LC189" class="blob-code js-file-line"><span class="pl-s2">	<span class="pl-st">function</span> <span class="pl-en">_generateencryptionkey</span>(<span class="pl-vo">$user_pass</span>, <span class="pl-vo">$owner_pass</span>, <span class="pl-vo">$protection</span>)</span></td>
      </tr>
      <tr>
        <td id="L190" class="blob-num js-line-number" data-line-number="190"></td>
        <td id="LC190" class="blob-code js-file-line"><span class="pl-s2">	{</span></td>
      </tr>
      <tr>
        <td id="L191" class="blob-num js-line-number" data-line-number="191"></td>
        <td id="LC191" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-c">// Pad passwords</span></span></td>
      </tr>
      <tr>
        <td id="L192" class="blob-num js-line-number" data-line-number="192"></td>
        <td id="LC192" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$user_pass</span> <span class="pl-k">=</span> <span class="pl-s3">substr</span>(<span class="pl-vo">$user_pass</span><span class="pl-k">.</span><span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">padding</span>,<span class="pl-c1">0</span>,<span class="pl-c1">32</span>);</span></td>
      </tr>
      <tr>
        <td id="L193" class="blob-num js-line-number" data-line-number="193"></td>
        <td id="LC193" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$owner_pass</span> <span class="pl-k">=</span> <span class="pl-s3">substr</span>(<span class="pl-vo">$owner_pass</span><span class="pl-k">.</span><span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">padding</span>,<span class="pl-c1">0</span>,<span class="pl-c1">32</span>);</span></td>
      </tr>
      <tr>
        <td id="L194" class="blob-num js-line-number" data-line-number="194"></td>
        <td id="LC194" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-c">// Compute O value</span></span></td>
      </tr>
      <tr>
        <td id="L195" class="blob-num js-line-number" data-line-number="195"></td>
        <td id="LC195" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">Ovalue</span> <span class="pl-k">=</span> <span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_Ovalue(<span class="pl-vo">$user_pass</span>,<span class="pl-vo">$owner_pass</span>);</span></td>
      </tr>
      <tr>
        <td id="L196" class="blob-num js-line-number" data-line-number="196"></td>
        <td id="LC196" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-c">// Compute encyption key</span></span></td>
      </tr>
      <tr>
        <td id="L197" class="blob-num js-line-number" data-line-number="197"></td>
        <td id="LC197" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$tmp</span> <span class="pl-k">=</span> <span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_md5_16(<span class="pl-vo">$user_pass</span><span class="pl-k">.</span><span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">Ovalue</span><span class="pl-k">.</span><span class="pl-s3">chr</span>(<span class="pl-vo">$protection</span>)<span class="pl-k">.</span><span class="pl-s1"><span class="pl-pds">&quot;</span><span class="pl-c1">\xFF\xFF\xFF</span><span class="pl-pds">&quot;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L198" class="blob-num js-line-number" data-line-number="198"></td>
        <td id="LC198" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">encryption_key</span> <span class="pl-k">=</span> <span class="pl-s3">substr</span>(<span class="pl-vo">$tmp</span>,<span class="pl-c1">0</span>,<span class="pl-c1">5</span>);</span></td>
      </tr>
      <tr>
        <td id="L199" class="blob-num js-line-number" data-line-number="199"></td>
        <td id="LC199" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-c">// Compute U value</span></span></td>
      </tr>
      <tr>
        <td id="L200" class="blob-num js-line-number" data-line-number="200"></td>
        <td id="LC200" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">Uvalue</span> <span class="pl-k">=</span> <span class="pl-vo">$this</span><span class="pl-k">-&gt;</span>_Uvalue();</span></td>
      </tr>
      <tr>
        <td id="L201" class="blob-num js-line-number" data-line-number="201"></td>
        <td id="LC201" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-c">// Compute P value</span></span></td>
      </tr>
      <tr>
        <td id="L202" class="blob-num js-line-number" data-line-number="202"></td>
        <td id="LC202" class="blob-code js-file-line"><span class="pl-s2">		<span class="pl-vo">$this</span><span class="pl-k">-&gt;</span><span class="pl-vo">Pvalue</span> <span class="pl-k">=</span> <span class="pl-k">-</span>((<span class="pl-vo">$protection</span><span class="pl-k">^</span><span class="pl-c1">255</span>)<span class="pl-k">+</span><span class="pl-c1">1</span>);</span></td>
      </tr>
      <tr>
        <td id="L203" class="blob-num js-line-number" data-line-number="203"></td>
        <td id="LC203" class="blob-code js-file-line"><span class="pl-s2">	}</span></td>
      </tr>
      <tr>
        <td id="L204" class="blob-num js-line-number" data-line-number="204"></td>
        <td id="LC204" class="blob-code js-file-line"><span class="pl-s2">}</span></td>
      </tr>
      <tr>
        <td id="L205" class="blob-num js-line-number" data-line-number="205"></td>
        <td id="LC205" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L206" class="blob-num js-line-number" data-line-number="206"></td>
        <td id="LC206" class="blob-code js-file-line"><span class="pl-s2"></span><span class="pl-pse"><span class="pl-s2">?</span>&gt;</span></td>
      </tr>
</table>

  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer" role="contentinfo">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="https://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/" aria-label="Homepage">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2015 <span title="0.03180s from github-fe129-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-suggester-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="fullscreen-contents js-fullscreen-contents" placeholder=""></textarea>
      <div class="suggester-container">
        <div class="suggester fullscreen-suggester js-suggester js-navigation-container"></div>
      </div>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-x flash-close js-ajax-error-dismiss" aria-label="Dismiss error"></a>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/frameworks-af95b05cb14b7a29b0457c26b4a1d24151f4a47842c8e74bd556622f347b9d3d.js" type="text/javascript"></script>
      <script async="async" crossorigin="anonymous" src="https://assets-cdn.github.com/assets/github-6fb290feb68c5887ec2c3a665de6ad3c245fca991bd8114ccedcfae4cd7314f1.js" type="text/javascript"></script>
      
      
  </body>
</html>

