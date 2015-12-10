
        <div class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="#">Pavel Gulbickij</a>
            </div>
            <div class="navbar-collapse collapse" id="navbar-main">
              <ul class="nav navbar-nav">
                    {foreach from=$sections item=item key=key}
                    {if $item.shown == 1}
                    <li>
                        <a href="#{$item.name}" class="menu_item">{translation langEn={$item.sectionname}}</a>
                    </li>
                    {/if}
                    {/foreach}
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{if $lang == 'lt'}<img alt="lt" src="images/lt.gif">{/if} {if $lang == 'ru'}<img alt="ru" src="images/ru.png">{/if} {if $lang == 'en'} <img alt="en" src="images/en.png"> {/if} {translation langId="64"}&nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">   
                     {if ($is_admin)}
                      <li><a><img alt="image" class="settings-img" src="images/settings.png"></a></li>
                     <li><a href="/portfolio/portfolio.lt/logout.php" class="btn btn-danger log-out">{translation langEn="Log-out"}</a></li>
                    {/if}
                    {if $lang == 'en'}
                    <li class="lang-img"><a href="/portfolio/portfolio.lt/lt" data-toggle="tooltip" data-placement="bottom" title="Lt" data-original-title="Lt"><img alt="lt" src="images/lt.gif"><span>Lietuvių</span></a></li>
                    <li class="lang-img"><a href="/portfolio/portfolio.lt/ru" id="lang-ru" data-toggle="tooltip" data-placement="bottom" title="Ru" data-original-title="Ru"><img alt="ru" src="images/ru.png"><span>Русский</span></a></li>
                    {/if}
                    {if $lang == 'ru'}
                    <li class="lang-img"><a href="/portfolio/portfolio.lt/en" id="lang-en" data-toggle="tooltip" data-placement="bottom" title="En" data-original-title="En"><img alt="en" src="images/en.png"><span>English</span></a></li>
                    <li class="lang-img"><a href="/portfolio/portfolio.lt/lt" data-toggle="tooltip" data-placement="bottom" title="Lt" data-original-title="Lt"><img alt="lt" src="images/lt.gif"><span>Lietuvių</span></a></li>
                    {/if}
                    {if $lang == 'lt'}  
                    <li class="lang-img"><a href="/portfolio/portfolio.lt/ru" id="lang-ru" data-toggle="tooltip" data-placement="bottom" title="Ru" data-original-title="Ru"><img alt="ru" src="images/ru.png"><span>Русский</span></a></li>
                    <li class="lang-img"><a href="/portfolio/portfolio.lt/en" id="lang-en" data-toggle="tooltip" data-placement="bottom" title="En" data-original-title="En"><img alt="en" src="images/en.png"><span>English</span></a></li>
                    {/if}
                   
                    </ul>
                </li>
              </ul>  
            </div>
          </div>
        </div>