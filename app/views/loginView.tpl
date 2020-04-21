{extends file="main.tpl"}

{block name=content}

    <div style="width:90%; margin: 2em auto;">

        <form action="{$conf->action_url}login" method="post"  class="pure-form pure-form-stacked">
            <legend>Login</legend>
            <fieldset>
                <label for="id_login">Username: </label>
                <input id="id_login" type="text" name="login"/>
                <label for="id_pass">Password: </label>
                <input id="id_pass" type="password" name="pass" /><br />
                <input type="submit" value="Sign in" class="pure-button pure-button-active"/>
            </fieldset>
        </form>

        {include file='messages.tpl'}

    </div>

{/block}