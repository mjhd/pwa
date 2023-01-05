<?
    $manifest_data = <<<MANIFEST_DATA
        {
          "lang": "en",
          "dir": "ltr",
          "name": "web3_webapp",
          "short_name": "web3_webapp",
          "scope": "/",
          "id": "web3_webapp",
          "start_url": "./",
          "theme_color": "#f2f2f2",
          "background_color": "#f2f2f2",
          "display": "standalone",
          "icons": [{
            "src": "./?icon_svg",
            "sizes": "36x36",
            "type": "image/svg+xml"
          }, {
            "src": "./?icon_svg",
            "sizes": "48x48",
            "type": "image/svg+xml"
          }, {
            "src": "./?icon_svg",
            "sizes": "72x72",
            "type": "image/svg+xml"
          }, {
            "src": "./?icon_svg",
            "sizes": "96x96",
            "type": "image/svg+xml"
          }, {
            "src": "./?icon_svg",
            "sizes": "144x144",
            "type": "image/svg+xml"
          }, {
            "src": "./?icon_svg",
            "sizes": "192x192",
            "type": "image/svg+xml"
          }, {
            "src": "./?icon_svg",
            "sizes": "256x256",
            "type": "image/svg+xml"
          }, {
              "src": "./?icon_svg",
              "sizes": "196x196",
              "type": "image/svg+xml",
              "purpose": "any maskable"
          }]
        }
    MANIFEST_DATA;

    $icon_svg_data = <<<ICON_SVG_DATA
        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
        <metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
        <g><g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"><path d="M9344.8,3523.4c-101.9-67.3-121.1-151.9-73.1-324.9c144.2-526.7,192.2-868.9,192.2-1370.7c0-674.8-115.3-1239.9-378.7-1870.5c-459.5-1097.7-1382.2-2020.4-2489.5-2491.4c-1784-757.4-3837.1-359.5-5209.7,1007.3c-330.6,328.8-588.3,669-795.9,1047.7c-92.3,169.2-134.6,217.2-215.3,238.4C238.4-202.2,100-298.3,100-431c0-61.5,138.4-317.2,315.3-586.3c794-1203.4,2037.7-2012.8,3471.9-2256.9c1618.7-276.8,3310.4,261.5,4477.3,1420.7C9673.5-550.2,10192.6,1320.3,9738.9,3112c-76.9,305.7-115.4,390.2-188.4,424.8C9462.1,3579.1,9421.7,3575.3,9344.8,3523.4z"/><path d="M8347.1,3117.8c-278.8-107.7-2779.8-1153.4-2818.2-1176.5c-100-67.3-78.8-192.2,44.2-253.8c40.4-21.1,692.1-294.1,1449.5-607.5c1495.6-619,1470.6-611.3,1643.7-532.5c142.3,65.4,184.6,153.8,259.5,549.8c50,265.3,71.1,886.2,38.4,1180.3c-28.8,269.1-92.3,571-138.4,667.1c-55.7,115.3-165.3,186.5-301.8,194.2C8464.3,3140.8,8383.6,3133.1,8347.1,3117.8z"/><path d="M2629.9,753.2C1807.1,411,1201.5,149.6,1163.1,116.9c-92.3-73.1-148-201.9-136.5-319.1c25-257.6,653.6-1009.3,1149.6-1374.5c365.3-271.1,484.4-324.9,644-292.2c88.4,17.3,207.6,107.6,248,186.5c76.9,146.1,1184.2,2850.9,1184.2,2889.4c0,25-13.5,65.4-30.8,88.4C4160.1,1383.8,4115.9,1370.3,2629.9,753.2z"/><path d="M5242.4,1304.9c-25-23.1-30.8-53.8-23.1-109.6c13.5-125,1151.5-2850.9,1226.5-2941.3c75-88.4,167.3-130.7,288.4-130.7c105.7,1.9,155.7,25,386.4,180.7c438.3,292.2,859.3,719,1157.3,1168.8c138.4,209.6,173,299.9,157.6,411.4C8418.2-8.1,8331.7,115,8233.7,163c-40.4,21.1-690.1,294.1-1445.6,607.5C5377,1353,5313.5,1376.1,5242.4,1304.9z"/><path d="M4679.2,1081.9c-25-11.5-63.4-55.8-84.6-98c-23.1-44.2-296-692.1-607.5-1443.7c-526.7-1266.9-567.1-1372.6-569-1484.1c-1.9-101.9,5.8-128.8,55.7-199.9c80.7-115.3,144.2-146.1,405.6-199.9c569-115.3,1140-115.3,1707.1,0c261.4,53.8,355.6,103.8,411.4,217.2c61.5,119.2,67.3,199.9,25,324.9c-21.1,61.5-288.4,717.1-595.9,1457.2C4807.9,1147.3,4809.9,1145.4,4679.2,1081.9z"/></g></g>
        </svg>
    ICON_SVG_DATA;

    $icon_png_data = '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';
    
    if(is_null($icon_png_data)){
        $icon_raster_data = '';
    }
                
    if(substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], "?") + 1) === "manifest"){
        header("Content-Type: " . "application/json");
        echo $manifest_data;
    }
    else if (substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], "?") + 1) === "icon_svg") {
        echo $icon_svg_data;
    }
    else if (substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], "?") + 1) === "icon_png") {

        header('Content-type: image/png');
        echo base64_decode($icon_png_data);
        //header('Content-Type:text/plain; charset=UTF-8');
        //echo $icon_png_data;

    }
    else if (substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], "?") + 1) === "svg_png") {

          file_put_contents("floop.php", preg_replace('/\$icon_png_data.*?NULL(;)/', '$icon_png_data = ' . "'" . base64_encode(file_get_contents($_FILES["png_data"]["tmp_name"])) . "';", file_get_contents(__FILE__)));

    }

    else{

?>
<!doctype html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,minimal-ui">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv='Expires' content='0'>
    <meta http-equiv='x-dns-prefetch-control' content='off'>

    <title>web3_webapp</title>

    <link rel="base" href="./" />
    <link rel="canonical" href="./" />
    <link rel="amphtml" href="./?amp=1" />
    <link rel="index" href="./">
    <link rel="self" type="application/atom+xml" href="./">
    <link rel="bookmark" title="web3_webapp" href="./">

    <meta name="author" content="radmadical" />
    <meta name="copyright" content="none" />
    <meta name="owner" content="user" />
    <meta name="robots" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="description" content="Web 3.0 PWA boilerplate" />
    <meta name="subject" content="Web 3.0 PWA boilerplates" />
    <meta name="topic" content="Decentralized Web">
    <meta name="keywords" content="web3, pwa, boilerplate" />
    <meta name="news_keywords" content="web3, pwa, boilerplate">
    <meta name="url" content="./" />

    <script type="application/ld+json">
      {
       "@context": "https://schema.org",
        "@type": "SoftwareApplication",
        "name": "web3_webapp",
        "operatingSystem": "cross-platform",
        "applicationCategory": "FinanceApplication",
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "",
          "ratingCount": ""
      },
        "offers": {
          "@type": "Offer",
          "price": "0",
          "priceCurrency": "USD"
        }
      }
    </script>

    <meta itemprop="name" content="web3_webapp">
    <meta itemprop="description" content="Web 3.0 PWA boilerplate">
    <meta itemprop="image" content="./?icon_svg">

    <meta property="og:title" content="web3_webapp">
    <meta property="og:type" content="website">
    <meta property="og:url" content="./">
    <meta property="og:description" content="Web 3.0 PWA boilerplate">
    <meta property="og:site_name" content="web3_webapp">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="./?icon_svg">
    <meta property="og:image:type" content="image/svg+xml">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Web 3.0 PWA boilerplate logo">

    <meta name="twitter:card" content="app">
    <!--<meta name="twitter:site" content="@site_account">
    <meta name="twitter:creator" content="@individual_account">-->
    <meta name="twitter:url" content="./">
    <meta name="twitter:title" content="web3_webapp">
    <meta name="twitter:app:name:iphone" content="web3_webapp">
    <meta name="twitter:app:name:ipad" content="web3_webapp">
    <meta name="twitter:app:name:googleplay" content="web3_webapp">
    <meta name="twitter:description" content="Web 3.0 PWA boilerplate">
    <meta name="twitter:creator" content="radmadical">
    <meta name="twitter:image" content="./?icon_svg">
    <meta name="twitter:image:alt" content="Web 3.0 PWA boilerplate logo">

    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="480">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="web3_webapp">
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="application-name" content="web3_webapp">
    <meta name="apple-mobile-web-app-status-bar-style" content="#f2f2f2">
    <meta name="msapplication-TileColor" content="#f2f2f2">
    <meta name="theme-color" content="#f2f2f2">
    <meta name='mssmarttagspreventparsing' content='true'>
    <meta http-equiv='cleartype' content='on'>
    <meta name="msapplication-tooltip" content="web3_webapp" />
    <meta name="msapplication-starturl" content="./" />
    <meta name="msapplication-window" content="width=1024;height=768" />
    <meta name="msapplication-navbutton-color" content="#f2f2f2" />

    <link rel="shortcut icon" type="image/svg+xml" href="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KICAgICAgICA8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgogICAgICAgIDxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDEwMDAgMTAwMCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMTAwMCAxMDAwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICA8bWV0YWRhdGE+IFN2ZyBWZWN0b3IgSWNvbnMgOiBodHRwOi8vd3d3Lm9ubGluZXdlYmZvbnRzLmNvbS9pY29uIDwvbWV0YWRhdGE+CiAgICAgICAgPGc+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wMDAwMDAsNTExLjAwMDAwMCkgc2NhbGUoMC4xMDAwMDAsLTAuMTAwMDAwKSI+PHBhdGggZD0iTTkzNDQuOCwzNTIzLjRjLTEwMS45LTY3LjMtMTIxLjEtMTUxLjktNzMuMS0zMjQuOWMxNDQuMi01MjYuNywxOTIuMi04NjguOSwxOTIuMi0xMzcwLjdjMC02NzQuOC0xMTUuMy0xMjM5LjktMzc4LjctMTg3MC41Yy00NTkuNS0xMDk3LjctMTM4Mi4yLTIwMjAuNC0yNDg5LjUtMjQ5MS40Yy0xNzg0LTc1Ny40LTM4MzcuMS0zNTkuNS01MjA5LjcsMTAwNy4zYy0zMzAuNiwzMjguOC01ODguMyw2NjktNzk1LjksMTA0Ny43Yy05Mi4zLDE2OS4yLTEzNC42LDIxNy4yLTIxNS4zLDIzOC40QzIzOC40LTIwMi4yLDEwMC0yOTguMywxMDAtNDMxYzAtNjEuNSwxMzguNC0zMTcuMiwzMTUuMy01ODYuM2M3OTQtMTIwMy40LDIwMzcuNy0yMDEyLjgsMzQ3MS45LTIyNTYuOWMxNjE4LjctMjc2LjgsMzMxMC40LDI2MS41LDQ0NzcuMywxNDIwLjdDOTY3My41LTU1MC4yLDEwMTkyLjYsMTMyMC4zLDk3MzguOSwzMTEyYy03Ni45LDMwNS43LTExNS40LDM5MC4yLTE4OC40LDQyNC44Qzk0NjIuMSwzNTc5LjEsOTQyMS43LDM1NzUuMyw5MzQ0LjgsMzUyMy40eiIvPjxwYXRoIGQ9Ik04MzQ3LjEsMzExNy44Yy0yNzguOC0xMDcuNy0yNzc5LjgtMTE1My40LTI4MTguMi0xMTc2LjVjLTEwMC02Ny4zLTc4LjgtMTkyLjIsNDQuMi0yNTMuOGM0MC40LTIxLjEsNjkyLjEtMjk0LjEsMTQ0OS41LTYwNy41YzE0OTUuNi02MTksMTQ3MC42LTYxMS4zLDE2NDMuNy01MzIuNWMxNDIuMyw2NS40LDE4NC42LDE1My44LDI1OS41LDU0OS44YzUwLDI2NS4zLDcxLjEsODg2LjIsMzguNCwxMTgwLjNjLTI4LjgsMjY5LjEtOTIuMyw1NzEtMTM4LjQsNjY3LjFjLTU1LjcsMTE1LjMtMTY1LjMsMTg2LjUtMzAxLjgsMTk0LjJDODQ2NC4zLDMxNDAuOCw4MzgzLjYsMzEzMy4xLDgzNDcuMSwzMTE3Ljh6Ii8+PHBhdGggZD0iTTI2MjkuOSw3NTMuMkMxODA3LjEsNDExLDEyMDEuNSwxNDkuNiwxMTYzLjEsMTE2LjljLTkyLjMtNzMuMS0xNDgtMjAxLjktMTM2LjUtMzE5LjFjMjUtMjU3LjYsNjUzLjYtMTAwOS4zLDExNDkuNi0xMzc0LjVjMzY1LjMtMjcxLjEsNDg0LjQtMzI0LjksNjQ0LTI5Mi4yYzg4LjQsMTcuMywyMDcuNiwxMDcuNiwyNDgsMTg2LjVjNzYuOSwxNDYuMSwxMTg0LjIsMjg1MC45LDExODQuMiwyODg5LjRjMCwyNS0xMy41LDY1LjQtMzAuOCw4OC40QzQxNjAuMSwxMzgzLjgsNDExNS45LDEzNzAuMywyNjI5LjksNzUzLjJ6Ii8+PHBhdGggZD0iTTUyNDIuNCwxMzA0LjljLTI1LTIzLjEtMzAuOC01My44LTIzLjEtMTA5LjZjMTMuNS0xMjUsMTE1MS41LTI4NTAuOSwxMjI2LjUtMjk0MS4zYzc1LTg4LjQsMTY3LjMtMTMwLjcsMjg4LjQtMTMwLjdjMTA1LjcsMS45LDE1NS43LDI1LDM4Ni40LDE4MC43YzQzOC4zLDI5Mi4yLDg1OS4zLDcxOSwxMTU3LjMsMTE2OC44YzEzOC40LDIwOS42LDE3MywyOTkuOSwxNTcuNiw0MTEuNEM4NDE4LjItOC4xLDgzMzEuNywxMTUsODIzMy43LDE2M2MtNDAuNCwyMS4xLTY5MC4xLDI5NC4xLTE0NDUuNiw2MDcuNUM1Mzc3LDEzNTMsNTMxMy41LDEzNzYuMSw1MjQyLjQsMTMwNC45eiIvPjxwYXRoIGQ9Ik00Njc5LjIsMTA4MS45Yy0yNS0xMS41LTYzLjQtNTUuOC04NC42LTk4Yy0yMy4xLTQ0LjItMjk2LTY5Mi4xLTYwNy41LTE0NDMuN2MtNTI2LjctMTI2Ni45LTU2Ny4xLTEzNzIuNi01NjktMTQ4NC4xYy0xLjktMTAxLjksNS44LTEyOC44LDU1LjctMTk5LjljODAuNy0xMTUuMywxNDQuMi0xNDYuMSw0MDUuNi0xOTkuOWM1NjktMTE1LjMsMTE0MC0xMTUuMywxNzA3LjEsMGMyNjEuNCw1My44LDM1NS42LDEwMy44LDQxMS40LDIxNy4yYzYxLjUsMTE5LjIsNjcuMywxOTkuOSwyNSwzMjQuOWMtMjEuMSw2MS41LTI4OC40LDcxNy4xLTU5NS45LDE0NTcuMkM0ODA3LjksMTE0Ny4zLDQ4MDkuOSwxMTQ1LjQsNDY3OS4yLDEwODEuOXoiLz48L2c+PC9nPgogICAgICAgIDwvc3ZnPg==" />

    <link rel="icon" type="image/svg+xml" sizes="16x16 32x32 96x96 192x192" href="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KICAgICAgICA8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgogICAgICAgIDxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDEwMDAgMTAwMCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMTAwMCAxMDAwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICA8bWV0YWRhdGE+IFN2ZyBWZWN0b3IgSWNvbnMgOiBodHRwOi8vd3d3Lm9ubGluZXdlYmZvbnRzLmNvbS9pY29uIDwvbWV0YWRhdGE+CiAgICAgICAgPGc+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wMDAwMDAsNTExLjAwMDAwMCkgc2NhbGUoMC4xMDAwMDAsLTAuMTAwMDAwKSI+PHBhdGggZD0iTTkzNDQuOCwzNTIzLjRjLTEwMS45LTY3LjMtMTIxLjEtMTUxLjktNzMuMS0zMjQuOWMxNDQuMi01MjYuNywxOTIuMi04NjguOSwxOTIuMi0xMzcwLjdjMC02NzQuOC0xMTUuMy0xMjM5LjktMzc4LjctMTg3MC41Yy00NTkuNS0xMDk3LjctMTM4Mi4yLTIwMjAuNC0yNDg5LjUtMjQ5MS40Yy0xNzg0LTc1Ny40LTM4MzcuMS0zNTkuNS01MjA5LjcsMTAwNy4zYy0zMzAuNiwzMjguOC01ODguMyw2NjktNzk1LjksMTA0Ny43Yy05Mi4zLDE2OS4yLTEzNC42LDIxNy4yLTIxNS4zLDIzOC40QzIzOC40LTIwMi4yLDEwMC0yOTguMywxMDAtNDMxYzAtNjEuNSwxMzguNC0zMTcuMiwzMTUuMy01ODYuM2M3OTQtMTIwMy40LDIwMzcuNy0yMDEyLjgsMzQ3MS45LTIyNTYuOWMxNjE4LjctMjc2LjgsMzMxMC40LDI2MS41LDQ0NzcuMywxNDIwLjdDOTY3My41LTU1MC4yLDEwMTkyLjYsMTMyMC4zLDk3MzguOSwzMTEyYy03Ni45LDMwNS43LTExNS40LDM5MC4yLTE4OC40LDQyNC44Qzk0NjIuMSwzNTc5LjEsOTQyMS43LDM1NzUuMyw5MzQ0LjgsMzUyMy40eiIvPjxwYXRoIGQ9Ik04MzQ3LjEsMzExNy44Yy0yNzguOC0xMDcuNy0yNzc5LjgtMTE1My40LTI4MTguMi0xMTc2LjVjLTEwMC02Ny4zLTc4LjgtMTkyLjIsNDQuMi0yNTMuOGM0MC40LTIxLjEsNjkyLjEtMjk0LjEsMTQ0OS41LTYwNy41YzE0OTUuNi02MTksMTQ3MC42LTYxMS4zLDE2NDMuNy01MzIuNWMxNDIuMyw2NS40LDE4NC42LDE1My44LDI1OS41LDU0OS44YzUwLDI2NS4zLDcxLjEsODg2LjIsMzguNCwxMTgwLjNjLTI4LjgsMjY5LjEtOTIuMyw1NzEtMTM4LjQsNjY3LjFjLTU1LjcsMTE1LjMtMTY1LjMsMTg2LjUtMzAxLjgsMTk0LjJDODQ2NC4zLDMxNDAuOCw4MzgzLjYsMzEzMy4xLDgzNDcuMSwzMTE3Ljh6Ii8+PHBhdGggZD0iTTI2MjkuOSw3NTMuMkMxODA3LjEsNDExLDEyMDEuNSwxNDkuNiwxMTYzLjEsMTE2LjljLTkyLjMtNzMuMS0xNDgtMjAxLjktMTM2LjUtMzE5LjFjMjUtMjU3LjYsNjUzLjYtMTAwOS4zLDExNDkuNi0xMzc0LjVjMzY1LjMtMjcxLjEsNDg0LjQtMzI0LjksNjQ0LTI5Mi4yYzg4LjQsMTcuMywyMDcuNiwxMDcuNiwyNDgsMTg2LjVjNzYuOSwxNDYuMSwxMTg0LjIsMjg1MC45LDExODQuMiwyODg5LjRjMCwyNS0xMy41LDY1LjQtMzAuOCw4OC40QzQxNjAuMSwxMzgzLjgsNDExNS45LDEzNzAuMywyNjI5LjksNzUzLjJ6Ii8+PHBhdGggZD0iTTUyNDIuNCwxMzA0LjljLTI1LTIzLjEtMzAuOC01My44LTIzLjEtMTA5LjZjMTMuNS0xMjUsMTE1MS41LTI4NTAuOSwxMjI2LjUtMjk0MS4zYzc1LTg4LjQsMTY3LjMtMTMwLjcsMjg4LjQtMTMwLjdjMTA1LjcsMS45LDE1NS43LDI1LDM4Ni40LDE4MC43YzQzOC4zLDI5Mi4yLDg1OS4zLDcxOSwxMTU3LjMsMTE2OC44YzEzOC40LDIwOS42LDE3MywyOTkuOSwxNTcuNiw0MTEuNEM4NDE4LjItOC4xLDgzMzEuNywxMTUsODIzMy43LDE2M2MtNDAuNCwyMS4xLTY5MC4xLDI5NC4xLTE0NDUuNiw2MDcuNUM1Mzc3LDEzNTMsNTMxMy41LDEzNzYuMSw1MjQyLjQsMTMwNC45eiIvPjxwYXRoIGQ9Ik00Njc5LjIsMTA4MS45Yy0yNS0xMS41LTYzLjQtNTUuOC04NC42LTk4Yy0yMy4xLTQ0LjItMjk2LTY5Mi4xLTYwNy41LTE0NDMuN2MtNTI2LjctMTI2Ni45LTU2Ny4xLTEzNzIuNi01NjktMTQ4NC4xYy0xLjktMTAxLjksNS44LTEyOC44LDU1LjctMTk5LjljODAuNy0xMTUuMywxNDQuMi0xNDYuMSw0MDUuNi0xOTkuOWM1NjktMTE1LjMsMTE0MC0xMTUuMywxNzA3LjEsMGMyNjEuNCw1My44LDM1NS42LDEwMy44LDQxMS40LDIxNy4yYzYxLjUsMTE5LjIsNjcuMywxOTkuOSwyNSwzMjQuOWMtMjEuMSw2MS41LTI4OC40LDcxNy4xLTU5NS45LDE0NTcuMkM0ODA3LjksMTE0Ny4zLDQ4MDkuOSwxMTQ1LjQsNDY3OS4yLDEwODEuOXoiLz48L2c+PC9nPgogICAgICAgIDwvc3ZnPg==" />

    <link rel="mask-icon" href="./?icon_svg" color="#de11e7" />

    <link rel="apple-touch-icon" type="image/svg+xml" sizes="57x57 60x60 72x72 76x76 114x114 120x120 144x144 152x152 180x180 1857x57" href="./?icon_svg" />

    <link rel="apple-touch-icon-precomposed" type="image/svg+xml" sizes="57x57 60x60 72x72 76x76 114x114 120x120 144x144 152x152 180x180 1857x57" href="./?icon_svg" />

    <link rel="apple-touch-startup-image" type="image/svg+xml" href="./?icon_svg" />

    <link rel="image_src" type="image/svg+xml" data-width="300" data-height="250" href="./?icon_svg" />

    <link rel="fluid-icon" type="image/svg+xml" href="./?icon_svg" />

    <link rel="manifest" href="./?manifest" />

    <meta name="msapplication-TileImage" content="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KICAgICAgICA8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgogICAgICAgIDxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDEwMDAgMTAwMCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMTAwMCAxMDAwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICA8bWV0YWRhdGE+IFN2ZyBWZWN0b3IgSWNvbnMgOiBodHRwOi8vd3d3Lm9ubGluZXdlYmZvbnRzLmNvbS9pY29uIDwvbWV0YWRhdGE+CiAgICAgICAgPGc+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wMDAwMDAsNTExLjAwMDAwMCkgc2NhbGUoMC4xMDAwMDAsLTAuMTAwMDAwKSI+PHBhdGggZD0iTTkzNDQuOCwzNTIzLjRjLTEwMS45LTY3LjMtMTIxLjEtMTUxLjktNzMuMS0zMjQuOWMxNDQuMi01MjYuNywxOTIuMi04NjguOSwxOTIuMi0xMzcwLjdjMC02NzQuOC0xMTUuMy0xMjM5LjktMzc4LjctMTg3MC41Yy00NTkuNS0xMDk3LjctMTM4Mi4yLTIwMjAuNC0yNDg5LjUtMjQ5MS40Yy0xNzg0LTc1Ny40LTM4MzcuMS0zNTkuNS01MjA5LjcsMTAwNy4zYy0zMzAuNiwzMjguOC01ODguMyw2NjktNzk1LjksMTA0Ny43Yy05Mi4zLDE2OS4yLTEzNC42LDIxNy4yLTIxNS4zLDIzOC40QzIzOC40LTIwMi4yLDEwMC0yOTguMywxMDAtNDMxYzAtNjEuNSwxMzguNC0zMTcuMiwzMTUuMy01ODYuM2M3OTQtMTIwMy40LDIwMzcuNy0yMDEyLjgsMzQ3MS45LTIyNTYuOWMxNjE4LjctMjc2LjgsMzMxMC40LDI2MS41LDQ0NzcuMywxNDIwLjdDOTY3My41LTU1MC4yLDEwMTkyLjYsMTMyMC4zLDk3MzguOSwzMTEyYy03Ni45LDMwNS43LTExNS40LDM5MC4yLTE4OC40LDQyNC44Qzk0NjIuMSwzNTc5LjEsOTQyMS43LDM1NzUuMyw5MzQ0LjgsMzUyMy40eiIvPjxwYXRoIGQ9Ik04MzQ3LjEsMzExNy44Yy0yNzguOC0xMDcuNy0yNzc5LjgtMTE1My40LTI4MTguMi0xMTc2LjVjLTEwMC02Ny4zLTc4LjgtMTkyLjIsNDQuMi0yNTMuOGM0MC40LTIxLjEsNjkyLjEtMjk0LjEsMTQ0OS41LTYwNy41YzE0OTUuNi02MTksMTQ3MC42LTYxMS4zLDE2NDMuNy01MzIuNWMxNDIuMyw2NS40LDE4NC42LDE1My44LDI1OS41LDU0OS44YzUwLDI2NS4zLDcxLjEsODg2LjIsMzguNCwxMTgwLjNjLTI4LjgsMjY5LjEtOTIuMyw1NzEtMTM4LjQsNjY3LjFjLTU1LjcsMTE1LjMtMTY1LjMsMTg2LjUtMzAxLjgsMTk0LjJDODQ2NC4zLDMxNDAuOCw4MzgzLjYsMzEzMy4xLDgzNDcuMSwzMTE3Ljh6Ii8+PHBhdGggZD0iTTI2MjkuOSw3NTMuMkMxODA3LjEsNDExLDEyMDEuNSwxNDkuNiwxMTYzLjEsMTE2LjljLTkyLjMtNzMuMS0xNDgtMjAxLjktMTM2LjUtMzE5LjFjMjUtMjU3LjYsNjUzLjYtMTAwOS4zLDExNDkuNi0xMzc0LjVjMzY1LjMtMjcxLjEsNDg0LjQtMzI0LjksNjQ0LTI5Mi4yYzg4LjQsMTcuMywyMDcuNiwxMDcuNiwyNDgsMTg2LjVjNzYuOSwxNDYuMSwxMTg0LjIsMjg1MC45LDExODQuMiwyODg5LjRjMCwyNS0xMy41LDY1LjQtMzAuOCw4OC40QzQxNjAuMSwxMzgzLjgsNDExNS45LDEzNzAuMywyNjI5LjksNzUzLjJ6Ii8+PHBhdGggZD0iTTUyNDIuNCwxMzA0LjljLTI1LTIzLjEtMzAuOC01My44LTIzLjEtMTA5LjZjMTMuNS0xMjUsMTE1MS41LTI4NTAuOSwxMjI2LjUtMjk0MS4zYzc1LTg4LjQsMTY3LjMtMTMwLjcsMjg4LjQtMTMwLjdjMTA1LjcsMS45LDE1NS43LDI1LDM4Ni40LDE4MC43YzQzOC4zLDI5Mi4yLDg1OS4zLDcxOSwxMTU3LjMsMTE2OC44YzEzOC40LDIwOS42LDE3MywyOTkuOSwxNTcuNiw0MTEuNEM4NDE4LjItOC4xLDgzMzEuNywxMTUsODIzMy43LDE2M2MtNDAuNCwyMS4xLTY5MC4xLDI5NC4xLTE0NDUuNiw2MDcuNUM1Mzc3LDEzNTMsNTMxMy41LDEzNzYuMSw1MjQyLjQsMTMwNC45eiIvPjxwYXRoIGQ9Ik00Njc5LjIsMTA4MS45Yy0yNS0xMS41LTYzLjQtNTUuOC04NC42LTk4Yy0yMy4xLTQ0LjItMjk2LTY5Mi4xLTYwNy41LTE0NDMuN2MtNTI2LjctMTI2Ni45LTU2Ny4xLTEzNzIuNi01NjktMTQ4NC4xYy0xLjktMTAxLjksNS44LTEyOC44LDU1LjctMTk5LjljODAuNy0xMTUuMywxNDQuMi0xNDYuMSw0MDUuNi0xOTkuOWM1NjktMTE1LjMsMTE0MC0xMTUuMywxNzA3LjEsMGMyNjEuNCw1My44LDM1NS42LDEwMy44LDQxMS40LDIxNy4yYzYxLjUsMTE5LjIsNjcuMywxOTkuOSwyNSwzMjQuOWMtMjEuMSw2MS41LTI4OC40LDcxNy4xLTU5NS45LDE0NTcuMkM0ODA3LjksMTE0Ny4zLDQ4MDkuOSwxMTQ1LjQsNDY3OS4yLDEwODEuOXoiLz48L2c+PC9nPgogICAgICAgIDwvc3ZnPg==">

    <meta name="msapplication-square70x70logo" content="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KICAgICAgICA8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgogICAgICAgIDxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDEwMDAgMTAwMCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMTAwMCAxMDAwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICA8bWV0YWRhdGE+IFN2ZyBWZWN0b3IgSWNvbnMgOiBodHRwOi8vd3d3Lm9ubGluZXdlYmZvbnRzLmNvbS9pY29uIDwvbWV0YWRhdGE+CiAgICAgICAgPGc+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wMDAwMDAsNTExLjAwMDAwMCkgc2NhbGUoMC4xMDAwMDAsLTAuMTAwMDAwKSI+PHBhdGggZD0iTTkzNDQuOCwzNTIzLjRjLTEwMS45LTY3LjMtMTIxLjEtMTUxLjktNzMuMS0zMjQuOWMxNDQuMi01MjYuNywxOTIuMi04NjguOSwxOTIuMi0xMzcwLjdjMC02NzQuOC0xMTUuMy0xMjM5LjktMzc4LjctMTg3MC41Yy00NTkuNS0xMDk3LjctMTM4Mi4yLTIwMjAuNC0yNDg5LjUtMjQ5MS40Yy0xNzg0LTc1Ny40LTM4MzcuMS0zNTkuNS01MjA5LjcsMTAwNy4zYy0zMzAuNiwzMjguOC01ODguMyw2NjktNzk1LjksMTA0Ny43Yy05Mi4zLDE2OS4yLTEzNC42LDIxNy4yLTIxNS4zLDIzOC40QzIzOC40LTIwMi4yLDEwMC0yOTguMywxMDAtNDMxYzAtNjEuNSwxMzguNC0zMTcuMiwzMTUuMy01ODYuM2M3OTQtMTIwMy40LDIwMzcuNy0yMDEyLjgsMzQ3MS45LTIyNTYuOWMxNjE4LjctMjc2LjgsMzMxMC40LDI2MS41LDQ0NzcuMywxNDIwLjdDOTY3My41LTU1MC4yLDEwMTkyLjYsMTMyMC4zLDk3MzguOSwzMTEyYy03Ni45LDMwNS43LTExNS40LDM5MC4yLTE4OC40LDQyNC44Qzk0NjIuMSwzNTc5LjEsOTQyMS43LDM1NzUuMyw5MzQ0LjgsMzUyMy40eiIvPjxwYXRoIGQ9Ik04MzQ3LjEsMzExNy44Yy0yNzguOC0xMDcuNy0yNzc5LjgtMTE1My40LTI4MTguMi0xMTc2LjVjLTEwMC02Ny4zLTc4LjgtMTkyLjIsNDQuMi0yNTMuOGM0MC40LTIxLjEsNjkyLjEtMjk0LjEsMTQ0OS41LTYwNy41YzE0OTUuNi02MTksMTQ3MC42LTYxMS4zLDE2NDMuNy01MzIuNWMxNDIuMyw2NS40LDE4NC42LDE1My44LDI1OS41LDU0OS44YzUwLDI2NS4zLDcxLjEsODg2LjIsMzguNCwxMTgwLjNjLTI4LjgsMjY5LjEtOTIuMyw1NzEtMTM4LjQsNjY3LjFjLTU1LjcsMTE1LjMtMTY1LjMsMTg2LjUtMzAxLjgsMTk0LjJDODQ2NC4zLDMxNDAuOCw4MzgzLjYsMzEzMy4xLDgzNDcuMSwzMTE3Ljh6Ii8+PHBhdGggZD0iTTI2MjkuOSw3NTMuMkMxODA3LjEsNDExLDEyMDEuNSwxNDkuNiwxMTYzLjEsMTE2LjljLTkyLjMtNzMuMS0xNDgtMjAxLjktMTM2LjUtMzE5LjFjMjUtMjU3LjYsNjUzLjYtMTAwOS4zLDExNDkuNi0xMzc0LjVjMzY1LjMtMjcxLjEsNDg0LjQtMzI0LjksNjQ0LTI5Mi4yYzg4LjQsMTcuMywyMDcuNiwxMDcuNiwyNDgsMTg2LjVjNzYuOSwxNDYuMSwxMTg0LjIsMjg1MC45LDExODQuMiwyODg5LjRjMCwyNS0xMy41LDY1LjQtMzAuOCw4OC40QzQxNjAuMSwxMzgzLjgsNDExNS45LDEzNzAuMywyNjI5LjksNzUzLjJ6Ii8+PHBhdGggZD0iTTUyNDIuNCwxMzA0LjljLTI1LTIzLjEtMzAuOC01My44LTIzLjEtMTA5LjZjMTMuNS0xMjUsMTE1MS41LTI4NTAuOSwxMjI2LjUtMjk0MS4zYzc1LTg4LjQsMTY3LjMtMTMwLjcsMjg4LjQtMTMwLjdjMTA1LjcsMS45LDE1NS43LDI1LDM4Ni40LDE4MC43YzQzOC4zLDI5Mi4yLDg1OS4zLDcxOSwxMTU3LjMsMTE2OC44YzEzOC40LDIwOS42LDE3MywyOTkuOSwxNTcuNiw0MTEuNEM4NDE4LjItOC4xLDgzMzEuNywxMTUsODIzMy43LDE2M2MtNDAuNCwyMS4xLTY5MC4xLDI5NC4xLTE0NDUuNiw2MDcuNUM1Mzc3LDEzNTMsNTMxMy41LDEzNzYuMSw1MjQyLjQsMTMwNC45eiIvPjxwYXRoIGQ9Ik00Njc5LjIsMTA4MS45Yy0yNS0xMS41LTYzLjQtNTUuOC04NC42LTk4Yy0yMy4xLTQ0LjItMjk2LTY5Mi4xLTYwNy41LTE0NDMuN2MtNTI2LjctMTI2Ni45LTU2Ny4xLTEzNzIuNi01NjktMTQ4NC4xYy0xLjktMTAxLjksNS44LTEyOC44LDU1LjctMTk5LjljODAuNy0xMTUuMywxNDQuMi0xNDYuMSw0MDUuNi0xOTkuOWM1NjktMTE1LjMsMTE0MC0xMTUuMywxNzA3LjEsMGMyNjEuNCw1My44LDM1NS42LDEwMy44LDQxMS40LDIxNy4yYzYxLjUsMTE5LjIsNjcuMywxOTkuOSwyNSwzMjQuOWMtMjEuMSw2MS41LTI4OC40LDcxNy4xLTU5NS45LDE0NTcuMkM0ODA3LjksMTE0Ny4zLDQ4MDkuOSwxMTQ1LjQsNDY3OS4yLDEwODEuOXoiLz48L2c+PC9nPgogICAgICAgIDwvc3ZnPg==">

    <meta name="msapplication-square150x150logo" content="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KICAgICAgICA8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgogICAgICAgIDxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDEwMDAgMTAwMCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMTAwMCAxMDAwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICA8bWV0YWRhdGE+IFN2ZyBWZWN0b3IgSWNvbnMgOiBodHRwOi8vd3d3Lm9ubGluZXdlYmZvbnRzLmNvbS9pY29uIDwvbWV0YWRhdGE+CiAgICAgICAgPGc+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wMDAwMDAsNTExLjAwMDAwMCkgc2NhbGUoMC4xMDAwMDAsLTAuMTAwMDAwKSI+PHBhdGggZD0iTTkzNDQuOCwzNTIzLjRjLTEwMS45LTY3LjMtMTIxLjEtMTUxLjktNzMuMS0zMjQuOWMxNDQuMi01MjYuNywxOTIuMi04NjguOSwxOTIuMi0xMzcwLjdjMC02NzQuOC0xMTUuMy0xMjM5LjktMzc4LjctMTg3MC41Yy00NTkuNS0xMDk3LjctMTM4Mi4yLTIwMjAuNC0yNDg5LjUtMjQ5MS40Yy0xNzg0LTc1Ny40LTM4MzcuMS0zNTkuNS01MjA5LjcsMTAwNy4zYy0zMzAuNiwzMjguOC01ODguMyw2NjktNzk1LjksMTA0Ny43Yy05Mi4zLDE2OS4yLTEzNC42LDIxNy4yLTIxNS4zLDIzOC40QzIzOC40LTIwMi4yLDEwMC0yOTguMywxMDAtNDMxYzAtNjEuNSwxMzguNC0zMTcuMiwzMTUuMy01ODYuM2M3OTQtMTIwMy40LDIwMzcuNy0yMDEyLjgsMzQ3MS45LTIyNTYuOWMxNjE4LjctMjc2LjgsMzMxMC40LDI2MS41LDQ0NzcuMywxNDIwLjdDOTY3My41LTU1MC4yLDEwMTkyLjYsMTMyMC4zLDk3MzguOSwzMTEyYy03Ni45LDMwNS43LTExNS40LDM5MC4yLTE4OC40LDQyNC44Qzk0NjIuMSwzNTc5LjEsOTQyMS43LDM1NzUuMyw5MzQ0LjgsMzUyMy40eiIvPjxwYXRoIGQ9Ik04MzQ3LjEsMzExNy44Yy0yNzguOC0xMDcuNy0yNzc5LjgtMTE1My40LTI4MTguMi0xMTc2LjVjLTEwMC02Ny4zLTc4LjgtMTkyLjIsNDQuMi0yNTMuOGM0MC40LTIxLjEsNjkyLjEtMjk0LjEsMTQ0OS41LTYwNy41YzE0OTUuNi02MTksMTQ3MC42LTYxMS4zLDE2NDMuNy01MzIuNWMxNDIuMyw2NS40LDE4NC42LDE1My44LDI1OS41LDU0OS44YzUwLDI2NS4zLDcxLjEsODg2LjIsMzguNCwxMTgwLjNjLTI4LjgsMjY5LjEtOTIuMyw1NzEtMTM4LjQsNjY3LjFjLTU1LjcsMTE1LjMtMTY1LjMsMTg2LjUtMzAxLjgsMTk0LjJDODQ2NC4zLDMxNDAuOCw4MzgzLjYsMzEzMy4xLDgzNDcuMSwzMTE3Ljh6Ii8+PHBhdGggZD0iTTI2MjkuOSw3NTMuMkMxODA3LjEsNDExLDEyMDEuNSwxNDkuNiwxMTYzLjEsMTE2LjljLTkyLjMtNzMuMS0xNDgtMjAxLjktMTM2LjUtMzE5LjFjMjUtMjU3LjYsNjUzLjYtMTAwOS4zLDExNDkuNi0xMzc0LjVjMzY1LjMtMjcxLjEsNDg0LjQtMzI0LjksNjQ0LTI5Mi4yYzg4LjQsMTcuMywyMDcuNiwxMDcuNiwyNDgsMTg2LjVjNzYuOSwxNDYuMSwxMTg0LjIsMjg1MC45LDExODQuMiwyODg5LjRjMCwyNS0xMy41LDY1LjQtMzAuOCw4OC40QzQxNjAuMSwxMzgzLjgsNDExNS45LDEzNzAuMywyNjI5LjksNzUzLjJ6Ii8+PHBhdGggZD0iTTUyNDIuNCwxMzA0LjljLTI1LTIzLjEtMzAuOC01My44LTIzLjEtMTA5LjZjMTMuNS0xMjUsMTE1MS41LTI4NTAuOSwxMjI2LjUtMjk0MS4zYzc1LTg4LjQsMTY3LjMtMTMwLjcsMjg4LjQtMTMwLjdjMTA1LjcsMS45LDE1NS43LDI1LDM4Ni40LDE4MC43YzQzOC4zLDI5Mi4yLDg1OS4zLDcxOSwxMTU3LjMsMTE2OC44YzEzOC40LDIwOS42LDE3MywyOTkuOSwxNTcuNiw0MTEuNEM4NDE4LjItOC4xLDgzMzEuNywxMTUsODIzMy43LDE2M2MtNDAuNCwyMS4xLTY5MC4xLDI5NC4xLTE0NDUuNiw2MDcuNUM1Mzc3LDEzNTMsNTMxMy41LDEzNzYuMSw1MjQyLjQsMTMwNC45eiIvPjxwYXRoIGQ9Ik00Njc5LjIsMTA4MS45Yy0yNS0xMS41LTYzLjQtNTUuOC04NC42LTk4Yy0yMy4xLTQ0LjItMjk2LTY5Mi4xLTYwNy41LTE0NDMuN2MtNTI2LjctMTI2Ni45LTU2Ny4xLTEzNzIuNi01NjktMTQ4NC4xYy0xLjktMTAxLjksNS44LTEyOC44LDU1LjctMTk5LjljODAuNy0xMTUuMywxNDQuMi0xNDYuMSw0MDUuNi0xOTkuOWM1NjktMTE1LjMsMTE0MC0xMTUuMywxNzA3LjEsMGMyNjEuNCw1My44LDM1NS42LDEwMy44LDQxMS40LDIxNy4yYzYxLjUsMTE5LjIsNjcuMywxOTkuOSwyNSwzMjQuOWMtMjEuMSw2MS41LTI4OC40LDcxNy4xLTU5NS45LDE0NTcuMkM0ODA3LjksMTE0Ny4zLDQ4MDkuOSwxMTQ1LjQsNDY3OS4yLDEwODEuOXoiLz48L2c+PC9nPgogICAgICAgIDwvc3ZnPg==">

    <meta name="msapplication-square310x310logo" content="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KICAgICAgICA8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgogICAgICAgIDxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDEwMDAgMTAwMCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMTAwMCAxMDAwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICA8bWV0YWRhdGE+IFN2ZyBWZWN0b3IgSWNvbnMgOiBodHRwOi8vd3d3Lm9ubGluZXdlYmZvbnRzLmNvbS9pY29uIDwvbWV0YWRhdGE+CiAgICAgICAgPGc+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wMDAwMDAsNTExLjAwMDAwMCkgc2NhbGUoMC4xMDAwMDAsLTAuMTAwMDAwKSI+PHBhdGggZD0iTTkzNDQuOCwzNTIzLjRjLTEwMS45LTY3LjMtMTIxLjEtMTUxLjktNzMuMS0zMjQuOWMxNDQuMi01MjYuNywxOTIuMi04NjguOSwxOTIuMi0xMzcwLjdjMC02NzQuOC0xMTUuMy0xMjM5LjktMzc4LjctMTg3MC41Yy00NTkuNS0xMDk3LjctMTM4Mi4yLTIwMjAuNC0yNDg5LjUtMjQ5MS40Yy0xNzg0LTc1Ny40LTM4MzcuMS0zNTkuNS01MjA5LjcsMTAwNy4zYy0zMzAuNiwzMjguOC01ODguMyw2NjktNzk1LjksMTA0Ny43Yy05Mi4zLDE2OS4yLTEzNC42LDIxNy4yLTIxNS4zLDIzOC40QzIzOC40LTIwMi4yLDEwMC0yOTguMywxMDAtNDMxYzAtNjEuNSwxMzguNC0zMTcuMiwzMTUuMy01ODYuM2M3OTQtMTIwMy40LDIwMzcuNy0yMDEyLjgsMzQ3MS45LTIyNTYuOWMxNjE4LjctMjc2LjgsMzMxMC40LDI2MS41LDQ0NzcuMywxNDIwLjdDOTY3My41LTU1MC4yLDEwMTkyLjYsMTMyMC4zLDk3MzguOSwzMTEyYy03Ni45LDMwNS43LTExNS40LDM5MC4yLTE4OC40LDQyNC44Qzk0NjIuMSwzNTc5LjEsOTQyMS43LDM1NzUuMyw5MzQ0LjgsMzUyMy40eiIvPjxwYXRoIGQ9Ik04MzQ3LjEsMzExNy44Yy0yNzguOC0xMDcuNy0yNzc5LjgtMTE1My40LTI4MTguMi0xMTc2LjVjLTEwMC02Ny4zLTc4LjgtMTkyLjIsNDQuMi0yNTMuOGM0MC40LTIxLjEsNjkyLjEtMjk0LjEsMTQ0OS41LTYwNy41YzE0OTUuNi02MTksMTQ3MC42LTYxMS4zLDE2NDMuNy01MzIuNWMxNDIuMyw2NS40LDE4NC42LDE1My44LDI1OS41LDU0OS44YzUwLDI2NS4zLDcxLjEsODg2LjIsMzguNCwxMTgwLjNjLTI4LjgsMjY5LjEtOTIuMyw1NzEtMTM4LjQsNjY3LjFjLTU1LjcsMTE1LjMtMTY1LjMsMTg2LjUtMzAxLjgsMTk0LjJDODQ2NC4zLDMxNDAuOCw4MzgzLjYsMzEzMy4xLDgzNDcuMSwzMTE3Ljh6Ii8+PHBhdGggZD0iTTI2MjkuOSw3NTMuMkMxODA3LjEsNDExLDEyMDEuNSwxNDkuNiwxMTYzLjEsMTE2LjljLTkyLjMtNzMuMS0xNDgtMjAxLjktMTM2LjUtMzE5LjFjMjUtMjU3LjYsNjUzLjYtMTAwOS4zLDExNDkuNi0xMzc0LjVjMzY1LjMtMjcxLjEsNDg0LjQtMzI0LjksNjQ0LTI5Mi4yYzg4LjQsMTcuMywyMDcuNiwxMDcuNiwyNDgsMTg2LjVjNzYuOSwxNDYuMSwxMTg0LjIsMjg1MC45LDExODQuMiwyODg5LjRjMCwyNS0xMy41LDY1LjQtMzAuOCw4OC40QzQxNjAuMSwxMzgzLjgsNDExNS45LDEzNzAuMywyNjI5LjksNzUzLjJ6Ii8+PHBhdGggZD0iTTUyNDIuNCwxMzA0LjljLTI1LTIzLjEtMzAuOC01My44LTIzLjEtMTA5LjZjMTMuNS0xMjUsMTE1MS41LTI4NTAuOSwxMjI2LjUtMjk0MS4zYzc1LTg4LjQsMTY3LjMtMTMwLjcsMjg4LjQtMTMwLjdjMTA1LjcsMS45LDE1NS43LDI1LDM4Ni40LDE4MC43YzQzOC4zLDI5Mi4yLDg1OS4zLDcxOSwxMTU3LjMsMTE2OC44YzEzOC40LDIwOS42LDE3MywyOTkuOSwxNTcuNiw0MTEuNEM4NDE4LjItOC4xLDgzMzEuNywxMTUsODIzMy43LDE2M2MtNDAuNCwyMS4xLTY5MC4xLDI5NC4xLTE0NDUuNiw2MDcuNUM1Mzc3LDEzNTMsNTMxMy41LDEzNzYuMSw1MjQyLjQsMTMwNC45eiIvPjxwYXRoIGQ9Ik00Njc5LjIsMTA4MS45Yy0yNS0xMS41LTYzLjQtNTUuOC04NC42LTk4Yy0yMy4xLTQ0LjItMjk2LTY5Mi4xLTYwNy41LTE0NDMuN2MtNTI2LjctMTI2Ni45LTU2Ny4xLTEzNzIuNi01NjktMTQ4NC4xYy0xLjktMTAxLjksNS44LTEyOC44LDU1LjctMTk5LjljODAuNy0xMTUuMywxNDQuMi0xNDYuMSw0MDUuNi0xOTkuOWM1NjktMTE1LjMsMTE0MC0xMTUuMywxNzA3LjEsMGMyNjEuNCw1My44LDM1NS42LDEwMy44LDQxMS40LDIxNy4yYzYxLjUsMTE5LjIsNjcuMywxOTkuOSwyNSwzMjQuOWMtMjEuMSw2MS41LTI4OC40LDcxNy4xLTU5NS45LDE0NTcuMkM0ODA3LjksMTE0Ny4zLDQ4MDkuOSwxMTQ1LjQsNDY3OS4yLDEwODEuOXoiLz48L2c+PC9nPgogICAgICAgIDwvc3ZnPg==">

    <meta name="msapplication-wide310x150logo" content="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KICAgICAgICA8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgogICAgICAgIDxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDEwMDAgMTAwMCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMTAwMCAxMDAwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4KICAgICAgICA8bWV0YWRhdGE+IFN2ZyBWZWN0b3IgSWNvbnMgOiBodHRwOi8vd3d3Lm9ubGluZXdlYmZvbnRzLmNvbS9pY29uIDwvbWV0YWRhdGE+CiAgICAgICAgPGc+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wMDAwMDAsNTExLjAwMDAwMCkgc2NhbGUoMC4xMDAwMDAsLTAuMTAwMDAwKSI+PHBhdGggZD0iTTkzNDQuOCwzNTIzLjRjLTEwMS45LTY3LjMtMTIxLjEtMTUxLjktNzMuMS0zMjQuOWMxNDQuMi01MjYuNywxOTIuMi04NjguOSwxOTIuMi0xMzcwLjdjMC02NzQuOC0xMTUuMy0xMjM5LjktMzc4LjctMTg3MC41Yy00NTkuNS0xMDk3LjctMTM4Mi4yLTIwMjAuNC0yNDg5LjUtMjQ5MS40Yy0xNzg0LTc1Ny40LTM4MzcuMS0zNTkuNS01MjA5LjcsMTAwNy4zYy0zMzAuNiwzMjguOC01ODguMyw2NjktNzk1LjksMTA0Ny43Yy05Mi4zLDE2OS4yLTEzNC42LDIxNy4yLTIxNS4zLDIzOC40QzIzOC40LTIwMi4yLDEwMC0yOTguMywxMDAtNDMxYzAtNjEuNSwxMzguNC0zMTcuMiwzMTUuMy01ODYuM2M3OTQtMTIwMy40LDIwMzcuNy0yMDEyLjgsMzQ3MS45LTIyNTYuOWMxNjE4LjctMjc2LjgsMzMxMC40LDI2MS41LDQ0NzcuMywxNDIwLjdDOTY3My41LTU1MC4yLDEwMTkyLjYsMTMyMC4zLDk3MzguOSwzMTEyYy03Ni45LDMwNS43LTExNS40LDM5MC4yLTE4OC40LDQyNC44Qzk0NjIuMSwzNTc5LjEsOTQyMS43LDM1NzUuMyw5MzQ0LjgsMzUyMy40eiIvPjxwYXRoIGQ9Ik04MzQ3LjEsMzExNy44Yy0yNzguOC0xMDcuNy0yNzc5LjgtMTE1My40LTI4MTguMi0xMTc2LjVjLTEwMC02Ny4zLTc4LjgtMTkyLjIsNDQuMi0yNTMuOGM0MC40LTIxLjEsNjkyLjEtMjk0LjEsMTQ0OS41LTYwNy41YzE0OTUuNi02MTksMTQ3MC42LTYxMS4zLDE2NDMuNy01MzIuNWMxNDIuMyw2NS40LDE4NC42LDE1My44LDI1OS41LDU0OS44YzUwLDI2NS4zLDcxLjEsODg2LjIsMzguNCwxMTgwLjNjLTI4LjgsMjY5LjEtOTIuMyw1NzEtMTM4LjQsNjY3LjFjLTU1LjcsMTE1LjMtMTY1LjMsMTg2LjUtMzAxLjgsMTk0LjJDODQ2NC4zLDMxNDAuOCw4MzgzLjYsMzEzMy4xLDgzNDcuMSwzMTE3Ljh6Ii8+PHBhdGggZD0iTTI2MjkuOSw3NTMuMkMxODA3LjEsNDExLDEyMDEuNSwxNDkuNiwxMTYzLjEsMTE2LjljLTkyLjMtNzMuMS0xNDgtMjAxLjktMTM2LjUtMzE5LjFjMjUtMjU3LjYsNjUzLjYtMTAwOS4zLDExNDkuNi0xMzc0LjVjMzY1LjMtMjcxLjEsNDg0LjQtMzI0LjksNjQ0LTI5Mi4yYzg4LjQsMTcuMywyMDcuNiwxMDcuNiwyNDgsMTg2LjVjNzYuOSwxNDYuMSwxMTg0LjIsMjg1MC45LDExODQuMiwyODg5LjRjMCwyNS0xMy41LDY1LjQtMzAuOCw4OC40QzQxNjAuMSwxMzgzLjgsNDExNS45LDEzNzAuMywyNjI5LjksNzUzLjJ6Ii8+PHBhdGggZD0iTTUyNDIuNCwxMzA0LjljLTI1LTIzLjEtMzAuOC01My44LTIzLjEtMTA5LjZjMTMuNS0xMjUsMTE1MS41LTI4NTAuOSwxMjI2LjUtMjk0MS4zYzc1LTg4LjQsMTY3LjMtMTMwLjcsMjg4LjQtMTMwLjdjMTA1LjcsMS45LDE1NS43LDI1LDM4Ni40LDE4MC43YzQzOC4zLDI5Mi4yLDg1OS4zLDcxOSwxMTU3LjMsMTE2OC44YzEzOC40LDIwOS42LDE3MywyOTkuOSwxNTcuNiw0MTEuNEM4NDE4LjItOC4xLDgzMzEuNywxMTUsODIzMy43LDE2M2MtNDAuNCwyMS4xLTY5MC4xLDI5NC4xLTE0NDUuNiw2MDcuNUM1Mzc3LDEzNTMsNTMxMy41LDEzNzYuMSw1MjQyLjQsMTMwNC45eiIvPjxwYXRoIGQ9Ik00Njc5LjIsMTA4MS45Yy0yNS0xMS41LTYzLjQtNTUuOC04NC42LTk4Yy0yMy4xLTQ0LjItMjk2LTY5Mi4xLTYwNy41LTE0NDMuN2MtNTI2LjctMTI2Ni45LTU2Ny4xLTEzNzIuNi01NjktMTQ4NC4xYy0xLjktMTAxLjksNS44LTEyOC44LDU1LjctMTk5LjljODAuNy0xMTUuMywxNDQuMi0xNDYuMSw0MDUuNi0xOTkuOWM1NjktMTE1LjMsMTE0MC0xMTUuMywxNzA3LjEsMGMyNjEuNCw1My44LDM1NS42LDEwMy44LDQxMS40LDIxNy4yYzYxLjUsMTE5LjIsNjcuMywxOTkuOSwyNSwzMjQuOWMtMjEuMSw2MS41LTI4OC40LDcxNy4xLTU5NS45LDE0NTcuMkM0ODA3LjksMTE0Ny4zLDQ4MDkuOSwxMTQ1LjQsNDY3OS4yLDEwODEuOXoiLz48L2c+PC9nPgogICAgICAgIDwvc3ZnPg==">

    <meta name="msapplication-config" content="none">


    <style type="text/css" id="default_styles">

      html, body {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        height: 100%;
        padding: 0;
        margin: 0;
      }
      body > *:not(script) {
        display: block;
        padding: 2px;
        outline: solid 2px #333;
      }
      body > header {
        height: 50px;
        outline-color: blue;
      }
      body > header > nav,
      body > header nav > ul,
      body > header nav > ul > li {
        height: 100%;
        width: 100%;
      }
      body > header > nav {
        background: blue;
      }
      body > header > nav > ul {
        padding: 0;
        margin: 0;
      }
      body > header > nav > ul li {
        display: inline-block;
        float: left;
        width: 20%;
        padding: 0;
        margin: 0;
        outline: solid 2px orange;
      }
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      #png-container, canvas {
	position: absolute;
	top: 0px;
	width: 50%;
	height: 350px;
}
canvas {
	right: 0px;
}















    </style>

  </head>


