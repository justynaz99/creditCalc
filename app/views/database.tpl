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
            DATABASE
        </h1>
    </div>


    <div style="width:90%; margin: 2em auto;">
        <div id="dataBase">
            <table class="pure-table pure-table-bordered">
                <thead>
                <tr>
                    <th>Amount</th>
                    <th>Duration</th>
                    <th>Installment</th>
                    <th>Result</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>


                {foreach from=$calc item=data}
                    <tr>
                        <td>{$data["amount"]}</td>
                        <td>{$data["duration"]}</td>
                        <td>{$data["installment"]}</td>
                        <td>{$data["rate"]}</td>
                        <td>{$data["date"]}</td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>

    </div>

{/block}

{block name=footer}

    <div class="footer">
        Copyright &copy; 2020 - 2020
    </div>

{/block}



