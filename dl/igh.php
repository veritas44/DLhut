<!DOCTYPE html>
<html>
<head>
    
<?php
error_reporting(0);
$urlx = $_SERVER['REQUEST_URI'];
$video_id = explode("gh@", $urlx);
$video_id = $video_id[1];
$lloc = urldecode($video_id);
$llocf = urlencode($video_id);
include("../config.php");
preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|shorts|user)\/))([^\?&\"'>]+)/", $lloc, $matches);
$urlv = 'https://dlhut.000webhostapp.com/api/ighdl.php/?sdl='.$lloc;
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
$id = $vidVals['data']['id'];
$channel = $vidVals['data']['channel']; 
$desc = $vidVals['data']['description']; 
$follower = $vidVals['data']['follower']; 
$following = $vidVals['data']['following'];
$ppic = $vidVals['data']['ppic'];

$typea = $vidVals['data']['a']['thumb']; 
$qualitya = $vidVals['data']['a']['id']; 
$typeb = $vidVals['data']['b']['thumb']; 
$qualityb = $vidVals['data']['b']['id']; 
$typec = $vidVals['data']['c']['thumb']; 
$qualityc = $vidVals['data']['c']['id']; 
$typed = $vidVals['data']['d']['thumb']; 
$qualityd = $vidVals['data']['d']['id']; 
$typee = $vidVals['data']['e']['thumb']; 
$qualitye = $vidVals['data']['e']['id']; 
$typef = $vidVals['data']['f']['thumb']; 
$qualityf = $vidVals['data']['f']['id']; 
$typeg = $vidVals['data']['g']['thumb']; 
$qualityg = $vidVals['data']['g']['id'];
$typeh = $vidVals['data']['h']['thumb']; 
$qualityh = $vidVals['data']['h']['id'];
$typei = $vidVals['data']['i']['thumb']; 
$qualityi = $vidVals['data']['i']['id'];
$typej = $vidVals['data']['j']['thumb']; 
$qualityj = $vidVals['data']['j']['id'];
$typek = $vidVals['data']['k']['thumb']; 
$qualityk = $vidVals['data']['k']['id'];
$typel = $vidVals['data']['l']['thumb']; 
$qualityl = $vidVals['data']['l']['id'];
$typem = $vidVals['data']['m']['thumb']; 
$qualitym = $vidVals['data']['m']['id'];
$typen = $vidVals['data']['n']['thumb']; 
$qualityn = $vidVals['data']['n']['id'];
$typeo = $vidVals['data']['o']['thumb']; 
$qualityo = $vidVals['data']['o']['id'];
$typep = $vidVals['data']['p']['thumb']; 
$qualityp = $vidVals['data']['p']['id'];
$typeq = $vidVals['data']['q']['thumb']; 
$qualityq = $vidVals['data']['q']['id'];
$typer = $vidVals['data']['r']['thumb']; 
$qualityr = $vidVals['data']['r']['id'];
$types = $vidVals['data']['s']['thumb']; 
$qualitys = $vidVals['data']['s']['id'];
$typet = $vidVals['data']['t']['thumb']; 
$qualityt = $vidVals['data']['t']['id'];
$typeu = $vidVals['data']['u']['thumb']; 
$qualityu = $vidVals['data']['u']['id'];
$typev = $vidVals['data']['v']['thumb']; 
$qualityv = $vidVals['data']['v']['id'];
$typew = $vidVals['data']['w']['thumb']; 
$qualityw = $vidVals['data']['w']['id'];
$typex = $vidVals['data']['x']['thumb']; 
$qualityx = $vidVals['data']['x']['id'];
$typey = $vidVals['data']['y']['thumb']; 
$qualityy = $vidVals['data']['y']['id'];
$typez = $vidVals['data']['z']['thumb']; 
$qualityz = $vidVals['data']['z']['id'];
$typeza = $vidVals['data']['za']['thumb']; 
$qualityza = $vidVals['data']['za']['id'];
$typezb = $vidVals['data']['zb']['thumb']; 
$qualityzb = $vidVals['data']['zb']['id'];
$typezc = $vidVals['data']['zc']['thumb']; 
$qualityzc = $vidVals['data']['zc']['id'];
$typezd = $vidVals['data']['zd']['thumb']; 
$qualityzd = $vidVals['data']['zd']['id'];
$typeze = $vidVals['data']['ze']['thumb']; 
$qualityze = $vidVals['data']['ze']['id'];
$typezf = $vidVals['data']['zf']['thumb']; 
$qualityzf = $vidVals['data']['zf']['id'];
$link1  = $vidVals['data']['aa']['link1'];
$link2  = $vidVals['data']['aa']['link2'];
$link3 = $vidVals['data']['aa']['link3']; 
$link4 = $vidVals['data']['aa']['link4']; 
$link5 = $vidVals['data']['aa']['link5']; 
$link6 = $vidVals['data']['aa']['link6']; 
$link7 = $vidVals['data']['aa']['link7'];
$link8   = $vidVals['data']['aa']['link8'];
$link9   = $vidVals['data']['aa']['link9'];
$link10   = $vidVals['data']['aa']['link10'];
$link11   = $vidVals['data']['aa']['link11'];
$link12  = $vidVals['data']['aa']['link12'];
$link13  = $vidVals['data']['aa']['link13'];
$xlink1  = $vidVals['data']['bb']['link1'];
$xlink2  = $vidVals['data']['bb']['link2'];
$xlink3 = $vidVals['data']['bb']['link3']; 
$xlink4 = $vidVals['data']['bb']['link4']; 
$xlink5 = $vidVals['data']['bb']['link5']; 
$xlink6 = $vidVals['data']['bb']['link6']; 
$xlink7 = $vidVals['data']['bb']['link7'];
$xlink8   = $vidVals['data']['bb']['link8'];
$xlink9   = $vidVals['data']['bb']['link9'];
$xlink10   = $vidVals['data']['bb']['link10'];
$xlink11   = $vidVals['data']['bb']['link11'];
$xlink12  = $vidVals['data']['bb']['link12'];
$xlink13  = $vidVals['data']['bb']['link13'];

if(!empty($thumb)){
    $thumbux = urldecode($thumb);
} else $thumbux = "https://dlhut.000webhostapp.com/img/logo.png";
$videoiid = explode("sdl=", $dla);
$videoiid = $videoiid[1];
$vpdl = $videoiid;
?>
<title>DLHUT : Download - <?php echo $title; ?> : Online All in One Video & Audio Downloader</title>
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
        <!-- ShareThis BEGIN --><div class="sharethis-inline-follow-buttons"></div><!-- ShareThis END --><br>
<h2 style="word-break: break-all;">    
Download <?php echo $title; ?>

<br><?php echo $channel.' - '.$desc; ?> 

<?php

if(!empty($xlink1)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link1).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$xlink1.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';    if(!empty($xlink2)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link2).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$xlink2.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink3)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link3).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$xlink3.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink4)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link4).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$xlink4.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink5)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link5).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$xlink5.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink6)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link6).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$xlink6.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink7)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link7).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$xlink7.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink8)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link8).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$xlink8.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink9)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link9).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$xlink9.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink10)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link10).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$xlink10.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink11)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link11).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$xlink11.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink12)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link12).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$xlink12.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink13)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link13).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$xlink13.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($typea)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typea).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualitya.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
 
if(!empty($typeb)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeb).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityb.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';
 
if(!empty($typec)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typec).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityc.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typed)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typed).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityd.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typee)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typee).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualitye.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typef)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typef).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityf.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typeg)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeg).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityg.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typeh)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeh).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityh.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typei)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typei).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityi.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typej)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typej).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityj.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';   
if(!empty($typek)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typek).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityk.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typel)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typel).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityl.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typem)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typem).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualitym.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typen)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typen).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityn.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typeo)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeo).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityo.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typep)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typep).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityp.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typeq)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeq).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityq.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typer)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typer).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityr.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($types)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($types).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualitys.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';   
if(!empty($typet)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typet).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityt.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';   
if(!empty($typeu)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeu).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityu.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typev)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typev).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityv.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typew)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typew).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityw.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typex)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typex).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityx.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($typey)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typey).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityy.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';     
if(!empty($typez)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typez).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityz.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';     
if(!empty($typeza)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeza).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityza.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';     
if(!empty($typezb)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typezb).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityzb.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';     
if(!empty($typezc)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typezc).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityzc.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';     
if(!empty($typezd)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typezd).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityzd.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';     
if(!empty($typeze)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeze).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityze.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';     
if(!empty($typezf)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($zf).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?sdl='.$qualityzf.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';    
?>    
<br><a href="<?php echo $domain; ?>/sf.php/?sdl=igs@<?php echo $lloc; ?>">
<button style="width:100%;"  class="btn btn-success">  Download Story </button></a><br>
</h2> <h1> How to Download </h1> <br>
    1. To Download Instagram story search Like this - igs@USERNAME
    <br>
    2. To Download Instagram Highlights search Like this - igh@USERNAME 
    <br>
    3. To Download YouTube music search Like this - ytm@Music Name
    <br>
    4. To search Youtube video normally put video name in search box .   
    <br>
    5. Apart from all this just put link in search box to Download normally.
   <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
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