<body id="web3_webapp">
<img height="100" width="100" src="https://pwa.thedesignlabproject.com/floop.php?icon_png">
  <header id="menu">
    <nav>
      <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </nav>
  </header>
  
  <?
   if (substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], "?") + 1) === "svg_test") {
        $js = <<< JS_DATA
            <script>
                (async function(){
                    let svg_data_request = await fetch('./?icon_svg')
                    let svg_data = await svg_data_request.text()
                    let svg_elem = new DOMParser().parseFromString(svg_data, "image/svg+xml")
                    svg_elem.firstElementChild.style.width = "100px"
                    svg_elem.firstElementChild.style.height = "auto"
                    svg_elem.firstElementChild.style.visibility = "hidden"
                    svg_elem.firstElementChild.style.position = "fixed"
                    svg_elem.firstElementChild.style.top = "-10000px"
                    svg_elem.firstElementChild.id = "svg_size_elem"

                    var canvas = document.createElement("canvas")
                    var ctx = canvas.getContext("2d")
                    var DOMURL = self.URL || self.webkitURL || self
                    var img = new Image();
                    var svg = new Blob([svg_data], {type: "image/svg+xml;charset=utf-8"})
                    var url = DOMURL.createObjectURL(svg)

                    img.onload = function() {
                        document.body.append(svg_elem.firstElementChild)
                        let svg_dimensions = document.getElementById("svg_size_elem").getBoundingClientRect()
                        document.getElementById("svg_size_elem").remove()

                        canvas.height = svg_dimensions.height
                        canvas.width = svg_dimensions.width
                        ctx.drawImage(img, 0, 0)

                        canvas.toBlob(function(blob){

                            var form_data = new FormData()
                            form_data.append('png_data', blob)

                            fetch('./?svg_png', {
                                method: 'POST',
                                body: form_data
                            })

                            

                        }, "image/png")
                        
                        DOMURL.revokeObjectURL(png)
                        
                    }
                    img.src = url

                })()
            </script>
        JS_DATA;
        echo $js;
    }
    ?>

  <main id="interface">
    <section></section>
    <footer></footer>
  </main>

  <footer id="footer">
    <script type="text/javascript">

    </script>
  </footer>

</body>
</html>

<? } ?>