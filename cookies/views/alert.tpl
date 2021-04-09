

{if {$cookie} eq false}
<div id="alert-cookies" class="alert-danger">

<h2 style="color:#ffffff" style="position:center">Votre choix</h2>
    <p style="color:#ffffff" class="text-banner">
        {$message}
    </p>

    <p>
        <a href="{$test}" style="width:200px" class="btn btn-info">Tout accepter</a><br><br>
<a href="" style="width:200px" class="btn btn-info">Tout refuser</a><br><br>
<a href="" style="width:200px" class="btn btn-info"> Personnaliser</a>  
    </p>
</div>
{/if}

<style>
    #alert-cookies {
		z-index:5004;
        position: fixed;
        bottom: 0;
        left: 0%;
        width: 250px;
        background:black;
        padding: 1em;
    }
</style>