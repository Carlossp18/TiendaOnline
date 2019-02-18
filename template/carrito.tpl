<style>
    #cesta{
        border-radius: 15px;
        background-color: yellow;
        position: absolute;
        top: 70px;
        left: 75%;
        width: 25%;
        height: 200px;
        padding: 10px;
    }
</style>
<div id="cesta">
    Holaaaaaaaaaaaaaaa
    {foreach from=$cesta item=item}
        {$item}
    {/foreach}
</div>