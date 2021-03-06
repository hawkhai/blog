<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" lang="en"><head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>From sketch to logo: Creating a text and image logo with GIMP</title>
<meta name="description" content="Alpha to logo adds a texture to images with some fancy effects." /><link type="text/css" href="https://www.scriptol.com/scriptol.css" rel="stylesheet" />
<style type="text/css">.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3npS60y-EvfF7G_lioSx2Q{display:block!important;border:1px solid #cdcfd2!important;background-color:#fff!important;color:#373a3d!important;width:100vw!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3npS60y-EvfF7G_lioSx2Q .IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-24GeGuJgk9LrMLp7qVvlyz{background:#6a7e89!important;color:#fff!important;padding:10px!important;font-size:18px!important;font-family:sans-serif!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3npS60y-EvfF7G_lioSx2Q .IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-KVjdulkCFfUZps29EbgAC{background:#f3f6f8!important;border-bottom:1px solid #cdcfd2!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3npS60y-EvfF7G_lioSx2Q .IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-KVjdulkCFfUZps29EbgAC&gt;*{margin-right:10px!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3npS60y-EvfF7G_lioSx2Q .IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1OeZ2PQ98oAp6Vc5mMc6V5{list-style:none!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3npS60y-EvfF7G_lioSx2Q .IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-vCwYmWF_l83ScZBrGnRoi,.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3npS60y-EvfF7G_lioSx2Q .IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1OeZ2PQ98oAp6Vc5mMc6V5{margin:0!important;padding:0!important;width:100%!important;display:block!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3npS60y-EvfF7G_lioSx2Q .IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-vCwYmWF_l83ScZBrGnRoi:not(:last-child){border-bottom:1px solid #cdcfd2!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3npS60y-EvfF7G_lioSx2Q .IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1XQZkb-FlHWABUp4_uShaZ{color:inherit!important;cursor:pointer!important;width:100%!important;display:inline-block!important;margin:10px!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3npS60y-EvfF7G_lioSx2Q .IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1XTzMvb2XKitWz0mFLlyyp{margin:5px!important;display:block!important;width:auto!important;white-space:pre!important;overflow-x:scroll!important;background:inherit!important;color:inherit!important;font-family:monospace}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3npS60y-EvfF7G_lioSx2Q .IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1XTzMvb2XKitWz0mFLlyyp:not(.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-39QUvFFn5B7GMcqMQkOXZ3){display:none!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3npS60y-EvfF7G_lioSx2Q .IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-295DY3nO0DbJWMsOqmjCli{background:#f5f5f5!important;color:#5a5a5a!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3npS60y-EvfF7G_lioSx2Q.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1aQZwu6CUzAf2zUcI7tg0Q .IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-295DY3nO0DbJWMsOqmjCli{display:none!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3npS60y-EvfF7G_lioSx2Q .IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-38EPFyKXMtoP12rPlmrHxs{background:#e6f7ff!important;color:#006097!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3npS60y-EvfF7G_lioSx2Q.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3W4ZnQjhoGfT1gTNcqRXdi .IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-38EPFyKXMtoP12rPlmrHxs{display:none!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3npS60y-EvfF7G_lioSx2Q .IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-HGYnfzlmgOZ-l7eANhQe_{background:#fff3ea!important;color:#993a00!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3npS60y-EvfF7G_lioSx2Q.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-24e52A11B1UIErbKHtBmqc .IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-HGYnfzlmgOZ-l7eANhQe_{display:none!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3npS60y-EvfF7G_lioSx2Q .IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-jji74ZzulHScD0OAD_G7h{background:#fef2f1!important;color:#b10823!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3npS60y-EvfF7G_lioSx2Q.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-28jAOA7cDee-95LvwGsOP- .IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-jji74ZzulHScD0OAD_G7h{display:none!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu{background-color:#0073b1!important;border:0!important;border-radius:2px!important;box-sizing:border-box!important;color:#fff!important;cursor:pointer!important;display:inline-block!important;font-family:-apple-system,system-ui,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Fira Sans,Ubuntu,Oxygen,Oxygen Sans,Cantarell,Droid Sans,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Lucida Grande,Helvetica,Arial,sans-serif!important;font-weight:600!important;overflow:hidden!important;outline-width:2px!important;position:relative!important;text-align:center!important;text-decoration:none!important;vertical-align:middle!important;white-space:nowrap!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu:disabled{cursor:not-allowed!important;opacity:.7!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu:not(:disabled):not(.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1zhzkayakwEXovVYUbq5Gy):hover{background-color:#006097!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu:not(:disabled):not(.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1zhzkayakwEXovVYUbq5Gy):active{background-color:#004b7c!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1zhzkayakwEXovVYUbq5Gy{background-color:#fff!important;color:#0073b1!important;box-shadow:inset 0 0 0 1px rgba(0,0,0,.3)!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1zhzkayakwEXovVYUbq5Gy:not(:disabled):hover{color:#006097!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1zhzkayakwEXovVYUbq5Gy:not(:disabled):active{color:#004b7c!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu&gt;xdoor-icon{display:inline-block!important;height:100%!important;vertical-align:top!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu&gt;xdoor-icon&gt;svg{pointer-events:none!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-7inSbaAsvG5bf7w6lJTEr{font-size:10px!important;height:16px!important;line-height:16px!important;padding:0 6px!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-7inSbaAsvG5bf7w6lJTEr&gt;xdoor-icon{margin-left:-6px!important;margin-right:3px!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-7inSbaAsvG5bf7w6lJTEr&gt;xdoor-icon&gt;svg{height:16px!important;width:16px!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-7inSbaAsvG5bf7w6lJTEr.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-2lrEjt4SOTxqrYsv1piG4c&gt;xdoor-icon{margin-right:-6px!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu,.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3uCBSbQNVNf2QjqHe1rfb6{font-size:11px!important;height:20px!important;line-height:20px!important;padding:0 7px!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3uCBSbQNVNf2QjqHe1rfb6&gt;xdoor-icon,.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu&gt;xdoor-icon{margin-left:-7px!important;margin-right:3.5px!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3uCBSbQNVNf2QjqHe1rfb6&gt;xdoor-icon&gt;svg,.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu&gt;xdoor-icon&gt;svg{height:20px!important;width:20px!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-3uCBSbQNVNf2QjqHe1rfb6.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-2lrEjt4SOTxqrYsv1piG4c&gt;xdoor-icon,.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-2lrEjt4SOTxqrYsv1piG4c&gt;xdoor-icon{margin-right:-7px!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-21Smv9YG-5V6M6KP-5v2WG{font-size:14px!important;height:24px!important;line-height:24px!important;padding:0 12px!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-21Smv9YG-5V6M6KP-5v2WG&gt;xdoor-icon{margin-left:-12px!important;margin-right:6px!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-21Smv9YG-5V6M6KP-5v2WG&gt;xdoor-icon&gt;svg{height:24px!important;width:24px!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-21Smv9YG-5V6M6KP-5v2WG.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-2lrEjt4SOTxqrYsv1piG4c&gt;xdoor-icon{margin-right:-12px!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1TGdQUTLZdNG4R87OfAB-q{font-size:16px!important;height:32px!important;line-height:32px!important;padding:0 16px!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1TGdQUTLZdNG4R87OfAB-q&gt;xdoor-icon{margin-left:-16px!important;margin-right:8px!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1TGdQUTLZdNG4R87OfAB-q&gt;xdoor-icon&gt;svg{height:32px!important;width:32px!important}.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1TGdQUTLZdNG4R87OfAB-q.IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-2lrEjt4SOTxqrYsv1piG4c&gt;xdoor-icon{margin-right:-16px!important}</style><script src="https://www.googletagservices.com/activeview/js/current/osd.js?cb=%2Fr20100101"></script><script src="https://partner.googleadservices.com/gampad/cookie.js?domain=www.scriptol.com&amp;callback=_gfp_s_&amp;client=ca-pub-2681794164750401&amp;cookie=ID%3Da46f76b4d342bd39-22bd2b383ac5002d%3AT%3D1608268875%3ART%3D1608268875%3AS%3DALNI_MatRqIzLSiSZHJ3CJ1d6liOFsNLBw"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.zh_CN.YnQtsvjdhNk.O/m=auth/exm=plusone/rt=j/sv=1/d=1/ed=1/am=wQE/rs=AGLTcCM3AUeqdmNhXMv7bPFaglkzmd4UXQ/cb=gapi.loaded_1" async=""></script><script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.zh_CN.YnQtsvjdhNk.O/m=plusone/rt=j/sv=1/d=1/ed=1/am=wQE/rs=AGLTcCM3AUeqdmNhXMv7bPFaglkzmd4UXQ/cb=gapi.loaded_0" async=""></script><script src="https://pagead2.googlesyndication.com/pagead/js/r20201203/r20190131/show_ads_impl_fy2019.js" id="google_shimpl"></script><script src="https://scriptol.disqus.com/embed.js" data-timestamp="1608279082862"></script><link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=www.scriptol.com" as="script" /><script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=www.scriptol.com"></script><script charset="utf-8" src="https://platform.twitter.com/js/button.63c51c903061d0dbd843c41e8a00aa5a.js"></script><style></style></head>

<body><div class="cc-revoke cc-bottom cc-animate cc-color-override-358643213" style="display: none;">Cookie Policy</div><div role="dialog" aria-live="polite" aria-label="cookieconsent" aria-describedby="cookieconsent:desc" class="cc-window cc-banner cc-type-opt-out cc-theme-block cc-bottom cc-color-override-358643213 " style=""><!--googleoff: all--><span id="cookieconsent:desc" class="cc-message">Cookies are used on this site only by publishers to make ads relevants. <a aria-label="learn more about cookies" role="button" tabindex="0" class="cc-link" href="http://cookiesandyou.com" target="_blank">Learn more</a></span><div class="cc-compliance cc-highlight"><a aria-label="deny cookies" role="button" tabindex="0" class="cc-btn cc-deny">Refuse</a><a aria-label="dismiss cookie message" role="button" tabindex="0" class="cc-btn cc-dismiss">Ignore</a></div><!--googleon: all--></div>
<div id="saat">
<script type="text/javascript" async="" src="https://apis.google.com/js/plusone.js" gapi_processed="true"></script><script id="twitter-wjs" src="https://platform.twitter.com/widgets.js"></script><script type="text/javascript">
window.google_analytics_uacct = "UA-6574971-2";
</script>
</div>
 
<div id="logo"> 
<div id="topmenu">
<span class="tentry"><a href="https://www.scriptol.com/design/" target="_top">Graphics</a></span> 
<span class="tentry"><a href="https://www.scriptol.com/html5/" target="_top">HTML 5</a></span> 
<span class="tentry"><a href="https://www.scriptol.com/javascript/" target="_top">JavaScript</a></span> 
<span class="tentry"><a href="https://www.scriptol.com/programming/" target="_top">Programming</a></span>  
<span class="tentry"><a href="https://www.scriptol.com/scripts/" target="_top">Scripts</a></span> 
<span class="tentry"><a href="https://www.scriptol.com/sql/" target="_top">SQL</a></span> 
<span class="tentry"><a href="https://www.scriptol.com/svg/" target="_top">SVG</a></span> 
<span class="tentry"><a href="https://www.scriptol.com/webmaster/" target="_top">Webmaster</a></span>
<span class="tentry"><a href="https://www.scriptol.com/software/" target="_top">Software</a></span> 
<span class="tentry"><a href="https://www.scriptol.com/mobile/" target="_top">Mobiles</a></span> 
<span class="tentry"><a href="https://www.scriptol.com/how-to/" target="_top">How to</a></span>  
</div>

<div id="logoback"><a href="https://www.scriptol.com/"><img src="/scriptol.png" alt="Scriptol.com, programming techniques" /></a></div>
<div id="dict" onclick="location.href='https://www.scriptol.com/dictionary.php'" title="Dictionary"><img src="/images/dict.png" /></div>

</div><div id="menupanel">
<div class="menuhead"><a href="https://www.scriptol.com/design/gimp/" target="_top">GIMP</a></div>

<div class="menu">     
<div class="menulist">
 <a href="https://www.scriptol.com/design/gimp/blur-edge.php" target="_top">Blur contour</a><br />
 <a href="https://www.scriptol.com/design/gimp/superimpose.php" target="_top">Superimposing</a><br />
 <a href="https://www.scriptol.com/design/gimp/fading.php" target="_top">Faded merge</a><br />
 <a href="https://www.scriptol.com/design/gimp/removing-objects.php" target="_top">Removing object </a><br />
 <a href="https://www.scriptol.com/design/gimp/clipping.php" target="_top">Clipping</a><br />
 <a href="https://www.scriptol.com/design/gimp/logo.php" target="_top">Sketch to logo</a><br />
 <a href="https://www.scriptol.com/design/gimp/tutorials.php" target="_top">Tutorials</a></div>
</div>

<div class="menu">
<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle" style="display:inline-block;width:180px;height:90px" data-ad-client="ca-pub-2681794164750401" data-ad-slot="5844506056" data-adsbygoogle-status="done"><ins id="aswift_0_expand" style="display:inline-table;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:180px;background-color:transparent;" tabindex="0" title="Advertisement" aria-label="Advertisement"><ins id="aswift_0_anchor" style="display:block;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:180px;background-color:transparent;"><iframe id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;border:0;width:180px;height:90px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="180" height="90" frameborder="0" src="https://googleads.g.doubleclick.net/pagead/ads?guci=2.2.0.0.2.2.0.0&amp;client=ca-pub-2681794164750401&amp;output=html&amp;h=90&amp;slotname=5844506056&amp;adk=3019008660&amp;adf=553028419&amp;pi=t.ma~as.5844506056&amp;w=180&amp;lmt=1608279082&amp;psa=1&amp;url=https%3A%2F%2Fwww.scriptol.com%2Fdesign%2Fgimp%2Flogo.php&amp;flash=0&amp;wgl=1&amp;tt_state=W3siaXNzdWVyT3JpZ2luIjoiaHR0cHM6Ly9hZHNlcnZpY2UuZ29vZ2xlLmNvbSIsInN0YXRlIjowfSx7Imlzc3Vlck9yaWdpbiI6Imh0dHBzOi8vYXR0ZXN0YXRpb24uYW5kcm9pZC5jb20iLCJzdGF0ZSI6MH1d&amp;dt=1608279082872&amp;bpp=8&amp;bdt=136&amp;idt=78&amp;shv=r20201203&amp;cbv=r20190131&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Da46f76b4d342bd39-22bd2b383ac5002d%3AT%3D1608268875%3ART%3D1608268875%3AS%3DALNI_MatRqIzLSiSZHJ3CJ1d6liOFsNLBw&amp;correlator=8246083005652&amp;frm=20&amp;pv=2&amp;ga_vid=602716950.1608268876&amp;ga_sid=1608279083&amp;ga_hid=1724576497&amp;ga_fc=1&amp;ga_wpids=UA-6574971-2&amp;u_tz=480&amp;u_his=2&amp;u_java=0&amp;u_h=1080&amp;u_w=1920&amp;u_ah=1040&amp;u_aw=1920&amp;u_cd=24&amp;u_nplug=3&amp;u_nmime=4&amp;adx=719&amp;ady=357&amp;biw=912&amp;bih=915&amp;scr_x=0&amp;scr_y=0&amp;oid=3&amp;pvsid=2148830262500722&amp;pem=62&amp;rx=0&amp;eae=0&amp;fc=896&amp;brdim=86%2C9%2C86%2C9%2C1920%2C0%2C945%2C1020%2C929%2C932&amp;vis=1&amp;rsz=%7C%7CoeE%7C&amp;abl=CS&amp;pfx=0&amp;fu=9224&amp;bc=31&amp;ifi=1&amp;uci=a!1&amp;fsb=1&amp;xpc=M1dzIUysmZ&amp;p=https%3A//www.scriptol.com&amp;dtd=99" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" data-google-container-id="a!1" data-load-complete="true" data-google-query-id="CNjAubuK1-0CFYGSlgodL0MPAQ"></iframe></ins></ins></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>


</div>
<div id="content" style="height: auto !important;"> 
<h1>From sketch to logo: Creating a text and image logo with GIMP</h1>
<p>Alpha to logo adds a texture to images with some fancy effects.</p>
<h2>Using Alpha to logo </h2>
<p>The texture is applied to the image on a transparent background. Transparency is what distinguishes the object to convert from the rest.<br /> 
  This tells us how to begin the design of the logo. </p>
<p align="center"><img src="https://www.scriptol.com/design/gimp/images/car-bike-demo.jpg" alt="Alpha to logo in Gimp, car and bike demo" width="795" height="186" /></p>
<p align="center">From sketch to logo... The transparency will be lost once the filter applied. </p>
<h3>1) Create a new image</h3>
<p>A window appears when you create an image. Click on "Advanced Options", then scroll down the menu "Fill with" and select "Transparency".</p>
<h3>2) Add a text</h3>
<p>Click on the letter A in the toolbox. Then select a font and size. The demo uses "Segoe Script". <br />
The text color does not matter with most filters.</p>
<h3>3) Add an image</h3>
<p>It can be drawn or imported (in a PNG file) from another editor provided it has a transparent background. If this is not the case we can still <a href="https://www.scriptol.com/design/gimp/clipping.php" target="_top">clip it</a> to extract it from the background.</p>
<h3>4) Choose a filter</h3>
<p>Click on the Filter menu and then "Alpha to Logo". Choose a filter amoung the  twenty effects offered. Here is an example of each:</p>
<p align="center"><img src="https://www.scriptol.com/design/gimp/images/alpha-logo-models.jpg" alt="Alpha to logo in Gimp, example of each filter" width="525" height="658" /></p>
<p>Some effects such as BD or Chalk can be used only on an  large enough image.</p>
<p>Each filter shows a window to  select a color and texture either for the image or the background. It is by experiencing that you can manage to produce the best effect.</p>
<h3>5) Save the image</h3>
<p>You will need to flatten it because the effects are decomposed into multiple layers. This can be done directly with the option "Merge Down", or automatically from the saving window.</p>
<p>Some filters do not work when layers are merged, you could then retrieve the image by a screen capture.</p>
<p><em>Tip</em></p>
<p>With some filters, such as Gradient bevel, if the sketch   is in a layer, the logo will be superimposed on the image under the layer. This does not work with all filters.</p>
<h2>Using  Logo Toolbox for a transparent background </h2>
<p>The script Logo Toolbox must be  downloaded and installed to appear in the menu.</p>
<p>Once installed, to display the dialog box go to File -&gt; Create -&gt; Logos (Gimpchat.com) -&gt; Logo Toolbox.</p>
<p>To have a transparent background, turn on <strong>Background Layer</strong> to None. And to have a text with a solid color rather than a texture, put  <strong>Bump Layer</strong> to None.</p>
<p><em>Tip</em></p>
<p>If your text is small (less than 100 pixels height), the result will be disastrous. The best is to create a logo in 200 pixels or more and go to Image -&gt; Scale Image, to reduce its size. You could even change the proportions with a good result. I have used this technique for the download button on this site (see the SVG section for examples). </p>
<p><em>See also </em></p>
<ul class="la">
  
  <li><a href="http://www.noupe.com/design/creative-brainstorming-50-examples-of-the-logo-design-process.html" target="_top">How logos are designed</a>, by examples. </li>
  <li><a href="https://www.scriptol.com/programming/graphic-algorithms.php" target="_top">Amazing graphics algorithms</a>.</li>
