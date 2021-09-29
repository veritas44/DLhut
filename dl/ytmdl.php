<?php
error_reporting(0);
$urlx = $_SERVER['REQUEST_URI'];
$video_id = explode("sdl=", $urlx);
$video_id = $video_id[1];
$lloc = urldecode($video_id);
$llocf = urlencode($video_id);
include("../config.php");
preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|shorts|user)\/))([^\?&\"'>]+)/", $lloc, $matches);
$f = $_GET['f'];
$q = $_GET['q'];
$urlv = "https://dlhut.000webhostapp.com/api/yt.php?sdl=https://youtube.com/watch?v=$matches[1]";
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_HEADER, 0); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_URL, $urlv); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
curl_setopt($ch, CURLOPT_VERBOSE, 0); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
$curlResource = curl_exec($ch);
curl_close($ch); 
$vidData = json_decode($curlResource); 
$vidVals = json_decode( 
json_encode($vidData), true);
$title = $vidVals['data']['title'];
$thumb = $vidVals['data']['thumb'];
$fhd = $vidVals['data']['fullhd']; 
$hd = $vidVals['data']['hd']; 
$p480 = $vidVals['data']['p480'];
$p360 = $vidVals['data']['p360'];
$p240 = $vidVals['data']['p240'];
$p144 = $vidVals['data']['p144'];
$p3gp = $vidVals['data']['p3gp']; 
$mp3 = $vidVals['data']['mp3'];
$m4a = $vidVals['data']['m4a'];
$dl = $vidVals['data']['dl'];
$error = $vidVals['data']['error'];
if(!empty($thumb)){
    $thumbux = $thumb;
} else $thumbux = "https://dlhut.000webhostapp.com/img/logo.png";
?>
<!DOCTYPE html>
<html>
<head>
    <title>YavDL: Download : <?php echo $title; ?> .. </title>
<meta name="title" content="DLHUT : Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
<meta name="description" content="DLHUT :  Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta name="keywords" content="Video,Audio, Downloader, Online, YouTube, Facebook, Twitter, TikTok, MXTakatak, All-in-One,Online Downloader,AIO,<?php echo $title; ?>">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="5 days">
<meta name="author" content="TheOfficialVKr">
<meta itemprop="name" content="DLHUT :  Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
<meta itemprop="description" content="Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta itemprop="image" content="<?php echo $thumbux; ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="DLHUT - Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
<meta name="twitter:description" content="Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta name="twitter:site" content="theofficialvkr">
<meta name="twitter:creator" content="itsmethevkr">
<meta name="twitter:image" content="<?php echo $thumbux; ?>"> 
<meta property="og:title" content="DLHUT :  Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
<meta property="og:description" content="Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta property="og:image" content="<?php echo $thumbux; ?>">
<meta name="twitter:image:src" content="http://dlhut.ml/stream.php?sdl=<?php echo $thumbux; ?>">
<meta property="og:url" content="https://dlhut.000webhostapp.com/">
<meta property="og:site_name" content="DLHUT :  Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
<meta property="fb:app_id" content="427710135379286">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo $domain; ?>/img/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $domain; ?>/img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $domain; ?>/img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $domain; ?>/img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $domain; ?>/img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $domain; ?>/img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $domain; ?>/img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $domain; ?>/img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $domain; ?>/img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $domain; ?>/img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $domain; ?>/img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $domain; ?>/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $domain; ?>/img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $domain; ?>/img/favicon-16x16.png">
<link rel="manifest" href="<?php echo $domain; ?>/inc/manifest.json">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
<script type='text/javascript'>
if ('serviceWorker' in navigator) { navigator.serviceWorker.register('/inc/service-worker.js') }
</script>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=614490edfeb2560019eec6d8&product=sop' async='async'></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style type="text/css">
  html, body
  {
    font-family: "Gotu"
  }
  input
  {
    padding: 5px;
    border-radius: 10px;
    border-style: solid;
    border-color: blue;
    transition-duration: 0.5s;
    width: 80%;
  }
  input:focus
  {
    border-color: skyblue;
    transition-duration: 0.5s;
  }
</style>
 </head>
<body style="word-break: break-all;" class="bg-light">
   <div class="text-center p-5">
       		<a href="<?php echo $domain; ?>/">	<img src="<?php echo $domain; ?>/img/logo.png" width="200px" height="90px"></a>
  </div>
      <div class="text-center">
   <h2> Paste a video url or name below and press on "Download". </h2><br><br>
<form action="<?php echo $domain; ?>/sf.php" method="GET" class="mt-2">
      <input required type="text" placeholder="Video URL or Name" class="mb-3" name="sdl"  value=""><br><br>
      <button class="btn btn-success" type="submit">Download</button>
