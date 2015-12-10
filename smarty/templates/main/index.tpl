
    {include file='smarty/templates/main/header.tpl'}
    {foreach from=$sections item=item key=key}
        {if $item.shown == 1}
            {assign var="section" value=$item.sectionname}
            {include file="smarty/templates/sections/{$section|lower}.tpl"}
        {/if}
    {/foreach}
    {include file='smarty/templates/main/footer.tpl'}
    </body>
</html>