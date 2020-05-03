{extends file="main.tpl"}

{block name=content}

<div class="pure-menu pure-menu-horizontal">
    <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
        <li class="pure-menu-item pure-menu-selected"><a href="{$conf->action_url}" class="pure-menu-link">Calculator</a></li>
        <li class="pure-menu-item"><a href="{$conf->action_url}sqlBaseShow" class="pure-menu-link">Database</a></li>
        <li class="pure-menu-item"><a href="{$conf->action_url}logout" class="pure-menu-link">Logout</a></li>
    </ul>
</div>

<div class="banner">
    <h1 class="banner-head">
        Your simple credit calculator
    </h1>
</div>


<div style="width:90%; margin: 2em auto;">
	
<div id="calc">
    <form action= "{$conf->action_root}calcCompute" method="post" class="pure-form pure-form-stacked">
        <fieldset>
            <label for ="amount" style="letter-spacing: 1px">Amount of the credit: </label>
            <input id ="amount" type="text" name="amount"  value="{$form->amount}" /><br>
            <lable for ="duration" style="letter-spacing: 1px">Duration of the credit in years:  </lable>
            <input id ="duration" type="text" name="duration"  value="{$form->duration}" /><br>
            <lable for ="installment" style="letter-spacing: 1px">Amount of installments in one year: </lable>
            <select id="installment" name="installment">
                <option value="4">4</option>
                <option value="8">8</option>
                <option value="10">10</option>
                <option value="12">12</option>
            </select><br/>
        </fieldset>
        <button class="pure-button pure-button-active" style="letter-spacing: 1px">Calculate</button>
    </form>


    {include file='messages.tpl'}

    {if isset($result->result)}
        <div class="result" >
            Rate: {$result->result} PLN
        </div>
    {/if}


</div>

</div>

{/block}

{block name=footer}

<div class="footer">
    Copyright &copy; 2020 - 2020
</div>

{/block}



