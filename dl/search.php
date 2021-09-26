<!DOCTYPE html>
<html>
<head>    
<?php
error_reporting(0);
$urlx = $_SERVER['REQUEST_URI'];
$video_id = explode("sdl=", $urlx);
$video_id = $video_id[1];
$lloc = urldecode($video_id);
$llocf = urlencode($video_id);
preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|shorts|user)\/))([^\?&\"'>]+)/", $lloc, $matches);
$urlv = 'https://dlhut.000webhostapp.com/api/search.php/?sdl='.$llocf;
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
$search = urldecode($vidVals['data']['search']);     
$ida = $vidVals['data']['a']['id']; 
$titlea = $vidVals['data']['a']['title']; 
$thumba = $vidVals['data']['a']['thumb'];   
 $idb = $vidVals['data']['b']['id']; 
$titleb = $vidVals['data']['b']['title']; 
$thumbb = $vidVals['data']['b']['thumb'];  
$idc = $vidVals['data']['c']['id']; 
$titlec = $vidVals['data']['c']['title']; 
$thumbc = $vidVals['data']['c']['thumb'];  
$idd = $vidVals['data']['d']['id']; 
$titled = $vidVals['data']['d']['title']; 
$thumbd = $vidVals['data']['d']['thumb'];  
$ide = $vidVals['data']['e']['id']; 
$titlee = $vidVals['data']['e']['title']; 
$thumbe = $vidVals['data']['e']['thumb'];  
$idf = $vidVals['data']['f']['id']; 
$titlef = $vidVals['data']['f']['title']; 
$thumbf = $vidVals['data']['f']['thumb'];  
$idg = $vidVals['data']['g']['id']; 
$titleg = $vidVals['data']['g']['title']; 
$thumbg = $vidVals['data']['g']['thumb'];  
$idh = $vidVals['data']['h']['id']; 
$titleh = $vidVals['data']['h']['title']; 
$thumbh = $vidVals['data']['h']['thumb'];  
$idi = $vidVals['data']['i']['id']; 
$titlei = $vidVals['data']['i']['title']; 
$thumbi = $vidVals['data']['i']['thumb'];  
$idj = $vidVals['data']['j']['id']; 
$titlej = $vidVals['data']['j']['title']; 
$thumbj = $vidVals['data']['j']['thumb'];  
$idk = $vidVals['data']['k']['id']; 
$titlek = $vidVals['data']['k']['title']; 
$thumbk = $vidVals['data']['k']['thumb'];  
$idl = $vidVals['data']['l']['id']; 
$titlel = $vidVals['data']['l']['title']; 
$thumbl = $vidVals['data']['l']['thumb'];  
$idm = $vidVals['data']['m']['id']; 
$titlem = $vidVals['data']['m']['title']; 
$thumbm = $vidVals['data']['m']['thumb'];  
$idn = $vidVals['data']['n']['id']; 
$titlen = $vidVals['data']['n']['title']; 
$thumbn = $vidVals['data']['n']['thumb'];  
$ido = $vidVals['data']['o']['id']; 
$titleo = $vidVals['data']['o']['title']; 
$thumbo = $vidVals['data']['o']['thumb'];  
$idp = $vidVals['data']['p']['id']; 
$titlep = $vidVals['data']['p']['title']; 
$thumbp = $vidVals['data']['p']['thumb'];  
$idq = $vidVals['data']['q']['id']; 
$titleq = $vidVals['data']['q']['title']; 
$thumbq = $vidVals['data']['q']['thumb'];  
$idr = $vidVals['data']['r']['id']; 
$titler = $vidVals['data']['r']['title']; 
$thumbr = $vidVals['data']['r']['thumb'];  
$ids = $vidVals['data']['s']['id']; 
$titles = $vidVals['data']['s']['title']; 
$thumbs = $vidVals['data']['s']['thumb'];  
$idt = $vidVals['data']['t']['id']; 
$titlet = $vidVals['data']['t']['title']; 
$thumbt = $vidVals['data']['t']['thumb'];  
$idu = $vidVals['data']['u']['id']; 
$titleu = $vidVals['data']['u']['title']; 
$thumbu = $vidVals['data']['u']['thumb'];  
$idv = $vidVals['data']['v']['id']; 
$titlev = $vidVals['data']['v']['title']; 
$thumbv = $vidVals['data']['v']['thumb'];  
$idw = $vidVals['data']['w']['id']; 
$titlew = $vidVals['data']['w']['title']; 
$thumbw = $vidVals['data']['w']['thumb'];  
$idx = $vidVals['data']['x']['id']; 
$titlex = $vidVals['data']['x']['title']; 
$thumbx = $vidVals['data']['x']['thumb'];  
$idy = $vidVals['data']['y']['id']; 
$titley = $vidVals['data']['y']['title']; 
$thumby = $vidVals['data']['y']['thumb'];  
$idz = $vidVals['data']['z']['id']; 
$titlez = $vidVals['data']['z']['title']; 
$thumbz = $vidVals['data']['z']['thumb'];  
$thumbux = "https://dlhut.000webhostapp.com/img/logo.png";  
?>
<title>DLHUT : Search Result For -  <?php echo $search; ?> : Online All in One Video & Audio Downloader</title>
<meta name="title" content="DLHUT : Search Result For -  <?php echo $search; ?> :  Online All in One Video & Audio Downloader">
<meta name="description" content="DLHUT :  Search Result For -  <?php echo $search; ?> :  Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta name="keywords" content="Video,Audio, Downloader, Online, YouTube, Facebook, Twitter, TikTok, MXTakatak, All-in-One,Online Downloader,AIO,<?php echo $search; ?>">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="5 days">
<meta name="author" content="TheOfficialVKr">
<meta itemprop="name" content="DLHUT :  Search Result For -  <?php echo $search; ?> :  Online All in One Video & Audio Downloader">
<meta itemprop="description" content="Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta itemprop="image" content="<?php echo $thumbux; ?>">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="DLHUT :  Search Result For -  <?php echo $search; ?> :  Online All in One Video & Audio Downloader">
<meta name="twitter:description" content="Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta name="twitter:site" content="theofficialvkr">
<meta name="twitter:creator" content="itsmethevkr">
<meta name="twitter:image:src" content="http://dlhut.ml/stream.php?sdl=<?php echo $thumbux; ?>">
<meta property="og:title" content="DLHUT :  Search Result For -  <?php echo $search; ?> :  Online All in One Video & Audio Downloader">
<meta property="og:description" content="Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta property="og:image" content="<?php echo $thumbux; ?>">
<meta property="og:url" content="https://dlhut.000webhostapp.com/">
<meta property="og:site_name" content="DLHUT :  Search Result For -  <?php echo $search; ?> :  Online All in One Video & Audio Downloader">
<meta property="fb:app_id" content="427710135379286">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/img/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
<link rel="apple-touch-icon" sizes="57x57" href="/img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
<link rel="manifest" href="/inc/manifest.json">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
<script type='text/javascript'>
if ('serviceWorker' in navigator) { navigator.serviceWorker.register('/inc/service-worker.js') }
</script>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=614490edfeb2560019eec6d8&product=sop' async='async'></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style type="text/css">  html, body  {    font-family: "Gotu"  }  input  {    padding: 5px;    border-radius: 10px;    border-style: solid;    border-color: blue;    transition-duration: 0.5s;    width: 80%;  }  input:focus  {    border-color: skyblue;    transition-duration: 0.5s;  }
</style>
</head>
<body style="word-break: break-all;" class="bg-light">  <div class="text-center p-5">    <a href="/">  <img src="/img/logo.png" width="200px" height="90px"></a>  </div> 

    <div class="text-center">
   <h2> Paste a video url or name below and press on "Download". </h2><br><br>
<form action="/sf.php" method="GET" class="mt-2">
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
<h2 style="word-break: break-all;">      
Result For <?php echo $search; ?>  
<?php if(!empty($titlea)){   echo '
<br>
<img src="'.$thumba.'" style="width:100%; height:340px;">    
<br> '.$titlea.'  <br>
<a href="/dl/yt.php/?sdl='.$ida.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titleb)){    echo '  <br>
<img src="'.$thumbb.'" style="width:100%; height:340px;">    
<br>
'.$titleb.'  <br>
<a href="/dl/yt.php/?sdl='.$idb.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';   if(!empty($titlec)){    echo '  <br>
<img src="'.$thumbc.'" style="width:100%; height:340px;">    
<br>
'.$titlec.'  <br>
<a href="/dl/yt.php/?sdl='.$idc.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';   if(!empty($titled)){    echo '  <br>
<img src="'.$thumbd.'" style="width:100%; height:340px;">    
<br>
'.$titled.'  <br>
<a href="/dl/yt.php/?sdl='.$idd.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';   if(!empty($titlee)){    echo '  <br>
<img src="'.$thumbe.'" style="width:100%; height:340px;">    
<br>
'.$titlee.'  <br>
<a href="/dl/yt.php/?sdl='.$ide.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';   if(!empty($titlef)){    echo '  <br>
<img src="'.$thumbf.'" style="width:100%; height:340px;">    
<br>
'.$titlef.'  <br>
<a href="/dl/yt.php/?sdl='.$idf.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titleg)){    echo '  <br>
<img src="'.$thumbg.'" style="width:100%; height:340px;">    
<br>
'.$titleg.'  <br>
<a href="/dl/yt.php/?sdl='.$idg.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titleh)){    echo '  <br>
<img src="'.$thumbh.'" style="width:100%; height:340px;">    
<br>
'.$titleh.'  <br>
<a href="/dl/yt.php/?sdl='.$idh.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';   if(!empty($titlei)){    echo '  <br>
<img src="'.$thumbi.'" style="width:100%; height:340px;">    
<br>
'.$titlei.'  <br>
<a href="/dl/yt.php/?sdl='.$idi.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titlej)){    echo '  <br>
<img src="'.$thumbj.'" style="width:100%; height:340px;">    
<br>
'.$titlej.'  <br>
<a href="/dl/yt.php/?sdl='.$idj.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titlek)){    echo '  <br>
<img src="'.$thumbk.'" style="width:100%; height:340px;">    
<br>
'.$titlek.'  <br>
<a href="/dl/yt.php/?sdl='.$idk.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titlel)){    echo '  <br>
<img src="'.$thumbl.'" style="width:100%; height:340px;">    
<br>
'.$titlel.'  <br>
<a href="/dl/yt.php/?sdl='.$idl.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titlem)){    echo '  <br>
<img src="'.$thumbm.'" style="width:100%; height:340px;">    
<br>
'.$titlem.'  <br>
<a href="/dl/yt.php/?sdl='.$idm.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titlen)){    echo '  <br>
<img src="'.$thumbn.'" style="width:100%; height:340px;">    
<br>
'.$titlen.'  <br>
<a href="/dl/yt.php/?sdl='.$idn.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titleo)){    echo '  <br>
<img src="'.$thumbo.'" style="width:100%; height:340px;">    
<br>
'.$titleo.'  <br>
<a href="/dl/yt.php/?sdl='.$ido.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titlep)){    echo '  <br>
<img src="'.$thumbp.'" style="width:100%; height:340px;">    
<br>
'.$titlep.'  <br>
<a href="/dl/yt.php/?sdl='.$idp.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';   if(!empty($titleq)){    echo '  <br>
<img src="'.$thumbq.'" style="width:100%; height:340px;">    
<br>
'.$titleq.'  <br>
<a href="/dl/yt.php/?sdl='.$idq.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';   if(!empty($titler)){    echo '  <br>
<img src="'.$thumbr.'" style="width:100%; height:340px;">    
<br>
'.$titler.'  <br>
<a href="/dl/yt.php/?sdl='.$idr.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';   if(!empty($titles)){    echo '  <br>
<img src="'.$thumbs.'" style="width:100%; height:340px;">    
<br>
'.$titles.'  <br>
<a href="/dl/yt.php/?sdl='.$ids.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titlet)){    echo '  <br>
<img src="'.$thumbt.'" style="width:100%; height:340px;">    
<br>
'.$titlet.'  <br>
<a href="/dl/yt.php/?sdl='.$idt.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titleu)){    echo '  <br>
<img src="'.$thumbu.'" style="width:100%; height:340px;">    
<br>
'.$titleu.'  <br>
<a href="/dl/yt.php/?sdl='.$idu.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>    
';
} else echo '';   if(!empty($titlev)){    echo '  <br>
<img src="'.$thumbv.'" style="width:100%; height:340px;">    
<br>
'.$titlev.'  <br>
<a href="/dl/yt.php/?sdl='.$idv.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  
';
} else echo '';   if(!empty($titlew)){    echo '  <br>
<img src="'.$thumbw.'" style="width:100%; height:340px;">    
<br>
'.$titlew.'  <br>
<a href="/dl/yt.php/?sdl='.$idw.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';   if(!empty($titlex)){    echo '  <img src="'.$thumbx.'" style="width:100%; height:340px;">    
<br>
'.$titlex.'  <br>
<a href="/dl/yt.php/?sdl='.$idx.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  
';
} else echo '';   if(!empty($titley)){    echo '  <br>
<img src="'.$thumby.'" style="width:100%; height:340px;">    
<br>
'.$titley.'  <br>
<a href="/dl/yt.php/?sdl='.$idy.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';   if(!empty($titlez)){    echo '
<br>
<img src="'.$thumbz.'" style="width:100%; height:340px;">    
<br>
'.$titlez.'
<br>
<a href="/dl/yt.php/?sdl='.$idz.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';
?>
</h2>   <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
<br>
<div id="google_translate_element"></div>
    <script type="text/javascript">   function googleTranslateElementInit() {   new google.translate.TranslateElement({pageLanguage: 'en'},'google_translate_element' ); }  
</script> <script type="text/javascript" src= 
"https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"> 
 </script> </center>
   </div>  <br>
</div>  
<div class="bg-dark text-white" style="bottom: 0;width: 100%;padding:12px">Developed by <a target="_blank" href="https://www.instagram.com/theofficialvkr">Vijay Kumar</a> <span style="float: right;">Copyright &copy; <?php echo date("Y"); ?></span><br> .</div><script type="text/javascript">
        window.setInterval(function(){            if ($("input[name='sdl']").attr("placeholder") == "Video URL or Name") {                $("input[name='sdl']").attr("placeholder", "Video URL or Name");            }            else            {                $("input[name='sdl']").attr("placeholder", "Video URL or Name");            }        }, 3000);    </script>    
</body>
<style type="text/css">
img[src*="000webhost"][style],
body > div:nth-last-of-type(1)[style]{  opacity: 0 !important;  pointer-events:none !important;  width: 0px !important;  height: 0px !important;  visibility:hidden !important;  display:none !important;
}
img[src*="http://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none;}
img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none;}
</style>
</html>
