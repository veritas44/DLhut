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
$urlv = 'https://dlhut.000webhostapp.com/api/?sdl='.$lloc;
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
$duration = $vidVals['data']['duration'];
$channel = $vidVals['data']['channel']; 
$desc = $vidVals['data']['description']; 
$url = $vidVals['data']['url']; 
$thumb = $vidVals['data']['thumb'];
$mp3 = $vidVals['data']['mp3']; 
$vod = $vidVals['data']['vod']; 
$hd = $vidVals['data']['hd']; 
$sd = $vidVals['data']['sd'];
$typea = $vidVals['data']['a']['type']; 
$qualitya = $vidVals['data']['a']['quality']; 
$sizea = $vidVals['data']['a']['size']; 
$videoa = $vidVals['data']['a']['video']; 
$audioa = $vidVals['data']['a']['audio']; 
$formata = $vidVals['data']['a']['format']; 
$dla = $vidVals['data']['a']['dl']; 
$typeb = $vidVals['data']['b']['type']; 
$qualityb = $vidVals['data']['b']['quality']; 
$sizeb = $vidVals['data']['b']['size']; 
$videob = $vidVals['data']['b']['video']; 
$audiob = $vidVals['data']['b']['audio']; 
$formatb = $vidVals['data']['b']['format']; 
$dlb = $vidVals['data']['b']['dl']; 
$typec = $vidVals['data']['c']['type']; 
$qualityc = $vidVals['data']['c']['quality']; 
$sizec = $vidVals['data']['c']['size']; 
$videoc = $vidVals['data']['c']['video']; 
$audioc = $vidVals['data']['c']['audio']; 
$formatc = $vidVals['data']['c']['format']; 
$dlc = $vidVals['data']['c']['dl']; 
$typed = $vidVals['data']['d']['type']; 
$qualityd = $vidVals['data']['d']['quality']; 
$sized = $vidVals['data']['d']['size']; 
$videod = $vidVals['data']['d']['video']; 
$audiod = $vidVals['data']['d']['audio']; 
$formatd = $vidVals['data']['d']['format']; 
$dld = $vidVals['data']['d']['dl']; 
$typee = $vidVals['data']['e']['type']; 
$qualitye = $vidVals['data']['e']['quality']; 
$sizee = $vidVals['data']['e']['size']; 
$videoe = $vidVals['data']['e']['video']; 
$audioe = $vidVals['data']['e']['audio']; 
$formate = $vidVals['data']['e']['format']; 
$dle = $vidVals['data']['e']['dl']; 
$typef = $vidVals['data']['f']['type']; 
$qualityf = $vidVals['data']['f']['quality']; 
$sizef = $vidVals['data']['f']['size']; 
$videof = $vidVals['data']['f']['video']; 
$audiof = $vidVals['data']['f']['audio']; 
$formatf = $vidVals['data']['f']['format']; 
$dlf = $vidVals['data']['f']['dl']; 
$typeg = $vidVals['data']['g']['type']; 
$qualityg = $vidVals['data']['g']['quality']; 
$sizeg = $vidVals['data']['g']['size']; 
$videog = $vidVals['data']['g']['video']; 
$audiog = $vidVals['data']['g']['audio']; 
$formatg = $vidVals['data']['g']['format']; 
$dlg = $vidVals['data']['g']['dl']; 
$typeh = $vidVals['data']['h']['type']; 
$qualityh = $vidVals['data']['h']['quality']; 
$sizeh = $vidVals['data']['h']['size']; 
$videoh = $vidVals['data']['h']['video']; 
$audioh = $vidVals['data']['h']['audio']; 
$formath = $vidVals['data']['h']['format']; 
$dlh = $vidVals['data']['h']['dl']; 
$typei = $vidVals['data']['i']['type']; 
$qualityi = $vidVals['data']['i']['quality']; 
$sizei = $vidVals['data']['i']['size']; 
$videoi = $vidVals['data']['i']['video']; 
$audioi = $vidVals['data']['i']['audio']; 
$formati = $vidVals['data']['i']['format']; 
$dli = $vidVals['data']['i']['dl']; 
$typej = $vidVals['data']['j']['type']; 
$qualityj = $vidVals['data']['j']['quality']; 
$sizej = $vidVals['data']['j']['size']; 
$videoj = $vidVals['data']['j']['video']; 
$audioj = $vidVals['data']['j']['audio']; 
$formatj = $vidVals['data']['j']['format']; 
$dlj = $vidVals['data']['j']['dl']; 
$typek = $vidVals['data']['k']['type']; 
$qualityk = $vidVals['data']['k']['quality']; 
$sizek = $vidVals['data']['k']['size']; 
$videok = $vidVals['data']['k']['video']; 
$audiok = $vidVals['data']['k']['audio']; 
$formatk = $vidVals['data']['k']['format']; 
$dlk = $vidVals['data']['k']['dl']; 
$typel = $vidVals['data']['l']['type']; 
$qualityl = $vidVals['data']['l']['quality']; 
$sizel = $vidVals['data']['l']['size']; 
$videol = $vidVals['data']['l']['video']; 
$audiol = $vidVals['data']['l']['audio']; 
$formatl = $vidVals['data']['l']['format']; 
$dll = $vidVals['data']['l']['dl']; 
$typem = $vidVals['data']['m']['type']; 
$qualitym = $vidVals['data']['m']['quality']; 
$sizem = $vidVals['data']['m']['size']; 
$videom = $vidVals['data']['m']['video']; 
$audiom = $vidVals['data']['m']['audio']; 
$formatm = $vidVals['data']['m']['format']; 
$dlm = $vidVals['data']['m']['dl']; 
$typen = $vidVals['data']['n']['type']; 
$qualityn = $vidVals['data']['n']['quality']; 
$sizen = $vidVals['data']['n']['size']; 
$videon = $vidVals['data']['n']['video']; 
$audion = $vidVals['data']['n']['audio']; 
$formatn = $vidVals['data']['n']['format']; 
$dln = $vidVals['data']['n']['dl']; 
$typeo = $vidVals['data']['o']['type']; 
$qualityo = $vidVals['data']['o']['quality']; 
$sizeo = $vidVals['data']['o']['size']; 
$videoo = $vidVals['data']['o']['video']; 
$audioo = $vidVals['data']['o']['audio']; 
$formato = $vidVals['data']['o']['format']; 
$dlo = $vidVals['data']['o']['dl']; 
$typep = $vidVals['data']['p']['type']; 
$qualityp = $vidVals['data']['p']['quality']; 
$sizep = $vidVals['data']['p']['size']; 
$videop = $vidVals['data']['p']['video']; 
$audiop = $vidVals['data']['p']['audio']; 
$formatp = $vidVals['data']['p']['format']; 
$dlp = $vidVals['data']['p']['dl']; 
$typeq = $vidVals['data']['q']['type']; 
$qualityq = $vidVals['data']['q']['quality']; 
$sizeq = $vidVals['data']['q']['size']; 
$videoq = $vidVals['data']['q']['video']; 
$audioq = $vidVals['data']['q']['audio']; 
$formatq = $vidVals['data']['q']['format']; 
$dlq = $vidVals['data']['q']['dl']; 
$typer = $vidVals['data']['r']['type']; 
$qualityr = $vidVals['data']['r']['quality']; 
$sizer = $vidVals['data']['r']['size']; 
$videor = $vidVals['data']['r']['video']; 
$audior = $vidVals['data']['r']['audio']; 
$formatr = $vidVals['data']['r']['format']; 
$dlr = $vidVals['data']['r']['dl']; 
$types = $vidVals['data']['s']['type']; 
$qualitys = $vidVals['data']['s']['quality']; 
$sizes = $vidVals['data']['s']['size']; 
$videos = $vidVals['data']['s']['video']; 
$audios = $vidVals['data']['s']['audio']; 
$formats = $vidVals['data']['s']['format']; 
$dls = $vidVals['data']['s']['dl']; 
$typet = $vidVals['data']['t']['type']; 
$qualityt = $vidVals['data']['t']['quality']; 
$sizet = $vidVals['data']['t']['size']; 
$videot = $vidVals['data']['t']['video']; 
$audiot = $vidVals['data']['t']['audio']; 
$formatt = $vidVals['data']['t']['format']; 
$dlt = $vidVals['data']['t']['dl']; 
$typeu = $vidVals['data']['u']['type']; 
$qualityu = $vidVals['data']['u']['quality']; 
$sizeu = $vidVals['data']['u']['size']; 
$videou = $vidVals['data']['u']['video']; 
$audiou = $vidVals['data']['u']['audio']; 
$formatu = $vidVals['data']['u']['format']; 
$dlu = $vidVals['data']['u']['dl']; 
$typev = $vidVals['data']['v']['type']; 
$qualityv = $vidVals['data']['v']['quality']; 
$sizev = $vidVals['data']['v']['size']; 
$videov = $vidVals['data']['v']['video']; 
$audiov = $vidVals['data']['v']['audio']; 
$formatv = $vidVals['data']['v']['format']; 
$dlv = $vidVals['data']['v']['dl']; 
$typew = $vidVals['data']['w']['type']; 
$qualityw = $vidVals['data']['w']['quality']; 
$sizew = $vidVals['data']['w']['size']; 
$videow = $vidVals['data']['w']['video']; 
$audiow = $vidVals['data']['w']['audio']; 
$formatw = $vidVals['data']['w']['format']; 
$dlw = $vidVals['data']['w']['dl']; 
$typex = $vidVals['data']['x']['type']; 
$qualityx = $vidVals['data']['x']['quality']; 
$sizex = $vidVals['data']['x']['size']; 
$videox = $vidVals['data']['x']['video']; 
$audiox = $vidVals['data']['x']['audio']; 
$formatx = $vidVals['data']['x']['format']; 
$dlx = $vidVals['data']['x']['dl']; 
$typey = $vidVals['data']['y']['type']; 
$qualityy = $vidVals['data']['y']['quality']; 
$sizey = $vidVals['data']['y']['size']; 
$videoy = $vidVals['data']['y']['video']; 
$audioy = $vidVals['data']['y']['audio']; 
$formaty = $vidVals['data']['y']['format']; 
$dly = $vidVals['data']['y']['dl']; 
$typez = $vidVals['data']['z']['type']; 
$qualityz = $vidVals['data']['z']['quality']; 
$sizez = $vidVals['data']['z']['size']; 
$videoz = $vidVals['data']['z']['video']; 
$audioz = $vidVals['data']['z']['audio']; 
$formatz = $vidVals['data']['z']['format']; 
$dlz = $vidVals['data']['z']['dl']; 
$typeza = $vidVals['data']['za']['type']; 
$qualityza = $vidVals['data']['za']['quality']; 
$sizeza = $vidVals['data']['za']['size']; 
$videoza = $vidVals['data']['za']['video']; 
$audioza = $vidVals['data']['za']['audio']; 
$formatza = $vidVals['data']['za']['format']; 
$dlza = $vidVals['data']['za']['dl']; 
$typezb = $vidVals['data']['zb']['type']; 
$qualityzb = $vidVals['data']['zb']['quality']; 
$sizezb = $vidVals['data']['zb']['size']; 
$videozb = $vidVals['data']['zb']['video']; 
$audiozb = $vidVals['data']['zb']['audio']; 
$formatzb = $vidVals['data']['zb']['format']; 
$dlzb = $vidVals['data']['zb']['dl']; 
$typezc = $vidVals['data']['zc']['type']; 
$qualityzc = $vidVals['data']['zc']['quality']; 
$sizezc = $vidVals['data']['zc']['size']; 
$videozc = $vidVals['data']['zc']['video']; 
$audiozc = $vidVals['data']['zc']['audio']; 
$formatzc = $vidVals['data']['zc']['format']; 
$dlzc = $vidVals['data']['zc']['dl']; 
$typezd = $vidVals['data']['zd']['type']; 
$qualityzd = $vidVals['data']['zd']['quality']; 
$sizezd = $vidVals['data']['zd']['size']; 
$videozd = $vidVals['data']['zd']['video']; 
$audiozd = $vidVals['data']['zd']['audio']; 
$formatzd = $vidVals['data']['zd']['format']; 
$dlzd = $vidVals['data']['zd']['dl']; 
$typeze = $vidVals['data']['ze']['type']; 
$qualityze = $vidVals['data']['ze']['quality']; 
$sizeze = $vidVals['data']['ze']['size']; 
$videoze = $vidVals['data']['ze']['video']; 
$audioze = $vidVals['data']['ze']['audio']; 
$formatze = $vidVals['data']['ze']['format']; 
$dlze = $vidVals['data']['ze']['dl']; 
$typezf = $vidVals['data']['zf']['type']; 
$qualityzf = $vidVals['data']['zf']['quality']; 
$sizezf = $vidVals['data']['zf']['size']; 
$videozf = $vidVals['data']['zf']['video']; 
$audiozf = $vidVals['data']['zf']['audio']; 
$formatzf = $vidVals['data']['zf']['format']; 
$dlzf = $vidVals['data']['zf']['dl']; 
$videolink1 = $vidVals['data']['aa']['videolink1']; 
$audiolink2  = $vidVals['data']['aa']['audiolink2'];
$link  = $vidVals['data']['aa']['link1'];
$link  = $vidVals['data']['aa']['link2'];
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
<meta name="twitter:image:src" content="https://dlhut.000webhostapp.com/img/logo.png">
<meta property="og:url" content="https://dlhut.000webhostapp.com/">
<meta property="og:site_name" content="DLHUT :  Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
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
</script><script src='http://dlhut.ml/inc/downloadhelp.php'></script>
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
       		<a href="/">	<img src="/img/logo.png" width="200px" height="90px"></a>
  </div>
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
Download <?php echo $title; ?>  
<video poster="<?php echo urldecode($thumb); ?>" width="100%" height="340" controls>
  <source src="https://streamytv.herokuapp.com/stream.php?url=<?php echo urlencode($dla); ?>" type="video/mp4">   
   <source src="https://av4dl.herokuapp.com/download?url=<?php echo $lloc; ?>" type="video/mp4">
    <source src="https://alltubedownload.net/download?url=<?php echo $lloc; ?>" type="video/mp4">
  <source src="<?php echo $vpdl; ?>" type="video/mp4"> 
  <source src="<?php echo $dla; ?>" type="video/mp4">
 <source src="<?php echo $dlb; ?>" type="video/mp4">
  <source src="<?php echo $dlc; ?>" type="video/mp4">  
  <source src="<?php echo $url; ?>" type="video/mp4">   
  <source src="<?php echo urlencode($url); ?>" type="video/mp4"> 
  <source src="http://dlhut.ml/stream.php?sdl=<?php $lloc; ?>" type="video/mp4"> 
  <source src="<?php echo $dld; ?>" type="video/mp4">
  <source src="<?php echo $dle; ?>" type="video/mp4">
  <source src="<?php echo $dlf; ?>" type="video/mp4">
  <source src="<?php echo $hd; ?>" type="video/mp4">
  <source src="<?php echo $sd; ?>" type="video/mp4">
  <source src="<?php echo $vod; ?>" type="video/mp4">
  <source src="<?php echo $videolink1; ?>" type="video/mp4">
  <source src="https://yavdl.000webhostapp.com/api/videos/dl.php?sdl=<?php echo $lloc; ?>" type="video/mp4">
  Your browser does not support the video tag.
