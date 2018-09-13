<li>
    <a href="{$base_dir}modules/mymodule/mymodule_page.php" title="{l s='Click this link' mod='mymodule'}">{l s='Click me!' mod='mymodule'}</a>
</li>
<!-- Block mymodule -->
<div id="mymodule_block_left" class="block">
    <h4>{l s='Welcome!' d='Modules.MyModule'}</h4>
    <div class="block_content">
        <p>
            {if !isset($my_module_name) || !$my_module_name}
                {capture name='my_module_tempvar'}{l s='World' d='Modules.MyModule'}{/capture}
                {assign var='my_module_name' value=$smarty.capture.my_module_tempvar}
            {/if}
            {l s='Hello %1$s!' sprintf=$my_module_name d='Modules.MyModule'}
        </p>
        <ul>
            <li><a href="{$my_module_link}"  title="{l s='Click this link' d='Modules.MyModule'}">{l s='Click me!' d='Modules.MyModule'}</a></li>
        </ul>
    </div>
</div>
<!-- /Block mymodule -->