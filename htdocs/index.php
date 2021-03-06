<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="description" content="Cppcheck is an analysis tool for C/C++ code.
It detects the types of bugs that the compilers normally fail to detect. The
goal is no false positives." />
  <meta name="keywords" content="Cppcheck, open source, analysis tool, C/C++,
code, errors, bugs, compilers, bounds checking, memory leaks, obsolete functions,
uninitialized variables, unused functions" />
  <title>Cppcheck - A tool for static C/C++ code analysis</title>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Orbitron&amp;text=Cppcheck" />
  <link rel="stylesheet" type="text/css" href="/site/css/all.css" />
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
  <link rel="alternate" type="application/rss+xml" title="Project News"
        href="http://sourceforge.net/export/rss2_projnews.php?group_id=195752" />
</head>
<body>
<div id="header">
  <div class="wrap">
    <h1>Cppcheck</h1>
    <p>A tool for static C/C++ code analysis</p>
  </div> <!-- .wrap -->
</div> <!-- #header -->
<div id="tabs">
  <div class="wrap">
    <ul>
      <li><strong><a href="/">Home</a></strong></li>
      <li><a href="http://sourceforge.net/apps/mediawiki/cppcheck/">Wiki</a></li>
      <li><a href="http://sourceforge.net/apps/phpbb/cppcheck/">Forum</a></li>
      <li><a href="http://sourceforge.net/apps/trac/cppcheck/">Trac</a></li>
      <li><a href="/devinfo/" title="Developer Information">Developer Info</a></li>
      <li><a href="http://sourceforge.net/projects/cppcheck/">Project page</a></li>
    </ul>
  </div> <!-- .wrap -->
</div> <!-- #tabs -->
<div id="content">
  <div class="wrap">
<p><strong>Cppcheck</strong> is an <a href="http://en.wikipedia.org/wiki/Static_analysis_tool">static analysis tool</a>
for C/C++ code. Unlike C/C++ compilers and many other analysis tools it does
not detect syntax errors in the code. Cppcheck primarily detects the types of
bugs that the compilers normally do not detect. The goal is to detect only real
errors in the code (i.e. have zero false positives).</p>

<h2>Download</h2>
<p><a class="downloadnow" href="http://downloads.sourceforge.net/cppcheck/cppcheck-1.51-x86-Setup.msi"><strong>Download Now!</strong> <em>Version 1.51 for Windows</em></a></p>
<p>You can download the standalone Cppcheck from our
<a href="http://sourceforge.net/projects/cppcheck/">project page</a> or add it
as a plugin for your favorite IDE:</p>
<ul>
  <li><strong>Code::Blocks</strong> - <em>integrated</em></li>
  <li><strong>CodeLite</strong> - <em>integrated</em></li>
  <li><strong>Eclipse</strong> - <a href="http://cppcheclipse.googlecode.com/">Cppcheclipse</a></li>
  <li><strong>Hudson</strong> - <a href="http://wiki.hudson-ci.org/display/HUDSON/Cppcheck+Plugin">Cppcheck Plugin</a></li>
  <li><strong>Jenkins</strong> - <a href="http://wiki.jenkins-ci.org/display/JENKINS/Cppcheck+Plugin">Cppcheck Plugin</a></li>
</ul>
<p>There is no plugin for <strong>Visual Studio</strong>, but it is possible to
add Cppcheck as an external tool.</p>

<h2>Features</h2>
<ul>
  <li>Out of bounds checking</li>
  <li>Check the code for each class</li>
  <li>Checking exception safety</li>
  <li>Memory leaks checking</li>
  <li>Warn if obsolete functions are used</li>
  <li>Check for invalid usage of <acronym title="Standard Template Library">STL</acronym></li>
  <li>Check for uninitialized variables and unused functions</li>
</ul>

<h2>News</h2>
<?php
  require './site/simplepie/simplepie.inc';

  $feed = new SimplePie();
  $feed->set_feed_url('http://sourceforge.net/export/rss2_projnews.php?group_id=195752');
  $feed->set_cache_location('./site/simplepie/cache');
  $feed->init();
  print("<ul class=\"rssfeeditems\">\n");
  foreach ($feed->get_items(0, 3) as $item) { //for the last 3 news items...
    print("  <li><a href=\"".$item->get_link()."\">".$item->get_title()."</a> <em>".$item->get_date('Y-m-d')."</em></li>\n");
  }
  print("</ul>\n");
?>
<p><a href="http://sourceforge.net/news/?group_id=195752">View all news&hellip;</a></p>

<h2>Documentation</h2>
<p>You can read the <a href="manual.pdf">manual</a> or download some 
<a href="http://sourceforge.net/projects/cppcheck/files/Articles/">articles</a>.</p>

<h2>Support</h2>
<ul>
  <li>Use <a href="http://sourceforge.net/apps/trac/cppcheck/">Trac</a> to report
  bugs and feature requests</li>
  <li>Ask questions in the <a href="http://sourceforge.net/apps/phpbb/cppcheck/">discussion forum</a>
  or at the IRC channel <a href="irc://irc.freenode.net/">#cppcheck</a></li>
  <li>For more details look at the <a href="http://sourceforge.net/apps/mediawiki/cppcheck/">wiki</a></li>
</ul>
  </div> <!-- .wrap -->
</div> <!-- #content -->
</body>
</html>