</ul>

<div class="pub" id="ad76890">
<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle" style="display: block; height: 280px;" data-ad-client="ca-pub-2681794164750401" data-ad-slot="1228452856" data-ad-format="auto" data-adsbygoogle-status="done"><ins id="aswift_1_expand" style="display:inline-table;border:none;height:280px;margin:0;padding:0;position:relative;visibility:visible;width:662px;background-color:transparent;" tabindex="0" title="Advertisement" aria-label="Advertisement"><ins id="aswift_1_anchor" style="display: block; border: none; height: 280px; margin: 0px; padding: 0px; position: relative; visibility: visible; width: 662px; background-color: transparent; overflow: visible;"><iframe id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;border:0;width:662px;height:280px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="662" height="280" frameborder="0" src="https://googleads.g.doubleclick.net/pagead/ads?guci=2.2.0.0.2.2.0.0&amp;client=ca-pub-2681794164750401&amp;output=html&amp;h=280&amp;slotname=1228452856&amp;adk=2480554906&amp;adf=4283471108&amp;pi=t.ma~as.1228452856&amp;w=662&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1608279082&amp;rafmt=1&amp;psa=1&amp;format=662x280&amp;url=https%3A%2F%2Fwww.scriptol.com%2Fdesign%2Fgimp%2Flogo.php&amp;flash=0&amp;fwr=0&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;tt_state=W3siaXNzdWVyT3JpZ2luIjoiaHR0cHM6Ly9hZHNlcnZpY2UuZ29vZ2xlLmNvbSIsInN0YXRlIjowfSx7Imlzc3Vlck9yaWdpbiI6Imh0dHBzOi8vYXR0ZXN0YXRpb24uYW5kcm9pZC5jb20iLCJzdGF0ZSI6MH1d&amp;dt=1608279082880&amp;bpp=6&amp;bdt=144&amp;idt=100&amp;shv=r20201203&amp;cbv=r20190131&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Da46f76b4d342bd39-22bd2b383ac5002d%3AT%3D1608268875%3ART%3D1608268875%3AS%3DALNI_MatRqIzLSiSZHJ3CJ1d6liOFsNLBw&amp;prev_slotnames=5844506056&amp;correlator=8246083005652&amp;frm=20&amp;pv=1&amp;ga_vid=602716950.1608268876&amp;ga_sid=1608279083&amp;ga_hid=1724576497&amp;ga_fc=0&amp;ga_wpids=UA-6574971-2&amp;u_tz=480&amp;u_his=2&amp;u_java=0&amp;u_h=1080&amp;u_w=1920&amp;u_ah=1040&amp;u_aw=1920&amp;u_cd=24&amp;u_nplug=3&amp;u_nmime=4&amp;adx=40&amp;ady=1640&amp;biw=912&amp;bih=872&amp;scr_x=0&amp;scr_y=0&amp;oid=3&amp;pvsid=2148830262500722&amp;pem=62&amp;rx=0&amp;eae=0&amp;fc=896&amp;brdim=86%2C9%2C86%2C9%2C1920%2C0%2C945%2C1020%2C929%2C889&amp;vis=1&amp;rsz=%7C%7CoeEbr%7C&amp;abl=CS&amp;pfx=0&amp;fu=9352&amp;bc=31&amp;ifi=2&amp;uci=a!2&amp;btvi=1&amp;fsb=1&amp;xpc=0LvAvsMbyv&amp;p=https%3A//www.scriptol.com&amp;dtd=105" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" data-google-container-id="a!2" data-google-query-id="CJPEubuK1-0CFcuAlgode-YB8w" data-load-complete="true"></iframe></ins></ins></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<div class="container">
<table class="social">
<tbody><tr>
 <td>
