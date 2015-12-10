
    {include file='header.tpl'}
    {foreach from=$sections item=item key=key}
        {if $item.shown == 1}
            {assign var="section" value=$item.sectionname}
            {include file="sections/{$section|lower}/{$section|lower}.tpl"}
        {/if}
    {/foreach}
    {include file='footer.tpl'}
    </body>
</html>