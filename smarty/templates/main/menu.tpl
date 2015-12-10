
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
                    <li>
                        <a href="#contacts" class="menu_item">{translation langEn= "Contacts"}</a>
                  </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    {foreach from = $language item=item key=key}
                    {if $item.keyword == $lang}
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <img alt="{$item.keyword}" src="{$item.image}">&nbsp; {$item.langNative}&nbsp;<span class="caret"></span></a>
                    {/if}
                    {/foreach}
                    <ul class="dropdown-menu" role="menu">
                        {foreach from = $language item=item key=key}
                        {if $item.keyword != $lang}
                        <li class="lang-img"><a href="{$item.url}" id="lang-{$item.keyword}" data-toggle="tooltip" data-placement="bottom" title="{$item.keyword}" data-original-title="{$item.keyword}"><img alt="{$item.keyword}" src="{$item.image}"><span>{$item.langNative} </span></a></li>
                        {/if}
                        {/foreach}
                    </ul>
                </li>
              </ul>  
            </div>
          </div>
        </div>