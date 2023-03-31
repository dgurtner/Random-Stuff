<!doctype html>

<?php

$thewebsite = stripcslashes($_SERVER['SERVER_NAME']);
$whoami = str_replace('www.','',$thewebsite);

?>

<html><head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to <?php print $whoami; ?></title>
  <meta name="description" content="Welcome to <?php print $whoami; ?>. Since it's not ready yet, take a look at one of my recommendations. I don't really have much to say here since the website is still being built but Google wants me to have something here in this space for you to look at as you scroll through your search results. I mean, it's actually hard to believe that you would find this result in the first place since Google doesn't even have anything to index. There, that should do it. The space for preview text should be sufficiently filled up now.">
  <script src="tailwind.3.2.6.js"></script>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="astro.css">

</head><body class="bg-slate-900 text-gray-100">

<?php $random = substr(md5(mt_rand()), 0, 7); ?>

<iframe src="https://gurt.co/go/parked/?<?php print $random; ?>" width="1" height="1" frameborder="0" style="position: absolute; top: -9999px; left: -9999px;"></iframe>

<?php

$datajson = file_get_contents('https://gurt.co/go/parked/data.json');
$parsearray = json_decode(stripslashes("[$datajson]"), 1);

foreach ($parsearray as $getpair => $getvalue) {
  $printname = $getvalue['name'];
  $printlink = 'https://gurt.co/go/' . $getvalue['link'];
}

?>

<div class="mx-auto max-w-screen-lg px-3 py-6">
  <div class="flex flex-col gap-y-3 sm:flex-row sm:items-center sm:justify-between">
    <a href="https://<?php print $thewebsite; ?>">
      <div class="flex items-center bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-xl font-bold text-transparent">
        <svg class="mr-1 h-10 w-10 stroke-cyan-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M0 0h24v24H0z" stroke="none"></path>
          <rect x="3" y="12" width="6" height="8" rx="1"></rect>
          <rect x="9" y="8" width="6" height="12" rx="1"></rect>
          <rect x="15" y="4" width="6" height="16" rx="1"></rect>
          <path d="M4 20h14"></path>
        </svg>
        <span><?php print $whoami; ?></span>
      </div>
    </a>
  </div>
</div>

<div class="mx-auto max-w-screen-lg px-3 py-6">
  <div class="flex flex-col items-center md:flex-row md:justify-between md:gap-x-24">
    <div>
      <h1 class="text-3xl font-bold">Hi there 👋 <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">and welcome to <?php print $whoami; ?>!</span></h1>
      <p class="mt-6 text-xl leading-9">Since it&#x27;s not ready to show to the world yet, you can take a look at my recommendation, <a class="text-cyan-400 hover:underline" href="<?php print $printlink; ?>" target="_blank"><?php print $printname; ?></a>.</p>
    </div>
    <div class="shrink-0">
      <img class="h-80 w-64" src="assets/images/avatar.svg" alt="Avatar image" loading="lazy"/>
    </div>
  </div>
</div>

<div class="mx-auto max-w-screen-lg px-3 py-6">
  <div class="flex flex-col items-center justify-between gap-6 sm:flex-row">
    <div class="sm:w-7/12">
      <div class="text-3xl font-bold">I suppose this is where I would ask you to <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">subscribe to my Newsletters...</span>
      </div>
      <p class="mt-3 text-gray-300">...but I really don&#x27;t have time to send any.</p>
    </div>
    <div class="w-full sm:w-5/12">
      <form class="flex rounded-full bg-slate-800 px-4 py-2 focus-within:ring-2 focus-within:ring-cyan-600 hover:ring-2 hover:ring-cyan-600">
        <input class="w-full appearance-none bg-slate-800 focus:outline-none"/>
        <button class="ml-2 shrink-0 rounded-full bg-gradient-to-br from-sky-500 to-cyan-400 px-3 py-1 text-sm font-medium hover:from-sky-700 hover:to-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-600/50" type="submit" title="No, really, this button doesn't do anything except possibly reload the page!">useless button</button>
      </form>
    </div>
  </div>
</div>

<div class="mx-auto max-w-screen-lg px-3 py-6">
  <div class="border-t border-gray-600 pt-5">
    <div class="text-sm text-gray-200" id="copyright"></div>
  </div>
</div>

<script async>
  window.onload = function printyear() {
    var d = new Date();
    var n = d.getFullYear();
    document.getElementById('copyright').innerHTML = ('&copy; 1995-' + n + ' Just so you know, I started building websites in the 90s. And I suppose you want to know who REALLY built this landing page. I copied it from <a href="https://creativedesignsguru.com" class="text-cyan-400 hover:underline" target="_blank" rel="noopener noreferrer">CreativeDesignsGuru</a>.');
    document.title = "Welcome to <?php print $whoami; ?>. I recommend <?php print $printname; ?>.";
  }
</script>

</body></html>
