
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="{{ .Page.Params.description | default .Site.Params.description | markdownify }}">
<meta name="author" content="{{ .Site.Params.authors }}">
<meta name="generator" content="Hugo {{ hugo.Version }}">

<meta name="docsearch:language" content="en">
<meta name="docsearch:version" content="{{ .Site.Params.docs_version }}">

<title>{{ if .IsHome }}{{ .Site.Title | markdownify }} · {{ .Site.Params.description | markdownify }}{{ else }}{{ .Title | markdownify }} · {{ .Site.Title | markdownify }} v{{ .Site.Params.docs_version }}{{ end }}</title>

<link rel="canonical" href="{{ .Permalink }}">

<a
                href="/Profile.html"
                class="text-gray-600 hover:text-gray-900"
                >Profile</a
              >.<a
                href="landing.html"
                class="text-gray-600 hover:text-gray-900"
                >Creative Tim</a
              >.
  <?php
  echo "sa";
  ?>
