<!-- Block mymodule -->
<div id="mymodule_block_home" class="block">
    <h3>{$my_module_message}</h3>
    <div class="block_content">
        <p>Hello,
            {if isset($my_module_name) && $my_module_name}
                {$my_module_name}
            {else}
                World
            {/if}
        </p>
        <ul>
            <li><a href="{$my_module_link}" title="Click this link">Click me!</a></li>
        </ul>

    </div>
</div>
<!-- /Block mymodule -->