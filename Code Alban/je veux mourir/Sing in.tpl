{include file='C:\www\Projet\Smarty\Header.tpl' }

    <link rel="stylesheet" type="text/css" href="Sing in.css">
    <fieldset >
        <form action="Sing in.php" method="POST">
            <div class="form">
                <label for="Email">Email: </label><br>
                <input type="text" name="Email" id="Email" class="input_form" size="30" required>
            </div>

            <div class="form">
                <label for="Motdepasse">Mot de passe: </label><br>
                <input type="text" name="Motdepasse" id="Motdepasse" class="input_form" size="30" required>
            </div>
            <button>
                Sing in
            </button>
        </form>
    </fieldset>

{include file='C:\www\Projet\Smarty\Footer.tpl' }