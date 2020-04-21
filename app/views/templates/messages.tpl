{if $messages->isError()}
    <div class="messages">
        <ol>
            {foreach $messages->getErrors() as $err}
                {strip}
                    <li>{$err}</li>
                {/strip}
            {/foreach}
        </ol>
    </div>
{/if}

