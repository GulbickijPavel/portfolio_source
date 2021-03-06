    <section class="jumbotron" id="about">
        <div class="about-content">
            <h2>{translation langId="40"}</h2>
            <hr>
            {foreach from=$about item=item key=key}
        <img class="my-photo" alt="Pavel Gulbickij photo" src="{$item.userphoto}">
            {assign var="livingplace" value="{$item.livingplace}"}
            <div class="about"> 
                <span>
                    {$item.name} {$item.surname}<br>
                    {translation langId="3"}: {translation langEn="{$livingplace}"}<br>
                    {translation langId="6"}: {$item.phone} <br>
                    {translation langId="4"}: <a href="mailto:{$item.email}">{$item.email}</a> <br>                   
                </span>
            </div>
            <article class="ar-about">
                {if $lang == 'en'} 
                    {$item.infoEn}
                {/if}
                {if $lang == 'lt'} 
                    {$item.infoLt}
                {/if}
                {if $lang == 'ru'} 
                    {$item.infoRu}
                {/if}
            </article>
            {/foreach}
        </div> 
    </section>  
