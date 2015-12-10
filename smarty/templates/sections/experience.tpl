
        <section class="jumbotron" id="experience">
            <div class="experience-content">
                <h2>{translation langEn="Experience"}</h2>
                <hr>
                <ul class="bxslider">
                {foreach from=$experience item=item key=key}
                <li>
                    <h3>{$item.company}</h3>
                    <div class="experience-info"> 
                        {if $item.logo}  
                        <div class="company-logo">
                            <img src="{$item.logo}" alt="{$item.logo}">
                        </div>
                        {/if}
                        <span>
                        {translation langEn="Address"} : {$item.address}<br>
                        {translation langEn="Website"}: <a href="{$item.url}">{$item.url}</a><br>
                        {translation langEn="Work period"}:  - {if $item.periodend !="now"}{$item.periodend}{/if} {if $item.periodend =="now"}{translation langEn="now"}{/if}<br>
                        {translation langEn="Position"}: {translation langEn=$item.position}<br>
                        </span>
                    </div>
                   
                    {if $lang == 'en'}
                    <div class="experience-desc">{$item.descriptionEn}</div> 
                    {/if}
                    {if $lang == 'ru'}
                    <div class="experience-desc">{$item.descriptionRu}</div> 
                    {/if}
                    {if $lang == 'lt'}
                    <div class="experience-desc">{$item.descriptionLt}</div> 
                    {/if}
                </li>
                {/foreach}
                </ul>
            </div>   
        </section>