<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" style="position: static; visibility: visible; width: 63px; height: 20px;" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.96fd96193cc66c3e11d4c5e4c7c7ec97.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fwww.scriptol.com%2Fdesign%2Fgimp%2Flogo.php&amp;size=m&amp;text=From%20sketch%20to%20logo%3A%20Creating%20a%20text%20and%20image%20logo%20with%20GIMP&amp;time=1608279083170&amp;type=share&amp;url=https%3A%2F%2Fwww.scriptol.com%2Fdesign%2Fgimp%2Flogo.php"></iframe>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
 </td>
 <td>
<div id="___plusone_0" style="position: absolute; width: 450px; left: -10000px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position:absolute;top:-10000px;width:450px;margin:0px;border-style:none" tabindex="0" vspace="0" width="100%" id="I0_1608279082923" name="I0_1608279082923" src="https://apis.google.com/se/0/_/+1/fastbutton?usegapi=1&amp;count=false&amp;origin=https%3A%2F%2Fwww.scriptol.com&amp;url=https%3A%2F%2Fwww.scriptol.com%2Fdesign%2Fgimp%2Flogo.php&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.zh_CN.YnQtsvjdhNk.O%2Fam%3DwQE%2Fd%3D1%2Fct%3Dzgms%2Frs%3DAGLTcCM3AUeqdmNhXMv7bPFaglkzmd4UXQ%2Fm%3D__features__#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1608279082923&amp;_gfid=I0_1608279082923&amp;parent=https%3A%2F%2Fwww.scriptol.com&amp;pfname=&amp;rpctoken=22259559" data-gapiattached="true"></iframe></div><g:plusone count="false" data-gapiscan="true" data-onload="true" data-gapistub="true"></g:plusone>
<script type="text/javascript">
  (function() {
	var po = document.createElement('script'); po.type = 'text/javascript'; 
	po.async = true;
	po.src = 'https://apis.google.com/js/plusone.js';
	var s = document.getElementsByTagName('script')[0]; 
	s.parentNode.insertBefore(po, s);
  })();