</video> 
<br><?php echo $channel.' - '.$desc; ?> . 
Duration : <?php echo $duration; ?>
<?php
if(!empty($mp3)){
    echo '<br>
<a href="'.$mp3.'">
<button style="width:100%;"  class="btn btn-success"> Download  in MP3 </button></a><br>';
}
else echo '';
if(!empty($matches[1])){
    echo '<br>
<a href="https://dlhut.000webhostapp.com/api/yt/dl/downloads.php?sdl=https://youtube.com/watch?v='.$matches[1].'&f=mp3&q=320">
<button style="width:100%;"  class="btn btn-success"> Download  in MP3 (320) Audio </button></a><br>';
}
else echo '';
if(!empty($matches[1])){
    echo '<iframe style="border:0px; height:45px; width:99%;" scrolling="no" src="https://yavdl.000webhostapp.com/api/mp3/128.php/?sdl=https://www.youtube.com/watch?v='.$matches[1].'"></iframe>';
} 
else echo ''; 
if(!empty($matches[1])){
    echo '<iframe style="border:0px; height:45px; width:99%;" scrolling="no" src="https://yavdl.000webhostapp.com/api/videos/dl.php?sdl=https://www.youtube.com/watch?v='.$matches[1].'"></iframe>';
} 
else echo '';  if(!empty($matches[1])){
    echo '<iframe style="border:0px; height:45px; width:99%;" scrolling="no" src="https://yavdl.000webhostapp.com/api/mergedstreams/720.php/?sdl=https://www.youtube.com/watch?v='.$matches[1].'"></iframe>';
} 
else echo ''; 
if(!empty($matches[1])){
    echo '<iframe style="border:0px; height:45px; width:99%;" scrolling="no" src="https://yavdl.000webhostapp.com/api/mergedstreams/1080.php/?sdl=https://www.youtube.com/watch?v='.$matches[1].'"></iframe>';
} 
else echo '';
if(!empty($matches[1])){
    echo '<br>
<a href="http://dlhut.ml/api/yt/3gp.php/?title='.$title.'&sdl='.$lloc.'">
<button style="width:100%;"  class="btn btn-success"> Download  in 3GP Video </button></a><br>';
}
else echo '';
if(!empty($vod)){
    echo '<br>
<a href="'.$vod.'">
<button style="width:100%;"  class="btn btn-success"> Download  in Video </button></a><br>';
}
else echo '';
if(!empty($hd)){
    echo '<br>
<a href="'.$hd.'">
<button style="width:100%;"  class="btn btn-success"> Download  in HD </button></a><br>';
}
else echo '';
if(!empty($sd)){
    echo '<br>
<a href="'.$sd.'">
<button style="width:100%;"  class="btn btn-success"> Download  in SD </button></a><br>';
}
else echo '';
if(!empty($videolink1)){
    echo '  <br>
<a href="'.$videolink1.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';   
if(!empty($audiolink12)){
    echo '  <br>
<a href="'.$audiolink2.'">
<button style="width:100%;"  class="btn btn-success"> Download Audio </button></a><br>';
}
else echo '';  
if(!empty($link1)){
    echo '  <br>
<a href="'.$link1.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';    if(!empty($link2)){
    echo '  <br>
<a href="'.$link2.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link3)){
    echo '  <br>
<a href="'.$link3.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link4)){
    echo '  <br>
<a href="'.$link4.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link5)){
    echo '  <br>
<a href="'.$link5.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link6)){
    echo '  <br>
<a href="'.$link6.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link7)){
    echo '  <br>
<a href="'.$link7.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link8)){
    echo '  <br>
<a href="'.$link8.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link9)){
    echo '  <br>
<a href="'.$link9.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link10)){
    echo '  <br>
<a href="'.$link10.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link11)){
    echo '  <br>
<a href="'.$link11.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link12)){
    echo '  <br>
<a href="'.$link12.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link13)){
    echo '  <br>
<a href="'.$link13.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($typea)){
    echo '  <br>
<a href="'.$dla.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typea.' in '.$qualitya.' - '.$sizea.' - '.$formata.' </button></a><br>';
}
else echo '';  
 
if(!empty($typeb)){
    echo '  <br>
<a href="'.$dlb.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typeb.' in '.$qualityb.' - '.$sizeb.' - '.$formatb.' </button></a><br>';
}
else echo '';
 
if(!empty($typec)){
    echo '  <br>
<a href="'.$dlc.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typec.' in '.$qualityc.' - '.$sizec.' - '.$formatc.' </button></a><br>';
}
else echo '';   
if(!empty($typed)){
    echo '  <br>
<a href="'.$dld.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typed.' in '.$qualityd.' - '.$sized.' - '.$formatd.' </button></a><br>';
}
else echo '';   
if(!empty($typee)){
    echo '  <br>
<a href="'.$dle.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typee.' in '.$qualitye.' - '.$sizee.' - '.$formate.' </button></a><br>';
}
else echo '';   
if(!empty($typef)){
    echo '  <br>
<a href="'.$dlf.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typef.' in '.$qualityf.' - '.$sizef.' - '.$formatf.' </button></a><br>';
}
else echo '';   
if(!empty($typeg)){
    echo '  <br>
<a href="'.$dlg.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typeg.' in '.$qualityg.' - '.$sizeg.' - '.$formatg.' </button></a><br>';
}
else echo '';   
if(!empty($typeh)){
    echo '  <br>
<a href="'.$dlh.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typeh.' in '.$qualityh.' - '.$sizeh.' - '.$formath.' </button></a><br>';
}
else echo '';   
if(!empty($typei)){
    echo '  <br>
<a href="'.$dli.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typei.' in '.$qualityi.' - '.$sizei.' - '.$formati.' </button></a><br>';
}
else echo '';   
if(!empty($typej)){
    echo '  <br>
<a href="'.$dlj.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typej.' in '.$qualityj.' - '.$sizej.' - '.$formatj.' </button></a><br>';
}
else echo '';   
if(!empty($typek)){
    echo '  <br>
<a href="'.$dlk.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typek.' in '.$qualityk.' - '.$sizek.' - '.$formatk.' </button></a><br>';
}
else echo '';   
if(!empty($typel)){
    echo '  <br>
<a href="'.$dll.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typel.' in '.$qualityl.' - '.$sizel.' - '.$formatl.' </button></a><br>';
}
else echo '';   
if(!empty($typem)){
    echo '  <br>
<a href="'.$dlm.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typem.' in '.$qualitym.' - '.$sizem.' - '.$formatm.' </button></a><br>';
}
else echo '';   
if(!empty($typen)){
    echo '  <br>
<a href="'.$dln.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typen.' in '.$qualityn.' - '.$sizen.' - '.$formatn.' </button></a><br>';
}
else echo '';   
if(!empty($typeo)){
    echo '  <br>
<a href="'.$dlo.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typeo.' in '.$qualityo.' - '.$sizeo.' - '.$formato.' </button></a><br>';
}
else echo '';   
if(!empty($typep)){
    echo '  <br>
<a href="'.$dlp.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typep.' in '.$qualityp.' - '.$sizep.' - '.$formatp.' </button></a><br>';
}
else echo '';   
if(!empty($typeq)){
    echo '  <br>
<a href="'.$dlq.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typeq.' in '.$qualityq.' - '.$sizeq.' - '.$formatq.' </button></a><br>';
}
else echo '';   
if(!empty($typer)){
    echo '  <br>
<a href="'.$dlr.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typer.' in '.$qualityr.' - '.$sizer.' - '.$formatr.' </button></a><br>';
}
else echo '';   
if(!empty($types)){
    echo '  <br>
<a href="'.$dls.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$types.' in '.$qualitys.' - '.$sizes.' - '.$formats.' </button></a><br>';
}
else echo '';   
if(!empty($typet)){
    echo '  <br>
<a href="'.$dlt.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typet.' in '.$qualityt.' - '.$sizet.' - '.$formatt.' </button></a><br>';
}
else echo '';   
if(!empty($typeu)){
    echo '  <br>
<a href="'.$dlu.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typeu.' in '.$qualityu.' - '.$sizeu.' - '.$formatu.' </button></a><br>';
}
else echo '';   
if(!empty($typev)){
    echo '  <br>
<a href="'.$dlv.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typev.' in '.$qualityv.' - '.$sizev.' - '.$formatv.' </button></a><br>';
}
else echo '';   
if(!empty($typew)){
    echo '  <br>
<a href="'.$dlw.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typew.' in '.$qualityw.' - '.$sizew.' - '.$formatw.' </button></a><br>';
}
else echo '';   
if(!empty($typex)){
    echo '  <br>
<a href="'.$dlx.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typex.' in '.$qualityx.' - '.$sizex.' - '.$formatx.' </button></a><br>';
}
else echo '';  
if(!empty($typey)){
    echo '  <br>
<a href="'.$dly.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typey.' in '.$qualityy.' - '.$sizey.' - '.$formaty.' </button></a><br>';
}
else echo '';     
if(!empty($typez)){
    echo '  <br>
<a href="'.$dlz.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typez.' in '.$qualityz.' - '.$sizez.' - '.$formatz.' </button></a><br>';
}
else echo '';     
if(!empty($typeza)){
    echo '  <br>
<a href="'.$dlza.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typeza.' in '.$qualityza.' - '.$sizeza.' - '.$formatza.' </button></a><br>';
}
else echo '';     
if(!empty($typezb)){
    echo '  <br>
<a href="'.$dlzb.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typezb.' in '.$qualityzb.' - '.$sizezb.' - '.$formatzb.' </button></a><br>';
}
else echo '';     
if(!empty($typezc)){
    echo '  <br>
<a href="'.$dlzc.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typezc.' in '.$qualityzc.' - '.$sizezc.' - '.$formatzc.' </button></a><br>';
}
else echo '';     
if(!empty($typezd)){
    echo '  <br>
<a href="'.$dlzd.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typezd.' in '.$qualityzd.' - '.$sizezd.' - '.$formatzd.' </button></a><br>';
}
else echo '';     
if(!empty($typeze)){
    echo '  <br>
<a href="'.$dlze.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typeze.' in '.$qualityze.' - '.$sizeze.' - '.$formatze.' </button></a><br>';
}
else echo '';     
if(!empty($typezf)){
    echo '  <br>
<a href="'.$dlzf.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typezf.' in '.$qualityzf.' - '.$sizezf.' - '.$formatzf.' </button></a><br>';
}
else echo '';    
?>    
<br><a href="/dl/aio.php/?sdl=<?php echo $lloc; ?>">
<button style="width:100%;"  class="btn btn-success"> More Format </button></a><br>
</h2><!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
<br>
<div id="google_translate_element"></div>
    <script type="text/javascript">   function googleTranslateElementInit() {   new google.translate.TranslateElement({pageLanguage: 'en'},'google_translate_element' ); }  
</script> <script type="text/javascript" src= 
"https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"> 
 </script> </center>
  <br>
  </div>  
</div>    
<div class="bg-dark text-white" style="bottom: 0;width: 100%;padding:12px">Developed by <a target="_blank" href="https://www.instagram.com/theofficialvkr">Vijay Kumar</a> <span style="float: right;">Copyright &copy; <?php echo date("Y"); ?></span></div><br>  .
    <script type="text/javascript">    window.setInterval(function(){        if ($("input[name='sdl']").attr("placeholder") == "Video URL or Name") {            $("input[name='sdl']").attr("placeholder", "Video URL or Name");        }        else        {            $("input[name='sdl']").attr("placeholder", "Video URL or Name");        }    }, 3000);
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