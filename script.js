//confirm mdp
var mdp1 = document.querySelector('.mdp1');
var mdp2 = document.querySelector('.mdp2');
mdp2.onkeyup = function()
{
    messag_error = document.querySelector('.message_error');
    if (mdp1.value != mdp2.value)
    {
        messag_error.innerText = "Les mots de passes ne sont pas conformes";
    }
    else
    {
        messag_error.innerText = "";
    }
}