</script>
 </td>

 <td>
<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.scriptol.com%2Fdesign%2Fgimp%2Flogo.php&amp;send=false&amp;layout=button_count&amp;width=54&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowtransparency="true"></iframe>
 </td>
 
<td>
<script src="https://platform.linkedin.com/in.js" type="text/javascript"></script>
<span class="IN-widget" data-lnkd-debug="&lt;script type=&quot;IN/Share+init&quot;&gt;&lt;/script&gt;" style="display: inline-block; line-height: 1; vertical-align: bottom; padding: 0px; margin: 0px; text-indent: 0px; text-align: center;"><span style="padding: 0px !important; margin: 0px !important; text-indent: 0px !important; display: inline-block !important; vertical-align: bottom !important; font-size: 1px !important;"><button class="IN-6d5494f8-69f0-4a9d-8c6b-3e3c3eb1b33b-1G9ISYhSF8XoOmdcl0yKDu"><xdoor-icon aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet">
      <g style="fill: currentColor">
        <rect x="-0.003" style="fill:none;" width="24" height="24"/>
        <path style="" d="M20,2h-16c-1.1,0-2,0.9-2,2v16c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2zM8,19h-3v-9h3V19zM6.5,8.8C5.5,8.8,4.7,8,4.7,7s0.8-1.8,1.8-1.8S8.3,6,8.3,7S7.5,8.8,6.5,8.8zM19,19h-3v-4c0-1.4-0.6-2-1.5-2c-1.1,0-1.5,0.8-1.5,2.2V19h-3v-9h2.9v1.1c0.5-0.7,1.4-1.3,2.6-1.3c2.3,0,3.5,1.1,3.5,3.7V19z"/>
      </g>
    </svg></xdoor-icon>Share</button></span></span>
