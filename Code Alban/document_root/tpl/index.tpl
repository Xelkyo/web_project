{include file='C:\www\document_root\tpl\header.tpl' }

    The forest of Middle Earth :
    {foreach from=$table key=forest item=p}
        {if $p == 4}
            and
        {elseif $p == 1}
        {else}
            ,
        {/if}
        {$forest}
    {/foreach}

{include file='C:\www\document_root\tpl\footer.tpl' }