</form>
</div>
<div class="m-5">
    
    
<center>
    <h1> How to Download </h1> <br>
    1. To Download Instagram story search Like this - igs@USERNAME
    <br>
    2. To Download Instagram Highlights search Like this - igh@USERNAME 
    <br>
    3. To Download YouTube music search Like this - ytm@Music Name
    <br>
    4. To search Youtube video normally put video name in search box .   
    <br>
    5. Apart from all this just put link in search box to Download normally.
   

        <!-- ShareThis BEGIN --><div class="sharethis-inline-follow-buttons"></div><!-- ShareThis END --><br>
<h2>    
Download : <?php echo $title; ?> <?php echo $error; ?>  
</h2> 
<br>
<video poster="<?php echo $thumbux; ?>" width="100%" height="340" controls>
 <source src="https://dlhut.000webhostapp.com/api/yt/dl/download.php?sdl=https://youtube.com/watch?v=<?php echo $matches[1]; ?>&f=mp4&q=360p" type="video/mp4">
  Your browser does not support the video tag.
</video> 
<br>
Audio Format
<?php

if(!empty($title)){
    echo '<br>
<a href="https://dlhut.000webhostapp.com/api/yt/dl/download.php?sdl=https://youtube.com/watch?v='.$matches[1].'&f=mp3&q=128">
<button style="width:100%;"  class="btn btn-success"> Download  MP3 in 320 kbps - '.$mp3.'  </button></a><br>';
}
else echo ''; 


if(!empty($m4a)){
    echo '<br>
<a href="https://dlhut.000webhostapp.com/api/yt/dl/download.php?sdl=https://youtube.com/watch?v='.$matches[1].'&f=m4a&q=128">
<button style="width:100%;"  class="btn btn-success"> Download M4A in - '.$m4a.'  </button></a><br>';
}
else echo ''; 

 if(!empty($matches[1])){
    echo '<br> Download Audio in Webm
<iframe style="width:96%; height:55px; border:0px;" scrolling="no" src="https://dlhut.000webhostapp.com/dl/btn.php/?f=webm&sdl=https://youtu.be/'.$matches[1].'">
</iframe><br>';
}
else echo ''; 
 if(!empty($matches[1])){
    echo '<br> Download Audio in Wav
<iframe style="width:96%; height:55px; border:0px;" scrolling="no" src="https://dlhut.000webhostapp.com/dl/btn.php/?f=wav&sdl=https://youtu.be/'.$matches[1].'">
</iframe><br>';
}
else echo ''; 
?>
 Video Format 
<?php
if(!empty($hd)){
    echo '<br>
<a href="https://dlhut.000webhostapp.com/api/yt/dl/download.php?sdl=https://youtube.com/watch?v='.$matches[1].'&f=mp4&q=720p">
<button style="width:100%;"  class="btn btn-success"> Download MP4 in 720P - '.$hd.' </button></a><br>';
}
else echo '';

if(!empty($p360)){
    echo '<br>
<a href="https://dlhut.000webhostapp.com/api/yt/dl/download.php?sdl=https://youtube.com/watch?v='.$matches[1].'&f=mp4&q=360p">
<button style="width:100%;"  class="btn btn-success"> Download MP4 in 360P - '.$p360.'  </button></a><br>';
}
else echo ''; 
 

if(!empty($title)){
    echo '<br>
<a href="https://dlhut.000webhostapp.com/api/yt/dl/download.php?sdl=https://youtube.com/watch?v='.$matches[1].'&f=3gp&q=144p">
<button style="width:100%;"  class="btn btn-success"> Download 3GP in 144P - '.$p3gp.'  </button></a><br>';
}
else echo ""; 
?>     
    
<br><a href="<?php echo $domain; ?>/dl/?sdl=<?php echo $lloc; ?>">
<button style="width:100%;"  class="btn btn-success"> More Format </button></a><br>  
</h2><br><!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
<br>
<div id="google_translate_element"></div>
    <script type="text/javascript">   function googleTranslateElementInit() {   new google.translate.TranslateElement({pageLanguage: 'en'},'google_translate_element' ); }  
</script> <script type="text/javascript" src= 
"https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"> 
 </script> </center>
  <br>
  </div>  
</div>    
<div class="bg-dark text-white" style="bottom: 0;width: 100%;padding:12px">Developed by <a target="_blank" href="https://www.instagram.com/theofficialvkr">Vijay Kumar</a> <span style="float: right;">Copyright &copy; <?php echo date("Y"); ?></span><br> .</div><script type="text/javascript">
   window.setInterval(function(){        if ($("input[name='sdl']").attr("placeholder") == "Video URL or Name") {            $("input[name='sdl']").attr("placeholder", "Video URL or Name");        }        else        {            $("input[name='sdl']").attr("placeholder", "Video URL or Name");        }    }, 3000);
    </script>    
</body>  
<style type="text/css">
img[src*="000webhost"][style],
body > div:nth-last-of-type(1)[style]{
  opacity: 0 !important;
  pointer-events:none !important;
  width: 0px !important;
  height: 0px !important;
  visibility:hidden !important;
  display:none !important;
}
img[src*="http://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none;}
img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none;}
</style>
</html> 