</td> 
 
</tr>
</tbody></table>
</div>
<div id="disqus_thread"></div>
<script>
(function() { 
var d = document, s = d.createElement('script');
s.src = 'https://scriptol.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
                          

<div id="footer"> © 2011-2015  <a href="https://www.scriptol.com/design/" target="_top">Scriptol.com</a></div>
    
</div>

<div id="sea">
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-6574971-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-6574971-2');
</script>

</div>

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#1d8a8a"
    },
    "button": {
      "background": "#62ffaa"
    }
  },
  "type": "opt-out",
  "content": {
    "message": "Cookies are used on this site only by publishers to make ads relevants.",
    "dismiss": "Ignore",
    "deny": "Refuse"
  }  
})});
</script>



<ins class="adsbygoogle adsbygoogle-noablate" data-adsbygoogle-status="done" style="display: none !important;"><ins id="aswift_2_expand" style="display:inline-table;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;" tabindex="0" title="Advertisement" aria-label="Advertisement"><ins id="aswift_2_anchor" style="display:block;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;"><iframe id="aswift_2" name="aswift_2" style="left:0;position:absolute;top:0;border:0;width:undefinedpx;height:undefinedpx;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" frameborder="0" src="https://googleads.g.doubleclick.net/pagead/ads?guci=2.2.0.0.2.2.0.0&amp;client=ca-pub-2681794164750401&amp;output=html&amp;adk=1812271804&amp;adf=3025194257&amp;lmt=1608279083&amp;plat=1%3A8%2C2%3A8%2C9%3A32776%2C10%3A32%2C11%3A32%2C16%3A8388608%2C17%3A32%2C24%3A32%2C25%3A32%2C30%3A1048576%2C32%3A32%2C40%3A32&amp;format=0x0&amp;url=https%3A%2F%2Fwww.scriptol.com%2Fdesign%2Fgimp%2Flogo.php&amp;ea=0&amp;flash=0&amp;pra=7&amp;wgl=1&amp;tt_state=W3siaXNzdWVyT3JpZ2luIjoiaHR0cHM6Ly9hZHNlcnZpY2UuZ29vZ2xlLmNvbSIsInN0YXRlIjowfSx7Imlzc3Vlck9yaWdpbiI6Imh0dHBzOi8vYXR0ZXN0YXRpb24uYW5kcm9pZC5jb20iLCJzdGF0ZSI6MH1d&amp;dt=1608279082886&amp;bpp=1&amp;bdt=150&amp;idt=144&amp;shv=r20201203&amp;cbv=r20190131&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Da46f76b4d342bd39-22bd2b383ac5002d%3AT%3D1608268875%3ART%3D1608268875%3AS%3DALNI_MatRqIzLSiSZHJ3CJ1d6liOFsNLBw&amp;prev_fmts=662x280&amp;prev_slotnames=5844506056&amp;nras=1&amp;correlator=8246083005652&amp;frm=20&amp;pv=1&amp;ga_vid=602716950.1608268876&amp;ga_sid=1608279083&amp;ga_hid=1724576497&amp;ga_fc=0&amp;ga_wpids=UA-6574971-2&amp;u_tz=480&amp;u_his=2&amp;u_java=0&amp;u_h=1080&amp;u_w=1920&amp;u_ah=1040&amp;u_aw=1920&amp;u_cd=24&amp;u_nplug=3&amp;u_nmime=4&amp;adx=-12245933&amp;ady=-12245933&amp;biw=912&amp;bih=872&amp;scr_x=0&amp;scr_y=0&amp;oid=3&amp;pvsid=2148830262500722&amp;pem=62&amp;rx=0&amp;eae=2&amp;fc=896&amp;brdim=86%2C9%2C86%2C9%2C1920%2C0%2C945%2C1020%2C929%2C889&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=9224&amp;bc=31&amp;ifi=2&amp;uci=a!2&amp;fsb=1&amp;dtd=179" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" data-google-container-id="a!2" data-load-complete="true"></iframe></ins></ins></ins><iframe scrolling="no" frameborder="0" allowtransparency="true" src="https://platform.twitter.com/widgets/widget_iframe.96fd96193cc66c3e11d4c5e4c7c7ec97.html?origin=https%3A%2F%2Fwww.scriptol.com" title="Twitter settings iframe" style="display: none;"></iframe><iframe name="oauth2relay873499316" id="oauth2relay873499316" src="https://accounts.google.com/o/oauth2/postmessageRelay?parent=https%3A%2F%2Fwww.scriptol.com&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.zh_CN.YnQtsvjdhNk.O%2Fam%3DwQE%2Fd%3D1%2Fct%3Dzgms%2Frs%3DAGLTcCM3AUeqdmNhXMv7bPFaglkzmd4UXQ%2Fm%3D__features__#rpctoken=705168704&amp;forcesecure=1" tabindex="-1" aria-hidden="true" style="width: 1px; height: 1px; position: absolute; top: -100px;"></iframe><iframe id="google_osd_static_frame_7352434063582" name="google_osd_static_frame" style="display: none; width: 0px; height: 0px;"></iframe><iframe id="rufous-sandbox" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" style="position: absolute; visibility: hidden; display: none; width: 0px; height: 0px; padding: 0px; border: none;" title="Twitter analytics iframe"></iframe></body><iframe id="google_esf" name="google_esf" src="https://googleads.g.doubleclick.net/pagead/html/r20201203/r20190131/zrt_lookup.html#" data-ad-client="ca-pub-2681794164750401" style="display: none;"></iframe></html>