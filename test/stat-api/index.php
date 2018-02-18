<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Test</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Didact+Gothic">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/styles/default.min.css">
        <link type="text/css" href="test.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/highlight.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js"></script>
		<script src="test.js"></script>
    </head>
    <body>
        <div class="main-container container" style="margin-top: 20px;">        
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1" style="width: 150px;">API-Key</span>
                <input type="text" class="form-control" id="apikey">
                <button id="anet-icon" class="btn input-group-addon btn-secondary" style="padding: 5px" type="button" data-placement="bottom" title="account.arena.net" onclick="window.open('https://account.arena.net/applications')"><img width="20" height="20" src="anet.png"></button>                    
            </div>
            <div class="input-group" style="margin-top: 10px">
                <span class="input-group-addon" id="basic-addon1" style="width: 150px;">Character-Name</span>
                <input type="text" class="form-control" id="charactername">
            </div>
            <div class="btn-group" data-toggle="buttons" style="margin-top: 10px">
                <label value="pve" class="rb-gm btn btn-secondary active">
                    <input type="radio" name="gamemode" id="wvw" autocomplete="off" checked> PvE
                </label>
                <label value="wvw" class="rb-gm btn btn-secondary">
                    <input type="radio" name="gamemode" id="pve" autocomplete="off"> WVW
                </label>
            </div>
            <div class="btn-group" data-toggle="buttons" style="margin-top: 10px; margin-left: 5px;">
                <label value="A" class="rb-w btn btn-secondary active">
                    <input type="radio" name="weapon" id="wvw" autocomplete="off" checked> Weapon-Set A
                </label>
                <label value="B" class="rb-w btn btn-secondary">
                    <input type="radio" name="weapon" id="pve" autocomplete="off"> Weapon-Set B
                </label>
            </div>
            <div class="btn-group" data-toggle="buttons" style="margin-top: 10px; margin-left: 5px;">
                <label class="btn btn-secondary feature active" value="stats">
                    <input type="checkbox" autocomplete="off"> Stats
                </label>
                <label class="btn btn-secondary feature" value="equipment">
                    <input type="checkbox" autocomplete="off"> Equipment
                </label>
                <label class="btn btn-secondary feature" value="traitlines">
                    <input type="checkbox" autocomplete="off"> Trait Lines
                </label>
                <label class="btn btn-secondary feature" value="debug">
                    <input type="checkbox" autocomplete="off"> Debug
                </label>
            </div>
            <div class="btn-group" data-toggle="buttons" style="margin-top: 10px; margin-left: 5px;">
                <label value="Fire" class="rb-a btn btn-secondary active">
                    <input type="radio" name="attunement" autocomplete="off" checked> Fire
                </label>
                <label value="Water" class="rb-a btn btn-secondary">
                    <input type="radio" name="attunement" autocomplete="off"> Water
                </label>
                <label value="Air" class="rb-a btn btn-secondary">
                    <input type="radio" name="attunement" autocomplete="off"> Air
                </label>
                <label value="Earth" class="rb-a btn btn-secondary">
                    <input type="radio" name="attunement" autocomplete="off"> Earth
                </label>
            </div>
            <button style="margin-top: 10px" type="button" class="btn btn-secondary" id="go">Go</button>
            <!-- <div style="margin-top: 10px" class="progress">
                <div id="progress-bar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>                <span id="progress-label"></span>
            </div> -->
            <pre class="code">
                <code id="out" style="padding: 10px; display: none;"></code>
            </pre>
            <pre id="error" style="padding: 10px; display: none;"></pre>
        </div>
    </body>
</html>