<script type="text/javascript" src="js/masked_input_1.4.1-min.js"></script>

<script type="text/javascript">
window.onload = function() {
  var phones = document.getElementsByClassName('phone-in');
  for(var i = 0; i < phones.length; i++) {
     phoneMaskActivate(phones.item(i));
  }
};

function phoneMaskActivate(phone) {
   MaskedInput({
     elm: phone,
     format: '+375 (__) ___-__-__',
     separator: '+375 ()-'
   });
}
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter33195818 = new Ya.Metrika({
                    id:33195818,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/33195818" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Google.Analytics -->
<script type='text/javascript'>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-72774730-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- /Google.Analytics -->


<!-- Установите на каждой странице вашего сайта этот код прямо перед закрывающим тегом </body>: -->
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'OSc79gsAag';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();
</script>
<!-- {/literal} END JIVOSITE CODE -->
<!-- Eсли вы не уверены, как это сделать – проконсультируйтесь с разработчиком вашего сайта. -->